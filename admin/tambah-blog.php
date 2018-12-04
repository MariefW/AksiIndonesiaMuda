<?php
    include("header.php");
 ?>
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
							<!-- <div class="panel-heading">
								<h3 class="panel-title">Tambah Blog</h3>
							</div> -->
							<div class="panel-body">
								<form method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="contact-name" class="control-label">Judul Blog</label>
										<input type="text" name="judul" class="form-control" id="contact-name" placeholder="Masukkan Judul Blog" required>
									</div>
									<div class="input-group">
										<label for="contact-date" class="control-label">Tanggal Penulisan</label>
										<input type="date" name="tanggal" class="form-control" id="contact-date" required>
									</div>
									<br>
									<div class="form-group">
										<label for="contact-name" class="control-label">Isi Blog</label>
										<textarea class="form-control" name="isi" style="height: 100px;" required></textarea>
									</div>
									<div class="custom-file">
									    <label for="exampleInputFile">Input Gambar</label>
									    <input type="file" id="filegambar" name="gambar" class="customFile" class="custom-file-input" accept="image/*" required>
									    <p class="help-block">Max 1 Mb (.jpg .png .jpeg)</p>
									</div>
									<button type="submit" name="Submit" class="btn btn-primary"><i class="fa fa-pencil"></i>Submit Blog</button>
								</form>
							</div>
						</div>

                <?php
                  if (isset($_POST['Submit'])) {
                    $resultCreate = $functions->createpost($_POST['judul'],$_POST['isi'],$_POST['tanggal'],$_FILES['gambar']['name'], $_FILES['gambar']['tmp_name'], $_FILES['gambar']['size']);
                    }
                  ?>
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

      //Mendeteksi format gambar
      var file = document.getElementById('filegambar');
      file.onchange = function(e){
          var ext = this.value.match(/\.([^\.]+)$/)[1];
          switch(ext)
          {
              case 'jpg':
              case 'JPG':
              case 'jpeg':
              case 'JPEG':
              case 'bmp':
              case 'PNG':
              case 'png':
                  if(this.files[0].size > 1200000){
                     alert("Gambar tidak boleh lebih dari 1Mb");
                     this.value = "";
                  };
                  break;
              default:
                  alert('Hanya gambar jpg, png dan jpeg yang diperbolehkan');
                  this.value='';
          }
      };
		</script>
</body>
</html>
