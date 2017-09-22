<?php
session_start();
ob_start();
include '../modele/data.php';
$donnees=  get_infos();
include '../vue/header.php';
ob_end_flush();
?>
