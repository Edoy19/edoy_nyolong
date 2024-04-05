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
    <script src="<?php echo base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!-- <script src="<php echo base_url() ?>assets/dist/js/pages/dashboard.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

    <!-- Label For Chart -->
    <script src="<?php echo base_url() ?>assets/plugins/label-charts/labels.js"></script>

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

                                     
                                         <?php if ($nik->name=='not found') {
                                            echo "Progress = Close";
                                         } else {
                                            echo 'Progress ='.$nik->nik.'-'.$nik->name. '(' . $nik->position_name  .')'. '(' . $nik->position_code . ' of 6)';
                                         }?> 

                                        <?php if ($this->session->userdata('user_name') == '' ) 
                                            echo "<button class='btn btn-success float-right' data-toggle='modal' data-target='#modal-confirm-login'> Login </button>";
                                        ?>

                                        <?php if ($this->session->userdata('user_name') != $nik->nik || $nik->position_code=='1' || $nik->position_code=='3' ) 
                                            {
                                                // redirect('Auth');
                                                echo "<button class='btn btn-success float-right' data-toggle='modal' data-target='#modal-confirm-approve' hidden> Approved </button>";
                                                echo "<button class='btn btn-warning float-right' data-toggle='modal' data-target='#modal-reject' hidden>Reject</button>";
                                            }
                                            else{
                                                // redirect('Auth');
                                                echo "<button class='btn btn-success float-right' data-toggle='modal' data-target='#modal-confirm-approve'> Approved</button>";
                                                echo "<button class='btn btn-warning float-right' data-toggle='modal' data-target='#modal-reject'>Reject</button>";
                                            }
                                        ?>

                                        <button class="btn btn-primary float-right" onclick="printDiv('printdiv')"><i class="fa fa-print"></i></button>
                                        <button class="btn btn-danger float-right" onclick="formclose()"><i class="fa fa-times-circle"></i></button>

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
                                                        <th>  <br> Doc. </th>
                                                        <th colspan="1">
                                                            <div style="margin-left: 35%; padding-top: 25px">
                                                                <p id="qrcode"></p>
                                                            </div>
                                                            <!-- <img src="<php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png" alt="AdminLTE Logo" style="opacity: .8"> -->
                                                        </th>
                                                        <th colspan="9" style="vertical-align: middle;">
                                                            <h2><u>QUICK INFORMATION FORM</u></h2>
                                                        </th>
                                                    </tr>
                                                </tbody>

                                                <tbody>

                                                <tr>
                                                    <td rowspan="21">
                                                        <h3 >
                                                            <!-- <span class="vertical-text">Found Problem (Step 1)</span> -->
                                                        </h3>
                                                    </td>
                                                </tr>

                                                    <tr style="height: 5px;">
                                                        <td colspan="4">
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="PF" class="form-check-input mr-3" disabled id="PF" <?php if ($tb_input_problem->problem_name == 'internal') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                                                <label for="PF" class="form-check-label">
                                                                    <h5><strong>PROBLEM FOUND</strong></h5>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="INF" class="form-check-input mr-3" disabled id="INF" <?php if ($tb_input_problem->problem_name == 'external') {
                                                                                                                                                echo 'checked';
                                                                                                                                            } ?>>
                                                                <label for="INF" class="form-check-label">
                                                                    <h5><strong>INFORMATION FROM CUSTOMER</strong></h5>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td><h5>Report By :</h5> <br><br><strong> <h5> <?= $tb_input_problem->name; ?> </h5></strong> </td>
                                                        <td><h5>Report To :</h5> <br><br><strong> <h5> <?= $tb_input_problem->name2; ?> </h5></strong> </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">
                                                            <h5>Report No.</h5>
                                                        </td>
                                                        <td colspan="2">
                                                            <h5><p class="text-right"><strong><?= $tb_input_problem->hdrid; ?></strong></p></h5>
                                                        </td>
                                                        <td rowspan="5">
                                                            <h5><p class="text-center">RANK : S / A / B / C </p></h5>
                                                            <h5><p>Rank Problem <br> <br><strong><?= $tb_input_problem->rank_problem; ?></strong> </p></h5>
                                                        </td>
                                                        <td rowspan="5">
                                                            <h5><p class="text-left">Section </p></h5>
                                                            <h5><p class="text-center"> <br><br><strong><?= $tb_input_problem->section1; ?></strong></p></h5>
                                                        </td>
                                                        <td rowspan="5">
                                                            <h5><p class="text-left">Section </p></h5>
                                                            <h5><p class="text-center"><br><br><strong><?= $tb_input_problem->section2; ?></strong> </p></h5>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h5>Issue Date<h/5></td>
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
                                                        <td class="bg-cm" style="vertical-align: middle;"><h5>Part Name</h5></td>
                                                        <td colspan="2"><h5><strong><?= $tb_input_problem->product_name; ?></strong></h5></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h5>Part Number</h5></td>
                                                        <td colspan="2"><h5><strong><?= $tb_input_problem->part_number; ?></strong></h5></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h5>Part Number Customer</h5></td>
                                                        <td colspan="2"> <h5><strong><?= $tb_input_problem->customer_product_id; ?></strong></h5></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h5>Problem</h5></td>
                                                        <td colspan="3" style="text-align: center; vertical-align: middle;">
                                                            <h5><strong>
                                                                <?= $tb_input_problem->problem; ?>
                                                            </strong></h5>
                                                        </td>
                                                        <td style="background-color: #D9D9D9; text-align:center; vertical-align: middle;"><h5>Delivery Status</h5></td>
                                                        <td>
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="urgent" class="form-check-input mr-3" disabled id="urgent" <?php if ($tb_input_problem->delivery_status == 'urgent') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                                                <label for="urgent" class="form-check-label">
                                                                    <h5>Urgent</h5>
                                                                </label> 
                                                            </div>
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="normal" class="form-check-input mr-3" disabled id="normal" <?php if ($tb_input_problem->delivery_status == 'normal') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                                                <label for="normal" class="form-check-label">
                                                                    <h5>Normal</h5>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td rowspan="6" class="bg-cm" style="vertical-align: middle;"><h5>Problem Pre-Information Detail</h5></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-d9"><h5>WHEN(date)</h5></td>
                                                        <td class="bg-d9"><h5>SHIFT</h5></td>
                                                        <td class="bg-d9"><h5>TIME</h5></td>
                                                        <td class="bg-d9"><h5>WHO(found by)</h5></td>
                                                        <td class="bg-d9"><h5>LOT NUMBER</h5></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <h5><strong>
                                                                <?php $date1 = $tb_input_problem->when_problem;
                                                                $newDate1 = date("d-m-Y", strtotime($date1));
                                                                echo $newDate1;
                                                                ?>
                                                            </strong><h5>
                                                        </td>
                                                        <td><h5><strong><?= $tb_input_problem->shift_problem; ?></strong></h5></td>
                                                        <td><h5><strong><?= $tb_input_problem->time_problem; ?></strong></h5></td>
                                                        <td><h5><strong><?= $tb_input_problem->who_problem; ?></strong></h5></td>
                                                        <td rowspan="3" style="text-align: center; vertical-align: middle;"><h5><strong><?= $tb_input_problem->lot_number_product; ?></strong></h5></td>
                                                    </tr>

                                                    <tr>
                                                       
                                                        <td colspan="2" class="bg-d9"><h5>WHERE(location)</h5></td>
                                                        <td class="bg-d9"><h5>QTY Defect</h5></td>
                                                        <td class="bg-d9"><h5>QTY LOT Prd.</h5></td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2"><h5><strong><?= $tb_input_problem->where_problem; ?></strong></h5></td>
                                                        <td><h5><strong><?= $tb_input_problem->qty; ?></strong></h5></td>
                                                        <td><h5><strong><?= $tb_input_problem->qty_lot; ?></strong></h5></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-d9"><h5>HOW THE PROBLEM FOUND</h5> <?php

                                                        if(!$tb_input_problem->atachment==''){                                                         
                                                            echo "<a href=". base_url('assets/upload/PROBLEM/') . $tb_input_problem->atachment ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>" ;
                                                        }else{
                                                            echo "<a class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>" ;
                                                        }; 

                                                       ?>
                                                       </td>
                                                        <td colspan="4"><h5><strong><?= $tb_input_problem->detail_problem; ?></strong></h5></td>
                                                    </tr>

                                                    <tr style="height: 200px;">
                                                        <td class="bg-cm" style="vertical-align: middle;"><h5>WHAT (picture or illustration, sketch of problem)</h5></td>
                                                        <td colspan="5"><img src="<?php echo base_url() . 'assets/upload/PROBLEM/' . $tb_input_problem->attach_picture; ?>" alt="" style=" max-height:200px;"></td>
                                                    </tr>

                                                    <tr>
                                                        <td rowspan="6" class="bg-cm" style="vertical-align: middle;"><h5>Temporary Action</h5></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <div class="form-group form-check">
                                                                    <input type="checkbox" name="LS" class="form-check-input mr-3" disabled checked>
                                                                    <label for="LS" class="form-check-label">
                                                                        <h5><?= $tb_input_problem->temporary_action; ?></h5>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td colspan="4" rowspan="5"><h5>REMARK</h5><br><h5><?= $tb_input_problem->etc; ?></h5></td>
                                                    </tr>

                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <!-- <div class="form-group form-check">
                                                                <input type="checkbox" name="LS" class="form-check-input mr-3" disabled checked>
                                                                <label for="LS" class="form-check-label">
                                                                    <h5><= $tb_input_problem->temporary_action; ?></h5>
                                                                </label>
                                                            </div> -->
                                                        </td>
                                                    </tr>

                                                    <!-- <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="LS" class="form-check-input mr-3" disabled id="LS" <php if ($tb_input_problem->temporary_action == 'Line Stop') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                                                <label for="LS" class="form-check-label">
                                                                    <h5>Line Stop</h5>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr> -->
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <!-- <div class="form-group form-check">
                                                                <input type="checkbox" name="CL" class="form-check-input mr-3" disabled id="CL" <php if ($tb_input_problem->temporary_action == 'Change Lot') {
                                                                                                                                            echo 'checked';
                                                                                                                                        } ?>>
                                                                <label for="CL" class="form-check-label">
                                                                    <h5>Change Lot</h5>
                                                                </label>
                                                            </div> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <!-- <div class="form-group form-check">
                                                                <input type="checkbox" name="REPAIR" class="form-check-input mr-3" disabled id="REPAIR" <php if ($tb_input_problem->temporary_action == 'Repair equip / Tools / Machine') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                                                <label for="REPAIR" class="form-check-label">
                                                                    <h5>Repair equip / tools / machine</h5>
                                                                </label>
                                                            </div> -->
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <!-- <div class="form-group form-check">
                                                                <input type="checkbox" name="OTHER" class="form-check-input mr-3" disabled id="OTHER" <php if ($tb_input_problem->temporary_action == 'Others') {
                                                                                                                                                    echo 'checked';
                                                                                                                                                } ?>>
                                                                <label for="OTHER" class="form-check-label">
                                                                    <h5>Other</h5>
                                                                </label>
                                                            </div> -->
                                                        </td>
                                                    </tr>

                                                </tbody>


                                                <tbody>
                                                    <tr>
                                                        <td rowspan="13">
                                                            <h5 >
                                                                <!-- <span class="vertical-text" >Mgnt Decision & Corrective Action (Step 2)</span> -->
                                                            </h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="bg-cm" style="vertical-align: middle;">
                                                            <h5><strong>For Costumer Claim</strong></h5>
                                                        </td><h5>
                                                        <td colspan="4" class="bg-cm" style="vertical-align: middle;">
                                                            <h5><strong>For Internal Problem</strong></h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="3" class="bg-cm" style="vertical-align: middle;">
                                                            <h5>Need Inform To Other Customer</h5>
                                                        </td>
                                                        <td rowspan="2" style="text-align: center; vertical-align: middle;">
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="Y" class="form-check-input mr-3" disabled id="Y" unchecked>

                                                                <!-- <input type="checkbox" name="Y" class="form-check-input mr-3" id="Y" <php if ($tb_response->dmia_responsible == 'dmia_responsible') {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } else {
                                                                                                                                                                        echo 'unchecked';
                                                                                                                                                                    } ?>> -->

                                                                <label for="Y" class="form-check-label">
                                                                    <h5>YES</h5>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="N" class="form-check-input mr-3" disabled id="N" checked>
                                                                <label for="N" class="form-check-label">
                                                                    <h5>NO</h5>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td rowspan="3" class="bg-cm" style="vertical-align: middle;">
                                                            <h5>Need Inform To Customer</h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="Y2" class="form-check-input mr-3" disabled id="Y2" unchecked >
                                                                <label for="Y" class="form-check-label">
                                                                    <h5>YES</h5>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="N2" class="form-check-input mr-3" disabled id="N2" checked>

                                                                                                                                                                      <!-- <input type="checkbox" name="N2" class="form-check-input mr-3" id="N2" <php if ($tb_response->dmia_responsible == 'dmia_responsible') {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } else {
                                                                                                                                                                        echo 'unchecked';
                                                                                                                                                                    } ?>> -->
                                                                <label for="N" class="form-check-label">
                                                                   <h5> NO</h5>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h5>Approval By DH / Director</h5></td>
                                                    </tr>
                                                    <tr style="height: 80px;">
                                                        <td> - </td>
                                                        <td colspan="2"> - </td>
                                                        <td> - </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">
                                                            <h5>DMIA RESPONSIBLE</h5>
                                                        </td>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="dmia_responsible" class="form-check-input mr-3" disabled id="dmia_responsible" <?php if ($tb_response->dmia_responsible == 'dmia_responsible') {
                                                                                                                                                                        echo 'checked';
                                                                                                                                                                    } else {
                                                                                                                                                                        echo 'unchecked';
                                                                                                                                                                    } ?>>
                                                                <label for="dmia_responsible" class="form-check-label">
                                                                    <h5>YES</h5>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="dmia_responsible2" class="form-check-input mr-3" disabled id="dmia_responsible2" <?php if ($tb_response->dmia_responsible == 'dmia_responsible2') {
                                                                                                                                                                            echo 'checked';
                                                                                                                                                                        } else {
                                                                                                                                                                            echo 'unchecked';
                                                                                                                                                                        } ?>>
                                                                <label for="dmia_responsible2" class="form-check-label">
                                                                   <h5> NO</h5>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td rowspan="3" class="bg-cm" style="vertical-align: middle;"><h5>ROOT CAUSE PROBLEM</h5></td>
                                                        <td colspan="3" rowspan="3"> <h5> # <?= $tb_response->occurrence_why_1  ; ?> <br><br># <?= $tb_response->flow_out_why_1  ; ?> </h5> </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h5>RESPONSIBLE SELECTION</h5></td>
                                                        <td>  <strong><?= $tb_input_problem->section2; ?></strong> </td>
                                                    </tr>

                                                    <tr>
                                                        <td rowspan="3" class="bg-cm" style="vertical-align: middle;"><h5>REMARK</h5></td>
                                                        <td rowspan="3"> - </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h5>Corrective Action</h5></td>
                                                        <td colspan="2" class="bg-cm" style="vertical-align: middle;"><h5>Detail Improvement Action</h5></td>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h5>Approval by Manager</h5></td>
                                                    </tr>

                                                    <tr>
                                                        <td><h5>Content<h5></td>
                                                        <td colspan="2" rowspan="4" style="text-align: left;"><h5>PERBAIKAN : </h5><br ><strong> <h5> # <?= $tb_response->occurrence_prevention_1  ; ?>  <br><br># <?= $tb_response->flow_out_prevention_1  ; ?> </strong></h5></td>
                                                        <td rowspan="2"> <h5>-</h5> </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;"><h5>Investigation Refer To CAR No</h5></td>
                                                        <td> - </td>
                                                        <td rowspan="3" style="text-align: left; vertical-align: top;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Machine" class="form-check-input mr-3" disabled id="Machine">
                                                                <label for="Machine" class="form-check-label">
                                                                    <h5>Machine</h5>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Tool" class="form-check-input mr-3" disabled id="Tool">
                                                                <label for="Tool" class="form-check-label">
                                                                    <h5>Tool</h5>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Method" class="form-check-input mr-3" disabled id="Method">
                                                                <label for="Method" class="form-check-label">
                                                                   <h5> Method</h5>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Material" class="form-check-input mr-3" disabled id="Material">
                                                                <label for="Material" class="form-check-label">
                                                                    <h5>Material</h5>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Man" class="form-check-input mr-3" disabled id="Man">
                                                                <label for="Man" class="form-check-label">
                                                                    <h5>Man</h5>
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Other" class="form-check-input mr-3" disabled id="Other">
                                                                <label for="Other" class="form-check-label">
                                                                   <h5> Other</h5>
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 100px;">
                                                        <td rowspan="2" class="bg-cm" style="vertical-align: middle;">
                                                            <h5>Approval by Manager</h5>
                                                        </td>
                                                        <td rowspan="2">  <h5>  <?= $tb_approval_name->name; ?> </h5> </td>
                                                        <td class="bg-cm" style="vertical-align: middle;">
                                                            <h5>Detail Report & Evidence</h5>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td style="height:120px;">

                                                        <? 

                                                           if(!$tb_effectiveness->attach_file_1==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/EF/') . $tb_effectiveness->attach_file_1 ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a> Effectiveness 1 <br>" ;
                                                           }; 

                                                           if(!$tb_effectiveness->attach_file_2==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/EF/') . $tb_effectiveness->attach_file_2 ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>  Effectiveness 2 <br>" ;
                                                           }; 

                                                           if(!$tb_effectiveness->attach_file_3==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/EF/') . $tb_effectiveness->attach_file_3 ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>  Effectiveness 3 <br>" ;
                                                           }; 

                                                           if(!$tb_effectiveness->attach_file_4==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/EF/') . $tb_effectiveness->attach_file_4 ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>  Effectiveness 4 <br>" ;
                                                           }; 

                                                           if(!$tb_effectiveness->attach_file_5==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/EF/') . $tb_effectiveness->attach_file_5 ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>  Effectiveness 5 <br>" ;
                                                           }; 

                                                           if(!$tb_effectiveness->attach_file_6==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/EF/') . $tb_effectiveness->attach_file_6 ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>  Effectiveness 6 <br>" ;
                                                           }; 

                                                           if(!$tb_response->attach_file_1_res==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/RES/') . $tb_response->attach_file_1_res ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a> Respon 1 <br>" ;
                                                           }; 
                                                           
                                                           if(!$tb_response->attach_file_2_res==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/RES/') . $tb_response->attach_file_2_res ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a> Respon 2 <br>" ;
                                                           }; 

                                                           if(!$tb_response->attach_file_3_res==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/RES/') . $tb_response->attach_file_3_res ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a> Respon 3 <br>" ;
                                                           }; 

                                                           if(!$tb_response->investigation_attach==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/RES/') . $tb_response->investigation_attach ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a> Investigation <br>" ;
                                                           }; 

                                                           if(!$tb_response->verification_attach==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/RES/') . $tb_response->verification_attach ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a> Verification <br>" ;
                                                           }; 
                                                           
                                                           if(!$tb_response->validation_attach==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/RES/') . $tb_response->validation_attach ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a> Validation <br>" ;
                                                           }; 

                                                           if(!$tb_response->attach_file_occurence==''){                                                         
                                                                echo "<a href=". base_url('assets/upload/RES/') . $tb_response->attach_file_occurence ." class='btn btn-success' id='attach_file_occurence_view' target='_blank'> <i class='fa fa-paperclip'></i> </a> Occurence <br>" ;
                                                           }; 



                                                        ?>

                                                        </td>
                                                    </tr>
                                                </tbody>


                                            </table>
                                        </center>
                                    </form>























                                    <!-- TTD APPROVE
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
                                    </center> -->



                                </div> <!-- /.card-body -->
                            </div> <!-- /.card -->
                        </div> <!-- /.Col -->
                    </div> <!-- /.Row -->
                </div><!-- ./ Container -->
        </section>
    </div>

     <!--  modal-confirm-login -->
    <div class="modal fade" id="modal-confirm-login">
    <div class="modal-dialog">
        <div class="modal-content bg-primary">

        <div class="modal-header">
            <h4 class="modal-title">Login confirmation</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">

            <label id="error_login" > </label>

             <div class="input-group mb-3">
            <input type="text" name="username" id="username" class="form-control" placeholder="UserID">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-user"></span>
                </div>
            </div>
            </div>

            <div class="input-group mb-3">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                <span class="fas fa-lock"></span>
                </div>
            </div>
            </div>

        </div>

        <div class="modal-footer justify-content-between">

            <button type="button" id="login" onclick="Login_data()" class="btn btn-outline-light">Login</button>
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>

            <p class="mb-1">      
                <a href="http://10.73.142.75/forgot_password/" target="_blank">I forgot my password</a>               
            </p>


        </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!--  modal-confirm-approve -->
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
            <label id="iddelete2" hidden> </label>Apakah ingin approve <label id="iddelete" hidden> </label> ?
            <br>
            <label id="lblposition" hidden> </label>
            <br>
            <label id="lbluserconfirm" hidden> <?php echo $userid; ?> </label>
            <label id="iduserlogin" hidden> <?php echo $hdrid; ?> </label>
        </div>

        <div class="modal-footer justify-content-between">

            <button type="button" id="delete" onclick="Approve_data()" class="btn btn-outline-light">Approve</button>
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>

        </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- modal-reject-approve -->
    <div class="modal fade" id="modal-reject">Reject_data
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
            <!-- <input type="text" name="tbreject" class="form-control" id="tbreject" hidden> -->
            <input type="text" name="idreject" class="form-control" id="idreject" hidden>
            <button type="button" id="process_reject" onclick="Reject_data()" class="btn btn-outline-light">Reject</button>
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>

        </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
    </div>
    <!-- /.modal Reject-->


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

<script type="text/javascript">


    function formclose(){
        setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 1000); 
    }

    function Login_data() {

    // Form data
    var fdata = new FormData();
    // var fdata2 = new FormData();

    // Update by Hdrid    
    fdata.append('username',  $('#username').val());
    fdata.append('password',  $('#password').val());

    // alert('Hello');
  
    // Url Post Untuk Approve
    vurl = "<?php echo base_url('C_Print_approved/ajax_login') ?>";

    // Post data
    $.ajax({
      url: vurl,
      method: "post",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {

         if(data.status=="OK") {

            // Refresh Page
            location.reload();

         }else{

            // Munculkan pesan
            $('#error_login').text(data.status);
            // Clear inputan login
            $('#username').val("");
            $('#password').val("");

         }

      },
      error: function(e) {
        //Pesan Gagal
        gagal(e);
      }
    });

  }

  function Approve_data() {

    // alert(<php echo $hdrid ?>);

    // Form data
    var fdata = new FormData();
    // var fdata2 = new FormData();

    // Update by Hdrid
    fdata.append('problem_id',"<?php echo $hdrid ?>");
    fdata.append('nik', "<?php echo $nik->nik; ?>");
    fdata.append('name', "<?php echo $nik->name; ?>");
    fdata.append('position_code', "<?php echo $nik->position_code; ?>");
  
    var fdata2 = new FormData();

    fdata2.append("hdrid","<?php echo $hdrid ?>");
    fdata2.append("problem_name","<?php echo $tb_input_problem->problem_name ?>"); 
    fdata2.append("group_product_name","<?php echo $tb_input_problem->group_product_name ?>"); 
    fdata2.append("product_name","<?php echo $tb_input_problem->product_name ?>"); 
    fdata2.append("name2","<?php echo $tb_input_problem->name2 ?>"); 
    fdata2.append("problem_category_name","<?php echo $tb_input_problem->problem_category_name ?>"); 

    fdata2.append("body_content",""); 
    fdata2.append("comment",""); 
    fdata2.append("status_subject","");
    fdata2.append('position_code', "<?php echo $nik->position_code; ?>");
   
    // Url Post Untuk Approve
    vurl = "<?php echo base_url('C_progress/ajax_approve') ?>";

    // Post data
    $.ajax({
      url: vurl,
      method: "post",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {

        //fdata2.append("body_content",data.status); 
       // Hide modal delete
        berhasil("Approve success");  
        fdata2.append("body_content",data.status); 

        $('#modal-confirm-approve').modal('hide');
        // $('#modal-default').modal('hide');
        // berhasil(data.status);

        var vurl2; 
        vurl2 = "<?php echo base_url('C_Email/ajax_send_mail_v2')?>";

        $.ajax({
            url: vurl2,
            method: "post",
            processData: false,
            contentType: false,
            data: fdata2,
            success: function (data) {                 
                // Pesan berhasil  

            },
            error: function (e) {
                gagal(e);
                //location.reload();
                //error
            }
        });


      },
      error: function(e) {
        //Pesan Gagal
        gagal(e);
      }
    });

  }


  function Reject_data() {

    // Validasi reason harus diisi
    if ($('#reason').val() == '') {
      gagal('Reason wajib diisi...');
      return false;
    }

    // Form data
    var fdata = new FormData();
    var fdata2 = new FormData();

    // Delete by Hdrid
    // fdata.append('hdrid',"<php echo $hdrid ?>");
    // fdata.append('rejected_by', "<php echo $name; ?>");
    // fdata.append('reason', $('#reason').val());

    fdata.append('hdrid',"<?php echo $hdrid ?>");
    fdata.append('rejected_by', "<?php echo $nik->name; ?>");
    fdata.append('reason', $('#reason').val());
    fdata.append('position_code', "<?php echo $nik->position_code; ?>");
   
    // return false;    

    var fdata2 = new FormData();

    fdata2.append("hdrid","<?php echo $hdrid ?>"); 
    fdata2.append("problem_name","<?php echo $tb_input_problem->problem_name ?>"); 
    fdata2.append("group_product_name","<?php echo $tb_input_problem->group_product_name ?>"); 
    fdata2.append("product_name","<?php echo $tb_input_problem->product_name ?>"); 
    fdata2.append("name2","<?php echo $name ?>"); 
    fdata2.append("problem_category_name","<?php echo $tb_input_problem->problem_category_name ?>"); 
    fdata2.append("comment",$('#reason').val()); 
    fdata2.append("status_subject","Rejected");
    fdata2.append('position_code', "<?php echo $nik->position_code; ?>");

    // Url Post delete
    vurl = "<?php echo base_url('C_progress/ajax_reject') ?>";

    // Post data
    $.ajax({
      url: vurl,
      method: "post",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {

        // Hide modal delete
        $('#modal-reject').modal('hide');
        $('#modal-default').modal('hide');

        // berhasil(data.status);
        var vurl2; 
        vurl2 = "<?php echo base_url('C_Email/ajax_send_mail_v1_reject')?>";

        $.ajax({
            url: vurl2,
            method: "post",
            processData: false,
            contentType: false,
            data: fdata2,
            success: function (data) {                 
                // Pesan berhasil
                berhasil(data.status);                               
            },
            error: function (e) {
                gagal(e);
                //location.reload();
                //error
            }
        });


      },
      error: function(e) {
        //Pesan Gagal
        gagal(e);
      }
    });
  }

</script>

<script type="text/javascript">

    const Toast = Swal.mixin({
      toast: true,
      position: 'botton',
      showConfirmButton: false,
      timer: 5000
    });

    function berhasil($data)
      {

          Toast.fire({
          type: 'success',
          title: $data             
          });

      }

      function gagal($data)
      {
        
          Toast.fire({
          type: 'error',
          title: $data             
          });
      }

</script>

