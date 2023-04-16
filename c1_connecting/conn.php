<?php

// Connecting to DB. 
// must include 4 => host, dbname, user, password

try {
	$host = "localhost";
	$dbname = "blogpost";
	$user = "root";
	$password = "";

	// Instansiate PDO class
	$conn = new PDO("mysql:host=$host;dbname=$dbname", "$user", "$password");

	// if($conn == true) {
	// 	echo "database is connected successfully";
	// } else {
	// 	echo "databse isn't connected";
	// }

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$success_msg = "Connected to DB successfully";

	echo $success_msg;
} catch(PDOException $e) {
	$error_msg = $e->getMessage();

	echo $error_msg;

	// or you can use die()

	// die('DB Error');	
}


