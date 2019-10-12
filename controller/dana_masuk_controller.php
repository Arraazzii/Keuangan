<?php
require_once("model/dana_masuk_model.php");
require_once("model/tutupBuku_model.php");
class dana_masuk_controller{
	private $model;
	
	public function __construct(){
		$this->model = new dana_masuk_model();
	}
	
	public function invoke($kode){
		if($kode === "baca"){
			$hasil = $this->baca();
			return $hasil;
		}
		else if($kode === "baca_json"){
			$hasil = $this->baca_json();
			return $hasil;
		}
		else if($kode === "tambah"){
			$hasil = $this->tambah();
			return $hasil;
		}
		else if($kode === "ubah"){
			$hasil = $this->ubah();
			return $hasil;
		}
		else if($kode === "hapus"){
			$hasil = $this->hapus();
			return $hasil;
		}
		else if($kode === "cari"){
			$hasil = $this->cari();
			return $hasil;
		}
		else if($kode === "id"){
			$hasil = $this->id();
			return $hasil;
		}
		
		else if($kode === "data_json"){
			$hasil = $this->data_json();
			return $hasil;
		}
		
		else if($kode === "tambah_detail"){
			$hasil = $this->tambah_detail();
			return $hasil;
		}

		else if($kode === "update"){
		    $hasil = $this->update();
		    return $hasil;
        }
        else if($kode === "hapus_detail"){
            $hasil = $this->hapus_detail();
            return $hasil;
		} 
		else if ($kode === "get_num_trans") {
			$hasil = $this->get_num_trans();
			return $hasil;
		}
	}
	
	private function baca(){
		$hasil = $this->model->all();
		return $hasil;
	}
	
	private function baca_json(){
		$hasil = $this->model->all_json();
		return $hasil;
	}
	
	private function data_json(){
		$hasil = $this->model->data_json();
		return $hasil;
	}
	
	
	//id_danamasuk, nomor_danamasuk, tanggal_danamasuk, diterimadari_danamasuk, rekening_danamasuk, namabank_danamasuk, jumlah_danamasuk, carapembayaran_danamasuk, keterangan_danamasuk, status_danamasuk
	private function tambah(){
		$tutupBuku = new tutupBuku_model();
		$statusBuku = $tutupBuku->getTutupBukuStatus();
		if ($statusBuku == "tutup") {
			return json_encode(["status" => "gagal"]);
		}

		$nomor_danamasuk = $this->model->create_number($_POST['rekening_danamasuk'],$_POST['tanggal_danamasuk']);

		$hasil = $this->model->insert($nomor_danamasuk, $_POST['tanggal_danamasuk'],$_POST['diterimadari_danamasuk'],$_POST['rekening_danamasuk'],$_POST['namabank_danamasuk'],$_POST['jumlah_danamasuk'],$_POST['carapembayaran_danamasuk'],$_POST['nomorcekgiro_danamasuk'],$_POST['keterangan_danamasuk'],$_POST['status_danamasuk'],$_POST['tanggaljatuhtempo_danamasuk']);
		return json_encode($hasil);
	}

	private function get_num_trans(){
		$nomor_danamasuk = $this->model->create_number($_POST['rekening_danamasuk'], $_POST['tanggal_danamasuk']);

		return $nomor_danamasuk;
	}
	
	private function ubah(){
		$hasil = $this->model->update($_POST['id_danamasuk'],$_POST['nomor_danamasuk'],$_POST['tanggal_danamasuk'],$_POST['diterimadari_danamasuk'],$_POST['rekening_danamasuk'],$_POST['namabank_danamasuk'],$_POST['jumlah_danamasuk'],$_POST['carapembayaran_danamasuk'],$_POST['keterangan_danamasuk'],$_POST['status_danamasuk']);
		return $hasil;
	}
	
	private function hapus(){
		$hasil = $this->model->delete($_POST['id_danamasuk']);
		return $hasil;
	}
	
	private function cari(){
		$hasil = $this->model->select($_POST['cari']);
		return $hasil;
	}	
	
	private function id(){
		$hasil = $this->model->create_id();
		return $hasil;
	}	
	
	//id_detail_dana_masuk, id_dana_masuk, no_rekening, uraian, nilai,jenisprogram, departemen
	private function tambah_detail(){
		$hasil = $this->model->insert_detail($_POST['id_dana_masuk'],$_POST['no_rekening'],$_POST['uraian'],$_POST['nilai'],$_POST['posisi'],$_POST['jenisprogram'],$_POST['departemen']);
		return $hasil;
	}

	private function update(){
        $hasil = $this->model->update($_POST['id'],$_POST['nomor_danamasuk'],$_POST['tanggal_danamasuk'],$_POST['diterimadari_danamasuk'],$_POST['rekening_danamasuk'],$_POST['namabank_danamasuk'],$_POST['jumlah_danamasuk'],$_POST['carapembayaran_danamasuk'],$_POST['nomorcekgiro_danamasuk'],$_POST['keterangan_danamasuk'],$_POST['status_danamasuk'],$_POST['tanggaljatuhtempo_danamasuk']);
        return $hasil;
    }

    private function hapus_detail(){
        $hasil = $this->model->delete_detail($_POST['id_danamasuk']);
        return $hasil;
    }
}
?>