<?php 
require_once "../config/config.php"; 

//METTRE À JOUR LA NEWSLETTER
$sql="UPDATE newsletter SET newsletter_title=:newsletter_title, text=:text";
$dataBinded=array(
    ':newsletter_title'   => $_POST['newsletter_title'],
    ':text'   => $_POST['text']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

header('Location: ../../admin.php');
exit();
?>