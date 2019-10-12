<?php
require_once("koneksi.php");
class program_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	//id_program, kelompok_program, tanggalmulai_program, jenis_program, tanggalakhir_program, nama_program, pagu_program, nama_departemen, status_program, nama_program, notelepon_program, email_program
	public function all(){
		$sql0 = "SELECT * FROM program;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	public function all_json(){
		$sql0 = "SELECT * FROM program;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	//id_program, kelompok_program, tanggalmulai_program, jenis_program, tanggalakhir_program, nama_program, pagu_program, nama_departemen, status_program, nama_vendor, notelepon_program, email_program
	public function select($key){
		$sql0 = "SELECT * FROM program WHERE id_program LIKE :key OR kelompok_program LIKE :key7 OR tanggalmulai_program LIKE :key1 OR jenis_program LIKE :key2 OR tanggalakhir_program LIKE :key3 OR nama_program LIKE :key4 OR pagu_program LIKE :key5 OR nama_departemen LIKE :key6 OR status_program LIKE :key8 OR nama_vendor LIKE :key9 OR notelepon_program LIKE :key10  OR email_program LIKE :key11 OR kontakperson_program LIKE :key12  ;";
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
		$statement->bindValue(':key8',$key,PDO::PARAM_STR);
		$statement->bindValue(':key9',$key,PDO::PARAM_STR);
		$statement->bindValue(':key10',$key,PDO::PARAM_STR);
		$statement->bindValue(':key11',$key,PDO::PARAM_STR);
		$statement->bindValue(':key12',$key,PDO::PARAM_STR);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	// kelompok_program, tanggalmulai_program, jenis_program, tanggalakhir_program, nama_program, pagu_program, nama_departemen, status_program, nama_vendor, notelepon_program, email_program
	public function insert($kelompok_program, $tanggalmulai_program, $jenis_program, $tanggalakhir_program, $nama_program, $pagu_program, $nama_departemen, $status_program, $nama_vendor, $notelepon_program, $email_program, $kontakperson_program){
	   try{	
			//$sql0 = "SELECT COUNT(id_program) FROM program;";
			$sql0 = "INSERT INTO program(kelompok_program, tanggalmulai_program, jenis_program, tanggalakhir_program, nama_program, pagu_program, nama_departemen, status_program, nama_vendor, notelepon_program, email_program, kontakperson_program) VALUES(:kelompok_program, :tanggalmulai_program, :jenis_program, :tanggalakhir_program, :nama_program, :pagu_program, :nama_departemen, :status_program, :nama_vendor, :notelepon_program, :email_program, :kontakperson_program)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':kelompok_program',$kelompok_program);
			$statement->bindValue(':tanggalmulai_program',$tanggalmulai_program);
			$statement->bindValue(':jenis_program',$jenis_program);
			$statement->bindValue(':tanggalakhir_program',$tanggalakhir_program);
			$statement->bindValue(':nama_program',$nama_program);
			$statement->bindValue(':pagu_program',$pagu_program);
			$statement->bindValue(':nama_departemen',$nama_departemen);
			$statement->bindValue(':status_program',$status_program);
			$statement->bindValue(':nama_vendor',$nama_vendor);
			$statement->bindValue(':notelepon_program',$notelepon_program);
			$statement->bindValue(':email_program',$email_program);
			$statement->bindValue(':kontakperson_program',$kontakperson_program);
			$statement->execute();
			$statement->closeCursor();
			$sql1 = "SELECT id_program FROM program WHERE  kelompok_program = :kelompok_program AND  tanggalmulai_program = :tanggalmulai_program AND  jenis_program = :jenis_program AND  tanggalakhir_program = :tanggalakhir_program AND  nama_program = :nama_program AND  pagu_program = :pagu_program AND  nama_departemen = :nama_departemen AND  status_program = :status_program AND  nama_vendor = :nama_vendor AND  notelepon_program = :notelepon_program AND  email_program = :email_program AND kontakperson_program = :kontakperson_program;";
			$statement = $this->connection->prepare($sql1);
			$statement->bindValue(':kelompok_program',$kelompok_program);
			$statement->bindValue(':tanggalmulai_program',$tanggalmulai_program);
			$statement->bindValue(':jenis_program',$jenis_program);
			$statement->bindValue(':tanggalakhir_program',$tanggalakhir_program);
			$statement->bindValue(':nama_program',$nama_program);
			$statement->bindValue(':pagu_program',$pagu_program);
			$statement->bindValue(':nama_departemen',$nama_departemen);
			$statement->bindValue(':status_program',$status_program);
			$statement->bindValue(':nama_vendor',$nama_vendor);
			$statement->bindValue(':notelepon_program',$notelepon_program);
			$statement->bindValue(':email_program',$email_program);
			$statement->bindValue(':kontakperson_program',$kontakperson_program);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			return $fetch[0]['id_program'];
		}
		catch(PDOException $e){
			return $e;//"gagal";
		}
	}
	
	public function update($id_program,$kelompok_program, $tanggalmulai_program, $jenis_program, $tanggalakhir_program, $nama_program, $pagu_program, $nama_departemen, $status_program, $nama_vendor, $notelepon_program, $email_program, $kontakperson_program){ 
		try{
			$sql0 = "UPDATE program SET  kelompok_program = :kelompok_program ,  tanggalmulai_program = :tanggalmulai_program ,  jenis_program = :jenis_program ,  tanggalakhir_program = :tanggalakhir_program ,  nama_program = :nama_program ,  pagu_program = :pagu_program ,  nama_departemen = :nama_departemen ,  status_program = :status_program ,  nama_vendor = :nama_vendor ,  notelepon_program = :notelepon_program ,  email_program = :email_program, kontakperson_program = :kontakperson_program  WHERE id_program = :id_program ";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':kelompok_program',$kelompok_program);
			$statement->bindValue(':tanggalmulai_program',$tanggalmulai_program);
			$statement->bindValue(':jenis_program',$jenis_program);
			$statement->bindValue(':tanggalakhir_program',$tanggalakhir_program);
			$statement->bindValue(':nama_program',$nama_program);
			$statement->bindValue(':pagu_program',$pagu_program);
			$statement->bindValue(':nama_departemen',$nama_departemen);
			$statement->bindValue(':status_program',$status_program);
			$statement->bindValue(':nama_vendor',$nama_vendor);
			$statement->bindValue(':notelepon_program',$notelepon_program);
			$statement->bindValue(':email_program',$email_program);
			$statement->bindValue(':kontakperson_program',$kontakperson_program);
			$statement->bindValue(':id_program',$id_program);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Memperbarui Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function delete($id_program){
		try{	
			//$sql0 = "SELECT COUNT(id_program) FROM program;";
			$sql0 = "DELETE FROM program WHERE id_program = :id_program;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_program',$id_program);
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