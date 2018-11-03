<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <!-- HEADER PAGE
                        <div class="header">
                            <h2>
                                <a href="#">
                                    <button type="button" class="btn btn-primary waves-effect">
                                        <i class="material-icons">person_add</i>&nbsp;TAMBAH DATA</button>
                                    
                                </a>
                            </h2>
                        </div> -->
                        <!-- END HEADER PAGE-->

                        <div class="body">
                            <div class="row clearfix">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box hover-zoom-effect">
                                    <div class="icon bg-cyan">
                                        <i class="material-icons">home</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">JUMLAH KOS</div>
                                        <div class="number"><?=$jumlahkos ?></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <div class="info-box hover-zoom-effect">
                                    <div class="icon bg-cyan">
                                        <i class="material-icons">person</i>
                                    </div>
                                    <div class="content">
                                        <div class="text">JUMLAH USER</div>
                                        <div class="number"><?=$jumlahuser ?></div>
                                    </div>
                                </div>
                            </div>
                            </div>

                            <div class="alert alert-success">
                                <strong>HALLO !</strong> <?php echo strtoupper($fullname) ?>, Anda login sebagai <b>Admin</b>.
                            </div>
                           
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>



