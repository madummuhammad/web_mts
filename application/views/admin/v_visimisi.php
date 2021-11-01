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
                                          <textarea class="form-control" name="visi" id="" cols="30" rows="2"><?= $visimisi['visi'] ?></textarea>
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
                        <button class="btn btn-square btn-outline-primary" data-toggle="modal" data-target="#tambah-misi"><i class="fas fa-plus-square" ></i></button>
                        <div class="modal fade" id="tambah-misi">
                            <div class="modal-dialog modal-dialog-centered">
                              <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Tambah Misi</h4>
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                <textarea class="form-control" name="misi" id="" cols="30" rows="2" placeholder="Masukan Misi"></textarea>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="submit-tambah-misi" class="btn btn-primary">Tambah Misi</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="text-center">MISI</h1>
                <?php foreach ($misi as $row => $value): ?>
                 <h4><?= $row+1 ?>. <?= $value['misi'] ?><span> <button class="btn btn-sm btn-square btn-sm btn-outline-primary" data-toggle="modal" data-target="#edit-misi<?= $value['id'] ?>"><i class="fas fa-pencil-alt" ></i></button><button class="btn btn-sm btn-square btn-sm btn-outline-danger" data-toggle="hapus-misi" data-id="<?= $value['id'] ?>"><i class="fas fa-trash" ></i></button></span></h4>
                 <div class="modal fade" id="edit-misi<?= $value['id'] ?>">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Edit Misi</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                        <textarea class="form-control" name="misi" id="" cols="30" rows="2"><?= $value['misi'] ?></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-toggle="edit-misi" data-id="<?= $value['id'] ?>" class="btn btn-primary">Edit Misi</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
        <!--**********************************
            Content body end
        ***********************************-->