<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcements</title>
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


    include 'database.php';

    //echo $email;

    echo "<h1>Announcements!<br></h1>";
    echo "

<table style='width:100%'>
<tr>
    <th>ID</th>
  <th>Name</th>
  <th>Date</th>
  <th>Announcement</th>
  <th>Delete</th>
</tr>



";




    $query = "select * from announcement order by date desc";

    $result = mysqli_query($connect2, $query);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {


        echo "  
            <tr>
            <td>$row[aid]</td>
            <td>$row[name]</td>
            <td>$row[date]</td>
            <td>$row[msg]</td>
            <form  method='post' action='adelete.php'>
        <input type='hidden' name='aid' value=$row[aid]></input> 
        <td><button type='submit' name='submit'>Delete</button></td>
        </form>
            </tr>
    
    ";
    }
    echo "</table>";




    echo "<br>";
    echo "<button onclick=location.href='http://localhost/project/alogin/ahomepage.php' type='button'>Go to Homepage</button>";
    ?>




</body>

</html>