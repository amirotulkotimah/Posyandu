<form class="user" action="<?php echo base_url('Laporan_Menu_PMT_pdf');?>" method="post" enctype="multipart/form-data">
<br>
<div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Laporan Menu PMT</h4>
                    </div>
                </div>
            </div>
        <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">

                            <p>
                                <!--<a><input type="submit" class="btn btn-danger btn-sm float-right ml-1" name="submit" value="Cetak Pdf "></a>-->
                                <a href="<?php echo base_url('Laporan_Menu_PMT/print_laporan')?>">

                                    <button type="button" class="btn btn-secondary btn-sm float-right"><i class="fa fa-print"></i> Cetak </button>

                                </a>
                            </p>
                        </form>
                                        
        
                                                        
                                                        
                                                        <div class="container align-items-center">
                                                            <form action="<?php echo base_url('Laporan_Menu_PMT/filter');?>" method="get">
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
                                                                            <button type="submit" class="btn btn-secondary btn-sm float-right"><i class="fa fa-print"></i></button>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama Menu</th>
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
                                            <td><?php echo $baris->tanggal; ?></td>
                                            <td><?php echo $baris->nama_menu; ?></td>
                                            <td><?php echo $baris->ket; ?></td>
                                            </tr>
                                            <?php
                                                }?>
                                    </tbody>
                                </table>
                            </div>

                            
                </div>
            </div>
        </div>
    </div>