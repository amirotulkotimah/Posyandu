<form class="user" action="<?php echo base_url('Laporan_Absensi/cari');?>" method="get" enctype="multipart/form-data">
<br>
<div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Pencarian Data Absensi</h4>
                    </div>
                </div>
            </div>
            <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                    <div class="form-group row">
                             <label for="example-date-input" class="col-sm-3 col-form-label">Cari Berdasarkan Nama</label>
                             <div class="col-sm-5">
                                 <select class="form-control" id="nm_ortu" name="nm_ortu" required="">
                                     <option value="" hidden disabled selected>Pilih</option>
                                     <?php foreach ($role as $item) : ?>
                                         <option value="<?= $item->nama_ortu ?>"><?= $item->nama_ortu ?></option>
                                     <?php endforeach ?>

                                 </select>
                             </div>
                             <div class="btn-group">
                                <button type="submit" class="btn btn-primary btn-sm float-right">Cari</button>
                         </div>

                     </div>
                     <div class="form-group row">
                    <label for="example-date-input" class="col-sm-3 col-form-label">Cari Semua </label>
                    <div class="col-sm-5">
                    <input class="form-control" type="text" value="All" id="" name="" required="">
                    </div>
                    <div class="btn-group">
                                <a href="Laporan_Absensi/lihat"  class="btn btn-primary btn-sm float-right">Cari</a>
                         </div>
                    </div>
                    

                      