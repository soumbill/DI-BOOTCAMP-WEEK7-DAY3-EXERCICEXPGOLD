<?php
session_start();

    //Initialiser la session
    $_SESSION['username'] = 'SoumBill';

    if (isset($_POST['name'])) {
        $name = htmlentities($_POST['name']);

        if($_SESSION['username'] == $name){ ?>
        <center>
            <h3>Welcome <?= $_SESSION['username']; ?></h3>
            <form action="#" method="post">
                <button type="submit" name="deconnexion">Deconnexion</button>
            </form> 
        </center>
             
     <?php
        }
        else{
            echo 'Je ne vous reconnais pas <a href="index.php">Connexion</a>';
        }
    }
    elseif(isset($_POST['deconnexion'])){
        session_destroy();
        header('Location: index.php');
    }
?>