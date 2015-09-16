

$('#submit_form').submit(function(e) {
		e.preventDefault();
		formData = new FormData($(this)[0]);
		$.ajax({
			url: root+'index.php/bangunan/submit',
		      type: 'POST',
		      data: formData,
		      async:false,
		      cache:false,
		      processData: false,
		      contentType: false,
		      success:function (data) {
		      	console.log(data);
		      	$.bootstrapGrowl('Data Telah Dimasukkan', {
                    ele: 'body', // which element to append to
                    type: 'success', // (null, 'info', 'danger', 'success', 'warning')
                    offset: {
                        from: 'top',
                        amount: 100
                    }, // 'top', or 'bottom'
                    align: 'center', // ('left', 'right', or 'center')
                    width: 'auto', // (integer, or 'auto')
                    delay: '10000', // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
                    allow_dismiss: true, // If true then will display a cross to close the popup.
                    stackup_spacing: 10 // spacing between consecutively stacked growls.
                });
                // location.reload();
		      }
		});
		
		return false;
	});

$('#edit_form').submit(function(e) {
		e.preventDefault();
		formData = new FormData($(this)[0]);
		$.ajax({
			url: root+'index.php/bangunan/update',
		      type: 'POST',
		      data: formData,
		      async:false,
		      cache:false,
		      processData: false,
		      contentType: false,
		      success:function (data) {
		      	console.log(data);
                // location.reload();
		      }
		});
		
		return false;
	});

$('#kecamatan').change(function(e) {
		e.preventDefault();
		var id_kec = $('#kecamatan').val();
		if ( id_kec != '' ) {
			$.getJSON(root+'index.php/kelurahan/kecamatan/'+id_kec, function (data) {
					// console.log(data);
					$('#kelurahan').empty();
					$('#kelurahan').append('<option value="">-- Pilih Kelurahan --</option>');
					$.each(data, function (i, item) {
						$('#kelurahan').append('<option value="'+data[i].nomor+'">'+data[i].kelurahan+'</option>')
					})
				});
		}else{
			$('#kelurahan').empty();
		}
		return false;
	});

$('#kelurahan').change(function(e) {
		e.preventDefault();
		var id_kec = $('#kecamatan').val();
		var id_kel = $('#kelurahan').val();
		$.getJSON(root+'index.php/bangunan/nomor/'+id_kec+'/'+id_kel, function (data) {
				$('#nomor').val(data.nomor_bangunan);
				// console.log(data);
			});
		return false;
	});