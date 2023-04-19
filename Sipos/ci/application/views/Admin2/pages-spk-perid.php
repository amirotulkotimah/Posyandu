
    <br>
<div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Data Penimbangan <?= $lihat['nama'] ?></h4>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                      
                    </form>
                        <div class="container align-items-center">

                            <div class="row">
                                <div class="col-sm-12">
                                </div>
                            </div>
                            <table id="" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Umur</th>
                                        <th>Berat Badan</th>
                                        <th>Tinggi Badan</th>
                                        <th>Tanggal Penimbangan</th>
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
                                            <td><?php echo $baris->umur_anak; ?></td>
                                            <td><?php echo $baris->bb_anak; ?></td>
                                            <td><?php echo $baris->tb_anak; ?></td>
                                            <td><?php echo $baris->tgl_timbang_anak; ?></td>

                                            <td>

                                                <?php
                            
                                                echo '<a href="' . base_url('Data_Penimbangan/cek_status/' . $baris->id_penimbangan . '?id_anakk=' . $id_anakk) . '"><button type="button" class="btn-success">Cek Gizi</button></a>';
                                                
                                                ?></td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        
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
<script src="<?= base_url('assets/js/delete-confirm-data-penimbangan.js') ?>"></script>