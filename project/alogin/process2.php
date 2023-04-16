<?php

include 'database.php';

$name = $_POST['name'];
$msg = $_POST['msg'];
$date = date('Y-m-d H:i:s');

$query = "insert into announcement (name,date,msg) values ('$name','$date','$msg')";

$result = mysqli_query($connect2, $query);

echo "<p>Successfully Posted!</p>";
echo "<a href='http://localhost/project/alogin/ahomepage.php'>Go to Homepage</a>";
