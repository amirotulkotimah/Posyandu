
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
                            <!--<form action="<?php echo base_url('Laporan_Penimbangan_Perid_Pdf?id_anakk='.$id_anakk);?>" method="get">
                                <a><input type="submit" class="btn btn-danger btn-sm float-right ml-1"  value="Cetak Pdf " target="_blank"></a>
                                </form>-->

                                <a class="small" href="<?php echo base_url('Laporan_Penimbangan/print_laporan_perid/'.$id_anakk)?>">

                                    <button type="button" class="btn btn-secondary btn-sm float-right"><i class="fa fa-print"></i> Cetak </button>

                                </a>
                            </p>
                        </form>
                        <br>
                        <br>
                            
                                                    
                                                     
                                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>No</th>
                                                                    <th>Nama</th>
                                                                    <th>Jenis Kelamin</th>
                                                                    <th>Umur</th>
                                                                    <th>Berat Badan</th>
                                                                    <th>Tinggi Badan</th>
                                                                    <th>Tanggal Penimbangan</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                        $no = 1; //no default 1
                                                        foreach ($lihat as $baris) { //
                                                            ?>
                                                            <tr>
                                                                
                                                                <td><?php echo $no++; ?></td>
                                                                <!-- nomor user otomatis bertambah pada saatn menambah data -->
                                                                <td><?php echo $baris->nama_anak; ?></td>
                                                                <td><?php echo $baris->jenis_kelamin_anak; ?></td>
                                                                <td><?php echo $baris->umur_anak; ?></td>
                                                                <td><?php echo $baris->bb_anak; ?></td>
                                                                <td><?php echo $baris->tb_anak; ?></td>
                                                                <td><?php echo $baris->tgl_timbang_anak; ?></td>
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