<?php
require_once("koneksi.php");
class tutupBuku_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}

	public function getTutupBukuStatus()
	{	
		$date = date("Y-m-d");
		$sql = "SELECT * FROM `tutupbuku` ORDER BY id_tutupBuku DESC LIMIT 1";
		$statement = $this->connection->prepare($sql);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();

		$bulan_tutupBuku = $fetch[0]['bulan_tutupBuku'];
		$tahun_tutupBuku = $fetch[0]['tahun_tutupBuku'];

		$sebelum = date("Y-m-d", strtotime($tahun_tutupBuku."-".$bulan_tutupBuku."-01"));
		$sesudah = date("Y-m-d", strtotime($tahun_tutupBuku."-".$bulan_tutupBuku."-31"));

		$status = "";

		if (($sebelum <= $date) && ($sesudah >= $date)) {
			$status = "tutup";
		} else {
			$status = "buka";
		}
		
		return $status;
	}

	public function getTutupBukuStatusByDate($date){
		$date = date("Y-m-d", strtotime($date));
		$date = explode("-", $date);
		$bulan = $date[1];
		$tahun = $date[0];
		$sql = "SELECT * FROM `tutupbuku` WHERE bulan_tutupBuku = :bulan_tutupBuku AND tahun_tutupBuku = :tahun_tutupBuku";
		$statement = $this->connection->prepare($sql);
		$statement->bindValue(':bulan_tutupBuku',$bulan);
		$statement->bindValue(':tahun_tutupBuku',$tahun);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();

		$status = "";

		if (count($fetch) > 0 ) {
			$status = true;
		} else {
			$status = false;
		}

		return $status;
	}

	public function all_json(){
		$sql0 = "SELECT * FROM tutupbuku ORDER BY id_tutupBuku DESC;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;
	}

	public function insert($bulan, $tahun, $petugas){
		if(empty($bulan) || empty($tahun) || empty($petugas)){
			return "kosong";
		}else{
			$sql10 = "SELECT bulan_tutupBuku, tahun_tutupBuku FROM tutupbuku;";
			$statement1 = $this->connection->prepare($sql10);
			$statement1->execute();
			$fetch1 = $statement1->fetchAll();
			$statement1->closeCursor();
			if (!empty($fetch1)) {
				foreach ($fetch1 as $fetch2) {
				}
			}
			if ($fetch2['bulan_tutupBuku'] === $bulan && $fetch2['tahun_tutupBuku'] === $tahun) {
				return "error";
			}else{
				$sql0 = "INSERT INTO tutupbuku(bulan_tutupBuku, tahun_tutupBuku, petugas) VALUES(:bulan, :tahun, :petugas)";
				$statement = $this->connection->prepare($sql0);
				$statement->bindValue(':bulan',$bulan);
				$statement->bindValue(':tahun',$tahun);
				$statement->bindValue(':petugas',$petugas);
				$statement->execute();
				$statement->closeCursor();
				return "success";
			}
		}
	}

	public function delete($id_tutupBuku){
		try{	
			$sql0 = "DELETE FROM tutupBuku WHERE id_tutupBuku = :id_tutupBuku;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_tutupBuku',$id_tutupBuku);
			$statement->execute();
			$statement->closeCursor();
			return "success";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
}
?>