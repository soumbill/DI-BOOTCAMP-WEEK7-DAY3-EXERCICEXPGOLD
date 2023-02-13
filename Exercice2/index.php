<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXPGOLD-Exo2 | W7_D3</title>
</head>
<body>
    <center>
        <h1>Exercise 2 : Set Session On Login</h1>
        <form action="submit.php" method="post">
            <input type="text" name="name" placeholder="Votre nom !">
            <button type="submit" name="submit">Connexion</button>
        </form>
    </center>
</body>
</html>