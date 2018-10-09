<?php

class Functions{
  private $db;

  function __construct(){
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

  // function rowCount($table){
  //     return $this->db->query("SELECT * FROM {$table}")->rowCount();
  // }
}

 ?>
