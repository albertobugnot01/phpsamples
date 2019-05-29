<?php
if(isset($_POST['btnRegister'])){
	include '../models/register.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo (isset($title) ? $title : 'N/A')?></title>
    <link rel="stylesheet" href="/vendor/css/bootstrap.css">
    <link rel="stylesheet" href="/vendor/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/css/client.css">
    <link href="../helpers/modals//src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <link href="css/example.css" media="screen" rel="stylesheet" type="text/css" />
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
<div id="register" style="display:none;" class="container">
<div class="d-flex justify-content-center h-100">
<div class="card">
	<div class="card-header">
		<h3>Register</h3>
		<div class="d-flex justify-content-end social_icon">
			<span><i class="fab fa-facebook-square"></i></span>
			<span><i class="fab fa-google-plus-square"></i></span>
			<span><i class="fab fa-twitter-square"></i></span>
		</div>
	</div>
	<div class="card-body">
		<form action="" method="post">
			<?php
			if(isset($_GET['msg'])){
				$message = "";
				switch ($_GET['msg']) {
					case 'success':
						$message = "Successfully Registered.";
					break;
					case 'exist':
						$message = "Username already taken.";
					break;
				}
			}
		?>
			<div class="input-group form-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-user"></i></span>
				</div>
				<input class="form-control" required type="text" name="fullname" <?php echo @$_POST['fullname']; ?> placeholder="Enter Fullname">
				
			</div>
				<div class="input-group form-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-user"></i></span>
				</div>
				<input class="form-control" required type="text" name="username" placeholder="Enter Username">
				
			</div>
			<div class="input-group form-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-key"></i></span>
				</div>
				<input class="form-control" required type="password" name="password" placeholder="Enter Password">
			</div>
			<div class="form-group">
				<input type="submit" name="btnRegister" value="Register" class="btn float-right login_btn">
			</div>
		</form>
	</div>
	<div class="d-flex justify-content-center text-white"><?php echo @$message; ?></div>
	<div class="card-footer">
		<div class="d-flex justify-content-center links">
			I have an account already !<a href="#info" rel="facebok">Login!</a>
		</div>
		<div class="d-flex justify-content-center">
			<a href="#">Forgot your password?</a>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>