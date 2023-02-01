<?php
require "../config/config.php";

// SAUVEGARDER LES FICHIERS DANS DES DOSSIERS SPECIFIQUES
$destination_img = "img/".$_FILES['img']['name']; 
move_uploaded_file($_FILES['img']['tmp_name'],"../../".$destination_img);

$destination_img_2 = "img/".$_FILES['img_2']['name']; 
move_uploaded_file($_FILES['img_2']['tmp_name'],"../../".$destination_img_2);

// METTRE A JOUR LES PRODUITS DANS LA BDD
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
exit();
?>