<section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="col-lg-12">
                            <div class="col-md-12">
                                    <div class="thumbnail">
                                        <img src="<?php echo base_url();?>file/kos_image/<?=$image_header ?>" width="100%">
                                        <div class="caption">
                                            <h3>
                                                <a title="<?=$nama?>" href="">
                                                    <?=$nama ?></a>
                                            </h3>

                                            <div>
                                                <?php
                                                     if($tipe == 'Putra') {
                                                            echo '<span class="btn bg-green">KATEGORI '.strtoupper($tipe).'</span>';
                                                    } elseif($tipe  == 'Putri'){
                                                            echo '<span class="btn bg-pink ">KATEGORI '.strtoupper($tipe).'</span>';
                                                    } else {
                                                            echo '<span class="btn bg-purple ">KATEGORI '.strtoupper($tipe).'</span>';
                                                    } 
                                                ?> 
                                            </div>

                                            <p>
                                                <h4>HARGA : Rp. <?=$this->cart->format_number($harga); ?></h4>
                                            </p>

                                            <br>
                                            <?php
                                                 $tanggal        = $date;
                                                 $namahari       = date('D',strtotime($tanggal));
                                                 if ($namahari == "Sunday") $namahari = "Minggu";
                                                 else if ($namahari == "Mon") $namahari = "Senin";
                                                 else if ($namahari == "Tue") $namahari = "Selasa";
                                                 else if ($namahari == "Wed") $namahari = "Rabu";
                                                 else if ($namahari == "Thu") $namahari = "Kamis";
                                                 else if ($namahari == "Fri") $namahari = "Jumat";
                                                 else if ($namahari == "Sat") $namahari = "Sabtu";
                                                ?>
                                            <div><b>PUBLISH :</b><br><?=$namahari ?>, <?=$tanggal ?> - <?=$time ?> WIB
                                            </div><br>
                                            <div><b>ALAMAT</b> :<br><?=$alamat ?></div><br>
                                            <div><b>KOTA</b> :<br><?=$kota ?></div><br>
                                            <div><b>NO HP</b> :<br><?=$no_hp ?></div><br>
                                            <div><b>DESKRIPSI :</b><br><?= $deskripsi ?></div><br>
                                             <div><b>Oleh</b> :<br><?=$fullname ?></div><br>
                                                
                                            
                                        </div>
                                    </div>
                                </div>
            </div>
        </div>
    </section>



