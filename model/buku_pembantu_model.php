<?php
require_once("koneksi.php");
class buku_pembantu_model{
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
			for($i = 0 ; $i < (5 - strlen($id)); $i++){
				$nol .= "0";
			}
			$nol .= $id;
			return $nol."/JM/".Date('m/Y');
			
		}
		catch(PDOException $e){
			return $e;
			//return "gagal";
		}
		
	}
	
	public function all(){
        $sql0 = "SELECT
kelompokrekening.status_kelompokrekening,
saldoawal.koderekening AS nomor,
koderekening.uraian_koderekening
FROM
saldoawal
LEFT JOIN koderekening ON saldoawal.koderekening = koderekening.koderekening
LEFT JOIN kelompokrekening ON koderekening.kelompok_koderekening = kelompokrekening.nopokok_kelompokrekening 
WHERE
SUBSTRING(koderekening.koderekening, 16, 2) != '00'
ORDER BY nomor ASC ;";

        $statement = $this->connection->prepare($sql0);
        $statement->execute();
        $fetch = $statement->fetchAll();
        $statement->closeCursor();
        return $fetch;//json_encode($fetch);
	}
	
	
//	public function cari_rekening($nomor_rekening){
//        $sql0 = "SELECT
//	jurnal.tanggal_jurnal,
//	jurnal_detail.id_detail_jurnal,
//	jurnal_detail.nomor_jurnal,
//	jurnal_detail.nomor_rekening,
//	jurnal_detail.uraian,
//	jurnal_detail.posisi,
//	jurnal_detail.nilai,
//	kelompokrekening.status_kelompokrekening,
//	departemen.nama_departemen,
//	jenisprogram.namajenis_jenisprogram
//FROM
//	jurnal,
//	jurnal_detail,
//	kelompokrekening,
//	departemen,
//	jenisprogram
//WHERE
//	jurnal_detail.nomor_jurnal = jurnal.nomor_jurnal
//AND REPLACE(SUBSTRING_INDEX(nomor_rekening,'.',3),CONCAT(SUBSTRING_INDEX(nomor_rekening,'.',2),'.'),'') = REPLACE(SUBSTRING_INDEX(:nomor_rekening1,'.',3),CONCAT(SUBSTRING_INDEX(:nomor_rekening2,'.',2),'.'),'')
//AND SUBSTRING_INDEX(nomor_rekening, '.', 1) = kelompokrekening.nopokok_kelompokrekening
//AND SUBSTRING_INDEX(nomor_rekening, '.', 4) = CONCAT(SUBSTRING_INDEX(nomor_rekening, '.', 3), CONCAT('.0', departemen.nomor_departemen))
//AND SUBSTRING_INDEX(nomor_rekening, '.', 3) = CONCAT(SUBSTRING_INDEX(nomor_rekening, '.', 2), CONCAT('.', jenisprogram.nomer_jenisprogram));";
//        $statement = $this->connection->prepare($sql0);
//        $statement->bindValue(':nomor_rekening1',$nomor_rekening);
//        $statement->bindValue(':nomor_rekening2',$nomor_rekening);
//        $statement->execute();
//        $fetch1 = $statement->fetchAll();
//        $statement->closeCursor();
//
//        $sql1 = "SELECT
//	danamasuk.tanggal_danamasuk AS tanggal_jurnal,
//	danamasuk_detail.id_detail_dana_masuk AS id_detail_jurnal,
//	danamasuk_detail.id_dana_masuk AS nomor_jurnal,
//	danamasuk_detail.no_rekening AS nomor_rekening,
//	danamasuk_detail.uraian,
//	danamasuk_detail.posisi,
//	danamasuk_detail.nilai,
//	kelompokrekening.status_kelompokrekening,
//	departemen.nama_departemen,
//	jenisprogram.namajenis_jenisprogram
//FROM
//	danamasuk,
//	danamasuk_detail,
//	kelompokrekening,
//	departemen,
//	jenisprogram
//WHERE
//	danamasuk_detail.id_dana_masuk = danamasuk.id_danamasuk
//AND REPLACE(SUBSTRING_INDEX(no_rekening,'.',3),CONCAT(SUBSTRING_INDEX(no_rekening,'.',2),'.'),'') = REPLACE(SUBSTRING_INDEX(:nomor_rekening1,'.',3),CONCAT(SUBSTRING_INDEX(:nomor_rekening2,'.',2),'.'),'')
//AND SUBSTRING_INDEX(no_rekening, '.', 1) = kelompokrekening.nopokok_kelompokrekening
//AND SUBSTRING_INDEX(no_rekening, '.', 4) = CONCAT(SUBSTRING_INDEX(no_rekening, '.', 3), CONCAT('.0', departemen.nomor_departemen))
//AND SUBSTRING_INDEX(no_rekening, '.', 3) = CONCAT(SUBSTRING_INDEX(no_rekening, '.', 2), CONCAT('.', jenisprogram.nomer_jenisprogram));";
//        $statement = $this->connection->prepare($sql1);
//        $statement->bindValue(':nomor_rekening1',$nomor_rekening);
//        $statement->bindValue(':nomor_rekening2',$nomor_rekening);
//        $statement->execute();
//        $fetch2 = $statement->fetchAll();
//        $statement->closeCursor();
//
//
//        $sql2 = "SELECT
//	danakeluar.tanggal_danakeluar AS tanggal_jurnal,
//	danakeluar_detail.id_detail_dana_keluar AS id_detail_jurnal,
//	danakeluar_detail.id_dana_keluar AS nomor_jurnal,
//	danakeluar_detail.no_rekening AS nomor_rekening,
//	danakeluar_detail.uraian,
//	danakeluar_detail.posisi,
//	danakeluar_detail.nilai,
//	kelompokrekening.status_kelompokrekening,
//	departemen.nama_departemen,
//	jenisprogram.namajenis_jenisprogram
//FROM
//	danakeluar,
//	danakeluar_detail,
//	kelompokrekening,
//	departemen,
//	jenisprogram
//WHERE
//	danakeluar_detail.id_dana_keluar = danakeluar_detail.id_dana_keluar
//AND REPLACE(SUBSTRING_INDEX(no_rekening,'.',3),CONCAT(SUBSTRING_INDEX(no_rekening,'.',2),'.'),'') = REPLACE(SUBSTRING_INDEX(:nomor_rekening1,'.',3),CONCAT(SUBSTRING_INDEX(:nomor_rekening2,'.',2),'.'),'')
//AND SUBSTRING_INDEX(no_rekening, '.', 1) = kelompokrekening.nopokok_kelompokrekening
//AND SUBSTRING_INDEX(no_rekening, '.', 4) = CONCAT(SUBSTRING_INDEX(no_rekening, '.', 3), CONCAT('.0', departemen.nomor_departemen))
//AND SUBSTRING_INDEX(no_rekening, '.', 3) = CONCAT(SUBSTRING_INDEX(no_rekening, '.', 2), CONCAT('.', jenisprogram.nomer_jenisprogram));";
//        $statement = $this->connection->prepare($sql2);
//        $statement->bindValue(':nomor_rekening1',$nomor_rekening);
//        $statement->bindValue(':nomor_rekening2',$nomor_rekening);
//        $statement->execute();
//        $fetch3 = $statement->fetchAll();
//        $statement->closeCursor();
//        return json_encode(array_merge($fetch1,$fetch2,$fetch3));
//	}


    public function cari_rekening($nomor_rekening){
        $sql0 = "SELECT
	jurnal.tanggal_jurnal,
	jurnal_detail.id_detail_jurnal,
	jurnal_detail.nomor_jurnal,
	jurnal_detail.nomor_rekening,
  ('jurnal') as jenis,
	jurnal_detail.uraian,
	jurnal_detail.posisi,
	jurnal_detail.nilai,
	kelompokrekening.status_kelompokrekening,
	jurnal_detail.departemen as nama_departemen,
	jurnal_detail.program as namajenis_jenisprogram,
	jurnal.nomor_jurnal as ref
FROM
	jurnal,
	jurnal_detail,
	kelompokrekening
WHERE
	jurnal_detail.nomor_jurnal = jurnal.nomor_jurnal
	AND
	 nomor_rekening = :nomor_rekening1
	AND
	jurnal.status_jurnal = 'Y'
	AND
    SUBSTRING_INDEX(nomor_rekening, '.', 1) = kelompokrekening.nopokok_kelompokrekening";
        $statement = $this->connection->prepare($sql0);
        $statement->bindValue(':nomor_rekening1',$nomor_rekening);
//        $statement->bindValue(':nomor_rekening2',$nomor_rekening);
        $statement->execute();
        $fetch1 = $statement->fetchAll();
        $statement->closeCursor();

        $sql1 = "SELECT
	danamasuk.tanggal_danamasuk AS tanggal_jurnal,
	danamasuk_detail.id_detail_dana_masuk AS id_detail_jurnal,
	danamasuk_detail.id_dana_masuk AS nomor_jurnal,
	danamasuk_detail.no_rekening AS nomor_rekening,
  ('danamasuk') as jenis,
	danamasuk_detail.uraian,
	danamasuk_detail.posisi,
	danamasuk_detail.nilai,
	kelompokrekening.status_kelompokrekening,
	danamasuk_detail.departemen as nama_departemen,
	danamasuk_detail.program as namajenis_jenisprogram,
	danamasuk.nomor_danamasuk as ref, 
	danamasuk.diterimadari_danamasuk as status
FROM
	danamasuk,
	danamasuk_detail,
	kelompokrekening
WHERE
	danamasuk_detail.id_dana_masuk = danamasuk.id_danamasuk
AND
	danamasuk.status_danamasuk = 'Y' 
AND
    no_rekening = :nomor_rekening1
AND 
    SUBSTRING_INDEX(no_rekening, '.', 1) = kelompokrekening.nopokok_kelompokrekening ;";
        $statement = $this->connection->prepare($sql1);
        $statement->bindValue(':nomor_rekening1',$nomor_rekening);
//        $statement->bindValue(':nomor_rekening2',$nomor_rekening);
        $statement->execute();
        $fetch2 = $statement->fetchAll();
        $statement->closeCursor();

        $sql2 = "SELECT
	danakeluar.tanggal_danakeluar AS tanggal_jurnal,
	danakeluar_detail.id_detail_dana_keluar AS id_detail_jurnal,
	danakeluar_detail.id_dana_keluar AS nomor_jurnal,
	danakeluar_detail.no_rekening AS nomor_rekening,
  ('danakeluar') as jenis,
	danakeluar_detail.uraian,
	danakeluar_detail.posisi,
	danakeluar_detail.nilai,
	kelompokrekening.status_kelompokrekening,
	danakeluar_detail.departemen as nama_departemen,
	danakeluar_detail.program as namajenis_jenisprogram,
	danakeluar.nomor_danakeluar as ref,
	danakeluar.dibayarkepada_danakeluar as status
FROM
	danakeluar,
	danakeluar_detail,
	kelompokrekening
WHERE
	danakeluar_detail.id_dana_keluar = danakeluar.id_danakeluar
AND

danakeluar.status_danakeluar = 'Y'

AND
    no_rekening = :nomor_rekening1
AND 
    SUBSTRING_INDEX(no_rekening, '.', 1) = kelompokrekening.nopokok_kelompokrekening ;";

        $statement = $this->connection->prepare($sql2);
        $statement->bindValue(':nomor_rekening1',$nomor_rekening);
//        $statement->bindValue(':nomor_rekening2',$nomor_rekening);
        $statement->execute();
        $fetch3 = $statement->fetchAll();
        $statement->closeCursor();
        return json_encode(array_merge($fetch1,$fetch2,$fetch3));
    }

    public function cari_detail_rekening($nomor_rekening)
  {
    $sql2 = "SELECT * 
    FROM koderekening kode 
    LEFT JOIN kelompokrekening kelompok ON SUBSTRING_INDEX(kode.koderekening, '.', 1) = kelompok.nopokok_kelompokrekening
    WHERE kode.koderekening = :nomor_rekening1";

        $statement = $this->connection->prepare($sql2);
        $statement->bindValue(':nomor_rekening1',$nomor_rekening);
        $statement->execute();
        $detail_rekening = $statement->fetchAll();
        $statement->closeCursor();
        return json_encode($detail_rekening[0]);
  }


    public function cari_rekening_tanggal($nomor_rekening,$tanggal_awal, $tanggal_akhir){
        $sql0 = "SELECT
	jurnal.tanggal_jurnal,
	jurnal_detail.id_detail_jurnal,
	jurnal_detail.nomor_jurnal,
	jurnal_detail.nomor_rekening,
  ('jurnal') as jenis,
	jurnal_detail.uraian,
	jurnal_detail.posisi,
	jurnal_detail.nilai,
	kelompokrekening.status_kelompokrekening,
	jurnal_detail.departemen as nama_departemen,
	jurnal_detail.program as namajenis_jenisprogram,
	jurnal.nomor_jurnal as ref
FROM
	jurnal,
	jurnal_detail,
	kelompokrekening
WHERE
	jurnal_detail.nomor_jurnal = jurnal.nomor_jurnal
	AND
	jurnal.status_jurnal = 'Y'
	AND
	 nomor_rekening = :nomor_rekening1
	AND
    SUBSTRING_INDEX(nomor_rekening, '.', 1) = kelompokrekening.nopokok_kelompokrekening
    AND 
	  jurnal.tanggal_jurnal >= :tanggal_awal
	AND 
		jurnal.tanggal_jurnal <= :tanggal_akhir";
        $statement = $this->connection->prepare($sql0);
        $statement->bindValue(':nomor_rekening1',$nomor_rekening);
        $statement->bindValue(':tanggal_awal',$tanggal_awal);
        $statement->bindValue(':tanggal_akhir',$tanggal_akhir);
        $statement->execute();
        $fetch1 = $statement->fetchAll();
        $statement->closeCursor();

        $sql1 = "SELECT
	danamasuk.tanggal_danamasuk AS tanggal_jurnal,
	danamasuk_detail.id_detail_dana_masuk AS id_detail_jurnal,
	danamasuk_detail.id_dana_masuk AS nomor_jurnal,
	danamasuk_detail.no_rekening AS nomor_rekening,
  ('danamasuk') as jenis,
	danamasuk_detail.uraian,
	danamasuk_detail.posisi,
	danamasuk_detail.nilai,
	kelompokrekening.status_kelompokrekening,
	danamasuk_detail.departemen as nama_departemen,
	danamasuk_detail.program as namajenis_jenisprogram,
	danamasuk.nomor_danamasuk as ref,
	danamasuk.diterimadari_danamasuk as status
FROM
	danamasuk,
	danamasuk_detail,
	kelompokrekening
WHERE
	danamasuk_detail.id_dana_masuk = danamasuk.id_danamasuk
AND
danamasuk.status_danamasuk = 'Y' 
AND
    SUBSTRING_INDEX(no_rekening, '.', 2) = SUBSTRING_INDEX(:nomor_rekening1, '.', 2)
AND 
    SUBSTRING_INDEX(no_rekening, '.', 1) = kelompokrekening.nopokok_kelompokrekening 
AND 
	danamasuk.tanggal_danamasuk >= :tanggal_awal
AND 
	danamasuk.tanggal_danamasuk <= :tanggal_akhir;";
        $statement = $this->connection->prepare($sql1);
        $statement->bindValue(':nomor_rekening1',$nomor_rekening);
        $statement->bindValue(':tanggal_awal',$tanggal_awal);
        $statement->bindValue(':tanggal_akhir',$tanggal_akhir);
        $statement->execute();
        $fetch2 = $statement->fetchAll();
        $statement->closeCursor();

        $sql2 = "SELECT
	danakeluar.tanggal_danakeluar AS tanggal_jurnal,
	danakeluar_detail.id_detail_dana_keluar AS id_detail_jurnal,
	danakeluar_detail.id_dana_keluar AS nomor_jurnal,
	danakeluar_detail.no_rekening AS nomor_rekening,
  ('danakeluar') as jenis,
	danakeluar_detail.uraian,
	danakeluar_detail.posisi,
	danakeluar_detail.nilai,
	kelompokrekening.status_kelompokrekening,
	danakeluar_detail.departemen as nama_departemen,
	danakeluar_detail.program as namajenis_jenisprogram,
	danakeluar.nomor_danakeluar as ref,
	danakeluar.dibayarkepada_danakeluar as status
FROM
	danakeluar,
	danakeluar_detail,
	kelompokrekening
WHERE
	danakeluar_detail.id_dana_keluar = danakeluar.id_danakeluar
AND
	danakeluar.status_danakeluar = 'Y' 
AND
    SUBSTRING_INDEX(no_rekening, '.', 2) = SUBSTRING_INDEX(:nomor_rekening1, '.', 2)
AND 
    SUBSTRING_INDEX(no_rekening, '.', 1) = kelompokrekening.nopokok_kelompokrekening 
AND 
	danakeluar.tanggal_danakeluar >= :tanggal_awal
AND 
	danakeluar.tanggal_danakeluar <= :tanggal_akhir;";

        $statement = $this->connection->prepare($sql2);
        $statement->bindValue(':nomor_rekening1',$nomor_rekening);
        $statement->bindValue(':tanggal_awal',$tanggal_awal);
        $statement->bindValue(':tanggal_akhir',$tanggal_akhir);
        $statement->execute();
        $fetch3 = $statement->fetchAll();
        $statement->closeCursor();
        return json_encode(array_merge($fetch1,$fetch2,$fetch3));
    }


	public function cari_saldo($nomor_rekening){
		try{

            $nomor_rekening1 = explode('.',$nomor_rekening);
            $sql2 = "SELECT
saldoawal.koderekening, saldoawal.saldoawal
FROM
saldoawal
WHERE
SUBSTRING_INDEX(saldoawal.koderekening,'.',2) = CONCAT(SUBSTRING_INDEX(saldoawal.koderekening,'.',1),'.',:nomor_rekening1)
GROUP BY
saldoawal.koderekening";

            $statement = $this->connection->prepare($sql2);
            $statement->bindValue(':nomor_rekening1',$nomor_rekening1[1]);
//		$statement->bindValue(':nomor_rekening2',$nomor_rekening);
//		$statement->bindValue(':nomor_rekening3',$nomor_rekening);
            $statement->execute();
            $fetch3 = $statement->fetchAll();
            $statement->closeCursor();
            return json_encode($fetch3);
        }
        catch(PDOException $e){
            return $e;
        }
	}
	


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
	public function insert($nomor_jurnal, $keterangan_jurnal, $tanggal_jurnal){
	   try{				
			$sql0 = "INSERT INTO jurnal(nomor_jurnal, keterangan_jurnal, tanggal_jurnal) VALUES( :nomor_jurnal, :keterangan_jurnal, :tanggal_jurnal)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomor_jurnal',$nomor_jurnal);
			$statement->bindValue(':keterangan_jurnal',$keterangan_jurnal);
			$statement->bindValue(':tanggal_jurnal',$tanggal_jurnal);
			$statement->execute();
			$statement->closeCursor();			
			return "Berhasil";
		}
		catch(PDOException $e){
			return $e;
			//return "gagal";
		}
	}
	
	//id_detail_jurnal, nomor_jurnal, nomor_rekening, uraian, debit_jurnal, kredit_jurnal, nama_departemen, nama_program
	public function insert_detail( $nomor_jurnal, $nomor_rekening, $uraian, $debit_jurnal, $kredit_jurnal, $nama_departemen, $nama_program){
		try{
			
			$sql0 = "SELECT COUNT(id_detail_jurnal) AS id FROM jurnal_detail WHERE nomor_jurnal = :nomor_jurnal ;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomor_jurnal',$nomor_jurnal);
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
			
			
			$sql3 = "INSERT INTO jurnal_detail( id_detail_jurnal, nomor_jurnal, nomor_rekening, uraian, debit_jurnal, kredit_jurnal, nama_departemen, nama_program) 
			VALUES(:id_detail_jurnal, :nomor_jurnal, :nomor_rekening, :uraian, :debit_jurnal, :kredit_jurnal, :nama_departemen, :nama_program);";
			$statement = $this->connection->prepare($sql3);
			$statement->bindValue(':id_detail_jurnal',$id_detail_jurnal);
			$statement->bindValue(':nomor_jurnal',$nomor_jurnal);
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
	
	//nomor_jurnal, keterangan_jurnal, tanggal_jurnal
	public function update($nomor_jurnal, $keterangan_jurnal, $tanggal_jurnal){
		try{
			$sql0 = "UPDATE jurnal SET keterangan_jurnal = :keterangan_jurnal, tanggal_jurnal = :tanggal_jurnal WHERE nomor_jurnal = :nomor_jurnal;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':nomor_jurnal',$nomor_jurnal);
			$statement->bindValue(':keterangan_jurnal',$keterangan_jurnal);
			$statement->bindValue(':tanggal_jurnal',$tanggal_jurnal);
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
			//$sql0 = "SELECT COUNT(nomor_buku_besar) FROM buku_besar;";
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
	
	public function delete_detail($id_detail_jurnal){
		try{	

			//$sql0 = "SELECT COUNT(nomor_buku_besar) FROM buku_besar;";
			$sql0 = "DELETE FROM jurnal_detail WHERE id_detail_jurnal = :id_detail_jurnal;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_detail_jurnal',$id_detail_jurnal);
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