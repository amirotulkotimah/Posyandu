<form class="user" action="<?php echo base_url('Data_Petugas/input_data');?>" method="post" enctype="multipart/form-data">
    <br>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Data Petugas</h4>
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
                                <input class="form-control" type="text" value="" id="nik" name="nik" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Nama</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="nama_petugas" name="nama_petugas" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-5"> 
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required="">
                                    <option value="" hidden disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki"> Laki-laki </option>
                                    <option value="Perempuan"> Perempuan </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Alamat</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="alamat" name="alamat" required="">
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
                            <div class="col-md-10 offset-md-2">
                                <div class="input-group mt-2">
                                    <div class="custom"> 
                                        <div class="input-group-append"> 
                                            <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Simpan"></a> 
                                        </div> 
                                    </div> &nbsp &nbsp
                                    <div class="input-group-append">
                                        <a class="small" href="<?php echo base_url('Data_Petugas')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
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