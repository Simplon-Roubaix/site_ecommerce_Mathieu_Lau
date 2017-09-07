<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    require 'array.php';
    include('header.php');
     ?>
    <?php
    $vartest= $_POST["test"];

    $ok= $dogs[$vartest];
    $img1 = $ok["img"];
     ?>
     <img class="imgdesc" src="<?php echo $img1?>" alt="">
    <h2><?php echo $ok["nom"]?></h2>
    <p><?php echo $ok["file"]?></p>
     <?php
     include('footer.php');
      ?>
  </body>
</html>
