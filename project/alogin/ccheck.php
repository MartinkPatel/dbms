<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Check</title>
</head>

<style>
    table,
    tr,
    th,
    td {
        border: 1px solid black;
        text-align: center;
    }
</style>


<body>

    <?php
    include 'database.php';

    echo "

<table style='width:100%'>
<tr>
<th>Company Id</th>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Location</th>
<th>Company Bio</th>
<th>Expected Opportunities</th>
<th>Expected CTC</th>


</tr>



";

    $query = "select * from company order by cid";
    $result = mysqli_query($connect3, $query);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo " 
        <tr>
        <td>$row[cid]</td>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[phone]</td>
        <td>$row[location]</td>
        <td>$row[cbio]</td>
        <td>$row[size]</td>
        <td>$row[ctc]</td>
        
        </tr>  
        ";
    }
    echo "</table>";
    echo "  <br>
    <center>
        <button onclick=location.href='http://localhost/project/alogin/ahomepage.php' type='button'>Go to Homepage</button>

    </center>";

    ?>



</body>

</html>