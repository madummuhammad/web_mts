                    <div class="row">
                    	<div class="col-lg-12">
                    		<div class="card">
                    			<div class="card-header">
                    				<h4 class="card-title">Profile Madrasah</h4>
                    				<button class="btn btn-square btn-outline-primary" data-toggle="modal" data-target="#edit_profile"><i class="fas fa-pencil-alt" ></i></button>
                    				<!-- The Modal -->
                    				<div class="modal fade" id="edit_profile">
                    					<div class="modal-dialog modal-dialog-centered modal-lg">
                    						<div class="modal-content">
                    							<div class="modal-header">
                    								<h4 class="modal-title">Edit Profile Madrasah</h4>
                    								<button type="button" class="close" data-dismiss="modal">&times;</button>
                    							</div>
                    							<div class="modal-body">
                    								<div class="row">
                    									<div class="col-lg-6 col-xl-4">
                    										<div class="list-group mb-4 " id="list-tab" role="tablist">
                    											<a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-epm-1" role="tab">Nama Madrasah</a>

                    											<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-epm-2" role="tab">No. Statistik Madrasah</a>

                    											<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-epm-3" role="tab">NPSN</a>

                    											<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-epm-4" role="tab">Alamat</a>

                    											<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-epm-5" role="tab">Tahun Berdiri</a>

                    											<a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-epm-6" role="tab">Status</a>

                    											<a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-epm-7" role="tab">Terakreditasi</a>

                    											<a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-epm-8" role="tab">Nama Kepala Madrasah</a>

                    											<a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-epm-9" role="tab">TMT</a>
                    										</div>
                    									</div>
                    									<div class="col-lg-6 col-xl-8">
                    										<div class="tab-content" id="edit-profile-madrasah">
                    											<div class="tab-pane fade show active" id="list-epm-1">
                    												<h4 class="mb-4">Nama Madrasah</h4>
                    												<input type="text" class="form-control" id="profile_madrasah" name="nama_madrasah" value="<?= $profile_madrasah['nama_madrasah'] ?>">
                    											</div>
                    											<div class="tab-pane fade show" id="list-epm-2">
                    												<h4 class="mb-4">No. Statistik Madrasah</h4>
                    												<input type="text" class="form-control" id="profile_madrasah" name="no_statistik" value="<?= $profile_madrasah['no_statistik'] ?>">
                    											</div>
                    											<div class="tab-pane fade show" id="list-epm-3">
                    												<h4 class="mb-4">NPSN</h4>
                    												<input type="text" class="form-control" id="profile_madrasah" name="npsn" value="<?= $profile_madrasah['npsn'] ?>">
                    											</div>
                    											<div class="tab-pane fade show" id="list-epm-4">
                    												<h4 class="mb-4">Alamat</h4>
                    												<textarea name="alamat" class="form-control" id="alamat"><?= $profile_madrasah['alamat'] ?></textarea>
                    											</div>
                    											<div class="tab-pane fade show" id="list-epm-5">
                    												<h4 class="mb-4">Tahun Berdiri</h4>
                    												<input type="text" name="tahun_berdiri" class="form-control" id="profile_madrasah" value="<?= $profile_madrasah['tahun_berdiri'] ?>">
                    											</div>
                    											<div class="tab-pane fade show" id="list-epm-6">
                    												<h4 class="mb-4">Status</h4>
                    												<input type="text" class="form-control" id="profile_madrasah" name="status" value="<?= $profile_madrasah['status'] ?>">
                    											</div>
                    											<div class="tab-pane fade show" id="list-epm-7">
                    												<h4 class="mb-4">Terakreditasi</h4>
                    												<input type="text" name="terakreditasi" class="form-control" id="profile_madrasah" value="<?= $profile_madrasah['terakreditasi'] ?>">
                    											</div>
                    											<div class="tab-pane fade show" id="list-epm-8">
                    												<h4 class="mb-4">Nama Kepala Sekolah</h4>
                    												<input type="text" name="nama_kepala" class="form-control" id="profile_madrasah" value="<?= $profile_madrasah['nama_kepala'] ?>">
                    											</div>
                    											<div class="tab-pane fade show" id="list-epm-9">
                    												<h4 class="mb-4">TMT</h4>
                    												<input type="text" name="tmt" class="form-control" id="profile_madrasah" value="<?= $profile_madrasah['TMT'] ?>">
                    											</div>
                    										</div>
                    									</div>
                    								</div>
                    							</div>
                    							<div class="modal-footer">
                    								<button type="button" id="submit-edit-profile-madrasah" class="btn btn-primary" >Edit</button>
                    								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    							</div>
                    						</div>
                    					</div>
                    				</div>
                    			</div>
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
        <!--**********************************
            Content body end
            ***********************************-->

