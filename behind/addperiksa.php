<?php 
include "nyambung.php";

$idpoli = (int) $_GET['poli'];
$idantri = (int) $_GET['addantri'];
$date = date("Y-m-d");
$tindakan = $_POST['action'];
$iddokter = (int) $_POST['dokter'];

$q_pemeriksaan = "INSERT INTO pemeriksaan (tindakan_id,dokter_id,antrian_id) VALUES ('$tindakan','$iddokter','$idantri')";

if ($conn->query($q_pemeriksaan)===TRUE){
	header('location: ../periksa.php');
} else{
	echo "pesan error :".$q_pemeriksaan	->error;
}



$conn->close();
?>