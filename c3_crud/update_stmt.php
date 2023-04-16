<?php

require '../c1_connecting/conn.php';

try {

	$newTitle = "No one can have it mmk";
	$newBody = "Loipsum is cara nsdasda nasdaq";

	$id = 9;

	$update = $conn->prepare("UPDATE posts SET title = :title, body = :body WHERE id = :id");
	$update->execute(array(
		":title"=>$newTitle,
		":body"=>$newBody,
		":id"=>$id
	));

	if($update->rowCount() > 0) {
		echo "<p>Edit Post Successfully</p>";
	} else {
		echo "<p>Post not found or data not changed</p>";
	}

} catch(PDOException $e) {
	$error_msg = $e->getMessage();

	echo $error_msg;
}