<?php

require '../c1_connecting/conn.php';

try {

	$id = 10;

	if(!$id) {
		echo "<p>ID not found</p>";
	} 

	$delete = $conn->prepare("DELETE FROM posts WHERE id = :id");

	$delete->execute([
		":id" => $id
	]);

	if($delete->rowCount() > 0) {
		echo "<p>Delete Successfully</p>";
	} else {
		echo "<p>Post not found or data not changed</p>";
	}

} catch(PDOException $e) {
	$error_msg = $e->getMessage();

	echo $error_msg;
}