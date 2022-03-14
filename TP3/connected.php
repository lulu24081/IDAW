<?php
    // on simule une base de données
    $users = array(
    // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi' );
    $login = "anonymous";
    $errorText = ""; $successfullyLogged = false;

    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login']; 
        $tryPwd=$_POST['password'];   

    // si login existe et password correspond
    if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) { 
        $successfullyLogged = true;
        $login = $tryLogin; 
        session_start();
        $_SESSION['login']=$login;
        $_SESSION['password']=$tryPwd;
    } else
        $errorText = "Erreur de login/password"; 
    } else
        $errorText = "Merci d'utiliser le formulaire de login";
    if(!$successfullyLogged) {
        echo $errorText;
    } else {
        echo "<h1>Bienvenu ".$login." </h1>"; }

    echo " login :".$_POST['login']."<br>";
    echo " password :".$_POST['password']."<br>";
    
    
?>
<a href="index.php"> index</a>
<a href= "deconnexion.php"> Deconnexion</a>


