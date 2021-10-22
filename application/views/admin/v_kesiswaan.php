                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Kesiswaan</h4>
                                    <button class="btn btn-square btn-outline-primary" data-toggle="modal" data-target="#tambah_kesiswaan"><i class="fas fa-plus-square" ></i></button>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="tambah_kesiswaan">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tambah Kesiswaan</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="kesiswaan">
                                                        <div class="form-group">
                                                            <label for="email">Tahun Ajaran</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" placeholder="Masukan Tahun Ajaran" id="email" name="tahun" min="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Jumlah Siswa Kelas VII</label>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control" placeholder="Masukan Jumlah Siswa Kelas VII" id="email" name="vii" min="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Jumlah Siswa Kelas VIII</label>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control" placeholder="Masukan Jumlah Siswa Kelas VIII" id="email" name="viii" min="0">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">Jumlah Siswa Kelas XI</label>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control" placeholder="Masukan Jumlah Siswa Kelas XI" id="email" name="ix" min="0">
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" id="submit-tambah-kesiswaan" class="btn btn-primary">Tambah</button>
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
                                                    <th>VII</th>
                                                    <th>VIII</th>
                                                    <th>IX</th>
                                                    <th>Jumlah</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($kesiswaan as $row => $value): ?>
                                                    <tr class="text-dark">
                                                        <td><?php echo $row+1 ?></td>
                                                        <td><?php echo $value['tahun'] ?></td>
                                                        <td><?php echo $value['vii'] ?></td>
                                                        <td><?php echo $value['viii'] ?></td>
                                                        <td><?php echo $value['ix'] ?></td>
                                                        <td><?= $value['jumlah'] ?> </td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a data-toggle="modal" data-target="#edit_kesiswaan<?= $value['id'] ?>" class="badge badge-success btn-square text-white custom-btn"><i class="fas fa-pen-square"></i></a>
                                                                <div class="modal fade" id="edit_kesiswaan<?= $value['id'] ?>">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Edit Kesiswaan</h4>
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form id="kesiswaan">
                                                                                    <div class="form-group">
                                                                                        <label for="email">Tahun Ajaran</label>
                                                                                        <div class="input-group">
                                                                                            <input type="text" class="form-control" placeholder="Masukan Tahun Ajaran" id="email" name="tahun" min="0" value="<?= $value['tahun'] ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="email">Jumlah Siswa Kelas VII</label>
                                                                                        <div class="input-group">
                                                                                            <input type="number" class="form-control" placeholder="Masukan Jumlah Siswa Kelas VII" id="email" name="vii" min="0" value="<?= $value['vii'] ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="email">Jumlah Siswa Kelas VIII</label>
                                                                                        <div class="input-group">
                                                                                            <input type="number" class="form-control" placeholder="Masukan Jumlah Siswa Kelas VIII" id="email" name="viii" min="0" value="<?= $value['viii'] ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <label for="email">Jumlah Siswa Kelas XI</label>
                                                                                        <div class="input-group">
                                                                                            <input type="number" class="form-control" placeholder="Masukan Jumlah Siswa Kelas IX" id="email" name="ix" min="0" value="<?= $value['ix'] ?>">
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" data-toggle="btn-edit-kesiswaan" data-id="<?= $value['id'] ?>" class="btn btn-primary">Simpan Perubahan</button>
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a data-toggle="btn-hapus-kesiswaan" data-id="<?= $value['id'] ?>" class="badge badge-primary btn-square text-white custom-btn"><i class="fas fa-trash"></i></a>
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