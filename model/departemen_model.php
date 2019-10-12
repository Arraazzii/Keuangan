<?php
require_once("koneksi.php");
class departemen_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function all(){
		$sql0 = "SELECT * FROM departemen;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	public function all_json(){
		$sql0 = "SELECT * FROM departemen;";
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
	
	public function update($nomor_departemen,$nama_departemen,$penaggung_jawab,$keterangan){
		try{
			$sql0 = "UPDATE departemen SET nama_departemen =:nama_departemen,penanggungjawab_departemen =:penanggungjawab_departemen,keterangan_departemen = :keterangan_departemen WHERE nomor_departemen = :nomor_departemen;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nama_departemen',$nama_departemen);
			$statement->bindValue(':penanggungjawab_departemen',$penaggung_jawab);
			$statement->bindValue(':keterangan_departemen',$keterangan);
			$statement->bindValue(':nomor_departemen',$nomor_departemen);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Memperbarui Data";
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