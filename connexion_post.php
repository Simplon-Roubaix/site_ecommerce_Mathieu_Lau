<?php
session_start();
ob_start();
 ?>

<?php
include('bdd.php');

$req=$bdd->prepare('SELECT * FROM Connexion WHERE password=:password and pseudo=:pseudo');
$password=$_POST['password'];
$pseudo=$_POST['pseudo'];
// $password=sha1($pass);

$req->execute(array(
  'password'=>$password,
  'pseudo'=>$pseudo
));

$donnees=$req->fetch();

if ($password ==$donnees['password'] and $pseudo==$donnees['pseudo']){
  $_SESSION['pseudo']=$pseudo;
  header('Location: formulaire.php ');
}
else{
 header('Location: connexion.php');
}
ob_end_flush();
 ?>
