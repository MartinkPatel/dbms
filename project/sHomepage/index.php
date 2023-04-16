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

    include 'database.php';
    session_start();

    $email = $_SESSION['email'];

    $name = "";
    $roll = "";

    $query = "select name,roll from student where email='$email'";

    $result = mysqli_query($connect, $query);

    $row = mysqli_fetch_row($result);

    $name = $row[0];
    $roll = $row[1];

    $_SESSION['roll'] = $roll;
    $_SESSION['name'] = $name;

    ?>


    <h1>Welcome to Homepage</h1>

    <fieldset>
        <p>Name: <?php echo $name ?></p>
        <br>
        <p>Roll Number: <?php echo $roll ?></p>

        <button onclick="location.href='http://localhost/project/sHomepage/jobpost.php'" type="button">Check Available Jobs</button>
        <button onclick="location.href='http://localhost/project/sHomepage/jobcheck.php'" type="button">Check Applied Jobs</button>
        <button onclick="location.href='http://localhost/project/sHomepage/profile.php'" type="button">Show Profile</button>
        <button onclick="location.href='http://localhost/project/sHomepage/cplacement.php'" type="button">Check Placement Details</button>
        <button onclick="location.href='http://localhost/project/placement/'" type="button">Update Placement Details</button>
        <button onclick="location.href='http://localhost/project/sHomepage/ann.php'" type="button">Announcement</button>
        <button onclick="location.href='http://localhost/project/sHomepage/logout.php'" type="button">Logout</button>


    </fieldset>

</body>

</html>