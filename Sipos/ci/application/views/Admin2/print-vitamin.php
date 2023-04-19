<br>

        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">

                        <table id="table" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <h3 class="text-center "><strong>POSYANDU ANGGREK</strong>  </h3>
                                            </tr>
                                            <tr>
                                            <h4 class="text-center"><strong> Data Vitamin </strong></h4>
                                        </tr>
                                        <br>
                                        <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Umur</th>
                                        <th>Jenis Vitamin</th>
                                        <th>Nama Petugas</th>
                                        <th>Tanggal Pemberian</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                                        $no = 1; //no default 1
                                                        foreach ($user as $baris) { //
                                                            ?>
                                                            <tr>
                                                                
                                                                <td><?php echo $no++; ?></td>
                                                                <!-- nomor user otomatis bertambah pada saatn menambah data -->
                                                                <td><?php echo $baris->nama_anak; ?></td>
                                                                <td><?php echo $baris->umur_anak; ?></td>
                                                                <td><?php echo $baris->jenis_vitamin; ?></td>
                                                                <td><?php echo $baris->nama_petugas; ?></td>
                                                                <td><?php echo $baris->tgl_vitamin; ?></td>
                                                            </tr>
                                                            <?php
                                                        }?>
                                                    </tbody>
                                                </table>
                                                <script type="text/javascript">
                                                    window.print();
                                                </script>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
