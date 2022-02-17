<?php
include 'koneksi.php';
$data = mysqli_query($konek, "SELECT * FROM admin WHERE idadmin='$_GET[id]'");
$dta = mysqli_fetch_assoc($data);
include 'header.php';
?>
<script src="main.js"></script>

<div class="container">
	<div class="page-header">
<h2 >UPDATE DATA ADMIN</h2>
</div>
<form action="" method="post">
<table class="table ">
	<tr>
		<td> Nama Lengkap</td>
		<td>
			<input class="form-control" type="text" name="nama"value="<?= $dta['namalengkap'] ?>">
		</td>
	</tr>
	<tr>
		<div class="alert alert-warning">
				<span><b>Biarkan Jika tidak diganti</b></span>
			</div>
		<td> Username</td>
		<td>
			<input type="hidden" name="id" value="<?= $dta['idadmin'] ?>">
			<input class="form-control" type="text" name="user" value="<?= $dta['username'] ?>">
		</td>
	</tr>
	<tr>
		<td> Password</td>
		<td>
			<input class="form-control" type="Password" id="pass" name="pass" value="<?= $dta['password'] ?>">
			<input type="checkbox" name="cek" onclick="ShowPass()"> Show/Hide Password
		</td>
	</tr>
	
	<tr>
		<td></td>
		<td>
			<button class="btn btn-success" type="submit" name="ubah">UPDATE</button>
			
		</td>
	</tr>
</table>
</form>

<?php
 if ( isset($_POST['ubah']) ) {
 	$id   = $_POST['id'];
 	$user = $_POST['user'];
 	$pass = $_POST['pass'];
 	$p    = hash('sha1', $pass);
 	$nama = $_POST['nama'];

 	$ubah = $konek -> query("UPDATE admin SET
 	     username = '$user', 
 		 password     = '$p',
 		 namalengkap = '$nama' WHERE idadmin =".$id);

 	if( $ubah ){
 		echo "
 		<script>
 		alert('data admin berhasil diupdate');
 		document.location.href = 'dataadmin.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data admin gagal diupdate');
 		document.location.href = 'dataadmin.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php  include 'footer.php';  ?>