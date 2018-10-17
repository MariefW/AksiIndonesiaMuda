<?php
include_once("../config/header.php");

if($functions->checkSession('login'))
{
    header("Location: index");
    exit();
}

if (!empty($_POST["submit"])){
		$resultLogin = $functions->signIn($_POST["username"],$_POST["password"]);
		// var_dump($resultLogin);
		if ($resultLogin["success"])
		{
				header("Location: index");
				exit();
		} else {
			?>
			<script type="text/javascript">
				alert("Kombinasi Username dan Password anda salah");
			</script>
			<?php
		}

}

 ?>

<!DOCTYPE html>
<html lang="en" class="fullscreen-bg">
<head>

	 <!---------------------------------------------------- CSS ------------------------------------------------------>
	<title>Login | Aksi Indonesia Muda</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="shortcut icon" href="assets/img/favicon-aim.png">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="login.css">
	<!-- ICONS -->
</head>
<body style="background: url(bg-1.jpg);">
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box" style="max-width: 435px;  text-align: center; background-image: url(bg-1.jpg);">
						<div class="content" style="max-width: 320px;">
							<div class="header">
								<img src="assets/img/Logo AIM.png" class="img-circle" alt="Avatar" height="100">
							</div>
							<form class="form-auth-small" action="" method="post">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" name="username" class="form-control" placeholder="Username" required="" style="
									background-image: url(bg-1.jpg); color: #fff; border-color: #8100ff;">
								</div>
								<br>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-key"></i></span>
									<input type="password" name="password" class="form-control" placeholder="Password" required="" style="
									background-image: url(bg-1.jpg); color: #fff; border-color: #8100ff;">
								</div>
								<input type = "submit" name="submit" value = " Login " class="btn btn-default" id="btn-login"/>
							</form>

						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
</html>
