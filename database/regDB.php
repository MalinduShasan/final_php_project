<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pawsitive";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $database";
if (!mysqli_query($conn, $sql)) {
    die("Error creating database: " . mysqli_error($conn));
}

// Close and reopen the connection to the new database
mysqli_close($conn);
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS USER (
    User_id INT AUTO_INCREMENT PRIMARY KEY,
    Full_name VARCHAR(100),
    email VARCHAR(255), 
    password VARCHAR(255)
);";

if (!mysqli_query($conn, $sql)) {
    die("Error creating table: " . mysqli_error($conn));
}


?>
