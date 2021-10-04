<?php

print_r($_POST);

require ('include/connex.php');

//RegEx : https://regexlib.com/Search.aspx?k=password&c=-1&m=5&ps=20 Eric Miller
//RegEx password 12 lettres+, 1 chiffre 1 lettres
//Blacklist de mot de passe

$passReg = '/^(?=.*[0-9]+.*)(?=.*[a-zA-Z]+.*)[0-9a-zA-Z]{12,}$/';
$blacklisting = array('11111111111a', 'monmotdepasse1', 'motdepassesuper1', '1234567890ab');


for ($i = 0; $i < count($blacklisting); $i++) {

    if ($_POST['password'] == $blacklisting[$i]) {
        //Retourne sur signup si mdp ne correspond pas au critère

        header('Location: signup.php?msg=2');
    }
}

if (preg_match($passReg, $_POST['password'])) {

    //Assignation du post en variable

    foreach ($_POST as $key => $value) {
        $$key = mysqli_real_escape_string($con, $value);
    }

    //Pssword hash php

    $passHash = password_hash($password, PASSWORD_BCRYPT);

    $sql = "INSERT INTO user (name, email, username, password, userCityId) VALUES ('$name', '$email', '$username', '$passHash', $userCityId);";


    //Error si la requête sql ne passe pas

    if (mysqli_query($con, $sql)) {

        header('Location: login.php');
    }
    //else {
    //    echo 'Error :( - '. mysqli_error($con);
    //}
}
else {
    //Retourne sur signup si mdp ne correspond pas au critère

    header('Location: signup.php?msg=1');
}








 ?>
