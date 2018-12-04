<?php
    include("header.php");
 ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="panel-body">
					<!-- <ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
						<li>Update</li>
					</ul> -->
					<h1 class="page-title">Update Total Dana</h1>
					<div class="col-md-12">
						<!-- CONTACT FORM -->
						<div class="panel" method="post">
							<div class="panel-heading">
								<h3 class="panel-title">Input Total Dana</h3>
							</div>
							<div class="panel-body">
								<form method="post" action="update.php">
									<div class="input-group">
										<span class="input-group-addon">Rp.</span>
										<input type="number" name="dana" class="form-control" placeholder="<?php $functions->fetchdana(); ?>">
									</div>
									<br>
									<button type="submit" name="update"class="btn btn-primary"><i class="fa fa-refresh"></i>Update</button>
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

		<?php
		if(isset($_POST['update']))
		{
			$name = $functions->updateDana();
			echo "<meta http-equiv='refresh' content='0'>";
			// header('Location: update.php');
		}
		 ?>
</body>
</html>
