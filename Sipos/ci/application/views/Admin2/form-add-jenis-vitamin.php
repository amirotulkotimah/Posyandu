<form class="user" action="<?php echo base_url('Jenis_Vitamin/input_data');?>" method="post" enctype="multipart/form-data">
    <br>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Jenis Vitamin</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Jenis Vitamin</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="jenis_vitamin" name="jenis_vitamin" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Umur</label> 
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="umur" name="umur" required="">
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
                                        <a class="small" href="<?php echo base_url('Jenis_Vitamin')?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
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