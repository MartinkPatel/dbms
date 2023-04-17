<?php

session_start();
include 'database.php';

$jid = $_POST['jid'];
$roll = $_POST['roll'];
$ctc = $_POST['ctc'];


$query = "select * from application where jid='$jid' and roll='$roll'";
$result = mysqli_query($connect2, $query);

if (mysqli_num_rows($result) > 0) {

    echo "Already Registered!<br>";
    echo "<a href='http://localhost/project/sHomepage/jobpost.php'>Go Back!</a> ";
} else {

    $query = "select * from placement where roll='$roll'";
    $result = mysqli_query($connect3, $query);
    $oldctc = 0;
    $insert = true;
    echo mysqli_error($connect3);

    if (mysqli_num_rows($result) > 0) {

        $row = mysqli_fetch_array($result);

        $oldctc = $row["ctc"];

        if ($oldctc > $ctc) {
            $insert = false;
        }
    }


    $date = date('Y-m-d H:i:s');
    if ($insert == true) {
        $query = "insert into application (jid,roll,date) values ('$jid','$roll','$date')";
        $result = mysqli_query($connect2, $query);

        echo "Successfully Registered!<br>";
    } else {
        echo "You Are Not Eligible For apllying, Old CTC is greater than this.<br>";
    }
    echo "<a href='http://localhost/project/sHomepage/jobpost.php'>Go Back!</a>";
}
