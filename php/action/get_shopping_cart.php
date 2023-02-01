<?php require_once "../config/config.php"; 



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
        $sql="INSERT INTO payment (qte,price,user_email) VALUES (1,79.99,:email)";

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
        $sql="UPDATE payment SET qte=qte+1 , price = price + 79.99 WHERE user_email=:email";
        
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
