<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAPEMAS | Mahasiswa </title>

    
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
          <li class="active"><a href="/mahasiswa">Data Mahasiswa</a></li>
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

  <br/><br/>
  <section id="appointment" class="appointment section-bg">
    <div class="col-lg-12 col-md-12 align-content-center">
      <div class="container">
        <!-- seacrh box-->
        <div class="advance-search">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-lg-12 col-md-12 align-content-center">
								<form action="/mahasiswa" method="GET">  <br>
									<div class="form-row">
										<div class="form-group col-md-3">
											<input name="key" type="text" class="form-control my-2 my-lg-1" id="inputcari" placeholder="kata kunci">
										</div>
										<div class="form-group col-md-2 align-self-center">
											<button type="submit" class="btn btn-primary">Cari</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div><!-- end search box--><br/>
        <div class="section-title">
          <h2> Data Mahasiswa</h2>
        </div>
        <table class="table table-responsive product-dashboard-table">
				  <thead>
						<tr>       
							<th>Nama</th>
							<th>Jenis Kelamin</th>
							<th>Tanggal Lahir</th>
							<th>NIM</th>
              <th>Jenjang</th>
              <th>Nama Lembaga</th>
              <th>Program Studi</th>
              <th>Status</th>
						</tr>
					</thead>
					<tbody>
          @foreach($mahasiswa as $dm)
            <tr>                 
              <td>{{$dm->nama}}</td>
                <td>{{$dm->jenis_kelamin}}</td>
                <td>{{$dm->tgl_lahir}}</td>
                <td>{{$dm->nim}}</td>
                <td>{{$dm->jenjang}}</td>
                <td>{{$dm->nama_lembaga}}</td>
                <td>{{$dm->prodi}}</td>
                <td>{{$dm->status}}</td>
              <td>
                <a href="/mahasiswa/edit/{{$dm->id}}">Edit</a>&nbsp;&nbsp;&nbsp;
                <a style="color:red;" href="/mahasiswa/konfirmasihapus/{{$dm->id}}">Hapus</a>
              </td>
            </tr>
            @endforeach
				  </tbody>
        </table>
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