<?php
require_once("koneksi.php");
class pegawai_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function all(){
		$sql0 = "SELECT * FROM pegawai;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	public function all_json(){
		$sql0 = "SELECT * FROM pegawai;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function select($key){
		$sql0 = "SELECT * FROM pegawai WHERE id_pegawai LIKE :key OR nama_departemen LIKE :key7 OR nama_pegawai LIKE :key1 OR alamat_pegawai LIKE :key2 OR jeniskelamin_pegawai LIKE :key3 OR tanggallahir_pegawai LIKE :key4 OR notelepon_pegawai LIKE :key5 OR email_pegawai LIKE :key6 ;";
		$key = "%".$key."%";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':key',$key,PDO::PARAM_STR);
		$statement->bindValue(':key1',$key,PDO::PARAM_STR);
		$statement->bindValue(':key7',$key,PDO::PARAM_STR);
		$statement->bindValue(':key2',$key,PDO::PARAM_STR);
		$statement->bindValue(':key3',$key,PDO::PARAM_STR);
		$statement->bindValue(':key4',$key,PDO::PARAM_STR);
		$statement->bindValue(':key5',$key,PDO::PARAM_STR);
		$statement->bindValue(':key6',$key,PDO::PARAM_STR);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	//$_POST['nama_departemen'],$_POST['nama_pegawai'],$_POST['jeniskelamin_pegawai'],$_POST['alamat_pegawai'],$_POST['tanggallahir_pegawai'],$_POST['notelepon_pegawai'],$_POST['email_pegawai']
	public function insert($nama_departemen,$nama_pegawai,$jeniskelamin_pegawai,$alamat_pegawai,$tanggallahir_pegawai,$notelepon_pegawai,$email_pegawai){
	   try{	
			//$sql0 = "SELECT COUNT(id_pegawai) FROM pegawai;";
			$sql0 = "INSERT INTO pegawai(nama_departemen, nama_pegawai, jeniskelamin_pegawai,alamat_pegawai,tanggallahir_pegawai,notelepon_pegawai,email_pegawai) VALUES(:nama_departemen, :nama_pegawai, :jeniskelamin_pegawai,:alamat_pegawai,:tanggallahir_pegawai,:notelepon_pegawai,:email_pegawai)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nama_departemen',$nama_departemen);
			$statement->bindValue(':nama_pegawai',$nama_pegawai);
			$statement->bindValue(':jeniskelamin_pegawai',$jeniskelamin_pegawai);
			$statement->bindValue(':alamat_pegawai',$alamat_pegawai);
			$statement->bindValue(':tanggallahir_pegawai',$tanggallahir_pegawai);
			$statement->bindValue(':notelepon_pegawai',$notelepon_pegawai);
			$statement->bindValue(':email_pegawai',$email_pegawai);
			$statement->execute();
			$statement->closeCursor();
			$sql1 = "SELECT id_pegawai FROM pegawai WHERE nama_pegawai = :nama_pegawai AND tanggallahir_pegawai = :tanggallahir_pegawai AND notelepon_pegawai = :notelepon_pegawai AND email_pegawai = :email_pegawai;";
			$statement = $this->connection->prepare($sql1);
			$statement->bindValue(':nama_pegawai',$nama_pegawai);
			$statement->bindValue(':tanggallahir_pegawai',$tanggallahir_pegawai);
			$statement->bindValue(':notelepon_pegawai',$notelepon_pegawai);
			$statement->bindValue(':email_pegawai',$email_pegawai);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			return ($fetch[0]['id_pegawai']);//$fetch[0]['id_pegawai'];
		}
		catch(PDOException $e){
			return $e;//"gagal";
		}
	}
	
	public function update($id_pegawai,$nama_departemen,$nama_pegawai,$jeniskelamin_pegawai,$alamat_pegawai,$tanggallahir_pegawai,$notelepon_pegawai,$email_pegawai){ 
		try{
			$sql0 = "UPDATE pegawai SET nama_departemen = :nama_departemen, nama_pegawai = :nama_pegawai, jeniskelamin_pegawai = :jeniskelamin_pegawai,alamat_pegawai = :alamat_pegawai,tanggallahir_pegawai = :tanggallahir_pegawai,notelepon_pegawai = :notelepon_pegawai,email_pegawai = :email_pegawai WHERE id_pegawai = :id_pegawai ";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nama_departemen',$nama_departemen);
			$statement->bindValue(':nama_pegawai',$nama_pegawai);
			$statement->bindValue(':jeniskelamin_pegawai',$jeniskelamin_pegawai);
			$statement->bindValue(':alamat_pegawai',$alamat_pegawai);
			$statement->bindValue(':tanggallahir_pegawai',$tanggallahir_pegawai);
			$statement->bindValue(':notelepon_pegawai',$notelepon_pegawai);
			$statement->bindValue(':email_pegawai',$email_pegawai);
			$statement->bindValue(':id_pegawai',$id_pegawai);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Memperbarui Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function delete($id_pegawai){
		try{	
			//$sql0 = "SELECT COUNT(id_pegawai) FROM pegawai;";
			$sql0 = "DELETE FROM pegawai WHERE id_pegawai = :id_pegawai;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_pegawai',$id_pegawai);
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