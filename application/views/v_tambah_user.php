<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h3>Form Tambah User</h3>
                        </div>
                        <div class="body"> 
                            <!-- Horizontal Layout -->
                                            <form  method="POST" id="form_daftar_user" class="form-horizontal"  action="<?php echo site_url('Main_Back_Admin/proses_daftar_user')?>">
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="nama">Username</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
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
                                                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required >
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
                                                                <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Nama Lengkap" required>
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
                                                                <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
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
                                                                <input type="text" name="no_hp" id="no_hp" class="form-control" placeholder="No HP" required>
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
                                                                <textarea rows="4" name="alamat" class="form-control no-resize" placeholder="Deskripsikan alamat anda dengan jelas" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END ALAMAT -->

                                                 <!-- ID ROLE -->
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="jenis">Role</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                                <select class="form-control show-tick" name="id_role">
                                                                    <option value="1">Admin</option>
                                                                    <option value="2">User</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END ID ROLE -->
                                                
                                                


                                                
                                                <div class="row clearfix">
                                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Submit">
                                                    </div>
                                                </div>
                                            </form>


                                           
                            <!-- #END# Horizontal Layout -->

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
        </div>
    </section>



