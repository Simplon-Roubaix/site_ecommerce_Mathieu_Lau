<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    include('header.php');
     ?>
    <?php
    $vartest= $_POST["test"];
    require 'array.php';
    $ok= $dogs[$vartest];
    $img1 = $ok["img"];
     ?>
     <img src="<?php echo $img1?>" alt="">

     <?php
     include('footer.php');
      ?>
  </body>
</html>
