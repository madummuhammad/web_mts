<div class="content-wrapper">
	<div class="container">
		<div class="row" data-aos="fade-up">
			<div class="col-lg-8 stretch-card grid-margin">
				<div class="baner-content">
					<h1 class="">
						Ekstrakulikuler
					</h1>
				</div>
			</div>
			<div class="col-lg-12 stretch-card grid-margin">
				<div class="card">
					<div class="card-body">
						<div class="container">
							<div id="accordion">
								<?php foreach ($ekskul as $row => $value): ?>
									<div class="card">
										<div class="card-header">
											<a class="card-link" data-toggle="collapse" href="#collapesKetenagaan<?= $value['id'] ?>">
												<?= $row+1 ?>. <?= $value['ekskul'] ?>
											</a>
										</div>
										<div id="collapesKetenagaan<?= $value['id'] ?>" class="collapse" data-parent="#accordion">
											<div class="card-body">
												<div class="form-group">
													<label for="email">Pembina :</label>
													<p class="form-control"><?= $value['pembina'] ?></p>
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