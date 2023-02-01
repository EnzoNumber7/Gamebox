<?php require_once "php/components/nav.php"; ?>
<html>
<head>
  <title>Page de paiement</title>
  <meta charset="utf-8">
  <script src="https://www.paypal.com/sdk/js"></script>

  <!--Import materialize-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css">
  <link type="text/css" rel="stylesheet" href="css/style.css">



</head>
<body>
  <h1 class="title-font center">Panier/Paiement</h1>

  <div class="container light-border">
      <h2 class='center'><iconify-icon inline icon="ic:round-shopping-cart"></iconify-icon>Résumé du Panier :</h2>
      <?php
      if (isset($_SESSION['user'])){
        $sql = "Select stock from box";
        $pre = $pdo->prepare($sql);
        $pre->execute();
        $stock = $pre->fetch(PDO::FETCH_ASSOC);

        if ($stock['stock'] == 0){
          ?> <p class="error center">Stock Epuisé</p>
          <div class="row hide-on-small-only">  
            <h3 class="col l4 m4 s4 underline center">Produit</h3>     
            <h3 class="col l4 m4 s4 underline center">Quantité</h3> 
            <h3 class="col l4 m4 s4 underline center">Prix/u</h3>
          </div>
        <?php
        }
      else{
        $email = $_SESSION['user']['email'];
        $sql = "Select product_name,qte,price from payment WHERE user_email=:email";
        $dataBinded = array(
          ":email"=>$email
        );
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        $users = $pre->fetch(PDO::FETCH_ASSOC); ?>

        <div class="row hide-on-small-only">  
          <h3 class="col l4 m4 s4 underline center">Produit</h3>     
          <h3 class="col l4 m4 s4 underline center">Quantité</h3> 
          <h3 class="col l4 m4 s4 underline center">Prix/u</h3>
          <p class="col l4 m4 s4 center"><?php echo $users['product_name'] ?></p>
          <p class="col l4 m4 s4 center"><?php echo $users['qte'] ?></p>
          <p class="col l4 m4 s4 center"><?php echo $users['price'] ?></p>
        </div>
        <div class=" hide-on-med-and-up">  
          <h3 class="col l4 m4 s4 underline center">Produit</h3>     
          <p class="col l4 m4 s4 center"><?php echo $users['product_name'] ?></p>
          <h3 class="col l4 m4 s4 underline center">Quantité</h3> 
          <p class="col l4 m4 s4 center"><?php echo $users['qte'] ?></p>
          <h3 class="col l4 m4 s4 underline center">Prix/u</h3>
          <p class="col l4 m4 s4 center"><?php echo $users['price'] ?></p>
        </div>
      <?php }
        

      } 
      else{ ?>
        <div class="row hide-on-small-only ">  
        <h3 class="col l4 m4 s4 underline center">Produit</h3>     
        <h3 class="col l4 m4 s4 underline center">Quantité</h3> 
        <h3 class="col l4 m4 s4 underline center">Prix/u</h3>
        
        <div class="row hide-on-med-and-up">  
        <h3 class="col l4 m4 s4 underline center">Produit</h3>     
        <h3 class="col l4 m4 s4 underline center">Quantité</h3> 
        <h3 class="col l4 m4 s4 underline center">Prix/u</h3>

      </div>
      <?php }?>
    
    
  </div>

  <div id="smart-button-container">
    <div style="text-align: center;">
      <div id="paypal-button-container"></div>
    </div>
  </div>
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
            
            // Full available details
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));

            // Show a success message within this page, e.g.
            const element = document.getElementById('paypal-button-container');
            element.innerHTML = '';
            element.innerHTML = '<h3>Thank you for your payment!</h3>';

            // Or go to another URL:  actions.redirect('thank_you.html');
            
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
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</body>

</html>