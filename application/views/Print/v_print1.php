<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Quality Portal</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
    $this->load->helper('url');
    ?>

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
    <!-- <link rel="stylesheet" href="<php echo base_url() ?>assets/dist/css/table-quick.css" type="text/css" media="print"> -->
    <!-- CSS PRINT QUICK INFORMATION -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/table-quick.css" type="text/css">
    <!-- PLUGIN QRCODE -->
    <script src="<?php echo base_url() ?>assets/plugins/qrcode.min.js"></script>


</head>

<body>
    <div>
        <section class="content">

            <?php echo $this->session->flashdata('message');  ?>
            <small>

                <div class="container-fluid" id="printdiv">
                    <div class="row">
                        <div class="col-12">
                            <!-- .col -->
                            <div class="card">
                                <!-- .card -->
                                <div class="card-body">
                                    <!-- .card-body -->
                                    <div class="">
                                        <button class="btn btn-primary float-right" onclick="printDiv('printdiv')"><i class="fa fa-print"></i></button>
                                    </div>

                                    <div class="">
                                        <a class="btn btn-danger float-right" href="<?php echo base_url() . 'C_Print/print_report2?var1=' . $tb_input_problem->hdrid; ?>"><i class="fa fa-file"></i></a>
                                    </div>
                                    <!-- ECR -->
                                    <form class="form-horizntal" id="meetingform" role="form">
                                        <input id="text" type="text" hidden value="<?php $current = current_url() . '?var1=' . $tb_input_problem->hdrid;
                                                                                    print_r($current); ?>" />
                                        <center>
                                            <table id="ecrtabel" class="table table-bordered table-hover" style="text-align: center;">
                                                <tbody>

                                                    <!-- TITLE -->
                                                    <tr style="height:5px">
                                                        <th> <img src="<?php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png" alt="AdminLTE Logo" style="opacity: .8"> <br> Doc. </th>
                                                        <th colspan="1">
                                                            <div style="margin-left: 35%; padding-top: 25px">
                                                                <p id="qrcode"></p>
                                                            </div>
                                                        </th>
                                                        <th colspan="9" style="vertical-align: middle;">
                                                            <h2><u>QUICK INFORMATION FORM</u></h2>
                                                        </th>
                                                    </tr>
                                                </tbody>

                                                <tbody>
                                                    <tr>
                                                        <td rowspan="21" >
                                                            <h3 class="vertical-text ">
                                                                <span>Found Problem (Step 1)</span>
                                                            </h3>
                                                        </td>
                                                    </tr>

                                                    <tr style="height: 5px;">
                                                        <td colspan="4">
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="PF" class="form-check-input mr-3" id="PF" <?php if ($tb_input_problem->problem_name == 'internal') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                                                <label for="PF" class="form-check-label">
                                                                    <h3><strong>PROBLEM FOUND</strong></h3>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="INF" class="form-check-input mr-3" id="INF" <?php if ($tb_input_problem->problem_name == 'external') {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?>>
                                                                <label for="INF" class="form-check-label">
                                                                    <h3><strong>INFORMATION FROM CUSTOMER</strong></h3>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td><h4>Report By :</h4> <br><br><h5><strong><?= $tb_input_problem->name; ?></strong></h5> </td>
                                                        <td><h4>Report To : </h4> <br><br><h5><strong><?= $tb_input_problem->name2; ?></strong></h5> </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">
                                                            <h3>Report No.</h3>
                                                        </td>
                                                        <td colspan="2">
                                                            <h4 class="text-right"><strong><?= $tb_input_problem->hdrid; ?></strong></h4>
                                                        </td>
                                                        <td rowspan="5">
                                                            <p class="text-center"><h6>RANK : S / A / B / C </h6></p>
                                                            <p><h6>Rank Problem</h6> <br> <br><h5><strong><?= $tb_input_problem->rank_problem; ?></strong></h5> </p>
                                                        </td>
                                                        <td rowspan="5">
                                                            <p class="text-left"><h4>Section</h4> </p>
                                                            <p class="text-center"> <br><br><h5><strong><?= $tb_input_problem->section1; ?></strong></h5></p>
                                                        </td>
                                                        <td rowspan="5">
                                                            <p class="text-left"><h4>Section</h4> </p>
                                                            <p class="text-center"><br><br><h5><strong><?= $tb_input_problem->section2; ?></strong></h5> </p>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm " style="vertical-align: middle;"><h3>Issue Date</h3></td>
                                                        <td colspan="2">
                                                        <h5><strong>
                                                               
                                                                <?php $date = $tb_input_problem->issue_date;
                                                                $newDate = date("d-m-Y", strtotime($date));
                                                                echo $newDate;
                                                                ?>
                                                            </strong></h5>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h3>Part Name</h3></td>
                                                        <td colspan="2"><h5><strong><?= $tb_input_problem->product_name; ?></strong></h5></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h3>Part Number</h3></td>
                                                        <td colspan="2"><h5><strong><?= $tb_input_problem->part_number; ?></strong></h5></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h3>Part Number Customer</h3></td>
                                                        <td colspan="2"><h5><strong><?= $tb_input_problem->customer_product_id; ?></h5></strong>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h3>Problem</h3></td>
                                                        <td colspan="3" style="text-align: center; vertical-align: middle;">
                                                            <h4><strong>
                                                                <?= $tb_input_problem->detail_problem; ?>
                                                            </strong></h4>
                                                        </td>
                                                        <td style="background-color: #D9D9D9; text-align:center; vertical-align: middle;"><h3>Delivery Status</h3></td>
                                                        <td>
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="urgent" class="form-check-input mr-3" id="urgent" <?php if ($tb_input_problem->delivery_status == 'urgent') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                                                <label for="urgent" class="form-check-label">
                                                                    <h3>Urgent</h3>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="normal" class="form-check-input mr-3" id="normal" <?php if ($tb_input_problem->delivery_status == 'normal') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                                                <label for="normal" class="form-check-label">
                                                                    <h3>Normal</h3>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td rowspan="6" class="bg-cm" style="vertical-align: middle;"><h3>Problem Pre-Information Detail</h3></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-d9"><h3>WHEN(date)</h3</td>
                                                        <td class="bg-d9"><h3>SHIFT</h3></td>
                                                        <td class="bg-d9"><h3>TIME</h3></td>
                                                        <td class="bg-d9"><h3>WHO(found by)</h3></td>
                                                        <td class="bg-d9"><h3>LOT NUMBER</h3></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <h3><strong>
                                                                <?php $date1 = $tb_input_problem->when_problem;
                                                                $newDate1 = date("d-m-Y", strtotime($date1));
                                                                echo $newDate1;
                                                                ?>
                                                            </strong></h3>
                                                        </td>
                                                        <td><h3><strong><?= $tb_input_problem->shift_problem; ?></strong></h3></td>
                                                        <td><h3><strong><?= $tb_input_problem->time_problem; ?></strong></h3></td>
                                                        <td><h3><strong><?= $tb_input_problem->who_problem; ?></strong></h3></td>
                                                        <td rowspan="3" style="text-align: center; vertical-align: middle;"><h3><strong><?= $tb_input_problem->lot_number_product; ?></strong></h3></td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2" class="bg-d9"><h3>WHERE(location)</h3></td>
                                                        <td class="bg-d9"><h3>QTY Defect</h3></td>
                                                        <td class="bg-d9"><h3>QTY LOT Prd.</h3></td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2"><h3><strong><?= $tb_input_problem->where_problem; ?></strong></h3></td>
                                                        <td><h3><strong><?= $tb_input_problem->qty; ?></strong></h3></td>
                                                        <td><h3><strong><?= $tb_input_problem->qty_lot; ?></strong></h3></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-d9"><h4>HOW THE PROBLEM FOUND</h4> <?php

                                                        if(!$tb_input_problem->atachment==''){                                                         
                                                            echo "<a href=". base_url('assets/upload/PROBLEM/') . $tb_input_problem->atachment ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>" ;
                                                        }else{
                                                            echo "<a class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>" ;
                                                        }; 

                                                       ?> </td>

                                                        <td colspan="4"><h3><strong><?= $tb_input_problem->detail_problem; ?></strong></h3></td>
                                                    </tr>

                                                    

                                                    <tr style="height: 200px;">
                                                        <td class="bg-cm" style="vertical-align: middle;"><h3>WHAT (picture or illustration, sketch of problem)</h3></td>
                                                        <td colspan="5"><img src="<?php echo base_url() . 'assets/upload/PROBLEM/' . $tb_input_problem->attach_picture; ?>" alt="" style=" max-height:200px;"></td>
                                                    </tr>

                                                    <tr>
                                                        <td rowspan="6" class="bg-cm" style="vertical-align: middle;"><h3>Temporary Action</h3></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="HP" class="form-check-input mr-3" id="HP">
                                                                <label for="HP" class="form-check-label">
                                                                    <h4>Hold Product</h4>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td colspan="4" rowspan="5"><h4>ETC</h4></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="LS" class="form-check-input mr-3" id="LS" <?php if ($tb_input_problem->temporary_action == 'Line Stop') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                                                <label for="LS" class="form-check-label">
                                                                    <h4>Line Stop</h4>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="CL" class="form-check-input mr-3" id="CL" <?php if ($tb_input_problem->temporary_action == 'Change Lot') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                                                <label for="CL" class="form-check-label">
                                                                    <h4>Change Lot</h4>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="REPAIR" class="form-check-input mr-3" id="REPAIR" <?php if ($tb_input_problem->temporary_action == 'Repair equip / Tools / Machine') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                                                <label for="REPAIR" class="form-check-label">
                                                                    <h4>Repair equip / tools / machine</h4>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="OTHER" class="form-check-input mr-3" id="OTHER" <?php if ($tb_input_problem->temporary_action == 'Others') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                                                <label for="OTHER" class="form-check-label">
                                                                   <h4>Other</h4> 
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>


                                                <tbody>
                                                    <tr>
                                                        <td rowspan="13">
                                                            <h5>
                                                                <span class="vertical-text"><strong>Mgnt Decision & Corrective Action (Step 2)</strong></span>
                                                            </h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="bg-cm" style="vertical-align: middle;">
                                                            <strong><h2>For Costumer Claim</h2></strong>
                                                        </td>
                                                        <td colspan="4" class="bg-cm" style="vertical-align: middle;">
                                                            <strong><h2>For Internal Problem</h2></strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="3" class="bg-cm" style="vertical-align: middle;">
                                                            <h3>Need Inform To Other Customer</h3>
                                                        </td>
                                                        <td rowspan="2" style="text-align: center; vertical-align: middle;">
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="Y" class="form-check-input mr-3" id="Y">
                                                                <label for="Y" class="form-check-label">
                                                                    <h5>YES</h5>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="N" class="form-check-input mr-3" id="N">
                                                                <label for="N" class="form-check-label">
                                                                    <h5>NO</h5>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td rowspan="3" class="bg-cm" style="vertical-align: middle;">
                                                            <h3>Need Inform To Customer</h3>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="Y" class="form-check-input mr-3" id="Y">
                                                                <label for="Y" class="form-check-label">
                                                                    <h5>YES</h5>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="N" class="form-check-input mr-3" id="N">
                                                                <label for="N" class="form-check-label">
                                                                    <h5>NO</h5>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h3>Approval By DH / Director</h3></td>
                                                    </tr>
                                                    <tr style="height: 80px;">
                                                        <td> - </td>
                                                        <td colspan="2"> - </td>
                                                        <td> - </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">
                                                            <h3>DMIA RESPONSIBLE</h3>
                                                        </td>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="dmia_responsible" class="form-check-input mr-3" id="dmia_responsible" <?php if ($tb_response->dmia_responsible == 'dmia_responsible') {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } else {
                                                                                                                                                                        echo 'unchecked';
                                                                                                                                                                    } ?>>
                                                                <label for="dmia_responsible" class="form-check-label">
                                                                    <h5>YES</h5>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="dmia_responsible2" class="form-check-input mr-3" id="dmia_responsible2" <?php if ($tb_response->dmia_responsible == 'dmia_responsible2') {
                                                                                                                                                                            echo 'checked';
                                                                                                                                                                        } else {
                                                                                                                                                                            echo 'unchecked';
                                                                                                                                                                        } ?>>
                                                                <label for="dmia_responsible2" class="form-check-label">
                                                                    <h5>NO</h5>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td rowspan="3" class="bg-cm" style="vertical-align: middle;"><h3>ROOT CAUSE PROBLEM</h3></td>
                                                        <td colspan="3" rowspan="3"> - </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h3>RESPONSIBLE SELECTION</h3></td>
                                                        <td> - </td>
                                                    </tr>

                                                    <tr>
                                                        <td rowspan="3" class="bg-cm" style="vertical-align: middle;"><h3>REMARK</h3></td>
                                                        <td rowspan="3"> - </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h3>Corrective Action</h3></td>
                                                        <td colspan="2" class="bg-cm" style="vertical-align: middle;"><h3>Detail Improvement Action</h3></td>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h3>Approval by Manager</h3></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h3>Content</h3></td>
                                                        <td colspan="2" rowspan="4" style="text-align: left;"><h3><strong>PERBAIKAN :</strong></h3></td>
                                                        <td rowspan="2"> - </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h3>Investigation Refer To CAR No</h3></td>
                                                        <td> - </td>
                                                        <td rowspan="3" style="text-align: left; vertical-align: top;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Machine" class="form-check-input mr-3" id="Machine">
                                                                <label for="Machine" class="form-check-label">
                                                                    <h4>Machine</h4>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Tool" class="form-check-input mr-3" id="Tool">
                                                                <label for="Tool" class="form-check-label">
                                                                    <h4>Tool</h4>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Method" class="form-check-input mr-3" id="Method">
                                                                <label for="Method" class="form-check-label">
                                                                    <h4>Method</h4>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Material" class="form-check-input mr-3" id="Material">
                                                                <label for="Material" class="form-check-label">
                                                                    <h4>Material</h4>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Man" class="form-check-input mr-3" id="Man">
                                                                <label for="Man" class="form-check-label">
                                                                    <h4>Man</h4>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Other" class="form-check-input mr-3" id="Other">
                                                                <label for="Other" class="form-check-label">
                                                                    <h4>Other</h4>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 100px;">
                                                        <td rowspan="2" class="bg-cm" style="vertical-align: middle;">
                                                            <h3>Approval by Manager</h3>
                                                        </td>
                                                        <td rowspan="2"> - </td>
                                                        <td class="bg-cm" style="vertical-align: middle;">
                                                            <h3>Detail Report & Evidence</h3>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="height:120px;">
                                                            -
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

    <script>
        function printDiv(printdiv) {
            var printContents = document.getElementById(printdiv).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>

    <script>
        var qrcode = new QRCode(document.getElementById("qrcode"), {
            width: 100,
            height: 100,
        });

        function makeCode() {
            var elText = document.getElementById("text");

            qrcode.makeCode(elText.value);
        }

        makeCode();
    </script>

    <!-- 
    <script type='text/javascript'>

/*--This JavaScript method for Print command--*/

    function printDiv() {

        var toPrint = document.getElementById('printdiv');
        var popupWin = window.open();


        popupWin.document.open();
        popupWin.document.write('<html><title>::Preview::</title><link rel="stylesheet" type="text/css" media="print" href="<php echo base_url();?>assets/dist/css/test.css"/></head><body onload="window.print()">');
        popupWin.document.write(toPrint.innerHTML);
        popupWin.document.write('</html>');

        popupWin.document.close();

    }

</script> -->

    <!-- <script>
        function printDiv(printdiv) {
            var printContents = document.getElementById(printdiv).innerHTML;
            var originalContents = document.body.innerHTML;

            printContents.document.write('<html><head><style type="text/css">');
            printContents.document.write('table tbody tr td.bg-cm{background-color: #D9D9D9; text-align: center; vertical-align: middle;}');
            printContents.document.write('table {text-align: center;');
            printContents.document.write('</style></head><body onload="window.print();">');
            document.body.innerHTML = printContents;
            printContents.document.write('</body></html>');
            // window.print();

            document.body.innerHTML = originalContents;
        }
    </script> -->

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