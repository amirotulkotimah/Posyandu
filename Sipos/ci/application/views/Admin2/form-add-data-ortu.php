<form class="user" action="<?php echo base_url('Data_Ortu/input_data');?>" method="post" enctype="multipart/form-data">
    <br>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Data Orang Tua</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">NIK</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="nik_ortu" name="nik_ortu" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Nama</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="nama_ortu" name="nama_ortu" required="" placeholder="Maksimal 14 huruf">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Pekerjaan</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="pekerjaan" name="pekerjaan" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Alamat</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="alamat_ortu" name="alamat_ortu" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">No. HP</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="no_hp" name="no_hp" required="">
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto" name="foto" accept="image/jpeg, image/png" required="">
                                            <label class="custom-file-label" for="foto">Pilih foto...</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-10 offset-md-5">
                                <div class="input-group mt-2">
                                    <div class="custom"> 
                                        <div class="input-group-append"> 
                                            <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Simpan"></a> 
                                        </div> 
                                    </div> &nbsp &nbsp
                                    <div class="input-group-append">
                                        <a class="small" href="<?php echo base_url('Data_Ortu')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                        </a>
                                    </div>
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