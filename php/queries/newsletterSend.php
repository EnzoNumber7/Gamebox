<?php
require_once "../config/config.php";

$sql = "SELECT * FROM user WHERE newsletter = True";
$pre = $pdo->prepare($sql);
$pre->execute();
$contacts = $pre->fetchAll(); 

foreach($contacts as $contact){

    if (isset($_POST["text"])){

        // RECUPERER L'EMAIL DE LA PERSONNE QUI NOUS A CONTACTER POUR LUI REPONDRE
        $to = $contact['email'];
        $subject = $_POST["newsletter_title"];
        $message =$_POST["text"];
        $additional_headers = "From: gamebox@gmail.com" . "\r\n";

        // ENVOYER UN MAIL AVEC LE CONTENU DU FORMULAIRE DE REPONSE
        mail($to,$subject,$message,$additional_headers);
    }else{
        echo('aucun texte dans le $_POST');
    }
}