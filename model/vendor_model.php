<?php
require_once("koneksi.php");
class vendor_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function all(){
		$sql0 = "SELECT * FROM vendor;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	public function all_json(){
		$sql0 = "SELECT * FROM vendor;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	//  id_vendor, nonpwp, jenis_vendor, namaperusahaan_vendor, kontakperson_vendor, alamat_vendor, notelepon_vendor, email_vendor
	public function select($key){
		$sql0 = "SELECT * FROM vendor WHERE id_vendor LIKE :key OR nonpwp LIKE :key7 OR jenis_vendor LIKE :key1 OR namaperusahaan_vendor LIKE :key2 OR kontakperson_vendor LIKE :key3 OR alamat_vendor LIKE :key4 OR notelepon_vendor LIKE :key5 OR email_vendor LIKE :key6  ;";
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
	//id_vendor, nonpwp, jenis_vendor, namaperusahaan_vendor, kontakperson_vendor, alamat_vendor, notelepon_vendor, email_vendor
	public function insert($nonpwp, $jenis_vendor, $namaperusahaan_vendor, $kontakperson_vendor, $alamat_vendor, $notelepon_vendor, $email_vendor){
	   try{	
			//$sql0 = "SELECT COUNT(id_vendor) FROM vendor;";
			$sql0 = "INSERT INTO vendor(nonpwp, jenis_vendor, namaperusahaan_vendor, kontakperson_vendor, alamat_vendor, notelepon_vendor, email_vendor) VALUES(:nonpwp, :jenis_vendor, :namaperusahaan_vendor, :kontakperson_vendor, :alamat_vendor, :notelepon_vendor, :email_vendor)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nonpwp',$nonpwp);
			$statement->bindValue(':jenis_vendor',$jenis_vendor);
			$statement->bindValue(':namaperusahaan_vendor',$namaperusahaan_vendor);
			$statement->bindValue(':kontakperson_vendor',$kontakperson_vendor);
			$statement->bindValue(':alamat_vendor',$alamat_vendor);
			$statement->bindValue(':notelepon_vendor',$notelepon_vendor);
			$statement->bindValue(':email_vendor',$email_vendor);
			$statement->execute();
			$statement->closeCursor();
			$sql1 = "SELECT id_vendor FROM vendor WHERE nonpwp =:nonpwp AND jenis_vendor =:jenis_vendor AND namaperusahaan_vendor =:namaperusahaan_vendor AND kontakperson_vendor =:kontakperson_vendor AND alamat_vendor =:alamat_vendor AND notelepon_vendor =:notelepon_vendor AND email_vendor =:email_vendor ;";
			$statement = $this->connection->prepare($sql1);
			$statement->bindValue(':nonpwp',$nonpwp);
			$statement->bindValue(':jenis_vendor',$jenis_vendor);
			$statement->bindValue(':namaperusahaan_vendor',$namaperusahaan_vendor);
			$statement->bindValue(':kontakperson_vendor',$kontakperson_vendor);
			$statement->bindValue(':alamat_vendor',$alamat_vendor);
			$statement->bindValue(':notelepon_vendor',$notelepon_vendor);
			$statement->bindValue(':email_vendor',$email_vendor);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			return $fetch[0]['id_vendor'];
		}
		catch(PDOException $e){
			return $e;//"gagal";
		}
	}
	
	public function update($id_vendor,$nonpwp, $jenis_vendor, $namaperusahaan_vendor, $kontakperson_vendor, $alamat_vendor, $notelepon_vendor, $email_vendor){ 
		try{
			$sql0 = "UPDATE vendor SET nonpwp =:nonpwp , jenis_vendor =:jenis_vendor , namaperusahaan_vendor =:namaperusahaan_vendor , kontakperson_vendor =:kontakperson_vendor , alamat_vendor =:alamat_vendor , notelepon_vendor =:notelepon_vendor , email_vendor =:email_vendor  WHERE id_vendor = :id_vendor ";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nonpwp',$nonpwp);
			$statement->bindValue(':jenis_vendor',$jenis_vendor);
			$statement->bindValue(':namaperusahaan_vendor',$namaperusahaan_vendor);
			$statement->bindValue(':kontakperson_vendor',$kontakperson_vendor);
			$statement->bindValue(':alamat_vendor',$alamat_vendor);
			$statement->bindValue(':notelepon_vendor',$notelepon_vendor);
			$statement->bindValue(':email_vendor',$email_vendor);
			$statement->bindValue(':id_vendor',$id_vendor);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Memperbarui Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function delete($id_vendor){
		try{	
			//$sql0 = "SELECT COUNT(id_vendor) FROM vendor;";
			$sql0 = "DELETE FROM vendor WHERE id_vendor = :id_vendor;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_vendor',$id_vendor);
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