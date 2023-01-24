<?php
require_once "../config/config.php"; 

session_destroy();

header('Location:../../signup_in.php');
exit();