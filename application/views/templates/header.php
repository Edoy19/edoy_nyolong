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
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">
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
	<!-- Convert Money To Word -->
	<!-- <script src="<php echo base_url() ?>assets/plugins/convert_money/jquery.min.js"></script>
  <script src="<php echo base_url() ?>assets/plugins/convert_money/num-to-words.js"></script> -->
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
	<script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<!-- <script src="<php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script> -->
	<!-- AdminLTE for demo purposes -->
	<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

	<!-- Label For Chart -->
	<script src="<?php echo base_url() ?>assets/plugins/label-charts/labels.js"></script>

	<!-- Sum datatables -->
	<script src="<?php echo base_url() ?>assets/plugins/sum-datatables/sum().js"></script>


</head>

<!-- <body class="hold-transition sidebar-mini layout-fixed"> -->

<body class="sidebar-collapse">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-red navbar-dark">

			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?php echo base_url('C_Dashboard') ?>" class="nav-link"><i class="fa fa-home"></i> Home</a>
				</li>
				<li class="nav-item d-none d-sm-inline-block">
					<a href="<?php echo base_url('assets/userguide/USER GUIDE DNCN.pdf') ?>" class="nav-link"><i class="fa fa-id-card"></i> Guide Application</a> <!--link ke guide application -->
				</li>
			</ul>

			<!-- SEARCH FORM -->
			<form class="form-inline ml-3">
				<div class="input-group input-group-sm">
					<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
					<div class="input-group-append">
						<button class="btn btn-navbar" type="submit">
							<i class="fas fa-search"></i>
						</button>
					</div>
				</div>
			</form>

			<!-- Right navbar links -->
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<!-- <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a> -->
					<a href="<?php echo base_url('Auth/logout') ?>" class="nav-link">
						<i class="nav-icon fa fa-power-off text-warning"> </i>
					</a>
				</li>
			</ul>

		</nav>
		<!-- /.navbar -->