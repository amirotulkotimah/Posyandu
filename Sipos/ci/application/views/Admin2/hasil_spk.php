<div class="row">
		<div class="col-md-7">
				<div class="alert alert-info mt-3" role="alert">
					Nilai posterior probabilities untuk <strong>Status Gizi Baik</strong> adalah : <strong><?= $hasil_baik ?></strong>, dan <strong>Status Gizi Kurang</strong> adalah : <strong><?= $hasil_kurang ?></strong>.<br>
					<?= $kesimpulan; ?>.
				</div>
		</div>
		<div class="col-md-5">
			<table class="mt-3 table table-striped table-hover">
				<thead>
					<th>Jenis Kelamin</th>
					<th>Umur</th>
					<th>Berat Badan</th>
					<th>Tinggi Badan</th>
					<th>Status Gizi</th>
				</thead>
				<tbody>
					<tr>

					<!--<td><?= $pendapatan = ($pendapatan == 1) ? "Rendah" : (($pendapatan == 2)  ? "Menengah" : "Tinggi"); ?></td>-->

						<td><?= $jenis_kelamin == 1 ? "P" : "L"; ?></td>
						<td><?= $umur = ($umur == 24) ? "24" : (($umur == 25)  ? "25" : (($umur == 26)? "26" : (($umur == 27) ? "27" : (($umur == 28) ? "28" : "29")))) ; ?></td>

						<td><?= $bb = ($bb == 8) ? "8" : (($bb == 9)  ? "9" : (($bb == 10)? "10" : (($bb == 11) ? "11" : (($bb == 12) ? "12" : "13")))) ; ?></td>

						<td><?= $tb = ($tb == 80) ? "80" : (($tb == 81)  ? "81" : (($tb == 82)? "82" : (($tb == 83) ? "83" : (($tb == 84) ? "84" : "85")))) ; ?></td>

						<td><?= $statusgizi == 1 ? "1" : "2"; ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

</div>
<!-- ./ container -->

<body>

</body>

</html>