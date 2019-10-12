<?php
require_once("koneksi.php");
class koderekening_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function all(){
		$sql0 = "SELECT * FROM koderekening;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}

	public function all_parent(){
		$sql0 = "SELECT * FROM koderekening WHERE SUBSTRING(koderekening, 16, 2) = '00';";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	public function all_json(){
		$sql0 = "SELECT * FROM koderekening;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}

	public function worksheet($tanggal_awal_worksheet, $tanggal_akhir_worksheet){
		$sql0 = 'SELECT 
kr.koderekening, (IF(RIGHT(kr.koderekening, 2) = "00", "besar", "pembantu" )) AS typerekening, kr.uraian_koderekening, sa.saldoawal, dm.dm_debit_posisi, dm.dm_debit_nilai, dm.dm_kredit_posisi, dm.dm_kredit_nilai, dk.dk_debit_posisi, dk.dk_debit_nilai, dk.dk_kredit_posisi, dk.dk_kredit_nilai, j.j_debit_posisi, j.j_debit_nilai, j.j_kredit_posisi, j.j_kredit_nilai
FROM `koderekening` kr 
LEFT JOIN (
    SELECT
    sa.koderekening, sa.saldoawal
    FROM
    koderekening kr
    LEFT JOIN saldoawal sa ON sa.koderekening = kr.koderekening 
) sa ON kr.koderekening = sa.koderekening
LEFT JOIN (
    SELECT kr.koderekening, kr.uraian_koderekening , dmd.posisi dm_kredit_posisi, dmd.nilai dm_kredit_nilai, ddm.posisi dm_debit_posisi, ddm.nilai dm_debit_nilai
FROM koderekening kr 
LEFT JOIN ( 
    SELECT dmd.no_rekening no_rekening, dmd.posisi, SUM(dmd.nilai) nilai 
    FROM danamasuk_detail dmd 
    LEFT JOIN danamasuk dm ON dmd.id_dana_masuk = dm.id_danamasuk 
    WHERE dm.status_danamasuk = "Y" AND dmd.posisi = "Kredit" AND dm.tanggal_danamasuk BETWEEN :tanggal_awal_dmk_worksheet AND :tanggal_akhir_dmk_worksheet
    GROUP BY dmd.no_rekening
    ) dmd ON dmd.no_rekening = kr.koderekening 
    LEFT JOIN ( 
        SELECT dmd.no_rekening no_rekening, dmd.posisi, SUM(dmd.nilai) nilai 
        FROM danamasuk_detail dmd 
        LEFT JOIN danamasuk dm ON dmd.id_dana_masuk = dm.id_danamasuk 
        WHERE dm.status_danamasuk = "Y" AND dmd.posisi = "Debet" AND dm.tanggal_danamasuk BETWEEN :tanggal_awal_dmd_worksheet AND :tanggal_akhir_dmd_worksheet
        GROUP BY dmd.no_rekening
    ) ddm ON ddm.no_rekening = kr.koderekening 
    WHERE dmd.nilai IS NOT NULL OR ddm.nilai IS NOT NULL
) dm ON kr.koderekening = dm.koderekening
LEFT JOIN (
SELECT kr.koderekening, kr.uraian_koderekening , dmd.posisi dk_kredit_posisi, dmd.nilai dk_kredit_nilai, ddm.posisi dk_debit_posisi, ddm.nilai dk_debit_nilai 
    FROM koderekening kr 
    LEFT JOIN ( 
        SELECT dmd.no_rekening no_rekening, dmd.posisi, SUM(dmd.nilai) nilai 
        FROM danakeluar_detail dmd 
        LEFT JOIN danakeluar dm ON dmd.id_dana_keluar = dm.id_danakeluar 
        WHERE dm.status_danakeluar = "Y" AND dmd.posisi = "Kredit" AND dm.tanggal_danakeluar BETWEEN :tanggal_awal_dkk_worksheet AND :tanggal_akhir_dkk_worksheet
        GROUP BY dmd.no_rekening 
    ) dmd ON dmd.no_rekening = kr.koderekening 
    LEFT JOIN ( 
        SELECT dmd.no_rekening no_rekening, dmd.posisi, SUM(dmd.nilai) nilai 
        FROM danakeluar_detail dmd 
        LEFT JOIN danakeluar dm ON dmd.id_dana_keluar = dm.id_danakeluar 
        WHERE dm.status_danakeluar = "Y" AND dmd.posisi = "Debet" AND dm.tanggal_danakeluar BETWEEN :tanggal_awal_dkd_worksheet AND :tanggal_akhir_dkd_worksheet
        GROUP BY dmd.no_rekening 
    ) ddm ON ddm.no_rekening = kr.koderekening 
    WHERE dmd.nilai IS NOT NULL OR ddm.nilai IS NOT NULL
) dk ON kr.koderekening = dk.koderekening
LEFT JOIN (
	SELECT kr.koderekening, kr.uraian_koderekening , jk.posisi j_kredit_posisi, jk.nilai j_kredit_nilai, jd.posisi j_debit_posisi, jd.nilai j_debit_nilai 
    FROM koderekening kr 
    LEFT JOIN ( 
        SELECT jd.nomor_rekening no_rekening, jd.posisi, SUM(jd.nilai) nilai 
        FROM jurnal_detail jd 
        LEFT JOIN jurnal j ON jd.nomor_jurnal = j.nomor_jurnal
        WHERE j.status_jurnal = "Y" AND jd.posisi = "Kredit" AND j.tanggal_jurnal BETWEEN :tanggal_awal_jk_worksheet AND :tanggal_akhir_jk_worksheet
        GROUP BY jd.nomor_rekening 
    ) jk ON jk.no_rekening = kr.koderekening 
    LEFT JOIN ( 
        SELECT jd.nomor_rekening no_rekening, jd.posisi, SUM(jd.nilai) nilai 
        FROM jurnal_detail jd 
        LEFT JOIN jurnal j ON jd.nomor_jurnal = j.nomor_jurnal 
        WHERE j.status_jurnal = "Y" AND jd.posisi = "Debet" AND j.tanggal_jurnal BETWEEN :tanggal_awal_jd_worksheet AND :tanggal_akhir_jd_worksheet
        GROUP BY jd.nomor_rekening 
    ) jd ON jd.no_rekening = kr.koderekening 
    WHERE jd.nilai IS NOT NULL OR jk.nilai IS NOT NULL
) j ON kr.koderekening = j.koderekening
ORDER BY typerekening, kr.koderekening ASC';
//WHERE (dm.dm_kredit_nilai IS NOT NULL OR dm.dm_debit_nilai) OR (dk.dk_kredit_nilai IS NOT NULL OR dk.dk_debit_nilai)  OR (j.j_kredit_nilai IS NOT NULL OR j.j_debit_nilai)
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':tanggal_awal_dmk_worksheet', $tanggal_awal_worksheet);
        $statement->bindValue(':tanggal_akhir_dmk_worksheet', $tanggal_akhir_worksheet);
        $statement->bindValue(':tanggal_awal_dmd_worksheet', $tanggal_awal_worksheet);
        $statement->bindValue(':tanggal_akhir_dmd_worksheet', $tanggal_akhir_worksheet);

        $statement->bindValue(':tanggal_awal_dkk_worksheet', $tanggal_awal_worksheet);
        $statement->bindValue(':tanggal_akhir_dkk_worksheet', $tanggal_akhir_worksheet);
        $statement->bindValue(':tanggal_awal_dkd_worksheet', $tanggal_awal_worksheet);
        $statement->bindValue(':tanggal_akhir_dkd_worksheet', $tanggal_akhir_worksheet);

        $statement->bindValue(':tanggal_awal_jk_worksheet', $tanggal_awal_worksheet);
        $statement->bindValue(':tanggal_akhir_jk_worksheet', $tanggal_akhir_worksheet);
        $statement->bindValue(':tanggal_awal_jd_worksheet', $tanggal_awal_worksheet);
        $statement->bindValue(':tanggal_akhir_jd_worksheet', $tanggal_akhir_worksheet);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;
	}
	
	public function select($key){
		$sql0 = "SELECT * FROM koderekening WHERE koderekening LIKE :key OR uraian_koderekening LIKE :key1;";
		$key = "%".$key."%";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':key',$key,PDO::PARAM_STR);
		$statement->bindValue(':key1',$key,PDO::PARAM_STR);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function insert($kelompok_koderekening,$koderekening,$uraian_koderekening){
	   try{	
			//$sql0 = "SELECT COUNT(id_departemen) FROM departemen;";
			$sql0 = "INSERT INTO koderekening(kelompok_koderekening, koderekening, uraian_koderekening ) VALUES(:kelompok_koderekening, :koderekening, :uraian_koderekening)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':kelompok_koderekening',$kelompok_koderekening);
			$statement->bindValue(':koderekening',$koderekening);
			$statement->bindValue(':uraian_koderekening',$uraian_koderekening);
			$statement->execute();
			$statement->closeCursor();
			$sql1 = "SELECT id_koderekening FROM koderekening WHERE koderekening = :koderekening;";
			$statement = $this->connection->prepare($sql1);
			$statement->bindValue(':koderekening',$koderekening);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			return $fetch[0]['id_koderekening'];
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function update($id_koderekening,$kelompok_koderekening,$koderekening,$uraian_koderekening){
		try{
			$sql0 = "UPDATE koderekening SET kelompok_koderekening =:kelompok_koderekening,koderekening =:koderekening,uraian_koderekening =:uraian_koderekening WHERE id_koderekening = :id_koderekening;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':kelompok_koderekening',$kelompok_koderekening);
			$statement->bindValue(':koderekening',$koderekening);
			$statement->bindValue(':uraian_koderekening',$uraian_koderekening);
			$statement->bindValue(':id_koderekening',$id_koderekening);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Memperbarui Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function delete($id_koderekening){
		try{	
			//$sql0 = "SELECT COUNT(id_departemen) FROM departemen;";
			$sql0 = "DELETE FROM koderekening WHERE id_koderekening = :id_koderekening;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_koderekening',$id_koderekening);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Menghapus Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
}
?>