<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="col-lg-12">
            <?php foreach ($hasilcari as $k) { ?>
                            <div class="col-md-6">
                                    <div class="thumbnail">
                                        <img src="<?php echo base_url();?>file/kos_image/<?=$k->image_header ?>" width="500px">
                                        <div class="caption">
                                            <h3>
                                                <a title="<?=$k->nama?>" href="<?=base_url(); ?>Main_Front_User/view_konten_kos/<?=$k->slug ?>">
                                                    <?=$k->nama ?></a>
                                            </h3>

                                            <div>
                                                <?php
                                                    if($k->tipe == 'Putra') {
                                                            echo '<span class="btn bg-green">'.strtoupper($k->tipe).'</span>';
                                                    } elseif($k->tipe  == 'Putri'){
                                                            echo '<span class="btn bg-pink ">'.strtoupper($k->tipe).'</span>';
                                                    } else {
                                                            echo '<span class="btn bg-purple ">'.strtoupper($k->tipe).'</span>';
                                                    }
                                                ?> 
                                            </div>
                                            <br>
                                            <div><?=$k->alamat ?></div>
                                                
                                            <p>
                                                <h4>Rp. <?=$this->cart->format_number($k->harga); ?></h4>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
            </div>
        </div>
    </section>



