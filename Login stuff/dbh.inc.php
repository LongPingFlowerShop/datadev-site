<?php
	$servername = "localhost:3306";
	$dbUsername = "mahs_mdoumitt";
	$dbPassword = "mustangs";
	$dbName = "mahs_mdoumitt";
	$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);
	if (!$conn){
		die("Connection failed: ".mysqli_conect_error());
	}
 