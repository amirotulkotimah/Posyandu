<form class="user" action="<?php echo base_url('Data_Anak/data-anak');?>" method="POST" enctype="multipart/form-data">
<br>
        
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Data Anak</h4>
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
                                <div class="col-8">
                                            </a>
                                            <br></a>
                                        </div>
                                    </div>
                                                        
                                                     
                                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>NIK</th>
                                                                    <th>Nama</th>
                                                                    <th>Anak ke</th>
                                                                    <th>Jenis Kelamin</th>
                                                                    <th>Foto</th>
                                                                    </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                        $no = 1; //no default 1
                                                        foreach ($user as $baris) { //
                                                            ?>
                                                            <tr>
                                                                
                                                                <td><?php echo $no++; ?></td>
                                                                <!-- nomor user otomatis bertambah pada saatn menambah data -->
                                                                <td><?php echo $baris->nik; ?></td>
                                                                <td><?php echo $baris->nama; ?></td>
                                                                <td><?php echo $baris->anak_ke; ?></td>
                                                                <td><?php echo $baris->jenis_kelamin; ?></td>
                                                                <td><img src="<?php echo base_url('assets/upload/fotoanak/') . $baris->foto_anak; ?>" alt="" width="50" height="50" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'"></td>
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
<!-- END wrapper -->