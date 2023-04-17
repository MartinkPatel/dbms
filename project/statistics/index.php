<!DOCTYPE html>
<html lang="en">
<head>
    <title>Training and Placement Portal</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f1f1f1;
}

h1 {
    text-align: center;
    margin-top: 50px;
    margin-bottom: 50px;
    color: #333;
    text-transform: uppercase;
}

.companies {
    max-width: 800px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

ul {
    list-style: none;
    padding: 0;
}

li {
    margin: 20px;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
}

li:hover {
    transform: translateY(-5px);
    box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.2);
}
    </style>
</head>

<body>
<center>
<h1>Training and Placement Portal</h1>

<h2>Our recruiting companies</h2>
<div class = "companies">
    <?php

    include 'database.php';
    session_start();
    $query = "select * from company";

    $result = mysqli_query($connect2, $query);

    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $name = $row["name"];
            echo "<ul>";
            echo "<li>" . $name . "</li>";
            echo "</ul>";
    }

    ?>
    </div>
    <br>
        <button onclick=location.href="http://localhost/project/statistics/squery.php" type='button'>Detailed statistics</button>
    <br>
    <br>
        <button onclick=location.href="http://localhost/project/" type='button'>Go to Homepage</button>
    </center>
</body>

</html>

