                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Data Ruangan dan Gedung</h4>
                                    <button class="btn btn-square btn-outline-primary" data-toggle="modal" data-target="#tambah_ruang_gedung"><i class="fas fa-plus-square" ></i></button>
                                    <!-- The Modal -->
                                    <div class="modal fade" id="tambah_ruang_gedung">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Tambah Ruangan dan Gedung</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="default-tab">
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#data-ruangan">Data Ruangan</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#kondisi">Kondisi</a>
                                                            </li>
                                                        </ul>
                                                        <form id="non_bangunan">
                                                            <div class="tab-content">
                                                                <div class="tab-pane fade show active p-2" id="data-ruangan">
                                                                    <div class="form-group">
                                                                        <label for="email">Nama Bangunan</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Masukan Nama Bangunan" id="email" name="nama_bangunan">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="email">Status Kepemilikan</label>
                                                                        <select id="single-select" class="form-control" name="status_kepemilikan">
                                                                            <option value="1">Milik Madrasah</option>
                                                                            <option value="0">Lain-lain</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade p-2" id="kondisi">
                                                                    <div class="form-group">
                                                                        <label for="email">Baik</label>
                                                                        <div class="input-group">
                                                                            <input type="number" class="form-control" placeholder="Jumlah Kondisi Baik" id="email" name="kondisi_baik" value="0" min="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="email">Sedang</label>
                                                                        <div class="input-group">
                                                                            <input type="number" class="form-control" placeholder="Jumlah Kondisi Sedang" id="email" name="kondisi_sedang" value="0" min="0">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="email">Rusak</label>
                                                                        <div class="input-group">
                                                                            <input type="number" class="form-control" placeholder="Jumlah Kondisi Rusak" id="email" name="kondisi_rusak" value="0" min="0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" id="submit-tambah-ruangan-gedung" class="btn btn-primary">Tambah</button>
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
                                                    <th>Nama Bangunan</th>
                                                    <th>Status Kepemilikan</th>
                                                    <th>Baik</th>
                                                    <th>Sedang</th>
                                                    <th>Rusak</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($ruang_gedung as $row => $value): ?>
                                                    <tr class="text-dark">
                                                        <td><?php echo $row+1 ?></td>
                                                        <td><?php echo $value['nama_bangunan'] ?></td>
                                                        <td><?php echo $value['status_kepemilikan'] ?></td>
                                                        <td><?= $value['baik'] ?> </td>
                                                        <td><?= $value['sedang'] ?> </td>
                                                        <td><?= $value['rusak'] ?> </td>
                                                        <td class="d-flex justify-content-center justify-items-center">
                                                            <div class="btn-group text-white">
                                                                <a data-toggle="modal" data-target="#edit_ruangan_gedung<?= $value['id'] ?>" class="badge btn-square badge-success custom-btn"><i class="fas fa-pen-square"></i></a>
                                                                <!-- The Modal -->
                                                                <div class="modal fade" id="edit_ruangan_gedung<?= $value['id'] ?>">
                                                                    <div class="modal-dialog modal-dialog-centered">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h4 class="modal-title">Tambah Ruangan dan Gedung</h4>
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="default-tab">
                                                                                    <ul class="nav nav-tabs" role="tablist">
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link active" data-toggle="tab" href="#data-ruangan<?= $value['id'] ?>">Data Ruangan</a>
                                                                                        </li>
                                                                                        <li class="nav-item">
                                                                                            <a class="nav-link" data-toggle="tab" href="#kondisi<?= $value['id'] ?>">Kondisi</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <form id="non_bangunan">
                                                                                        <div class="tab-content">
                                                                                            <div class="tab-pane fade show active p-2" id="data-ruangan<?= $value['id'] ?>">
                                                                                                <div class="form-group">
                                                                                                    <label for="email">Nama Bangunan</label>
                                                                                                    <div class="input-group">
                                                                                                        <input type="text" class="form-control" placeholder="Masukan Nama Bangunan" id="email" name="nama_bangunan" value="<?= $value['nama_bangunan'] ?>">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="email">Status Kepemilikan</label>
                                                                                                    <select id="single-select" class="form-control" name="status_kepemilikan">
                                                                                                        <option value="1" <?php if ($value['status_kepemilikan']==1): ?>
                                                                                                        <?= 'selected' ?>
                                                                                                        <?php endif ?>>Milik Madrasah</option>
                                                                                                        <option value="0" <?php if ($value['status_kepemilikan']==0): ?>
                                                                                                        <?= 'selected' ?>
                                                                                                        <?php endif ?>>Lain-lain</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="tab-pane fade p-2" id="kondisi<?= $value['id'] ?>">
                                                                                                <div class="form-group">
                                                                                                    <label for="email">Baik</label>
                                                                                                    <div class="input-group">
                                                                                                        <input type="number" class="form-control" placeholder="Jumlah Kondisi Baik" id="email" name="kondisi_baik" value="<?= $value['baik'] ?>" min="0">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="email">Sedang</label>
                                                                                                    <div class="input-group">
                                                                                                        <input type="number" class="form-control" placeholder="Jumlah Kondisi Sedang" id="email" name="kondisi_sedang" value="<?= $value['sedang'] ?>" min="0">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group">
                                                                                                    <label for="email">Rusak</label>
                                                                                                    <div class="input-group">
                                                                                                        <input type="number" class="form-control" placeholder="Jumlah Kondisi Rusak" id="email" name="kondisi_rusak" value="<?= $value['rusak'] ?>" min="0">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>

                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" id="submit-edit-ruangan-gedung<?= $value['id'] ?>" class="btn btn-primary">Kirim Perubahan</button>
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <a data-toggle="hapus-ruang-gedung" class="badge btn-square badge-primary custom-btn" data-id="<?= $value['id'] ?>"><i class="fas fa-trash"></i></a>
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