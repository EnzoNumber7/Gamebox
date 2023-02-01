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

  <body class="main-color">

    <?php require "php/components/nav.php"; ?>

    <?php
    // VERIFICATION SI L'UTILISATEUR EST CONNECTE
    if (isset($_SESSION['user'])){ ?>
      <p class="center">Vous êtes connecté</p>

      <!-- BOUTON DECONNEXION -->
      <form class="center" method="post" action="php/action/logout.php">
        <button class="margin-top button-style btn waves-effect waves-light btn-large button-style" type="submit" name="logout">DECONNEXION</button>
      </form>

      <!-- BOUTON ACCEUIL -->
      <div class="center">
        <a href="index.php" class="waves-effect waves-light btn-large button-style margin-top">Acceuil</a>
      </div>

      <!-- VERIFICATION SI L'UTILISATEUR EST UN ADMIN -->
      <?php if ($_SESSION['user']['admin']==1){ ?>
        <div class="center">
          <a href="admin.php" class="waves-effect waves-light btn-large button-style margin-top">Administrateur</a>
        </div>
      <?php } ?>

    <?php } else { ?>

      <h1 class="center title-font">CONNEXION</h1>

      <!-- AFFICHAGE DES MESSAGE D'ERREUR OU DE SUCCES -->
      <?php if (isset($_SESSION['error'])){ ?>
        <p class="center error"><?php echo $_SESSION['error']; ?></p>
      <?php } else if (isset($_SESSION['success'])){ ?>
        <p class="center"><?php echo $_SESSION['success']; ?></p>
      <?php } ?>

      <div class="container input-field">
        <form class="center" method="post" action="php/action/signin.php">
          <div class="col s12">
            <p>Adresse Email</p>
            <input class="center" name="email" type="text" /><br />
            <p>Mot de Passe</p>
            <input class="center" name="password" type="password" />
          </div>
          <div class="col s12">
            <button class="margin-top button-style btn waves-effect waves-light btn-large button-style" type="submit" name="sign">CONNEXION</button>
          </div>
        </form>
      </div>

      <div class="center">
        <a class="text-color" href="signupPage.php">Créer un Compte</a>
      </div>

      <div>&nbsp;</div>

      <div class="container cline"></div>
        <p class="gcenter">OU</p>
          
      <div class="container">
        <div class="row center">
          <!-- BOUTON CONNEXION GOOGLE -->
          <div id="g_id_onload"
            data-client_id="696200199800-m2l2r3sfbnqgj5sdrpdauqanslk6e3ru.apps.googleusercontent.com"
            data-context="signin"
            data-ux_mode="popup"
            data-login_uri="http://localhost/Gamebox/php/action/googleSignin.php"
            data-auto_prompt="false">
          </div>
          <div class="g_id_signin"
            data-type="standard"
            data-shape="pill"
            data-theme="outline"
            data-text="continue_with"
            data-size="medium"
            data-logo_alignment="center"
            data-witdh="400px">
          </div>
        </div>

        <!-- ESPACEMENT ENTRE LES BOUTONS -->
        <div>&nbsp;</div>

        <div class="center">
          <!-- BOUTON CONNEXION FACEBOOK -->
          <script>
          window.fbAsyncInit = function() {
            FB.init({
              appId      : '{your-app-id}',
              cookie     : true,
              xfbml      : true,
              version    : '{api-version}'
            });
            FB.AppEvents.logPageView();
          };
          (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));
          </script>

          <div id="fb-root"></div>
          <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v15.0&appId=740267983967555&autoLogAppEvents=1" nonce="2AGUpHaT"></script>
          <div class="fb-login-button" data-width="" data-size="medium" data-button-type="continue_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="false"></div>
        </div>

        <!-- BOUTON CONNEXION PAYPAL  
          <div class="row">
            <span id='paypal'></span>
            <script>
            paypal.use( ['login'], function (login) {
              login.render ({
                "appid":"AXJrQxn9J2jdbwr2Hs4b7_LgbcfshOjBvlW154bNMzYDjBRiw122vBB03CoGG1lInuEOVeHljXVI0yKB",
                "authend":"sandbox",
                "scopes":"email",
                "containerid":"paypal",
                "responseType":"code id_Token",
                "locale":"fr-fr",
                "buttonType":"LWP",
                "buttonShape":"pill",
                "buttonSize":"lg",
                "fullPage":"true",
                "returnurl":"http://localhost/Gamebox/signinPage.php"
              });
            });
            </script>
          </div> -->
      </div>

    <?php } require "php/components/footer.php"; ?>

    <!-- JS POUR GOOGLE -->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script>
   
    <!-- JQUERY -->
    <script src="script/jquery.min.js"></script>
    <!-- MATERIALIZE -->
    <script src="script/materialize.min.js"></script>
    <!-- ICONIFY -->
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <!-- NOTRE JS -->
    <script src="script/script.js"></script>
    <!-- JS POUR PAYPAL 
    <script src='https://www.paypalobjects.com/js/external/api.js'></script> -->

  </body>
</html>