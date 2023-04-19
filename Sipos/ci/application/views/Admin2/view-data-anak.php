<form class="user" method="post" action="<?php echo base_url('Data_Anak/detail_data_anak'); ?>" enctype="multipart/form-data">
    <br>
        
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Detail Data Anak</h4>
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
                                            <input class="form-control" type="text" value="<?= $user['nik'] ?>" id="nik" name="nik" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['nama'] ?>" id="nama" name="nama" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Anak ke</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['anak_ke'] ?>" id="anak_ke" name="anak_ke" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['jenis_kelamin'] ?>" id="jenis_kelamin" name="jenis_kelamin" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['tempat_lahir'] ?>" id="tempat_lahir" name="tempat_lahir" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="yy-mm-dd" value="<?= $user['tanggal_lahir'] ?>" id="tanggal_lahir" name="tanggal_lahir" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Umur</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= hitung_umur($user['tanggal_lahir']);?>" id="umur" name="umur" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Nama Orang Tua</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['nama_ortu'] ?>" id="nama_ortu" name="nama_ortu" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Alamat</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['alamat'] ?>" id="alamat" name="alamat" disabled>
                                        </div>
                                    </div>

                                    
                                </div>
                                <div class="col-auto">
                                    <figure class="img-fluid">
                                        
                                        <img src="<?php echo base_url('assets/upload/fotoanak/') . $user['foto_anak'] ?>" class="preview-foto" alt="" height="185" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'">
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