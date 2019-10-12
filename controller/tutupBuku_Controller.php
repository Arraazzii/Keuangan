<?php
require_once("model/tutupBuku_model.php");
class tutupBuku_Controller{
	private $model;
	
	public function __construct(){
		$this->model = new tutupBuku_model();
	}

	public function invoke($kode){
		if($kode === "status"){
			$hasil = $this->status();
			return $hasil; 
		}
		else if($kode === "all_json"){
			$hasil = $this->all_json();
			return $hasil; 
		}
		else if($kode === "insert"){
			$hasil = $this->insert();
			return $hasil;
		}	
		else if($kode === "hapus"){
			$hasil = $this->hapus();
			return $hasil;
		}
	}

	private function status(){
		$tutupBuku = new tutupBuku_model();
		$statusBuku = $tutupBuku->getTutupBukuStatus();		

		return $statusBuku;		
	}

	private function all_json(){
		$hasil = $this->model->all_json();
		return $hasil;
	}

	private function insert(){
		$hasil = $this->model->insert($_POST['bulan'], $_POST['tahun'], $_POST['petugas']);
		return $hasil;
	}

	private function hapus(){
		$hasil = $this->model->delete($_POST['id_tutupBuku']);
		return $hasil;
	}
	
}
?>