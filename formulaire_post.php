<?php
require('header.php');
include('bdd.php');
include('upload_img.php');


$reponse=$bdd->query('SELECT MAX(id) as img_id FROM image');
$donnees=$reponse->fetch();

// if (empty($_POST['nom']) AND empty($_POST['description']) AND empty($_POST['grosse_description'])){
  // header('Location: formulaire.php');
  // echo 'Veuillez remplir tous les champs';
// } else{

  $req = $bdd->prepare('INSERT INTO articles SET id_img=?, nom=?, description=?, grosse_description=? ');
  $req->execute([$donnees['img_id'],$_POST['nom'],$_POST['description'], $_POST['grosse_description']]);
    header('Location: index.php');
    // echo 'ok';
  // }

?>
