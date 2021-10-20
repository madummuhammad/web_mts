<div class="content-wrapper">
	<div class="container">
		<div class="row" data-aos="fade-up">
			<div class="col-xl-8 stretch-card grid-margin">
				<div class="position-relative">
					<img src="<?= base_url('assets/images/upload/artikel/').$spesifik_artikel['gambar'] ?>"
					alt="banner"
					class="img-fluid"
					/>
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
										<h5><?= $value['judul'] ?></h5>
									</a>
									<div class="fs-12">
										<?= $value['tanggal_upload'] ?>
									</div>
								</div>
								<a href="">
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
			<div class="col-lg-8 stretch-card grid-margin">
				<div class="baner-content">
					<h1 class="">
						<?= $spesifik_artikel['judul'] ?>
					</h1>
					<div class="fs-12">
						<span class="mr-2 text-capitalize"><?= $spesifik_artikel['penulis'] ?>, </span><?= $spesifik_artikel['tanggal_upload'] ?>
					</div>
				</div>
			</div>
			<div class="col-lg-8 stretch-card grid-margin">
				<div class="card">
					<div class="card-body">
						<?= $spesifik_artikel['isi'] ?>
					</div>
				</div>
			</div>
			<div class="col-xl-4 stretch-card grid-margin">
				<div class="card custom-bg-primary text-white">
					<div class="card-body">
						<h2>Artikel Lain</h2>
						<?php foreach ($artikel as $row => $value): ?>
							<?php if ($row+1 > 3): ?>
								<div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
									<div class="pr-3">
										<a href="" class="text-decoration-none text-white">
											<h5><?= $value['judul'] ?></h5>
										</a>
										<div class="fs-12">
											<?= $value['tanggal_upload'] ?>
										</div>
									</div>
									<a href="">
										<div class="rotate-img">
											<img src="<?= base_url('assets/images/upload/artikel/').$value['gambar'] ?>" alt="thumb" class="img-fluid img-lg"/>
										</div>
									</a>
								</div>
							<?php endif ?>			
						<?php endforeach ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- main-panel ends -->
<!-- container-scroller ends