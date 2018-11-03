            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MENU ADMIN</li>
                    <li class="active">
                        <a href="<?php echo base_url()?>Main_Back_Admin/dashboard">
                            <i class="material-icons">dashboard</i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Admin/view_kos">
                            <i class="material-icons">room</i>
                            <span>Data Kos</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Admin/view_admin">
                            <i class="material-icons">face</i>
                            <span>Data User</span>
                        </a>
                    </li>
                     <li>
                        <a href="<?php echo base_url('Main_Back_Admin/data_admin/'.$this->session->userdata('id_user'))?>">
                            <i class="material-icons">account_box</i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="header">MENU KOS</li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Admin/semua_kos">
                            <i class="material-icons">home</i>
                            <span>Semua Kos</span>
                        </a>
                    </li>


                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Admin/kos_putra">
                            <i class="material-icons">home</i>
                            <span>Kos Putra</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Admin/kos_putri">
                            <i class="material-icons">home</i>
                            <span>Kos Putri</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url()?>Main_Back_Admin/kos_campur">
                            <i class="material-icons">home</i>
                            <span>Kos Campur</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->