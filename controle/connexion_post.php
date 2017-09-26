<?php
session_start();
ob_start();
include('../modele/data.php');
$pseudo=strtolower($_POST['pseudo']);
$pass=$_POST['password'];
$password=sha1($pass);
$donnees=comparaison_mdp($password,$pseudo);
if ($password ==$donnees['password'] and $pseudo==$donnees['pseudo']){
  $_SESSION['pseudo']=$pseudo;
  include'formulaire.php';
}
else{
 $_SESSION['erreur']["connexion"]="erreur";
 include'connexion.php';
};
ob_end_flush();
