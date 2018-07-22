<?php
include "nyambung.php";

$date3 = date ("Y-m-d");
$idpoli3 = (int) $_GET ['id']; ;
$noantri3 = (int) $_GET ['noantri'] +1;

$counter3 = "SELECT * FROM antrian WHERE poli_id = '$idpoli3' AND no_antrian = '$noantri3' AND tanggal = '$date3'";
$hasil3 = mysqli_query($conn,$counter3);
$row3 = mysqli_fetch_array($hasil3);



$conn->close();
?>