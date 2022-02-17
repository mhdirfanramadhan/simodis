<?php
include 'koneksi.php';
include 'header.php';
?>

<div class="container">
	<div class="page-header">
<h2 >TAMBAH DATA GURU</h2>
</div>
<form action="" method="post">
<table class="table ">
	<tr>
		<td>Nama Guru</td>
		<td>
			<input class="form-control" type="text" name="guru" placeholder="Masukan Nama Guru">
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
 	$guru = $_POST['guru'];

 	$simpan = $konek -> query("INSERT INTO guru (namaguru) VALUES('$guru')");
 	if( $simpan ){
 		echo "
 		<script>
 		alert('data guru berhasil ditambahkan');
 		document.location.href = 'dataguru.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data guru gagal ditambahkan');
 		document.location.href = 'dataguru.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php  include 'footer.php';  ?>