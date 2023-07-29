<?php
include './partials/header.php';
include 'dbconnect.php';

$sql = "SELECT * FROM appointment";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="accordion" id="accordionExample">
        <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $row['apo_id'] . '" aria-expanded="false" aria-controls="collapse' . $row['apo_id'] . '">
            '.$row['subject'].'
          </button>
        </h2>
        <div id="collapse' . $row['apo_id'] . '" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Appointment ID:</strong> '.$row['apo_id'].' <br><br>
            <strong>Student Name:</strong> '.$row['stu_name'].' <br><br>
            <strong>Faculty:</strong> '.$row['fac_name'].' <br><br>
            <strong>Date and time of Appointment:</strong> '.$row['time_of_apo'].' <br><br>
            <strong>Time of creation of request :</strong> '.$row['time_of_creation'].' <br><br>
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
        <title>Appointment</title>
    </head>
</html>