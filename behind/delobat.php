<?php 
include "nyambung.php";

$idobat = (int) $_GET["id"];

$delobat = "DELETE FROM obat WHERE id = '$idobat' ";

if ($conn->query($delobat) === TRUE) {
	header('location: ../obat.php');
} else {
	echo "Delete Recording Error :". $conn->error;
}
$conn->close();
?>