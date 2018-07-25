<?php include "archive/header.php";
include "behind/nyambung.php"; 
$date2 = date("d-m-Y");
$date = date("Y-m-d");
$time = date("h:m:s");
?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">List Pemeriksaan</li>
     </ol>
     <div class="alert alert-primary" style="font-size: 46px; text-align: center;"> Master Pemeriksaan</div>
     <div class="alert alert-warning" style="text-align: center;"> <?php  echo $date2."   ".$time;?> </div>
     
     <div class="mt-5">
     <table class="table table-striped" >
     		<tr align="center">
     			<td width="50px">No</td>
                <td> Kode </td>
                <td> Nama Pasien </td>
     			<td> Nama Dokter </td>
                <td width="500px"> Pemeriksaan </td>
                <td> Biaya </td>
                <td> Poliklinik </td>
                <td> Action </td>


     		</tr>
            <?php 
            
            $query= $conn->query("SELECT * FROM pemeriksaan JOIN poli_tindakan on poli_tindakan.id = pemeriksaan.tindakan_id JOIN users ON users.id = pemeriksaan.dokter_id JOIN antrian ON antrian.id = pemeriksaan.antrian_id group by antrian_id ORDER BY tanggal ='$date' ");
            
            while ($row = $query->fetch_array()){ $urut++; 
            $poline = (int) $row["poli_id"];
            $query2 = "SELECT * FROM poli JOIN antrian ON antrian.poli_id = poli.id where poli_id = '$poline'";
            $result2 = mysqli_query($conn,$query2);
            $row2 = mysqli_fetch_array($result2);

            ?>
            <tr align="center">  
             <td ><?php echo $urut; ?> </td>
             <td ><?php echo $row["id"]; ?></td>          
             <td ><?php echo $row["nama_pasien"]; ?></td>
             <td ><?php echo $row["nama_lengkap"]; ?></td>
             <td ><?php echo $row["nama_tindakan"]; ?></td>
             <td ><?php echo $row["biaya_tindakan"]; ?></td>
             <td ><?php echo $row2["nama_poli"]; ?></td>
             <td >
               <a href="bayar.php?poli=<?php echo $poline; ?>&antri=<?php echo $row["id"];?>" class="btn btn-success"> Bayar </a>
                <a href="cetak.php?idpoli=<?php echo $poline; ?>&antri=<?php echo $row["id"];?>&dokter=<?php echo $row["dokter_id"];?>&action=<?php echo $row["tindakan_id"]; ?>" class="btn btn-warning"> Cetak </a>
                <a href="" class="btn btn-danger">Upload</a>
            </td> 
           <?php $conn->error; } ?>
            </tr>          
     </table> 
     <div >
     
	</div>
</div>

<?php 
$conn->close();
include "archive/footer.php";
?>

