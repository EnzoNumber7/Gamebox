<!-- PAS FINIS -->

<?php require_once "php/config/config.php"; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
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
    if ((isset($_POST['email'])) || (isset($_POST['password'])) || (isset($_POST["sign"]))){
      
      if ($_POST["sign"]=="Connexion"){
        require_once "php/action/signin.php";
      }     
      
      else if ($_POST["sign"]=="Inscription"){
        require_once "php/action/signup.php";  
    }

    }
    else if (isset($_SESSION['user'])){
      ?>
      <p class="center">Vous êtes déjà connecté</p>
<!-- FAIRE UN TRUC EN JS AVEC UN BTN QUI DECO QUAND ON CLIQUE DESSUS (PARCE QUE EN VRAI UN FORM CA FAIT BIZARRE) -->
      <form class="center" method="post" action="logout.php">
        <input class="inputBtn" type="submit" name="logout" value="Deconnexion" />
      </form>
    <?php
    }

    else
    {
    ?>
            <h1 class="center"><b>CONNEXION</b></h1>


            <?php
            if (isset($_SESSION['error'])){
            ?>
            <p class="center error"><?php echo $_SESSION['error']; ?></p>
            <?php 
            }

            else if (isset($_SESSION['success'])){
              echo $_SESSION['success'];
            }

            ?>
            <div class="container">
              <form class="center" method="post" action="signinPage.php">
                  <label >Addresse Email : </label><input class="text-color" name="email" type="text" /><br />
                  <label>Mot de Passe : </label><input class="text-color" name="password" type="password" />
                  <input class="inputBtn" type="submit" name="sign" value="Connexion" />
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
    <?php
    }
    require "php/components/footer.php";
    ?>
    <script src="https://accounts.google.com/gsi/client" async defer></script>  
    </body>
</html>