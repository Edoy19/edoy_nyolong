<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark"><br>USER</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item">Home</li>
						<li class="breadcrumb-item"><a href="<?php echo base_url('C_Dashboard') ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url('C_Role') ?>">Role setting</a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url('C_user') ?>">User Setting</a></li>
						<li class="breadcrumb-item"><a href="<?php echo base_url('C_Role_Access') ?>">Role Access
								Setting</a></li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>

	<section class="content">

		<?php echo $this->session->flashdata('message');  ?>

		<div class="container-fluid">

			<!-- Script sini -->

			<div class="row">
				<div class="col-12">
					<!-- .col -->
					<div class="card">
						<!-- .card -->
						<div class="card-header">
							<!-- .cardhead -->
							<div id="accordion">
								<h4 class="card-title">
									<!-- Jika ketemu hak akses -->
									<?php if (!empty($hak_akses)) { ?>
										<!-- Jika allow add = true -->
										<?php if ($hak_akses->allow_add == 'on') { ?>
											<!-- menampilkan tombol add data-->
											<a data-toggle="modal" class="btn btn-primary" data-target="#modal-default" Onclick="view_modal('1','Add')" href="#">
												<i class="fa fa-plus"></i> Add Data
											</a>
										<?php } ?>
										<!-- /Jika allow add = true -->
									<?php } ?>
									<!-- /Jika ketemu hak akses -->
									<button class="btn btn-primary" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
										<i class="fa fa-binoculars"></i> Custom Filter
									</button>
								</h4>
							</div>
						</div> <!-- ./cardhead -->

						<!-- collapse -->
						<div id="collapseOne" class="panel-collapse collapse in">
							<div class="card-body">
								<!-- .card-body -->
								<div class="row">
									<div class="col-md-2">

										<!-- Date From -->
										<div class="form-group">

											<label>Date From</label>
											<div class="input-group date" data-date-format="YYYY-MM-DD" id="startdate" data-target-input="nearest">
												<input type="text" id="search_fromdate" class="form-control datetimepicker-input" data-target="#startdate" />
												<div class="input-group-append" data-target="#startdate" data-toggle="datetimepicker">
													<div class="input-group-text"><i class="fa fa-calendar"></i></div>
												</div>
											</div>

										</div>

										<!-- Date To -->
										<div class="form-group">
											<label>Date To</label>
											<div class="input-group date" data-date-format="YYYY-MM-DD" id="enddate" data-target-input="nearest">
												<input type="text" id="search_todate" class="form-control datetimepicker-input" data-target="#enddate" />
												<div class="input-group-append" data-target="#enddate" data-toggle="datetimepicker">
													<div class="input-group-text"><i class="fa fa-calendar"></i></div>
												</div>
											</div>
										</div>

										<button type="button" id="search" class="btn btn-block btn-success" data-toggle="collapse" data-target="#collapseOne">Search</button>

									</div>
								</div>
							</div>
						</div>
						<!-- ./collapse -->

						<div class="card-body">
							<!-- .card-body -->
							<table id="example1" class="table table-bordered table-hover display nowrap table-striped">
								<thead>
									<tr>
										<th>ACTION</th>
										<!-- <th>TRANSACTION ID</th> -->
										<th>NIK</th>
										<th>USERNAME</th>
										<th>KODE DEPARTMENT</th>
										<th>NAMA DEPARTMENT</th>
										<th>ROLE ID</th>
										<th>ROLE NAME</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div> <!-- /.card-body -->
					</div> <!-- . /card -->
				</div> <!-- . /col -->
			</div> <!-- . /row -->


			<!-- modal-Add / Update -->
			<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header bg-danger">
							<h4 class="modal-title" id="exampleModalLabel">ADD DATA</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
						</div>

						<!-- form -->
						<div class="modal-body table-responsive">
							<form class="form-horizntal" id="quickForm" role="form">
								<div class="card-body">
									<div class="container-fluid">


										<!-- TRANSACTION ID -->
										<div class="form-group">
											<div class="row">
												<div class="col-md-5">
													<label for="hdrid" hidden>TRANSACTION ID</label>
												</div>
												<div class="col-md-7">
													<input type="text" name="hdrid" class="form-control" id="hdrid" hidden>
												</div>
											</div>
										</div>

										<!-- NIK -->
										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<label for="nik">NIK</label>
												</div>
												<!-- <div class="col-md-8">
                                  <input type="text" name="nik" class="form-control" id="nik" >
                                </div> -->
												<div class="col-md-8">
													<select class="form-control select2" id="nik" name='nik' onchange="handleSelectChange_nik(event)" style="width: 100%;">
														<option value='0' selected="selected">-Select-</option>
														<!-- TAMBAHKAN KODINGAN DISINI -->
														<?php
														foreach ($nik as $value) {
															echo "<option value='$value->user_name'>$value->user_name-$value->name</option>";
														}
														?>
													</select>
												</div>

											</div>
										</div>
										<hr>

										<!-- USERNAME -->
										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<label for="username">USERNAME</label>
												</div>
												<div class="col-md-8">
													<div class="form-group">
														<input type="text" name="username" class="form-control" id="username">
													</div>
												</div>
											</div>
										</div>
										<hr>

										<!-- DEPARTMENT -->
										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<label>FIND DEPARTMENT</label>
												</div>
												<div class="col-md-8">
													<select class="form-control select2" id="kode_department" name="kode_department" onchange="handleSelectChange_dept(event)" style="width: 100%;">
														<option value='0' selected="selected">-Select-</option>
														<!-- TAMBAHKAN KODINGAN DISINI -->
														<?php
														foreach ($hasil as $value) {

															echo "<option value='$value->department_code'>$value->department_code-$value->department_name</option>";
															// echo "<option value='$value->id_menu'>$value->id_menu</option>";
														}
														?>
													</select>
												</div>
											</div>
										</div>


										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<label for="nama_department" hidden>NAMA DEPARTMENT</label>
												</div>
												<div class="col-md-8">
													<input type="text" name="nama_department" class="form-control" id="nama_department" placeholder="DEPARTMENT NAME" readonly>
												</div>
											</div>
										</div>
										<hr>

										<hr>
										<!-- ROLE -->
										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<label>FIND ROLE</label>
												</div>
												<div class="col-md-8">
													<select class="form-control select2" id="role_id" name="role_id" onchange="handleSelectChange_role(event)" style="width: 100%;">
														<option value='0' selected="selected">-Select-</option>
														<!-- TAMBAHKAN KODINGAN DISINI -->
														<?php
														foreach ($hasil2 as $value) {
															echo "<option value='$value->role_id'>$value->role_id-$value->role_name</option>";
															// echo "<option value='$value->id_menu'>$value->id_menu</option>";
														}
														?>
													</select>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="row">
												<div class="col-md-4">
													<label for="role_name" hidden>ROLE NAME</label>
												</div>
												<div class="col-md-8">
													<input type="text" name="role_name" class="form-control" id="role_name" placeholder="ROLE NAME" readonly>
												</div>
											</div>
										</div>


									</div>

								</div><!-- Close Container -->
						</div><!-- Close Card Body -->
						<div class="card-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary" id="btnsubmit">Save</button>

						</div>

						</form>
						<!-- /form  -->
					</div>

				</div>
				<!-- Close modal-content -->
			</div>
			<!-- Close modal-dialog -->
		</div>
		<!-- Close modal-Add / Update -->

		<!-- modal-delete -->
		<div class="modal fade" id="modal-delete">
			<div class="modal-dialog">
				<div class="modal-content bg-danger">
					<div class="modal-header">
						<h4 class="modal-title">Danger Modal</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>

					<div class="modal-body">
						<label id="iddelete2" hidden> </label>Apakah ingin delete <label id="iddelete"> </label> ?
					</div>

					<div class="modal-footer justify-content-between">
						<form action="#" method="post">
							<button type="button" id="delete" onclick="Delete_data()" class="btn btn-outline-light">Yes</button>
						</form>
						<button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
					</div>

				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->

</div><!-- /.container-fluid -->

<!-- Validasi input -->

<script type="text/javascript">
	$(document).ready(function() {

		$.validator.setDefaults({
			submitHandler: function() {

				//berhasil( "Form successful submitted!" );
				var status = $('#exampleModalLabel').text();

				if (status == "Add Data") {

					// Ajax insert data
					Simpan_data("Add");

				} else if (status == "Edit Data") {

					// Ajax update data
					Simpan_data("Update");

				} else {

					berhasil(status);

				}

			}
		});

		$('#quickForm').validate({
			rules: {
				nik: {
					required: true,
				},
				username: {
					required: true,
				},
				kode_department: {
					required: true,
				},
				nama_department: {
					required: true,
				},

				role_id: {
					required: true,
				},
				role_name: {
					required: true,
				},



			},
			messages: {
				nik: {
					required: "Please Input nik",
					minlength: 3
				},
				username: {
					required: "Please Input username",
					minlength: 3
				},
				kode_department: {
					required: "Please Input kode_department",
					minlength: 3
				},
				nama_department: {
					required: "Please Input nama_department",
					minlength: 3
				},
				role_id: {
					required: "Please Input role_id",
					minlength: 3
				},
				role_name: {
					required: "Please Input role_name",
					minlength: 3
				},


			},
			errorElement: 'span',
			errorPlacement: function(error, element) {
				error.addClass('invalid-feedback');
				element.closest('.form-group').append(error);
			},
			highlight: function(element, errorClass, validClass) {
				$(element).addClass('is-invalid');
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass('is-invalid');
			}
		});
	});
</script>



<script type="text/javascript">
	// Untuk Add,Edit,delete.

	function view_modal(hdrid1, status) {


		if (status == "Add") {

			$('#exampleModalLabel').text('Add Data'); // name view
			$('#quickForm')[0].reset(); // reset form   
			$('#btnsubmit').text('Save'); // name Save
			document.getElementById("btnsubmit").style.visibility = "visible"; // Visible button              
			//Ajax kosongkan data

		} else if (status == "Edit" || status == "View") {

			// Get data

			if (status == "View") {
				document.getElementById("btnsubmit").style.visibility = "hidden";
				$('#exampleModalLabel').text('View Data'); //name view              
			} else {
				$('#exampleModalLabel').text('Edit Data'); //name view 
				$('#btnsubmit').text('Update'); //name Update  
				document.getElementById("btnsubmit").style.visibility = "visible";
			}

			$('#hdrid').val(hdrid1);
			var hdrid = hdrid1;
			var form_data_edit = $('#quickForm').serializeArray();
			var field;
			var fieldvalue;

			// Ajax isi data
			$.ajax({
				url: "<?php echo base_url('C_User/ajax_getbyhdrid') ?>",
				method: "get",
				dataType: "JSON",
				data: {
					hdrid: hdrid1
				},
				success: function(data) {


					$('#nik').select2().val(data.nik).trigger('change');
					$('#username').val(data.username);
					$('#kode_department').select2().val(data.kode_department).trigger('change');
					$('#nama_department').val(data.nama_department);
					$('#role_id').select2().val(data.role_id).trigger('change');
					$('#role_name').val(data.role_name);

				},
				error: function(e) {
					alert(e);

				}
			});


		} else {

			// Get data
			$('#exampleModalLabel').text('View Data'); // Name view                        
			document.getElementById("btnsubmit").style.visibility = "hidden"; // Hidden button     
			vreadonly('#quickForm', true); // Function Read Only form = True           
			// alert(data_form("#quickForm"));

		}

	}
</script>

<script type="text/javascript">
	function Simpan_data($trigger) {

		// Form data
		var fdata = new FormData();

		// Form data collect name value
		var form_data = $('#quickForm').serializeArray();
		$.each(form_data, function(key, input) {
			fdata.append(input.name, input.value);
		});

		if ($('#my_images').val()) {
			var file_data = $('#my_images').prop('files')[0];
			fdata.append("file", file_data);
		} else {
			// alert('Please Upload File');
		}

		// Print_r(file_data);

		// Simpan or Update data
		var vurl;
		if ($trigger == 'Add') {
			vurl = "<?php echo base_url('C_User/ajax_add') ?>";
		} else {
			vurl = "<?php echo base_url('C_User/ajax_update') ?>";
		}

		$.ajax({
			url: vurl,
			method: "post",
			processData: false,
			contentType: false,
			data: fdata,
			success: function(data) {

				$('#modal-default').modal('hide');
				// Pesan berhasil
				berhasil(data.status);
				// Reset Form
				$('#quickForm')[0].reset();
				// location.reload();
				tabel.draw();

				//  if(!vurl=="Add"){
				//    $("#MyPopup").modal("hide");
				//  }

			},
			error: function(e) {
				gagal(e);
				//location.reload();
				//error
			}
		});

	}


	function Delete_data() {

		// Form data
		var fdata = new FormData();

		// Delete by Hdrid
		fdata.append('hdrid', $('#iddelete').text());
		// Url Post delete
		vurl = "<?php echo base_url('C_User/ajax_delete') ?>";

		// Post data
		$.ajax({
			url: vurl,
			method: "post",
			processData: false,
			contentType: false,
			data: fdata,
			success: function(data) {

				// Hide modal delete
				$('#modal-delete').modal('hide');
				// Delete rows datatables
				$('#example1').DataTable().row("#" + $('#iddelete2').text()).remove().draw();
				// Pesan berhasil
				berhasil(data.status);

			},
			error: function(e) {
				//Pesan Gagal
				gagal(e);
			}
		});

	}
</script>

<!-- ***************************** Handle Button di datatable (View,edit,delete,row selected) ***************************** -->
<script type="text/javascript">
	//  HDRID selected konfirmasiHapus
	$(document).on("click", ".konfirmasiHapus", function() {
		$('#iddelete').text($(this).attr("data-id"));
	})

	//  HDRID selected  konfirmasiEdit
	$(document).on("click", ".konfirmasiEdit", function() {
		view_modal($(this).attr("data-id"), 'Edit');
	})

	//  HDRID selected  konfirmasiEdit
	$(document).on("click", ".konfirmasiView", function() {
		view_modal($(this).attr("data-id"), 'View');
	})

	// ID Rows selected
	$('#example1').on('click', 'tr', function() {
		$('#iddelete2').text($('#example1').DataTable().row(this).id());
	});
</script>


<script type="text/javascript">
	$('.select2').select2();

	//Date range picker
	// $('#reservationdate').datetimepicker({
	// 	format: 'L'
	// });


	// //Date range picker
	// $('#startdate').datetimepicker({
	// 	format: 'L'
	// });

	// //Date range picker
	// $('#enddate').datetimepicker({
	// 	format: 'L'
	// });
</script>

<!-- <script type="text/javascript">
  document.getElementById('btnsubmit2').onclick = function() {
    var select = document.getElementById('multiple');
    var selected = [...select.options]
                      .filter(option => option.selected)
                      .map(option => option.value);
    alert(selected);
  } 
</script> -->

<!-- Handle datatable -->
<script type="text/javascript">
	var tabel = null;
	$(document).ready(function() {

		tabel = $('#example1').DataTable({
			"processing": true,
			"responsive": true,
			"serverSide": true,
			"ordering": true, // Set true agar bisa di sorting
			"order": [
				[0, 'asc']
			], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
			"ajax": {
				"url": "<?= base_url('C_User/view_data_where'); ?>", // URL file untuk proses select datanya
				"type": "POST",
				"data": function(data) {
					// data.searchByFromdate = $('#search_fromdate').val();
					// data.searchByTodate = $('#search_todate').val();
				}

			},
			"deferRender": true,
			"aLengthMenu": [
				[5, 10, 100, 1000, 10000, 100000, 1000000, 1000000000],
				[5, 10, 100, 1000, 10000, 100000, 1000000, "All"]
			], // Combobox Limit
			"columns": [{
					"data": 'hdrid',
					"sortable": false, //1
					render: function(data, type, row, meta) {
						// return meta.row + meta.settings._iDisplayStart + 1;
						return '<div class="btn btn-success btn-sm konfirmasiView" data-id="' +
							data +
							'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div> <div class="btn btn-danger btn-sm konfirmasiHapus" data-id="' +
							data +
							'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div> <div class="btn btn-primary btn-sm konfirmasiEdit" data-id="' +
							data +
							'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
					}
				},
				// {"data":"hdrid"},
				{
					"data": "nik"
				},
				{
					"data": "username"
				},
				{
					"data": "kode_department"
				},
				{
					"data": "nama_department"
				},
				{
					"data": "role_id"
				},
				{
					"data": "role_name"
				},

			],
		});

		// Search button
		$('#search').click(function() {


			if ($('#search_fromdate').val() != '' && $('#search_todate').val() != '') {
				tabel.draw();
			} else {
				gagal("Both Date is Required");
			}

		});


	});
</script>

<script type="text/javascript">
	function handleSelectChange_dept(event) {

		var data = $('#kode_department').select2('data')[0].text;

		if (data == '-Select-') {
			$('#nama_department').val('');
		} else {
			var res = data.split("-");
			$('#nama_department').val(res[1]);
		};


	}

	function handleSelectChange_role(event) {


		var data = $('#role_id').select2('data')[0].text;

		if (data == '-Select-') {
			$('#role_name').val('');
		} else {
			var res = data.split("-");
			$('#role_name').val(res[1]);
		};



	}

	function handleSelectChange_nik(event) {

		var data = $('#nik').select2('data')[0].text;

		if (data == '-Select-') {
			$('#username').val('');
		} else {
			var res = data.split("-");
			$('#username').val(res[1]);
		};



	}
</script>

<script type="text/javascript">
	function vreadonly(form, vboolean) {

		// alert(form);

		// var x = $(form).serializeArray();

		// $.each(x, function(i, field){

		//   if(field.name=="hdrid"){
		//     if(vboolean==true){
		//       document.getElementsByName(field.name)[0].readOnly=true;
		//     }else{
		//       document.getElementsByName(field.name)[0].readOnly=false;
		//     }
		//   }


		// });


	}
</script>