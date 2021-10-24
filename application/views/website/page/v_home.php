<!-- partial -->
<div class="content-wrapper">
	<div class="container">
		<div class="row" data-aos="fade-up">
			<div class="col-xl-8 stretch-card grid-margin">
				<div class="position-relative">
					<div id="demo" class="carousel slide" data-ride="carousel">

						<!-- Indicators -->
						<ul class="carousel-indicators">
							<?php foreach ($carousel as $row => $value): ?>
								<li data-target="#demo" data-slide-to="0" class="<?php if ($row == 0): ?>
								<?= 'active' ?>
								<?php endif ?>"></li>
							<?php endforeach ?>
						</ul>
						<!-- The slideshow -->
						<div class="carousel-inner">
							<?php foreach ($carousel as $row => $value): ?>
								<div class="carousel-item <?php if ($row==0 ): ?>
								<?= 'active' ?>
								<?php endif ?>">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/images/upload/carousel/<?= $value['gambar'] ?>" alt="Los Angeles" width="1100" height="500">
							</div>
						<?php endforeach ?>

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
									<a href="<?= base_url('artikel/detil/').$value['id_artikel'] ?>" class="text-decoration-none text-white">
										<h5><?= $value['judul'] ?></h5>
									</a>
									<div class="fs-12">
										<?= $value['tanggal_upload'] ?>
									</div>
								</div>
								<a href="<?= base_url('artikel/detil/').$value['id_artikel'] ?>">
									<div class="rotate-img">
										<img src="<?= base_url('assets/images/upload/artikel/').$value['gambar'] ?>" alt="thumb" class="img-fluid img-lg"/>
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
							<?php foreach ($galeri as $row => $value): ?>
								<div class="col-sm-4 grid-margin">
									<div class="position-relative">
										<div class="rotate-img">
											<img src="<?php echo base_url('') ?>assets/images/upload/galeri/<?= $value['gambar'] ?>" alt="thumb" class="img-fluid"/>
										</div>
										<div class="badge-positioned w-90">
											<div
											class="d-flex justify-content-between align-items-center"
											>
											<span
											class="badge badge-danger font-weight-bold"
											><?= $value['tagline'] ?></span
											>
										</div>
									</div>
								</div>
							</div>
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<!-- main-panel ends -->
<!-- container-scroller ends -->