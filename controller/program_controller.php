<?php
require_once("model/program_model.php");
class program_controller{
	private $model;
	
	public function __construct(){
		$this->model = new program_model();
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
	
	//id_program, kelompok_program, tanggalmulai_program, jenis_program, tanggalakhir_program, nama_program, pagu_program, nama_departemen, status_program, nama_vendor, notelepon_program, email_program
	 
	private function tambah(){
		$hasil = $this->model->insert($_POST['kelompok_program'],$_POST['tanggalmulai_program'],$_POST['jenis_program'],$_POST['tanggalakhir_program'],$_POST['nama_program'],$_POST['pagu_program'],$_POST['nama_departemen'],$_POST['status_program'],$_POST['nama_vendor'],$_POST['notelepon_program'],$_POST['email_program'],$_POST['kontakperson_program']);
		return $hasil; 
	}
	
	private function ubah(){
		$hasil = $this->model->update($_POST['id_program'],$_POST['kelompok_program'],$_POST['tanggalmulai_program'],$_POST['jenis_program'],$_POST['tanggalakhir_program'],$_POST['nama_program'],$_POST['pagu_program'],$_POST['nama_departemen'],$_POST['status_program'],$_POST['nama_vendor'],$_POST['notelepon_program'],$_POST['email_program'],$_POST['kontakperson_program']);
		return $hasil;
	}
	
	private function hapus(){
		$hasil = $this->model->delete($_POST['id_program']);
		return $hasil;
	}
	
	private function cari(){
		$hasil = $this->model->select($_POST['cari']);
		return $hasil;
	}
}
?>