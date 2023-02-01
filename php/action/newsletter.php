<?php
require_once "../config/config.php"; 

// AJOUTER LE CONTENU DE LA NEWSLETTER A LA BDD
$sql = "INSERT INTO newsletter(newsletter_title,text) VALUES(:newsletter_title,:text)";

$pre = $pdo->prepare($sql);

$pre->bindParam("newsletter_title", $_POST['object']);
$pre->bindParam("text", $_POST['text']);

$pre->execute();

header('Location: ../../contact.php');
exit();
?>