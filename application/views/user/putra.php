<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="col-lg-12">
            <?php foreach ($sql as $kos): ?>
                            <div class="col-md-6">
                                    <div class="thumbnail">
                                        <img src="<?php echo base_url();?>file/kos_image/<?=$kos->image_header ?>" width="500px">
                                        <div class="caption">
                                            <h3>
                                                <a title="<?=$kos->nama?>" href="<?=base_url(); ?>Main_Front_User/view_konten_kos/<?=$kos->slug ?>">
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
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
            </div>
        </div>
    </section>



