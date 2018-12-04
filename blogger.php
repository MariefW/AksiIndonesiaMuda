<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include_once("config/Functions.php");
      $functions = new Functions();
     ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="img/favicon-aim.png">

    <title>Blog | Aksi Muda Indonesia</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Owl Carousel Assets -->
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="box-shadow: 0 0px 12px 2px rgba(86, 99, 116, 0.25); background-color: white;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="img/LogoAIM.png" alt="No gambar" id="aim-picture"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>
    </nav>
    <!-- Page Content -->
    <div class="container-fluid" style="margin-top: 100px;">
        <div class="col-sm-12 text-center">
          <h2 class="text-kegiatan">Blog Aksi Indonesia Muda</h2>
          <p class="text-semibold">#Blogaksiindonesiamuda</p>
        </div>
    </div>

<div class="row">

    <?php
      	if($functions->rowCount("blogs") > 0) {
          foreach($functions->fetchAll("blogs") as $row) {
            // extract($row);
            ?>

            <section class="box-content box-6">
            <br>
            <br>
            <div class="container">
              <div class="col-xs-3">
                 <div class="item">
                  <div class="box-item">
                    <table>
                    <td><a href="blog-post.html"><img src="admin/gambar2/<?= $row['gambar']?>" height="30%" ></a><td>
                      </table>
                    <div class="content">
                      <h5><a href="blog-post.html" id="judul-post">Tim Aksi Indonesia Muda peduli Donggala</a></h5>
                      <p style="font-family: arial; font-weight: 500;">Suspendisse porttitor sapien ac lectus euismod imperdiet. Curabitur nec nibh at massa pellentesque accumsan eu id nibh. Donec accumsan ut mi et tincidunt...</p>
                      <span>27 May 2019, By Aksi Indonesia Muda</span><br>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</section>
            <?php
          }
      }
      else {
        ?>
        <div class="col-xs-12">
          <div class="alert alert-warning">
            	<span class="glyphicon glyphicon-info-sign"></span> &nbsp; Belum ada Blog
          </div>
        </div>
        <?php
      }?>

</div>



      <!-- Pagination -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
              <li class="page-item"><a class="page-link" href="blogger.html">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="blogger1.html">Next</a>
            </li>
      </ul>
    </nav>
  <!-- /.container -->
    <div id="footer">
    <div class="container-fluid" id="section-footer">
      <div class="row animated opacity mar-bot20" data-animation="animation">
      <div class="col-sm-12 align-center">
      <ul class="sosial-network social-circle">
        <li>
          <a href="#" class="fa fa-facebook" id="IcoFacebook"></a>
          <a href="#" class="fa fa-twitter" id="IcoTwitter"></a>
          <a href="#" class="fa fa-instagram" id="IcoInstagram"></a>
          <a href="#" class="fa fa-youtube" id="IcoYoutube"></a>
        </li>
    </ul>
      </div>
      </div>
    <div class="row align-center copyright">
      <div class="col-sm-12">
        <p style="margin-bottom: 1px;" class="footer">Copyright © Aksi Indonesia Muda</p>
      </div>
    </div>
    </div>
    </div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
