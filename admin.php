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

    <!-- Config Tab In Browser -->
    <link rel="icon" href="">
    <title>Gamebox</title>
  </head>

  <body>
  <?php require "php/components/nav.php"; ?>
  <h1 class="center">Page Administrateur</h1>

  <?php
  $sql = "Select * from user";
  $pre = $pdo->prepare($sql);
  $pre->execute();
  $users = $pre->fetchAll(); 

  foreach($users as $user){
    ?>
    <div class="container row">
        <div class="col s6 l3">
            <p>Adresse Mail : <?php echo $user['email']?></p>
        </div>
        <div class="col s6 l3">
            <p><?php 
            if ($user['admin']==1){
                echo "Administrateur : Oui";
            }
            else{
                echo "Administrateur : Non";
            }?></p> 
        </div>
        <div class="col s6 l3">
            <form class="center" method="post" action="php/action/admin_user.php">
                <input type="hidden" name="admin" value="<?php echo $user['admin'];?>">
                <input class="inputBtn" type="submit" value="<?php if ($user['admin']==1){
                    echo "Démettre Admin";
                }
                else{
                    echo "Mettre Admin";
                }?>">
            </form>
        </div>
        <div class="col s6 l3">
            <form method="post" action="delete_user.php" class="center">
                <input type="hidden" name="email" value="<?php echo $user['email'];?>">
                <input type="submit" class="inputBtn" value="Supprimer">
            </form>
        </div>
    </div>
    <?php   
  }
  ?>

  <?php require "php/components/footer.php"; ?>
  </body>
</html>