<?php
require_once "../config/config.php";

$sql = "SELECT * FROM contact";
$pre = $pdo->prepare($sql);
$pre->execute();
$contacts = $pre->fetchAll(); 

foreach($contacts as $contact){

    if (isset($_POST["answer"])){

        // RECUPERER L'EMAIL DE LA PERSONNE QUI NOUS A CONTACTER POUR LUI REPONDRE
        $to = $contact['email'];
        $subject = "Gamebox";
        $message =$_POST["answer"];
        $additional_headers = "From: gamebox@gmail.com" . "\r\n";

        // ENVOYER UN MAIL AVEC LE CONTENU DU FORMULAIRE DE REPONSE
        mail($to,$subject,$message,$additional_headers);
        $sql = "UPDATE contact SET `answer` = '1' WHERE id = :id";
        $dataBinded = array(
            ':id' => $contact['id']
        );
        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
    }else{
        echo('error');
    }
}

//header('Location: ../index.php');
//exit();
?>