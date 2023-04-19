<form class="user" action="<?php echo base_url('Data_Vitamin/update/' . $id_anakk);?>" method="post" enctype="multipart/form-data">
    <br>
<div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Data Pemberian Vitamin</h4>
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
                                    <input type="hidden" name="id_vitamin" value="<?php echo $baris->id_vitamin; ?>">

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
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Umur</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->umur_anak; ?>" id="umur_anak" name="umur_anak" disabled >
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Jenis Vitamin</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->jenis_vitamin; ?>" id="jenis_vitamin" name="jenis_vitamin"  >
                                        </div>
                                    </div>

                                <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Nama Petugas</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->nama_petugas; ?>" id="nama_petugas" name="nama_petugas" >
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Tgl Pemberian</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?php echo $baris->tgl_vitamin;?>" id="tgl_vitamin" name="tgl_vitamin">
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
                                                <a class="small" href="<?php echo base_url('Data_Vitamin/data_per_anak/' . $id_anakk)?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
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