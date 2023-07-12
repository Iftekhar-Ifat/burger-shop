<?php
// Database Configuration
$host = 'localhost'; // Database host
$username = 'root'; // Database username
$database = 'web_project_db'; // Database name

// Create a connection to the database
$connection = mysqli_connect($host, $username, "", $database);

// Check if the connection was successful
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
