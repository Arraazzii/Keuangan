<?php 
require_once("model/printdanakeluarmasuk.php");
class print_dana_keluar_masuk{
	
	private $model;
	
	public function __construct(){
		$this->model = new printdanakeluarmasuk();
	}
	public function invoke($kode){
		if($kode === "baca"){
			$hasil = $this->baca();
			return $hasil;
		}elseif($kode === "baca1"){
			$hasil = $this->baca1();
			return $hasil;
		}
	} 
	
	private function baca(){
		$hasil = $this->model->all($_POST['mulai'], $_POST['selesai']);
		return $hasil;
	}
	private function baca1(){
		$hasil = $this->model->allin($_POST['mulai'], $_POST['selesai']);
		return $hasil;
	}
}