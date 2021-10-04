<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>

<?php
if (isset($_SESSION)) {
    echo 'session ouverte';
}
//Msg validation mdp

$msg = '';

if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 1) {
        $msg = 'Verifier le nom d\'utilisateur';
    }
    elseif ($_GET['msg'] == 2) {
        $msg = 'Essayer un autre mot de passe';
    }
}

echo $msg;
 ?>

 <!--Login form-->

    <form class="" action="authentication.php" method="post">
      <label for="">Username</label>
        <input type="text" name="username" maxlength="45" required><br>
      <label for="">Password</label>
        <input type="password" name="password" required><br>


        <input type="submit" name="" value="Login">

    </form>
  </body>
</html>
