<?php
require_once "../config/config.php"; 

if (isset($_POST["email"]) && isset($_POST["text"])){

    $email = "aromanzin@gaming.tech";
    $object = "Gamebox: ".$_POST["email"];
    $text = "<b>".$_POST["text"]."<b>";
    $headers = 'MIME-Version: 1.0;Content-type: text/html; charset=utf8';

    if(mail($email,$object,$content,$headers)){
        echo('email sent!');
        //le mail est bien parti ! Pas d'erreur
    }else{
        //on a une erreur quelque part
        echo('something went wrong, please try again.');
    }
}


$sql = "INSERT INTO contact(object,text,email) VALUES(:object,:text,:email)";
$dataBinded=array(
    ':object'   => $object,   
    ':text'=> $text,
    ':email'=> $email
);

$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//header('Location: ../index.php');//ici on emmène l'utilisateur sur index.php
?>