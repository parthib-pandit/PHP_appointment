<?php
include './partials/header.php';
require 'dbconnect.php';
require 'authentication.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="accordion" id="accordionExample">
        <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $row['stu_id'] . '" aria-expanded="false" aria-controls="collapse' . $row['stu_id'] . '">
            '.$row['stu_name'].'
          </button>
        </h2>
        <div id="collapse' . $row['stu_id'] . '" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Student ID:</strong> '.$row['stu_id'].' <br><br>
            <strong>Student Phone:</strong> '.$row['stu_phone'].' <br><br>
            <strong>Student Address:</strong> '.$row['stu_address'].' <br><br>
            <strong>Student Department:</strong> '.$row['stu_department'].' <br><br>

          </div>
        </div>
      </div>
      </div>
      </div>
    
    ';
    }
}







?>

<html>
    <head>
        <title>Students</title>
    </head>
</html>