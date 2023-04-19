<form class="user" method="post" enctype="multipart/form-data">
        <br>
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Detail Menu PMT</h4>
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
                                            <input class="form-control" type="text" value="<?= $user['tanggal'] ?>" id="tanggal" name="tanggal" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Nama Menu</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['nama_menu'] ?>" id="nama_menu" name="nama_menu" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Keterangan</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['ket'] ?>" id="ket" name="ket" disabled>
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

<!-- END wrapper -->