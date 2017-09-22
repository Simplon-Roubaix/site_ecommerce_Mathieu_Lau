<?php
session_start();

include('../modele/data.php');
include('upload_img.php');
$donnees=max_id_img();
var_dump($donnees);
// if (empty($_POST['nom']) AND empty($_POST['description']) AND empty($_POST['grosse_description'])){
  // header('Location: formulaire.php');
  // echo 'Veuillez remplir tous les champs';
// } else{
envoie_article($donnees,$_POST);

include'index.php';
    // echo 'ok';
  // }
?>
