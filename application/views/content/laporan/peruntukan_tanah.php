<div class="page-content-wrapper">
	<div class="page-content">
		<div id="chart-peruntukan-tanah" style="width: 100%; height: 400px; background-color: #FFFFFF;"></div>
		<div class="row">
			<div class="col-xs-12">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>
								 No
							</th>
							<th>
								 Peruntukan Tanah
							</th>
							<th>
								 Jumlah
							</th>
							<th>
								 Option
							</th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; foreach ($peruntukan_tanah as $item): ?>
							<tr>
								<td>
									 <?php echo $i++ ?>
								</td>
								<td>
									 <?php echo $item['nama'] ?>
								</td>
								<td>
									 <?php echo $item['jumlah'] ?>
								</td>
								<td>
									 
								</td>
							</tr>
						<?php endforeach ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<!-- amCharts javascript sources -->
<script src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="http://www.amcharts.com/lib/3/serial.js"></script>
<script src="http://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- amCharts javascript code -->
<script>
	AmCharts.makeChart("chart-peruntukan-tanah",
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
					"id": "peruntukan-tanah",
					"size": 15,
					"text": "Peruntukan Tanah"
				}
			],
			"dataProvider": [
				<?php foreach ($peruntukan_tanah as $item): ?>
					{
						"category": "<?php echo $item['nama'] ?>",
						"jumlah": <?php echo $item['jumlah'] ?>
					},
				<?php endforeach ?>
			]
		}
	);
</script>