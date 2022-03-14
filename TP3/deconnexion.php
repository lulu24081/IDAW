<?php
    session_start();
    session_unset();
    session_destroy();
    echo 'You have been logged out. <a href="login.php">connexion</a>';
?>
/* utiliser la fonction header ou alors le faire direcetemnt dans index en faisant une focntioo get qui teste)*/