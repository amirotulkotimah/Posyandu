<form class="user" action="<?php echo base_url('Data_Penimbangan/update/' . $id_anakk);?>" method="post" enctype="multipart/form-data">
    <br>
<div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Data Penimbangan</h4>
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
                                    <input type="hidden" name="id_penimbangan" value="<?php echo $baris->id_penimbangan; ?>">

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->nama_anak; ?>" id="nama_anak" name="nama_anak" disabled >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">NIK</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->nik_anak; ?>" id="nik_anak" name="nik_anak" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->jenis_kelamin_anak; ?>" id="jenis_kelamin_anak" name="jenis_kelamin_anak" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Umur</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->umur_anak; ?>" id="umur_anak" name="umur_anak" disabled >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Berat Badan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->bb_anak; ?>" id="bb_anak" name="bb_anak" >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Tinggi Badan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->tb_anak; ?>" id="tb_anak" name="tb_anak">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Tgl Penimbangan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->tgl_timbang_anak;?>" id="tgl_timbang_anak" name="tgl_timbang_anak">
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
                                                <a class="small" href="<?php echo base_url('Data_Penimbangan/data_per_anak/' . $id_anakk)?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
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
