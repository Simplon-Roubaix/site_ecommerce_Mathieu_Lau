<?php
 // envoie le message a la bdd
 $pseudo=$_POST['pseudo'];
 $pass=$_POST['password'];
 $password=sha1($pass);
 include('../modele/data.php');
 if(isset($pseudo) AND isset($password)){
   $pseudo=htmlspecialchars($pseudo);
   $password=htmlspecialchars($password);
   envoie_enregistrement($pseudo, $password);
   include('connexion.php');
 }else{
   echo "Veuillez entrer un pseudo et un mot de passe valide ";
 }

    ?>
