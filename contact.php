<?php require_once "php/config/config.php"; ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">

    <!-- Imort Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Koulen&family=Montserrat&display=swap" rel="stylesheet">

    <!--Import Materialize-->
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