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
      echo "Vous êtes déjà connecté" ?>
<!-- FAIRE UN TRUC EN JS AVEC UN BTN QUI DECO QUAND ON CLIQUE DESSUS (PARCE QUE EN VRAI UN FORM CA FAIT BIZARRE) -->
      <form method="post" action="logout.php">
        <input type="submit" name="logout" values="Deconnexion" />
      </form>
    <?php
    }

    else
    {
    ?>
            <h1 class="center"><b>CREE UN COMPTE</b></h1>

            <?php
            if (isset($_SESSION['error'])){
              echo $_SESSION['error'];
            }
            else if (isset($_SESSION['success'])){
              echo $_SESSION['success'];
            }
            ?>
            <form class="center" method="post" action="signup_in.php">
                <label>Addresse Email : </label><input name="email" type="text" /><br />
                <label>Mot de Passe : </label><input name="password" type="password" />
                <div>
                  <input class="inputBtn" type="submit" name="sign" value="Inscription" />
                </div>
            </form>
            <div class="center">
              <a class="text-color" href="signupPage.php">Connexion</a>
            </div>
    <?php
    }
    ?>
    </body>
</html>