<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Japfa Foundation">
    <meta name="author" content="japfa">
    <link rel="shortcut icon" href="images/favicon_1.ico">
    <title>SIA - Japfa Cetak Dana Keluar</title>
    <!-- Base Css Files -->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- Font Icons -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
</head>

<body onload="window.print()">
	<div class="container-fluid">
			<h2 class="text-center">Laporan Dana Keluar</h2>
			<!-- <medium style="margin: 0px auto;display: block;float:none;text-align: center;">Periode 20-11-2017 Sampai 20-14-2019</medium> -->
			<hr>
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>No. Transaksi</th>
						<th>Tanggal</th>
						<th>Dibayar Kepada</th>
						<th>Uraian</th>
						<th>Nama Rekening</th>
						<th>Jumlah</th>
						<th>Cara Pembayaran</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>

					<?php
					if (!empty($list)) {
					$no = 1;
					foreach ($list as $key) {
					?>
					<tr>
						<td><?php echo $no++;?></td>
						<td><textarea readonly style="overflow:hidden;width: 100%; background:none;border:none; resize:none;"><?php echo $key['nomor_danakeluar'];?></textarea></td>
						<td><textarea readonly style="overflow:hidden;width: 100%; background:none;border:none; resize:none;"><?php echo $key['tanggal_danakeluar'];?></textarea></td>
						<td><textarea readonly style="overflow:hidden;width: 100%; background:none;border:none; resize:none;"><?php echo $key['dibayarkepada_danakeluar'];?></textarea></td>
						<td><textarea readonly style="overflow:hidden;width: 100%; background:none;border:none; resize:none;"><?php echo $key['keterangan_danakeluar'];?></textarea></td>
						<td><textarea readonly style="overflow:hidden;width: 100%; background:none;border:none; resize:none;"><?php echo $key['namabank_danakeluar'];?></textarea></td>
						<td><textarea readonly style="overflow:hidden;width: 100%; background:none;border:none; resize:none;">Rp <?php echo number_format($key['jumlah_danakeluar'],2,",",".");?></textarea></td>
						<td><textarea readonly style="overflow:hidden;width: 100%; background:none;border:none; resize:none;"><?php echo $key['carapembayaran_danakeluar'];?> (<?php echo $key['rekening_danakeluar'];?>)</textarea></td>
						<td><textarea readonly style="overflow:hidden;width: 100%; background:none;border:none; resize:none;"><?php if ($key['status_danakeluar'] == "T"){echo "Belum Approve";}else{echo "Approve";}?></textarea></td>
					</tr>
					<?php } }else{ ?>
						<tr>
							<td colspan="9"><h6 class="text-center">Data Kosong</h6></td>
						</tr>
						<?php } ?>
				</tbody>
			</table>
	</div>
</body>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
 </html>