<?php
session_start();
ob_start();
include('../modele/data.php');
$pseudo=$_POST['pseudo'];
$pass=$_POST['password'];
$password=sha1($pass);
$donnees=comparaison_mdp($password,$pseudo);
if ($password ==$donnees['password'] and $pseudo==$donnees['pseudo']){
  $_SESSION['pseudo']=$pseudo;
  include'formulaire.php';
}
else{
 include'enregistrement.php';
};
ob_end_flush();
