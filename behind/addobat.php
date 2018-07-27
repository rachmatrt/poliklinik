<?php 
include "nyambung.php";

$ambobat = "SELECT * FROM obat ORDER BY id DESC LIMIT 1";
$hasobat = mysqli_query($conn,$ambobat);
$rowobat = mysqli_fetch_array($hasobat);

$idobat = (int) $rowobat["id"] +1;
$nmobat = $_POST['namaobat'];
$deskripsi = $_POST['descrip'];
$hrg = (int) $_POST['harganya'];
$stok1 = (int) $_POST['stok'];

$addobat = "INSERT INTO obat (id,nama_obat,harga,deskripsi,stok) VALUES ( '$idobat','$nmobat','$hrg','$deskripsi','$stok1')";

if ($conn->query($addobat) === TRUE) {
	header('location: ../obat.php');
} else {
	echo "Error: " . $addobat . "<br>" . $conn->error;
	
}

$conn->close();
?>