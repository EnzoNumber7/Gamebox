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
        require_once "php/action/signup.php";  

    }
    else
    {
    ?>
            <h1 class="center"><b>CREE UN COMPTE</b></h1>

            <?php
            if (isset($_SESSION['signup_error'])){
              ?>
              <p class="center error"><?php echo $_SESSION['signup_error']; ?></p>
              <?php 
            }
            else if (isset($_SESSION['success'])){
              ?>
              <p class="center"><?php echo $_SESSION['success']; ?></p>
              <?php
            }
            ?>

            <div class="container input-field">
              <form class="center" method="post" action="signupPage.php">
                  <p>Addresse Email</p>
                  <input class="center" name="email" type="text" /><br />
                  <p>Mot de Passe</p>
                  <input class="center" name="password" type="password" />
                  <div>
                    <input class="inputBtn button-style" type="submit" name="sign" value="Inscription" />
                  </div>
              </form>
            </div>
            
            <div class="center">
              <a class="text-color" href="signinPage.php">Connexion</a>
            </div>
    <?php
    }
    require "php/components/footer.php";
    ?>
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