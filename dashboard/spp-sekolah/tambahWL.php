<?php
include 'koneksi.php';
include 'header.php';
?>
<div class="container">
	<div class="page-header">
<h2 >TAMBAH WALI KELAS GURU</h2>
</div>
	<form action="" method="post" >
		<table class="table " >
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<input class="form-control" type="text" name="kelas" placeholder="Masukan Kelas" size="30">
				</td>
			</tr>
			<tr>
				<td>Pilih Guru/Wali Kelas</td>
				<td>:</td>
				<td>
					<select class="form-control"  name="guru">
						<option value="" selected >- Pilih guru -</option>
						<?php
						$data = $konek -> query("SELECT * FROM guru ORDER BY idguru ASC");
						while ($dta = mysqli_fetch_assoc($data)) {
							echo "<option value = '$dta[idguru]'>$dta[namaguru]</option>" ;
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button class="btn btn-success" type="submit" name="tambah">SIMPAN</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
 if ( isset($_POST['tambah']) ) {
 	$kelas = $_POST['kelas'];
 	$guru  = $_POST['guru'];

 	$simpan = $konek -> query("INSERT INTO walikelas (kelas, idguru) VALUES('$kelas','$guru')");
 	if( $simpan ){
 		echo "
 		<script>
 		alert('data wali berhasil ditambahkan');
 		document.location.href = 'datawali.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data wali gagal ditambahkan');
 		document.location.href = 'datawali.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php include 'footer.php';  ?>