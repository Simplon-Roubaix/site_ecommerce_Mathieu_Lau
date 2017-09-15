<?php $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');


  $req = $bdd->prepare('INSERT INTO articles SET id_img=?,  nom=?, description=?, grosse_description=?');
  $req->execute([6, $_POST['nom'],$_POST['description'], $_POST['grosse_description']]);



?>
