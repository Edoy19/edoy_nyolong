<!DOCTYPE html>
                                <html>

                                <head>
                                    <meta charset="utf-8">
                                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                    <title>CREDIT NOTE PRINT</title>

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
                                                                        <div id='buttonList'>

                                                                    <?php if ($list_approver->name=='not found') {
                                                                            echo "Progress = Close";
                                                                        } else {
                                                                            echo 'Progress ='.$list_approver->nik.'-'.$list_approver->name. '(' . $list_approver->position_name  .')'. '(' . $list_approver->position_code . ' of '. $total_approval .')';
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
                                                                    </div>

                                                                    <!-- ECR -->
                                                                    <input id="text" type="text" hidden value="<?php $current = current_url() . '?var1=' . $tb_cn->hdrid;
                                                                                                                    print_r($current); ?>" />

                                                                    
                                                                        <!-- <php if ($nik->name=='not found') {
                                                                            echo "Progress = Close";
                                                                        } else {
                                                                            echo 'Progress ='.$nik->nik.'-'.$nik->name. '(' . $nik->position_name  .')'. '(' . $nik->position_code . ' of 6)';
                                                                        }?> 

                                                                        <php if ($this->session->userdata('user_name') == '' ) 
                                                                            echo "<button class='btn btn-success float-right' data-toggle='modal' data-target='#modal-confirm-login'> Login </button>";
                                                                        ?>

                                                                        <php if ($this->session->userdata('user_name') != $nik->nik || $nik->position_code=='1' || $nik->position_code=='3' ) 
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
                                                                        ?> -->
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
                                                                                                
                                                                            <style type="text/css">
                                                                                body { font-family:Calibri;}
                                                                                </style>

                                                                                <style>
                                                                                .table-bordered td, .table-bordered th{
                                                                                    padding: 0.50rem;
                                                                                    border-collapse: separate ;
                                                                                    border:0.5px solid #000 !important;
                                                                                }
                                                                                h5 , th, td{
                                                                                    font-size:12pt
                                                                                }
                                                                                </style>
                                                                            
                                                                            <table> 
                                                                           
                                                        
                                                                             
                                                                           <tr>
                                                                        
                                                                            <br>
                                                                            <br>
                                                                          
                                                                            <center><h5><b>CREDIT NOTE<h5></center>
                                                                            <h5 align='center'>No :<?php echo substr($tb_cn->hdrid,2,10); ?></b></h5>
                                                                            <!-- <p id="qrcode"></p> -->
                                                                           </tr>
                                                                           <h5 align="right">Cibitung,<?php echo $tb_cn->date_of_issue; ?></h5>

                                               
                                                                           <h5>&nbsp;&nbsp;&nbsp;&nbsp;To  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tb_cn->company_to; ?><br></b></h5>
                                                                                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->company_address; ?></h5>
                                                                                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->company_address1; ?></h5>
                                                                                    <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->company_address2; ?></h5>

                                                                                    <br>

                                                                                    <br>

                                                                            <h5>&nbsp;&nbsp;&nbsp;&nbsp;Attn &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;&nbsp;&nbsp;<b><?php echo $tb_cn->attention; ?></b><br></h5>
                                                                            <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tb_cn->attention_departement; ?></b></h5>
                                                                            <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tb_cn->email_and_telp; ?></b></h5>

                                                                          
                                        
                                                    <table id="ecrtabel" class="table table-bordered table-hover ">                        
                                                    <tr>
                                                        <td>
                                                            <h5 style="text-align:center;">
                                                                Description 
                                                                <hr style="border:1px solid black;"> </hr>


                                                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->detail_request; ?><h5>
                                                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->reference; ?><h5>
                                                                                
                                                                <br>
                                                                <!-- Jika no VAT/0% maka -->

                                                                <?php if($tb_cn->vat=="0%") { ?>
                                                                     <!-- Kosong -->
                                                                 <?php } else { ?> 

                                                                    <!-- isi VAT -->

                                                                    <h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DPP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->currency; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->dpp; ?></h5>       
                                                                    <h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VAT<?php echo $tb_cn->vat;?>&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->currency; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->vat_nominal; ?></h5>    
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;________________+
                                                                    <h5> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TOTAL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->currency; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->amount_total; ?></h5>

                                                                
                                                                <?php }  ?>
                                                   
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <br>
                                                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;Details are per attached sheet<h5>
                                                                 




                                                            </h5>
                                                    
                                                        </td>
                                                        <td>
                                                            <h5 style="text-align:center;">
                                                                Amount 
                                                                <hr style="border:1px solid black;">

                                                                <h5>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->currency; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->amount_total; ?><h5>
                                                            </h5>
                                                        </td>

                                                        
                                                    </tr>  

                                                    <tr>
                                                        <td>
                                                        <h5 style="text-align:center;">
                                                                Total
                                                        </td>

                                                        <td>
                                                        <h5 style="text-align:center;">
                                                        <h5>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->currency; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tb_cn->amount_total; ?><h5>
                                                        </td>
                                                    </tr>
                        
                                                    
                                                              
                                                    
                                                        
                                                    </table>   
                                                    <h5 style="text-align:left;">
                                                   <i>Amount in Word:<?php echo $tb_cn->amount_in_word; ?><h5></i>
                                                   <br>
                                                   <h5><b>PT DENSO MANUFACTURING INDONESIA</b><h5>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <br>
                                                    <u><b><?php echo $tb_cn->director; ?><h5></u>
                                                    &nbsp;<?php echo $tb_cn->title; ?></b><h5>



                                                        
                         
                                                                
                                                                            

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
                                            document.getElementById("buttonList").style.display = "none";
                                            // $("buttonList").hide();
                                            var printContents = document.getElementById(printdiv).innerHTML;
                                            var originalContents = document.body.innerHTML;
                                            // document.getElementById('login').style.display = "none";
                                            // document.getElementById("btn_approve_footer").style.display = "";
                                            // document.getElementById("btn_approve_footer").style.display = "";

                                            document.body.innerHTML = printContents;

                                            window.print();

                                            document.body.innerHTML = originalContents;
                                            document.getElementById("buttonList").style.display = "";

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

                                function Approve_data() {


                                    var fdata = new FormData();

                                    // fdata.append('hdrid',$('#hdrid').val());
                                    // fdata.append('nik', $('#iduserlogin').text());
                                    // fdata.append('name', $('#name').val()); // Ganti dengan nik val 
                                    // fdata.append('position_code', $('#idposition_code').text());

                                    fdata.append('hdrid',"<?php echo $hdrid ?>");
                                    fdata.append('nik', "<?php echo $list_approver->nik; ?>");
                                    fdata.append('name', "<?php echo $list_approver->name; ?>");
                                    fdata.append('position_code', "<?php echo $list_approver->position_code; ?>");


                                    var vurl2; 
                                    vurl2 = "<?php echo base_url('C_email_v2/ajax_update_approve')?>";

                                    $.ajax({
                                            url: vurl2,
                                            method: "post",
                                            processData: false,
                                            contentType: false,
                                            data: fdata,
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

                                fdata2.append('hdrid',"<?php echo $hdrid ?>");
                                fdata2.append('nik', "<?php echo $list_approver->nik; ?>");
                                fdata2.append('nikreq', "<?php echo $tb_cn->nik; ?>");
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


                              

                                </script>

                                <script type="text/javascript">

                                    const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'botton',
                                    showConfirmButton: false,
                                    timer: 50000
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

                                

