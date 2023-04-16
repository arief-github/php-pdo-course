<?php

require "../c1_connecting/conn.php";

try {
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$conn->beginTransaction();

	$conn->query("INSERT INTO posts (title, body) VALUES ('nodejs', 'ejs')");
	$conn->query("INSERT INTO posts (title, body) VALUES ('phphmt', 'aboutsaphp')");

	$conn->commit();

} catch(Exception $e) {
	$conn->rollback();
	echo $e->getMessage();

	die();
	// $conn = null;
}