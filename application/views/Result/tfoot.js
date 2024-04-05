<tfoot>
	<tr id="tfooter">
		<th colspan="3"><strong>TOTAL</strong></th>
		<th colspan="1" ><strong><div id="ttl"></div></strong></th>
	</tr>
	<tr id="tfooter">
		<th colspan="3"><strong>BALANCE</strong></th>
		<th colspan="1" ><strong><div id="balance" ></div></strong></th>
	</tr>
</tfoot>

$(document).ready(function () {

	tabel3 = $('#detailCicilan').DataTable({


		"processing": true,
		"responsive": false,
		"serverSide": true,
		"autowidth": false,
		"info": true,
		"ordering": true, // Set true agar bisa di sorting
		"order": [
			[0, 'asc']
		], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
		"ajax": {
			// status=="Edit Data"
			"url": "<?= base_url('C_dn/View_cicilan_dn');?>",
			"type": "POST",
			"data": function (data) {
				// data.searchByFromdate = $('#search_fromdate').val();
				// data.searchByTodate = $('#search_todate').val();
				data.hdrid = $('#hdrid').val();
			}

		},
		"deferRender": true,
		"aLengthMenu": [
			[10, 100, 1000, 10000, 100000, 1000000, 1000000000],
			[10, 100, 1000, 10000, 100000, 1000000, "All"]
		], // Combobox Limit  

		"columns": [
			{
				"data": 'hdrid', "sortable": false, //1
				render: function (data, type, row, meta) {
					// return meta.row + meta.settings._iDisplayStart + 1;
					// return '<div class="btn btn-success btn-sm konfirmasiView" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div> <div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div> <div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
					mnu = '';
					// mnu=mnu+'<div class="btn btn-success btn-sm konfirmasiView" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div>';

					// Tombol Edit
					mnu = mnu + '<div class="btn btn-primary btn-sm konfirmasiEditcicilan" data-id="' + row.hdrid + "#" + row.no_cicilan + '" data-toggle="modal" data-target="#modal-cicilan"> <i class="fa fa-edit"></i></div>';

					//Tombol Delete
					mnu = mnu + '<div class="btn btn-danger btn-sm konfirmasiHapuscicilan" data-id="' + row.hdrid + "#" + row.no_cicilan + '" data-toggle="modal" data-target="#modal-delete-cicilan" > <i class="fa fa-trash"></i></div>';

					return mnu;

				}
			},
			{ "data": "no_cicilan" },
			{ "data": "month" },
			{ "data": "amount" },

		],


		"footerCallback": function (row, data, start, end, display) {
			var api = this.api(), data;

			// converting to interger to find total
			var intVal = function (i) {
				return typeof i === 'string' ?
					i.replace(/[\$,]/g, '') * 1 :
					typeof i === 'number' ?
						i : 0;
			};

			// Replace , value nya masih objectObject

			var api_rem = api
				.column(3)
				.data().toString().replace(/[,\s]/g, '');
			// console.log(api_rem);
			// console.log(JSON.stringify(api_rem));
			var monTotal = api
				.column(3)
				.data().reduce(function (a, b) {
					return intVal(a) + intVal(b);
					// return parseFloat(a) + parseFloat(b);
				}, 0);
			// Update footer by showing the total with the reference of the column index 
			var montotal1 = monTotal.toLocaleString(undefined, { minimumFractionDigits: 2 });
			$('#ttl').text(montotal1);
			var total = parseFloat(document.getElementById('amount_total').value.replace(/[,\s]/g, '')) - parseFloat(monTotal);
			var total_format = total.toLocaleString(undefined, { minimumFractionDigits: 2 });
			$('#balance').text(total_format);
			// console.log(monTotal);
			// $( api.column(1).footer() ).html(monTotal);

		},


	}); //add tfoot




	tabel = $('#example1').DataTable({
		"processing": true,
		"responsive": true,
		"serverSide": true,
		"ordering": true, // Set true agar bisa di sorting
		// <php if($menu_name =="Summary Debit Note"){ ?>
		"createdRow": function (row, data, dataIndex) {
			if (data.status_transaction == 'Waiting Settlement DN') {      //tanggal expire - tanggal sekarang
				$(row).css("background-color", "pink");       // jika sudah expire maka akan warna merah muda
			}
			else if (data.status_transaction == 'Debit Note Complete') {     //jika kondisi approve sudah done
				$(row).css("background-color", "#7FFFD4");    // maka akan warna hijau
			}
			else {

			}

		},
		// <php } ?>

		"order": [[0, 'asc']], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
		dom: "lfBrtip",
		buttons: [
			{
				extend: 'copyHtml5',
				className: 'btn btn-secondary',
				text: '<i class="fas fa-copy">&nbsp</i> Copy Data to Clipboard',
			},
			{
				extend: 'csvHtml5',
				filename: 'E-DNCN(Debit Note)',
				className: 'btn btn-info',
				text: '<i class="fas fa-file-csv">&nbsp</i> Export Data to CSV',
			},
			{
				extend: 'excelHtml5',
				filename: 'E-DNCN(Debit Note)',
				className: 'btn btn-success',
				text: '<i class="fas fa-file-excel">&nbsp</i> Export Data to Excel',
				customize: function (xlsx) {
					var sheet = xlsx.xl.worksheets['sheet1.xml'];
					// jQuery selector to add a border
					$('row c', sheet).attr('s', '25');
				}
			},
			{
				extend: 'pdfHtml5',
				filename: 'E-DNCN(Debit Note)',
				className: 'btn btn-danger',
				text: '<i class="fas fa-file-pdf">&nbsp</i> Export Data to PDF',
				orientation: 'landscape',
				pageSize: 'A4',
				download: 'open'
			}
		],
		"ajax":
		{
			"url": "<?= base_url('c_dn/view_data_where');?>", // URL file untuk proses select datanya
			"type": "POST",
			"data": function (data) {
				data.searchByFromdate = $('#search_fromdate').val();
				data.searchByTodate = $('#search_todate').val();
				data.menu_name = '<?php echo $menu_name ?>';
			}

		},
		"deferRender": true,
		"aLengthMenu": [[5, 10, 100, 1000, 10000, 100000, 1000000, 1000000000], [5, 10, 100, 1000, 10000, 100000, 1000000, "All"]], // Combobox Limit
		"columns": [
			{
				"data": 'hdrid', "sortable": false, //1
				render: function (data, type, row, meta) {
					// return meta.row + meta.settings._iDisplayStart + 1;
					// return '<div class="btn btn-success btn-sm konfirmasiView" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div> <div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div> <div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
					mnu = '';
					mnu = mnu + '<div class="btn btn-success btn-sm konfirmasiView" data-id="' + data + '" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div>';

                        // Tombol Edit
                        <? php if (!empty($hak_akses)) {
						if ($hak_akses -> allow_edit == 'on') { ?>
							mnu=mnu + '<div class="btn btn-primary btn-sm konfirmasiEdit" data-id="' + data + '" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
                        <? php }
					} ?>

                        //Tombol Delete
                        <? php if (!empty($hak_akses)) {
						if ($hak_akses -> allow_delete == 'on') { ?>
							mnu=mnu + '<div class="btn btn-danger btn-sm konfirmasiHapus" data-id="' + data + '" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div>';
                        <? php }
					} ?>
						mnu = mnu + ' <a class="btn btn-secondary btn-sm mr-2"  href="<?php echo base_url('C_Print_dn / print_dn ? var1 = ') . "' + data + ' &var2=' + row.hdrid + '&var3=1"?>"  target="_blank"> <i class="fas fa-print mr-1"></i>A4</a>'
                    
                        return mnu;

				}
			},

			// ---------------------------------- Datatables Macro Batas sini ---------------------------------

			{ "data": "hdrid" },
			{ "data": "date_of_issue" },
			{ "data": "name" },
			{ "data": "nik" },
			{ "data": "status_transaction" },
			{ "data": "section" },
			{ "data": "company_to" },
			{ "data": "company_address" },
			{ "data": "attention" },
			{ "data": "attention_departement" },
			{ "data": "detail_request" },
			{ "data": "reference" },
			{ "data": "budget" },
			{ "data": "account" },
			{ "data": "payment_terms" },
			{ "data": "banyak_cicilan" },
			{ "data": "transfer_to" },
			{ "data": "transfer_address" },
			{ "data": "currency" },
			{ "data": "idr" },
			{ "data": "usd" },
			{ "data": "eur" },
			{ "data": "swift_code" },
			{ "data": "account_name" },
			{ "data": "amount" },
			{ "data": "amount_total" },
			{ "data": "amount_in_word" },
			{ "data": "dpp" },
			{ "data": "vat" },
			// {"data":"vat_persen"},
			{ "data": "vat_nominal" },
			// {"data":"vat_total"},
			{ "data": "dmia_bank_account" },
			{ "data": "transfer_name" },
			{ "data": "bank_name" },
			{ "data": "account_number" },
			{ "data": "attachment1" },
			{ "data": "attachment2" },
			{ "data": "attachment3" },
			{ "data": "attachment4" },
			{ "data": "director" },
			{ "data": "title" },
			{ "data": "approver_dept_user" },
			{ "data": "approver_dept_finance" },
			{ "data": "finish_settlement_dn_bank" },
			{ "data": "finish_settlement_dn_amount" },
			{ "data": "finish_settlement_dn_date" },



			// ---------------------------------- / Datatables Macro Batas sini --------------------------------

		],


	});

	// Tabel Detail Problem
	tabel2 = $('#detailApproval').DataTable({
		"processing": true,
		"responsive": false,
		"serverSide": true,
		"autowidth": false,
		"info": true,
		"ordering": true, // Set true agar bisa di sorting
		"order": [
			[5, 'asc']
		], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
		"ajax": {
			"url": "<?= base_url('c_dn/view_data_whereapproval');?>",
			"type": "POST",
			"data": function (data) {
				// data.searchByFromdate = $('#search_fromdate').val();
				// data.searchByTodate = $('#search_todate').val();
				data.hdrid = $('#hdrid').val();
			}

		},
		"deferRender": true,
		"aLengthMenu": [
			[10, 100, 1000, 10000, 100000, 1000000, 1000000000],
			[10, 100, 1000, 10000, 100000, 1000000, "All"]
		], // Combobox Limit        
		"columns": [

			{ "data": "nik" },
			{ "data": "name" },
			{ "data": "department_code" },
			{ "data": "department_name" },
			{ "data": "office_email" },
			{ "data": "position_code" },
			{ "data": "position_name" },
			{ "data": "date_approve" },
		],
	});

	// Search button
	$('#search').click(function () {


		if ($('#search_fromdate').val() != '' && $('#search_todate').val() != '') {
			tabel.draw();
		}
		else {
			gagal("Both Date is Required");
		}

	});


});


// ========================================

<tfoot>
	<div class="from-group">
		<div class="row" style="text-align: center;">
			<div class="col-md-2">
				<label for="TotalQTY" class="form-control">TOTAL QTY</label>
			</div>
			<div class="col-md-2">
				<input type="text" name="" id="TotalQTY" class="form-control" disabled>
			</div>
			<div class="col-md-2">
				<label for="TotalNG" class="form-control">TOTAL QTY NG</label>
			</div>
			<div class="col-md-2">
				<input type="text" name="" id="TotalNG" class="form-control" disabled>
			</div>
			<div class="col-md-2">
				<label for="PercentNG" class="form-control">% NG</label>
			</div>
			<div class="col-md-2">
				<input type="text" name="" id="PercentNG" class="form-control" disabled>
			</div>
		</div>
	</div>
</tfoot>

$(document).ready(function () {
	// Ketika halaman dimuat, hitung TotalQTY untuk pertama kali
	calculateTotalQty();
	calculateTotalNG();

	// Ketika data di tabel berubah
	$('#TableResult').on('change', function () {
		// Hitung kembali TotalQTY
		calculateTotalQty();
		calculateTotalNG();
		calculatePercentNG();
	});
});

function calculateTotalQty() {
	var totalQty = 0;
	// Iterasi setiap baris di tabel
	$('#TableResult tbody tr').each(function () {
		// Ambil nilai qty dari kolom pertama (indeks 0)
		var qty = parseFloat($(this).find('td:eq(6)').text());
		// Tambahkan nilai qty ke totalQty
		if (!isNaN(qty)) {
			totalQty += qty;
		}
	});
	// Tampilkan totalQty di input yang sesuai
	$('#TotalQTY').val(totalQty);
}

function calculateTotalNG() {
	var totalNG = 0;
	// Iterasi setiap baris di tabel
	$('#TableResult tbody tr').each(function () {
		// Ambil nilai qty dari kolom pertama (indeks 0)
		var qty = parseFloat($(this).find('td:eq(7)').text());
		// Tambahkan nilai qty ke totalQty
		if (!isNaN(qty)) {
			totalNG += qty;
		}
	});
	// Tampilkan totalQty di input yang sesuai
	$('#TotalNG').val(totalNG);
}

function calculatePercentNG() {
	// Ambil nilai TotalNG dan TotalQTY
	var totalNG = parseFloat($('#TotalNG').val());
	var totalQty = parseFloat($('#TotalQTY').val());

	// Pastikan tidak ada pembagian dengan nol
	if (totalQty !== 0) {
		// Hitung PercentNG
		var percentNG = (totalNG / totalQty) * 100;
		// Tampilkan nilai PercentNG di input yang sesuai
		$('#PercentNG').val(percentNG.toFixed(2)); // Menggunakan toFixed(2) untuk menampilkan dua desimal
	} else {
		// Jika totalQty adalah nol, atur nilai PercentNG menjadi nol
		$('#PercentNG').val(0);
	}
}


$('#search_fromdate').on('change', function () {
	var value = $(this).val();
	$('#example1').DataTable().columns(8).search(value).draw();
});

$('#occ_date').on('change', function () {
	var value = $(this).val();

	// Ubah format tanggal dari input date ke format yang sesuai dengan sumber data Anda
	var formattedDate = formatDateForSearch(value);

	table.column('occ_date:name').search(formattedDate).draw();
});
// Fungsi untuk mengubah format tanggal dari input date ke format yang sesuai dengan sumber data Anda
function formatDateForSearch(inputDate) {
	var date = new Date(inputDate);
	var day = date.getDate();
	var month = date.getMonth() + 1; // Months are zero-based
	var year = date.getFullYear();

	// Format tanggal sesuai dengan kebutuhan (contoh: YYYY-MM-DD)
	var formattedDate = year + '-' + (month < 10 ? '0' : '') + month + '-' + (day < 10 ? '0' : '') + day;

	return formattedDate;
}


$(document).ready(function () {
	// Mengambil elemen-elemen yang diperlukan
	const radioYa = $('#masalah_customer_ada');
	const radioTidak = $('#masalah_customer_tidak');
	const inputTglBerangkat = $('#tgl_berangkat_customer');
	const inputTglDatang = $('#tgl_datang_customer');

	// Fungsi untuk menonaktifkan input tanggal
	function disableInputTanggal() {
		inputTglBerangkat.prop('disabled', true);
		inputTglDatang.prop('disabled', true);
	}

	// Fungsi untuk mengaktifkan input tanggal
	function enableInputTanggal() {
		inputTglBerangkat.prop('disabled', false);
		inputTglDatang.prop('disabled', false);
	}

	// Menambahkan event listener ke radio button
	radioYa.change(function () {
		if ($(this).prop('checked')) {
			enableInputTanggal();
		}
	});

	radioTidak.change(function () {
		if ($(this).prop('checked')) {
			disableInputTanggal();
		}
	});

	// Inisialisasi awal
	if (radioTidak.prop('checked')) {
		disableInputTanggal();
	}

	if ('#masalah_customer_ada') {
		$('#tgl_berangkat_customer').prop('disable', false);
		$('#tgl_datang_customer').prop('disable', false);
	}
	elseif('#masalah_customer_tidak'){
		$('#tgl_berangkat_customer').prop('disable', false);
		$('#tgl_datang_customer').prop('disable', false);
	}
});

