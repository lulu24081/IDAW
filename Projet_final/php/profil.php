<?php

	$username = $_POST['username'];
	$firstName = $_POST['firstName'];
	$age = $_POST['age'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$password = md5($_POST['password']);
	$niveau_sport = $_POST['niveau_sport'];
	$mail = $_POST['mail'];


	// Database connection
	$conn = new mysqli('localhost','root','root','PROJET_FINAL');
	if($conn->connect_error){
		die("Connection Failed : ". $conn->connect_error);
	} else {

    $Insert = "INSERT INTO user(username, firstName, lastName, password,mail, age, gender, niveau_sport)
		values('$username', '$firstName', '$lastName',' '$password', '$mail','$age','$gender', '$niveau_sport')";
	if ($conn->query($Insert)){
		echo "Vous êtes inscrit avec succés" ;
		header('Location: login.php');
	}
	else{
		echo "Error: ". $Insert ."
	". $conn->error;
}
$conn->close();
	}
?>
