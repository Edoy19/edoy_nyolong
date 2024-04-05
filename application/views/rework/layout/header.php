<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png">
	<title>E-REWORK</title>

	<!-- ########## CSS ##########-->
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<!-- DataTables Button-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	<!-- SweetAlert2 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
	<!-- Toastr -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.css">
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

	<!-- fullCalendar -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar/main.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar-daygrid/main.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar-timegrid/main.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar-bootstrap/main.min.css">

	<!-- daterange picker -->
	<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css"> -->
	<!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Bootstrap Color Picker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<!-- Bootstrap4 Duallistbox -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">


	<!-- ########## Javascript ##########-->
	<!-- jQuery -->
	<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- jquery-validation -->
	<script src="<?php echo base_url() ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
	<!-- Convert Number To Word -->
	<script src="<?php echo base_url() ?>assets/plugins/convert_money/num-to-words.js"></script>
	<!-- <script src="<php echo base_url() ?>assets/plugins/convert_money/jquerycv.min.js"></script> -->
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap3-editable/js/bootstrap-editable.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap3-editable/js/bootstrap-editable.min.js"></script>

	<!-- jquery-input-mask -->
	<script src="<?php echo base_url() ?>assets/plugins/jquery-mask/jquery.mask.min.js"></script>

	<!-- DataTables -->
	<script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

	<!-- DataTables Button-->
	<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>

	<!-- fullCalendar 2.2.5 -->
	<script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/fullcalendar/main.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/fullcalendar-daygrid/main.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/fullcalendar-timegrid/main.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/fullcalendar-interaction/main.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/fullcalendar-bootstrap/main.min.js"></script>


	<!-- SweetAlert2 -->
	<script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
	<!-- Toastr -->
	<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
	<!-- Select2 -->
	<script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
	<!-- Bootstrap4 Duallistbox -->
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
	<!-- InputMask -->
	<script src="<?php echo base_url() ?>assets/plugins/moment/moment.min.js"></script>
	<script src="<?php echo base_url() ?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
	<!-- date-range-picker -->
	<script src="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- bs-custom-file-input -->
	<script src="<?php echo base_url() ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
	<!-- bootstrap color picker -->
	<script src="<?php echo base_url() ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<!-- ChartJS -->
	<script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
	<!-- Tempusdominus Bootstrap 4 -->
	<!-- <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
	<!-- AdminLTE App -->
	<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

	<!-- Label For Chart -->
	<script src="<?php echo base_url() ?>assets/plugins/label-charts/labels.js"></script>

	<!-- Sum datatables -->
	<script src="<?php echo base_url() ?>assets/plugins/sum-datatables/sum().js"></script>

	<script src="https://cdn.datatables.net/plug-ins/2.0.2/api/sum().js"></script>


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
					<div class="dropdown-menu dropdown-menu-md dropdown-menu-right" style="width: auto;">
						<span class="dropdown-header"> Notifikasi Status</span>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item">
							<i class="far fa-check-circle text-success mr-2"></i> 4 new messages
							<!-- <span class="float-right text-muted text-sm">3 mins</span> -->
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item">
							<i class="far fa-times-circle text-danger mr-2"></i>8 friend requests
							<!-- <span class="float-right text-muted text-sm">12 hours</span> -->
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item">
							<i class="fas fa-info-circle text-info mr-2"></i> 3 new reports
							<!-- <span class="float-right text-muted text-sm">2 days</span> -->
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
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="width:auto;">
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