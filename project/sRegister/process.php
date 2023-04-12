<?php

include 'database.php';



// create a variable
$roll = $_POST['roll'];
$name = $_POST['name'];
$dob = $_POST['dob'];
$specialization = $_POST['specialization'];
$gender = $_POST['gender'];
$phone = $_POST['mobile'];
$email = $_POST['email'];
$bio = $_POST['bio'];
$aoi = $_POST['aoi'];
$password = $_POST['password'];
$cnfpassword = $_POST['cnfpassword'];

// $c=$_POST['c'];
// $cpp=$_POST['cpp'];
// $ds=$_POST['ds'];
// $java=$_POST['java'];
// $python=$_POST['python'];
// $dbms=$_POST['dbms'];
// $ada=$_POST['ada'];
// $os=$_POST['os'];

$Xth = $_POST['Xth'];
$XIth = $_POST['XIth'];
$XIIth = $_POST['XIIth'];
$csem = $_POST['csem'];
$sem1 = $_POST['sem1'];
$sem2 = $_POST['sem2'];
$sem3 = $_POST['sem3'];
$sem4 = $_POST['sem4'];
$sem5 = $_POST['sem5'];
$sem6 = $_POST['sem6'];
$sem7 = $_POST['sem7'];
$sem8 = $_POST['sem8'];
$ccpi = $_POST['ccpi'];

$verify = 0;

//Execute the query
$result = mysqli_query($connect, "select * from student where roll = '$roll';");
if (mysqli_num_rows($result) > 0) {
	echo "Student already registered";
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

		mysqli_query($connect, "INSERT INTO student (roll,name,dob,specialization,phone,email,password,gender,ccpi,aoi,bio,verify) VALUES('$roll','$name','$dob','$specialization','$phone','$email','$password','$gender','$ccpi','$aoi','$bio','0');");
		if (mysqli_affected_rows($connect) > 0) {
			echo "<p>Student Basics Added</p>";

			mysqli_query($connect, "INSERT INTO acad VALUES('$roll','$Xth','$XIth','$XIIth','$csem','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$sem7','$sem8');");
			if (mysqli_affected_rows($connect) > 0) {
				echo "<p>Student Added success</p>";


				echo "<a href=\"\project\slogin\index.php\">Login</a>";
			} else {
				echo mysqli_error($connect);
			}
		} else {
			echo "Student NOT Added<br />";
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
 // mysqli_query($connect, "INSERT INTO skills VALUES('$usn','$c','$cpp','$ds','$java','$python','$dbms','$ada','$os');");

 // mysqli_query($connect, "INSERT INTO academics VALUES('$usn','$Xth','$XIIth','$sem1','$sem2','$sem3','$sem4','$sem5','$sem6','$cgpa');");


	// if(mysqli_affected_rows($connect) > 0){
	// echo "<p>Student Added</p>";
	// echo "<a href=\"\Placement_Portal\Login\index.html\">Login</a>";
// } else {
	// echo "Student NOT Added<br />";
	// echo mysqli_error ($connect);
// }
