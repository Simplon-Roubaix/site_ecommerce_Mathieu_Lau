<?php
      include('../modele/data.php');
        $img_taille = $_FILES['img']['size'];
        $img_type = $_FILES['img']['type'];
        $img_nom  = $_FILES['img']['name'];
          var_dump($img_nom);
        envoie_img($img_nom, $img_taille, $img_type);
  //   if (isset($_FILES['img']) AND $_FILES['img']['error'] == 0)
  // {
  //         if ($_FILES['img']['size'] <= 1000000)
  //         {
  //                 $infosfichier = pathinfo($_FILES['img']['name']);
  //                 $extension_upload = $infosfichier['type'];
  //                 $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
  //                 if (in_array($extension_upload, $extensions_autorisees))
  //                 {
  //                   move_uploaded_file($_FILES['img']['tmp_name'], 'img/'. ($_FILES['img']['name']));
  //                   echo "L'envoi a bien été effectué !";
  //                 }
  //         }else{
  //           echo "L'envoi a echoué!";
  //         }
  // }
?>
