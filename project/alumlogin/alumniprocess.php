<?php include 'connection.php';

$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$specialization = $_POST['specialization'];

$phone = $_POST['mobile'];
$email = $_POST['email'];
$bio = $_POST['bio'];
$password = $_POST['password'];
$cnfpassword = $_POST['cnfpassword'];
$cpi = $_POST['cpi'];

$passout = $_POST['passout'];
$bio = $_POST['bio'];

$result = mysqli_query($connect, "select * from alumni where email='$email';");
if (mysqli_num_rows($result) > 0) {
	echo "You have Already Registered!";
} else {

	$insert = true;

	$passErr = "";
	if (empty($_POST["password"])) {
		$passErr = "Password Cant be Empty!";
		$insert = false;
	} else {
		$password = $_POST["password"];
		$uppercase = preg_match('@[A-Z]@', $password);
		$lowercase = preg_match('@[a-z]@', $password);
		$number    = preg_match('@[0-9]@', $password);
		$specialChars = preg_match('@[^\w]@', $password);

		if (!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
			$passErr = "Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.";
			// echo $passErr;
			$insert = false;
		} else {
		}
	}
	$cnfErr = "";
	// For Confirm Password

	if ($cnfpassword != $password) {
		$insert = false;
		$cnfErr = "Passwords Does'nt Match!";
		//echo $cnfErr;
	}

	if ($insert == true) {
		//Execute the query
		mysqli_query($connect, "INSERT INTO alumni(name,dob,specialization,phone,email,password,gender,cpi,bio,verify,passout) VALUES('$name','$dob','$specialization','$phone','$email','$password','$gender','$cpi','$bio','0','$passout');");

		if (mysqli_affected_rows($connect) > 0) {
			echo "<p>Alumni Added</p>";
			$result = mysqli_query($connect, "SELECT * FROM alumni where email='$email';");
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_row($result);
				echo "Your ID is: " . $row[0];
			}
			echo "<br><a href=\"\project\alumnilogin.php\">Login</a>";
		} else {
			echo "Organisation NOT Added<br />";
			echo mysqli_error($connect);
		}
	} else {

		if (!empty($passErr)) {
			echo "<script>alert('$passErr')</script>";
		} else if (!empty($cnfErr)) {
			echo "<script>alert('$cnfErr')</script>";
		}
	}
}
