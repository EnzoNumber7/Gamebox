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
    
    <!-- Description for the Browser -->
    <meta name="description" content="Gamebox, une box gaming à thème qui change chaque mois !">

    <!-- Config Tab In Browser -->
    <link rel="icon" href="img/gamebox.png">
    <title>Gamebox</title>
  </head>

  <body>

    <?php require "php/components/nav.php"; ?>

    <div class="container">

        <?php
        $sql = "SELECT * FROM admin_gestion";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $homedata = $pre->fetch(PDO::FETCH_ASSOC);
        ?>

        <h1 class="center title-font product-page-title"><?php echo $homedata['theme_title'] ?></h1>

        <h2 class="content-title"><iconify-icon inline icon="mdi:box-variant"></iconify-icon> Contenu de la Gamebox :</h2>

        <?php
        $sql = "SELECT * FROM products WHERE id=1";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $product1data = $pre->fetch(PDO::FETCH_ASSOC);
        ?>

        <div class="row">
            <div class="col l4 m12 s12 offset-l2">
                <div class="card-panel main-color center valign-wrapper product-card">
                    <p><?php echo $product1data['product_desc'] ?></p>
                </div>
            </div>
            <div class="col l4 m12 s12">
                <div class="card card-config">
                <div class="card-image">
                    <img class="img-size" src=<?php echo $product1data['img_2'] ?> alt="un jeu populaire - Gamebox">
                </div>
                <div class="card-content center card-text">
                    <p class="product-title">Un Jeu Populaire</p>
                </div>
                </div>
            </div>
        </div>

        <?php
        $sql = "SELECT * FROM products WHERE id=2";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $product2data = $pre->fetch(PDO::FETCH_ASSOC);
        ?>

        <div class="row ">
            <div class="col l4 m12 s12 offset-l2">
                <div class="card card-config">
                <div class="card-image">
                    <img class="img-size" src=<?php echo $product2data['img_2'] ?> alt="un jeu indépendant - Gamebox">
                </div>
                <div class="card-content center card-text">
                    <p class="product-title">Un Jeu Indépendant</p>
                </div>
                </div>
            </div>
            <div class="col l4 m12 s12">
                <div class="card-panel main-color valign-wrapper product-card">
                    <p><?php echo $product2data['product_desc'] ?></p>
                </div>
            </div>
        </div>

        <?php
        $sql = "SELECT * FROM products WHERE id=3";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $product3data = $pre->fetch(PDO::FETCH_ASSOC);
        ?>

        <div class="row">
            <div class="col l4 m12 s12">
                <div class="card card-config">
                    <div class="card-image">
                        <img class="img-size" src=<?php echo $product3data['img_2'] ?> alt="goodies 1 - Gamebox">
                    </div>
                    <div class="card-content center card-text">
                        <p><?php echo $product3data['product_name'] ?></p>
                    </div>
                </div>
            </div>

        <?php
        $sql = "SELECT * FROM products WHERE id=4";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $product4data = $pre->fetch(PDO::FETCH_ASSOC);
        ?>

            <div class="col l4 m12 s12">
                <div class="card card-config">
                    <div class="card-image">
                        <img class="img-size" src=<?php echo $product4data['img_2'] ?> alt="goodies 2 - Gamebox">
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
                        <img class="img-size" src=<?php echo $product5data['img_2'] ?> alt="goodies mystère - Gamebox">
                    </div>
                    <div class="card-content center card-text">
                        <p><?php echo $product5data['product_name'] ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="center hide-on-med-and-down">
            <a class="waves-effect waves-light btn-large button-style btn-panier"><iconify-icon inline icon="mdi:cart-arrow-down" width="30" height="30"></iconify-icon> Ajouter au Panier</a>
        </div>

        <div class="center hide-on-large-only">
            <a class="waves-effect waves-light btn-large button-style btn-panier"><iconify-icon inline icon="mdi:cart-arrow-down" width="30" height="30"></iconify-icon></a>
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