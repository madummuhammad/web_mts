                <div class="row" id="visimisi">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-square btn-outline-primary" data-toggle="modal" data-target="#edit-visi"><i class="fas fa-pencil-alt" ></i></button>
                                <div class="modal fade" id="edit-visi">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title">Edit Visi</h4>
                                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      </div>
                                      <div class="modal-body">
                                          <input type="text" name="visi" class="form-control" value="<?= $visimisi['visi'] ?> ">
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" id="submit-edit-visi" class="btn btn-primary">Edit Visi</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h1 class="text-center">VISI</h1>
                        <h4 class="text-center"><?= $visimisi['visi'] ?> </h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <button class="btn btn-square btn-outline-primary" data-toggle="modal" data-target="#edit-misi"><i class="fas fa-pencil-alt" ></i></button>
                        <div class="modal fade" id="edit-misi">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 class="modal-title">Edit Misi</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                  <textarea class="summernote-content" name="misi" cols="30" rows="10"><?= $visimisi['misi'] ?></textarea>
                              </div>
                              <div class="modal-footer">
                                <button type="button" id="submit-edit-misi" class="btn btn-primary">Edit Visi</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="text-center">MISI</h1>
                <?= $visimisi['misi'] ?> 
            </div>
        </div>
    </div>
</div>
</div>
</div>
        <!--**********************************
            Content body end
        ***********************************-->