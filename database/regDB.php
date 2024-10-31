<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "pawsitive";

    $conn = mysqli_connect($servername, $username, $password);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Create database
    $sql = "CREATE DATABASE $database";
    if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . mysqli_error($conn);
    }

    mysqli_close($conn);

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE USER(
    User_id INT AUTO_INCREMENT PRIMARY KEY,
    Full_name VARCHAR(100),
    password VARCHAR(255));";

    if (mysqli_query($conn,$sql)){
        echo "</br> User Table created successfully";
    }

    mysqli_close($conn);

?>