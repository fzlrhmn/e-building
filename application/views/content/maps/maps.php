<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->
		<h3 class="page-title">
			Peta
		</h3>

		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet box grey-cascade">
					<div class="portlet-body" style="padding:0px;">
						<div id="map"></div>
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>
		<!-- END PAGE CONTENT-->
	</div>
</div>
<!-- END CONTENT -->

<script>
var warna_rw = ['#fef0d9', '#fdcc8a', '#fc8d59', '#e34a33', '#b30000', '#fdcc8a', '#fee8c8' , '#fdbb84', '#e34a33'];

  var map = L.map('map', {
      center: [-7.55802707, 110.8195290110], 
      zoom: 12,
      zoomControl : false
  });
  var google_roadmap    = new L.Google('ROADMAP');
  var google_hybrid     = new L.Google('HYBRID');
  var google_satelit    = new L.Google('SATELLITE');
  var osm               = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {});
  var Esri_WorldImagery = L.tileLayer('http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}');
  var mapbox            = L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6IjZjNmRjNzk3ZmE2MTcwOTEwMGY0MzU3YjUzOWFmNWZhIn0.Y8bhBaUMqFiPrDRW9hieoQ', {
                            maxZoom: 18,
                            id: 'mapbox.streets'
                          });

  map.addLayer(google_satelit);
var icon_gatel="";
  //ke lokasi
  function ke_lokasi(xe, ye){
      if(icon_gatel!=""){
        map.removeLayer(icon_gatel); 
      }
    // var myIcon = L.divIcon({className: 'my-div-icon'});
    var iconAktif = L.ExtraMarkers.icon({
        prefix: 'fa', 
        markerColor: 'green-light', 
        icon: 'fa-building', 
        iconColor: 'white',
        shape: 'square'
    });
// you can set .my-div-icon styles in CSS
 icon_gatel = new L.marker([parseFloat(ye), parseFloat(xe)], {icon: iconAktif});
icon_gatel.addTo(map);
    map.panTo([parseFloat(ye), parseFloat(xe)]);
    map.setZoom(20);
  }
  //ambil kabupaten list
  function list_kecamatan(){
    $.getJSON( root+"index.php/kecamatan/get_kecamatan/", function( json ) {
          var jumlah_kawasan  =0;
          var jumlah_penghuni =0;
          var luas            =0;
          $('#kabupaten').empty()
          $('#kabupaten').append('<option value="">Pilih Kecamatan</option>')
          
    		  $.each(json.kecamatan, function( i, item ) {
      		  $('#kabupaten').append('<option value="'+item.nomor+'">'+item.kecamatan+'</option>')
            
      		})
          
         
     });
  }

  function list_kelurahan(id_kec){
    $.getJSON( root+"index.php/kelurahan/get_kelurahan_by_kecamatan/"+id_kec, function( json ) {
      if (id_kec != '') {
        var jumlah_kawasan    =0;
        var jumlah_penghuni   =0;
        var luas              =0;
        $('#kelurahan').empty()
        $('#kelurahan').append('<option value="">Pilih Kelurahan</option>')
        
        $.each(json, function( i, item ) {
          $('#kelurahan').append('<option value="'+item.nomor+'">'+item.kelurahan+'</option>')
     
        })
       
      } else{
        $('#kelurahan').empty()
        $('#kelurahan').append('<option value="">Pilih Desa</option>')
        
      };
    });
  }



  function get_color_skoring (color) {
    var colors = ['#ffffff' , '#fef0d9', '#fdcc8a', '#fc8d59', '#e34a33', '#b30000'];
    return colors[color];
  }

    

  list_kecamatan();
  //ambil kabupaten geo
		var style_kabupaten = {
			"color": "#2A363B",
			"weight": 2,
			"opacity": 1,
			"fillOpacity": 0
		};
      var style_kecamatan = {
      "color": "blue",
      "weight": 2,
      "opacity": 0.5,
      "fillOpacity": 0
    };
      var sembunyi = {

      "weight": 2,
      "opacity": 0,
      "fillOpacity": 0
    };
    var style_kawasan = {
       "weight": 2,
       "opacity": 0.8,
       "fillOpacity": 0
    };
    
    var labelKecamatan;
    var kabupaten_layer;
				$.ajax({
					'type': "GET",
					'async': false,
					'global': false,
					'url': root+"index.php/kecamatan/geo",
					'dataType': 'json',
					'success': function (data) {
						kabupaten_layer = L.geoJson(data, {
						  style: style_kabupaten,
							onEachFeature: function (feature, layer) {
  							// layer.bindPopup(feature.properties.kecamatan);
  							// Get bounds of polygon
  							var bounds = layer.getBounds();
  							// Get center of bounds
  							var center = bounds.getCenter();
  							// Use center to put marker on map
                labelKecamatan = L.marker(center, {
                   icon: L.divIcon({
                       className: 'text-labels',   // Set class for CSS styling
                       html: feature.properties.kecamatan
                   }),
                   draggable: true,       // Allow label dragging...?
                   zIndexOffset: 1000     // Make appear above other map features
               });
               labelKecamatan.addTo(map);
                // L.marker(center)
                //     .bindLabel('cocotmu', { noHide: true })
                //     .addTo(map);
  							//var marker = L.marker(center).addTo(map);
							}
						});
						kabupaten_layer.addTo(map);
					}
				});
				
//load desa
  var kecamatan_layer
  var labelDesa
  $.ajax({
    'type': "GET",
    'async': false,
    'global': false,
    'url': root+"index.php/kelurahan/geo",
    'dataType': 'json',
    'success': function (data) {
      kecamatan_layer = L.geoJson(data, {
        style: sembunyi,
        onEachFeature: function (feature, layerr) {
             var bounds_desa = layerr.getBounds();
                        // Get center of bounds
                      var center_desa = bounds_desa.getCenter();
                       labelDesa = L.marker(center_desa, {
                   icon: L.divIcon({
                       className: 'text-labels',   // Set class for CSS styling
                       html: feature.properties.kelurahan
                   }),
                   draggable: false,       // Allow label dragging...?
                   zIndexOffset: 1000     // Make appear above other map features
               });
               labelDesa.addTo(map);
                        labelDesa.setOpacity(0);
        }
      });
      kecamatan_layer.addTo(map);
    }
  });

//ambil titik industri
//ambil kabupaten geo
  var label_rt = null;
  var iht_layer = null;
  var source = null;
  $.ajax({
      'type': "GET",
      'async': false,
      'global': false,
      'url': root+"index.php/bangunan/kawasan_geo",
      'dataType': 'json',
      'success': function (data) {
        source = data;
        //balikin kawasannya
        iht_layer = L.geoJson(data, {
          onEachFeature: function (feature, layer) {
             //layer.bindPopup(feature.properties.rt+' rw: '+feature.properties.rw);
             var bounds = layer.getBounds();
             // Get center of bounds
             var center = bounds.getCenter();
             
             label_rt = L.marker(center, {
                   icon: L.divIcon({
                       className: 'text-labels',   // Set class for CSS styling
                       html: 'rt: '+feature.properties.rt+' rw: '+feature.properties.rw
                   }),
                   draggable: false,       // Allow label dragging...?
                   zIndexOffset: 1000     // Make appear above other map features
               });
               
            //layer.setStyle(style_kawasan);
            layer.setStyle({
              fillColor : warna_rw[feature.properties.rw], 
              //fillColor : "blue", 
              fillOpacity : 0.4, 
              color : "white", 
              weight : 1, 
              opacity : 1, 
              dashArray : 3
            });
            layer.on('click', function(e){
              // console.log(root+"index.php/bangunan/get_bangunan_by_rtrw/" + feature.properties.kecamatan +"/"+feature.properties.kelurahan+"/"+feature.properties.rw+"/"+feature.properties.rt);
               // var content = '<div class="row"><div class="col-xs-3"><strong>Klasifikasi Kumuh</strong></div><div class="col-xs-5">'+ feature.properties.skoring_result +'</div></div><div class="row"><div class="col-xs-3"><strong>Kecamatan</strong></div><div class="col-xs-5">'+ feature.properties.kecamatan +'</div></div><div class="row"><div class="col-xs-3"><strong>Desa</strong></div><div class="col-xs-5">'+ feature.properties.desa +'</div></div><div class="row"><div class="col-xs-3"><strong>Luas</strong></div><div class="col-xs-5">'+ feature.properties.luas +' m2</div></div><div class="row"><div class="col-xs-3"><strong>Jumlah Penduduk</strong></div><div class="col-xs-5">'+ feature.properties.jml_penduduk +' jiwa</div></div><div class="row"><div class="col-xs-3"><strong>Jumlah Rumah</strong></div><div class="col-xs-5">'+ feature.properties.jml_rumah +'</div></div><div class="row"><div class="col-xs-3"><strong>Jumlah KK</strong></div><div class="col-xs-5">'+ feature.properties.jml_kk +'</div></div><div class="row"><div class="col-xs-3"><strong>Dominasi</strong></div><div class="col-xs-5">'+ feature.properties.dominasi +'</div></div>';
               // $('#data_kawasan').html(content);
              $('#penghuni').dataTable().fnDestroy();
              var table = $('#penghuni').dataTable( {
                      "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
                      "language": {
                             "sProcessing":   "Sedang proses...",
                             "sLengthMenu":   "Tampilan _MENU_ entri",
                             "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                             "sInfo":         "Tampilan _START_ sampai _END_ dari _TOTAL_ entri",
                             "sInfoEmpty":    "Tampilan 0 hingga 0 dari 0 entri",
                             "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                             "sInfoPostFix":  "",
                             "sSearch":       "Cari:",
                             "sUrl":          "",
                             "oPaginate": {
                                 "sFirst":    "Awal",
                                 "sPrevious": "Balik",
                                 "sNext":     "Lanjut",
                                 "sLast":     "Akhir"
                             }
                      },
                      // "scrollY": "500px",
                      // "scrollCollapse": true,
                      "paging": true,
                      "ajax": root+"index.php/bangunan/get_bangunan_by_rtrw/" + feature.properties.kecamatan +"/"+feature.properties.kelurahan+"/"+feature.properties.rw+"/"+feature.properties.rt,
                      "columns": [
                          { "data": "nomor" },
                          { "data": "no_imb" },
                          { "data": "a1a2" },
                          { "data": "a1a9" },
                          { "data": "a1a3" },
                          { "data": "a21" },
                          { "data": "a22" },
                          {"data" : "id",
                              "render" : function (data) {
                                return "<a class='btn btn-info btn-xs' href='"+ root +"index.php/bangunan/detail/" + data + "' target='_blank'>detail</a>"
                              }}
                          
                      ]
                  } );
              $('#modal').modal('show'); 
            })
          }
        });
        iht_layer.addTo(map);  
      }
  });
          //sembunyikan label
          var myIcon = L.ExtraMarkers.icon({
              prefix: 'fa', 
              markerColor: 'red', 
              icon: 'fa-building', 
              iconColor: 'white',
              shape: 'square'
          });
          map.on('zoomend', function(e){
              
              iht_layer.eachLayer(function (layerc) {
                var bounds = layerc.getBounds();
                // Get center of bounds
                var center = bounds.getCenter();
               //  label_rt = L.marker(center, {
               //     icon: L.divIcon({
               //         className: 'text-labels',   // Set class for CSS styling
               //         html: 'rt: '+layerc.feature.properties.rt+' rw: '+layerc.feature.properties.rw
               //     }),
               //     draggable: false,       // Allow label dragging...?
               //     zIndexOffset: 1000     // Make appear above other map features
               // });
              label_rt = L.marker(center, {icon:myIcon}).bindLabel('rt: '+layerc.feature.properties.rt+' rw: '+layerc.feature.properties.rw, {
                noHide: true
              });
                if(map.getZoom() >= 16){
                  label_rt.addTo(map);
                  console.log(map.getZoom());
                }
                else{
                  map.removeLayer(label_rt);
                  console.log(map.getZoom());
                  // label_rt.removeFrom(map);
                }
              });
          })
  // console.log(source);
  //custom contro
  L.Control.Kabupaten = L.Control.extend({
    options: {
        position: 'topleft',
    },
    onAdd: function (map) {
        var controlDiv = L.DomUtil.create('div', 'leaflet-control-command');
        var controlUI = L.DomUtil.create('div', 'leaflet-control-command-interior', controlDiv);
        controlUI.title = 'Perintah';
        return controlDiv;
    }
  });
  L.control.command = function (options) {
      return new L.Control.Kabupaten(options);
  };

//legend
var legend = L.control({position: 'bottomright'});

legend.onAdd = function (map) {

    var div = L.DomUtil.create('div', 'info-legend'),
        warna_total = ['#ffffff' , '#fef0d9', '#fdcc8a', '#fc8d59', '#e34a33', '#b30000'];
        warna_total = ['#fee8c8' , '#fdbb84', '#e34a33'];
        labels = ['-', '-', '-'];

    // loop through our density intervals and generate a label with a colored square for each interval
    for (var i = 0; i < warna_total.length; i++) {
        div.innerHTML +=
            '<i style="background:' + warna_total[i] + '"></i> ' +
            labels[i] + '<br>';
    }

    return div;
};

// legend.addTo(map);


  L.control.command().addTo(map);
  L.control.scale().addTo(map);
  L.control.zoom({
    position : 'topright'
  }).addTo(map);
  lc = L.control.locate({
      position: 'topright',
      follow: true,
      strings: {
          title: "Lokasi Anda"
      }
  }).addTo(map);

  map.on('startfollowing', function() {
      map.on('dragstart', lc._stopFollowing, lc);
  }).on('stopfollowing', function() {
      map.off('dragstart', lc._stopFollowing, lc);
  });

  $('.leaflet-control-command').html('<select name="kecamatan" class="form-control" id="kabupaten"><option value="">Pilih Kecamatan</option></select></br><select name="kelurahan" class="form-control" id="kelurahan"><option value="">Pilih Kelurahan</option></select></br>');
  // $('.leaflet-control-command').append('<select name="kecamatan" class="form-control" id="topografi"><option value="total">Total</option><option value="skoring_luas">luas</option></select>');
  $('.leaflet-control-command').append('<input type="text" name="nama" class="form-control" id="nama"/><button id="cari_nama" class="btn btn-info btn-xs">cari !</button>');
  $('.leaflet-control-command').append('</br><ul id="list_pemilik"></ul>');

  //layer control
  var baseLayers = {
    "Google Roadmap": google_roadmap,
    "Google Hybrid": google_hybrid,
    "Google Satellite": google_satelit,
    "Open Street Map": osm,
    "ESRI World Imagery": Esri_WorldImagery,
    "Mapbox Street": mapbox
  };
  
  var overlays = {
    "Industri": iht_layer,
    "Kabupaten": kabupaten_layer
  };

  L.control.layers(baseLayers, overlays).addTo(map); 

  //ganti kabupaten

  $('#kabupaten').change(function(){
    //ambil desa list
    list_kelurahan($('#kabupaten').val());
    labelKecamatan.setOpacity(0);
        //iht_layer.setOpacity(0); 
      kabupaten_layer.eachLayer(function (layer) {
        // Get bounds of polygon
        var bounds = layer.getBounds();
        // Get center of bounds
        var center = bounds.getCenter();
            if(layer.feature.properties.nomor == $('#kabupaten').val()){
              iht_layer.eachLayer(function (layerc) {
                if(layerc.feature.properties.kecamatan!=$('#kabupaten').val()){
                  //ngilangin kawasannya
                 // layerc.setOpacity(0);
                  layerc.setStyle(sembunyi);
                }else{
                  //balikin kawasannya
                  // style_kawasan['fillColor'] = layerc.feature.properties.color;
                  // console.log(style_kawasan);
                 
                  //layerc.setStyle(style_kawasan);
                  layerc.setStyle({
                    fillColor : warna_rw[layerc.feature.properties.rw], 
                    //fillColor : "blue", 
                    fillOpacity : 0.4, 
                    color : "white", 
                    weight : 1, 
                    opacity : 1, 
                    dashArray : 3
                  });
                }
              });
              kecamatan_layer.eachLayer(function (layerc) {
                if(layerc.feature.properties.no_kecamatan!=$('#kabupaten').val()){
                  //hilangkan desa
                  layerc.setStyle(sembunyi);
                }else{  
                   labelDesa.setOpacity(1);
                  
                  layerc.setStyle(style_kabupaten);
                }
              })
              map.panTo(center);
              layer.setStyle(style_kabupaten);
            }
            else{
              layer.setStyle(sembunyi);                                 
            }

            if($('#kabupaten').val()==""){
              labelDesa.setOpacity(0);
              list_kecamatan();
              labelKecamatan.setOpacity(1);
              layer.setStyle(style_kabupaten);
              iht_layer.eachLayer(function (layerc) {
               
                //layerc.setStyle(style_kawasan);
                layerc.setStyle({
                  fillColor : warna_rw[layerc.feature.properties.rw], 
                  //fillColor : "blue", 
                  fillOpacity : 0.4, 
                  color : "white", 
                  weight : 1, 
                  opacity : 1, 
                  dashArray : 3
                });
              });
              //balikin desanya
              kecamatan_layer.eachLayer(function (layerc) {
                //balikin kawasannya
                layerc.setStyle(sembunyi);
              })
            }
      });
  })
         

//ganti kelurahan


$('#kelurahan').change(function(){
  //ambil desa list
  labelKecamatan.setOpacity(0);
  labelDesa.setOpacity(0);
  //iht_layer.setOpacity(0); 
  kabupaten_layer.setStyle(sembunyi);
  kecamatan_layer.eachLayer(function (layer) {
    // Get bounds of polygon
    var bounds = layer.getBounds();
    // Get center of bounds
    var center = bounds.getCenter();

    if(layer.feature.properties.nomor == $('#kelurahan').val() && layer.feature.properties.no_kecamatan==$('#kabupaten').val()){
      iht_layer.eachLayer(function (layerc) {
        if(layerc.feature.properties.kelurahan==$('#kelurahan').val() && layerc.feature.properties.kecamatan==$('#kabupaten').val()){
          //layerc.setStyle(style_kawasan);
          layerc.setStyle({
            fillColor : warna_rw[layerc.feature.properties.rw], 
            //fillColor : "blue", 
            fillOpacity : 0.4, 
            color : "white", 
            weight : 1, 
            opacity : 1, 
            dashArray : 3
          });
        }
        else{
          // var style_baru = {
          //   fillColor : layerc.feature.properties.color, 
          //   fillOpacity : 0.9, 
          //   color : "white", 
          //   weight : 1, 
          //   opacity : 1, 
          //   dashArray : 3
          // }
          layerc.setStyle(sembunyi);                            
        }
      })
      map.panTo(center);
      layer.setStyle(style_kabupaten);       
    }
    else{
        layer.setStyle(sembunyi);                                 
    }

    if($('#kelurahan').val()==""){
     
    
      kabupaten_layer.eachLayer(function (layer_kab) {
        if(layer_kab.feature.properties.nomor == $('#kabupaten').val()){
          layer_kab.setStyle(style_kabupaten)
        }
      })
       kecamatan_layer.eachLayer(function (layer_kec) {
        if(layer_kec.feature.properties.no_kecamatan == $('#kabupaten').val()){
          layer_kec.setStyle(style_kabupaten)
        }
      })
      list_kelurahan($('#kabupaten').val());
      if(layer.feature.properties.nomor == $('#kabupaten').val()){
        layer.setStyle(style_kabupaten);
       // labelDesa.setOpacity(1);
      }
      iht_layer.eachLayer(function (layerc) {
        if(layerc.feature.properties.kecamatan!=$('#kabupaten').val()){
          //ngilangin kawasannya
          layerc.setStyle(sembunyi);
          }else{
                       // layerc.setStyle(style_kawasan); 
                       layerc.setStyle({
                         fillColor : warna_rw[layerc.feature.properties.rw], 
                         //fillColor : "blue", 
                         fillOpacity : 0.4, 
                         color : "white", 
                         weight : 1, 
                         opacity : 1, 
                         dashArray : 3
                       });          
           }
                       
             })
      
        }
  });

})
// ganti topografi
// $('#topografi').change(function(){
//     //ambil desa list
//     kategori = $('#topografi').val();
//     legend.removeFrom(map);
//      warna_total = ['#fef0d9', '#fdcc8a', '#fc8d59', '#e34a33', '#b30000'];
      
//       iht_layer.eachLayer(function (layerc) {
//         if(kategori == 'skoring_luas'){
//           warna = get_color_skoring(layerc.feature.properties.skoring_luas)
//           judul = '<p>Luas (Ha)</p>';
//           labels = ['< 0.5', '> 0.5 & < 1', '> 1 & < 1.5', '> 1.5 & < 2', '> 2'];
//         }else if(kategori == 'skoring_jumlah_rumah'){
//           warna = get_color_skoring(layerc.feature.properties.skoring_jumlah_rumah)
//           judul = '<p>Jumlah Rumah (Unit)</p>';
//           labels = ['< 50', '> 50 & < 100', '> 100 & < 150', '> 150 & < 200', '> 200'];
//         }else if(kategori == ''){
//           warna = get_color_skoring(0)
//         }   
//         var warna_kawasan = {
//           "fillColor": warna
//         };
//         layerc.setStyle(warna_kawasan);
       
//        // console.log(kategori)
//       })
//       legend.onAdd = function (map) {

//           var div = L.DomUtil.create('div', 'info-legend')
//            div.innerHTML += judul;
//           // loop through our density intervals and generate a label with a colored square for each interval
//           for (var i = 0; i < warna_total.length; i++) {
//               div.innerHTML +=
//                   '<i style="background:' + warna_total[i] + '"></i> ' +
//                   labels[i] + '<br>';
//           }

//           return div;
//       };
//       legend.addTo(map);
//      })

$('#cari_nama').click(function(){
    $.getJSON( root+"index.php/bangunan/cari_nama/"+$('#nama').val(), function( json ) {
    $('#list_pemilik').empty();
            
          $.each(json.bangunan, function( i, item ) {
            $('#list_pemilik').append('<li>'+item.nama+'<button onClick="ke_lokasi('+item.xe+','+item.ye+')">Ke Lokasi</button></li>')
            
          })
          
         
     });
     })
</script>
<!-- set up the modal to start hidden and fade in and out -->
<div class="modal fade bs-example-modal-lg" id="modal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Data Kawasan Dan Bangunan</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-xs-12">
            <div id="data_kawasan"></div>
            <table id="penghuni" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>no IMB</th>
                            <th>Nama Pemilik</th>
                            <th>Kontak</th>
                            <th>Alamat</th>
                            <th>Nama Pemohon</th>
                            <th>Alamat Bangunan</th>
                            <th>Aksi</th>
                          
                        </tr>
                    </thead>
                </table>
          </div>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->