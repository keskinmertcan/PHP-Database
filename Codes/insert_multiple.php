<?php
include 'dbcon.php';

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Derya', 'Bulut', 'john@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Deniz', 'Kalkan', 'mary@example.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Serap', 'Akgul', 'julie@example.com')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
