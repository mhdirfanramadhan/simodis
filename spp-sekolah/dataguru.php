<?php include 'header.php'; ?>
<style >
	.btn{
		margin-bottom: 10px;
	}
</style>
<div class="container">
	<div class="page-header">
<h2> DATA GURU SMK NEGERI 3 SELUMA</h2>
	</div>
<a class="btn btn-primary " href="tambahGuru.php">TAMBAH DATA</a>
<?php
	?>
<table class="table table-bordered table-striped">
 	<tr>
 		<th>NO</th>
 		<th>ID</th>
 		<th>NAMA GURU</th>
		<th>AKSI</th>
 	</tr>
 	<?php 
 	include 'koneksi.php';
	$data = $konek -> query("SELECT * FROM guru ORDER BY idguru DESC");	
 	$i=1; 
 	while($dta = mysqli_fetch_assoc($data) ):
 	 ?>
 	 <tr>
 	 	<td width="40px" align="center"><?= $i; ?></td>
 	 	<td align="center"><?= $dta['idguru'] ?></td>
 	 	<td><?= $dta['namaguru'] ?></td>
 	 	<td width="160px">
 	 		<a class="btn btn-warning btn-sm" href="ubahGR.php?id=<?= $dta['idguru'] ?>">EDIT</a> 
 	 		<a class="btn btn-danger btn-sm" href="hapusGR.php?id=<?= $dta['idguru'] ?>" onclick ="return confirm('apakah anda yakin ingin menghapus data?')">HAPUS</a>
 	 	</td>
 	 </tr>
 	 <?php $i++;  ?>
 	<?php endwhile; ?>
 </table>
</body>
</div>
</html>
<?php include 'footer.php'; ?>