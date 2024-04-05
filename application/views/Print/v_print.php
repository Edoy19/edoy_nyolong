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

<body  >
    <div >
        <section class="content">
            
            <?php echo $this->session->flashdata('message');  ?>
            <small>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12"> <!-- .col -->
                        <div class="card"> <!-- .card -->
                            <div class="card-body">  <!-- .card-body -->

                                <!-- ECR -->
                                <form class="form-horizntal" id="meetingform" role="form">
                                    <center><table id="ecrtabel" class="table table-bordered table-hover table-striped" style="text-align:center">
                                        <thead>

                                            <!-- TITLE -->
                                            <tr style="height:5px">
                                                <th colspan="9"> DETAIL PROBLEM </th>
                                            </tr>

                                            <tr style="height:5px">
                                               <td  style="width:20%"> <label>HDRID</label></td>
                                               <td style="width:20%"> <label>PART NUMBER</label></td>
                                               <td  style="width:20%"><label>PART NAME</label> </td>
                                               <td  style="width:20%"><label>GROUP PRODUCT ID</label> </td>
                                               <td  style="width:20%"><label>GROUP PRODUCT NAME</label> </td>
                                               <td  style="width:20%"><label>PRODUCT ID</label> </td>
                                               <td  style="width:20%"><label>PRODUCT NAME</label> </td>
                                               <td  style="width:20%"><label>CUSTOMER ID</label> </td>
                                               <td  style="width:20%"><label>CUSTOMER NAME</label> </td>
                                               <td  style="width:20%"><label>CONTACT PERSON</label> </td>
                                            </tr>

                                        </thead>

                                        <tbody>
                                            <tr>
                                               <td style="width:10%"><p><?php echo $tb_input_problem->hdrid; ?></p></td>
                                               <td style="width:10%"><p><?php echo $tb_input_problem->problem_category_id; ?></p></td>
                                               <td style="width:10%"><p><?php echo $tb_input_problem->problem_category_name; ?></p></td>
                                               <td style="width:10%"><p><?php echo $tb_input_problem->group_product_id; ?></p></td>
                                               <td style="width:10%"><p><?php echo $tb_input_problem->group_product_name; ?></p></td>
                                               <td style="width:10%"><p><?php echo $tb_input_problem->product_id; ?></p></td>
                                               <td style="width:10%"><p><?php echo $tb_input_problem->product_name; ?></p></td>
                                               <td style="width:10%"><p><?php echo $tb_input_problem->customer_id; ?></p></td>
                                               <td style="width:10%"><p><?php echo $tb_input_problem->customer_name; ?></p></td>
                                               <td style="width:10%"><p><?php echo $tb_input_problem->contact_person_name; ?></p></td>
                                            </tr>
                                        </tbody>
                                    </table></center>
                                </form>

                                    <!-- TTD APPROVE -->
                                    <center><table id="ecrtabel" class="table table-bordered table-hover table-striped" style="text-align:center">
                                        <thead>
                                            <tr style="height:150px">
                                               <td style="width:15% height=50%"> <label>APPROVED</label></td>
                                               <td style="width:10%"> <label>BP</label></td>
                                               <td style="width:10%"><label>PRC</label></td>
                                               <td  style="width:10%"> <label>WH</label></td>
                                               <td  style="width:10%"><label>MFG</label></td>
                                               <td style="width:10%"> <label>QC</label></td>
                                               <td style="width:10%"><label>PE</label></td>
                                               <td  style="width:10%"> <label>QA</label></td>
                                               <td  style="width:10%"><label>PC</label></td>
                                            </tr>

                                        </thead>

                                        <tbody></tbody>
                                    </table></center>



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
function view_modal(hdrid1,status){
    $('#hdrid').val(hdrid1);
          var hdrid=hdrid1;
          var form_data_edit=$('#ecrform').serializeArray();
          var field;
          var fieldvalue;

          // Ajax isi data
          $.ajax({
            url: "<?php echo base_url('C_Ecr/ajax_getbyhdrid')?>",
            method: "get",
            dataType : "JSON",              
            data: {hdrid:hdrid1},
            success: function (data) {
              $('#ecr_id').val(data.ecr_id);
              $('#check_point').val(data.check_point);
              $('#part_name').val(data.part_name);
              $('#part_number_old').val(data.part_number_old);
              $('#part_number_new').val(data.part_number_new);
              $('#status').val(data.status);
              // Refresh meeting
              tabel2.draw();              
                                     
                },
            error: function (e) {
                    alert(e);
                   
                }
          });
}
</script>
