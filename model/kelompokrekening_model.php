<?php
require_once("koneksi.php");
class kelompokrekening_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function all(){
		$sql0 = "SELECT * FROM kelompokrekening;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	public function all_json(){
		$sql0 = "SELECT * FROM kelompokrekening;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function select($key){
		$sql0 = "SELECT * FROM kelompokrekening WHERE id_kelompokrekening LIKE :key OR nopokok_kelompokrekening LIKE :key1 OR uraian_kelompokrekening LIKE :key2 ;";
		$key = "%".$key."%";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':key',$key,PDO::PARAM_STR);
		$statement->bindValue(':key1',$key,PDO::PARAM_STR);
		$statement->bindValue(':key2',$key,PDO::PARAM_STR);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	// public function insert($nopokok_kelompokrekening,$uraian_kelompokrekening,$status_kelompokrekening){
	//    try{	
	// 		//$sql0 = "SELECT COUNT(id_departemen) FROM departemen;";
	// 		$sql0 = "INSERT INTO kelompokrekening(nopokok_kelompokrekening, uraian_kelompokrekening, status_kelompokrekening) VALUES(:nopokok_kelompokrekening, :uraian_kelompokrekening, :status_kelompokrekening)";
	// 		$statement = $this->connection->prepare($sql0);
	// 		$statement->bindValue(':nopokok_kelompokrekening',$nopokok_kelompokrekening);
	// 		$statement->bindValue(':uraian_kelompokrekening',$uraian_kelompokrekening);
	// 		$statement->bindValue(':status_kelompokrekening',$status_kelompokrekening);
	// 		$statement->execute();
	// 		$statement->closeCursor();
	// 		$sql1 = "SELECT id_kelompokrekening FROM kelompokrekening WHERE nopokok_kelompokrekening = :nopokok_kelompokrekening AND status_kelompokrekening= :status_kelompokrekening ;";
	// 		$statement = $this->connection->prepare($sql1);
	// 		$statement->bindValue(':nopokok_kelompokrekening',$nopokok_kelompokrekening);			
	// 		$statement->bindValue(':status_kelompokrekening',$status_kelompokrekening);
	// 		$statement->execute();
	// 		$fetch = $statement->fetchAll();
	// 		$statement->closeCursor();
	// 		return $fetch[0]['id_kelompokrekening'];
	// 	}
	// 	catch(PDOException $e){
	// 		return "gagal";
	// 	}
	// }
	public function insert($nopokok_kelompokrekening,$uraian_kelompokrekening,$status_kelompokrekening){
	   try{	
			$sqlx = "SELECT COUNT(nopokok_kelompokrekening) as nomor FROM kelompokrekening WHERE nopokok_kelompokrekening = :nopokok_kelompokrekening ;";
			$statement = $this->connection->prepare($sqlx);			
			$statement->bindValue(':nopokok_kelompokrekening',$nopokok_kelompokrekening);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			if($fetch[0]['nomor'] > 0){
				return "gagal";
				exit();
			}
			
			$sql0 = "INSERT INTO kelompokrekening(nopokok_kelompokrekening, uraian_kelompokrekening, status_kelompokrekening) VALUES(:nopokok_kelompokrekening, :uraian_kelompokrekening, :status_kelompokrekening)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nopokok_kelompokrekening',$nopokok_kelompokrekening);
			$statement->bindValue(':uraian_kelompokrekening',$uraian_kelompokrekening);
			$statement->bindValue(':status_kelompokrekening',$status_kelompokrekening);
			$statement->execute();
			$statement->closeCursor();
			$sql1 = "SELECT id_kelompokrekening FROM kelompokrekening WHERE nopokok_kelompokrekening = :nopokok_kelompokrekening AND status_kelompokrekening= :status_kelompokrekening ;";
			$statement = $this->connection->prepare($sql1);
			$statement->bindValue(':nopokok_kelompokrekening',$nopokok_kelompokrekening);			
			$statement->bindValue(':status_kelompokrekening',$status_kelompokrekening);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			return $fetch[0]['id_kelompokrekening'];
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function update($id_kelompokrekening,$nopokok_kelompokrekening,$uraian_kelompokrekening,$status_kelompokrekening){
		try{
			$sql0 = "UPDATE kelompokrekening SET nopokok_kelompokrekening =:nopokok_kelompokrekening,uraian_kelompokrekening =:uraian_kelompokrekening, status_kelompokrekening= :status_kelompokrekening WHERE id_kelompokrekening = :id_kelompokrekening;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nopokok_kelompokrekening',$nopokok_kelompokrekening);
			$statement->bindValue(':uraian_kelompokrekening',$uraian_kelompokrekening);
			$statement->bindValue(':id_kelompokrekening',$id_kelompokrekening);		
			$statement->bindValue(':status_kelompokrekening',$status_kelompokrekening);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Memperbarui Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function delete($id_kelompokrekening){
		try{	
			//$sql0 = "SELECT COUNT(id_departemen) FROM departemen;";
			$sql0 = "DELETE FROM kelompokrekening WHERE id_kelompokrekening = :id_kelompokrekening;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_kelompokrekening',$id_kelompokrekening);
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