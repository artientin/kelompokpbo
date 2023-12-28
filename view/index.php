<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header('location: login.php');
  exit;
}

?>
<html lang="en">

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

  <title>Pemrograman Berorientasi Objek</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              PBO
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="service.php">Layanan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Hubungi Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Definisi Hak Asasi Manusia (HAM)
                    </h1>
                    <p>
                      Hak asasi manusia merupakan hak dasar yang secara kodrati melekat pada diri manusia, bersifat universal dan langgeng, oleh karena itu harus dilindungi, dihormati, dipertahankan, dan tidak boleh diabaikan, dikurangi, atau dirampas oleh siapapun.
                    </p>
                    <div class="btn-box">
                      <a href="contact.php" class="btn1">
                        Hubungi Kami
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/slider-img.png" alt="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Sejarah Hak Asasi Manusia (HAM)
                    </h1>
                    <p>
                      Sejarah perkembangan HAM juga ditandai dengan adanya tiga peristiwa penting yakni Magna Charta, Revolusi Amerika, dan Revolusi Prancis.
                    </p>
                    <div class="btn-box">
                      <a href="contact.php" class="btn1">
                        Hubungi Kami
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- case section -->

  <section class="case_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Studi Kasus Kami
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/ham.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Definisi Hak Asasi Manusia (HAM)
              </h5>
              <p>
                Hak asasi manusia merupakan hak dasar yang secara kodrati melekat pada diri manusia, bersifat universal dan langgeng, oleh karena itu harus dilindungi, dihormati, dipertahankan, dan tidak boleh diabaikan, dikurangi, atau dirampas oleh siapapun.
              </p>
              <a href="ham.php">
                <span>
                  Baca Selengkapnya
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/sejarah.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Sejarah Hak Asasi Manusia (HAM)
              </h5>
              <p>
                Sejarah perkembangan HAM juga ditandai dengan adanya tiga peristiwa penting yakni Magna Charta, Revolusi Amerika, dan Revolusi Prancis.
              </p>
              <a href="sejarah.php">
                <span>
                  Baca Selengkapnya
                </span>
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end case section -->

  <?php
  include '../php/config.php';
  if (isset($_POST['tambah'])){
    mysqli_query($conn, "INSERT INTO subscribe SET
    email = '$_POST[sub]'");
    
    echo "<script>alert('Email telah berhasil dikirim')</script>";
  }
  ?>

  <div class="footer_container">
    <!-- info section -->

    <section class="info_section ">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 ">
            <div class="info_detail">
              <h4>
                PBO
              </h4>
              <p>
                Menyediakann layananan bagi masyarakat yang ingin menyampaikan atau memberitahukan masalahnya.
              </p>
            </div>
          </div>
          <div class="col-md-6 col-lg-2 mx-auto">
            <div class="info_link_box">
              <h4>
                Links
              </h4>
              <div class="info_links">
                <a class="" href="index.php">
                  Beranda
                </a>
                <a class="" href="service.php">
                  Layanan
                </a>
                <a class="" href="contact.php">
                  Hubungi Kami
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ">
            <h4>
              Subscribe
            </h4>
            <form action="#" method="POST">
              <input type="text" name="sub" placeholder="Masukkan Email" />
              <button type="submit" name="tambah">
                Subscribe
              </button>
            </form>
          </div>
          <div class="col-md-6 col-lg-3 mb-0 ml-auto">
            <div class="info_contact">
              <h4>
                Alamat
              </h4>
              <div class="contact_link_box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>
                    Location
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>
                    Call +62 867-2354-088
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    pbo444444@gmail.com
                  </span>
                </a>
              </div>
            </div>
            <div class="info_social">
              <a href="https://www.facebook.com/">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="https://twitter.com/">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="https://id.linkedin.com/">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info section -->

    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Html Templates</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->
  </div>

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>