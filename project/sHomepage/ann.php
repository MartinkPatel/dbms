<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
    <style>
        table,
        tr,
        th,
        td {
            border: 1px solid black;
            text-align: center;
        }
    </style>
</head>

<body>

    <?php

    session_start();
    include 'database.php';
    $email = $_SESSION['email'];
    //echo $email;
    $roll = $_SESSION['roll'];
    echo "<h1>Announcements!<br></h1>";
    echo "

<table style='width:100%'>
<tr>
  <th>Name</th>
  <th>Date</th>
  <th>Announcement</th>
</tr>



";




    $query = "select * from announcement order by date desc";

    $result = mysqli_query($connect, $query);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {


        echo "  
            <tr>
            <td>$row[name]</td>
            <td>$row[date]</td>
            <td>$row[msg]</td>
            </tr>
    
    ";
    }
    echo "</table>";




    echo "<br>";
    echo "<button onclick=location.href='http://localhost/project/sHomepage/' type='button'>Go to Homepage</button>";
    ?>




</body>

</html>