<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Login</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="themesdesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/logo4" >
        
        <link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()?>/assets/plugins/animate/animate.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()?>/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url()?>/assets/css/style.css" rel="stylesheet" type="text/css">

    </head>


    <body class="fixed-left">
        <!-- Begin page -->
        <!--<div class="accountbg"></div>-->
        <div id="stars"></div>
        <div id="stars2"></div>
        <div class="wrapper-page">

            <div class="card">
                <div class="card-body">

                    <h3 class="text-center mt-0">
                        <a href="index.html" class="logo logo-admin"><img src="<?php echo base_url()?>/assets/images/sipos.png" height="35" alt="logo"></a>
                    </h3>

                    <h6 class="text-center">Sign In</h6>

                    <div class="p-3">
                        
                        <form class="form-horizontal" action="<?php echo base_url('Login/cek_log');?>" method="POST">

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="text" required="" placeholder="Username" name="username">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <input class="form-control" type="password" required="" placeholder="Password" name="password">
                                </div>
                            </div>


                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <button class="btn btn-danger btn-block waves-effect waves-light" type="submit" name="btn_primary">Log In</button>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control">
                                        <p>Jika belum memiliki akun? klik
                                        <a href="<?php echo base_url('Register/index');?>"><button type="button" class="btn btn-link waves-effect">Daftar</button></a>
                                        </p>
                                        <p>Username : kader </p>
                                        <p>Password : kader </p>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- jQuery  -->
        <script src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url()?>/assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url()?>/assets/js/modernizr.min.js"></script>
        <script src="<?php echo base_url()?>/assets/js/detect.js"></script>
        <script src="<?php echo base_url()?>/assets/js/fastclick.js"></script>
        <script src="<?php echo base_url()?>/assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url()?>/assets/js/jquery.blockUI.js"></script>
        <script src="<?php echo base_url()?>/assets/js/waves.js"></script>
        <script src="<?php echo base_url()?>/assets/js/jquery.nicescroll.js"></script>
        <script src="<?php echo base_url()?>/assets/js/jquery.scrollTo.min.js"></script>

        <!-- App js -->
        <script src="<?php echo base_url()?>/assets/js/app.js"></script>

    </body>
</html>