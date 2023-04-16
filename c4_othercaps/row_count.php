<?php
	require "../c1_connecting/conn.php";

	$data = $conn->query("SELECT * FROM posts");

	// print_r($data->rowCount());

	if($data->rowCount() > 0) {

		// print the data using while 
		while ($row = $rows->fetch(PFO::FETCH_ASSOC)) {
			echo $row['body'] . "<br/>";
		}

	} else {
		echo "<p>NO RESULTS!</p>";
	}