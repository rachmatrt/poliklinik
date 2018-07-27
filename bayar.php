<?php 
include "behind/nyambung.php"; 
include "archive/header.php";
$date2 = date("d-m-y   h:m:s") ;
?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">List Pembayaran</li>
     </ol>
     <div class="alert alert-primary" style="font-size: 46px; text-align: center;"> Master Pembayaran</div>
     <div class="alert alert-warning" style="text-align: center;"> <?php  echo $date2;?> </div>
     
     <div class="mt-5">
     <table class="table table-striped" >
     		<tr align="center">
     			<td width="50px">No</td>
                <td > Kode Antrian </td>
                <td> Nama Pasien </td>
     			<td align="left"> Total </td>
                <td align="left"> Dibayar </td>
                <td align="left"> Kembalian </td>   
                <td> Bukti Pembayaran </td>


     		</tr>
            <?php 
        
            	$date = date("Y-m-d");
                $query= $conn->query("SELECT * FROM pembayaran JOIN antrian ON antrian.id = pembayaran.antrian_id  WHERE pembayaran.tanggal = '$date' ");
                
                $urut = 0;
                while ($row = $query->fetch_array()){ 
                    $urut++; 
            ?>
            <tr align="center">  
             <td ><?php echo $urut; ?> </td>
             <td ><?php echo $row["antrian_id"]; ?></td>          
             <td ><?php echo $row["nama_pasien"]; ?></td>
             <td ><?php echo "Rp. ".$row["total_bayar"]; ?></td> 
             <td ><?php echo "Rp. ".$row["diterima"]; ?></td>
             <td ><?php echo "Rp. ".$row["kembalian"]; ?></td>

             <td >
             <a href="cetak.php?antri=<?php echo $row["antrian_id"];?>" class = "btn btn-warning" target="_blank" >Cetak</a>
             <a href="upload.php?antri=<?php echo $row["id"];?>" class="btn btn-danger"> upload </a>
             <a href="<?php echo $row["bukti"]; ?>" class="btn btn-primary" target="_blank"> Lihat </a>
            </td> 
           <?php  }?>
            </tr>          
     </table> 
     <div >
     
	</div>
</div>


<?php 
$conn->close();
include "behind/footer.php";
?>