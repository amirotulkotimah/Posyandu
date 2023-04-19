<br>
<div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Data PMT</h4>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <p>

                        
                                <a class="small" href="<?php echo base_url('Data_Menu_PMT/tambah_data') ?>">

                                    <button type="button" class="btn btn-info btn-sm float-right">+ Tambah Data</button>

                                </a>
                            <!--<a href="<?php echo base_url('Data_Penimbangan/tambah_data?id_anak=' . $id_anakk) ?>">

                                <button type="button" class="btn btn-info btn-sm float-right">+ Tambah Data</button>

                            </a>-->
                        </p>
                      
                    </form>
                        <div class="container align-items-center">
                            <form action="<?php echo base_url('Data_Menu_PMT/filter'); ?>" method="get">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="inputMulaiTanggal" class="font-weight-bold">Mulai
                                            Tanggal :</label>
                                        <input type="date" id="inputMulaiTanggal" name="mulai_tanggal" class="form-control" required>
                                    </div>
                                    &nbsp&nbsp&nbsp&nbsp
                                    <div class="form-group">
                                        <label for="inputSampaiTanggal" class="font-weight-bold">Sampai
                                            Tanggal :</label>
                                        <input type="date" id="inputSampaiTanggal" name="sampai_tanggal" class="form-control" required>
                                    </div>
                                    <input type="hidden" name="" value="">
                                    <div class="col-sm-1 form-group">
                                        <label for="inputSampaiTanggal" class="font-weight-bold">
                                            <font color="white">Disetujui</font>
                                        </label>
                                        <div class="btn-group">
                                            <button type="submit" class="btn btn-primary bt-sm">Cari</button>
                                            <a href="<?php echo base_url('Data_Menu_PMT') ?>" class="btn btn-outline-primary ml-2">Reset</a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <div class="row">
                                <div class="col-sm-12">
                                </div>
                            </div>
                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal Pemberian</th>
                                            <th>Nama Menu</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
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
                                            <td>
                                                <?php
                                                echo '<a href="'.base_url('Data_Menu_PMT/edit_data/'.$baris->id_menu_pmt).'"><button type="button" class="btn-warning">Edit</button></a>';
                                                
                                                echo " ";
                                                echo '<button type="button" class="btn-danger" data-toggle="modal" data-target="#deleteModal" data-id-menu-pmt="' . $baris->id_menu_pmt . '">Hapus</button>';
                                                
                                                ?></td>
                                            </tr>
                                            <?php
                                                }?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Menu PMT</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Yakin ingin menghapus? Tindakan ini tidak dapat dibatalkan.</div>
                            <div class="modal-footer">

                                <?php
                            echo '<a class="btn-hapus"><button type="button" class="btn btn-danger">Hapus</button></a>';
                            echo " ";
                            echo '<a><button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button></a>';
                            ?>
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
    <!-- End Right content here -->

    </div>
    <!-- END wrapper -->
    <script src="<?= base_url('assets/js/delete-confirm-menu-pmt.js') ?>"></script>