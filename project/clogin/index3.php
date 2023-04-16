<?php
include 'database2.php';

if (isset($_POST["Submit"])) {
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $query = "select * from company where email = '$email' and password = '$pass'";
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result) > 0) {

        session_start();
        $_SESSION['sess_user'] = $email;
        $_SESSION['email'] = $email;
        header('Location: chomepage.php');
        exit();
    } else {
        echo '<script type="text/javascript">alert("Invalid Email or Password!")</script>';
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<head>
    <title>User Login</title>
</head>

<body>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Registration</title>
        <link rel="stylesheet" href="css/normalize.css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/main.css">
    </head>
    <p class="heading">
    <p class="top">
        <?php if (isset($error)) : ?>
    <p><?php echo $error; ?></p>
<?php endif; ?>

<form action="" method="post">

    <h1>Company Login</h1>
    <fieldset>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required><br><br>

        <label for="pass">Password:</label>
        <input type="password" id="pass" name="pass" required><br><br>

        <button type="submit" value="Login" name="Submit">Login</button>
        <button onclick="location.href='http://localhost/project/index.php'" type="button">Home</button>
        <p class="top">No credentials yet? <a href='http://localhost/project/cRegister/'>Register</a>
    </fieldset>
</form>
</p>
</body>


</html>