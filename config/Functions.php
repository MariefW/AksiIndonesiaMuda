<?php

include_once("Sessions.php") ;
class Functions extends Session {
  private $db;

  function __construct(){
        session_start();
        include_once("database.php");
        $this->db = $dbConn;
  }

  function fetchdana(){
    $stmt = $this->db->prepare("SELECT * FROM totaldana");
    $stmt->execute();
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
      echo number_format( $result['dana'],0,",","." );
    }
    // $result = $this->db->query("SELECT * FROM totaldana");
    // return $result->fetchdana(PDO::FETCH_ASSOC);
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

  function fetchAll($table, $column = null, $order = "id DESC"){
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
}


 ?>
