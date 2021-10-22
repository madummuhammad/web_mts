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
            // Edit artikel

            // End of edit artikel

            $(document).on("click", "#pilih_gambar", function() {
                var file = $(this).parents().find(".file");
                file.trigger("click");
            });

            $('input[type="file"]').change(function(e) {
                var fileName = e.target.files[0].name;
                $("#file").val(fileName);

                var reader = new FileReader();
                reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
    };
    // read the image file as a data URL.
    reader.readAsDataURL(this.files[0]);
});

// Hapus Artikel

var button_modal = $("[data-toggle=hapus-artikel]");
for (let i = 0; i < button_modal.length; i++) {
    button_modal[i].onclick = function () {
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
                title: "Artikel Berhasil Diedit",
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
                title: "Artikel Gagal Diedit",
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
        })
    }
}
// End of hapus ketenagaan
</script>


</body>

</html>