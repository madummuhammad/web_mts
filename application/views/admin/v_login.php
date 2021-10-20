<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>lOGIN-Website MTs AT TAQWA JATINGARANG </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="<?php echo base_url('assets/admin')?>/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url('assets/admin')?>/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Website MTs AT TAQWA JATINGARANG </h4>
                                    <form>
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" class="form-control" name="username" placeholder="Masukan Username">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" placeholder="Masukan Password">
                                        </div>
<!--                                         <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Remember me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div> -->
                                        <div class="text-center">
                                            <button id="submit-login" type="button" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--**********************************
        Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="<?php echo base_url('assets/admin')?>/vendor/global/global.min.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/js/quixnav-init.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/js/custom.min.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
        <script src="<?php echo base_url('assets/admin')?>/js/plugins-init/sweetalert.init.js"></script>
        <script>
            $("#submit-login").on('click',function(){
                const username=$("form input[name=username]").val();
                const password=$("form input[name=password]").val();
                $.ajax({
                    url: "<?php echo base_url('adminsystem/auth/login') ?>",
                    type:'POST',
                    data:{
                        username:username,
                        password:password
                    },
                    dataType:'json',
                    success: function(data){
                        if (data=='Gagal') {
                         Swal.fire({
                            icon:'error',
                            title: "Gagal Login",
                            text: "Silakan Masukan username dan Password Dengan Benar",
                            type:'warning',
                            timer: 1e3, showConfirmButton: !1 
                        });
                     } else {
                        Swal({
                            title: "Berhasil Login",
                            text: "Mohon tunggu sebentar",
                            type:'success',
                            timer: 2e3, showConfirmButton: !1 
                        });
                        setTimeout(function (){
                            window.location.href="<?php echo base_url('adminsystem') ?>";
                        }, 1000);
                    }
                }
            });
            });
        </script>
    </body>

    </html>