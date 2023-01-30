<?php
require_once "../config/config.php";

$sql = "Select * from contact";
$pre = $pdo->prepare($sql);
$pre->execute();
$contacts = $pre->fetchAll(); 

foreach($contacts as $contact){

    if (isset($_POST["answer"])){

        $to = $contact['email'];
        $subject = "Gamebox";
        $message =$_POST["answer"];
        $additional_headers = "From: gamebox@gmail.com" . "\r\n";

        mail($to,$subject,$message,$additional_headers);
    }else{
        echo('error');
    }
}

//header('Location: ../index.php');//ici on emmène l'utilisateur sur index.php
?>