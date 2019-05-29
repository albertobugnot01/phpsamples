<!DOCTYPE html>
<html>
<head>
	<title><?php echo (isset($title) ? $title : 'N/A')?></title>
    <link rel="stylesheet" href="/vendor/css/bootstrap.css">
    <link rel="stylesheet" href="/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/css/client.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand <?php echo ((isset($title) && $title == 'Dashboard') ? 'active' : ''); ?>" href="?page=dashboard">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link <?php echo ((isset($title) && $title == 'Dashboard') ? 'active' : ''); ?>" href="?page=dashboard">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link <?php echo ((isset($title) && $title == 'Customers') ? 'active' : ''); ?>" href="?page=customers">Customer</a>
      </li>
      <li class="nav-item active">
	  <a class="nav-link <?php echo ((isset($title) && $title == 'Users') ? 'active' : ''); ?>" href="?page=users">User</a>
      </li>
      <li class="nav-item active">
	  <a class="nav-link" href="logout.php">Logout</a>
	  </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search">
	  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button> -->
	  <ul class="navbar-nav mr-auto">
	  <li class="nav-item active">
	  <a class="nav-link" href="#">	<?php
		echo "Welcome, " . ucfirst(@$_SESSION['username']);
	?></a>
      </li>
		</ul>
    </form>
  </div>
</nav>