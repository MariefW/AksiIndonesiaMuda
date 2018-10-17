<?php
include_once("../config/header.php");
if($functions->signOut())
{
    header("Location: login.php");
    exit();
}
?>
