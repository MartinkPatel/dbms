<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Check</title>
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
  $email = $_SESSION['email'];
  //echo $email;
  $roll = $_SESSION['roll'];

  echo "

<table style='width:100%'>
<tr>
<th>Job Id</th>
  <th>Name</th>
  <th>Position</th>
  <th>Branch</th>
  <th>Mode Of Interview</th>
  <th>Type of Interview</th>
  <th>CTC Range</th>
  
</tr>


";




  $query = "select * from student where roll='$roll'";

  $result = mysqli_query($connect, $query);

  $row = mysqli_fetch_row($result);

  $sbranch = $row[3];
  $name = $row[1];
  $ccpi = $row[8];


  $query = "select * from acad where roll='$roll'";

  $result = mysqli_query($connect, $query);

  $row = mysqli_fetch_row($result);

  $csem = $row[4];


  $query = "select * from application where roll='$roll'";

  $result = mysqli_query($connect2, $query);

  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    $show = true;

    $jid = $row["jid"];

    $query = "select * from jobpost where jid='$jid'";
    $result2 = mysqli_query($connect2, $query);
    $row = mysqli_fetch_array($result2);
    if ($show == true) {

      echo "  
        <tr>
        <td>$jid</td>
        <td>$row[name]</td>
        <td>$row[position]</td>
        <td>$row[branch]</td>
        <td>$row[moi]</td>
        <td>$row[toi]</td>
        <td>$row[ctc]</td>
        </tr>  
        
      ";
    }
  }
  echo "</table>";


  ?>
  <br>
  <center>
    <button onclick=location.href='http://localhost/project/sHomepage/index.php' type='button'>Go to Homepage</button>
  </center>

</body>

</html>