<!DOCTYPE html>
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

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
  </div>

  <!-- sejarah section -->
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <br>
                <h5><b>SEJARAH LAHIRNYA HAK ASASI MANUSIA</b>
                <br>
            </div>
        </div>
    </div>
    <div class="img-box" align="center">
        <img src="images/sejarah.jpg" alt="">
    </div>
    <div class="row justify-content-center">
        <div class="col-8">
            <br>
            <p>Dikutip dari buku Hukum Asasi Manusia oleh Dr. A. Widiada Gunakaya, sejarah HAM bermula dari Eropa melalui kristalisasi pemikiran seorang filsuf Inggris pada adab ke-17 bernama John Locke.</p>
            <p>Ia menyatakan adanya hak kodrati (natural rights) yang melekat pada setiap diri manusia, yakni hak atas hidup, hak kebebasan, da hak milik.</p>
            <p>Sejarah perkembangan HAM juga ditandai dengan adanya tiga peristiwa penting yakni Magna Charta, Revolusi Amerika, dan Revolusi Prancis.</p>
            <p>Sistem pemikiran HAM disuarakan secara internasional ke seluruh dunia untuk memperjuangkan HAM untuk diakui, dihormati, dilindungi, dan ditegakan demi harga diri dan martabat manusia.</p>
            <p>Pada Januari 1947, Perserikatan Bangsa Bangsa (PBB) membentuk komisi hak asasi manusia (commission of human right), yang sidangnya dimulai di bawah pimpinan Ny. Eleanor Roosevelt.</p>
            <p>Dua tahun kemudian, tepatnya pada 10 Desember 1948 Sidang Umum PBB yang diselenggarakan di Istana Chaillot, Paris, menerima baik hasil kerja panitia tersebut.</p>
            <p>Hasilnya berupa Universal Declaration Of Human Rights atau Pernyataan Sedunia tentang Hak-Hak Asasi Manusia, yang terdiri dari 30 pasal.</p>
            <p>Dari 58 Negara yang terwakil dalam sidang umum tersebut, 48 negara menyatakan persetujuannya, 8 negara abstain, dan 2 negara lainnya absen. Kemudian, setiap tanggal 10 Desember diperingati sebagai hari Hak Asasi Manusia.</p>
            <p>Hak Asasi Manusia di Indonesia bersumber dan bermuara pada Pancasila. Artinya Hak Asasi Manusia mendapat jaminan kuat dari falsafah bangsa, yakni Pancasila.</p>
            <p>Bagi bangsa Indonesia, melaksanakan hak asasi manusia bukan berarti melaksanakan dengan sebebas-bebasnya, melainkan harus memperhatikan ketentuan-ketentuan yang terkandung dalam pandangan hidup bangsa Indonesia, yaitu Pancasila.</p>
            <p>Hal ini disebabkan pada dasarnya memang tidak ada hak yang dapat dilaksanakan secara mutlak tanpa memperhatikan hak orang lain.</p>
            <p>Indonesia mengakui dan menjunjung tinggi hak asasi manusia dan kebebasan dasar manusia sebagai hak yang secara kodrati melekat dan tidak terpisah dari manusia yang harus dilindungi, dihormati, dan ditegakkan demi peningkatan martabat kemanusiaan, kesejahteraan, kebahagiaan, dan kecerdasan serta keadilan.</p>
            <p>Berbagai instrumen hak asasi manusia yang dimiliki Negara Republik Indonesia, yakni:</p>
            <p>1. Undang-Undang Dasar 1945</p>
            <p>2. Ketetapan MPR Nomor XVII/MPR/1998 tentang Hak Asasi Manusia</p>
            <p>3. Undang-Undang Nomor 39 Tahun 1999 tentang Hak Asasi Manusia</p>
        </div>
    </div>
  <!-- end sejarah section -->

  <?php
  include '../php/config.php';
  if (isset($_POST['tambah'])){
    mysqli_query($conn, "INSERT INTO subscribe SET
    email = '$_POST[sub]'");
    
    echo "<script>alert('Email telah dikirim')</script>";
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
                Menyediakann layanan bagi masyarakat yang ingin menyampaikan atau memberitahukan masalahnya.
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
                    Call +62 823-3506-1589
                  </span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>
                    pbo@gmail.com
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

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