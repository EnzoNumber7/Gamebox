<?php require_once "php/config/config.php";
header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Retry-After: 3600'); ?> 

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

  <body>

    <?php require "php/components/nav.php"; ?>

    <div class="container">
        <div class="maintenance">
            <h1 class="title-font"><iconify-icon inline icon="material-symbols:settings-outline" width="70" height="70"></iconify-icon> Site en Maintenance</h1>
            <h2>Nos équipes travaillent pour bientôt vous dévoiler la box à thème du mois prochain.</h2>
        </div>
    </div>

    <?php require "php/components/footer.php"; ?>

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