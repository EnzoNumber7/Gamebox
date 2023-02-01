<?php require_once "php/components/nav.php"; ?>

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

    <h1 class="title-font center">Panier/Paiement</h1>

    <div class="container light-border">
      <h2 class='center'><iconify-icon inline icon="ic:round-shopping-cart"></iconify-icon>Résumé du Panier :</h2>
      <?php if (isset($_SESSION['user'])){

        $sql = "SELECT stock FROM box";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $stock = $pre->fetch(PDO::FETCH_ASSOC);

        // SI LE STOCK EST EPUISE, LE SIGNALER A L'UTILISATEUR
        if ($stock['stock'] == 0){ ?>
          <p class="error center">Stock Epuisé</p>
          <div class="row hide-on-small-only">  
            <h3 class="col l4 m4 s4 underline center">Produit</h3>     
            <h3 class="col l4 m4 s4 underline center">Quantité</h3> 
            <h3 class="col l4 m4 s4 underline center">Prix/u</h3>
          </div>
        <?php } else {

          $email = $_SESSION['user']['email'];

          $sql = "SELECT product_name,qte,price FROM payment WHERE user_email=:email";
            $dataBinded = array(
              ":email"=>$email
            );
          $pre = $pdo->prepare($sql);
          $pre->execute($dataBinded);
          $users = $pre->fetch(PDO::FETCH_ASSOC); ?>

          <!-- PANIER PLEIN DE L'UTILISATEUR SUR GRAND ECRAN -->
          <div class="row hide-on-small-only">  
            <h3 class="col l4 m4 s4 underline center">Produit</h3>     
            <h3 class="col l4 m4 s4 underline center">Quantité</h3> 
            <h3 class="col l4 m4 s4 underline center">Prix/u</h3>
            <p class="col l4 m4 s4 center"><?php echo $users['product_name'] ?></p>
            <p class="col l4 m4 s4 center"><?php echo $users['qte'] ?></p>
            <p class="col l4 m4 s4 center"><?php echo $users['price'] ?></p>
          </div>
          <!-- PANIER PLEIN DE L'UTILISATEUR SUR PETIT ECRAN -->
          <div class=" hide-on-med-and-up">  
            <h3 class="col l4 m4 s4 underline center">Produit</h3>     
            <p class="col l4 m4 s4 center"><?php echo $users['product_name'] ?></p>
            <h3 class="col l4 m4 s4 underline center">Quantité</h3> 
            <p class="col l4 m4 s4 center"><?php echo $users['qte'] ?></p>
            <h3 class="col l4 m4 s4 underline center">Prix/u</h3>
            <p class="col l4 m4 s4 center"><?php echo $users['price'] ?></p>
          </div>
        <?php }
      } else { ?>
        <!-- PANIER VIDE DE L'UTILISATEUR SUR GRAND ECRAN -->
        <div class="row hide-on-small-only ">  
          <h3 class="col l4 m4 s4 underline center">Produit</h3>     
          <h3 class="col l4 m4 s4 underline center">Quantité</h3> 
          <h3 class="col l4 m4 s4 underline center">Prix/u</h3>
        </div>

        <!-- PANIER VIDE DE L'UTILISATEUR SUR PETIT ECRAN -->
        <div class="row hide-on-med-and-up">  
          <h3 class="col l4 m4 s4 underline center">Produit</h3>     
          <h3 class="col l4 m4 s4 underline center">Quantité</h3> 
          <h3 class="col l4 m4 s4 underline center">Prix/u</h3>
        </div>
      <?php } ?>
    </div>

    <!-- BOUTON POUR LE PAYEMENT -->
    <div id="smart-button-container">
      <div style="text-align: center;">
        <div id="paypal-button-container"></div>
      </div>
    </div>
    
    <!-- FONCTIONNALITES DES BOUTONS DE PAYEMENT -->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=EUR" data-sdk-integration-source="button-factory"></script>
    <script>
      function initPayPalButton() {
        paypal.Buttons({
          style: {
            shape: 'pill',
            color: 'gold',
            layout: 'vertical',
            label: 'paypal',
            
          },

          createOrder: function(data, actions) {
            return actions.order.create({
              purchase_units: [{"amount":{"currency_code":"EUR","value":79.99}}]
            });
          },

          onApprove: function(data, actions) {
            return actions.order.capture().then(function(orderData) {
              
              // DETAILS COMPLETS DISPONIBLES
              console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

              // AFFICHER UN MESSAGE DE REUSSITE SUR LA PAGE
              const element = document.getElementById('paypal-button-container');
              element.innerHTML = '';
              element.innerHTML = '<h3>Thank you for your payment!</h3>';

              // OU REDIRIGER VERS A UN AUTRE URL
              
            });
          },

          onError: function(err) {
            console.log(err);
          }
        }).render('#paypal-button-container');
      }
      initPayPalButton();
    </script>

    <?php require_once "php/components/footer.php"; ?>

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