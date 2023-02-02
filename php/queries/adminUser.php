<?php require_once "../config/config.php";

// UN UTILISATEUR NON CONNECTE ET NON ADMIN N'A PAS ACCES AU PANEL ADMIN
if (empty($_SESSION['user']) || $_SESSION['user']['admin'] == 0){
        header('Location: ../../index.php');
        exit();      
    }

unset($_SESSION['admin_error']);

$admin = $_POST['admin'];
$email = $_POST['email'];

// EMPECHER UN ADMIN DE S'ENLEVER LES DROITS ADMIN
if ($_SESSION['user']['email'] == $email){
    $_SESSION['admin_error'] = "Vous ne pouvez pas vous enlever les droit d'administrateur !";
    header('Location:../../admin.php');
    exit();
}

// PERMETTRE A UN UTILISATEUR DE DONNER LES DROITS ADMIN A UN AUTRE UTILISATEUR QUI NE LES A PAS
if ($admin == 0){
    $sql = "UPDATE user SET admin=1 WHERE email=:email";

    $dataBinded=array(
        ':email'=> $email
    );
        
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
        
    header('Location:../../admin.php');
    exit();
}

// SI IL EST ADMIN, LUI DONNER LES DROITS ADMIN
else if ($admin == 1){
    $sql = "UPDATE user SET admin=0 WHERE email=:email";

    $dataBinded=array(
        ':email'=> $email
    );
        
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
        
    header('Location:../../admin.php');
    exit();
}

?>

