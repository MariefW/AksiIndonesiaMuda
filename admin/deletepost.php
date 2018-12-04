<?php
    include_once("../config/Functions.php");
    $functions = new Functions();
    
    $id=$_GET['id'];
    $resultDelete = $functions->deletepost($id);
 ?>
