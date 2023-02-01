<?php
require_once "php/config/config.php"; 

$password = $_POST['password'];
$email = $_POST['email'];
// SI L'UTILISATEUR A CHOISI DE SOUSCRIRE A LA NEWSLETTER, METTRE 1 DANS LA BDD
if ($_POST["newsletter"] == "on"){
    $newsletter = 1;
} else {
    $newsletter = 0;
}

// RENVOYER UN MESSAGE D'ERREUR SI LE FORM N'EST PAS COMPLET
if(empty($email) && empty($password)){
    $_SESSION['signup_error'] = "Vous devez remplir tout les champs";
    header('Location:signinPage.php');
    exit();
}

// RENVOYER UN MESSAGE D'ERREUR SI LE MDP EST VIDE
else if(empty($password)){
    $_SESSION['signup_error'] = "le mot de passe ne peut pas être vide";
    header('Location:signinPage.php');
    exit();
}
// RENVOYER UN MESSAGE D'ERREUR SI L'EMAIL EST VIDE
else if(empty($email)){
    $_SESSION['signup_error'] = "L'email ne peut pas être vide";
    header('Location:signinPage.php');
    exit();
}
unset($_SESSION['signup_error']);

$sql = "SELECT * FROM user";
$pre = $pdo->prepare($sql);
$pre->execute();
$queries = $pre->fetchAll();
foreach($queries as $user){
    // RENVOYER UN MESSAGE D'ERREUR SI L'EMAIL EST DEJA DANS LA BDD
    if ($email == $user['email']){
        $_SESSION['signup_error'] = "Il y a déjà un compte avec cette adresse email";
        header('Location:signinPage.php');
        exit();
    }
}

unset($_SESSION['signup_error']);
// INSERER LE NOUVEL UTILISATEUR A LA BDD
$sql = "INSERT INTO user(email,password,newsletter,admin) VALUES(:email,MD5(:password),:newsletter,'0')";
$dataBinded=array(
    ':email'   => $email,   
    ':password'=> "fqkejqqjfoeyeiuqfhuize".$password,
    ':newsletter' => $newsletter
);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

// RENVOYER UN MESSAGE SI L'UTILISATEUR A ETE AJOUTER A LA BDD
$_SESSION['success'] = "Vous avez été inscrit avec succès";
header('Location:signinPage.php');
exit();

?>