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
                                            <h4 class="text-center"><strong> Data Status Gizi </strong></h4>
                                        </tr>
                                        <br>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Umur</th>
                                            <th>Berat Badan</th>
                                            <th>Tinggi Badan</th>
                                            <th>Status Gizi</th>
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
                                            <td><?php echo $baris->nama; ?></td>
                                            <td><?php echo $baris->jenis_kelamin; ?></td>
                                            <td><?php echo $baris->umur; ?></td>
                                            <td><?php echo $baris->bb; ?></td>
                                            <td><?php echo $baris->tb; ?></td>
                                            <td><?php echo $baris->status_gizi; ?></td>
                                            
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
                            </div>
