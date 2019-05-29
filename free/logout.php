<?php
	session_start();
	if(@$_SESSION['isLoggedin']){
		session_destroy();
		header("location:users/");
	}
?>