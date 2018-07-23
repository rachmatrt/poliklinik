<?php include "archive/header.php";
include "behind/nyambung.php";
$idedit = (int) $_GET["id"];
$query = "SELECT * from poli where id ='$idedit'";
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
        	<a href="obat.php"> List Poliklinik</a>
        </li>
        <li class="breadcrumb-item active"> Edit Poliklinik</li>
     </ol>
     <div class="card card-login mx-auto mt-5">
      <div class="card-header">Edit Poliklinik</div>
      <div class="card-body">
        <form  method="POST" action="behind/editpoli.php?id=<?php echo $row["id"]; ?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Poliklinik</label>
            <input class="form-control"  type="text" aria-describedby="namapoli" value="<?php echo $row["nama_poli"]; ?>" name="namapoli2" >       

            <label for="exampleInputEmail1">Harga</label>
            <input class="form-control"  type="text" aria-describedby="emailHelp" name="harga2" value="<?php echo $row["biaya_poli"]; ?>"> 

            <div style="text-align: center; margin-top: 4%;">
            <button name="saveobat" class="btn btn-success">Simpan</button>
            <a onclick="if(confirm('Apakah anda ingin membatalkan edit ?')) { window.location ='poli.php'}" class="btn btn-danger">Batal</a>
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