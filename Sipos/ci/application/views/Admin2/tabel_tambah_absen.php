<br>

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Tambah Absen</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="card m-b-30">
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <p class="card-title">Jumlah data orang tua</p>
                                <input type="text" name="jumlah" class="form-control"  value="<?php echo $total_data_ortu; ?>"></div>
                            
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-req">Request</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">

            <div class="col-lg-12">

                <form action="<?= base_url('Absensi/save_absen'); ?>" method="post">

                    <div class="row">

                        <input type="hidden" class="jml-req" name="jmlReq" value="<?= $jmlReq; ?>">

                        <?php for ($i = 1; $i <= $jmlReq; $i++) : ?>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <div class="card card-data">
                                    <div class="card-header">
                                        <h4>Data - <?= $i; ?></h4>
                                    </div>
                                    <div class="card-body">

                                         <div class="form-group" >
                                            <label for="nm_ortu">Nama</label>
                                            <select name="nm_ortu<?= $i; ?>" id="nm_ortu" class="form-control" required>
                                                <option value="" hidden disabled selected>Pilih</option>
                                                 <?php foreach ($role as $item) : ?>
                                                     <option value="<?= $item->nama_ortu ?>"><?= $item->nama_ortu ?></option>
                                                 <?php endforeach ?>
                                            </select>
                                        </div>

                                        <!--<div class="form-group">
                                            <label for="id_orang_tua">Nama</label>
                                            <select name="id_orang_tua<?= $i; ?>" id="id_orang_tua" class="form-control" required>
                                                <option value="" hidden disabled selected>Pilih</option>
                                                 <?php foreach ($role as $item) : ?>
                                                     <option value="<?= $item->id_ortu ?>"><?= $item->nama_ortu ?></option>
                                                 <?php endforeach ?>
                                            </select>
                                        </div>-->
                                        
                                     <div class="form-group">
                                        <label for="example-date-input" class="">Tanggal</label> 
                                        <div class="">
                                            <input class="form-control" type="text" value="<?php echo format_indo(date('Y-m-d'));?>" id="tanggal_absen" name="tanggal_absen<?= $i; ?>" required="">
                                        </div>
                                    </div>

                                        <div class="form-group">
                                        <label for="example-date-input" class="">Keterangan</label> 
                                        <div class="">
                                            <input class="form-control" type="text" value="tidak hadir" id="status_absen" name="status_absen<?= $i; ?>" required="">
                                        </div>
                                    </div>

                                        
                                    </div>
                                </div>
                            </div>

                        <?php endfor; ?>
                    </div>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group btn-submit">
                <button type="submit" name="tambah_absen" class="btn btn-primary btn-block mb-4">Simpan</button>
            </div>
        </div>
        </form>
    </div>
</div>
<br>

    <script src="<?= base_url(); ?>assets/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/popper.min.js"></script>
    <script src="<?= base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {

            var jmlReq = $('.jml-req').val();

            if (jmlReq > 0) {
                $('.card-data').css('display', 'inline');
                $('.btn-submit').css('display', 'inline');
            }

        })
    </script>