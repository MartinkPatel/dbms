<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
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

    $query = "SELECT * from student where verify='0'";
    $result = mysqli_query($connect, $query);

    echo "

            <table style='width:100%'>
            <tr>
              <th>Name</th>
              <th>Roll Number</th>
              <th>Webmail</th>
              <th>Verify Link</th>
            </tr>
          
          

    ";

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {


        echo "  
                <tr>
                
                <td>$row[name]</td>
                <td>$row[roll]</td>
                <td>$row[email]</td>
                <form  method='post' action='verify.php'>
                <input type='hidden' name='roll' value=$row[roll]></input> 
                <td><button type='submit' name='submit'>Verify</button></td>
                </form>
                </tr>  
        
              ";
    }
    echo "</table>";





    ?>


    <br>
    <center>
        <button onclick="location.href='http://localhost/project/alogin/ahomepage.php'" type="button">Homepage</button>
    </center>










</body>

</html>