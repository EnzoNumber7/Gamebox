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

  <nav>
    <div class="nav-wrapper main-color text-color">
      <a href="index.php" class="brand-logo"><iconify-icon class="icon-position padding" icon="mdi:progress-question" width="40" height="40"></iconify-icon> Gamebox</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down valign-wrapper">
        <li><a class="connect-icon" href="signinPage.php"><iconify-icon class="icon-position" icon="material-symbols:frame-person" width="40" height="40"></iconify-icon></a></li>
      </ul>
    </div>
  </nav>

  <!-- Import Iconify -->
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  </body>
</html>