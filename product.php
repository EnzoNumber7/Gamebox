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

    <?php require "php/components/nav.php"; ?>

    <div class="container">

        <h1 class="center title-font">Box d'Halloween</h1>

        <h2>Contenu de la box :</h2>

        <div class="row ">
            <div class="col l4 offset-l2">
                <div class="card-panel main-color center valign-wrapper product-card">
                    <p>Jeu de survival d’horreur, multijoueur sorti en 2016. Sur le principe du cache-cache, tueurs et survivants s’affrontent. Vous pourrez choisir votre personnage ainsi que votre camps pour prendre part à la bataille.</p>
                </div>
            </div>
            <div class="col l4">
                <div class="card card-config">
                <div class="card-image">
                    <img class="img-size" src="img/dbd.jpg">
                </div>
                <div class="card-content center card-text">
                    <p>Un Jeu Populaire</p>
                </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col l4 offset-l2">
                <div class="card card-config">
                <div class="card-image">
                    <img class="img-size" src="img/pj.jpg">
                </div>
                <div class="card-content center card-text">
                    <p>Un Jeu Indépendant</p>
                </div>
                </div>
            </div>
            <div class="col l4">
                <div class="card-panel main-color valign-wrapper product-card">
                    <p>Platformer 3D indépendant sortien 2020. A travers des paysages fantastiques et au travers d’un univers effrayant et amusant incarnez Jack, le seigneur à la tête de citrouille pour l’aider à triompher du bien.</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col l4">
                <div class="card card-config">
                <div class="card-image">
                    <img class="img-size" src="img/sh.jpg">
                </div>
                <div class="card-content center card-text">
                    <p>T-Shirt Silent Hill</p>
                </div>
                </div>
            </div>
            <div class="col l4">
                <div class="card card-config">
                <div class="card-image">
                    <img class="img-size" src="img/nendoroid.jpg">
                </div>
                <div class="card-content center card-text">
                    <p>Nendoroid Le Piégeur</p>
                </div>
                </div>
            </div>
            <div class="col l4">
                <div class="card card-config">
                <div class="card-image">
                    <img class="img-size" src="img/mystery.png">
                </div>
                <div class="card-content center card-text">
                    <p>Goodies Mystère</p>
                </div>
                </div>
            </div>
        </div>

        <div class="center">
            <a class="waves-effect waves-light btn-large button-style" href="payment.php">Ajouter à mon Panier</a>
        </div>
    


    </div>

    <?php require "php/components/footer.php"; ?>

  <!-- Import Iconify -->
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <!-- Import Our JS -->
  <script src="src/js/script.js"></script>
  </body>
</html>