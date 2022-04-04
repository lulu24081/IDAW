

<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" media="screen" type="text/css" href="css/style.css"/> 
    </head>
</html>



<?php
    
require_once("template_header.php");   
$BDD = array();
$BDD['host'] = "localhost";
$BDD['user'] = "root";
$BDD['pass'] = "root";
$BDD['db'] = "PROJET_FINAL";
$mysqli = mysqli_connect($BDD['host'], $BDD['user'], $BDD['pass'], $BDD['db']);
if(!$mysqli) {
    echo "Connexion non établie.";
    exit;
}
   

$AfficherFormulaire=1;



    
if(mysqli_num_rows(mysqli_query($mysqli,"SELECT * FROM Aliments WHERE nom='".$_POST['nom']."'"))==1){
        echo "Cet aliment est déja ajouté.";
    } else {
        
        if(!mysqli_query($mysqli,"INSERT INTO Aliments SET nom='".$_POST['nom']."', Calorie='".$_POST['Calorie']."',Lipide='".$_POST['Lipide']."',Glucide='".$_POST['Glucide']."',Fibre='".$_POST['Fibre']."',Proteine='".$_POST['proteine']."'")){
            echo "Une erreur s'est produite: ".mysqli_error($mysqli);
        } else {
            
            echo' <p style="text-align: center;"> Aliment ajouté avec succés</p>';
            
            $AfficherFormulaire=0;
        }
    }

if($AfficherFormulaire==1){
    ?>
  
    <br />
    <form method="post" action="Ajout_aliment.php">
        nom : <input type="text" name="nom" required>
        <br />
        <div class="col-md-12">
															<select id="niveau" name="aliments" class="form-control" required>
																		<option selected disabled>type aliments</option>
																		<option value="Fruit" id="lvl1">fruit</option>
                                    <option value="Légume" id="lvl3">Légume</option>
																		<option value="Produit_transformé" id="lvl2">Produit_transformé</option>
																		<option value="Viande" id="lvl3">Viande</option>
                                    <option value="Poisson" id="lvl3">poisson</option>
														 </select>
												 </div>
        Calorie : <input type="text" name="Calorie" required>
        <br />
        Lipide : <input type="text" name="Lipide" required>
        <br />
        Glucide : <input type="text" name="Glucide" required>
        <br />
        Fibre : <input type="text" name="Fibre" required>
        <br />
        Proteine: <input type="text" name="Proteine" required>
        <br />
        <input type="submit" value="Valider">
    </form>
    <?php
}
?>
          