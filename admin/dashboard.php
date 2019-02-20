<?php
	include_once("controllers/dashboardController.php");
?>
<!doctype html>
<html lang="en">
	
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="Hyperspace Admin Panel" />
		<meta name="keywords" content="" />
		<meta name="author" content="Hyperspace Gallery" />
		<link rel="shortcut icon" href="img/favicon.ico" />
		<title>Hyperspace Admin Dashboard</title>
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
		
		<!-- Common CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="fonts/icomoon/icomoon.css" />
		<link rel="stylesheet" href="css/main.css" />

		<!-- Other CSS includes plugins - Cleanedup unnecessary CSS -->
		<!-- Chartist css -->
		<link href="vendor/chartist/css/chartist.min.css" rel="stylesheet" />
		<link href="vendor/chartist/css/chartist-custom.css" rel="stylesheet" />

	</head>
	<body>

		<!-- Loading starts -->
		<div class="loading-wrapper">
			<div class="loading">
				<div class="img"></div>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<!-- Loading ends -->

		<!-- BEGIN .app-wrap -->
		<div class="app-wrap">
			<!-- BEGIN .app-heading -->
			<header class="app-header">
				<div class="container-fluid">
					<div class="row gutters">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-8">
							<a class="mini-nav-btn float-left" href="#" id="app-side-mini-toggler">
								<i class="icon-sort"></i>
							</a>
							<a href="#app-side" data-toggle="onoffcanvas" class="onoffcanvas-toggler float-left" aria-expanded="true">
								<i class="icon-chevron-thin-left"></i>
							</a>
							<a href="index-2.html" class="logo float-left ml-4">
								<img src="img/unify.png" alt="Unify Admin Dashboard" />
							</a>
						</div>
						<div class="col-xl-5 col-lg-5 col-md-5 col-sm-3 col-4">
							<ul class="header-actions">
								<li class="dropdown">
									<a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
										<i class="icon-notifications_none"></i>
										<span class="count-label"></span>
									</a>
									<div class="dropdown-menu dropdown-menu-right lg" aria-labelledby="notifications">
										<ul class="imp-notify">
											
											<li>
												<div class="icon secondary">R</div>
												<div class="details">
													<p><span>No Messages</span></p>
												</div>
											</li>
										</ul>
									</div>
								</li>
								
								<li class="dropdown">
									<a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
										<img class="avatar" src="img/user.png" alt="User Thumb" />
										<span class="user-name"><?php echo  $user["lastname"] .''. $user["firstname"] ?></span>
										<i class="icon-chevron-small-down"></i>
									</a>
									<div class="dropdown-menu lg dropdown-menu-right" aria-labelledby="userSettings">
										<ul class="user-settings-list">
											<li>
												<a href="profile.html">
													<div class="icon">
														<i class="icon-account_circle"></i>
													</div>
													<p>Profile</p>
												</a>
											</li>
											<li>
												<a href="profile.html">
													<div class="icon red">
														<i class="icon-cog3"></i>
													</div>
													<p>Settings</p>
												</a>
											</li>
											
										</ul>
										<div class="logout-btn">
											<a href="login.html" class="btn btn-primary">Logout</a>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</header>
			<!-- END: .app-heading -->
			<!-- BEGIN .app-container -->
			<div class="app-container">
				<!-- BEGIN .app-side -->
				<aside class="app-side" id="app-side">
					<!-- BEGIN .side-content -->
					<div class="side-content ">
						<!-- BEGIN .user-profile -->
						<div class="user-profile">
							<img src="img/user.png" class="profile-thumb" alt="User Thumb">
							<h6 class="profile-name"><?php echo  $user["firstname"] ?></h6>
							<ul class="profile-actions">
								<li>
									<a href="#">
										<i class="icon-social-skype"></i>
										<span class="count-label red"></span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-social-twitter"></i>
									</a>
								</li>
								<li>
									<a href="login.html">
										<i class="icon-export"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- END .user-profile -->
						<!-- BEGIN .side-nav -->
						<nav class="side-nav">
							<!-- BEGIN: side-nav-content -->
							<ul class="unifyMenu" id="unifyMenu">
								<li class="active selected">
									<a href="dashboard.php" >
										<span class="has-icon">
											<i class="icon-laptop_windows"></i>
										</span>
										<span class="nav-title">Dashboards</span>
									</a>
								</li>
							
								<li>
									<a href="#" class="has-arrow" aria-expanded="false">
										<span class="has-icon">
											<i class="icon-adjust2"></i>
										</span>
										<span class="nav-title"> Hackathons</span>
									</a>
									<ul aria-expanded="false">
										<li>
											<a href="add_hackathon.php">Create Hackathons</a>
										</li>
										<li>
											<a href="manage_hackathon.php">Manage Hackthons</a>
										</li>
										
									</ul>
								</li>
								
							</ul>
							<!-- END: side-nav-content -->
						</nav>
						<!-- END: .side-nav -->
					</div>
					<!-- END: .side-content -->
				</aside>
				<!-- END: .app-side -->

				<!-- BEGIN .app-main -->
				<div class="app-main">
					<!-- BEGIN .main-heading -->
					<header class="main-heading">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
									<div class="page-icon">
										<i class="icon-laptop_windows"></i>
									</div>
									<div class="page-title">
										<h5>Dashboard</h5>
										<h6 class="sub-heading">Welcome to Hyperspace Admin </h6>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="right-actions">
										<a href="#" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="left" title="Download Reports">
											<i class="icon-download4"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</header>
					<!-- END: .main-heading -->
					<!-- BEGIN .main-content -->
					<div class="main-content">
						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="stats-widget">
											<div class="stats-widget-header">
												<i class="icon-facebook"></i>
											</div>
											<div class="stats-widget-body">
												<!-- Row start -->
												<ul class="row no-gutters">
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h6 class="title">No of Users</h6>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h4 class="total">5,600</h4>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="stats-widget">
											<div class="stats-widget-header">
												<i class="icon-twitter"></i>
											</div>
											<div class="stats-widget-body">
												<!-- Row start -->
												<ul class="row no-gutters">
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h6 class="title">No of Hackathons</h6>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h4 class="total">3,500</h4>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="stats-widget">
											<a href="#" class="stats-label" data-toggle="tooltip" data-placement="top" title="New Followers">47</a>
											<div class="stats-widget-header">
												<i class="icon-googleplus"></i>
											</div>
											<div class="stats-widget-body">
												<!-- Row start -->
												<ul class="row no-gutters">
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h6 class="title">No of Team</h6>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h4 class="total">2,800</h4>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-6">
								<div class="card">
									<div class="card-body">
										<div class="stats-widget">
											<a href="#" class="stats-label" data-toggle="tooltip" data-placement="top" title="New Posts">12</a>
											<div class="stats-widget-header">
												<i class="icon-rss"></i>
											</div>
											<div class="stats-widget-body">
												<!-- Row start -->
												<ul class="row no-gutters">
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h6 class="title">Blog</h6>
													</li>
													<li class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col">
														<h4 class="total">7,000</h4>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->
						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">Overview<a href="widgets.html" class="link">More examples</a></div>
									<div class="card-body">
										<!-- Row start -->
										<div class="row gutters">
											<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
												<h6 class="card-title mt-0">Visitors</h6>
												<div class="chartist custom-one">
													<div class="line-chart"></div>
												</div>
												<div class="download-details">
													<p>21<sup>%</sup> more visitors than last month</p>
												</div>
											</div>
											<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12">
												<div class="monthly-avg">
													<h6>Monthly Average</h6>
													<div class="avg-block">
														<h4 class="avg-total text-secondary">9500</h4>
														<h6 class="avg-label">
															Visitors
														</h6>
													</div>
													<div class="avg-block">
														<h4 class="avg-total text-primary">$510<sup>k</sup></h4>
														<h6 class="avg-label">
															Users
														</h6>
													</div>
												</div>
											</div>
											<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
												<h6 class="card-title mt-0">Engagements</h6>
												<div class="chartist custom-two">
													<div class="line-chart2"></div>
												</div>
												<div class="download-details">
													<p>15<sup>%</sup> more users than last month</p>
												</div>
											</div>
										</div>
										<!-- Row end -->
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->
					
					</div>
					<!-- END: .main-content -->
				</div>
				<!-- END: .app-main -->
			</div>
			<!-- END: .app-container -->
			<!-- BEGIN .main-footer -->
			<footer class="main-footer fixed-btm">
				Copyright Hyperspace Admin 2019.
			</footer>
			<!-- END: .main-footer -->
		</div>
		<!-- END: .app-wrap -->

		<!-- jQuery first, then Tether, then other JS. -->
		<script src="js/jquery.js"></script>
		<script src="js/tether.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="vendor/unifyMenu/unifyMenu.js"></script>
		<script src="vendor/onoffcanvas/onoffcanvas.js"></script>
		<script src="js/moment.js"></script>

		<!-- Slimscroll JS -->
		<script src="vendor/slimscroll/slimscroll.min.js"></script>
		<script src="vendor/slimscroll/custom-scrollbar.js"></script>

		<!-- Chartist JS -->
		<script src="vendor/chartist/js/chartist.min.js"></script>
		<script src="vendor/chartist/js/chartist-tooltip.js"></script>
		<script src="vendor/chartist/js/custom/custom-line-chart.js"></script>
		<script src="vendor/chartist/js/custom/custom-line-chart1.js"></script>
		

		<!-- Common JS -->
		<script src="js/common.js"></script>
		
	</body>
</html>