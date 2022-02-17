<?php
include 'koneksi.php';
include 'header.php';
?>

<div class="container">
	<div class="page-header">
<h2 >TAMBAH DATA ADMIN</h2>
</div>
<form action="" method="post">
<table class="table ">
	<tr>
		<td> Username</td>
		<td>
			<input class="form-control" type="text" name="user" placeholder="Masukan Username">
		</td>
	</tr>
	<tr>
		<td> Password</td>
		<td>
			<input class="form-control" type="Password" name="pass" placeholder="Masukan Password">
		</td>
	</tr>
	<tr>
		<td> Nama Lengkap</td>
		<td>
			<input class="form-control" type="text" name="nama" placeholder="Masukan Nama Lengkap">
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<button class="btn btn-success" type="submit" name="tambah">SIMPAN</button>
		</td>
	</tr>
</table>
</form>

<?php
 if ( isset($_POST['tambah']) ) {
 	$user = $_POST['user'];
 	$pass = $_POST['pass'];
 	$p    = hash('sha1', $pass);
 	$nama = $_POST['nama'];

 	$exec = mysqli_query($konek,"INSERT INTO admin(username,password,namalengkap) Values ('$user','$p','$nama')");

 	if( $exec ){
 		echo "
 		<script>
 		alert('data admin berhasil ditambahkan');
 		document.location.href = 'dataadmin.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data admin gagal ditambahkan');
 		document.location.href = 'dataadmin.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php  include 'footer.php';  ?>
