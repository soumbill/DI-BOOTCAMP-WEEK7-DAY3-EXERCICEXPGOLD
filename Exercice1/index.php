<?php
session_start();

    if(isset($_POST['login'])){
        //Recuperer les données saisies 
        $username = htmlentities($_POST['username']);
        $password = ($_POST['password']);
        //hacher le password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        //Les conditions de connexion
        if (!empty($username) && !empty($password)) {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $hashed_password;

            $msg = 'Votre nom est: '. $_SESSION['username'] .' et votre mot de hashé est: ' . $_SESSION['password'];
        }
        else{
            $msg = ' Veuillez remplir les champs !';
        }

    }
    elseif(isset($_POST['logout'])){
        session_destroy();
        $msg = "Bye Mister !";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPGOLD-Exo1 | W7_D3</title>
</head>
<body>
    <h1>Exercise 1 : PHP Login With Session </h1>
    <form action="#" method="post">
        <h4><?php if(isset($msg)){echo $msg;} ?></h4>
        <input type="text" name="username" placeholder="username" />
        <input type="password" name="password" placeholder="password" />
        <button type="submit" name="login">Login</button>
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>