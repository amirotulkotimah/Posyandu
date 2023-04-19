<form class="user" action="<?php echo base_url('Data_Anak/input_data');?>" method="post" enctype="multipart/form-data">
    <br>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Data Anak</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <input type="hidden" id="status" name="status" value="belum diberikan">
                        
                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">NIK</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="nik" name="nik" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Nama</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="nama" name="nama" required="" max="15" placeholder="Maksimal 14 huruf">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Anak ke</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="anak_ke" name="anak_ke" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Tempat Lahir</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="tempat_lahir" name="tempat_lahir" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Lahir</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="date" value="" id="tanggal_lahir" name="tanggal_lahir" required="">
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
                             <label for="example-date-input" class="col-sm-2 col-form-label">Nama Orang Tua</label>
                             <div class="col-sm-5">
                                 <select class="form-control" id="id_ortu" name="id_ortu" required="">
                                     <option value="" hidden disabled selected>Pilih Nama Orang Tua</option>
                                     <?php foreach ($role as $item) : ?>
                                         <option value="<?= $item->id_ortu ?>"><?= $item->nama_ortu ?></option>
                                     <?php endforeach ?>

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
                            <label for="example-date-input" class="col-sm-2 col-form-label">Foto</label>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto_anak" name="foto_anak" accept="image/jpeg, image/png" required="">
                                            <label class="custom-file-label" for="foto_anak">Pilih foto...</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-3 offset-md-2">
                                <div class="input-group mt-7">
                                    <div class="custom"> 
                                        <div class="input-group-append"> 
                                            <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Simpan"></a> 
                                        </div> 
                                    </div> &nbsp &nbsp
                                    <div class="input-group-append">
                                        <a class="small" href="<?php echo base_url('Data_Anak')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
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