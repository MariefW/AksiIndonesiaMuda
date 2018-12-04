<?php
include_once("../config/header.php");
 $functions = new Functions();

if(!$functions->checkSession('login'))
{
    header("Location: login.php");
    exit();
}
?>
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
						<li>
							<a href="index.php" ><i class="lnr lnr-home"></i> <span>Beranda</span></a>
						</li>
						<li>
							<a href="daftar-blog.php"><i class="fa fa-navicon"></i><span>Daftar Blog</span></a>
							<!-- <div id="blog" class="collapse ">
								<ul class="nav">
									<li><a href="daftar-blog.php">Daftar Blog</a></li>
									<li><a href="tambah-blog.php">Tambah Blog</a></li>
								</ul>
							</div> -->
						</li>
						<li><a href="update.php" ><i class="fa fa-refresh"></i> <span>Update Dana</span></a></li>
						<!-- <li><a href="profile.php"><i class="lnr lnr-user"></i> <span>Profile</span></a></li> -->
					</ul>
				</nav>
			</div>
		</div>
		<div class="main">
