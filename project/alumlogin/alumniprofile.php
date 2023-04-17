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

    include 'connection.php';
    session_start();
    $email = $_SESSION['email'];
    //secho $roll;

    $query = "select * from alumni where email='$email'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $dob = $row['dob'];
    $specialization = $row['specialization'];
    $phone = $row['phone'];
    $email = $row['email'];
    $password = $row['password'];
    $gender = $row['gender'];
    $cpi = $row['cpi'];
    //$aoi = $row['aoi'];
    $bio = $row['bio'];

    /*$query = "select * from  where roll='$roll';";
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
    $sem8 = $row['sem8'];*/


    ?>


    <form>
        <h1>Student Profle</h1>

        <fieldset>
            <legend><span class="number">1</span>Your basic info</legend>
            <label for="roll">Roll number:</label>


            <label for="name">Name:</label>
            <input readonly type="text" id="name" name="name" value=<?php echo $name; ?> required>
            <label for="dob">Date Of Birth:</label>
            <input readonly type="date" id="dob" name="dob" value=<?php echo $dob; ?> required>
            <label for="specialization">Specialization:</label>
            <!-- <input type="text" id="branch" name="branch" required> -->
            <!-- <label for="basics">Branch:</label> -->
            <select disabled="true" id="specialization" name="specialization" value=<?php echo $specialization; ?>>
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
            <input readonly type="text" id="mobile" name="mobile" pattern=".{5,10}" required title="Max 10 digits are allowed" value=<?php echo $phone; ?>>

            <label for="mail">Email:</label>
            <input readonly type="email" id="mail" name="email" required value=<?php echo $email; ?>>


            <label>Gender:</label>
            <input readonly type="radio" id="m" value="m" name="gender" checked="checked"><label for="m" class="light">Male</label><br>
            <input readonly type="radio" id="f" value="f" name="gender"><label for="f" class="light">Female</label><br>
            <input readonly type="radio" id="n" value="n" name="gender"><label for="n" class="light">None Of The</label><br>
        </fieldset>


        <fieldset>

            <label for="cpi">Current CPI:</label>
            <input readonly type="number" step="any" id="cpi" name="cpi" min="0" max="10" value=<?php echo $cpi; ?> required>





            <fieldset>

                <legend><span class="number">3</span>About Yourself</legend>


                <label for="bio">Bio:</label>
                <textarea readonly id="bio" name="bio">
                <?php echo $bio; ?>
                </textarea>
            </fieldset>

            <button onclick="location.href='http://localhost/project/alumlogin/alumnihomepage.php'" type="button">Homepage</button>

    </form>


</body>

</html>