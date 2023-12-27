<?php
include '../php/config.php';
include '../php/pengaduan.php';
?>

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
              <li class="nav-item ">
                <a class="nav-link" href="index.php">Beranda<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
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

  <!-- form section -->

  <div class="container mb-5">
    <figure class="text-center">
      <blockquote class="blockquote">
        <br>
        <h4><b>Form Pengaduan Online</b></h4>
      </blockquote>
      <figcaption class="blockquote-footer">
       <cite title="Source Title">PBO</cite>
      </figcaption>
    </figure>
    <div style="color: blue">
      <h5>Data Pengadu/Pelapor</h5>
    </div>
    <form action="" method="POST">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama Pelapor</label>
      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
    </div>
    <div class="mb-3">
        <label for="gender" class="form-label">Jenis Kelamin</label><br>
        <select name="jenis_kelamin" id="jenis_kelamin">
          <option value="L">Laki-Laki</option>
          <option value="P">Perempuan</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="tipe_identitas" class="form-label">Tipe Identitas</label><br>
        <select name="tipe_identitas" id="tipe_identitas">
            <option value="KTP">Kartu Tanda Penduduk (KTP)</option>
            <option value="SIM">Surat Izin Mengemudi (SIM)</option>
            <option value="KTM">Kartu Tanda Mahasiswa/Kartu Pelajar</option>
            <option value="NPWP">Nomor Pokok Wajib Pajak (NPWP)</option>
            <option value="SIUP">Surat Izin Usaha Perdagangan</option>
            <option value="PAS">Paspor</option>
            <option value="DLL">Dan Lain-Lain</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="nomor_identitas" class="form-label">Nomor Identitas</label>
        <input type="text" class="form-control" name="nomor_identitas" placeholder="Masukkan Nomor Identitas">
    </div>
    <div class="mb-3">
        <label for="file_identitas" class="form-label">Unggah Identitas Pelapor</label>
        <input type="file" class="form-control" name="file_identitas">
    </div>
    <div class="mb-3">
        <label for="domisili" class="form-label">Alamat Domisli</label>
        <textarea class="form-control" name="domisili" rows="3" placeholder="Masukkan Alamat Domisli"></textarea>
    </div>
    <div class="mb-3">
        <label for="nomor_telpon" class="form-label">Nomor Telepon/Ponsel Pelapor</label>
        <input type="text" class="form-control" name="nomor_telpon" placeholder="Masukkan Nomor Telepon/Ponsel">
    </div>
    <div class="mb-3">
        <label for="nomor_fax" class="form-label">Nomor Fax Pelapor</label>
        <input type="text" class="form-control" name="nomor_fax" placeholder="Masukkan Nomor Fax">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email Pelapor</label>
        <input type="email" class="form-control" name="email" placeholder="Masukkan Email">
    </div>
    <br>
    <div style="color: blue">
        <h5>Deskripsi Kejadian</h5>
    </div>
    <div class="mb-3">
        <label for="perihal" class="form-label">Perihal</label>
        <textarea class="form-control" name="perihal" rows="3" placeholder="Ceritakan Kejadian Secara Rinci"></textarea>
    </div>
    <div class="mb-3">
        <label for="lokasi" class="form-label">Lokasi Kejadian</label>
        <textarea class="form-control" name="lokasi" rows="3" placeholder="Masukkan Lokasi Kejadian Secara Rinci"></textarea>
    </div>
    <div class="mb-3">
        <label for="tanggal" class="form-label">Tanggal dan Waktu Kejadian</label>
        <textarea class="form-control" name="tanggal" rows="3" placeholder="Uraikan Tanggal dan Waktu Kejadian"></textarea>
    </div>
    <div class="mb-3">
        <label for="harapan" class="form-label">Harapan Pengadu</label>
        <textarea class="form-control" name="harapan" rows="3" placeholder="Tuliskan Harapan Pengadu"></textarea>
    </div>
    <div class="mb-3">
        <label for="file_pendukung" class="form-label">Lampiran Dokumen Pendukung</label>
        <input type="file" class="form-control" name="file_pendukung">
    </div>
    <div class="d-flex ">
      <button type="submit" name="buat">Buat Aduan</button>
    </div>
  </form>
  </div>

  <!-- end form section -->
  
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
                <a class="" href="about.php">
                  Tentang
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