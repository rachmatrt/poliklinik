<?php 
include "nyambung.php";

$idedit2 = (int) $_GET['id'];
$nmobat2 = $_POST['namaobat2'];
$deskrip2 = $_POST['deskrip2'];
$hrg2 =(int) $_POST['harga2'];
$stok2 = (int) $_POST['stok2'];	

$diganti = "UPDATE obat SET nama_obat='$nmobat2', deskripsi='$deskrip2', harga ='$hrg2', stok='$stok2' WHERE id='$idedit2'";

if ($conn->query($diganti) === TRUE) {
    header('location: ../obat.php');

} else {
    echo "Error: " . $diganti . "<br>" . $conn->error;
    //header('location: ../editdokter.php');
}

$conn->close();
?>