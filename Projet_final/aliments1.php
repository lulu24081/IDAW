<?php

    $Calorie = $_POST['Calorie'];
    $Lipide = $_POST['Lipide'];
    $Glucide = $_POST['Glucide'];
    $Fibre = $_POST['Fibre'];
    $Proteine= $_POST['Proteine'];
	// Database connection
	$conn = new mysqli('localhost','root','root','PROJET_FINAL');
	if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
	} else {

    $Insert = "INSERT INTO Aliments(Calorie,Lipide,Glucide,Fibre,Proteine)
		values('$Calorie,'$Lipide','$Glucide','$Fibre','$Proteine')";
	if ($conn->query($Insert)){
		echo "New record is inserted sucessfully";
	}
	else{
		echo "Error: ". $Insert ."
	". $conn->error;
}
$conn->close();
	}
?>