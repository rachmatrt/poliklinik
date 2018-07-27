<?php 
include "nyambung.php";

$idpoli = (int) $_GET['id'];

$del = "DELETE FROM poli WHERE id = '$idpoli'";

if ($conn->query($del) === TRUE) {
	
    header('location: ../poli.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();


?>