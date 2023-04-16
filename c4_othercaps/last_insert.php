<?php

require '../c1_connecting/conn.php';

try {

	$title = " Granule Come Last ";
	$body = " Pick your side of last match";

	// prepared statement

	// $insert = $conn->prepare("INSERT INTO posts (title, body) VALUES (:title, :body)");

	// prepared statement using anonymous value ?

	$insert = $conn->prepare("INSERT INTO posts (title, body) VALUES (? , ?)");

	// executed prepared stmt
	// $insert->execute(array(
	// 	':title' => $title,
	// 	':body' => $body
	// ));

	$insert->execute(array(
		$title,
		$body
	));

	$conn->lastInsertId();

	echo "<p>Insert Post Successfully</p>";

} catch(PDOException $e) {
	$error_msg = $e->getMessage();

	echo $error_msg;
}