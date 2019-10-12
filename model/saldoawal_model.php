<?php
require_once("koneksi.php");
class saldoawal_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function all(){
		$sql0 = "SELECT saldoawal.id_saldoawal, saldoawal.koderekening as kodesaldo, tblrek.uraian_koderekening, saldoawal.saldoawal as uraian FROM saldoawal JOIN koderekening as tblrek ON tblrek.koderekening = saldoawal.koderekening";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	public function all_json(){
		$sql0 = "SELECT * FROM saldoawal;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function select($key){
		$sql0 = "SELECT * FROM saldoawal WHERE saldoawal LIKE :key ;";
		$key = "%".$key."%";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':key',$key,PDO::PARAM_STR);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function insert($saldoawal, $koderekening){
	   try{	
			$sql0 = "INSERT INTO saldoawal(saldoawal, koderekening) VALUES(:saldoawal, :koderekening)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':saldoawal',$saldoawal);
			$statement->bindValue(':koderekening',$koderekening);
			$statement->execute();
			$statement->closeCursor();
			$sql1 = "SELECT id_saldoawal FROM saldoawal WHERE saldoawal = :saldoawal AND koderekening = :koderekening ;";
			$statement = $this->connection->prepare($sql1);
			$statement->bindValue(':saldoawal',$saldoawal);
			$statement->bindValue(':koderekening',$koderekening);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			return $fetch[0]['id_saldoawal'];
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function update($id_saldoawal, $saldoawal, $koderekening){
		try{
			$sql0 = "UPDATE saldoawal SET saldoawal =:saldoawal, koderekening = :koderekening WHERE id_saldoawal = :id_saldoawal;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':saldoawal',$saldoawal);
			$statement->bindValue(':koderekening',$koderekening);
			$statement->bindValue(':id_saldoawal',$id_saldoawal);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Memperbarui Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function delete($id_saldoawal){
		try{	
			$sql0 = "DELETE FROM saldoawal WHERE id_saldoawal = :id_saldoawal;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_saldoawal',$id_saldoawal);
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