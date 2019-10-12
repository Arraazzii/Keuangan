<?php
require_once("model/koderekening_model.php");
class koderekening_controller{
	private $model;
	
	public function __construct(){
		$this->model = new koderekening_model();
	}
	
	public function invoke($kode){
		if($kode === "baca"){
			$hasil = $this->baca();
			return $hasil;
		}
		else if($kode === "baca_parent"){
			$hasil = $this->baca_parent();
			return $hasil;
		}
		else if($kode === "baca_json"){
			$hasil = $this->baca_json();
			return $hasil;
		}
		else if($kode === "worksheet"){
			$hasil = $this->worksheet();
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
	}
	
	private function baca(){
		$hasil = $this->model->all();
		return $hasil;
	}
	
	private function baca_json(){
		$hasil = $this->model->all_json();
		return $hasil;
	}

	private function baca_parent(){
		$hasil = $this->model->all_parent();
		return $hasil;
	}

	private function worksheet(){
		$hasil = $this->model->worksheet($_POST['tanggal_awal_worksheet'], $_POST['tanggal_akhir_worksheet']);
		return $hasil;
	}
	
	private function tambah(){
		$hasil = $this->model->insert($_POST['kelompok_koderekening'],$_POST['koderekening'],$_POST['uraian_koderekening']);
		return $hasil;
	}
	
	private function ubah(){
		$hasil = $this->model->update($_POST['id_koderekening'],$_POST['kelompok_koderekening'],$_POST['koderekening'],$_POST['uraian_koderekening']);
		return $hasil;
	}
	
	private function hapus(){
		$hasil = $this->model->delete($_POST['id_koderekening']);
		return $hasil;
	}
	
	private function cari(){
		$hasil = $this->model->select($_POST['cari']);
		return $hasil;
	}	
}
?>