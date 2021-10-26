<div class="content-wrapper">
	<div class="container">
		<div class="row" data-aos="fade-up">
			<div class="col-lg-8 stretch-card grid-margin">
				<div class="baner-content">
					<h1 class="">
						Prestasi
					</h1>
				</div>
			</div>
			<div class="col-lg-12 stretch-card grid-margin">
				<div class="card">
					<div class="card-body">
						<div class="container">
							<div id="accordion">
								<?php foreach ($prestasi as $row => $value): ?>
									<div class="card">
										<div class="card-header">
											<a class="card-link" data-toggle="collapse" href="#collapesPrestasi<?= $value['id'] ?>">
												<?= $value['tahun'] ?>: <?= $value['kejuaraan'] ?>
											</a>
										</div>
										<div id="collapesPrestasi<?= $value['id'] ?>" class="collapse" data-parent="#accordion">
											<div class="card-body">
												<div class="form-group">
													<label for="email">Prestasi</label>
													<p class="form-control"><?= $value['kejuaraan'] ?></p>
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
<!-- main-panel ends -->
<!-- container-scroller ends