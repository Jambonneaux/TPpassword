<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>In site</title>
    </head>
    <body>

        <?php
        session_start();

        include ('include/connex.php');
        include ('include/security-session.php');

        //Msg de bienvenu

        echo '<h1>Bienvenu dans mon site vide utilisateur: '. $_SESSION['name']. '</h1>';
        $userId = $_SESSION['userId'];

        //Link de Session id avec db

        $sql = "SELECT * FROM user WHERE userId = $userId;";

        $result = mysqli_query($con, $sql);

        //Affichage mdp encrypter

        foreach ($result as $key) {
            echo 'Votre mot de passe encrypter est: ' .$key['password'];
        }



         ?>
         <br>
         <!--Logout et destroy session-->

         <form class="" action="logout.php" method="post">
             <input type="submit" name="" value="Logout">

         </form>
    </body>
</html>
