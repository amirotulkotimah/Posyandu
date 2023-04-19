<form class="user" action="<?php echo base_url('Absensi/lihat_perbulan_data');?>" method="post" enctype="multipart/form-data">
    <br>
<div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Data Absensi Bulan Ini</h4>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                       
                    </form>
                        <div class="container align-items-center">


                         <!--<div class="row">
                            <?php
                            foreach ($role as $item)
                            { //
                            ?>
                                                
                               
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-95 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">

                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        
                                                        <img src="<?php echo base_url('assets/upload/fotopengguna/') . $item->foto; ?>" alt="" width="50" height="50">

                                                        </div>
                                                        <div class="h7 mb-0 text-center"><a href="<?php echo base_url('Absensi/per_orang_tua/'. $item->id_ortu);?>" class="text-primary"><?= $item->nama_ortu ?></a></div>

                                                       <?php } ?>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                    

                        <div class="container align-items-center">
                        <div class="row">                      
                            <div class="col-sm-12">
                                <p> 
                                <a><input type="submit" class="btn btn-secondary btn-sm float-right ml-1" name="submit" value="Lihat Absensi "></a> 

                                <a class="small" href="<?php echo base_url('Absensi/add_absen') ?>">

                                    <button type="button" class="btn btn-info btn-sm float-right">+ Tambah Absen</button>

                                </a>
                        </p>
                                    <div class="page-title-box">
                                            <div class="card-header">
                                                <div class="row align-items-center">

                                                <div class="col">
                                                   
                                                </div>

                                                <div class="col text-center">
                                                     
                                                </div>
                                            </div>
                                        </div>


                                                <table id="table" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Keterangan</th>
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
                                                    <td><?php echo $baris->nm_ortu; ?></td>
                                                    <td>
                                                    <?php if ($baris->status_absen == 'hadir') : ?>
                                                        <span class="text-success">hadir</span>
                                                    <?php elseif ($baris->status_absen == 'tidak hadir') : ?>
                                                        <a href="<?= base_url('Absensi/forward/' . $baris->id_absen) ?>"><button type="button" class="btn-danger">belum absen</button></a>
                                                    <?php endif ?>
                                                </td>
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

            