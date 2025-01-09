<?php 

/*  MYSQLI Connection */
// Ubuntu Linux Connection
// $host = 'localhost';
// $dbName = 'testing';
// $dbUsername = 'root';
// $dbPassword = 'mudahaja123';

// XAMPP Connection
$host = 'localhost';
$dbName = 'testing';
$dbUsername = 'root';
$dbPassword = '';

// MYSQLI Connection Variable
$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

// Checking connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// } else {
//     echo "Connection successful!";
// }

?>