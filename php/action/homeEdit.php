<?php
require "../config/config.php";

// SAUVEGARDER LE FICHIER DANS UN DOSSIER SPECIFIQUE
$destination_bg_image = "img/".$_FILES['bg_image']['name'];
move_uploaded_file($_FILES['bg_image']['tmp_name'],"../../".$destination_bg_image);

// METTRE A JOUR LE FOND DE LA PAGE D'ACCEUIL ET LE THEME DE LA BOX
$sql="UPDATE admin_gestion SET theme_title=:theme_title, bg_image=:bg_image";
$dataBinded=array(
    ':theme_title'   => $_POST['theme_title'],
    ':bg_image'   => $destination_bg_image
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../../admin.php');
exit();
?>
