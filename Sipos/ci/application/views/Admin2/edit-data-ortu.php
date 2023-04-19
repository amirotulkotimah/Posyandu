<form class="user" method="post" action="<?php echo base_url('Data_Ortu/update'); ?>" enctype="multipart/form-data">
    <br>
    
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Data Orang Tua</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <input type="hidden" name="id_ortu" value="<?= $user['id_ortu'] ?>">
                                    <input type="hidden" name="fotolama" value="<?= $user['foto'] ?>">

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label">NIK</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['nik_ortu'] ?>" id="nik_ortu" name="nik_ortu" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['nama_ortu'] ?>" id="nama_ortu" name="nama_ortu" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label">Pekerjaan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['pekerjaan'] ?>" id="pekerjaan" name="pekerjaan" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['alamat_ortu'] ?>" id="alamat_ortu" name="alamat_ortu" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-2 col-form-label">No.HP</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['no_hp'] ?>" id="no_hp" name="no_hp" required="">
                                        </div>
                                    </div>  

                                    <div class="form-group row">
                                        <div class="col-md-10 offset-md-2">
                                            <div class="input-group mt-2">
                                                <div class="custom">
                                                    <div class="input-group-append">

                                                        <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Simpan"></a>
                                                    </div>
                                                </div> &nbsp &nbsp
                                                <div class="input-group-append">
                                                    <a class="small" href="<?php echo base_url('Data_Ortu') ?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                                <div class="col-auto">
                                    <figure class="img-fluid">
                                        <img src="<?php echo base_url('assets/upload/fotopengguna/') . $user['foto'] ?>" class="preview-foto" alt="" height="150" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'">
                                    </figure>
                                    <div class="mt-3">
                                        <input type="file" hidden class="custom-file-input btn-upload-foto" id="foto" name="foto" accept="image/jpeg, image/png">
                                        <label class="btn btn-block btn-primary" for="foto">Pilih foto</label>
                                    </div>
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
