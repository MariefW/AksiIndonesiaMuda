<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | Aksi Indonesia Muda</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="shortcut icon" href="assets/img/favicon-aim.png">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
	<link rel="stylesheet" href="assets/vendor/x-editable/bootstrap3-editable/css/bootstrap-editable.css">
	<link rel="stylesheet" href="assets/vendor/dropzone/dropzone.min.css">
	<link rel="stylesheet" href="assets/vendor/bootstrap-tour/css/bootstrap-tour.min.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<link rel="stylesheet" href="demo-panel/style-switcher.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<span>Aksi Indonesia Muda</span> -
				<span class="label label-success">Online</span>
			</div>
			<div class="container-fluid">
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/aim.png" class="img-circle" alt="Avatar"> <span>Aksi Indonesia Muda</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="#"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->

		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
							<a href="index.php"><i class="lnr lnr-home"></i> <span>Dashboards</span></a>
						</li>
						<li>
							<a href="#blog" data-toggle="collapse" class="collapsed"><i class="fa fa-navicon"></i> <span>Blog</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="blog" class="collapse ">
								<ul class="nav">
									<li><a href="daftar-blog.html">Daftar Blog</a></li>
									<li><a href="tambah-blog.html">Tambah Blog</a></li>
								</ul>
							</div>
						</li>
						<li><a href="update.html"><i class="fa fa-refresh"></i> <span>Update</span></a></li>
						<li><a href="profile.html" class="active"><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="assets/img/user-admin.png" class="img-circle" alt="Avatar">
										<h3 class="name">Aksi Indonesia Muda</h3>
										<span class="online-status status-available">Available</span>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Informasi Tentang AIM</h4>
										<ul class="list-unstyled list-justify">
											<li>Admin <span>Aksi Indonesia Muda</span></li>
											<li>Birthdate <span>17 November 2012</span></li>
											<li>Mobile <span>+62 813 4374 1169</span></li>
											<li>Email <span>aksiindonesiamuda@yahoo.com</span></li>
											<li>Website <span><a href="https://www.aksiindonesiamuda.com">www.aksiindonesiamuda.com</a></span></li>
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">Tentang</h4>
										<p>Aksi Indonesia Muda (AIM) merupakan sebuah organisasi sosial (NGO) yang berpusat di makassar & berfokus pada pemberdayaan masyarakat dan pendidikan informal yang diinisiasi oleh para pemuda(i). Organisasi ini didirikan pada 17 November 2012 sebagai bentuk keprihatinan terhadap meningkatnya jumlah kemiskinan. </p>
									</div>
									<div class="text-center"><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#edit-profile"><i class="fa fa-pencil"></i>Edit Profile</a></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<div class="modal fade" id="edit-profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">
										<i class="flaticon-plus"></i>Edit Profile
									</h5>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label  class="form-control-label">
												Admin
											</label>
											<input type="text" class="form-control" id="" placeholder="Aksi Indonesia Muda">
										</div>
										<div class="form-group">
											<label  class="form-control-label">
												Birthdate
											</label>
											<input type="date" class="form-control" id="" placeholder="12 November 2012">
										</div>
										<div class="form-group">
											<label  class="form-control-label">
												Mobile
											</label>
											<input type="text" class="form-control" id="">
										</div>
										<div class="form-group">
											<label  class="form-control-label">
												Email
											</label>
											<input type="Email" class="form-control" id="">
										</div>
										<div class="form-group">
											<label  class="form-control-label">
												Website
											</label>
											<input type="text" class="form-control" id="">
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">
										Close
									</button>
									<button type="button" class="btn btn-primary">
										Save
									</button>
								</div>
							</div>
							</div>
							</div>
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<h4 class="heading">Sosial Media</h4>
								<!-- AWARDS -->
								<div class="awards">
									<div class="row">
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<a href="https://www.facebook.com/AksiIndonesiaMuda/"><span class="fa fa-facebook award-icon"></span></a>
												</div>
												<span>Facebook</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<a href="https://www.facebook.com/AksiIndonesiaMuda/"><span class="fa fa-twitter award-icon"></span></a>
												</div>
												<span>Twitter</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<a href="https://www.facebook.com/AksiIndonesiaMuda/"><span class="fa fa-instagram award-icon"></span></a>
												</div>
												<span>Instagram</span>
											</div>
										</div>
										<div class="col-md-3 col-sm-6">
											<div class="award-item">
												<div class="hexagon">
													<a href="https://www.facebook.com/AksiIndonesiaMuda/"><span class="fa fa-youtube award-icon"></span></a>
												</div>
												<span>You Tube</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END AWARDS -->
								<!-- TABBED CONTENT -->
								<div class="custom-tabs-line tabs-line-bottom left-aligned">
									<ul class="nav" role="tablist">
										<li><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Admin</a></li>
									</ul>
								</div>
								<div class="tab-content">
									<div class="tab-pane fade in active" id="tab-bottom-left1">
										<div class="table-responsive">
											<table class="table project-table">
												<thead>
													<tr>
														<th>Nama Admin</th>
														<th>Progress</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>User 1</td>
														<td>
															<div class="progress">
																<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
																	<span>60% Complete</span>
																</div>
															</div>
														</td>
														<td><span class="label label-success">ACTIVE</span></td>
													</tr>
													<tr>
														<td>User 2</td>
														<td>
															<div class="progress">
																<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
																	<span>33% Complete</span>
																</div>
															</div>
														</td>
														<td><span class="label label-success">ACTIVE</span></td>
													</tr>
													<tr>
														<td>User 3</td>
														<td>
															<div class="progress">
																<div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
																	<span>68% Complete</span>
																</div>
															</div>
														</td>
														<td><span class="label label-success">ACTIVE</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<!-- JAVA SCRIPT -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js"></script>
		<script src="assets/vendor/Flot/jquery.flot.js"></script>
		<script src="assets/vendor/Flot/jquery.flot.resize.js"></script>
		<script src="assets/vendor/Flot/jquery.flot.time.js"></script>
		<script src="assets/vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
		<script src="assets/vendor/x-editable/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
		<script src="assets/vendor/jquery.maskedinput/jquery.maskedinput.min.js"></script>
		<script src="assets/vendor/moment/min/moment.min.js"></script>
		<script src="assets/vendor/jquery-sparkline/js/jquery.sparkline.min.js"></script>
		<script src="assets/vendor/dropzone/dropzone.min.js"></script>
		<script src="assets/vendor/bootstrap-tour/js/bootstrap-tour.min.js"></script>
		<script src="assets/scripts/klorofilpro-common.js"></script>
</body>
</html>
