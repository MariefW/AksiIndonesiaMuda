<?php

include_once("Sessions.php") ;
class Functions extends Session {
  private $db;

  function __construct(){

        // require_once'database.php';
        include 'database.php';

        session_start();
        $this->db = $dbConn;
  }

  function jumlPost(){
    $stmt = $this->db->prepare("SELECT * FROM blogs");
    $stmt->execute();
    $var = mysql_num_rows($stmt);
    var_dump($var);
  }

  function fetchdana(){
    $stmt = $this->db->prepare("SELECT * FROM totaldana");
    $stmt->execute();
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
      echo number_format( $result['dana'],0,",","." );
    }
  }

  function updateDana(){
    try {
      $stmt = $this->db->prepare("UPDATE totaldana SET dana=:dana WHERE id='1'");
      $stmt->bindparam(':dana', $_POST["dana"], PDO::PARAM_INT);
      $stmt->execute();
      // $data_user = $stmt->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
      echo '{"error":{"text":'. $e->getMessage() .'}}';
      return false;
    }
  }

  function fetchAll($table, $column = null, $order = "id ASC"){
      if($column != null) {
          if(is_array($column)){
              $columns = implode(",",$column);
          }
          $result = $this->db->query("SELECT {$columns} FROM {$table} ORDER BY {$order}");
      }else{
          $result = $this->db->query("SELECT * FROM {$table} ORDER BY {$order}");
      }
      return $result->fetchAll(PDO::FETCH_ASSOC);
  }

  function rowCount($table){
      return $this->db->query("SELECT * FROM {$table}")->rowCount();
  }

  function signIn($username, $password, $hash = 'sha256'){
      try{
          $hash_password = hash($hash, $password);
          $stmt = $this->db->prepare("SELECT * FROM users WHERE username=:var1 AND password=:var2");
          $stmt->bindParam("var1", $username,PDO::PARAM_STR) ;
          $stmt->bindParam("var2", $hash_password,PDO::PARAM_STR) ;
          $stmt->execute();
          $data_user = $stmt->fetch(PDO::FETCH_OBJ);
          if($stmt->rowCount() > 0){
              $data_session = array("login" => true, "fullname" => $data_user->fullname, "userType" => $data_user->userType);
              $this-> createSession($data_session);

              return array("success" => true, "error" => '');
          }else{
              return array("success" => false, "error" => 'Kombinasi Username dan Password salah');
          }
      }catch(PDOException $e){
          echo '{"error":{"text":'. $e->getMessage() .'}}';
          return false;
      }
  }

  function signOut(){
      $this->deleteSession();
      return true;
  }

  function createpost($judul="", $isi="", $tanggal="", $gambar="",$tmp_dir="",$imgSize=""){
    $upload_dir = "gambar2/";
    $imgExt = strtolower(pathinfo($gambar,PATHINFO_EXTENSION));
    // $valid_extensions = array('jpeg', 'jpg', 'png', 'gif');
    $userpic = rand(1000,1000000).".".$imgExt;

    $judul = filter_var($judul, FILTER_SANITIZE_STRING,FILTER_SANITIZE_SPECIAL_CHARS );
    $isi = filter_var($isi, FILTER_SANITIZE_SPECIAL_CHARS);
    $tanggal = filter_var($tanggal, FILTER_SANITIZE_SPECIAL_CHARS);
    $gambar = filter_var($gambar, FILTER_SANITIZE_SPECIAL_CHARS);

    move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    // if(in_array($imgExt, $valid_extensions)){
    //     // Check file size '5MB'
    //     if($imgSize < 5000000)    {
    //      move_uploaded_file($tmp_dir,$upload_dir.$userpic);
    //     }
    //     else{
    //      $errMSG = "Sorry, your file is too large.";
    //     }
    //    }
    //    else{
    //     $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    //    }


    $stmt = $this->db->prepare("INSERT INTO blogs(judul,isi,tanggal,gambar) VALUES(:judul, :isi, :tanggal, :gambar)");
    $stmt->bindparam(':judul', $judul, PDO::PARAM_STR);
    $stmt->bindparam(':isi', $isi, PDO::PARAM_STR);
    $stmt->bindparam(':tanggal', $tanggal, PDO::PARAM_STR);
    $stmt->bindparam(':gambar', $userpic);
    if ($stmt->execute()) {
      ?>
      <script>
        alert("Blog berhasil dibuat");
        window.location.href='daftar-blog.php';
      </script>
      <?php
    }else {
      ?>
      <script>
        alert("Blog gagal dibuat");
      </script>
      <?php
    }
    // header('Location: index.php');
    // echo "Postingan berhasil";
    // alert("Anda berhasil membuat postingan");
    // exit();
  }

  function deletepost($id){
    $stmt_select = $this->db->prepare('SELECT gambar FROM blogs WHERE id =:id');
    $stmt_select->execute(array(':id'=>$_GET['id']));
    $imgRow=$stmt_select->fetch(PDO::FETCH_ASSOC);
    unlink("gambar2/".$imgRow['gambar']);

    $stmt = $this->db->prepare("DELETE FROM blogs WHERE id=:id");
    $stmt->execute(array(':id'=>$id));
    header('Location: daftar-blog.php');
    exit();

  }
}

 ?>
