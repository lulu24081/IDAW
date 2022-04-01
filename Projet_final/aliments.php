<?php
    require_once("template_header.php");
?>


<html>   
    <head> </head> 
        <?php
            require_once("template_header.php");
        
            
        $BDD = array();
        $BDD['host'] = "localhost";
        $BDD['user'] = "root";
        $BDD['pass'] = "root";
        $BDD['db'] = "IDAW";
        $mysqli = mysqli_connect($BDD['host'],$BDD['user'],$BDD['pass'],$BDD['db']);
        if(!$mysqli) {
            echo "Connexion non établie.";
            exit;
        }
            
        $AfficherFormulaire=1; 
        
        if(isset($_POST['nom'],)){
            if(empty($_POST['nom'])){
                echo "Le champ nom est vide.";
            
            } elseif(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM Aliments WHERE nom='".$_POST['nom']."'"))==1){
                echo "Cet aliment a deja été ajouté";
            } else {
                
                
                $ID_type = $mysqli->prepare('SELECT ID_type FROM Type_aliments WHERE libellé=?');
                $ID_type->execute(array ($_POST['type']));
                if(!mysqli_query($mysqli,"INSERT INTO Aliments SET nom='".$_POST['nom']."', ID_type=$res")){
                    
                    echo "Une erreur s'est produite: ".mysqli_error($mysqli);
                } else {
                    echo " <h1> Vous avez ajoutez l'element ".$_POST['nom']. "avec succés !</h1>";

                    
                    $AfficherFormulaire=0;
                }
            }
        }
        if($AfficherFormulaire==1){
            ?>
           
        
            <br />
            <form method="post" action="aliments.php">
                Nom  : <input type="text" name="nom">
                <br />
                type : 
                <select name="type" id="ID_type">
                    <option value="">Choisissez le type d'aliments</option>
                    <option value="Fruit">Fruit</option>
                    <option value="Légume">Légume</option>
                    <option value="Produit_transformé">Produit_transformé</option>
                    <option value="Viande">Viande</option>  
                    <option value="Poisson">Poisson</option>
                    
                </select>
                <form>
                
            </form>
            <?php
        }
        ?>

</html>