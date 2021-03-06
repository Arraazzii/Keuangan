<?php
class laporan_keuangan_model{
	private $db;
	private $connection;
	private $jenis_dasar;

	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
		$this->jenis_dasar = array();
	}

	public function jenis_satu($tanggal_awal_keuangan, $tanggal_akhir_keuangan){
		$data = array();
		$saldo_akhir = array();
		$mutasi = array();
		$list_rekening = array();
		$sql1 = "SELECT pengaturanposisikeuangan.koderekening, pengaturanposisikeuangan.jenis, koderekening.uraian_koderekening, kelompokrekening.status_kelompokrekening FROM pengaturanposisikeuangan, koderekening, kelompokrekening WHERE pengaturanposisikeuangan.jenis = :jenis AND koderekening.koderekening = pengaturanposisikeuangan.koderekening AND kelompokrekening.nopokok_kelompokrekening = koderekening.kelompok_koderekening;";
		$statement = $this->connection->prepare($sql1);
		$statement->bindValue(':jenis', 'Aktiva Lancar');
		$statement->execute();
		$fetch1 = $statement->fetchAll();
		$statement->closeCursor();
		for($i = 0; $i < count($fetch1);$i++){
			$list_rekening = $this->cari_rekening($fetch1[$i][0], $tanggal_awal_keuangan, $tanggal_akhir_keuangan);
			$saldo_awal = $this->cari_saldo($fetch1[$i][0]);
			$total_debet = 0;
			$total_kredit = 0;
			for($j = 0; $j < count($list_rekening); $j++) {
				if ($list_rekening[$j][5] == "Debet") {
					$total_debet = $total_debet + $list_rekening[$j][6];
				} else if ($list_rekening[$j][5] == "Kredit") {
					$total_kredit = $total_kredit + $list_rekening[$j][6];
				}
			}
			if($fetch1[$i][3] == "Aktiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_debet - $total_kredit;
			}
			else if($fetch1[$i][3] == "Pasiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_kredit - $total_debet;
			}
			array_push($fetch1[$i],$saldo_akhir[$i]);
		}
		return $fetch1;
	}

	public function jenis_dua($tanggal_awal_keuangan, $tanggal_akhir_keuangan){
		$data = array();
		$saldo_akhir = array();
		$mutasi = array();
		$list_rekening = array();
		$sql1 = "SELECT pengaturanposisikeuangan.koderekening, pengaturanposisikeuangan.jenis, koderekening.uraian_koderekening, kelompokrekening.status_kelompokrekening FROM pengaturanposisikeuangan, koderekening, kelompokrekening WHERE pengaturanposisikeuangan.jenis = :jenis AND koderekening.koderekening = pengaturanposisikeuangan.koderekening AND kelompokrekening.nopokok_kelompokrekening = koderekening.kelompok_koderekening;";
		$statement = $this->connection->prepare($sql1);
		$statement->bindValue(':jenis', 'Aktiva Tidak Lancar');
		$statement->execute();
		$fetch1 = $statement->fetchAll();
		$statement->closeCursor();
		for($i = 0; $i < count($fetch1);$i++){
			$list_rekening = $this->cari_rekening($fetch1[$i][0], $tanggal_awal_keuangan, $tanggal_akhir_keuangan);
			$saldo_awal = $this->cari_saldo($fetch1[$i][0]);
			$total_debet = 0;
			$total_kredit = 0;
			for($j = 0; $j < count($list_rekening); $j++) {
				if ($list_rekening[$j][5] == "Debet") {
					$total_debet = $total_debet + $list_rekening[$j][6];
				} else if ($list_rekening[$j][5] == "Kredit") {
					$total_kredit = $total_kredit + $list_rekening[$j][6];
				}
			}
			if($fetch1[$i][3] == "Aktiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_debet - $total_kredit;
			}
			else if($fetch1[$i][3] == "Pasiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_kredit - $total_debet;
			}
			array_push($fetch1[$i],$saldo_akhir[$i]);
		}
		return $fetch1;
	}

	public function jenis_tiga($tanggal_awal_keuangan, $tanggal_akhir_keuangan){
		$data = array();
		$saldo_akhir = array();
		$mutasi = array();
		$list_rekening = array();
		$sql1 = "SELECT pengaturanposisikeuangan.koderekening, pengaturanposisikeuangan.jenis, koderekening.uraian_koderekening, kelompokrekening.status_kelompokrekening FROM pengaturanposisikeuangan, koderekening, kelompokrekening WHERE pengaturanposisikeuangan.jenis = :jenis AND koderekening.koderekening = pengaturanposisikeuangan.koderekening AND kelompokrekening.nopokok_kelompokrekening = koderekening.kelompok_koderekening;";
		$statement = $this->connection->prepare($sql1);
		$statement->bindValue(':jenis', 'Kewajiban Lancar');
		$statement->execute();
		$fetch1 = $statement->fetchAll();
		$statement->closeCursor();
		for($i = 0; $i < count($fetch1);$i++){
			$list_rekening = $this->cari_rekening($fetch1[$i][0], $tanggal_awal_keuangan, $tanggal_akhir_keuangan);
			$saldo_awal = $this->cari_saldo($fetch1[$i][0]);
			$total_debet = 0;
			$total_kredit = 0;
			for($j = 0; $j < count($list_rekening); $j++) {
				if ($list_rekening[$j][5] == "Debet") {
					$total_debet = $total_debet + $list_rekening[$j][6];
				} else if ($list_rekening[$j][5] == "Kredit") {
					$total_kredit = $total_kredit + $list_rekening[$j][6];
				}
			}
			if($fetch1[$i][3] == "Aktiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_debet - $total_kredit;
			}
			else if($fetch1[$i][3] == "Pasiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_kredit - $total_debet;
			}
			array_push($fetch1[$i],$saldo_akhir[$i]);
		}
		return $fetch1;
	}



	public function jenis_empat($tanggal_awal_keuangan, $tanggal_akhir_keuangan){
		$data = array();
		$saldo_akhir = array();
		$mutasi = array();
		$list_rekening = array();
		$sql1 = "SELECT pengaturanposisikeuangan.koderekening, pengaturanposisikeuangan.jenis, koderekening.uraian_koderekening, kelompokrekening.status_kelompokrekening FROM pengaturanposisikeuangan, koderekening, kelompokrekening WHERE pengaturanposisikeuangan.jenis = :jenis AND koderekening.koderekening = pengaturanposisikeuangan.koderekening AND kelompokrekening.nopokok_kelompokrekening = koderekening.kelompok_koderekening;";
		$statement = $this->connection->prepare($sql1);
		$statement->bindValue(':jenis', 'Kewajiban Jangka Panjang');
		$statement->execute();
		$fetch1 = $statement->fetchAll();
		$statement->closeCursor();
		for($i = 0; $i < count($fetch1);$i++){
			$list_rekening = $this->cari_rekening($fetch1[$i][0], $tanggal_awal_keuangan, $tanggal_akhir_keuangan);
			$saldo_awal = $this->cari_saldo($fetch1[$i][0]);
			$total_debet = 0;
			$total_kredit = 0;
			for($j = 0; $j < count($list_rekening); $j++) {
				if ($list_rekening[$j][5] == "Debet") {
					$total_debet = $total_debet + $list_rekening[$j][6];
				} else if ($list_rekening[$j][5] == "Kredit") {
					$total_kredit = $total_kredit + $list_rekening[$j][6];
				}
			}
			if($fetch1[$i][3] == "Aktiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_debet - $total_kredit;
			}
			else if($fetch1[$i][3] == "Pasiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_kredit - $total_debet;
			}
			array_push($fetch1[$i],$saldo_akhir[$i]);
		}
		return $fetch1;
	}

	public function jenis_lima($tanggal_awal_keuangan, $tanggal_akhir_keuangan){
		$data = array();
		$saldo_akhir = array();
		$mutasi = array();
		$list_rekening = array();
		$sql1 = "SELECT pengaturanposisikeuangan.koderekening, pengaturanposisikeuangan.jenis, koderekening.uraian_koderekening, kelompokrekening.status_kelompokrekening FROM pengaturanposisikeuangan, koderekening, kelompokrekening WHERE pengaturanposisikeuangan.jenis = :jenis AND koderekening.koderekening = pengaturanposisikeuangan.koderekening AND kelompokrekening.nopokok_kelompokrekening = koderekening.kelompok_koderekening;";
		$statement = $this->connection->prepare($sql1);
		$statement->bindValue(':jenis', 'Aktiva Bersih');
		$statement->execute();
		$fetch1 = $statement->fetchAll();
		$statement->closeCursor();
		for($i = 0; $i < count($fetch1);$i++){
			$list_rekening = $this->cari_rekening($fetch1[$i][0], $tanggal_awal_keuangan, $tanggal_akhir_keuangan);
			$saldo_awal = $this->cari_saldo($fetch1[$i][0]);
			$total_debet = 0;
			$total_kredit = 0;
			for($j = 0; $j < count($list_rekening); $j++) {
				if ($list_rekening[$j][5] == "Debet") {
					$total_debet = $total_debet + $list_rekening[$j][6];
				} else if ($list_rekening[$j][5] == "Kredit") {
					$total_kredit = $total_kredit + $list_rekening[$j][6];
				}
			}
			if($fetch1[$i][3] == "Aktiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_debet - $total_kredit;
			}
			else if($fetch1[$i][3] == "Pasiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_kredit - $total_debet;
			}
			array_push($fetch1[$i],$saldo_akhir[$i]);
		}
		return $fetch1;
	}

	public function jenis_enam($tanggal_awal_keuangan, $tanggal_akhir_keuangan){
		$data = array();
		$saldo_akhir = array();
		$mutasi = array();
		$list_rekening = array();
		$sql1 = "SELECT pengaturanposisikeuangan.koderekening, pengaturanposisikeuangan.jenis, koderekening.uraian_koderekening, kelompokrekening.status_kelompokrekening FROM pengaturanposisikeuangan, koderekening, kelompokrekening WHERE pengaturanposisikeuangan.jenis = :jenis AND koderekening.koderekening = pengaturanposisikeuangan.koderekening AND kelompokrekening.nopokok_kelompokrekening = koderekening.kelompok_koderekening;";
		$statement = $this->connection->prepare($sql1);
		$statement->bindValue(':jenis', 'Pembayaran Kewajiban Jangka Panjang');
		$statement->execute();
		$fetch1 = $statement->fetchAll();
		$statement->closeCursor();
		for($i = 0; $i < count($fetch1);$i++){
			$list_rekening = $this->cari_rekening($fetch1[$i][0], $tanggal_awal_keuangan, $tanggal_akhir_keuangan);
			$saldo_awal = $this->cari_saldo($fetch1[$i][0]);
			$total_debet = 0;
			$total_kredit = 0;
			for($j = 0; $j < count($list_rekening); $j++) {
				if ($list_rekening[$j][5] == "Debet") {
					$total_debet = $total_debet + $list_rekening[$j][6];
				} else if ($list_rekening[$j][5] == "Kredit") {
					$total_kredit = $total_kredit + $list_rekening[$j][6];
				}
			}
			if($fetch1[$i][3] == "Aktiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_debet - $total_kredit;
			}
			else if($fetch1[$i][3] == "Pasiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_kredit - $total_debet;
			}
			array_push($fetch1[$i],$saldo_akhir[$i]);
		}
		return $fetch1;
	}

	public function jenisAll($tanggal_awal_keuangan, $tanggal_akhir_keuangan){
		$data = array();
		$saldo_akhir = array();
		$mutasi = array();
		$list_rekening = array();
		$sql1 = "SELECT pengaturanposisikeuangan.koderekening, pengaturanposisikeuangan.jenis, koderekening.uraian_koderekening, kelompokrekening.status_kelompokrekening FROM pengaturanposisikeuangan, koderekening, kelompokrekening WHERE koderekening.koderekening = pengaturanposisikeuangan.koderekening AND kelompokrekening.nopokok_kelompokrekening = koderekening.kelompok_koderekening;";
		$statement = $this->connection->prepare($sql1);
		// $statement->bindValue(':jenis', 'Pembayaran Kewajiban Jangka Panjang');
		$statement->execute();
		$fetch1 = $statement->fetchAll();
		$statement->closeCursor();
		for($i = 0; $i < count($fetch1);$i++){
			$list_rekening = $this->cari_rekening($fetch1[$i][0], $tanggal_awal_keuangan, $tanggal_akhir_keuangan);
			$saldo_awal = $this->cari_saldo($fetch1[$i][0]);
			$total_debet = 0;
			$total_kredit = 0;
			for($j = 0; $j < count($list_rekening); $j++) {
				if ($list_rekening[$j][5] == "Debet") {
					$total_debet = $total_debet + $list_rekening[$j][6];
				} else if ($list_rekening[$j][5] == "Kredit") {
					$total_kredit = $total_kredit + $list_rekening[$j][6];
				}
			}
			if($fetch1[$i][3] == "Aktiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_debet - $total_kredit;
			}
			else if($fetch1[$i][3] == "Pasiva"){
				$saldo_akhir[$i] = $saldo_awal + $total_kredit - $total_debet;
			}
			array_push($fetch1[$i],$saldo_akhir[$i]);
		}
		return $fetch1;
	}

	public function cari_rekening($nomor_rekening, $tanggal_awal_keuangan, $tanggal_akhir_keuangan){
		$sql0 = "SELECT
		jurnal.tanggal_jurnal,
		jurnal_detail.id_detail_jurnal,
		jurnal_detail.nomor_jurnal,
		jurnal_detail.nomor_rekening,
		jurnal_detail.uraian,
		jurnal_detail.posisi,
		jurnal_detail.nilai,
		kelompokrekening.status_kelompokrekening,
		jurnal_detail.departemen as nama_departemen,
		jurnal_detail.program as namajenis_jenisprogram,
		jurnal.nomor_jurnal as ref
		FROM
		jurnal,
		jurnal_detail,
		kelompokrekening
		WHERE
		jurnal_detail.nomor_jurnal = jurnal.nomor_jurnal
		AND
		jurnal.status_jurnal='Y'
		AND
		SUBSTRING_INDEX(jurnal_detail.nomor_rekening, '.', 4) = SUBSTRING_INDEX(:nomor_rekening1, '.', 4)	  
		AND
		SUBSTRING_INDEX(nomor_rekening, '.', 1) = kelompokrekening.nopokok_kelompokrekening
		AND (MONTH(jurnal.tanggal_jurnal) IN (SELECT bulan_tutupBuku FROM `tutupbuku`) AND YEAR(jurnal.tanggal_jurnal) IN (SELECT tahun_tutupBuku FROM `tutupbuku`))
		AND jurnal.tanggal_jurnal BETWEEN :tanggal_awal_keuangan AND :tanggal_akhir_keuangan";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':nomor_rekening1',$nomor_rekening);
		$statement->bindValue(':tanggal_awal_keuangan',$tanggal_awal_keuangan);
		$statement->bindValue(':tanggal_akhir_keuangan',$tanggal_akhir_keuangan);
		$statement->execute();
		$fetch1 = $statement->fetchAll();
		$statement->closeCursor();

		$sql1 = "SELECT
		danamasuk.tanggal_danamasuk AS tanggal_jurnal,
		danamasuk_detail.id_detail_dana_masuk AS id_detail_jurnal,
		danamasuk_detail.id_dana_masuk AS nomor_jurnal,
		danamasuk_detail.no_rekening AS nomor_rekening,
		danamasuk_detail.uraian,
		danamasuk_detail.posisi,
		danamasuk_detail.nilai,
		kelompokrekening.status_kelompokrekening,
		danamasuk_detail.departemen as nama_departemen,
		danamasuk_detail.program as namajenis_jenisprogram,
		danamasuk.nomor_danamasuk as ref
		FROM
		danamasuk,
		danamasuk_detail,
		kelompokrekening
		WHERE
		danamasuk_detail.id_dana_masuk = danamasuk.id_danamasuk
		AND
		danamasuk.status_danamasuk='Y' 
		AND
		SUBSTRING_INDEX(danamasuk_detail.no_rekening, '.', 4) = SUBSTRING_INDEX(:nomor_rekening1, '.', 4)	       
		AND 
		SUBSTRING_INDEX(no_rekening, '.', 1) = kelompokrekening.nopokok_kelompokrekening 
		AND (MONTH(danamasuk.tanggal_danamasuk) IN (SELECT bulan_tutupBuku FROM `tutupbuku`) AND YEAR(danamasuk.tanggal_danamasuk) IN (SELECT tahun_tutupBuku FROM `tutupbuku`))
		AND danamasuk.tanggal_danamasuk BETWEEN :tanggal_awal_keuangan AND :tanggal_akhir_keuangan;";
		$statement = $this->connection->prepare($sql1);
		$statement->bindValue(':nomor_rekening1',$nomor_rekening);
		$statement->bindValue(':tanggal_awal_keuangan',$tanggal_awal_keuangan);
		$statement->bindValue(':tanggal_akhir_keuangan',$tanggal_akhir_keuangan);
		$statement->execute();
		$fetch2 = $statement->fetchAll();
		$statement->closeCursor();

		$sql2 = "SELECT
		danakeluar.tanggal_danakeluar AS tanggal_jurnal,
		danakeluar_detail.id_detail_dana_keluar AS id_detail_jurnal,
		danakeluar_detail.id_dana_keluar AS nomor_jurnal,
		danakeluar_detail.no_rekening AS nomor_rekening,
		danakeluar_detail.uraian,
		danakeluar_detail.posisi,
		danakeluar_detail.nilai,
		kelompokrekening.status_kelompokrekening,
		danakeluar_detail.departemen as nama_departemen,
		danakeluar_detail.program as namajenis_jenisprogram,
		danakeluar.nomor_danakeluar as ref
		FROM
		danakeluar,
		danakeluar_detail,
		kelompokrekening
		WHERE
		danakeluar_detail.id_dana_keluar = danakeluar.id_danakeluar
		AND
		danakeluar.status_danakeluar='Y' 
		AND
		SUBSTRING_INDEX(danakeluar_detail.no_rekening, '.', 4) = SUBSTRING_INDEX(:nomor_rekening1, '.', 4)	         
		AND 
		SUBSTRING_INDEX(no_rekening, '.', 1) = kelompokrekening.nopokok_kelompokrekening 
		AND (MONTH(danakeluar.tanggal_danakeluar) IN (SELECT bulan_tutupBuku FROM `tutupbuku`) AND YEAR(danakeluar.tanggal_danakeluar) IN (SELECT tahun_tutupBuku FROM `tutupbuku`))
		AND danakeluar.tanggal_danakeluar BETWEEN :tanggal_awal_keuangan AND :tanggal_akhir_keuangan;";

		$statement = $this->connection->prepare($sql2);
		$statement->bindValue(':nomor_rekening1',$nomor_rekening);
		$statement->bindValue(':tanggal_awal_keuangan',$tanggal_awal_keuangan);
		$statement->bindValue(':tanggal_akhir_keuangan',$tanggal_akhir_keuangan);
		$statement->execute();
		$fetch3 = $statement->fetchAll();
		$statement->closeCursor();
		return array_merge($fetch1,$fetch2,$fetch3);
	}

	public function cari_saldo($nomor_rekening){
		try{

			$sql2 = "SELECT
			saldoawal.koderekening, saldoawal.saldoawal
			FROM
			saldoawal
			WHERE
			saldoawal.koderekening = :nomor_rekening1
			GROUP BY
			saldoawal.koderekening";

			$statement = $this->connection->prepare($sql2);
			$statement->bindValue(':nomor_rekening1',$nomor_rekening);
			$statement->execute();
			$fetch3 = $statement->fetchAll();
			$statement->closeCursor();
			if($fetch3 == null){
				return 0;
			}
			return $fetch3[0][1];
		}
		catch(PDOException $e){
			return $e;
		}
	}

	public function cari_saldo_awal(){
		try{

			$sql2 = "SELECT SUM(saldoawal.saldoawal) as jumlah FROM
			saldoawal ";

			$statement = $this->connection->prepare($sql2);
			$statement->execute();
			$fetch3 = $statement->fetchAll();
			$statement->closeCursor();
			if($fetch3 == null){
				return 0;
			}
			return $fetch3[0][0];
		}
		catch(PDOException $e){
			return $e;
		}
	}

}
?>