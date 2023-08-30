<?php
// Database configuration  
define('DB_HOST', 'MySQL_Database_Host');
define('DB_USERNAME', 'MySQL_Database_Username');
define('DB_PASSWORD', '');
define('DB_NAME', 'MySQL_Database_Name');

// Create database connection  
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection  
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}