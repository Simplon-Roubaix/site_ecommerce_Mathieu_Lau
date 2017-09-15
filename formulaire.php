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
<?php $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'gj7b!17LA');

?>

<div class="container">
<h1 class="text-center">Ajouter un article</h1>
<form class="" action="uploadImage" method="post">
  <p>Insérer une image</p>
  <input type="file" name="" value="">
</form>
<form class="" action="formulaire_post.php" method="post">
<input type="text" name="nom" value="" placeholder="nom">
<input type="text" name="id_img" value=""><br>
<!-- <input type="file" name="image" value=""><br> -->
<input type="text" name="description" value="" placeholder="courte description"><br>
<input type="text" name="grosse_description" value="" placeholder="description">
<input type="submit" name="publier" value="publier">
</form>
</div>




<?php
include('footer.php');
 ?>
</body>
</html>
