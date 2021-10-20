                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tulis Artikel</h4>
                            </div>
                            <div class="card-body">
                                <form id="edit-artikel">
                                    <input type="text" name="id_artikel" id="id_artikel" value="<?= $artikel['id_artikel'] ?>" hidden>
                                 <div class="form-group">
                                    <label for="pwd">Judul Artikel</label>
                                    <input type="text" name="judul" id="edit-judul-artikel" class="form-control" placeholder="Masukan Judul Artikel" id="pwd" value="<?= $artikel['judul'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Gambar Cover</label>
                                    <input id="edit-gambar-artikel" type="file" name="gambar-artikel" class="form-control">
                                </div>
                                <div class="form-group">
                                    <img height="300" width="300" src="<?= base_url('assets/images/upload/artikel/').$artikel['gambar'] ?>" id="preview" class="img-thumbnail">
                                </div>
                                <textarea name="content" id="edit-content-artikel" cols="30" rows="10">
                                    <?= $artikel['isi'] ?>
                                </textarea>
                                <div class="gorm-group my-1">
                                    <button id="submit-edit-artikel" type="button" class="btn btn-primary">Kirim</button>
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