<?PHP
      require_once('session-verif.php');
    include "../core/produitC.php";
	include "../entities/produit.php";
   $produit1C=new ProduitC();
   $listeProduits=$produit1C->afficherProduits();
   
   
    // categories
        include "../core/categorieC.php";
		include "../entities/categorie.php";
	
        $categorie1C=new CategorieC();
        $listecategories=$categorie1C->afficherCategories();
    ?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from www.spruko.com/demo/splite/editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:41 GMT -->
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

	</head>

	<body class="app ">
	<div class="wave -three"></div>

		<div id="spinner"></div>

        <!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper" >

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
									<span class="text-white">Bonjour,<span class="ml-1"><?php echo $login ?></span></span>
								</span>
							<span><img src="../assets/img/avatar/soussou.jpg" alt="profile-user" class="rounded-circle w-32 mr-2"></span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class=" dropdown-header noti-title text-center border-bottom pb-3">
									<h5 class="text-capitalize text-dark mb-1"><?php echo $login ?></h5>
									<small class="text-overflow m-0"> Gestion des produits</small>
								</div>
								<a class="dropdown-item" href="boulangerie.php"><i class="mdi mdi-compass-outline mr-2"></i> <span>Produits(FO)</span></a>
								<div class="dropdown-divider"></div><a class="dropdown-item" href="session-logout.php"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
							</div>
						</li>
					</ul>
				</nav>
				<!--nav close-->

                <!--aside open-->
				<aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="nav-link pl-1 pr-1 leading-none ">
								<img src="../assets/img/avatar/soussou.jpg" alt="user-img" class="avatar-xl rounded-circle mb-1">
								<span class="pulse bg-success" aria-hidden="true"></span>
							</div>
							<div class="user-info">
								<h6 class=" mb-1 text-dark"><?php echo $login ?> </h6>
								<span class="text-muted app-sidebar__user-name text-sm">Gestion des produits</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-folder-open-o"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
							
						</li>
						<li class="slide">
							<a class="side-menu__item active" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-underline"></i><span class="side-menu__label">Gestion des Produits</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu">
								<li><a href="formulaire.php" class="slide-item">Formulaire D'Ajout</a></li>
								<li><a href="taboulangerie.php" class="slide-item"> Table Produits</a></li>

								<li><a href="afficherCat.php" class="slide-item"> Table Catégories</a></li>
								<li><a href="editable.php" class="slide-item"> Transactions sur les Tables</a></li>
								<li><a href="statboulangerie.php" class="slide-item"> Statistiques</a></li>
								

							</ul>
						</li>
						<li>
							<a class="side-menu__item" href="emptypage.html"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Gestion Profiles</span></a>
						</li>
						<li>
							<a class="side-menu__item " href="panierBE.php"><i class="side-menu__icon fe fe-shopping-cart"></i><span class="side-menu__label">Gestion promotion </span></a>
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

                <!--app-content open-->
				<div class="app-content">
					<section class="section">

						<!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Edit table</h4>
							
						</div>
						<!--page-header closed-->

                        <!--row open-->              <!--MODIFICATIOOOONS-->
						                                 <!--Boulangerie-->
						                    
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<span class="table-add float-right">
											<a href="#!" class="btn btn-icon"><i class="fa fa-plus fa-1x" aria-hidden="true"></i></a>
										</span>
										<h4>Edit Table Produits </h4>
									</div>
									<div class="card-body">
										<div id="table" class="table-responsive table-editable">
										    
											<table class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
												<tr>
													<th class="text-center">Identifiant</th>
													<th class="text-center">Nom</th>
													<th class="text-center">Image(URL)</th>
													<th class="text-center">Numéro de catégorie</th>
													<th class="text-center">Quantité</th>
													<th class="text-center">Prix</th>
                                                    <th class="text-center">Trier</th>
													<th class="text-center">Supprimer</th>
													<th class="text-center">Modifier</th>
													
												</tr>
												<?php 
													foreach( $listeProduits as $row )
														{ ?>
												<tr>	
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['identifiant']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['nom']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['url']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['numcat']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['quantite']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['prix']; ?> </td>
												
													<td class="pt-3-half">
														<span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
														<span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
													</td>
												
												
												
															                                     <!-- suppr-->

													<td>
													<form method="POST" action="supprimerProduit.php">
														<span ><input  type="submit" class="btn btn-danger btn-rounded btn-sm my-0" name="Supprimer" value="Supprimer">
															<input type="hidden" value="<?php echo $row['identifiant']; ?>" name="identifiant"></span>
														
													</form>
													</td>
																			                        <!-- modif-->

													</td>
													<td>
														<span> <a href="modifierProduit.php?identifiant=<?PHP echo $row['identifiant']; ?>"><input  type="submit" class="btn btn-warning btn-rounded btn-sm my-0" name="identifiant" value="Modifier"></a>
														</span>
														
														
													
													</td>
												</tr>
												<?php
											}?>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						        
						                                             <!--Cat-->
														   
							<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-header">
										<span class="table-add float-right">
											<a href="#!" class="btn btn-icon"><i class="fa fa-plus fa-1x" aria-hidden="true"></i></a>
										</span>
										<h4>Edit Table Catégories</h4>
									</div>
									<div class="card-body">
										<div id="table" class="table-responsive table-editable">
										    
											<table class="table table-bordered table-responsive-md table-striped text-center mb-0 text-nowrap">
												<tr>
													<th class="text-center">Numéro de catégorie</th>
													<th class="text-center">Nom de catégorie</th>
												
                                                    <th class="text-center">Trier</th>
													<th class="text-center">Supprimer</th>
													<th class="text-center">Modifier</th>
													
												</tr>
												<?php 
													foreach( $listecategories as $row )
														{ ?>
												<tr>	
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['numcat']; ?> </td>
													<td class="pt-3-half" contenteditable="true"> <?php echo $row['nomcat']; ?> </td>
													
												
													<td class="pt-3-half">
														<span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
														<span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
													</td>
												
												
												
															                                     <!-- bouton suppr-->

													<td>
													<form method="POST" action="supprimerCat.php">
														<span ><input  type="submit" class="btn btn-danger btn-rounded btn-sm my-0" name="Supprimer" value="Supprimer">
															<input type="hidden" value="<?php echo $row['numcat']; ?>" name="numcat"></span>
														
													</form>
													</td>
																			                        <!-- bouton modif-->

													</td>
													
														
														<td>
														<span> <a href="modifierCat.php?numcat=<?PHP echo $row['numcat']; ?>"><input  type="submit" class="btn btn-warning btn-rounded btn-sm my-0" name="numcat" value="Modifier"></a>
														</span>
													
													    </td>
													
													
												</tr>
												<?php
											}?>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

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
								<img class="direct-chat-img" src="assets/img/avatar/avatar-3.jpg" alt="message user image">
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

		<!--Editable js-->
		<script src="../assets/js/editable.js"></script>

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

<!-- Mirrored from www.spruko.com/demo/splite/editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 10 Feb 2019 18:34:42 GMT -->
</html>