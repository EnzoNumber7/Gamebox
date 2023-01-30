<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gamebox</title>
  </head>
  <body>
    <?php 
    require_once "php/config/config.php"; 
    require "php/components/nav.php";
    
    $sql = "Select * from CGV WHERE id=5";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $element = $pre->fetch(PDO::FETCH_ASSOC);
    ?>

    <div class="center container">
      <div class="Mention">
          <h1><?php echo $element['page_title'] ?></h1>
          <p>En vigueur depuis <?php echo $element['date']?> </p>
          <h2><?php echo $element['title'] ?></h2>
          <p><?php echo $element['paragraph'] ?></p> 
          <h3><?php echo $element['article1'] ?></h3>
          <p><?php echo $element['text_article1'] ?></p>  
          <h3><?php echo $element['article2'] ?></h3>
          <p><?php echo $element['text_article2'] ?></p>  
          <h3><?php echo $element['article3'] ?></h3>
          <p><?php echo $element['text_article3'] ?></p>  
          <h3><?php echo $element['article4'] ?></h3>    
          <p><?php echo $element['text_article4'] ?></p>  
      </div>
      <?php
      $sql = "Select * from CGV WHERE id=6";
      $pre = $pdo->prepare($sql);
      $pre->execute();
      $element = $pre->fetch(PDO::FETCH_ASSOC);
      ?>

      <div>
          <h2><?php echo $element['title'] ?></h2>
          <p>En vigueur depuis <?php echo $element['date']?> </p>
          <h3><?php echo $element['article1'] ?></h3>
          <p><?php echo $element['text_article1'] ?></p> 
          <h3><?php echo $element['article2'] ?></h3>
          <p><?php echo $element['text_article2'] ?></p>
          <h3><?php echo $element['article3'] ?></h3>
          <p><?php echo $element['text_article3'] ?></p>
          <h3><?php echo $element['article3_bis'] ?></h3>
          <p><?php echo $element['text_article3_bis'] ?></p>
          <h3><?php echo $element['article4'] ?></h3>
          <p><?php echo $element['text_article4'] ?></p>
          <h3><?php echo $element['article5'] ?></h3>
          <p><?php echo $element['text_article5'] ?></p>
          <h3><?php echo $element['article6'] ?></h3>
          <p><?php echo $element['text_article6'] ?></p>
          <h3><?php echo $element['article7'] ?></h3>
          <p><?php echo $element['text_article7'] ?></p>
          <h3><?php echo $element['article8'] ?></h3>
          <p><?php echo $element['text_article8'] ?></p>
          <h3><?php echo $element['article9'] ?></h3>
          <p><?php echo $element['text_article9'] ?></p>
          <h3><?php echo $element['article10'] ?></h3>
          <p><?php echo $element['text_article10'] ?></p>
          <h3><?php echo $element['article11'] ?></h3>
          <p><?php echo $element['text_article11'] ?></p>
          <h3><?php echo $element['article12'] ?></h3>
          <p><?php echo $element['text_article12'] ?></p>       
        </div>
    </div>
    <?php
    require "php/components/footer.php"
    ?>
</body>
</html>