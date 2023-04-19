<form class="user" action="<?php echo base_url('SPK/data_per_anak');?>" method="POST" enctype="multipart/form-data">
    <br>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">SPK</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                     <!-- Begin Page Content -->
                     <div class="container-fluid">


                         <div class="row">
                            <?php
                            foreach ($role as $item)
                            { //
                            ?>
                                                
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-95 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 text-center">
                                                        <img src="<?php echo base_url('assets/upload/fotoanak/') . $item->foto_anak; ?>" alt="" width="50" height="50">
                                                        </div>
                                                        <div class="h7 mb-0 text-center"><a href="<?php echo base_url('SPK/data_per_anak/'. $item->id_anak);?>" class="text-primary"><?= $item->nama ?></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

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