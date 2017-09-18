<?php
    function transfert(){
      include('bdd.php');
        $img_taille = $_FILES['img']['size'];
        $img_type = $_FILES['img']['type'];
        $img_nom  = $_FILES['img']['name'];
    }
    if (isset($_FILES['img']) AND $_FILES['img']['error'] == 0)
  {
          if ($_FILES['img']['size'] <= 1000000)
          {
                  $infosfichier = pathinfo($_FILES['img']['name']);
                  $extension_upload = $infosfichier['type'];
                  $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                  if (in_array($extension_upload, $extensions_autorisees))
                  {
                    $req =$bdd->prepare("INSERT INTO image (nom_img, poids, type) VALUES (:nom_img, :poids, :type)");
                    $req->execute(array(
                      'nom_img'=> $img_nom,
                      'poids'=>$img_taille,
                      'type'=>$img_type ));
                    move_uploaded_file($_FILES['img']['tmp_name'], 'img/'. ($_FILES['img']['name']));
                    echo "L'envoi a bien été effectué !";
                  }
          }else{
            echo "L'envoi a echoué!";
          }
  }
?>

<?php
    transfert();
     ?>
