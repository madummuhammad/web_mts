                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Prestasi</h4>
                                    <button class="btn btn-square btn-outline-primary" data-toggle="modal" data-target="#tambah_prestasi"><i class="fas fa-plus-square" ></i></button>
                                    <div class="modal fade" id="tambah_prestasi">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tambah Prestasi</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="kesiswaan">
                                                        <div class="form-group">
                                                            <label for="email">Tahun</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Masukan Tahun" id="email" name="tahun">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Kejuaraan</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Masukan Kejuaraan" id="email" name="kejuaraan">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" id="submit-tambah-prestasi" class="btn btn-primary">Tambah</button>
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
                                                    <th>Tahun</th>
                                                    <th>Kejuaraan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($prestasi as $row => $value): ?>
                                                    <tr class="text-dark">
                                                        <td><?php echo $row+1 ?></td>
                                                        <td><?php echo $value['tahun'] ?></td>
                                                        <td><?php echo $value['kejuaraan'] ?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a data-toggle="modal" data-target="#edit_prestasi<?= $value['id'] ?>" class="badge badge-success btn-square text-white custom-btn"><i class="fas fa-pen-square"></i></a>
                                                                <div class="modal fade" id="edit_prestasi<?= $value['id'] ?>">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Edit Prestasi</h4>
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form id="kesiswaan">
                                                                                    <div class="form-group">
                                                                                        <label for="email">Tahun</label>
                                                                                        <div class="input-group">
                                                                                            <input type="text" class="form-control" placeholder="Masukan Tahun" id="email" name="tahun" value="<?= $value['tahun'] ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="email">Kejuaraan</label>
                                                                                        <div class="input-group">
                                                                                            <input type="text" class="form-control" placeholder="Masukan Kejuaraan" id="email" name="kejuaraan" value="<?= $value['kejuaraan'] ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" data-toggle="btn-edit-prestasi" data-id="<?= $value['id'] ?>" id="submit-tambah-prestasi" class="btn btn-primary">Simpan Perubahan</button>
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a data-toggle="btn-hapus-prestasi" data-id="<?= $value['id'] ?>" class="badge badge-primary btn-square text-white custom-btn"><i class="fas fa-trash"></i></a>
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