<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Check</title>
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

        /* tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(even):hover {
            background-color: #ffd1dc;
            color: #fff;
        } */
    </style>
</head>
<?php

session_start();
include 'database.php';



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








$query = "select * from student";
$result2 = mysqli_query($connect2, $query);
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
    <input type='hidden' name='roll' value=$row[roll]></input> 
    <td><button type='submit' name='submit'>More Details</button></td>
    </form>
    </tr>  
    ";
    $sr++;
}


echo "</table>";

?>

<body>

    <br>
    <center>
        <button onclick=location.href='http://localhost/project/alogin/ahomepage.php' type='button'>Go to Homepage</button>

    </center>

</body>

</html>