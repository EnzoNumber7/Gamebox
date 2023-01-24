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
      <form method="post" action="php/action/logout.php">
        <input type="submit" name="logout" values="Deconnexion" />
      </form>
    <?php
    }

    else
    {
    ?>
            <h1 class="center"><b>Connexion</b></h1>

            <?php
            if (isset($_SESSION['error'])){
              echo $_SESSION['error'];
            }
            else if (isset($_SESSION['success'])){
              echo $_SESSION['success'];
            }
            ?>
            <form method="post" action="signup_in.php">
                <label>Addresse Email : </label><input name="email" type="text" /><br />
                <label>Mot de Passe : </label><input name="password" type="password" />
                <input type="submit" name="sign" value="Connexion" />
                <input type="submit" name="sign" value="Inscription" />
            </form>
            <div id="g_id_onload"
                data-client_id="696200199800-m2l2r3sfbnqgj5sdrpdauqanslk6e3ru.apps.googleusercontent.com"
                data-context="signin"
                data-ux_mode="popup"
                data-login_uri="http://localhost/Gamebox/signup_in.php"
                data-auto_prompt="false">
            </div>

            <div class="g_id_signin"
                data-type="standard"
                data-shape="pill"
                data-theme="outline"
                data-text="continue_with"
                data-size="large"
                data-logo_alignment="left">
            </div>
    <?php
    }
    ?>
    <script src="https://accounts.google.com/gsi/client" async defer></script>  
    </body>
</html>