<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAPEMAS | Konfirmasi Hapus</title>

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
          <li class="active"><a href="/siswa">Data Siswa</a></li>
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

<!-- Hapus data Siswa-->
  <br/><br/>
  <section id="appointment" class="appointment section-bg">
    <div class="col-lg-12 col-md-12 align-content-center">
      <div class="container">
        <div class="section-title"><br/>
          <h2>Hapus Data Siswa</h2>
        </div>
        <table class="table table-responsive product-dashboard-table">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Lahir</th>
              <th>NISN</th>
              <th>Jenjang</th>
              <th>Nama Lembaga</th>
              <th>Status</th>
           <tr>
          </thead>
          <tbody>
          @foreach($siswa as $ds)
            <tr>
              <td>{{$ds->nama}}</td>
              <td>{{$ds->jenis_kelamin}}</td>
              <td>{{$ds->tgl_lahir}}</td>
              <td>{{$ds->NISN}}</td>
              <td>{{$ds->jenjang}}</td>
              <td>{{$ds->nama_lembaga}}</td>
              <td>{{$ds->status}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <div class="section-title"><br/>
        <p  style="color:red;"> Apakah anda yakin ingin menghapus data di atas?<p>
        <p   style="color:red;font-size:12px;">peringatan : data akan dihapus secara permanen<p><br>
        <a href="/siswa/hapus/{{$ds->id}}">Ya</a>&nbsp;&nbsp;
        <a href="/siswa">Tidak</a>
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