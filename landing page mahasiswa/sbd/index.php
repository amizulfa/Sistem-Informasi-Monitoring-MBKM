<?php 
include "config/connect.php" 

?>


<!DOCTYPE html>
<html>
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>TimesTwo</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,600,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="./css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="./css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <h3>
              Times
            </h3>
            <span> Two</span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="forms/form_konfirmasi.html"> Form Konfirmasi </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="forms/form_ajuan.html"> Form Pengajuan </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                        K A M P U S M E R D E K A
                      </h1>
                      <a href="#tentang">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                        P E N G A J U A N
                      </h1>
                      <a href="./forms/form_ajuan.html">
                        Buka Form
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="detail-box">
                    <div>
                      <h1>
                        K O N F I R M A S I
                      </h1>
                      <a href="./forms/form_konfirmasi.html">
                        Buka Form
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- special section -->

  <section class="special_section">
    <div class="container">
      <div class="special_container">
        <div class="box b1">
          <div class="img-box">
            <img src="images/award.png" alt="" />
          </div>
          <div class="detail-box">
            <h4>
              FORM <br />
              VERIFIKASI
            </h4>
            <a href="forms/form_konfirmasi.html">
              Isi Di sini
            </a>
          </div>
        </div>
        <div class="box b2">
          
          <div class="detail-box">
            <h4 class="pt-4">
              FORM
            </h4>
          </div>
        </div>
        <div class="box b3">
          <div class="img-box">
            <img src="images/books-stack-of-three.png" alt="" />
          </div>
          <div class="detail-box">
            <h4>
              FORM <br />
              PENGAJUAN
            </h4>
            <a href="forms/form_ajuan.html">
              Isi Di sini
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end special section -->

  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="side_img">
      <img src="images/side-img.png" alt="" />
    </div>
    <div class="container" id="tentang">
      <div class="row">
        <div class="col-md-6">
          <div class="img_container">
            <div class="img-box b1">
              <img src="images/a-1.jpg" alt="" />
            </div>
            <div class="img-box b2">
              <img src="images/a-2.jpg" alt="" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h3>
               TENTANG MBKM
              </h3>
              <p>
              Kampus Merdeka (MBKM) adalah program yang dicanangkan oleh Menteri Pendidikan 
              dan Kebudayaan yang bertujuan mendorong mahasiswa untu menguasai berbagai 
              keilmuan untuk bekal memasuki dunia kerja.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_menu">
            <h5>
              QUICK LINKS
            </h5>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="event.html"> Form </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Login</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_course">
            <h5>
              TOP RATED COURSE
            </h5>
            <p>
              There are many variations of passages of Lorem Ipsum available,
              but the majority have suffered alteration in some form, by
              injected humou
            </p>
          </div>
        </div>

        <div class="col-md-5 offset-md-1">
          <div class="info_news">
            <h5>
              FOR ANY QUERY, PLEASE WRITE TO US
            </h5>
            <div class="info_contact">
              <a href="">
                Location
              </a>
              <a href="">
                demo@gmail.com
              </a>
              <a href="">
                Call : +01 1234567890
              </a>
            </div>
            <form action="">
              <input type="text" placeholder="Enter Your email" />
              <button>
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

 
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>