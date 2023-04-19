<form class="user" action="<?php echo base_url('Dataset/input_data');?>" method="post" enctype="multipart/form-data">
    <br>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Data Training</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-5"> 
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required="">
                                    <option value="" hidden disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="L"> L </option>
                                    <option value="P"> P </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Umur</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="umur" name="umur" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Berat Badan</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="bb" name="bb" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Tinggi Badan</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="tb" name="tb" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Status Gizi</label>
                            <div class="col-sm-5"> 
                                <select class="form-control" id="status_gizi" name="status_gizi" required="">
                                    <option value="" hidden disabled selected>Pilih Status Gizi</option>
                                    <option value="baik"> baik </option>
                                    <option value="kurang"> kurang </option>
                                </select>
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
                                        <a class="small" href="<?php echo base_url('Dataset')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
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