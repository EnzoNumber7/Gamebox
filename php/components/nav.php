<?php require_once "php/config/config.php";?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">

    <!-- Import fonts -->
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
      <ul class="sidenav side-nav-config" id="mobile-demo">
          <li><a href="signinPage.php"><iconify-icon inline icon="bi:person-circle" width="20" height="20"></iconify-icon>Accès Admin</a></li>
      </ul>

    <?php } ?>

  <!-- JQuery -->
  <script src="script/jquery.min.js"></script>
  <!-- Materialize -->
  <script src="script/materialize.min.js"></script>
  <!-- Import Iconify -->
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <!-- Import Our JS -->
  <script src="script/script.js"></script>

  </body>
</html>