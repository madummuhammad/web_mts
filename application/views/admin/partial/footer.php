        <!--**********************************
            Footer start
            ***********************************-->
            <div class="footer">
                <div class="copyright">
                    <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Quixkit</a> 2019</p>
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

            $("#submit-kirim-artikel").on('click',function(){
                alert(<?php echo date('Y') ?>)
            });
        </script>


    </body>

    </html>