<?php
	session_start();
	if(isset($_SESSION['isLoggedin'])) header('location:../?page=dashboard');
	$page = (isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : '');
	$content = '';
	switch ($page) {
		case 'register':
			$title  = 'Register';
			$content = 'register.html';
			break;
		case 'login':
			$title  = 'Login';
			$content= 'login.html';
		break;
		case 'dashboard':
			$title  = 'Home';
			$content = '../views/client/dashboardIndex.php';
		break;

		case 'customers':
			$title  = 'Customers';
			$content = '../views/client/CustomersIndex.php';
		break;

		case 'users':
			$title  = 'Users';
			$content = '../views/client/UsersIndex.php';
		break;

		default:
			$title  = 'Home';
			$content= '../views/client/dashboardIndex.php';
		break;
	}

	include '../layouts/auth/content.php';
?>