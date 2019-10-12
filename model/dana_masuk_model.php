<?php
require_once("koneksi.php");
require_once("tutupBuku_model.php");

class dana_masuk_model{
    private $db;
    private $connection;

    public function __construct(){
        $this->db = new koneksi();
        $this->connection = $this->db->createDatabase();
    }


    public function create_id(){
        try{
            $sql0 = "SELECT COUNT(id_danamasuk) AS id FROM danamasuk";
            $statement = $this->connection->prepare($sql0);
            $statement->execute();
            $fetch = $statement->fetchAll();
            $statement->closeCursor();
            $id = $fetch[0]['id'];
            $test = true;
            do{
                $id++;
                $sql1 = "SELECT COUNT(id_danamasuk) as id FROM danamasuk WHERE id_danamasuk = :id_danamasuk;";
                $statement = $this->connection->prepare($sql1);
                $statement->bindValue(':id_danamasuk',$id);
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
            return $nol."/DM/".Date('m/Y');

        }
        catch(PDOException $e){
            return $e;
            //return "gagal";
        }

    }

    public function create_number2($rekening_danamasuk, $tanggal_danamasuk){

            

            try{


                $rek = "";
                if ($rekening_danamasuk == "Kas") {
                    # code...
                    $rek = "KM";
                }
                else if ($rekening_danamasuk == "Bank") {
                    # code...
                    $rek  = "BM";
                }

                $tanggal = explode("/", $tanggal_danamasuk);

                $sql0 = "SELECT COUNT(id_danamasuk) AS id FROM danamasuk";
                $statement = $this->connection->prepare($sql0);
                $statement->execute();
                $fetch = $statement->fetchAll();
                $statement->closeCursor();
                $id = $fetch[0]['id'];
                $test = true;
                do{
                    $id++;
                    $sql1 = "SELECT COUNT(id_danamasuk) as id FROM danamasuk WHERE id_danamasuk = :id_danamasuk;";
                    $statement = $this->connection->prepare($sql1);
                    $statement->bindValue(':id_danamasuk',$id);
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
                // return $e;
                return "gagal";
            }


    }

    public function create_number($rekening_danamasuk, $tanggal_danamasuk){

            

            try{


                $rek = "";
                if ($rekening_danamasuk == "Kas") {
                    # code...
                    $rek = "KM";
                }
                else if ($rekening_danamasuk == "Bank") {
                    # code...
                    $rek  = "BM";
                }

                $tanggal = explode("/", $tanggal_danamasuk);

                $sql0 = "SELECT * FROM `danamasuk` ORDER BY id_danamasuk DESC LIMIT 1";
                $statement = $this->connection->prepare($sql0);
                $statement->execute();
                $fetch = $statement->fetchAll();
                $statement->closeCursor();
				$id = $fetch[0]['nomor_danamasuk'];
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
                // return $e;
                return "gagal";
            }


    }

    public function all(){
        $sql0 = "SELECT * FROM dana_masuk;";
        $statement = $this->connection->prepare($sql0);
        $statement->execute();
        $fetch = $statement->fetchAll();
        $statement->closeCursor();
        return $fetch;//json_encode($fetch);
    }

    public function all_json(){
        $sql0 = "SELECT * FROM dana_masuk;";
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
        $sql0 = "SELECT * FROM danamasuk WHERE nomor_danamasuk LIKE %:key%  OR  tanggal_danamasuk LIKE %:key1%  OR  diterimadari_danamasuk LIKE %:key2%  OR rekening_danamasuk LIKE %:key3%  OR  namabank_danamasuk LIKE %:key4%  OR  jumlah_danamasuk LIKE %:key5%  OR  carapembayaran_danamasuk LIKE %:key6%  OR nomorcekgiro_danamasuk LIKE %:key7% OR  keterangan_danamasuk LIKE %:key8%  OR  status_danamasuk  LIKE %:key9% OR id_danamasuk LIKE %:key10% OR tanggaljatuhtempo_danamasuk LIKE %:key11% ;";
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
    //id_danamasuk, nomor_danamasuk, tanggal_danamasuk, diterimadari_danamasuk, rekening_danamasuk, namabank_danamasuk, jumlah_danamasuk, carapembayaran_danamasuk, keterangan_danamasuk, status_danamasuk


    public function insert($nomor_danamasuk, $tanggal_danamasuk, $diterimadari_danamasuk, $rekening_danamasuk, $namabank_danamasuk, $jumlah_danamasuk, $carapembayaran_danamasuk,$nomorcekgiro_danamasuk, $keterangan_danamasuk, $status_danamasuk, $tanggaljatuhtempo_danamasuk){
        $tutupBuku = new tutupBuku_model();
		$statusBuku = $tutupBuku->getTutupBukuStatusByDate($tanggal_danamasuk);
		if ($statusBuku) {
            $error = [
                'status' => 'gagal',
                'response' => "Gagal, anda tidak bisa menginput pada tanggal buku yang sudah tutup!",                
            ];
            return $error;			
		}

        $findNomor = "SELECT * FROM danamasuk WHERE nomor_danamasuk = :nomor";
        $state = $this->connection->prepare($findNomor);
        $state->bindValue(':nomor', $nomor_danamasuk, PDO::PARAM_STR);
        $state->execute();
        $fetch = $state->fetchAll();
        $state->closeCursor();

        if(count($fetch) > 0){
            /*
            $error = [
                'status' => 'already',
                'response' => "Nomor Dana Masuk Telah Digunakan",
            ];
            return $error;
            */

            $nomor_danamasuk = $this->create_number($rekening_danamasuk, $tanggal_danamasuk);
        }

        try{
            //$sql0 = "SELECT COUNT(id_dana_masuk) FROM dana_masuk;";
            $sql0 = "INSERT INTO danamasuk( nomor_danamasuk, tanggal_danamasuk, diterimadari_danamasuk, rekening_danamasuk, namabank_danamasuk, jumlah_danamasuk, carapembayaran_danamasuk, nomorcekgiro_danamasuk,keterangan_danamasuk, status_danamasuk) VALUES( :nomor_danamasuk, :tanggal_danamasuk, :diterimadari_danamasuk, :rekening_danamasuk, :namabank_danamasuk, :jumlah_danamasuk, :carapembayaran_danamasuk, :nomorcekgiro_danamasuk, :keterangan_danamasuk, :status_danamasuk)";
            $statement = $this->connection->prepare($sql0);
            $statement->bindValue(':nomor_danamasuk',$nomor_danamasuk);
            $statement->bindValue(':tanggal_danamasuk',$tanggal_danamasuk);
            $statement->bindValue(':diterimadari_danamasuk',$diterimadari_danamasuk);
            $statement->bindValue(':rekening_danamasuk',$rekening_danamasuk);
            $statement->bindValue(':namabank_danamasuk',$namabank_danamasuk);
            $statement->bindValue(':jumlah_danamasuk',$jumlah_danamasuk);
            $statement->bindValue(':carapembayaran_danamasuk',$carapembayaran_danamasuk);
            $statement->bindValue(':nomorcekgiro_danamasuk',$nomorcekgiro_danamasuk);
            $statement->bindValue(':keterangan_danamasuk',$keterangan_danamasuk);
            // $statement->bindValue(':status_danamasuk',$status_danamasuk);
            $statement->bindValue(':status_danamasuk','T');
            // $statement->bindValue(':tanggaljatuhtempo_danamasuk',date_format(date_create("0000-00-00"), "Y-m-d"));
            $statement->execute();
            $statement->closeCursor();
            $sql1 = "SELECT id_danamasuk FROM danamasuk WHERE nomor_danamasuk= :nomor_danamasuk  AND  tanggal_danamasuk= :tanggal_danamasuk  AND  diterimadari_danamasuk= :diterimadari_danamasuk  AND  rekening_danamasuk= :rekening_danamasuk  AND  namabank_danamasuk= :namabank_danamasuk  AND  jumlah_danamasuk= :jumlah_danamasuk  AND  carapembayaran_danamasuk= :carapembayaran_danamasuk AND nomorcekgiro_danamasuk= :nomorcekgiro_danamasuk AND  keterangan_danamasuk= :keterangan_danamasuk;";
            $statement = $this->connection->prepare($sql1);
            $statement->bindValue(':nomor_danamasuk',$nomor_danamasuk);
            $statement->bindValue(':tanggal_danamasuk',$tanggal_danamasuk);
            $statement->bindValue(':diterimadari_danamasuk',$diterimadari_danamasuk);
            $statement->bindValue(':rekening_danamasuk',$rekening_danamasuk);
            $statement->bindValue(':namabank_danamasuk',$namabank_danamasuk);
            $statement->bindValue(':jumlah_danamasuk',$jumlah_danamasuk);
            $statement->bindValue(':carapembayaran_danamasuk',$carapembayaran_danamasuk);
            $statement->bindValue(':nomorcekgiro_danamasuk',$nomorcekgiro_danamasuk);
            $statement->bindValue(':keterangan_danamasuk',$keterangan_danamasuk);
            $statement->execute();
            $fetch = $statement->fetchAll();
            $statement->closeCursor();
            return $fetch[0]['id_danamasuk'];
        }
        catch(PDOException $e){
            // return $e;
            $error = [
                'status' => 'gagal',
                'response' => "Terjadi Kesalahan, silahkan Submit ulang",                
            ];
            return $error;
        }
    }

    //id_detail_dana_masuk, id_dana_masuk, no_rekening, uraian, nilai, departemen, program
    public function insert_detail( $id_dana_masuk, $no_rekening, $uraian, $nilai, $posisi, $program, $departemen){
        try{
            $sql0 = "INSERT INTO danamasuk_detail( id_dana_masuk, no_rekening, uraian, nilai, posisi, program, departemen) 
			VALUES(:id_dana_masuk, :no_rekening, :uraian, :nilai, :posisi, :program, :departemen);";
            $statement = $this->connection->prepare($sql0);
            $statement->bindValue(':id_dana_masuk',$id_dana_masuk);
            $statement->bindValue(':no_rekening',$no_rekening);
            $statement->bindValue(':uraian',$uraian);
            $statement->bindValue(':nilai',$nilai);
            $statement->bindValue(':posisi',$posisi);
            $statement->bindValue(':program',$program);
            $statement->bindValue(':departemen',$departemen);
            $statement->execute();
            $statement->closeCursor();
            return "Berhasil";		}
        catch(PDOException $e){
            return "Gagal";
        }
    }

//    public function update($id_danamasuk,$nomor_danamasuk, $tanggal_danamasuk, $diterimadari_danamasuk, $rekening_danamasuk, $namabank_danamasuk, $jumlah_danamasuk, $carapembayaran_danamasuk, $keterangan_danamasuk, $status_danamasuk){
//        try{
//            $sql0 = "UPDATE dana_masuk SET nomor_danamasuk = :nomor_danamasuk  ,  tanggal_danamasuk= :tanggal_danamasuk  ,  diterimadari_danamasuk= :diterimadari_danamasuk  ,  rekening_danamasuk= :rekening_danamasuk  ,  namabank_danamasuk= :namabank_danamasuk  ,  jumlah_danamasuk= :jumlah_danamasuk  ,  carapembayaran_danamasuk= :carapembayaran_danamasuk  ,  keterangan_danamasuk= :keterangan_danamasuk  ,  status_danamasuk = :status_danamasuk WHERE id_danamasuk = :id_danamasuk;";
//            $statement = $this->connection->prepare($sql0);
//            $statement->bindValue(':nomor_danamasuk',$nomor_danamasuk);
//            $statement->bindValue(':tanggal_danamasuk',$tanggal_danamasuk);
//            $statement->bindValue(':diterimadari_danamasuk',$diterimadari_danamasuk);
//            $statement->bindValue(':rekening_danamasuk',$rekening_danamasuk);
//            $statement->bindValue(':namabank_danamasuk',$namabank_danamasuk);
//            $statement->bindValue(':jumlah_danamasuk',$jumlah_danamasuk);
//            $statement->bindValue(':carapembayaran_danamasuk',$carapembayaran_danamasuk);
//            $statement->bindValue(':keterangan_danamasuk',$keterangan_danamasuk);
//            $statement->bindValue(':status_danamasuk',$status_danamasuk);
//            $statement->bindValue(':id_danamasuk',$id_danamasuk);
//            $statement->execute();
//            $statement->closeCursor();
//            return "Berhasil Memperbarui Data";
//        }
//        catch(PDOException $e){
//            return "gagal";
//        }
//    }

    public function update($id, $nomor_danamasuk, $tanggal_danamasuk, $diterimadari_danamasuk, $rekening_danamasuk, $namabank_danamasuk, $jumlah_danamasuk, $carapembayaran_danamasuk,$nomorcekgiro_danamasuk, $keterangan_danamasuk, $status_danamasuk, $tanggaljatuhtempo_danamasuk){
        try{
            $sql0 = "UPDATE danamasuk 
SET 
nomor_danamasuk = :nomor_danamasuk,
 tanggal_danamasuk = :tanggal_danamasuk,
  diterimadari_danamasuk = :diterimadari_danamasuk,
   rekening_danamasuk = :rekening_danamasuk,
    namabank_danamasuk = :namabank_danamasuk,
     jumlah_danamasuk = :jumlah_danamasuk,
      carapembayaran_danamasuk = :carapembayaran_danamasuk,
       nomorcekgiro_danamasuk = :nomorcekgiro_danamasuk,
       keterangan_danamasuk = :keterangan_danamasuk,
        status_danamasuk = :status_danamasuk
          WHERE 
          id_danamasuk = :id";
        //   nomor_danamasuk = :nomor_danamasuk";
        //  tanggaljatuhtempo_danamasuk = :tanggaljatuhtempo_danamasuk
            $statement = $this->connection->prepare($sql0);
            $statement->bindValue(':id', $id);
            $statement->bindValue(':nomor_danamasuk',$nomor_danamasuk);
            $statement->bindValue(':tanggal_danamasuk',$tanggal_danamasuk);
            $statement->bindValue(':diterimadari_danamasuk',$diterimadari_danamasuk);
            $statement->bindValue(':rekening_danamasuk',$rekening_danamasuk);
            $statement->bindValue(':namabank_danamasuk',$namabank_danamasuk);
            $statement->bindValue(':jumlah_danamasuk',$jumlah_danamasuk);
            $statement->bindValue(':carapembayaran_danamasuk',$carapembayaran_danamasuk);
            $statement->bindValue(':nomorcekgiro_danamasuk',$nomorcekgiro_danamasuk);
            $statement->bindValue(':keterangan_danamasuk',$keterangan_danamasuk);
            // $statement->bindValue(':status_danamasuk',$status_danamasuk);
            $statement->bindValue(':status_danamasuk','T');
            // $statement->bindValue(':tanggaljatuhtempo_danamasuk',$tanggaljatuhtempo_danamasuk);
            $statement->execute();
            $statement->closeCursor();
            return "berhasil";
        }
        catch(PDOException $e){
            return $e;
        }
    }

    public function delete($id_danamasuk){
        try{
            //$sql0 = "SELECT COUNT(id_dana_masuk) FROM dana_masuk;";
            $sql0 = "DELETE FROM dana_masuk WHERE id_danamasuk = :id_danamasuk;";
            $statement = $this->connection->prepare($sql0);
            $statement->bindValue(':id_danamasuk',$id_danamasuk);
            $statement->execute();
            $statement->closeCursor();
            return "Berhasil Menghapus Data";
        }
        catch(PDOException $e){
            return "gagal";
        }
    }

    public function delete_detail($id_danamasuk){
        $sql0 = "DELETE FROM danamasuk_detail WHERE id_dana_masuk = :id_danamasuk;";
        $statement = $this->connection->prepare($sql0);
        $statement->bindValue(':id_danamasuk',$id_danamasuk);
        $statement->execute();
        $statement->closeCursor();
        return "Berhasil Menghapus Data";
    }
}
?>