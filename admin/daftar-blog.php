<?php
		include_once("../config/header.php");
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
									<li><a href="daftar-blog.php" class="active">Daftar Blog</a></li>
									<li><a href="tambah-blog.php">Tambah Blog</a></li>
								</ul>
							</div>
						</li>
						<li><a href="update.php"><i class="fa fa-refresh"></i> <span>Update Dana</span></a></li>
						<!-- <li><a href="profil.php"><i class="lnr lnr-user"></i> <span>Profil</span></a></li> -->
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
						<li>Daftar Blog</li>
					</ul> -->
					<h1 class="page-title">Daftar Blog</h1>
					<div class="row">
						<div class="col-md-12">
							<!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Daftar Blog</h3>
								</div>
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Id</th>
												<th>Judul Blog</th>
												<!-- <th>Penulis</th> -->
												<th>Isi</th>
												<th>Tanggal</th>
												<th>Gambar</th>
												<!-- <th>Kategori</th> -->
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											if($functions->rowCount("blogs") > 0) {
													$i = 1;
													foreach($functions->fetchAll("blogs") as $row) { ?>
															<tr>
																	<td><?=$i?></td>
																	<td><?=$row['judul']?></td>
																	<td><?=$row['isi']?></td>
																	<td><?=date_format(date_create($row['tanggal']), "d M Y")?></td>
																	<td><?=$row['gambar']?></td>
																	<td>
																		<a href="" class="btn btn-primary" data-toggle="modal" data-target="#sunting"><i class="fa fa-pencil"></i>Sunting</a>
																		<br>
																		<br>
																		<a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i>Hapus</a>
																</td>
															</tr>
												 <?php $i++; }
											} else { ?>
													<tr><td colspan='6'><center>No Data Avaliable</center></td></tr>
											<?php
											}?>
											<!-- <tr>
												<td>1</td>
												<td>Gempa Lombok</td>
												<td>Aksi Indonesia Muda</td>
												<td>07/08/2018</td>
												<td><img src="assets/img/5.jpg"></td>
												<td>
													<p>
														Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
													</p>
												</td>
												<td>Berita</td>
												<td>
													<a href="" class="btn btn-primary" data-toggle="modal" data-target="#sunting"><i class="fa fa-pencil"></i>Sunting</a>
													<br>
													<br>
													<a href="" class="btn btn-danger"><i class="fa fa-trash-o"></i>Hapus</a>
												</td>
											</tr> -->
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BORDERED TABLE -->
							<div class="modal fade" id="sunting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">
										<i class="flaticon-plus"></i> Sunting Blog
									</h5>
								</div>
								<div class="modal-body">
									<form>
										<div class="form-group">
											<label  class="form-control-label">
												Id
											</label>
											<input type="number" class="form-control" id="">
										</div>
										<div class="form-group">
											<label  class="form-control-label">
												Judul Blog
											</label>
											<input type="text" class="form-control" id="">
										</div>
										<div class="form-group">
											<label  class="form-control-label">
												Penulis
											</label>
											<input type="text" class="form-control" id="">
										</div>
										<div class="form-group">
											<label  class="form-control-label">
												Tanggal
											</label>
											<input type="date" class="form-control" id="">
										</div>
										<div class="custom-file">
										    <label for="exampleInputFile">Input Gambar</label>
										    <input type="file" class="customFile" class="custom-file-input">
										    <p class="help-block">Example block-level help text here.</p>
										</div>
										<div class="form-group">
											<label for="contact-name" class="control-label">Isi Blog</label>
											<textarea class="form-control" style="height: 100px;"></textarea>
										</div>
										<div class="form-group">
											<label  class="form-control-label">
												Kategori
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
