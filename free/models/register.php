<?php
	include '../libraries/database.php';
	if($_POST){
		$dbConn = null;
		$db = new Database;
		$dbConn = $db->connect();
		//echo "<pre>";
		//print_r($_POST);
		$fullname = $_POST['fullname'];
		$username = $_POST['username'];
		$password = sha1(md5($_POST['password']));
		if($dbConn){
			//check username exist
			$check_username = $dbConn->query("SELECT * FROM `users` WHERE username = '".$username."' ");
			if($check_username->rowCount() > 0 ){
				header("location:../user/?page=register&msg=exist");
			} else {
				$query = $dbConn->query("INSERT INTO `users`(`fullname`, `username`, `password`, `role`) 
       			VALUES ('".$fullname."','".$username."','".$password."',2)");
				if($query){
					header("location:../user/?page=register&msg=success");
				}	
			}	
       		
		} 

	}
?>