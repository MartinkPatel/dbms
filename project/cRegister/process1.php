<?php include 'database.php';


$comp_name = $_POST['comp_name'];
$comp_email = $_POST['comp_email'];
$comp_phone = $_POST['phone'];
$comp_location = $_POST['location'];
$comp_size = $_POST['size'];
$ctc = $_POST['ctc'];
$comp_bio = $_POST['comp_bio'];
$verify = 0;
$password = $_POST['password'];
$cnfpassword = $_POST['password'];

$result = mysqli_query($connect, "select * from company where email='$comp_email';");
if (mysqli_num_rows($result) > 0) {
	echo "Company Already Registered!";
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
		mysqli_query($connect, "INSERT INTO company(name, email, phone, location, password, cbio, size,ctc,verify) VALUES('$comp_name','$comp_email','$comp_phone','$comp_location','$password', '$comp_bio', '$comp_size','$ctc','$verify');");

		if (mysqli_affected_rows($connect) > 0) {
			echo "<p>Organisation Added</p>";
			$result = mysqli_query($connect, "SELECT * FROM company where name='$comp_name';");
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_row($result);
				echo "Your ID is: " . $row[0];
			}
			echo "<br><a href=\"\Placement_Portal\Company_Login\index.php\">Login</a>";
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
