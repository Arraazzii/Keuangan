<?php
require_once("koneksi.php");
class kelompokprogram_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function all(){
		$sql0 = "SELECT * FROM kelompokprogram;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	public function all_json(){
		$sql0 = "SELECT * FROM kelompokprogram;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function select($key){
		$sql0 = "SELECT * FROM kelompokprogram WHERE nomer_kelompokprogram LIKE :key OR namakelompok_kelompokprogram LIKE :key1;";
		$key = "%".$key."%";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':key',$key,PDO::PARAM_STR);
		$statement->bindValue(':key1',$key,PDO::PARAM_STR);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function insert($nomer_kelompokprogram,$namakelompok_kelompokprogram){
	   
	   try{	
			//$sql0 = "SELECT COUNT(id_departemen) FROM departemen;";
			$sql0 = "INSERT INTO kelompokprogram(nomer_kelompokprogram, namakelompok_kelompokprogram) VALUES(:nomer_kelompokprogram, :namakelompok_kelompokprogram)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomer_kelompokprogram',$nomer_kelompokprogram);
			$statement->bindValue(':namakelompok_kelompokprogram',$namakelompok_kelompokprogram);
			$statement->execute();
			$statement->closeCursor();
			$sql1 = "SELECT id_kelompokprogram FROM kelompokprogram WHERE nomer_kelompokprogram = :nomer_kelompokprogram;";
			$statement = $this->connection->prepare($sql1);
			$statement->bindValue(':nomer_kelompokprogram',$nomer_kelompokprogram);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			return $fetch[0]['id_kelompokprogram'];
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function update($id_kelompokprogram,$nomer_kelompokprogram,$namakelompok_kelompokprogram){
		try{
			$sql0 = "UPDATE kelompokprogram SET nomer_kelompokprogram =:nomer_kelompokprogram,namakelompok_kelompokprogram =:namakelompok_kelompokprogram WHERE id_kelompokprogram = :id_kelompokprogram;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomer_kelompokprogram',$nomer_kelompokprogram);
			$statement->bindValue(':namakelompok_kelompokprogram',$namakelompok_kelompokprogram);
			$statement->bindValue(':id_kelompokprogram',$id_kelompokprogram);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Memperbarui Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function delete($id_kelompokprogram){
		try{	
			//$sql0 = "SELECT COUNT(id_departemen) FROM departemen;";
			$sql0 = "DELETE FROM kelompokprogram WHERE id_kelompokprogram = :id_kelompokprogram;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_kelompokprogram',$id_kelompokprogram);
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