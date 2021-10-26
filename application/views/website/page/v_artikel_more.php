<div class="content-wrapper">
	<div class="container">
		<div class="col-sm-12">
			<div class="card" data-aos="fade-up">
				<div class="card-body">
					<div class="row">
						<div class="col-sm-12">
							<h1 class="font-weight-600 mb-4">
								ARTIKEL KAMI
							</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8">
							<?php foreach ($artikel as $row => $value): ?>
								<?php if ($row+1 >3): ?>
									<div class="row">
										<a href="<?= base_url('artikel/detil/').$value['id_artikel'] ?>" class="text-decoration-none">
											<div class="col-sm-4 grid-margin">
												<div class="rotate-img">
													<img src="<?php echo base_url('') ?>assets/images/upload/artikel/<?= $value['gambar'] ?>" alt="banner" class="img-fluid"/>
												</div>
											</div>
										</a>
										<div class="col-sm-8 grid-margin">
											<a href="<?= base_url('artikel/detil/').$value['id_artikel'] ?>" class="text-decoration-none">
												<h2 class="font-weight-600 mb-2 text-dark text-capitalize">
													<?= $value['judul'] ?>
												</h2>
											</a>

											<p class="fs-13 text-muted mb-0">
												<span class="mr-2"><?= $value['penulis'] ?> </span><?= $value['tanggal_upload'] ?>
											</p>
										</div>
									</div>
								<?php endif ?>
							<?php endforeach ?>
						</div>
						<div class="col-lg-4">
							<h2 class="mb-4 text-primary font-weight-600">
								Artikel Terbaru
							</h2>
							<div class="row">
								<div class="col-sm-12">
									<div class="border-bottom pb-4 pt-4">
										<?php foreach ($artikel_terbaru as $row => $value): ?>
											<div class="row">
												<div class="col-sm-8">
													<a href="<?= base_url('artikel/detil/').$value['id_artikel'] ?>" class="text-decoration-none">
														<h5 class="font-weight-600 mb-1 text-dark text-capitalize">
															<?= $value['judul'] ?>
														</h5>
													</a>
													<p class="fs-13 text-muted mb-0">
														<span class="mr-2"><?= $value['penulis'] ?> </span><?= $value['tanggal_upload'] ?>
													</p>
												</div>
												<a href="<?= base_url('artikel/detil/').$value['id_artikel'] ?>" class="text-decoration-none">
													<div class="col-sm-4">
														<div class="rotate-img">
															<img
															src="<?php echo base_url('') ?>assets/images/upload/artikel/<?= $value['gambar'] ?>"
															alt="banner"
															class="img-fluid"
															/>
														</div>
													</div>
												</a>

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
</div>