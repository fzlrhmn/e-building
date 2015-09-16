<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Detail Data IMB
			</h3>
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box blue" id="form_wizard_1">
						<div class="portlet-body form">
							<form class="form-horizontal submit_form" id="submit_form">
								<div class="form-wizard">
									<div class="form-body">
										<ul class="nav nav-pills nav-justified steps">
											<li>
												<a href="#tab1" data-toggle="tab" class="step">
												<span class="number">
												1 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Status Kepemilikan Tanah </span>
												</a>
											</li>
											<li>
												<a href="#tab2" data-toggle="tab" class="step">
												<span class="number">
												2 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Status Bangunan </span>
												</a>
											</li>
											<li>
												<a href="#tab3" data-toggle="tab" class="step active">
												<span class="number">
												3 </span>
												<span class="desc">
												<i class="fa fa-check"></i> Lampiran Bangunan </span>
												</a>
											</li>
										</ul>
										<div id="bar" class="progress progress-striped" role="progressbar">
											<div class="progress-bar progress-bar-success">
											</div>
										</div>
										<div class="tab-content">
											<div class="alert alert-danger display-none">
												<button class="close" data-dismiss="alert"></button>
												You have some form errors. Please check below.
											</div>
											<div class="alert alert-success display-none">
												<button class="close" data-dismiss="alert"></button>
												Your form validation is successful!
											</div>
											<!-- status kepemilikian tanah, milik sendiri-->
											<div class="tab-pane active" id="tab1">
												<!-- <hr/> -->
												<!-- <div class="form-group">
													<label class="control-label col-md-2">Status Kepemilikan</label>
													<div class="col-md-4">
														<select name="" class="form-control" id="status-milik">
															<option value="">-- Pilih Status Kepemilikan --</option>
															<option value="1">Milik Sendiri</option>
															<option value="2">Sewa Kontrak</option>
														</select>
													</div>
												</div> -->
												<!-- <hr/> -->

												<section id="milik-sendiri">
													<div class="row">
														<div class="col-md-6 col-xs-12">
															<h3 class="block"><strong>Milik Sendiri</strong></h3>
															<hr/>
															<div class="form-group">
																<label class="control-label col-md-5">Peruntukan Tanah <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<!-- <input type="text" class="form-control" name="peruntukan_tanah"/> -->
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Peruntukan Ruang <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<!-- <input type="password" class="form-control" name="peruntukan_ruang" /> -->
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">No. Hak Kepemilikan Tanah <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Nama Pemilik <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">No. Telp Pemohon / Pemilik <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Alamat <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">RT <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-3">
																	<strong>
																		<?php ?>
																	</strong>
																</div>

																<label class="control-label col-md-2">RW <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-2">
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
															
															<div class="form-group">
																<label class="control-label col-md-5">Kelurahan <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Kecamatan <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Kota / Kabupaten <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
														</div>
														<div class="col-md-6 col-xs-12">
															<h3 class="block"><strong>Sewa Kontrak</strong></h3>
															<hr/>
															<div class="form-group">
																<label class="control-label col-md-5">Nama Pemilik Asli <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Alamat Pemilik Asli <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Nama Penyewa <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Alamat Penyewa <span style="padding-left: 10px;">:</span></label>
																<div class="col-md-7">
																	<strong>
																		<?php ?>
																	</strong>
																</div>
															</div>
														</div>
													</div>
												</section>

											</div>
											<div class="tab-pane" id="tab2">
												<h3 class="block"><strong>Status Bangunan</strong></h3>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-2">Kecamatan <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<!-- <input type="text" class="form-control" name="a26"/> -->
														<strong>
															<?php ?>
														</strong>
													</div>

													<label class="control-label col-md-3">Tahun Bangunan Berdiri <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>	
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Kelurahan <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>

													<label class="control-label col-md-3">No. IMB <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Nomor <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>

													<label class="control-label col-md-3">No. IPR <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Nama Pemohon <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>

													<label class="control-label col-md-3">Cagar Budaya <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Alamat Bangunan <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>

													<label class="control-label col-md-3">Tahun Terbit IMB <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">RT <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>

													<label class="control-label col-md-3">Luas Bangunan Lantai Dasar <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-2">
														<strong>
															<?php ?>
														</strong>
													</div>
												</div>
												<div class="form-group">
													

													<label class="control-label col-md-2">RW <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>

													<label class="control-label col-md-3">Jumlah Lantai Bangunan <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-2">
														<strong>
															<?php ?>
														</strong>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Kota / Kabupaten <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>

													<label class="control-label col-md-3">Peruntukan/Penggunaan Bangunan <span>:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">No. Telp Pemohon <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>

													<!-- <label class="control-label col-md-3">Tanggal </label>
													<div class="col-md-3">
														<input type="date" class="form-control" name="tanggal"/>
													</div> -->
													<label class="control-label col-md-3">Tanggal <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Jangka Waktu Sewa <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>

													<label class="control-label col-md-3">Surveyor <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Perijinan yg Dimiliki <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>

													<!-- <label class="control-label col-md-3">Tanggal Selesai Input</label>
													<div class="col-md-3">
														<input type="date" class="form-control" name="tanggal_selesai_input"/>
													</div> -->
													<label class="control-label col-md-3">Tanggal Selesai Input <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">IMB <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>

													<label class="control-label col-md-3">Biaya Retribusi <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-3">
														<strong>
															<?php ?>
														</strong>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab3">
												<h3 class="block">Lampiran Bangunan </h3>
												<hr/>

												<label class="control-label"><strong>Identitas Pemohon</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Pemohon Perorangan <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Pemohon Badan / Yayasan <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Pajak Bumi & Bangunan</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Pemohon Perorangan <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Status Kepemilikan Tanah</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">FC Sertifikat <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Perolehan Tahun <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">IMB <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gambar Denah Lokasi / Ancer-ancer<span>:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gambar Situasi <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gambar Denah Bangunan <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gambar Depan & Samping <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gambar Potongan Membujur & Melintang<span>:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gambar Detail Septictank <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Kelengkapan Perhitungan Konstruksi Beton</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Kelengkapan Beton <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Kelengkapan Perhitungan Konstruksi Baja</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Kelengkapan Baja <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Permohonan Non Rumah Tinggal</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Permohonan dari BLH <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Permohonan dari ANDALAN <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Foto Rumah</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Foto Bangunan <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Arsip</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Arsip IMB Baru <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Catatan <span style="padding-left: 10px;">:</span></label>
													<div class="col-md-4">
														<?php ?>
													</div>
												</div>
												<hr/>

											</div>
										</div>
									</div>
									<div class="form-actions">
										<div class="row">
											<div class="col-md-offset-3 col-md-9">
												<a href="javascript:;" class="btn default button-previous">
												<i class="m-icon-swapleft"></i> Sebelumnya </a>
												<a href="javascript:;" class="btn blue button-next">
												Selanjutnya <i class="m-icon-swapright m-icon-white"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTENT-->
		</div>
	</div>
	<!-- END CONTENT -->