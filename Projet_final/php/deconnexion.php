


<?php
    session_start();
    session_unset();
    session_destroy();
    /*echo 'You have been logged out. <a href="login.php">connexion</a>';*/
   
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Déconnexion</title>
        
        
    </head>
    <body style="background-color:#152733;">

        echo "<p style='text-align: center'>Vous êtes déconnecté. <a href="login.php">connexion</a></p>";
    </body>
</html>

    
