<?php

session_start();
if(!isset($_SESSION['roll'])){
    echo "<script>";
    echo 'alert("You are not logged in!!");';
    echo 'window.location = "index.php"';
    echo "</script>";
}



?>