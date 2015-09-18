function kabupaten(callback){
			 tmp = null;
				$.ajax({
					'type': "GET",
					'async': "false",
					'global': "false",
					'url': "http://localhost/iht/index.php/kabupaten/geo",
					'dataType': 'json',
					'success': function (data) {
						callback(data);
						
					}
				});
				
		return tmp;

		}
	//ambil layer
kabupaten(function(output){
  //add layer all kabupaten
	var style_kabupaten = {
	"color": "blue",
	"weight": 2,
	"opacity": 0.5,
	"fillOpacity": 0
};

   var kabupaten_layer = L.geoJson(output, {
   style: style_kabupaten,
	onEachFeature: function (feature, layer) {
	layer.bindPopup(feature.properties.kabupaten);
		 // Get bounds of polygon
	var bounds = layer.getBounds();
	// Get center of bounds
	var center = bounds.getCenter();
	// Use center to put marker on map
	//var marker = L.marker(center).addTo(map);
	  }
});
kabupaten_layer.addTo(map);

});