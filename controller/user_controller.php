<?php 
require_once("model/user_model.php");
class user_controller{
	private $user_model;
	
	public function __construct(){
		$this->user_model = new User_Model();
	}	
	
	public function invoke($kode){
		
		if($kode === 'login'){
			$login = $this->login();
			return $login;
		}
	}
	
	private function login(){
		$login = $this->user_model->select_by($_POST['26a1a30b2d140e6690329dfeb4a79407'],$_POST['82f9be04f6ef4a897b8287573e3af4ae']);
		return $login;
	}
}
?>