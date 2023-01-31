<?php
require "../config/config.php";

//sauvegarder le fichier dans un dossier spécifique
$destination_bg_image = "img/".$_FILES['bg_image']['name']; //dossier "img"
move_uploaded_file($_FILES['bg_image']['tmp_name'],"../../".$destination_bg_image);

$sql="UPDATE admin_gestion SET theme_title=:theme_title, bg_image=:bg_image";
$dataBinded=array(
    ':theme_title'   => $_POST['theme_title'],
    ':bg_image'   => $destination_bg_image
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../../admin.php');
?>
