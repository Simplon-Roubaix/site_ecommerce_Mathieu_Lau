<?php
ob_start();
if(!isset($_SESSION))
   {
       session_start();
   } 
$donnees = get_infos();
include '../vue/header.php';
ob_end_flush();
?>
