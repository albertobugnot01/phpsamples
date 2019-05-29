<!DOCTYPE html>
<html>
<head>
	<title><?php echo (isset($title) ? $title : 'N/A')?></title>
    <link rel="stylesheet" href="/vendor/css/bootstrap.css">
    <link rel="stylesheet" href="/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/css/client.css">
    <link href="../helpers/modals//src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/example.css" media="screen" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="../helpers/modals/lib/jquery.js" type="text/javascript"></script>
  <script src="../helpers/modals/src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : '../helpers/modals/src/loading.gif',
        closeImage   : '../helpers/modals/src/closelabel.png'
      })
    })
  </script>
    <link rel="stylesheet" href="/vendor/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="/vendor/css/owl.transitions.css" type="text/css">
<link href="/vendor/css/slick.css" rel="stylesheet">
<link href="/vendor/css/bootstrap-slider.min.css" rel="stylesheet">
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
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search">
	  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button> -->
	  <ul class="navbar-nav mr-auto">
	  <li class="nav-item active">
    <a href="#info" rel="facebox" stye="color:white;" class="btn btn-xs uppercase text-white" >Login / Register</a>
    
      </li>
		</ul>
    </form>
  </div>
</nav>
<?php include "../helpers/modals/login.php";?>
<?php include "../helpers/modals/register.php";?>