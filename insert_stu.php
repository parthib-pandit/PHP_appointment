<?php

require 'dbconnect.php';
if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['dept']) && isset($_POST['address'])) {

    $student = $_POST['name'];
    $phone = $_POST['phone'];
    $dept = $_POST['dept'];
    $address = $_POST['address'];



    $query = "INSERT INTO students (stu_name, stu_phone, stu_department, stu_address) VALUES ('$student', '$phone', '$dept', '$address' )";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>";
        echo 'alert("Values have been entered");';
        echo 'window.location = "insert_stu.php"';
        echo "</script>";
    } else {
        echo "<script>";
        echo 'alert("Values cannot be entered");';
        echo 'window.location = "insert_stu.php"';
        echo "</script>";
    }
}



?>






<html>

<head>
    <title>Insert into db</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-items:center;
            height: 97vh;
            background:#f2f5fa ;
        }
        .form{
            width :30%;
            padding:1rem;
            border:.4px solid #ccc;
            box-shadow:  6px -8px 10px rgba(0,0
            ,0,.2);
            margin-top:-10vw;
        }
        input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        display: none;
      }
      .button{
        cursor:pointer;
        font-size:large;
        color:green;
        text-align:center;
        line-height:normal;
        letter-spacing: normal;
        transition: all ease-in-out 0.3s;
      }
      .button:hover{
        transform: scale(.9) translateY(-2%);
        opacity:.9;
      }
    </style>
</head>

<body>
    
    <div class="form">
        <h1>Enter Student Details</h1>
        <form action="insert_stu.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="phone">Phone:</label>
        <input type="number" name="phone" id="phone"><br><br>
        <label for="add">Address:</label>
        <input type="text" name="address" id="add"><br><br>
        <label for="dept">Department:</label>
        <input type="text" name="dept" id="dept"><br><br>
        <input class="button" type="submit" value="Submit">
    </form>
    </div>
    
</body>

</html>