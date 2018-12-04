<?php
    include("header.php");
  ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- <ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
						<li>Dashboards</li>
					</ul> -->
					<h1 class="page-title">Beranda</h1>
					<!-- TASK PROGRESS -->
					<div class="row">
						<div class="col-md-6">
							<div class="widget widget-task-progress clearfix">
								<div class="left">
									<a href="#">Jumlah Postingan Blog</a>
								</div>
								<span ><?= $functions->rowCount("blogs") ?></span>
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
