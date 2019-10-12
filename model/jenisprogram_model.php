<?php
require_once("koneksi.php");
class jenisprogram_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function all(){
		$sql0 = "SELECT * FROM jenisprogram;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	public function all_json(){
		$sql0 = "SELECT * FROM jenisprogram;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function select($key){
		$sql0 = "SELECT * FROM jenisprogram WHERE nomer_jenisprogram LIKE :key OR namajenis_jenisprogram LIKE :key1;";
		$key = "%".$key."%";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':key',$key,PDO::PARAM_STR);
		$statement->bindValue(':key1',$key,PDO::PARAM_STR);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function insert($nomer_jenisprogram,$namajenis_jenisprogram, $kelompok_program){
	   try{	
			//$sql0 = "SELECT COUNT(id_departemen) FROM departemen;";
			$sql0 = "INSERT INTO jenisprogram(nomer_jenisprogram, namajenis_jenisprogram, nomor_kelompokprogram) VALUES(:nomer_jenisprogram, :namajenis_jenisprogram, :nomor_kelompokprogram)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomer_jenisprogram',$nomer_jenisprogram);
			$statement->bindValue(':namajenis_jenisprogram',$namajenis_jenisprogram);
			$statement->bindValue(':nomor_kelompokprogram',$kelompok_program);
			$statement->execute();
			$statement->closeCursor();
			$sql1 = "SELECT id_jenisprogram FROM jenisprogram WHERE nomer_jenisprogram = :nomer_jenisprogram;";
			$statement = $this->connection->prepare($sql1);
			$statement->bindValue(':nomer_jenisprogram',$nomer_jenisprogram);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			return $fetch[0]['id_jenisprogram'];
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function update($id_jenisprogram,$nomer_jenisprogram,$namajenis_jenisprogram, $kelompok_program){
		try{
			$sql0 = "UPDATE jenisprogram SET nomer_jenisprogram =:nomer_jenisprogram,namajenis_jenisprogram =:namajenis_jenisprogram, nomor_kelompokprogram = :nomor_kelompokprogram WHERE id_jenisprogram = :id_jenisprogram;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomer_jenisprogram',$nomer_jenisprogram);
			$statement->bindValue(':namajenis_jenisprogram',$namajenis_jenisprogram);
			$statement->bindValue(':nomor_kelompokprogram',$kelompok_program);
			$statement->bindValue(':id_jenisprogram',$id_jenisprogram);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Memperbarui Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function delete($id_jenisprogram){
		try{	
			//$sql0 = "SELECT COUNT(id_departemen) FROM departemen;";
			$sql0 = "DELETE FROM jenisprogram WHERE id_jenisprogram = :id_jenisprogram;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_jenisprogram',$id_jenisprogram);
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