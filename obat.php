<?php include "archive/header.php";
include "behind/nyambung.php"; 
$query=$conn->query("select * from obat ");
$urut = 0;
?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">List Obat</li>
     </ol>
     <div style="text-align: right; margin-bottom: 2%;">
         <a href="formobat.php" class="btn btn-success">Tambah</a>
     </div>
     <table class="table table-striped" >
     		<tr align="center">
     			<td >No</td>
     			<td >Nama Obat</td>
                <td width="500px" >Deskripsi</td>
                <td >Harga</td>
                <td >Stok</td>
                <td >Action</td>
     		</tr>
            <?php while ($row = $query->fetch_array()){ $urut++; ?>
            <tr>  
             <td align="center"><?php echo $urut ?> </td>
             <td ><?php echo $row["nama_obat"] ?></td>
             <td ><?php echo $row["deskripsi"] ?></td>
             <td align="right">Rp. <?php echo $row["harga"] ?></td>  
             <td  align="center" ><?php echo $row["stok"] ?></td>  

             <td>
                <a href="editobat.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary">Edit</a>
                <a onclick="if(confirm('Apakah anda ingin menghapus ?')) { window.location = 'behind/delobat.php?id=<?php echo $row["id"]; ?>' }" class="btn btn-danger">Hapus</a>

            </td> 
            </tr> <?php } ?>         
     </table> 
	</div>
</div>

<?php 
$conn->close();
include "archive/footer.php";
?>