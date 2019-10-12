<?php
require_once("koneksi.php");
class list_dana_masuk_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function detail($id_danamasuk){
		$sql0 = "SELECT * FROM danamasuk WHERE id_danamasuk = :id_danamasuk;";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':id_danamasuk',$id_danamasuk);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}

	public function detail1($id_danamasuk){
		$sql0 = "SELECT * FROM danamasuk_detail WHERE id_dana_masuk = :id_danamasuk;";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':id_danamasuk',$id_danamasuk);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}

    public function all(){
        $sql0 = "SELECT
    danamasuk_detail.id_dana_masuk,
	danamasuk.nomor_danamasuk,
	danamasuk.tanggal_danamasuk,
	danamasuk.diterimadari_danamasuk,
	danamasuk_detail.uraian,
	danamasuk_detail.no_rekening,
	koderekening.uraian_koderekening,
	danamasuk_detail.nilai,
	danamasuk_detail.posisi,
	danamasuk.status_danamasuk,
	danamasuk.carapembayaran_danamasuk
FROM
	danamasuk,
	danamasuk_detail,
	koderekening
WHERE
	danamasuk.id_danamasuk = danamasuk_detail.id_dana_masuk
AND
	koderekening.koderekening = danamasuk_detail.no_rekening ORDER BY danamasuk.nomor_danamasuk";
        $statement = $this->connection->prepare($sql0);
        $statement->execute();
        $fetch = $statement->fetchAll();
        $statement->closeCursor();
        return $fetch;//json_encode($fetch);
    }
	
	public function all_json(){
		$sql0 = "SELECT
    danamasuk_detail.id_dana_masuk,
	danamasuk.nomor_danamasuk,
	danamasuk.tanggal_danamasuk,
	danamasuk.diterimadari_danamasuk,
	danamasuk_detail.uraian,
	danamasuk_detail.no_rekening,
	koderekening.uraian_koderekening,
	danamasuk_detail.nilai,
	danamasuk_detail.posisi,
	danamasuk.status_danamasuk,
	danamasuk.carapembayaran_danamasuk,
	danamasuk.nomorcekgiro_danamasuk

FROM
	danamasuk,
	danamasuk_detail,
	koderekening
WHERE
	danamasuk.id_danamasuk = danamasuk_detail.id_dana_masuk
AND
	koderekening.koderekening = danamasuk_detail.no_rekening ORDER BY danamasuk.nomor_danamasuk;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function select($key,$key1){
		$sql0 = "SELECT
			danamasuk_detail . id_dana_masuk,
			danamasuk . nomor_danamasuk,
			danamasuk . tanggal_danamasuk,
			danamasuk . diterimadari_danamasuk,
			danamasuk_detail . uraian,
			danamasuk_detail . no_rekening,
			koderekening . uraian_koderekening,
			danamasuk_detail . nilai,
			danamasuk_detail . posisi,
			danamasuk . status_danamasuk
			FROM
			danamasuk,
			danamasuk_detail,
			koderekening
			WHERE
			danamasuk . id_danamasuk = danamasuk_detail . id_dana_masuk
			and
			koderekening . koderekening = danamasuk_detail . no_rekening AND danamasuk.tanggal_danamasuk BETWEEN :key AND :key1 ORDER BY danamasuk.nomor_danamasuk;";
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
			$sql0 = "UPDATE danamasuk SET status_danamasuk =:status WHERE id_danamasuk = :iddanamasuk;";
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
	
	public function delete($id_danamasuk){
		try{	
			
			// $sql0 = "DELETE FROM danamasuk WHERE id_danamasuk = :id_danamasuk and DELETE FROM danamasuk_detail WHERE id_dana_masuk = :id_danamasuk";
			$sql0 = "
						DELETE danamasuk, danamasuk_detail 
						FROM
						danamasuk 
						INNER JOIN 
						danamasuk_detail 
						ON 
						danamasuk.id_danamasuk = danamasuk_detail.id_dana_masuk 
						WHERE danamasuk.id_danamasuk = :id_danamasuk";
			
			$statement = $this->connection->prepare($sql0);

			$statement->bindValue(':id_danamasuk',$id_danamasuk);
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