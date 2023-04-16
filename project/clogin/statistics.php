<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posted Jobs</title>
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

    include 'database.php';
    session_start();

    $cid = $_SESSION['cid'];

    echo "

<table style='width:100%'>
<tr>
  <th>Job Id</th>
  <th>Position</th>
  <th>Branch</th>
  <th>Mode Of Interview</th>
  <th>Type of Interview</th>
  <th>CTC Range</th>
  <th>Number Of Students</th>
  <th>Check Applicants</th>
</tr>



";

    $query = "select * from jobpost where cid='$cid'";

    $result = mysqli_query($connect2, $query);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $jid = $row["jid"];
        $query = "select count(*) as CNT from application  where jid='$jid'";
        $result2 = mysqli_query($connect2, $query);
        echo mysqli_error($connect2);
        $row2 = mysqli_fetch_row($result2);
        $num = $row2[0];



        echo " 
        <tr>
        <td>$row[jid]</td>
        <td>$row[position]</td>
        <td>$row[branch]</td>
        <td>$row[moi]</td>
        <td>$row[toi]</td>
        <td>$row[ctc]</td>
        <td>$num</td>
        <form  method='post' action='application.php'>
        <input type='hidden' name='jid' value=$jid></input> 
        <td><button type='submit' name='submit'>Applicants</button></td>
        </form>
        </tr>  
        ";
    }

    echo "</table>";

    ?>
    <br>
    <center>
        <button onclick=location.href="http://localhost/project/clogin/chomepage.php" type='button'>Go to Homepage</button>
    </center>
</body>

</html>