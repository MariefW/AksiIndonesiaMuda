<?php
    include("header.php");
 ?>
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- <ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
						<li>Daftar Blog</li>
					</ul> -->
					<h1 class="page-title">Daftar Blog</h1>

          <a style="margin-left:15px" href="tambah-blog.php" class="btn btn-success"><i class="fa fa-pencil"></i>Buat Blog</a>
					<div class="row">
						<div class="col-md-12">
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>Id</th>
												<th width="15%">Judul Blog</th>
												<!-- <th>Penulis</th> -->
												<th width="35%">Isi</th>
												<th>Tanggal</th>
												<th width="13%">Gambar</th>
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
																	<td><img src="gambar2/<?= $row['gambar']?>" width="100%"></td>
																	<td>
																		<a href="editpost.php?edit_id=<?=$row['id']?>" class="btn btn-primary"><i class="fa fa-pencil"></i>Sunting</a> |
																		<a href="deletepost.php?id=<?=$row['id']?>" onclick="return confirm('Anda yakin ingin menghapus?')" class="btn btn-danger"><i class="fa fa-trash-o"></i>Hapus</a>
																</td>
															</tr>
												 <?php $i++; }
											} else { ?>
													<tr><td colspan='6'><center>Belum ada Blog</center></td></tr>
											<?php
											}?>
										</tbody>
									</table>
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
