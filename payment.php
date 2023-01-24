<?php require_once "php/config/config.php"; ?>
<html>
<head>
  <title>Page de paiement</title>
  <meta charset="utf-8">
  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
</head>
<body>
  <div id="bouton-paypal"></div>
  <script>
    	paypal.Button.render({
      env: 'sandbox', 
      commit: true,
      style: {
        color: 'gold', 
        size: 'responsive' 
      },
      payment: function() {
       
        var CREATE_URL = 'php/paypal_create_payment.php';
        
        return paypal.request.post(CREATE_URL)
          .then(function(data) { 
            console.log(data);
            if (data.success) { 
            } else { 
               alert(data.msg);
               return false;   
            }
         });
      },
      onAuthorize: function(data, actions) {
       
        var EXECUTE_URL = 'php/paypal_execute_payment.php';
        
        var data = {
          paymentID: data.paymentID,
          payerID: data.payerID
        };

        return paypal.request.post(EXECUTE_URL, data)
          .then(function (data) { 
            console.log(data);
            if (data.success) { 
              alert("Paiement approuvé ! Merci !");
            } else {
              alert(data.msg);
            }
          });
        },
      onCancel: function(data, actions) {
        alert("Paiement annulé : vous avez fermé la fenêtre de paiement.");
      },
      onError: function(err) {
        alert("Paiement annulé : une erreur est survenue. Merci de bien vouloir réessayer ultérieurement.");
      }
    }, '#bouton-paypal');
  </script>
</body>
</html>