<?php
ob_start();
session_start();
include('../modele/data.php');
include('upload_img.php');
$donnees=max_id_img();


// if (empty($_POST['nom']) AND empty($_POST['description']) AND empty($_POST['grosse_description'])){
  // header('Location: formulaire.php');
  // echo 'Veuillez remplir tous les champs';
// } else{
envoie_article($donnees,$_POST);

include'index.php'
    // echo 'ok';
  // }
ob_end_flush();
?>
