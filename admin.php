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
    if (isset($_SESSION['admin_error'])){
      ?>
      <p class="center error"><?php echo $_SESSION['admin_error']; ?></p>
    <?php
    }
      ?>

    <?php
    $sql = "Select * from user";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $users = $pre->fetchAll(); ?>
    
    <ul class="collapsible">
      <li>
          <div class="collapsible-header main-color"><h2>Utilisateur</h2></div>
          <div class="collapsible-body main-color">
          <?php
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
                        <input type="hidden" name="email" value="<?php echo $user['email'];?>">
                        <input type="hidden" name="admin" value="<?php echo $user['admin'];?>">
                        <button class="margin-top button-admin btn waves-effect waves-light button-style" type="submit" name="adminBtn">
                        <?php if ($user['admin']==1){
                            echo "Démettre Admin";
                        }
                        else{
                            echo "Mettre Admin";
                        }?>
                        </button>
                    </form>
                </div>
                <div class="col s6 l3">
                    <form method="post" action="php/action/delete_user.php" class="center">
                        <input type="hidden" name="email" value="<?php echo $user['email'];?>">
                        <button class="margin-top button-admin btn waves-effect waves-light button-style" type="submit" name="delete">Supprimer</button>
                    </form>
                </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </li>
      
      <li>
          <div class="collapsible-header main-color"><h2 class="center">Mails de la Page Contact</h2></div>
          <div class="collapsible-body main-color">
          <?php

            $sql = "Select * from contact";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $users = $pre->fetchAll(); 

            foreach($users as $user){
            ?>

            <div class="container input-field">
              <div class="row center">
                  <div class="col l6 m12 s12">
                      <h3>Mails Reçus</h3>
                      <p><?php echo $user['email']; ?></p>
                  </div>
                  <div class="col l6 m12 s12">
                      <h3>Réponse</h3>
                      <form method="post" action="">
                          <textarea class="center" name="message" cols="30" rows="10"></textarea>
                      </form>
                  </div>
              </div>
            </div>
            <?php } ?>
          </div>
      </li>
      <li>
          <div class="collapsible-header main-color">Third</div>
          <div class="collapsible-body main-color"><span>Lorem ipsum dolor sit amet.</span></div>
      </li>
    </ul>

    

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