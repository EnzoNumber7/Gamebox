<?php require_once "../config/config.php"; 

// DECONNECTER L'UTILISATEUR
session_destroy();

header('Location: ../../signinPage.php');
exit();
?>