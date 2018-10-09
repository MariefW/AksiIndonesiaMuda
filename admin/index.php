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
							<a href="index.php" data-toggle="collapse" class="active"><i class="lnr lnr-home"></i> <span>Dashboards</span></a>
						</li>
						<li>
							<a href="#blog" data-toggle="collapse" class="collapsed"><i class="fa fa-navicon"></i> <span>Blog</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="blog" class="collapse ">
								<ul class="nav">
									<li><a href="daftar-blog.php">Daftar Blog</a></li>
									<li><a href="tambah-blog.php">Tambah Blog</a></li>
								</ul>
							</div>
						</li>
						<li><a href="update.php"><i class="fa fa-refresh"></i> <span>Update</span></a></li>
						<li><a href="profile.php"><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
						<li>Dashboards</li>
					</ul>
					<h1 class="page-title">Dashboards</h1>
					<div class="row">
						<div class="col-md-12">
							<div class="">
								<div class="alert alert-info alert-dismissible" role="alert">
									Selamat datang, <b>Superadmin Aksi Indonesia Muda</b>!<br>
									<b>Kata sandi yang anda gunakan</b> adalah <b>kata sandi awal</b> dan <b>perlu diubah terlebih dahulu</b> untuk <b>kenyamanan dan keamanan</b> akun yang anda gunakan. Jika anda ingin mengubah kata sandi silahkan klik <a href="" data-toggle="modal" data-target="#ganti-pass"><i>Ganti Kata Sandi</i></a>.
								</div>
							</div>
						</div>
					</div>
					<!-- TASK PROGRESS -->
					<div class="row">
						<div class="col-md-6">
							<div class="widget widget-task-progress clearfix">
								<div class="left">
									<a href="#">Donasi</a>
									<div class="progress progress-xs task-progress progress-transparent custom-color-orange">
										<div class="progress-bar" data-transitiongoal="60" style="width: 60%;" aria-valuenow="60"></div>
									</div>
								</div>
								<span class="percentage">60%</span>
							</div>
						</div>
						<div class="col-md-6">
							<div class="widget widget-task-progress clearfix">
								<div class="left">
									<a href="#">Jual</a>
									<div class="progress progress-xs task-progress progress-transparent custom-color-blue">
										<div class="progress-bar" data-transitiongoal="50" style="width: 50%;" aria-valuenow="50"></div>
									</div>
								</div>
								<span class="percentage">50%</span>
							</div>
						</div>
					</div>
					<!-- END TASK PROGRESS -->
					<div class="modal fade" id="ganti-pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">
								<i class="flaticon-plus"></i> Ganti Kata Sandi
							</h5>
						</div>
						<div class="modal-body">
							<form>
								<div class="form-group">
									<label  class="form-control-label">
										Password Lama
									</label>
									<input type="password" class="form-control" id="">
								</div>
								<div class="form-group">
									<label  class="form-control-label">
										Password Baru
									</label>
									<input type="password" class="form-control" id="">
								</div>
								<div class="form-group">
									<label  class="form-control-label">
										Confirmasi Password
									</label>
									<input type="password" class="form-control" id="">
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
					<div class="row">
						<div class="col-md-12">
							<!-- WEEKLY VISITS -->
							<div class="panel panel-solid-blue">
								<div class="panel-heading">
									<h3 class="panel-title">Grafik Pengunjung</h3>
								</div>
								<div class="panel-body no-padding">
									<div class="panel-content-wrapper">
										<div style="height: 250px;" id="visit-chart"></div>
									</div>
									<div class="padding-25">
										<div class="row">
											<div class="col-sm-6">
												<div id="tour-visits" class="visits-metric text-center">
													<span class="title">Visits</span>
													<span class="value">13,754</span>
													<span class="change text-success">37,15%</span>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="visits-metric text-center">
													<span class="title">Page Views</span>
													<span class="value">23,473</span>
													<span class="change text-success">12,35%</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END WEEKLY VISITS -->
						</div>
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
		<script src="assets/scripts/aim-common.js"></script>
		<script type="text/javascript">
	var toggleDemoPanel = function(e) {
		e.preventDefault();

		var panel = document.getElementById('demo-panel');
		if (panel.className) panel.className = '';
		else panel.className = 'active';
	}

	// fix each iframe src when back button is clicked
	$(function() {
		$('iframe').each(function() {
			this.src = this.src;
		});
	});
	</script>

	<!-- END DEMO PANEL -->
	<script>
	$(function() {

		// task progress
		$('.task-progress .progress-bar').progressbar();

		// visit chart
		var plot, visit;

		visit = [
			[gt(2013, 1, 1), 200],
			[gt(2013, 2, 1), 300],
			[gt(2013, 3, 1), 360],
			[gt(2013, 4, 1), 340],
			[gt(2013, 5, 1), 440],
			[gt(2013, 6, 1), 600],
			[gt(2013, 7, 1), 1050]
		];

		plot = $.plot($('#visit-chart'), [{
				data: visit,
				label: "Visits"
			}],

			{
				series: {
					lines: {
						show: true,
						lineWidth: 2,
						fill: false
					},
					points: {
						show: true,
						lineWidth: 3,
						fill: true,
						fillColor: "#fff"
					},
					shadowSize: 0
				},
				grid: {
					hoverable: true,
					clickable: true,
					borderWidth: 0,
					tickColor: "#999",

				},
				colors: ["#fff"],
				xaxis: {
					mode: "time",
					timezone: "browser",
					minTickSize: [1, "day"],
					timeformat: "%a",
					font: {
						color: "#fff"
					},
					tickColor: "transparent",
					autoscaleMargin: 0.02
				},
				yaxis: {
					font: {
						color: "#fff"
					},
					tickColor: "transparent",
					ticks: 8,
				},
				legend: {
					show: false
				},
				tooltip: {
					show: true,
					cssClass: 'flotTip-blue',
					content: '%s: %y'
				}
			}
		);


		// get day function
		function gt(y, m, d) {
			return new Date(y, m - 1, d).getTime();
		}


	});
	</script>
</body>
</html>
