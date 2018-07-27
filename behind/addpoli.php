<?php 
include "nyambung.php";

$nmpoli = $_POST['namapoli'];
$hrgpoli = (int) $_POST['hargapoli'];


$addpoli = "INSERT INTO poli (nama_poli,biaya_poli) VALUES('$nmpoli','$hrgpoli')"; 

if ($conn->query($addpoli) === TRUE) {
    header('location: ../poli.php');

} else {
    echo "Error: " . $addpoli . "<br>" . $conn->error;
    header('location: ../formpoli.php');
}

$conn->close();

?>
