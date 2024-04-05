<!DOCTYPE html>
                                <html>

                                <head>
                                    <meta charset="utf-8">
                                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                    <title>E-WIRE SETTLEMENT</title>

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

                                                                    <?php if ($list_approver->name=='not found') {
                                                                            echo "Progress = Close";
                                                                        } else {
                                                                            echo 'Progress ='.$list_approver->nik.'-'.$list_approver->name. '(' . $list_approver->position_name  .')'. '(' . $list_approver->position_code . ' of '. $usera .')';
                                                                            // var_dump($user);
                                                                        }?> 

                                                                        <?php if ($this->session->userdata('user_name') == '' ) 
                                                                            echo "<button class='btn btn-success float-right' data-toggle='modal' data-target='#modal-confirm-login'> Login </button>";
                                                                        ?>

                                                                        <?php if ($this->session->userdata('user_name') == $list_approver->nik ) 
                                                                            {
                                                                                // redirect('Auth');
                                                                                echo "<button class='btn btn-success float-right' data-toggle='modal' data-target='#modal-confirm-approve' > Approved </button>";
                                                                                echo "<button class='btn btn-warning float-right' data-toggle='modal' data-target='#modal-reject' >Reject</button>";
                                                                            }
                                                                            else{
                                                                                // redirect('Auth');
                                                                                echo "<button class='btn btn-success float-right' data-toggle='modal' data-target='#modal-confirm-approve' hidden > Approved</button>";
                                                                                echo "<button class='btn btn-warning float-right' data-toggle='modal' data-target='#modal-reject'hidden >Reject</button>";
                                                                            }
                                                                        ?>

                                                                        <button class="btn btn-primary float-right" onclick="printDiv('printdiv')"><i class="fa fa-print"></i></button>
                                                                        <button class="btn btn-danger float-right" onclick="formclose()"><i class="fa fa-times-circle"></i></button>

                                                                    </div>

                                                                    <!-- ECR -->
                                                                    <input id="text" type="text" hidden value="<?php $current = current_url() . '?var1=' . $tb_add_advance3->hdrid;
                                                                                                                    print_r($current); ?>" />
                                                                        <!-- <center>
                                                                            <table id="ecrtabel" class="table table-bordered table-hover" style="text-align: center;">
                                                                                <tbody>

                                                                                <tr style="height:3px " >
                                                                                        <th width="30%"> <img src="<php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png" alt="AdminLTE Logo" style="opacity: .8">
                                                                                            <br>PT DENSO MANUFACTURING INDONESIA
                                                                                        <br> Doc. 
                                                                                        <center>
                                                                                                <div style=" padding-top: 15px">
                                                                                                <p id="qrcode"></p>
                                                                                            </div>
                                                                                        </th>
                                                                                            
                                                                                        </th>
                                                                                        <th colspan="9" style="vertical-align: middle;">
                                                                                            <h1><u>E-WIRE</u></h1>
                                                                                    </th>
                                                                                    </tr>
                                                                                </tbody> -->
                                                                                <!--
                                                                                <tr>
                                                                                    <td rowspan="21">
                                                                                        <h3 >
                                                                                            <span class="vertical-text">Found Problem (Step 1)</span>
                                                                                        </h3>
                                                                                    </td>
                                                                                </tr>
                                                                            -->
                                                                            
                                                                        <div class="row">
                                                                        <div class="col">
                                                                        <p id="qrcode"></p>
                                                                        </div>
                                                                        <div class="col">
                                                                        <h4><strong>E-WIRE SETTLEMENT</strong></h4>
                                                                        </div>
                                                                        </div>
                                                                        <hr style="border:1px solid black;">

                                                                    <!-- HEADER START -->
                                                                    <div class="container-fluid">
                                                                    <div class="row">
                                                                    <div class="col">
                                                                    <h6><p>DATE</p></h6>
                                                                    <h6><p>ID ADVANCE</p></h6>
                                                                    <h6><p>ID SETTLEMENT</p></h6>
                                                                    </div>

                                                                    <div class="col">
                                                                    <p>: <?php echo $tb_add_advance3->date; ?> </p>	
                                                                    <p>: <?php echo $tb_add_advance3->hdrid; ?> </p>	
                                                                    <p>: <?php echo $tb_add_advance3->hdrid_pc; ?> </p>	
                                                                    </div>	

                                                                    <div class="col">
                                                                    <h6 hidden><p></p></h6>
                                                                    <h6 hidden><p></p></h6>
                                                                    <h6 hidden><p></p></h6>
                                                                    </div>

                                                                    <div class="col">
                                                                    <p hidden> </p>	
                                                                    <p hidden> </p>	
                                                                    <p hidden> </p>
                                                                    </div>
                                                                    </div>
                                                                    </div>

                                                                    <!-- HEADER END -->

                                                                            <!-- REQUEST BY START -->
                                                                            <h5><label>REQUEST BY</label></h5>

                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col">
                                                                            <h6><p>NIK</p></h6>
                                                                            <h6><p>NAME</p></h6>
                                                                            <h6><p>KODE SECTION</p></h6>
                                                                            <h6><p>SECTION</p></h6>
                                                                            <h6><p>DETAIL REQUEST</p></h6>
                                                                            <h6><p>BUDGET</p></h6>
                                                                            </div>

                                                                            <div class="col">
                                                                            <p>: <?php echo $tb_add_advance3->nik; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->name; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->kode_section; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->section; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->detail_request; ?> </p>
                                                                            <p>: <?php echo $tb_add_advance3->budgets; ?> </p>
                                                                            </div>	

                                                                            <div class="col">
                                                                            <h6><p>NON BUDGET REMARK</p></h6>
                                                                            <h6><p>USING BUDGET</p></h6>
                                                                            <h6><p>SECTION</p></h6>
                                                                            <h6><p>ADDITIONAL SECTION</p></h6>
                                                                            <h6><p>ACCOUNT ADVANCE</p></h6>
                                                                            <!-- <h6><p>ACCOUNT ADVANCE</p></h6> -->
                                                                            </div>

                                                                            <div class="col">
                                                                            <p>: <?php echo $tb_add_advance3->non_budget_remark; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->using_budget; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->kode_section_budget; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->additional_section; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->account_adv; ?> </p>
                                                                            <!-- <p>: <php echo $tb_add_advance3->account_adv; ?> </p> -->
                                                                            </div>
                                                                            </div>
                                                                            </div>

                                                                            <!-- REQUEST BY END -->

                                                                            <!-- AMOUNT REQUEST --ACTUAL EXPENSE START -->
                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col">
                                                                            <h5><label>AMOUNT REQUEST</label></h5>
                                                                            </div><div class="col">
                                                                            <h5><label>ACTUAL EXPENSE</label></h5>
                                                                            </div>
                                                                            </div>
                                                                            </div>

                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col">
                                                                            <h6><p>CURRENCY</p></h6>
                                                                            <h6><p>NOMINAL</p></h6>
                                                                            <h6><p> </p></h6>
                                                                            </div>

                                                                            <div class="col">
                                                                            <p>: <?php echo $tb_add_advance3->currency; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->nominal; ?> </p>	
                                                                            <p> </p>	
                                                                            </div>	

                                                                            <div class="col">
                                                                            <h6 ><p>CURRENCY</p></h6>
                                                                            <h6 ><p>NOMINAL</p></h6>
                                                                            <h6 ><p>ACCOUNT BUDGET</p></h6>
                                                                            </div>

                                                                            <div class="col">
                                                                            <p >: <?php echo $tb_add_advance3->currency_ae; ?> </p>	
                                                                            <p >: <?php echo $tb_add_advance3->nominal_ae; ?> </p>	
                                                                            <p >: <?php echo $tb_add_advance3->account_budget_ae; ?> </p>
                                                                            </div>
                                                                            </div>
                                                                            </div>

                                                                            <!-- AMOUNT REQUEST --ACTUAL EXPENSE END -->

                                                                            <!-- BALANCE AMOUNT -- SUUPPORT DOCUMENT START -->
                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col">
                                                                            <h5><label>BALANCE AMOUNT</label></h5>
                                                                            </div><div class="col">
                                                                            <!-- <h5><label>SUPPORT DOCUMENT ADVANCE</label></h5> -->
                                                                            </div>
                                                                            </div>
                                                                            </div>


                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col">
                                                                            <h6><p>CURRENCY</p></h6>
                                                                            <h6><p>NOMINAL</p></h6>
                                                                            <h6><p>TRANSFER NAME</p></h6>
                                                                            <h6><p>BANK</p></h6>
                                                                            <h6><p>ACCOUNT NUMBER</p></h6>
                                                                            </div>

                                                                            <div class="col">
                                                                            <p>: <?php echo $tb_add_advance3->currency_ba; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->nominal_ba; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->transfer_name_ba; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->bank_ba; ?> </p>
                                                                            <p>: <?php echo $tb_add_advance3->account_number_ba; ?> </p>
                                                                            </div>	

                                                                            <div class="col">
                                                                            <h6 hidden><p></p></h6>
                                                                            <h6 hidden><p></p></h6>
                                                                            <h6 hidden><p></p></h6>
                                                                            <h6 hidden><p></p></h6>
                                                                            <h6 hidden><p></p></h6>
                                                                            </div>

                                                                            <div class="col">
                                                                            <p hidden></p>	
                                                                            <p hidden></p>	
                                                                            <p hidden></p>	
                                                                            <p hidden></p>	
                                                                            <p hidden> </p>	
                                                                            
                                                                            </div>
                                                                            </div>
                                                                            </div>

                                                                            <!-- BALANCE AMOUNT -- SUUPPORT DOCUMENT END -->

                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col">
                                                                            <h5><label>SUPPORT DOCUMENT ADVANCE</label></h5>
                                                                            </div><div class="col">
                                                                            <h5><label>SUPPORT DOCUMENT SETTLEMENT</label></h5>
                                                                            </div>
                                                                            </div>
                                                                            </div>


                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col">
                                                                            <h6 ><p>INVOICE NO</p></h6>
                                                                            <h6 ><p>FAKTUR PAJAK NO</p></h6>
                                                                            <h6 ><p>PO NUMBER / AGREEMENT</p></h6>
                                                                            <h6 ><p>OTHER FILE</p></h6>
                                                                            <h6 hidden><p></p></h6>
                                                                            </div>
                                                                            <div class="col">
                                                                            <p >: <?php echo $tb_add_advance3->invoice_no; ?> </p>	
                                                                            <p >: <?php echo $tb_add_advance3->faktur_pajak;?> </p>	
                                                                            <p >: <?php echo $tb_add_advance3->po_number;?> </p>	
                                                                            <p >: <?php echo $tb_add_advance3->other_file;?> </p>	
                                                                            <p hidden> </p>	
                                                                            </div>	

                                                                            <div class="col">
                                                                            <p ><?php if(!$tb_add_advance3->attach_invoice==''){                                                         
                                                                            echo "<a href=". base_url('assets/upload/advance/') . $tb_add_advance3->attach_invoice ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>Invoice No " ;}; ?> </p>	
                                                                            <p > <?php if(!$tb_add_advance3->attach_faktur==''){                                                         
                                                                            echo "<a href=". base_url('assets/upload/advance/') . $tb_add_advance3->attach_faktur ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>Faktur Pajak " ;}; ?> </p>	
                                                                            <p > <?php if(!$tb_add_advance3->attach_po_number==''){                                                         
                                                                            echo "<a href=". base_url('assets/upload/advance/') . $tb_add_advance3->attach_po_number ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>PO Number " ;}; ?> </p>	
                                                                            <p > <?php if(!$tb_add_advance3->attach_other_file==''){                                                         
                                                                            echo "<a href=". base_url('assets/upload/advance/') . $tb_add_advance3->attach_other_file ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a>Other File " ;}; ?> </p>	
                                                                            <p hidden> </p>	
                                                                            </div>

                                                                            <div class="col">
                                                                            <h6 ><p>INVOICE NO</p></h6>
                                                                            <h6 ><p>FAKTUR PAJAK NO</p></h6>
                                                                            <h6 ><p>PO NUMBER / AGREEMENT</p></h6>
                                                                            <h6 ><p>OTHER FILE</p></h6>
                                                                            <h6 hidden><p></p></h6>
                                                                            </div>
                                                                            <div class="col">
                                                                            <p >: <?php echo  $tb_add_advance3->invoice_no_set; ?> </p>	
                                                                            <p >: <?php echo $tb_add_advance3->faktur_pajak_set; ?> </p>	
                                                                            <p >: <?php echo $tb_add_advance3->po_number_set; ?> </p>	
                                                                            <p >: <?php echo $tb_add_advance3->other_file_set; ?> </p>	
                                                                            <p hidden> </p>	
                                                                            </div>

                                                                            <div class="col">
                                                                            <p > <?php if(!$tb_add_advance3->attach_invoice_set==''){                                                      
                                                                            echo "<a href=". base_url('assets/upload/settlement/') . $tb_add_advance3->attach_invoice_set ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i></a> Invoice No" ;}; ?> </p>	
                                                                            <p > <?php if(!$tb_add_advance3->attach_pajak_set==''){                                                         
                                                                            echo "<a href=". base_url('assets/upload/settlement/') . $tb_add_advance3->attach_pajak_set ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a> Faktur Pajak" ;}; ?> </p>	
                                                                            <p > <?php if(!$tb_add_advance3->attach_po_number_set==''){                                                         
                                                                            echo "<a href=". base_url('assets/upload/settlement/') . $tb_add_advance3->attach_po_number_set ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a> PO Number" ;}; ?> </p>	
                                                                            <p > <?php if(!$tb_add_advance3->attach_other_file_set==''){                                                         
                                                                            echo "<a href=". base_url('assets/upload/settlement/') . $tb_add_advance3->attach_other_file_set ." class='btn btn-success' id='atachment_view' target='_blank'> <i class='fa fa-paperclip'></i> </a> Other File" ;}; ?> </p>	
                                                                            <p hidden> </p>	
                                                                            
                                                                            </div>

                                                                            </div>
                                                                            </div>

                                                                            


                                                                            <!-- TAX INFO START-->
                                                                            <h5><label>TAX INFO</label></h5>

                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col">
                                                                            <h6><p>(a)DPP VAT</p></h6>
                                                                            </div>
                                                                            <div class="col">
                                                                            <p>: <?php echo $tb_add_advance3->dpp; ?> </p>					
                                                                            </div>
                                                                            
                                                                            <div class="col">
                                                                            <h6><p>(f)WHT PERSEN</p></h6>
                                                                            </div>
                                                                            <div class="col">
                                                                            <p>: <?php echo $tb_add_advance3->wht_persen; ?> </p>					
                                                                            </div>	
                                                                            </div>				
                                                                            </div>

                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col">
                                                                            <h6><p>(b)VAT</p></h6>
                                                                            </div>
                                                                            <div class="col">
                                                                            <p>: <?php echo $tb_add_advance3->vat; ?> </p>					
                                                                            </div>
                                                                            
                                                                            <div class="col">
                                                                            <h6><p>(g)WHT AMOUNT(d*f)</p></h6>
                                                                            </div>
                                                                            <div class="col">
                                                                            <p>: <?php echo $tb_add_advance3->wht_amount; ?> </p>					
                                                                            </div>	
                                                                            </div>				
                                                                            </div>

                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col">
                                                                            <h6><p>(c)VAT AMOUNT (a*b)</p></h6>
                                                                            </div>
                                                                            <div class="col">
                                                                            <p>: <?php echo $tb_add_advance3->vat_amount; ?> </p>					
                                                                            </div>
                                                                            
                                                                            <div class="col">
                                                                            <h6><p>(h)TOTAL TAX(c-g)</p></h6>
                                                                            </div>
                                                                            <div class="col">
                                                                            <p>: <?php echo $tb_add_advance3->total_tax; ?> </p>					
                                                                            </div>	
                                                                            </div>				
                                                                            </div>

                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col">
                                                                            <h6><p>(d)DPP WHT</p></h6>
                                                                            </div>
                                                                            <div class="col">
                                                                            <p>: <?php echo $tb_add_advance3->dpp_wht; ?> </p>					
                                                                            </div>
                                                                            
                                                                            <div class="col">
                                                                            <h6><p>(i)TOTAL PAYMENT(a+h)</p></h6>
                                                                            </div>
                                                                            <div class="col">
                                                                            <p>: <?php echo $tb_add_advance3->total_payment; ?> </p>					
                                                                            </div>	
                                                                            </div>				
                                                                            </div>

                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col">
                                                                            <h6><p>(e)WHT</p></h6>
                                                                            </div>
                                                                            <div class="col-9">
                                                                            <p>: <?php echo $tb_add_advance3->wht; ?> </p>					
                                                                            </div>	
                                                                            </div>				
                                                                            </div>

                                                                            <!-- TAX INFO END-->
                                                                            <!-- BANK TRANSFER START -->
                                                                            <!-- <br><br><br><br><br> -->
                                                                            <!-- <div id="banktf"> -->
                                                                            <!-- <div class="container-fluid">
                                                                            <div class="row"> -->
                                                                            <!-- <div class="col"> -->
                                                                            <!-- <h5><label id="labelbank">BANK TRANSFER SETTLEMENT</label></h5>
                                                                            <h5><label id="labelrec">RECEIVED PAYMENT</label></h5> -->
                                                                            <!-- </div> -->
                                                                            <!-- <div class="col">
                                                                            <h5><label >BANK TRANSFER ADVANCE</label></h5>
                                                                            </div>
                                                                            </div> -->


                                                                            <div class="container-fluid">
                                                                            <div class="row">
                                                                            <div class="col" id="banktf">
                                                                            <h5><label id="labelbank">BANK TRANSFER SETTLEMENT</label></h5>
                                                                            <h6><p>BANK NAME</p></h6>
                                                                            <h6><p>TRANSFER DATE</p></h6>
                                                                            <h6><p>NOMINAL</p></h6>
                                                                            <h6><p>TYPE</p></h6>
                                                                            <h6><p>PAYEE CODE</p></h6>
                                                                            </div>

                                                                            <div class="col" id="isibank"><br>
                                                                            <p>-</p>
                                                                            <p>: <?php echo $tb_add_advance3->nama_bank_settlement; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->transfer_date_settlement; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->nominal_ba; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->tipe_transfer_settlement; ?> </p>
                                                                            <p>: <?php echo $tb_add_advance3->payee_code_settlement; ?> </p>
                                                                            </div>	

                                                                            <div class="col" id="daterec">
                                                                            <h5><label id="labelrec">RECEIVED PAYMENT</label></h5>
                                                                            <h6 ><p> DATE RECEIVED PAYMENT</p></h6>
                                                                            <h6 ><p>NOMINAL</p></h6>
                                                                            <h6 hidden><p></p></h6>
                                                                            <h6 hidden><p></p></h6>
                                                                            <h6 hidden><p></p></h6>
                                                                            </div>

                                                                            <div class="col" id="isidaterec"><br>
                                                                            <p> -</p>
                                                                            <p>: <?php echo $tb_add_advance3->received_payment; ?>  </p>	
                                                                            <p>: <?php echo $tb_add_advance3->nominal_ba; ?>  </p>	
                                                                            <p hidden> </p>	
                                                                            <p hidden> </p>	
                                                                            <p hidden> </p>	
                                                                            </div>

                                                                            <div class="col" >
                                                                            <h5><label >BANK TRANSFER ADVANCE</label></h5>
                                                                            <h6><p>BANK NAME</p></h6>
                                                                            <h6><p>TRANSFER DATE</p></h6>
                                                                            <h6><p>NOMINAL</p></h6>
                                                                            <h6><p>TYPE</p></h6>
                                                                            <h6><p>PAYEE CODE</p></h6>
                                                                            </div>

                                                                            <div class="col" id="isibank"><br>
                                                                            <p> -</p>
                                                                            <p>: <?php echo $tb_add_advance3->nama_bank; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->transfer_date; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->nominal; ?> </p>	
                                                                            <p>: <?php echo $tb_add_advance3->tipe_transfer; ?> </p>
                                                                            <p>: <?php echo $tb_add_advance3->payee_code; ?> </p>
                                                                            </div>

                                                                            </div>
                                                                            </div>

                                                                            <!-- </div> -->

                                                                            <!-- BANK TRANSFER END -->
                                                                            

                                                                            <!-- DATE APPROVE -->

                                                                            <table class="table table-hover">
                                                                            <thead>
                                                                                <tr>
                                                                                <th scope="col">No</th>
                                                                                <th scope="col">NIK</th>
                                                                                <th scope="col">Nama</th>
                                                                                <th scope="col">Level</th>
                                                                                <th scope="col">Date Approved</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>

                                                                                <!-- array_approval -->

                                                                                <?php foreach ($list_approval as $value) { ?>
                                                                                    <tr>
                                                                                        <td><?php echo $value->position_code; ?></td>
                                                                                        <td><?php echo $value->nik; ?></td>
                                                                                        <td><?php echo $value->name; ?></td>
                                                                                        <td><?php echo $value->position_code; ?></td>
                                                                                        <td><?php echo $value->date_approve; ?></td>
                                                                                        <!-- <td><php echo $value->nik; ?></td> -->
                                                                                    </tr>


                                                                                <?php } ?>



                                                                                
                                                                            </tbody>
                                                                            </table>






















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

                                // var nom=parseFloat(  '<php echo $tb_add_advance3->nominal ?>'.replace(/[,\s]/g, ''));
                                // var nom2=parseFloat( '<php echo $tb_add_advance3->nominal_ae  ?>'.replace(/[,\s]/g, ''));
                                var bankset=( '<?php echo $tb_add_advance3->nama_bank_settlement ?>');
                                var recset=( '<?php echo $tb_add_advance3->received_payment ?>');
                                // console.log(recset);
                                if (bankset=='' ) {
                                    document.getElementById("labelbank").style.display = "none";    // Visible data
                                    document.getElementById("banktf").style.display = "none";    // Visible data
                                    document.getElementById("isibank").style.display = "none";    // Visible data
                                }else{
                                    document.getElementById("labelbank").style.display = "";    // Visible data
                                    document.getElementById("banktf").style.display = "";    // Visible data
                                    document.getElementById("isibank").style.display = "";    // Visible data
                                }
                                if (recset =='1900-01-01') {
                                    document.getElementById("labelrec").style.display = "none";    // Visible data
                                    document.getElementById("daterec").style.display = "none";    // Visible data
                                    document.getElementById("isidaterec").style.display = "none";    // Visible data
                                }else{
                                    document.getElementById("labelrec").style.display = "";    // Visible data
                                    document.getElementById("daterec").style.display = "";    // Visible data
                                    document.getElementById("isidaterec").style.display = "";    // Visible data
                                }
                                
                                //tambah bank transfer advance //Kalau payment belum selesai bank transfer settlement hilangin

                                                                                

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

                                    
                                    <!-- <script type='text/javascript'>

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
                                            window.print();

                                            document.body.innerHTML = originalContents;
                                        }
                                    </script> -->

                                </body>

                                </html>

                                <script type="text/javascript"> 
                                // window.addEventListener("load", window.print());
                                </script>

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
                                    vurl = "<?php echo base_url('C_print/ajax_login') ?>";

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

                                // function Approve_data() {

                                // // alert(<php echo $hdrid ?>);

                                // // Form data
                                // var fdata = new FormData();
                                // // var fdata2 = new FormData();

                                // // Update by Hdrid
                                // fdata.append('hdrid',"<php echo $hdrid_pc ?>");
                                // fdata.append('nik', "<php echo $list_approver->nik; ?>");
                                // fdata.append('name', "<php echo $list_approver->name; ?>");
                                // fdata.append('position_code', "<php echo $list_approver->position_code; ?>");

                                // var fdata2 = new FormData();

                                // fdata2.append("hdrid","<php echo $hdrid_pc ?>");
                                // fdata2.append("detail_request","<php echo $tb_add_advance3->detail_request ?>"); 
                                // fdata2.append("budgets","<php echo $tb_add_advance3->budgets ?>"); 
                                // fdata2.append("currency","<php echo $tb_add_advance3->currency ?>"); 
                                // fdata2.append("nominal","<php echo $tb_add_advance3->nominal ?>"); 
                                // fdata2.append("transfer_name","<php echo $tb_add_advance3->transfer_name ?>"); 

                                // fdata2.append("body_content",""); 
                                // fdata2.append("comment",""); 
                                // fdata2.append("status_subject","<php echo $tb_add_advance3->status_transaction ?>");
                                // fdata2.append('position_code', "<php echo $list_approver->position_code; ?>");

                                // // Url Post Untuk Approve
                                // vurl = "<php echo base_url('C_add_settlement4/ajax_approve') ?>";

                                // // Post data
                                // $.ajax({
                                // url: vurl,
                                // method: "post",
                                // processData: false,
                                // contentType: false,
                                // data: fdata,
                                // success: function(data) {

                                //     //fdata2.append("body_content",data.status); 
                                // // Hide modal delete
                                //     berhasil("Approve success");  
                                //     fdata2.append("body_content",data.status); 

                                //     $('#modal-confirm-approve').modal('hide');
                                //     // $('#modal-default').modal('hide');
                                //     // berhasil(data.status);

                                //     var vurl2; 
                                //     vurl2 = "<php echo base_url('C_Email/ajax_send_mail_v2')?>";

                                //     $.ajax({
                                //         url: vurl2,
                                //         method: "post",
                                //         processData: false,
                                //         contentType: false,
                                //         data: fdata2,
                                //         success: function (data) {                 
                                //             // Pesan berhasil  

                                //         },
                                //         error: function (e) {
                                //             gagal(e);
                                //             //location.reload();
                                //             error
                                //         }
                                //     });


                                // },
                                // error: function(e) {
                                //     //Pesan Gagal
                                //     gagal(e);
                                // }
                                // });

                                // }
                                function Approve_data() {

                                // alert(<php echo $hdrid ?>);

                                // Form data
                                // var fdata = new FormData();
                                // // var fdata2 = new FormData();

                                // // Update by Hdrid
                                // fdata.append('hdrid',$('#hdrid_pc').val());
                                // fdata.append('nik', $('#iduserlogin').text());
                                // fdata.append('name', $('#name').val());// Ganti dengan nik val 
                                // fdata.append('position_code', $('#idposition_code').text());

                                var fdata2 = new FormData();

                                fdata2.append('hdrid',"<?php echo $hdrid_pc ?>");
                                fdata2.append('nik', "<?php echo $list_approver->nik; ?>");
                                fdata2.append('nikreq', "<?php echo $tb_add_advance3->nik; ?>");
                                fdata2.append('name', "<?php echo $list_approver->name; ?>"); // Ganti dengan nik val 
                                fdata2.append('position_code', "<?php echo $list_approver->position_code; ?>");

                                var vurl2; 
                                vurl2 = "<?php echo base_url('C_email_v2/ajax_update_approve')?>";

                                $.ajax({
                                    url: vurl2,
                                    method: "post",
                                    processData: false,
                                    contentType: false,
                                    data: fdata2,
                                    success: function (data) {                 
                                    // Pesan berhasil  
                                    $('#modal-confirm-approve').modal('hide');
                                    // $('#modal-default').modal('hide');
                                    berhasil('Berhasil');
                                    location.reload();
                                    },
                                    error: function (e) {
                                        // gagal(e);
                                        // error
                                        $('#modal-confirm-approve').modal('hide');
                                        // $('#modal-default').modal('hide');
                                        // berhasil(e);
                                        berhasil('Berhasil');
                                        location.reload();
                                    }
                                });

                                // tabel.draw();
                                // tabel2.draw();
                            }

                            function Reject_data() {

                            // Validasi reason harus diisi
                            if ($('#reason').val() == '') {
                            gagal('Reason wajib diisi');
                            return false;
                            }

                            var fdata2 = new FormData();

                            fdata2.append('hdrid',"<?php echo $hdrid_pc ?>");
                            fdata2.append('nik', "<?php echo $list_approver->nik; ?>");
                            fdata2.append('nikreq', "<?php echo $tb_add_advance3->nik; ?>");
                            fdata2.append('name', "<?php echo $list_approver->name; ?>");
                            fdata2.append('rejected_by', "<?php echo $list_approver->name; ?>");
                            fdata2.append('reason', $('#reason').val());
                            fdata2.append('position_code', "<?php echo $list_approver->position_code; ?>");

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
                                // $('#modal-default').modal('hide');
                                // tabel.draw();
                                berhasil('Berhasil Reject');
                                location.reload();

                            },
                            error: function(e) {
                                // Hide modal delete
                                $('#modal-reject').modal('hide');
                                // $('#modal-default').modal('hide');
                                // tabel.draw();
                                //Pesan Gagal
                                // gagal(e);
                                berhasil('Berhasil Reject');
                                location.reload();
                            }
                            });

                            }


                                // function Reject_data() {

                                //     // Validasi reason harus diisi
                                //     if ($('#reason').val() == '') {
                                //     gagal('Reason wajib diisi...');
                                //     return false;
                                //     }

                                //     // Form data
                                //     var fdata = new FormData();
                                //     var fdata2 = new FormData();

                                //     // Delete by Hdrid
                                //     // fdata.append('hdrid',"<php echo $hdrid ?>");
                                //     // fdata.append('rejected_by', "<php echo $name; ?>");
                                //     // fdata.append('reason', $('#reason').val());

                                //     fdata.append('hdrid',"<php echo $hdrid ?>");
                                //     fdata.append('rejected_by', "<php echo $list_approver->name; ?>");
                                //     fdata.append('reason', $('#reason').val());
                                //     fdata.append('position_code', "<php echo $list_approver->position_code; ?>");
                                
                                //     // return false;    

                                //     var fdata2 = new FormData();

                                //     fdata2.append("hdrid","<php echo $hdrid ?>"); 
                                //     fdata2.append("hdrid_pc","<php echo $hdrid_pc ?>");
                                //     fdata2.append("detail_request","<php echo $tb_add_advance3->detail_request ?>"); 
                                //     fdata2.append("budgets","<php echo $tb_add_advance3->budgets ?>"); 
                                //     fdata2.append("currency","<php echo $tb_add_advance3->currency ?>"); 
                                //     fdata2.append("nominal","<php echo $tb_add_advance3->nominal ?>"); 
                                //     fdata2.append("transfer_name","<php echo $tb_add_advance3->transfer_name ?>"); 
                                //     fdata2.append("comment",$('#reason').val()); 
                                //     fdata2.append("status_subject","Rejected");
                                //     fdata2.append('position_code', "<php echo $list_approver->position_code; ?>");

                                //     // Url Post delete
                                //     vurl = "<php echo base_url('C_add_settlement4/ajax_reject') ?>";

                                //     // Post data
                                //     $.ajax({
                                //     url: vurl,
                                //     method: "post",
                                //     processData: false,
                                //     contentType: false,
                                //     data: fdata,
                                //     success: function(data) {

                                        

                                //         // Hide modal delete
                                //         berhasil("Reject success");
                                //         $('#modal-reject').modal('hide');
                                //         $('#modal-default').modal('hide');

                                //         // berhasil(data.status);
                                //         // var vurl2; 
                                //         // vurl2 = "<php echo base_url('C_Email/ajax_send_mail_v1_reject')?>";

                                //         // $.ajax({
                                //         //     url: vurl2,
                                //         //     method: "post",
                                //         //     processData: false,
                                //         //     contentType: false,
                                //         //     data: fdata2,
                                //         //     success: function (data) {                 
                                //         //         // Pesan berhasil
                                //         //         berhasil(data.status);                               
                                //         //     },
                                //         //     error: function (e) {
                                //         //         gagal(e);
                                //         //         //location.reload();
                                //         //         //error
                                //         //     }
                                //         // });


                                //     },
                                //     error: function(e) {
                                //         //Pesan Gagal
                                //         gagal(e);
                                //     }
                                //     });
                                // }
                                
                                


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

                                

