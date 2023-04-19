<br>
<br>
    <a href="<?php echo base_url('Data_Penimbangan/data_per_anak/' . $id_anakk);?>">
                            <i class="fa fa-arrow-circle-left fa-1x" ></i>
                            <br>
                        </a>
                    
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                              <h4 class="mt-0 mb-3 header-title"></h4>
                              <div id="container" style="height: 340px;"></div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>


                  <script src="<?php echo base_url(); ?>assets/highcharts/highcharts.js"></script>
                  <script src="<?php echo base_url(); ?>assets/highcharts/exporting.js"></script>
                  <script src="<?php echo base_url(); ?>assets/highcharts/export-data.js"></script>
                  <script src="<?php echo base_url(); ?>assets/highcharts/accessibility.js"></script>
                  <script src="<?php echo base_url(); ?>assets/highcharts/js.js"></script>
                  <script src="<?php echo base_url(); ?>assets/highcharts/data.js"></script>
                  <script src="<?php echo base_url(); ?>assets/highcharts/drilldown.js"></script>

                  </style>
                  <script type="text/javascript">
                      
                      Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Grafik Penimbangan'
    },
    subtitle: {
        text: 'Tahun 2022'
    },
    xAxis: {
        categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
    },
    yAxis: {
        title: {
            text: 'BB (kg)/TB (cm)'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Berat Badan (kg)',
        data: [<?php echo json_encode($bb1); ?>, <?php echo json_encode($bb2); ?>, <?php echo json_encode($bb3); ?>, <?php echo json_encode($bb4); ?>, <?php echo json_encode($bb5); ?>, <?php echo json_encode($bb6); ?>, <?php echo json_encode($bb7); ?>, <?php echo json_encode($bb8); ?>, <?php echo json_encode($bb9); ?>, <?php echo json_encode($bb10); ?>, <?php echo json_encode($bb11); ?>, <?php echo json_encode($bb12); ?>]
    }, {
        name: 'Tinggi Badan (cm)',
        data: [<?php echo json_encode($tb1); ?>, <?php echo json_encode($tb2); ?>, <?php echo json_encode($tb3); ?>, <?php echo json_encode($tb4); ?>, <?php echo json_encode($tb5); ?>, <?php echo json_encode($tb6); ?>, <?php echo json_encode($tb7); ?>, <?php echo json_encode($tb8); ?>, <?php echo json_encode($tb9); ?>, <?php echo json_encode($tb10); ?>, <?php echo json_encode($tb11); ?>, <?php echo json_encode($tb12); ?>]
    }]
});
</script>