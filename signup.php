<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>

    <script src="./scripts/script.js" defer></script>

  </head>
  <body>
      <!--Sign up form-->
    <form class="" action="adduser.php" method="post">
      <label for="">Name</label>
        <input type="text" name="name" maxlength="45" value="" required><br>
      <label for="">Username</label>
        <input type="email" name="username" maxlength="45" value="" required><br>
      <label for="">Email</label>
        <input type="email" name="email" maxlength="45" value="" required><br>
        <?php

        //Msg du regEx password
        $msg = '';

        if (isset($_GET['msg'])) {
            if ($_GET['msg'] == 1) {
                $msg = 'Votre mot de passe doit contenir :<br> *12 caractères ou plus. <br>*Un chiffre et une lettre.<br>';
            }
            elseif ($_GET['msg'] == 2) {
                $msg = 'Votre mot de passe fait partie d\'une liste noire de mot de passe éssayer en un autre.<br>';
            }
        }

        echo $msg;
         ?>
      <label for="">Password</label>
        <input data-js-input type="password" name="password" maxlength="" value="" required><br>
      <label for="">City</label>
      <?php
        require ('include/connex.php');

        //Liste de villes

        $sql='SELECT cityId, cityName FROM city ORDER BY cityName ASC;';

        $result = mysqli_query($con, $sql);
       ?>
      <select class="" name="userCityId">
        <?php
          foreach ($result as $row) {
            echo "<option value=" .$row['cityId'] .">" .$row['cityName'] ."</option>";
          }


        ?>
    </select><br><br>
        <input type="submit" name="" value="Sign up"><br><br>
    </form>
    <form class="" action="login.php" method="post">
        <input type="submit" name="" value="Sign in">
    </form>
  </body>
</html>
