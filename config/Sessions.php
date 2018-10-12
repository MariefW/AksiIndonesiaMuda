<?php

class Session {
      private $db;

      function deleteSession($key = null){
          if($key == null)
              session_destroy();
          return true;
      }

      function createSession($sessions = array()){
          $_SESSION["id"] = session_create_id();
          foreach ($sessions as $key => $value) {
              $_SESSION[$key] = $value;
          }
          return true;
      }

      function getSession($key = null){
          if($key == null) {
              throw new Exception("Parameter key session tidak ada", 1);
              return false;
          }

          return $_SESSION[$key];

      }

      function checkSession($key){
          if($key == null)
              throw new Exception("Session Key tidak didefinisakn", 1);

          return isset($_SESSION[$key]) ? true : false ;
      }
}

 ?>
