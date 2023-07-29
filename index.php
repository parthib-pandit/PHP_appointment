<?php

if(isset($_POST['roll_number'])){
    $roll = $_POST["roll_number"];
    session_start();
    $_SESSION['roll'] = $roll;
    header("Location:./schedulemeeting.php");
}



?>



<html>

<head>
    <title>Schedule a Meeting</title>
    <style>
        input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        display: none;
      }
      
    </style>
</head>

<body>
    <?php include './partials/header.php'; ?>
    <div class="mx-auto my-5 p-2" style="width: 200px;">
        <form action="index.php" method="POST">
        <div class="mb-3" >
            <label for="exampleInputEmail1" class="form-label">Enter your Roll Number:</label>
            <input type="number" class="form-control" id="roll_number" name="roll_number">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
    </div>
    
</body>

</html>