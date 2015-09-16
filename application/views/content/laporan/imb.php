<div class="page-content-wrapper">
	<div class="page-content">
		<div id="chart-imb" style="width: 100%; height: 400px; background-color: #FFFFFF;" ></div>
	</div>
</div>

<!-- amCharts javascript sources -->
<script type="text/javascript" src="http://www.amcharts.com/lib/3/amcharts.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/pie.js"></script>
<script type="text/javascript" src="http://www.amcharts.com/lib/3/themes/light.js"></script>

<!-- amCharts javascript code -->
<script type="text/javascript">
	AmCharts.makeChart("chart-imb",
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
					"id": "imb",
					"size": 15,
					"text": "IMB"
				}
			],
			"titles": [],
			"dataProvider": [
				{
					"category": "Ya",
					"jumlah": 8
				},
				{
					"category": "Tidak",
					"jumlah": 6
				}
			]
		}
	);
</script>