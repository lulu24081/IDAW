<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Database Connexion Test</title>
</head>

<?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'IDAW';

    //essaye de se connecter
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //Sélectionne toutes les valeurs dans la table user
        $sth = $conn->prepare("SELECT * FROM `user`");
        $sth->execute();

        //Affichage sous la forme de tableau dans la page
        $resultat = $sth->fetchAll(PDO::FETCH_ASSOC);
        echo '<pre>';
        print_r($resultat);
        echo '</pre>';
    }

    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    
?>

<body>

</body>
</html>