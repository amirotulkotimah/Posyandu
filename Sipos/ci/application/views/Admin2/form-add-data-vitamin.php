<form class="user" action="<?php echo base_url('Data_Vitamin/input/' . $id_anakk);?>" method="post" enctype="multipart/form-data">
    <br>

        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Data Pemberian Vitamin</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <input type="hidden" id="id_anakk" name="id_anakk" value="<?= $id_anakk?>">

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
                            <label for="example-date-input" class="col-sm-2 col-form-label">Umur</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="text" value="<?= hitung_umur($user['tanggal_lahir']);?>" id="umur_anak" name="umur_anak" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Tanggal Pemberian</label>
                            <div class="col-sm-5">
                                <input class="form-control" type="" value="<?php echo format_indo(date('Y-m-d'));?>" id="tgl_vitamin" name="tgl_vitamin" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                             <label for="example-date-input" class="col-sm-2 col-form-label">Jenis Vitamin</label>
                             <div class="col-sm-5">
                                 <select class="form-control" id="jenis_vitamin" name="jenis_vitamin" required="">
                                     <option value="" hidden disabled selected>Pilih Jenis Vitamin</option>
                                     <?php foreach ($role as $item) : ?>
                                         <option value="<?= $item->jenis_vitamin ?>"><?= $item->jenis_vitamin ?></option>
                                     <?php endforeach ?>

                                 </select>
                             </div>
                         </div>

                        <div class="form-group row">
                             <label for="example-date-input" class="col-sm-2 col-form-label">Nama Petugas</label>
                             <div class="col-sm-5">
                                 <select class="form-control" id="nama_petugas" name="nama_petugas" required="">
                                     <option value="" hidden disabled selected>Pilih Nama Petugas</option>
                                     <?php foreach ($pilih as $item) : ?>
                                         <option value="<?= $item->nama_petugas ?>"><?= $item->nama_petugas ?></option>
                                     <?php endforeach ?>

                                 </select>
                             </div>
                         </div>
                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2">
                                    <div class="input-group mt-2">
                                        <div class="custom">
                                            <div class="input-group-append">
                                            </form></hr>
                                            <a><input type="submit" class="btn btn-primary btn-sm" value="Simpan"></a>
                                        </div>
                                        
                                    </div> &nbsp &nbsp
                                    <div class="input-group-append">

                                        <a href=<?php echo base_url('Data_Vitamin/data_per_anak/' . $id_anakk)?>>
                                            <button class="btn btn-danger btn-sm" type="button">Batal</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>