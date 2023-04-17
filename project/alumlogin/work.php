<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job History</title>
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
    include 'connection.php';
    $email = $_SESSION['email'];
    //echo $email;


    echo "

<table style='width:100%'>
<tr>
  <th>Company Name</th>
  <th>Position</th>
  <th>Area</th>
  <th>Location</th>
  <th>CTC</th>
  <th>Tenure</th>
  
</tr>


";




    $query = "select * from alumniwork where email='$email'";

    $result = mysqli_query($connect, $query);


    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {


        $show = true;
        if ($show == true) {

            echo "  
        <tr>
        <td>$row[company]</td>
        <td>$row[position]</td>
        <td>$row[area]</td>
        <td>$row[location]</td>
        <td>$row[ctc]</td>
        <td>$row[tenure]</td>
        </tr>  
        
      ";
        }
    }
    echo "</table>";


    ?>
    <br>
    <center>
        <button onclick=location.href='http://localhost/project/alumlogin/alumnihomepage.php' type='button'>Go to Homepage</button>
    </center>

</body>

</html>