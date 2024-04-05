<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ECCS</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
    <!-- DataTables -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- jquery-validation -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="<?php echo base_url() ?>assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- DataTables Button-->
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
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
    <!-- bootstrap color picker -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
</head>

<body>
    <div>
        <section class="content">

            <?php echo $this->session->flashdata('message');  ?>
            <small>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- .col -->
                            <div class="card">
                                <!-- .card -->
                                <div class="card-body">
                                    <!-- .card-body -->

                                    <!-- ECR -->
                                    <form class="form-horizntal" id="meetingform" role="form">
                                        <center>
                                            <table id="ecrtabel" class="table table-bordered table-hover table-striped" style="text-align:center">
                                                <thead>

                                                    <!-- TITLE -->
                                                    <tr style="height:5px">
                                                        <th colspan="9"> ENGINEERING CHANGE CONTROL SHEET </th>
                                                    </tr>

                                                    <tr style="height:5px">
                                                        <td style="width:20%"> <label>Engineering Change Release</label></td>
                                                        <td style="width:20%"><label>PART NAME</label> </td>
                                                        <td style="width:20%"> <label>PART NUMBER</label></td>
                                                        <td style="width:20%"><label>VEHICLE TYPE</label></td>
                                                    </tr>

                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td style="width:10%">
                                                            <p><?php echo $tb_Ecr->ecr_id; ?></p>
                                                        </td>
                                                        <td style="width:10%">
                                                            <p><?php echo $tb_Ecr->part_name; ?></p>
                                                        </td>
                                                        <td style="width:10%">
                                                            <p><?php echo $tb_Ecr->part_number_new; ?></p>
                                                        </td>
                                                        <td style="width:10%">
                                                            <p><input type="text" class="form-control"></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </center>
                                    </form>

                                    <!-- TTD APPROVE -->
                                    <center>
                                        <table id="ecrtabel" class="table table-bordered table-hover table-striped" style="text-align:center">
                                            <thead>
                                                <tr style="height:150px">
                                                    <td style="width:15% height=50%"> <label>APPROVED</label></td>
                                                    <td style="width:10%"> <label>BP</label></td>
                                                    <td style="width:10%"><label>PRC</label></td>
                                                    <td style="width:10%"> <label>WH</label></td>
                                                    <td style="width:10%"><label>MFG</label></td>
                                                    <td style="width:10%"> <label>QC</label></td>
                                                    <td style="width:10%"><label>PE</label></td>
                                                    <td style="width:10%"> <label>QA</label></td>
                                                    <td style="width:10%"><label>PC</label></td>
                                                </tr>

                                            </thead>

                                            <tbody></tbody>
                                        </table>
                                    </center>

                                    PRODUCTION CONTROL
                                    <form class="form-horizntal" id="pcform" role="form">
                                        <center>
                                            <table id="pctabel" class="table table-bordered table-hover table-striped" style="text-align:left ">
                                                <thead>

                                                    <!-- TITLE -->


                                                <tbody>
                                                    <tr style="height:5px">
                                                        <th style="text-align:left" colspan="4"> PRODUCTION CONTROL </th>
                                                    </tr>

                                                    <tr style="text-align:center">
                                                        <td rowspan="3" style="width:10%; vertical-align: middle;"> <label>CHECK POINT</label></td>
                                                        <td style="width:15%" colspan="2"><label>DESCRIPTION</label></td>
                                                        <td rowspan="3" style="width:20%; vertical-align: middle;"><label>CATEGORY</label></td>
                                                    </tr>
                                                    <tr style="text-align:center">
                                                        <!-- <td rowspan="0"  style="width:20%"> <label></label></td> -->
                                                        <td style="width:15%" colspan="2"><label>Part No.</label></td>
                                                        <!-- <td style="width:20%"><label></label></td> -->
                                                    </tr>
                                                    <tr style="text-align:center">

                                                        <td style="width:10%"> <label>OLD</label></td>
                                                        <td style="width:10%"><label>NEW</label></td>
                                                    </tr>

                                                    </thead>
                                                    <tr>
                                                        <td style="width:10%"><?php echo $tb_Ecr->check_point; ?></td>
                                                        <td style="width:10%"><?php echo $tb_Ecr->part_number_new; ?></td>
                                                        <td style="width:10%"><?php echo $tb_Ecr->part_number_old; ?></td>
                                                        <td style="width:10%"></label>
                                                            <p><textarea class="form-control"> </textarea></p>
                                                        </td>
                                                    </tr>

                                                    <tr style="height:10px; text-align:center">
                                                        <td style="width:10%; vertical-align: middle;"> <label>CONFIRMATION</label></td>
                                                        <td style="width:10%; text-align:left" colspan="2">
                                                            <div class="form-group" clearfix>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="icheck-primary d-inline">
                                                                            <div class="col-md-12">
                                                                                <input type="checkbox" name="pe" id="pe">
                                                                                <label for="pe">
                                                                                    &nbsp;PE
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>
                                                                            <p>DATE : &nbsp;<input type="text"></p>
                                                                        </label>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <div class="icheck-primary d-inline">
                                                                            <div class="col-md-12">
                                                                                <input type="checkbox" name="supplier" id="supplier">
                                                                                <label for="supplier">
                                                                                    &nbsp;SUPPLIER
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label>
                                                                            <p>1. &nbsp;<input type="text"></p>
                                                                            <p>2. &nbsp;<input type="text"></p>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label>
                                                                            <p>DATE : &nbsp;<input type="text"></p>
                                                                            <p>DATE : &nbsp;<input type="text"></p>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <label style="text-align:left"> &nbsp;Update BOM/Part Structure <br> &nbsp;(Cigma)</label>
                                                                    </div>
                                                                    <div class="form-group" clearfix>
                                                                        <div class="row">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="col-md-12">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" id="update_bom" value="update_bom" name="update_bom" <?php if ($tb_pc->update_bom == "update_bom") {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } ?>>
                                                                                        <label for="update_bom">
                                                                                            YES
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="icheck-primary d-inline">
                                                                                        &nbsp;<input type="radio" id="update_bom2" value="update_bom2" name="update_bom" <?php if ($tb_pc->update_bom == "update_bom2") {
                                                                                                                                                                                echo 'checked';
                                                                                                                                                                            } ?>>
                                                                                        <label for="update_bom2">
                                                                                            NO
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label style="float:left"> &nbsp;DATE : </label>
                                                                        <p id="update_bom_date" name="update_bom_date">&nbsp; <?php echo $tb_pc->update_bom_date; ?> </p>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <label style="float:left"> &nbsp;Update Label <br>(Inner/Outer)</label>
                                                                    </div>
                                                                    <div class="form-group" clearfix>
                                                                        <div class="row">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="col-md-12">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" id="update_label" value="update_label" name="update_label">
                                                                                        <label for="update_label">
                                                                                            YES
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" id="update_label2" value="update_label2" name="update_label">
                                                                                        <label for="update_label2">
                                                                                            NO
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label style="float:left">DATE : </label> &nbsp;<input type="text" style="width:130px">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </td>
                                                        <!-- <td  rowspan="3" style="width:20%; vertical-align: middle;"><label></label></td> -->
                                                    </tr>

                                                    <tr style="text-align:center">
                                                        <td style="width:10%; vertical-align: middle;"> <label>SCHEDULE OF CHANGE</label></td>
                                                        <td style="width:10%; vertical-align: middle;" colspan="2">
                                                            <div class="form-group" clearfix>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style="float:left">PART</label><br>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <p style="text-align:left">Estimated Receiving Date : &nbsp; <input type="text"></p>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="col-md-12">
                                                                                    <input type="checkbox" name="part_immediate_change" <?php if ($tb_pc->part_immediate_change == "on") {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?> id="part_immediate_change">
                                                                                    <label for="part_immediate_change">
                                                                                        &nbsp;IMMEDIATE CHANGE (OLD STOCK SORAP)
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="col-md-12">
                                                                                    <input type="checkbox" name="part_running_change" <?php if ($tb_pc->part_running_change == "on") {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?> value="on" id="part_running_change"> <label> &nbsp;RUNNING CHANGE (OLD STOCK USED UP)</label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <label style="float:left"> &nbsp;Clearance Stock # : </label>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label style="float:left"> &nbsp; <?php echo $tb_pc->part_clearance_stock_1_date; ?></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td style="width:10%; vertical-align: middle;" colspan="2">
                                                            <div class="form-group" clearfix>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style="float:left">PRODUCT</label><br>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <p style="text-align:left">Planning Start Date : &nbsp; <input type="text"></p>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="col-md-12">
                                                                                    <input type="checkbox" name="product_immediate_change" <?php if ($tb_pc->product_immediate_change == "on") {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?> id="product_immediate_change">
                                                                                    <label for="product_immediate_change">
                                                                                        &nbsp;IMMEDIATE CHANGE (OLD STOCK SORAP)
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="col-md-12">
                                                                                    <input type="checkbox" name="product_running_change" <?php if ($tb_pc->product_running_change == "on") {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?> id="product_running_change">
                                                                                    <label for="product_running_change">
                                                                                        &nbsp;RUNNING CHANGE (OLD STOCK USED UP)
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <label style="float:left"> Plan Timming Change: </label>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label style="float:left"> &nbsp; <?php echo $tb_pc->time_change_plan; ?></label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr style="text-align:center">
                                                        <td style="width:10%; vertical-align: middle;"> <label>OTHER INFORMATION</label></td>
                                                        <td style="width:10%; vertical-align: middle;" colspan="8">
                                                            <input type="text" name="other" class="form-control" id="other">
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </center>
                                    </form>
                                    <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->
                                    <form class="form-horizntal" id="qaform" role="form">
                                        <center>
                                            <table id="qatabel" class="table table-bordered table-hover table-striped" style="text-align:left ">
                                                <thead>

                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td style="text-align:left"> <label>QUALITY ASSURANCE</label></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:left">
                                                            <div class="form-group" clearfix>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style="float:left">Requested</label><br>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label style="float:left">1. Information To Customer :</label>
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="icheck-primary d-inline">
                                                                            <div class="col-md-12">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <input type="radio" id="information_to_customer" <?php if ($tb_qa->information_to_customer == "information_to_customer") {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?> value="information_to_customer" name="information_to_customer">
                                                                                    <label for="information_to_customer">
                                                                                        YES
                                                                                    </label>
                                                                                </div>
                                                                                <div class="icheck-primary d-inline">
                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="information_to_customer2" <?php if ($tb_qa->information_to_customer == "information_to_customer2") {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                } ?> value="information_to_customer2" name="information_to_customer">
                                                                                    <label for="information_to_customer2">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <label style="float:left">2. Mark</label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="icheck-primary d-inline">
                                                                            <div class="col-md-12">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <input type="radio" id="attached_c_mark" value="attached_c_mark" name="attached_c_mark" <?php if ($tb_qc->attached_c_mark == "attached_c_mark") {
                                                                                                                                                                                echo 'checked';
                                                                                                                                                                            } ?>>
                                                                                    <label for="attached_c_mark">
                                                                                        YES
                                                                                    </label>
                                                                                </div>
                                                                                <div class="icheck-primary d-inline">
                                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="attached_c_mark2" <?php if ($tb_qc->attached_c_mark == "attached_c_mark2") {
                                                                                                                                                            echo 'checked';
                                                                                                                                                        } ?> value="attached_c_mark2" name="attached_c_mark">
                                                                                    <label for="attached_c_mark2">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label style="float:left"> 3. Data Require :</label>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="icheck-primary d-inline">
                                                                            <div class="col-md-12">
                                                                                <input type="checkbox" name="part_shipping_information" id="part_shipping_information">
                                                                                <label for="part_shipping_information">
                                                                                    &nbsp;Part Shipping Information
                                                                                </label>

                                                                                &nbsp; &nbsp;<input type="checkbox" name="inspection_data" id="inspection_data">
                                                                                <label for="inspection_data">
                                                                                    &nbsp;Inspection Data
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <label style="float:left"> OTHER : &nbsp;<input type="text" style="width:230px"></label>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <label style="float:left"> 4. Update :</label>
                                                                    </div>

                                                                    <div class="col-md-9">
                                                                        <div class="icheck-primary d-inline">
                                                                            <div class="col-md-12">
                                                                                <input type="checkbox" name="inspection_standard" id="inspection_standard">
                                                                                <label for="inspection_standard">
                                                                                    &nbsp;Inspection Standard
                                                                                </label>

                                                                                &nbsp; &nbsp;<input type="checkbox" name="control_plan" id="control_plan">
                                                                                <label for="control_plan">
                                                                                    &nbsp;Control Plan
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </center>
                                    </form>
                                    <br>
                                    <!-- <br><br><br><br><br><br><br> -->
                                    <form class="form-horizntal" id="peform" role="form">
                                        <center>
                                            <table id="petabel" class="table table-bordered table-hover table-striped" style="text-align:left ">
                                                <thead>
                                                    <th colspan="3" style="text-align:left">PRODUCTION ENGINEERING</th>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td style="width:60%;" rowspan="2">
                                                            <div class="form-group" clearfix>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style="float:left">PREPARETION</label>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <p style="float:left">1. Detail Changing Point</p>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="icheck-primary d-inline">
                                                                        <div class="col-md-12">
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="detail_change_point_design" id="detail_change_point_design" <?php if ($tb_pe->detail_change_point_design == "on") {
                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                } ?>>
                                                                            <label for="detail_change_point_design">
                                                                                &nbsp;DESIGN
                                                                            </label>

                                                                            &nbsp; &nbsp;&nbsp; &nbsp;<input type="checkbox" name="detail_change_point_process" id="detail_change_point_process" <?php if ($tb_pe->detail_change_point_process == "on") {
                                                                                                                                                                                                        echo 'checked';
                                                                                                                                                                                                    } ?>>
                                                                            <label for="detail_change_point_process">
                                                                                &nbsp;PROCESS
                                                                            </label>

                                                                            &nbsp; &nbsp;&nbsp; &nbsp;<input type="checkbox" name="supplier_cb" id="supplier_cb">
                                                                            <label for="supplier_cb">
                                                                                &nbsp;SUPPLIER
                                                                            </label>

                                                                            &nbsp; &nbsp;&nbsp; &nbsp;<input type="checkbox" name="detail_change_point_spec" id="detail_change_point_spec" <?php if ($tb_pe->detail_change_point_spec == "on") {
                                                                                                                                                                                                echo 'checked';
                                                                                                                                                                                            } ?>>
                                                                            <label for="detail_change_point_spec">
                                                                                &nbsp;SPEC
                                                                            </label>

                                                                            &nbsp; &nbsp;&nbsp; &nbsp;<input type="checkbox" name="detail_change_point_material" id="detail_change_point_material" <?php if ($tb_pe->detail_change_point_material == "on") {
                                                                                                                                                                                                        echo 'checked';
                                                                                                                                                                                                    } ?>>
                                                                            <label for="detail_change_point_material">
                                                                                &nbsp;MATERIAL
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td style="vertical-align: middle; align:center">
                                                            <center><label>BEFORE</label><br></center>
                                                        </td>
                                                        <td style="vertical-align: middle;">
                                                            <center><label>AFTER</label><br></center>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <center>
                                                                <p><input type="text" class="form-control"></p>
                                                        </td>
                                        </center>
                                        <td>
                                            <center>
                                                <p><input type="text" class="form-control"></p>
                                        </td>
                                        </center>
                                        </tr>

                                        <tr>
                                            <td colspan="3">
                                                <div class="form-group" clearfix>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p style="text-align:left">2. Follow-Up Action</p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p style="text-align:left">&nbsp; &nbsp;&nbsp;a. Process Capabilitty Check</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="icheck-primary d-inline">
                                                                <div class="icheck-primary d-inline">
                                                                    <input type="radio" id="follow_up_action_pcc_or_tr" value="follow_up_action_pcc_or_tr" name="follow_up_action_pcc_or_tr" <?php if ($tb_pe->follow_up_action_pcc_or_tr == "follow_up_action_pcc_or_tr") {
                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                } ?>>
                                                                    <label for="follow_up_action_pcc_or_tr">
                                                                        YES
                                                                    </label>
                                                                </div>
                                                                <div class="icheck-primary d-inline">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="follow_up_action_pcc_or_tr2" value="follow_up_action_pcc_or_tr2" name="follow_up_action_pcc_or_tr" <?php if ($tb_pe->follow_up_action_pcc_or_tr == "follow_up_action_pcc_or_tr2") {
                                                                                                                                                                                                                            echo 'checked';
                                                                                                                                                                                                                        } ?>>
                                                                    <label for="follow_up_action_pcc_or_tr2">
                                                                        NO
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p style="text-align:left">DATE : <?php echo $tb_pe->follow_up_action_pcc_or_tr_date; ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p style="text-align:left">&nbsp; &nbsp;&nbsp;b. Update PCDT</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="icheck-primary d-inline">
                                                                <div class="icheck-primary d-inline">
                                                                    <input type="radio" id="follow_up_action_update_pcdt" value="follow_up_action_update_pcdt" name="follow_up_action_update_pcdt" <?php if ($tb_pe->follow_up_action_update_pcdt == "follow_up_action_update_pcdt") {
                                                                                                                                                                                                        echo 'checked';
                                                                                                                                                                                                    } ?>>
                                                                    <label for="follow_up_action_update_pcdt">
                                                                        YES
                                                                    </label>
                                                                </div>
                                                                <div class="icheck-primary d-inline">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="follow_up_action_update_pcdt2" value="follow_up_action_update_pcdt2" name="follow_up_action_update_pcdt" <?php if ($tb_pe->follow_up_action_update_pcdt == "follow_up_action_update_pcdt2") {
                                                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                                                } ?>>
                                                                    <label for="follow_up_action_update_pcdt2">
                                                                        NO
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p style="text-align:left">DATE : <?php echo $tb_pe->follow_up_action_update_pcdt_date; ?></p>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p style="text-align:left">&nbsp; &nbsp;&nbsp;c. Require New Jig / Tools</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="icheck-primary d-inline">
                                                                <div class="icheck-primary d-inline">
                                                                    <input type="radio" id="follow_up_action_requirement_new_jig" value="follow_up_action_requirement_new_jig" name="follow_up_action_requirement_new_jig" <?php if ($tb_pe->follow_up_action_requirement_new_jig == "follow_up_action_requirement_new_jig") {
                                                                                                                                                                                                                                echo 'checked';
                                                                                                                                                                                                                            } ?>>
                                                                    <label for="follow_up_action_requirement_new_jig">
                                                                        YES
                                                                    </label>
                                                                </div>
                                                                <div class="icheck-primary d-inline">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="follow_up_action_requirement_new_jig2" value="follow_up_action_requirement_new_jig2" name="follow_up_action_requirement_new_jig" <?php if ($tb_pe->follow_up_action_requirement_new_jig == "follow_up_action_requirement_new_jig2") {
                                                                                                                                                                                                                                                            echo 'checked';
                                                                                                                                                                                                                                                        } ?>>
                                                                    <label for="follow_up_action_requirement_new_jig2">
                                                                        NO
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p style="text-align:left">DATE : <?php echo $tb_pe->follow_up_action_requirement_new_jig_date; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <p style="text-align:left">&nbsp; &nbsp;&nbsp;d. Update P-FMEA</p>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="icheck-primary d-inline">
                                                                <div class="icheck-primary d-inline">
                                                                    <input type="radio" id="follow_up_acction_update_pfmea" value="follow_up_acction_update_pfmea" name="follow_up_acction_update_pfmea" <?php if ($tb_pe->follow_up_acction_update_pfmea == "follow_up_acction_update_pfmea") {
                                                                                                                                                                                                                echo 'checked';
                                                                                                                                                                                                            } ?>>
                                                                    <label for="follow_up_acction_update_pfmea">
                                                                        YES
                                                                    </label>
                                                                </div>
                                                                <div class="icheck-primary d-inline">
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="follow_up_acction_update_pfmea2" value="follow_up_acction_update_pfmea2" name="follow_up_acction_update_pfmea" <?php if ($tb_pe->follow_up_acction_update_pfmea == "follow_up_acction_update_pfmea2") {
                                                                                                                                                                                                                                        echo 'checked';
                                                                                                                                                                                                                                    } ?>>
                                                                    <label for="follow_up_acction_update_pfmea2">
                                                                        NO
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <p style="text-align:left">DATE : <?php echo $tb_pe->follow_up_acction_update_pfmea_date; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                        </table>
                                        </center>
                                    </form>
                                    <form class="form-horizntal" id="qcform" role="form">
                                        <center>
                                            <table id="qctabel" class="table table-bordered table-hover table-striped" style="text-align:left ">
                                                <thead>
                                                    <th colspan="3" style="text-align:left">QUALITY CONTROL</th>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td colspan="6" style="width:20%;">
                                                            <div class="form-group" clearfix>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style="float:left">CHECK CONFIRM</label>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <p style="float:left">1. QC Check Result</p>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <p style="float:left">- Visual Check</p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="icheck-primary d-inline">
                                                                            <div class="icheck-primary d-inline">
                                                                                <input type="radio" id="visual_check" value="visual_check" name="visual_check" <?php if ($tb_qc->visual_check == "visual_check") {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                } ?>>
                                                                                <label for="visual_check">
                                                                                    OK
                                                                                </label>
                                                                            </div>
                                                                            <div class="icheck-primary d-inline">
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="visual_check2" value="visual_check2" name="visual_check" <?php if ($tb_qc->visual_check == "visual_check2") {
                                                                                                                                                                                                echo 'checked';
                                                                                                                                                                                            } ?>>
                                                                                <label for="visual_check2">
                                                                                    NG
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-2">
                                                                        <p style="float:left" hidden>1. QC Check Result</p>
                                                                    </div>
                                                                    <div class="col-md-2">
                                                                        <p style="float:left">- Funcitional</p>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="icheck-primary d-inline">
                                                                            <div class="icheck-primary d-inline">
                                                                                <input type="radio" id="fungsional" value="fungsional" name="fungsional" <?php if ($tb_qc->fungsional == "fungsional") {
                                                                                                                                                                echo 'checked';
                                                                                                                                                            } ?>>
                                                                                <label for="fungsional">
                                                                                    OK
                                                                                </label>
                                                                            </div>
                                                                            <div class="icheck-primary d-inline">
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="fungsional2" value="fungsional2" name="fungsional" <?php if ($tb_qc->fungsional == "fungsional2") {
                                                                                                                                                                                        echo 'checked';
                                                                                                                                                                                    } ?>>
                                                                                <label for="fungsional2">
                                                                                    NG
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </td>
                                                    </tr>
                                                </tbody>

                                            </table>
                                        </center>
                                    </form>

                                    <form class="form-horizntal" id="proform" role="form">
                                        <center>
                                            <table id="protabel" class="table table-bordered table-hover table-striped" style="text-align:left ">
                                                <thead>
                                                    <th colspan="2" style="text-align:left">PRODUCTION</th>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td colspan="6">
                                                            <div class="form-group" clearfix>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style="float:left">&nbsp;PREPARATION</label>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <input type="checkbox" name="update_drawingcb" id="update_drawingcb"> <label>&nbsp;Updated Drawing </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="icheck-primary d-inline">
                                                                            <div class="icheck-primary d-inline">
                                                                                <input type="radio" id="update_drawing" value="update_drawing" name="update_drawing">
                                                                                <label for="update_drawing">
                                                                                    YES
                                                                                </label>
                                                                            </div>
                                                                            <div class="icheck-primary d-inline">
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="update_drawing2" value="update_drawing2" name="update_drawing2">
                                                                                <label for="update_drawing2">
                                                                                    NO
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <input type="checkbox" name="update_instruksi_kerjacb" id="update_instruksi_kerjacb" <?php if ($tb_mfg->update_instruksi_kerja == "update_instruksi_kerja" || $tb_mfg->update_instruksi_kerja == "update_instruksi_kerja2") {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                } ?>> <label>&nbsp;Updated Working Procedure </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="icheck-primary d-inline">
                                                                            <div class="icheck-primary d-inline">
                                                                                <input type="radio" id="update_instruksi_kerja" value="update_instruksi_kerja" name="update_instruksi_kerja" <?php if ($tb_mfg->update_instruksi_kerja == "update_instruksi_kerja") {
                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                } ?>>
                                                                                <label for="update_instruksi_kerja">
                                                                                    YES
                                                                                </label>
                                                                            </div>
                                                                            <div class="icheck-primary d-inline">
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="update_instruksi_kerja2" value="update_instruksi_kerja2" name="update_instruksi_kerja" <?php if ($tb_mfg->update_instruksi_kerja == "update_instruksi_kerja2") {
                                                                                                                                                                                                                            echo 'checked';
                                                                                                                                                                                                                        } ?>>
                                                                                <label for="update_instruksi_kerja2">
                                                                                    NO
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <input type="checkbox" name="update_mihoncb" id="update_mihoncb" <?php if ($tb_mfg->update_mihon == "update_mihon" || $tb_mfg->update_mihon == "update_mihon2") {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?>> <label>&nbsp;Updated *MIHONG* </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="icheck-primary d-inline">
                                                                            <div class="icheck-primary d-inline">
                                                                                <input type="radio" id="update_mihon" value="update_mihon" name="update_mihon" <?php if ($tb_mfg->update_mihon == "update_mihon") {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                } ?>>
                                                                                <label for="update_mihon">
                                                                                    YES
                                                                                </label>
                                                                            </div>
                                                                            <div class="icheck-primary d-inline">
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="update_mihon2" value="update_mihon2" name="update_mihon" <?php if ($tb_mfg->update_mihon == "update_mihon2") {
                                                                                                                                                                                                echo 'checked';
                                                                                                                                                                                            } ?>>
                                                                                <label for="update_mihon2">
                                                                                    NO
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-4">
                                                                        <input type="checkbox" name="require_new_mask_stylecb" id="require_new_mask_stylecb" <?php if ($tb_mfg->require_new_mask_style == "require_new_mask_style" || $tb_mfg->require_new_mask_style == "require_new_mask_style2") {
                                                                                                                                                                    echo 'checked';
                                                                                                                                                                } ?>> <label>&nbsp;Require New Mask Style </label>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="icheck-primary d-inline">
                                                                            <div class="icheck-primary d-inline">
                                                                                <input type="radio" id="require_new_mask_style" value="require_new_mask_style" name="require_new_mask_style" <?php if ($tb_mfg->require_new_mask_style == "require_new_mask_style") {
                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                } ?>>
                                                                                <label for="require_new_mask_style">
                                                                                    YES
                                                                                </label>
                                                                            </div>
                                                                            <div class="icheck-primary d-inline">
                                                                                &nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" id="training_and_prepare_in_line2" value="training_and_prepare_in_line2" name="training_and_prepare_in_line" <?php if ($tb_mfg->require_new_mask_style == "require_new_mask_style2") {
                                                                                                                                                                                                                                                echo 'checked';
                                                                                                                                                                                                                                            } ?>>
                                                                                <label for="training_and_prepare_in_line2">
                                                                                    NO
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="6">
                                                            <div class="form-group" clearfix>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style="float:left">&nbsp;IMPLEMENTATION</label>
                                                                    </div>
                                                                </div>

                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <p>&nbsp;1. Actual Implementation Date</p>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <p>&nbsp; <?php echo $tb_mfg->actual_implementation_date; ?></p>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <p>&nbsp;2. Production Date / Lot. No. / Shift :</p>
                                                                    </div>

                                                                    <div class="col-md-3">
                                                                        <p>&nbsp; <?php echo $tb_mfg->production_date; ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr rowspan="9">
                                                        <td colspan="6">
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <p>&nbsp;3. In Line Production Checking</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Separate New / Old Material </p>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <input type="radio" id="sprated_new_or_old_p" value="sprated_new_or_old_p" name="sprated_new_or_old_p" <?php if ($tb_mfg->sprated_new_or_old_p == "sprated_new_or_old_p") {
                                                                                                                                                                                                echo 'checked';
                                                                                                                                                                                            } ?>>
                                                                                    <label for="sprated_new_or_old_p">
                                                                                        YES
                                                                                    </label>
                                                                                </div>
                                                                                <div class="icheck-primary d-inline">
                                                                                    &nbsp;&nbsp;<input type="radio" id="sprated_new_or_old_p2" value="sprated_new_or_old_p2" name="sprated_new_or_old_p" <?php if ($tb_mfg->sprated_new_or_old_p == "sprated_new_or_old_p2") {
                                                                                                                                                                                                                echo 'checked';
                                                                                                                                                                                                            } ?>>
                                                                                    <label for="sprated_new_or_old_p2">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Separate New / Old Finish Goods </p>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <input type="radio" id="sprated_new_or_old_fo" value="sprated_new_or_old_fo" name="sprated_new_or_old_fo" <?php if ($tb_mfg->sprated_new_or_old_fo == "sprated_new_or_old_fo") {
                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                } ?>>
                                                                                    <label for="sprated_new_or_old_fo">
                                                                                        YES
                                                                                    </label>
                                                                                </div>
                                                                                <div class="icheck-primary d-inline">
                                                                                    &nbsp;&nbsp;<input type="radio" id="sprated_new_or_old_fo2" value="sprated_new_or_old_fo2" name="sprated_new_or_old_fo" <?php if ($tb_mfg->sprated_new_or_old_fo == "sprated_new_or_old_fo2") {
                                                                                                                                                                                                                echo 'checked';
                                                                                                                                                                                                            } ?>>
                                                                                    <label for="sprated_new_or_old_fo2">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Separate Fraction / Hassu </p>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <input type="radio" id="sprated_hassu" value="sprated_hassu" name="sprated_hassu">
                                                                                    <label for="sprated_hassu">
                                                                                        YES
                                                                                    </label>
                                                                                </div>
                                                                                <div class="icheck-primary d-inline">
                                                                                    &nbsp;&nbsp;<input type="radio" id="sprated_hassu2" value="sprated_hassu2" name="sprated_hassu">
                                                                                    <label for="sprated_hassu2">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Process Capability Check Result</p>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <input type="radio" id="check_result" value="check_result" name="check_result">
                                                                                    <label for="check_result">
                                                                                        YES
                                                                                    </label>
                                                                                </div>
                                                                                <div class="icheck-primary d-inline">
                                                                                    &nbsp;&nbsp;<input type="radio" id="check_result2" value="check_result2" name="check_result">
                                                                                    <label for="check_result2">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Operator Understood</p>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <input type="radio" id="Operator" value="Operator" name="Operator">
                                                                                    <label for="Operator">
                                                                                        YES
                                                                                    </label>
                                                                                </div>
                                                                                <div class="icheck-primary d-inline">
                                                                                    &nbsp;&nbsp;<input type="radio" id="Operator2" value="Operator2" name="Operator">
                                                                                    <label for="Operator2">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Finish Goods Marking</p>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <input type="radio" id="finish_goods_marking" value="finish_goods_marking" name="finish_goods_marking">
                                                                                    <label for="finish_goods_marking">
                                                                                        YES
                                                                                    </label>
                                                                                </div>
                                                                                <div class="icheck-primary d-inline">
                                                                                    &nbsp;&nbsp;<input type="radio" id="finish_goods_marking2" value="finish_goods_marking2" name="finish_goods_marking">
                                                                                    <label for="finish_goods_marking2">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Marking</p>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <p><input type="text" class="form-control"></p>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <p>&nbsp;&nbsp;&nbsp;&nbsp;- Finish Goods Instock to Warehouse, Date</p>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <p><input type="text" class="form-control"></p>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-5">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <table class="table table-bordered table-hover table-striped" style="text-align:left ">
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>Check Form</td>
                                                                                        <td>&nbsp;</td>
                                                                                        <td>Standard</td>
                                                                                        <td>Actual</td>
                                                                                        <td>Judge</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td> </td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                        <td></td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </center>
                                    </form>

                                    <form class="form-horizntal" id="invent" role="form">
                                        <center>
                                            <table id="protabel" class="table table-bordered table-hover table-striped" style="text-align:left ">
                                                <thead>
                                                    <th colspan="2" style="text-align:left">INVENTORY CONTROL / WAREHOUSE</th>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group" clearfix>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <p>1. Separate New / Old Part </p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" id="separeted_new_old_part" value="separeted_new_old_part" name="separeted_new_old_part" <?php if ($tb_wh->separeted_new_old_part == "separeted_new_old_part") {
                                                                                                                                                                                                            echo 'checked';
                                                                                                                                                                                                        } ?>>
                                                                                        <label for="separeted_new_old_part">
                                                                                            YES
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="icheck-primary d-inline">
                                                                                        &nbsp;&nbsp;<input type="radio" id="separeted_new_old_part2" value="separeted_new_old_part2" name="separeted_new_old_part" <?php if ($tb_wh->separeted_new_old_part == "separeted_new_old_part2") {
                                                                                                                                                                                                                        echo 'checked';
                                                                                                                                                                                                                    } ?>>
                                                                                        <label for="separeted_new_old_part2">
                                                                                            NO
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <p>2. Separate New / Old Finish Goods </p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" id="separeted_new_old_fg" value="separeted_new_old_fg" name="separeted_new_old_fg" <?php if ($tb_wh->separeted_new_old_fg == "separeted_new_old_fg") {
                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                } ?>>
                                                                                        <label for="separeted_new_old_fg">
                                                                                            YES
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="icheck-primary d-inline">
                                                                                        &nbsp;&nbsp;<input type="radio" id="separeted_new_old_fg2" value="separeted_new_old_fg2" name="separeted_new_old_fg" <?php if ($tb_wh->separeted_new_old_fg == "separeted_new_old_fg2") {
                                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                                } ?>>
                                                                                        <label for="separeted_new_old_fg2">
                                                                                            NO
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <p>3. Case Label (Outer)</p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" id="case_label" value="case_label" name="case_label">
                                                                                        <label for="case_label">
                                                                                            YES
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="icheck-primary d-inline">
                                                                                        &nbsp;&nbsp;<input type="radio" id="case_label2" value="case_label2" name="case_label">
                                                                                        <label for="case_label2">
                                                                                            NO
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <p>4. Packing Label (Inner)</p>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" id="prepare_label_shutter" value="prepare_label_shutter" name="prepare_label_shutter" <?php if ($tb_wh->prepare_label_shutter == "prepare_label_shutter") {
                                                                                                                                                                                                        echo 'checked';
                                                                                                                                                                                                    } ?>>
                                                                                        <label for="prepare_label_shutter">
                                                                                            YES
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="icheck-primary d-inline">
                                                                                        &nbsp;&nbsp;<input type="radio" id="prepare_label_shutter2" value="prepare_label_shutter2" name="prepare_label_shutter" <?php if ($tb_wh->prepare_label_shutter == "prepare_label_shutter2") {
                                                                                                                                                                                                                    echo 'checked';
                                                                                                                                                                                                                } ?>>
                                                                                        <label for="prepare_label_shutter2">
                                                                                            NO
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </center>
                                    </form>

                                    <form class="form-horizntal" id="invent" role="form">
                                        <center>
                                            <table id="pcform2" class="table table-bordered table-hover table-striped" style="text-align:left ">
                                                <thead>
                                                    <th colspan="2" style="text-align:left">PRODUCTION CONTROL</th>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form-group" clearfix>
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <p> IMPLEMENTATION CONFIRMATION </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <p> Actual Implementation Date </p>
                                                                            </div>

                                                                            <div class="col-md-4">

                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <p><?php echo $tb_pc->time_change_actual; ?></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <p> Die Cost </p>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" id="die_cost" value="die_cost" name="die_cost">
                                                                                        <label for="die_cost">
                                                                                            YES
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="icheck-primary d-inline">
                                                                                        &nbsp;&nbsp;<input type="radio" id="die_cost2" value="die_cost2" name="die_cost">
                                                                                        <label for="die_cost2">
                                                                                            NO
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <p>Date : &nbsp; <input type="text"></p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-4">
                                                                                <p> Compensation </p>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <div class="icheck-primary d-inline">
                                                                                        <input type="radio" id="Compensation" value="die_Compensationcost" name="Compensation">
                                                                                        <label for="Compensation">
                                                                                            YES
                                                                                        </label>
                                                                                    </div>
                                                                                    <div class="icheck-primary d-inline">
                                                                                        &nbsp;&nbsp;<input type="radio" id="Compensation2" value="Compensation2" name="Compensation">
                                                                                        <label for="Compensation2">
                                                                                            NO
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>

                                                                            <div class="col-md-4">
                                                                                <p>Date : &nbsp; <input type="text"></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-md-4">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <p> OUT DRAWING DESTROY</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="icheck-primary d-inline">
                                                                                <div class="icheck-primary d-inline">
                                                                                    <input type="radio" id="outdraw" value="outdraw" name="outdraw">
                                                                                    <label for="outdraw">
                                                                                        YES
                                                                                    </label>
                                                                                </div>
                                                                                <div class="icheck-primary d-inline">
                                                                                    &nbsp;&nbsp;<input type="radio" id="outdraw2" value="outdraw2" name="outdraw">
                                                                                    <label for="outdraw2">
                                                                                        NO
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <p> Date : &nbsp; <input type="text"></p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </center>
                                    </form>


                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.Col -->
                    </div> <!-- /.Row -->
                </div><!-- ./ Container -->
        </section>
    </div>
</body>

</html>

<!-- <script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script> -->

<script type="text/javascript">
    function view_modal(hdrid1, status) {
        $('#hdrid').val(hdrid1);
        var hdrid = hdrid1;
        var form_data_edit = $('#ecrform').serializeArray();
        var field;
        var fieldvalue;

        // Ajax isi data
        $.ajax({
            url: "<?php echo base_url('C_Ecr/ajax_getbyhdrid') ?>",
            method: "get",
            dataType: "JSON",
            data: {
                hdrid: hdrid1
            },
            success: function(data) {
                $('#ecr_id').val(data.ecr_id);
                $('#check_point').val(data.check_point);
                $('#part_name').val(data.part_name);
                $('#part_number_old').val(data.part_number_old);
                $('#part_number_new').val(data.part_number_new);
                $('#status').val(data.status);
                // Refresh meeting
                tabel2.draw();

            },
            error: function(e) {
                alert(e);

            }
        });
    }
</script>