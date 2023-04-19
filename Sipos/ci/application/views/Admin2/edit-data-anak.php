<form class="user" method="post" action="<?php echo base_url('Data_Anak/update'); ?>" enctype="multipart/form-data">
    <br>
    
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Data Anak</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <input type="hidden" name="id_anak" value="<?= $user['id_anak'] ?>">
                                    <input type="hidden" name="fotolama" value="<?= $user['foto_anak'] ?>">

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">NIK</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['nik'] ?>" id="nik" name="nik" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['nama'] ?>" id="nama" name="nama" required="" max="15" placeholder="Maksimal 16 huruf">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Anak ke</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['anak_ke'] ?>" id="anak_ke" name="anak_ke" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['tempat_lahir'] ?>" id="tempat_lahir" name="tempat_lahir" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="yy-mm-dd" value="<?= $user['tanggal_lahir'] ?>" id="tanggal_lahir" name="tanggal_lahir" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Umur</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= hitung_umur($user['tanggal_lahir']);?>" id="umur" name="umur" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['jenis_kelamin'] ?>" id="jenis_kelamin" name="jenis_kelamin" required="">
                                        </div>
                                    </div>

                                    
                                    <!--<div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Nama Ortu</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['nama_ortu'] ?>" id="nama_ortu" name="nama_ortu" required="">
                                        </div>
                                    </div>-->

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['alamat'] ?>" id="alamat" name="alamat" required="">
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-10 offset-md-3">
                                            <div class="input-group mt-1">
                                                <div class="custom">
                                                    <div class="input-group-append">

                                                        <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Simpan"></a>
                                                    </div>
                                                </div> &nbsp &nbsp
                                                <div class="input-group-append">
                                                    <a class="small" href="<?php echo base_url('Data_Anak') ?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                                <div class="col-auto">
                                    <figure class="img-fluid">
                                        <img src="<?php echo base_url('assets/upload/fotoanak/') . $user['foto_anak'] ?>" class="preview-foto" alt="" height="150" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'">
                                    </figure>
                                    <div class="mt-3">
                                        <input type="file" hidden class="custom-file-input btn-upload-foto" id="foto_anak" name="foto_anak" accept="image/jpeg, image/png">
                                        <label class="btn btn-block btn-primary" for="foto_anak">Pilih foto</label>
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
