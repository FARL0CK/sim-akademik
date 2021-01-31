<!doctype html>
<html lang="en">
  <head>
    <title>SMK TARUNA INDONESIA JAMBI</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700|Oswald:400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="index/css/bootstrap.min.css">
    <link rel="stylesheet" href="index/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="index/css/owl.carousel.min.css">
    <link rel="stylesheet" href="index/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="index/css/aos.css">
    <link rel="shrotcut icon" href="{{ asset('img/favicon.ico') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="index/css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <!--Loading awal-->
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  
  <!-- home -->
  <div class="site-wrap"  id="home-section">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <!--topBar-->
    <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <a href="#" class="text-white"><span class="mr-2 text-white icon-envelope-open-o"></span> <span class="d-none d-md-inline-block"> humas@smktarunajambi.sch.id</span></a>
            <span class="mx-md-2 d-inline-block"></span>
            <a href="#" class="text-white"><span class="mr-2 text-white icon-phone"></span> <span class="d-none d-md-inline-block">081373356204</span></a>
            <div class="float-right">
            <a href="#" class="text-white"><span class="mr-2 text-white icon-twitter"></span> <span class="d-none d-md-inline-block">Twitter</span></a>
            <span class="mx-md-2 d-inline-block"></span>
            <a href="https://www.instagram.com/smktarunaindonesiajambi/s" class="text-white"><span class="mr-2 text-white icon-instagram"></span> <span class="d-none d-md-inline-block">Instagram</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Header-->
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
      <div class="container">
        <div class="row align-items-center position-relative">
            <div class="site-logo">
              <a href="index.html" class="text-black"><span class="text-primary">SMK Taruna Indonesia Jambi</a>
            </div>
            <div class="col-12">
              <nav class="site-navigation text-right ml-auto " role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#services-section" class="nav-link">Jurusan</a></li>
                <li><a href="#about-section" class="nav-link">Penerimaan Taruna Baru</a></li>
                <li><a href="#testimonials-section" class="nav-link">Portal Alumni</a></li>
                <li><a href="#blog-section" class="nav-link">Galery</a></li> 
                <li><a href="{{ url('login') }}" class="nav-link">Login</a></li>
              </ul>
              </nav>
            </div>
          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
        </div>
      </div>     
    </header>
    
    <!--carousel-->
    <div class="owl-carousel slide-one-item">
      <div class="site-section-cover overlay img-bg-section" style="background-image: url('index/images/carosel-1.png'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-7">
              <h1 data-aos="fade-up" data-aos-delay="">Selamat datang di Portal</h1>  
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">SMK TARUNA INDONESIA JAMBI</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-outline-white border-w-2 btn-md">Selengkapnya</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section-cover overlay img-bg-section" style="background-image: url('index/images/carosel-2.png'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-8">
              <h1 data-aos="fade-up" data-aos-delay="">Tiada hari tanpa latihan</h1>      
              <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Jalesveva Jayamahe</p>
              <p data-aos="fade-up" data-aos-delay="200"><a href="#" class="btn btn-outline-white border-w-2 btn-md">Get in touch</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="site-section-cover overlay img-bg-section" style="background-image: url('index/images/carosel-3.png'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-12 col-lg-8">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Jurusan-->
    <div class="site-section">
      <div class="block__73694 mb-2" id="services-section">
        <div class="container">
        <div class="text-center mb-5">
          <div class="block-heading-1">
            <h2>Jurusan</h2>
          </div>
        </div>
          <div class="row d-flex no-gutters align-items-stretch">
            <div class="col-12 col-lg-6 block__73422" style="background-image: url('index/images/img_1.png');" data-aos="fade-right" data-aos-delay="">
            </div>
            <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
              <h2 class="mb-3 text-black">NAUTIKA KAPAL NIAGA</h2>
              <p>Nautika Kapal Niaga mengajarkan dasar-dasar untuk menjadi perwira dek Kapal yang handal. Bidang ini meliputi navigasi kapal, perawatan dan pemeliharaan kapal, pelaksanaan bongkar muat diatas kapal serta administarasi pelabuhan yang efektif dan efisien. Nautika Kapal Niaga memiliki faslitas Ruang Full Mission Bridge Simulator, Ruang CBT Simulator. Ruang Pemetaan untuk menyiapkan calon perwira muda dalam bidang navigasi kapal niaga. Para siswa dibekali dasar-dasar ilmu kepelautan selama 3 tahun dan praktek di atas kapal 1 tahun dan lulus memperoleh sertifikat Ahli Nautika Tingkat IV (ANT IV) berskala Internasional. Peluang Kerja pada pengelolaan pelabuhan, menjadi nahkoda kapal, kerja di perusahaan pelayaran dan melanjutkan pendidikan ke Perguruan Tinggi Pelayaran.</p>
            </div>
          </div>
        </div>      
      </div>
      <div class="block__73694">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">
            <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('index/images/img_2.png');" data-aos="fade-left" data-aos-delay="">
            </div>         
            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
              <h2 class="mb-3 text-black">Teknika Kapal Niaga</h2>
              <p>Teknika Kapal Niaga mengajarkan dasar-dasar untuk menjadi perwira Teknika Kapal yang handal. Bidang ini meliputi keahlian profesional dalam pengoperasian, perawatan dan perbaikan mesin kapal niaga. Teknika Kapal Niaga dilengkapi dengan faslitas ruang mesin kapal untuk, menyiapkan calon perwira muda menjadi ahli permesinan kapal niaga. Para siswa dibekali dasar-dasar ilmu kepelautan selama 3 tahun dan praktek diatas  kapal 1 tahun  dan  lulus memperoleh sertifikat Ahli Teknika Tingkat IV (ATT IV) berskala Internasional. Peluang Kerja pada perusahaan pelayaran, menjadi teknisi kapal, kerja di galangan kapal dan melanjutkan pendidikan ke Perguruan Tinggi Pelayaran.</p>
            </div>
          </div>
        </div>      
      </div>
      <div class="block__73694 mb-2">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">
            <div class="col-12 col-lg-6 block__73422" style="background-image: url('index/images/img_3.png');" data-aos="fade-right" data-aos-delay="">
            </div>
            <div class="col-lg-5 ml-auto p-lg-5 mt-4 mt-lg-0" data-aos="fade-left" data-aos-delay="">
              <h2 class="mb-3 text-black">Teknik Kendaraan Ringan</h2>
              <p>Materi yang dipelajari meliputi merawat dan memperbaiki mesin mobil, merawat dan memperbaiki komponen kelistrikan mobil, merawat dan memperbaiki komponen pemindah tenaga mobil, merawat dan memperbaiki komponen chasis suspensi mobil Peluang kerja pada industri Perakitan mobil/sepeda motor, industri pembuat komponen-komponen  otomotif, bengkel/Servis kendaraan mobil, Industri  Karoseri Mobil, berwirausaha  jasa servis kendaraan dan  juga melanjutkan ke Perguruan Tinggi.</p>
            </div>
          </div>
        </div>      
      </div>
      <div class="block__73694">
        <div class="container">
          <div class="row d-flex no-gutters align-items-stretch">
            <div class="col-12 col-lg-6 block__73422 order-lg-2" style="background-image: url('index/images/img_4.png');" data-aos="fade-left" data-aos-delay="">
            </div>         
            <div class="col-lg-5 mr-auto p-lg-5 mt-4 mt-lg-0 order-lg-1" data-aos="fade-right" data-aos-delay="">
              <h2 class="mb-3 text-black">Teknika Electornika</h2>
              <p>Materi yang dipelajari meliputi aplikasi sistem elektronika digital, elektronika computer, sistem mikroprosesor dan mikrokontroller, rangkaian elektronika terapan dan elektronika Industri, program sistem pengendali elektronik berbasis mikroprosesor,  mikrokontroller, PLC dan Komputer,  sistem pengendali dan sistem otomasi elektronika.Kalau kita menceritakan dan mengupas di balik istimewanya sekolah kita yang luar biasa ini memang nggak pernah ada habisnya. Nah, maka tak ada salahnya ya kalau kita menelisik keunikan dan asiknya jurusan yang berada di lingkup Elektronika Industri.</p>
            </div>
          </div>
        </div>      
      </div>
    </div>

    <!--pendaftaran-->
    <div class="site-section bg-dark" id="about-section">
      <div class="container">
        <div class="row justify-content-center mb-4 block-img-video-1-wrap">
          <div class="col-md-12 mb-5">
            <figure class="block-img-video-1" data-aos="fade">
              <a href="https://www.youtube.com/watch?v=iwDTDJNdo9c&feature=emb_logo&ab_channel=MediaTaruna" data-fancybox data-ratio="2">
                <span class="icon"><span class="icon-play"></span></span>
                <img src="index/images/hero_1.png" alt="Image" class="img-fluid">
              </a>
            </figure>
          </div>
        </div>
      </div>
    </div>

    <!--PortalAlumni-->
    <div class="site-section bg-light block-13" id="testimonials-section" data-aos="fade">
      <div class="container">
        <div class="text-center mb-5">
          <div class="block-heading-1">
            <h2>Protal Alumni</h2>
          </div>
        </div>
        <div class="owl-carousel nonloop-block-13">
          <div>
            <div class="block-testimony-1 text-center">
              <blockquote class="mb-4">
                <table>
                  <tr>
                  <td>Nama Lengkap : Jhoni Wardana</td>
                  </tr>                  
                  <tr>
                    <td>NIT : 010719862004</td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin : Laki-Laki</td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir : 01 Juli 1986</td>
                  </tr>
                </table>
              </blockquote>
              <figure>
                <img src="index/images/alumni1.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Capt Jhoni Wardana</h3>
            </div>
          </div>
          <div>
            <div class="block-testimony-1 text-center">

              <figure>
                <img src="index/images/alumni2.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 mb-4 text-black">Wahdiansyah</h3>

              <blockquote class="mb-4">
                <table>
                  <tr>
                    <td>Nama Lengkap : Wahdiansyah</td>
                  </tr>                  
                  <tr>
                    <td>NIT : 9968815433</td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin : Laki-Laki</td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir : 18 Desember 1996</td>
                  </tr>
                </table>
              </blockquote>

              
            </div>
          </div>
          <div>
            <div class="block-testimony-1 text-center">
              <blockquote class="mb-4">
                <table>
                  <tr>
                    <td>Nama Lengkap : Dandi saputra</td>
                  </tr>                  
                  <tr>
                    <td>NIT : 1311382238</td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin : Laki-Laki</td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir : 01 Juni 1997</td>
                  </tr>
                </table>
              </blockquote>
              <figure>
                <img src="index/images/alumni3.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 text-black">Dandi saputra</h3>
            </div>
          </div>
          <div>
            <div class="block-testimony-1 text-center">
              <figure>
                <img src="index/images/alumni4.jpg" alt="Image" class="img-fluid rounded-circle mx-auto">
              </figure>
              <h3 class="font-size-20 mb-4 text-black">M. Arafat</h3>
              <blockquote class="mb-4">
                <table>
                  <tr>
                    <td>Nama Lengkap : M.arafat</td>
                  </tr>                  
                  <tr>
                    <td>NIT : 13113828912</td>
                  </tr>
                  <tr>
                    <td>Jenis Kelamin : Laki-Laki</td>
                  </tr>
                  <tr>
                    <td>Tanggal Lahir : 18 Februari 1998</td>
                  </tr>
                </table>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Galery-->
    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center mb-5">
            <div class="block-heading-1" data-aos="fade-up" data-aos-delay="">
              <h2>Galery</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="">
            <div>
              <a href="single.html" class="mb-4 d-block"><img src="index/images/galeri1.png" alt="Image" class="img-fluid rounded"></a>
              <h2><a href="single.html">Praktek Advance Fire Fighting</a></h2>
              <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 18, 2021</span> By <a href="single.html" class="by">Admin</a></p>
              <p>Pelaksanaan Kegiatan Praktek Pemadaman Kebakaran Untuk Jurusan Nautika Kapal Niaga dan Teknika Kapal Niaga</p>
              <p><a href="single.html">Selengkapnya ...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div>
              <a href="single.html" class="mb-4 d-block"><img src="index/images/galeri2.png" alt="Image" class="img-fluid rounded"></a>
              <h2><a href="single.html">Jurusan Di SMK Taruna Indonesia Jambi</a></h2>
              <p class="text-muted mb-3 text-uppercase small"><span class="mr-2">January 30, 2021</span> By <a href="single.html" class="by">Admin</a></p>
              <p>Nautika Kapal Niaga, Teknika Kapal Niaga, Teknik Kendaraan Ringan Otomotif, Teknik Audio Video</p>
              <p><a href="single.html">Selengkapnya ...</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--footer-->
    <footer>
          <div class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <center>
            <p class="copyright text-white">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="https://colorlib.com" class="text-white" >FARL0CK</a>
          </p>
            </center>
          </div>
          </div>          
        </div>       
      </div>
    </div>
    </footer>
  </div>

  <!--js-->
  <script src="index/js/jquery-3.3.1.min.js"></script>
  <script src="index/js/popper.min.js"></script>
  <script src="index/js/bootstrap.min.js"></script>
  <script src="index/js/owl.carousel.min.js"></script>
  <script src="index/js/jquery.sticky.js"></script>
  <script src="index/js/jquery.waypoints.min.js"></script>
  <script src="index/js/jquery.animateNumber.min.js"></script>
  <script src="index/js/jquery.fancybox.min.js"></script>
  <script src="index/js/jquery.easing.1.3.js"></script>
  <script src="index/js/aos.js"></script>
  <script src="index/js/main.js"></script>
  </body>
</html>