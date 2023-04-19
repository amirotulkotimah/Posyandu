<form class="user" action="<?php echo base_url('Data_Status_Gizi/input/');?>" method="post" enctype="multipart/form-data">
    <br>

        <!-- end page title end breadcrumb -->
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <h4 class="page-title">Perhitungan Status Gizi</h4>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" value="" id="nama" name="nama" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-4"> 
                                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required="">
                                    <option value="" hidden disabled selected>Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki"> L </option>
                                    <option value="Perempuan"> P </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Umur</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" value="" id="umur" name="umur" required="" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Berat Badan</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" value="" id="bb" name="bb" required="">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Tinggi Badan</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="text" value="" id="tb" name="tb" required="">
                            </div>
                        </div>

                        <!--<div class="form-group row">
                            <label for="example-date-input" class="col-sm-2 col-form-label">Tanggal Perhitungan</label>
                            <div class="col-sm-4">
                                <input class="form-control" type="date" value="" id="tgl_status_gizi" name="tgl_status-gizi" required="">
                            </div>
                        </div>-->
                            <div class="form-group row">
                                <div class="col-md-10 offset-md-2">
                                    <div class="input-group mt-2">
                                        <div class="custom">
                                            <div class="input-group-append">
                                            </form></hr>
                                            <a><input type="submit" class="btn btn-primary btn-sm" value="Proses Perhitungan"></a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <table  class="table table-bordered " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Yang Dicari</th>
                                            <th>Nilai Gizi Baik</th>
                                            <th>Nilai Gizi Kurang</th>
                                            <th>Status Gizi</th>
                                            </tr>
                                        </thead>
                                        <!--<tbody>
                                            <?php
                                            $no = 1; //no default 1
                                            foreach ($lihat as $baris) { //
                                            ?>
                                                <tr>
                                                
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $baris->dicari; ?></td>
                                            <td><?php echo $baris->nilai_gizi_baik; ?></td>
                                            <td><?php echo $baris->nilai_gizi_kurang; ?></td>
                                            <td><?php echo $baris->status_gizi; ?></td>
                                            
                                            </tr>
                                            <?php
                                                }?>
                                    </tbody>-->
                                </table>
                            </div>
                        </div>
                    </div>

                    
                                