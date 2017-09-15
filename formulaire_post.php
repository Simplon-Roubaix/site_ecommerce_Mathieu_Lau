<?php $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'gj7b!17LA');


  $req = $bdd->prepare('INSERT INTO articles SET id_img=?, nom=?, description=?, grosse_description=?');
  $req->execute([$_POST['id_img'], $_POST['nom'],$_POST['description'], $_POST['grosse_description']]);



?>
