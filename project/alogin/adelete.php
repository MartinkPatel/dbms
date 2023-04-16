<?php

include 'database.php';

$aid = $_POST['aid'];

$query = "delete from announcement where aid='$aid'";
$result = mysqli_query($connect2, $query);

echo "<p>Successfully Deleted!<br></p>";
echo "<a href='http://localhost/project/alogin/acheck.php'>Go Back!</a>";
