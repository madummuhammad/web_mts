                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Gambar Carouosel</h4>
                                    <button class="btn btn-square btn-outline-primary" data-toggle="modal" data-target="#tambah_galeri"><i class="fas fa-plus-square" ></i></button>
                                    <div class="modal fade" id="tambah_galeri">
                                        <form id="galeri">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Tambah Gambar</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="gambar">Gambar</label>
                                                            <input id="gambar-carousel" type="file" name="gambar-carousel" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <img height="300" width="300" src="<?= base_url('assets/images/upload/default.png') ?>" id="preview" class="img-thumbnail">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" id="submit-tambah-carousel" class="btn btn-primary">Tambah</button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                                <div class="card-body d-flex justify-content-center">
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
                                                    <div class="btn-group d-flex justify-content-center">
                                                        <a data-toggle="modal" data-target="#edit_carousel<?= $value['id'] ?>" class="badge badge-success btn-square text-white custom-btn"><i class="fas fa-pen-square"></i></a>
                                                        <a data-toggle="btn-hapus-carousel" data-id="<?= $value['id'] ?>" class="badge badge-primary btn-square text-white custom-btn"><i class="fas fa-trash"></i></a>
                                                    </div>
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
                                    <?php foreach ($carousel as $row => $value): ?>
                                        <div class="modal fade" id="edit_carousel<?= $value['id'] ?>">
                                            <form id="galeri">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Tambah Gambar</h4>
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="gambar">Gambar</label>
                                                                <input id="gambar-carousel<?= $value['id'] ?>" type="file" name="gambar-carousel" class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <img height="300" width="300" src="<?php echo base_url() ?>assets/images/upload/carousel/<?= $value['gambar'] ?>" id="previe" data-toggle="thumb-edit-carousel" class="img-thumbnail">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" data-toggle="btn-edit-carousel" data-id="<?= $value['id'] ?>" class="btn btn-primary">Simpan Perubahan</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
        <!--**********************************
            Content body end
        ***********************************-->