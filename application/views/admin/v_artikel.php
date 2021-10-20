                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Daftar Artikel</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="display" style="min-width: 845px">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Judul</th>
                                                    <th>Gambar</th>
                                                    <th>Tanggal</th>
                                                    <th>Penulis</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($artikel as $row => $value): ?>
                                                    <tr class="text-dark">
                                                        <td><?php echo $row+1 ?></td>
                                                        <td><?php echo $value['judul'] ?></td>
                                                        <td><img src="<?= base_url('assets/images/upload/artikel/').$value['gambar'] ?>" height="100" width="100" alt=""></td>
                                                        <td><?php echo $value['tanggal_upload'] ?></td>
                                                        <td><?= $value['penulis'] ?> </td>
                                                        <td class="d-flex justify-content-center justify-items-center">
                                                            <div class="btn-group text-white">
                                                                <a class="badge btn-square badge-dark custom-btn"><i class="far fa-eye"></i></a>
                                                                <a href="<?= base_url('adminsystem/artikel/edit/').$value['id_artikel'] ?>" class="badge btn-square badge-success custom-btn"><i class="fas fa-pen-square"></i></a>
                                                                <a data-toggle="hapus-artikel" class="badge btn-square badge-primary custom-btn" data-id="<?= $value['id_artikel'] ?>"><i class="fas fa-trash"></i></a>
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