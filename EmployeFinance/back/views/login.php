<?php
session_start();
if(isset($_POST) && !empty($_POST['login']) && !empty($_POST['pass'])) {
	extract($_POST);
	//$sql = "SELECT id FROM users where login='$login' AND pass='$pass'";
	//$req = mysqli_query($db,$sql);
	$mysqli = new mysqli("localhost","root", "", "projetweb");
	$query = $mysqli->prepare("SELECT id FROM users where login='$login' AND pass='$pass'");
	$query->execute();
	$query->store_result();

	$rows = $query->num_rows;

	
	if(($rows)>0) {
		$_SESSION['Auth'] = array(
			'login' => $login,
			'pass' => $pass 
		);
		header('location: index-2a.php');
	}
	else {
		echo "mauvais identifiant";
	}
}


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
		<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="assets/css/icons.css">

		<!--Style css-->
		<link rel="stylesheet" href="assets/css/style.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="assets/plugins/toggle-menu/sidemenu.css">

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
									<form id="login" class="card-body" tabindex="500" action="login.php" method="post">
										<h3 class="text-dark">Connectez-vous</h3>
										<div class="mail">
											<input type="login" name="login" class="form-control" id="exampleInputEmail1" placeholder="Login">
										</div>
										<div class="passwd">
											<input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
										</div>
										<div class="submit">
											<input class="btn btn-primary btn-block" type="submit" value="Me Connecter">
											
										</div>
										
									</form>
								
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
		<script src="assets/js/jquery.min.js"></script>

		<!--popper js-->
		<script src="assets/js/popper.js"></script>

		<!--Tooltip js-->
		<script src="assets/js/tooltip.js"></script>

		<!--Bootstrap.min js-->
		<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- Jquery star rating-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="assets/plugins/nicescroll/jquery.nicescroll.min.js"></script>

		<!--Scroll-up-bar.min js-->
		<script src="assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js"></script>

		<script src="assets/js/moment.min.js"></script>

		<!--mCustomScrollbar js-->
		<script src="assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Sidemenu js-->
		<script src="assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Scripts js-->
		<script src="assets/js/scripts.js"></script>
		<script src="assets/js/jquery.showmore.js"></script>
	</body>

<!-- Mirrored from www.spruko.com/demo/splite/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:32:58 GMT -->
</html>