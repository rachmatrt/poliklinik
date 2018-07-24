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
     <table class="table table-striped" id="table" style="z-index: 1;">
     		<tr align="center">
     			<td width="50px">No</td>
                <td> Antrian </td>
                <td> Nama Pasien </td>
     			<td> Nama Dokter </td>
                <td> Pemeriksaan </td>
                <td> Biaya </td>
                <td> </td>


     		</tr>
            <?php 
            
            $query= $conn->query("SELECT * FROM pemeriksaan JOIN poli_tindakan on poli_tindakan.id = pemeriksaan.tindakan_id JOIN users ON users.id = pemeriksaan.dokter_id JOIN antrian ON antrian.id = pemeriksaan.antrian_id ORDER BY tanggal ='$date' AND no_antrian ");
            $urut = 0;
            while ($row = $query->fetch_array()){ $urut++; ?>
            <tr align="center">  
             <td ><?php echo $urut; ?> </td>
             <td ><?php echo $row["no_antrian"]; ?></td>
             <td ><?php echo $row["nama_pasien"]; ?></td>
             <td ><?php echo $row["nama_lengkap"]; ?></td>
             <td ><?php echo $row["nama_tindakan"]; ?></td>
             <td ><?php echo $row["biaya_tindakan"]; ?></td>



             <td >
                <a href=".php?id=<?php echo $idpoli; ?>&antri=<?php echo $row["id"]; ?>" class="btn btn-success">bayar</a>
            </td> 
            </tr> <?php $conn->error; } ?>         
     </table> 
     <div >
     
	</div>
</div>

<?php 
$conn->close();
include "archive/footer.php";
?>

