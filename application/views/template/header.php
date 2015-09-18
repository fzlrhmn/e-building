<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Data Bangunan</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta content="" name="description"/>
<meta content="" name="author"/>
<link rel="shortcut icon" href="favicon.ico"/>
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/> -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/global/plugins/select2/select2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
<!-- END PAGE LEVEL STYLES -->

<!-- BEGIN THEME STYLES -->
<link href="<?php echo base_url(); ?>assets/global/css/components-md.css" id="style_components" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/layout/css/themes/light2.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" type="text/css"/>
<link href="<?php echo base_url(); ?>assets/global/css/fixedHeader.dataTables.min.css"rel="stylesheet" type="text/css"/>
<!-- END THEME STYLES -->



<script src="<?php echo base_url() ?>assets/global/plugins/jquery.min.js"></script>
<script>
	var root = '<?php echo base_url() ?>';
</script>

<!-- BEGIN PAGE MAPS -->
<link rel="stylesheet" href="<?php echo base_url(); ?>map_assets/css/leaflet.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>map_assets/css/L.Control.Locate.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>map_assets/css/style_locate.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>map_assets/css/leaflet.label.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>map_assets/css/leaflet.extra-markers.css" />
<script src="<?php echo base_url(); ?>map_assets/js/leaflet.js"></script>
<script src="http://maps.google.com/maps/api/js?v=3.2&sensor=false"></script>
<script src="<?php echo base_url(); ?>map_assets/js/google-leaf.js"></script>
<script src="<?php echo base_url(); ?>map_assets/js/L.Control.Locate.js" ></script>
<script src="<?php echo base_url(); ?>map_assets/js/leaflet.label.js" ></script>
<script src="<?php echo base_url(); ?>map_assets/js/letterIcon.js" ></script>
<script src="<?php echo base_url(); ?>map_assets/js/leaflet.extra-markers.js"></script>
<!-- END PAGE MAPS -->

<style type="text/css">
	.gmnoprint a, .gmnoprint span {
	    display:none;
	}
	.gmnoprint div {
	    background:none !important;
	}
	a[href^="http://maps.google.com/maps"]{display:none !important}
	.leaflet-control-command
	{
	    width: 200px;
	    display: block;
	    padding: 10px;
	    /*border-radius: 4px;*/
	    /*-webkit-border-radius: 4px;*/
	    /*-moz-border-radius: 4px;*/
	    box-shadow: 0 1px 7px rgba(0, 0, 0, 0.65);
	    cursor: auto;
	    text-align: left;
	    background-color: #FFFFFF;
	}

	.leaflet-control-command-interior:hover
	{
	    background-color: #F4F4F4;
	}

	.info-legend
	{
	    background-color: #FFFFFF;
	    padding: 10px;
	    display: block;
	    border-radius: 4px;
	    -webkit-border-radius: 4px;
	    -moz-border-radius: 4px;
	    line-height: 18px;
	    color: #555;
	}

	.map{
	  opacity:    0.3; 
	  background: #000000; 
	  width:      100%;
	  height:     600px; 
	  z-index:    10;
	  top:        0; 
	  left:       0; 
	  position:   fixed; 
	}

	.info-legend i {
	    width: 18px;
	    height: 18px;
	    float: left;
	    margin-right: 8px;
	    opacity: 0.7;
	}

	.label{
	  position:  absolute;
	  background-color: transparent;
	  font-size: 14px;
	}

	.text-labels{
		width: 60px !important;
	}
</style>
</head>

<body class="page-md page-header-fixed page-sidebar-fixed page-quick-sidebar-over-content ">
<!-- BEGIN HEADER -->
<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<div class="menu-toggler sidebar-toggler">
				<!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
			</div>

			<a href="index.html">
				<img src="<?php echo base_url() ?>assets/admin/layout/img/logo.png" alt="logo" class="logo-default"/>
			</a>
			
		</div>
		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
					<img alt="" class="img-circle" src="<?php echo base_url() ?>assets/admin/layout/img/avatar3_small.jpg"/>
					<span class="username username-hide-on-mobile">
					Admin </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a href="<?php echo base_url() ?>">
							<i class="icon-user"></i> Data Pengguna </a>
						</li>
						<li>
							<a href="<?php echo base_url() ?>">
							<i class="icon-calendar"></i> Setting Password </a>
						</li>

						<li class="divider">
						</li>
						<li>
							<a href="<?php echo base_url('index.php/logout') ?>">
							<i class="icon-key"></i> Keluar </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
		<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
		<div class="page-sidebar navbar-collapse collapse" data-auto-scroll="false">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
			<!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
			<!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
			<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
			<!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
			<!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
			<ul class="page-sidebar-menu page-sidebar-menu-light" data-keep-expanded="false" data-auto-scroll="false" data-slide-speed="200">
				<!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
					<!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
					
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
				<li>
					<a href="<?php echo base_url('index.php/home') ?>">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('index.php/maps') ?>">
					<i class="icon-layers"></i>
					<span class="title">Peta</span>
					</a>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-note"></i>
					<span class="title">Master</span>
					<span class="selected"></span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url('index.php/kecamatan') ?>">
							Kecamatan</a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/kelurahan') ?>">
							Kelurahan</a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/tanah') ?>">
							Peruntukan Lahan</a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/ruang') ?>">
							Peruntukan Ruang</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-folder-alt"></i>
					<span class="title">Data IMB</span>
					<span class="selected"></span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url('index.php/bangunan/create') ?>">
							Entry Data IMB</a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/bangunan') ?>">
							Data Bangunan</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="javascript:;">
					<i class="icon-docs"></i>
					<span class="title">Laporan</span>
					<span class="selected"></span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo base_url('index.php/laporan') ?>">
							Peruntukan Tanah</a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/laporan/peruntukan_ruang') ?>">
							Peruntukan Ruang</a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/laporan/kecamatan') ?>">
							Kecamatan</a>
						</li>
						<li>
							<a href="<?php echo base_url('index.php/laporan/imb') ?>">
							IMB</a>
						</li>					
					</ul>
				</li>
				<li class="start ">
					<a href="javascript:;">
					<i class="icon-settings"></i>
					<span class="title">Pengaturan</span>
					<span class="arrow "></span>
					</a>
					<ul class="sub-menu">
						<li>
							<a href="data-pengguna.php">
							<i class="icon-bar-chart"></i>
							Data Pengguna</a>
						</li>
						<li>
							<a href="setting-password.php">
							<i class="icon-bulb"></i>
							Setting Password</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->