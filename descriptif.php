<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <?php
    include('header.php');
     ?>
    <?php
    $vartest= $_POST["test"];
     ?>
     <?php $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'gj7b!17LA');
     // $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');
     
     $reponse = $bdd->prepare('SELECT * FROM image i INNER JOIN articles a ON a.id_img = i.id and a.id = ?');
     $reponse->execute(array($vartest));
     while ($donnees = $reponse->fetch())
     {?>
     <section>
       <div class="container">
         <div class="row">
          <article class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <img class="img img-thumbnail" src="img/<?php echo $donnees["nom_img"];?><?php echo $donnees["type"];?> " alt="<?php echo $donnees["alt"];?>">
          <form class="" action="index.php" method="post">
            <input type="submit" name="" value="Retour" class="btn btn-custom">
          </form>
         </article>
         <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <h2><?php echo $donnees["nom"]?></h2>
            <p><?php echo $donnees["grosse_description"]?></p>
          </article>
        </div>
      </div>
    </section>
    <?php
    }
    ?>

     <?php
     include('footer.php');
      ?>
  </body>
</html>
