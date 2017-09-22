<?php
session_start();
ob_start();
 ?>

<?php
include('../modele/data.php');
$pseudo=$_POST['pseudo'];
$pass=$_POST['password'];
$password=sha1($pass);
$donnees=comparaison_mdp($_POST)

if ($password ==$donnees['password'] and $pseudo==$donnees['pseudo']){
  $_SESSION['pseudo']=$pseudo;
  include'../vue/formulaire.php'
}
else{
 include'../vue/connexion.php'
}
ob_end_flush();
 ?>
