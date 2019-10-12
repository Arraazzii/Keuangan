<?php
require_once("koneksi.php");
require_once("tutupBuku_model.php");

class dana_keluar_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	
	public function create_id(){
		try{
			$sql0 = "SELECT COUNT(id_danakeluar) AS id FROM danakeluar";
			$statement = $this->connection->prepare($sql0);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			$id = $fetch[0]['id'];
			$test = true;
			do{
				$id++;
				$sql1 = "SELECT COUNT(id_danakeluar) as id FROM danakeluar WHERE id_danakeluar = :id_danakeluar;";
				$statement = $this->connection->prepare($sql1);
				$statement->bindValue(':id_danakeluar',$id);
				$statement->execute();
				$fetch2 = $statement->fetchAll();
				$statement->closeCursor();
				if($fetch2[0][0] === 0){
					$test = false;
				}
			}while($test === true);
			$nol = "";
			for($i = 0 ; $i < (5 - strlen($id)); $i++){
				$nol .= "0";
			}
			$nol .= $id;
			return $nol."/DK/".Date('m/Y');
			
		}
		catch(PDOException $e){
			return $e;
			//return "gagal";
		}
		
	}
	public function create_number2($rekening_danakeluar, $tanggal_danakeluar){

            

            try{


                $rek = "";
                if ($rekening_danakeluar == "Kas") {
                    # code...
                    $rek = "KK";
                }
                else if ($rekening_danakeluar == "Bank") {
                    # code...
                    $rek  = "BK";
                }

                $tanggal = explode("/", $tanggal_danakeluar);

                $sql0 = "SELECT COUNT(id_danakeluar) AS id FROM danakeluar";
                $statement = $this->connection->prepare($sql0);
                $statement->execute();
                $fetch = $statement->fetchAll();
                $statement->closeCursor();
                $id = $fetch[0]['id'];
                $test = true;
                do{
                    $id++;
                    $sql1 = "SELECT COUNT(id_danakeluar) as id FROM danakeluar WHERE id_danakeluar = :id_danakeluar;";
                    $statement = $this->connection->prepare($sql1);
                    $statement->bindValue(':id_danakeluar',$id);
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
                $tanggal_fix = $tanggal[1];
                if((int)$tanggal[1] < 10){
                    $tanggal_fix = substr($tanggal[1], -1, 1);
                }
                $tahun_fix = substr($tanggal[0], -2);
                return $_SESSION['kode_rek_user']."-".$nol."/".$rek."/".$tanggal_fix."/".$tahun_fix;
                // return $nol."/DM/".Date('m/Y');

            }
            catch(PDOException $e){
                return $e;
                //return "gagal";
            }


	}
	
	public function create_number($rekening_danakeluar, $tanggal_danakeluar){

            

            try{


                $rek = "";
                if ($rekening_danakeluar == "Kas") {
                    # code...
                    $rek = "KK";
                }
                else if ($rekening_danakeluar == "Bank") {
                    # code...
                    $rek  = "BK";
                }

                $tanggal = explode("/", $tanggal_danakeluar);

                $sql0 = "SELECT * FROM `danakeluar` ORDER BY id_danakeluar DESC LIMIT 1";
                $statement = $this->connection->prepare($sql0);
                $statement->execute();
                $fetch = $statement->fetchAll();
                $statement->closeCursor();
				$id = $fetch[0]['nomor_danakeluar'];
				$data = explode("/", $id);
				$data = explode("-", $data[0]);
                $nol = "";
                for($i = 0 ; $i < count($data); $i++){
                    $nol = $data[$i];
                }
                $nol = $nol + 1;
                $tanggal_fix = $tanggal[1];
                if((int)$tanggal[1] < 10){
                    $tanggal_fix = substr($tanggal[1], -1, 1);
                }
                $tahun_fix = substr($tanggal[0], -2);
                return $_SESSION['kode_rek_user']."-".$nol."/".$rek."/".$tanggal_fix."/".$tahun_fix;
                // return $nol."/DM/".Date('m/Y');

            }
            catch(PDOException $e){
                return $e;
                //return "gagal";
            }


    }
	
	public function all(){
		$sql0 = "SELECT * FROM danakeluar;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	public function kodeakhir(){
		$sql1 = "SELECT id_danakeluar AS id FROM danakeluar order by id_danakeluar DESC LIMIT 1;";
        $statement = $this->connection->prepare($sql1);
        $statement->execute();
        $fetch1 = $statement->fetchAll();
        $statement->closeCursor();
		return $fetch1;//json_encode($fetch);
	}
	
	public function all_json(){
		$sql0 = "SELECT * FROM dana_keluar;";
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
		$sql0 = "SELECT * FROM danakeluar WHERE nomor_danakeluar LIKE %:key%  OR  tanggal_danakeluar LIKE %:key1%  OR  dibayarkepada_danakeluar LIKE %:key2%  OR rekening_danakeluar LIKE %:key3%  OR  namabank_danakeluar LIKE %:key4%  OR  jumlah_danakeluar LIKE %:key5%  OR  carapembayaran_danakeluar LIKE %:key6% OR nomorcekgiro_danakeluar LIKE %:key7% OR  keterangan_danakeluar LIKE %:key8%  OR  status_danakeluar  LIKE %:key9% OR id_danakeluar LIKE %:key10% OR tanggaljatuhtempo_danakeluar LIKE %:key11% ;";
		$key = "%".$key."%";
		$statement = $this->connection->prepare($sql0);
		$statement->bindValue(':key',$key,PDO::PARAM_STR);
		$statement->bindValue(':key1',$key,PDO::PARAM_STR);
		$statement->bindValue(':key2',$key,PDO::PARAM_STR);
		$statement->bindValue(':key3',$key,PDO::PARAM_STR);
		$statement->bindValue(':key4',$key,PDO::PARAM_STR);
		$statement->bindValue(':key5',$key,PDO::PARAM_STR);
		$statement->bindValue(':key6',$key,PDO::PARAM_STR);
		$statement->bindValue(':key7',$key,PDO::PARAM_STR);
		$statement->bindValue(':key8',$key,PDO::PARAM_STR);
		$statement->bindValue(':key9',$key,PDO::PARAM_STR);
		$statement->bindValue(':key10',$key,PDO::PARAM_STR);
		$statement->bindValue(':key11',$key,PDO::PARAM_STR);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return json_encode($fetch);
	}
		//id_danakeluar, nomor_danakeluar, tanggal_danakeluar, dibayarkepada_danakeluar, rekening_danakeluar, namabank_danakeluar, jumlah_danakeluar, carapembayaran_danakeluar, keterangan_danakeluar, status_danakeluar
	
	
	public function insert($nomor_danakeluar, $tanggal_danakeluar, $dibayarkepada_danakeluar, $rekening_danakeluar, $namabank_danakeluar, $jumlah_danakeluar, $carapembayaran_danakeluar,$nomorcekgiro_danakeluar, $keterangan_danakeluar, $status_danakeluar, $tanggaljatuhtempo_danakeluar){
		$tutupBuku = new tutupBuku_model();
		$statusBuku = $tutupBuku->getTutupBukuStatusByDate($tanggal_danakeluar);
		if ($statusBuku) {
			$error = [
                'status' => 'gagal',
                'response' => "Gagal, anda tidak bisa menginput pada tanggal buku yang sudah tutup!",                
            ];
			return $error;
		}
		$findNomor = "SELECT * FROM danakeluar WHERE nomor_danakeluar = :nomor";
        $state = $this->connection->prepare($findNomor);
        $state->bindValue(':nomor', $nomor_danakeluar, PDO::PARAM_STR);
        $state->execute();
        $fetch = $state->fetchAll(); 
        $state->closeCursor();

        if(count($fetch) > 0){
			/*
            $error = [
                'status' => 'already',
                'response' => "Nomor Dana Keluar Telah Digunakan",
            ];
			return $error;
			*/

			$nomor_danakeluar = $this->create_number($rekening_danakeluar, $tanggal_danakeluar);
        }

	   try{	
			//$sql0 = "SELECT COUNT(id_dana_keluar) FROM dana_keluar;";
			$sql0 = "INSERT INTO danakeluar( nomor_danakeluar, tanggal_danakeluar, dibayarkepada_danakeluar, rekening_danakeluar, namabank_danakeluar, jumlah_danakeluar, carapembayaran_danakeluar, nomorcekgiro_danakeluar, keterangan_danakeluar, status_danakeluar) VALUES( :nomor_danakeluar, :tanggal_danakeluar, :dibayarkepada_danakeluar, :rekening_danakeluar, :namabank_danakeluar, :jumlah_danakeluar, :carapembayaran_danakeluar, :nomorcekgiro_danakeluar, :keterangan_danakeluar, :status_danakeluar)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomor_danakeluar',$nomor_danakeluar);
			$statement->bindValue(':tanggal_danakeluar',$tanggal_danakeluar);
			$statement->bindValue(':dibayarkepada_danakeluar',$dibayarkepada_danakeluar);
			$statement->bindValue(':rekening_danakeluar',$rekening_danakeluar);
			$statement->bindValue(':namabank_danakeluar',$namabank_danakeluar);
			$statement->bindValue(':jumlah_danakeluar',$jumlah_danakeluar);
			$statement->bindValue(':carapembayaran_danakeluar',$carapembayaran_danakeluar);
			$statement->bindValue(':nomorcekgiro_danakeluar',$nomorcekgiro_danakeluar);
			$statement->bindValue(':keterangan_danakeluar',$keterangan_danakeluar);
			// $statement->bindValue(':status_danakeluar',$status_danakeluar);
			$statement->bindValue(':status_danakeluar','T');
			// $statement->bindValue(':tanggaljatuhtempo_danakeluar',$tanggaljatuhtempo_danakeluar);
			// $statement->bindValue(':tanggaljatuhtempo_danakeluar',"");
			$statement->execute();
			$statement->closeCursor();
			$sql1 = "SELECT id_danakeluar FROM danakeluar WHERE nomor_danakeluar= :nomor_danakeluar  AND  tanggal_danakeluar= :tanggal_danakeluar  AND  dibayarkepada_danakeluar= :dibayarkepada_danakeluar   AND  jumlah_danakeluar= :jumlah_danakeluar  AND  carapembayaran_danakeluar= :carapembayaran_danakeluar AND nomorcekgiro_danakeluar =:nomorcekgiro_danakeluar  AND  keterangan_danakeluar= :keterangan_danakeluar  ;";
			$statement = $this->connection->prepare($sql1);
			$statement->bindValue(':nomor_danakeluar',$nomor_danakeluar);
			$statement->bindValue(':tanggal_danakeluar',$tanggal_danakeluar);
			$statement->bindValue(':dibayarkepada_danakeluar',$dibayarkepada_danakeluar);
// 			AND  rekening_danakeluar= :rekening_danakeluar
// 			$statement->bindValue(':rekening_danakeluar',$rekening_danakeluar);
// 			AND  namabank_danakeluar= :namabank_danakeluar
// 			$statement->bindValue(':namabank_danakeluar',$namabank_danakeluar);
			$statement->bindValue(':jumlah_danakeluar',$jumlah_danakeluar);
			$statement->bindValue(':carapembayaran_danakeluar',$carapembayaran_danakeluar);
			$statement->bindValue(':nomorcekgiro_danakeluar',$nomorcekgiro_danakeluar);
			$statement->bindValue(':keterangan_danakeluar',$keterangan_danakeluar);
// 			AND tanggaljatuhtempo_danakeluar= :tanggaljatuhtempo_danakeluar 
// 			$statement->bindValue(':tanggaljatuhtempo_danakeluar',$tanggaljatuhtempo_danakeluar);
			$statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			return $fetch[0]['id_danakeluar'];
		}
		catch(PDOException $e){
			$error = [
                'status' => 'gagal',
                'response' => "Terjadi Kesalahan, silahkan Submit ulang",                
            ];
			return $error;
			//return "gagal";
		}
	}
	
	//id_detail_dana_keluar, id_dana_keluar, no_rekening, uraian, nilai, departemen, program
	public function insert_detail( $id_dana_keluar, $no_rekening, $uraian, $nilai, $posisi, $program, $departemen){
		try{
			$sql0 = "INSERT INTO danakeluar_detail( id_dana_keluar, no_rekening, uraian, nilai, posisi, program, departemen) 
			VALUES(:id_dana_keluar, :no_rekening, :uraian, :nilai, :posisi, :program, :departemen);";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_dana_keluar',$id_dana_keluar);
			$statement->bindValue(':no_rekening',$no_rekening);
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
	
//	public function update($id_danakeluar,$nomor_danakeluar, $tanggal_danakeluar, $dibayarkepada_danakeluar, $rekening_danakeluar, $namabank_danakeluar, $jumlah_danakeluar, $carapembayaran_danakeluar, $keterangan_danakeluar, $status_danakeluar){
//		try{
//			$sql0 = "UPDATE dana_keluar SET nomor_danakeluar = :nomor_danakeluar  ,  tanggal_danakeluar= :tanggal_danakeluar  ,  dibayarkepada_danakeluar= :dibayarkepada_danakeluar  ,  rekening_danakeluar= :rekening_danakeluar  ,  namabank_danakeluar= :namabank_danakeluar  ,  jumlah_danakeluar= :jumlah_danakeluar  ,  carapembayaran_danakeluar= :carapembayaran_danakeluar  ,  keterangan_danakeluar= :keterangan_danakeluar  ,  status_danakeluar = :status_danakeluar WHERE id_danakeluar = :id_danakeluar;";
//			$statement = $this->connection->prepare($sql0);
//			$statement->bindValue(':nomor_danakeluar',$nomor_danakeluar);
//			$statement->bindValue(':tanggal_danakeluar',$tanggal_danakeluar);
//			$statement->bindValue(':dibayarkepada_danakeluar',$dibayarkepada_danakeluar);
//			$statement->bindValue(':rekening_danakeluar',$rekening_danakeluar);
//			$statement->bindValue(':namabank_danakeluar',$namabank_danakeluar);
//			$statement->bindValue(':jumlah_danakeluar',$jumlah_danakeluar);
//			$statement->bindValue(':carapembayaran_danakeluar',$carapembayaran_danakeluar);
//			$statement->bindValue(':keterangan_danakeluar',$keterangan_danakeluar);
//			$statement->bindValue(':status_danakeluar',$status_danakeluar);
//			$statement->bindValue(':id_danakeluar',$id_danakeluar);
//			$statement->execute();
//			$statement->closeCursor();
//			return "Berhasil Memperbarui Data";
//		}
//		catch(PDOException $e){
//			return "gagal";
//		}
//	}

    public function update($id, $nomor_danakeluar, $tanggal_danakeluar, $dibayarkepada_danakeluar, $rekening_danakeluar, $namabank_danakeluar, $jumlah_danakeluar, $carapembayaran_danakeluar,$nomorcekgiro_danakeluar, $keterangan_danakeluar, $status_danakeluar, $tanggaljatuhtempo_danakeluar){
        try{
            $sql0 = "UPDATE danakeluar 
SET 
 nomor_danakeluar = :nomor_danakeluar,
 tanggal_danakeluar = :tanggal_danakeluar,
  dibayarkepada_danakeluar = :dibayarkepada_danakeluar,
   rekening_danakeluar = :rekening_danakeluar,
    namabank_danakeluar = :namabank_danakeluar,
     jumlah_danakeluar = :jumlah_danakeluar,
      carapembayaran_danakeluar = :carapembayaran_danakeluar,
       nomorcekgiro_danakeluar = :nomorcekgiro_danakeluar,
       keterangan_danakeluar = :keterangan_danakeluar,
        status_danakeluar = :status_danakeluar
          WHERE 
          id_danakeluar = :id ";
        //  tanggaljatuhtempo_danakeluar = :tanggaljatuhtempo_danakeluar
          // die();
            $statement = $this->connection->prepare($sql0);
            $statement->bindValue(':id',$id);
            $statement->bindValue(':nomor_danakeluar',$nomor_danakeluar);
            $statement->bindValue(':tanggal_danakeluar',$tanggal_danakeluar);
            $statement->bindValue(':dibayarkepada_danakeluar',$dibayarkepada_danakeluar);
            $statement->bindValue(':rekening_danakeluar',$rekening_danakeluar);
            $statement->bindValue(':namabank_danakeluar',$namabank_danakeluar);
            $statement->bindValue(':jumlah_danakeluar',$jumlah_danakeluar);
            $statement->bindValue(':carapembayaran_danakeluar',$carapembayaran_danakeluar);
            $statement->bindValue(':nomorcekgiro_danakeluar',$nomorcekgiro_danakeluar);
            $statement->bindValue(':keterangan_danakeluar',$keterangan_danakeluar);
            // $statement->bindValue(':status_danakeluar',$status_danakeluar);
            $statement->bindValue(':status_danakeluar','T');
            // $statement->bindValue(':tanggaljatuhtempo_danakeluar',$tanggaljatuhtempo_danakeluar);
            $statement->execute();
            $statement->closeCursor();
            return "berhasil";
        }
        catch(PDOException $e){
            return "gagal";
        }
    }
	
	public function delete($id_danakeluar){
		try{	
			//$sql0 = "SELECT COUNT(id_dana_keluar) FROM dana_keluar;";
			$sql0 = "DELETE FROM dana_keluar WHERE id_danakeluar = :id_danakeluar;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_danakeluar',$id_danakeluar);
			$statement->execute();
			$statement->closeCursor();
			return "Berhasil Menghapus Data";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}

    public function delete_detail($id_danakeluar){
        $sql0 = "DELETE FROM danakeluar_detail WHERE id_dana_keluar = :id_danakeluar;";
        $statement = $this->connection->prepare($sql0);
        $statement->bindValue(':id_danakeluar',$id_danakeluar);
        $statement->execute();
        $statement->closeCursor();
        return "Berhasil Menghapus Data";
    }
}
?>