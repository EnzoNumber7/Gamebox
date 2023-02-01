<?php require_once "php/config/config.php"; ?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">

    <!-- Imort Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Montserrat&display=swap" rel="stylesheet">

    <!--Import Materialize-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Description for the Browser -->
    <meta name="description" content="Gamebox, une box gaming à thème qui change chaque mois !">

    <!-- Config Tab In Browser -->
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
      <!-- Notre Concept -->
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

      <!-- Contenu de la box -->
      <h2 class="title-font center space">Contenu de la Gamebox</h2>

      <?php
      $sql = "SELECT * FROM products WHERE id=1";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $product1data = $pre->fetch(PDO::FETCH_ASSOC);
      ?>

      <div class="row">
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

      <div class="center hide-on-med-and-down">
        <a href="product.php" class="waves-effect waves-light btn-large button-style">Commander ma Box</a>
      </div>

      <div class="center hide-on-large-only">
        <a href="product.php" class="waves-effect waves-light btn-large button-style">Commander</a>
      </div>

    </div>

    <div class="fixed-action-btn">
      <a href="#nav" class="btn-floating btn-large float-btn">
        <iconify-icon icon="material-symbols:keyboard-arrow-up-rounded" width="50" height="50"></iconify-icon>
      </a>
    </div>

    <?php require "php/components/footer.php"; ?>

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