<?php
require_once "php/config/config.php"; 

session_destroy();

header('Location:signup_in.php');
exit();