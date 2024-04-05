<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Dashboard - NiceAdmin Bootstrap Template</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?php echo base_url('assest/assets_niceadmin') ?>/img/favicon.png" rel="icon">
	<link href="<?php echo base_url('assest/assets_niceadmin') ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.gstatic.com" rel="preconnect">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/quill/quill.snow.css" rel="stylesheet">
	<link href="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/quill/quill.bubble.css" rel="stylesheet">
	<link href="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/simple-datatables/style.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo base_url('assest/assets_niceadmin') ?>/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
	<!-- Vendor JS Files -->
	<script src="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/apexcharts/apexcharts.min.js"></script>
	<script src="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/chart.js/chart.umd.js"></script>
	<script src="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/echarts/echarts.min.js"></script>
	<script src="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/quill/quill.min.js"></script>
	<script src="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/simple-datatables/simple-datatables.js"></script>
	<script src="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/tinymce/tinymce.min.js"></script>
	<script src="<?php echo base_url('assest/assets_niceadmin') ?>/vendor/php-email-form/validate.js"></script>

	<!-- Template Main JS File -->
	<script src="<?php echo base_url('assest/assets_niceadmin') ?>/js/main.js"></script>
</head>

<body class="sidebar-collapse">
	<div class="wrapper">
		<!-- Navbar -->
		<!-- <nav class="main-header navbar navbar-expand navbar-gray navbar-dark"> -->
		<nav class="navbar navbar-expand navbar-light bg-white topbar static-top">

			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<img src="<?= base_url('assets') ?>/denso_logo.png" style="width: 20%; height: 20%" alt="" class="nav-link" data-widget="pushmenu" href="#">
				<li class="nav-item">
				</li>
			</ul>
			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item dropdown">
					<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
						<i class="far fa-bell"></i>
						<span class="badge badge-warning navbar-badge">15</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
						<span class="dropdown-header"> Notifikasi Status</span>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item">
							<i class="far fa-check-circle text-success mr-2"></i> 4 new messages
							<span class="float-right text-muted text-sm">3 mins</span>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item">
							<i class="far fa-times-circle text-danger mr-2"></i>8 friend requests
							<span class="float-right text-muted text-sm">12 hours</span>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item">
							<i class="fas fa-info-circle text-info mr-2"></i> 3 new reports
							<span class="float-right text-muted text-sm">2 days</span>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-footer"></a>
					</div>
				</li>
				<li class="nav-item dropdown">

					<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
						<span>
							<?php
							if ($this->session->userdata('authenticated')) {
								echo $this->session->userdata('nama');
							} else {
								echo 'Anonymous';
							}
							?>
						</span>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
						<a class="dropdown-header"></a>
						<a class="text-center d-flex justify-content-center align-items-center">
							<h6>
								<?php
								if ($this->session->userdata('authenticated')) {
									echo $this->session->userdata('nama');
								} else {
									echo 'Anonymous';
								}
								?>
							</h6>
						</a>
						<a class="text-center d-flex justify-content-center align-items-center mb-2">
							<span>
								<?php
								if ($this->session->userdata('authenticated')) {
									echo $this->session->userdata('rolename');
								} else {
									echo '';
								}
								?>
							</span>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url('Auth/logout') ?>">
							<i class="fas fa-power-off text-danger mr-2"></i> Logout
						</a>
						<a class=" dropdown-footer"></a>
					</div>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->
