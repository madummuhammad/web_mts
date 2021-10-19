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
                                                    <th>Tanggal</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($artikel as $row => $value): ?>
                                                    <tr>
                                                        <td><?php echo $row+1 ?></td>
                                                        <td><?php echo $value['judul'] ?></td>
                                                        <td><?php echo $value['tanggal_upload'] ?></td>
                                                        <td>
                                                            <div class="btn-group text-white">
                                                                <a class="badge badge-dark">lihat <i class="far fa-eye"></i></a>
                                                                <a class="badge badge-success">edit <i class="fas fa-pen-square"></i></a>
                                                                <a class="badge badge-primary"><i class="fas fa-info-circle"></i> hapus</a>
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