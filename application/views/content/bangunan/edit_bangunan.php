BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
			Entry Data IMB
			</h3>
			<!-- BEGIN PAGE CONTENT-->
			<div class="row">
				<div class="col-md-12">
					<div class="portlet box blue" id="form_wizard_1">
						<!-- <div class="portlet-title">
							<div class="caption">
								<i class="fa fa-gift"></i> Status Kepemilikan Tanah <span class="step-title">&nbsp;
								<small> Tahap 1 / 3 </small></span>
							</div>
							<div class="tools hidden-xs">
								<a href="javascript:;" class="collapse">
								</a>
							</div>
						</div> -->
						<div class="portlet-body form">
							<form class="form-horizontal submit_form" id="edit_form">
								<input type="hidden" name="id" value="<?php echo $bangunan->id ?>">
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
																<label class="control-label col-md-5">Peruntukan Tanah </label>
																<div class="col-md-7">
																	<!-- <input type="text" class="form-control" name="peruntukan_tanah"/> -->
																	<select class="form-control" name="peruntukan_tanah">
																		<option value="">-- Pilih Peruntukan Tanah --</option>
																		<?php foreach ($peruntukan_tanah as $item): ?>
																			<option value="<?php echo $item['id'] ?>" <?php if ($bangunan->peruntukan_tanah == $item['id']): ?>
																				selected
																			<?php endif ?>><?php echo $item['nama'] ?></option>
																		<?php endforeach ?>
																	</select>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Peruntukan Ruang </label>
																<div class="col-md-7">
																	<!-- <input type="password" class="form-control" name="peruntukan_ruang" /> -->
																	<select class="form-control" name="peruntukan_ruang">
																		<option value="">-- Pilih Peruntukan Ruang --</option>
																		<?php foreach ($peruntukan_ruang as $item): ?>
																			<option value="<?php echo $item['id'] ?>" <?php if ($bangunan->peruntukan_ruang == $item['id']): ?>
																				selected
																			<?php endif ?>><?php echo $item['nama'] ?></option>
																		<?php endforeach ?>
																	</select>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">No. Hak Kepemilikan Tanah </label>
																<div class="col-md-7">
																	<input type="text" class="form-control" name="a1a1" value="<?php echo $bangunan->a1a1 ?>" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Nama Pemilik </label>
																<div class="col-md-7">
																	<input type="text" class="form-control" name="a1a2" value="<?php echo $bangunan->a1a2 ?>" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">No. Telepon Pemohon / Pemilik </label>
																<div class="col-md-7">
																	<input type="tel" class="form-control" name="a1a9" value="<?php echo $bangunan->a1a9 ?>" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Alamat </label>
																<div class="col-md-7">
																	<textarea class="form-control" rows="3" name="a1a3"><?php echo $bangunan->a1a3 ?> </textarea>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">RT </label>
																<div class="col-md-3">
																	<input type="text" class="form-control" name="a1a4" value="<?php echo $bangunan->a1a4 ?>" />
																</div>

																<label class="control-label col-md-1">RW </label>
																<div class="col-md-3">
																	<input type="text" class="form-control" name="a1a5" value="<?php echo $bangunan->a1a5 ?>" />
																</div>
															</div>
															
															<div class="form-group">
																<label class="control-label col-md-5">Kelurahan </label>
																<div class="col-md-7">
																	<input type="text" class="form-control" name="a1a6" value="<?php echo $bangunan->a1a6 ?>" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Kecamatan </label>
																<div class="col-md-7">
																	<input type="text" class="form-control" name="a1a7" value="<?php echo $bangunan->a1a7 ?>" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Kota / Kabupaten </label>
																<div class="col-md-7">
																	<input type="text" class="form-control" name="a1a8" value="<?php echo $bangunan->a1a8 ?>" />
																</div>
															</div>
														</div>
														<div class="col-md-6 col-xs-12">
															<h3 class="block"><strong>Sewa Kontrak</strong></h3>
															<hr/>
															<div class="form-group">
																<label class="control-label col-md-5">Nama Pemilik Asli </label>
																<div class="col-md-7">
																	<input type="text" class="form-control" name="a1b1" value="<?php echo $bangunan->a1b1 ?>" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Alamat Pemilik Asli </label>
																<div class="col-md-7">
																	<textarea class="form-control" rows="3" name="a1b2"><?php echo $bangunan->a1b2 ?></textarea>
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Nama Penyewa </label>
																<div class="col-md-7">
																	<input type="text" class="form-control" name="a1b3" value="<?php echo $bangunan->a1b3 ?>" />
																</div>
															</div>
															<div class="form-group">
																<label class="control-label col-md-5">Alamat Penyewa </label>
																<div class="col-md-7">
																	<textarea class="form-control" rows="3" name="a1b4"><?php echo $bangunan->a1b4 ?></textarea>
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
													<label class="control-label col-md-2">Kecamatan </label>
													<div class="col-md-3">
														<!-- <input type="text" class="form-control" name="a26"/> -->
														<select name="a26" class="form-control" id="kecamatan">
															<option value="">-- Pilih Kecamatan --</option>
															<?php foreach ($kecamatan as $item): ?>
																<option value="<?php echo $item['nomor'] ?>" <?php if ($bangunan->a26 == $item['nomor']): ?>
																	selected
																<?php endif ?>><?php echo $item['kecamatan'] ?></option>
															<?php endforeach ?>
														</select>
													</div>

													<label class="control-label col-md-3">Tahun Bangunan Berdiri </label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="tahun_bangunan_berdiri" value="<?php echo $bangunan->tahun_bangunan_berdiri ?>" />
													</div>	
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Kelurahan </label>
													<div class="col-md-3">
														<!-- <input type="text" class="form-control" name="a25"/> -->
														<select name="a25" class="form-control" id="kelurahan">
															<option value="">-- Pilih Kelurahan --</option>
															<?php foreach ($kelurahan as $item): ?>
																<option value="<?php echo $item['nomor'] ?>" <?php if ($bangunan->a25 == $item['nomor']): ?>
																	selected
																<?php endif ?>><?php echo $item['kelurahan'] ?></option>
															<?php endforeach ?>
														</select>
													</div>

													<label class="control-label col-md-3">No. IMB </label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="no_imb" value="<?php echo $bangunan->no_imb ?>" />
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Nomor </label>
													<div class="col-md-3">
													<input type="text" class="form-control" name="nomor" id="nomor" readonly  value="<?php echo $bangunan->nomor ?>" />
													</div>

													<label class="control-label col-md-3">No. IPR </label>
													<div class="col-md-3">
													<input type="text" class="form-control" name="no_ipr" value="<?php echo $bangunan->no_ipr ?>" />
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Nama Pemohon </label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="a21" value="<?php echo $bangunan->a21 ?>" />
													</div>

													<label class="control-label col-md-3">Cagar Budaya</label>
													<div class="col-md-3">
														<div class="radio-list">
															<label>
															<input type="radio" name="cagar_budaya" value="YA" data-title="Ya" <?php if ( $bangunan->cagar_budaya == 'YA'): ?>
																checked
															<?php endif ?>/>
															Ya </label>
															<label>
															<input type="radio" name="cagar_budaya" value="TIDAK" data-title="Tidak" <?php if ( $bangunan->cagar_budaya == 'TIDAK'): ?>
																checked
															<?php endif ?>/>
															Tidak </label>
														</div>
														<div id="form_gender_error">
														</div>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Alamat Bangunan </label>
													<div class="col-md-3">
														<textarea class="form-control" rows="3" name="a22"><?php echo $bangunan->a22 ?></textarea>
													</div>

													<label class="control-label col-md-3">Tahun Terbit IMB </label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="a212" value="<?php echo $bangunan->a212 ?>" />
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">RT </label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="a23" value="<?php echo $bangunan->a23 ?>" />
													</div>

													<label class="control-label col-md-3">Luas Bangunan Lantai Dasar </label>
													<div class="col-md-2">
														<input type="text" class="form-control" name="a213" value="<?php echo $bangunan->a213 ?>" />
													</div>
												</div>
												<div class="form-group">
													

													<label class="control-label col-md-2">RW </label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="a24" value="<?php echo $bangunan->a24 ?>" />
													</div>

													<label class="control-label col-md-3">Jumlah Lantai Bangunan </label>
													<div class="col-md-2">
														<input type="number" min="1" class="form-control" name="a214" value="<?php echo $bangunan->a214 ?>" />
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Kota / Kabupaten </label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="a27" value="<?php echo $bangunan->a27 ?>" />
													</div>

													<label class="control-label col-md-3">Peruntukan / Penggunaan Bangunan </label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="a215" value="<?php echo $bangunan->a215 ?>" />
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">No. Telepon Pemohon </label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="a28" value="<?php echo $bangunan->a28 ?>" />
													</div>

													<!-- <label class="control-label col-md-3">Tanggal </label>
													<div class="col-md-3">
														<input type="date" class="form-control" name="tanggal"/>
													</div> -->
													<label class="control-label col-md-3">Tanggal</label>
													<div class="col-md-3">
														<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
															<input type="text" class="form-control" readonly name="tanggal" value="<?php echo $bangunan->tanggal ?>" >
															<span class="input-group-btn">
															<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
														<!-- /input-group -->
														<span class="help-block">
														Pilih Tanggal </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Jangka Waktu Sewa </label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="a29" value="<?php echo $bangunan->a29 ?>" />
													</div>

													<label class="control-label col-md-3">Surveyor </label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="surveyor" value="<?php echo $bangunan->surveyor ?>" />
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">Perijinan yang Dimiliki </label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="a210" value="<?php echo $bangunan->a210 ?>" />
													</div>

													<!-- <label class="control-label col-md-3">Tanggal Selesai Input</label>
													<div class="col-md-3">
														<input type="date" class="form-control" name="tanggal_selesai_input"/>
													</div> -->
													<label class="control-label col-md-3">Tanggal Selesai Input</label>
													<div class="col-md-3">
														<div class="input-group date date-picker" data-date-format="yyyy-mm-dd">
															<input type="text" class="form-control" readonly name="tanggal_selesai_input" value="<?php echo $bangunan->tanggal_selesai_input ?>" >
															<span class="input-group-btn">
															<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
															</span>
														</div>
														<!-- /input-group -->
														<span class="help-block">
														Pilih Tanggal </span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-2">IMB</label>
													<div class="col-md-3">
														<div class="radio-list">
															<label>
															<input type="radio" name="a211" value="1" data-title="Ya" <?php if ( $bangunan->a211 == '1'): ?>
																checked
															<?php endif ?>/>
															Ya </label>
															<label>
															<input type="radio" name="a211" value="0" data-title="Tidak" <?php if ( $bangunan->a211 == '0'): ?>
																checked
															<?php endif ?>/>
															Tidak </label>
														</div>
														<div id="form_gender_error">
														</div>
													</div>

													<label class="control-label col-md-3">Biaya Retribusi</label>
													<div class="col-md-3">
														<input type="text" class="form-control" name="biaya_retribusi" value="<?php echo $bangunan->biaya_retribusi ?>" />
													</div>
												</div>
											</div>
											<div class="tab-pane" id="tab3">
												<h3 class="block">Lampiran Bangunan </h3>
												<hr/>

												<label class="control-label"><strong>Identitas Pemohon</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Pemohon Perorangan </label>
													<div class="col-md-4">
														<input type="file" name="b1a">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Pemohon Badan / Yayasan </label>
													<div class="col-md-4">
														<input type="file" name="b1b">
														</span>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Pajak Bumi & Bangunan</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Fotocopy PBB </label>
													<div class="col-md-4">
														<input type="file" name="b2">
														</span>
													</div>

												</div>
												<hr/>

												<label class="control-label"><strong>Status Kepemilikan Tanah</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">FC Sertifikat </label>
													<div class="col-md-4">
														<input type="file" name="b3a">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Perolehan Tahun </label>
													<div class="col-md-4">
														<input type="file" name="b3b">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">IMB </label>
													<div class="col-md-4">
														<input type="file" name="imb">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gambar Denah Lokasi / Ancer-ancer </label>
													<div class="col-md-4">
														<input type="file" name="b4a">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gambar Situasi </label>
													<div class="col-md-4">
														<input type="file" name="b4b">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gambar Denah Bangunan </label>
													<div class="col-md-4">
														<input type="file" name="b4c">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gambar Depan & Samping </label>
													<div class="col-md-4">
														<input type="file" name="b4d">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gambar Potongan Membujur & Melintang </label>
													<div class="col-md-4">
														<input type="file" name="b4e">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Gambar Detail Septictank </label>
													<div class="col-md-4">
														<input type="file" name="b4f">
														</span>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Kelengkapan Perhitungan Konstruksi Beton</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Kelengkapan Beton </label>
													<div class="col-md-4">
														<input type="file" name="b5">
														</span>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Kelengkapan Perhitungan Konstruksi Baja</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Kelengkapan Baja </label>
													<div class="col-md-4">
														<input type="file" name="b6">
														</span>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Permohonan Non Rumah Tinggal</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Permohonan dari BLH </label>
													<div class="col-md-4">
														<input type="file" name="b7a">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Permohonan dari ANDALAN </label>
													<div class="col-md-4">
														<input type="file" name="b7b">
														</span>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Foto Rumah</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Foto Bangunan </label>
													<div class="col-md-4">
														<input type="file" name="b81">
														</span>
													</div>
												</div>
												<hr/>

												<label class="control-label"><strong>Arsip</strong></label>
												<hr/>
												<div class="form-group">
													<label class="control-label col-md-3">Arsip IMB Baru </label>
													<div class="col-md-4">
														<input type="file" name="arsip">
														</span>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3">Catatan</label>
													<div class="col-md-4">
														<textarea class="form-control" rows="3" name="catatan"><?php echo $bangunan->catatan ?></textarea>
														<span class="help-block">
														</span>
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
												Simpan & Lanjutkan <i class="m-icon-swapright m-icon-white"></i>
												</a>
												<button class="btn green button-submit" type="submit">
												Simpan <i class="m-icon-swapright m-icon-white"></i>
												</button>
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
	<!-- END CONTENT