<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicants</title>

    <style>
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

    $cid = $_SESSION['cid'];
    $jid = $_POST['jid'];


    echo "

<table style='width:100%'>
<tr>
<th>Sr. No</th>
  <th>Name</th>
  <th>Roll Number</th>
  <th>Branch</th>
  <th>Gender</th>
  <th>Current CPI</th>
  <th>Area Of Interest</th>
  <th>Bio</th>
  <th>More Details</th>
  
</tr>



";
    $sr = 1;
    $query   = "select * from application where jid='$jid'";

    $result = mysqli_query($connect2, $query);

    while ($row1 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $roll = $row1["roll"];

        $query = "select * from student where roll='$roll'";
        $result2 = mysqli_query($connect, $query);
        while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)) {


            echo " 
        <tr>
        <td>$sr</td>
        <td>$row[name]</td>
        <td>$row[roll]</td>
        <td>$row[specialization]</td>
        <td>$row[gender]</td>
        <td>$row[ccpi]</td>
        <td>$row[aoi]</td>
        <td>$row[bio]</td>
        <form  method='post' action='sprofile.php'>
        <input type='hidden' name='jid' value=$jid></input> 
        <input type='hidden' name='roll' value=$row[roll]></input> 
        <td><button type='submit' name='submit'>More Details</button></td>
        </form>
        </tr>  
        ";
        }
        $sr++;
    }
    echo "</table>";

    ?>
    <br>
    <center>
        <button onclick=location.href="http://localhost/project/clogin/statistics.php" type='button'>Go back</button>
    </center>



</body>

</html>