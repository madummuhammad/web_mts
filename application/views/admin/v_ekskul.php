                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Kesiswaan</h4>
                                    <button class="btn btn-square btn-outline-primary" data-toggle="modal" data-target="#tambah_ekskul"><i class="fas fa-plus-square" ></i></button>
                                    <div class="modal fade" id="tambah_ekskul">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tambah Ekstrakulikuler</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="kesiswaan">
                                                        <div class="form-group">
                                                            <label for="email">Nama Ekstrakulikuler</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Masukan Nama Ekstrakulikuler" id="email" name="ekskul">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Pembina</label>
                                                            <select id="single-select" class="form-control" name="pembina">
                                                             <option selected>--Pilih Pembina--</option>
                                                             <?php foreach ($pembina as $value): ?>
                                                                 <option value="<?= $value['nama'] ?>"><?= $value['nama'] ?></option>
                                                             <?php endforeach ?>
                                                         </select>
                                                     </div>
                                                 </form>
                                             </div>
                                             <div class="modal-footer">
                                                <button type="button" id="submit-tambah-ekskul" class="btn btn-primary">Tambah</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Pembina</th>
                                                <th>Ekstrakulikuler</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($ekskul as $row => $value): ?>
                                                <tr class="text-dark">
                                                    <td><?php echo $row+1 ?></td>
                                                    <td><?php echo $value['pembina'] ?></td>
                                                    <td><?php echo $value['ekskul'] ?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a data-toggle="modal" data-target="#edit_ekskul<?= $value['id'] ?>" class="badge badge-success btn-square text-white custom-btn"><i class="fas fa-pen-square"></i></a>
                                                            <div class="modal fade" id="edit_ekskul<?= $value['id'] ?>">
                                                                <div class="modal-dialog modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title">Edit Ekstrakulikuler</h4>
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <form id="kesiswaan">
                                                                                <div class="form-group">
                                                                                    <label for="email">Nama Ekstrakulikuler</label>
                                                                                    <div class="input-group">
                                                                                        <input type="text" class="form-control" placeholder="Masukan Nama Ekstrakulikuler" id="email" name="ekskul" value="<?= $value['ekskul'] ?>">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="email">Pembina</label>
                                                                                    <select id="single-select-dua" class="form-control" name="pembina">
                                                                                     <?php foreach ($pembina as $values): ?>
                                                                                         <option value="<?= $values['nama'] ?>" <?php if ($values['nama']==$value['pembina']): ?>
                                                                                             <?= 'selected' ?>
                                                                                         <?php endif ?>><?= $values['nama'] ?></option>
                                                                                     <?php endforeach ?>
                                                                                 </select>
                                                                             </div>
                                                                         </form>
                                                                     </div>
                                                                     <div class="modal-footer">
                                                                        <button type="button" data-toggle="btn-edit-ekskul" data-id="<?= $value['id'] ?>" class="btn btn-primary">Simpan Perubahan</button>
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a data-toggle="btn-hapus-ekskul" data-id="<?= $value['id'] ?>" class="badge badge-primary btn-square text-white custom-btn"><i class="fas fa-trash"></i></a>
                                                    </div>

                                                </td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
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