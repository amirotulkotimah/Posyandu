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
                                <div class="col-8">
                                            </a>
                                            <br></a>
                                        </div>
                                    </div>
                                    <div class="container align-items-center">
                                                            <form action="<?php echo base_url('Data_Vitamin/filter');?>" method="get">
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
                                                                            <button type="submit"
                                                                            class="btn btn-primary bt-sm">Cari</button>
                                                                            <a href="<?php echo base_url('Data_Vitamin/lihat_semua_data_vitamin')?>"  class="btn btn-outline-primary ml-2">Reset</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                            
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="page-title-box">
                                                        
                                                     
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