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

    <!-- JQuery DataTable Css -->
    <link href="<?php echo base_url()?>assets/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="<?php echo base_url()?>assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url()?>assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-cyan">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="<?php echo base_url()?>Login"><img src="<?php echo base_url()?>assets/images/mbakos.png" width="160px" align="center"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                <!-- kosong -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <?php if($jk =='Pria'){ ?>
                         <img src="<?php echo base_url()?>assets/images/avatar male.png" width="48" height="48" alt="User" />
                   <?php } else { ?>
                        <img src="<?php echo base_url()?>assets/images/avatar female.png" width="48" height="48" alt="User" />
                    <?php } ?>
                   
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $fullname ?></div>
                    <div class="email"><?php echo $email ?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo base_url()?>Login/logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->

            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU ADMIN</li>
                    <li class="active">
                        <a href="<?php echo base_url()?>Main_Back_Admin/dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Admin/view_kos">
                            <i class="material-icons">room</i>
                            <span>Data Kos</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Admin/view_admin">
                            <i class="material-icons">face</i>
                            <span>Data User</span>
                        </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('Main_Back_Admin/data_admin/'.$this->session->userdata('id_user'))?>">
                            <i class="material-icons">account_box</i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="header">MENU KOS</li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Admin/semua_kos">
                            <i class="material-icons">home</i>
                            <span>Semua Kos</span>
                        </a>
                    </li>


                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Admin/kos_putra">
                            <i class="material-icons">home</i>
                            <span>Kos Putra</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Admin/kos_putri">
                            <i class="material-icons">home</i>
                            <span>Kos Putri</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Admin/kos_campur">
                            <i class="material-icons">home</i>
                            <span>Kos Campur</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->


            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2017 <a href="<?php echo base_url()?>Login">Mbakos</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        
    </section>



    <section class="content">
        <div class="container-fluid">
            <!-- DATA KOS -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Kost
                            </h2>
                        </div>
                        <div class="body">

                             <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                 
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Gambar</th>
                                        <th>Tipe</th>
                                        <th>Harga</th>
                                        <!-- <th>Alamat</th> -->
                                        <!-- <th>Deskripsi</th> -->
                                        <th>Datetime</th>
                                        <th>Oleh</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>Gambar</th>
                                        <th>Tipe</th>
                                        <th>Harga</th>
                                        <!-- <th>Alamat</th> -->
                                        <!--<th>Deskripsi</th>-->
                                        <th>Datetime</th>
                                        <th>Oleh</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </tfoot>
                                
                                <tbody>
                                <?php foreach ($kos as $k) { ?>
                                    <tr>
                                        <td><?php echo $k->id_kos; ?></td>
                                        <td><a href="<?=base_url(); ?>Main_Back_Admin/view_konten_kos/<?=$k->slug ?>"><?php echo $k->nama; ?></a></td>
                                        <td><img width="100px" src="<?php echo base_url()?>file/kos_image/<?=$k->image_header; ?>"></td>
                                        <td><?php echo $k->tipe; ?></td>
                                        <td><?php echo $k->harga; ?></td>
                                        <!-- <td><?php echo character_limiter($k->alamat); ?></td> -->
                                        <!-- <td><?php echo character_limiter($k->deskripsi,50   ); ?></td> -->
                                        <td><?php echo $k->date; ?></td>
                                        <td><?php echo $k->email; ?></td>
                                        
                                        <td><?php 
                                        if($k->status == '1'){
                                            echo 'Publish';
                                        }elseif($k->status == '0'){
                                            echo 'Unpublish';
                                        } ?></td>
                                        <td>
                                        <a href="<?php echo base_url('Main_Back_Admin/edit_kos_admin/'.$k->id_kos)?>">
                                            <button type="button" class="btn btn-info waves-effect">Edit</button>
                                        </a>

                                        <a onclick="return confirm('Apa anda yakin akan menghapus data ini ?')" href="<?php echo base_url('Main_Back_Admin/hapus_kos_admin/'.$k->id_kos)?>">
                                            <button type="button" class="btn btn-danger waves-effect">Hapus</button>
                                        </a>
                                        
                                        </td>
                                    </tr>
                                <?php }?>
                                </tbody>

                            </table>
                            <!-- END DATA KOS-->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>assets/plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url()?>assets/js/admin.js"></script>
    <script src="<?php echo base_url()?>assets/js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url()?>assets/js/demo.js"></script>
</body>

</html>