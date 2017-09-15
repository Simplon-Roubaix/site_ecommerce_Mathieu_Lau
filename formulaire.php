
<?php
    include('header.php');
     ?>
<?php $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');

?>
<div class="container">
<h1 class="text-center">Ajouter un article</h1>
<form class="" action="formulaire_post.php" method="post">
<input type="text" name="nom" value="" placeholder="nom">
<!-- <input type="file" name="image" value=""><br> -->
<input type="text" name="description" value="" placeholder="description"><br>
<input type="text" name="grosse_description" value="" placeholder="description">
<input type="submit" name="publier" value="publier">
</form>
</div>
