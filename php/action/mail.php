<?php
require_once "../config/config.php"; 

$sql = "INSERT INTO contact(object,text,email) VALUES(:object,:text,:email)";
//On prépare la requête
$pre = $pdo->prepare($sql);
//On va bind les valeurs avec la fonction bindParam
$pre->bindParam("object", $_POST['object']);
$pre->bindParam("text", $_POST['text']);
$pre->bindParam("email", $_POST['email']);
//On execute la requête
$pre->execute();

header('Location: ../../contact.php');//ici on emmène l'utilisateur sur index.php
?>