<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Query</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>



    <form action="sql2.php" method="post">

        <label for="query">Query</label>
        <input type="text" name="query" required>
        <!-- <label>Database:</label> -->
        <!-- <input type="radio" id="m" value="student" name="gender" checked="checked"><label for="m" class="light">student</label><br>
        <input type="radio" id="f" value="company" name="gender"><label for="f" class="light">company</label><br>
        <input type="radio" id="n" value="placement" name="gender"><label for="n" class="light">placement</label><br>
        <input type="radio" id="n" value="admin" name="gender"><label for="n" class="light">admin</label><br> -->
        <!-- <input type="radio" id="n" value="placement" name="gender"><label for="n" class="light">None Of The</label><br> -->
        <button type="submit" name="submit"> Run Query</button>

        <button onclick=location.href='http://localhost/project/alogin/ahomepage.php' type='button'>Go to Homepage</button>
    </form>



</body>

</html>