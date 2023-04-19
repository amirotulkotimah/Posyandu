<?php
        $getUser = $this->session->userdata('session_user');
        $getGrup = $this->session->userdata('session_grup');
        ?>
        <div class="left side-menu">
            <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left">
                <i class="ion-close"></i>
            </button>

            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <!--<a href="index.html" class="logo"><i class="fa fa-paw"></i> Aplomb</a>-->
                    <div>

                        <a href="#" class="logo"><img src="<?php echo base_url(); ?>assets/images/sipos.png" height="28" weight="20" alt="logo"></a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft" id="sidebar-main">

                    <div id="sidebar-menu">
                        <ul>
                            

                            <li>
                                <a href="<?php echo site_url('Dashboard
                                 '); ?>" class="waves-effect waves-light"><i class="mdi mdi-view-dashboard"></i><span> Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect waves-light"><i class="mdi mdi-account-box"></i><span> Data Master </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="<?php echo site_url('Data_Ortu'); ?>">Data Orang Tua</a></li>
                                    <li><a href="<?php echo site_url('Data_Anak'); ?>">Data Anak</a></li>
                                    <li><a href="<?php echo site_url('Data_Petugas'); ?>">Data Petugas</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="<?php echo site_url('Data_Penimbangan'); ?>" class="waves-effect waves-light"><i class="mdi mdi-scale"></i><span> Data Penimbangan </span></a>
                            </li>

                                <li class="has_sub">
                                    <a href="#" class="waves-effect waves-light"><i class="mdi mdi-pill"></i><span> Data Vitamin </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="<?= site_url('Jenis_Vitamin') ?>">Jenis Vitamin</a></li>
                                        <li><a href="<?= site_url('Data_Vitamin') ?>">Data Pemberian Vitamin</a></li>
                                    </ul>
                                </li>
                                <!--<li class="has_sub">
                                    <a href="#" class="waves-effect waves-light"><i class="mdi mdi-library-books"></i><span> Data Imunisasi </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="<?= site_url('Jenis_Imunisasi') ?>">Jenis Imunisasi</a></li>
                                        <li><a href="<?= site_url('Data_Imunisasi') ?>">Data Pemberian Imunisasi</a></li>
                                    </ul>
                                </li>-->
                                <li>
                                <a href="<?php echo site_url('Data_Menu_PMT'); ?>" class="waves-effect waves-light"><i class="mdi mdi-food-variant"></i><span> Menu PMT </span></a>
                            <!--</li>

                                <li>
                                <a href="<?php echo site_url('SPK'); ?>" class="waves-effect waves-light"><i class="mdi mdi-book"></i><span> Data Training </span></a>
                            </li>-->

                                <li class="has_sub">
                                    <a href="#" class="waves-effect waves-light"><i class="mdi mdi-file-document-box"></i><span> SPK Status Gizi </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="list-unstyled">
                                        <li><a href="<?= site_url('SPK') ?>">Data Training</a></li>
                                        <li><a href="<?= site_url('SPK/data_peranak/') ?>">Data Uji</a></li>
                                    </ul>
                                </li>

                                <li>
                                <a href="<?php echo site_url('Absensi'); ?>" class="waves-effect waves-light"><i class="mdi mdi-book"></i><span> Absensi </span></a>
                            </li>

                            <li class="has_sub">
                                    <a href="#" class="waves-effect waves-light"><i class="mdi mdi-file"></i><span> Laporan </span><span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                    <ul class="list-unstyled">
                                         <li><a href="<?= site_url('Laporan_Anak') ?>">Laporan Anak</a></li>
                                        <li><a href="<?= site_url('Laporan_Penimbangan') ?>">Laporan Penimbangan</a></li>
                                        <li><a href="<?= site_url('Laporan_Vitamin') ?>">Laporan Vitamin</a></li>
                                        <!--<li><a href="<?= site_url('Laporan_Imunisasi') ?>">Laporan Imunisasi</a></li>-->
                                        <!--<li><a href="<?= site_url('Laporan_Status_Gizi') ?>">Laporan Status Gizi</a></li>-->
                                        <li><a href="<?= site_url('Laporan_Menu_PMT') ?>">Laporan Menu PMT</a></li>
                                         <li><a href="<?= site_url('Laporan_Absensi') ?>">Laporan Absensi</a></li>
                                    </ul>
                                </li>
                            

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
        </div>
        <!-- Left Sidebar End -->