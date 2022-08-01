<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "lab_project";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$name = $_POST['dName'];
	$email = $_POST['dEmail'];
	$address = $_POST['dAddress'];
	$phone = $_POST['dPhone'];
	$city = $_POST['dCity'];

	
?>