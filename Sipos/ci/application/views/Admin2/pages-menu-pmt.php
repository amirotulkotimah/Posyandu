
    <br>

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Data PMT (PEMBERIAN MAKANAN TAMBAHAN)</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            
                            <p>
                                <a href="<?php echo base_url('Data_Menu_PMT/lihat_data')?>">

                                    <button type="button" class="btn btn-info btn-sm float-right">Lihat Menu PMT</button>

                                </a>
                            </p>
                            <br>
                            <br>

                                <div class="row">
                                    <div class="col-sm-12">
                                    </div>
                                </div>

                                <table id="datatable" class="table table-bordered dt-responsive nowrap text-center" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Balita</th>
                                            <th>Status PMT</th>
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
                                            <td><?php echo $baris->nama; ?></td>
                                                <td>
                                                <?php if ($baris->status == 'sudah diberikan') : ?>
                                                    <span class="text-success">sudah  diberikan</span>
                                                <?php elseif ($baris->status == 'belum diberikan') : ?>
                                                    <a href="<?= base_url('Data_Menu_PMT/forward/' . $baris->id_anak) ?>"><button type="button" class="btn-danger">belum diberikan</button></a>
                                                <?php endif ?>
                                            </td>

                                                <td>
                                                <?php if ($baris->status == 'belum diberikan') : ?>
                                                    <span class="fas fa-power-off "></span>
                                                <?php elseif ($baris->status == 'sudah diberikan') : ?>
                                                    <a href="<?= base_url('Data_Menu_PMT/aktif/' . $baris->id_anak) ?>"><button type="button" class="fas fa-check  " ></button></a>
                                                <?php endif ?>
                                            </td>
                                                </td>
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
                                <h5 class="modal-title" id="exampleModalLabel">Hapus Jenis Vitamin</h5>
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
    <script src="<?= base_url('assets/js/delete-confirm-jenis-vitamin.js') ?>"></script>