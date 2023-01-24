<?php require_once "php/config/config.php"; ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">

    <!-- Imort fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Montserrat&display=swap" rel="stylesheet">

    <!--Import materialize-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Config Tab In Browser -->
    <link rel="icon" href="">
    <title>Gamebox</title>
  </head>

  <body>
  <?php require "components/nav.php"; ?>

  <div class="scorn valign-center text-color center">
    <h1 class="title-font">Box Halloween</h1>
    <span><iconify-icon icon="teenyicons:mouse-outline" width="50" height="75"></iconify-icon></span>
  </div>

  <div class="container">
    <h2 class="title-font center">Notre concept ?</h2>
    <p class="center">Une box gaming à thème qui change chaque mois.</p>
    <div class="row">
      <div class="col l4 center">
        <iconify-icon icon="ic:outline-shopping-cart" width="150" height="150"></iconify-icon>
        <p>Commande la box de ton choix</p>
      </div>
      <div class="col l4 center">
        <iconify-icon icon="mdi:hand-truck" width="150" height="150"></iconify-icon>
        <p>Livraison en 2 semaines</p>
      </div>
      <div class="col l4 center">
        <iconify-icon icon="ph:smiley-bold" width="150" height="150"></iconify-icon>
        <p>Découvre tes jeux et goodies</p>
      </div>
    </div>

    









  </div>

  <!-- Import Iconify -->
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  </body>
</html>