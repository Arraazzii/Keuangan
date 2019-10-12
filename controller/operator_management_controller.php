<?php
require_once("model/operator_management_model.php");
class operator_management_controller{
	private $model;
	
	public function __construct(){
		$this->model = new operator_management_model();
	}
	
	public function invoke($kode){
		if($kode === "baca"){
			$hasil = $this->baca();
			return $hasil;
		}
		else if($kode === "list_log"){
			$hasil = $this->list_log();
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
		else if($kode === "change"){
			$hasil = $this->change();
			return $hasil;
		}
	}
	
	private function baca(){
		$hasil = $this->model->all();
		return $hasil;
	}

	private function list_log(){
		$hasil = $this->model->list_log();
		return $hasil;
	}
	
	private function tambah(){
		$role = 'user';
		$hasil = $this->model->insert($_POST['username'],md5($_POST['password']),$_POST['status'],$role);
		return $hasil;
	}
	
	private function ubah(){
		$hasil = $this->model->update($_POST['val_id_user'],$_POST['username_edit'],md5($_POST['password_edit']),$_POST['status_edit']);
		return $hasil;
	}

	private function change(){
		$hasil = $this->model->change(md5($_POST['passwordlama']),md5($_POST['passwordbaru']),md5($_POST['passwordbaruconfirm']), $_SESSION['id_user']);
		return $hasil;
	}
	
	private function hapus(){
		$hasil = $this->model->delete($_POST['id_user']);
		return $hasil;
	}
	
}
?>