<?php
session_start();
require ('include/connex.php');

foreach ($_POST as $key => $value) {
    $$key = mysqli_real_escape_string($con, $value);
}

$sql = "SELECT * FROM user WHERE username = '$username'";

$result = mysqli_query($con, $sql);

//Compter les rows 0 ou plusieurs = faux ici, 1 = vrai

$rowcount = mysqli_num_rows($result);

echo $rowcount;

//Verifier le mot de passe

if ($rowcount == 1) {

    $user = mysqli_fetch_assoc($result);
    //print_r($user);

    $dbpassword = $user['password'];

    //echo 'Input password : '.$password. '<br> DB password : '.$dbpassword;
    //die();


    if (password_verify($password, $dbpassword)) {

        session_regenerate_id();
        $_SESSION['userId'] = $user['userId'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);

        header('Location: site.php');
    }
    else {
        header('Location: login.php?msg=2');
    }
}
else {
    header('Location: login.php?msg=1');
}
 ?>
