<?php

include './partials/header.php';
include 'dbconnect.php';
require 'authentication.php';
// session_start();
$roll = $_SESSION['roll'];
$sql = "SELECT stu_name FROM students WHERE stu_id = '$roll'";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION['name'] = $row['stu_name'];
        $name = $row['stu_name'];
    }

}


if (isset($_POST['name']) and isset($_POST['time']) && isset($_POST['subject'])) {
    $faculty = $_POST['name'];
    $time = $_POST['time'];
    $subject = $_POST['subject'];

    $sql = "INSERT INTO appointment(stu_name, fac_name, time_of_apo, subject) VALUES ('$name', '$faculty', '$time', '$subject');";
    if ($conn->query($sql)) {
        echo "<script>";
        echo 'alert("Your appointment was scheduled succesfully!!");';
        echo '</script>';
    } else {
        echo "<script>";
        echo 'alert("Your appointment scheduling failed!!");';
        echo '</script>';
    }
}

?>




<html>

<head>
    <title>Schedule a meeting</title>
    <style>
    body {
        height: 97vh;
    }

    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 90%;
        background: #f2f5fa;
        border-radius: .3rem;
        box-shadow: rgba(6, 44, 101, .1) 0px 2px 4px -1px, rgb(6 44 101 / 10%) 0px 4px 6px -2
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="heading">
            <h1>Hello
                <?php echo $_SESSION['name']; ?>
            </h1>
        </div>
        <div class="form">
            <form action="schedulemeeting.php" method="POST">
                <label for="name">Select the faculty Name:</label>
                <select id="name" name="name">
                    <?php




                    $sql = "SELECT fac_name FROM faculty";
                    $result = $conn->query($sql);


                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['fac_name'] . '">' . $row['fac_name'] . '</option>';
                        }
                    }

                    $conn->close();
                    ?>
                </select><br>
                <label for="time">Enter the date and time for appointment:</label>
                <input type="datetime-local" name="time" id="time"><br>
                <label for="subject">Enter Subject for appointment</label>
                <textarea name="subject" id="subject" cols="30" rows="10"></textarea><br>
                <button class="btn btn-outline-success" type="submit">Submit</button>
            </form>
        </div>
        <a href="./logout.php"><button type="button" class="btn btn-outline-success">Logout</button></a>
    </div>



</body>


</html>