<html>   
    <head> </head> 
        <?php
            
            
        $BDD = array();
        $BDD['host'] = "localhost";
        $BDD['user'] = "root";
        $BDD['pass'] = "root";
        $BDD['db'] = "IDAW";
        $mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
        if(!$mysqli) {
            echo "Connexion non établie.";
            exit;
        }
            
        $AfficherFormulaire=1; 

        if(isset($_POST['Nom_utilisateur'],$_POST['Mot_de_passe'])){
            if(empty($_POST['Nom_utilisateur'])){
                echo "Le champ Nom_utilisateur est vide.";
            
            } elseif(empty($_POST['Mot_de_passe'])){//le champ mot de passe est vide
                echo "Le champ Mot de passe est vide.";
            } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM user WHERE Nom_utilisateur='".$_POST['Nom_utilisateur']."'"))==1){//on vérifie que ce Nom_utilisateur n'est pas déjà utilisé par un autre membre
                echo "Ce Nom_utilisateur est déjà utilisé.";
            } else {
                //toutes les vérifications sont faites, on passe à l'enregistrement dans la base de données:
            
                if(!mysqli_query($mysqli,"INSERT INTO user SET Nom_utilisateur='".$_POST['Nom_utilisateur']."', Mot_de_passe='".md5($_POST['Mot_de_passe'])."',Nom='".$_POST['Nom']."',Prénom='".$_POST['Prénom']."',Age='".$_POST['Age']."'")){//on crypte le mot de passe avec la fonction propre à PHP: md5()
                    echo "Une erreur s'est produite: ".mysqli_error($mysqli);
                } else {
                    echo " <h1> Bonjour ".$_POST['Nom'].",Vous êtes inscrit avec succès!</h1>";

                    
                    $AfficherFormulaire=0;
                }
            }
        }
        if($AfficherFormulaire==1){
            ?>
        
            <br />
            <form method="post" action="inscription.php">
                Pseudo  : <input type="text" name="Nom_utilisateur">
                <br />
                Mot de passe : <input type="password" name="Mot_de_passe">
                <br />
                Nom : <input type="text" name ="Nom">
                <br />
                Prénom : <input type="text" name="Prénom">
                <br />
                Age : <input type="int" name="Age">
                <br />

                <input type="submit" value="S'inscrire">
            </form>
            <?php
        }
        ?>

</html>