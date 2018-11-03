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
                            <h2>Data Profile</h2><br>

                            <?php foreach ($sql as $kos): ?>
                            <div class="row clearfix">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <?php if($jk =='Pria'){ ?>
                                             <img src="<?php echo base_url()?>assets/images/avatar male.png" width="250px"  alt="User" />
                                       <?php } else { ?>
                                            <img src="<?php echo base_url()?>assets/images/avatar female.png" width="250px" alt="User" />
                                        <?php } ?>
                                        
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                <form class="form-horizontal">
                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-2 col-sm-4col-xs-5 form-control-label">
                                            <label for="email_address_2">Nama Lengkap</label>
                                        </div>
                                        <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                            <input type="text" value="<?=$kos->fullname ?>" class="form-control" placeholder="Disabled" disabled />
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-2 col-sm-4col-xs-5 form-control-label">
                                            <label for="email_address_2">Jenis Kelamin</label>
                                        </div>
                                        <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                            <input type="text" value="<?=$kos->jk ?>" class="form-control" placeholder="Disabled" disabled />
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-2 col-sm-4col-xs-5 form-control-label">
                                            <label for="email_address_2">Email</label>
                                        </div>
                                        <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                            <input type="text" value="<?=$kos->email ?>" class="form-control" placeholder="Disabled" disabled />
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-2 col-sm-4col-xs-5 form-control-label">
                                            <label for="email_address_2">No.Hp</label>
                                        </div>
                                        <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                            <input type="text" value="<?=$kos->no_hp ?>" class="form-control" placeholder="Disabled" disabled />
                                        </div>
                                    </div>

                                     <div class="row clearfix">
                                        <div class="col-lg-3 col-md-2 col-sm-4col-xs-5 form-control-label">
                                            <label for="email_address_2">Alamat</label>
                                        </div>
                                        <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">
                                            <input type="text" value="<?=$kos->alamat ?>" class="form-control" placeholder="Disabled" disabled />
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-3 col-md-2 col-sm-4col-xs-5 form-control-label"></div>
                                        <div class="col-lg-9 col-md-10 col-sm-8 col-xs-7">


                                        <a href="<?= base_url()?>Main_Back_Admin/edit_admin/<?=$kos->id_user?>">
                                            <button type="button" class="btn btn-danger waves-effect">
                                            </i>&nbsp;UBAH PROFILE</button>
                                        </a> 
                                        </div>
                                    </div>


                                </form>
                            </div>
                        </div> 
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>



