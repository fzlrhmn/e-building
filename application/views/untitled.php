
<div class="col-md-4">
	<?php if (file_exists(base_url('upload/'.$bangunan->nomor.'_'.$bangunan->b2)) == false): ?>
		<?php if (get_mime_by_extension(base_url('upload/'.$bangunan->nomor.'_'.$bangunan->b2)) != 'image/jpeg'): ?>
			<iframe src="<?php echo base_url('upload/'.$bangunan->nomor.'_'.$bangunan->b2) ?>"></iframe>
		<?php else: ?>
			<img src="<?php echo base_url('upload/'.$bangunan->nomor.'_'.$bangunan->b2) ?> " class="img-thumb" width="200">
		<?php endif ?>
	<?php else : ?>
		<!-- Jika Tidak Ada dokumen -->
	<?php endif ?>
</div>