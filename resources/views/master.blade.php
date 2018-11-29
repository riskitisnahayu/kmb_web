<!DOCTYPE html>
<html>
<head>
	<title>KMB Yogyakarta</title>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/kmb.ico" />

	<!--Google Font link-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/bootstrap-select.min.css"/>
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="owl-carousel/owl.carousel.css"/>
	<link rel="stylesheet" href="owl-carousel/owl.theme.css">
	<link rel="stylesheet" href="css/lightslider.css">
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/style_web.css"/>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,500italic,500,400italic,300italic,300,100,100italic|Lato:400,900italic,900,700italic,400italic,700,300italic,300,100,100italic' rel='stylesheet' type='text/css'>

</head>
<body>
<header id="home-section">
	<div class="menu one-page-menu">
		<nav class="navbar navbar-default">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false"></button>
					<a class="navbar-brand" href="#home-section">
						<img src="images/kmb.png" style="width:100px;" alt="Logo">
					</a>
				</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#home-section">Home</a></li>
						<li><a href="#tentang">Tentang</a></li>
						<li><a href="#pengurus">Pengurus</a></li>
						<li><a href="#info-beasiswa">Info Beasiswa</a></li>
						<!--login e-->
						<li class="has-child"><a href="#blog-section">Member</a>
							<ul class="sub-menu">
								<li><a href="blog.html"></a></li>
								<!--login e-->
								<li><a href="login">Login</a></li>
								<li><a href="register">Register</a></li>
							</ul>
						</li>
						<li><a href="#contact-section">Kontak</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
</header>

<section>
	<div class="main-slider">
		<div id="main-slider-carousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#main-slider-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider-carousel" data-slide-to="1"></li>
				<li data-target="#main-slider-carousel" data-slide-to="2"></li>
			</ol> <!-- Carousel indicators -->

			<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox" style="height:850px">
			<div class="item active">
				<img src="images/panitia.jpg" alt="">
				<div class="background-overlay"></div>
			</div> <!-- item -->
			<div class="item">
				<img src="images/tryout.jpg" alt="">
				<div class="background-overlay"></div>
			</div> <!-- item -->
			<div class="item">
				<img src="images/tryout2.jpg" alt="">
				<div class="background-overlay"></div>
			</div> <!-- item -->
		</div> <!-- carousel-inner -->
			<!-- Left and right controls -->
			<a class="left carousel-control" href="#main-slider-carousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#main-slider-carousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="carousel-caption">
			<div class="container">
				<div class="row">
                    <div class="main_home">
                        <div class="home_text">
                            <h1 class="text-white" style="color:#f2f3f4">KOMUNITAS MAHASISWA BOYOLALI <br />YOGYAKARTA</h1>
                        </div>
                        <div class="home_btns m-top-50"></div>
                    </div>
                </div>
			</div>
		</div> <!-- carousel-caption -->
	</div>
</section>

{{-- <section class="background-blue" id="tentang">

</section> --}}
<section id="tentang">
	<div class="our-service-inner">
		<div class="container">
			<div class="vertical-distance-80"></div>
				<h2 class="text-center main-title">Tentang Kami</h2>
				<p class="text-center sub-title"></p>
			<div class="vertical-distance-60"></div>
			<div class="row">
				<p>Komunitas Mahasiswa Boyolali (KMB) merupakan perkumpulan mahasiswa yang berasal dari Boyolali yang berkuliah di Yogyakarta.
					Mereka berasal dari berbagai universitas di Yogyakarta,
					baik Perguruan Tinggi Negeri maupun Perguruan Tinggi Swasta dengan berbagai jurusan.</p>

				<br>
				<br>
				<br>

				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="icon-type1 border-light-grey">
						{{-- <img src="images/service1.png" alt="Property Management"/> --}}
						<h4 class="text-center">Kegiatan yang Akan Berlangsung</h4>
						<p>
							1. KMB Mengajar <br>
							2. Tryout KMB Yogyakarta <br>
							3. Bakti Sosial
						</p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-4">
					<div class="icon-type1 border-light-grey">
						{{-- <img src="images/service4.png" alt="Capital Care"/> --}}
						<h4 class="text-center">Kegiatan yang Sudah Berlangsung</h4>
						<p>
							1. Suplemen KMB Yogyakarta <br>
							2. Srawung KMB Yogyakarta <br>
							3. Oprec Panitia Tryout KMB
						</p>
					</div>
				</div>
			</div> <!-- ros -->
				<div class="vertical-distance-80"></div>
		</div> <!-- container -->
	</div>
</section>

<section class="background-light-grey dimention-detail" id="pengurus">
	<div class="vertical-distance-80"></div>
		<div class="container">
			<h2 class="text-center main-title">Kepengurusan 2018</h2>
			<p class="text-center sub-title">Komunitas Mahasiswa Boyolali</p>
			<div class="vertical-distance-60"></div>

				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Ketua</a></li>
					<li><a data-toggle="tab" href="#menu1">Wakil Ketua</a></li>
					<li><a data-toggle="tab" href="#menu2">Sekretaris</a></li>
					<li><a data-toggle="tab" href="#menu3">Bendahara</a></li>
					<li><a data-toggle="tab" href="#menu4">PSDM</a></li>
					<li><a data-toggle="tab" href="#menu5">Medkom</a></li>
					<li><a data-toggle="tab" href="#menu6">Pengabdian Masyarakat</a></li>
					<li><a data-toggle="tab" href="#menu7">Kewirausahaan</a></li>
				</ul>

			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<div class="vertical-distance-20"></div>
						<div class="container-fluid">
							<div class="row background-white">
								<div class="col-xs-12 col-sm-12 col-md-12 dimention-image">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-6">
											<div class="vertical-distance-20"></div>
											<div id="bedroom-slider-carousel" class="carousel slide" data-ride="carousel">

													<!-- Wrapper for slides -->
												<div class="carousel-inner" role="listbox">
													<div class="item active">
														<img src="images/ketua2.jpg" alt="bedroom" style="width: 540px;height: 300px;">
													</div>
												</div> <!-- carousel-inner -->
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6">
											<h2>KETUA</h2>
											<p class="dimention-info">
												M. Andre Irawan
											</p>
											<h3>Jurusan</h3>
											<p>
												Hubungan Internasional
											</p>
											<h3>Angkatan</h3>
											<p>2016</p>
											<h3>Universitas</h3>
											<p>
												Universitas Gadjah Mada
											</p>
											<div class="vertical-distance-20"></div>
										</div>
								</div>
								<div class="vertical-distance-10"></div>
							</div>
						</div> <!-- row -->
					</div> <!-- container- fluid -->
					<div class="vertical-distance-20"></div>
				</div>
				<div id="menu1" class="tab-pane fade">
					<div class="vertical-distance-20"></div>
					<div class="container-fluid">
						<div class="row background-white">
							<div class="col-xs-12 col-sm-12 col-md-12 dimention-image">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-6">
										<div class="vertical-distance-20"></div>
										<div id="bedroom-slider-carousel1" class="carousel slide" data-ride="carousel">

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<div class="item active">
													<img src="images/wakil2.jpg" alt="bedroom" style="width: 540px;height: 300px;">
												</div>
											</div> <!-- carousel-inner -->
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6">
										<h2>Wakil Ketua</h2>
										<p class="dimention-info">
											Ritma Risqiyani W
										</p>
										<h3>Jurusan</h3>
										<p>
											Ilmu Akuntansi
										</p>
										<h3>Angkatan</h3>
										<p>2016</p>
										<h3>Universitas</h3>
										<p>
											Universitas Gadjah Mada
										</p>
										<div class="vertical-distance-20"></div>

									</div>
								</div>
								<div class="vertical-distance-10"></div>
							</div>
						</div> <!-- row -->
					</div> <!-- container- fluid -->
					<div class="vertical-distance-20"></div>
				</div>
				<div id="menu2" class="tab-pane fade">
					<div class="vertical-distance-20"></div>
					<div class="container-fluid">
						<div class="row background-white">
							<div class="col-xs-12 col-sm-12 col-md-12 dimention-image">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-6">
										<div class="vertical-distance-20"></div>
										<div id="bedroom-slider-carousel2" class="carousel slide" data-ride="carousel">

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<div class="item active">
													<img src="images/sekretaris.jpg" alt="bedroom">
												</div>
											</div> <!-- carousel-inner -->
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6">
										<h2>Sekretaris</h2>
										<p class="dimention-info">
											Sekretaris 1 = Inas Meilina H. S <br>
											Sekretaris 2 = Atik Sri W
										</p>
										<h3>Jurusan</h3>
										<p>
											Sekretaris 1 = Pendidikan Matematika
											<br>
											Sekretaris 2 = Ilmu Ekonomi
										</p>
										<h3>Angkatan</h3>
										<p>
											Sekretaris 1 = 2017
											<br>
											Sekretaris 2 = 2016
										</p>
										<h3>Universitas</h3>
										<p>
											Sekretaris 1 =  Universitas Gadjah Mada
											<br>
											Sekretaris 2 =  Universitas Negeri Yogyakarta
										</p>
										<div class="vertical-distance-20"></div>
									</div>
								</div>
								<div class="vertical-distance-10"></div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="vertical-distance-20"></div>
								<div class="vertical-distance-10"></div>
							</div>
						</div> <!-- row -->
					</div> <!-- container- fluid -->
					<div class="vertical-distance-20"></div>
				</div>
				<div id="menu3" class="tab-pane fade">
					<div class="vertical-distance-20"></div>
					<div class="container-fluid">
						<div class="row background-white">
							<div class="col-xs-12 col-sm-12 col-md-12 dimention-image">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-6">
										<div class="vertical-distance-20"></div>
										<div id="bedroom-slider-carousel3" class="carousel slide" data-ride="carousel">
												<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<div class="item active">
													<img src="images/bendahara.jpg" alt="bedroom">
												</div>
											</div> <!-- carousel-inner -->
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6">
										<h2>Bendahara</h2>
										<p class="dimention-info">
											Bendahara 1 = Rizki Mei N <br>
											Bendahara 2 = Happy cantik A
										</p>
										<h3>Jurusan</h3>
										<p>
											Bendahara 1 = Teknik Mesin
											<br>
											Bendahara 2 = Geografi
										</p>
										<h3>Angkatan</h3>
										<p>
											Bendahara 1 = 2017
											<br>
											Bendahara 2 = 2016
										</p>
										<h3>Universitas</h3>
										<p>
											Bendahara 1 =  Universitas Gadjah Mada
											<br>
											Bendahara 2 =  Universitas Gadjah Mada
										</p>
										<div class="vertical-distance-20"></div>
									</div>
								</div>
								<div class="vertical-distance-10"></div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="vertical-distance-20"></div>
								<div class="vertical-distance-10"></div>
							</div>
						</div> <!-- row -->
					</div> <!-- container- fluid -->
					<div class="vertical-distance-20"></div>
				</div>
				<div id="menu4" class="tab-pane fade">
						<div class="vertical-distance-20"></div>
						<div class="container-fluid">
							<div class="row background-white">
								<div class="col-xs-12 col-sm-12 col-md-12 dimention-image">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-6">
											<div class="vertical-distance-20"></div>
											<div id="bedroom-slider-carousel4" class="carousel slide" data-ride="carousel">

												<!-- Wrapper for slides -->
												<div class="carousel-inner" role="listbox">
													<div class="item active">
														<img src="images/psdm.jpg" alt="bedroom" style="width: 600px;height: 400px;">
													</div>
												</div> <!-- carousel-inner -->
											</div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-6">
											<h2>PSDM</h2>
											<p class="dimention-info">
												PSDM 1 = Ni'mah Ummu S <br>
												PSDM 2 = Deva Rosa N
											</p>
											<h3>Jurusan</h3>
											<p>
												PSDM 1 = Teknik Sipil
												<br>
												PSDM 2 = Geografi
											</p>
											<h3>Angkatan</h3>
											<p>
												PSDM 1 = 2016
												<br>
												PSDM 2 = 2016
											</p>
											<h3>Universitas</h3>
											<p>
												PSDM 1 =  Universitas Gadjah Mada
												<br>
												PSDM 2 =  Universitas Gadjah Mada
											</p>
											<div class="vertical-distance-20"></div>
										</div>
									</div>
									<div class="vertical-distance-10"></div>
								</div>
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="vertical-distance-20"></div>
									<div class="vertical-distance-10"></div>
								</div>
							</div> <!-- row -->
						</div><!-- container- fluid -->
							<div class="vertical-distance-20"></div>
					</div>
				<div id="menu5" class="tab-pane fade">
					<div class="vertical-distance-20"></div>
					<div class="container-fluid">
						<div class="row background-white">
							<div class="col-xs-12 col-sm-12 col-md-12 dimention-image">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-6">
										<div class="vertical-distance-20"></div>
										<div id="bedroom-slider-carousel5" class="carousel slide" data-ride="carousel">
											<!-- Indicators -->
											{{-- <ol class="carousel-indicators">
												<li data-target="#bedroom-slider-carousel5" data-slide-to="0" class="active"></li>
												<li data-target="#bedroom-slider-carousel5" data-slide-to="1"></li>
												<li data-target="#bedroom-slider-carousel5" data-slide-to="2"></li>
											</ol> <!-- Carousel indicators --> --}}

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<div class="item active">
													<img src="images/medkom.jpg" alt="bedroom">
												</div>
											</div> <!-- carousel-inner -->
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6">
										<h2>Medkom</h2>
										<p class="dimention-info">
											Medkom 1 = Megalia Candia <br>
											Medkom 2 = Riski Tisnahayu
										</p>
										<h3>Jurusan</h3>
										<p>
											Medkom 1 = Teknik Mesin
											<br>
											Medkom 2 = Komputer dan Sistem Informasi
										</p>
										<h3>Angkatan</h3>
										<p>
											Medkom 1 = 2016
											<br>
											Medkom 2 = 2016
										</p>
										<h3>Universitas</h3>
										<p>
											Medkom 1 =  Universitas Gadjah Mada
											<br>
											Medkom 2 =  Universitas Gadjah Mada
										</p>
										<div class="vertical-distance-20"></div>
									</div>
								</div>
								<div class="vertical-distance-10"></div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="vertical-distance-20"></div>
								<div class="vertical-distance-10"></div>
							</div>
						</div> <!-- row -->
					</div> <!-- container- fluid -->
					<div class="vertical-distance-20"></div>
				</div>
				<div id="menu6" class="tab-pane fade">
					<div class="vertical-distance-20"></div>
					<div class="container-fluid">
						<div class="row background-white">
							<div class="col-xs-12 col-sm-12 col-md-12 dimention-image">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-6">
										<div class="vertical-distance-20"></div>
										<div id="bedroom-slider-carousel6" class="carousel slide" data-ride="carousel">

											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<div class="item active">
													<img src="images/pm.jpg" alt="bedroom">
												</div>
											</div> <!-- carousel-inner -->
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6">
										<h2>Pengabdian Masyarakat</h2>
										<p class="dimention-info">
											PM 1 = Chintia Prahesti Y <br>
											PM 2 = Gilang Herdyan
										</p>
										<h3>Jurusan</h3>
										<p>
											PM 1 = Ilmu AKuntansi
											<br>
											PM 2 = Sastra Inggris
										</p>
										<h3>Angkatan</h3>
										<p>
											PM 1 = 2016
											<br>
											PM 2 = 2016
										</p>
										<h3>Universitas</h3>
										<p>
											PM 1 =  Universitas Gadjah Mada
											<br>
											PM 2 =  Universitas Negeri Yogyakarta
										</p>
										<div class="vertical-distance-20"></div>
									</div>
								</div>
								<div class="vertical-distance-10"></div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="vertical-distance-20"></div>
								<div class="vertical-distance-10"></div>
							</div>
						</div> <!-- row -->
					</div> <!-- container- fluid -->
					<div class="vertical-distance-20"></div>
				</div>
				<div id="menu7" class="tab-pane fade">
					<div class="vertical-distance-20"></div>
					<div class="container-fluid">
						<div class="row background-white">
							<div class="col-xs-12 col-sm-12 col-md-12 dimention-image">
								<div class="row">
									<div class="col-xs-12 col-sm-12 col-md-6">
										<div class="vertical-distance-20"></div>
										<div id="bedroom-slider-carousel7" class="carousel slide" data-ride="carousel">
											<!-- Wrapper for slides -->
											<div class="carousel-inner" role="listbox">
												<div class="item active">
													<img src="images/kewirus.jpg" alt="bedroom">
												</div> <!-- item -->
											</div> <!-- carousel-inner -->
										</div>
									</div>
									<div class="col-xs-12 col-sm-12 col-md-6">
										<h2>Kewirausahaant</h2>
										<p class="dimention-info">
											Kewirausahaan 1 = Putri Puspa <br>
											Kewirausahaan 2 = Ardhea Regita
										</p>
										<h3>Jurusan</h3>
										<p>
											Kewirausahaan 1 = Kepariwisataan
											<br>
											Kewirausahaan 2 =Pendidikan Olahraga
										</p>
										<h3>Angkatan</h3>
										<p>
											Kewirausahaan 1 = 2016
											<br>
											Kewirausahaan 2 = 2016
										</p>
										<h3>Universitas</h3>
										<p>
											Kewirausahaan 1 =  Universitas Gadjah Mada
											<br>
											Kewirausahaan 2 =  Universitas Negeri Yogyakarta
										</p>
										<div class="vertical-distance-20"></div>
									</div>
								</div>
								<div class="vertical-distance-10"></div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="vertical-distance-20"></div>
								<div class="row">
										<div class="vertical-distance-20"></div>
									</div>
								</div>
								<div class="vertical-distance-10"></div>
							</div>
						</div> <!-- row -->
					</div> <!-- container- fluid -->
					<div class="vertical-distance-20"></div>

				<center><a href="daftar" class="documents-btn">DAFTAR<i class="fa fa-file" aria-hidden="true"></i></a> </center>
				<div class="vertical-distance-20"></div>
			</div>
</section>
<section id='info-beasiswa' class="background-light-grey">
	<div class="vertical-distance-80"></div>
	<div class="container">
		<h2 class="main-title text-center">Info Beasiswa ?</h2>
		<p class="sub-title text-center"></p>
	<div class="vertical-distance-80"></div>
		<div id="testimonial-slider-carousel" class="carousel slide" data-ride="carousel">
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="what-people-say">
								<a href="https://indbeasiswa.com/2018/04/beasiswa-djarum-plus-2018-2019.html">https://indbeasiswa.com/2018/04/beasiswa-djarum-plus-2018-2019.html</a>
								<h3 class="text-right">Beasiswa Djarum 2018/2019</h3>
								<img src="images/agent123.jpg" alt="agent">
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="what-people-say">
								<a href="https://indbeasiswa.com/2018/11/beasiswa-cimb-niaga-untuk-mahasiswa-s1.html">https://indbeasiswa.com/2018/11/beasiswa-cimb-niaga-untuk-mahasiswa-s1.html</a>
								<h3 class="text-right">Beasiswa CIMB Niaga</h3>
								<img src="images/agent123.jpg" alt="agent">
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="what-people-say">
								<a href="https://www.pendaftaran.net/2017/06/beasiswa-bri.html">https://www.pendaftaran.net/2017/06/beasiswa-bri.html</a>
								<h3 class="text-right">Beasiswa BRI 2018/2019</h3>
								<img src="images/agent123.jpg" alt="agent">
							</div>
						</div>
					</div> <!-- row -->
				</div> <!-- item -->
				<div class="item">
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="what-people-say">
								<a href="https://www.pendaftaran.net/2017/06/beasiswa-bni.html">https://www.pendaftaran.net/2017/06/beasiswa-bni.html</a>
								<h3 class="text-right">Beasiswa BNI 2018/2019</h3>
								<img src="images/agent123.jpg" alt="agent">
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="what-people-say">
								<a href="https://www.pendaftaran.net/2017/06/beasiswa-mandiri.html">https://www.pendaftaran.net/2017/06/beasiswa-mandiri.html</a>
								<h3 class="text-right">Beasiswa Mandiri 2018/2019</h3>
								<img src="images/agent123.jpg" alt="agent">
							</div>
						</div>
						<div class="col-xs-12 col-sm-4 col-md-4">
							<div class="what-people-say">
								<a href="https://www.populer.web.id/2015/03/pendaftaran-online-beasiswa-pertamina.html">https://www.populer.web.id/2015/03/pendaftaran-online-beasiswa-pertamina.html</a>
								<h3 class="text-right">Beasiswa Pertamina 2018/2019</h3>
								<img src="images/agent123.jpg" alt="agent">
							</div>
						</div>
					</div> <!-- row -->
				</div>
			</div> <!-- carousel-inner -->
		</div>
	</div>
	<div class="vertical-distance-40"></div>
	<div class="vertical-distance-80"></div>
</section>
<section  id="contact-section">
	<div class="contact-us-section">
		<div class="vertical-distance-80"></div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6 agent-detail">
					<h2 class="main-title">Detail Kontak</h2>
					<p class="sub-title left">Hubungi Kami</p>
					<div class="vertical-distance-20"></div>
					<div class="media">
						<div class="media-left">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Alamat</h4>
							<p>GSP Universitas Gadjah Mada</p>
						</div>
					</div>
					<div class="vertical-distance-20"></div>
					<div class="media">
						<div class="media-left">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Telepon</h4>
							<p>08158189990</p>
						</div>
					</div>
					<div class="vertical-distance-20"></div>
					<div class="media">
						<div class="media-left">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Instagram</h4>
							<p>kmbjogja</p>
						</div>
					</div>
					<div class="vertical-distance-20"></div>
					<div class="media">
						<div class="media-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Email</h4>
							<p><a href="#">tryoutkmbyogyakarta@gmail.com</a></p>
						</div>
					</div>
					<div class="vertical-distance-20"></div>
					<div class="media">
						<div class="media-left">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
						</div>
						<div class="media-body">
							<h4 class="media-heading">Waktu Kumpul</h4>
							<p>Setiap bulan minggu pertama jam 15.00 WIB</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h2 class="main-title">Kritik dan Saran</h2>
					<p class="sub-title left"></p>
					<div class="vertical-distance-20"></div>
					<div class="vertical-distance-10"></div>
					<form class="form-footer" name="contact-form" method="post">
						<div class="row">
							<div class="alert-container"></div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<input type="text" name="full_name" placeholder="*Nama" required/>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<input type="text" name="phone_number" placeholder="*No. Telp" required/>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<input type="email" name="email_address" placeholder="*Alamat email" required/>
							</div>
							<div class="col-xs-12 col-sm-6 col-md-6">
								<input type="text" name="subject" placeholder="*Subyek" required/>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<textarea name="message" placeholder="*Tulis Pesan" required></textarea>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12">
								<input type="submit" class="send_message" value="Kirim Pesan"/>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="vertical-distance-80"></div>
	</div>
</section>
<footer class="social-link-header">
	<div class="one-page-footer">
		<div class="vertical-distance-10"></div>
		<p class="text-center">All copy right reseved &copy; 2018 Komunitas Mahasiswa Boyolali Yogyakarta</p>
		<div class="vertical-distance-10"></div>
	</div>
</footer> <!-- Footer -->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/places.js"></script>
<script src="js/image-light-box.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf6My1Jfdi1Fmj-DUmX_CcNOZ6FLkQ4Os"></script>
<script type="text/javascript" src="js/custom.js"></script>

	</body>
</html>
