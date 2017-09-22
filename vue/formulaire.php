<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <?php
    // include('header.php');
     ?>
<?php
// include('bdd.php');
echo 'Bonjour '.$_SESSION['pseudo'];
?>

<div class="container">
<h1 class="text-center">Ajouter un article</h1>

<form enctype="multipart/form-data" class="" action="../controle/formulaire_post.php" method="post">
<input type="file" name="img" value="parcourir">
<input type="text" name="nom" value="" placeholder="nom" required="required"><br>
<input type="text" name="description" value="" placeholder="courte description" required="required"><br>
<input type="text" name="grosse_description" value="" placeholder="description" required="required"><br>
<input type="submit" name="publier" value="publier">
</form>
</div>




<?php
// include('footer.php');
 ?>
</body>
</html>
