<?PHP   
        // boulangerie
        include "../core/produitC.php";
		include "../entities/produit.php";
		
		//boulangerie
        $produit1C=new ProduitC();
        $listeProduits=$produit1C->afficherProduits();
		
 ?>
 <!-----------------------------------------------PDF------------------------------------------------>
 
 <!--------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:37 GMT -->
<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Splite-Admin Dashboard</title>

		<!--favicon -->
		<link rel="icon" href="../favicon.html" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

		<!--Icons css-->
		<link rel="stylesheet" href="../assets/css/icons.css">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.css">

		<!--Style css-->
		<link rel="stylesheet" href="../assets/css/style.css">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="../assets/plugins/toggle-menu/sidemenu.css">
           
		<!--Morris css-->
		<link rel="stylesheet" href="../assets/plugins/morris/morris.css">

	</head>

	<body class="app">
	<div class="wave -three"></div>

		<div id="spinner"></div>

		<!-- app open -->
		<div id="app" class="page">
			<div class="main-wrapper">

			    <!--nav open-->
				<nav class="navbar navbar-expand-lg main-navbar">
					<a class="header-brand" href="index-2.html">
						<img src="../assets/img/brand/logobanette.PNG" style="width:160px;height:70px;" alt="Splite-Admin  logo">
					</a>
					<form class="form-inline mr-auto">
						<ul class="navbar-nav mr-2">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle"><i class="fa fa-reorder"></i></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i class="fa fa-search"></i></a></li>
						</ul>
						<div class="search-element mr-3">
							
							
						</div>
					</form>
					<ul class="navbar-nav navbar-right">
					    
						
						
						<li class="dropdown dropdown-list-toggle d-none d-lg-block">
							<a href="#" class="nav-link nav-link-lg full-screen-link">
								<i class="fa fa-expand " id="fullscreen-button"></i>
							</a>
						</li>
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg d-flex">
								<span class="mr-3 mt-2 d-none d-lg-block ">
									<span class="text-white">Bonjour,<span class="ml-1"> Sarah Gmiha</span></span>
								</span>
							<span><img src="../assets/img/avatar/soussou.jpg" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class=" dropdown-header noti-title text-center border-bottom pb-3">
									<h5 class="text-capitalize text-dark mb-1">Sarah Gmiha</h5>
									<small class="text-overflow m-0"> Gestion des produits</small>
								</div>
								<a class="dropdown-item" href="profile.html"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-settings mr-2"></i> <span>Settings</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-message-outline mr-2"></i> <span>Mails</span></a>
								<a class="dropdown-item" href="#"><i class=" mdi mdi-account-multiple-outline mr-2"></i> <span>Friends</span></a>
								<a class="dropdown-item" href="#"><i class="fe fe-calendar mr-2"></i> <span>Activity</span></a>
								<a class="dropdown-item" href="#"><i class="mdi mdi-compass-outline mr-2"></i> <span>Support</span></a>
								<div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
							</div>
						</li>
					</ul>
				</nav>
				<!--nav closed-->

				<!--aside open-->
				<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="nav-link pl-1 pr-1 leading-none ">
								<img src="../assets/img/avatar/soussou.jpg" alt="user-img" class="avatar-xl rounded-circle mb-1">
								<span class="pulse bg-success" aria-hidden="true"></span>
							</div>
							<div class="user-info">
								<h6 class=" mb-1 text-dark">Sarah Gmiha</h6>
								<span class="text-muted app-sidebar__user-name text-sm">Gestion des produits</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-folder-open-o"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="index-2.html"><span>what?</span></a></li>
								<li><a class="slide-item" href="index2.html"><span>DDD -D</span></a></li>
								
							</ul>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-underline"></i><span class="side-menu__label">Produits</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="formulaire.php" class="slide-item">Formulaire D'Ajout</a></li>
								<li><a href="taboulangerie.php" class="slide-item"> Table Produits</a></li>

								<li><a href="afficherCat.php" class="slide-item"> Table Catégories</a></li>
								<li><a href="editable.php" class="slide-item"> Transactions sur les Tables</a></li>
								

							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="emptypage.html"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Gestion Profiles</span></a>
						</li>
						<li class="active">
							<a class="side-menu__item active" href="panierBE.php"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Gestion promotion </span></a>
						</li>
						<li>
							<a class="side-menu__item" href="emptypage.html"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">SAV</span></a>
						</li>
						<li>
							<a class="side-menu__item" href="gestionevnmnt.php"><i class="side-menu__icon fa fa-edit"></i><span class="side-menu__label">Gestion Evenements</span></a>
						</li>
						<li>
							<a class="side-menu__item" href="Livraisons.php"><i class="side-menu__icon fe fe-grid"></i><span class="side-menu__label">Gestion Livraisons</span></a>
						</li>
						<li>
							<a class="side-menu__item" href="afficherlivreur.php"><i class="side-menu__icon fe fe-map"></i><span class="side-menu__label">Gestion Livreurs</span></a>
						</li>						
						
					</ul>
				</aside>
				<!--aside closed-->

				<!--app-content open-->                                           <!--TABLEAAAAUX-->
				<div class="app-content">
					<section class="section">

					    <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title"> Tables</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Table</a></li>
								<li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
							</ol>
						</div>
						<!--page-header closed-->

						<div class="section-body">

                            <!--row open-->
							                                  <!--Boulangerieeeeeeeeeeeee-->
							<div class="col-md-12">
								<div class="card export-database">
									<div class="card-header">
										<h4>Table Boulangerie</h4>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<div id="example_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer" >
											    
												<div class="row">
												  <div class="col-sm-12">
												      
													  
													  
													  
												     <div class="btn-list text-right">
													 <form method="post" action="RechercheBoulangerie.php">
													 <input class="rechnom" type="text" placeholder="Rechercher.." name="q"  >
							                         <button type="submit" name="valider" class="fa fa-search"></button>
													 </form>  
													</br>
													<form method="POST" action="TriBoulangerie.php">
													<button type="submit" class="btn btn-primary mt-1 mb-0" name="tri">Trier</button>
													</form>
												     </div>
												
												  <table class="table table-bordered border-t0 key-buttons text-nowrap w-100 dataTable no-footer" role="grid" aria-describedby="example_info" style="width: 1170px;">
												<thead>
													<tr role="row">
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Identfiant: activate to sort column ascending" style="width: 189px;">Identifiant</th>
													<th class="sorting_desc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Nom: activate to sort column ascending" style="width: 278px;">Nom</th>
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Numéro de Catégorie : activate to sort column ascending" style="width: 189px;">Numéro de catégorie</th>
													
													<th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Quantité: activate to sort column ascending" style="width: 66px;">Quantité</th>
					
												    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Prix unitaire: activate to sort column ascending" style="width: 112px;">Prix unitaire</th>
													</tr>
												</thead>
												<tbody>
													<?php 
													foreach( $listeProduits as $row )
														{ ?>
												<tr>	
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['identifiant']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['nom']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['numcat']; ?> </td>

													<td class="pt-3-half" contenteditable="true"> <?php echo $row['quantite']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['prix']; ?> </td>
												
												</tr>
												      <?php
											             }?>
 												
													
													
												
												</tbody>
												
											</table>
											 </br>
											</br>
											<form method="post" action="print_pdf.php" > 
											<div class="btn-list text-right">
												<button type="button"  class="btn btn-danger btn-space m-t-5" name="generate_pdf">Génerer un PDF</button> 
										
											</div>
											</form>	
										    </br>
											</br>
										</div>
									</div>
									
									<div class="row">
									  <div class="col-sm-12 col-md-5">
									
									</div>
								   </div>
										</div>
										</div>
									</div>
								</div>
							</div>
							
							     
							
							
							<!--row closed-->

                            <!--row open-->
							
							<!--row closed-->
						</div>

					</section>
				</div>
				<!--app-content closed-->

				<footer class="main-footer">
					<div class="text-center">
						Copyright &copy;Splite 2019. Design By<a href="https://spruko.com/"> Spruko</a>
					</div>
				</footer>

				<!-- Popupchat open-->
				<div class="popup-box chat-popup" id="qnimate">
					<div class="popup-head">
						<div class="popup-head-left pull-left"><img src="../assets/img/avatar/avatar-3.jpg" alt="iamgurdeeposahan" class="mr-2"> Alica Nestle</div>
						<div class="popup-head-right pull-right">
							<div class="btn-group">
								<button class="chat-header-button" data-toggle="dropdown" type="button" aria-expanded="false">
								<i class="glyphicon glyphicon-cog"></i> </button>
								<ul role="menu" class="dropdown-menu dropdown-menu-right">
									<li><a href="#">Media</a></li>
									<li><a href="#">Block</a></li>
									<li><a href="#">Clear Chat</a></li>
									<li><a href="#">Email Chat</a></li>
								</ul>
							</div>
							<button data-widget="remove" id="removeClass" class="chat-header-button pull-right" type="button"><i class="glyphicon glyphicon-off"></i></button>
						</div>
					</div>
					<div class="popup-messages">
						<div class="direct-chat-messages">
							<div class="chat-box-single-line">
								<abbr class="timestamp">December 15th, 2018</abbr>
							</div>
							<div class="direct-chat-msg">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name float-left">Alica Nestle</span>
									<span class="direct-chat-timestamp float-right">7:40 Am</span>
								</div>
								<img class="direct-chat-img" src="../assets/img/avatar/avatar-3.jpg" alt="message user image">
								<div class="direct-chat-text">
									Hello. How are you today?
								</div>
							</div>
							<div class="direct-chat-msg right">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name float-right">Roberts</span>
									<span class="direct-chat-timestamp float-left">8:05 Am</span>
								</div>
								<img class="direct-chat-img" src="../assets/img/avatar/avatar-2.jpg" alt="message user image">
								<div class="direct-chat-text">
									I'm fine. Thanks for asking!
								</div>
							</div>
							<div class="chat-box-single-line  mb-3">
								<abbr class="timestamp">December 14th, 2018</abbr>
							</div>
							<div class="direct-chat-msg doted-border">
								<div class="direct-chat-info clearfix">
									<span class="direct-chat-name float-left">Alica Nestle</span>
									<span class="direct-chat-timestamp float-right">6:20 Am</span>
								</div>
								<img alt="iamgurdeeposahan" src="../assets/img/avatar/avatar-3.jpg" class="direct-chat-img"><!-- /.direct-chat-img -->
								<div class="direct-chat-text">
									Hey bro, how’s everything going ?
								</div>
								<div class="direct-chat-msg right">
									<div class="direct-chat-info clearfix">
										<span class="direct-chat-name float-right">Roberts</span>
										<span class="direct-chat-timestamp float-left">7:05 Am</span>
									</div>
									<img class="direct-chat-img" src="../assets/img/avatar/avatar-2.jpg" alt="message user image">
									<div class="direct-chat-text">
										Nothing Much!
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="popup-messages-footer">
						<textarea id="status_message" placeholder="Type a message..." rows="10" cols="40" name="message"></textarea>
						<div class="btn-footer">
							<button class="bg_none"><i class="glyphicon glyphicon-film"></i> </button>
							<button class="bg_none"><i class="glyphicon glyphicon-camera"></i> </button>
							<button class="bg_none"><i class="glyphicon glyphicon-paperclip"></i> </button>
							<button class="bg_none pull-right"><i class="glyphicon glyphicon-thumbs-up"></i> </button>
						</div>
					</div>
				</div>
				<!-- Popupchat closed -->

			</div>
		</div>
		<!--app closed-->

		<!-- Back to top -->
		<a href="#top" id="back-to-top" ><i class="fa fa-angle-up"></i></a>

		<!-- Popup-chat -->
		<a href="#" id="addClass"><i class="ti-comment"></i></a>

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

		<!--mCustomScrollbar js-->
		<script src="../assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!--Sidemenu js-->
		<script src="../assets/plugins/toggle-menu/sidemenu.js"></script>

		<!--Scripts js-->
		<script src="../assets/js/scripts.js"></script>
		<script src="../assets/js/jquery.showmore.js"></script>
        <script src="../assets/js/datatable.js"></script>


       <!--DataTables js-->
		<script src="../assets/plugins/Datatable/js/jquery.dataTables.js"></script>
		<script src="../assets/plugins/Datatable/js/dataTables.bootstrap4.js"></script>
		<script src="../assets/plugins/Datatable/js/dataTables.buttons.min.js"></script>
		<script src="../assets/plugins/Datatable/js/buttons.bootstrap4.min.js"></script>
		<script src="../assets/plugins/Datatable/js/jszip.min.js"></script>
		<script src="../assets/plugins/Datatable/js/pdfmake.min.js"></script>
		<script src="../assets/plugins/Datatable/js/vfs_fonts.js"></script>
		<script src="../assets/plugins/Datatable/js/buttons.html5.min.js"></script>
		<script src="../assets/plugins/Datatable/js/buttons.print.min.js"></script>
		<script src="../assets/plugins/Datatable/js/buttons.colVis.min.js"></script>

	</body>

<!-- Mirrored from www.spruko.com/demo/splite/table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:37 GMT -->
</html>