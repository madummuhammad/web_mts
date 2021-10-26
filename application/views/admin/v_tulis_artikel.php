                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tulis Artikel</h4>
                            </div>
                            <div class="card-body">
                                <form id="artikel">
                                   <div class="form-group">
                                    <label for="pwd">Judul Artikel</label>
                                    <input type="text" name="tagline" id="judul" class="form-control" placeholder="Masukan Judul Artikel" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar Cover</label>
                                    <input id="gambar-artikel" type="file" name="gambar-artikel" class="form-control">
                                </div>
                                <div class="form-group">
                                    <img height="300" width="300" src="<?= base_url('assets/images/upload/default.png') ?>" id="preview" class="img-thumbnail">
                                </div>
                                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                                <div class="gorm-group my-1">
                                    <button id="submit-kirim-artikel" type="button" class="btn btn-primary">Kirim</button>
                                </div>
                            </form>
                            <!-- <div class="summernote"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!--**********************************
            Content body end
        ***********************************-->