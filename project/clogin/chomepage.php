<?php
include 'database2.php';
session_start();

if (!isset($_SESSION['sess_user'])) {
	header('Location: index3.php');
}

$email = $_SESSION['sess_user'];
$result = mysqli_query($connect, "select * from company where email = '$email'");
$row = mysqli_fetch_array($result);
$name = $row["name"];
$id = $row["cid"];
$_SESSION['cid'] = $id;
?>
<!DOCTYPE html>
<html>

<head>
	<title>Welcome</title>
</head>

<head>
	<meta charset="UTF-8">
	<title>HP</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<style>
	.top-left {
		position: absolute;
		top: 0;
		left: 0;
	}
</style>

<body>
	<center>
		<p class="heading">
		<h1> <?php echo "Hi " . $name . " ,welcome to IIT Patna"; ?> </h1>
		</p>
		<br />
		<div class="top-left">
			<h4> <?php echo "Company ID: " . $id; ?> </h4>
		</div>

		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>Student Registration</title>
			<link rel="stylesheet" href="css/normalize.css">
			<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
			<link rel="stylesheet" href="css/main.css">
		</head>
		<fieldset>
			<p class="top">
				<button onclick="location.href='http://localhost/project/clogin/profile.php'" type="button">Profile Details</button>
			<p class="top">
				<be>
					<button onclick="location.href='http://localhost/project/jobpost/'" type="button">Post for openings</button>
					<p class="top">
						<button onclick="location.href='http://localhost/project/clogin/statistics.php'" type="button">Check statistics</button>
					<p class="top">
						<button onclick="location.href='http://localhost/project/clogin/logout.php'" type="button">Log out</button>
					<p class="top">
					</p>
		</fieldset>
	</center>
</body>

</html>