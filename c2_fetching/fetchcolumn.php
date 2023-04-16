<?php

	require '../c1_connecting/conn.php';

	$data = $conn->query("SELECT * FROM posts");

	// fetch Column return single result
	$result = $data->fetchColumn(0);

	echo $result;