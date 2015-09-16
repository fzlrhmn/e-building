/**
Custom module for you to write your own javascript functions
**/
var Custom = function () {

    // private functions & variables

    var table_bangunan = function() {
        // begin first table
        var table = $('#table_bangunan').DataTable({
            "processing": true,
            "ajax":root + "index.php/bangunan/ajax",
            "columns": [
                        { "data": "no", "orderable": true },
                        { "data": "nomor", "orderable": true },
                        { "data": "no_imb", "orderable": false },
                        { "data": "a1a2", "orderable": true },
                        { "data": "a1a9", "orderable": false },
                        { "data": "alamat", "orderable": false },
                        { "data": "a21", "orderable": true },
                        { "data": "alamat_bangunan", "orderable": false },
                        { "data": null,
                            "render" : function (data) {
                                return '<a href="'+ root + 'index.php/bangunan/' + data.id +'" class="btn btn-xs blue"><i class="fa fa-pencil"></i> Edit</a><br><br><a href="'+ root + 'index.php/bangunan/delete/' + data.id +'" onclick="return confirm(\'Apakah Anda Yakin Untuk Menghapus Data Ini?\')" class="btn btn-xs red"><i class="fa fa-trash"></i> Hapus</a>';
                            }
                            , "orderable": false
                        }
                    ],
            "lengthMenu": [
                [25, 50, 100, -1],
                [25, 50, 100, "All"] // change per page values here
            ],
            // set the initial value      
            "pagingType": "bootstrap_full_number",
            "language": {
                "sProcessing":   "Sedang memproses...",
                "sLengthMenu":   "Tampilkan _MENU_ entri",
                "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                "sInfoPostFix":  "",
                "sSearch":       "Cari:",
                "sUrl":          "",
                "oPaginate": {
                    "sFirst":    "Pertama",
                    "sPrevious": "Sebelumnya",
                    "sNext":     "Selanjutnya",
                    "sLast":     "Terakhir"
                }
            },
            "columnDefs": [{  // set default column settings
                'orderable': false,
                'targets': [0]
            }, {
                "searchable": false,
                "targets": [0]
            }] // set first column as a default sort by asc
        });

        $('#search_bangunan').submit(function(e) {
                e.preventDefault();
                formData = new FormData($(this)[0]);
                $.ajax({
                    url: root+'index.php/bangunan/search',
                      type: 'POST',
                      data: formData,
                      async:false,
                      cache:false,
                      processData: false,
                      contentType: false,
                      success:function (dataSet) {
                        $('#table_bangunan').DataTable().destroy();
                        $('#table_bangunan tbody').empty();
                        $('#table_bangunan').DataTable({
                            "processing": true,
                            "data": dataSet.data,
                            "columns": [
                                        { "data": "no", "orderable": true },
                                        { "data": "nomor", "orderable": true },
                                        { "data": "no_imb", "orderable": false },
                                        { "data": "a1a2", "orderable": true },
                                        { "data": "a1a9", "orderable": false },
                                        { "data": "alamat", "orderable": false },
                                        { "data": "a21", "orderable": true },
                                        { "data": "alamat_bangunan", "orderable": false },
                                        { "data": null,
                                            "render" : function (dataSet) {
                                                return '<a href="'+ root + 'index.php/bangunan/' + dataSet.id +'" class="btn btn-xs blue"><i class="fa fa-pencil"></i> Edit</a><br><br><a href="'+ root + 'index.php/bangunan/delete/' + dataSet.id +'" onclick="return confirm(\'Apakah Anda Yakin Untuk Menghapus Data Ini?\')" class="btn btn-xs red"><i class="fa fa-trash"></i> Hapus</a>';
                                            }
                                            , "orderable": false
                                        }
                                    ],
                            "lengthMenu": [
                                [25, 50, 100, -1],
                                [25, 50, 100, "All"] // change per page values here
                            ],
                            // set the initial value      
                            "pagingType": "bootstrap_full_number",
                            "language": {
                                "sProcessing":   "Sedang memproses...",
                                "sLengthMenu":   "Tampilkan _MENU_ entri",
                                "sZeroRecords":  "Tidak ditemukan data yang sesuai",
                                "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
                                "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
                                "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                                "sInfoPostFix":  "",
                                "sSearch":       "Cari:",
                                "sUrl":          "",
                                "oPaginate": {
                                    "sFirst":    "Pertama",
                                    "sPrevious": "Sebelumnya",
                                    "sNext":     "Selanjutnya",
                                    "sLast":     "Terakhir"
                                }
                            },
                            "columnDefs": [{  // set default column settings
                                'orderable': false,
                                'targets': [0]
                            }, {
                                "searchable": false,
                                "targets": [0]
                            }] // set first column as a default sort by asc
                        });

                        $('#search-modal').modal('hide');
                      }
                });
                
                return false;
            });

            $("#print_pdf").click(function() {
                var rowTable = [];
                $('#table_bangunan').DataTable().rows( { search:'applied' } ).data().each(function(value, index) {
                    rowTable.push( value.id );
                });
                console.log( JSON.stringify(rowTable) );
            });

        // tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); // modify table per page dropdown
    }

    var search_bangunan = function () {
        
    }

    // public functions
    return {

        //main function
        init: function () {
            //initialize here something.            
        },

        //some helper function
        table: function () {
            table_bangunan();
        },

        search_ajax: function () {
            search_bangunan();
        }

    };

}();

/***
Usage
***/
//Custom.init();
Custom.table();
Custom.search_ajax();