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
    <link rel="shortcut icon" href="img/favicon-aim.png">

    <title>Aksi Indonesia Muda</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">

  <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Owl Carousel Assets -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/aim.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/loader.css">

  </head>

  <body id="page-top">

    <div id='loader'>
      <div class="spinner"></div>
    </div>

    <script>
      window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
          loader.classList.add('fadeOut');
        }, 500);
      });
    </script>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php"><img src="img/LogoAIM.png" alt="No gambar" id="aim-picture"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto" id="navbar">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" id ="text" href="#about">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" id ="text" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" id ="text" href="#masalah">Masalah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" id ="text" href="#contact">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header class="masthead text-center text-white d-flex" id="gambar">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="ml12">
              Welcome to Aksi Indonesia Muda
            </h1>
            <br>
          </div>
          <div class="col-lg-8 mx-auto">
            <a class="btn btn-light btn-xl js-scroll-trigger" href="donasi.php" id="donasi">Donasi</a>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="jual.php" id="jual">jual</a>
            <br>
            <br>
            <center>
            <div class="rectangle text-center">
              <p style="padding-top: 11px;">
                Rp. <?php $functions->fetchdana(); ?> -,
              </p>
            </div>
            </center>
            <br>
            <p class="ml10" style="font-size: 15px;">
              "Setiap anda berdonasi atau menjual barang bekas, 60 % keuntungan akan digunakan untuk beasiswa pendidikan anak sokalah dasar dan pemberdayaan masyarakat, 40 % akan digunakan untuk pengembangan website."
            </p>
          </div>
        </div>
      </div>
    </header>
     <section class="text-white" id="langkah">
      <div class="container text-center">
          <h1 class="ml10">
            <span class="text-wrapper">
              <span class="letters" style="color:black;">Langkah - Langkah Donasi dan Jual</span>
            </span>
          </h1>
          <br>
          <br>
          <br>
          <div class="row">
              <div class="col-md-4">
                  <figure class="member-photo"><img src="img/langkah1.png" alt="" style="height: 200px"/></figure>
                  <span class="nomor">1</span>
                  <p id="subtitle">
                     Membuka website Aksi Indonesia Muda<br>lalu menekan tombol donasi dan jual.
                  </p>
              </div>
              <div class="col-md-4">
                  <figure class="member-photo"><img src="img/langkah4.png" alt="" style="height: 200px; "/></figure>
                  <span class="nomor">2</span>
                  <p id="subtitle">
                    Mengisi form donasi atau <br>jual secara lengkap.
                  </p>
              </div>
              <div class="col-md-4">
                  <figure class="member-photo"><img src="img/langkah3.png" alt="" style="height: 200px; "/></figure>
                  <span class="nomor">3</span>
                  <p id="subtitle">
                    Kami akan mengkonfirmasi waktu penjemputan<br>melalui email paling lambat 2 x 24 jam.
                  </p>
              </div>
          </div>
      </div>
    </section>
    <section class="text-white" id="about">
      <div class="container text-center">
        <h1 class="ml10">
            <span class="text-wrapper">
              <span class="letters">Apa itu Aksi Indonesia Muda?</span>
            </span>
          </h1>
        <div class="row">
          <div class="col-md-12 text-center">
              <p class="text-faded mb-4" id="text-faded">Aksi Indonesia Muda (AIM) merupakan sebuah organisasi sosial (NGO) yang berpusat di makassar & berfokus pada pemberdayaan masyarakat dan pendidikan informal yang diinisiasi oleh para pemuda(i). Organisasi ini didirikan pada 17 November 2012 sebagai bentuk keprihatinan  terhadap meningkatnya jumlah kemiskinan.
              </p>
          </div>
        </div>
      </div>
     </section>
    <section class="box-content box-6" id="galeri">
      <div class="container" style="margin-top: -90px;">
        <div class="heading wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
          <center>
            <h1 class="ml10">
              <span class="text-wrapper">
                <span class="letters">Galeri</span>
              </span>
            </h1>
            <div class="intro" style="font-family: arial; font-weight: 500; color:black;">Apa yang sudah kami lakukan?</div>
          </center>
        </div>
        <br>
        <br>
        <div class="content">
          <div id="owl-blog" class="owl-carousel">
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide1.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide2.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide3.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide4.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide5.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide6.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide7.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide8.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide9.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide10.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide11.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide12.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide13.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide14.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide15.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide16.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide17.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide18.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide19.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide20.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide21.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide22.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide23.PNG" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide24.png" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide25.png" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide26.png" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide27.png" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide28.png" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide29.png" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide30.png" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide31.png" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide32.png" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide33.png" class="img-responsive"/>
              </div>
            </div>
            <div class="item">
              <div class="box-item">
                <img src="img/galeri/slide34.png" class="img-responsive"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="text-white" id="masalah">
      <div class="container text-center">
         <h1 class="ml10">
            <span class="text-wrapper">
              <span class="letters">Masalah</span>
            </span>
          </h1>
          <br>
          <div class="row">
              <div class="col-md-6">
                  <figure class="member-photo"><img src="img/pendidikan.png" alt=""/></figure>
                  <h3 class="ttl2">Pendidikan</h3>
                  <hr id="lead">
                  <p id="subtitle"  style="color: #fff;">
                    2.5 juta anak Indonesia tidak dapat menikmati<br>pendidikan lanjutan
                    yakni sebanyak 600 ribu anak usia Sekolah dasar (SD) <br>dan 1.9 juta
                    anak usia Sekolah Menengah Pertama (SMP) (Unicef, 2017).
                  </p>
              </div>
              <div class="col-md-6">
                  <figure class="member-photo"><img src="img/kemiskinan.png" alt=""/></figure>
                  <h3 class="ttl2">Kemiskinan</h3>
                  <hr id="lead">
                  <p id="subtitle" style="color: #fff;">
                    26.58 juta orang Indonesia hidup di bawah Kemiskinan<br>(Badan Pusat Statistik, 2017).
                  </p>
              </div>
          </div>
      </div>
    </section>
    <section class="text-white" id="story">
      <div class="container text-center">
          <h1 class="ml10">
            <span class="text-wrapper">
              <span class="letters">Sedangkan</span>
            </span>
          </h1>
          <br>
          <br>
          <div class="row">
              <div class="col-md-6">
                  <p class="subtitle">
                     <figure class="member-photo"><img src="img/form.png" alt="" class="img-sedangkan"/></figure>
                      Limbah Kertas Indonesia pada tahun 2017 mencapai 7.93 juta ton (Aria, 2017).
                  </p>
              </div>
              <div class="col-md-6">
                  <p class="subtitle">
                    <figure class="member-photo"><img src="img/t-shirt.png" alt="" class="img-sedangkan"/></figure>
                    Enviromental Protection Agency (EPA) menunjukkan bahwa setiap tahunnya, satu orang membuang 31.75 Kg pakaiannya
                  </p>
              </div>
          </div>
      </div>
    </section>
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h1 class="ml10">
              <span class="text-wrapper">
                <span class="letters" style="color: black;">Contact</span>
              </span>
            </h1>
            <hr class="my-4">
            <p class="mb-5">Kalian bisa menghubungi kami lewat telepon ataupun mengirim pesan email kepada kami,<br>#SalamAksi<br>#SalamMuda<br>#untukIndonesia</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact" id="icon-phone"></i>
            <p>
              <a href="tel:+6281343741196"">+62 813 4374 1169</a>
            </p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact" id="message"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">aksiindonesiamuda@yahoo.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>
  <div id="footer">
    <div class="container-fluid" id="section-footer">
      <div class="row animated opacity mar-bot20" data-animation="animation">
      <div class="col-sm-12 align-center">
      <ul class="sosial-network social-circle">
        <li>
          <a href="https://www.facebook.com/AksiIndonesiaMuda/"> <i class="fa fa-facebook" id="IcoFacebook"></i></a>
          <a href="https://twitter.com/aksi_muda?lang=en"> <i class="fa fa-twitter" id="IcoTwitter"></i></a>
          <a href="https://www.instagram.com/aksiindonesiamuda/?hl=en"> <i class="fa fa-instagram" id="IcoInstagram"></i></a>
          <a href="https://www.youtube.com/channel/UCobAaXnaHznKbNMyNyoR9vw"> <i class="fa fa-youtube" id="IcoYoutube"></i></a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/aim.min.js"></script>
    <script src="js/jquery.localScroll.min.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Owl Carousel JS -->
    <script src="js/owl.carousel.js"></script>

    <!-- Definity JS -->
    <script src="js/main.js"></script>
    <script type="text/javascript">
        // Wrap every letter in a span
        $('.ml12').each(function(){
          $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
        });

        anime.timeline({loop: true})
        .add({
          targets: '.ml12 .letter',
          translateX: [40,0],
          translateZ: 0,
          opacity: [0,1],
          easing: "easeOutExpo",
          duration: 1200,
          delay: function(el, i) {
            return 500 + 30 * i;
          }
        }).add({
          targets: '.ml12 .letter',
          translateX: [0,-30],
          opacity: [1,0],
          easing: "easeInExpo",
          duration: 1100,
          delay: function(el, i) {
            return 100 + 30 * i;
          }
        });

        // Wrap every letter in a span
        $('.ml10 .letters').each(function(){
          $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>"));
        });

        anime.timeline({loop: true})
          .add({
            targets: '.ml10 .letter',
            rotateY: [-90, 0],
            duration: 1300,
            delay: function(el, i) {
              return 45 * i;
            }
          }).add({
            targets: '.ml10',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 500
        });
    </script>
  </body>
</html>
