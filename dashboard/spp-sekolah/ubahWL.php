<?php
include 'koneksi.php';
$data = $konek -> query("SELECT * FROM walikelas WHERE kelas = '$_GET[kls]'");
$dtA = mysqli_fetch_assoc($data);
include 'header.php';
?>
<div class="container">
	<div class="page-header">
<h2 >EDIT DATA WALI KELAS</h2>
</div>
	<form action="" method="post" >
		<table class="table" >
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<input class="form-control" type="hidden" name="idguru" value="<?= $dtA['idguru'] ?>">
					<input class="form-control"  type="text" name="kelas" placeholder="Masukan Kelas" size="30" value="<?= $dtA['kelas'] ?>" readonly>
				</td>
			</tr>
			<tr>
				<td>Pilih Guru/Wali Kelas</td>
				<td>:</td>
				<td>
					<select class="form-control"  name="guru">
						<?php
						$data = $konek -> query("SELECT * FROM guru ORDER BY idguru ASC");
						while ($dta = mysqli_fetch_assoc($data)) {
							if ($dtA['idguru'] == $dta['idguru']){
								$selected = 'selected';
							}else {
								$selected="";	
							}
							echo "<option value = '$dta[idguru]'$selected > $dta[namaguru]</option>" ;
						}

						?>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<button class="btn btn-success"type="submit" name="ubah">UPDATE</button>
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
 if ( isset($_POST['ubah']) ) {
 	$idguru = $_POST['idguru'];
 	$kelas  = $_POST['kelas'];
 	$guru   = $_POST['guru'];

 	$simpan = $konek -> query("UPDATE walikelas SET kelas = '$kelas', idguru = '$guru' WHERE idguru =".$idguru);
 	if( $simpan ){
 		echo "
 		<script>
 		alert('data wali berhasil diedit');
 		document.location.href = 'datawali.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data wali gagal diedit');
 		document.location.href = 'datawali.php';
 		</script>
 		";
 	}
 }


?>
<?php include 'footer.php';  ?>