<?php require_once "php/config/config.php"; 

if isset($_SESSION['user']){
    $sql="SELECT :quantity, :price, :product_name FROM shopping_cart WHERE client_email = $_SESSION['user']";
    
    $dataBinded = array(
        ":quantity"=>$_SESSION["quantity"],
        ":price"=>$_SESSION["price"],
        ":product_name"=>$_SESSION["product_name"]
    );

    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO:FETCH_ASSOC);
} ?>