
<!DOCTYPE html>
<html>

<head>
    
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

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

</head>

<body class="hold-transition login-page">

   <!-- <div class="login-box"> -->

   <div class="box-body table-responsive no-padding">
         
            <button type="button" id="showfrom" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Show Form Approval
            </button>

   <!--  </div>   -->

   <!-- ##################################### Batas Modal #####################################  -->

      <!-- modal-Add / Update -->
      <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
               <div class="form-group" hidden>
                  <div class="row">
                  <div class="col-md-4">
                     <label for="problem_name">PROBLEM NAME</label>
                  </div>
                  <div class="col-md-8">
                     <input type="text" name="problem_name" class="form-control" id="problem_name" placeholder="auto generate" readonly>
                  </div>
                  </div>
               </div>

               <div class="form-group" hidden>
                  <div class="row">
                  <div class="col-md-4">
                     <label for="product_name">PRODUCT NAME</label>
                  </div>
                  <div class="col-md-8">
                     <input type="text" name="product_name" class="form-control" id="product_name" placeholder="auto generate" readonly>
                  </div>
                  </div>
               </div>

               <div class="form-group" hidden>
                  <div class="row">
                  <div class="col-md-4">
                     <label for="problem_category_name">PROBLEM CATEGORY NAME</label>
                  </div>
                  <div class="col-md-8">
                     <input type="text" name="problem_category_name" class="form-control" id="problem_category_name" placeholder="auto generate" readonly>
                  </div>
                  </div>
               </div>

               <div class="form-group" hidden >
                  <div class="row">
                  <div class="col-md-4">
                     <label for="name">Name</label>
                  </div>
                  <div class="col-md-8">
                     <input type="text" name="name" class="form-control" id="name" placeholder="auto generate" readonly>
                  </div>
                  </div>
               </div>

               <div class="form-group">
                  <div class="row">
                  <div class="col-md-4">
                     <label for="hdrid">REPORT NO.</label>
                  </div>
                  <div class="col-md-8">
                     <input type="text" name="hdrid" class="form-control" id="hdrid" placeholder="auto generate" readonly>
                  </div>
                  </div>
               </div>


               <div class="form-group">
                  <div class="row">
                  <div class="col-md-4">
                     <label>GROUP PRODUCT ID</label>
                  </div>
                  <div class="col-md-8">
                     <select class="form-control select2" id="group_product_id" disabled="true" name="group_product_id"  style="width: 100%;">
                        <option value='' selected="selected">-Select-</option>
                        <!-- <php
                        foreach ($group_product as $value) {
                        echo "<option value='$value->hdrid'>$value->hdrid-$value->group_product_name</option>";
                        }
                        ?> -->
                     </select>
                  </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                  <div class="col-md-4">
                     <label for="group_product_name">GROUP PRODUCT NAME</label>
                  </div>
                  <div class="col-md-8">
                     <input type="text" name="group_product_name" class="form-control" id="group_product_name" readonly>
                  </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                  <div class="col-md-4">
                     <label>CUSTOMER ID</label>
                  </div>
                  <div class="col-md-8">
                     <select class="form-control select2" id="customer_id" name="customer_id" disabled="true" onchange="handleSelectChange_customer_id(event)" style="width: 100%;">
                        <option value='' selected="selected">-Select-</option>
                        <!-- <php
                        foreach ($customer as $value) {
                        echo "<option value='$value->hdrid'>$value->hdrid-$value->customer_name</option>";
                        }
                        ?> -->
                     </select>
                  </div>
                  </div>
               </div>

               <div class="form-group">
                  <div class="row">
                  <div class="col-md-4">
                     <label for="customer_name">CUSTOMER NAME</label>
                  </div>
                  <div class="col-md-8">
                     <input type="text" name="customer_name" class="form-control" id="customer_name" readonly>
                  </div>
                  </div>
               </div>

               

            </form>



            <!-- RESPONSES -->

            <div class="card card-success">
            <div class="card-header">
               <h4 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwores">
                  <b>RESPONSE </b>
                  </a>
               </h4>
            </div>
            <div id="collapseTwores" class="panel-collapse collapse">
               <div class="card-body">

                  <form class="form-horizontal" id="resform" role="form" enctype="multipart/form-data">
                  <div class="card-body">
                     <div class="container-fluid">

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <label for="hdridres">REPORT NO.</label>
                           </div>
                           <div class="col-md-8">
                              <input type="text" name="hdrid" class="form-control" id="hdridres" placeholder="auto generate" readonly>
                           </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <label for="problem_idres">PROBLEM ID</label>
                           </div>
                           <div class="col-md-8">
                              <input type="text" name="problem_id" class="form-control" id="problem_idres" readonly>
                           </div>
                        </div>
                        </div>


                        <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 mb-2">
                           <h5>NIK</h5>
                        </div>
                        <div class="col-md-4 mb-2 ">
                           <h5>Name</h4>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <label for="">PIC</label>
                           </div>
                           <!-- NIK PIC -->
                           <div class="col-md-4">
                              <select class="form-control select2" id="nikres" name="nik"  style="width: 100%;">
                              <option value='' selected="selected">-Select-</option>
                              <!-- <php
                              foreach ($nik as $value) {
                                 echo "<option value='$value->user_name'>$value->user_name-$value->name</option>";
                              }
                              ?> -->
                              </select>
                           </div>
                           <!-- PIC NAME -->
                           <div class="col-md-4">
                              <input type="text" name="name" class="form-control" id="nameres">
                           </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <label for="containment_other_action">CONTAINMENT ACTION</label>
                           </div>
                           <div class="col-md-8">
                              <select class="form-control" id="containment_other_action" name="containment_other_action">
                              <option value="0">-Select-</option>
                              <option value="Open">Open</option>
                              <option value="Done">Done</option>
                              </select>
                           </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <label for="attach_file_1_res">ATTACH FILE 1</label>
                           </div>
                           <div class="col-md-1">
                              <a class="btn btn-success" id="attach_file_1_view_res" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                           </div>
                           <div class="col-md-7">
                              <div class="custom-file">
                              <input type="file" class="custom-file-input" id="attach_file_1_res" multiple="" name="attach_file_1_res">
                              <label class="custom-file-label" for="attach_file_1_res" id="attach_file_1_label_res">Choose file</label>
                              </div>
                           </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <label for="attach_file_2_res">ATTACH FILE 2</label>
                           </div>
                           <div class="col-md-1">
                              <a class="btn btn-success" id="attach_file_2_view_res" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                           </div>
                           <div class="col-md-7">
                              <div class="custom-file">
                              <input type="file" class="custom-file-input" id="attach_file_2_res" multiple="" name="attach_file_2_res">
                              <label class="custom-file-label" for="attach_file_2_res" id="attach_file_2_label_res">Choose file</label>
                              </div>
                           </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <label for="attach_file_3_res">ATTACH FILE 3</label>
                           </div>
                           <div class="col-md-1">
                              <a class="btn btn-success" id="attach_file_3_view_res" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                           </div>
                           <div class="col-md-7">
                              <div class="custom-file">
                              <input type="file" class="custom-file-input" id="attach_file_3_res" multiple="" name="attach_file_3_res">
                              <label class="custom-file-label" for="attach_file_3_res" id="attach_file_3_label_res">Choose file</label>
                              </div>
                           </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <label>DATE RESPONSE:</label>
                           </div>
                           <div class="col-md-4">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickerdate_response" data-target-input="nearest">
                              <input type="text" id="date_response" name="date_response" class="form-control datetimepicker-input" data-target="#timepickerdate_response" />
                              <div class="input-group-append" data-target="#timepickerdate_response" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                              </div>
                           </div>
                        </div>
                        </div>


                        <div class="row">
                        <div class="col-md-4">
                           <label for="">DMIA RESPONSIBLE</label>
                        </div>

                        <div class="col-md-8">
                           <div class="form-group" clearfix>
                              <div class="icheck-primary d-inline">
                              <input type="radio" id="dmia_responsible" value="dmia_responsible" name="dmia_responsible" class="dmia_responsible">
                              <label for="dmia_responsible">
                                 YES
                              </label>
                              </div>
                              <div class="icheck-primary d-inline">
                              <input type="radio" id="dmia_responsible2" value="dmia_responsible2" name="dmia_responsible" class="dmia_responsible">
                              <label for="dmia_responsible2">
                                 NO
                              </label>
                              </div>
                           </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <label for="statusresponse">STATUS</label>
                           </div>
                           <div class="col-md-8">
                              <input type="text" name="status" class="form-control" id="statusresponse" readonly>
                           </div>
                        </div>
                        </div>

                        <div id="showHideForm">



                        <hr style="border:1px solid red;">

                        <div class="row ">
                           <div class="col-md mb-2 ">
                              <h4 class="text-center">OCCURENCE</h4>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md mb-2">
                              <h6 class="">WHY</h6>
                           </div>
                           <div class="col-md mb-2 ">
                              <h6 class="">PREVENTION</h6>
                           </div>
                           <div class="col-md mb-2 ">
                              <h6 class="">DATE</h6>
                           </div>
                        </div>

                        <!-- WHY 1 -->
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-1">
                              <label for="">1</label>
                              </div>
                              <!-- occurance why 1 -->
                              <div class="col-md">
                              <input type="text" name="occurrence_why_1" class="form-control" id="occurrence_why_1">
                              </div>
                              <!-- occurance prevention 1 -->
                              <div class="col-md">
                              <input type="text" name="occurrence_prevention_1" class="form-control" id="occurrence_prevention_1">
                              </div>
                              <!-- occurence date 1 -->
                              <div class="col-md">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickeroccurrence_date_1" data-target-input="nearest">
                                 <input type="text" id="occurrence_date_1" name="occurrence_date_1" class="form-control datetimepicker-input" data-target="#timepickeroccurrence_date_1" />
                                 <div class="input-group-append" data-target="#timepickeroccurrence_date_1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>

                        <!-- WHY 2 -->
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-1">
                              <label for="">2</label>
                              </div>
                              <!-- occurance why 2 -->
                              <div class="col-md">
                              <input type="text" name="occurrence_why_2" class="form-control" id="occurrence_why_2">
                              </div>
                              <!-- occurance prevention 2 -->
                              <div class="col-md">
                              <input type="text" name="occurrence_prevention_2" class="form-control" id="occurrence_prevention_2">
                              </div>
                              <!-- occurence date 2 -->
                              <div class="col-md">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickeroccurrence_date_2" data-target-input="nearest">
                                 <input type="text" id="occurrence_date_2" name="occurrence_date_2" class="form-control datetimepicker-input" data-target="#timepickeroccurrence_date_2" />
                                 <div class="input-group-append" data-target="#timepickeroccurrence_date_2" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>

                        <!-- WHY 3 -->
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-1">
                              <label for="">3</label>
                              </div>
                              <!-- occurance why 3 -->
                              <div class="col-md">
                              <input type="text" name="occurrence_why_3" class="form-control" id="occurrence_why_3">
                              </div>
                              <!-- occurance prevention 3 -->
                              <div class="col-md">
                              <input type="text" name="occurrence_prevention_3" class="form-control" id="occurrence_prevention_3">
                              </div>
                              <!-- occurence date 3 -->
                              <div class="col-md">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickeroccurrence_date_3" data-target-input="nearest">
                                 <input type="text" id="occurrence_date_3" name="occurrence_date_3" class="form-control datetimepicker-input" data-target="#timepickeroccurrence_date_3" />
                                 <div class="input-group-append" data-target="#timepickeroccurrence_date_3" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>

                        <!-- WHY 4 -->
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-1">
                              <label for="">4</label>
                              </div>
                              <!-- occurance why 4 -->
                              <div class="col-md">
                              <input type="text" name="occurrence_why_4" class="form-control" id="occurrence_why_4">
                              </div>
                              <!-- occurance prevention 4 -->
                              <div class="col-md">
                              <input type="text" name="occurrence_prevention_4" class="form-control" id="occurrence_prevention_4">
                              </div>
                              <!-- occurence date 4 -->
                              <div class="col-md">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickeroccurrence_date_4" data-target-input="nearest">
                                 <input type="text" id="occurrence_date_4" name="occurrence_date_4" class="form-control datetimepicker-input" data-target="#timepickeroccurrence_date_4" />
                                 <div class="input-group-append" data-target="#timepickeroccurrence_date_4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>



                        <!-- WHY 5 -->
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-1">
                              <label for="">5</label>
                              </div>
                              <!-- occurance why 5 -->
                              <div class="col-md">
                              <input type="text" name="occurrence_why_5" class="form-control" id="occurrence_why_5">
                              </div>
                              <!-- occurance prevention 5 -->
                              <div class="col-md">
                              <input type="text" name="occurrence_prevention_5" class="form-control" id="occurrence_prevention_5">
                              </div>
                              <!-- occurence date 5 -->
                              <div class="col-md">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickeroccurrence_date_5" data-target-input="nearest">
                                 <input type="text" id="occurrence_date_5" name="occurrence_date_5" class="form-control datetimepicker-input" data-target="#timepickeroccurrence_date_5" />
                                 <div class="input-group-append" data-target="#timepickeroccurrence_date_5" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>


                        <hr style="border:1px solid red;">

                        <div class="row ">
                           <div class="col-md mb-2 ">
                              <h4 class="text-center">Flow Out</h4>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md mb-2">
                              <h6 class="">WHY</h6>
                           </div>
                           <div class="col-md mb-2 ">
                              <h6 class="">PREVENTION</h6>
                           </div>
                           <div class="col-md mb-2 ">
                              <h6 class="">DATE</h6>
                           </div>
                        </div>

                        <!-- WHY 1 -->
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-1">
                              <label for="">1</label>
                              </div>
                              <!-- occurance why 1 -->
                              <div class="col-md">
                              <input type="text" name="flow_out_why_1" class="form-control" id="flow_out_why_1">
                              </div>
                              <!-- occurance prevention 1 -->
                              <div class="col-md">
                              <input type="text" name="flow_out_prevention_1" class="form-control" id="flow_out_prevention_1">
                              </div>
                              <!-- flow out date 1 -->
                              <div class="col-md-4">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickerflow_out_date_1" data-target-input="nearest">
                                 <input type="text" id="flow_out_date_1" name="flow_out_date_1" class="form-control datetimepicker-input" data-target="#timepickerflow_out_date_1" />
                                 <div class="input-group-append" data-target="#timepickerflow_out_date_1" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                              </div>
                              </div>

                           </div>
                        </div>

                        <!-- WHY 2 -->
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-1">
                              <label for="">2</label>
                              </div>
                              <!-- occurance why 2 -->
                              <div class="col-md">
                              <input type="text" name="flow_out_why_2" class="form-control" id="flow_out_why_2">
                              </div>
                              <!-- occurance prevention 2 -->
                              <div class="col-md">
                              <input type="text" name="flow_out_prevention_2" class="form-control" id="flow_out_prevention_2">
                              </div>
                              <!-- flow out date 2 -->
                              <div class="col-md-4">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickerflow_out_date_2" data-target-input="nearest">
                                 <input type="text" id="flow_out_date_2" name="flow_out_date_2" class="form-control datetimepicker-input" data-target="#timepickerflow_out_date_2" />
                                 <div class="input-group-append" data-target="#timepickerflow_out_date_2" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>

                        <!-- WHY 3 -->
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-1">
                              <label for="">3</label>
                              </div>
                              <!-- occurance why 3 -->
                              <div class="col-md">
                              <input type="text" name="flow_out_why_3" class="form-control" id="flow_out_why_3">
                              </div>
                              <!-- occurance prevention 3 -->
                              <div class="col-md">
                              <input type="text" name="flow_out_prevention_3" class="form-control" id="flow_out_prevention_3">
                              </div>
                              <!-- flow out date 3 -->
                              <div class="col-md-4">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickerflow_out_date_3" data-target-input="nearest">
                                 <input type="text" id="flow_out_date_3" name="flow_out_date_3" class="form-control datetimepicker-input" data-target="#timepickerflow_out_date_3" />
                                 <div class="input-group-append" data-target="#timepickerflow_out_date_3" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>

                        <!-- WHY 4 -->
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-1">
                              <label for="">4</label>
                              </div>
                              <!-- occurance why 4 -->
                              <div class="col-md">
                              <input type="text" name="flow_out_why_4" class="form-control" id="flow_out_why_4">
                              </div>
                              <!-- occurance prevention 4 -->
                              <div class="col-md">
                              <input type="text" name="flow_out_prevention_4" class="form-control" id="flow_out_prevention_4">
                              </div>
                              <!-- flow out date 4 -->
                              <div class="col-md-4">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickerflow_out_date_4" data-target-input="nearest">
                                 <input type="text" id="flow_out_date_4" name="flow_out_date_4" class="form-control datetimepicker-input" data-target="#timepickerflow_out_date_4" />
                                 <div class="input-group-append" data-target="#timepickerflow_out_date_4" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>
                        <!-- WHY 5 -->
                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-1">
                              <label for="">5</label>
                              </div>
                              <!-- occurance why 5 -->
                              <div class="col-md">
                              <input type="text" name="flow_out_why_5" class="form-control" id="flow_out_why_5">
                              </div>
                              <!-- occurance prevention 5 -->
                              <div class="col-md">
                              <input type="text" name="flow_out_prevention_5" class="form-control" id="flow_out_prevention_5">
                              </div>
                              <!-- flow out date 5 -->
                              <div class="col-md-4">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickerflow_out_date_5" data-target-input="nearest">
                                 <input type="text" id="flow_out_date_5" name="flow_out_date_5" class="form-control datetimepicker-input" data-target="#timepickerflow_out_date_5" />
                                 <div class="input-group-append" data-target="#timepickerflow_out_date_5" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>


                        <hr style="border:1px solid red;">

                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-4">
                              <label for="contermeasur_action">CONTERMEASUR ACTION</label>
                              </div>
                              <div class="col-md-8">
                              <input type="text" name="contermeasur_action" class="form-control" id="contermeasur_action">
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-4">
                              <label for="verification">VERIFICATION</label>
                              </div>
                              <div class="col-md-8">
                              <input type="text" name="verification" class="form-control" id="verification">
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-4">
                              <label for="verification_attach">VERIFICATION ATTACH</label>
                              </div>
                              <div class="col-md-1">
                              <a class="btn btn-success" id="verification_attach_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                              </div>
                              <div class="col-md-7">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="verification_attach" multiple="" name="verification_attach">
                                 <label class="custom-file-label" for="verification_attach" id="verification_attach_label">Choose file</label>
                              </div>
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-4">
                              <label for="implement_actions">IMPLEMENT ACTIONS</label>
                              </div>
                              <div class="col-md-8">
                              <input type="text" name="implement_actions" class="form-control" id="implement_actions">
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-4">
                              <label for="validation_result">VALIDATION RESULT</label>
                              </div>
                              <div class="col-md-8">
                              <input type="text" name="validation_result" class="form-control" id="validation_result">
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-4">
                              <label for="validation_attach">VALIDATION ATTACH</label>
                              </div>
                              <div class="col-md-1">
                              <a class="btn btn-success" id="validation_attach_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                              </div>
                              <div class="col-md-7">
                              <div class="custom-file">
                                 <input type="file" class="custom-file-input" id="validation_attach" multiple="" name="validation_attach">
                                 <label class="custom-file-label" for="validation_attach" id="validation_attach_label">Choose file</label>
                              </div>
                              </div>
                           </div>
                        </div>

                        <div class="form-group">

                           <div class="row mt-3">
                              <div class="col-md-8">
                              <label for="">CROSS CHECK TO <span style="color:red;">INTERNAL SECTION</span> / YOKOTENKAI ?</label>
                              </div>
                              <div class="col-md">
                              <!-- <php echo form_error('yokotenkai'); ?> -->
                              <div class="form-group">
                                 <div class="icheck-primary d-inline">
                                    <input type="radio" id="yokotenkai" value="yokotenkai"  name="yokotenkai" class="yokotenkai">
                                    <label for="yokotenkai">
                                    YES
                                    </label>
                                 </div>
                                 <div class="icheck-primary d-inline">
                                    <input type="radio" id="yokotenkai2" value="yokotenkai2" name="yokotenkai" class="yokotenkai">
                                    <label for="yokotenkai2">
                                    NO
                                    </label>
                                 </div>
                              </div>
                              </div>
                           </div>
                           <hr class="float-left" style="border:0.5px solid red;width:100px;margin-top:-12px">

                        </div>


                        <div class="form-group">

                           <div class="row mt-3">
                              <div class="col-md-8">
                              <label for="">CROSS CHECK TO <span style="color:red;">ANOTHER SECTION</span> / YOKOTENKAI ?</label>
                              </div>
                              <div class="col-md">
                              <?php echo form_error('yokotenkai_other_section'); ?>
                              <div class="form-group">
                                 <div class="icheck-primary d-inline">
                                    <input type="radio" id="yokotenkai_other_section" value="yokotenkai_other_section"  name="yokotenkai_other_section" class="yokotenkai_other_section">
                                    <label for="yokotenkai_other_section">
                                    YES
                                    </label>
                                 </div>
                                 <div class="icheck-primary d-inline">
                                    <input type="radio" id="yokotenkai_other_section2" value="yokotenkai_other_section2"  name="yokotenkai_other_section" class="yokotenkai_other_section">
                                    <label for="yokotenkai_other_section2">
                                    NO
                                    </label>
                                 </div>
                              </div>
                              </div>
                           </div>
                           <hr class="float-left" style="border:0.5px solid red;width:100px;margin-top:-12px">

                        </div>


                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-4">
                              <label for="recommendation">RECOMMENDATION</label>
                              </div>
                              <div class="col-md-8">
                              <input type="text" name="recommendation" class="form-control" id="recommendation">
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-4">
                              <label>NIK</label>
                              </div>
                              <div class="col-md-8">
                              <select class="form-control select2" id="nik_2" name="nik_2"  style="width: 100%;">
                                 <option value='' selected="selected">-Select-</option>
                                 <!-- <php
                                 foreach ($nik_2 as $value) {
                                    echo "<option value='$value->user_name'>$value->user_name-$value->name-$value->department_name</option>";
                                 }
                                 ?> -->
                              </select>
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-4">
                              <label for="name_2">NAME</label>
                              </div>
                              <div class="col-md-8">
                              <input type="text" name="name_2" class="form-control" id="name_2">
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-4">
                              <label for="department_name_2">DEPARTMENT</label>
                              </div>
                              <div class="col-md-8">
                              <input type="text" name="department_name_2" class="form-control" id="department_name_2">
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="row">
                              <div class="col-md-4">
                              <label>DATE :</label>
                              </div>
                              <div class="col-md-4">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickerdate_response_2" data-target-input="nearest">
                                 <input type="text" id="date_response_2" name="date_response_2" class="form-control datetimepicker-input" data-target="#timepickerdate_response_2" />
                                 <div class="input-group-append" data-target="#timepickerdate_response_2" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>


                        </div>


                     </div><!-- ./MODAL CONTAINER -->
                  </div><!-- ./MODAL CARD BODY -->
                  <div class="card-footer">

                     <!-- <php if ($this->session->userdata('rolename') == 'Approver Quality' || $this->session->userdata('rolename') == 'Administrator') { ?> -->
                           <div class="btn btn-success btn-sm konfirmasiApprove" data-id='' data-toggle="modal" data-target="#modal-confirm-approve" id="btnsubmitres"> Approve <i class="far fa-thumbs-up"></i></div>
                           <div class="btn btn-danger btn-sm konfirmasiReject" data-id='' data-toggle="modal" data-target="#modal-reject" id="btnrejectres"> Reject <i class="far fa-thumbs-down"></i></div>
                     <!-- <php } else { ?> -->
                        <div class="btn btn-primary btn-sm konfirmasiSave float-right" data-id='' data-toggle="modal" data-target="#modal-save" id="btnsaveres" onclick="Simpan_datares()" width="auto"> Save Draft <i class="far fa-save"></i></div>
                     <!-- <php } ?> -->

                  </div>

                  </form>

                  <div class="card-body">
                  <!-- APPROVER -->
                  <label>Approve By</label>

                  <!-- DATE APPROVE -->
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-5">
                        <label for="date_approveres">DATE APPROVE</label>
                        </div>
                        <div class="col-md-7">
                        <input type="text" name="date_approveres" class="form-control" id="date_approveres" readonly>
                        </div>
                     </div>
                  </div>

                  <!-- NIK APPROVER -->
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-5">
                        <label for="nik_approverres">NIK</label>
                        </div>
                        <div class="col-md-7">
                        <input type="text" name="nik_approverres" class="form-control" id="nik_approverres" readonly>
                        </div>
                     </div>
                  </div>

                  <!-- NAMA APPROVER -->
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-5">
                        <label for="name_approverres">NAME APPROVER</label>
                        </div>
                        <div class="col-md-7">
                        <input type="text" name="name_approverres" class="form-control" id="name_approverres" readonly>
                        </div>
                     </div>
                  </div>

                  <!-- STATUS APPROVER -->
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-5">
                        <label for="statusres">STATUS</label>
                        </div>
                        <div class="col-md-7">
                        <!-- <input type="text" rows="3" name="statusres" class="form-control" id="statusres" readonly> -->
                        <textarea readonly rows="3" type="text" name="statusres" class="form-control" id="statusres"></textarea>
                        </div>
                     </div>
                  </div>
                  <hr>

                  </div>
                  <!-- </form> -->

               </div>
            </div>
            </div>
            <!-- CARD -->

            <!-- AKHIR RESPONS -->

            <!-- detail_problem -->
            <div class="card card-primary">
            <div class="card-header">
               <h4 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwodetail_problem">
                  <b> DETAIL PROBLEM </b>
                  </a>
               </h4>
            </div>
            <div id="collapseTwodetail_problem" class="panel-collapse collapse">
               <div class="card-body">
                  <form class="form-horizntal" id="detail_problemform" role="form">
                  <div class="card-body">
                     <div class="table-responsive">
                        <!-- <table id="detail_problem" class="table table-bordered table-hover display nowrap table-striped" style="text-align:center"> -->
                        <table id="detailProblem" class="table table-bordered table-hover display nowrap table-striped" style="text-align:center">
                        <thead>
                           <tr>
                              <th>PROBLEM NAME</th>
                              <th>REPORT NO.</th>
                              <!-- <th>DUE DATE</th> -->
                              <th>ISSUE DATE</th>
                              <th>RANK PROBLEM</th>
                              <th>GROUP PRODUCT ID</th>
                              <th>GROUP PRODUCT NAME</th>
                              <th>PRODUCT ID</th>
                              <th>PRODUCT NAME</th>
                              <th>CONTACT PERSON NAME</th>
                              <th>SOURCE INFORMATION ID</th>
                              <th>SOURCE INFORMATION NAME</th>
                              <th>CUSTOMER REPORT NUMBER</th>
                              <th>PART NUMBER</th>
                              <th>QTY</th>
                              <th>LOT NUMBER PRODUCT</th>
                              <th>PROBLEM</th>
                              <th>DETAIL PROBLEM</th>
                              <!-- <th>RESPONSIBLE SECTION</th> -->
                              <th>CONTAINMENT DATE</th>
                              <th>NIK</th>
                              <th>NAME</th>
                              <th>SECTION</th>
                              <th>NIK TO</th>
                              <th>NAME TO</th>
                              <th>SECTION TO</th>
                              <th>TEMPORARY ACTION</th>
                              <th>REMARK</th>
                              <th>DELIVERY STATUS</th>
                              <th>WHEN</th>
                              <th>SHIFT</th>
                              <th>TIME</th>
                              <th>WHO (Found by)</th>
                              <th>WHERE</th>
                              <!-- <th>CUSTOMER PRODUCT ID</th> -->
                              <th>QTY LOT</th>
                              <th>REPORT DATE</th>
                              <th>STATUS</th>

                           </tr>
                        </thead>

                        <tbody></tbody>

                        </table>
                     </div>
                  </div>
                  </form>
               </div>
            </div>
            </div>

            <!-- AKHIR DETAIL PROBLEM -->

            <!-- APPROVAL -->
            <div class="card card-primary">
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
                              <th>PROBLEM ID</th>
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
            </div>

            <!-- AKHIR APPROVAL -->

            <!-- EFFECTIVENESS -->
            <div class="card card-success">
            <div class="card-header">
               <h4 class="card-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoef">
                  <b>EFFECTIVENESS </b>
                  </a>
               </h4>
            </div>
            <div id="collapseTwoef" class="panel-collapse collapse">
               <div class="card-body">

                  <form class="form-horizontal" id="efform" role="form" enctype="multipart/form-data">
                  <div class="card-body">
                     <div class="container-fluid">

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <label for="hdridef">REPORT NO.</label>
                           </div>
                           <div class="col-md-8">
                              <input type="text" name="hdrid" class="form-control" id="hdridef" placeholder="auto generate" readonly>
                           </div>
                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <label for="problem_idef">PROBLEM ID</label>
                           </div>
                           <div class="col-md-8">
                              <input readonly type="text" name="problem_id" class="form-control" id="problem_idef" readonly>
                           </div>
                        </div>
                        </div>

                        <hr style="border:1px solid red;">

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-1"></div>
                           <div class="col-md-3">
                              <h5>Month</h5>
                           </div>

                           <div class="col-md-4">
                              <h5>Comment</h5>
                           </div>

                           <div class="col-md-4">
                              <h5>Attach</h5>
                           </div>
                        </div>
                        </div>


                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-1">
                              <label for="">1</label>
                           </div>
                           <!-- Date Picker Month 1 -->
                           <div class="col-md-3">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickermonth_1" data-target-input="nearest">
                              <input type="text" id="month_1" name="month_1" class="form-control datetimepicker-input" data-target="#timepickermonth_1" />
                              <div class="input-group-append" data-target="#timepickermonth_1" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                              </div>
                           </div>

                           <!-- Comment 1 -->
                           <div class="col-md-3">
                              <input type="text" name="comment_1" class="form-control" id="comment_1">
                           </div>

                           <!-- Attach File 1 -->
                           <div class="col-md">
                              <a class="btn btn-success" id="attach_file_1_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                           </div>
                           <div class="col-md-4">
                              <div class="custom-file">
                              <input type="file" class="custom-file-input" id="attach_file_1" multiple="" name="attach_file_1">
                              <label class="custom-file-label" for="attach_file_1" id="attach_file_1_label">Choose file</label>
                              </div>
                           </div>

                        </div>
                        </div>

                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-1">
                              <label for="">2</label>
                           </div>
                           <!-- Date Picker Month 2 -->
                           <div class="col-md-3">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickermonth_2" data-target-input="nearest">
                              <input type="text" id="month_2" name="month_2" class="form-control datetimepicker-input" data-target="#timepickermonth_2" />
                              <div class="input-group-append" data-target="#timepickermonth_2" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                              </div>
                           </div>

                           <!-- Comment 2 -->
                           <div class="col-md-3">
                              <input type="text" name="comment_2" class="form-control" id="comment_2">
                           </div>

                           <!-- Attach File 2 -->
                           <div class="col-md">
                              <a class="btn btn-success" id="attach_file_2_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                           </div>
                           <div class="col-md-4">
                              <div class="custom-file">
                              <input type="file" class="custom-file-input" id="attach_file_2" multiple="" name="attach_file_2">
                              <label class="custom-file-label" for="attach_file_2" id="attach_file_2_label">Choose file</label>
                              </div>
                           </div>

                        </div>
                        </div>



                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-1">
                              <label for="">3</label>
                           </div>
                           <!-- Date Picker Month 3 -->
                           <div class="col-md-3">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickermonth_3" data-target-input="nearest">
                              <input type="text" id="month_3" name="month_3" class="form-control datetimepicker-input" data-target="#timepickermonth_3" />
                              <div class="input-group-append" data-target="#timepickermonth_3" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                              </div>
                           </div>

                           <!-- Comment 3 -->
                           <div class="col-md-3">
                              <input type="text" name="comment_3" class="form-control" id="comment_3">
                           </div>

                           <!-- Attach File 3 -->
                           <div class="col-md">
                              <a class="btn btn-success" id="attach_file_3_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                           </div>
                           <div class="col-md-4">
                              <div class="custom-file">
                              <input type="file" class="custom-file-input" id="attach_file_3" multiple="" name="attach_file_3">
                              <label class="custom-file-label" for="attach_file_3" id="attach_file_3_label">Choose file</label>
                              </div>
                           </div>

                        </div>
                        </div>


                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-1">
                              <label for="">4</label>
                           </div>
                           <!-- Date Picker Month 4 -->
                           <div class="col-md-3">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickermonth_4" data-target-input="nearest">
                              <input type="text" id="month_4" name="month_4" class="form-control datetimepicker-input" data-target="#timepickermonth_4" />
                              <div class="input-group-append" data-target="#timepickermonth_4" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                              </div>
                           </div>

                           <!-- Comment 4 -->
                           <div class="col-md-3">
                              <input type="text" name="comment_4" class="form-control" id="comment_4">
                           </div>

                           <!-- Attach File 4 -->
                           <div class="col-md">
                              <a class="btn btn-success" id="attach_file_4_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                           </div>
                           <div class="col-md-4">
                              <div class="custom-file">
                              <input type="file" class="custom-file-input" id="attach_file_4" multiple="" name="attach_file_4">
                              <label class="custom-file-label" for="attach_file_4" id="attach_file_4_label">Choose file</label>
                              </div>
                           </div>

                        </div>
                        </div>



                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-1">
                              <label for="">5</label>
                           </div>
                           <!-- Date Picker Month 5 -->
                           <div class="col-md-3">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickermonth_5" data-target-input="nearest">
                              <input type="text" id="month_5" name="month_5" class="form-control datetimepicker-input" data-target="#timepickermonth_5" />
                              <div class="input-group-append" data-target="#timepickermonth_5" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                              </div>
                           </div>

                           <!-- Comment 5 -->
                           <div class="col-md-3">
                              <input type="text" name="comment_5" class="form-control" id="comment_5">
                           </div>

                           <!-- Attach File 5 -->
                           <div class="col-md">
                              <a class="btn btn-success" id="attach_file_5_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                           </div>
                           <div class="col-md-4">
                              <div class="custom-file">
                              <input type="file" class="custom-file-input" id="attach_file_5" multiple="" name="attach_file_5">
                              <label class="custom-file-label" for="attach_file_5" id="attach_file_5_label">Choose file</label>
                              </div>
                           </div>

                        </div>
                        </div>


                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-1">
                              <label for="">6</label>
                           </div>
                           <!-- Date Picker Month 6 -->
                           <div class="col-md-3">
                              <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickermonth_6" data-target-input="nearest">
                              <input type="text" id="month_6" name="month_6" class="form-control datetimepicker-input" data-target="#timepickermonth_6" />
                              <div class="input-group-append" data-target="#timepickermonth_6" data-toggle="datetimepicker">
                                 <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                              </div>
                           </div>

                           <!-- Comment 6 -->
                           <div class="col-md-3">
                              <input type="text" name="comment_6" class="form-control" id="comment_6">
                           </div>

                           <!-- Attach File 6 -->
                           <div class="col-md">
                              <a class="btn btn-success" id="attach_file_6_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                           </div>
                           <div class="col-md-4">
                              <div class="custom-file">
                              <input type="file" class="custom-file-input" id="attach_file_6" multiple="" name="attach_file_6">
                              <label class="custom-file-label" for="attach_file_6" id="attach_file_6_label">Choose file</label>
                              </div>
                           </div>

                        </div>
                        </div>



                        <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                              <label for="close_report">CLOSE REPORT</label>
                           </div>
                           <div class="col-md-8">
                              <select class="form-control select2" id="close_report" name="close_report"  style="width: 100%;">
                              <option value='' selected="selected">-Select-</option>
                              <!-- <php
                              foreach ($effectiveness_choice as $value) {
                                 echo "<option value='$value'>$value</option>";
                              }
                              ?> -->
                              </select>
                           </div>
                        </div>
                        </div>



                     </div><!-- ./MODAL CONTAINER -->
                  </div><!-- ./MODAL CARD BODY -->
                  <div class="card-footer">

                     <!-- <php if ($this->session->userdata('rolename') == 'Approver Quality' || $this->session->userdata('rolename') == 'Administrator') { ?> -->
                           <div class="btn btn-success btn-sm konfirmasiApprove" data-id='' data-toggle="modal" data-target="#modal-confirm-approve" id="btnsubmitef"> Approve <i class="far fa-thumbs-up"></i></div>
                           <div class="btn btn-danger btn-sm konfirmasiReject" data-id='' data-toggle="modal" data-target="#modal-reject" id="btnrejectef"> Reject <i class="far fa-thumbs-down"></i></div>
                     <!-- <php } else { ?> -->
                        <div class="btn btn-primary btn-sm konfirmasiSave float-right" data-id='' data-toggle="modal" data-target="#modal-save" id="btnsaveef" onclick="Simpan_dataef()" width="auto"> Save Draft <i class="far fa-save"></i></div>
                     <!-- <php } ?> -->

                  </div>

                  </form>

                  <div class="card-body">
                  <!-- APPROVER -->
                  <label>Approve By</label>

                  <!-- DATE APPROVE -->
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-5">
                        <label for="date_approveef">DATE APPROVE</label>
                        </div>
                        <div class="col-md-7">
                        <input type="text" name="date_approveef" class="form-control" id="date_approveef" readonly>
                        </div>
                     </div>
                  </div>

                  <!-- NIK APPROVER -->
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-5">
                        <label for="nik_approveref">NIK</label>
                        </div>
                        <div class="col-md-7">
                        <input type="text" name="nik_approveref" class="form-control" id="nik_approveref" readonly>
                        </div>
                     </div>
                  </div>

                  <!-- NAMA APPROVER -->
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-5">
                        <label for="name_approveref">NAME APPROVER</label>
                        </div>
                        <div class="col-md-7">
                        <input type="text" name="name_approveref" class="form-control" id="name_approveref" readonly>
                        </div>
                     </div>
                  </div>

                  <!-- STATUS APPROVER -->
                  <div class="form-group">
                     <div class="row">
                        <div class="col-md-5">
                        <label for="statusef">STATUS</label>
                        </div>
                        <div class="col-md-7">
                        <!-- <input type="text" rows="3" name="statusef" class="form-control" id="statusef" readonly> -->
                        <textarea readonly rows="3" type="text" name="statusef" class="form-control" id="statusef"></textarea>
                        </div>
                     </div>
                  </div>
                  <hr>

                  </div>
                  <!-- </form> -->

               </div>
            </div>
            </div>
            <!-- CARD -->

            <!-- AKHIR DETAIL EFFECTIVENESS -->
















            <!---------------------------------- / Form Macro Batas sini ---------------------------------->

            <!-- Close Card Body -->
         </div>

         <div class="card-footer">
            <button type="submit" class="btn btn-primary" id="btnsubmit" onclick="save_progress_responsible()">Save</button>
            <button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
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

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<script type="text/javascript">

$(document).ready(function(){
 
  $('#showfrom').on('click', function() {
     /*  alert($(this).text()); */
    });

  $('#showfrom').trigger('click');

 
  function alert($data)
      {
          const Toast = Swal.mixin({

          toast: true,
          position: 'botton',
          showConfirmButton: false,
          timer: 3000
          });

          Toast.fire({
          type: 'success',
          title: $data             
          });
      }

});

</script>


<script>
function fungclose(){
   /* close(); */
   setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 100);
  }
</script>


<script>

             function getdate(){

                  var now     = new Date(); 
                  var year    = now.getFullYear();
                  var month   = now.getMonth()+1; 
                  var day     = now.getDate();
                  var hour    = now.getHours();
                  var minute  = now.getMinutes();
                  var second  = now.getSeconds(); 
      
                  if(month.toString().length == 1) {
                    month = '0'+month;
                  }
                  if(day.toString().length == 1) {
                    day = '0'+day;
                  }   
                  if(hour.toString().length == 1) {
                    hour = '0'+hour;
                  }
                  if(minute.toString().length == 1) {
                    minute = '0'+minute;
                  }
                  if(second.toString().length == 1) {
                    second = '0'+second;
                  }  
      
                  var hdrid=year+'-'+month+'-'+day+' '+hour+':'+minute+':'+second;
                  return hdrid

             }
              
</script>


<script> 

//Simpan Barang
 $('#btn_simpan').on('click',function(){

            var hdrid=$('#hdrid').val();  
                     
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('C_wiretransfer/simpan_barang')?>",
                dataType : "JSON",
                data : {hdrid:hdrid},
                success: function(data){
                    
                    $('[name="hdrid"]').val("");                   
                    setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 100);
                    
                    /* $('#ModalaAdd').modal('hide');
                    tampil_data_barang(); */

                }
            });

            return false;
        });

</script>




<script>

      function fungapproved(){

         //delete all the local storage items for this domain
         deletelocalStorage();

         var hdrid=$('#p_hdrid').val(); // Get HDRID
         var nik_approver=$('#p_nik').val(); // Get Hdrid
         
         $('#btnapproved').text('Process...'); //change button text
         $('#btnapproved').attr('disabled',true); //set button disable 

         update_status_approvednew(hdrid,nik_approver); //Update status approve

         /* Create log mail untuk send mail */ 

         // maillog(hdrid,'Send_Ewire');
         
         /* Notifikasi success rejected */ 

         berhasil('Success approve');
         
         /* Rubah button anable */
         $('#btnapproved').text('Approve'); //change button text
         $('#btnapproved').attr('disabled',false); //set button disable 

         setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 
      
      }

      function update_status_approvednew(hdrid,nik_approver){
   
         /* Tangkap data */
         var hdrid=hdrid;
         var nik_approver=nik_approver;
         
         /* Update status rejected */  
         $.ajax({
               url :"<?php echo base_url()?>C_progressapprove/update_status_approved",
               type:"POST",
               data : {hdrid:hdrid,nik_approver:nik_approver},
               beforeSend: function(data) {
               },
               success: function(data){               
                  /* Kirim email feedback close */   
                  /* Cari data email user jika punya maka kirim email bahwa permintaan sudah di setujui*/
                  // get_user_request(hdrid);
               },                            
         });

      }

     /* ------- Ketika button approved di click -------- */
     function fungapproved_old(){


         var hdrid=$('#p_hdrid').val();  

         var nik_approver=$('#p_nik').val();

         var level_approve=$('#p_level_approve').val();

         var date_section_head_approved=getdate();

         $('#btnapproved').text('Process...'); //change button text
         $('#btnapproved').attr('disabled',true); //set button disable 

                 
        updatedateapprove(hdrid,nik_approver,level_approve,date_section_head_approved);     
        
      }

      function updatedateapprove(hdrid,nik_approver,level_approve,date_section_head_approved){

            var hdrid=hdrid; 
            var nik_approver=nik_approver; 
            var level_approve=level_approve;             
            var date_section_head_approved=getdate();  

            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('C_wiretransfer/update_tb_wiretransfer_approver')?>",
            dataType : "JSON",
            data : {hdrid:hdrid,nik_approver:nik_approver,date_section_head_approved:date_section_head_approved,level_approve:level_approve},
            success: function(data){
                                   
                //mailLog(hdrid,'Approved_Ewire');
                maillog(hdrid,'Send_Ewire');
                $('#btnapproved').text('Approved'); //change button text
                $('#btnapproved').attr('disabled',false); //set button disable 
                berhasil('Success approve');   
                setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 

                /* cari level ID next approver ****** Matikan Feature Email */
                //min_level_approve(hdrid);

                /* kirim ke approver selanjutnya dengan ID =2 (level 2) */
                /* getapprovernext(hdrid,parseInt(level_approve)+1); */

               }

            });

      }

      function min_level_approve(hdrid){

         var hdrid=hdrid; 
         
         $.ajax({
         type : "GET",
         url  : "<?php echo base_url('C_wiretransfer/min_level_approve')?>",
         dataType : "JSON",
         data : {hdrid:hdrid},
         success: function(data){

            /* alert(data.result.level_approve);  */

            /* if(data.status == 'ok'){     */
            if(data.result.level_approve == '0'){   
                     
               /* Konfirmasi sudah email approver */
               /* alert('Gagal'); */

               /* update status transaksi */             
                update_status_approved(hdrid);
                //mailLog(hdrid,'Approved_Ewire');
                maillog(hdrid,'Approved_Ewire');
               
            }else{          

               /* alert(data.result.level_approve); */
               /* Cari data lengkap approver (nik,nama,email) */

               //Matikan Feature Internal Email
               //getapprovernext(hdrid,parseInt(data.result.level_approve));

               $('#btnapproved').text('Approved'); //change button text
               $('#btnapproved').attr('disabled',false); //set button disable 

               //maillog(hdrid,'Send_EWire');
                //mailLog(hdrid,'Approved_Ewire');
                maillog(hdrid,'Send_Ewire');
                alert('Success approve');    

                 setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 
                              
            } 

                       
            }

         });

      }

      function update_status_approved(hdrid){
    
            /* Tangkap data */
            var hdrid=hdrid;
            var status_transaksi='approved';

            /* Update status rejected */  
            $.ajax({
                  url :"<?php echo base_url()?>C_wiretransfer/update_status_approved",
                  type:"POST",
                  data : {hdrid:hdrid,status_transaksi:status_transaksi},
                  beforeSend: function(data) {
                  },
                  success: function(data){               
                     /* Kirim email feedback close */   
                     /* Cari data email user jika punya maka kirim email bahwa permintaan sudah di setujui*/
                     get_user_request(hdrid);
                  },                            
            });

         }


      function getapprovernext(hdrid,id){

                var hdrid=hdrid; 
                var id=id;   

                /* alert(id); */

                $.ajax({
                type : "GET",
                url  : "<?php echo base_url('C_wiretransfer/get_next_approver')?>",
                dataType : "JSON",
                data : {hdrid:hdrid,id:id},
                success: function(data){
                   
                  for(i=0; i<data.length; i++){
                   
                     sendmailapprover(hdrid,data[i].nik_approver,data[i].name_approver,data[i].email_approver,data[i].level_approve)
                     
                  }

                   /*  alert('Berhasil diapproved');
                    setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 3000);
                         */               
                  }

                  });

      }

      function get_user_request(hdrid){

         var hdrid=hdrid;
         var nik=$('#p_nik_requester').val();
                 
         $.ajax({
         type : "GET",
         url  : "<?php echo base_url('C_wiretransfer/get_user_request')?>",
         dataType : "JSON",
         data : {hdrid:hdrid,nik:nik},
         success: function(data){
           
            if(data.status == 'ok'){     
           

                 /* kirim email feedback */
                 sendmailfeedbackclose(hdrid,data.result.nik_user_email,data.result.name_user_email,data.result.address_user_email);
                 alert('complete approve');
                
                 setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 
           
            }else{

               /* Tidak punya alamat email maka tidak kirim email */
               setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 
            }           

                       
            }

         });

      }

      function sendmailapprover(hdrid,nik_approver,name_approver,email_approver,level_approve){

         var hdrid=hdrid;
         var nik_approver=nik_approver;
         var name_approver=name_approver;
         var email_approver=email_approver;
         var level_approve=level_approve;
       
         /* ============== Kirim email ke approver atasan user ============== */  

         $.ajax({
                url :"<?php echo base_url()?>C_wiretransfer/send_mail_approver_phpmailer",
                type:"POST",
                data : {hdrid:hdrid,nik_approver:nik_approver,name_approver:name_approver,email_approver:email_approver,level_approve:level_approve},
                beforeSend: function(data) {
                    
                },
                success: function(data){  
 
                  $('#btnapproved').text('Approved'); //change button text
                  $('#btnapproved').attr('disabled',false); //set button disable 

                  alert('Success approve');    

                  setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 1000); 
                           
                },
                                    
         });


      }

      function sendmailfeedbackclose(hdrid,nik_approver,name_approver,email_approver){

         var hdrid=hdrid;
         var nik_approver=nik_approver;
         var name_approver=name_approver;
         var email_approver=email_approver;
        
         /* ============== Kirim email ke approver atasan user ============== */  

         $.ajax({
               url :"<?php echo base_url()?>C_wiretransfer/sendmailfeedbackclose_phpmailer",
               type:"POST",
               data : {hdrid:hdrid,nik_approver:nik_approver,name_approver:name_approver,email_approver:email_approver},
               beforeSend: function(data) {
               },
               success: function(data){
                  
                  
                               
               },
                                    
         });

      }

</script>

<script>

 function visiblebutton(){
     
     var x = document.getElementById('btn_reason_reject');
     var y = document.getElementById('reason_reject');
     if (x.style.visibility === 'hidden') {
       x.style.visibility = 'visible';
       y.style.visibility = 'visible';
     } else {
       x.style.visibility = 'hidden';
       y.style.visibility = 'hidden';
     }
     
   }

</script>

<script>

   function maillog(hdrid,keyword){

      var hdrid=hdrid;
      var keyword=keyword;
      
      /* Update status rejected */  
      $.ajax({
            url :"<?php echo base_url()?>C_emaillog/create_file",
            type:"POST",
            data : {hdrid:hdrid,keyword:keyword},
            beforeSend: function(data) {
            },
            success: function(data){   
                                             
            },                            
      });


   }

</script>

<script>

function updatestatusreject(){

   //delete all the local storage items for this domain
    deletelocalStorage();

    /* Tangkap data */
    var hdrid=$('#p_hdrid').val();
    var reason_reject=$('#reason_reject').val();
    var reject_by=$('#p_name_approver').val();
  
    /* Validasi reason harus diisi */   
    if (reason_reject==''){
      trerror('Reason is must filled');
      return false;
    }

      $('#btn_reason_reject').text('Process...'); //change button text
      $('#btn_reason_reject').attr('disabled',true); //set button disable 

      /* Update status reject */ 
      update_status_reject(hdrid,reason_reject,reject_by);

      /* Create log mail untuk send mail */ 
      maillog(hdrid,'Reject_Ewire');

      /* Notifikasi success rejected */ 
      berhasil('Success rejected');

      /* Rubah button anable */
      $('#btn_reason_reject').text('Submit Reject'); //change button text
      $('#btn_reason_reject').attr('disabled',false); //set button disable 

      setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 3000); //Auto Close

      return false; //Break

    /* Update status rejected */  
    $.ajax({
          url :"<?php echo base_url()?>C_wiretransfer/updatestatusreject",
          type:"POST",
          data : {hdrid:hdrid,reason_reject:reason_reject},
          beforeSend: function(data) {
          },
          success: function(data){   

            //mailLog(hdrid,'Approved_Ewire');
            maillog(hdrid,'Reject_Ewire');
            $('#btn_reason_reject').text('Submit Reject'); //change button text
            $('#btn_reason_reject').attr('disabled',false); //set button disable 
            alert('Success is rejected');           
            setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 

            //Matikan feature direct email
            //get_user_request_rejected();  

          },                            
    });

  }

  function update_status_reject(hdrid,reason_reject,reject_by){
    
    /* Tangkap data */
    var hdrid=hdrid;
    var reason_reject=reason_reject;
    var reject_by=reject_by;
    
    /* Update status rejected */  
    $.ajax({
          url :"<?php echo base_url()?>C_progressapprove/update_status_reject",
          type:"POST",
          data : {hdrid:hdrid,reason_reject:reason_reject,reject_by:reject_by},
          beforeSend: function(data) {
          },
          success: function(data){               
            /* Kirim email feedback close */   
            /* Cari data email user jika punya maka kirim email bahwa permintaan sudah di setujui*/
            // get_user_request(hdrid);
          },                            
    });

  }


function get_user_request_rejected(){
  
   var hdrid=$('#p_hdrid').val();
   var nik=$('#p_nik_requester').val();
      
   $.ajax({
   type : "GET",
   url  : "<?php echo base_url('C_wiretransfer/get_user_request')?>",
   dataType : "JSON",
   data : {hdrid:hdrid,nik:nik},
   success: function(data){
      
      if(data.status == 'ok'){     
            
            sendmailreject(hdrid,data.result.nik_user_email,data.result.name_user_email,data.result.address_user_email)
            /*  setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000);  */
      
      }else{
            
         /* alert('User is not have email'); */
         trerror('User is not have email');
         /* Tidak punya alamat email maka tidak kirim email */
         setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 

      }           
                  
      }

   });

   }

function sendmailreject(hdrid,nik_user_email,name_user_email,address_user_email){

   var hdrid=hdrid;
   var nik_user=nik_user_email;
   var name_user=name_user_email;
   var email_user=address_user_email;

   /* ============== Send mail rejected ============== */  

   $.ajax({
      
         url :"<?php echo base_url()?>C_wiretransfer/sendmailreject_phpmailer",
         type:"POST",
         data : {hdrid:hdrid,nik_user:nik_user,name_user:name_user,email_user:email_user},
         beforeSend: function(data) {
         
         },
         
         success: function(data){
                  
            alert('Success is rejected');
            deletelocalStorage();
            setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 
               
         },
                           
   });

}

</script>


<script>
   function deletelocalStorage() {
   localStorage.clear();
   }
</script>

<script>

    function berhasil($data)
      {

          const Toast = Swal.mixin({

          toast: true,
          position: 'botton',
          showConfirmButton: false,
          timer: 3000
          });

          Toast.fire({
          type: 'success',
          title: $data             
          });

      }

      function trerror($data)
      {
          const Toast = Swal.mixin({

          toast: true,
          position: 'botton',
          showConfirmButton: false,
          timer: 3000
          });

          Toast.fire({
          type: 'error',
          title: $data             
          });
      }

</script>




