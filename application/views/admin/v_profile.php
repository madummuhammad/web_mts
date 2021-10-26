                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo"></div>
                                    <div class="profile-photo">
                                        <img src="<?= base_url('assets/images/upload/profil/').$profile['gambar'] ?>" class="img-fluid rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="profile-info">
                                    <div class="row justify-content-center">
                                        <div class="col-xl-8">
                                            <div class="row">
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col ml-2">
                                                    <div class="profile-name">
                                                        <h4 class="text-primary"><?= $profile['nama'] ?></h4>
                                                        <p>Nama</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
                                                    <div class="profile-email">
                                                        <h4 class="text-muted"><?= $profile['username'] ?></h4>
                                                        <p>Username</p>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-xl-4 col-sm-4 prf-col">
                                                    <div class="profile-call">
                                                        <h4 class="text-muted">(+1) 321-837-1030</h4>
                                                        <p>Phone No.</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active">Tentang Saya</a>
                                            </li>
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Pengaturan Sandi</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="about-me" class="tab-pane fade active show">
                                                <div class="profile-personal-info">
                                                    <h4 class="text-primary mb-4 mt-4 text-center">Informasi Profil</h4>
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-12">
                                                                <label>Username</label>
                                                                <input type="text" placeholder="Ganti Username" class="form-control" value="<?= $profile['username'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" placeholder="Ganti Nama" class="form-control" value="<?= $profile['nama'] ?>">
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">Ganti Profile</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <div id="profile-settings" class="tab-pane fade">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary text-center">Ubah Kata Sandi</h4>
                                                        <form>
                                                            <div class="form-group">
                                                                <label>Password Lama</label>
                                                                <input type="text" placeholder="Password Lama" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Password Baru</label>
                                                                <input type="text" placeholder="Password Baru" class="form-control">
                                                            </div>
                                                            <button class="btn btn-primary" type="submit">Ganti Sandi</button>
                                                        </form>
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
        </div>
        <!--**********************************
            Content body end
        ***********************************-->