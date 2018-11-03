<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="col-lg-12">
            <?php foreach ($sql as $kos): ?>
                            <div class="col-md-6">
                                    <div class="thumbnail">
                                        <img src="<?php echo base_url();?>file/kos_image/<?=$kos->image_header ?>" width="100%">
                                        <div class="caption">
                                            <h3>
                                                <a title="<?=$kos->nama?>" href="">
                                                    <?=$kos->nama ?></a>
                                            </h3>

                                            <div>
                                                <?php
                                                    if($kos->tipe == 'Putra') {
                                                            echo '<span class="btn bg-green">'.strtoupper($kos->tipe).'</span>';
                                                    } elseif($kos->tipe  == 'Putri'){
                                                            echo '<span class="btn bg-pink ">'.strtoupper($kos->tipe).'</span>';
                                                    } else {
                                                            echo '<span class="btn bg-purple ">'.strtoupper($kos->tipe).'</span>';
                                                    }
                                                ?> 
                                            </div>
                                            <br>
                                            <div><?=$kos->alamat ?></div>
                                                
                                            <p>
                                                <h4>Rp. <?=$this->cart->format_number($kos->harga); ?></h4>
                                            </p>
                                            <p>
                                                <a href="<?= base_url()?>Main_Back_User/edit_kos/<?=$kos->id_kos?>" class="btn btn-primary waves-effect" role="button">EDIT</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" href="<?= base_url()?>Main_Back_User/delete_kos/<?=$kos->id_kos?>" class="btn btn-danger waves-effect" role="button">DELETE</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
            </div>
           <!--  <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                    <div class="card">
                        <div class="header">
                            <h2>
                                <a href="#">
                                    <button type="button" class="btn btn-primary waves-effect">
                                        <i class="material-icons">person_add</i>&nbsp;TAMBAH DATA</button>
                                    
                                </a>
                            </h2>

                        </div>
                        <div class="body">

                            

                             <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                 
                                <thead>
                                    <tr>
                                        <th>ID KOS</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Alamat</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID KOS</th>
                                        <th>Nama</th>
                                        <th>Deskripsi</th>
                                        <th>Alamat</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                    </tr>
                                </tfoot>
                                
                                <tbody>
                                <?php foreach ($sql as $kos => $k) { ?>
                                    <tr>
                                        <td><?php echo $k->id_kos; ?></td>
                                        <td><?php echo $k->nama; ?></td>
                                        <td><?php echo $k->deskripsi; ?></td>
                                        <td><?php echo $k->date; ?></td>
                                        <td><?php echo $k->time; ?></td>
                                    </tr>
                                <?php }?>
                                </tbody>

                            </table>  
                        </div>
                    </div> 
                </div>
            </div> -->
            <!-- #END# Basic Examples -->
        </div>
    </section>



