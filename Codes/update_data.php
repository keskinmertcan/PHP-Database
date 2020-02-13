<?php
include ('dbcon.php');

$sql = "UPDATE MyGuests SET firstname='Yonca' WHERE id=3";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
