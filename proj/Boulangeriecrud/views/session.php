<?php
	$error= isset($_GET['error']) ? $_GET['error'] : '';
	$password= isset($_GET['password']) ? $_GET['password'] : '';
?>

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:58 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Splite-Admin Dashboard</title>

		<!--Favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="../assets/css/icons.css">

		<!--Style css-->
		<link rel="stylesheet" href="../assets/css/style.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="../assets/plugins/toggle-menu/sidemenu.css">

	</head>

	<body class="bg-primary">

	    <!--app open-->
		<div id="app" class="page">
			<section class="section section-2">
                <div class="container">
					<div class="">

						<!--single-page open-->
						<div class="single-page">
							<div class="">
								<div class="wrapper wrapper2">
									<form action="session-login.php" method="POST" id="login" class="card-body">
										<h3 class="text-dark">Se connecter</h3>
										<div class="mail">
											<input type="text" name="login" class="form-control"  placeholder="Votre login..">
										</div>
										<div class="passwd">
											<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Votre mot de passe..">
										</div>
										
										<div class="submit">
										     <input type="submit" class="btn btn-primary btn-block" value="Login">
											
										</div>
										<div class="signup mb-0" >
											
										</div>
									</form>
									<?php
switch($error){
	case 1: 
	echo"merci de saisir un login";
	break;
	
	case 2: 
	echo"Le mot de passe $password n'est pas valide";
	break;
	
	case 3: 
	echo"vous avez ete deconnecte";
	break;
	
	
	
}
?>
									
								</div>
							</div>
						</div>
						<!--single-page closed-->

					</div>
				</div>
			</section>
		</div>
		<!--app closed-->

		<!--Jquery.min js-->
		<script src="../assets/js/jquery.min.js"></script>

		<!--popper js-->
		<script src="../assets/js/popper.js"></script>

		<!--Tooltip js-->
		<script src="../assets/js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Jquery star rating-->
		<script src="../assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="../assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="../assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<script src="../assets/js/moment.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Sidemenu js-->
		<script src="../assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Scripts js-->
		<script src="../assets/js/scripts.js"></script>
		<script src="../assets/js/jquery.showmore.js"></script>
	</body>

<!-- Mirrored from www.spruko.com/demo/splite/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:58 GMT -->
</html>

