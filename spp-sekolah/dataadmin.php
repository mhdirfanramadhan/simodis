<?php include 'header.php'; ?>
<style >
	.btn{
		margin-bottom: 10px;
	}
</style>
<div class="container">
	<div class="page-header">
<h2> DATA ADMIN SMK NEGERI 3 SELUMA</h2>
	</div>
<a class="btn btn-primary " href="tambahAD.php">TAMBAH DATA</a>
<?php
	?>
<table class="table table-bordered table-striped">
 	<tr>
 		<th>NO</th>
 		<th>ID</th>
 		<th>NAMA ADMIN</th>
		<th>AKSI</th>
 	</tr>
 	<?php 
 	include 'koneksi.php';
	$data = mysqli_query($konek,"SELECT * FROM admin ORDER BY idadmin ASC");	
 	$i=1; 
 	while($dta = mysqli_fetch_assoc($data) ):
 	 ?>
 	 <tr>
 	 	<td width="40px" align="center"><?= $i; ?></td>
 	 	<td align="center"><?= $dta['idadmin'] ?></td>
 	 	<td><?= $dta['namalengkap'] ?></td>
 	 	<td width="160px">
 	 		<a class="btn btn-warning btn-sm" href="updateAD.php?id=<?= $dta['idadmin'] ?>">EDIT</a> 
 	 		<a class="btn btn-danger btn-sm" href="hapusAD.php?id=<?= $dta['idadmin'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data admin? ')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
</body>
</div>
</html>
<?php include 'footer.php'; ?>