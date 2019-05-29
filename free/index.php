<?php
	session_start();
	if(!isset($_SESSION['isLoggedin'])) header('location:users');
	$page = (isset($_GET['page']) && !empty($_GET['page']) ? $_GET['page'] : '');
	$content = '';
	switch ($page) {
		case 'dashboard':
			$title  = 'Dashboard';
			$content = 'views/dashboard/dashboardIndex.php';
		break;

		case 'customers':
			$title  = 'Customers';
			$content = 'views/customers/CustomersIndex.php';
		break;

		case 'users':
			$title  = 'Users';
			$content = 'views/users/UsersIndex.php';
		break;

		default:
			$title  = 'Dashboard';
			$content = 'views/dashboard/dashboardIndex.php';
		break;
	}

	include 'layouts/client/content.php';
?>