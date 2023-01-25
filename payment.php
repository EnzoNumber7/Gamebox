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
    <h2><iconify-icon inline icon="ic:round-shopping-cart"></iconify-icon>Résumé du Panier :</h2>
    <div class="row">  
      <h3 class="col l4 m4 s4 underline">Produit</h3>
      <h3 class="col l4 m4 s4 underline">Quantité</h3>
      <h3 class="col l4 m4 s4 underline">Prix/u</h3>
    </div>
    
  </div>

  <div id="smart-button-container">
    <div style="text-align: center;">
      <div id="paypal-button-container"></div>
    </div>
  </div>
  <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
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
            purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
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