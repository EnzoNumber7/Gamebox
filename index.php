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

  <?php
  $sql = "SELECT * FROM admin_gestion";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $maintenance = $pre->fetch(PDO::FETCH_ASSOC);

  if($maintenance['maintenance']==1){
    header('Location: maintenancePage.php');
  }

  $sql = "SELECT * FROM admin_gestion";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $homedata = $pre->fetch(PDO::FETCH_ASSOC);
  ?>

  <body>
    <?php require "php/components/nav.php"; ?>

    <!-- ACEUILL AVEC IMAGE DE FOND ET THEME DE LA BOX -->
    <div class="scorn valign-center text-color center">
      <img class="scorn-width" src=<?php echo $homedata['bg_image'] ?> alt="fond page d'acceuil - Gamebox">
      <div class="centered-title">
        <h1 class="title-font"><?php echo $homedata['theme_title'] ?></h1>
        <a href="#scroll" class="text-color hide-on-med-and-down"><iconify-icon icon="teenyicons:mouse-outline" width="50" height="75"></a>
          <br>
        <a href="#scroll" class="text-color hide-on-med-and-down"></iconify-icon><iconify-icon icon="ic:round-arrow-drop-down" width="50" height="50"></iconify-icon></a>
      </div>
    </div>

    <div class="container">
      <!-- NOTRE CONCEPT -->
      <h2 id="scroll" class="title-font center home-title">Notre concept ?</h2>

      <p class="center">Une box gaming à thème qui change chaque mois.</p>

      <div class="row">
        <div class="col l4 m12 s12 center">
          <iconify-icon icon="ic:outline-shopping-cart" width="150" height="150"></iconify-icon>
          <p>Commande la box de ton choix</p>
        </div>

        <div class="col l4 m12 s12 center">
          <iconify-icon icon="mdi:hand-truck" width="150" height="150"></iconify-icon>
          <p>Livraison en 2 semaines</p>
        </div>

        <div class="col l4 m12 s12 center">
          <iconify-icon icon="ph:smiley-bold" width="150" height="150"></iconify-icon>
          <p>Découvre tes jeux et goodies</p>
        </div>
      </div>

      <!-- CONTENU DE LA BOX -->
      <h2 class="title-font center space">Contenu de la Gamebox</h2>

      <?php
      $sql = "SELECT * FROM products WHERE id=1";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $product1data = $pre->fetch(PDO::FETCH_ASSOC);
      ?>

      <div class="row">
        <!-- JEU POPULAIRE DU MOIS -->
        <div class="col l4 m12 s12">
          <div class="card card-config">
            <div class="card-image">
              <img class="img-size" src=<?php echo $product1data['img'] ?> alt="un jeu populaire - Gamebox">
            </div>
            <div class="card-content center card-text">
              <p><?php echo $product1data['product_name'] ?></p>
            </div>
          </div>
        </div>

        <?php
        $sql = "SELECT * FROM products WHERE id=2";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $product2data = $pre->fetch(PDO::FETCH_ASSOC);
        ?>

        <!-- JEU INDEPENDANT DU MOIS -->
        <div class="col l4 m12 s12">
          <div class="card card-config">
            <div class="card-image">
              <img class="img-size" src=<?php echo $product2data['img'] ?> alt="un jeu indépendant - Gamebox">
            </div>
            <div class="card-content center card-text">
              <p><?php echo $product2data['product_name'] ?></p>
            </div>
          </div>
        </div>

        <?php
        $sql = "SELECT * FROM products WHERE id=3";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $product3data = $pre->fetch(PDO::FETCH_ASSOC);
        ?>

        <!-- GOODIES 1 DU MOIS -->
        <div class="col l4 m12 s12">
          <div class="card card-config">
            <div class="card-image">
              <img class="img-size" src=<?php echo $product3data['img'] ?> alt="goodies 1 - Gamebox">
            </div>
            <div class="card-content center card-text">
              <p><?php echo $product3data['product_name'] ?></p>
            </div>
          </div>
        </div>
      </div>

      <?php
      $sql = "SELECT * FROM products WHERE id=4";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $product4data = $pre->fetch(PDO::FETCH_ASSOC);
      ?>

      <div class="row">
        <!-- GOODIES 2 DU MOIS -->
        <div class="col l4 m12 s12 offset-l2">
          <div class="card card-config">
            <div class="card-image">
              <img class="img-size" src=<?php echo $product4data['img'] ?> alt="goodies 2 - Gamebox">
            </div>
            <div class="card-content center card-text">
              <p><?php echo $product4data['product_name'] ?></p>
            </div>
          </div>
        </div>

      <?php
      $sql = "SELECT * FROM products WHERE id=5";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $product5data = $pre->fetch(PDO::FETCH_ASSOC);
      ?>

        <!-- GOODIES MYSTERE DU MOIS -->
        <div class="col l4 m12 s12">
          <div class="card card-config">
            <div class="card-image">
              <img class="img-size" class="img-size" src=<?php echo $product5data['img'] ?> alt="goodies mystère - Gamebox">
            </div>
            <div class="card-content center card-text">
              <p><?php echo $product5data['product_name'] ?></p>
            </div>
          </div>
        </div>
      </div>

      <!-- BOUTON DE COMMANDE SUR GRAND ECRAN (ACCES A LA PAGE PRODUIT) -->
      <div class="center hide-on-med-and-down">
        <a href="product.php" class="waves-effect waves-light btn-large button-style">Commander ma Box</a>
      </div>

      <!-- BOUTON DE COMMANDE SUR PETIT ECRAN (ACCES A LA PAGE PRODUIT) -->
      <div class="center hide-on-large-only">
        <a href="product.php" class="waves-effect waves-light btn-large button-style">Commander</a>
      </div>

    </div>

    <!-- BOUTON FLOTTANT POUR REVENIR EN HAUT DE LA PAGE -->
    <div class="fixed-action-btn">
      <a href="#nav" class="btn-floating btn-large float-btn">
        <iconify-icon icon="material-symbols:keyboard-arrow-up-rounded" width="50" height="50"></iconify-icon>
      </a>
    </div>

    <?php require "php/components/footer.php"; ?>

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