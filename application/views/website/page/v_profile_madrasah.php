<div class="content-wrapper">
	<div class="container">
		<div class="row" data-aos="fade-up">
			<div class="col-lg-8 stretch-card grid-margin">
				<div class="baner-content">
					<h1 class="text-center text-uppercase">
						Profile Madrasah
					</h1>
				</div>
			</div>
			<div class="col-lg-12 stretch-card grid-margin">
				<div class="card">
					<div class="card-body">
						<div class="basic-list-group">
							<div class="row">
								<div class="col-lg-6 col-xl-4">
									<div class="list-group mb-4 " id="list-tab" role="tablist">
										<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-1" role="tab">Nama Madrasah</a>

										<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-2" role="tab">No. Statistik Madrasah</a>

										<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-3" role="tab">NPSN</a>

										<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-4" role="tab">Alamat</a>

										<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-5" role="tab">Tahun Berdiri</a>

										<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-6" role="tab">Status</a>

										<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-7" role="tab">Terakreditasi</a>

										<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-8" role="tab">Nama Kepala Madrasah</a>

										<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-9" role="tab">TMT</a>
									</div>
								</div>
								<div class="col-lg-6 col-xl-8">
									<div class="tab-content" id="nav-tabContent">
										<div class="tab-pane fade show active" id="list-1">
											<h4 class="mb-4">Nama Madrasah</h4>
											<p class="text-capitalize"><?= $profile_madrasah['nama_madrasah'] ?></p>
										</div>
										<div class="tab-pane fade show" id="list-2">
											<h4 class="mb-4">No. Statistik Madrasah</h4>
											<p class="text-capitalize"><?= $profile_madrasah['no_statistik'] ?></p>
										</div>
										<div class="tab-pane fade show" id="list-3">
											<h4 class="mb-4">NPSN</h4>
											<p class="text-capitalize"><?= $profile_madrasah['npsn'] ?></p>
										</div>
										<div class="tab-pane fade show" id="list-4">
											<h4 class="mb-4">Alamat</h4>
											<p class="text-capitalize"><?= $profile_madrasah['alamat'] ?></p>
										</div>
										<div class="tab-pane fade show" id="list-5">
											<h4 class="mb-4">Tahun Berdiri</h4>
											<p class="text-capitalize"><?= $profile_madrasah['tahun_berdiri'] ?></p>
										</div>
										<div class="tab-pane fade show" id="list-6">
											<h4 class="mb-4">Status</h4>
											<p class="text-capitalize"><?= $profile_madrasah['status'] ?></p>
										</div>
										<div class="tab-pane fade show" id="list-7">
											<h4 class="mb-4">Terakreditasi</h4>
											<p class="text-capitalize"><?= $profile_madrasah['terakreditasi'] ?></p>
										</div>
										<div class="tab-pane fade show" id="list-8">
											<h4 class="mb-4">Nama Kepala Sekolah</h4>
											<p class="text-capitalize"><?= $profile_madrasah['nama_kepala'] ?></p>
										</div>
										<div class="tab-pane fade show" id="list-9">
											<h4 class="mb-4">TMT</h4>
											<p class="text-capitalize"><?= $profile_madrasah['TMT'] ?></p>
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
</div>
<!-- main-panel ends -->
<!-- container-scroller ends