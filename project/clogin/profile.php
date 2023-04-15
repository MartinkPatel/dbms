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
$email = $row["email"];
$number = $row["phone"];
$location = $row["location"];
$bio = $row["cbio"];
$ctc = $row["ctc"];
$eo = $row["size"]
?>


<!DOCTYPE html>
<html>

<head>
  <title>Profile Details</title>
</head>

<head>
  <meta charset="UTF-8">
  <title>HP</title>
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
  <form>

    <h1>Company Profile</h1>

    <fieldset>
      <legend><span class="number">1</span>Your basic info</legend>

      <label for="name">Name:</label>
      <input type="text" id="comp_name" name="comp_name" value=<?php echo $name; ?> readonly>



      <label for="mail">Email:</label>
      <input type="email" id="mail" name="comp_email" value=<?php echo $email; ?> readonly>

      <label for="phone">Phone Number:</label>
      <input type="number" id="phone" name="phone" value=<?php echo $number; ?> readonly>



      <label for="location">Location:</label>
      <input type="text" id="location" name="location" value=<?php echo $location; ?> readonly>


      <fieldset>
        <legend><span class="number">2</span>About the organisation</legend>
        <label for="comp_bio">Biography:</label>
        <input type="text" id="cbio" name="cbio" value=<?php echo $bio; ?> readonly>
        <label for="size">Number Of Opportunities (Expected):</label>
        <input type="text" id="size" name="size" value=<?php echo $eo; ?> readonly>
        <label for="ctc">CTC Expected(in Lakhs):</label>
        <input type="text" id="ctc" name="ctc" value=<?php echo $ctc; ?> readonly>

      </fieldset>

      <!-- <button onclick="location.href='http://localhost/project/sHomepage/'" type="button">Homepage</button> -->


  </form>
  <!-- <button onclick="alert('Click here to go there!'); window.location.href = '/project/clogin/chomepage.php'">Click Me</button> -->

</body>

</html>