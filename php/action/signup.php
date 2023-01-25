<?php
require_once "php/config/config.php"; 

$password = $_POST['password'];
$email = $_POST['email'];

if(empty($email) && empty($password)){
    $_SESSION['signup_error'] = "Vous devez remplir tout les champs";
    header('Location:signinPage.php');
    exit();
}

else if(empty($password)){
    $_SESSION['signup_error'] = "le mot de passe ne peut pas être vide";
    header('Location:signinPage.php');
    exit();
}
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
    if ($email == $user['email']){
        $_SESSION['signup_error'] = "Il y a déjà un compte avec cette adresse email";
        header('Location:signinPage.php');
        exit();
    }
}

unset($_SESSION['signup_error']);
$sql = "INSERT INTO user(email,password,admin) VALUES(:email,MD5(:password),'0')";
$dataBinded=array(
    ':email'   => $email,   
    ':password'=> "fqkejqqjfoeyeiuqfhuize".$password,
);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

$_SESSION['success'] = "Vous avez été inscrit avec succès";
header('Location:signinPage.php');
exit();

?>