<?php
session_start();
ob_start();
$donnees = get_infos();
include '../vue/header.php';
ob_end_flush();
?>
