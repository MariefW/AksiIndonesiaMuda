<?php
    include_once("../config/database.php");
    include("header.php");
    // $functions = new Functions();
    // if (isset($_GET['edit_id']) && !empty($_GET['edit_id'])) {
    //
    //   $resultEdit = $functions->editpost($_GET['edit_id']);
    // }

    if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
  	{
  		$userid = $_GET['edit_id'];
  		$stmt_edit = $dbConn->prepare('SELECT judul, isi, tanggal, gambar FROM blogs WHERE id =:uid');
  		$stmt_edit->execute(array(':uid'=>$userid));
  		$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
  		extract($edit_row);
  	}
  	else
  	{
  		header("Location: index.php");
  	}

  	if(isset($_POST['btn_save']))
  	{

  		$judul = $_POST['judul'];
  		$isi = $_POST['isi'];
      $tanggal = $_POST['tanggal'];

  		$imgFile = $_FILES['gambar']['name'];
  		$tmp_dir = $_FILES['gambar']['tmp_name'];
  		$imgSize = $_FILES['gambar']['size'];

  		if($imgFile)
  		{
  			$upload_dir = 'gambar2/'; // upload directory
  			$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
  			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
  			$userpic = rand(1000,1000000).".".$imgExt;
  			if(in_array($imgExt, $valid_extensions))
  			{
  				if($imgSize < 1200000)
  				{
  					unlink($upload_dir.$edit_row['gambar']);
  					move_uploaded_file($tmp_dir,$upload_dir.$userpic);
  				}
  				else
  				{
  					$errMSG = "Sorry, your file is too large it should be less then 5MB";
            ?>
              <script>
                alert("Maaf, file anda lebih dari 1 Mb");
              </script>
            <?php
  				}
  			}
  			else
  			{
          ?>
            <script>
              alert("Maaf, file anda lebih dari 1 Mb");
            </script>
          <?php
  				$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  			}
  		}
  		else
  		{
  			// if no image selected the old image remain as it is.
  			$userpic = $edit_row['gambar']; // old image from database
  		}

  		// if no error occured, continue ....
  		if(!isset($errMSG))
  		{
  			$stmt = $dbConn->prepare('UPDATE blogs
  									     SET judul=:judul,
  										     isi=:isi,
                           tanggal=:tanggal,
  										     gambar=:gambar
  								       WHERE id=:uid');
  			$stmt->bindParam(':judul',$judul);
  			$stmt->bindParam(':isi',$isi);
        $stmt->bindParam(':tanggal',$tanggal);
  			$stmt->bindParam(':gambar',$userpic);
  			$stmt->bindParam(':uid',$userid);

  			if($stmt->execute()){
  				?>
                  <script>
  				alert('Blog berhasi di ubah');
  				window.location.href='daftar-blog.php';
  				</script>
                  <?php
  			}
  			else{
          ?>
            <script>
              alert("Blog tidak dapat diupdate");
            </script>
          <?php
  			}
  		}
  	}
    ?>

    <div class="main-content">
      <div class="container-fluid">
        <h1 class="page-title">Sunting Blog</h1>
        <div class="col-md-12">
          <!-- CONTACT FORM -->
          <div class="panel">
            <div class="panel-body">
              <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="contact-name" class="control-label">Judul Blog</label>
                  <input type="text" name="judul" class="form-control" id="contact-name" value="<?= $judul ?>">
                </div>
                <div class="input-group">
                  <label for="contact-date" class="control-label">Tanggal Penulisan</label>
                  <input type="date" name="tanggal" class="form-control" id="contact-date" value="<?= $tanggal ?>">
                </div>
                <br>
                <div class="form-group">
                  <label for="contact-name" class="control-label">Isi Blog</label>
                  <textarea class="form-control" name="isi" style="height: 100px;"><?= $isi ?></textarea>
                </div>
                <div class="custom-file">
                    <label for="exampleInputFile">Input Gambar</label>
                    <p><img src="gambar2/<?= $gambar ?>" width="150" /></p>
                    <input type="file" id="gambarbaru" name="gambar" class="customFile" class="custom-file-input" accept="image/*">
                    <p class="help-block">Max 1 Mb (.jpg .png .jpeg)</p>
                </div>
                <button type="submit" name="btn_save" class="btn btn-primary"><i class="fa fa-pencil"></i>Simpan</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

          <script type="text/javascript">
            var newfile = document.getElementById('gambarbaru');
            newfile.onchange = function(e){
              var ext = this.value.match(/\.([^\.]+)$/)[1];
              switch (ext) {
                case 'jpg':
                case 'JPG':
                case 'jpeg':
                case 'JPEG':
                case 'png':
                case 'PNG':
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
      </div>
