<?php
include('../modele/data.php');
$donnees = get_img_articles_id($_POST['test']);
include('header.php');
include('descriptif.php');
include('footer.php');
