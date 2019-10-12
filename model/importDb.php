<?php 
	$sql_file_OR_content = $_FILES['file']['name'];
	// var_dump($sql_file_OR_content);	


	if ($sql_file_OR_content == NULL) {
		echo "<script>alert('Ada Kesalahan');window.location = '?page=6a3b61f42cded56019b264080e226e40';</script>";
	}else{
		set_time_limit(3000);

		$host = 'localhost';
		$dbname = 'jvybdzdx_keuangan';
// 		$user = 'root';
		$user = 'jvybdzdx_keu';
// 		$pass = '';
		$pass = '##depokkeuangan##';
		$sql_file_OR_content = $_FILES['file']['name'];

		// var_dump($sql_file_OR_content);


		$SQL_CONTENT = (strlen($sql_file_OR_content) > 300 ?  $sql_file_OR_content : file_get_contents($sql_file_OR_content)  );  
		$allLines = explode("\n",$SQL_CONTENT); 
		$mysqli = new mysqli($host, $user, $pass, $dbname); if (mysqli_connect_errno()){echo "Failed to connect to MySQL: " . mysqli_connect_error();} 
		$zzzzzz = $mysqli->query('SET foreign_key_checks = 0');	        preg_match_all("/\nCREATE TABLE(.*?)\`(.*?)\`/si", "\n". $SQL_CONTENT, $target_tables); foreach ($target_tables[2] as $table){$mysqli->query('DROP TABLE IF EXISTS '.$table);}         $zzzzzz = $mysqli->query('SET foreign_key_checks = 1');    $mysqli->query("SET NAMES 'utf8'");	
	$templine = '';	// Temporary variable, used to store current query
	foreach ($allLines as $line)	{											// Loop through each line
		if (substr($line, 0, 2) != '--' && $line != '') {$templine .= $line; 	// (if it is not a comment..) Add this line to the current segment
			if (substr(trim($line), -1, 1) == ';') {		// If it has a semicolon at the end, it's the end of the query
				if(!$mysqli->query($templine)){ print('Error performing query \'<strong>' . $templine . '\': ' . $mysqli->error . '<br /><br />');  }  $templine = ''; // set variable to empty, to start picking up the lines after ";"
			}
		}
	echo "<script>alert('Database Berhasil Diimport');window.location = '?page=6a3b61f42cded56019b264080e226e40';</script>";
	}	return 'Importing finished. Now, Delete the import file.';
}
?>