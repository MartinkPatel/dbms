<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verify</title>
    <link rel="stylesheet" href="css/style.css">
</head>




<body>

    <?php

    include 'database2.php';

    $roll = $_POST['roll'];
    //secho $roll;

    $query = "select * from student where roll='$roll'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    $name = $row['name'];

    $dob = $row['dob'];
    $specialization = $row['specialization'];
    $phone = $row['phone'];
    $email = $row['email'];
    $password = $row['password'];
    $gender = $row['gender'];
    $ccpi = $row['ccpi'];
    $aoi = $row['aoi'];
    $bio = $row['bio'];

    $query = "select * from acad where roll='$roll';";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);


    $Xth = $row['10th'];
    $XIth = $row['11th'];
    $XIIth = $row['12th'];
    $csem = $row['csem'];
    $sem1 = $row['sem1'];
    $sem2 = $row['sem2'];
    $sem3 = $row['sem3'];
    $sem4 = $row['sem4'];
    $sem5 = $row['sem5'];
    $sem6 = $row['sem6'];
    $sem7 = $row['sem7'];
    $sem8 = $row['sem8'];


    // if (isset($_POST['submit'])) {


    //     $name = $_POST['name'];
    //     $dob = $_POST['dob'];
    //     $specialization = $_POST['specialization'];
    //     $gender = $_POST['gender'];
    //     $phone = $_POST['mobile'];
    //     $email = $_POST['email'];
    //     $bio = $_POST['bio'];
    //     $aoi = $_POST['aoi'];


    //     $Xth = $_POST['Xth'];
    //     $XIth = $_POST['XIth'];
    //     $XIIth = $_POST['XIIth'];
    //     $csem = $_POST['csem'];
    //     $sem1 = $_POST['sem1'];
    //     $sem2 = $_POST['sem2'];
    //     $sem3 = $_POST['sem3'];
    //     $sem4 = $_POST['sem4'];
    //     $sem5 = $_POST['sem5'];
    //     $sem6 = $_POST['sem6'];
    //     $sem7 = $_POST['sem7'];
    //     $sem8 = $_POST['sem8'];
    //     $ccpi = $_POST['ccpi'];





    //     $query = "update student set name='$name', dob='$dob', specialization='$specialization', phone='$phone', email='$email',gender='$gender',ccpi='$ccpi',aoi='$aoi',bio='$bio' where roll='$roll';";

    //     $result = mysqli_query($connect, $query);

    //     $query = "update acad set 10th='$Xth', 11th='$XIth', 12th='$XIIth', csem='$csem', sem1='$sem1', sem2='$sem2', sem3='$sem3',sem4='$sem4',sem5='$sem5',sem6='$sem6',sem7='$sem7',sem8='$sem8';";
    //     $result = mysqli_query($connect, $query);

    //     if (mysqli_affected_rows($connect) > 0) {
    //         echo "success";
    //     }
    // }

    ?>

    <form method="post" action="process.php">

        <h1>Student Verification</h1>

        <fieldset>
            <legend><span class="number">1</span>Your basic info</legend>
            <label for="roll">Roll number:</label>
            <input type="text" id="roll" name="roll" value=<?php echo $roll; ?> required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value=<?php echo $name; ?> required>
            <label for="dob">Date Of Birth:</label>
            <input type="date" id="dob" name="dob" value=<?php echo $dob; ?> required>
            <label for="specialization">Specialization:</label>
            <!-- <input type="text" id="branch" name="branch" required> -->
            <!-- <label for="basics">Branch:</label> -->
            <select id="specialization" name="specialization" value=<?php echo $specialization; ?>>
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
            <input type="text" id="mobile" name="mobile" pattern=".{5,10}" required title="Max 10 digits are allowed" value=<?php echo $phone; ?>>

            <label for="mail">Email:</label>
            <input type="email" id="mail" name="email" required value=<?php echo $email; ?>>


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
            <input type="number" step="any" id="Xth" name="Xth" min="0" max="100" required value=<?php echo $Xth; ?>>
            <label for="XIth">11th(percentage):</label>
            <input type="number" step="any" id="XIth" name="XIth" min="0" max="100" value=<?php echo $XIth; ?> required>

            <label for="XIIth">12th(percentage):</label>
            <input type="number" step="any" id="XIIth" name="XIIth" min="0" max="100" value=<?php echo $XIIth; ?> required>
            <label for="csem">Current Sem:</label>
            <input type="number" id="csem" name="csem" min="1" max="8" value=<?php echo $csem; ?> required>

            <label for="sem1">1st sem(CPI):</label>
            <input type="number" step="any" id="sem1" name="sem1" min="0" max="10" value=<?php echo $sem1; ?> required>


            <label for="sem2">2nd sem(CPI):</label>
            <input type="number" step="any" id="sem2" name="sem2" min="0" max="10" value=<?php echo $sem2; ?> required>

            <label for="sem3">3rd sem(CPI):</label>
            <input type="number" step="any" id="sem3" name="sem3" min="0" max="10" value=<?php echo $sem3; ?> required>

            <label for="sem4">4th sem(CPI):</label>
            <input type="number" step="any" id="sem4" name="sem4" min="0" max="10" value=<?php echo $sem4; ?> required>

            <label for="sem5">5th sem(CPI):</label>
            <input type="number" step="any" id="sem5" name="sem5" min="0" max="10" value=<?php echo $sem5; ?> required>

            <label for="sem6">6th sem(CPI):</label>
            <input type="number" step="any" id="sem6" name="sem6" min="0" max="10" value=<?php echo $sem6; ?> required>

            <label for="sem7">7th sem(CPI):</label>
            <input type="number" step="any" id="sem7" name="sem7" min="0" max="10" value=<?php echo $sem7; ?> required>

            <label for="sem8">8th sem(CPI):</label>
            <input type="number" step="any" id="sem8" name="sem8" min="0" max="10" value=<?php echo $sem8; ?> required>

            <label for="ccpi">Current CPI:</label>
            <input type="number" step="any" id="ccpi" name="ccpi" min="0" max="10" value=<?php echo $ccpi; ?> required>





            <fieldset>

                <legend><span class="number">3</span>About Yourself</legend>
                <label for="aoi">Area Of Interest:</label>
                <textarea id="aoi" name="aoi">
                <?php echo $aoi; ?>
                </textarea>
                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio">
                <?php echo $aoi; ?>
                </textarea>
            </fieldset>

            <button type="submit" value="submit">Verify</button>
    </form>



</body>

</html>