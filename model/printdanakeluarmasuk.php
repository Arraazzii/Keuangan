<?php
require_once("koneksi.php");
class printdanakeluarmasuk{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	public function all($mulai, $selesai){
		$sql0 = "SELECT * FROM danakeluar WHERE (tanggal_danakeluar BETWEEN '$mulai' AND '$selesai');";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}

	public function allin($mulai, $selesai){
		$sql0 = "SELECT * FROM danamasuk WHERE (tanggal_danamasuk BETWEEN '$mulai' AND '$selesai');";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
}