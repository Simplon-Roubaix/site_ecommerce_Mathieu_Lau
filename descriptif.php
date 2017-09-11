<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <?php
    require 'array.php';
    include('header.php');
     ?>
    <?php
    $vartest= $_GET["test"];

    $ok= $dogs[$vartest];
    $img1 = $ok["img"];
     ?>

     <section>
       <div class="container">
         <div class="row">
          <article class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
           <img class="img img-thumbnail" src="<?php echo $img1?>" alt="dog">
            <a href="index.php">Retour</a>
         </article>
         <article class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <h2><?php echo $ok["nom"]?></h2>
            <p><?php echo $ok["file"]?></p>
          </article>
        </div>
      </div>
    </section>


     <?php
     include('footer.php');
      ?>
  </body>
</html>
