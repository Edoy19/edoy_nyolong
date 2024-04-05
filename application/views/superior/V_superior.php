<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Superior Form</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url('C_Dashboard') ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('C_superior') ?>">setting superior</a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('C_finance') ?>">setting finance</a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('C_reminder') ?>">setting reminder</a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo base_url('C_department') ?>">setting
                                departement</a></li>
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

                <div class="col-12">
                    <!-- .col -->

                    <div class="card">
                        <!-- .card -->

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
                                                            <a data-toggle="modal" data-target="#modal-default"
                                                                Onclick="view_modal('1','Add')" href="#">
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

                                                            <a data-toggle="collapse" data-parent="#accordion"
                                                                href="#collapseOne">
                                                                <i class="fa fa-binoculars"></i> Custom Filter
                                                            </a>

                                                            <!-- <a href="<php echo base_url('C_Email/send2')?> "  Onclick='Delete_data()' >
                                   <i class="fa fa-plus"></i> Send Mail
                                </a>

                                <button type="button" id="delete" onclick="Send_mail()" class="btn btn-outline-light">Send Mail 2</button>     -->

                                                        </h4>

                                                    </div>

                                                    <div id="collapseOne" class="panel-collapse collapse in">
                                                        <div class="card-body">

                                                            <!-- Date -->
                                                            <div class="form-group">

                                                                <label>Date From:</label>

                                                                <div class="input-group date"
                                                                    data-date-format="YYYY-MM-DD" id="startdate"
                                                                    data-target-input="nearest">
                                                                    <input type="text" id="search_fromdate"
                                                                        class="form-control datetimepicker-input"
                                                                        data-target="#startdate" />
                                                                    <div class="input-group-append"
                                                                        data-target="#startdate"
                                                                        data-toggle="datetimepicker">
                                                                        <div class="input-group-text"><i
                                                                                class="fa fa-calendar"></i></div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <!-- Date To-->
                                                            <div class="form-group">
                                                                <label>Date To:</label>
                                                                <div class="input-group date"
                                                                    data-date-format="YYYY-MM-DD" id="enddate"
                                                                    data-target-input="nearest">
                                                                    <input type="text" id="search_todate"
                                                                        class="form-control datetimepicker-input"
                                                                        data-target="#enddate" />
                                                                    <div class="input-group-append"
                                                                        data-target="#enddate"
                                                                        data-toggle="datetimepicker">
                                                                        <div class="input-group-text"><i
                                                                                class="fa fa-calendar"></i></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <button type="button" id="search"
                                                                class="btn btn-block btn-success" data-toggle="collapse"
                                                                data-target="#collapseOne">Search</button>

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

                        <div class="card-body">
                            <!-- .card-body -->

                            <table id="example1" class="table table-bordered display nowrap table-striped">

                                <thead>

                                    <tr>

                                        <!-- Th Macro Batas Sini -->

                                        <th>ACTION</th>
                                        <th>TRANSACTION ID</th>
                                        <th>NIK SUPERIOR</th>
                                        <th>NAME SUPERIOR</th>
                                        <th>KODE SECTION SUPERIOR </th>
                                        <th>NAME SECTION SUPERIOR</th>
                                        <th>EMAIL SUPERIOR </th>
                                        <th>NIK SUPERIOR 2</th>
                                        <th>NAME SUPERIOR 2</th>
                                        <th>KODE SECTION SUPERIOR 2</th>
                                        <th>NAME SECTION SUPERIOR 2</th>
                                        <th>EMAIL SUPERIOR 2</th>
                                        <th>NIK SUPERIOR 3</th>
                                        <th>NAME SUPERIOR 3</th>
                                        <th>KODE SECTION SUPERIOR 3</th>
                                        <th>NAME SECTION SUPERIOR 3</th>
                                        <th>EMAIL SUPERIOR 3</th>
                                        <th>NIK SUPERIOR 4</th>
                                        <th>NAME SUPERIOR 4</th>
                                        <th>KODE SECTION SUPERIOR 4</th>
                                        <th>NAME SECTION SUPERIOR 4</th>
                                        <th>EMAIL SUPERIOR 4</th>
                                        <th>NIK SUPERIOR 5</th>
                                        <th>NAME SUPERIOR 5</th>
                                        <th>KODE SECTION SUPERIOR 5</th>
                                        <th>NAME SECTION SUPERIOR 5</th>
                                        <th>EMAIL SUPERIOR 5</th>


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
<div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">ADD DATA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                <input type="text" name="hdrid" class="form-control" id="hdrid"
                                    placeholder="auto generate" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i>
                                LEADER
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>NIK</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control select2" id="nik_superior" name="nik_superior"
                                            onchange="handleSelectChange_nik(event)" style="width: 100%;">
                                            <option value='' selected="selected">-Select-</option>
                                            <?php
											foreach ($nik as $value) {
												echo "<option value='$value->user_name'>$value->user_name-$value->name-$value->kode_department-$value->department_name-$value->email_superior</option>";
											}
											?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name">NAME</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="name_superior" class="form-control" id="name_superior">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="kode_section_superior">KODE SECTION</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="kode_section_superior" class="form-control"
                                            id="kode_section_superior">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name_section_superior">NAME SECTION</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="name_section_superior" class="form-control"
                                            id="name_section_superior">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="email_superior">EMAIL</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="email_superior" class="form-control"
                                            id="email_superior">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i>
                                SUPERVISOR
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>NIK</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control select2" id="nik_superior2" name="nik_superior2"
                                            onchange="handleSelectChange_nik_superior2(event)" style="width: 100%;">
                                            <option value='' selected="selected">-Select-</option>
                                            <?php
											foreach ($nik_superior as $value) {
												echo "<option value='$value->user_name'>$value->user_name-$value->name-$value->kode_department-$value->department_name-$value->email_superior</option>";
											}
											?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name_superior2">NAME</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="name_superior2" class="form-control"
                                            id="name_superior2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="kode_section_superior2">KODE SECTION</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="kode_section_superior2" class="form-control"
                                            id="kode_section_superior2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name_section_superior2">NAME SECTION</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="name_section_superior2" class="form-control"
                                            id="name_section_superior2">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="email_superior2">EMAIL</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="email_superior2" class="form-control"
                                            id="email_superior2">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i>
                                MANAGER
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>NIK</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control select2" id="nik_superior3" name="nik_superior3"
                                            onchange="handleSelectChange_nik_superior3(event)" style="width: 100%;">
                                            <option value='' selected="selected">-Select-</option>
                                            <?php
											foreach ($nik_superior as $value) {
												echo "<option value='$value->user_name'>$value->user_name-$value->name-$value->kode_department-$value->department_name-$value->email_superior</option>";
											}
											?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name_superior3">NAME</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="name_superior3" class="form-control"
                                            id="name_superior3">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="kode_section_superior3">KODE SECTION</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="kode_section_superior3" class="form-control"
                                            id="kode_section_superior3">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name_section_superior3">NAME SECTION</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="name_section_superior3" class="form-control"
                                            id="name_section_superior3">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="email_superior3">EMAIL</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="email_superior3" class="form-control"
                                            id="email_superior3">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i>
                                QC MANAGER
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>NIK</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control select2" id="nik_superior4" name="nik_superior4"
                                            onchange="handleSelectChange_nik_superior4(event)" style="width: 100%;">
                                            <option value='' selected="selected">-Select-</option>
                                            <?php
											foreach ($nik_superior as $value) {
												echo "<option value='$value->user_name'>$value->user_name-$value->name-$value->kode_department-$value->department_name-$value->email_superior</option>";
											}
											?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name_superior4">NAME</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="name_superior4" class="form-control"
                                            id="name_superior4">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="kode_section_superior4">KODE SECTION</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="kode_section_superior4" class="form-control"
                                            id="kode_section_superior4">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name_section_superior4">NAME SECTION</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="name_section_superior4" class="form-control"
                                            id="name_section_superior4">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="email_superior4">EMAIL</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="email_superior4" class="form-control"
                                            id="email_superior4">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-text-width"></i>
                                GENERAL MANAGER
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>NIK</label>
                                    </div>
                                    <div class="col-md-8">
                                        <select class="form-control select2" id="nik_superior5" name="nik_superior5"
                                            onchange="handleSelectChange_nik_superior5(event)" style="width: 100%;">
                                            <option value='' selected="selected">-Select-</option>
                                            <?php
											foreach ($nik_superior as $value) {
												echo "<option value='$value->user_name'>$value->user_name-$value->name-$value->kode_department-$value->department_name-$value->email_superior</option>";
											}
											?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name_superior5">NAME</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="name_superior5" class="form-control"
                                            id="name_superior5">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="kode_section_superior5">KODE SECTION</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="kode_section_superior5" class="form-control"
                                            id="kode_section_superior5">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="name_section_superior5">NAME SECTION</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="name_section_superior5" class="form-control"
                                            id="name_section_superior5">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                        <label for="email_superior5">EMAIL</label>
                                    </div>
                                    <div class="col-md-8">
                                        <input type="text" name="email_superior5" class="form-control"
                                            id="email_superior5">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!---------------------------------- / Form Macro Batas sini ---------------------------------->

                    <!-- Close Card Body -->
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" id="btnsubmit">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>

            </form>
            <!-- /form  -->

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
<!-- /.modal Delete-->

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

                <form method="POST" action="<?php echo base_url('c_superior/import'); ?>" enctype="multipart/form-data">

                    <div class="input-group form-group">
                        <span class="input-group-addon" id="sizing-addon2">
                            <i class="glyphicon glyphicon-file"></i>
                        </span>
                        <input type="file" class="form-control" name="excel" aria-describedby="sizing-addon2">
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="form-control btn btn-primary"> <i
                                    class="glyphicon glyphicon-ok"></i>Import Data</button>
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

            // ---------------------------------- Rule input Macro Batas sini 1---------------------------------

            nik_superior: {
                required: true,
            },
            name_superior: {
                required: true,
            },
            kode_section_superior: {
                required: true,
            },
            name_section_superior: {
                required: true,
            },
            email_superior: {
                required: true,
            },
            nik_superior2: {
                required: true,
            },
            name_superior2: {
                required: true,
            },
            kode_section_superior2: {
                required: true,
            },
            name_section_superior2: {
                required: true,
            },
            email_superior2: {
                required: true,
            },
            // nik_superior3: {
            // required: true,
            // },
            // name_superior3: {
            // required: true,
            // },
            // kode_section_superior3: {
            // required: true,
            // },
            // name_section_superior3: {
            // required: true,
            // },
            // email_superior3: {
            // required: true,
            // },
            // nik_superior4: {
            // required: true,
            // },
            // name_superior4: {
            // required: true,
            // },
            // kode_section_superior4: {
            // required: true,
            // },
            // name_section_superior4: {
            // required: true,
            // },
            // email_superior4: {
            // required: true,
            // },
            // nik_superior5: {
            // required: true,
            // },
            // name_superior5: {
            // required: true,
            // },
            // kode_section_superior5: {
            // required: true,
            // },
            // name_section_superior5: {
            // required: true,
            // },
            // email_superior5: {
            // required: true,
            // },
            // nik_superior6: {
            // required: true,
            // },
            // name_superior6: {
            // required: true,
            // },
            // kode_section_superior6: {
            // required: true,
            // },
            // name_section_superior6: {
            // required: true,
            // },
            // email_superior6: {
            // required: true,
            // },

            // ---------------------------------- / Rule input Macro Batas sini 1--------------------------------

        },
        messages: {

            // ---------------------------------- Rule input Macro Batas sini 2---------------------------------

            nik_superior: {
                required: "Please Input nik_superior",
                minlength: 3
            },
            name_superior: {
                required: "Please Input name_superior",
                minlength: 3
            },
            kode_section_superior: {
                required: "Please Input kode_section_superior",
                minlength: 3
            },
            name_section_superior: {
                required: "Please Input name_section_superior",
                minlength: 3
            },
            email_superior: {
                required: "Please Input email_superior",
                minlength: 3
            },
            nik_superior2: {
                required: "Please Input nik_superior2",
                minlength: 3
            },
            name_superior2: {
                required: "Please Input name_superior2",
                minlength: 3
            },
            kode_section_superior2: {
                required: "Please Input kode_section_superior2",
                minlength: 3
            },
            name_section_superior2: {
                required: "Please Input name_section_superior2",
                minlength: 3
            },
            email_superior2: {
                required: "Please Input email_superior2",
                minlength: 3
            },
            nik_superior3: {
                required: "Please Input nik_superior",
                minlength: 3
            },
            name_superior3: {
                required: "Please Input name_superior",
                minlength: 3
            },
            kode_section_superior3: {
                required: "Please Input kode_section_superior",
                minlength: 3
            },
            name_section_superior3: {
                required: "Please Input name_section_superior",
                minlength: 3
            },
            email_superior3: {
                required: "Please Input email_superior",
                minlength: 3
            },
            nik_superior4: {
                required: "Please Input nik_superior",
                minlength: 3
            },
            name_superior4: {
                required: "Please Input name_superior",
                minlength: 3
            },
            kode_section_superior4: {
                required: "Please Input kode_section_superior",
                minlength: 3
            },
            name_section_superior4: {
                required: "Please Input name_section_superior",
                minlength: 3
            },
            email_superior4: {
                required: "Please Input email_superior",
                minlength: 3
            },
            nik_superior5: {
                required: "Please Input nik_superior",
                minlength: 3
            },
            name_superior5: {
                required: "Please Input name_superior",
                minlength: 3
            },
            kode_section_superior5: {
                required: "Please Input kode_section_superior",
                minlength: 3
            },
            name_section_superior5: {
                required: "Please Input name_section_superior",
                minlength: 3
            },
            email_superior5: {
                required: "Please Input email_superior",
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

function view_modal(hdrid1, status) {

    if (status == "Add") {

        $('#exampleModalLabel').text('Add Data'); // name view
        $('#quickForm')[0].reset(); // reset form   
        $('#btnsubmit').text('Save'); // name Save
        document.getElementById("btnsubmit").style.visibility = "visible"; // Visible button              
        //Ajax kosongkan data

    } else {

        // Get Hdri ID
        $('#hdrid').val(hdrid1);
        var hdrid = hdrid1;

        // Ajax isi data
        $.ajax({
            url: "<?php echo base_url('C_superior/ajax_getbyhdrid') ?>",
            method: "get",
            dataType: "JSON",
            data: {
                hdrid: hdrid1
            },
            success: function(data) {

                // ---------------------------------- Data val Macro Batas sini ---------------------------------    

                $('#nik_superior').select2().val(data.nik_superior).trigger('change');
                $('#name_superior').val(data.name_superior);
                $('#kode_section_superior').val(data.kode_section_superior);
                $('#name_section_superior').val(data.name_section_superior);
                $('#email_superior').val(data.email_superior);
                $('#nik_superior2').select2().val(data.nik_superior2).trigger('change');
                $('#name_superior2').val(data.name_superior2);
                $('#kode_section_superior2').val(data.kode_section_superior2);
                $('#name_section_superior2').val(data.name_section_superior2);
                $('#email_superior2').val(data.email_superior2);
                $('#nik_superior3').select2().val(data.nik_superior3).trigger('change');
                $('#name_superior3').val(data.name_superior3);
                $('#kode_section_superior3').val(data.kode_section_superior3);
                $('#name_section_superior3').val(data.name_section_superior3);
                $('#email_superior3').val(data.email_superior3);
                $('#nik_superior4').select2().val(data.nik_superior4).trigger('change');
                $('#name_superior4').val(data.name_superior4);
                $('#kode_section_superior4').val(data.kode_section_superior4);
                $('#name_section_superior4').val(data.name_section_superior4);
                $('#email_superior4').val(data.email_superior4);
                $('#nik_superior5').select2().val(data.nik_superior5).trigger('change');
                $('#name_superior5').val(data.name_superior5);
                $('#kode_section_superior5').val(data.kode_section_superior5);
                $('#name_section_superior5').val(data.name_section_superior5);
                $('#email_superior5').val(data.email_superior5);

                // ---------------------------------- / Data val Macro  Batas sini ------------------------------


            },
            error: function(e) {
                alert(e);

            }
        });

        // Disable and button submit dan text form           
        if (status == "View") {
            document.getElementById("btnsubmit").style.visibility = "hidden";
            $('#exampleModalLabel').text('View Data'); //name view              
        } else {
            $('#exampleModalLabel').text('Edit Data'); //name view 
            $('#btnsubmit').text('Update'); //name Update  
            document.getElementById("btnsubmit").style.visibility = "visible";
        }

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
        vurl = "<?php echo base_url('C_superior/ajax_add') ?>";
    } else {
        vurl = "<?php echo base_url('C_superior/ajax_update') ?>";
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
            tabel.draw();

            if (vurl == "<?php echo base_url('C_superior/ajax_update') ?>") {
                $("#modal-default").modal('hide');
            }

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
    vurl = "<?php echo base_url('C_superior/ajax_delete') ?>";

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

function Send_mail() {

    // Url Post delete
    vurl = "<?php echo base_url('C_Email/Send_mail') ?>";
    // Form data
    var fdata = new FormData();
    fdata.append('hdrid', 'Hdrid123');

    // Post data
    $.ajax({
        url: vurl,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function(data) {},
        error: function(e) {
            //Pesan Gagal
            //gagal(e);             
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
        dom: "lfBrtip",
        buttons: [{
                extend: 'copyHtml5',
                className: 'btn btn-secondary',
                text: '<i class="fas fa-copy">&nbsp</i> Copy Data to Clipboard',
            },
            {
                extend: 'csvHtml5',
                className: 'btn btn-info',
                text: '<i class="fas fa-file-csv">&nbsp</i> Export Data to CSV',
            },
            {
                extend: 'excelHtml5',
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
                className: 'btn btn-danger',
                text: '<i class="fas fa-file-pdf">&nbsp</i> Export Data to PDF',
                orientation: 'landscape',
                pageSize: 'A4',
                download: 'open'
            }
        ],
        "ajax": {
            "url": "<?= base_url('C_superior/view_data_where'); ?>", // URL file untuk proses select datanya
            "type": "POST",
            "data": function(data) {
                data.searchByFromdate = $('#search_fromdate').val();
                data.searchByTodate = $('#search_todate').val();
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
                    mnu = mnu + '<div class="btn btn-success btn-sm konfirmasiView" data-id="' +
                        data +
                        '" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div>';


                    //Tombol Edit
                    <?php if (!empty($hak_akses)) {
							if ($hak_akses->allow_edit == 'on') { ?>
                    mnu = mnu + '<div class="btn btn-primary btn-sm konfirmasiEdit" data-id="' +
                        data +
                        '" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
                    <?php }
						} ?>

                    //Tombol Delete
                    <?php if (!empty($hak_akses)) {
							if ($hak_akses->allow_delete == 'on') { ?>
                    mnu = mnu + '<div class="btn btn-danger btn-sm konfirmasiHapus" data-id="' +
                        data +
                        '" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div>';
                    <?php }
						} ?>

                    return mnu;

                }
            },

            // ---------------------------------- Datatables Macro Batas sini ---------------------------------

            {
                "data": "hdrid"
            },
            {
                "data": "nik_superior"
            },
            {
                "data": "name_superior"
            },
            {
                "data": "kode_section_superior"
            },
            {
                "data": "name_section_superior"
            },
            {
                "data": "email_superior"
            },
            {
                "data": "nik_superior2"
            },
            {
                "data": "name_superior2"
            },
            {
                "data": "kode_section_superior2"
            },
            {
                "data": "name_section_superior2"
            },
            {
                "data": "email_superior2"
            },
            {
                "data": "nik_superior3"
            },
            {
                "data": "name_superior3"
            },
            {
                "data": "kode_section_superior3"
            },
            {
                "data": "name_section_superior3"
            },
            {
                "data": "email_superior3"
            },
            {
                "data": "nik_superior4"
            },
            {
                "data": "name_superior4"
            },
            {
                "data": "kode_section_superior4"
            },
            {
                "data": "name_section_superior4"
            },
            {
                "data": "email_superior4"
            },
            {
                "data": "nik_superior5"
            },
            {
                "data": "name_superior5"
            },
            {
                "data": "kode_section_superior5"
            },
            {
                "data": "name_section_superior5"
            },
            {
                "data": "email_superior5"
            },



            // ---------------------------------- / Datatables Macro Batas sini --------------------------------

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
function handleSelectChange_nik(event) {

    //  By Text
    var value = $("#nik_superior option:selected").text();
    var res = value.split("-");
    // $('#acc_number').val(res[0]);
    $('#name_superior').val(res[1]);
    $('#kode_section_superior').val(res[2]);
    $('#name_section_superior').val(res[3]);
    $('#email_superior').val(res[4]);


}

function handleSelectChange_nik_superior2(event) {

    //  By Text
    var value = $("#nik_superior2 option:selected").text();
    var res = value.split("-");
    // $('#acc_number').val(res[0]);
    $('#name_superior2').val(res[1]);
    $('#kode_section_superior2').val(res[2]);
    $('#name_section_superior2').val(res[3]);
    $('#email_superior2').val(res[4]);


}

function handleSelectChange_nik_superior3(event) {

    //  By Text
    var value = $("#nik_superior3 option:selected").text();
    var res = value.split("-");
    // $('#acc_number').val(res[0]);
    $('#name_superior3').val(res[1]);
    $('#kode_section_superior3').val(res[2]);
    $('#name_section_superior3').val(res[3]);
    $('#email_superior3').val(res[4]);


}

function handleSelectChange_nik_superior4(event) {

    //  By Text
    var value = $("#nik_superior4 option:selected").text();
    var res = value.split("-");
    // $('#acc_number').val(res[0]);
    $('#name_superior4').val(res[1]);
    $('#kode_section_superior4').val(res[2]);
    $('#name_section_superior4').val(res[3]);
    $('#email_superior4').val(res[4]);


}

function handleSelectChange_nik_superior5(event) {

    //  By Text
    var value = $("#nik_superior5 option:selected").text();
    var res = value.split("-");
    // $('#acc_number').val(res[0]);
    $('#name_superior5').val(res[1]);
    $('#kode_section_superior5').val(res[2]);
    $('#name_section_superior5').val(res[3]);
    $('#email_superior5').val(res[4]);
}
</script>