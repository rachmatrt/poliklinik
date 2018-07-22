<?php include "archive/header.php";
include "behind/nyambung.php";
$idedit = (int) $_GET["id"];
$query = "SELECT * from obat where id ='$idedit'";
$result = mysqli_query($conn,$query);
$row = mysqli_fetch_array($result); 

?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
        	<a href="obat.php"> List Obat</a>
        </li>
        <li class="breadcrumb-item active"> Edit Obat</li>
     </ol>
     <div class="card card-login mx-auto mt-5">
      <div class="card-header">Edit Obat</div>
      <div class="card-body">
        <form  method="POST" action="behind/editobat.php?id=<?php echo $row["id"]; ?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Obat</label>
            <input class="form-control"  type="text" aria-describedby="namalengkap" value="<?php echo $row["nama_obat"]; ?>" name="namaobat2" >

            <label for="exampleInputEmail1">Deskripsi</label>
            <textarea class="form-control" type="text" aria-describedby="alamat"  name="deskrip2" value=""><?php echo $row["deskripsi"]; ?> </textarea> 

            <label for="exampleInputEmail1">Harga</label>
            <input class="form-control"  type="text" aria-describedby="emailHelp" name="harga2" value="<?php echo $row["harga"]; ?>"> 
          
          
            <label for="exampleInputPassword1">Stok</label>
            <input class="form-control" type="text" name="stok2" value=" <?php echo $row["stok"];?> ">

            <div style="text-align: center; margin-top: 4%;">
            <button name="saveobat" class="btn btn-success">Simpan</button>
            <a onclick="if(confirm('Apakah anda ingin membatalkan edit ?')) { window.location ='obat.php'}" class="btn btn-danger">Batal</a>
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
mysql_close($conn);
include "archive/footer.php";
?>