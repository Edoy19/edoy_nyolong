  <!-- css .modal scroll -->
  <style>
  	.modal {
  		overflow-y: auto;
  	}
  </style>
  <!-- /css .modal scroll -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

  	<!-- Content Header (Page header) -->
  	<section class="content-header">
  		<div class="container-fluid"><!-- container pada judul form-->
  			<div class="row mb-2"><!-- row pada halaman pada  ada judul form -->
  				<div class="col-sm-6">
  					<h1 class="m-0 text-dark">
  						<?php echo ucwords($menu_name) ?></h1><!-- judul form -->
  				</div><!-- /.col -->
  				<div class="col-sm-6">
  					<ol class="breadcrumb float-sm-right">
  						<li class="breadcrumb-item"><a href="<?php echo base_url('C_Dashboard') ?>">Home</a></li>
  						<li class="breadcrumb-item"><a href="<?php echo base_url('C_dn') ?>">Debit Note</a></li>
  						<li class="breadcrumb-item"><a href="<?php echo base_url('C_cn') ?>">Credit Note</a></li>
  					</ol>
  				</div><!-- /.col -->
  			</div><!-- /.row -->
  		</div><!-- /.container-fluid -->
  	</section>

  	<!-- Main content -->
  	<section class="content">
  		<div class="container-fluid">
  			<div class="row">

  				<!-- <php echo $this->session->flashdata('msg'); ?> -->

  				<!-- ##################################### Batas Row 1 #####################################  -->

  				<div class="col-12"> <!-- .col -->

  					<div class="card"> <!-- .card -->

  						<!-- .card-header -->
  						<div class="card-header">
  							<!-- <h3 class="card-title">DataTable with minimal features & hover style</h3> -->
  							<div class="row">
  								<div class="col-md-12">
  									<div class="card">
  										<div class="card-header">
  											<div id="accordion">
  												<!-- we are adding the .class so bootstrap.js collapse plugin detects it -->
  												<div class="card card-primary">

  													<div class="card-header">

  														<h4 class="card-title">


  															<!-- Jika ketemu hak akses -->
  															<?php if (!empty($hak_akses)) { ?>
  																<!-- Jika allow add = true -->
  																<?php if ($hak_akses->allow_add == 'on') { ?>
  																	<!-- menampilkan tombol add data-->
  																	<a data-toggle="modal" data-target="#modal-default" Onclick="view_modal('1','Add')" href="#">
  																		<i class="fa fa-plus"></i> Add Data
  																	</a>
  																<?php } ?>
  																<!-- /Jika allow add = true -->
  															<?php } ?>
  															<!-- /Jika ketemu hak akses -->

  															<!-- Jika ketemu hak akses -->
  															<?php if (!empty($hak_akses)) { ?>
  																<!-- Jika allow_import = true -->
  																<?php if ($hak_akses->allow_import == 'on') { ?>
  																	<a data-toggle="modal" data-target="#modal-import" href="#">
  																		<i class="fa fa-upload"></i> Import Data
  																	</a>
  																<?php } ?>
  																<!-- /Jika allow add = true -->
  															<?php } ?>
  															<!-- /Jika ketemu hak akses -->

  															<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
  																<i class="fa fa-binoculars"></i> Custom Filter
  															</a>

  														</h4>

  													</div>

  													<div id="collapseOne" class="panel-collapse collapse in">
  														<div class="card-body">

  															<!-- Date -->
  															<div class="form-group">

  																<label>Date From:</label>

  																<div class="input-group date" data-date-format="YYYY-MM-DD" id="startdate" data-target-input="nearest"> <!--type tanggal-->
  																	<input type="text" id="search_fromdate" class="form-control datetimepicker-input" data-target="#startdate" /> <!--type mulai tanggal berapa-->
  																	<div class="input-group-append" data-target="#startdate" data-toggle="datetimepicker">
  																		<div class="input-group-text"><i class="fa fa-calendar"></i></div><!--input tanggal-->
  																	</div>
  																</div>

  															</div>

  															<!-- Date To-->
  															<div class="form-group">
  																<label>Date To:</label>
  																<div class="input-group date" data-date-format="YYYY-MM-DD" id="enddate" data-target-input="nearest"> <!--type tanggal-->
  																	<input type="text" id="search_todate" class="form-control datetimepicker-input" data-target="#enddate" /> <!--type sampai tanggal berapa-->
  																	<div class="input-group-append" data-target="#enddate" data-toggle="datetimepicker">
  																		<div class="input-group-text"><i class="fa fa-calendar"></i></div><!--input tanggal-->
  																	</div>
  																</div>
  															</div>

  															<button type="button" id="search" class="btn btn-block btn-success" data-toggle="collapse" data-target="#collapseOne">Search</button> <!--button untuk search-->

  														</div>
  													</div>
  												</div>
  											</div>
  										</div>
  									</div>
  									<!-- /.card -->
  								</div>
  								<!-- /.col -->
  							</div>
  							<!-- /.row -->
  							<!-- END ACCORDION & CAROUSEL-->
  						</div>
  						<!-- /.card-header -->

  						<div class="card-body"> <!-- .card-body -->

  							<table id="example1" class="table table-bordered display nowrap table-striped"> <!--jenis table-->

  								<thead>
  									<?php if ($menu_name == 'Summary Debit Note') { ?>
  										<tr>
  											<td colspan="1"> </td>
  											<!-- <td colspan="10">  -->
  											<div class="bg-teal color-palette"> <span>Green=Close</span></div> <!--untuk reminder kalau udah selesai-->
  											<div class="bg-pink color-palette"> <span>Pink=Waiting Settlement By Finance</span></div> <!--untuk reminder kalau belum di approver finance-->
  											<div class="bg-white color-palette"> <span>White=On Progress</span> </div><!--untuk reminder masih on progress-->
  											</td>
  										</tr>
  									<?php } ?>
  									<tr>

  										<!-- Th Macro Batas Sini -->



  										<th>ACTION</th>
  										<th>TRANSACTION ID</th>
  										<th>DATE OF ISSUE</th>
  										<th>NAME</th>
  										<th>NIK USER</th>
  										<th>STATUS TRANSACTION</th>
  										<th>SECTION</th>
  										<th>COMPANY TO</th>
  										<th>COMPANY ADDRESS</th>
  										<th>COMPANY ADDRESS 1</th>
  										<th>COMPANY ADDRESS 2</th>
  										<th>ATTENTION</th>
  										<th>ATTENTION DEPARTEMENT</th>
  										<th>EMAIL AND TELP</th>
  										<th>DETAIL REQUEST</th>
  										<th>REFERENCE</th>
  										<th>BUDGET</th>
  										<th>ACCOUNT</th>
  										<th>PAYMENT TERMS</th>
  										<th>BANYAK CICILAN</th>
  										<th>TRANSFER TO</th>
  										<th>TRANSFER ADDRESS</th>
  										<th>CURRENCY</th>
  										<th>IDR</th>
  										<th>USD</th>
  										<th>EUR</th>
  										<th>JPY</th>
  										<th>SWIFT CODE</th>
  										<th>ACCOUNT NAME</th>
  										<th>AMOUNT</th>
  										<th>AMOUNT TOTAL</th>
  										<th>AMOUNT IN WORD</th>
  										<th>DPP</th>
  										<th>VAT INFORMATION</th>
  										<!-- <th>VAT PERSEN</th> -->
  										<th>VAT NOMINAL</th>
  										<!-- <th>VAT TOTAL</th> -->
  										<th>DMIA BANK ACCOUNT</th>
  										<th>TRANSFER NAME</th>
  										<th>BANK NAME</th>
  										<th>ACCOUNT NUMBER</th>
  										<th>ATTACHMENT1</th>
  										<th>ATTACHMENT2</th>
  										<th>ATTACHMENT3</th>
  										<th>ATTACHMENT4</th>
  										<th>DIRECTOR</th>
  										<th>TITLE</th>
  										<th>APPROVER DEPT USER</th>
  										<th>APPROVER DEPT FINANCE</th>
  										<th>FINISH SETTLEMENT DN BANK</th>
  										<th>FINISH SETTLEMENT DN AMOUNT</th>
  										<th>FINISH SETTLEMENT DN DATE</th>



  										<!-- /Th Macro Batas Sini -->

  									</tr>

  								</thead>

  								<tbody></tbody>

  							</table>

  						</div> <!-- /.card-body -->

  					</div> <!-- /.card -->
  				</div> <!-- /.col -->

  				<!-- ##################################### / Batas Row 1 #####################################  -->
  			</div> <!-- /.row -->

  		</div><!-- /.container-fluid -->
  	</section>
  	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- ##################################### Batas Modal #####################################  -->

  <!-- modal-Add / Update -->
  <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-lg" role="document">
  		<div class="modal-content">
  			<div class="modal-header">
  				<h4 class="modal-title" id="exampleModalLabel">ADD DATA</h5><!--fungsi add data-->
  					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><!--fungsi close form-->
  						<span aria-hidden="true">&times;</span>
  					</button>
  			</div>

  			<!-- form -->
  			<form role="form" id="quickForm">

  				<div class="card-body">

  					<!---------------------------------- Form Macro Batas sini ---------------------------------->
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="hdrid">TRANSACTION ID</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="hdrid" class="form-control" id="hdrid" placeholder="auto generate" readonly>
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label>DATE OF ISSUE:</label>
  							</div>
  							<div class="col-md-4">
  								<div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickerdate_of_issue" data-target-input="nearest">
  									<input type="text" id="date_of_issue" name="date_of_issue" class="form-control datetimepicker-input" data-target="#timepickerdate_of_issue" />
  									<div class="input-group-append" data-target="#timepickerdate_of_issue" data-toggle="datetimepicker">
  										<div class="input-group-text"><i class="fa fa-calendar"></i></div>
  									</div>
  								</div>
  							</div>
  							<div class="btn btn-primary" id="btn_update_date" onclick="Update_date()"> Update Date </div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="name">NAME</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="name" class="form-control" id="name" readonly>
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="nik">NIK</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="nik" class="form-control" id="nik" readonly>
  							</div>
  						</div>
  					</div>

  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="section">SECTION</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="section" class="form-control" id="section" readonly>
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label>COMPANY TO</label>
  							</div>
  							<div class="col-md-8">
  								<select class="form-control select2" id="company_to" name="company_to" onchange="handleSelectChange_company_to(event)" style="width: 100%;">
  									<option value='' selected="selected">-Select-</option>
  									<?php
										foreach ($company_to as $value) {
											echo "<option value='$value->company_to'>$value->company_to$$value->company_address$$value->company_address1$$value->company_address2$$value->attention$$value->attention_departement$$value->email_and_telp</option>";
										}
										?>
  								</select>
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="company_address">COMPANY ADDRESS</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="company_address" class="form-control" id="company_address">
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="company_address1">COMPANY ADDRESS 1</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="company_address1" class="form-control" id="company_address1">
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="company_address2">COMPANY ADDRESS 2</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="company_address2" class="form-control" id="company_address2">
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="attention">ATTENTION</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="attention" class="form-control" id="attention">
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="attention_departement">ATTENTION DEPARTEMENT</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="attention_departement" class="form-control" id="attention_departement">
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="email_and_telp">EMAIL AND TELP</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="email_and_telp" class="form-control" id="email_and_telp">
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="detail_request">DETAIL REQUEST</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="detail_request" class="form-control" id="detail_request">
  							</div>
  						</div>
  					</div>

  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="reference">REFERENCE</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="reference" class="form-control" id="reference" onchange="cekdup(event)">
  							</div>
  						</div>
  					</div>
  					<div class="form-group">
  						<div class="row">
  							<div class="col-md-4">
  								<label for="budget">BUDGET</label>
  							</div>
  							<div class="col-md-8">
  								<input type="text" name="budget" class="form-control" id="budget">
  							</div>
  						</div>
  					</div>
  					<div class="card card-primary">
  						<div class="card-header">
  							<h4 class="card-title">
  								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoapproval3">
  									<b>Detail Pembayaran</b>
  								</a>
  							</h4>
  						</div>
  						<div id="collapseTwoapproval3" class="panel-collapse collapse">
  							<div class="card-body">

  								<!-- <div class="form-group">
                        <div class="row">
                          <div class="col-md-4">
                            <label>ACCOUNT</label>
                          </div>
                          <div class="col-md-8">
                            <select class="form-control select2" id="account" name="account" onchange="handleSelectChange_account(event)" style="width: 100%;">
                              <option value='' selected="selected">-Select-</option>
                              <php
                                foreach ($account as $value) {
                                echo "<option value='$value->account'>$value->account</option>";
                                }
                              ?>
                            </select>
                          </div>
                        </div>
                      </div> -->

  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="account">ACCOUNT</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="account" class="form-control" id="account" readonly>
  										</div>
  									</div>
  								</div>

  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label>PAYMENT TERMS</label>
  										</div>
  										<div class="form-group" clearfix>
  											<div class="icheck-primary d-inline">
  												<input type="radio" id="payment_terms" value="C30D" name="payment_terms" onclick="Delete_temporary()">
  												<label for="payment_terms">
  													C30D
  												</label>
  											</div>
  											<div class="icheck-primary d-inline">
  												<input type="radio" id="payment_terms2" value="partial" name="payment_terms">
  												<label for="payment_terms2">
  													Partial
  												</label>
  											</div>
  										</div>
  									</div>
  								</div>

  								<div class="card card-blue" id="card_cicilan">
  									<div class="card-header">
  										<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoapproval2">
  											<h4 class="card-title">
  												<label for="banyak_cicilan">CICILAN</label>
  											</h4>
  										</a>
  									</div>
  									<div id="collapseTwoapproval2" class="panel-collapse collapse">
  										<div class="card-body">
  											<div class="form-group">
  												<div class="row">
  													<div class="col-md-4">
  														<label for="banyak_cicilan">BANYAK CICILAN</label>
  													</div>
  													<div class="col-md-8">
  														<input type="text" name="banyak_cicilan" class="form-control" id="banyak_cicilan">
  													</div>
  												</div>
  											</div>

  											<div class="form-group">
  												<div class="row">
  													<div class="col-md-4">
  														<label>START MONTH:</label>
  													</div>
  													<div class="col-md-4">
  														<div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickerstart_month" data-target-input="nearest">
  															<input type="text" id="start_month" name="start_month" class="form-control datetimepicker-input" data-target="#timepickerstart_month" />
  															<div class="input-group-append" data-target="#timepickerstart_month" data-toggle="datetimepicker">
  																<div class="input-group-text"><i class="fa fa-calendar"></i></div>
  															</div>
  														</div>
  													</div>
  												</div>
  											</div>

  											<form class="form-horizntal" id="approvalform" role="form">
  												<div class="btn btn-success" id="btn_add_row" onclick="Add_cicilan_row()"> Tambah cicilan </div> <!--fungsi untuk approve-->
  												<div class="card-body">
  													<div class="table-responsive">

  														<table id="detailCicilan" class="table table-bordered table-hover display nowrap table-striped" style="text-align:center">
  															<thead>
  																<tr>

  																	<th>ACTION</th>
  																	<th>NO CICILAN</th>
  																	<th>MONTH</th>
  																	<th>AMOUNT</th>
  																	<!-- <th>DEPARTMENT NAME</th> -->
  																	<!-- <th>OFFICE EMAIL</th>
                                      <th>POSITION CODE</th>
                                      <th>POSITION NAME</th>
                                      <th>DATE APPROVE</th> -->
  																</tr>
  															</thead>
  															<tbody>
  															</tbody>

  															<tfoot>
  																<tr id="tfooter">
  																	<th colspan="3"><strong>TOTAL</strong></th>
  																	<th colspan="1"><strong>
  																			<div id="ttl"></div>
  																		</strong></th>
  																</tr>
  																<tr id="tfooter">
  																	<th colspan="3"><strong>BALANCE</strong></th>
  																	<th colspan="1"><strong>
  																			<div id="balance"></div>
  																		</strong></th>

  																</tr>
  															</tfoot>

  														</table>

  													</div>
  												</div>
  											</form>

  										</div>
  									</div>
  								</div>
  								<!-- </div> -->

  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="transfer_to">TRANSFER TO</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="transfer_to" class="form-control" id="transfer_to" readonly>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="transfer_address">TRANSFER ADDRESS</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="transfer_address" class="form-control" id="transfer_address" readonly>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label>CURRENCY</label>
  										</div>
  										<div class="col-md-8">
  											<select class="form-control select2" id="currency" name="currency" onchange="handleSelectChange_currency(event);count_vat(event);" style="width: 100%;">
  												<option value='' selected="selected">-Select-</option>
  												<?php
													foreach ($currency as $value) {
														echo "<option value='$value->currency'>$value->currency</option>";
													}
													?>
  											</select>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="idr">IDR</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="idr" class="form-control" id="idr" readonly>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="usd">USD</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="usd" class="form-control" id="usd" readonly>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="eur">EUR</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="eur" class="form-control" id="eur" readonly>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="jpy">JPY</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="jpy" class="form-control" id="jpy" readonly>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="swift_code">SWIFT CODE</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="swift_code" class="form-control" id="swift_code" readonly>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="account_name">ACCOUNT NAME</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="account_name" class="form-control" id="account_name" readonly>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="dpp">DPP</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="dpp" class="form-control" id="dpp" onchange="numberic_format(event);count_vat(event);" onfocus="myFunction(this)">
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label>VAT PERSEN</label>
  										</div>
  										<div class="col-md-8">
  											<select class="form-control select2" id="vat" name="vat" onchange="handleSelectChange_vat(event);count_vat(event);" style="width: 100%;">
  												<option value='' selected="selected">-Select-</option>
  												<?php
													foreach ($vat as $value) {
														echo "<option value='$value->vat'>$value->vat</option>";
													}
													?>
  											</select>
  										</div>
  									</div>
  								</div>

  								<!-- <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="vat_persen">VAT PERSEN</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="vat_persen" class="form-control" id="vat_persen" >
                    </div>
                </div>
              </div> -->
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="vat_nominal">VAT NOMINAL</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="vat_nominal" class="form-control" id="vat_nominal" onchange="numberic_format(event);count_vat(event);" readonly>
  										</div>
  									</div>
  								</div>
  								<!-- <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="vat_total">VAT TOTAL</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="vat_total" class="form-control" id="vat_total" onchange="numberic_format(event)" onfocus="myFunction(this)">
                    </div>
                </div>
              </div> -->

  								<div class="form-group" hidden>
  									<div class="row">
  										<div class="col-md-4">
  											<label for="amount">AMOUNT</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="amount" class="form-control" id="amount" onchange="numberic_format(event);count_vat(event);" onfocus="myFunction(this)">
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="amount_total">AMOUNT TOTAL</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="amount_total" class="form-control" id="amount_total" onchange="numberic_format(event)">
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="amount_in_word">AMOUNT IN WORD</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="amount_in_word" class="form-control" id="amount_in_word">
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>
  					</div>
  					<div class="card card-danger">
  						<div class="card-header">
  							<h4 class="card-title">
  								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoapproval4">
  									<b>Detail Request </b>
  								</a>
  							</h4>
  						</div>
  						<div id="collapseTwoapproval4" class="panel-collapse collapse">
  							<div class="card-body">
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-1">
  											<a class="btn btn-success" id="attachment1_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
  										</div>
  										<div class="col-md-4">
  											<label for="attachment1">ATTACHMENT 1</label>
  										</div>
  										<div class="col-md-7">
  											<div class="custom-file">
  												<input type="file" class="custom-file-input" id="attachment1" multiple="" name="attachment1">
  												<label class="custom-file-label" for="attachment1" id="attachment1_label">Choose file</label>
  											</div>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-1">
  											<a class="btn btn-success" id="attachment2_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
  										</div>
  										<div class="col-md-4">
  											<label for="attachment2">ATTACHMENT 2</label>
  										</div>
  										<div class="col-md-7">
  											<div class="custom-file">
  												<input type="file" class="custom-file-input" id="attachment2" multiple="" name="attachment2">
  												<label class="custom-file-label" for="attachment2" id="attachment2_label">Choose file</label>
  											</div>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-1">
  											<a class="btn btn-success" id="attachment3_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
  										</div>
  										<div class="col-md-4">
  											<label for="attachment3">ATTACHMENT 3</label>
  										</div>
  										<div class="col-md-7">
  											<div class="custom-file">
  												<input type="file" class="custom-file-input" id="attachment3" multiple="" name="attachment3">
  												<label class="custom-file-label" for="attachment3" id="attachment3_label">Choose file</label>
  											</div>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-1">
  											<a class="btn btn-success" id="attachment4_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
  										</div>
  										<div class="col-md-4">
  											<label for="attachment4">ATTACHMENT 4 (FINANCE)</label>
  										</div>
  										<div class="col-md-7">
  											<div class="custom-file">
  												<input type="file" class="custom-file-input" id="attachment4" multiple="" name="attachment4">
  												<label class="custom-file-label" for="attachment4" id="attachment4_label">Choose file</label>
  											</div>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label>DIRECTOR</label>
  										</div>
  										<div class="col-md-8">
  											<select class="form-control select2" id="director" name="director" onchange="handleSelectChange_director(event)" style="width: 100%;" disabled>
  												<option value='' selected="selected"><?php echo $director->director; ?></option>
  												<?php
													foreach ($director_filter as $value) {
														echo "<option value='$value->director'>$value->director-$value->gelar</option>";
													}
													?>
  											</select>
  										</div>
  									</div>
  								</div>
  								<!-- <php if ($this->session->userdata('user_name') == 'Widodo'){echo "hidden";} ?>
              <php if ($this->session->userdata('user_name') == 'Widodo'){echo "unreadonly";} ?> -->
  								<!-- <div class="form-group"    >
                <div class="row">
                    <div class="col-md-4">
                      <label for="director">DIRECTOR</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="director" class="form-control" id="director" readonly >
                    </div>
                </div>
              </div> -->
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="title">TITLE</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="title" class="form-control" id="title" readonly>
  										</div>
  									</div>
  								</div>
  								<div>
  									<div class="btn btn-primary" id="btn_update_director" onclick="Update_director()"> Update Director </div> <!--fungsi untuk approve-->
  								</div>

  							</div>
  						</div>
  					</div>


  					<!-- START CARD SETTLEMENT -->
  					<div class="card card-blue" <?php if ($menu_name != "Settlement Debit Note") {
																					echo "hidden";
																				} ?>>
  						<div class="card-header">
  							<h4 class="card-title">
  								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoapproval5">
  									<b>Settlement Approval </b>
  								</a>
  							</h4>
  						</div>
  						<div id="collapseTwoapproval5" class="panel-collapse collapse">
  							<div class="card-body">
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label>FINISH SETTLEMENT DN BANK</label>
  										</div>
  										<div class="col-md-8">
  											<select class="form-control select2" id="finish_settlement_dn_bank" name="finish_settlement_dn_bank" onchange="handleSelectChange_finish_settlement_dn_bank(event)" style="width: 100%;">
  												<option value='' selected="selected">-Select-</option>
  												<?php
													foreach ($finish_settlement_dn_bank as $value) {
														echo "<option value='$value->bank_name'>$value->bank_name</option>";
													}
													?>
  											</select>
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label for="finish_settlement_dn_amount">FINISH SETTLEMENT DN AMOUNT</label>
  										</div>
  										<div class="col-md-8">
  											<input type="text" name="finish_settlement_dn_amount" class="form-control" id="finish_settlement_dn_amount" onchange="numberic_format(event)" onfocus="myFunction(this)">
  										</div>
  									</div>
  								</div>
  								<div class="form-group">
  									<div class="row">
  										<div class="col-md-4">
  											<label>FINISH SETTLEMENT DN DATE:</label>
  										</div>
  										<div class="col-md-4">
  											<div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickerfinish_settlement_dn_date" data-target-input="nearest">
  												<input type="text" id="finish_settlement_dn_date" name="finish_settlement_dn_date" class="form-control datetimepicker-input" data-target="#timepickerfinish_settlement_dn_date" />
  												<div class="input-group-append" data-target="#timepickerfinish_settlement_dn_date" data-toggle="datetimepicker">
  													<div class="input-group-text"><i class="fa fa-calendar"></i></div>
  												</div>
  											</div>
  										</div>
  									</div>
  								</div>
  							</div>
  						</div>
  						<!-- END CARD SETTLEMENT -->
  					</div>

  					<div class="card card-green">
  						<div class="card-header">
  							<h4 class="card-title">
  								<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoapproval">
  									<b> APPROVAL </b>
  								</a>
  							</h4>
  						</div>
  						<div id="collapseTwoapproval" class="panel-collapse collapse">
  							<div class="card-body">
  								<form class="form-horizntal" id="approvalform" role="form">
  									<div class="card-body">
  										<div class="table-responsive">

  											<table id="detailApproval" class="table table-bordered table-hover display nowrap table-striped" style="text-align:center">
  												<thead>
  													<tr>

  														<!-- <th>REPORT NO.</th> -->
  														<th>NIK</th>
  														<th>NAME</th>
  														<th>DEPARTMENT CODE</th>
  														<th>DEPARTMENT NAME</th>
  														<th>OFFICE EMAIL</th>
  														<th>POSITION CODE</th>
  														<th>POSITION NAME</th>
  														<th>DATE APPROVE</th>
  													</tr>
  												</thead>

  												<tbody></tbody>

  											</table>
  										</div>
  									</div>
  								</form>
  							</div>
  						</div>


  						<!-- /PAYMENT-->

  						<!---------------------------------- / Form Macro Batas sini ---------------------------------->

  						<!-- Close Card Body -->
  					</div>

  					<div class="card-footer">
  						<!-- <button type="submit" class="btn btn-danger" id="btnsubmit" >Save</button>     -->
  						<button type="submit" class="btn btn-primary" id="btnsubmit">Send</button> <!--fungsi button save data di form-->
  						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button> <!--fungsi close untuk form-->
  						<div class="btn btn-success btn-sm konfirmasiApprove" data-id='' data-toggle="modal" data-target="#modal-confirm-approve" id="btn_approve_footer"> Approve <i class="far fa-thumbs-up"></i></div> <!--fungsi untuk approve-->
  						<div class="btn btn-danger btn-sm konfirmasiReject" data-id='' data-toggle="modal" data-target="#modal-reject" id="btn_reject_footer"> Reject <i class="far fa-thumbs-down"></i></div> <!--fungsi  untuk reject-->
  					</div>

  			</form>
  			<!-- /form  -->

  		</div>
  		<!-- Close modal-content -->
  	</div>
  	<!-- Close modal-dialog -->
  </div>
  <!-- Close modal-Add / Update -->
  </div>
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
  <!-- /.modal Delete-->
  <!-- modal-cicilan-->
  <div class="modal fade" id="modal-cicilan">
  	<div class="modal-dialog">
  		<div class="modal-content bg-white">
  			<div class="modal-header">
  				<h4 class="modal-title">Edit Data Cicilan</h4>
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
  				</button>
  			</div>

  			<div class="modal-body">
  				<div class="form-group">
  					<div class="row">
  						<div class="col-md-4">
  							<label for="no_cicilan">NO CICILAN</label>
  						</div>
  						<div class="col-md-8">
  							<input type="text" name="no_cicilan" class="form-control" id="no_cicilan">
  						</div>
  					</div>
  				</div>
  				<div class="form-group" hidden>
  					<div class="row">
  						<div class="col-md-4">
  							<label for="hdrid_cil">HdriD Cicilan</label>
  						</div>
  						<div class="col-md-8">
  							<input type="text" name="hdrid_cil" class="form-control" id="hdrid_cil">
  						</div>
  					</div>
  				</div>
  				<div class="form-group" hidden>
  					<div class="row">
  						<div class="col-md-4">
  							<label for="no_cicilan_history">no_cicilan_history Cicilan</label>
  						</div>
  						<div class="col-md-8">
  							<input type="text" name="no_cicilan_history" class="form-control" id="no_cicilan_history">
  						</div>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="row">
  						<div class="col-md-4">
  							<label>MONTH</label>
  						</div>
  						<div class="col-md-4">
  							<div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickermonth" data-target-input="nearest">
  								<input type="text" id="month" name="month" class="form-control datetimepicker-input" data-target="#timepickermonth" />
  								<div class="input-group-append" data-target="#timepickermonth" data-toggle="datetimepicker">
  									<div class="input-group-text"><i class="fa fa-calendar"></i></div>
  								</div>
  							</div>
  						</div>
  					</div>
  				</div>
  				<div class="form-group">
  					<div class="row">
  						<div class="col-md-4">
  							<label for="amount2">AMOUNT</label>
  						</div>
  						<div class="col-md-8">
  							<input type="text" name="amount2" class="form-control" id="amount2" onchange="numberic_format(event)" onfocus="myFunction(this)">
  						</div>
  					</div>
  				</div>
  			</div>

  			<div class="modal-footer justify-content-between">
  				<form action="#" method="post">
  					<button type="button" id="insert_cicilan" onclick="Update_cicilan()" class="btn btn-primary">Save</button>
  				</form>
  				<button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
  			</div>

  		</div>
  		<!-- /.modal-content -->
  	</div>
  	<!-- /.modal-dialog -->
  </div>
  <!-- /.modal Delete-->

  <!-- modal-delete-cicilan -->
  <div class="modal fade" id="modal-delete-cicilan">
  	<div class="modal-dialog">
  		<div class="modal-content bg-danger">
  			<div class="modal-header">
  				<h4 class="modal-title">Delete Data Cicilan</h4>
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
  				</button>
  			</div>

  			<div class="modal-body">
  				<label id="hdrid_cicilan"> </label>Apakah ingin delete <label id="iddeletecicilan"> </label> ?
  			</div>

  			<div class="modal-footer justify-content-between">
  				<form action="#" method="post">
  					<button type="button" id="delete" onclick="Delete_data_cicilan()" class="btn btn-outline-light">Yes</button>
  				</form>
  				<button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
  			</div>

  		</div>
  		<!-- /.modal-content -->
  	</div>
  	<!-- /.modal-dialog -->
  </div>
  <!-- /.modal Delete cicilan-->

  <!-- modal-confirm-approve -->
  <div class="modal fade" id="modal-confirm-approve">
  	<div class="modal-dialog">
  		<div class="modal-content bg-success">

  			<div class="modal-header">
  				<h4 class="modal-title">Approval confirmation</h4>
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
  				</button>
  			</div>

  			<div class="modal-body">
  				<label id="idapprove2"> </label>Apakah ingin approve <label id="idapprove" hidden> </label> ?
  				<label id="idposition_code" hidden> </label>
  				<br>
  				<label id="lblposition"> </label>
  				<br>
  				<label id="lbluserconfirm" hidden> <?php echo $this->session->userdata('nama'); ?> </label>
  				<label id="iduserlogin" hidden> <?php echo $this->session->userdata('user_name'); ?> </label>
  			</div>

  			<div class="modal-footer justify-content-between">

  				<button type="button" id="approve" onclick="Approve_data()" class="btn btn-outline-light">Approve</button>
  				<button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>

  			</div>

  		</div>
  		<!-- /.modal-content -->
  	</div>
  	<!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  <!-- modal-confirm-reject -->
  <div class="modal fade" id="modal-reject">
  	<div class="modal-dialog">
  		<div class="modal-content bg-danger">
  			<div class="modal-header">
  				<h4 class="modal-title">Reason reject</h4>
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
  				</button>
  			</div>


  			<div class="modal-body">

  				<div class="form-group">
  					<div class="row">
  						<div class="col-md-2">
  							<label for="reason">REASON</label>
  						</div>
  						<div class="col-md-10">
  							<textarea rows="2" type="text" name="reason" class="form-control" id="reason"></textarea>
  						</div>
  					</div>
  				</div>

  			</div>

  			<div class="modal-footer justify-content-between">

  				<input type="text" name="rejecter" value="<?php echo $this->session->userdata('nama') ?>" class="form-control" id="rejecter" hidden>
  				<input type="text" name="idreject" class="form-control" id="idreject" hidden>
  				<button type="button" id="process_reject" onclick="Reject_data3()" class="btn btn-outline-light">Reject</button>
  				<button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>

  			</div>

  		</div>
  		<!-- /.modal-content -->
  	</div>
  	<!-- /.modal-dialog -->
  </div>
  <!-- /.modal Reject-->
  <!-- Akhir modal approve -->

  <!-- modal-import -->
  <div class="modal fade" id="modal-import">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<div class="modal-header">
  				<h4 class="modal-title">Import Data</h4>
  				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  					<span aria-hidden="true">&times;</span>
  				</button>
  			</div>

  			<div class="modal-body">

  				<form method="POST" action="<?php echo base_url('c_dn/import'); ?>" enctype="multipart/form-data">

  					<div class="input-group form-group">
  						<span class="input-group-addon" id="sizing-addon2">
  							<i class="glyphicon glyphicon-file"></i>
  						</span>
  						<input type="file" class="form-control" name="excel" aria-describedby="sizing-addon2">
  					</div>

  					<div class="form-group">
  						<div class="col-md-12">
  							<button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i>Import Data</button>
  						</div>
  					</div>

  				</form>

  			</div>

  			<div class="modal-footer justify-content-between">

  				<!-- <button type="button" id="delete"  class="btn btn-outline-light">Import</button>     -->
  				<!-- <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>  -->

  			</div>

  		</div>
  		<!-- /.modal-content -->
  	</div>
  	<!-- /.modal-dialog -->
  </div>
  <!-- /.modal Delete-->



  <script type="text/javascript">
  	//function untuk jika ada notif add data dan update data success
  	$(document).ready(function() {

  		// $('#nominal').mask('000.000.000.000.000', {reverse: true});
  		// $('#nominal1').mask('000.000.000.000.000', {reverse: true});

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

  				// ---------------------------------- Rule input Macro Batas sini 1---------------------------------
  				date_of_issue: {
  					required: true,
  				},
  				name: {
  					required: true,
  				},
  				// nik: {
  				// required: true,
  				// },
  				section: {
  					required: true,
  				},
  				// company_to: {
  				// required: true,
  				// },
  				// company_address: {
  				// required: true,
  				// },
  				// company_address1: {
  				// required: true,
  				// },
  				// company_address2: {
  				// required: true,
  				// },
  				// attention: {
  				// required: true,
  				// },
  				// attention_departement: {
  				// required: true,
  				// },
  				// email_and_telp: {
  				// required: true,
  				// },
  				// detail_request: {
  				// required: true,
  				// },
  				// reference: {
  				// required: true,
  				// },
  				// budget: {
  				// required: true,
  				// },
  				// account: {
  				// required: true,
  				// },
  				payment_terms: {
  					required: true,
  				},
  				// banyak_cicilan: {
  				// required: true,
  				// },
  				// start_month: {
  				// required: true,
  				// },
  				// transfer_to: {
  				// required: true,
  				// },
  				// transfer_address: {
  				// required: true,
  				// },
  				// currency: {
  				// required: true,
  				// },
  				// // idr: {
  				// // required: true,
  				// // },
  				// // usd: {
  				// // required: true,
  				// // },
  				// // eur: {
  				// // required: true,
  				// // },
  				// // jpy: {
  				// // required: true,
  				// // },
  				// swift_code: {
  				// required: true,
  				// },
  				// account_name: {
  				// required: true,
  				// },
  				// amount: {
  				// required: true,
  				// },
  				// amount_total: {
  				// required: true,
  				// },
  				// amount_in_word: {
  				// required: true,
  				// },
  				// dpp: {
  				// required: true,
  				// },
  				// // vat: {
  				// // required: true,
  				// // },
  				// // vat_persen: {
  				// // required: true,
  				// // },
  				// // vat_nominal: {
  				// // required: true,
  				// // },
  				// vat_total: {
  				// required: true,
  				// },
  				// dmia_bank_account: {
  				// required: true,
  				// },
  				// transfer_name: {
  				// required: true,
  				// },
  				// bank_name: {
  				// required: true,
  				// },
  				// account_number: {
  				// required: true,
  				// },
  				// // attachment1: {
  				// // required: true,
  				// //  },
  				// //  attachment2: {
  				// // required: true,
  				// // },
  				// // attachment3: {
  				// // required: true,
  				// // },
  				// // attachment4: {
  				// //  required: true,
  				// // },
  				// director: {
  				// required: true,
  				// },
  				// title: {
  				// required: true,
  				// },
  				// approver_dept_user: {
  				// required: true,
  				// },
  				// approver_dept_finance: {
  				// required: true,
  				// },
  				// finish_settlement_dn_bank: {
  				// required: true,
  				// },
  				// finish_settlement_dn_amount: {
  				// required: true,
  				// },
  				// finish_settlement_dn_date: {
  				// required: true,
  				// },



  				// ---------------------------------- / Rule input Macro Batas sini 1--------------------------------

  			},
  			messages: {

  				//---------------------------------- Rule input Macro Batas sini 2---------------------------------
  				date_of_issue: {
  					required: "Please Input date_of_issue",
  					minlength: 3
  				},
  				name: {
  					required: "Please Input name",
  					minlength: 3
  				},
  				nik: {
  					required: "Please Input nik",
  					minlength: 3
  				},
  				section: {
  					required: "Please Input section",
  					minlength: 3
  				},
  				company_to: {
  					required: "Please Input company_to",
  					minlength: 3
  				},
  				company_address: {
  					required: "Please Input company_address",
  					minlength: 3
  				},
  				company_address1: {
  					required: "Please Input company_address1",
  					minlength: 3
  				},
  				company_address2: {
  					required: "Please Inputcompany_address2",
  					minlength: 3
  				},
  				attention: {
  					required: "Please Input attention",
  					minlength: 3
  				},
  				attention_departement: {
  					required: "Please Input attention_departement",
  					minlength: 3
  				},
  				email_and_telp: {
  					required: "Please Input email_and_telp",
  					minlength: 3
  				},
  				detail_request: {
  					required: "Please Input detail_request",
  					minlength: 3
  				},
  				reference: {
  					required: "Please Input reference",
  					minlength: 3
  				},
  				budget: {
  					required: "Please Input budget",
  					minlength: 3
  				},
  				account: {
  					required: "Please Input account",
  					minlength: 3
  				},
  				payment_terms: {
  					required: "Please Input Payment Terms",
  					minlength: 3
  				},
  				start_month: {
  					required: "Please Input Start Month",
  					minlength: 3
  				},
  				banyak_cicilan: {
  					required: "Please Input Banyak Cicilan (Min 1)",
  					minlength: 3
  				},
  				transfer_to: {
  					required: "Please Input transfer_to",
  					minlength: 3
  				},
  				transfer_address: {
  					required: "Please Input transfer_address",
  					minlength: 3
  				},
  				currency: {
  					required: "Please Input currency",
  					minlength: 3
  				},
  				idr: {
  					required: "Please Input idr",
  					minlength: 3
  				},
  				usd: {
  					required: "Please Input usd",
  					minlength: 3
  				},
  				eur: {
  					required: "Please Input eur",
  					minlength: 3
  				},
  				jpy: {
  					required: "Please Input jpy",
  					minlength: 3
  				},
  				swift_code: {
  					required: "Please Input swift_code",
  					minlength: 3
  				},
  				account_name: {
  					required: "Please Input account_name",
  					minlength: 3
  				},
  				amount: {
  					required: "Please Input amount",
  					minlength: 3
  				},
  				amount_total: {
  					required: "Please Input amount_total",
  					minlength: 3
  				},
  				amount_in_word: {
  					required: "Please Input amount_in_word",
  					minlength: 3
  				},
  				dpp: {
  					required: "Please Input dpp",
  					minlength: 3
  				},
  				vat: {
  					required: "Please Input vat",
  					minlength: 3
  				},
  				// vat_persen: {
  				// required: "Please Input vat_persen",
  				// minlength: 3
  				// },
  				vat_nominal: {
  					required: "Please Input vat_nominal",
  					minlength: 3
  				},
  				// vat_total: {
  				// required: "Please Input vat_total",
  				// minlength: 3
  				// },
  				dmia_bank_account: {
  					required: "Please Input dmia_bank_account",
  					minlength: 3
  				},
  				transfer_name: {
  					required: "Please Input transfer_name",
  					minlength: 3
  				},
  				bank_name: {
  					required: "Please Input bank_name",
  					minlength: 3
  				},
  				account_number: {
  					required: "Please Input account_number",
  					minlength: 3
  				},
  				attachment1: {
  					required: "Please Input attachment1",
  					minlength: 3
  				},
  				attachment2: {
  					required: "Please Input attachment2",
  					minlength: 3
  				},
  				attachment3: {
  					required: "Please Input attachment3",
  					minlength: 3
  				},
  				attachment4: {
  					required: "Please Input attachment4",
  					minlength: 3
  				},
  				director: {
  					required: "Please Input director",
  					minlength: 3
  				},
  				title: {
  					required: "Please Input title",
  					minlength: 3
  				},
  				approver_dept_user: {
  					required: "Please Input approver_dept_user",
  					minlength: 3
  				},
  				approver_dept_finance: {
  					required: "Please Input approver_dept_finance",
  					minlength: 3
  				},
  				finish_settlement_dn_bank: {
  					required: "Please Input finish_settlement_dn_bank",
  					minlength: 3
  				},
  				finish_settlement_dn_amount: {
  					required: "Please Input finish_settlement_dn_amount",
  					minlength: 3
  				},
  				finish_settlement_dn_date: {
  					required: "Please Input finish_settlement_dn_date",
  					minlength: 3
  				},


  				// ---------------------------------- / Rule input Macro Batas sini 2--------------------------------


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



  	/// @see  Approve_data() 
  	/// @note untuk fungsi approve dalam table
  	/// @attention tabel akan menampilkan siapa saja melakukan approve
  	function Approve_data() {


  		var fdata2 = new FormData();

  		fdata2.append('hdrid', $('#hdrid').val());
  		fdata2.append('nik', $('#iduserlogin').text());
  		fdata2.append('nikreq', $('#nik').val());
  		fdata2.append('name', $('#name').val()); // Ganti dengan nik val 
  		fdata2.append('position_code', $('#idposition_code').text());

  		var vurl2;
  		vurl2 = "<?php echo base_url('C_email_v2/ajax_update_approve') ?>"; //fungsi approve akan dikirim ke  email

  		$.ajax({
  			url: vurl2,
  			method: "post",
  			processData: false,
  			contentType: false,
  			data: fdata2,
  			success: function(data) {
  				// Pesan berhasil  

  				$('#modal-confirm-approve').modal('hide');
  				$('#modal-default').modal('hide');
  				berhasil("Berhasil");
  				location.reload();
  			},
  			error: function(e) {
  				// gagal(e);
  				// //location.reload();
  				// error
  				$('#modal-confirm-approve').modal('hide');
  				$('#modal-default').modal('hide');
  				berhasil("Berhasil");
  				location.reload();

  			}
  		});

  		tabel.draw();
  		tabel2.draw();
  		tabel3.draw();
  	}


  	/// @see  Reject_data3() 
  	/// @note untuk fungsi reject dalam table
  	/// @attention tabel akan menampilkan siapa saja melakukan reject
  	function Reject_data3() {

  		// Validasi reason harus diisi
  		if ($('#reason').val() == '') {
  			gagal('Reason wajib diisi');
  			return false;
  		}

  		var fdata2 = new FormData();

  		fdata2.append('hdrid', $('#hdrid').val());
  		fdata2.append('nik', $('#iduserlogin').text());
  		fdata2.append('name', $('#name').val());
  		fdata2.append('nikreq', $('#nik').val());
  		fdata2.append('rejected_by', $('#lbluserconfirm').text());
  		fdata2.append('reason', $('#reason').val());
  		fdata2.append('position_code', $('#idposition_code').text());

  		vurl = "<?php echo base_url('C_email_v2/ajax_update_reject') ?>";

  		// Post data
  		$.ajax({
  			url: vurl,
  			method: "post",
  			processData: false,
  			contentType: false,
  			data: fdata2,
  			success: function(data) {

  				// Hide modal delete
  				$('#modal-reject').modal('hide');
  				$('#modal-default').modal('hide');
  				tabel.draw();
  				berhasil('Berhasil Reject');
  				location.reload();
  			},
  			error: function(e) {
  				// Hide modal delete
  				$('#modal-reject').modal('hide');
  				$('#modal-default').modal('hide');
  				tabel.draw();
  				//Pesan Gagal
  				// gagal(e);
  				berhasil('Berhasil Reject');
  				location.reload();
  			}
  		});

  	}

  	/// @see view_modal
  	/// @note Menampilkan modal(View,Edit)
  	/// @attention Menampilkan modal,mengisi data field apabila status view or edit or add(beberapa field otomatis terisi)
  	function view_modal(hdrid1, status) {

  		<?php if ($this->session->userdata('rolename') == 'Administrator FA' || $this->session->userdata('rolename') == 'Super Admin') {  ?>
  			$('#btn_update_director').show();
  			$('#btn_update_date').show();
  		<?php } else { ?>
  			$('#btn_update_director').hide();
  			$('#btn_update_date').hide();
  		<?php } ?>
  		if (status == "Add") {

  			$('#exampleModalLabel').text('Add Data'); // name view
  			$('#quickForm')[0].reset(); // reset form   
  			$('#btnsubmit').text('Send'); // name Save
  			$('#nik').val('<?php echo $this->session->userdata('user_name'); ?>');
  			$('#name').val('<?php echo $this->session->userdata('nama'); ?>');
  			$('#section').val('<?php echo $this->session->userdata('dept_name') ?>'); //dept_name
  			// $('#kode_section').val('<php echo $this->session->userdata('dept_id') ?>'); //dept_id
  			$('#account').val("<?php echo $account->account; ?>"); //dept_id
  			$('#transfer_to').val("<?php echo $transfer_to->transfer_to; ?>");
  			$('#transfer_address').val("<?php echo $transfer_to->transfer_address; ?>");
  			$('#idr').val("<?php echo $transfer_to->idr; ?>"); //dept_name
  			$('#usd').val("<?php echo $transfer_to->usd; ?>"); //dept_id
  			$('#eur').val("<?php echo $transfer_to->eur; ?>");
  			$('#jpy').val("<?php echo $transfer_to->jpy; ?>");
  			$('#swift_code').val("<?php echo $transfer_to->swift_code; ?>"); //dept_name
  			$('#account_name').val("<?php echo $transfer_to->account_name; ?>"); //dept_id

  			// $('#director').select2().val('').trigger('change');
  			// $('#director').val("<php echo $director->director;?>");
  			$('#title').val("<?php echo $director->gelar; ?>");
  			// 
  			$('#hdrid_cil').attr("value", "");
  			$('#no_cicilan').attr("value", "");
  			//  
  			document.getElementById("btnsubmit").style.visibility = "visible"; // Visible button  
  			document.getElementById("btn_reject_footer").style.visibility = "hidden";
  			document.getElementById("btn_approve_footer").style.visibility = "hidden";
  			//Ajax kosongkan data
  			//Tabel Aproover refresh
  			tabel2.draw();
  			tabel3.draw();
  			//function field date
  			var someDate0 = new Date();
  			var numberOfDaysToAdd0 = 0;
  			var result0 = someDate0.setDate(someDate0.getDate() + numberOfDaysToAdd0);
  			$('#date_of_issue').val(new Date(result0).toISOString().slice(0, 10));
  			if ('<?php echo $this->session->userdata('rolename') ?>' === 'Administrator FA' || '<?php echo $this->session->userdata('rolename') ?>' == 'Super Admin') { //untuk administrator bisa update

  				document.getElementById('director').disabled = false;
  				document.getElementById('title').readOnly = false;
  			}
  			$('#btn_update_director').hide();
  			$('#btn_update_date').hide();


  		} else {



  			// Get Hdri ID
  			$('#hdrid').val(hdrid1);
  			var hdrid = hdrid1;


  			// // Setting data-id pada button approve dan reject
  			// $('#btn_approve_footer').attr('data-id', hdrid + '#' + '1' + '#' + '<php echo $this->session->userdata('user_name') ?>');

  			// $('#idapprove').text(hdrid);            // $('#btnrejectres').attr('data-id', hdrid + '#' + '1' + '#' + '<php echo $this->session->userdata('user_name') ?>');
  			// // $('#btnrejectres2').attr('data-id', hdrid + '#' + '1' + '#' + '<php echo $this->session->userdata('user_name') ?>');

  			// Ajax isi data
  			$.ajax({
  				url: "<?php echo base_url('c_dn/ajax_getbyhdrid') ?>",
  				method: "get",
  				dataType: "JSON",
  				data: {
  					hdrid: hdrid1
  				},
  				success: function(data) {

  					// ---------------------------------- Data val Macro Batas sini ---------------------------------                  
  					$('#date_of_issue').val(data.date_of_issue);
  					$('#name').val(data.name);
  					$('#nik_user').val(data.nik_user);
  					$('#section').val(data.section);
  					$('#company_to').select2().val(data.company_to).trigger('change');
  					$('#company_address').val(data.company_address);
  					$('#company_address1').val(data.company_address1);
  					$('#company_address2').val(data.company_address2);
  					$('#attention').val(data.attention);
  					$('#attention_departement').val(data.attention_departement);
  					$('#email_and_telp').val(data.email_and_telp);
  					$('#detail_request').val(data.detail_request);
  					$('#reference').val(data.reference);
  					$('#budget').val(data.budget);
  					$('#account').val(data.account);

  					if (data.payment_terms == 'C30D') {
  						document.getElementById('payment_terms').checked = true;
  						$("#card_cicilan").css('display', 'none');

  					} else if (data.payment_terms == 'partial') {
  						document.getElementById('payment_terms2').checked = true;
  						$("#card_cicilan").css('display', 'block');

  					} else {
  						document.getElementById('payment_terms').checked = false;
  						document.getElementById('payment_terms2').checked = false;
  					}

  					$('#banyak_cicilan').val(data.banyak_cicilan);
  					$('#start_month').val(data.start_month);
  					$('#transfer_to').val(data.transfer_to);
  					$('#transfer_address').val(data.transfer_address);
  					$('#currency').select2().val(data.currency).trigger('change');
  					$('#idr').val(data.idr);
  					$('#usd').val(data.usd);
  					$('#eur').val(data.eur);
  					$('#jpy').val(data.jpy);
  					$('#swift_code').val(data.swift_code);
  					$('#account_name').val(data.account_name);
  					$('#amount').val(data.amount);
  					$('#amount_total').val(data.amount_total);
  					$('#amount_in_word').val(data.amount_in_word);
  					$('#dpp').val(data.dpp);
  					$('#vat').select2().val(data.vat).trigger('change');
  					// $('#vat_persen').val(data.vat_persen);
  					$('#vat_nominal').val(data.vat_nominal);
  					// $('#vat_total').val(data.vat_total);
  					// if(data.dmia_bank_account=='dmia_bank_account'){
  					//   document.getElementById('dmia_bank_account').checked=true;
  					// }else if(data.dmia_bank_account=='dmia_bank_account2'){
  					//   document.getElementById('dmia_bank_account2').checked=true;
  					// }else{
  					//   document.getElementById('dmia_bank_account').checked=false;
  					//   document.getElementById('dmia_bank_account2').checked=false;
  					// }
  					$('#transfer_name').val(data.transfer_name);
  					$('#bank_name').val(data.bank_name);
  					$('#account_number').val(data.account_number);
  					document.getElementById('attachment1_label').innerHTML = data.attachment1;
  					var a = document.getElementById('attachment1_view');
  					if (!data.attachment1 == '') {
  						a.href = "<?php echo base_url('assets/upload/dn/') ?>" + data.attachment1;
  					} else {
  						a.removeAttribute("href");
  					};
  					document.getElementById('attachment2_label').innerHTML = data.attachment2;
  					var a = document.getElementById('attachment2_view');
  					if (!data.attachment2 == '') {
  						a.href = "<?php echo base_url('assets/upload/dn/') ?>" + data.attachment2;
  					} else {
  						a.removeAttribute("href");
  					};
  					document.getElementById('attachment3_label').innerHTML = data.attachment3;
  					var a = document.getElementById('attachment3_view');
  					if (!data.attachment3 == '') {
  						a.href = "<?php echo base_url('assets/upload/dn/') ?>" + data.attachment3;
  					} else {
  						a.removeAttribute("href");
  					};
  					document.getElementById('attachment4_label').innerHTML = data.attachment4;
  					var a = document.getElementById('attachment4_view');
  					if (!data.attachment4 == '') {
  						a.href = "<?php echo base_url('assets/upload/dn/') ?>" + data.attachment4;
  					} else {
  						a.removeAttribute("href");
  					};
  					// $('#director').val(data.director);
  					$('#director').select2().val(data.director).trigger('change');
  					$('#title').val(data.title);
  					$('#approver_dept_user').val(data.approver_dept_user);
  					$('#approver_dept_finance').val(data.approver_dept_finance);
  					$('#finish_settlement_dn_bank').select2().val(data.finish_settlement_dn_bank).trigger('change');
  					$('#finish_settlement_dn_amount').val(data.finish_settlement_dn_amount);
  					// Tester
  					(document.getElementById('finish_settlement_dn_date') == '1900-01-01' ? $('#finish_settlement_dn_date').val(data.finish_settlement_dn_date) : $('#finish_settlement_dn_date').val(null));
  					// $('#finish_settlement_dn_date').val(data.finish_settlement_dn_date);



  					// ---------------------------------- / Data val Macro  Batas sini ------------------------------

  					//  Refresh detail problem
  					tabel2.draw();
  					tabel3.draw();

  					// Akhir Detail Problem

  					// Tabel Approval

  					$('#hdrid').val(data.hdrid);
  					$('#nik').val(data.nik);
  					$('#name').val(data.name);
  					$('#department_code').val(data.department_code);
  					$('#department_name').val(data.department_name);
  					$('#office_email').val(data.office_email);
  					$('#position_code').val(data.position_code);
  					$('#position_name').val(data.position_name);
  					$('#date_approve').val(data.date_approve);

  					//Cari current approval
  					ajax_getapproval($('#hdrid').val());



  					// ---------------------------------- / Data val Macro  Batas sini ------------------------------


  				},
  				error: function(e) {
  					alert(e);

  				}
  			});

  			// Add Data


  			// fungsi untuk disable dan enable button  
  			if (status == "View") {
  				$('#exampleModalLabel').text('View Data'); //name view 
  				$('#btnsubmit').text('Tes'); //name Update      
  				$('#btn_add_row').hide(); //name Update  
  				// var form_data = $('#quickForm').serializeArray();
  				// $.each(form_data, function (key, input) {
  				//   if (input.name!='detailCicilan_length'){
  				//     document.getElementById(input.name).readOnly = true;
  				//     document.getElementById(input.name).disabled = true;
  				//     document.getElementById("attachment1").disabled = true;
  				//     document.getElementById("attachment2").disabled = true;
  				//     document.getElementById("attachment3").disabled = true;
  				//     document.getElementById("attachment4").disabled = true;
  				//   }
  				// });

  				document.getElementById("btnsubmit").style.visibility = "hidden";

  				<?php if ($menu_name == "Approval Debit Note") { ?>

  					var form_data = $('#quickForm').serializeArray();
  					$.each(form_data, function(key, input) {
  						if (input.name != 'detailCicilan_length') {
  							document.getElementById(input.name).readOnly = true;
  							document.getElementById(input.name).disabled = true;
  							document.getElementById("attachment1").disabled = true;
  							document.getElementById("attachment2").disabled = true;
  							document.getElementById("attachment3").disabled = true;
  							document.getElementById("attachment4").disabled = true;
  						}
  					});
  					document.getElementById("btn_approve_footer").style.display = "";
  					document.getElementById("btn_reject_footer").style.display = "";

  				<?php } else { ?>
  					document.getElementById("btn_approve_footer").style.display = "none";
  					document.getElementById("btn_reject_footer").style.display = "none";
  				<?php } ?>
  				if ('<?php echo $this->session->userdata('rolename') ?>' === 'Administrator FA' || '<?php echo $this->session->userdata('rolename') ?>' == 'Super Admin') { //untuk administrator bisa update

  					document.getElementById('director').disabled = false;
  					document.getElementById('title').readOnly = false;
  					document.getElementById('date_of_issue').readOnly = false;
  				}



  			} else {

  				// console.log(<php echo $this->session->userdata('rolename') ?>);
  				$('#exampleModalLabel').text('Edit Data'); //name view 
  				$('#btnsubmit').text('Update'); //name Update  
  				document.getElementById("btnsubmit").style.visibility = "visible";

  				document.getElementById("btn_reject_footer").style.visibility = "hidden";
  				document.getElementById("btn_approve_footer").style.visibility = "hidden";
  				if ('<?php echo $this->session->userdata('rolename') ?>' === 'Administrator FA' || '<?php echo $this->session->userdata('rolename') ?>' == 'Super Admin') { //untuk administrator bisa update

  					document.getElementById('director').disabled = false;
  					document.getElementById('title').readOnly = false;
  				}


  			}

  		}
  		$('input[type=radio][name=payment_terms]').change(function() {
  			// console.log(this.value);
  			if (this.value == 'C30D') {
  				$("#card_cicilan").css('display', 'none');

  			} else if (this.value == 'partial') {
  				$("#card_cicilan").css('display', 'block');

  			} else {
  				$("#card_cicilan").css('display', 'block');
  			}
  		});

  	}

  	/// @see view_modal_cicilan
  	/// @note Menampilkan modal(View,Edit)
  	/// @attention Menampilkan modal,mengisi data field apabila status view or edit or add(beberapa field otomatis terisi)
  	function view_modal_cicilan(hdrid1, status) {
  		if (status == "Add") {

  		} else {

  			// Get Hdri ID

  			let str = hdrid1;
  			const myArr = str.split("#");
  			$('#hdrid_cil').val(myArr[0]);
  			$('#no_cicilan').val(myArr[1]);
  			var hdrid_cil = myArr[0];
  			var no_cicilan = myArr[1];

  			// Ajax isi data
  			$.ajax({
  				url: "<?php echo base_url('c_dn/ajax_getbytrxid') ?>",
  				method: "get",
  				dataType: "JSON",
  				data: {
  					"hdrid": hdrid_cil,
  					"no_cicilan": no_cicilan
  				},
  				success: function(data) {

  					// ---------------------------------- Data val Macro Batas sini ---------------------------------                  
  					$('#no_cicilan').val(data.no_cicilan);
  					$('#hdrid_cil').val(data.hdrid);
  					$('#no_cicilan_history').val(data.no_cicilan);
  					$('#month').val(data.month);
  					$('#amount2').val(data.amount);

  					// ---------------------------------- / Data val Macro  Batas sini ------------------------------


  				},
  				error: function(e) {
  					alert(e);
  				}
  			});

  			// Add Data


  			// fungsi untuk disable dan enable button  
  			if (status == "View") {
  				$('#exampleModalLabel').text('View Data'); //name view 
  				$('#btnsubmit').text('Tes'); //name Update               
  				document.getElementById("btnsubmit").style.visibility = "hidden";

  				<?php if ($menu_name == "Approval Debit Note") { ?>
  					document.getElementById("btn_approve_footer").style.display = "";
  					document.getElementById("btn_reject_footer").style.display = "";
  				<?php } else { ?>
  					document.getElementById("btn_approve_footer").style.display = "none";
  					document.getElementById("btn_reject_footer").style.display = "none";
  				<?php } ?>


  			} else {

  				// $('#exampleModalLabel').text('Edit Data'); //name view 
  				// $('#btnsubmit').text('Update'); //name Update  
  				document.getElementById("btnsubmit").style.visibility = "visible";

  				document.getElementById("btn_reject_footer").style.visibility = "hidden";
  				document.getElementById("btn_approve_footer").style.visibility = "hidden";


  			}

  		}

  	}




  	/// @see  ajax_getapproval
  	/// @note untuk siapa saja sudah approve
  	/// @attention
  	function ajax_getapproval($hdrid) {

  		//Cari data current Approval
  		$.ajax({
  			url: "<?php echo base_url('c_dn/ajax_getapproval_dn') ?>",
  			method: "GET",
  			dataType: "JSON",
  			data: {
  				hdrid: $hdrid
  			},
  			success: function(data) {

  				// $('#position_code').val(data.position_code);
  				// $('#hdrid').val(data.hdrid);   
  				if (data.nik == "<?php echo $this->session->userdata('user_name') ?>") { // 

  					// Tampil tombol
  					// document.getElementById("btn_approve_footer").style.display = ""; 
  					// document.getElementById("btn_reject_footer").style.display = "";

  					// isi data
  					$('#idapprove').text($hdrid);
  					$('#iduserlogin').text(data.nik);
  					$('#lbluserconfirm').text(data.name);
  					$('#idposition_code').text(data.position_code);
  					$('#position_code').val(data.position_code);
  					// <label id="idapprove2" > </label>Apakah ingin approve <label id="idapprove"  > </label> ?
  					// <label id="idposition_code" > </label>
  					// <br>
  					// <label id="lblposition" > </label>
  					// <br>
  					// <label id="lbluserconfirm" hidden> <php echo $this->session->userdata('nama'); ?> </label>
  					// <label id="iduserlogin" hidden> <php echo $this->session->userdata('user_name'); ?> </label>


  				}
  				// else if("<php echo $this->session->userdata('') ?>"==''){ //untuk administrator bisa update

  				// document.getElementById("btn_approve_footer").style.display = "none";
  				// document.getElementById("btn_reject_footer").style.display = "none";

  				// }
  				else { // tidak responsible

  					// document.getElementById("btn_approve_footer").style.display = "none"; 
  					// document.getElementById("btn_reject_footer").style.display = "none";

  					// Cek approver
  					$('#iduserlogin').text("");
  					$('#lbluserconfirm').text("");
  					$('#position_code').text("");

  				}

  			},
  			error: function(e) {
  				alert(e);

  			}
  		});

  	}
  </script>

  <script>
  	//Trigger ketika cursor pindah ke text amount  maka akan menjalankan fungsi terbilang
  	var rupiah = document.getElementById('amount');
  	rupiah.addEventListener('keyup', function(e) {

  		//  terbilang(this.value);
  	});

  	/// @see  terbilang
  	/// @note fungsi untuk membuat angka menjadi string seperti 100000 menjadi one thousand hundred
  	/// @attention jika input angka maka angka tersebut menyesuaikan string dari number tersebut
  	function terbilang(angka) {

  		var standards = angka.replace(/[^,\d]/g, '').toString();
  		var bilangan = angka.replace(/[^,\d]/g, '').toString();

  		bilangan = bilangan.replace(',', '');
  		standards = standards.replace(',', '');
  		// alert(bilangan,standards);

  		var kalimat = "";
  		var angka = new Array('0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0');
  		var kata = new Array('', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten');
  		var tingkat = new Array('', 'Thousand', 'Million', 'Billion', 'Trillion');
  		var panjang_bilangan = bilangan.length;

  		/* pengujian panjang bilangan */
  		if (panjang_bilangan > 15) {

  			kalimat = "Diluar Batas";

  		} else {

  			/* mengambil angka-angka yang ada dalam bilangan, dimasukkan ke dalam array */
  			for (i = 1; i <= panjang_bilangan; i++) {
  				angka[i] = bilangan.substr(-(i), 1);
  			}

  			var i = 1;
  			var j = 0;

  			/* mulai proses iterasi terhadap array angka */
  			while (i <= panjang_bilangan) {

  				subkalimat = "";

  				kata1 = "";
  				kata2 = "";
  				kata3 = "";

  				/* untuk Ratusan */
  				if (angka[i + 2] != "0") {
  					kata1 = kata[angka[i + 2]] + " hundred";
  				}

  				/* untuk Puluhan atau Belasan */
  				if (angka[i + 1] != "0") {
  					if (angka[i + 1] == "1") {
  						/* Belasan */
  						if (angka[i] == "0") {
  							kata2 = "Ten";
  						} else if (angka[i] == "1") {
  							kata2 = "Eleven";
  						} else if (angka[i] == "2") {
  							kata2 = "Twelve";
  						} else if (angka[i] == "3") {
  							kata2 = "Thirteen";
  						} else {
  							kata2 = kata[angka[i]] + "teen";
  						}
  					} else if (angka[i + 1] == "2") {
  						/* Puluhan 2puluh */
  						kata2 = "Twenty";
  					} else if (angka[i + 1] == "8") {
  						/* 8 dihilangkan double karakter Eightty jadi Eighty */
  						kata2 = kata[angka[i + 1]] + "y";
  					} else {
  						kata2 = kata[angka[i + 1]] + "ty";
  					}
  				}

  				/* untuk Satuan */
  				if (angka[i] != "0") {
  					if (angka[i + 1] != "1") {
  						kata3 = kata[angka[i]];
  					}
  				}

  				/* pengujian angka apakah tidak nol semua, lalu ditambahkan tingkat */
  				if ((angka[i] != "0") || (angka[i + 1] != "0") || (angka[i + 1] != "0")) {
  					subkalimat = kata1 + " " + kata2 + " " + kata3 + " " + tingkat[j] + " ";
  				}

  				/* gabungkan variabe sub kalimat (untuk Satu blok 3 angka) ke variabel kalimat */
  				kalimat = subkalimat + kalimat;
  				i = i + 3;
  				j = j + 1;

  			}


  		}

  		// alert(kalimat);
  		/* trerror(kalimat); */
  		$('#amount_in_word').val(kalimat);


  	}
  </script>



  <script type="text/javascript">
  	/// @see  Simpan_data
  	/// @note untuk membuat trigger jika data tersimpan
  	/// @attention data tersimpan notifikasi berhasil
  	function Simpan_data($trigger) {

  		// Show_temporary();
  		// console.log(parseFloat(document.getElementById("ttl").textContent) !=  parseFloat($('#amount_total').val()));
  		if ($('input[type=radio][name=payment_terms]:checked').val() == 'partial') {
  			if (parseFloat(document.getElementById("ttl").textContent) != parseFloat($('#amount_total').val())) {
  				gagal("Total cicilan tidak sama dengan amount cicilan");
  				return;
  			}
  		}
  		// Form data
  		var fdata = new FormData();

  		//  Form data collect name value
  		var form_data = $('#quickForm').serializeArray();
  		$.each(form_data, function(key, input) {
  			if (input.name != 'detailCicilan_length') {
  				fdata.append(input.name, input.value);
  			}
  		});

  		// Penanganan jika ada type check Box uncheck
  		$('#quickForm input[type="checkbox"]:not(:checked)').each(function(i, e) {
  			fdata.append(e.getAttribute("name"), "Off");
  		});

  		// Penanganan jika ada type attach file
  		$('#quickForm input[type="file"]').each(function(i, e) {
  			// jika ada file attach maka akan ditambahkan  
  			if ($('#' + e.getAttribute("name")).val()) {
  				var file_data = $('#' + e.getAttribute("name")).prop('files')[0];
  				fdata.append(e.getAttribute("name"), file_data);
  			}
  		});


  		// Print_r(file_data);
  		// Simpan or Update data          
  		var vurl;
  		if ($trigger == 'Add') {
  			vurl = "<?php echo base_url('c_dn/ajax_add') ?>";
  			fdata.append("finish_settlement_dn_amount", $('#amount_total').val());
  			fdata.append("director", "<?php echo $director->director; ?>");

  		} else {
  			vurl = "<?php echo base_url('c_dn/ajax_update') ?>";
  		}

  		$.ajax({
  			url: vurl,
  			method: "post",
  			processData: false,
  			contentType: false,
  			data: fdata,
  			success: function(data) {

  				// Pesan berhasil
  				berhasil(data.status);

  				// Reset Form
  				$('#quickForm')[0].reset();

  				// location.reload();


  				// if(!$trigger="Add"){
  				//   $("#modal-default").modal('hide');
  				// }

  				$("#modal-default").modal('hide');

  				fdata.append("hdrid", data.status);
  				// fdata.append('hdrid',$('#hdrid').val());
  				fdata.append('nikreq', $('#nik').val());
  				// console.log($('#nik').val());
  				// Update dan notifikasi email;
  				$.ajax({
  					url: "<?php echo base_url('C_email_v2/ajax_new_release') ?>",
  					method: "post",
  					processData: false,
  					contentType: false,
  					data: fdata,
  					success: function(data) {
  						tabel.draw();
  						//  location.reload();
  					},
  					error: function(e) {
  						//  gagal(e);
  						tabel.draw();
  						//  location.reload();
  					}
  				});




  			},
  			error: function(e) {
  				gagal(e);
  				//location.reload();
  				//error
  			}
  		});

  		//           }
  		//         },
  		//     error: function (e) {
  		//     }
  		// });


  	}




  	/// @see  Delete_data()
  	/// @note untuk membuat trigger jika data sudah terhapus
  	/// @attention data terhapus juga notifikasi terhapus
  	function Delete_data() {

  		// Form data
  		var fdata = new FormData();

  		// Delete by Hdrid
  		fdata.append('hdrid', $('#iddelete').text());
  		// Url Post delete
  		vurl = "<?php echo base_url('c_dn/ajax_delete') ?>";

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

  	/// @see  Delete_temporary()
  	/// @note untuk membuat trigger jika di cicilan sudah terhapus di card cicilan dan jika memilih C30D  makan card cicilan hidden
  	/// @attention data cicilan terhapus jika memilih C30D
  	function Delete_temporary() {

  		// $('#card_cicilan').hide();
  		// document.getElementById("card_cicilan").style.display = "none";
  		// Form data
  		var fdata2 = new FormData();

  		// Delete by Hdrid
  		fdata2.append('hdrid', '<?php echo $this->session->userdata('user_name'); ?>');
  		// Url Post delete
  		vurl = "<?php echo base_url('c_dn/ajax_delete_temporary') ?>";

  		// Post data
  		$.ajax({
  			url: vurl,
  			method: "post",
  			processData: false,
  			contentType: false,
  			data: fdata2,
  			success: function(data) {

  				tabel2.draw();
  				tabel3.draw();
  			},
  			error: function(e) {
  				//Pesan Gagal
  				gagal(e);
  			}
  		});

  	}



  	/// @see  Update_data()
  	/// @note untuk membuat trigger jika data sudah terupdate
  	/// @attention data update notifikasi juga terupdate
  	function Update_data() {

  		// Form data
  		var fdata = new FormData();

  		// Delete by Hdrid
  		fdata.append('hdrid', $('#idupdate').text());
  		// Url Post delete
  		vurl = "<?php echo base_url('c_dn/ajax_update') ?>";

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

  	//  HDRID selected KonfirmasiApprove
  	$(document).on("click", ".konfirmasiApprove", function() {
  		let str = $(this).attr("data-id");
  		const myArr = str.split("#");
  		$('#iddelete').text(myArr[0]);
  	})

  	//  HDRID selected KonfirmasiReturn
  	$(document).on("click", ".konfirmasiHapuscicilan", function() {
  		let str = $(this).attr("data-id");
  		const myArr = str.split("#");
  		$('#hdrid_cicilan').text(myArr[0]);
  		$('#iddeletecicilan').text(myArr[1]);
  	})

  	//  HDRID selected  konfirmasiEdit
  	$(document).on("click", ".konfirmasiEdit", function() {
  		view_modal($(this).attr("data-id"), 'Edit');
  	})

  	//  HDRID selected  konfirmasiEdit
  	$(document).on("click", ".konfirmasiEditcicilan", function() {


  		view_modal_cicilan($(this).attr("data-id"), 'Edit');



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
  <style>
  	.toast-top-center {
  		top: 10%;
  		margin: 0 auto;
  		border-radius: 5px;
  		/* left: 50%; */
  	}
  </style>

  <script type="text/javascript">
  	$('.select2').select2();

  	//Date range picker
  	$('#reservationdate').datetimepicker({
  		format: 'L'
  	});


  	//Date range picker
  	$('#startdate').datetimepicker({
  		format: 'L'
  	});

  	//Date range picker
  	$('#enddate').datetimepicker({
  		format: 'L'
  	});

  	//Date range picker
  	$('#timepickerfinish_settlement_dn_date').datetimepicker({
  		format: 'L',
  		minDate: new Date(2022, 1 - 1)
  	});
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
  	var tabel2 = null;
  	var tabel3 = null;
  	// const createdCell = function(cell) {
  	//       let original;
  	//       cell.setAttribute('contenteditable', true)
  	//       cell.setAttribute('spellcheck', false)
  	//       cell.addEventListener("focus", function(e) {
  	//         original = e.target.textContent
  	//       })
  	//       cell.addEventListener("blur", function(e) {
  	//         if (original !== e.target.textContent) {
  	//           const row = tabel3.row(e.target.parentElement)
  	//           console.log('Row changed: ', row.data())
  	//         vurl = "<php echo base_url('C_cn/ajax_update_cn')?>";

  	//           $.ajax({
  	//           url: vurl,
  	//           method: "post",
  	//           processData: false,
  	//           contentType: false,
  	//           data: row.data(),
  	//           success: function (data) {
  	//           },
  	//           error: function (e) {
  	//               //Pesan Gagal
  	//               //gagal(e);             
  	//           }
  	//       });
  	//         }
  	//       })
  	//     };
  	$(document).ready(function() {

  		tabel3 = $('#detailCicilan').DataTable({


  			"processing": true,
  			"responsive": false,
  			"serverSide": true,
  			"autowidth": false,
  			"info": true,
  			"ordering": true, // Set true agar bisa di sorting
  			"order": [
  				[1, 'asc']
  			], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
  			"ajax": {
  				// status=="Edit Data"
  				"url": "<?= base_url('C_dn/View_cicilan_dn'); ?>",
  				"type": "POST",
  				"data": function(data) {
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

  			"columns": [{
  					"data": 'hdrid',
  					"sortable": false, //1
  					render: function(data, type, row, meta) {
  						// return meta.row + meta.settings._iDisplayStart + 1;
  						// return '<div class="btn btn-success btn-sm konfirmasiView" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div> <div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div> <div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
  						mnu = '';
  						<?php if ($this->session->userdata('rolename') == 'Administrator FA' || $this->session->userdata('rolename') == 'Super Admin') { ?>
  							mnu = mnu + '<div class="btn btn-primary btn-sm konfirmasiEditcicilan" data-id="' + row.hdrid + "#" + row.no_cicilan + '" data-toggle="modal" data-target="#modal-cicilan"> <i class="fa fa-edit"></i></div>';
  							//Tombol Delete
  							mnu = mnu + '<div class="btn btn-danger btn-sm konfirmasiHapuscicilan" data-id="' + row.hdrid + "#" + row.no_cicilan + '" data-toggle="modal" data-target="#modal-delete-cicilan" > <i class="fa fa-trash"></i></div>';
  						<?php } ?>
  						// mnu=mnu+'<div class="btn btn-success btn-sm konfirmasiView" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div>';
  						<?php if ($menu_name == 'Add Debit Note') {
								if ($this->session->userdata('rolename') == 'User DNCN') { ?>
  								// Tombol Edit
  								mnu = mnu + '<div class="btn btn-primary btn-sm konfirmasiEditcicilan" data-id="' + row.hdrid + "#" + row.no_cicilan + '" data-toggle="modal" data-target="#modal-cicilan"> <i class="fa fa-edit"></i></div>';
  								//Tombol Delete
  								mnu = mnu + '<div class="btn btn-danger btn-sm konfirmasiHapuscicilan" data-id="' + row.hdrid + "#" + row.no_cicilan + '" data-toggle="modal" data-target="#modal-delete-cicilan" > <i class="fa fa-trash"></i></div>';
  						<?php }
							} ?>
  						return mnu;

  					}
  				},
  				{
  					"data": "no_cicilan"
  				},
  				{
  					"data": "month"
  				},
  				{
  					"data": "amount"
  				},

  			],


  			"footerCallback": function(row, data, start, end, display) {
  				var api = this.api(),
  					data;

  				// converting to interger to find total
  				var intVal = function(i) {
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
  					.data().reduce(function(a, b) {
  						return intVal(a) + intVal(b);
  						// return parseFloat(a) + parseFloat(b);
  					}, 0);
  				// Update footer by showing the total with the reference of the column index 
  				var montotal1 = monTotal.toLocaleString(undefined, {
  					minimumFractionDigits: 2
  				});
  				$('#ttl').text(montotal1);
  				var total = parseFloat(document.getElementById('amount_total').value.replace(/[,\s]/g, '')) - parseFloat(monTotal);
  				var total_format = total.toLocaleString(undefined, {
  					minimumFractionDigits: 2
  				});
  				$('#balance').text(total_format);
  				// Show_temporary();
  				// $( api.column(1).footer() ).html(monTotal);

  			},


  		}); //add tfoot




  		tabel = $('#example1').DataTable({
  			"processing": true,
  			"responsive": true,
  			"serverSide": true,
  			"ordering": true, // Set true agar bisa di sorting
  			// <php if($menu_name =="Summary Debit Note"){ ?>
  			"createdRow": function(row, data, dataIndex) {
  				if (data.status_transaction == 'Waiting Settlement DN') { //tanggal expire - tanggal sekarang
  					$(row).css("background-color", "pink"); // jika sudah expire maka akan warna merah muda
  				} else if (data.status_transaction == 'Debit Note Complete') { //jika kondisi approve sudah done
  					$(row).css("background-color", "#7FFFD4"); // maka akan warna hijau
  				} else {

  				}

  			},
  			// <php } ?>

  			"order": [
  				[0, 'asc']
  			], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
  			dom: "lfBrtip",
  			buttons: [{
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
  					customize: function(xlsx) {
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
  			"ajax": {
  				"url": "<?= base_url('c_dn/view_data_where'); ?>", // URL file untuk proses select datanya
  				"type": "POST",
  				"data": function(data) {
  					data.searchByFromdate = $('#search_fromdate').val();
  					data.searchByTodate = $('#search_todate').val();
  					data.menu_name = '<?php echo $menu_name ?>';
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
  						// return '<div class="btn btn-success btn-sm konfirmasiView" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div> <div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div> <div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
  						mnu = '';
  						mnu = mnu + '<div class="btn btn-success btn-sm konfirmasiView" data-id="' + data + '" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div>';

  						// Tombol Edit
  						<?php if (!empty($hak_akses)) {
								if ($hak_akses->allow_edit == 'on') { ?>
  								mnu = mnu + '<div class="btn btn-primary btn-sm konfirmasiEdit" data-id="' + data + '" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
  						<?php }
							} ?>

  						//Tombol Delete
  						<?php if (!empty($hak_akses)) {
								if ($hak_akses->allow_delete == 'on') { ?>
  								mnu = mnu + '<div class="btn btn-danger btn-sm konfirmasiHapus" data-id="' + data + '" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div>';
  						<?php }
							} ?>
  						mnu = mnu + ' <a class="btn btn-secondary btn-sm mr-2"  href="<?php echo base_url('C_Print_dn/print_dn?var1=') . "'+ data +' &var2='+ row.hdrid +'&var3=1" ?>"  target="_blank"> <i class="fas fa-print mr-1"></i>A4</a>'

  						mnu = mnu + ' <a class="btn btn-secondary btn-sm mr-2"  href="<?php echo base_url('C_Print_dn/print_dn_details?var1=') . "'+ data +' &var2='+ row.hdrid +'&var3=1" ?>"  target="_blank"> <i class="fas fa-print mr-1"></i>A4 Details</a>'

  						return mnu;

  					}
  				},

  				// ---------------------------------- Datatables Macro Batas sini ---------------------------------

  				{
  					"data": "hdrid"
  				},
  				{
  					"data": "date_of_issue"
  				},
  				{
  					"data": "name"
  				},
  				{
  					"data": "nik"
  				},
  				{
  					"data": "status_transaction"
  				},
  				{
  					"data": "section"
  				},
  				{
  					"data": "company_to"
  				},
  				{
  					"data": "company_address"
  				},
  				{
  					"data": "company_address1"
  				},
  				{
  					"data": "company_address2"
  				},
  				{
  					"data": "attention"
  				},
  				{
  					"data": "attention_departement"
  				},
  				{
  					"data": "email_and_telp"
  				},
  				{
  					"data": "detail_request"
  				},
  				{
  					"data": "reference"
  				},
  				{
  					"data": "budget"
  				},
  				{
  					"data": "account"
  				},
  				{
  					"data": "payment_terms"
  				},
  				{
  					"data": "banyak_cicilan"
  				},
  				{
  					"data": "transfer_to"
  				},
  				{
  					"data": "transfer_address"
  				},
  				{
  					"data": "currency"
  				},
  				{
  					"data": "idr"
  				},
  				{
  					"data": "usd"
  				},
  				{
  					"data": "eur"
  				},
  				{
  					"data": "jpy"
  				},
  				{
  					"data": "swift_code"
  				},
  				{
  					"data": "account_name"
  				},
  				{
  					"data": "amount"
  				},
  				{
  					"data": "amount_total"
  				},
  				{
  					"data": "amount_in_word"
  				},
  				{
  					"data": "dpp"
  				},
  				{
  					"data": "vat"
  				},
  				// {"data":"vat_persen"},
  				{
  					"data": "vat_nominal"
  				},
  				// {"data":"vat_total"},
  				{
  					"data": "dmia_bank_account"
  				},
  				{
  					"data": "transfer_name"
  				},
  				{
  					"data": "bank_name"
  				},
  				{
  					"data": "account_number"
  				},
  				{
  					"data": "attachment1"
  				},
  				{
  					"data": "attachment2"
  				},
  				{
  					"data": "attachment3"
  				},
  				{
  					"data": "attachment4"
  				},
  				{
  					"data": "director"
  				},
  				{
  					"data": "title"
  				},
  				{
  					"data": "approver_dept_user"
  				},
  				{
  					"data": "approver_dept_finance"
  				},
  				{
  					"data": "finish_settlement_dn_bank"
  				},
  				{
  					"data": "finish_settlement_dn_amount"
  				},
  				// {"data":"finish_settlement_dn_date"},

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
  				"url": "<?= base_url('c_dn/view_data_whereapproval'); ?>",
  				"type": "POST",
  				"data": function(data) {
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
  					"data": "nik"
  				},
  				{
  					"data": "name"
  				},
  				{
  					"data": "department_code"
  				},
  				{
  					"data": "department_name"
  				},
  				{
  					"data": "office_email"
  				},
  				{
  					"data": "position_code"
  				},
  				{
  					"data": "position_name"
  				},
  				{
  					"data": "date_approve"
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
  	/// @see  vreadonly
  	/// @note fungsi untuk readonly
  	/// @attention jika data sudah setting readonly maka data tidak bisa diinput
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

  <script type="text/javascript">
  	$(document).ready(function() {
  		bsCustomFileInput.init();
  	});
  </script>


  <script type="text/javascript">
  	/// @see  handleSelectChange_tb_add_advance3_id
  	/// @note fungsi untuk menarik data dari table
  	/// @attention data sudah otomatis muncul jika sudah disetting select filter
  	function handleSelectChange_tb_add_advance3_id(event) {

  		var data = $('#tb_add_advance3_id').select2('data')[0].text;

  		if (data == '-Select-') {
  			$('#tb_add_advance3_name').val('');
  		} else {
  			var res = data.split("-");
  			$('#tb_add_advance3_name').val(res[1]);
  		};

  	}


  	/// @see  handleSelectChange_finish_settlement_dn_bank
  	/// @note fungsi untuk menarik data dari table
  	/// @attention data sudah otomatis muncul jika sudah disetting select filter
  	function handleSelectChange_finish_settlement_dn_bank(event) {

  		//  By Text
  		var value = $("#finish_settlement_dn_bank option:selected").text();
  		var res = value.split("-");

  	}

  	/// @see  handleSelectChange_use_bud
  	/// @note fungsi untuk menarik data dari table
  	/// @attention data sudah otomatis muncul jika sudah disetting select filter
  	function handleSelectChange_use_bud(event) {

  		var data = $('#using_budget').select2('data')[0].text;

  	}

  	/// @see  handleSelectChange_kode_section
  	/// @note fungsi untuk menarik data dari table
  	/// @attention data sudah otomatis muncul jika sudah disetting select filter
  	function handleSelectChange_kode_section(event) {

  		var data = $('#kode_section_budget').select2('data')[0].text;

  		if (data == '-Select-') {
  			$('#department_code').val('');
  			$('#nama_section_budget').val('');
  		} else {
  			var res = data.split("-");
  			$('#department_code').val(res[0]);
  			$('#nama_section_budget').val(res[1]);
  		};

  	}

  	/// @see handleSelectChange_company_to
  	/// @note fungsi untuk menarik data dari table
  	/// @attention data sudah otomatis muncul jika sudah disetting select filter
  	function handleSelectChange_company_to(event) {

  		var data = $('#company_to').select2('data')[0].text;

  		if (data == '-Select-') {
  			$('#company_to').val('');
  			$('#company_address').val('');
  			$('#company_address1').val('');
  			$('#company_address2').val('');
  			$('#attention').val('');
  			$('#attention_departement').val('');
  			$('#email_and_telp').val('');
  		} else {
  			var res = data.split("$");
  			$('#company_to').val(res[0]);
  			$('#company_address').val(res[1]);
  			$('#company_address1').val(res[2]);
  			$('#company_address2').val(res[3]);
  			$('#attention').val(res[4]);
  			$('#attention_departement').val(res[5]);
  			$('#email_and_telp').val(res[6]);
  		};

  	}



  	/// @see  handleSelectChange_account
  	/// @note fungsi untuk menarik data dari table
  	/// @attention data sudah otomatis muncul jika sudah disetting select filter
  	function handleSelectChange_account(event) {

  		//  By Text
  		var value = $("#account option:selected").text();
  		var res = value.split("-");

  	}

  	// function handleSelectChange_transfer_to(event) {

  	//   var data = $('#transfer_to').select2('data')[0].text;

  	// if (data=='-Select-'){
  	//     $('#transfer_address').val('');
  	//     $('#idr').val('');
  	//     $('#usd').val('');
  	//     $('#eur').val('');
  	//     $('#swift_code').val('');
  	//     $('#account_name').val('');
  	// }else{
  	//     var res = data.split("-");
  	//     $('#transfer_address').val(res[1]);
  	//     $('#idr').val(res[2]);
  	//     $('#usd').val(res[3]);
  	//     $('#eur').val(res[4]);
  	//     $('#swift_code').val(res[5]);
  	//     $('#account_name').val(res[6]);
  	//   };

  	// }


  	/// @see handleSelectChange_director
  	/// @note fungsi untuk menarik data dari table
  	/// @attention data sudah otomatis muncul jika sudah disetting select filter
  	function handleSelectChange_director(event) {

  		var data = $('#director').select2('data')[0].text;

  		if (data == '-Select-') {
  			$('#director').val('');
  			$('#title').val('');
  		} else {
  			var res = data.split("-");
  			$('#director').val(res[0]);
  			$('#title').val(res[1]);
  		};



  	}

  	/// @see   handleSelectChange_currency
  	/// @note fungsi untuk menarik data dari table
  	/// @attention data sudah otomatis muncul jika sudah disetting select filter
  	function handleSelectChange_currency(event) {

  		//  By Text
  		var value = $("#currency option:selected").text();
  		var res = value.split("-");

  	}


  	/// @see handleSelectChange_vat
  	/// @note fungsi untuk menarik data dari table
  	/// @attention data sudah otomatis muncul jika sudah disetting select filter
  	function handleSelectChange_vat(event) {
  		var data = $('#vat').select2('data')[0].text;

  		if (data == '-Select-') {
  			$('#vat').val('');

  		} else {
  			var res = data.split("-");
  			$('#vat').val(res[0]);
  			count_vat(event);


  		}


  	}

  	/// @see count_vat
  	/// @note fungsi untuk menghitung angka
  	/// @attention angka akan otomatis terhitung jika diinput angkanya
  	function count_vat(event) {

  		var vat_nom = parseFloat(document.getElementById('dpp').value.replace(/[,\s]/g, '')) * parseInt(document.getElementById('vat').value.replace('%', '')) / 100;
  		document.getElementById('vat_nominal').value = Math.floor(vat_nom).toLocaleString(undefined, {
  			minimumFractionDigits: 2
  		});

  		var amount_total = parseFloat(document.getElementById('vat_nominal').value.replace(/[,\s]/g, '')) + parseFloat(document.getElementById('dpp').value.replace(/[,\s]/g, ''));
  		var ttl = amount_total.toLocaleString().replace(",", "");

  		if (document.getElementById('currency').value == 'IDR') {
  			document.getElementById('amount_total').value = Math.floor(amount_total).toLocaleString(undefined, {
  				minimumFractionDigits: 2
  			});
  		} else {
  			document.getElementById('amount_total').value = amount_total.toLocaleString(undefined, {
  				minimumFractionDigits: 2
  			});
  		}

  		words = toWords(ttl);
  		$("#amount_in_word").val(words + document.getElementById('currency').value);
  		tabel3.draw();
  		// Show_temporary();

  	}

  	// function koma(event) {

  	// var total = document.getElementById('amount_total').value;
  	// $output = round($total, 3, '00');

  	// }
  	/// @see  handleSelectChange_tipe_transfer
  	/// @note fungsi untuk menarik data dari table
  	/// @attention data sudah otomatis muncul jika sudah disetting select filter
  	function handleSelectChange_tipe_transfer(event) {

  		//  By Text
  		var value = $("#tipe_transfer option:selected").text();
  		var res = value.split("-");

  	}

  	/// @see handleSelectChange_payee_code
  	/// @note fungsi untuk menarik data dari table
  	/// @attention data sudah otomatis muncul jika sudah disetting select filter
  	function handleSelectChange_payee_code(event) {

  		//  By Text
  		var value = $("#payee_code option:selected").text();
  		var res = value.split("-");

  	}

  	/// @see handleSelectChange_section
  	/// @note fungsi untuk menarik data dari table
  	/// @attention data sudah otomatis muncul jika sudah disetting select filter
  	function handleSelectChange_section(event) {

  		//  By Value
  		var value = $("#kode_section_budget option:selected").text();
  		var res = value.split("-");
  		$('#nama_section_budget').val(res[1]);

  	}


  	/// @see numberic_format
  	/// @note fungsi untuk format angka
  	/// @attention angka diinput akan mengikuti numberic format(Undefined default US bisa diganti sesuai negara)
  	function numberic_format(event) {

  		var selectElement = event.target;
  		var number = parseFloat(selectElement.value);
  		selectElement.value = number.toLocaleString(undefined, {
  			minimumFractionDigits: 2
  		});

  	}

  	/// @see myFunction
  	/// @note Menghilangkan , 
  	/// @attention menghilangkan , di field yang memakai fungsi ini
  	function myFunction(x) {
  		x.value = x.value.replace(/[,\s]/g, '');
  	}

  	/// @see cekdup
  	/// @note fungsi untuk data tidak bisa duplicate
  	/// @attention jika diinput data yang sama akan muncul notif duplicate
  	function cekdup(event) {

  		var selectElement = event.target;
  		var fdata2 = new FormData();

  		fdata2.append('reference', selectElement.value);


  		var vurl2;
  		vurl2 = "<?php echo base_url('c_dn/ajax_cekdup') ?>";

  		$.ajax({
  			url: vurl2,
  			method: "post",
  			processData: false,
  			contentType: false,
  			data: fdata2,
  			success: function(data) {
  				if (data.status === 'DUPLICATE') {
  					gagal(data.status);
  				} else if (data === 'AVAILABLE') {

  				}
  			},
  			error: function(e) {

  				berhasil(e);
  			}
  		});

  	}

  	/// @see Add_cicilan_row
  	/// @note Tambah row cicilan
  	/// @attention Menambah row di list cicilan
  	function Add_cicilan_row() {

  		var fdata2 = new FormData();
  		if ($('#hdrid').val() == '') {
  			fdata2.append('hdrid', '<?php echo $this->session->userdata('user_name'); ?>');
  		} else {
  			fdata2.append('hdrid', $('#hdrid').val());
  		}


  		var vurl2;
  		vurl2 = "<?php echo base_url('c_dn/Ajax_Add_Row') ?>";

  		$.ajax({
  			url: vurl2,
  			method: "post",
  			processData: false,
  			contentType: false,
  			data: fdata2,
  			success: function(data) {
  				tabel3.draw();

  			},
  			error: function(e) {

  				berhasil(e);
  			}
  		});

  	}

  	/// @see  Delete_data_cicilan()
  	/// @note Delete data
  	/// @attention Mengirim hdrid,no cicilan ke controller 
  	function Delete_data_cicilan() {

  		// Form data
  		var fdata = new FormData();

  		// Delete by Hdrid

  		fdata.append('no_cicilan', $('#iddeletecicilan').text());
  		fdata.append('hdrid', $('#hdrid_cicilan').text());
  		// Url Post delete
  		vurl = "<?php echo base_url('C_dn/ajax_delete_cicilan') ?>";

  		// Post data
  		$.ajax({
  			url: vurl,
  			method: "post",
  			processData: false,
  			contentType: false,
  			data: fdata,
  			success: function(data) {

  				// Hide modal delete
  				$('#modal-delete-cicilan').modal('hide');
  				// Delete rows datatables
  				$('#detailCicilan').DataTable().row("#" + $('#iddeletecicilan').text()).remove().draw();
  				// Pesan berhasil
  				berhasil(data.status);

  			},
  			error: function(e) {
  				//Pesan Gagal
  				gagal(e);
  			}
  		});

  	}

  	/// @see  Update_data()
  	/// @note untuk membuat trigger jika data sudah terupdate
  	/// @attention data update notifikasi juga terupdate
  	function Update_cicilan() {

  		// Form data
  		var fdata = new FormData();

  		fdata.append('hdrid', $('#hdrid_cil').val());
  		fdata.append('no_cicilan', $('#no_cicilan').val());
  		fdata.append('no_cicilan_history', $('#no_cicilan_history').val());
  		fdata.append('month', $('#month').val());
  		fdata.append('amount', $('#amount2').val());
  		// Url Post delete
  		vurl = "<?php echo base_url('c_dn/ajax_update_dn') ?>";

  		// Post data
  		$.ajax({
  			url: vurl,
  			method: "post",
  			processData: false,
  			contentType: false,
  			data: fdata,
  			success: function(data) {

  				// Hide modal delete
  				$('#modal-cicilan').modal('hide');
  				$('#detailCicilan').DataTable().row("#" + $('#no_cicilan').val()).draw();
  				// Pesan berhasil
  				berhasil(data.status);

  			},
  			error: function(e) {
  				//Pesan Gagal
  				gagal(e);
  			}
  		});

  	}

  	/// @see Update_director
  	/// @note Update director(Administrator FA OR Super Admin Only)
  	/// @attention Update director,title 
  	function Update_director() {

  		// Form data

  		var fdata = new FormData();

  		fdata.append('hdrid', $('#hdrid').val());

  		fdata.append('director', $('#director').val());
  		fdata.append('title', $('#title').val());

  		// Url Post delete
  		vurl = "<?php echo base_url('C_dn/ajax_update_director') ?>";

  		// Post data
  		$.ajax({
  			url: vurl,
  			method: "post",
  			processData: false,
  			contentType: false,
  			data: fdata,
  			success: function(data) {


  				berhasil(data.status);

  			},
  			error: function(e) {
  				//Pesan Gagal
  				gagal(e);
  			}
  		});
  	}

  	/// @see Update_date
  	/// @note Update date(Administrator FA OR Super Admin Only)
  	/// @attention Update date of issue 
  	function Update_date() {

  		// Form data

  		var fdata = new FormData();

  		fdata.append('hdrid', $('#hdrid').val());

  		fdata.append('date_of_issue', $('#date_of_issue').val());

  		// Url Post delete
  		vurl = "<?php echo base_url('C_dn/ajax_update_date') ?>";

  		// Post data
  		$.ajax({
  			url: vurl,
  			method: "post",
  			processData: false,
  			contentType: false,
  			data: fdata,
  			success: function(data) {


  				berhasil(data.status);

  			},
  			error: function(e) {
  				//Pesan Gagal
  				gagal(e);
  			}
  		});
  	}

  	/// @see  Show_temporary()
  	/// @note untuk menampilkan jika memilih partial maka card cicilan akan muncul
  	/// @attention card partial akan muncul jika diklik
  	function Show_temporary() {


  		// toastr.options = {
  		//   "debug": false,
  		//   "positionClass": "toast-top-center",
  		//   "onclick": false,
  		//   "fadeIn": 300,
  		//   "fadeOut": 10000,
  		//   "timeOut": 50000,
  		//   "extendedTimeOut": 10000
  		// };

  		// if($('input[type=radio][name=payment_terms]:checked').val()== 'partial'){
  		//   if (parseFloat(document.getElementById("ttl").textContent) !=  parseFloat($('#amount_total').val())) {
  		//       gagal("Total cicilan tidak sama dengan amount cicilan");
  		//       return ;
  		//   }
  		// }
  		// else{

  		//     console.log('beda');
  		//     // console.log(parseFloat(document.getElementById("ttl").textContent) ==  parseFloat($('#amount_total').val()));
  		//   }




  	}
  </script>
