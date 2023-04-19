Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Monthly Average Temperature'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
    },
    yAxis: {
        title: {
            text: 'Berat Badan/Tinggi Badan'
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
        name: 'Berat Badan',
        data: [<?php echo json_encode($grafik1); ?>]
    }, {
        name: 'Tinggi badan',
        data: [3.9, 4.2, 5.7]
    }]
});