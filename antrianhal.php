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
        <li class="breadcrumb-item active">List Antrian</li>
     </ol>
     <div class="alert alert-primary" style="font-size: 46px; text-align: center;"> Master Antrian </div>
     <div class="alert alert-warning" style="text-align: center;"> <?php  echo $date2."   ".$time;?> </div>
     <div class="container" style="width: 50%;">
        <form method="POST" action="antrianhal.php" align="center">
        <select name="poli" class="form-control" aria-describedby="Poliklinik"> 
            <option value ="0" selected>Pilih Poliklinik</option>
            <?php 
            $query = $conn->query("SELECT * FROM poli");
            while ($row = $query->fetch_array()) { ?>
            <option value="<?php echo $row["id"]?>"> <?php echo $row["nama_poli"] ?></option> <?php }?>
        </select>
            <button id="pilih" class="btn btn-danger" style="width: 500px; margin-top: 2%;" >Pilih</button>
        </form>
     </div>
     <div class="mt-5">
     <table class="table table-striped" id="table" style="z-index: 1;">
     		<tr align="center">
     			<td width="50px">No</td>
                <td> Kode </td>
                <td> Nama Pasien </td>
     			<td> Nomor Antrian </td>
                <td> Poliklinik </td>
                <td> Action </td>
     		</tr>
            <?php 
            $idpoli = (int) $_POST['poli'];
            $query=$conn->query("SELECT * FROM antrian JOIN poli on poli.id = antrian.poli_id  WHERE poli_id = '$idpoli' ORDER BY tanggal = '$date'  ");
            $urut = 0;
            while ($row = $query->fetch_array()){ $urut++; ?>
            <tr align="center">  
             <td ><?php echo $urut ?> </td>
             <td ><?php echo $row["id"] ?></td>
             <td ><?php echo $row["nama_pasien"] ?></td>
             <td ><?php echo $row["no_antrian"] ?></td>
             <td ><?php echo $row["nama_poli"] ?></td>  
             <td >
                <a href="formtindakan.php?id=<?php echo $idpoli; ?>&antri=<?php echo $row["id"]; ?>" class="btn btn-success">Tindakan</a>
            </td> 
            </tr> <?php } ?>         
     </table> 
     <div >
     
	</div>
</div>

<?php 
$conn->close();
include "archive/footer.php";
?>

