<form class="user" method="post" action="<?php echo base_url('Data_Petugas/detail_data_petugas'); ?>" enctype="multipart/form-data">
    <br>
        
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Detail Data Petugas</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-8">
                                    <input type="hidden" name="id_petugas" value="<?= $user['id_petugas'] ?>">
                                    <input type="hidden" name="fotolama" value="<?= $user['foto'] ?>">

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">NIK</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['nik'] ?>" id="nik" name="nik" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['nama_petugas'] ?>" id="nama_petugas" name="nama_petugas" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['jenis_kelamin'] ?>" id="jenis_kelamin" name="jenis_kelamin" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['alamat'] ?>" id="alamat" name="alamat" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">No. HP</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['no_hp'] ?>" id="no_hp" name="no_hp" disabled>
                                        </div>
                                    </div>                                             

                                </div>
                                <div class="col-auto">
                                    <figure class="img-fluid">
                                        
                                        <img src="<?php echo base_url('assets/upload/fotopengguna/') . $user['foto'] ?>" class="preview-foto" alt="" height="185" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'">
                                    </figure>
                                    
                                </div>

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
</form>
<script src="<?= base_url('assets/js/previewfoto.js') ?>"></script>

<!-- END wrapper -->