<?php require_once "../config/config.php";

if (empty($_SESSION['user']) || $_SESSION['user']['admin'] == 0){
        header('Location:index.php');//on le redirige sur la page d'accueil du site !
        exit();      
    }
    
$email = $_POST['email'];

$sql = "DELETE FROM user WHERE email=:email";

$dataBinded=array(
    ':email'=> $email
);
        
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
        
header('Location:../../admin.php');//on le redirige sur la page d'accueil du site !
exit();