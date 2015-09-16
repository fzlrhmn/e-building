</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2015 &copy; Sistem Informasi IMB Bangunan Solo
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php echo base_url() ?>assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->

<script src="<?php echo base_url() ?>assets/global/plugins/jquery-migrate.min.js"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url() ?>assets/global/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/jquery.blockui.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/jquery.cokie.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/uniform/jquery.uniform.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url() ?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="<?php echo base_url() ?>assets/global/plugins/select2/select2.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-growl/jquery.bootstrap-growl.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="<?php echo base_url() ?>assets/global/scripts/app.js"></script>
<script src="<?php echo base_url() ?>assets/global/scripts/metronic.js"></script>
<script src="<?php echo base_url() ?>assets/admin/layout/scripts/layout.js"></script>
<script src="<?php echo base_url() ?>assets/admin/layout/scripts/quick-sidebar.js"></script>
<script src="<?php echo base_url() ?>assets/admin/layout/scripts/demo.js"></script>
<script src="<?php echo base_url() ?>assets/admin/pages/scripts/custom.js"></script>
<script src="<?php echo base_url() ?>assets/admin/pages/scripts/table-managed.js"></script>
<script src="<?php echo base_url() ?>assets/admin/pages/scripts/form-wizard.js"></script>

<script>
jQuery(document).ready(function() {       
   	Metronic.init(); // init metronic core components
	Layout.init(); // init current layout
	QuickSidebar.init(); // init quick sidebar
	Demo.init(); // init demo features
   	TableManaged.init();
   	FormWizard.init();
});

//initialize datepicker
$('.date-picker').datepicker({
    rtl: Metronic.isRTL(),
    autoclose: true
});

$(function(){
	// $('#milik-sendiri').hide();
	// $('#sewa-kontrak').hide();

	// $('#status-milik').change(function() {
	//     if ($(this).val() == '1') {
	//     	$('#sewa-kontrak').hide();
	// 		$('#milik-sendiri').show();

	//     } else if($(this).val() == '2'){
	//     	$('#milik-sendiri').hide();
	// 		$('#sewa-kontrak').show();
	//     }
	// });
})

$.bootstrapGrowl($('#growl_text').val(), {
    ele: 'body', // which element to append to
    type: $('#growl_type').val(), // (null, 'info', 'danger', 'success', 'warning')
    offset: {
        from: $('#growl_offset').val(),
        amount: parseInt($('#growl_offset_val').val())
    }, // 'top', or 'bottom'
    align: $('#growl_align').val(), // ('left', 'right', or 'center')
    width: parseInt($('#growl_width')), // (integer, or 'auto')
    delay: $('#growl_delay').val(), // Time while the message will be displayed. It's not equivalent to the *demo* timeOut!
    allow_dismiss: $('#glowl_dismiss').is(":checked"), // If true then will display a cross to close the popup.
    stackup_spacing: 10 // spacing between consecutively stacked growls.
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>