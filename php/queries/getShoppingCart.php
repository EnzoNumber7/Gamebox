<?php require_once "../config/config.php"; 

// VERIFICATION SI L'UTILISATEUR EST CONNECTE
if (isset($_SESSION['user'])){
    $email= $_SESSION['user']['email'];
    $sql="SELECT * FROM payment WHERE user_email =:email";
    $dataBinded = array(
        ":email"=>$email
    );

    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $data = $pre->fetch(PDO::FETCH_ASSOC);

    if (empty($data)){
        // AJOUTER UNE BOX AU PANIER
        $sql="INSERT INTO payment (product_name,qte,price,user_email) VALUES ('Box',1,79.99,:email)";

        $dataBinded = array(
            ":email"=>$email
        );

        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        $data = $pre->fetch(PDO::FETCH_ASSOC);

        // ENLEVER UN BOX DU STOCK
        $sql="UPDATE box SET stock=stock-1";
        
        $dataBinded = array(
            ":email"=>$email
        );

        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        $data = $pre->fetch(PDO::FETCH_ASSOC);

        header("Location:../../payment.php");
        exit();
    }

    else{
        // AJOUTER UNE BOX DE PLUS AU PANIER
        $sql="UPDATE payment SET qte=qte+1 , price = price + 79.99 WHERE user_email=:email";
        
        $dataBinded = array(
            ":email"=>$email
        );

        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        $data = $pre->fetch(PDO::FETCH_ASSOC);

        // ENLEVER UNE BOX DU STOCK
        $sql="UPDATE box SET stock=stock-1";
        
        $dataBinded = array(
            ":email"=>$email
        );

        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
        $data = $pre->fetch(PDO::FETCH_ASSOC);  

        header("Location:../../payment.php");
        exit();
    
    }
    
}

else {
    $_SESSION['error'] =  'Vous devez etre connecter pour passer une commande';
    header("Location:../../signinPage.php");
    exit();
}?>
