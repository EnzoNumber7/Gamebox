<?php
require "../config/config.php";

//sauvegarder le fichier dans un dossier spécifique
$destination_img = "img/".$_FILES['img']['name']; //dossier "img"
move_uploaded_file($_FILES['img']['tmp_name'],"../../".$destination_img);

//sauvegarder le fichier dans un dossier spécifique
$destination_img_2 = "img/".$_FILES['img_2']['name']; //dossier "img"
move_uploaded_file($_FILES['img_2']['tmp_name'],"../../".$destination_img_2);

$sql = "SELECT * FROM products";
$dataBinded=array(
    ':produc_name'   => $_POST['name'],
    ':product_desc'   => $_POST['description'],
    ':img'   => $destination_img,
    ':img_2'   => $destination_img_2
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$data = $pre->fetch(PDO::FETCH_ASSOC);

$sql="UPDATE projects SET
    product_name=:product_name,
    product_desc=:product_desc,
    img=:img,
    img2=:img2
    WHERE id=:id";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//header('Location: ../../admin.php');
?>