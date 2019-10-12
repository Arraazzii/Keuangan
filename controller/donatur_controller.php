<?php
require_once("model/donatur_model.php");
class donatur_controller{
	private $model;
	
	public function __construct(){
		$this->model = new donatur_model();
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
	}
	
	private function baca(){
		$hasil = $this->model->all();
		return $hasil;
	}
	
	private function baca_json(){
		$hasil = $this->model->all_json();
		return $hasil;
	}
	
	private function tambah(){
		$hasil = $this->model->insert($_POST['nama_investor'],$_POST['alamat_investor'],$_POST['nomortelepon_investor'],$_POST['email_investor']);
		return $hasil; 
	}
	
	private function ubah(){
		$hasil = $this->model->update($_POST['id_investor'],$_POST['nama_investor'],$_POST['alamat_investor'],$_POST['nomortelepon_investor'],$_POST['email_investor']);
		return $hasil;
	}
	
	private function hapus(){
		$hasil = $this->model->delete($_POST['id_investor']);
		return $hasil;
	}
	
	private function cari(){
		$hasil = $this->model->select($_POST['cari']);
		return $hasil;
	}	
}
?>