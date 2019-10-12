<?php 
require_once("model/list_dana_keluar_model.php");
class list_dana_keluar_controller{
	
	private $model;
	
	public function __construct(){
		$this->model = new list_dana_keluar_model();
	}
	
	public function invoke($kode){
		if($kode === "baca"){
			$hasil = $this->baca();
			return $hasil;
		}
		else if($kode === "baca_detail"){
			$hasil = $this->baca_detail();
			return $hasil;
		}
		else if($kode === "baca_detail1"){
			$hasil = $this->baca_detail1();
			return $hasil;
		}
		else if($kode === "baca_json"){
			$hasil = $this->baca_json();
			return $hasil;
		}
		// else if($kode === "tambah"){
		// 	$hasil = $this->tambah();
		// 	return $hasil;
		// }
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

	private function baca_detail(){
		$hasil = $this->model->detail($_POST['iddanamasuk']);
		return $hasil;
	}
	private function baca_detail1(){
		$hasil = $this->model->detail1($_POST['iddanamasuk']);
		return $hasil;
	}
	
	// private function tambah(){
	// 	$hasil = $this->model->insert($_POST['nama_departemen'],$_POST['penanggung_jawab'],$_POST['keterangan']);
	// 	return $hasil;
	// }
	
	private function ubah(){
		$hasil = $this->model->update($_POST['iddanamasuk'],$_POST['status']);
		return $hasil;
	}
	
	private function hapus(){
		$hasil = $this->model->delete($_POST['iddanamasuk']);
		return $hasil;
	}
	
	private function cari(){
		$hasil = $this->model->select($_POST['datepicker8'],$_POST['datepicker9']);
		return $hasil;
	}	
}
?>