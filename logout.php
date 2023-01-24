<?php
require_once "php/config/config.php"; 

session_destroy();

header('Location:signinPage.php');
exit();