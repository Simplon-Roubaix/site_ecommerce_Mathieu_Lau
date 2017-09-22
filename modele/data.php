
<?php
// $bdd = new PDO('mysql:host=localhost;dbname=ecommerce;charset=utf8', 'root', 'gj7b!17LA');
$bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');
function get_infos(){
  $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');
  $reponse = $bdd->query('SELECT * FROM infos');
  return $reponse->fetch();
}

function get_img_articles(){
  $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');
   $reponse = $bdd->query('SELECT * FROM image i INNER JOIN articles a ON a.id_img = i.id');
   return $reponse->fetchAll();
}

function get_img_articles_id($vartest){
  $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');

  $reponse = $bdd->prepare('SELECT * FROM image i INNER JOIN articles a ON a.id_img = i.id and a.id = ?');
  $reponse->execute(array($vartest));
  return $reponse->fetch();
}

function envoie_enregistrement($pseudo, $password){
  $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');

  $req = $bdd->prepare('INSERT INTO Connexion (pseudo, password) VALUES(:pseudo, :password)');
  $req->execute(array(
     'pseudo' => $pseudo,
     'password'=> $password
     ));
}

function comparaison_mdp($password, $pseudo){
  $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');

$req=$bdd->prepare('SELECT * FROM Connexion WHERE password=:password and pseudo=:pseudo');
$req->execute(array(
  'password'=>$password,
  'pseudo'=>$pseudo
));
return $req->fetch();
}

function max_id_img(){
  $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');

  $reponse=$bdd->query('SELECT MAX(id) as img_id FROM image');
  $donnees=$reponse->fetch();
  return $donnees;
}

function envoie_article($donnees, $infos){
  $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');

  $req = $bdd->prepare('INSERT INTO articles SET id_img=?, nom=?, description=?, grosse_description=? ');
  $req->execute([$donnees['img_id'],$infos['nom'],$infos['description'], $infos['grosse_description']]);
}

function envoie_img(){
  $bdd = new PDO('mysql:host=localhost;dbname=LAU&MATH;charset=utf8', 'root', 'root');

  $req =$bdd->prepare("INSERT INTO image (nom_img, poids, type) VALUES (:nom_img, :poids, :type)");
  $req->execute(array(
    'nom_img'=> $img_nom,
    'poids'=>$img_taille,
    'type'=>$img_type ));
}
?>
