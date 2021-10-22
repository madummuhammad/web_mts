                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Ketenagaan</h4>
                                    <button class="btn btn-square btn-outline-primary" data-toggle="modal" data-target="#tambah_ketenagaan"><i class="fas fa-plus-square" ></i></button>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="tambah_ketenagaan">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tambah Ketenagaan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="non_bangunan">
                                                        <div class="form-group">
                                                            <label for="email">Nama</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Masukan Nama" id="email" name="nama">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Status</label>
                                                            <select id="single-select" class="form-control" name="status">
                                                                <option value="GTY">GTY</option>
                                                                <option value=" ">Lain-lain</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Keterangan</label>
                                                            <textarea name="keterangan" id="" cols="10" rows="5" class="form-control"></textarea>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" id="submit-tambah-ketenagaan" class="btn btn-primary">Tambah</button>
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
                                                    <th>Nama</th>
                                                    <th>Status</th>
                                                    <th>Keterangan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($ketenagaan as $row => $value): ?>
                                                    <tr class="text-dark">
                                                        <td><?php echo $row+1 ?></td>
                                                        <td><?php echo $value['nama'] ?></td>
                                                        <td><?php echo $value['status'] ?></td>
                                                        <td><?= $value['keterangan'] ?> </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a data-toggle="modal" data-target="#edit-ketenagaan<?= $value['id'] ?>" class="badge badge-success btn-square text-white custom-btn"><i class="fas fa-pen-square"></i></a>
                                                                <div class="modal fade" id="edit-ketenagaan<?= $value['id'] ?>">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Tambah Ketenagaan</h4>
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form id="edit_ketenagaan<?= $value['id'] ?>">
                                                                                    <div class="form-group">
                                                                                        <label for="email">Nama</label>
                                                                                        <div class="input-group">
                                                                                            <input type="text" class="form-control" placeholder="Masukan Nama" id="email" name="nama" value="<?= $value['nama'] ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="email">Status</label>
                                                                                        <select id="single-select" class="form-control" name="status">
                                                                                            <option value="GTY" <?php if ($value['status']=='GTY'): ?>
                                                                                                <?= 'selected' ?>
                                                                                            <?php endif ?>>GTY</option>
                                                                                            <option value=" " <?php if ($value['status']==' '): ?>
                                                                                                <?= 'selected' ?>
                                                                                            <?php endif ?>>Lain-lain</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="email">Keterangan</label>
                                                                                        <textarea name="keterangan" id="" cols="10" rows="5" class="form-control"><?= $value['keterangan'] ?></textarea>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" data-toggle="btn-edit-ketenagaan" class="btn btn-primary" data-id="<?= $value['id'] ?>">Simpan Perubahan</button>
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a data-toggle="btn-hapus-ketenagaan" data-id="<?= $value['id'] ?>" class="badge badge-primary btn-square text-white custom-btn"><i class="fas fa-trash"></i></a>
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