<form class="user" action="<?php echo base_url('Absensi/update/');?>" method="post" enctype="multipart/form-data">
    <br>
<div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Data Absensi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-8">
                                    
                                    <?php foreach($user as $baris){ ?>
                                    <input type="hidden" name="id_absen" value="<?php echo $baris->id_absen; ?>">

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Tanggal Absen</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->tanggal_absen ;?>" id="tanggal_absen" name="tanggal_absen" >
                                        </div>
                                    </div>

                                   <div class="form-group row">
                                    <label for="example-date-input" class="col-sm-3 col-form-label">Keterangan</label>
                                    <div class="col-sm-8"> 
                                        <select class="form-control" id="status_absen" name="status_absen" required="">
                                            <option value="" hidden disabled selected>Pilih</option>
                                            <option value="hadir"> hadir </option>
                                            <option value="tidak hadir"> tidak hadir </option>
                                        </select>
                                    </div>
                                </div>

                                    <div class="form-group row">
                                    <div class="col-md-10 offset-md-3">
                                        <div class="input-group mt-2">
                                            <div class="custom"> 
                                                <div class="input-group-append"> 
                                                    <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Simpan"></a> 
                                                </div> 
                                            </div> &nbsp &nbsp
                                            <div class="input-group-append">
                                                <a class="small" href="<?php echo base_url('Absensi/lihat_data')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                                <?php } ?>
                                

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