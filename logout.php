<?php


// Start the session to access session variables
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();
session_unset();

// Redirect the user to the login page or any other desired page after logout
header("Location: index.php");
exit();




?>