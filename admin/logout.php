<?php
include_once("../config/Functions.php");
$functions = new Functions();
if($functions->signOut())
{
    header("Location: login.php");
    exit();
}
?>
