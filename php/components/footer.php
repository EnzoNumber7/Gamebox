<?php require_once "php/config/config.php"; ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">

    <!-- Imort fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Montserrat&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

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

  <footer>

    <div class="hline"></div>

    <div class="center">
        <h3><a class="footer-title" href="index.php"><iconify-icon class="icon-position padding" icon="mdi:progress-question" width="40" height="40"></iconify-icon> Gamebox</a></h3>
    </div>

    <div class="row">
        <div class="col l6 center">
            <a class="footer-text" href="">Mentions Légales</a>
        </div>
        <div class="col l6 center">
            <a class="footer-text" href="contact.php">Contact <iconify-icon icon="material-symbols:mail-outline" width="20" height="20"></iconify-icon></a>
        </div>
    </div>

    <div class="footer-credits center">
        <p>All Right Reserved - © Gamebox</p>
    </div>
  </footer>

  <!-- Import Iconify -->
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <!-- Import Our JS -->
  <script src="src/js/script.js"></script>
  </body>
</html>