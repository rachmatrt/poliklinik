<?php 
include "nyambung.php";

$date2 = date("Y-m-d");
$idpoli =(int) $_POST['poli'] ;
$ambil = "SELECT * FROM antrian WHERE poli_id = '$idpoli' AND tanggal = '$date2' ORDER BY no_antrian DESC LIMIT 1";
$hasil = mysqli_query($conn,$ambil);
$no = mysqli_fetch_array($hasil);
$baru = (int) $no["no_antrian"] + 1 ;
$pasien = $_POST['pasien'];


$masukan= "INSERT INTO antrian (nama_pasien,no_antrian,tanggal,poli_id) VALUES('$pasien','$baru','$date2','$idpoli')";

if ($conn->query($masukan) === TRUE) {
	
	header('location: ../index.php');
} else {
	echo "Error :" . $masukan . "<br>". $conn->error;
	//header('location : ../index.php');
}

$conn->close();
?>