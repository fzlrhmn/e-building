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
					<div class="portlet box blue">
						<div class="portlet-body form">
							<form class="form-horizontal submit_form" id="submit_form">
								<div class="form-wizard">
									<div class="form-body">
										<div class="tabbable-line boxless tabbable-reversed">
											<ul class="nav nav-tabs">
												<li class="active">
													<a href="#tab1" data-toggle="tab">
													 Status Kepemilikan Tanah
													</a>
												</li>
												<li>
													<a href="#tab2" data-toggle="tab">
													 Status Bangunan 
													</a>
												</li>
												<li>
													<a href="#tab3" data-toggle="tab">
													 Lampiran Bangunan 
													</a>
												</li>
											</ul>
											<div class="tab-content">
												<!-- status kepemilikian tanah, milik sendiri-->
												<div class="tab-pane active" id="tab1">
													<!-- <hr/> -->
													<!-- <div class="form-group">
														<label class="control-label col-md-2" style="padding-top:0px;">Status Kepemilikan</label>
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
																	<label class="control-label col-md-5" style="padding-top:0px;">Peruntukan Tanah <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<strong>
																			<?php echo $bangunan[0]['penggunaan_tanah']; ?>
																		</strong>
																	</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">Peruntukan Ruang <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<!-- <input type="password" class="form-control" name="peruntukan_ruang" /> -->
																		<strong>
																			<?php echo $bangunan[0]['penggunaan_ruang']; ?>
																		</strong>
																	</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">No. Hak Kepemilikan Tanah <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<strong>
																			<?php echo $bangunan[0]['a1a1']; ?>
																		</strong>
																	</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">Nama Pemilik <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<strong>
																			<span><?php echo $bangunan[0]['a1a2']; ?></span>
																		</strong>
																	</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">No. Telp Pemohon / Pemilik <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<strong>
																			<?php echo $bangunan[0]['a1a9']; ?>
																		</strong>
																	</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">Alamat <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<strong>
																			<?php echo $bangunan[0]['a1a3']; ?>
																		</strong>
																	</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">RT <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-3">
																		<strong>
																			<?php echo $bangunan[0]['a1a4']; ?>
																		</strong>
																	</div>

																	<label class="control-label col-md-2" style="padding-top:0px;" style="padding-top:0px;">RW <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-2">
																		<strong>
																			<?php echo $bangunan[0]['a1a5']; ?>
																		</strong>
																	</div>
																</div>
																
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">Kelurahan <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<strong>
																			<?php echo $bangunan[0]['a1a6']; ?>
																		</strong>
																	</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">Kecamatan <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<strong>
																			<?php echo $bangunan[0]['a1a7']; ?>
																		</strong>
																	</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">Kota / Kabupaten <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<strong>
																			<?php echo $bangunan[0]['a1a8']; ?>
																		</strong>
																	</div>
																</div>
															</div>
															<div class="col-md-6 col-xs-12">
																<h3 class="block"><strong>Sewa Kontrak</strong></h3>
																<hr/>
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">Nama Pemilik Asli <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<strong>
																			<?php echo $bangunan[0]['a1b1']; ?>
																		</strong>
																	</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">Alamat Pemilik Asli <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<strong>
																			<?php echo $bangunan[0]['a1b2']; ?>
																		</strong>
																	</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">Nama Penyewa <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<strong>
																			<?php echo $bangunan[0]['a1b3']; ?>
																		</strong>
																	</div>
																</div>
																<div class="form-group">
																	<label class="control-label col-md-5" style="padding-top:0px;">Alamat Penyewa <span style="padding-left: 10px;">:</span></label>
																	<div class="col-md-7">
																		<strong>
																			<?php echo $bangunan[0]['a1b4']; ?>
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
														<label class="control-label col-md-2" style="padding-top:0px;">Kecamatan <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<!-- <input type="text" class="form-control" name="a26"/> -->
															<strong>
																<?php echo $bangunan[0]['kecamatan']; ?>
															</strong>
														</div>

														<label class="control-label col-md-3" style="padding-top:0px;">Tahun Bangunan Berdiri <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['tahun_berdiri_bangunan']; ?>
															</strong>
														</div>	
													</div>
													<div class="form-group">
														<label class="control-label col-md-2" style="padding-top:0px;">Kelurahan <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['kelurahan']; ?>
															</strong>
														</div>

														<label class="control-label col-md-3" style="padding-top:0px;">No. IMB <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['no_imb']; ?>
															</strong>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-2" style="padding-top:0px;">Nomor <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['nomor']; ?>
															</strong>
														</div>

														<label class="control-label col-md-3" style="padding-top:0px;">No. IPR <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['no_ipr']; ?>
															</strong>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-2" style="padding-top:0px;">Nama Pemohon <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['a21']; ?>
															</strong>
														</div>

														<label class="control-label col-md-3" style="padding-top:0px;">Cagar Budaya <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['cagar_budaya']; ?>
															</strong>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-2" style="padding-top:0px;">Alamat Bangunan <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['a22']; ?>
															</strong>
														</div>

														<label class="control-label col-md-3" style="padding-top:0px;">Tahun Terbit IMB <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['a212']; ?>
															</strong>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-2" style="padding-top:0px;">RT <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['a23']; ?>
															</strong>
														</div>

														<label class="control-label col-md-3" style="padding-top:0px;">Luas Bangunan Lantai Dasar <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-2">
															<strong>
																<?php echo $bangunan[0]['a213']; ?>
															</strong>
														</div>
													</div>
													<div class="form-group">
														

														<label class="control-label col-md-2" style="padding-top:0px;">RW <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['a24']; ?>
															</strong>
														</div>

														<label class="control-label col-md-3" style="padding-top:0px;">Jumlah Lantai Bangunan <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-2">
															<strong>
																<?php echo $bangunan[0]['a214']; ?>
															</strong>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-2" style="padding-top:0px;">Kota / Kabupaten <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['a27']; ?>
															</strong>
														</div>

														<label class="control-label col-md-3" style="padding-top:0px;">Peruntukan/Penggunaan Bangunan <span>:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['a215']; ?>
															</strong>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-2" style="padding-top:0px;">No. Telp Pemohon <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['a28']; ?>
															</strong>
														</div>

														<!-- <label class="control-label col-md-3" style="padding-top:0px;">Tanggal </label>
														<div class="col-md-3">
															<input type="date" class="form-control" name="tanggal"/>
														</div> -->
														<label class="control-label col-md-3" style="padding-top:0px;">Tanggal <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['tanggal']; ?>
															</strong>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-2" style="padding-top:0px;">Jangka Waktu Sewa <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['a29']; ?>
															</strong>
														</div>

														<label class="control-label col-md-3" style="padding-top:0px;">Surveyor <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['surveyor']; ?>
															</strong>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-2" style="padding-top:0px;">Perijinan yg Dimiliki <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['a210']; ?>
															</strong>
														</div>
														<label class="control-label col-md-3" style="padding-top:0px;">Tanggal Selesai Input <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['tanggal_selesai_input']; ?>
															</strong>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-2" style="padding-top:0px;">IMB <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['a211']; ?>
															</strong>
														</div>

														<label class="control-label col-md-3" style="padding-top:0px;">Biaya Retribusi <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-3">
															<strong>
																<?php echo $bangunan[0]['biaya_retribusi']; ?>
															</strong>
														</div>
													</div>
												</div>

												<div class="tab-pane" id="tab3">
													<h3 class="block"><strong>Lampiran Bangunan</strong></h3>
													<hr/>

													<label class="control-label"><strong>Identitas Pemohon</strong></label>
													<hr/>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Pemohon Perorangan <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Pemohon Badan / Yayasan <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<hr/>

													<label class="control-label"><strong>Pajak Bumi & Bangunan</strong></label>
													<hr/>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Pemohon Perorangan <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<hr/>

													<label class="control-label"><strong>Status Kepemilikan Tanah</strong></label>
													<hr/>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">FC Sertifikat <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Perolehan Tahun <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">IMB <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Gambar Denah Lokasi / Ancer-ancer<span>:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Gambar Situasi <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Gambar Denah Bangunan <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Gambar Depan & Samping <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Gambar Potongan Membujur & Melintang<span>:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Gambar Detail Septictank <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<hr/>

													<label class="control-label"><strong>Kelengkapan Perhitungan Konstruksi Beton</strong></label>
													<hr/>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Kelengkapan Beton <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<hr/>

													<label class="control-label"><strong>Kelengkapan Perhitungan Konstruksi Baja</strong></label>
													<hr/>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Kelengkapan Baja <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<hr/>

													<label class="control-label"><strong>Permohonan Non Rumah Tinggal</strong></label>
													<hr/>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Permohonan dari BLH <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Permohonan dari ANDALAN <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<hr/>

													<label class="control-label"><strong>Foto Rumah</strong></label>
													<hr/>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Foto Bangunan <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<hr/>

													<label class="control-label"><strong>Arsip</strong></label>
													<hr/>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Arsip IMB Baru <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<div class="form-group">
														<label class="control-label col-md-3" style="padding-top:0px;">Catatan <span style="padding-left: 10px;">:</span></label>
														<div class="col-md-4">
															<?php echo $bangunan[0]['a1a2']; ?>
														</div>
													</div>
													<hr/>
												</div>
											</div>
										</div><!-- /tabbable -->
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