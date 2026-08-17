<!-- widget Statistik Penduduk -->

<style type="text/css">
	.highcharts-xaxis-labels tspan {font-size: 8px;}
</style>
<div class="single_bottom_rightbar">
	<h2><a href="<?= site_url("first/statistik/4")?>"><i class="fa fa-bar-chart"></i> Statistik Penduduk</a></h2>
	<script type="text/javascript">
		$(function () {
			var chart_widget;
			$(document).ready(function () {
					// Build the chart
					chart_widget = new Highcharts.Chart({
						chart: {
							renderTo: 'container_widget',
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false
						},
						title: {
							text: 'Jumlah Penduduk'
						},
						yAxis: {
							title: {
								text: 'Jumlah'
							}
						},
						xAxis: {
							categories:
							[
							<?php foreach($stat_widget as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['jumlah']?> <br> <?= $data['nama']?>'],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						},
						legend: {
							enabled:false
						},
						plotOptions: {
							series: {
								colorByPoint: true
							},
							column: {
								pointPadding: 0,
								borderWidth: 0
							}
						},
						series: [{
							type: 'column',
							name: 'Populasi',
							data: [
							<?php foreach ($stat_widget as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['nama']?>',<?= $data['jumlah']?>],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						}]
					});

					var chart_widget_gol_darah;
					// Build chart Golongan Darah
					chart_widget_gol_darah = new Highcharts.Chart({
						chart: {
							renderTo: 'container_widget_gol_darah',
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false
						},
						title: {
							text: 'Jumlah Penduduk Menurut Golongan Darah'
						},
						yAxis: {
							title: {
								text: 'Jumlah'
							}
						},
						xAxis: {
							categories:
							[
							<?php foreach($stat_widget_gol_darah as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['jumlah']?> <br> <?= $data['nama']?>'],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						},
						legend: {
							enabled:false
						},
						plotOptions: {
							series: {
								colorByPoint: true
							},
							column: {
								pointPadding: 0,
								borderWidth: 0
							}
						},
						series: [{
							type: 'column',
							name: 'Populasi',
							data: [
							<?php foreach ($stat_widget_gol_darah as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['nama']?>',<?= $data['jumlah']?>],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						}]
					});

					var chart_widget_umur;
					// Build chart Umur
					chart_widget_umur = new Highcharts.Chart({
						chart: {
							renderTo: 'container_widget_umur',
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false
						},
						title: {
							text: 'Jumlah Penduduk Menurut Kelompok Umur'
						},
						yAxis: {
							title: {
								text: 'Jumlah'
							}
						},
						xAxis: {
							categories:
							[
							<?php foreach($stat_widget_umur as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['jumlah']?> <br> <?= $data['nama']?>'],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						},
						legend: {
							enabled:false
						},
						plotOptions: {
							series: {
								colorByPoint: true
							},
							column: {
								pointPadding: 0,
								borderWidth: 0
							}
						},
						series: [{
							type: 'column',
							name: 'Populasi',
							data: [
							<?php foreach ($stat_widget_umur as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['nama']?>',<?= $data['jumlah']?>],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						}]
					});

					var chart_widget_pekerjaan;
					// Build chart Pekerjaan
					chart_widget_pekerjaan = new Highcharts.Chart({
						chart: {
							renderTo: 'container_widget_pekerjaan',
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false
						},
						title: {
							text: 'Jumlah Penduduk Menurut Pekerjaan'
						},
						yAxis: {
							title: {
								text: 'Jumlah'
							}
						},
						xAxis: {
							categories:
							[
							<?php foreach($stat_widget_pekerjaan as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['jumlah']?> <br> <?= $data['nama']?>'],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						},
						legend: {
							enabled:false
						},
						plotOptions: {
							series: {
								colorByPoint: true
							},
							column: {
								pointPadding: 0,
								borderWidth: 0
							}
						},
						series: [{
							type: 'column',
							name: 'Populasi',
							data: [
							<?php foreach ($stat_widget_pekerjaan as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['nama']?>',<?= $data['jumlah']?>],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						}]
					});

					var chart_widget_status_kawin;
					// Build chart Status Perkawinan
					chart_widget_status_kawin = new Highcharts.Chart({
						chart: {
							renderTo: 'container_widget_status_kawin',
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false
						},
						title: {
							text: 'Jumlah Penduduk Menurut Status Perkawinan'
						},
						yAxis: {
							title: {
								text: 'Jumlah'
							}
						},
						xAxis: {
							categories:
							[
							<?php foreach($stat_widget_status_kawin as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['jumlah']?> <br> <?= $data['nama']?>'],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						},
						legend: {
							enabled:false
						},
						plotOptions: {
							series: {
								colorByPoint: true
							},
							column: {
								pointPadding: 0,
								borderWidth: 0
							}
						},
						series: [{
							type: 'column',
							name: 'Populasi',
							data: [
							<?php foreach ($stat_widget_status_kawin as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['nama']?>',<?= $data['jumlah']?>],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						}]
					});

					var chart_widget_pendidikan;
					// Build chart Pendidikan Dalam KK
					chart_widget_pendidikan = new Highcharts.Chart({
						chart: {
							renderTo: 'container_widget_pendidikan',
							plotBackgroundColor: null,
							plotBorderWidth: null,
							plotShadow: false
						},
						title: {
							text: 'Jumlah Penduduk Menurut Pendidikan Dalam KK'
						},
						yAxis: {
							title: {
								text: 'Jumlah'
							}
						},
						xAxis: {
							categories:
							[
							<?php foreach($stat_widget_pendidikan as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['jumlah']?> <br> <?= $data['nama']?>'],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						},
						legend: {
							enabled:false
						},
						plotOptions: {
							series: {
								colorByPoint: true
							},
							column: {
								pointPadding: 0,
								borderWidth: 0
							}
						},
						series: [{
							type: 'column',
							name: 'Populasi',
							data: [
							<?php foreach ($stat_widget_pendidikan as $data): ?>
								<?php if ($data['jumlah'] != "-" AND $data['nama']!= "JUMLAH"): ?>
									['<?= $data['nama']?>',<?= $data['jumlah']?>],
								<?php endif; ?>
							<?php endforeach; ?>
							]
						}]
					});
				});

		});
	</script>
	<div id="container_widget" style="width: 100%; height: 300px; margin: 0 auto"></div>
	<div id="container_widget_gol_darah" style="width: 100%; height: 300px; margin: 0 auto"></div>
	<div id="container_widget_umur" style="width: 100%; height: 300px; margin: 0 auto"></div>
	<div id="container_widget_pekerjaan" style="width: 100%; height: 300px; margin: 0 auto"></div>
	<div id="container_widget_status_kawin" style="width: 100%; height: 300px; margin: 0 auto"></div>
	<div id="container_widget_pendidikan" style="width: 100%; height: 300px; margin: 0 auto"></div>
</div>
