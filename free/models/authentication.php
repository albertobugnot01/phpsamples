<?php
	include '../libraries/database.php';
	session_start();
	if($_POST){
		$dbConn = null;
		$db = new Database;
		$dbConn = $db->connect();

		if($dbConn){
			$username = $_POST['username'];
			$password = sha1(md5($_POST['password']));
			$query = $dbConn->query("SELECT * FROM `users` WHERE username = '".$username."' AND password = '".$password."' ");
			if($query->rowCount() > 0 ){
				$_SESSION['username'] = $username;
				$_SESSION['isLoggedin'] = true;
				header("location:../index.php?page=dashboard");
			} else {
				header("location:../users/?page=login&msg=error");
			}
		} 

	}
?>