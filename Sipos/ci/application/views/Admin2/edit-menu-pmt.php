<form class="user" method="post" action="<?php echo base_url('Data_Menu_PMT/update'); ?>" enctype="multipart/form-data">
    <br>
    
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Menu PMT</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-8">
                                    <input type="hidden" name="id_menu_pmt" value="<?= $user['id_menu_pmt'] ?>">

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Tanggal</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['tanggal'] ?>" id="tanggal" name="tanggal" required="">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Nama Menu</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['nama_menu'] ?>" id="nama_menu" name="nama_menu" required="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Keterangan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['ket'] ?>" id="ket" name="ket" required="">
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
                                                    <a class="small" href="<?php echo base_url('Data_Menu_PMT') ?>"><button class="btn btn-danger btn-sm" type="button">Batal</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
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
