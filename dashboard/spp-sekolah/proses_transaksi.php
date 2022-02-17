<?php 
session_start();
if(isset($_SESSION['login']) ) {
	include 'koneksi.php';
	if($_GET['act']=='bayar') {
		$idspp = $_GET['id'];
		$nis   = $_GET['nis'];

		// bulan
		$today =date("ymd");
		$query =mysqli_query($konek , "SELECT max(nobayar) AS last FROM spp WHERE nobayar LIKE '$today%'");
		$data = mysqli_fetch_assoc($query);
		$lastNobayar = $data['last'];
		$lastNoUrut  = substr($lastNobayar, 6 ,4);
		$nextNoUrut  = $lastNoUrut + 1;
		$nextNobayar = $today.sprintf('%04s' , $nextNoUrut);

		// tanggal bayar
		$tglbayar = date('Y-m-d');

		// id admin
		$admin = $_SESSION['id'];

		$byr = mysqli_query($konek ,"UPDATE spp SET 
			nobayar = '$nextNobayar',
			tglbayar = '$tglbayar',
			ket = 'LUNAS',
			idadmin = '$admin' 
			WHERE idspp = '$idspp'");

		if ($byr) {
			
			header('location: transaksi.php?nis='.$nis);
		}else {
			echo "
			<script>
			alert('gagal')
			</script>
			";

		}
		
	}
	else if($_GET['act']=='batal'){
	    $idspp = $_GET['id'];
		$nis   = $_GET['nis'];

		$batal = mysqli_query($konek ,"UPDATE spp SET 
			nobayar = null,
			tglbayar = null,
			ket = null,
			idadmin = null 
			WHERE idspp = '$idspp'");

			if ($batal) {
				header('location: transaksi.php?nis='.$nis);
		}
	}
}
 ?>