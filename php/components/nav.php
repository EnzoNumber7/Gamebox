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

  <nav class="main-color">
    <div class="nav-wrapper text-color">
      <a href="index.php" class="brand-logo"><iconify-icon inline icon="mdi:progress-question" width="33" height="33"></iconify-icon> Gamebox</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="signinPage.php"><iconify-icon inline icon="bi:person-circle" width="20" height="20"></iconify-icon> Connexion</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href=""><iconify-icon inline icon="bi:person-circle" width="20" height="20"></iconify-icon> Connexion</a></li>
  </ul>


  <!-- Import Iconify -->
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <!-- Import Our JS -->
  <script src="src/js/script.js"></script>
  </body>
</html>