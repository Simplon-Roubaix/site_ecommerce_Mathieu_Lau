<?php
 // envoie le message a la bdd
 $pseudo=$_POST['pseudo'];
 $pass=$_POST['password'];
 $password=sha1($pass);
 include('bdd.php');
 $req = $bdd->prepare('INSERT INTO Connexion (pseudo, password) VALUES(:pseudo, :password)');
 $req->execute(array(
    'pseudo' => $pseudo,
    'password'=> $password
    ));

    header('Location: connexion.php');
    ?>
