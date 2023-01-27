<!-- PAS FINIS -->

<?php require_once "php/config/config.php"; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="google-signin-client_id" content="696200199800-m2l2r3sfbnqgj5sdrpdauqanslk6e3ru.apps.googleusercontent.com">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamebox Connexion/Inscritpion</title>
  </head>

  <body class="main-color" id="">
    <?php require "php/components/nav.php"; ?>

    <?php
    if (isset($_POST['credential'])){
      if (!empty($_POST['credential'])){
        if (empty($_COOKIE['g_csrf_token']) || empty($_POST['g_csrf_token']) || $_COOKIE['g_csrf_token'] != $_POST['g_csrf_token']){
          $_SESSION['error'] = "ERROOOOOOOOOOOOOOR";
          exit();
        }
      }
      
      $clientId = "696200199800-m2l2r3sfbnqgj5sdrpdauqanslk6e3ru.apps.googleusercontent.com";
      $client = new Google_Client(['client_id' => $clientId]);  // Specify the clientId of the app that accesses the backend
      
      $id_token = $_POST['credential'];
      $user = $client->verifyIdToken($id_token);
      if ($user) {
        $_SESSION['user'] = $user;

        // If request specified a G Suite domain:
        //$domain = $payload['hd'];
      } else {
        $_SESSION['error'] = "FUCK";
      }
    }
    // Si l'email, le mot de passe ont bien été renseigné dans le form et si l'utilisateur a appuyer sur le bouton Connexion
      
    else if (isset($_SESSION['user'])){
      ?>
      <p class="center">Vous êtes déjà connecté</p>

      
      <form class="center" method="post" action="logout.php">
        <button class="margin-top button-style btn waves-effect waves-light btn-large button-style" type="submit" name="logout">DECONNEXION</button>
      </form>
      <div class="center">
        <a href="index.php" class="waves-effect waves-light btn-large button-style margin-top">Acceuil</a>
      </div>

      <div class="center">
        <?php
          if(isset($_SESSION['user'])){
            if ($_SESSION['user']['admin']==1){
              ?>
              <a href="admin.php" class="waves-effect waves-light btn-large button-style margin-top">Administrateur</a>
              <?php
            }
          } ?>
      </div>
      <?php
    }

    else
    {
      echo isset($_SESSION['user']);
    ?>
            <h1 class="center"><b>CONNEXION</b></h1>


            <?php
            if (isset($_SESSION['error'])){
            ?>
            <p class="center error"><?php echo $_SESSION['error']; ?></p>
            <?php 
            }

            else if (isset($_SESSION['success'])){
              ?>
              <p class="center"><?php echo $_SESSION['success']; ?></p>
              <?php
            }

            ?>
            <div class="container input-field">
                <form class="center" method="post" action="php/action/signin.php">
                  <div class="col s12">
                    <p >Addresse Email</p>
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
              <a class="text-color" href="signupPage.php">Crée un Compte</a>
            </div>
            <p class="center">__________________________________________________</p>
            <p class="center">OU</p>
            
            <div id="g_id_onload"
              data-client_id="696200199800-m2l2r3sfbnqgj5sdrpdauqanslk6e3ru.apps.googleusercontent.com"
              data-context="signin"
              data-ux_mode="popup"
              data-login_uri="http://localhost/Gamebox/signinPage.php"
              data-auto_prompt="false">
          </div>

          <div class="g_id_signin margin-left"
              data-type="standard"
              data-shape="pill"
              data-theme="outline"
              data-text="continue_with"
              data-size="large"
              data-logo_alignment="center"
              data-witdh="400px">
          </div>
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

    <div class="fb-login-button margin-left" data-width="" data-size="large" data-button-type="continue_with" data-layout="rounded" data-auto-logout-link="false" data-use-continue-as="false"></div>
    
    <span id='paypal'></span>
    <script src='https://www.paypalobjects.com/js/external/api.js'></script>
    <script>
    paypal.use( ['login'], function (login) {
      login.render ({
        "appid":"AXJrQxn9J2jdbwr2Hs4b7_LgbcfshOjBvlW154bNMzYDjBRiw122vBB03CoGG1lInuEOVeHljXVI0yKB",
        "authend":"sandbox",
        "containerid":"paypal",
        "responseType":"code",
        "locale":"fr-fr",
        "buttonType":"LWP",
        "buttonShape":"pill",
        "buttonSize":"lg",
        "fullPage":"true",
        "returnurl":"localhost/Gamebox/index.php"
      });
    });
    </script>
    <?php
    }
    require "php/components/footer.php";
    ?>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://accounts.google.com/gsi/client" async defer></script> 
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