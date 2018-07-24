<?php include "archive/header.php";
include "behind/nyambung.php"
$antrian = (int) $_GET['antri'];
$idpoli = (int) $_GET['poli'];
$query = $conn->query("SELECT * FROM users WHERE role='dokter'");
?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
        	<a href="antrianhal.php"> List Antrian</a>
        </li>
        <li class="breadcrumb-item active"> Form Periksa</li>
     </ol>
     <div class="card card-login mx-auto mt-5">
      <div class="card-header">Form Periksa</div>
      <div class="card-body">
        <form  method="POST" action="behind/addperiksa.php?antri=<?php echo $antrian; ?>">
          <div class="form-group">

            <label for="exampleInputEmail1">Nama Tindakan</label>
            <textarea class="form-control" type="text" aria-describedby="alamat"  name="action" required> </textarea>
            
            <label for="exampleInputEmail1">Biaya</label>
            <input class="form-control"  type="number" aria-describedby="Harga" placeholder="Biaya" name="biaya" required >
            <label for="exampleInputEmail1">Nama Dokter</label>
            <select name="dokter" class="form-control" aria-describedby="Poliklinik"> 
            <option value ="0" selected>Pilih Dokter</option>
            <?php 
            
            while ($row = $query->fetch_array()) { ?>
            <option value="<?php echo $row["id"]?>"> <?php echo $row["nama_lengkap"] ?></option> <?php }?>
        </select>
            <div style="text-align: center; margin-top: 4%;">
            <button name="addaction" class="btn btn-success">Simpan/button>
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