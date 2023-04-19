<form class="user" method="post" enctype="multipart/form-data">
    <br>
        
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Detail Jenis Vitamin</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-8">
                                    <input type="hidden" name="id_jenis_vitamin" value="<?= $user['id_jenis_vitamin'] ?>">

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Jenis Vitamin</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['jenis_vitamin'] ?>" id="jenis_vitamin" name="jenis_vitamin" disabled>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-date-input" class="col-sm-3 col-form-label">Umur</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" value="<?= $user['umur'] ?>" id="umur" name="umur" disabled>
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