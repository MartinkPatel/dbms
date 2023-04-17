<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php

    include 'connection.php';
    session_start();

    $email = $_SESSION['email'];

    $name = "";
    //$roll = "";

    $query = "select name from alumni where email='$email' limit 1";

    $result = mysqli_query($connect, $query);

    $row = mysqli_fetch_row($result);

    $name = $row[0];




    ?>


    <h1>Welcome to IIT Patna ALUMINI PORTAL</h1>

    <fieldset>
        <p>Name: <?php echo $name ?></p>
        <br>


        <button onclick="location.href='http://localhost/project/alumlogin/alumniprofile.php'" type="button">Check Your Profile</button>
        <button onclick="location.href='http://localhost/project/alumlogin/alumniupdateprofile.php'" type="button">Add/Update Work Details</button>
        <button onclick="location.href='http://localhost/project/alumlogin/work.php'" type="button">Work History Details</button>
        <button onclick="location.href='http://localhost/project/alumlogin/logout.php'" type="button">Logout</button>




    </fieldset>

</body>

</html>