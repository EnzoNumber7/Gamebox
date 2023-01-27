<?php require_once "../config/config.php";

if (empty($_SESSION['user']) || $_SESSION['user']['admin'] == 0){
        header('Location:index.php');//on le redirige sur la page d'accueil du site !
        exit();      
    }

$admin = $_POST['admin'];
$email = $_POST['email'];

if ($admin == 0){
    $sql = "UPDATE user SET admin=1 WHERE email=:email";

    $dataBinded=array(
        ':email'=> $email
    );
        
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
        
    header('Location:../../admin.php');//on le redirige sur la page d'accueil du site !
    exit();
}

else if ($admin == 1){
    $sql = "UPDATE user SET admin=0 WHERE email=:email";

    $dataBinded=array(
        ':email'=> $email
    );
        
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
        
    header('Location:../../admin.php');//on le redirige sur la page d'accueil du site !
    exit();
}

header('Location:../../admin.php');//on le redirige sur la page d'accueil du site !
exit();
