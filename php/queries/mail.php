<?php
require_once "../config/config.php"; 

// AJOUTER LE MAIL ENVOYER A LA BDD
$sql = "INSERT INTO contact(object,text,email) VALUES(:object,:text,:email)";

$pre = $pdo->prepare($sql);

$pre->bindParam("object", $_POST['object']);
$pre->bindParam("text", $_POST['text']);
$pre->bindParam("email", $_POST['email']);

$pre->execute();

header('Location: ../../contact.php');
exit();
?>