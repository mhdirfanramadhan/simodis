<?php 
include 'koneksi.php';
$sqlsiswa = mysqli_query($konek , "SELECT * FROM siswa WHERE idsiswa = '$_GET[id]' ") ;
$sw = mysqli_fetch_assoc($sqlsiswa);

include 'header.php';
 ?>
<div class="container">
	<div class="page-header">
<h2 >EDIT DATA SISWA</h2>
</div>
 	<?php if (isset($error)) : ?>
 		<p style="font-family: arial; color: red; size: 14px;">Silahkan Lengkapi Form Terlebih Dahulu</p>
 	<?php endif; ?>
 	<form action="" method="post">
 	<table class="table">
 		<tr>
 			<td>NIS</td>
 			<td>
 				<input class="form-control" type="hidden" name="id" value="<?= $sw['idsiswa'] ?>">
 				<input class="form-control" type="text" name="nis" value="<?= $sw['nis'] ?>" size="30">
 			</td>
 		</tr>
 		<tr>
 			<td>Nama Siswa</td>
 			<td>
 				<input class="form-control" type="text" name="namasiswa" value="<?= $sw['namasiswa'] ?>" maxlength="40" size="30">
 			</td>
 		</tr>
 		<tr>
 			<td>Kelas</td>
 			<td>
 				<select class="form-control" name="kelas">
 					<?php 
 					$data = mysqli_query($konek ,"SELECT * FROM walikelas ORDER BY kelas ASC");
 					while($kls = mysqli_fetch_assoc($data)){
 					 ?>
 					 <?php if($sw['kelas'] == $kls['kelas']) {
 					 	$selected = 'selected';
 					 }else {
 					 	$selected="";
 					 }
 					 ?>
 					 <option value="<?= $kls['kelas']; ?>"><?= $kls['kelas']; ?></option>
 					 <?php
 					}
 					 ?>
 							
 				</select>
 			</td>
 		</tr>
 		<tr>
 			<td>Tahun Ajaran</td>
 			<td>
 				<input class="form-control" type="text" name="tahunajaran" value="<?= $sw['tahunajaran'] ?>" >
 			</td>
 		</tr>
 		<tr>
 			<td>Biaya</td>
 			<td>
 				<input class="form-control" type="text" name="biaya" value="<?= $sw['biaya'] ?>" >
 			</td>
 		</tr>
 		<tr>
 			<td>Jatuh Tempo</td>
 			<td>
 				<input class="form-control" type="text" name="jatuhtempo" value="2018-10-10" >
 			</td>
 		</tr>
 		<tr>
 			<td></td>
 			<td>
 				<button class="btn btn-success" type="submit" name="ubah">UPDATE DATA</button>
 			</td>
 		</tr>
 	</table>
 </form>
 
 </body>
 </html>
<?php 
 if (isset($_POST['ubah']) ) {
 	$id = $_POST['id'];
 	$nis   		 = $_POST['nis'];
 	$namasiswa 	 = $_POST['namasiswa'];
 	$kelas 		 = $_POST['kelas'];
 	$tahunajaran = $_POST['tahunajaran'];
 	$biaya  	 = $_POST['biaya'];
 	// $awaltempo	 = $_POST['jatuhtempo'];

 	$ubah = mysqli_query($konek , "UPDATE siswa SET nis = '$nis',
 		namasiswa = '$namasiswa',
 		kelas = '$kelas',
 		tahunajaran = '$tahunajaran',
 		biaya  = '$biaya' WHERE idsiswa = '$id'");

 	if ($ubah){
 		echo "
 		<script>
 		alert('data berhasil diedit');
 		document.location.href = 'datasiswa.php';
 		</script>
 		";
 	}else{
 		echo "
 		<script>
 		alert('data gagal diedit');
 		</script>
 		";
 	}
 }


  ?>
</div>
 <?php include 'footer.php'; ?>