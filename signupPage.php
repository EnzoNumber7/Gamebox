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
    // SI L'EMAIL ET LE MOT DE PASSE ONT ETE RENSEIGNE DANS LE FORM ET QU'IL A APPUYE SUR CONNEXION
    if ((isset($_POST['email'])) || (isset($_POST['password'])) || (isset($_POST["sign"]))){
        require_once "php/action/signup.php";  
      } else { ?>
      
    <h1 class="center title-font">CREER UN COMPTE</h1>

    <?php if (isset($_SESSION['signup_error'])){ ?>
      <p class="center error"><?php echo $_SESSION['signup_error']; ?></p>
    <?php } else if (isset($_SESSION['success'])){ ?>
      <p class="center"><?php echo $_SESSION['success']; ?></p>
    <?php } ?>

    <!-- FORMULAIRE DE CREATION DE COMPTE -->
    <div class="container input-field">
      <form class="row center" method="post" action="signupPage.php">
        <div class="col s12">
          <p>Addresse Email</p>
          <input class="center" name="email" type="text" /><br />
          <p>Mot de Passe</p>
          <input class="center" name="password" type="password" />
          <!-- POSSIBILITE DE SOUSCRIRE A LA NEWSLETTER -->
          <p>
            <label>
              <input type="checkbox" name="newsletter" />
              <span>En cochant cette case, vous acceptez de recevoir notre newsletter par mail.</span>
            </label>
          </p>
        </div>
        <div class="col s12">
          <button class="margin-top button-style btn waves-effect waves-light btn-large button-style" type="submit" name="sign">INSCRIPTION</button>
        </div>
      </form>
    </div>
    
    <!-- POSSIBILITE DE REVENIR A LA PAGE DE CONNEXION -->
    <div class="center">
      <a class="text-color" href="signinPage.php">Connexion</a>
    </div>

    <?php }
    require "php/components/footer.php"; ?>

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