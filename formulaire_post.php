<?php $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'gj7b!17LA');
// $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');


  // $req = $bdd->prepare('INSERT INTO articles SET id_img=?, nom=?, description=?, grosse_description=?');
  // $req->execute([$_POST['id_img'], $_POST['nom'],$_POST['description'], $_POST['grosse_description']]);
?>

<?php
    function transfert(){

        $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'gj7b!17LA');
        // $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');
        $img_taille = $_FILES['img']['size'];
        $img_type = $_FILES['img']['type'];
        $img_nom  = $_FILES['img']['name'];
        var_dump($img_nom);
        var_dump($img_type);
        var_dump($img_taille);

       $req =$bdd->prepare("INSERT INTO image (nom_img, poids, type) VALUES (:nom_img, :poids, :type)");
       $req->execute(array(
        'nom_img'=> $img_nom,
        'poids'=>$img_taille,
        'type'=>$img_type ));
    }
?>

<?php
    transfert();
     ?>
