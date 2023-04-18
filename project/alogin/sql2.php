<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL QUERY</title>
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

        /* tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(even):hover {
            background-color: #ffd1dc;
            color: #fff;
        } */
    </style>
</head>

<body>

    <?php

    // $database = $_POST['gender'];
    $connect = mysqli_connect('localhost', 'root', '', 'tpcportal');
    $query = $_POST['query'];

    $result = mysqli_query($connect, $query);
    echo mysqli_error($connect);


    if ($result) {
        $num_fields = mysqli_num_fields($result);
        echo "<table>";
        echo "<tr>";
        for ($i = 0; $i < $num_fields; $i++) {
            $field_name = mysqli_fetch_field_direct($result, $i)->name;
            echo "<th>" . $field_name . "</th>";
        }
        echo "</tr>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . $value . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Error executing query: " . mysqli_error($connect);
    }

    // Close the MySQL connection
    mysqli_close($connect);



    echo "Query Runned!<br>";
    echo "<br>";
    echo "<a href='http://localhost/project/alogin/sql.php'>Go Back!</a>";
    ?>
</body>

</html>