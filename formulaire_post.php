<?php $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');


  $req = $bdd->prepare('INSERT INTO articles SET id_img=?, nom=?, description=?, grosse_description=?');
  $req->execute([$_POST['id_img'], $_POST['nom'],$_POST['description'], $_POST['grosse_description']]);

// transfert image
  function transfert(){
          $ret        = false;
          $img_taille = 0;
          $img_type   = '';
          $img_nom    = '';
          $taille_max = 250000;
          $ret        = is_uploaded_file($_FILES['img']['tmp_name']);

          if (!$ret) {
              echo "Problème de transfert";
              return false;
          } else {
              // Le fichier a bien été reçu
              $img_taille = $_FILES['img']['size'];

              if ($img_taille > $taille_max) {
                  echo "Trop gros !";
                  return false;
              }

              $img_type = $_FILES['img']['type'];
              $img_nom  = $_FILES['img']['name'];
          }
         $req = "INSERT INTO image (" .
                                 "nom_img, poids, type, alt " .
                                 ") VALUES (" .
                                 "'" . $img_nom . "', " .
                                 "'" . $img_taille . "', " .
                                 "'" . $img_type . "', " .
                                 "'" . $img_blob . "') ";
         $ret = mysql_query ($req) or die (mysql_error ());
         return true;
      }
?>
