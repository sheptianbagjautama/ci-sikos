<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h3>Ubah Profile</h3>
                        </div>
                        <div class="body"> 
                            <!-- Horizontal Layout -->
                            <?php foreach($user as $u){ ?>
                                            <form  method="POST" id="form_edit_user" class="form-horizontal"  action="<?php echo site_url('Main_Back_Admin/proses_update_admin')?>">
                                               <input type="hidden" name="id_user" value="<?php echo $u->id_user ?>">
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="nama">Username</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="username" id="username" class="form-control" value="<?php echo $u->username ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- PASSWORD -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="password">Password</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="password" name="password" id="password" class="form-control" value="<?php echo $u->password ?>" required >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <!-- END PASSWORD -->

                                                 <!-- FULLNAME -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="password">Nama Lengkap</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="fullname" id="fullname" class="form-control" value="<?php echo $u->fullname ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <!-- END FULLNAME -->

                                                 <!-- JENIS KELAMIN -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="jenis">Jenis Kelamin</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                                <select class="form-control show-tick" name="jk" required>
                                                                    <option value="Pria">Pria</option>
                                                                    <option value="Wanita">Wanita</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END JENIS KELAMIN -->

                                                <!-- EMAIL -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="Email">Email</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="email" id="email" class="form-control" value="<?php echo $u->email ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <!-- END EMAIL -->

                                                 <!-- NOHP -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="Email">No Hp</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="no_hp" id="no_hp" class="form-control" value="<?php echo $u->no_hp ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <!-- END NOHP -->

                                                 <!-- ALAMAT -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="alamat">Alamat</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $u->alamat ?>" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END ALAMAT -->
                                                <input type="hidden" name="id_role" id="id_role" class="form-control" value="<?php echo $u->id_role ?>" required>
                                                
                                                


                                                
                                                <div class="row clearfix">
                                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Submit">
                                                    </div>

                                                    <br>
                                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                        <a  href="<?php echo base_url('Main_Back_Admin/data_admin/'.$this->session->userdata('id_user'))?>">
                                                            <button type="button" class="btn btn-danger waves-effect">Cancel</button>
                                                        </a>
                                                    <div>
                                                </div>
                                            </form>
                            <?php } ?>

                                           
                            <!-- #END# Horizontal Layout -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>



