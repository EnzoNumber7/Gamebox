<?php require_once "php/config/config.php"; ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">

    <!-- IMPORT FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Montserrat&display=swap" rel="stylesheet">

    <!-- IMPORT API GOOGLE -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <!-- IMPORT MATERIALIZE -->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">

    <!-- LE NAVIGATEUR SAIT QUE LE SITE EST OPTIMISE SUR MOBILE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- DESCRIPTION POUR LE NAVIGATEUR -->
    <meta name="description" content="Gamebox, une box gaming à thème qui change chaque mois !">

    <!-- CONFIGURATION DE LA TAB DANS LE NAVIGATEUR -->
    <link rel="icon" href="img/gamebox.png">
    <title>Gamebox</title>
  </head>

  <body>

    <footer>
      <div class="hline"></div>

      <div class="center">
          <h3><a class="footer-title" href="index.php"><iconify-icon class="icon-position padding" inline icon="mdi:progress-question" width="40" height="40"></iconify-icon> Gamebox</a></h3>
      </div>

      <div class="row">
          <div class="col l6 m12 s12 center">
              <a class="footer-text" href="CGV.php">Mentions Légales</a>
          </div>
          <div class="col l6 m12 s12 center">
              <a class="footer-text" href="contact.php">Contact <iconify-icon inline icon="material-symbols:mail-outline" width="20" height="20"></iconify-icon></iconify-icon></a>
          </div>
      </div>

      <div class="footer-credits center">
          <p>All Right Reserved - © Gamebox</p>
      </div>
    </footer>

    <!-- JQUERY -->
    <script src="script/jquery.min.js"></script>
    <!-- MATERIALIZE -->
    <script src="script/materialize.min.js"></script>
    <!-- ICONIFY -->
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <!-- NOTRE JS -->
    <script src="script/script.js"></script>

  </body>
</html>