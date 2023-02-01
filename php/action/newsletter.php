<?php
require_once "../config/config.php"; 

$sql = "INSERT INTO newsletter(newsletter_title,text) VALUES(:newsletter_title,:text)";
//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("newsletter_title", $_POST['object']);
$pre->bindParam("text", $_POST['text']);
//On execute la requête
$pre->execute();

header('Location: ../../contact.php');
?>