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
      $contacts = $pre->fetchAll(); 

      foreach($contacts as $contact){
      ?>

    <div class="container input-field">
      <div class="row center">
          <div class="col l6 m12 s12">
              <p> De : <?php echo $contact['email']; ?></p>
              <p>Objet : <?php echo $contact['object']; ?></p>
              <p class="message-border"><?php echo $contact['text']; ?></p>
          </div>
          <div class="col l6 m12 s12">
              <h3>Réponse</h3>
              <form method="post" action="php/action/answer.php">
                  <textarea class="center" name="answer" cols="30" rows="10"></textarea> <br>
                  <input class="inputBtn button-style" type="submit" name="sign" value="Envoyer"/>
              </form>
          </div>
      </div>
    </div>
    <?php } ?>
            
          </div>
      </li>
      <li>
        <div class="collapsible-header main-color"><h2>Modification Box du Mois</h2></div>
        <div class="collapsible-body main-color">
            <?php
            $sql = "SELECT * FROM admin_gestion";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $homedata = $pre->fetch(PDO::FETCH_ASSOC); ?>

            <h3 class="center">Modifier la Page d'Acceuil</h3>

            <form class="input-field center" method="post" action="php/action/homeEdit.php" enctype="multipart/form-data">
                <h4>Nom de la box</h4>
                <input name="theme_title" type="text" value="<?php echo $homedata['theme_title']?>"/>
                <h4>Image de fond</h4>
                <input type="file" name="bg_image"/><br>
                <input class="inputBtn button-style" type="submit" value="Modifier">
            </form>

            <?php
            $sql = "SELECT * FROM products";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $productsdata = $pre->fetchAll(PDO::FETCH_ASSOC);
            ?>

            <h3>Modifier les Produits</h3>

            <?php foreach($productsdata as $products){ ?>
                
                <form class="input-field center" method="post" action="php/action/productEdit.php" enctype="multipart/form-data">
                <h4>Produit <?php echo $products['id']; ?></h4>
                <h5>Nom</h5>
                <input name="name" type="text" value="<?php echo $products['product_name']?>"/>
                <h5>Description</h5>
                <textarea class="center" name="description" cols="30" rows="10"><?php echo $products['product_desc'] ?></textarea>
                <h5>Image Acceuil</h5>
                <input type="file" name="img"/>
                <h5>Image Page Produit</h5>
                <input type="file" name="img_2"/><br>
                <input class="inputBtn button-style" type="submit" value="Modifier">
            </form>

            <?php } ?>

        </div>
      </li>
      <li>
      <div class="collapsible-header main-color"><h3>Mentions Légales et CGV</h3></div>
            <div class="collapsible-body main-color">
              <?php
              $sql = "Select * from CGV WHERE id=5";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $element = $pre->fetch(PDO::FETCH_ASSOC);?>
                <div class="row center input-field">
                  <div class="col s12 l6">
                     <h2> Mentions Légales </h2>
                      <form method="post" action="">
                        <p>Titre de la Page</p>
                        <textarea class="center" name="page_title" cols="30" rows="10"><?php echo $element['page_title'] ?></textarea>
                        <p>Sous Titre</p>
                        <textarea class="center" name="title" cols="30" rows="10"><?php echo $element['title'] ?></textarea>
                        <p>Paragraphe</p>
                        <textarea class="center" name="paragraph" cols="30" rows="10"><?php echo $element['paragraph'] ?></textarea>
                        <p>Article 1</p>
                        <input class="center" name="article1" type="text" value="<?php echo $element['article1'] ?>" />
                        <p>Article 1 - Texte</p>
                        <textarea class="center" name="text_article1" cols="30" rows="10"><?php echo $element['text_article1'] ?></textarea>
                        <p>Article 2</p>
                        <input class="center" name="article2" type="text" value="<?php echo $element['article2'] ?>"/>
                        <p>Article 2 - Texte</p>
                        <textarea class="center" name="text_article2" cols="30" rows="10"><?php echo $element['text_article2'] ?></textarea>
                        <p>Article 3</p>
                        <input class="center" name="article3" type="text" value="<?php echo $element['article3'] ?>"/>
                        <p>Article 3 - Texte</p>
                        <textarea class="center" name="text_article3" cols="30" rows="10"><?php echo $element['text_article3'] ?></textarea>
                        <p>Article 4</p>
                        <input class="center" name="article4" type="text" value="<?php echo $element['article4'] ?>"/>
                        <p>Article 4 - Texte</p>
                        <textarea class="center" name="text_article4" cols="30" rows="15"><?php echo $element['text_article4'] ?></textarea>
                      </form>
                  </div>
                  <?php
                  $sql = "Select * from CGV WHERE id=6";
                  $pre = $pdo->prepare($sql);
                  $pre->execute();
                  $element = $pre->fetch(PDO::FETCH_ASSOC);?>

                  <div class="col s12 l6">
                    <h2> Conditions Générales de Vente </h2>
                    <form method="post" action="">
                        <p>Sous Titre</p>
                        <textarea class="center" name="title" cols="30" rows="10"><?php echo $element['title'] ?></textarea>
                        <p>Article 1</p>
                        <input class="center" name="article1" type="text" value="<?php echo $element['article1'] ?>" />
                        <p>Article 1 - Texte</p>
                        <textarea class="center" name="text_article1" cols="30" rows="10"><?php echo $element['text_article1'] ?></textarea>
                        <p>Article 2</p>
                        <input class="center" name="article2" type="text" value="<?php echo $element['article2'] ?>"/>
                        <p>Article 2 - Texte</p>
                        <textarea class="center" name="text_article2" cols="30" rows="10"><?php echo $element['text_article2'] ?></textarea>
                        <p>Article 3</p>
                        <input class="center" name="article3" type="text" value="<?php echo $element['article3'] ?>"/>
                        <p>Article 3 - Texte</p>
                        <textarea class="center" name="text_article3" cols="30" rows="10"><?php echo $element['text_article3'] ?></textarea>
                        <p>Article 4</p>
                        <input class="center" name="article4" type="text" value="<?php echo $element['article4'] ?>"/>
                        <p>Article 4 - Texte</p>
                        <textarea class="center" name="text_article4" cols="30" rows="15"><?php echo $element['text_article4'] ?></textarea>
                        <p>Article 5</p>
                        <input class="center" name="article5" type="text" value="<?php echo $element['article5'] ?>" />
                        <p>Article 5 - Texte</p>
                        <textarea class="center" name="text_article5" cols="30" rows="15"><?php echo $element['text_article5'] ?></textarea>
                        <p>Article 6</p>
                        <input class="center" name="article6" type="text" value="<?php echo $element['article6'] ?>" />
                        <p>Article 6 - Texte</p>
                        <textarea class="center" name="text_article6" cols="30" rows="15"><?php echo $element['text_article6'] ?></textarea>
                        <p>Article 7</p>
                        <input class="center" name="article7" type="text" value="<?php echo $element['article7'] ?>" />
                        <p>Article 7 - Texte</p>
                        <textarea class="center" name="text_article7" cols="30" rows="15"><?php echo $element['text_article7'] ?></textarea>
                        <p>Article 8</p>
                        <input class="center" name="article8" type="text" value="<?php echo $element['article8'] ?>" />
                        <p>Article 8 - Texte</p>
                        <textarea class="center" name="text_article8" cols="30" rows="75"><?php echo $element['text_article8'] ?></textarea>
                        <p>Article 9</p>
                        <input class="center" name="article9" type="text" value="<?php echo $element['article9'] ?>" />
                        <p>Article 9 - Texte</p>
                        <textarea class="center" name="text_article9" cols="30" rows="75"><?php echo $element['text_article9'] ?></textarea>
                        <p>Article 10</p>
                        <input class="center" name="article10" type="text" value="<?php echo $element['article10'] ?>" />
                        <p>Article 10 - Texte</p>
                        <textarea class="center" name="text_article10" cols="30" rows="15"><?php echo $element['text_article10'] ?></textarea>
                        <p>Article 11</p>
                        <input class="center" name="article11" type="text" value="<?php echo $element['article11'] ?>" />
                        <p>Article 11 - Texte</p>
                        <textarea class="center" name="text_article11" cols="30" rows="15"><?php echo $element['text_article11'] ?></textarea>
                        <p>Article 12</p>
                        <input class="center" name="article12" type="text" value="<?php echo $element['article12'] ?>" />
                        <p>Article 12 - Texte</p>
                        <textarea class="center" name="text_article12" cols="30" rows="15"><?php echo $element['text_article12'] ?></textarea>

                      </form>
                  </div>
                     
                </div>
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