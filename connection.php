<?php
// Database configuration
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'libraryDB';

// Create a database connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check the connection
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
