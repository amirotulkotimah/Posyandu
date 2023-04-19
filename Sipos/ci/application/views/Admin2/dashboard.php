 <br>
 <form class="user" action="<?php echo base_url('Dashboard/dashboard'); ?>" method="POST" enctype="multipart/form-data">
<br>
    <div class="row">
                <div class="col-12">
                    <div class="card m-b-30">
                        <div class="card-body">
                             <h4 class="page-title">Dashboard</h4>
                             <br>

    <!-- end page title end breadcrumb -->

    <div class="row">
    <div class="col-md-12 col-xl-3">
       <div class="card text-white bg-primary">
        <div class="card-body text-center">
            <div class="p-6">
            <h6 class="text-uppercase mb-3">Data Anak</h6>
            <h4 class="mb-0"><?php echo $total_data_anak; ?><small class="ml-2"></small></h4>
          </div>
        </div>
    </div>
    </div>

    <div class="col-md-12 col-xl-3">
       <div class="card text-white bg-primary">
        <div class="card-body text-center">
            <div class="p-6">
            <h6 class="text-uppercase mb-3">Data Timbang</h6>
            <h4 class="mb-0"><?php echo $total_data_penimbangan; ?>
            <small class="ml-2"></small></h4>
          </div>
        </div>
    </div>
  </div> 

    <div class="col-md-12 col-xl-3">
       <div class="card text-white bg-primary">
        <div class="card-body text-center">
            <div class="p-6">
            <h6 class="text-uppercase mb-3">Data Vitamin</h6>
            <h4 class="mb-0"><?php echo $total_data_vitamin; ?>
            <small class="ml-2"></small></h4>
          </div>
        </div>
    </div>
    </div>

   <!-- <div class="col-md-12 col-xl-3">
       <div class="card text-white bg-primary">
        <div class="card-body text-center">
            <div class="p-6">
            <h6 class="text-uppercase mb-3">Data Imunisasi</h6>
            <h4 class="mb-0"><?php echo $total_data_imunisasi; ?>
            <small class="ml-2"></small></h4>
          </div>
        </div>
    </div>
    </div>-->

    <div class="col-md-12 col-xl-3">
       <div class="card text-white bg-primary">
        <div class="card-body text-center">
            <div class="p-6">
            <h6 class="text-uppercase mb-3 ">Data Menu PMT</i></h6>

            <h4 class="mb-0"><?php echo $total_menu_pmt; ?>
            <small class="ml-2"></small></h4>
          </div>
        </div>
    </div>
    </div>

    

  </div>
     
    <div class="row">
       <!--<div class="col-md-12 col-xl-3">
       <div class="card text-white bg-primary">
        <div class="card-body text-center">
            <div class="p-6">
            <h6 class="text-uppercase mb-3">Data Penimbangan</h6>
            <h4 class="mb-0"><?php echo $total_data_penimbangan; ?>
            <small class="ml-2"></small></h4>
          </div>
        </div>
    </div>
  </div>-->
    
</form>
</div>
</div>
</div>

 <div class="row">
        <div class="col-xl-8">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="mb-0">Data Anak Terbaru</h6>
                </div>
                <div class="col text-right">
                  <a href="<?php echo base_url('Data_Anak')?>" class="btn btn-sm btn-primary">Lihat semua</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Anak ke</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Foto</th>

                  </tr>
                </thead>
                <tbody>
                <?php foreach ($baru as $baris) : ?>
                  <tr>
                    <th scope="col">
                      <?php echo $baris->nik; ?>
                    </th>
                    <td>
                      <?php echo $baris->nama; ?> 
                    </td>
                    <td>
                      <?php echo $baris->anak_ke; ?> 
                    </td>
                    <td>
                      <?php echo $baris->jenis_kelamin; ?> 
                    </td>
                    <td><img src="<?php echo base_url('assets/upload/fotoanak/') . $baris->foto_anak; ?>" alt="" width="30" height="30" onerror="this.onerror = null; this.src = '<?= base_url('assets/images/avatar.png') ?>'"></td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
         <div class="col-xl-4">
          <div class="card">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h6 class="mb-0">Penimbangan Terbaru</h6>
                </div>
                <div class="col text-right">
                  <a href="<?php echo base_url('Data_Penimbangan/lihat_semua_data_penimbangan')?>" class="btn btn-sm btn-primary">Lihat semua</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
             
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">BB</th>
                    <th scope="col">TB</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach ($terbaru as $baris) : ?>
                  <tr>
                    <th scope="col">
                      <?php echo $baris->nama_anak; ?>
                    </th>
                    <td>
                      <?php echo $baris->bb_anak; ?> 
                    </td>
                    <td>
                      <?php echo $baris->tb_anak; ?> 
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>