<?php

session_start();
include 'database.php';

$roll = $_POST['roll'];
$jid = $_POST['jid'];
$date = $_POST['date'];
$ctc = $_POST['ctc'];

$query = "select cid from jobpost where jid='$jid'";

$result = mysqli_query($connect2, $query);

$row = mysqli_fetch_array($result);

$cid = $row["cid"];

$query = "select * from placement where roll='$roll'";

$result = mysqli_query($connect3, $query);

if (mysqli_num_rows($result) > 0) {

    $query = "update placement set jid='$jid',cid='$cid', ctc='$ctc' , date='$date' where roll='$roll'";

    $result = mysqli_query($connect3, $query);
} else {

    $query = "insert into placement (jid,cid,roll,ctc,date) values ('$jid','$cid','$roll','$ctc','$date')";
    $result = mysqli_query($connect3, $query);
}

echo "Your Placement Details are successfully Updated! Best Of Luck in Your Future Endervours! <br>";
echo "<a href='http://localhost/project/sHomepage/'>HomePage</a>";
