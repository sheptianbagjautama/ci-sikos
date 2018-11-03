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

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <img src="<?php echo base_url()?>assets/images/mbakos2.png" width="350px" align="center">
            <!-- <a href="javascript:void(0);">Sistem Informasi<b>KOS</b></a>
            <small>Cari kos-kosan sesuai seleramu</small> -->
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="<?php echo base_url() ?>Login/proses_login">
                   
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <?php echo $this->session->flashdata('suksesdaftar');?>
                            <?php echo $this->session->flashdata('notif');?>
                        </div>
                        <div class="col-xs-12">
                            <button class="btn btn-block bg-info waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                            <a href="<?php echo base_url();?>Main_Back_User/daftar_user">Daftar Sekarang!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="<?php echo base_url();?>Main_Front_User">Halaman Utama</a>
                        </div>
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
    <script src="<?php echo base_url()?>assets/js/pages/examples/sign-in.js"></script>
</body>

</html>