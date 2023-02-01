<?php require_once "../config/config.php";

// UN UTILISATEUR NON CONNECTE ET NON ADMIN N'A PAS ACCES AU PANEL ADMIN
if (empty($_SESSION['user']) || $_SESSION['user']['admin'] == 0){
        header('Location:index.php');
        exit();      
    }

unset($_SESSION['admin_error']);

$email = $_POST['email'];

// EMPECHER A UN UTILISATEUR DE SUPPRIMER SON PROPRE COMPTE
if ($_SESSION['user']['email'] == $email){
    $_SESSION['admin_error'] = "Vous ne pouvez pas vous supprimer votre compte !";
    header('Location:../../admin.php');
    exit();
}

// SUPPRIMER L'UTILISATEUR
$sql = "DELETE FROM user WHERE email=:email";

$dataBinded=array(
    ':email'=> $email
);
        
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
        
header('Location:../../admin.php');
exit();
?>