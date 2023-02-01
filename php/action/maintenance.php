<?php require_once "../config/config.php";

$maintenance = $_POST['maintenance'];

if ($maintenance == 0){
    $sql = "UPDATE admin_gestion SET maintenance = 1";

    $pre = $pdo->prepare($sql);
    $pre->execute();

    header('Location:../../admin.php');//on le redirige sur la page d'accueil du site !
    exit();
}

else if ($maintenance == 1){
    $sql = "UPDATE admin_gestion SET maintenance = 0";

    $pre = $pdo->prepare($sql);
    $pre->execute();
        
    header('Location:../../admin.php');//on le redirige sur la page d'accueil du site !
    exit();
}

?>