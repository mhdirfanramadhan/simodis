<?php
include 'koneksi.php';
$data = $konek -> query("SELECT * FROM guru WHERE idguru ='$_GET[id]'");
include 'header.php';
?>

<div class="container">
	<div class="page-header">
<h2 >EDIT DATA GURU</h2>
</div>
<form action="" method="post">
<table class="table">
	<?php
	while ($dta =mysqli_fetch_assoc($data) ) :
	?>
	<tr>
		<td>Nama Guru</td>
		<td>
			<input class="form-control" type="hidden" name="idguru" value="<?= $dta['idguru'] ?>">
			<input class="form-control" type="text" name="guru" value="<?= $dta['namaguru'] ?>" size = "30">
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
<?php endwhile; ?>
</body>
</html>
<?php
 if ( isset($_POST['ubah']) ) {
 	$id   = $_POST['idguru']; 
 	$guru = $_POST['guru'];

 	$ubah = $konek -> query("UPDATE guru SET namaguru = '$guru' WHERE idguru = ".$id);
 	if( $ubah ){
 		echo "
 		<script>
 		alert('data guru berhasil diedit');
 		document.location.href = 'dataguru.php';
 		</script>
 		";
 	}else {
 		echo "
 		<script>
 		alert('data guru gagal diedit');
 		document.location.href = 'dataguru.php';
 		</script>
 		";
 	}
 }


?>
</div>
<?php  include 'footer.php';  ?>