<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAPEMAS | Home </title>

    
    <!-- Favicons -->
    <link href="assets/img/icondapemas-1.png" rel="icon">
    <link href="assets/img/icondapemas-1.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
   
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i> Tugas Lab PBW</i> 
        <i> Sri Hariyati/1908107010018</i> 
        <i class="icofont-envelope"></i> <a href="mailto:sri.hr@mhs.unsyiah.ac.id">sri.hr@mhs.unsyiah.ac.id</a>
      </div>
    </div>
  </div>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <h1 class="logo mr-auto"><a href="/">DAPEMAS</a></h1>
    <nav class="nav-menu d-none d-lg-block">
      <ul>
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="/mahasiswa">Data Mahasiswa</a></li>
        <li><a href="/siswa">Data Siswa</a></li>
        <li class="drop-down"><a href="">Tambah Data</a>
        <ul>
          <li><a href="/mahasiswa/tambah">Mahasiswa</a></li>
          <li><a href="/siswa/tambah">Siswa</a></li>
        </ul>
        </li>
      </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->

  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>DAPEMAS</h1>
      <h2>Portal Data Pelajar dan Mahasiswa Kota Sabang</h2><br>
    </div>
  </section><!-- End Hero -->

    <!-- =======section apa itu dapemas dan jumlah data ======= -->
  <section id="why-us" class="why-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content">
            <h3>Apa itu Dapemas?</h3>
            <p>
              Dapemas adalah sebuah website yang berisi informasi data siswa yang menempuh pendidikan di Kota Sabang dan data mahasiswa yang sedang berkuliah.
            </p>
          </div>
        </div>
       <div class="col-lg-8 d-flex align-items-stretch">
      <div class="icon-boxes d-flex flex-column justify-content-center">
        <div class="row">
          <div class="col-xl-4 d-flex align-items-stretch">
            <div class="icon-box mt-4 mt-xl-0">
              <i class="bx bx-user-circle"></i>         
                <h4>Mahasiswa</h4>
                  <p>Jumlah Data Mahasiswa:</p>                  
                  <span>{{$jmahasiswa}}</span>
            </div>
          </div>
          <div class="col-xl-4 d-flex align-items-stretch">
            <div class="icon-box mt-4 mt-xl-0">
              <i class="bx bx-user-circle"></i>
                <h4>Siswa</h4>
                <p>Jumlah Data Siswa:</p>
                <span>{{$jsiswa}}</span>
            </div>
          </div>
          <div class="col-xl-4 d-flex align-items-stretch">
            <div class="icon-box mt-4 mt-xl-0">
              <i class="bx bxs-trophy"></i>
                <h4>Prestasi</h4>
                <p>Jumlah Data Prestasi:</p>
            </div>
          </div>
        </div>
      </div><!-- End .content-->
    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>DAPEMAS</span></strong>. Tugas Lab PBW
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
</body>
</html>