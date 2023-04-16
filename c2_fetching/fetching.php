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

	$success_msg = "Connected to DB successfully <br/>";

	echo $success_msg;

	$rows = $conn->query("SELECT title, body FROM posts");

	// fetching with while loop
	// PDO::FetchNum return Number of Index Array
	// - Assoc return array associative
	// - Obj return object
	// - Both return Assoc and Number
	// - Lazy return assoc, number, object without memory overhead

	while ($row = $rows->fetch(PDO::FETCH_ASSOC)) {
		// $print_title = $row['title'] . "<br/>";
		// $print_body = $row['body'] . "<br/>";

		// echo $print_title;
		// echo $print_body;
	
		//accessing object 
		// echo $row->body;

		// accessing assoc
		echo $row['body'];
	}

	// fetching with foreach
	// foreach ($rows as $row) {
	//   $print_body = $row['body'];
	//   $print_title = $row['title'];

	//   echo "$print_body , $print_title";		
	// }

} catch(PDOException $e) {
	$error_msg = $e->getMessage();

	echo $error_msg;

	// or you can use die()

	// die('DB Error');	
}