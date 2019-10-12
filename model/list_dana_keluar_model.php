<?php
require_once("koneksi.php");
class list_dana_keluar_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function detail($id_danakeluar){
		$sql0 = "SELECT * FROM danakeluar WHERE id_danakeluar = :id_danakeluar;";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':id_danakeluar',$id_danakeluar);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}

	public function detail1($id_danakeluar){
		$sql0 = "SELECT * FROM danakeluar_detail WHERE id_dana_keluar = :id_danakeluar;";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':id_danakeluar',$id_danakeluar);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}

	public function all(){
        $sql0 = "SELECT
    danakeluar_detail.id_dana_keluar,
	danakeluar.nomor_danakeluar,
	danakeluar.tanggal_danakeluar,
	danakeluar.dibayarkepada_danakeluar,
	danakeluar_detail.uraian,
	danakeluar_detail.no_rekening,
	koderekening.uraian_koderekening,
	danakeluar_detail.nilai,
	danakeluar_detail.posisi,
	danakeluar.status_danakeluar,
	danakeluar.carapembayaran_danakeluar
FROM
	danakeluar,
	danakeluar_detail,
	koderekening
WHERE
	danakeluar.id_danakeluar = danakeluar_detail.id_dana_keluar
AND
	koderekening.koderekening = danakeluar_detail.no_rekening ORDER BY danakeluar.nomor_danakeluar";

		$sql1 = "SELECT danakeluar_detail.id_dana_keluar, 
						danakeluar.nomor_danakeluar, 
						danakeluar.tanggal_danakeluar, 
						danakeluar.dibayarkepada_danakeluar, 
						danakeluar_detail.uraian, danakeluar_detail.no_rekening, 
						koderekening.uraian_koderekening, 
						danakeluar_detail.nilai, 
						danakeluar_detail.posisi, 
						danakeluar.status_danakeluar 
				FROM danakeluar 
				LEFT JOIN danakeluar_detail ON danakeluar.id_danakeluar = danakeluar_detail.id_dana_keluar 
				LEFT JOIN koderekening ON koderekening.koderekening = danakeluar_detail.no_rekening 
				ORDER BY danakeluar.nomor_danakeluar";
        $statement = $this->connection->prepare($sql0);
        $statement->execute();
        $fetch = $statement->fetchAll();
        $statement->closeCursor();
        return $fetch;//json_encode($fetch);
    }
	
	public function all_json(){
		$sql0 = "SELECT
    danakeluar_detail.id_dana_keluar,
	danakeluar.nomor_danakeluar,
	danakeluar.tanggal_danakeluar,
	danakeluar.dibayarkepada_danakeluar,
	danakeluar_detail.uraian,
	danakeluar_detail.no_rekening,
	koderekening.uraian_koderekening,
	danakeluar_detail.nilai,
	danakeluar_detail.posisi,
	danakeluar.status_danakeluar,
	danakeluar.carapembayaran_danakeluar,
	danakeluar.nomorcekgiro_danakeluar
FROM
	danakeluar,
	danakeluar_detail,
	koderekening
WHERE
	danakeluar.id_danakeluar = danakeluar_detail.id_dana_keluar
AND
	koderekening.koderekening = danakeluar_detail.no_rekening ORDER BY danakeluar.nomor_danakeluar;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
public function select($key,$key1){
		$sql0 = "SELECT * FROM danakeluar WHERE tanggal_danakeluar BETWEEN :key AND :key1 ;";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(":key",$key,PDO::PARAM_STR);
		$statement->bindValue(":key1",$key1,PDO::PARAM_STR);
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
			$sql0 = "UPDATE danakeluar SET status_danakeluar =:status WHERE id_danakeluar = :iddanamasuk;";
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
	
	public function delete($id_danakeluar){
		try{	
			$sql0 = "
						DELETE danakeluar, danakeluar_detail 
						FROM
						danakeluar 
						INNER JOIN 
						danakeluar_detail 
						ON 
						danakeluar.id_danakeluar = danakeluar_detail.id_dana_keluar
						WHERE danakeluar.id_danakeluar = :id_danakeluar";
			
			$statement = $this->connection->prepare($sql0);

			$statement->bindValue(':id_danakeluar',$id_danakeluar);
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