<?php
session_start();
include 'koneksi.php';
if (isset($_SESSION['login']) ) {
	$data = $konek -> query("DELETE FROM walikelas WHERE kelas ='$_GET[kls]'");
	if ($data){
		echo "
		<script>
		alert('data behasil dihapus');
		document.location.href= 'datawali.php'
		</script>
		";
	}else {
		echo "
		<script>
		alert('data kelas digunakan ditabel Siswa');
		alert('data gagal dihapus');
		document.location.href = 'datawali.php';
		</script>
		";
	}
}else {
	echo "
	<script>
	alert('anda tidak punya akses dihalaman ini ');
	document.location.href = 'login.php';
	</script>
	";
}