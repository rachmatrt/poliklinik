<?php 
include "behind/nyambung.php";

$idantri = (int) $_GET['antriane'];
$namafile = $_FILES['berkas']['name'] ;
$namasementara = $_FILES['berkas']['tmp_name'];
$dirupload = "terupload/" ;
$name = $dirupload.$namafile;
echo $name;
$query = $conn->query(" UPDATE pembayaran SET bukti = '$name' WHERE antrian_id = '$idantri'");
$conn->close();

$upload = move_uploaded_file($namasementara, $dirupload.$namafile);

if ($upload) {
	echo "Upload Behasil </br>";
	echo header("location: bayar.php");
} else {
	echo "Gagal Upload";
}
?>