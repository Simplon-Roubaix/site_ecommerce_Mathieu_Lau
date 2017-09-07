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

  <!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- TU CODE ICI -->
    <?php
    include("header.php");
     ?>
<?php
$text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

$text_long="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a fringilla dui. Mauris suscipit purus at sem consequat volutpat. Nullam placerat finibus mauris, a laoreet elit viverra vitae. Maecenas eget felis velit. Praesent faucibus purus et blandit porta. Aliquam vestibulum, elit in ultricies varius, ligula augue luctus lectus, vel malesuada mi leo blandit urna. Proin aliquam eros non dapibus commodo. Mauris euismod viverra quam in malesuada. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Integer aliquam ultrices accumsan. Phasellus egestas sapien eget dictum porta. Fusce volutpat scelerisque lectus ut iaculis.

Cras sit amet purus feugiat, dignissim turpis in, pharetra mauris. Praesent vel imperdiet ante. Curabitur non enim et sapien efficitur laoreet. Proin nec ipsum et purus cursus blandit. Nunc viverra ornare faucibus. Donec ut mi sem. Cras porta pellentesque massa.

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam erat volutpat. Nulla in nulla nisi. Etiam pulvinar efficitur erat nec fermentum. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur lacinia sodales elit vitae ultricies. Aenean at turpis vel leo luctus pharetra.

Maecenas pharetra sit amet enim fermentum gravida. Phasellus mollis ac elit sit amet efficitur. Aenean convallis at elit ultricies pulvinar. Phasellus purus lacus, venenatis et lorem non, semper semper neque. Nullam hendrerit neque at velit venenatis aliquet. Suspendisse dignissim odio mi, id mattis orci convallis at. Quisque varius massa enim, vel pharetra tellus rhoncus nec. Donec mattis enim sit amet pharetra efficitur.

Sed ac magna ante. Etiam nulla dolor, bibendum a euismod efficitur, maximus sed libero. Aliquam rhoncus placerat pharetra. Nunc id erat ut ex semper vulputate eu et leo. Maecenas risus nibh, interdum sed ultricies at, tincidunt sed enim. Donec a elit tristique, viverra lacus vel, dignissim ligula. Ut placerat massa tortor, eget placerat mauris tincidunt at. In ut urna vitae risus vestibulum volutpat ac a augue. Maecenas a euismod mi. Duis lacinia non lorem in feugiat. Donec blandit non nulla convallis ultrices. Duis accumsan purus id diam hendrerit, vitae lobortis felis auctor. Fusce fermentum volutpat enim nec laoreet. Vestibulum fermentum tincidunt elit, a porta sem eleifend in. Vivamus sollicitudin interdum nibh. Pellentesque dui sapien, rutrum ut faucibus ac, blandit at libero.";

$dogs = array (
  array ("img"=>"img/boxer.png", "nom"=>"Jojo","description" =>$text , "file"=> $text_long),
  array ("img"=>"img/dog.jpg", "nom"=>"Aaron","description" =>$text , "file"=> $text_long),
  array ("img"=>"img/lab.jpg", "nom"=>"Napoleon","description" =>$text , "file"=> $text_long),
  array ("img"=>"img/labrador.jpg", "nom"=>"Nanouk","description" =>$text , "file"=> $text_long),
  array ("img"=>"img/puppy.jpg", "nom"=>"Raoul","description" =>$text , "file"=> $text_long),
  array ("img"=>"img/shiba.jpg", "nom"=>"Okapi","description" =>$text , "file"=> $text_long),
);
 ?>

 <div class="container">
   <div class="row">
<?php
foreach ($dogs as $key => $value) {
?>
 <div class="card col-sm-12 col-md-4 col-lg-4" style="width: 20rem;">
   <img class="card-img-top" src="<?php echo $value["img"];?> " alt="Card image cap">
   <div class="card-block">
     <h4 class="card-title"><?php echo $value["nom"];?></h4>
     <p class="card-text"><?php echo $value["description"];?></p>
     <a href="#" class="btn btn-custom">Voir plus</a>
   </div>
 </div>
<?php
}
 ?>
</div>
</div>
     <?php
    include("footer.php");
    ?>


    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
