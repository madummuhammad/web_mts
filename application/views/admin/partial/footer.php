        <!--**********************************
            Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © MTs AT TAQWA JATINGARANG &amp; Developed by Muhammad Ma'dum <?= date('Y') ?></p>
                </div>
            </div>
        <!--**********************************
            Footer end
            ***********************************-->

        <!--**********************************
           Support ticket button start
           ***********************************-->

        <!--**********************************
           Support ticket button end
           ***********************************-->


       </div>
    <!--**********************************
        Main wrapper end
        ***********************************-->

    <!--**********************************
        Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="<?php echo base_url('assets/admin')?>/vendor/global/global.min.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/js/quixnav-init.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/js/custom.min.js"></script>

        <script src="<?php echo base_url('assets/admin')?>/vendor/chartist/js/chartist.min.js"></script>

        <script src="<?php echo base_url('assets/admin')?>/vendor/moment/moment.min.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/vendor/pg-calendar/js/pignose.calendar.min.js"></script>


        <script src="<?php echo base_url('assets/admin')?>/js/dashboard/dashboard-2.js"></script>

        <!-- Sweet Alert -->
        <script src="<?php echo base_url('assets/admin')?>/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/js/plugins-init/sweetalert.init.js"></script>
        <!-- End of sweet alert -->

        <!-- Datatable -->
        <script src="<?php echo base_url('assets/admin')?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/js/plugins-init/datatables.init.js"></script>
        <!-- Summernote -->
        <script src="<?php echo base_url('assets/admin')?>/vendor/summernote/js/summernote.min.js"></script>
        <!-- Summernote init -->
        <script src="<?php echo base_url('assets/admin')?>/js/plugins-init/summernote-init.js"></script>

        <!-- Select -->
        <script src="<?php echo base_url('assets/admin')?>/vendor/select2/js/select2.full.min.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/js/plugins-init/select2-init.js"></script>
        <!-- End of select -->

        <!-- Chart Morris plugin files -->
        <script src="<?php echo base_url('assets/admin')?>/vendor/raphael/raphael.min.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/vendor/morris/morris.min.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/js/dashboard/dashboard-1.js"></script>

        <!-- My script -->
        <script src="<?php echo base_url('assets/admin')?>/js/script.js"></script>
        <!-- End of my script -->
        <script>
            $("#btn-logout").on('click',function(){
                $.ajax({
                    url: "<?php echo base_url('adminsystem/auth/logout') ?>",
                    type:'POST',
                    success: function(data){
                        Swal({
                            title: "Anda telah logout",
                            text: "",
                            type:'warning',
                            timer: 2e3, showConfirmButton: !1 
                        });
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/auth') ?>";
                        }, 1000);
                    }
                });
            });

            // kirim artikel

            $("#submit-kirim-artikel").on('click',function(){
                const fileupload = $('#gambar-artikel').prop('files')[0];

                let formData = new FormData();
                formData.append('gambar-artikel', fileupload);
                formData.append('judul', $('#judul').val());
                formData.append('content', $('#content').val());

                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('adminsystem/artikel/add_artikel') ?>",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (msg) {
                        Swal({
                            title: "Artikel Berhasil Dikirim",
                            text: "Mohon tunggu sebentar",
                            type:'success',
                            timer: 2e3, showConfirmButton: !1 
                        });
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/artikel') ?>";
                        }, 1000);
                    },
                    error: function () {
                        Swal({
                            title: "Artikel Gagal Dikirim",
                            text: "Isi form dengan benar",
                            type:'warning',
                            timer: 3e3, showConfirmButton: !1 
                        });
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/artikel/tulis') ?>";
                        }, 1000);
                    }
                });
            });
            // End of kirim artikel

            // Edit artikel
            $("#submit-edit-artikel").on('click',function(){
                const fileupload = $('#edit-gambar-artikel').prop('files')[0];
                var id_artikel=$("#id_artikel").val();

                let formData = new FormData();
                formData.append('gambar-artikel', fileupload);
                formData.append('id_artikel', $('#id_artikel').val());
                formData.append('judul', $('#edit-judul-artikel').val());
                formData.append('content', $('#edit-content-artikel').val());
                $.ajax({
                    type: 'POST',
                    url: "<?= base_url('adminsystem/artikel/update') ?>",
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (msg) {
                        Swal({
                            title: "Artikel Berhasil Dikirim",
                            text: "Mohon tunggu sebentar",
                            type:'success',
                            timer: 2e3, showConfirmButton: !1 
                        });
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/artikel') ?>";
                        }, 1000);
                    },
                    error: function () {
                        Swal({
                            title: "Artikel Gagal Dikirim",
                            text: "Isi form dengan benar",
                            type:'warning',
                            timer: 3e3, showConfirmButton: !1 
                        });
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/artikel/edit/') ?>"+id_artikel;
                        }, 1000);
                    }
                });
            });
            // End of edit artikel



// Hapus Artikel

var button_hapus_artikel = $("[data-toggle=hapus-artikel]");
for (let i = 0; i < button_hapus_artikel.length; i++) {
    button_hapus_artikel[i].onclick = function () {
        var id_artikel=$(this).data('id');
        Swal.fire({
            title: 'Hapus data ini?',
            text: "Data yang sudah di hapus tidak akan bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value ==true) {
                $.ajax({
                    url: "<?php echo base_url('adminsystem/artikel/hapus') ?>",
                    type:'POST',
                    data:{
                        id_artikel:id_artikel
                    },
                    success: function(data){
                        Swal.fire(
                            'Terhapus!',
                            'Data artikel berhasil dihapus.',
                            'success'
                            );
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/artikel') ?>";
                        }, 1000);
                    },
                });
            }
        })

    }
}
// End of hapus artikel

// Edit profile madrasah
$("#submit-edit-profile-madrasah").on('click',function(){
    var nama_madrasah=$("#edit-profile-madrasah .tab-pane input[name=nama_madrasah]").val();
    var no_statistik=$("#edit-profile-madrasah .tab-pane input[name=no_statistik]").val();
    var npsn=$("#edit-profile-madrasah .tab-pane input[name=npsn]").val();
    var alamat=$("#edit-profile-madrasah .tab-pane textarea[name=alamat]").val();
    var tahun_berdiri=$("#edit-profile-madrasah .tab-pane input[name=tahun_berdiri]").val();
    var status=$("#edit-profile-madrasah .tab-pane input[name=status]").val();
    var terakreditasi=$("#edit-profile-madrasah .tab-pane input[name=terakreditasi]").val();
    var nama_kepala=$("#edit-profile-madrasah .tab-pane input[name=nama_kepala]").val();
    var tmt=$("#edit-profile-madrasah .tab-pane input[name=tmt]").val();

    $.ajax({
        url: "<?php echo base_url('adminsystem/profile_madrasah/edit_profile') ?>",
        type:'POST',
        data:{
            nama_madrasah:nama_madrasah,
            no_statistik:no_statistik,
            npsn:npsn,
            alamat:alamat,
            tahun_berdiri:tahun_berdiri,
            status:status,
            terakreditasi:terakreditasi,
            nama_kepala:nama_kepala,
            tmt:tmt
        },
        success: function(data){
            Swal({
                title: "Profile Madrasah Berhasil Diedit",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Profile Madrasah Gagal Diedit",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah') ?>";
            }, 1000);
        }
    });
});
// End of edit profile madrasah

// Edit visi
$("#submit-edit-visi").on('click',function(){
    var visi=$("#visimisi input[name=visi]").val();
    $.ajax({
        url: "<?php echo base_url('adminsystem/profile_madrasah/edit_visi') ?>",
        type:'POST',
        data:{
            visi:visi,
        },
        success: function(data){
            Swal({
                title: "Visi Berhasil Diedit",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah/visi_misi') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Visi Gagal Diedit",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah/visi_misi') ?>";
            }, 1000);
        }
    });
});
// End of edit visi

// Edit misi
$("#submit-edit-misi").on('click',function(){
    var misi=$("#visimisi textarea[name=misi]").val();
    $.ajax({
        url: "<?php echo base_url('adminsystem/profile_madrasah/edit_misi') ?>",
        type:'POST',
        data:{
            misi:misi,
        },
        success: function(data){
            Swal({
                title: "Misi Berhasil Diedit",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah/visi_misi') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Misi Gagal Diedit",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah/visi_misi') ?>";
            }, 1000);
        }
    });
});
// End of edit misi

// Tanah dan bangunan
$("#submit-tanah-bangunan").on('click',function(){
    var luas_tanah=$("#tanah_bangunan input[name=luas_tanah]").val();
    var luas_bangunan=$("#tanah_bangunan input[name=luas_bangunan]").val();
    $.ajax({
        url: "<?php echo base_url('adminsystem/profile_madrasah/edit_tanah_bangunan') ?>",
        type:'POST',
        data:{
            luas_tanah:luas_tanah,
            luas_bangunan:luas_bangunan
        },
        success: function(data){
            Swal({
                title: "Tanah dan Bangunan Berhasil Diedit",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah/tanah_bangunan') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Tanah dan Bangunan Gagal Diedit",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah/tanah_bangunan') ?>";
            }, 1000);
        }
    });
});
// End of tanah dan bangunan

// Non Bangunan
$("#submit-non-bangunan").on('click',function(){
    var halaman_madrasah=$("#non_bangunan input[name=halaman_madrasah]").val();
    var lapangan_olahraga=$("#non_bangunan input[name=lapangan_olahraga]").val();
    $.ajax({
        url: "<?php echo base_url('adminsystem/profile_madrasah/edit_non_bangunan') ?>",
        type:'POST',
        data:{
            halaman_madrasah:halaman_madrasah,
            lapangan_olahraga:lapangan_olahraga
        },
        success: function(data){
            Swal({
                title: "Lahan Non Bangunan Berhasil Diedit",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah/lahan_non_bangunan') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Lahan Non Bangunan Gagal Diedit",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah/lahan_non_bangunan') ?>";
            }, 1000);
        }
    });
});
// End of non  bangunan

// Ruangan dan Gedung
$("#submit-tambah-ruangan-gedung").on('click',function(){
    var nama_bangunan=$("#tambah_ruang_gedung input[name=nama_bangunan]").val();
    var status_kepemilikan=$("#non_bangunan select[name=status_kepemilikan]").val();
    var baik=$("#tambah_ruang_gedung input[name=kondisi_baik]").val();
    var sedang=$("#tambah_ruang_gedung input[name=kondisi_sedang]").val();
    var rusak=$("#tambah_ruang_gedung input[name=kondisi_rusak]").val();
    $.ajax({
        url: "<?php echo base_url('adminsystem/profile_madrasah/tambah_ruang_gedung') ?>",
        type:'POST',
        data:{
            nama_bangunan:nama_bangunan,
            status_kepemilikan:status_kepemilikan,
            baik:baik,
            sedang:sedang,
            rusak:rusak
        },
        success: function(data){
            Swal({
                title: "Data Ruangan dan Gedung Berhasil di Tambah",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah/ruang_gedung') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Data Ruangan dan Gedung Gagal Diedit",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah/ruang_gedung') ?>";
            }, 1000);
        }
    });
});
// End of ruangan dan gedung

// edit ruangan dan gedung
<?php 
foreach ($ruang_gedung as $value) {
 ?>
 $("#submit-edit-ruangan-gedung<?= $value['id'] ?>").on('click',function(){
    var nama_bangunan=$("#edit_ruangan_gedung<?= $value['id'] ?> input[name=nama_bangunan]").val();
    var status_kepemilikan=$("#edit_ruangan_gedung<?= $value['id'] ?> select[name=status_kepemilikan]").val();
    var baik=$("#edit_ruangan_gedung<?= $value['id'] ?> input[name=kondisi_baik]").val();
    var sedang=$("#edit_ruangan_gedung<?= $value['id'] ?> input[name=kondisi_sedang]").val();
    var rusak=$("#edit_ruangan_gedung<?= $value['id'] ?> input[name=kondisi_rusak]").val();
    var id=<?= $value['id'] ?>;
    $.ajax({
        url: "<?php echo base_url('adminsystem/profile_madrasah/edit_ruang_gedung') ?>",
        type:'POST',
        data:{
            id:id,
            nama_bangunan:nama_bangunan,
            status_kepemilikan:status_kepemilikan,
            baik:baik,
            sedang:sedang,
            rusak:rusak
        },
        success: function(data){
            Swal({
                title: "Data Ruangan dan Gedung Berhasil Diedit",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah/ruang_gedung') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Data Ruangan dan Gedung Gagal Diedit",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile_madrasah/ruang_gedung') ?>";
            }, 1000);
        }
    });
});
<?php } ?>
// end of edit ruangan dan gedung

// hapus ruang gedung
var button_modal = $("[data-toggle=hapus-ruang-gedung]");
for (let i = 0; i < button_modal.length; i++) {
    button_modal[i].onclick = function () {
        var id=$(this).data('id');
        Swal.fire({
            title: 'Hapus data ini?',
            text: "Data yang sudah di hapus tidak akan bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value ==true) {
                $.ajax({
                    url: "<?php echo base_url('adminsystem/profile_madrasah/hapus_ruang_gedung') ?>",
                    type:'POST',
                    data:{
                        id:id
                    },
                    success: function(data){
                        Swal.fire(
                            'Terhapus!',
                            'Data artikel berhasil dihapus.',
                            'success'
                            );
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/profile_madrasah/ruang_gedung') ?>";
                        }, 1000);
                    },
                });
            }
        })

    }
}
// end of hapus ruang gedung

// Tambah Ketenagaan
$("#submit-tambah-ketenagaan").on('click',function(){
    var nama=$("#tambah_ketenagaan input[name=nama]").val();
    var status=$("#tambah_ketenagaan select[name=status]").val();
    var keterangan=$("#tambah_ketenagaan textarea[name=keterangan]").val();

    $.ajax({
        url: "<?php echo base_url('adminsystem/ketenagaan/tambah') ?>",
        type:'POST',
        data:{
            nama:nama,
            status:status,
            keterangan:keterangan
        },
        success: function(data){
            Swal({
                title: "Data Ketenagaan Berhasil Ditambah",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/ketenagaan') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Data Ketenagaan Gagal Ditambah",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/ketenagaan') ?>";
            }, 1000);
        }
    });
});
// End of ketenagaan

// Edit ketenagaan
var btn_edit_ketenagaan = $("[data-toggle=btn-edit-ketenagaan]");
for (let i = 0; i < btn_edit_ketenagaan.length; i++) {
    btn_edit_ketenagaan[i].onclick = function () {
        var id=$(this).data('id');
        var nama=$("#edit_ketenagaan"+id+" input[name=nama]").val();
        var status=$("#edit_ketenagaan"+id+" select[name=status]").val();
        var keterangan=$("#edit_ketenagaan"+id+" textarea[name=keterangan]").val();

        $.ajax({
            url: "<?php echo base_url('adminsystem/ketenagaan/edit') ?>",
            type:'POST',
            data:{
                id:id,
                nama:nama,
                status:status,
                keterangan:keterangan
            },
            success: function(data){
                Swal({
                    title: "Data Ketenagaan Berhasil Diedit",
                    text: "Mohon tunggu sebentar",
                    type:'success',
                    timer: 2e3, showConfirmButton: !1 
                });
                setTimeout(function (){
                    window.location.href="<?php echo base_url('adminsystem/ketenagaan') ?>";
                }, 1000);
            },
            error: function () {
                Swal({
                    title: "Data Ketenagaan Gagal Diedit",
                    text: "Isi form dengan benar",
                    type:'warning',
                    timer: 3e3, showConfirmButton: !1 
                });
                setTimeout(function (){
                    window.location.href="<?php echo base_url('adminsystem/ketenagaan') ?>";
                }, 1000);
            }
        });
    }
}

// End of edit ketenagaan

// Hapus ketenagaan
var btn_hapus_ketenagaan = $("[data-toggle=btn-hapus-ketenagaan]");
for (let i = 0; i < btn_hapus_ketenagaan.length; i++) {
    btn_hapus_ketenagaan[i].onclick = function () {
        var id=$(this).data('id');
        Swal.fire({
            title: 'Hapus data ini?',
            text: "Data yang sudah di hapus tidak akan bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value==true) {
                $.ajax({
                    url: "<?php echo base_url('adminsystem/ketenagaan/hapus') ?>",
                    type:'POST',
                    data:{
                        id:id
                    },
                    success: function(data){
                        Swal.fire(
                            'Terhapus!',
                            'Data artikel berhasil dihapus.',
                            'success'
                            );
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/ketenagaan') ?>";
                        }, 1000);
                    },
                });
            }
        })
    }
}
// End of hapus ketenagaan

// Tambah Kesiswaan
$("#submit-tambah-kesiswaan").on('click',function(){
    var tahun=$("#tambah_kesiswaan input[name=tahun]").val();
    var vii=$("#tambah_kesiswaan input[name=vii]").val();
    var viii=$("#tambah_kesiswaan input[name=viii]").val();
    var ix=$("#tambah_kesiswaan input[name=ix]").val();

    var jumlah=parseInt(vii)+parseInt(viii)+parseInt(ix);

    $.ajax({
        url: "<?php echo base_url('adminsystem/kesiswaan/tambah') ?>",
        type:'POST',
        data:{
            tahun:tahun,
            vii:vii,
            viii:viii,
            ix:ix,
            jumlah:jumlah
        },
        success: function(data){
            Swal({
                title: "Data Kesiswaan Berhasil Ditambah",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/kesiswaan') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Data Kesiswaan Gagal Ditambah",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/kesiswaan') ?>";
            }, 1000);
        }
    });
});
// End of tambah kesiswaan


// Edit kesiswaan
var btn_edit_kesiswaan = $("[data-toggle=btn-edit-kesiswaan]");
for (let i = 0; i < btn_edit_kesiswaan.length; i++) {
    btn_edit_kesiswaan[i].onclick = function () {
        var id=$(this).data('id');
        var tahun=$("#edit_kesiswaan"+id+" input[name=tahun]").val();
        var vii=$("#edit_kesiswaan"+id+" input[name=vii]").val();
        var viii=$("#edit_kesiswaan"+id+" input[name=viii]").val();
        var ix=$("#edit_kesiswaan"+id+" input[name=ix]").val();

        var jumlah=parseInt(vii)+parseInt(viii)+parseInt(ix);
        $.ajax({
            url: "<?php echo base_url('adminsystem/kesiswaan/edit') ?>",
            type:'POST',
            data:{
                id:id,
                tahun:tahun,
                vii:vii,
                viii:viii,
                ix:ix,
                jumlah:jumlah
            },
            success: function(data){
                Swal({
                    title: "Data Kesiswaan Berhasil Diedit",
                    text: "Mohon tunggu sebentar",
                    type:'success',
                    timer: 2e3, showConfirmButton: !1 
                });
                setTimeout(function (){
                    window.location.href="<?php echo base_url('adminsystem/kesiswaan') ?>";
                }, 1000);
            },
            error: function () {
                Swal({
                    title: "Data Kesiswaan Gagal Diedit",
                    text: "Isi form dengan benar",
                    type:'warning',
                    timer: 3e3, showConfirmButton: !1 
                });
                setTimeout(function (){
                    window.location.href="<?php echo base_url('adminsystem/kesiswaan') ?>";
                }, 1000);
            }
        });
    }
}
// End of edit kesiswaan

// hapus kesiswaan
var btn_hapus_kesiswaan = $("[data-toggle=btn-hapus-kesiswaan]");
for (let i = 0; i < btn_hapus_kesiswaan.length; i++) {
    btn_hapus_kesiswaan[i].onclick = function () {
        var id=$(this).data('id');
        Swal.fire({
            title: 'Hapus data ini?',
            text: "Data yang sudah di hapus tidak akan bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value==true) {
                $.ajax({
                    url: "<?php echo base_url('adminsystem/kesiswaan/hapus') ?>",
                    type:'POST',
                    data:{
                        id:id
                    },
                    success: function(data){
                        Swal.fire(
                            'Terhapus!',
                            'Data artikel berhasil dihapus.',
                            'success'
                            );
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/kesiswaan') ?>";
                        }, 1000);
                    },
                });
            }
        })
    }
}
// End of hapus kesiswaan

// Ekstrakulikuler
$("#submit-tambah-ekskul").on('click',function(){
    var ekskul=$("#tambah_ekskul input[name=ekskul]").val();
    var pembina=$("#tambah_ekskul select[name=pembina]").val();

    $.ajax({
        url: "<?php echo base_url('adminsystem/ekskul/tambah') ?>",
        type:'POST',
        data:{
            ekskul:ekskul,
            pembina:pembina
        },
        success: function(data){
            Swal({
                title: "Data Kesiswaan Berhasil Ditambah",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/ekskul') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Data Kesiswaan Gagal Ditambah",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/ekskul') ?>";
            }, 1000);
        }
    });
});
// End of Ekstrakulikuler

// Edit ekskul
var btn_edit_ekskul = $("[data-toggle=btn-edit-ekskul]");
for (let i = 0; i < btn_edit_ekskul.length; i++) {
    btn_edit_ekskul[i].onclick = function () {
        var id=$(this).data('id');
        var ekskul=$("#edit_ekskul"+id+" input[name=ekskul]").val();
        var pembina=$("#edit_ekskul"+id+" select[name=pembina]").val();
        $.ajax({
            url: "<?php echo base_url('adminsystem/ekskul/edit') ?>",
            type:'POST',
            data:{
                id:id,
                ekskul:ekskul,
                pembina:pembina
            },
            success: function(data){
                Swal({
                    title: "Data Ekstrakulikuler Berhasil Diedit",
                    text: "Mohon tunggu sebentar",
                    type:'success',
                    timer: 2e3, showConfirmButton: !1 
                });
                setTimeout(function (){
                    window.location.href="<?php echo base_url('adminsystem/ekskul') ?>";
                }, 1000);
            },
            error: function () {
                Swal({
                    title: "Data Ekstrakulikuler Gagal Ditambah",
                    text: "Isi form dengan benar",
                    type:'warning',
                    timer: 3e3, showConfirmButton: !1 
                });
                setTimeout(function (){
                    window.location.href="<?php echo base_url('adminsystem/ekskul') ?>";
                }, 1000);
            }
        });
    }
}
// End of edit

// Hapus ekskul
var btn_hapus_ekskul = $("[data-toggle=btn-hapus-ekskul]");
for (let i = 0; i < btn_hapus_ekskul.length; i++) {
    btn_hapus_ekskul[i].onclick = function () {
        var id=$(this).data('id');
        Swal.fire({
            title: 'Hapus data ini?',
            text: "Data yang sudah di hapus tidak akan bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value==true) {
                $.ajax({
                    url: "<?php echo base_url('adminsystem/ekskul/hapus') ?>",
                    type:'POST',
                    data:{
                        id:id
                    },
                    success: function(data){
                        Swal.fire(
                            'Terhapus!',
                            'Data artikel berhasil dihapus.',
                            'success'
                            );
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/ekskul') ?>";
                        }, 1000);
                    },
                });
            }
        })
    }
}
// End of hapus ekskul

// Prestasi
$("#submit-tambah-prestasi").on('click',function(){
    var tahun=$("#tambah_prestasi input[name=tahun]").val();
    var kejuaraan=$("#tambah_prestasi input[name=kejuaraan]").val();

    $.ajax({
        url: "<?php echo base_url('adminsystem/prestasi/tambah') ?>",
        type:'POST',
        data:{
            tahun:tahun,
            kejuaraan:kejuaraan
        },
        success: function(data){
            Swal({
                title: "Data Prestasi Berhasil Ditambah",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/prestasi') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Data Prestasi Gagal Ditambah",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/prestasi') ?>";
            }, 1000);
        }
    });
});
// End of prestasi

// Edit edit prestasi
var btn_edit_prestasi = $("[data-toggle=btn-edit-prestasi]");
for (let i = 0; i < btn_edit_prestasi.length; i++) {
    btn_edit_prestasi[i].onclick = function () {
        var id=$(this).data('id');
        var tahun=$("#edit_prestasi"+id+" input[name=tahun]").val();
        var kejuaraan=$("#edit_prestasi"+id+" input[name=kejuaraan]").val();
        $.ajax({
            url: "<?php echo base_url('adminsystem/prestasi/edit') ?>",
            type:'POST',
            data:{
                id:id,
                tahun:tahun,
                kejuaraan:kejuaraan
            },
            success: function(data){
                Swal({
                    title: "Data Prestasi Berhasil Diedit",
                    text: "Mohon tunggu sebentar",
                    type:'success',
                    timer: 2e3, showConfirmButton: !1 
                });
                setTimeout(function (){
                    window.location.href="<?php echo base_url('adminsystem/prestasi') ?>";
                }, 1000);
            },
            error: function () {
                Swal({
                    title: "Data Prestasi Gagal Ditambah",
                    text: "Isi form dengan benar",
                    type:'warning',
                    timer: 3e3, showConfirmButton: !1 
                });
                setTimeout(function (){
                    window.location.href="<?php echo base_url('adminsystem/prestasi') ?>";
                }, 1000);
            }
        });
    }
}
// End edit of prestasi

// Hapus Prestasi
var btn_hapus_prestasi = $("[data-toggle=btn-hapus-prestasi]");
for (let i = 0; i < btn_hapus_prestasi.length; i++) {
    btn_hapus_prestasi[i].onclick = function () {
        var id=$(this).data('id');
        Swal.fire({
            title: 'Hapus data ini?',
            text: "Data yang sudah di hapus tidak akan bisa dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value==true) {
                $.ajax({
                    url: "<?php echo base_url('adminsystem/prestasi/hapus') ?>",
                    type:'POST',
                    data:{
                        id:id
                    },
                    success: function(data){
                        Swal.fire(
                            'Terhapus!',
                            'Data prestasi berhasil dihapus.',
                            'success'
                            );
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/prestasi') ?>";
                        }, 1000);
                    },
                });
            }
        })
    }
}
// End of hapus prestasi

// Tambah galeri
$("#submit-tambah-galeri").on('click',function(){
    const fileupload = $('#gambar-galeri').prop('files')[0];

    let formData = new FormData();
    formData.append('gambar-galeri', fileupload);
    formData.append('tagline', $('#tagline').val());

    $.ajax({
        type: 'POST',
        url: "<?= base_url('adminsystem/galeri/tambah') ?>",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (msg) {
            Swal({
                title: "Galeri Berhasil Ditambah",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/galeri') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Galeri Gagal Dikirim",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/galeri') ?>";
            }, 1000);
        }
    });
});
// End of tambah galeri

// hapus galeri
var btn_hapus_galeri = $("[data-toggle=btn-hapus-galeri]");
for (let i = 0; i < btn_hapus_galeri.length; i++) {
    btn_hapus_galeri[i].onclick = function () {
        var id=$(this).data('id');
        Swal.fire({
            title: 'Hapus data ini?',
            text: "Data yang sudah di hapus tidak akan bisa dikembalikan!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value == true) {

                $.ajax({
                    url: "<?php echo base_url('adminsystem/galeri/hapus') ?>",
                    type:'POST',
                    data:{
                        id:id
                    },
                    success: function(data){
                        Swal.fire(
                            'Terhapus!',
                            'Gambar galeri berhasil dihapus.',
                            'success'
                            );
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/galeri') ?>";
                        }, 1000);
                    },
                });
            }
        })
    }
}
// End of hapus galeri

// Edit galeri
var btn_edit_galeri = $("[data-toggle=btn-edit-galeri]");
for (let i = 0; i < btn_edit_galeri.length; i++) {
    btn_edit_galeri[i].onclick = function () {
        var id=$(this).data('id');
        const fileupload = $(`#gambar-galeri`+id).prop('files')[0];

        let formData = new FormData();
        formData.append('gambar-galeri', fileupload);
        formData.append('tagline', $(`#tagline`+id).val());
        formData.append('id',id);

        $.ajax({
            type:'POST',
            url: "<?php echo base_url('adminsystem/galeri/edit') ?>",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function (msg) {
                Swal({
                    title: "Gamber Galeri Berhasil Diedit",
                    text: "Mohon tunggu sebentar",
                    type:'success',
                    timer: 2e3, showConfirmButton: !1 
                });
                setTimeout(function (){
                    window.location.href="<?php echo base_url('adminsystem/galeri') ?>";
                }, 1000);
            },
            error: function () {
                Swal({
                    title: "Gamber Galeri Gagal Diedit",
                    text: "Isi form dengan benar",
                    type:'warning',
                    timer: 3e3, showConfirmButton: !1 
                });
                setTimeout(function (){
                    window.location.href="<?php echo base_url('adminsystem/galeri') ?>";
                }, 1000);
            }
        });
    }
}
// End of edit galeri

// Tambah Carousel
$("#submit-tambah-carousel").on('click',function(){
    const fileupload = $('#gambar-carousel').prop('files')[0];

    let formData = new FormData();
    formData.append('gambar-carousel', fileupload);

    $.ajax({
        type: 'POST',
        url: "<?= base_url('adminsystem/carousel/tambah') ?>",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (msg) {
            Swal({
                title: "Carousel Berhasil Ditambah",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/carousel') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Carousel Gagal Dikirim",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/carousel') ?>";
            }, 1000);
        }
    });
});
// End of carousel

// Hapus carousel
var btn_hapus_carousel = $("[data-toggle=btn-hapus-carousel]");
for (let i = 0; i < btn_hapus_carousel.length; i++) {
    btn_hapus_carousel[i].onclick = function () {
        var id=$(this).data('id');
        Swal.fire({
            title: 'Hapus data ini?',
            text: "Data yang sudah di hapus tidak akan bisa dikembalikan!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value == true) {

                $.ajax({
                    url: "<?php echo base_url('adminsystem/carousel/hapus') ?>",
                    type:'POST',
                    data:{
                        id:id
                    },
                    success: function(data){
                        Swal.fire(
                            'Terhapus!',
                            'Gambar Carousel berhasil dihapus.',
                            'success'
                            );
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/carousel') ?>";
                        }, 1000);
                    },
                });
            }
        })
    }
}
// End of hapus carousel

// Edit carousel
var btn_edit_carousel = $("[data-toggle=btn-edit-carousel]");
for (let i = 0; i < btn_edit_carousel.length; i++) {
    btn_edit_carousel[i].onclick = function () {
        var id=$(this).data('id');
        const fileupload = $(`#gambar-carousel`+id).prop('files')[0];

        let formData = new FormData();
        formData.append('gambar-carousel', fileupload);
        formData.append('id',id);

        $.ajax({
            type:'POST',
            url: "<?php echo base_url('adminsystem/carousel/edit') ?>",
            data: formData,
            cache: false,
            processData: false,
            contentType: false,
            success: function (msg) {
                Swal({
                    title: "Gamber Galeri Berhasil Diedit",
                    text: "Mohon tunggu sebentar",
                    type:'success',
                    timer: 2e3, showConfirmButton: !1 
                });
                setTimeout(function (){
                    window.location.href="<?php echo base_url('adminsystem/carousel') ?>";
                }, 1000);
            },
            error: function () {
                Swal({
                    title: "Gamber Galeri Gagal Diedit",
                    text: "Isi form dengan benar",
                    type:'warning',
                    timer: 3e3, showConfirmButton: !1 
                });
                setTimeout(function (){
                    window.location.href="<?php echo base_url('adminsystem/carousel') ?>";
                }, 1000);
            }
        });
    }
}
// End of edit carousel

// Edit profile
$("#submit-edit-profile").on('click',function(){
    const fileupload = $('#gambar-profile').prop('files')[0];

    let formData = new FormData();
    formData.append('gambar-profile', fileupload);
    formData.append('username', $('#about-me input[name=username]').val());
    formData.append('nama', $('#about-me input[name=nama]').val());

    $.ajax({
        type: 'POST',
        url: "<?= base_url('adminsystem/profile/edit_profile') ?>",
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (msg) {
            Swal({
                title: "Profil Berhasil Diedit",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/profile') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Profil Gagal Diedit",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            // setTimeout(function (){
            //     window.location.href="<?php echo base_url('adminsystem/profile') ?>";
            // }, 1000);
        }
    });
});
// End of edit profile

// Ganti sandi
$("#submit-ganti-sandi").on('click',function(){
    const password_lama=$("#profile-settings input[name=password_lama]").val();
    const password_baru=$("#profile-settings input[name=password_baru]").val();
    $.ajax({
        url: "<?php echo base_url('adminsystem/profile/edit_sandi') ?>",
        type:'POST',
        data:{
            password_lama:password_lama,
            password_baru:password_baru
        },
        dataType:'json',
        success: function(data){
            if (data=='Gagal') {
               Swal.fire({
                icon:'error',
                title: "Gagal Mengganti Sandi",
                text: "Sandi Lama Salah",
                type:'warning',
                timer: 1e3, showConfirmButton: !1 
            });
           } else {
            Swal({
                title: "Sandi Berhasil Di Ubah",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            $("#profile-settings input[name=password_lama]").val('');
            $("#profile-settings input[name=password_baru]").val('');
            // setTimeout(function (){
            //     window.location.href="<?php echo base_url('adminsystem/profile') ?>";
            // }, 1000);
        }
    }
});
});
// End of ganti sandi

$("#submit-tambah-admin").on('click',function(){
    var username=$("#tambah_admin input[name=username]").val();
    var nama=$("#tambah_admin input[name=nama]").val();
    var role=$("#tambah_admin select[name=role]").val();
    var password=$("#tambah_admin input[name=password]").val();
    $.ajax({
        url: "<?php echo base_url('adminsystem/admin/tambah') ?>",
        type:'POST',
        data:{
            username:username,
            nama:nama,
            role:role,
            password:password
        },
        success: function(data){
            Swal({
                title: "Admin Berhasil Ditambah",
                text: "Mohon tunggu sebentar",
                type:'success',
                timer: 2e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/admin/admin') ?>";
            }, 1000);
        },
        error: function () {
            Swal({
                title: "Admin Gagal Ditambah",
                text: "Isi form dengan benar",
                type:'warning',
                timer: 3e3, showConfirmButton: !1 
            });
            setTimeout(function (){
                window.location.href="<?php echo base_url('adminsystem/admin/admin') ?>";
            }, 1000);
        }
    });
});

// Hapus Admin
var btn_hapus_admin = $("[data-toggle=btn-hapus-admin]");
for (let i = 0; i < btn_hapus_admin.length; i++) {
    btn_hapus_admin[i].onclick = function () {
        var id=$(this).data('id');
        Swal.fire({
            title: 'Hapus data ini?',
            text: "Data yang sudah di hapus tidak akan bisa dikembalikan!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.value == true) {
                $.ajax({
                    url: "<?php echo base_url('adminsystem/admin/hapus') ?>",
                    type:'POST',
                    data:{
                        id:id
                    },
                    success: function(data){
                        Swal.fire(
                            'Terhapus!',
                            'Gambar galeri berhasil dihapus.',
                            'success'
                            );
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem/admin/admin') ?>";
                        }, 1000);
                    },
                });
            }
        })
    }
}
// End of hapus admin
</script>


</body>

</html>