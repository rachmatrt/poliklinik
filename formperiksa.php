<?php include "archive/header.php";
include "behind/nyambung.php";
$antri_id = (int) $_GET['idantri'];
$idpoli = (int) $_GET['poli'];
$query = $conn->query("SELECT * FROM users WHERE role='dokter'");
$query2 = $conn->query("SELECT * FROM poli_tindakan ");
$query3 = "SELECT * FROM antrian WHERE id = '$antri_id'";
$result3 = mysqli_query($conn,$query3);
$row3 = mysqli_fetch_array($result3);
?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
        	<a href="antrianhal.php"> List Antrian</a>
        </li>
        <li class="breadcrumb-item active"> Form Periksa</li>
     </ol>
     <div class="card card-login mx-auto mt-5">
      <div class="card-header">Form Periksa</div>
      <div class="card-body">
        <form  method="POST" action="behind/addperiksa.php?addantri=<?php echo $antri_id; ?>&poli=<?php echo $idpoli; ?>">
          <div class="form-group">
          <label>Nama Pasien</label>
          <input type="text" class="form-control" placeholder="<?php echo $row3["nama_pasien"];?>" disabled>
            <label>Tindakan</label>
            <select name="action" class="form-control" aria-describedby="Poliklinik"> 
            <option value ="0" >Pilih tindakan</option>
            <?php 
            
            while ($row2 = $query2->fetch_array()) { ?>
            <option value="<?php echo $row2["id"]?>"> <?php echo $row2["nama_tindakan"]; ?></option> <?php }?>
        </select>
            
            <label for="exampleInputEmail1">Nama Dokter</label>
            <select name="dokter" class="form-control" aria-describedby="Poliklinik"> 
            <option value ="0" >Pilih Dokter</option>
            <?php 
            
            while ($row = $query->fetch_array()) { ?>
            <option value="<?php echo $row["id"]?>"> <?php echo $row["id"].$row["nama_lengkap"]; ?></option> <?php }?>
        </select>
            <div style="text-align: center; margin-top: 4%;">
            <button name="addaction" class="btn btn-success">Simpan</button>
            <a onclick="if(confirm('Apakah anda ingin membatalkan tindakan ?')) { window.location = 'antrianhal.php' }" class="btn btn-danger">Batal</a>
            </div >

          </div>
    	</form>	
      </div>
      </div>
	  </div>
	</div>
	</div> 
</div>

<?php 
$conn -> close();
include "archive/footer.php";
?>