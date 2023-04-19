<form class="user" action="<?php echo base_url('Data_Vitamin/data_per_anak');?>" method="POST" enctype="multipart/form-data">
    <br>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Data Pemberian Vitamin</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                     <!-- Begin Page Content -->
                     <div class="container-fluid">


                         <div class="row">
                            <?php
                            foreach ($role as $item)
                            { //
                            ?>
                                                
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-95 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        <img src="<?php echo base_url('assets/upload/fotoanak/') . $item->foto_anak; ?>" alt="" width="50" height="50">
                                                        </div>
                                                        <div class="h7 mb-0 text-center"><a href="<?php echo base_url('Data_Vitamin/data_per_anak/'. $item->id_anak);?>" class="text-primary"><?= $item->nama ?></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                        <div class="container align-items-center">
                        <div class="row">
                            <div class="col-sm-12">
                                    <div class="page-title-box">
                                            <div class="card-header">
                                                <div class="row align-items-center">

                                                <div class="col">
                                                    <h5 class="mb-0">Data Pemberian Vitamin Terbaru</h5>
                                                </div>

                                                <div class="col text-right">
                                                     <a href="<?php echo base_url('Data_Vitamin/lihat_semua_data_vitamin')?>">
                                                        <button type="button" class="btn btn-info btn-sm float-right">Lihat Semua</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                                <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Umur</th>
                                                            <th>Jenis Vitamin</th>
                                                            <th>Nama Petugas</th>
                                                            <th>Tanggal Pemberian</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                            $no = 1; //no default 1
                                            foreach ($terbaru as $baris) { //
                                                ?>
                                                <tr>
                                                    
                                                    <td><?php echo $no++; ?></td>
                                                    <!-- nomor user otomatis bertambah pada saatn menambah data -->
                                                    <td><?php echo $baris->nama_anak; ?></td>
                                                    <td><?php echo $baris->umur_anak; ?></td>
                                                    <td><?php echo $baris->jenis_vitamin; ?></td>
                                                    <td><?php echo $baris->nama_petugas; ?></td>
                                                    <td><?php echo $baris->tgl_vitamin; ?></td>
                                                </tr>
                                                <?php
                                            }?>
                                        </tbody>
                                    </table>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->


            </div><!-- container -->

        </div> <!-- Page content Wrapper -->

    </div><!-- container -->

</div> <!-- Page content Wrapper -->

</div> <!-- content -->

<footer class="footer">
    © 2018 - 2020 Dashor by Themesdesign.
</footer>

</div>
<!-- End Right content here -->

</div>