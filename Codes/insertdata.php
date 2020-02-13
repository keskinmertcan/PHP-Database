<?php
include 'dbcon.php';

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Hakan', 'Evcimik', 'hakan@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
