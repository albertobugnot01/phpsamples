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
<?php
        if(isset($_POST['btnLogin'])){
            include '../models/authentication.php';
        }
    ?>
<div id="info" style="display:none;" class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<!-- <div class="d-flex justify-content-end social_icon">
					<span class="fb"><i class="fab fa-facebook-square"></i></span>
					<span class="insta"><i class="fab fa-google-plus-square"></i></span>
					<span class="twet"><i class="fab fa-twitter-square"></i></span>
				</div> -->
			</div>
			<div class="card-body">
				<form action="" method="post">
                    <?php
                if(isset($_GET['msg'])){
                    $message = "";
                    switch ($_GET['msg']) {
                        case 'error':
                            $message = "Invalid username and password !";
                        break;
                    }
                    
                }
            ?>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password">
					</div>
					<!-- <div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div> -->
					<div class="form-group">
						<input type="submit" name="btnLogin" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="d-flex justify-content-center text-white"><?php echo @$message; ?></div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#register" rel="facebox">Sign Up</a>
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