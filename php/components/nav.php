<?php require_once "php/config/config.php";?>

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

    <?php
    $sql = "SELECT * FROM admin_gestion";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetch(PDO::FETCH_ASSOC);

    if($data['maintenance']==0){?>

    <!-- NAVBAR CLASSIQUE HORS MAINTENANCE -->
    <nav id="nav" class="main-color text-color">
      <div class="nav-wrapper">
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><iconify-icon icon="ic:round-menu" width="50" height="40"></iconify-icon></a>
        <a href="index.php" class="brand-logo hide-on-small-only"><iconify-icon inline icon="mdi:progress-question" width="33" height="33"></iconify-icon> Gamebox</a>
        <a href="index.php" class="brand-logo hide-on-med-and-up"><iconify-icon inline icon="mdi:progress-question" width="30" height="33"></iconify-icon> Gamebox</a>
        <ul class="right hide-on-med-and-down">
          <?php 
          if (isset($_SESSION['user'])){ ?>
            <li><a href="signinPage.php"><iconify-icon inline icon="bi:person-circle" width="20" height="20"></iconify-icon>Compte</a></li>
          <?php } 
          else{ ?>
            <li><a href="signinPage.php"><iconify-icon inline icon="bi:person-circle" width="20" height="20"></iconify-icon>Connexion</a></li>
          <?php } ?>
          <li><a href="payment.php"><iconify-icon inline icon="material-symbols:shopping-cart-outline" width="20" height="20"></iconify-icon> Panier</a></li>
        </ul>
      </div>
    </nav>

    <!-- NAVBAR MOBILE HORS MAINTENANCE -->
    <ul class="sidenav side-nav-config" id="mobile-demo">
      <?php 
      if (isset($_SESSION['user'])){ ?>
        <li><a href="signinPage.php"><iconify-icon inline icon="bi:person-circle" width="20" height="20"></iconify-icon>Compte</a></li>
      <?php } 
      else{ ?>
        <li><a href="signinPage.php"><iconify-icon inline icon="bi:person-circle" width="20" height="20"></iconify-icon>Connexion</a></li>
      <?php } ?>
      <li><a href="payment.php"><iconify-icon inline icon="material-symbols:shopping-cart-outline" width="20" height="20"></iconify-icon> Panier</a></li>
    </ul>

    <?php } else { ?>

      <!-- NAVBAR CLASSIQUE EN MAINTENANCE -->
      <nav id="nav" class="main-color text-color">
        <div class="nav-wrapper">
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><iconify-icon icon="ic:round-menu" width="50" height="40"></iconify-icon></a>
          <a href="" class="brand-logo hide-on-small-only"><iconify-icon inline icon="mdi:progress-question" width="33" height="33"></iconify-icon> Gamebox</a>
          <a href="" class="brand-logo hide-on-med-and-up"><iconify-icon inline icon="mdi:progress-question" width="30" height="33"></iconify-icon> Gamebox</a>
          <ul class="right hide-on-med-and-down">
              <li><a href="signinPage.php"><iconify-icon inline icon="bi:person-circle" width="20" height="20"></iconify-icon>Accès Admin</a></li>
          </ul>
        </div>
      </nav>

      <!-- NAVBAR MOBILE EN MAINTENANCE -->
      <ul class="sidenav side-nav-config" id="mobile-demo">
          <li><a href="signinPage.php"><iconify-icon inline icon="bi:person-circle" width="20" height="20"></iconify-icon>Accès Admin</a></li>
      </ul>

    <?php } ?>

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