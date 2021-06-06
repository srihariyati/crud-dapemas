<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAPEMAS | Tambah Mahasiswa </title>
    
    <!-- Favicons -->
    <link href="/assets/img/icondapemas-1.png" rel="icon">
    <link href="/assets/img/icondapemas-1.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

</head>
<body>     
    <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
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
          <li ><a href="/">Home</a></li>
          <li ><a href="/mahasiswa">Data Mahasiswa</a></li>
          <li ><a href="/siswa">Data Siswa</a></li>
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

  <!-- tambah Data Mahasiswa-->
  <section id="appointment" class="appointment section-bg">
    <div class="container"><br/><br/><br/><br/>
      <div class="section-title">
        <h2>Tambah Data Mahasiswa</h2>
      </div>
      <form class="php-email-form" action="/mahasiswa/store" method="post" role="form">
      {{ csrf_field() }}
        <div class="form-row">
          <div class="col-md-4 from-group">
            <label> Nama Lengkap</label>
            <input class="form-control" type = "text"placeholder="Nama Lengkap Mahasiswa" name="nama" required="required"><br/>
            <div class="validate"></div>    
          </div>

          <div class="col-md-4 from-group">
            <label> Jenis Kelamin</label>
              <select name="jeniskelamin" class="form-control" >
                <option selected disabled>Pilih</option>
                <option>Laki-laki</option>
                <option>Perempuan</option>
              </select><br>
              <div class="validate"></div>
          </div>
          
          <div class="col-md-4 from-group">
            <label> Tanggal Lahir</label>
              <input type="date" name="tgl_lahir" required="required" class="form-control datepicker"><br>
              <div class="validate"></div>
          </div>
          
          <div class="col-md-4 from-group">
            <label> NIM/NPM</label>
              <input class="form-control" type="text" name="nim_npm" placeholder="NIM(Nomor Induk Mahasiswa)" required="required">
              <div class="validate"></div>
          </div>
          
          <div class="col-md-4 from-group">
            <label>Jenjang Pendidikan</label>
            <select name="jenjang" class="form-control">
              <option selected disabled>Pilih</option><br/>
              <option>D1</option>
              <option>D2</option>
              <option>D3</option>
              <option>S1</option>
              <option>S2</option>
              <option>S3</option>
              </select><br>
            <div class="validate"></div>
          </div>

          <div class="col-md-4 from-group">
            <label>Nama Lembaga</label>
            <input class="form-control" type = "text" name="nama_lembaga" placeholder="Nama Perguruan Tinggi" required="required"><br>
            <div class="validate"></div>
          </div>
          
          <div class="col-md-4 from-group">
            <label> Program Studi</label>
              <input class="form-control" type = "text" name="prodi" placeholder="Program Studi" required="required"><br>
              <div class="validate"></div>
          </div>
          
          <div class="col-md-4 from-group">
            <label> Status</label>
              <select name="status" class="form-control">
                <option selected disabled>Pilih</option><br/>
                <option>LULUS</option>
                <option>Belum Lulus</option>
               </select><br>
            <div class="validate"></div>
          </div>

          <div class="col-md-4">&nbsp;&nbsp;&nbsp;&nbsp;
            <button type="submit"> Simpan Data </button>
          </div>
        </form>
      </div>
    </div>
  </section>
    
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