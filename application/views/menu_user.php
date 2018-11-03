            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo base_url()?>Main_Back_User/dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_User/tambah_kos">
                            <i class="material-icons">add</i>
                            <span>Buat Kos</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Main_Back_User/data_kos/'.$this->session->userdata('id_user'))?>">
                            <i class="material-icons">home</i>
                            <span>Kos Anda</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('Main_Back_User/data_user/'.$this->session->userdata('id_user'))?>">
                            <i class="material-icons">face</i>
                            <span>Data Profile</span>
                        </a>
                    </li>
                    <li class="header">MENU KOS</li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_User/semua_kos">
                            <i class="material-icons">home</i>
                            <span>Semua Kos</span>
                        </a>
                    </li>


                    <li>
                        <a href="<?php echo base_url()?>Main_Back_User/kos_putra">
                            <i class="material-icons">home</i>
                            <span>Kos Putra</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_User/kos_putri">
                            <i class="material-icons">home</i>
                            <span>Kos Putri</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_User/kos_campur">
                            <i class="material-icons">home</i>
                            <span>Kos Campur</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->