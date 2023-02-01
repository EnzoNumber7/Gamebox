<?php require_once "../config/config.php";

$maintenance = $_POST['maintenance'];

// SI LE SITE EST PAS EN MAINTENANCE, LE METTRE EN MAINTENANCE
if ($maintenance == 0){
    $sql = "UPDATE admin_gestion SET maintenance = 1";

    $pre = $pdo->prepare($sql);
    $pre->execute();

    header('Location:../../admin.php');
    exit();
}

// SI LE SITE EST EN MAINTENANCE, LE RETIRER DE LA MAINTENANCE
else if ($maintenance == 1){
    $sql = "UPDATE admin_gestion SET maintenance = 0";

    $pre = $pdo->prepare($sql);
    $pre->execute();
        
    header('Location:../../admin.php');
    exit();
}
?>