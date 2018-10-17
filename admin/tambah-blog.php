<?php
include_once("../config/header.php");

if(!$functions->checkSession('login'))
{
    header("Location: login.php");
    exit();
}
?>
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
	<link rel="stylesheet" href="assets/vendor/summernote/summernote.css">
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
								<!-- <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> -->
								<li><a href="logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
						<li><a href="index.php"><i class="lnr lnr-home"></i> <span>Dashboards</span></a></li>
						<li>
							<a href="#blog" data-toggle="collapse" class="active"><i class="fa fa-navicon"></i> <span>Blog</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="blog" class="collapse ">
								<ul class="nav">
									<li><a href="daftar-blog.php">Daftar Blog</a></li>
									<li><a href="tambah-blog.php" class="active">Tambah Blog</a></li>
								</ul>
							</div>
						</li>
						<li><a href="update.php"><i class="fa fa-refresh"></i> <span>Update Dana</span></a></li>
						<!-- <li><a href="profile.php"><i class="lnr lnr-user"></i> <span>Profil</span></a></li> -->
					</ul>
				</nav>
			</div>
		</div>
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- <ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
						<li>Tambah Blog</li>
					</ul> -->
					<h1 class="page-title">Tambahkan Entri Blog</h1>
					<div class="col-md-12">
						<!-- CONTACT FORM -->
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Tambah Blog</h3>
							</div>
							<div class="panel-body">
								<form>
									<div class="form-group">
										<label for="contact-name" class="control-label">Judul Blog</label>
										<input type="text" class="form-control" id="contact-name" placeholder="Masukkan Judul Blog">
									</div>
									<div class="form-group">
										<label for="contact-name" class="control-label">Penulis</label>
										<input type="text" class="form-control" id="contact-name" placeholder="Penulis">
									</div>
									<div class="input-group">
										<label for="contact-date" class="control-label">Tanggal Penulisan</label>
										<input type="date" class="form-control" id="contact-date" value="">
									</div>
									<br>
									<div class="form-group">
										<label for="contact-name" class="control-label">Isi Blog</label>
										<textarea class="form-control" style="height: 100px;"></textarea>
									</div>
									<div class="custom-file">
									    <label for="exampleInputFile">Input Gambar</label>
									    <input type="file" class="customFile" class="custom-file-input">
									    <p class="help-block">Example block-level help text here.</p>
									</div>
									<div class="form-group">
										<label  class="control-label">Kategori Blog</label>
										<select class="form-control" name="jual" id="exampleFormControlSelect1">
											<option class="active">--Pilih Salah Satu--</option>
											<option>Penyuluhan</option>
											<option>Organisasi</option>
										</select>
									</div>
									<button type="submit" class="btn btn-primary"><i class="fa fa-pencil"></i>Submit Blog</button>
								</form>
							</div>
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
	<script src="assets/vendor/summernote/summernote.min.js"></script>
	<script src="assets/vendor/markdown/markdown.js"></script>
	<script src="assets/vendor/to-markdown/to-markdown.js"></script>
	<script src="assets/vendor/bootstrap-markdown/bootstrap-markdown.js"></script>
	<script src="assets/scripts/klorofilpro-common.js"></script>
	<!-- DEMO PANEL -->
		<script type="text/javascript">
			// summernote editor
			$('.summernote').summernote({
			height: 100,
			focus: true,
			onpaste: function() {
				alert('You have pasted something to the editor');
				}
			});
		</script>
</body>
</html>
