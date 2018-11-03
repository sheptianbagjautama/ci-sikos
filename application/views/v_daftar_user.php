<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>MbaKOS | Cari kost-kostsan di bandung</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url()?>assets/favicon_mbakos.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url()?>assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url()?>assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url()?>assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">
</head>

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
           <img src="<?php echo base_url()?>assets/images/mbakos2.png" width="350px" align="center">
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_up" method="POST" action="<?php echo base_url()?>Main_Back_User/proses_daftar_user">
                    <div class="msg">Form Daftar</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <!-- Fullname -->
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="fullname" placeholder="Fullname" required autofocus>
                        </div>
                    </div>
                    <!-- END Fullname -->

                    <!-- Jenis Kelamin  -->
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                         <input name="jk" type="radio" class="with-gap" id="radio_3" value="Pria" />
                                <label for="radio_3">Pria</label>
                                <input name="jk" type="radio" id="radio_4" class="with-gap" value="Wanita"/>
                                <label for="radio_4">Wanita</label>
                        </div>
                    </div>
                    <!-- END Jenis Kelamin -->

                    

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                    </div>

                    <!-- Nohp -->
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">phone</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="no_hp" placeholder="No HP" required autofocus>
                        </div>
                    </div>
                    <!-- END Nohp -->

                    <!-- Alamat -->
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">location_on</i>
                        </span>
                        <div class="form-line">
                             <textarea rows="4" class="form-control no-resize" placeholder="Alamat" name="alamat"></textarea>
                        </div>
                    </div>
                    <!-- END Alamat -->

                    <input type="hidden" class="form-control" name="id_role" value="2" required autofocus>



                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">Saya setuju daftar di Mbakos</a>.</label>
                    </div>

                    <button class="btn btn-block btn-lg bg-info waves-effect" type="submit">SIGN UP</button>

                    <div class="m-t-25 m-b--5 align-center">
                        <a href="<?php echo base_url()?>Login">Sudah mempunyai akun?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="<?php echo base_url()?>Main_Front_User">Halaman Utama</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url()?>assets/js/admin.js"></script>
    <script src="<?php echo base_url()?>assets/js/pages/examples/sign-up.js"></script>
</body>

</html>