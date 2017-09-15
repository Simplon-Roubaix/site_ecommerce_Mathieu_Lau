<?php
    function transfert(){

        // $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'gj7b!17LA');
        $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');
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
