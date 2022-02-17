<?php 
session_start();
if (isset($_SESSION['login']) ) {
	include 'koneksi.php';
	$hapus = $konek -> query("DELETE FROM admin WHERE idadmin= '$_GET[id]' ");
	if ($hapus) {
		echo "
		<script>
		alert('data admin berhasil dihapus');
		document.location.href= 'dataadmin.php';
		</script>
		";
	}else {
		echo "
		<script>
		alert('data admin digunakan ditabel siswa');
		alert('data admin gagal dihapus');
		document.location.href= 'dataadmin.php';
		</script>
		";
	}

}else {
	echo "
	<script>
	alert('anda tidak punya akses kehalaman ini ');
	document.location.href = ' login.php';
	</script>
	";

}


 ?>