<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    include 'database.php';
    $cid = $_POST['cid'];
    $name = $_POST['name'];
    $phone = $_POST['mobile'];
    $email = $_POST['email'];
    $position = $_POST['position'];









    $branch = "";

    if (isset($_POST['branch0'])) {
        $branch0 = $_POST['branch0'];
        $branch = $branch . " , ";
        $branch = $branch . $branch0;
    }
    if (isset($_POST['branch1'])) {
        $branch1 = $_POST['branch1'];
        $branch = $branch . " , ";
        $branch = $branch . $branch1;
    }
    if (isset($_POST['branch2'])) {
        $branch2 = $_POST['branch2'];
        $branch = $branch . " , ";
        $branch = $branch . $branch2;
    }
    if (isset($_POST['branch3'])) {
        $branch3 = $_POST['branch3'];
        $branch = $branch . " , ";
        $branch = $branch . $branch3;
    }
    if (isset($_POST['branch4'])) {
        $branch4 = $_POST['branch4'];
        $branch = $branch . " , ";
        $branch = $branch . $branch4;
    }
    if (isset($_POST['branch5'])) {
        $branch5 = $_POST['branch5'];
        $branch = $branch . " , ";
        $branch = $branch . $branch5;
    }
    if (isset($_POST['branch6'])) {
        $branch6 = $_POST['branch6'];
        $branch = $branch . " , ";
        $branch = $branch . $branch6;
    }
    if (isset($_POST['branch7'])) {
        $branch7 = $_POST['branch7'];
        $branch = $branch . " , ";
        $branch = $branch . $branch7;
    }


    $minq = $_POST['minq'];
    $minm = $_POST['minm'];
    $moi = $_POST['moi'];
    $toi = $_POST['toi'];
    $ctc = $_POST['ctc'];
    $date = date('Y-m-d H:i:s');

    $query = "insert into jobpost (cid,name,phone,email,position,branch,minq,minm,moi,toi,ctc,date) values ('$cid','$name','$phone','$email','$position','$branch','$minq','$minm','$moi','$toi','$ctc','$date')";


    $result = mysqli_query($connect, $query);
    echo mysqli_error($connect);
    $jobid = $connect->insert_id;
    echo "Your Job id is: " . $jobid;
    echo "<br>";
    echo "<a href='http://localhost/project/clogin/chomepage.php
    '>Go to HomePage</a> ";

    ?>



</body>

</html>