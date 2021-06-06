<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAPEMAS | Edit Siswa</title>

    
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
          <li> <a href="/mahasiswa">Data Mahasiswa</a></li>
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
  
  <!--section edit data siswa-->
  <section id="appointment" class="appointment section-bg">
    <div class="container"><br/><br/><br/><br/>
      <div class="section-title">
        <h2>Edit data Siswa</h2>
      </div>
    
      @foreach($siswa as $s)
      <form class="php-email-form"  action='/siswa/update' method="post">
      {{ csrf_field() }}
      <div class="form-row">

        <div class="col-md-4 from-group">
          <label> Nama Lengkap</label>
            <input class="form-control" placeholder="{{$s->nama}}"  type = "text" name="nama" required="required"><br/>
            <div class="validate"></div>
        </div>

        <div class="col-md-4 from-group">
          <label>Jenis Kelamin</label>
          <select class="form-control" name="jeniskelamin">
            <option selected disabled>Pilih</option><br/>
            <option>Laki-laki</option>
            <option>Perempuan</option>
          </select><br>   
          <div class="validate"></div>
        </div>   

        <div class="col-md-4 from-group">
          <label> Tanggal Lahir</label>
          <input class="form-control" type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required="required"><br>   
          <div class="validate"></div>
        </div>
        
        <div class="col-md-4 from-group">
          <label> NISN (Nomor Induk Siswa Nasional) </label>
          <input class="form-control" type = "text" name="nisn" placeholder="{{$s->NISN}}" required="required"><br>   
          <div class="validate"></div>
        </div>   
        
        <div class="col-md-4 from-group">
          <label>Jenjang Pendidikan</label>
          <select class="form-control" name="jenjang">
            <option selected disabled>Pilih</option><br/>
            <option>SD/MI/Sederajat</option>
            <option>SMP/MTs/Sederajat</option>
            <option>SMA/MA/Sederajat</option>
          </select><br>   
          <div class="validate"></div>
        </div>
        
        <div class="col-md-4 from-group">
          <label> Nama Lembaga</label>
          <input class="form-control" type = "text" placeholder="{{$s->nama_lembaga}}"name="nama_lembaga" required="required"><br>
          <div class="validate"></div>
        </div>
        
        <div class="col-md-4 from-group">
          <label>Status</label>
          <select class="form-control" name="status">
            <option selected disabled>Pilih</option><br/>
            <option>LULUS</option>
            <option>Belum Lulus</option>
          </select><br>   
          <div class="validate"></div>
        </div>
        
        <div class="col-md-4">&nbsp;&nbsp;&nbsp;&nbsp;<br>
          <button type="submit">Simpan Data </button>
        </div>
      </form>
      @endforeach
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