<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->
		<h3 class="page-title">
		Peruntukan Ruang
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
										<button id="sample_editable_1_new" class="btn green">
										Tambah Data Baru <i class="fa fa-plus"></i>
										</button>
									</div>
								</div>
								<div class="col-md-6">
									<div class="btn-group pull-right">
										<button class="btn dropdown-toggle" data-toggle="dropdown">Pilihan Export Data <i class="fa fa-angle-down"></i>
										</button>
										<ul class="dropdown-menu pull-right">
											<li>
												<a href="javascript:;">
												Print </a>
											</li>
											<li>
												<a href="javascript:;">
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
						<table class="table table-striped table-bordered table-hover" id="">
						<thead>
							<tr>
								<th>
									 No
								</th>
								<th>
									 Peruntukan Ruang
								</th>
								<th>
									 Warna
								</th>
								
							</tr>
						</thead>
						<tbody>
								<?php $i=1; foreach ($peruntukan_ruang as $item): ?>
									<tr class="odd gradeX">
										<td width="10">
											<?php echo $i++ ?>
										</td>
										<td>
											<?php echo $item['nama'] ?>
										</td>
										<td>
											<?php echo $item['warna'] ?>
										</td>
									</tr>
								<?php endforeach ?>
						</tbody>
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