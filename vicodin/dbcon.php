<?php
$servername = "localhost"; // Change this to your database server name
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$database = "cullen_medical"; // Change this to your database name

// Create connection
$db = new mysqli($servername, $username, $password, $database);

// Check Connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>