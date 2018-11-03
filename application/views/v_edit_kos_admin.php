<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Kos
                            </h2>

                        </div>
                        <div class="body"> 
                            <!-- Horizontal Layout -->
                            <?php foreach($kos as $k){ ?>
                                            <form  method="POST" class="form-horizontal" role="form" enctype="multipart/form-data" action="<?php echo site_url('Main_Back_Admin/proses_update_kos')?>">
                                                <input type="hidden"  name="id_kos" value="<?php echo $k->id_kos ?>" class="form-control" >
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="nama">Nama</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="nama" id="nama" value="<?php echo $k->nama ?>" class="form-control" placeholder="Masukan Nama Kosan" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="jenis">Jenis Kos</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                                <select class="form-control show-tick" name="tipe" disabled>
                                                                    <option value="Putra">Putra</option>
                                                                    <option value="Putri">Putri</option>
                                                                    <option value="Campur">Campur</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="image">Upload Gambar</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                                <?php 
                                                                    if(!empty($k->image_header)) { ?>
                                                                    <img  src="<?php echo base_url()."file/kos_image/".$k->image_header; ?>" title="Preview Logo">

                                                                    <?php }
                                                                  ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="deskripsi">Deskripsi</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                 <!-- <input type="text" name="deskripsi" value="<?php echo $k->deskripsi ?>" id="deskripsi" class="form-control" placeholder="Masukan Deskripsi"> -->
                                                                <textarea rows="4" name="deskripsi" value="<?php echo $k->deskripsi ?>" class="form-control no-resize" placeholder="Deskripsikan kosanmu dengan jelas..." disabled><?php echo $k->deskripsi ?></textarea> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="alamat">Alamat</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <!--  <input type="text" name="alamat" value="<?php echo $k->alamat ?>" id="alamat" class="form-control" placeholder="Masukan Alamat"> -->
                                                                 <textarea rows="4" name="alamat"  class="form-control no-resize" placeholder="Deskripsikan alamat kosanmu dengan jelas..." disabled><?php echo $k->alamat ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="kota">Kota</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" name="kota" value="<?php echo $k->kota ?>" id="kota" class="form-control" placeholder="Masukan Kota" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="harga">Harga</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                            <div class="form-line">
                                                                <input type="text" id="harga" value="<?php echo $k->harga ?>" class="form-control" name="harga" placeholder="Masukan Harga" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="row clearfix">
                                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                                        <label for="jenis">Status</label>
                                                    </div>
                                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                                        <div class="form-group">
                                                                <select class="form-control show-tick" name="status">
                                                                    <option value="1">Publish</option>
                                                                    <option value="0">Draft</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row clearfix">
                                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Submit">
                                                    </div>

                                                    <br>
                                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                                        <a  href="<?php echo base_url('Main_Back_Admin/view_kos')?>">
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



