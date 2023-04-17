<?php include 'connection.php';

session_start();

$email = $_SESSION['email'];
$ctc = $_POST['ctc'];

$area = $_POST['area'];

$position = $_POST['position'];

$location = $_POST['location'];

$tenure = $_POST['tenure'];

$result = mysqli_query($connect, "select * from alumniwork where email='$email';");
if (mysqli_num_rows($result) > 0) {
	mysqli_query($connect, "UPDATE alumniwork SET position='$position', area='$area', ctc = '$ctc', tenure='$tenure', location = '$location' WHERE email='$email';");


		echo "Details  Updated<br />";
			echo "<br><a href=\"\project\alumlogin\alumnilogin.php\">Login</a>";


} else {


		//Execute the query
		mysqli_query($connect, "INSERT INTO alumniwork(email,position,area,ctc,location,tenure) VALUES('$email','$position','$area','$ctc','$location','$tenure');");

		if (mysqli_affected_rows($connect) > 0)
		{
			echo "<p>Alumni Added</p>";
			$result = mysqli_query($connect, "SELECT * FROM alumni where email='$email';");
			if (mysqli_num_rows($result) > 0)
			{
				$row = mysqli_fetch_row($result);

			}
			echo "<br><a href=\"\project\alumnilogin.php\">Login</a>";
		}
		else
		{
			echo "Details NOT Added<br />";
			echo mysqli_error($connect);
		}

}
