<?php
require_once("koneksi.php");
class list_jurnal_memorial_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function all(){
		$sql0 = "SELECT jurnal.nomor_jurnal, jurnal.tanggal_jurnal, jurnal.keterangan_jurnal, jurnal_detail.uraian, jurnal_detail.nomor_rekening, koderekening.uraian_koderekening, jurnal_detail.nilai, jurnal_detail.posisi, jurnal.status_jurnal FROM jurnal LEFT JOIN jurnal_detail ON jurnal.nomor_jurnal = jurnal_detail.nomor_jurnal LEFT JOIN koderekening ON koderekening.koderekening = jurnal_detail.nomor_rekening ORDER BY jurnal.nomor_jurnal;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}

	public function detail($nomor_jurnal){
		$sql0 = "SELECT * FROM jurnal WHERE nomor_jurnal = :nomor_jurnal;";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':nomor_jurnal',$nomor_jurnal);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}

	public function detail1($nomor_jurnal){
		$sql0 = "SELECT * FROM jurnal_detail WHERE nomor_jurnal = :nomor_jurnal;";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':nomor_jurnal',$nomor_jurnal);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	public function all_json(){
		$sql0 = "SELECT jurnal.nomor_jurnal, jurnal.tanggal_jurnal, jurnal.keterangan_jurnal, jurnal_detail.uraian, jurnal_detail.nomor_rekening, koderekening.uraian_koderekening, jurnal_detail.nilai, jurnal_detail.posisi, jurnal.status_jurnal FROM jurnal LEFT JOIN jurnal_detail ON jurnal.nomor_jurnal = jurnal_detail.nomor_jurnal LEFT JOIN koderekening ON koderekening.koderekening = jurnal_detail.nomor_rekening ORDER BY jurnal.nomor_jurnal;;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function select($key){
		$sql0 = "SELECT * FROM departemen WHERE nomor_departemen LIKE :key OR nama_departemen LIKE :key1 OR penanggungjawab_departemen LIKE :key2 OR keterangan_departemen LIKE :key3 ;";
		$key = "%".$key."%";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':key',$key,PDO::PARAM_STR);
		$statement->bindValue(':key1',$key,PDO::PARAM_STR);
		$statement->bindValue(':key2',$key,PDO::PARAM_STR);
		$statement->bindValue(':key3',$key,PDO::PARAM_STR);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function insert($nama_departemen,$penanggungjawab_departemen,$keterangan_departemen){
	   try{	
			//$sql0 = "SELECT COUNT(id_departemen) FROM departemen;";
			$sql0 = "INSERT INTO departemen(nama_departemen, penanggungjawab_departemen, keterangan_departemen) VALUES(:nama_departemen, :penanggungjawab_departemen, :keterangan_departemen)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nama_departemen',$nama_departemen);
			$statement->bindValue(':penanggungjawab_departemen',$penanggungjawab_departemen);
			$statement->bindValue(':keterangan_departemen',$keterangan_departemen);
			$statement->execute();
			$statement->closeCursor();
			$sql1 = "SELECT nomor_departemen FROM departemen WHERE nama_departemen = :nama_departemen;";
			$statement = $this->connection->prepare($sql1);
			$statement->bindValue(':nama_departemen',$nama_departemen);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			return $fetch[0]['nomor_departemen'];
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function update($iddanamasuk,$status){
		try{
			$newstatus = '';
			if ($status == 'Y') {
				$newstatus = 'T';
			}
			else if ($status == 'T' ) {
				$newstatus = 'Y';
			}
			$sql0 = "UPDATE jurnal SET status_jurnal =:status WHERE nomor_jurnal = :iddanamasuk;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':status',$newstatus);
			$statement->bindValue(':iddanamasuk',$iddanamasuk);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Memperbarui Data";
			// return $newstatus;
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function delete($nomor_departemen){
		try{	
			//$sql0 = "SELECT COUNT(id_departemen) FROM departemen;";
			$sql0 = "DELETE FROM departemen WHERE nomor_departemen = :nomor_departemen;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomor_departemen',$nomor_departemen);
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