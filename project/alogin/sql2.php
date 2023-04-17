<?php

// $database = $_POST['gender'];
$connect = mysqli_connect('localhost', 'root', '', 'tpcportal');
$query = $_POST['query'];

$result = mysqli_query($connect, $query);
echo mysqli_error($connect);

echo "Query Runned!<br>";
echo "<br>";
echo "<a href='http://localhost/project/alogin/sql.php'>Go Back!</a>";
