<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class=""action="../controle/enregistrement_post.php" method="post">
      <span><?php if(isset($_SESSION['erreur']["pseudo"])) {
        echo 'Votre pseudo est déjà pris, veuillez en choisir un autre';
      }?></span>
    <input type="text" name="pseudo" placeholder="pseudo" value="">
    <span><?php if(isset($_SESSION['erreur']["password"])) {
      echo 'Votre mot de passe n\'est pas le meme';
    }?></span>
    <input type="password" name="password" placeholder="password" value="">
    <input type="password" name="password1" placeholder="reecrire le password" value="">
    <span><?php if(isset($_SESSION['erreur']["email"])) {
      echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
    }?></span>
    <input type="text" name="mail" placeholder="email" value="">
    <p><input type="submit" name=""value="S'inscrire"></p> </form>

  </body>
</html>
