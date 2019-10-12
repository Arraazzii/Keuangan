<?php
require_once("model/jurnal_memorial_model.php");
require_once("model/tutupBuku_model.php");
class jurnal_memorial_controller{
	private $model;
	
	public function __construct(){
		$this->model = new jurnal_memorial_model();
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
		
		else if($kode === "ubah_detail"){
			$hasil = $this->tambah_detail();
			return $hasil;
		}

		else if($kode === "hapus_detail"){
			$hasil = $this->hapus_detail();
			return $hasil;
		}

		else if($kode === "update"){
		    $hasil = $this->update();
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
	
	
	//nomor_jurnal, keterangan_jurnal, tanggal_jurnal
	private function tambah(){
		$tutupBuku = new tutupBuku_model();
		$statusBuku = $tutupBuku->getTutupBukuStatus();
		if ($statusBuku == "tutup") {
			return "gagal";
		}
		$hasil = $this->model->insert($_POST['nomor_jurnal'],$_POST['keterangan_jurnal'],$_POST['tanggal_jurnal'],$_POST['status_jurnal']);
		return $hasil;
	}
	//nomor_jurnal, nomor_rekening, uraian, debit_jurnal, kredit_jurnal, nama_departemen, nama_program
	private function ubah(){
		$hasil = $this->model->update($_POST['nomor_jurnal'],$_POST['nomor_rekening'],$_POST['uraian'],$_POST['debit_jurnal'],$_POST['kredit_jurnal'],$_POST['nama_departemen'],$_POST['nama_program']);
		return $hasil;
	}
	
	private function hapus(){
		$hasil = $this->model->delete($_POST['nomor_jurnal']);
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
	
	//nomor_jurnal, nomor_rekening, uraian, debit_jurnal, kredit_jurnal, nama_departemen, nama_program
	private function tambah_detail(){
		$hasil = $this->model->insert_detail($_POST['old_nomor_jurnal'],$_POST['id_dana_masuk'],$_POST['no_rekening'],$_POST['uraian'],$_POST['nilai'],$_POST['posisi'],$_POST['jenisprogram'],$_POST['departemen']);
		return $hasil;
	}
	
	private function ubah_detail(){
		$hasil = $this->model->update_detail();
		return $hasil;
	}

	private function update(){
        $hasil = $this->model->update($_POST['old_nomor_jurnal'], $_POST['nomor_jurnal'], $_POST['keterangan_jurnal'] ,$_POST['tanggal_jurnal']);
        return $hasil;
	}
	private function hapus_detail(){
        $hasil = $this->model->delete_detail($_POST['nomor_jurnal']);
        return $hasil;
    }
}
?>