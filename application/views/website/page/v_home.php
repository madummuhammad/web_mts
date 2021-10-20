    <div class="container-scroller">
    	<div class="main-panel">
    		<!-- partial:partials/_navbar.html -->
    		<header id="header" class="custom-bg-oldgreen">
    			<div class="container">
    				<nav class="navbar navbar-expand-lg navbar-light">
    					<div class="navbar-bottom">
    						<div class="d-flex justify-content-between align-items-center">
    							<div>
    								<a href="" class="navbar-brand custom-navbar-brand d-flex flex-column align-items-center">
    									<img src="<?php echo base_url('assets/images/upload/logo_mts.png') ?>" alt="">
    									<p class="text-white font-weight-bold">MTs AT TAQWA JATINGARANG</p>
    								</a>
    							</div>
    							<div>
    								<button
    								class="navbar-toggler"
    								type="button"
    								data-target="#navbarSupportedContent"
    								aria-controls="navbarSupportedContent"
    								aria-expanded="false"
    								aria-label="Toggle navigation"
    								>
    								<span class="navbar-toggler-icon"></span>
    							</button>
    							<div
    							class="navbar-collapse justify-content-center collapse"
    							id="navbarSupportedContent"
    							>
    							<ul
    							class="navbar-nav d-lg-flex justify-content-between align-items-center"
    							>
    							<li>
    								<button class="navbar-close">
    									<i class="mdi mdi-close"></i>
    								</button>
    							</li>

    							<!-- <li class="nav-item active dropdown">
    								<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="index.html">Profile</a>
    								<div class="dropdown-menu custom-dropdown-menu">
    									<a href="" class="dropdown-item">Profile</a>
    									<a href="" class="dropdown-item">Visi dan Misi</a>
    								</div>
    							</li> -->
    							<li class="nav-item">
    								<a class="nav-link custom-hover-primary-text" href="pages/magazine.html">Profile</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link custom-hover-primary-text" href="pages/business.html">Guru dan TU</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link custom-hover-primary-text" href="pages/sports.html">Prestasi</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link custom-hover-primary-text" href="pages/art.html">Artikel</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link custom-hover-primary-text" href="pages/politics.html">Ekstra Kurikuler</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link custom-hover-primary-text" href="pages/travel.html">PPDB</a>
    							</li>
    							<li class="nav-item">
    								<a class="nav-link custom-hover-primary-text" href="pages/contactus.html">Hubungi Kami</a>
    							</li>
    						</ul>
    					</div>
    				</div>
    				<ul class="social-media">
    					<li>
    						<a href="#" class="custom-bg-oldgreen custom-hover-primary-text">
    							<i class="mdi mdi-facebook"></i>
    						</a>
    					</li>
    					<li>
    						<a href="#" class="custom-bg-oldgreen custom-hover-primary-text">
    							<i class="mdi mdi-youtube"></i>
    						</a>
    					</li>
    					<li>
    						<a href="#" class="custom-bg-oldgreen custom-hover-primary-text">
    							<i class="mdi mdi-twitter"></i>
    						</a>
    					</li>
    				</ul>
    			</div>
    		</div>
    	</nav>
    </div>
</header>

<!-- partial -->
<div class="content-wrapper">
	<div class="container">
		<div class="row" data-aos="fade-up">
			<div class="col-xl-8 stretch-card grid-margin">
				<div class="position-relative">
					<div id="demo" class="carousel slide" data-ride="carousel">

						<!-- Indicators -->
						<ul class="carousel-indicators">
							<li data-target="#demo" data-slide-to="0" class="active"></li>
							<li data-target="#demo" data-slide-to="1"></li>
							<li data-target="#demo" data-slide-to="2"></li>
						</ul>

						<!-- The slideshow -->
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/images/upload/carousel1.jpg" alt="Los Angeles" width="1100" height="500">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/images/upload/carousel1.jpg" alt="Los Angeles" width="1100" height="500">
							</div>
							<div class="carousel-item">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/images/upload/carousel1.jpg" alt="Los Angeles" width="1100" height="500">
							</div>
						</div>

						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
							<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
							<span class="carousel-control-next-icon"></span>
						</a>
					</div>
<!-- 					<img
					src="<?php echo base_url('') ?>assets/images/upload/carousel1.jpg"
					alt="banner"
					class="img-fluid"
					/> -->
<!-- 					<div class="banner-content">
						<div class="badge badge-danger fs-12 font-weight-bold mb-3">
							global news
						</div>
						<h1 class="mb-0">GLOBAL PANDEMIC</h1>
						<h1 class="mb-2">
							Coronavirus Outbreak LIVE Updates: ICSE, CBSE Exams
							Postponed, 168 Trains
						</h1>
						<div class="fs-12">
							<span class="mr-2">Photo </span>10 Minutes ago
						</div>
					</div> -->
				</div>
			</div>
			<div class="col-xl-4 stretch-card grid-margin">
				<div class="card custom-bg-primary text-white">
					<div class="card-body">
						<h2>Artikel Terbaru</h2>
						<?php foreach ($artikel_terbaru as $row => $value): ?>
							<div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
								<div class="pr-3">
									<a href="" class="text-decoration-none text-white">
										<h5>Siswa Kelas 9A, memenangkan lomba taekwondo</h5>
									</a>
									<div class="fs-12">
										<?= $value['tanggal_upload'] ?>
									</div>
								</div>
								<a href="">
									<div class="rotate-img">
										<img src="assets/images/dashboard/home_1.jpg" alt="thumb" class="img-fluid img-lg"/>
									</div>
								</a>
							</div>			
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row" data-aos="fade-up">
<!-- 	<div class="col-lg-3 stretch-card grid-margin">
		<div class="card">
			<div class="card-body">
				<h2>Category</h2>
				<ul class="vertical-menu">
					<li><a href="#">Politics</a></li>
					<li><a href="#">International</a></li>
					<li><a href="#">Finance</a></li>
					<li><a href="#">Health care</a></li>
					<li><a href="#">Technology</a></li>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Media</a></li>
					<li><a href="#">Administration</a></li>
					<li><a href="#">Sports</a></li>
					<li><a href="#">Game</a></li>
					<li><a href="#">Art</a></li>
					<li><a href="#">Kids</a></li>
				</ul>
			</div>
		</div>
	</div> -->
	<div class="col-lg-12 stretch-card grid-margin">
		<div class="card">
			<div class="card-body">
				<?php foreach ($artikel as $row => $value): ?>
					<?php if ($row+1 >3): ?>
						<div class="row">
							<div class="col-sm-4 grid-margin">
								<a href="">
									<div class="position-relative">
										<div class="rotate-img">
											<img
											src="<?php echo base_url('') ?>assets/images/upload/artikel/<?= $value['gambar'] ?>"
											alt="thumb"
											class="img-fluid"
											/>
										</div>
									</div>	
								</a>
							</div>		
							<div class="col-sm-8  grid-margin d-flex flex-column justify-items-center justify-content-center">
								<a href="" class="text-decoration-none">
									<h2 class="mb-2 font-weight-600 text-dark text-capitalize">
										<?= $value['judul'] ?>
									</h2>
								</a>
								<div class="fs-13 mb-2">
									<span class="mr-2 text-capitalize"><?= $value['penulis'] ?>,</span><?= $value['tanggal_upload'] ?>
								</div>
							</div>	
						</div>
					<?php endif ?>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>
<div class="row" data-aos="fade-up">
	<div class="col-sm-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-12">
						<div class="card-title">
							Galeri Kami
						</div>
						<div class="row">
							<div class="col-sm-4 grid-margin">
								<div class="position-relative">
									<div class="rotate-img">
										<img
										src="<?php echo base_url('') ?>assets/images/upload/galeri/galeri1.jpg"
										alt="thumb"
										class="img-fluid"
										/>
									</div>
									<div class="badge-positioned w-90">
										<div
										class="d-flex justify-content-between align-items-center"
										>
										<span
										class="badge badge-danger font-weight-bold"
										>Kunjungan Kerja</span
										>
										<!-- <div class="video-icon">
											<i class="mdi mdi-play"></i>
										</div> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<!-- 	<div class="col-lg-4">
		<div
		class="d-flex justify-content-between align-items-center"
		>
		<div class="card-title">
			Latest Video
		</div>
		<p class="mb-3">See all</p>
	</div>
	<div
	class="d-flex justify-content-between align-items-center border-bottom pb-2"
	>
	<div class="div-w-80 mr-3">
		<div class="rotate-img">
			<img
			src="assets/images/dashboard/home_11.jpg"
			alt="thumb"
			class="img-fluid"
			/>
		</div>
	</div>
	<h3 class="font-weight-600 mb-0">
		Apple Introduces Apple Watch
	</h3>
</div>
<div
class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
>
<div class="div-w-80 mr-3">
	<div class="rotate-img">
		<img
		src="assets/images/dashboard/home_12.jpg"
		alt="thumb"
		class="img-fluid"
		/>
	</div>
</div>
<h3 class="font-weight-600 mb-0">
	SEO Strategy & Google Search
</h3>
</div>
<div
class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
>
<div class="div-w-80 mr-3">
	<div class="rotate-img">
		<img
		src="assets/images/dashboard/home_13.jpg"
		alt="thumb"
		class="img-fluid"
		/>
	</div>
</div>
<h3 class="font-weight-600 mb-0">
	Cycling benefit & disadvantag
</h3>
</div>
<div
class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
>
<div class="div-w-80 mr-3">
	<div class="rotate-img">
		<img
		src="assets/images/dashboard/home_14.jpg"
		alt="thumb"
		class="img-fluid"
		/>
	</div>
</div>
<h3 class="font-weight-600">
	The Major Health Benefits of
</h3>
</div>
<div
class="d-flex justify-content-between align-items-center pt-3"
>
<div class="div-w-80 mr-3">
	<div class="rotate-img">
		<img
		src="assets/images/dashboard/home_15.jpg"
		alt="thumb"
		class="img-fluid"
		/>
	</div>
</div>
<h3 class="font-weight-600 mb-0">
	Powerful Moments of Peace
</h3>
</div>
</div> -->
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- main-panel ends -->
<!-- container-scroller ends -->

<!-- partial:partials/_footer.html -->
<footer>
	<div class="footer-top custom-bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h2 class="footer-logo">MTs At Taqwa Jatingarang</h5>
						<h5 class="font-weight-normal mt-4 mb-5">MTs At Taqwa Jatingarang adalah sekolah menengah pertama yang berada di Jatingarang, Kecamatan Bodeh, Kabupaten Pemalang, Jawa Tengah
						</h5>
						<ul class="social-media mb-3">
							<li class="custom-text-oldgreen">
								<a href="#" class="custom-hover-bg-oldgreen">
									<i class="mdi mdi-facebook custom-text-oldgreen custom-hover-white-text"></i>
								</a>
							</li>
							<li>
								<a href="#" class="custom-hover-bg-oldgreen">
									<i class="mdi mdi-youtube custom-text-oldgreen custom-hover-white-text"></i>
								</a>
							</li>
							<li>
								<a href="#" class="custom-hover-bg-oldgreen">
									<i class="mdi mdi-twitter custom-text-oldgreen custom-hover-white-text"></i>
								</a>
							</li>
						</ul>
					</div>
					<div class="col-sm-6">
						<div class="custom-bg-outline-oldgreen px-1 text-center mb-4">
							<h3 class="font-weight-bold">Link</h3>
						</div>
						<div class="row">
							<div class="col-6">
								<div class="footer-border-bottom pb-2">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="mb-0 font-weight-600">Profile</h5>
									</div>
								</div>
								<div class="footer-border-bottom pb-2 pt-2">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="mb-0 font-weight-600">Guru dan TU</h5>
									</div>
								</div>
								<div class="footer-border-bottom pb-2 pt-2">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="mb-0 font-weight-600">Prestasi</h5>
									</div>
								</div>
								<div class="footer-border-bottom pb-2 pt-2">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="mb-0 font-weight-600">Artikel</h5>
									</div>
								</div>
								<div class="footer-border-bottom pb-2 pt-2">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="mb-0 font-weight-600">Ekstrakurikuler</h5>
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="footer-border-bottom pb-2 pt-2">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="mb-0 font-weight-600">PPDB</h5>
									</div>
								</div>
								<div class="footer-border-bottom pb-2 pt-2">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="mb-0 font-weight-600">Hubungi Kami</h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>