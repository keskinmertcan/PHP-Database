<?php
include 'dbcon.php';
// Create database
$sql = "CREATE DATABASE myDB2";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();


?>
