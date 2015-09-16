<div class="page-content-wrapper">
	<div class="page-content">
		<div id="chart-peruntukan-ruang" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
	</div>
</div>

<!-- amCharts javascript sources -->
<script src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="http://www.amcharts.com/lib/3/serial.js"></script>
<script src="http://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- amCharts javascript code -->
<script>
	AmCharts.makeChart("chart-peruntukan-ruang",
		{
			"type": "serial",
			"categoryField": "category",
			"angle": 30,
			"depth3D": 30,
			"startDuration": 1,
			"theme": "light",
			"categoryAxis": {
				"gridPosition": "start",
				"labelRotation": 34.2
			},
			"trendLines": [],
			"graphs": [
				{
					"balloonText": "[[title]] of [[category]]:[[value]]",
					"fillAlphas": 1,
					"id": "col-peruntukan-ruang",
					"title": "Peruntukan Ruang",
					"type": "column",
					"valueField": "jumlah"
				}
			],
			"guides": [],
			"valueAxes": [
				{
					"id": "axis-jumlah",
					"title": "Jumlah"
				}
			],
			"allLabels": [],
			"balloon": {},
			"legend": {
				"useGraphSettings": true
			},
			"titles": [
				{
					"id": "peruntukan-ruang",
					"size": 15,
					"text": "Peruntukan Ruang"
				}
			],
			"dataProvider": [
				<?php foreach ($peruntukan_ruang as $item): ?>
					{
						"category": "<?php echo $item['nama'] ?>",
						"jumlah": <?php echo $item['jumlah'] ?>
					},
				<?php endforeach ?>
			]
		}
	);
</script>