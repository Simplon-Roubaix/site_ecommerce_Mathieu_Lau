<?php
 // envoie le message a la bdd
 $pseudo=$_POST['pseudo'];
 $pass=$_POST['password'];
 $password=sha1($pass);
 include('../modele/data.php');
 envoie_enregistrement($pseudo, $password);
 include('connexion.php')
    ?>
