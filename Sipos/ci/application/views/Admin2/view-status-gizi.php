<br>
<div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Detail Status Gizi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-8">
                                    
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" value="<?= $user['nama'] ?>" id="nama" name="nama" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" value="<?= $user['jenis_kelamin'] ?>" id="jenis_kelamin" name="jenis_kelamin" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Umur</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" value="<?= $user['umur'] ?>" id="umur" name="umur" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Berat Badan</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" value="<?= $user['bb'] ?>" id="bb" name="bb" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Tinggi Badan</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" value="<?= $user['tb'] ?>" id="tb" name="tb" disabled>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Nilai Gizi Baik</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" value="<?= $user['nilai_gizi_baik'] ?>" id="nilai_gizi_baik" name="nilai_gizi_baik" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Nilai Gizi Kurang</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" value="<?= $user['nilai_gizi_kurang'] ?>" id="nilai_gizi_kurang" name="nilai_gizi_kurang" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Status Gizi</label>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="text" value="<?= $user['status_gizi'] ?>" id="status_gizi" name="status_gizi" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label"></label>
                                        <div class="col-sm-8">
                                            <a class="small" href="<?php echo base_url('Data_Status_Gizi')?>"><button class="btn btn-danger btn-sm" type="button">Kembali</button>
                                        </a>
                                        </div>
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
