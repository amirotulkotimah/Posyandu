<form class="user" action="<?php echo base_url('Laporan_Penimbangan_pdf');?>" method="post" enctype="multipart/form-data">
<br>
<div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Laporan Penimbangan</h4>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <p>
                                <!--<a><input type="submit" class="btn btn-danger btn-sm float-right ml-1" name="submit" value="Cetak Pdf "></a>--> 
                                <a class="small" href="<?php echo base_url('Laporan_Absensi/print_laporan')?>">

                                    <button type="button" class="btn btn-secondary btn-sm float-right"><i class="fa fa-print"></i> Cetak </button>

                                </a>
                            </p>
                        </form>
                            
                     <!-- Begin Page Content -->
                    
        
        
                                                        
                                                        
                                                        <div class="container align-items-center">
                                                            <form action="<?php echo base_url('Laporan_Absensi/filter');?>" method="get">
                                                                <div class="row">
                                                                    <div class="form-group">
                                                                        <label for="inputMulaiTanggal" class="font-weight-bold">Mulai
                                                                        Tanggal :</label>
                                                                        <input type="date" id="inputMulaiTanggal" name="mulai_tanggal"
                                                                        class="form-control" required>
                                                                    </div>
                                                                    &nbsp&nbsp&nbsp&nbsp
                                                                    <div class="form-group">
                                                                        <label for="inputSampaiTanggal" class="font-weight-bold">Sampai
                                                                        Tanggal :</label>
                                                                        <input type="date" id="inputSampaiTanggal" name="sampai_tanggal"
                                                                        class="form-control" required>
                                                                    </div>
                                                                    <div class="col-sm-1 form-group">
                                                                        <label for="inputSampaiTanggal" class="font-weight-bold">
                                                                            <font color="white">Disetujui</font>
                                                                        </label>
                                                                        <div class="btn-group">
                                                                            <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-print"></i>
                                                                            </button>
                                                                        
                                                                        
                                                                            <!--<button class="btn btn-danger" type="submit" method="get"><i class="fa fa-file-pdf"></i></button>-->
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            

                                                                                                   
                                                     
                                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>Tanggal Absensi</th>
                                                                    <th>Keterangan</th>
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
                                                                <td><?php echo $baris->nm_ortu; ?></td>
                                                                <td><?php echo $baris->tanggal_absen; ?></td>
                                                                <td><?php echo $baris->status_absen; ?></td>
                                                                </td>
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