<?php include "archive/header.php";
include "behind/nyambung.php"; 
$query=$conn->query("SELECT * FROM poli ");
$urut = 0;
?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">List Poliklinik</li>
     </ol>
     <div class="alert alert-primary" style="font-size: 46px; text-align: center"> Master Poliklinik </div>
     <div style="text-align: center; margin-bottom: 2%;">
         <a href="formpoli.php" class="btn btn-success">Tambah Poliklinik</a>
     </div>
     <table class="table table-striped">
     		<tr align="center">
     			<td >No</td>
                <td> Kode </td>
     			<td >Nama Poliklinik</td>
                <td align="right">Biaya Poli</td>                
                <td >Action</td>
     		</tr>
            <?php while ($row = $query->fetch_array()){ $urut++; ?>
            <tr align="center">  
             <td  width="50px"><?php echo $urut ?> </td>
             <td width="100px"> <?php echo $row["id"]?> </td>
             <td ><?php echo $row["nama_poli"] ?></td>
             <td align="right"> Rp. <?php echo $row["biaya_poli"] ?></td>

             <td>
                <a href="editpoli.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Edit</a>
                <a onclick="if(confirm('Apakah anda ingin menghapus ?')) { window.location = 'behind/delpoli.php?id=<?php echo $row["id"]; ?>' }" class="btn btn-danger">Hapus</a>

            </td> 
            </tr> <?php } ?>         
     </table> 
	</div>
</div>

<?php 
$conn->close();
include "archive/footer.php";
?>