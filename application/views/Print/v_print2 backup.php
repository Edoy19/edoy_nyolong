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

    <style>
        tr.noBorder td {
            border: 0;
        }
    </style>


</head>

<body>
    <div>
        <section class="content">

            <?php echo $this->session->flashdata('message');  ?>
            <small>
                <div class="p-2">
                    <button class="btn btn-primary float-right" onclick="printDiv('printdiv')"><i class="fa fa-print"></i></button>
                </div>
                <div class="container-fluid" id="printdiv">
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

                                            <!-- TABEL 1 -->

                                            <table id="ecrtabel" class="table table-bordered table-hover">

                                                <thead>
                                                    <tr>
                                                        <th rowspan="1">Distribute To</th>
                                                        <th rowspan="1">Qty</th>
                                                        <th rowspan="6" style="text-align:center; vertical-align: middle;">
                                                            <h2><span>CUSTOMER CLAIM - CORRECTIVE ACTION REQUEST & ANSWER</span></h2>
                                                        </th>
                                                        <th style="text-align:center; vertical-align: middle;" rowspan="2">Issue No</th>
                                                        <th style="text-align:center; vertical-align: middle;" rowspan="2"></th>
                                                    </tr>

                                                    <tr>
                                                        <th rowspan="1">

                                                        </th>
                                                        <th rowspan="1">

                                                        </th>
                                                    </tr>

                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th style="text-align:center; vertical-align: middle;" rowspan="2">Issue Date</th>
                                                        <th style="text-align:center; vertical-align: middle;" rowspan="2"></th>
                                                    </tr>

                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>

                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                        <th style="text-align:center; vertical-align: middle;" rowspan="2">Due Date</th>
                                                        <th style="text-align:center; vertical-align: middle;" rowspan="2"></th>
                                                    </tr>

                                                    <tr>
                                                        <th></th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <!-- 
                                                <tbody>
                                                    <tr>
                                                        <td colspan="5"></td>
                                                    </tr>
                                                </tbody> -->
                                            </table>


                                            <!-- TABEL 2 -->

                                            <table class="table table-bordered table-hover" style="text-align:center">
                                                <tbody>
                                                    <tr>
                                                        <td style="background-color: #D9D9D9; vertical-align: middle;">Responsible Department <br> ( Production, Supplier )</td>
                                                        <td style=" background-color: #D9D9D9; vertical-align: middle;">Occurrence Date</td>
                                                        <td style="background-color: #D9D9D9; vertical-align: middle;">QTY</td>
                                                        <td>Customer : <br> <?= $tb_input_problem->customer_name; ?> <br></td>
                                                        <td style=" background-color: #D9D9D9; vertical-align: middle;">Critical Designation</td>
                                                        <td colspan="2" style="background-color: #D9D9D9; vertical-align: middle;">Analysis Claim Part</td>
                                                        <td style=" background-color: #D9D9D9; vertical-align: middle;">NG Description</td>
                                                        <td style="background-color: #D9D9D9; vertical-align: middle;">Process Outline</td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan=" 2" style="text-align: center; vertical-align: middle;"><?= $tb_input_problem->responsible_section; ?></td>
                                                        <td rowspan="2" style="text-align: center; vertical-align: middle;"><?= $tb_response->date_response; ?></td>
                                                        <td rowspan="2" style="text-align:center; vertical-align: middle;"><?= $tb_input_problem->qty; ?> pcs</td>
                                                        <td rowspan="2" style="text-align:center; vertical-align: middle;">Model : <br> <br></td>
                                                        <td rowspan="2"></td>
                                                        <td colspan="2"></td>
                                                        <td rowspan="8" style="width: 300px;"></td>
                                                        <td rowspan="8" style="width: 300px;"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Dept.</td>
                                                        <td>PIC</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="4" style="background-color: #D9D9D9; text-align: center; vertical-align: middle;">Defect Information</td>
                                                        <td colspan="1" style="background-color: #D9D9D9; text-align: center; vertical-align: middle;">Production Date</td>
                                                        <td><?= $tb_approval->department_name; ?></td>
                                                        <td><?= $tb_approval->department_name; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="4" style="text-align:center; vertical-align: middle;">Blower Abnormal Noise</td>
                                                        <td style="text-align:center; vertical-align: middle;">5(d) 3(m) 21(y)</td>
                                                        <td>QC Assy</td>
                                                        <td>DONY</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2" style="background-color: #D9D9D9; text-align: center; vertical-align: middle;">
                                                            Part Name
                                                        </td>
                                                        <td colspan="3" style="background-color: #D9D9D9; text-align: center; vertical-align: middle;">
                                                            Part No.
                                                        </td>
                                                        <td>
                                                            MFG
                                                        </td>
                                                        <td>
                                                            ENDAH
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2" rowspan="3" style="text-align:center; vertical-align: middle;">
                                                            Blower
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="1" style="text-align:left; width:140px">
                                                            Customer Part No :
                                                        </td>
                                                        <td colspan="2" style="text-align:left;"> - </td>
                                                        <td>
                                                            MFG
                                                        </td>
                                                        <td>
                                                            WAHID
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="1" style="text-align:left;">
                                                            DMIA Part No :
                                                        </td>
                                                        <td colspan="2" style="text-align:left;"> 000000111 </td>
                                                        <td>
                                                            MFG
                                                        </td>
                                                        <td>
                                                            SURYA
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>





                                            <!-- TABEL 3 -->

                                            <table class="table table-bordered table-hover" style="text-align:center">

                                                <tbody>
                                                    <tr class="noBorder">
                                                        <!-- JANGAN DIHAPUS 56td-->
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <!-- END JANGAN DIHAPUS -->
                                                    </tr>
                                                    <tr>
                                                        <td colspan="18" style="background-color: #D9D9D9; text-align: center; vertical-align: middle;">
                                                            Occurrence Cause
                                                        </td>
                                                        <td colspan="20" style="background-color: #D9D9D9; text-align: center; vertical-align: middle;">
                                                            Occurrence Prevention
                                                        </td>
                                                        <td colspan="4" style="background-color: #D9D9D9; text-align: center; vertical-align: middle;">
                                                            Date
                                                        </td>
                                                        <td colspan="9" style="background-color: #D9D9D9;">
                                                            ＜ Cross check to internal section / YOKOTENKAI ＞
                                                        </td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="3">
                                                            NEED YOKOTENKAI ?
                                                        </td>
                                                        <td colspan="6">
                                                            <div class="form-check-inline">
                                                                <input type="checkbox" name="Y" class="form-check-input mr-3" id="Y">
                                                                <label for="Y" class="form-check-label">
                                                                    YES
                                                                </label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input type="checkbox" name="N" class="form-check-input mr-3" id="N">
                                                                <label for="N" class="form-check-label">
                                                                    NO
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="3" rowspan="5"></td>
                                                        <td colspan="3" style="background-color: #D9D9D9;">Manager QC</td>
                                                        <td colspan="3" style="background-color: #D9D9D9;">Manager</td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="3" rowspan="4"> - </td>
                                                        <td colspan="3" rowspan="4"> - </td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="9" style="background-color: #D9D9D9;">
                                                            ＜ Cross check to internal section / YOKOTENKAI ＞
                                                        </td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="3">
                                                            NEED YOKOTENKAI ?
                                                        </td>
                                                        <td colspan="6">
                                                            <div class="form-check-inline">
                                                                <input type="checkbox" name="Y" class="form-check-input mr-3" id="Y">
                                                                <label for="Y" class="form-check-label">
                                                                    YES
                                                                </label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                                <input type="checkbox" name="N" class="form-check-input mr-3" id="N">
                                                                <label for="N" class="form-check-label">
                                                                    NO
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="3" rowspan="5"></td>
                                                        <td colspan="3" style="background-color: #D9D9D9;">General <br> MGR QC</td>
                                                        <td colspan="3" style="background-color: #D9D9D9; width:100px;">General <br> MGR</td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="3" rowspan="4"> - </td>
                                                        <td colspan="3" rowspan="4"> - </td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="18" style="background-color: #D9D9D9; text-align: center; vertical-align: middle;">
                                                            Outflow Cause
                                                        </td>
                                                        <td colspan="20" style="background-color: #D9D9D9; text-align: center; vertical-align: middle;">
                                                            Outflow Prevention
                                                        </td>
                                                        <td colspan="4" style="background-color: #D9D9D9; text-align: center; vertical-align: middle;">
                                                            Date
                                                        </td>
                                                        <td colspan="9" style="background-color: #D9D9D9;">
                                                            ＜ Check Actual condition to: ＞
                                                        </td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="5" style="background-color: #D9D9D9; text-align: center; vertical-align: middle;">Process Side</td>
                                                        <td colspan="2" style="background-color: #D9D9D9;">Necessary <br> Item</td>
                                                        <td colspan="2" style="background-color: #D9D9D9;">Judgement <br>（OK/NG）</td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="5" style="text-align: left; vertical-align: middle;">1. Pokayoke</td>
                                                        <td colspan="2"></td>
                                                        <td colspan="2"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="5" style="text-align: left; vertical-align: middle;">2. Machine, Jig, Checker, Kaizen</td>
                                                        <td colspan="2"></td>
                                                        <td colspan="2"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="5" style="text-align: left; vertical-align: middle;">3. Others <br> :</td>
                                                        <td colspan="2"></td>
                                                        <td colspan="2"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="9" style="background-color: #D9D9D9; text-align: center; vertical-align: middle;">
                                                            Related Document
                                                        </td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="5" style="text-align: left; vertical-align: middle;">1. Work Instruction</td>
                                                        <td colspan="2"></td>
                                                        <td colspan="2"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="5" style="text-align: left; vertical-align: middle;">2. Control Plan / PCDT / PFMEA</td>
                                                        <td colspan="2"></td>
                                                        <td colspan="2"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="5" style="text-align: left; vertical-align: middle;">3. Standard Documents <br> :</td>
                                                        <td colspan="2"></td>
                                                        <td colspan="2"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="5" style="text-align: left; vertical-align: middle;">4. Drawing</td>
                                                        <td colspan="2"></td>
                                                        <td colspan="2"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="5" style="text-align: left; vertical-align: middle;">5. Another Document <br> :</td>
                                                        <td colspan="2"></td>
                                                        <td colspan="2"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="5" style="text-align: left; vertical-align: middle;">6. Others <br> :</td>
                                                        <td colspan="2"></td>
                                                        <td colspan="2"></td>
                                                    </tr>

                                                    <!-- <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="9"></td>
                                                    </tr> -->

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="6" style="text-align: left;">
                                                            Checked by :
                                                        </td>
                                                        <td colspan="4" style="text-align: center; vertical-align:middle; background-color:#D9D9D9;">Manager</td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="2" rowspan="2" style="vertical-align: bottom;">___</td>
                                                        <td colspan="2" rowspan="2" style="vertical-align: bottom;">___</td>
                                                        <td colspan="2" rowspan="2" style="vertical-align: bottom;">___</td>
                                                        <td colspan="3" rowspan="3"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                    </tr>

                                                    <tr style="height: 50px;">
                                                        <td colspan="18"></td>
                                                        <td colspan="20"></td>
                                                        <td colspan="4"></td>
                                                        <td colspan="6">If the result NG, <br> asked related section to review</td>
                                                    </tr>

                                                </tbody>

                                                <tbody>
                                                    <tr>
                                                        <td colspan="56"></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="25" style="background-color: #D9D9D9; text-align: left;">Monitoring the counter measure's effectiveness for 6 months</td>
                                                        <td colspan="13" style="text-align: left;">＜Handling and lead time＞…fill by Quality</td>
                                                        <td colspan="1">Actual</td>
                                                        <td colspan="9" style="background-color: #D9D9D9;">
                                                            < Responsible Section>
                                                        </td>
                                                        <td colspan="4" style="background-color: #D9D9D9;">
                                                            < Issued Section>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="3" rowspan="4" style="vertical-align: middle;">
                                                            Quality Assist Manager
                                                        </td>
                                                        <td colspan="3" rowspan="4" style="vertical-align: top; text-align: left; font-size:10px">
                                                            1st
                                                        </td>
                                                        <td colspan="3" rowspan="4" style="vertical-align: top; text-align: left; font-size:10px">
                                                            2nd
                                                        </td>
                                                        <td colspan="3" rowspan="4" style="vertical-align: top; text-align: left; font-size:10px">
                                                            3th
                                                        </td>
                                                        <td colspan="3" rowspan="4" style="vertical-align: top; text-align: left; font-size:10px">
                                                            4th
                                                        </td>
                                                        <td colspan="3" rowspan="4" style="vertical-align: top; text-align: left; font-size:10px">
                                                            5th
                                                        </td>
                                                        <td colspan="3" rowspan="4" style="vertical-align: top; text-align: left; font-size:10px">
                                                            6th
                                                        </td>
                                                        <td colspan="4" rowspan="4" style="vertical-align: bottom;">

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="7" rowspan="">
                                                            Received NG Information
                                                        </td>
                                                        <td colspan="6" rowspan="">
                                                            ---------------
                                                        </td>
                                                        <td colspan="1" rowspan="">

                                                        </td>
                                                        <td colspan="5" rowspan="">
                                                            Blower
                                                        </td>
                                                        <td colspan="4" rowspan="">
                                                            Dept.
                                                        </td>
                                                        <td colspan="2" rowspan="">
                                                            Quality
                                                        </td>
                                                        <td colspan="2" rowspan="">
                                                            Dept.
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="7" rowspan="">
                                                            Decision to internal, customer stock
                                                        </td>
                                                        <td colspan="6" rowspan="">
                                                            Screening check all stock
                                                        </td>
                                                        <td colspan="1" rowspan="">

                                                        </td>
                                                        <td colspan="5" rowspan="">

                                                        </td>
                                                        <td colspan="4" rowspan="">
                                                            Section
                                                        </td>
                                                        <td colspan="2" rowspan="">

                                                        </td>
                                                        <td colspan="2" rowspan="">
                                                            Section
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="7" rowspan="">
                                                            Problem Analysis
                                                        </td>
                                                        <td colspan="6" rowspan="">
                                                            As soon as possible
                                                        </td>
                                                        <td colspan="1" rowspan="">

                                                        </td>
                                                        <td colspan="3" rowspan="">
                                                            Approved
                                                        </td>
                                                        <td colspan="3" rowspan="">
                                                            Checked
                                                        </td>
                                                        <td colspan="3" rowspan="">
                                                            Prepared
                                                        </td>
                                                        <td colspan="2" rowspan="">
                                                            Approved
                                                        </td>
                                                        <td colspan="2" rowspan="">
                                                            Prepared
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="3" rowspan="4" style="vertical-align: middle;">
                                                            Quality Spv./Staff
                                                        </td>
                                                        <td colspan="3" rowspan="4" style="vertical-align: top; text-align: left; font-size:10px">
                                                            1st
                                                        </td>
                                                        <td colspan="3" rowspan="4" style="vertical-align: top; text-align: left; font-size:10px">
                                                            2nd
                                                        </td>
                                                        <td colspan="3" rowspan="4" style="vertical-align: top; text-align: left; font-size:10px">
                                                            3th
                                                        </td>
                                                        <td colspan="3" rowspan="4" style="vertical-align: top; text-align: left; font-size:10px">
                                                            4th
                                                        </td>
                                                        <td colspan="3" rowspan="4" style="vertical-align: top; text-align: left; font-size:10px">
                                                            5th
                                                        </td>
                                                        <td colspan="3" rowspan="4" style="vertical-align: top; text-align: left; font-size:10px">
                                                            6th
                                                        </td>
                                                        <td colspan="4" rowspan="4" style="vertical-align: top;">
                                                            Completed <br>
                                                            Manager
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="7" rowspan="">
                                                            Problem seriousness decision
                                                        </td>
                                                        <td colspan="6" rowspan="">

                                                        </td>
                                                        <td colspan="1" rowspan="">

                                                        </td>
                                                        <td colspan="3" rowspan="3">
                                                            -
                                                        </td>
                                                        <td colspan="3" rowspan="3">
                                                            -
                                                        </td>
                                                        <td colspan="3" rowspan="3">
                                                            -
                                                        </td>
                                                        <td colspan="2" rowspan="3">
                                                            -
                                                        </td>
                                                        <td colspan="2" rowspan="3">
                                                            -
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="7" rowspan="">
                                                            Completed the internal action
                                                        </td>
                                                        <td colspan="6" rowspan="">
                                                            Serious : ５days <br> Others：10days
                                                        </td>
                                                        <td colspan="1" rowspan="">

                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="7" rowspan="">
                                                            Submit the report to customer
                                                        </td>
                                                        <td colspan="6" rowspan="">
                                                            Serious : 7days <br> Others : 2 weeks
                                                        </td>
                                                        <td colspan="1" rowspan="">

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
            </small>
        </section>
    </div>

    <!-- SCRIPT PRINT -->
    <script>
        function printDiv(printdiv) {
            var printContents = document.getElementById(printdiv).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>

</body>

</html>