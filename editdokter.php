<?php include "archive/header.php";
include "behind/nyambung.php";
include "auth/admin.php";
$idedit = (int) $_GET["id"];
$query = "SELECT * from users where id ='$idedit'";
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
        	<a href="dokter.php"> List Dokter</a>
        </li>
        <li class="breadcrumb-item active"> Edit Dokter</li>
     </ol>
     <div class="card card-login mx-auto mt-5">
      <div class="card-header">Edit Dokter</div>
      <div class="card-body">
        <form  method="POST" action="behind/editdokter.php?id=<?php echo $row["id"]; ?>">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input class="form-control"  type="text" aria-describedby="namalengkap" value="<?php echo $row["nama_lengkap"]; ?>" name="namalengkap2" >

            <label for="exampleInputEmail1">Alamat</label>
            <input class="form-control" type="text" aria-describedby="alamat"  name="alamat2" value="<?php echo $row["alamat"]; ?>"> 

            <label for="exampleInputEmail1">Username</label>
            <input class="form-control"  type="text" aria-describedby="emailHelp" name="username2" value="<?php echo $row["username"]; ?>"> 
          
          
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" type="password" name="password2" value=" <?php echo $row["password"];?> "></input>

            <div style="text-align: center; margin-top: 4%;">
            <button name="savedokter" class="btn btn-success">Simpan</button>
            <a onclick="if(confirm('Apakah anda ingin membatalkan edit ?')) { window.location ='dokter.php'}" class="btn btn-danger">Batal</a>
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