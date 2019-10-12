<?php
require_once("model/buku_besar_model.php");
class buku_besar_controller{
	private $model;
	
	public function __construct(){
		$this->model = new buku_besar_model();
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
		else if($kode === "cari_rekening"){
			$hasil = $this->cari_rekening();
			return $hasil;
		}
    else if($kode === "cari_detail_rekening"){
			$hasil = $this->cari_detail_rekening();
			return $hasil;
		}
		else if($kode === "cari_rekening_tanggal") {
            $hasil = $this->cari_rekening_tanggal();
            return $hasil;
		}
		else if($kode === "cari_saldoawal"){
			$hasil = $this->cari_saldo();
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
		$hasil = $this->model->insert($_POST['nomor_jurnal'],$_POST['keterangan_jurnal'],$_POST['tanggal_jurnal']);
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
		$hasil = $this->model->insert_detail($_POST['nomor_jurnal'],$_POST['nomor_rekening'],$_POST['uraian'],$_POST['debit_jurnal'],$_POST['kredit_jurnal'],$_POST['nama_departemen'],$_POST['nama_program']);
		return $hasil;
	}
	
	private function ubah_detail(){
		$hasil = $this->model->update_detail();
		return $hasil;
	}
	
	private function cari_rekening(){
		$hasil = $this->model->cari_rekening($_POST['nomor_rekening']);
		return $hasil;	
	}

  private function cari_detail_rekening()
  {
    $hasil = $this->model->cari_detail_rekening($_POST['nomor_rekening']);
		return $hasil;	
  }

    private function cari_rekening_tanggal(){
        $hasil = $this->model->cari_rekening_tanggal($_POST['nomor_rekening'],$_POST['tanggal_awal'],$_POST['tanggal_akhir']);
        return $hasil;
    }
	
	private function cari_saldo(){
		$hasil = $this->model->cari_saldo($_POST['nomor_rekening']);
		return $hasil;
	}
}
?>