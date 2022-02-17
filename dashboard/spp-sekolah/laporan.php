 <?php include 'header.php'; ?>
<style >
	.btn{
		margin-top: 10px;
	}
	.panel-heading{
		margin-top: 80px;
	}
</style>
<div class="panel panel-info col-md-12">
	<div class="panel-heading">
<h3>Laporan Data</h3>
</div>
<div class="panel-body">
	<table class="table table-bordered table-striped">
		<tr>
			<th >Nama Laporan</th>
			<th width="200">Cetak</th>
		</tr>
		<tr>
			<td>Laporan Data Guru</td>
			<td>
			<a href="laporan_guru.php" target="_blank"><button class="btn btn-primary btn-sm"  > CETAK</button></a>
				</td>
		</tr> 
		<tr>
			<td>
				Laporan Data Siswa
			</td>
			<td>
			<a href="laporan_siswa.php" target="_blank"><button class="btn btn-primary btn-sm" > CETAK</button></a>
			</td>
		</tr>
		
		

		<form class="col-md-2" action="laporan_pembayaran.php" method="GET" target="_blank" >
			<td>
			<b>Laporan Pembayaran</b>
		</td>
		<td>
			Mulai Tanggal <input class="form-control" type="date" name="tgl1" value="<?= date('Y-m-d') ?>">
			Sampai Tanggal <input class="form-control" type="date" name="tgl2" value="<?= date('Y-m-d') ?>">
			<button class="btn btn-success btn-lg" type="submit" name="tampil">Tampilkan</button>
		</td>
		</form>
	</tr>
</table>
</div>
</div>
<?php include 'footer.php' ?>