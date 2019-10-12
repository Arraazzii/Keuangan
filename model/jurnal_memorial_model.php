<?php
require_once("koneksi.php");
require_once("tutupBuku_model.php");
class jurnal_memorial_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	
	public function create_id(){
		try{
			$sql0 = "SELECT COUNT(nomor_jurnal) AS id FROM jurnal";
			$statement = $this->connection->prepare($sql0);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			$id = $fetch[0]['id'];
			$test = true;
			do{
				$id++;
				$sql1 = "SELECT COUNT(nomor_jurnal) as id FROM jurnal WHERE nomor_jurnal = :nomor_jurnal;";
				$statement = $this->connection->prepare($sql1);
				$statement->bindValue(':nomor_jurnal',$id);
				$statement->execute();
				$fetch2 = $statement->fetchAll();
				$statement->closeCursor();
				if($fetch2[0][0] === 0){
					$test = false;
				}
			}while($test === true);
			$nol = "";
			for($i = 0 ; $i < (3 - strlen($id)); $i++){
                    $nol .= "0";
                }
			$nol .= $id;
			return $_SESSION['kode_rek_user']."-".$nol."/JM/".Date('m/Y');
			
		}
		catch(PDOException $e){
			return $e;
			//return "gagal";
		}
		
	}

	public function create_id2($tanggal){
		try{
			$sql0 = "SELECT COUNT(nomor_jurnal) AS id FROM jurnal";
			$statement = $this->connection->prepare($sql0);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			$id = $fetch[0]['id'];
			$test = true;
			do{
				$id++;
				$sql1 = "SELECT COUNT(nomor_jurnal) as id FROM jurnal WHERE nomor_jurnal = :nomor_jurnal;";
				$statement = $this->connection->prepare($sql1);
				$statement->bindValue(':nomor_jurnal',$id);
				$statement->execute();
				$fetch2 = $statement->fetchAll();
				$statement->closeCursor();
				if($fetch2[0][0] === 0){
					$test = false;
				}
			}while($test === true);
			$nol = "";
			for($i = 0 ; $i < (3 - strlen($id)); $i++){
                    $nol .= "0";
                }
			$nol .= $id;

			$date = Date('m/Y', strtotime($tanggal));
			return $_SESSION['kode_rek_user']."-".$nol."/JM/".$date;
			
		}
		catch(PDOException $e){
			return $e;
			//return "gagal";
		}
	}
	
	public function all(){
		$sql0 = "SELECT * FROM jurnal;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	//
	
	public function all_json(){
		$sql0 = "SELECT * FROM jurnal;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
	
	public function data_json(){
		$data = array();
		$sql0 = "SELECT nama_departemen FROM departemen;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		//$data = array('departemen'=>$fetch);
		$sql1 = "SELECT namajenis_jenisprogram FROM jenisprogram;";
		$statement = $this->connection->prepare($sql1);
		$statement->execute();
		$fetch1 = $statement->fetchAll();
		$statement->closeCursor();
		
		array_push($data,array('departemen'=>$fetch,'program'=>$fetch1));
		//array_push($data,$fetch1);
		//array_push($data,array('departemen'=>$fetch,'program'=>$fetch1));
		return json_encode($data);
	}
	
	
	public function select($key){
		$sql0 = "SELECT * FROM jurnal WHERE nomor_jurnal LIKE %:key%  OR keterangan_jurnal LIKE %:key1% OR tanggal_jurnal LIKE %:key2% ;";
		$key = "%".$key."%";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':key',$key,PDO::PARAM_STR);
		$statement->bindValue(':key1',$key,PDO::PARAM_STR);
		$statement->bindValue(':key2',$key,PDO::PARAM_STR);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		//$sql1 = "SELECT * FROM  jurnal_detail WHERE id_detail_jurnal , nomor_jurnal, nomor_rekening, uraian, debit_jurnal, kredit_jurnal, nama_departemen, nama_program ";
		return json_encode($fetch);
	}
	
	
		//nomor_jurnal, keterangan_jurnal, tanggal_jurnal
	public function insert($nomor_jurnal, $keterangan_jurnal, $tanggal_jurnal, $status_jurnal){
		$tutupBuku = new tutupBuku_model();
		$statusBuku = $tutupBuku->getTutupBukuStatusByDate($tanggal_jurnal);
		if ($statusBuku) {
			return "Gagal, anda tidak bisa menginput pada tanggal buku yang sudah tutup!";
		}

	   try{
		   	// $nomor_jurnal = $this->create_id2($tanggal_jurnal);	
			$sql0 = "INSERT INTO jurnal(nomor_jurnal, keterangan_jurnal, tanggal_jurnal, status_jurnal) VALUES( :nomor_jurnal, :keterangan_jurnal, :tanggal_jurnal, :status_jurnal)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomor_jurnal',$nomor_jurnal);
			$statement->bindValue(':keterangan_jurnal',$keterangan_jurnal);
			$statement->bindValue(':tanggal_jurnal',$tanggal_jurnal);
			// $statement->bindValue(':status_jurnal',$status_jurnal);
			$statement->bindValue(':status_jurnal','T');
			$statement->execute();
			$statement->closeCursor();			
			// return "Berhasil";
			return $nomor_jurnal;
		}
		catch(PDOException $e){
			// return $e;
			return "gagal";
		}
	}
	
	//id_detail_jurnal, nomor_jurnal, nomor_rekening, uraian, debit_jurnal, kredit_jurnal, nama_departemen, nama_program
	public function insert_detail($old_nomor_jurnal, $nomor_jurnal, $nomor_rekening, $uraian, $nilai, $posisi, $program, $departemen){
		try{
			
			$sql0 = "SELECT COUNT(id_detail_jurnal) AS id FROM jurnal_detail WHERE nomor_jurnal = :nomor_jurnal ;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomor_jurnal',$old_nomor_jurnal);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			$id = $fetch[0]['id'];
			$test = true;
			do{
				$id++;
				$sql1 = "SELECT COUNT(id_detail_jurnal) as id FROM jurnal_detail WHERE id_detail_jurnal = :id_detail_jurnal;";
				$statement = $this->connection->prepare($sql1);
				$statement->bindValue(':id_detail_jurnal',$id);
				$statement->execute();
				$fetch2 = $statement->fetchAll();
				$statement->closeCursor();
				if($fetch2[0][0] === 0){
					$test = false;
				}
			}while($test === true);
			$id_detail_jurnal = $id;		
			
			
			$sql3 = "INSERT INTO jurnal_detail( id_detail_jurnal, nomor_jurnal, nomor_rekening, uraian, nilai, posisi, program, departemen) 
			VALUES(:id_detail_jurnal, :nomor_jurnal, :nomor_rekening, :uraian, :nilai, :posisi, :program, :departemen);";
			$statement = $this->connection->prepare($sql3);
			$statement->bindValue(':id_detail_jurnal',$id_detail_jurnal);
			$statement->bindValue(':nomor_jurnal',$nomor_jurnal);
			$statement->bindValue(':nomor_rekening',$nomor_rekening);
			$statement->bindValue(':uraian',$uraian);
			$statement->bindValue(':nilai',$nilai);
			$statement->bindValue(':posisi',$posisi);
            $statement->bindValue(':program',$program);
            $statement->bindValue(':departemen',$departemen);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil";	
		}
		catch(PDOException $e){
			return "Gagal";
		}
	}
	
	//nomor_jurnal, keterangan_jurnal, tanggal_jurnal
	public function update($old_nomor_jurnal, $nomor_jurnal, $keterangan_jurnal, $tanggal_jurnal){
		try{
			$sql0 = "UPDATE jurnal SET nomor_jurnal = :nomor_jurnal, keterangan_jurnal = :keterangan_jurnal, tanggal_jurnal = :tanggal_jurnal WHERE nomor_jurnal = :old_nomor_jurnal;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomor_jurnal',$nomor_jurnal);
			$statement->bindValue(':keterangan_jurnal',$keterangan_jurnal);
			$statement->bindValue(':tanggal_jurnal',$tanggal_jurnal);
			$statement->bindValue(':old_nomor_jurnal',$old_nomor_jurnal);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Memperbarui Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	//id_detail_jurnal, nomor_jurnal, nomor_rekening, uraian, debit_jurnal, kredit_jurnal, nama_departemen, nama_program
	public function update_detail( $id_detail_jurnal, $nomor_rekening, $uraian, $debit_jurnal, $kredit_jurnal, $nama_departemen, $nama_program){
		try{
			
			$sql0 = "UPDATE jurnal_detail SET  nomor_rekening = :nomor_rekening, uraian = :uraian, debit_jurnal = :debit_jurnal, kredit_jurnal = :kredit_jurnal, nama_departemen= :nama_departemen, nama_program= :nama_program WHERE id_detail_jurnal= :id_detail_jurnal ;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_detail_jurnal',$id_detail_jurnal);
			$statement->bindValue(':nomor_rekening',$nomor_rekening);
			$statement->bindValue(':uraian',$uraian);
			$statement->bindValue(':debit_jurnal',$debit_jurnal);
			$statement->bindValue(':kredit_jurnal',$kredit_jurnal);
			$statement->bindValue(':nama_departemen',$nama_departemen);
			$statement->bindValue(':nama_program',$nama_program);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil";	
		}
		catch(PDOException $e){
			return "Gagal";
		}
	}
	
	
	
	public function delete($nomor_jurnal){
		try{	
			//$sql0 = "SELECT COUNT(nomor_jurnal_memorial) FROM jurnal_memorial;";
			$sql0 = "DELETE FROM jurnal WHERE nomor_jurnal = :nomor_jurnal;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomor_jurnal',$nomor_jurnal);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Menghapus Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
	
	public function delete_detail($nomor_jurnal){
		try{	
			//$sql0 = "SELECT COUNT(nomor_jurnal_memorial) FROM jurnal_memorial;";
			$sql0 = "DELETE FROM jurnal_detail WHERE nomor_jurnal = :nomor_jurnal;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomor_jurnal',$nomor_jurnal);
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