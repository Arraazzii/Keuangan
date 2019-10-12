<?php

	class koneksi{

		private  $username;
		private  $password;
		private  $host;
		private  $database;
		private  $options;
		private  $connection = "";

			public function __construct(){

// 			$this->username = "root";
// 			$this->password = "";
			$this->username = 'jvybdzdx_keu';
			$this->password = '##depokkeuangan##';
			$this->host 	= "localhost";
			$this->database = "jvybdzdx_keuangan";
			$this->options 	= array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_EMULATE_PREPARES => false);
			//menangkap error dengan excpetion, menggunakan emulate native sehingga dapat berjalan di semua driver
		}

			public function createDatabase(){

			$db 				= "mysql:host=".$this->host.";dbname=".$this->database;
			$this->connection 	= new PDO($db,$this->username,$this->password,$this->options);

			return $this->connection;

		}
	}

?>
