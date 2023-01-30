<?php require_once "../config/config.php";

if (empty($_SESSION['user']) || $_SESSION['user']['admin'] == 0){
    header('Location:index.php');//on le redirige sur la page d'accueil du site !
    exit();      
}

$id = $_POST['id'];

if ($id == 5){
    $pageTitle = $_POST['page_title'];
    $title = $_POST['title'];
    $paragraph = $_POST['paragraph'];
    $article1 = $_POST['article1'];
    $textArticle1 = $_POST['text_article1'];
    $article2= $_POST['article2'];
    $textArticle2 = $_POST['text_article2'];
    $article3 = $_POST['article3'];
    $textArticle3 = $_POST['text_article3'];
    $article4 = $_POST['article4'];
    $textArticle4 = $_POST['text_article4'];

    $sql = "UPDATE CGV SET page_title=:page_title,
    paragraph=:paragraph,
    title=:title,
    article1=:article1,
    article2=:article2,
    article3=:article3,
    article4=:article4,
    text_article1=:text_article1,
    text_article2=:text_article2,
    text_article3=:text_article3,
    text_article4=:text_article4
    WHERE id=5";

    $dataBinded=array(
        ":page_title" => $pageTitle,
        ":paragraph" => $paragraph,
        ":title" => $title,
        ":article1" => $article1,
        ":article2" => $article2,
        ":article3" => $article3,
        ":article4" => $article4,
        ":text_article1" => $textArticle1,
        ":text_article2" => $textArticle2,
        ":text_article3" => $textArticle3,
        ":text_article4" => $textArticle4,
    );

    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
        
    header('Location:../../admin.php');//on le redirige sur la page d'accueil du site !
    exit();
}

else if ($id == 6){
    $title = $_POST['title'];
    $article1 = $_POST['article1'];
    $textArticle1 = $_POST['text_article1'];
    $article2= $_POST['article2'];
    $textArticle2 = $_POST['text_article2'];
    $article3 = $_POST['article3'];
    $textArticle3 = $_POST['text_article3'];
    $article3Bis = $_POST['article3_bis'];
    $textArticle3Bis = $_POST['text_article3_bis'];
    $article4 = $_POST['article4'];
    $textArticle4 = $_POST['text_article4'];
    $article5 = $_POST['article5'];
    $textArticle5 = $_POST['text_article5'];
    $article6= $_POST['article6'];
    $textArticle6 = $_POST['text_article6'];
    $article7 = $_POST['article7'];
    $textArticle7 = $_POST['text_article7'];
    $article8 = $_POST['article8'];
    $textArticle8 = $_POST['text_article8'];
    $article9 = $_POST['article9'];
    $textArticle9 = $_POST['text_article9'];
    $article10= $_POST['article10'];
    $textArticle10 = $_POST['text_article10'];
    $article11 = $_POST['article11'];
    $textArticle11 = $_POST['text_article11'];
    $article12 = $_POST['article12'];
    $textArticle12 = $_POST['text_article12'];

    $sql = "UPDATE CGV SET title=:title,
    article1=:article1,
    article2=:article2,
    article3=:article3,
    article3_bis=:article3_bis,
    article4=:article4,
    article5=:article5,
    article6=:article6,
    article7=:article7,
    article8=:article8,
    article9=:article9,
    article10=:article10,
    article11=:article11,
    article12=:article12,
    text_article1=:text_article1,
    text_article2=:text_article2,
    text_article3=:text_article3,
    text_article3_bis=:text_article3_bis,
    text_article4=:text_article4,
    text_article5=:text_article5,
    text_article6=:text_article6,
    text_article7=:text_article7,
    text_article8=:text_article8,
    text_article9=:text_article9,
    text_article10=:text_article10,
    text_article11=:text_article11,
    text_article12=:text_article12
    WHERE id=6";

    $dataBinded=array(
        ":title" =>$title,
        ":article1" => $article1,
        ":article2" => $article2,
        ":article3" => $article3,
        ":article3_bis" => $article3Bis,
        ":article4" => $article4,
        ":article5" => $article5,
        ":article6" => $article6,
        ":article7" => $article7,
        ":article8" => $article8,
        ":article9" => $article9,
        ":article10" => $article10,
        ":article11" => $article11,
        ":article12" => $article12,
        ":text_article1" => $textArticle1,
        ":text_article2" => $textArticle2,
        ":text_article3" => $textArticle3,
        ":text_article3_bis" => $textArticle3Bis,
        ":text_article4" => $textArticle4,
        ":text_article5" => $textArticle5,
        ":text_article6" => $textArticle6,
        ":text_article7" => $textArticle7,
        ":text_article8" => $textArticle8,
        ":text_article9" => $textArticle9,
        ":text_article10" => $textArticle10,
        ":text_article11" => $textArticle11,
        ":text_article12" => $textArticle12
    );

    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
        
    header('Location:../../admin.php');//on le redirige sur la page d'accueil du site !
    exit();
}
