<form class="user" action="<?php echo base_url('Absensi/input/' . $id_orang_tua);?>" method="post" enctype="multipart/form-data">
<br>

            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">TAMBAH Data Absensi </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                
            <div class="col-lg-5 col-md-5 col-sm-5 ">
            <div class="card shadow">
                <div class="card-header">

                    <h6>IBU <?= $lihat['nama_ortu'] ?></h6>
                   
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Absensi/tambah_data?id_ortu=' . $id_orang_tua); ?>" method="post">

                        <input type="hidden" id="id_orang_tua" name="id_orang_tua" value="<?= $id_orang_tua ?>">

                        <input type="hidden" id="nm_ortu" name="nm_ortu" value="<?= $lihat['nama_ortu'] ?>">
                        

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-4 col-form-label">Tanggal</label>
                                <div class="col-sm-8">
                                    <input class="form-control" type="text" value="<?php echo format_indo(date('Y-m-d'));?>" id="tanggal_absen" name="tanggal_absen" >
                                </div>
                            </div>

                            <div class="form-group row">
                            <label for="example-date-input" class="col-sm-4 col-form-label">Keterangan</label>
                            <div class="col-sm-8"> 
                                <select class="form-control" id="status_absen" name="status_absen" required="">
                                    <option value="" hidden disabled selected>Pilih</option>
                                    <option value="hadir"> hadir </option>
                                    <option value="tidak hadir"> tidak hadir </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                                    <div class="col-md-10 offset-md-3">
                                        <div class="input-group mt-3">
                                            <div class="custom"> 
                                                <div class="input-group-append"> 
                                                    <a><input type="submit" class="btn btn-primary btn-sm" name="submit" value="Absen"></a> 
                                                </div> 
                                            </div> &nbsp &nbsp
                                            <div class="input-group-append">
                                                <a class="small" href="<?php echo base_url('Absensi/absen_orang_tua/'. $id_orang_tua)?>"><button class="btn btn-secondary btn-sm" type="button">Lihat Absensi</button>
                                                </a>
                                            </div>
                                        </div>
                                        </div>
                        
                    
                    </form>
                </div>
            </div>
        </div>
    </div>

                                