<?php include "archive/headantrian.php";
include "behind/nyambung.php";
$date = date("d-m-Y");
$time = date("h:m:s");
?>

 <div id="utama" class="container-fluid">
  <div class="row">
   <div class="col-sm-6 col-md-6 col-xs-6" >
   	<div class="card card-login mx-auto mt-5">
      <div class="card-header">Ambil Nomor Antrian</div>
      <div class="card-body">
        <form method="POST" action="behind/antrian.php">
          <div class="form-group">
            <label for="exampleInputPasien">Nama Pasien</label>
            <input class="form-control"  type="text" aria-describedby="nama" placeholder="Nama Anda" name="pasien" >
            <label for="exampleInputPoli">Poliklinik</label>
            <select name="poli" class="form-control" aria-describedby="Poliklinik"> 
            <option value="Pilih">Pilih Poliklinik</option>
            <?php 
            $query = $conn->query("SELECT * FROM poli");
            while ($row = $query->fetch_array()) { ?>
            <option value="<?php echo $row["id"]?>"><?php echo $row["nama_poli"] ?></option> <?php }?>
            </select> 
            <div style="text-align: center; margin-top: 4%;">
            <button class="btn btn-success">Ambil Antrian</button>
            </div >
          </div>
    	</form>	
      </div>
      <div class="alert alert-success" style="font-size: 20px; text-align: center;"><?php echo $date." ".$time; ?></div>
      </div>
	  </div>
   <div class="col-xs-6 col-sm-6 col-md-6" >
    <div class="row">
   <?php 
            $query = $conn->query("SELECT * FROM poli");
            while ($row = $query->fetch_array()) { ?>
    <div class="col-md-4 col-xs-4 col-sm-4" style="padding: 0px 5px 0px 0px;" >
    <div class="card card-login mt-5">
      <div class="card-header" style="background-color: #88c3f7; text-align: center;color:#ffffff; font-size: 24px;">
      Poliklinik <?php echo $row["nama_poli"]; ?>
      </div>
    
      <div class="card-body">
      <?php 
    $date2 = date("Y-m-d");
    $id2 = (int) $row["id"];
    $query2 = "SELECT * FROM antrian WHERE poli_id = '$id2' AND tanggal = '$date2' ORDER BY no_antrian DESC LIMIT 1";
    $hasil2 = mysqli_query($conn, $query2);
    $row2 = mysqli_fetch_array($hasil2);
      ?>    
          <div class="form-group" style="text-align: center;">
           <label style="font-size: 20px;"> Jumlah Antrian : </label>
           <div class="alert alert-danger" style="font-size: 46px; padding :0px 0px 0px 0px;"><?php echo $row2["no_antrian"]; ?></div>
          </div>
      
      </div>
      </div>
      </div>
      
      <?php }?>  
    </div>

    <!-- <div class="row">
        <?php 
            $query = $conn->query("SELECT * FROM poli");
            while ($row = $query->fetch_array()) { ?>
    
    <div class="col-md-4 col-xs-4 col-sm-4" style="padding: 0px 3px 0px 0px;" >
    <div class="card card-login mt-5">
      <div class="card-header" style="background-color: #88c3f7; text-align: center;color:#ffffff; font-size: 24px;">
      Poliklinik <?php echo $row["nama_poli"]; ?>
      </div>
     
      <?php 
    $date2 = date("Y-m-d");
    $id2 = (int) $row["id"];
    $query2 = "SELECT * FROM antrian WHERE poli_id = '$id2' AND tanggal = '$date2' ";
    $hasil2 = mysqli_query($conn, $query2);
    $row2 = mysqli_fetch_array($hasil2);
      ?>
      <div class="card-body">
        
          <div class="form-group" style="text-align: center;">
           <label style="font-size: 20px;"> Panggilan Antrian : </label>
           <div class="alert alert-success" style="font-size: 36px; padding :0px 0px 0px 0px;">
            <label> <?php echo $row2["no_antrian"]; ?> </label>
           </div>
           <div class="alert alert-danger" style="font-size: 36px; padding :0px 0px 0px 0px;">
           <label> <?php echo $row2["nama_pasien"]; ?> </label> 
           </div>
           <button class="btn btn-success" > panggil </button>
          </div>
          </div>
      </div> 
      
      </div>
      <?php }?> 
     </div> -->
    </div>
   </div >
   </div> 

<?php 
$conn->close();
include "archive/footantrian.php";?>