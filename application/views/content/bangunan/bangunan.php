<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">

		<!-- BEGIN PAGE HEADER-->
		<h3 class="page-title">
		Data Bangunan
		</h3>

		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row">
			<div class="col-md-12">
				<!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet box grey-cascade">
					<div class="portlet-body">
						<div class="table-toolbar">
							<div class="row">
								<div class="col-md-6">
									<div class="btn-group">
										<a href="<?php echo base_url('index.php/bangunan/create') ?>" id="sample_editable_1_new" class="btn green">
										Tambah Data Baru <i class="fa fa-plus"></i>
										</a>
									</div>
								</div>
								<div class="col-md-6">
									<div class="btn-group pull-right">
										<button href="#search-modal" class="btn blue" data-toggle="modal" data-target="#search-modal" style="margin-left: 15px;">Pencarian Lengkap <i class="fa fa-search"></i></button>
										<button class="btn dropdown-toggle" data-toggle="dropdown">Pilihan Export Data <i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="javascript:void(0);" id="print_pdf">
												Simpan Sebagai PDF </a>
											</li>
											<li>
												<a href="javascript:;">
												Export ke Excel </a>
											</li>
										</ul>
									</div>

								</div>
							</div>
						</div>
						<table class="table table-striped table-bordered table-hover" id="table_bangunan">
							<thead>
								<tr>
									<th>
										 No
									</th>
									<th>
										 No. Bangunan
									</th>
									<th>
										 No. IMB
									</th>
									<th>
										 Nama Pemilik
									</th>
									<th>
										 Kontak
									</th>
									<th>
										 Alamat
									</th>
									<th>
										 Nama Pemohon
									</th>
									<th>
										 Alamat Bangunan
									</th>
									<th>
										 Option
									</th>
								</tr>
							</thead>
							<tbody></tbody>
						</table>
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>
		
		<!-- END PAGE CONTENT-->
	</div>
</div>
<!-- END CONTENT -->

<!-- modal pencarian lengkap -->
<div id="search-modal" class="modal fade" role="dialog">
	<div class="modal-dialog">	
		<!-- Modal content-->
		<div class="modal-content">
			<div class="vertical-space"></div>
		    <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">×</button>
		        <h4 class="modal-title"> Pencarian Data IMB </h4>
		    </div><!-- /modal-header -->
		    <div class="vertical-space"></div>
		    <div class="modal-body">
		    	<form class="form-horizontal submit_form" id="search_bangunan">
		    		<div class="form-wizard">
						<div class="form-body">
		    				<div class="form-group">
			    				<label class="control-label col-md-4">Nama Pemilik</label>
			    				<div class="col-md-7">
			    					<input type="text" class="form-control" name="keyword" />
			    				</div>
		    				</div>

		    				<div class="form-group">
			    				<label class="control-label col-md-4">Kecamatan</label>
			    				<div class="col-md-7">
				    				<select name="a26" class="form-control" id="kecamatan">
				    					<option value="">-- Pilih Kecamatan --</option>
				    					<?php foreach ($kecamatan as $item): ?>
				    						<option value="<?php echo $item['nomor'] ?>"><?php echo $item['kecamatan'] ?></option>
				    					<?php endforeach ?>
				    				</select>
			    				</div>
		    				</div>

		    				<div class="form-group">
			    				<label class="control-label col-md-4">Kelurahan</label>
			    				<div class="col-md-7">
				    				<select name="a25" class="form-control" id="kelurahan">
				    					
				    				</select>
			    				</div>
		    				</div>

		    				<div class="form-group">
			    				<label class="control-label col-md-4">Peruntukan Tanah</label>
			    				<div class="col-md-7">
				    				<select class="form-control" name="peruntukan_tanah">
				    					<option value="">-- Pilih Peruntukan Tanah --</option>
				    					<?php foreach ($peruntukan_tanah as $item): ?>
				    						<option value="<?php echo $item['id'] ?>"><?php echo $item['nama'] ?></option>
				    					<?php endforeach ?>
				    				</select>
			    				</div>
		    				</div>

		    				<div class="form-group">
			    				<label class="control-label col-md-4">Peruntukan Ruang</label>
			    				<div class="col-md-7">
				    				<select class="form-control" name="peruntukan_ruang">
				    					<option value="">-- Pilih Peruntukan Ruang --</option>
				    					<?php foreach ($peruntukan_ruang as $item): ?>
				    						<option value="<?php echo $item['id'] ?>"><?php echo $item['nama'] ?></option>
				    					<?php endforeach ?>
				    				</select>
			    				</div>
		    				</div>

		    			</div>
		    		</div>
		    		<div class="col-md-4 col-md-offset-4">
		    			<button type="submit" class="btn blue col-md-12"> Cari <i class="fa fa-search" style="padding-left: 10px;"></i></button>
		    		</div>
		    	</form>
			</div><!-- /modal-body -->
			<div class="vertical-space"></div>
		    <div class="modal-footer">
			</div><!-- modal-footer -->
			<div class="vertical-space"></div>
		</div><!-- /modal-content -->
	</div><!-- /modal-dialog -->
</div>