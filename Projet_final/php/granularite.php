<?php

	$Calorie = $_POST['Calorie'];
	$Lipide = $_POST['Lipide'];
	$Glucide = $_POST['Glucide'];
	$Fibre = $_POST['Fibre'];
	$Protéine = $_POST['Protéine'];
	


	// Database connection
	$conn = new mysqli('localhost','root','root','PROJET_FINAL');
	if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
	} else {

    $Insert = "INSERT INTO granularité(Calorie,Lipide,Glucide,Fibre,Protéine)
		values('$Calorie','$Lipide','$Glucide','$Fibre','$Protéine')";
	if ($conn->query($Insert)){
		echo "Aliments ajouté avec succès";
	}
	else{
		echo "Error: ". $Insert ."
	". $conn->error;
}
$conn->close();
	}
?>
