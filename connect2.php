<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "lab_project";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$name = $_POST['rname'];
	$email = $_POST['remail'];
	$address = $_POST['raddress'];
	$phone = $_POST['rphone'];
	$city = $_POST['rcity'];

	$sql = "INSERT INTO `recipient` (`rname`, `remail`, `raddress`, `rphone`, `rcity`) VALUES ('$name', '$email', '$address', '$phone', '$city')";

	$rs = mysqli_query($conn, $sql);

	if($rs){
		echo "Records Inserted";
	}
?>