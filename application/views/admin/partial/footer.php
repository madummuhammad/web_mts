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
</script>


</body>

</html>