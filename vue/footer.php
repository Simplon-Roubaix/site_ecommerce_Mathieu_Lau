<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <footer>

      <?php
      // $reponse = $bdd->query('SELECT * FROM infos');
      // while ($donnees = $reponse->fetch())
      {?>
        <p class="text-center"><?php echo $donnees["titre"]; ?></p>
        <p class="text-center"><?php echo $donnees["auteur"]; ?></p>
        <p class="text-center"><?php echo $donnees["adresse"]; ?></p>
        <p class="text-center"><?php echo $donnees["ville"]; ?></p>
      <?php
      }
      ?>
      <p>
      <a href="#"><i class="fa fa-facebook" aria-hidden="true"> </i></a>
      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
      <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></p>
    </footer>
  </body>
</html>
