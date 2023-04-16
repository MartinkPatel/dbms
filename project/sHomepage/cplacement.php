<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Placement Details</title>
    <style>
        /* table,
        tr,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        } */

        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 30px;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            transition: all 0.3s ease;
        }

        th {
            background-color: #f1f1f1;
            font-weight: bold;
        }

        tr:hover {
            background-color: #ff6961;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php

    session_start();
    include 'database.php';

    //echo $email;
    $roll = $_SESSION['roll'];

    echo "

<table style='width:100%'>
<tr>
  <th>Job Id</th>
  <th>Company Name</th>
  <th>Position</th>
  <th>CTC (in LPA)</th>
  <th>Location</th>
  <th>Date</th>
</tr>


";




    $query = "select * from placement where roll='$roll'";

    $result = mysqli_query($connect3, $query);

    $row = mysqli_fetch_array($result);

    $jid = $row["jid"];
    $cid = $row["cid"];
    $ctc = $row["ctc"];
    $date = $row["date"];

    $query = "select * from jobpost where jid='$jid'";
    $result = mysqli_query($connect2, $query);
    $row = mysqli_fetch_array($result);
    $position = $row["position"];
    $cname = $row["name"];

    $query = "select * from company where cid='$cid'";
    $result = mysqli_query($connect2, $query);
    $row = mysqli_fetch_array($result);
    $location = $row["location"];




    $show = true;


    if ($show == true) {

        echo "  
        <tr>
        <td>$jid</td>
        <td>$cname</td>
        <td>$position</td>
        <td>$ctc</td>
        <td>$location</td>
        <td>$date</td>
        </tr>  
        
      ";
    }
    echo "</table>";


    ?>
    <br>
    <center>
        <button onclick=location.href='http://localhost/project/sHomepage/index.php' type='button'>Go to Homepage</button>
    </center>

</body>

</html>