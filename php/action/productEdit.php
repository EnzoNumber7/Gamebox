<?php
require "../config/config.php";

//sauvegarder le fichier dans un dossier spécifique
$destination_img = "img/".$_FILES['img']['name']; //dossier "img"
move_uploaded_file($_FILES['img']['tmp_name'],"../../".$destination_img);

//sauvegarder le fichier dans un dossier spécifique
$destination_img_2 = "img/".$_FILES['img_2']['name']; //dossier "img"
move_uploaded_file($_FILES['img_2']['tmp_name'],"../../".$destination_img_2);

$sql="UPDATE products SET img=:img, product_name=:product_name, product_desc=:product_desc, img_2=:img_2 WHERE id=:id";
$dataBinded=array(
    ':img'   => $destination_img,
    ':product_name'   => $_POST['product_name'],
    ':product_desc' => $_POST['product_desc'],
    ':img_2'    => $destination_img_2,
    ':id'   => $_POST['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../../admin.php');
?>