<div class="page-content-wrapper">
	<div class="page-content">
		<div id="chart-kecamatan" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
	</div>
</div>

<!-- amCharts javascript sources -->
<script src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="http://www.amcharts.com/lib/3/serial.js"></script>
<script src="http://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- amCharts javascript code -->
<script type="text/javascript">
	AmCharts.makeChart("chart-kecamatan",
		{
			"type": "serial",
			"categoryField": "kecamatan",
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
					"id": "col-peruntukan-tanah",
					"title": "Peruntukan Tanah",
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
					"id": "kecamatan",
					"size": 15,
					"text": "Kecamatan"
				}
			],
			"dataProvider": [
				<?php foreach ($kecamatan as $item): ?>
					{
						"kecamatan": "<?php echo $item['kecamatan'] ?>",
						"jumlah": <?php echo $item['jumlah'] ?>
					},
				<?php endforeach ?>
			]
		}
	);
</script>