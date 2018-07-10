<?php 
include "nyambung.php";


if (isset($_POST['adddokter'])) {
$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
$date = date_timestamp_get();

mysqli_query($conn,"INSERT INTO users VALUES (null,'$username','$password','$namalengkap','$alamat', 'dokter',null,'$date' ");

	header('location:../dokter.php');

} else {
	
	echo "gagal masuk";
 }

$conn->close();
?>
