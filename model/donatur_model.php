<?php
require_once("koneksi.php");
class donatur_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function all(){
		$sql0 = "SELECT * FROM investor;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	public function all_json(){
		$sql0 = "SELECT * FROM investor;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	// id_investor, nama_investor, alamat_investor, notelepon_investor, email_investor
	public function select($key){
		$sql0 = "SELECT * FROM investor WHERE id_investor LIKE :key OR nama_investor LIKE :key7 OR alamat_investor LIKE :key1 OR notelepon_investor LIKE :key2 OR email_investor LIKE :key3;";
		$key = "%".$key."%";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':key',$key,PDO::PARAM_STR);
		$statement->bindValue(':key1',$key,PDO::PARAM_STR);
		$statement->bindValue(':key7',$key,PDO::PARAM_STR);
		$statement->bindValue(':key2',$key,PDO::PARAM_STR);
		$statement->bindValue(':key3',$key,PDO::PARAM_STR);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	// id_investor, nama_investor, alamat_investor, notelepon_investor, email_investor
	public function insert($nama_investor,$alamat_investor,$notelepon_investor,$email_investor){
	   try{	
			//$sql0 = "SELECT COUNT(id_investor) FROM investor;";
			$sql0 = "INSERT INTO investor(nama_investor, alamat_investor, notelepon_investor, email_investor) VALUES(:nama_investor, :alamat_investor, :notelepon_investor, :email_investor)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nama_investor',$nama_investor);
			$statement->bindValue(':alamat_investor',$alamat_investor);
			$statement->bindValue(':notelepon_investor',$notelepon_investor);
			$statement->bindValue(':email_investor',$email_investor);
			$statement->execute();
			$statement->closeCursor();
			$sql1 = "SELECT id_investor FROM investor WHERE nama_investor = :nama_investor AND alamat_investor = :alamat_investor AND notelepon_investor = :notelepon_investor AND email_investor = :email_investor;";
			$statement = $this->connection->prepare($sql1);
			$statement->bindValue(':nama_investor',$nama_investor);
			$statement->bindValue(':alamat_investor',$alamat_investor);
			$statement->bindValue(':notelepon_investor',$notelepon_investor);
			$statement->bindValue(':email_investor',$email_investor);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			return $fetch[0]['id_investor'];
		}
		catch(PDOException $e){
			return $e;//"gagal";
		}
	}
	
	public function update($id_investor,$nama_investor,$alamat_investor,$notelepon_investor,$email_investor){ 
		try{
			$sql0 = "UPDATE investor SET nama_investor = :nama_investor,alamat_investor = :alamat_investor,notelepon_investor = :notelepon_investor,email_investor = :email_investor WHERE id_investor = :id_investor ";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nama_investor',$nama_investor);
			$statement->bindValue(':alamat_investor',$alamat_investor);
			$statement->bindValue(':notelepon_investor',$notelepon_investor);
			$statement->bindValue(':email_investor',$email_investor);
			$statement->bindValue(':id_investor',$id_investor);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Memperbarui Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function delete($id_investor){
		try{	
			//$sql0 = "SELECT COUNT(id_investor) FROM investor;";
			$sql0 = "DELETE FROM investor WHERE id_investor = :id_investor;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_investor',$id_investor);
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