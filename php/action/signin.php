<?php
require_once "php/config/config.php"; 

unset($_SESSION['success']);

$email = $_POST['email'];
$password = $_POST['password'];
$sql = "Select * from user where email=:email and password=MD5(:password)";
$dataBinded=array(
':password'=> 'fqkejqqjfoeyeiuqfhuize'.$password,
':email'=> $email
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);

if(empty($user)){ //vérifie si le resultat est vide !
//non connecté
  $_SESSION['error']="Adresse Email ou Mot de Passe incorrect";
  header('Location:signinPage.php');
  exit();

}else{
  unset($_SESSION['error']);  
  $_SESSION['user'] = $user; //on enregistre que l'utilisateur est connecté
  $_SESSION['success'] = "Vous avez été connecté avec succès";
}
header('Location:signinPage.php');
exit();