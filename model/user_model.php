<?php
require_once("koneksi.php");
class user_model{
	private $db;
	private $connection;
	private $username = "";
	private $password = "";
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function select_by($username,$password){
		try{
			$password = md5($password);
			$sql1 = "SELECT id_user, username, role, status, kode_rek_user FROM user WHERE username = :username AND password = :password;";
			$statement = $this->connection->prepare($sql1);
			$statement->bindValue(':username',$username);
			$statement->bindValue(':password',$password);
			$result = $statement->execute();
			$fetch = $statement->fetchAll();
			$statement->closeCursor();
			if(count($fetch) == 1){
				if ($fetch[0]['status'] === "aktif") {
					if ($fetch[0]['role'] === "admin") {
						$_SESSION['f658f7a22761210065c7ae4211aab09b'] = $fetch[0]['username'];
						$_SESSION['id_user'] = $fetch[0]['id_user'];
						$_SESSION['role_user'] = $fetch[0]['role'];
						$_SESSION['status_user'] = $fetch[0]['status'];
						$_SESSION['kode_rek_user'] = $fetch[0]['kode_rek_user'];
						return "admin";				
						exit();
					}else{
						$_SESSION['kmbWnRknFjoImgRoIljCbTXOyRAbHEQj'] = $fetch[0]['username'];
						$_SESSION['id_user'] = $fetch[0]['id_user'];
						$_SESSION['role_user'] = $fetch[0]['role'];
						$_SESSION['status_user'] = $fetch[0]['status'];
						$_SESSION['kode_rek_user'] = $fetch[0]['kode_rek_user'];
						return "user";				
						exit();
					}
				}else{ 
					return "Gagal";
					exit();
				}
			}else{ 
				return "Gagal";
				exit();
			}
		}
		catch(PDOException $e){
			return "Gagal";
			// exit();
		}
	}
}
?>