<?php

session_start();
include 'database.php';
$email = $_SESSION['email'];
//echo $email;
$roll = $_SESSION['roll'];

echo "

<table style='width:100%'>
<tr>
  <th>Name</th>
  <th>Position</th>
  <th>Branch</th>
  <th>Mode Of Interview</th>
  <th>Type of Interview</th>
  <th>CTC Range</th>
  <th>Apply Link</th>
</tr>

</table>

";




$query = "select * from student where roll='$roll'";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_row($result);

$sbranch = $row[3];
$name = $row[1];
$ccpi = $row[8];


$query = "select * from acad where roll='$roll'";

$result = mysqli_query($connect, $query);

$row = mysqli_fetch_row($result);

$csem = $row[4];


$query = "select * from jobpost";

$result = mysqli_query($connect2, $query);

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

    $show = true;
    $jid = $row['jid'];
    $branch = $row['branch'];
    $pos = strpos($branch, $sbranch);
    if ($pos == false) {
        $show = false;
    }

    if ($row['minq'] > $csem) {
        $show = false;
    }

    if ($row['minm'] > $ccpi) {
        $show = false;
    }




    if ($show == true) {

        echo "  <table style='width:100%'>
        <tr>
        <td>$row[name]</td>
        <td>$row[position]</td>
        <td>$row[branch]</td>
        <td>$row[moi]</td>
        <td>$row[toi]</td>
        <td>$row[ctc]</td>
        <form  method='post' action='apply.php'>
        <input type='hidden' name='roll' value=$roll></input>
        <input type='hidden' name='jid' value=$jid></input>
        <input type='hidden' name='ctc' value=$row[ctc]></input> 
        <td><button type='submit' name='submit'>Apply</button></td>
        </form>
        </tr>  
        </table>
      ";
    }
}

echo "<button onclick=location.href='http://localhost/project/sHomepage/index.php' type='button'>Go to Homepage</button>";
