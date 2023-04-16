<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Posting</title>
    <link rel="stylesheet" href="css/style.css">
</head>


<body>


    <?php
    session_start();
    $cid = $_SESSION['cid'];

    ?>

    <form action="process.php" method="post">

        <h1>Job Posting</h1>

        <fieldset>
            <legend><span class="number">1</span>Your basic info</legend>
            <label for="cid">Comapy Id:</label>
            <input type="number" id="cid" name="cid" value="<?php echo $cid; ?>" required>

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>





            <label for="mobile">Mobile No:</label>
            <input type="text" id="mobile" name="mobile" pattern=".{5,10}" required title="Max 10 digits are allowed">

            <label for="mail">Email:</label>
            <input type="email" id="mail" name="email" required>

        </fieldset>


        <fieldset>

            <legend><span class="number">2</span>About Job</legend>
            <label for="position">Position:</label>
            <input type="text" id="position" name="position" required>


            <label for="branch">Required Branch:</label>
            <input type="checkbox" name="branch0" value="CSE"> CSE<br></input>
            <input type="checkbox" name="branch1" value="AIDS"> AIDS<br></input>
            <input type="checkbox" name="branch2" value="MNC"> MNC<br></input>
            <input type="checkbox" name="branch3" value="EEE"> EEE<br></input>
            <input type="checkbox" name="branch4" value="CBE"> CBE<br></input>
            <input type="checkbox" name="branch5" value="CE"> CE<br></input>
            <input type="checkbox" name="branch6" value="ME"> ME<br></input>
            <input type="checkbox" name="branch7" value="MME"> MME<br></input>


            <br>
            <label for="minq">Minimum Qualification (No. Of Semester):</label>
            <input type="number" id="minq" name="minq" min="1" max="8" value="7" required>

            <label for="minm">Minimum Marks Criteria (CPI - 0 to 10):</label>
            <input type="number" id="minm" name="minm" min="1" max="10" step="any" required>



            <label>Mode Of Interview:</label>
            <input type="radio" id="m" value="offline" name="moi" checked="checked"><label for="m" class="light">Offline</label><br>
            <input type="radio" id="f" value="online" name="moi"><label for="f" class="light">Online</label><br>
            <br>
            <label>Type Of Selection:</label>
            <input type="radio" id="m" value="Written" name="toi" checked="checked"><label for="m" class="light">Written</label><br>
            <input type="radio" id="f" value="Interview" name="toi"><label for="f" class="light">Interview</label><br>

            <br>
            <label for="ctc">CTC Range(in LPA):</label>
            <input type="number" id="ctc" name="ctc" step="any" required>



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



        <button type="submit" value="submit">Post Job</button>
        <button onclick=location.href='http://localhost/project/clogin/chomepage.php' type='button'>Go to Homepage</button>
    </form>





</body>

</html>