<?php require_once "../config/config.php";

if (empty($_SESSION['user']) || $_SESSION['user']['admin'] == 0){
        header('Location:index.php');//on le redirige sur la page d'accueil du site !
        exit();      
    }

unset($_SESSION['admin_error']);

$email = $_POST['email'];

if ($_SESSION['user']['email'] == $email){
    $_SESSION['admin_error'] = "Vous ne pouvez pas vous supprimer votre compte !";
    header('Location:../../admin.php');//on le redirige sur la page d'accueil du site !
    exit();
}

$sql = "DELETE FROM user WHERE email=:email";

$dataBinded=array(
    ':email'=> $email
);
        
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
        
header('Location:../../admin.php');//on le redirige sur la page d'accueil du site !
exit();