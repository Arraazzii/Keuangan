<?php
require_once("koneksi.php");
class operator_management_model{
	private $db;
	private $connection;
	
	public function __construct(){
		$this->db = new koneksi();
		$this->connection = $this->db->createDatabase();
	}
	
	public function all(){
		$sql0 = "SELECT * FROM user WHERE role='user' ORDER BY id_user DESC;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}

	public function list_log(){
		$sql0 = "SELECT * FROM log_aplikasi ORDER BY id_log DESC;";
		$statement = $this->connection->prepare($sql0);
		$statement->execute();
		$fetch = $statement->fetchAll();
		$statement->closeCursor();
		return $fetch;//json_encode($fetch);
	}
	
	public function insert($username, $password, $status, $role){

		$sql10 = "SELECT username, kode_rek_user FROM user;";
		$statement1 = $this->connection->prepare($sql10);
		$statement1->execute();
		$fetch1 = $statement1->fetchAll();
		$statement1->closeCursor();
		foreach ($fetch1 as $fetch2) {
		}
		if ($fetch2['username'] === $username) {
			return "error";
		}else if(empty($username) || empty($password) || empty($status)){
			return "kosong";
		}else{
			$count = "SELECT count(kode_rek_user) as hasil from user";
			$statementcount = $this->connection->prepare($count);
			$statementcount->execute();
			$fetchcount = $statementcount->fetchAll();
			$count_stat = intval($fetchcount[0]['hasil']) + '1';
			$kode_rek_tots = 'JKT'. $count_stat;
			$sql0 = "INSERT INTO user(username, password, kode_rek_user, status, role) VALUES(:username, :password, :kode_rek, :status, :role)";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':username',$username);
			$statement->bindValue(':password',$password);
			$statement->bindValue(':kode_rek',$kode_rek_tots);
			$statement->bindValue(':status',$status);
			$statement->bindValue(':role',$role);
			$statement->execute();
			$statement->closeCursor();
			return "success";
		}

	}
	
	public function update($id_user, $username, $password, $status){
		
		$sql10 = "SELECT username, kode_rek_user FROM user;";
		$statement1 = $this->connection->prepare($sql10);
		$statement1->execute();
		$fetch1 = $statement1->fetchAll();
		$statement1->closeCursor();
		foreach ($fetch1 as $fetch2) {
		}
		if(empty($username) || empty($status)){
			return "kosong";
		}else if(empty($password)){
			$sql0 = "UPDATE user SET username =:username, status = :status WHERE id_user = :id_user;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':username',$username);
			$statement->bindValue(':status',$status);
			$statement->bindValue(':id_user',$id_user);
			$statement->execute();
			$statement->closeCursor();
			return "success";
		}else if(!empty($password) || !empty($username) || !empty($status)){
			$sql0 = "UPDATE user SET username =:username, password =:password, status = :status WHERE id_user = :id_user;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':username',$username);
			$statement->bindValue(':password',$password);
			$statement->bindValue(':status',$status);
			$statement->bindValue(':id_user',$id_user);
			$statement->execute();
			$statement->closeCursor();
			return "success";
		}
		
	}

	public function change($oldpw, $newpw, $newpwconf, $id){
		
		$sql10 = "SELECT password FROM user where id_user='$id';";
		$statement1 = $this->connection->prepare($sql10);
		$statement1->execute();
		$fetch1 = $statement1->fetchAll();
		$statement1->closeCursor();
		foreach ($fetch1 as $fetch2) {
		}
		if(empty($newpw) || empty($newpwconf) || empty($oldpw)){
			return "kosong";
		}else if($fetch2['password'] !== $oldpw){
			return "gasama";
		}else if($newpw !== $newpwconf){
			return "gasama2";
		}else if(!empty($password) || !empty($username) || !empty($oldpw) || $fetch2->password == $newpw){
			$sql0 = "UPDATE user SET password =:password WHERE id_user = $id;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':password', $newpw);
			$statement->execute();
			$statement->closeCursor();
			return "success";
		}
		
	}
	
	public function delete($id_user){
		try{	
			$sql0 = "DELETE FROM user WHERE id_user = :id_user;";
			$statement = $this->connection->prepare($sql0);
			$statement->bindValue(':id_user',$id_user);
			$statement->execute();
			$statement->closeCursor();
			return "success";
		}
		catch(PDOException $e){
			return "gagal";
		}
	}
}
?>