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

  <body>

    <?php require "php/components/nav.php"; ?> 

    <h1 class="center">Page Administrateur</h1>

    <?php if (isset($_SESSION['admin_error'])){ ?>
      <p class="center error"><?php echo $_SESSION['admin_error']; ?></p>
    <?php } ?>

    <?php
    $sql = "SELECT * FROM user";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $users = $pre->fetchAll(); ?>
    
    <ul class="collapsible">
      <li>
        <!-- GESTION DES UTILISATEURS -->
        <div class="collapsible-header main-color"><h2>Utilisateurs</h2></div>
        <div class="collapsible-body main-color">
          <?php foreach($users as $user){ ?>
            <div class="container row">
              <div class="col s6 l3">
                <p>Adresse Mail : <?php echo $user['email']?></p>
              </div>
              <div class="col s6 l3">
                <p><?php if ($user['admin']==1){
                      echo "Administrateur : Oui";
                    } else {
                      echo "Administrateur : Non"; } ?></p>
              </div>
              <div class="col s6 l3">
                <form class="center" method="post" action="php/queries/adminUser.php">
                  <input type="hidden" name="email" value="<?php echo $user['email'];?>">
                  <input type="hidden" name="admin" value="<?php echo $user['admin'];?>">
                  <button class="margin-top button-admin btn waves-effect waves-light button-style" type="submit" name="adminBtn">
                    <?php if ($user['admin']==1){
                      echo "Démettre Admin";
                    } else {
                      echo "Mettre Admin"; } ?>
                  </button>
                </form>
              </div>
              <div class="col s6 l3">
                <form method="post" action="php/queries/deleteUser.php" class="center">
                  <input type="hidden" name="id" value="<?php echo $user['email'];?>">
                  <button class="margin-top button-admin btn waves-effect waves-light button-style" type="submit" name="delete">Supprimer</button>
                </form>
              </div>
            </div>
          <?php } ?>
        </div>
      </li>
      
      <li>
        <!-- GESTION DE REPONSE AU MAILS DE LA PAGE CONTACT -->
        <div class="collapsible-header main-color"><h2 class="center">Mails de la Page Contact</h2></div>
        <div class="collapsible-body main-color">
          <?php   
          $sql = "SELECT * from contact";
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
                <form method="post" action="php/queries/answer.php">
                    <textarea class="center" name="answer" cols="30" rows="10"></textarea> <br>
                    <?php if($contact['answer'] == 0) { ?>
                      <input class="inputBtn button-style" type="submit" name="sign" value="Envoyer"/>
                    <?php } else { ?>
                      <p>Réponse déjà envoyée</p>
                    <?php } ?>
                </form>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>
      </li>

      <li>
        <!-- GESTION DE MODIFICATION DE LA BOX DU MOIS -->
        <div class="collapsible-header main-color"><h2>Modification Box du Mois</h2></div>
        <div class="collapsible-body main-color">
          <?php
          $sql = "SELECT * FROM admin_gestion";
          $pre = $pdo->prepare($sql);
          $pre->execute();
          $homedata = $pre->fetch(PDO::FETCH_ASSOC); ?>

          <h3 class="center">Modifier la Page d'Acceuil</h3>

          <form class="input-field center" method="post" action="php/queries/homeEdit.php" enctype="multipart/form-data">
              <h4>Nom de la box</h4>
              <input name="theme_title" class="center" type="text" value="<?php echo $homedata['theme_title']?>"/>
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

          <h3 class="center">Modifier les Produits</h3>

          <?php foreach($productsdata as $products){ ?>
              
            <form class="input-field center" method="post" action="php/queries/productEdit.php" enctype="multipart/form-data">
              <h4>Produit <?php echo $products['id']; ?></h4>
              <input type='hidden' name='id' value="<?php echo $products['id'] ?>" />
              <h5>Nom</h5>
              <input name="product_name" class="center" type="text" value="<?php echo $products['product_name']?>"/>
              <h5>Description</h5>
              <textarea class="center" name="product_desc" cols="30" rows="10"><?php echo $products['product_desc'] ?></textarea>
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
        <!-- GESTION DE MODIFICATION DES MENTIONS LEGALES ET CGV -->
        <div class="collapsible-header main-color"><h2 class="center">Mentions Légales et Conditions Générales de Vente</h2></div>
          <div class="collapsible-body main-color">
            <div class="row center input-field">
              <?php
              $sql = "Select * from CGV WHERE id=6";
              $pre = $pdo->prepare($sql);
              $pre->execute();
              $element = $pre->fetch(PDO::FETCH_ASSOC);?>

              <div class="col s12 l6">
                <h3> Conditions Générales de Vente </h3>
                <form method="post" action="php/queries/updateCGV.php">
                  <input type="hidden" name="id" value="<?php echo $element['id'];?>">
                  <p>Sous Titre</p>
                  <textarea class="center" name="title" cols="30" rows="10"><?php echo $element['title'] ?></textarea>
                  <p>Article 1</p>
                  <input class="center" name="article1" type="text" value="<?php echo $element['article1'] ?>" />
                  <p>Article 1 - Texte</p>
                  <textarea class="center" name="text_article1" cols="30" rows="30"><?php echo $element['text_article1'] ?></textarea>
                  <p>Article 2</p>
                  <input class="center" name="article2" type="text" value="<?php echo $element['article2'] ?>"/>
                  <p>Article 2 - Texte</p>
                  <textarea class="center" name="text_article2" cols="30" rows="30"><?php echo $element['text_article2'] ?></textarea>
                  <p>Article 3</p>
                  <input class="center" name="article3" type="text" value="<?php echo $element['article3'] ?>"/>
                  <p>Article 3 - Texte</p>
                  <textarea class="center" name="text_article3" cols="30" rows="20"><?php echo $element['text_article3'] ?></textarea>
                  <p>Article 3 Bis</p>
                  <input class="center" name="article3_bis" type="text" value="<?php echo $element['article3_bis'] ?>"/>
                  <p>Article 3 Bis - Texte</p>
                  <textarea class="center" name="text_article3_bis" cols="30" rows="40"><?php echo $element['text_article3_bis'] ?></textarea>
                  <p>Article 4</p>
                  <input class="center" name="article4" type="text" value="<?php echo $element['article4'] ?>"/>
                  <p>Article 4 - Texte</p>
                  <textarea class="center" name="text_article4" cols="30" rows="15"><?php echo $element['text_article4'] ?></textarea>
                  <p>Article 5</p>
                  <input class="center" name="article5" type="text" value="<?php echo $element['article5'] ?>" />
                  <p>Article 5 - Texte</p>
                  <textarea class="center" name="text_article5" cols="30" rows="50"><?php echo $element['text_article5'] ?></textarea>
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
                  <textarea class="center" name="text_article8" cols="30" rows="80"><?php echo $element['text_article8'] ?></textarea>
                  <p>Article 9</p>
                  <input class="center" name="article9" type="text" value="<?php echo $element['article9'] ?>" />
                  <p>Article 9 - Texte</p>
                  <textarea class="center" name="text_article9" cols="30" rows="85"><?php echo $element['text_article9'] ?></textarea>
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
                  <textarea class="center" name="text_article12" cols="30" rows="20"><?php echo $element['text_article12'] ?></textarea>
                  <div>
                      <button class="margin-top button-admin btn waves-effect waves-light button-style" type="submit" name="uptdate">Modifier</button>
                  </div>
                </form>
              </div>

            <?php
            $sql = "SELECT * FROM CGV WHERE id=5";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $element = $pre->fetch(PDO::FETCH_ASSOC);?>
            <div class="col s12 l6">
              <h3> Mentions Légales </h3>  
              <form method="post" action="php/queries/updateCGV.php">
                <input type="hidden" name="id" value="<?php echo $element['id'];?>">
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
                <div>
                  <input class="inputBtn button-style" type="submit" value="Modifier">
                </div>
              </form>
            </div>
          </div>
        </div>
      </li>
      
      <li>
        <!-- Création/envoi de la newsletter -->
        <div class="collapsible-header main-color"><h2 class="center">Newsletter</h2></div>
        <div class="collapsible-body main-color">
          <?php 
            $sql = "SELECT * from newsletter";
            $pre = $pdo->prepare($sql);
            $pre->execute();
            $newsletter = $pre->fetch(PDO::FETCH_ASSOC);
          ?>
          <h3 class="center">Modifier/Ajouter le contenu de la newsletter</h3>

          <form class="input-field center" method="post" action="php/queries/newsletterEdit.php" enctype="multipart/form-data">
              <h4>Objet/Sujet de la newsletter</h4>
              <input name="newsletter_title" class="center" type="text" value="<?php echo $newsletter['newsletter_title']?>"/>
              <h4>Contenu de la newsletter</h4>
              <textarea class="center" name="text" cols="30" rows="10"><?php echo $newsletter['text'] ?></textarea><br />
              <input class="inputBtn button-style" type="submit" value="Modifier">
          </form>
          <form class="input-field center" method="post" action="php/queries/newsletterSend.php" enctype="multipart/form-data">
            <input name="newsletter_title" type="hidden" value="<?php echo $newsletter['newsletter_title']?>"/>
            <input name="text" type="hidden" value="<?php echo $newsletter['text'] ?>"/>
            <input class="inputBtn button-style" type="submit" value="Envoyer">
          </form>
        </div>
        
      </li>
    </ul>

    <?php
    $sql = "SELECT * FROM admin_gestion";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $maintenance = $pre->fetch(PDO::FETCH_ASSOC); ?>
   
    <!-- POSSIBILITES DE METTRE LE SITE EN MAINTENANCE -->
    <form class="center" method="post" action="php/queries/maintenance.php">
      <input type="hidden" name="maintenance" value=<?php echo $maintenance['maintenance'] ;?>>
      <button class="margin-top button-admin btn waves-effect waves-light button-style" type="submit" name="maintenanceBtn">
        <?php if ($maintenance['maintenance']==1){
            echo "Fin de Maintenance";
        }
        else{
            echo "Maintenance";
        }?>
      </button>
    </form>

    <?php require "php/components/footer.php"; ?>

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
