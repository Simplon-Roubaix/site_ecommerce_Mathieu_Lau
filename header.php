<!doctype html>
<html class="no-js" lang="FR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/x-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Skranji" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  </head>

  <body>
    <header class="header-color">
      <?php $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'gj7b!17LA');
      $reponse = $bdd->query('SELECT * FROM infos');
      while ($donnees = $reponse->fetch())
      {?>
        <h1 class="display-3 text-center"><?php echo $donnees["titre"]; ?></h1>
        <p class="lead text-center"><?php echo $donnees["sous_titre"]; ?></p>
      <?php
      }
      ?>

    </header>
