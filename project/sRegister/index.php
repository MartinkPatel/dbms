<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Sign Up</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


	<link rel="stylesheet" href="css/style.css">


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

	<body>

		<form action="process.php" method="post">

			<h1>Student Registration</h1>

			<fieldset>
				<legend><span class="number">1</span>Your basic info</legend>
				<label for="roll">Roll number:</label>
				<input type="text" id="roll" name="roll" required>

				<label for="name">Name:</label>
				<input type="text" id="name" name="name" required>
				<label for="dob">Date Of Birth:</label>
				<input type="date" id="dob" name="dob" required>
				<label for="specialization">Specialization:</label>
				<!-- <input type="text" id="branch" name="branch" required> -->
				<!-- <label for="basics">Branch:</label> -->
				<select id="specialization" name="specialization">
					<option value="CSE">CSE</option>
					<option value="AIDS">AIDS</option>
					<option value="MNC">MNC</option>
					<option value="EEE">EEE</option>
					<option value="ME">ME</option>
					<option value="CE">CE</option>
					<option value="PH">PH</option>
					<option value="MME">MME</option>

				</select>



				<label for="mobile">Mobile No:</label>
				<input type="text" id="mobile" name="mobile" pattern=".{5,10}" required title="Max 10 digits are allowed">

				<label for="mail">Email:</label>
				<input type="email" id="mail" name="email" required>

				<label for="password">Password:</label>
				<input type="password" id="password" name="password">
				<label for="cnfpassword">Confirm Password:</label>
				<input type="password" id="cnfpassword" name="cnfpassword">
				<label>Gender:</label>
				<input type="radio" id="m" value="m" name="gender" checked="checked"><label for="m" class="light">Male</label><br>
				<input type="radio" id="f" value="f" name="gender"><label for="f" class="light">Female</label><br>
				<input type="radio" id="n" value="n" name="gender"><label for="n" class="light">None Of The</label><br>
			</fieldset>

			<!-- <fieldset>
				<legend><span class="number">2</span>Your Skills(Rate Yourself)</legend>
				<label for="skills">C:</label>
				<select id="c" name="c">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>

				</select>


				<label for="skills">C++:</label>
				<select id="cpp" name="cpp">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>

				</select>


				<label for="skills">Data Structures:</label>
				<select id="ds" name="ds">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>

				</select>


				<label for="skills">Java:</label>
				<select id="java" name="java">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>

				</select>


				<label for="skills">Python:</label>
				<select id="python" name="python">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>

				</select>


				<label for="skills">Database Management System:</label>
				<select id="dbms" name="dbms">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>

				</select>


				<label for="skills">Algorithm:</label>
				<select id="ada" name="ada">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>

				</select>


				<label for="skills">Operating System:</label>
				<select id="os" name="os">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>

				</select>


			</fieldset> -->

			<fieldset>
				<legend><span class="number">2</span>Academics</legend>
				<label for="Xth">10th(percentage):</label>
				<input type="number" step="any" id="Xth" name="Xth" min="0" max="100" required>
				<label for="XIth">11th(percentage):</label>
				<input type="number" step="any" id="XIth" name="XIth" min="0" max="100" required>

				<label for="XIIth">12th(percentage):</label>
				<input type="number" step="any" id="XIIth" name="XIIth" min="0" max="100" required>
				<label for="csem">Current Sem:</label>
				<input type="number" id="csem" name="csem" min="1" max="8" required>

				<label for="sem1">1st sem(CPI):</label>
				<input type="number" step="any" id="sem1" name="sem1" min="0" max="10" required>


				<label for="sem2">2nd sem(CPI):</label>
				<input type="number" step="any" id="sem2" name="sem2" min="0" max="10" required>

				<label for="sem3">3rd sem(CPI):</label>
				<input type="number" step="any" id="sem3" name="sem3" min="0" max="10" required>

				<label for="sem4">4th sem(CPI):</label>
				<input type="number" step="any" id="sem4" name="sem4" min="0" max="10" required>

				<label for="sem5">5th sem(CPI):</label>
				<input type="number" step="any" id="sem5" name="sem5" min="0" max="10" required>

				<label for="sem6">6th sem(CPI):</label>
				<input type="number" step="any" id="sem6" name="sem6" min="0" max="10" required>

				<label for="sem7">7th sem(CPI):</label>
				<input type="number" step="any" id="sem7" name="sem7" min="0" max="10" required>

				<label for="sem8">8th sem(CPI):</label>
				<input type="number" step="any" id="sem8" name="sem8" min="0" max="10" required>

				<label for="ccpi">Current CPI:</label>
				<input type="number" step="any" id="ccpi" name="ccpi" min="0" max="10" required>





				<fieldset>

					<legend><span class="number">3</span>About Yourself</legend>
					<label for="aoi">Area Of Interest:</label>
					<textarea id="aoi" name="aoi"></textarea>
					<label for="bio">Bio:</label>
					<textarea id="bio" name="bio"></textarea>
				</fieldset>

				<button type="submit" value="submit">Sign Up</button>
				<button onclick="location.href='http://localhost/project/index.php'" type="button">Home</button>
		</form>

	</body>

</html>


</body>

</html>