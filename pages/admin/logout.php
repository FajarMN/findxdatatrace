<?php
session_start();
session_destroy(); // Destroy all session data
header("location: login.php"); // Redirect to the login page
exit;
?>
