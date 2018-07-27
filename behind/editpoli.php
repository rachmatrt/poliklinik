<?php 
include "nyambung.php";

$idedit2 = (int) $_GET['id'];
$nmpoli2 = $_POST['namapoli2'];
$hrgpoli2 =(int) $_POST['harga2'];

$diganti = "UPDATE poli SET nama_poli='$nmpoli2', biaya_poli ='$hrgpoli2' WHERE id='$idedit2'";

if ($conn->query($diganti) === TRUE) {
    header('location: ../poli.php');

} else {
    echo "Error: " . $diganti . "<br>" . $conn->error;
    //header('location: ../editdokter.php');
}

$conn->close();
?>