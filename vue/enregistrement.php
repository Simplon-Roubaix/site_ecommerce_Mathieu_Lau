<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>
  <form class="" action="../controle/enregistrement_post.php" method="post">

    <input type="text" name="pseudo" placeholder="pseudo" value=""><br>
    <p><?php if(isset($_SESSION['erreur']["pseudo"])) {
      echo 'Votre pseudo est déjà pris, veuillez en choisir un autre';
    }?></p>


    <input type="password" name="password" placeholder="password" value=""><br>
    <input type="password" name="password1" placeholder="reecrire le password" value=""><br>
    <p><?php if(isset($_SESSION['erreur']["password"])) {
      echo 'Votre mot de passe n\'est pas le meme';
    }?></p>
    <input type="text" name="mail" placeholder="email" value=""><br>
    <p><?php if(isset($_SESSION['erreur']["email"])) {
      echo 'L\'adresse ' . $_POST['mail'] . ' n\'est pas valide, recommencez !';
    }?></p>
    <p><input type="submit" name="" value="S'inscrire"></p>
  </form>

</body>

</html>
