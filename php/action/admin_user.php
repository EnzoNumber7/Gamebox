<?php require_once "../config/config.php";

if (empty($_SESSION['user']) || $_SESSION['user']['admin'] == 0){
        header('Location:index.php');//on le redirige sur la page d'accueil du site !
        exit();      
    }

unset($_SESSION['admin_error']);

$admin = $_POST['admin'];
$email = $_POST['email'];

if ($_SESSION['user']['email'] == $email){
    $_SESSION['admin_error'] = "Vous ne pouvez pas vous enlevez les droit d'administrateur !";
    header('Location:../../admin.php');//on le redirige sur la page d'accueil du site !
    exit();
}

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

?>

