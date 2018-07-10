<?php 
include "nyambung.php";

$iddokter = (int) $_GET['id'];

$del = "DELETE FROM users WHERE id = '{$iddokter}'";

if ($conn->query($del) === TRUE) {
    header('location: ../dokter.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>