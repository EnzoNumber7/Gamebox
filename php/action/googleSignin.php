<?php require_once "../config/config.php"; 

require '../../vendor/autoload.php';

if (isset($_POST['credential'])){
    if (!empty($_POST['credential'])){
      if (empty($_COOKIE['g_csrf_token']) || empty($_POST['g_csrf_token']) || $_COOKIE['g_csrf_token'] != $_POST['g_csrf_token']){
        $_SESSION['error'] = "Erreur durant la connexion";
        exit();
      }
    }
    
    $clientId = "696200199800-m2l2r3sfbnqgj5sdrpdauqanslk6e3ru.apps.googleusercontent.com";
    $client = new Google_Client(['client_id' => $clientId]);  // SPECIFIER L'ID CLIENT DANS L'APP QUI A ACCES AU BACKEND
    
    $guzzleClient = new \GuzzleHttp\Client(array( 'curl' => array( CURLOPT_SSL_VERIFYPEER => false, ), ));
    $client->setHttpClient($guzzleClient);

    $id_token = $_POST['credential'];
    $user = $client->verifyIdToken($id_token);

    if ($user) {

      // AJOUTER LES DONNEES DE L'UTILISATEUR DANS LA BDD S'IL ELLE N'EXISTENT PAS
    
      $sql = "SELECT * FROM user WHERE email=:email";
      $dataBinded=array(
          ':email'   => $user["email"],   
      );
      $pre = $pdo->prepare($sql);
      $pre->execute($dataBinded);
      $connect = $pre->fetch(PDO::FETCH_ASSOC);

      if (empty($connect)){
        $sql = "INSERT INTO user(email,password,admin) VALUES(:email,MD5(:password),'0')";
        $dataBinded=array(
            ':email'   => $user["email"],   
            ':password'=> "fqkejqqjfoeyeiuqfhuize"."",
        );

        $pre = $pdo->prepare($sql);
        $pre->execute($dataBinded);
      }

        // CONNECTER L'UTILISATEUR

        $_SESSION['user']=$connect;
    }
  }

header("Location:../../signinPage.php");
exit();
?>
