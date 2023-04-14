<?php

include 'database.php';

$roll = $_POST['roll'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$specialization = $_POST['specialization'];
$gender = $_POST['gender'];
$phone = $_POST['mobile'];
$email = $_POST['email'];
$bio = $_POST['bio'];
$aoi = $_POST['aoi'];


$Xth = $_POST['Xth'];
$XIth = $_POST['XIth'];
$XIIth = $_POST['XIIth'];
$csem = $_POST['csem'];
$sem1 = $_POST['sem1'];
$sem2 = $_POST['sem2'];
$sem3 = $_POST['sem3'];
$sem4 = $_POST['sem4'];
$sem5 = $_POST['sem5'];
$sem6 = $_POST['sem6'];
$sem7 = $_POST['sem7'];
$sem8 = $_POST['sem8'];
$ccpi = $_POST['ccpi'];





$query = "update student set name='$name', dob='$dob', specialization='$specialization', phone='$phone', email='$email',gender='$gender',ccpi='$ccpi',aoi='$aoi',bio='$bio' , verify='1' where roll='$roll';";

$result = mysqli_query($connect, $query);

$query = "update acad set 10th='$Xth', 11th='$XIth', 12th='$XIIth', csem='$csem', sem1='$sem1', sem2='$sem2', sem3='$sem3',sem4='$sem4',sem5='$sem5',sem6='$sem6',sem7='$sem7',sem8='$sem8' where roll='$roll';";
$result = mysqli_query($connect, $query);


echo "Successfully verified <br>";
echo "<a href='index.php'>Go Back!</a>";
