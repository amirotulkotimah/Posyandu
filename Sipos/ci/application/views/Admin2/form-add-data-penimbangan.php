<form class="user" action="<?php echo base_url('Data_Penimbangan/input/' . $id_anakk);?>" method="post" enctype="multipart/form-data">
    <br>

        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Data Penimbangan</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                    <input type="hidden" id="id_anakk" name="id_anakk" value="<?= $id_anakk ?>">

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="<?= $user['nama'] ?>" id="nama_anak" name="nama_anak">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="<?= $user['nik'] ?>" id="nik_anak" name="nik_anak" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="<?= $user['jenis_kelamin'] ?>" id="jenis_kelamin_anak" name="jenis_kelamin_anak" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Umur</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="<?php echo hitung_umur($user['tanggal_lahir']);?>" id="umur_anak" name="umur_anak" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Tanggal Penimbangan</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="" value="<?php echo format_indo(date('Y-m-d'));?>" id="tgl_timbang_anak" name="tgl_timbang_anak" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Berat Badan</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="bb_anak" name="bb_anak" required="" placeholder="contoh : 9.10">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Tinggi Badan</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="" id="tb_anak" name="tb_anak" required="" placeholder="contoh : 88.1 ">
                            </div>
                        </div>
                            <div class="form-group row">
                                <div class="col-md-10 offset-md-3">
                                    <div class="input-group mt-2">
                                        <div class="custom">
                                            <div class="input-group-append">
                                            </form></hr>
                                            <a><input type="submit" class="btn btn-primary btn-sm" value="Simpan"></a>
                                        </div>
                                        
                                    </div> &nbsp &nbsp
                                    <div class="input-group-append">

                                        <a href=<?php echo base_url('Data_Penimbangan/data_per_anak/'. $id_anakk)?>>
                                            <button class="btn btn-danger btn-sm" type="button">Batal</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>