<?php
include './partials/header.php';
include 'dbconnect.php';
require 'authentication.php';

$sql = "SELECT * FROM faculty";
$result = $conn->query($sql);



if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="accordion" id="accordionExample">
        <div class="accordion-item">
        <h2 class="accordion-header">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse' . $row['fac_id'] . '" aria-expanded="false" aria-controls="collapse' . $row['fac_id'] . '">
            '.$row['fac_name'].'
          </button>
        </h2>
        <div id="collapse' . $row['fac_id'] . '" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Faculty ID:</strong> '.$row['fac_id'].' <br><br>
            <strong>Faculty Phone:</strong> '.$row['fac_phone'].' <br><br>
            <strong>Faculty Address:</strong> '.$row['fac_address'].' <br><br>

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
        <title>Faculty</title>
    </head>
</html>