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
    <!-- <link rel="stylesheet" href="<php echo base_url() ?>assets/dist/css/table-quick.css" type="text/css" media="print"> -->
    <!-- CSS PRINT QUICK INFORMATION -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/table-quick.css" type="text/css">



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
                                            <table id="ecrtabel" class="table table-bordered table-hover" style="text-align: center;">
                                                <tbody>

                                                    <!-- TITLE -->
                                                    <tr style="height:5px">
                                                        <th> <img src="<?php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png" alt="AdminLTE Logo" style="opacity: .8"> <br> Doc. </th>
                                                        <th colspan="10">
                                                            <h2><u>QUICK INFORMATION FORM</u></h2>
                                                        </th>
                                                    </tr>
                                                </tbody>

                                                <tbody>
                                                    <tr>
                                                        <td rowspan="20">
                                                            <h3 class="vertical-text">
                                                                <span>Found Problem (Step 1)</span>
                                                            </h3>
                                                        </td>
                                                    </tr>

                                                    <tr style="height: 5px;">
                                                        <td colspan="4">
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="PF" class="form-check-input mr-3" id="PF">
                                                                <label for="PF" class="form-check-label">
                                                                    <strong>PROBLEM FOUND</strong>
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="INF" class="form-check-input mr-3" id="INF">
                                                                <label for="INF" class="form-check-label">
                                                                    <strong>INFORMATION FROM CUSTOMER</strong>
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td>Report By : <br><br> </td>
                                                        <td>Report To : <br><br> </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">
                                                            Report No.
                                                        </td>
                                                        <td colspan="2">
                                                            <p class="text-right"><?= $tb_input_problem->hdrid; ?></p>
                                                        </td>
                                                        <td rowspan="4">
                                                            <p class="text-center">RANK : S / A / B / C </p>
                                                            <p>Rank Problem</p>
                                                        </td>
                                                        <td rowspan="4">
                                                            <p class="text-left">Section </p>
                                                            <p class="text-center"> <br><br></p>
                                                        </td>
                                                        <td rowspan="4">
                                                            <p class="text-left">Section </p>
                                                            <p class="text-center"><br><br><?= $tb_input_problem->responsible_section; ?> </p>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">Issue Date</td>
                                                        <td colspan="2"><strong><?= $tb_input_problem->report_date; ?></strong></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">Part Name</td>
                                                        <td colspan="2"><strong><?= $tb_input_problem->product_name; ?></strong></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">Part Number</td>
                                                        <td colspan="2"><strong><?= $tb_input_problem->part_number; ?></strong></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">Problem</td>
                                                        <td colspan="3" style="text-align: center; vertical-align: middle;">
                                                            <strong>
                                                                <?= $tb_input_problem->detail_problem; ?>
                                                            </strong>
                                                        </td>
                                                        <td style="background-color: #D9D9D9; text-align:center; vertical-align: middle;">Delivery Status</td>
                                                        <td>
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="urgent" class="form-check-input mr-3" id="urgent">
                                                                <label for="urgent" class="form-check-label">
                                                                    Urgent
                                                                </label>
                                                            </div>
                                                            <div class="form-group text-left form-check">
                                                                <input type="checkbox" name="normal" class="form-check-input mr-3" id="normal">
                                                                <label for="normal" class="form-check-label">
                                                                    Normal
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td rowspan="6" class="bg-cm" style="vertical-align: middle;">Problem Pre-Information Detail</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-d9">WHEN(date)</td>
                                                        <td class="bg-d9">SHIFT</td>
                                                        <td class="bg-d9">TIME</td>
                                                        <td class="bg-d9">WHO(found by)</td>
                                                        <td class="bg-d9">LOT NUMBER</td>
                                                    </tr>

                                                    <tr>
                                                        <td><strong><?= $tb_input_problem->report_date; ?></strong></td>
                                                        <td><strong></strong></td>
                                                        <td><strong></strong></td>
                                                        <td><strong><?= $tb_input_problem->name; ?></strong></td>
                                                        <td rowspan="3" style="text-align: center; vertical-align: middle;"><strong><?= $tb_input_problem->lot_number_product; ?></strong></td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2" class="bg-d9">WHERE(location)</td>
                                                        <td class="bg-d9">QTY Defect</td>
                                                        <td class="bg-d9">QTY LOT Prd.</td>
                                                    </tr>

                                                    <tr>
                                                        <td colspan="2"><strong></strong></td>
                                                        <td><strong><?= $tb_input_problem->qty; ?></strong></td>
                                                        <td><strong>-</strong></td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-d9">HOW THE PROBLEM FOUND</td>
                                                        <td colspan="4"><strong></strong></td>
                                                    </tr>

                                                    <tr style="height: 200px;">
                                                        <td class="bg-cm" style="vertical-align: middle;">WHAT (picture or illustration, sketch of problem)</td>
                                                        <td colspan="5">PICTURE & etc</td>
                                                    </tr>

                                                    <tr>
                                                        <td rowspan="6" class="bg-cm" style="vertical-align: middle;">Temporary Action</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="HP" class="form-check-input mr-3" id="HP">
                                                                <label for="HP" class="form-check-label">
                                                                    Hold Product
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td colspan="4" rowspan="5">ETC</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="LS" class="form-check-input mr-3" id="LS">
                                                                <label for="LS" class="form-check-label">
                                                                    Line Stop
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="CL" class="form-check-input mr-3" id="CL">
                                                                <label for="CL" class="form-check-label">
                                                                    Change Lot
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="REPAIR" class="form-check-input mr-3" id="REPAIR">
                                                                <label for="REPAIR" class="form-check-label">
                                                                    Repair equip / tools / machine
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="OTHER" class="form-check-input mr-3" id="OTHER">
                                                                <label for="OTHER" class="form-check-label">
                                                                    Other
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>


                                                <tbody>
                                                    <tr>
                                                        <td rowspan="13">
                                                            <h5>
                                                                <span class="vertical-text">Mgnt Decision & Corrective Action (Step 2)</span>
                                                            </h5>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="bg-cm" style="vertical-align: middle;">
                                                            <strong>For Costumer Claim</strong>
                                                        </td>
                                                        <td colspan="4" class="bg-cm" style="vertical-align: middle;">
                                                            <strong>For Internal Problem</strong>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td rowspan="3" class="bg-cm" style="vertical-align: middle;">
                                                            Need Inform To Other Customer
                                                        </td>
                                                        <td rowspan="2" style="text-align: center; vertical-align: middle;">
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="Y" class="form-check-input mr-3" id="Y">
                                                                <label for="Y" class="form-check-label">
                                                                    YES
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="N" class="form-check-input mr-3" id="N">
                                                                <label for="N" class="form-check-label">
                                                                    NO
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td rowspan="3" class="bg-cm" style="vertical-align: middle;">
                                                            Need Inform To Customer
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2">
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="Y" class="form-check-input mr-3" id="Y">
                                                                <label for="Y" class="form-check-label">
                                                                    YES
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check-inline">
                                                                <input type="checkbox" name="N" class="form-check-input mr-3" id="N">
                                                                <label for="N" class="form-check-label">
                                                                    NO
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td class="bg-cm" style="vertical-align: middle;">Approval By DH / Director</td>
                                                    </tr>
                                                    <tr style="height: 80px;">
                                                        <td> - </td>
                                                        <td colspan="2"> - </td>
                                                        <td> - </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">
                                                            DMSIA RESPONSIBLE
                                                        </td>
                                                        <td style="text-align: left; vertical-align: middle;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Y" class="form-check-input mr-3" id="Y">
                                                                <label for="Y" class="form-check-label">
                                                                    YES
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="N" class="form-check-input mr-3" id="N">
                                                                <label for="N" class="form-check-label">
                                                                    NO
                                                                </label>
                                                            </div>
                                                        </td>
                                                        <td rowspan="3" class="bg-cm" style="vertical-align: middle;">ROOT CAUSE PROBLEM</td>
                                                        <td colspan="3" rowspan="3"> - </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">RESPONSIBLE SELECTION</td>
                                                        <td> - </td>
                                                    </tr>

                                                    <tr>
                                                        <td rowspan="3" class="bg-cm" style="vertical-align: middle;">REMARK</td>
                                                        <td rowspan="3"> - </td>
                                                    </tr>

                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">Corrective Action</td>
                                                        <td colspan="2" class="bg-cm" style="vertical-align: middle;">Detail Improvement Action</td>
                                                        <td class="bg-cm" style="vertical-align: middle;">Approval by Manager</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Content</td>
                                                        <td colspan="2" rowspan="4" style="text-align: left;"><strong>PERBAIKAN :</strong></td>
                                                        <td rowspan="2"> - </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-cm" style="vertical-align: middle;">Investigation Refer To CAR No</td>
                                                        <td> - </td>
                                                        <td rowspan="3" style="text-align: left; vertical-align: top;">
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Machine" class="form-check-input mr-3" id="Machine">
                                                                <label for="Machine" class="form-check-label">
                                                                    Machine
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Tool" class="form-check-input mr-3" id="Tool">
                                                                <label for="Tool" class="form-check-label">
                                                                    Tool
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Method" class="form-check-input mr-3" id="Method">
                                                                <label for="Method" class="form-check-label">
                                                                    Method
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Material" class="form-check-input mr-3" id="Material">
                                                                <label for="Material" class="form-check-label">
                                                                    Material
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Man" class="form-check-input mr-3" id="Man">
                                                                <label for="Man" class="form-check-label">
                                                                    Man
                                                                </label>
                                                            </div>
                                                            <div class="form-group form-check">
                                                                <input type="checkbox" name="Other" class="form-check-input mr-3" id="Other">
                                                                <label for="Other" class="form-check-label">
                                                                    Other
                                                                </label>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr style="height: 100px;">
                                                        <td rowspan="2" class="bg-cm" style="vertical-align: middle;">
                                                            Approval by Manager
                                                        </td>
                                                        <td rowspan="2"> - </td>
                                                        <td class="bg-cm" style="vertical-align: middle;">
                                                            Detail Report & Evidence
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

    <script>
        function printDiv(printdiv) {
            var printContents = document.getElementById(printdiv).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
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