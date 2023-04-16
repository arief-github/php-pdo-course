<?php

require "../c1_connecting/conn.php";

$keyword = "php";

$pattern = "%" . $keyword . "%";

$search = $conn->prepare("SELECT * FROM posts WHERE title LIKE :pattern");
$search->execute([
	":pattern" => $pattern
]);

print_r($search->fetchAll(PDO::FETCH_ASSOC));
