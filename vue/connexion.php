<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Vous avez déjà un compte :</h1>
    <form class="" action="../controle/connexion_post.php" method="post">
      <input type="text" name="pseudo" value="" placeholder="pseudo">
      <input type="password" name="password" value="" placeholder="password">
      <p><?php if(isset($_SESSION['erreur']["connexion"])) {
          echo 'erreur de connexion';
        }?></p>
      <input type="submit" name="" value="connexion">
    </form>

      <h1>Nouveau membre ?</h1>
      <a href="../controle/enregistrement.php">S'inscrire</a>


  </body>
</html>
