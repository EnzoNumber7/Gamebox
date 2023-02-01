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

      <h1 class="center"><b>CONTACT</b></h1>
      
      <div class="container input-field">
          <form class="center" method="post" action="php/action/mail.php">
              <p>Addresse Email : </p>
              <input class="center" name="email" type="text" /><br />
              <p>Objet : </p>
              <input class="center" name="object" type="text" />
              <p>Votre Message : </p>
              <textarea class="center" name="text" cols="30" rows="10"></textarea> <br>
              <button class="margin-top button-style btn waves-effect waves-light btn-large button-style" type="submit" name="send">ENVOYER</button>
          </form>
      </div>
            
    <?php
    require "php/components/footer.php";
    ?>
    </body>
</html>