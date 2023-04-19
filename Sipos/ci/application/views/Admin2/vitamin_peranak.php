<form class="user" action="<?php echo base_url('Laporan_Vitamin_pdf');?>" method="post" enctype="multipart/form-data">
<br>
<div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Laporan Pemberian Vitamin</h4>
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <p>
                            <!--<a><input type="submit" class="btn btn-danger btn-sm float-right ml-1" name="submit" value="Cetak Pdf "></a>-->
                                <a href="<?php echo base_url('Laporan_Vitamin/print_laporan_perid/'.$id_anakk)?>">

                                    <button type="button" class="btn btn-secondary btn-sm float-right"><i class="fa fa-print"></i> Cetak </button>

                                </a>
                            </p>
                        </form>
                        <br>
                        <br>
                                    <div class="container align-items-center">
                                                     
                                                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
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
                                                        foreach ($user as $baris) { //
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