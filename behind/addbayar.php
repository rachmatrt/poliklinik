<?php 
include "nyambung.php";

$antrian_id = $_GET["antriane"];
$total_bayar = $_POST["total_bayar"];
$diterima = $_POST["diterima"];
$tanggal = date("Y-m-d");

$kembalian = $diterima - $total_bayar;

$save = $conn->query("INSERT INTO pembayaran (antrian_id, total_bayar, diterima, kembalian, tanggal, bukti) values ('$antrian_id', $total_bayar, $diterima, $kembalian, '$tanggal',' ') ");

if($save) {
	header("location: ../bayar.php");
}
else {
	echo $conn->error;
}

$conn->close();
?>