<div class="page-content-wrapper">
	<div class="page-content">
		<div id="chart-cagar-budaya" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
	</div>
</div>

<!-- amCharts javascript sources -->
<script src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="http://www.amcharts.com/lib/3/pie.js"></script>
<script src="http://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- amCharts javascript code -->
<script>
	AmCharts.makeChart("chart-cagar-budaya",
		{
			"type": "pie",
			"angle": 12,
			"balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
			"depth3D": 15,
			"innerRadius": "40%",
			"baseColor": "#7BF4B3",
			"outlineColor": "#7BF4B3",
			"outlineThickness": 0,
			"titleField": "category",
			"valueField": "jumlah",
			"theme": "light",
			"allLabels": [],
			"balloon": {},
			"legend": {
				"align": "center",
				"markerType": "circle"
			},
			"titles": [
				{
					"id": "cagar-budaya",
					"size": 15,
					"text": "Cagar Budaya"
				}
			],
			"dataProvider": [
				{
					"category": "Ya",
					"jumlah": 8
				},
				{
					"category": "Tidak",
					"jumlah": "15"
				}
			]
		}
	);
</script>