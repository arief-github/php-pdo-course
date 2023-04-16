<?php

require '../c1_connecting/conn.php';

$data = $conn->query("SELECT * FROM posts");
$in_keyword = $conn->query("SELECT * FROM posts WHERE id IN(1,2,3,4,5)");

$results = $in_keyword->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
print_r($results);
echo "</pre>";

// OBJECT
// echo "Single Title Data <br/>";
// echo $results["0"]->title;

// echo "Single Body Data <br/>";
// echo $results["0"]->body;

// ASSOC
echo $results["0"]["body"];