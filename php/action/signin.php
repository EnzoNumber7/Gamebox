<?php
require_once "../config/config.php"; 

// RENVOYER UN MESSAGE D'ERREUR SI LE MDP OU L'EMAIL EST VIDE
if ((empty($_POST['email'])) || (empty($_POST['password']))){
  $_SESSION['error']="Il faut saisir une adresse email et un mot de passe";
  header('Location:../../signinPage.php');
  exit();
}

unset($_SESSION['success']);

$email = $_POST['email'];
$password = $_POST['password'];
// RECUPERER LE MDP ET L'EMAIL DANS LA BDD
$sql = "SELECT * FROM user where email=:email and password=MD5(:password)";
$dataBinded=array(
':password'=> 'fqkejqqjfoeyeiuqfhuize'.$password,
':email'=> $email
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);

// RENVOYER UN MESSAGE D'ERREUR SI L'UTILISATEUR N'A PAS DE COMPTE
if(empty($user)){ 
  $_SESSION['error']="Adresse Email ou Mot de Passe incorrect";
  header('Location:../../signinPage.php');
  exit();

}else{
  unset($_SESSION['error']);  
  $_SESSION['user'] = $user; // ENREGISTRER QUE L'UTILISATEUR EST CONNECTE
  $_SESSION['success'] = "Vous avez été connecté avec succès";
}
header('Location:../../signinPage.php');
exit();
?>