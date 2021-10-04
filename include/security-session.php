<?php

if (isset($_SESSION)) {
}
else {
    session_start();
}

//Session fingerprint pour bloqué la navigation url

if (!isset($_SESSION['fingerPrint']) OR $_SESSION['fingerPrint'] != md5($_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR'])) {
    header('Location: login.php');
}



 ?>
