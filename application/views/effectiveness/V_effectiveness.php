
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">effectiveness Form</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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

          <div class="col-12"> <!-- .col -->

            <div class="card"> <!-- .card -->

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
                               
                                <?php if ($this->session->userdata('DepartmentAdd')||$this->session->userdata('rolename')=='Administrator') { ?>

                                  <a data-toggle="modal" data-target="#modal-default"  Onclick="view_modal('1','Add')" href="#">
                                    <i class="fa fa-plus"></i> Add Data
                                  </a>

                                <?php } ?>

                                <?php if ($this->session->userdata('DepartmentAdd')||$this->session->userdata('rolename')=='Administrator') { ?>

                                  <a data-toggle="modal" data-target="#modal-import"  href="#">
                                    <i class="fa fa-upload"></i> Import Data
                                  </a>

                                <?php } ?>

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
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
                                     
                                      <div class="input-group date" data-date-format="YYYY-MM-DD"  id="startdate" data-target-input="nearest">
                                          <input type="text" id="search_fromdate" class="form-control datetimepicker-input" data-target="#startdate"/>
                                          <div class="input-group-append" data-target="#startdate" data-toggle="datetimepicker">
                                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                          </div>
                                      </div>

                                  </div>

                                  <!-- Date To-->
                                  <div class="form-group">
                                    <label>Date To:</label>
                                      <div class="input-group date" data-date-format="YYYY-MM-DD" id="enddate" data-target-input="nearest">
                                          <input type="text" id="search_todate" class="form-control datetimepicker-input" data-target="#enddate"/>
                                          <div class="input-group-append" data-target="#enddate" data-toggle="datetimepicker">
                                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                          </div>
                                      </div>
                                  </div>

                                  <button type="button" id="search" class="btn btn-block btn-success" data-toggle="collapse" data-target="#collapseOne">Search</button>
                               
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
              
              <div class="card-body">  <!-- .card-body -->

                <table id="example1" class="table table-bordered display nowrap table-striped">

                  <thead>

                  <tr>

                    <!-- Th Macro Batas Sini -->

                    <th>ACTION</th>
                    <th>TRANSACTION ID</th>
                    <th>PROBLEM ID</th>
                    <th>MONTH 1</th>
                    <th>COMMENT 1</th>
                    <th>ATTACH FILE 1</th>
                    <th>MONTH 2</th>
                    <th>COMMENT 2</th>
                    <th>ATTACH FILE 2</th>
                    <th>MONTH 3</th>
                    <th>COMMENT 3</th>
                    <th>ATTACH FILE 3</th>
                    <th>MONTH 4</th>
                    <th>COMMENT 4</th>
                    <th>ATTACH FILE 4</th>
                    <th>MONTH 5</th>
                    <th>COMMENT 5</th>
                    <th>ATTACH FILE 5</th>
                    <th>MONTH 6</th>
                    <th>COMMENT 6</th>
                    <th>ATTACH FILE 6</th>
                    <th>CLOSE REPORT</th>






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
     <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document" >
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
                      <input type="text" name="hdrid" class="form-control" id="hdrid" placeholder="auto generate" readonly>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="problem_id">PROBLEM ID</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="problem_id" class="form-control" id="problem_id" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label>MONTH 1:</label>
                    </div>
                    <div class="col-md-4">
                      <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickermonth_1" data-target-input="nearest">
                        <input type="text" id="month_1" name="month_1" class="form-control datetimepicker-input" data-target="#timepickermonth_1"/>
                          <div class="input-group-append" data-target="#timepickermonth_1" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="comment_1">COMMENT 1</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="comment_1" class="form-control" id="comment_1" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-1">
                    <a class="btn btn-success" id="attach_file_1_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                  </div>
                  <div class="col-md-4">
                    <label for="attach_file_1">ATTACH FILE 1</label>
                  </div>
                  <div class="col-md-7">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="attach_file_1" multiple="" name="attach_file_1">
                      <label class="custom-file-label" for="attach_file_1" id="attach_file_1_label">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label>MONTH 2:</label>
                    </div>
                    <div class="col-md-4">
                      <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickermonth_2" data-target-input="nearest">
                        <input type="text" id="month_2" name="month_2" class="form-control datetimepicker-input" data-target="#timepickermonth_2"/>
                          <div class="input-group-append" data-target="#timepickermonth_2" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="comment_2">COMMENT 2</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="comment_2" class="form-control" id="comment_2" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-1">
                    <a class="btn btn-success" id="attach_file_2_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                  </div>
                  <div class="col-md-4">
                    <label for="attach_file_2">ATTACH FILE 2</label>
                  </div>
                  <div class="col-md-7">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="attach_file_2" multiple="" name="attach_file_2">
                      <label class="custom-file-label" for="attach_file_2" id="attach_file_2_label">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label>MONTH 3:</label>
                    </div>
                    <div class="col-md-4">
                      <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickermonth_3" data-target-input="nearest">
                        <input type="text" id="month_3" name="month_3" class="form-control datetimepicker-input" data-target="#timepickermonth_3"/>
                          <div class="input-group-append" data-target="#timepickermonth_3" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="comment_3">COMMENT 3</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="comment_3" class="form-control" id="comment_3" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-1">
                    <a class="btn btn-success" id="attach_file_3_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                  </div>
                  <div class="col-md-4">
                    <label for="attach_file_3">ATTACH FILE 3</label>
                  </div>
                  <div class="col-md-7">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="attach_file_3" multiple="" name="attach_file_3">
                      <label class="custom-file-label" for="attach_file_3" id="attach_file_3_label">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label>MONTH 4:</label>
                    </div>
                    <div class="col-md-4">
                      <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickermonth_4" data-target-input="nearest">
                        <input type="text" id="month_4" name="month_4" class="form-control datetimepicker-input" data-target="#timepickermonth_4"/>
                          <div class="input-group-append" data-target="#timepickermonth_4" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="comment_4">COMMENT 4</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="comment_4" class="form-control" id="comment_4" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-1">
                    <a class="btn btn-success" id="attach_file_4_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                  </div>
                  <div class="col-md-4">
                    <label for="attach_file_4">ATTACH FILE 4</label>
                  </div>
                  <div class="col-md-7">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="attach_file_4" multiple="" name="attach_file_4">
                      <label class="custom-file-label" for="attach_file_4" id="attach_file_4_label">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label>MONTH 5:</label>
                    </div>
                    <div class="col-md-4">
                      <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickermonth_5" data-target-input="nearest">
                        <input type="text" id="month_5" name="month_5" class="form-control datetimepicker-input" data-target="#timepickermonth_5"/>
                          <div class="input-group-append" data-target="#timepickermonth_5" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="comment_5">COMMENT 5</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="comment_5" class="form-control" id="comment_5" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-1">
                    <a class="btn btn-success" id="attach_file_5_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                  </div>
                  <div class="col-md-4">
                    <label for="attach_file_5">ATTACH FILE 5</label>
                  </div>
                  <div class="col-md-7">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="attach_file_5" multiple="" name="attach_file_5">
                      <label class="custom-file-label" for="attach_file_5" id="attach_file_5_label">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label>MONTH 6:</label>
                    </div>
                    <div class="col-md-4">
                      <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickermonth_6" data-target-input="nearest">
                        <input type="text" id="month_6" name="month_6" class="form-control datetimepicker-input" data-target="#timepickermonth_6"/>
                          <div class="input-group-append" data-target="#timepickermonth_6" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="comment_6">COMMENT 6</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="comment_6" class="form-control" id="comment_6" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-1">
                    <a class="btn btn-success" id="attach_file_6_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                  </div>
                  <div class="col-md-4">
                    <label for="attach_file_6">ATTACH FILE 6</label>
                  </div>
                  <div class="col-md-7">
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
                      <input type="text" name="close_report" class="form-control" id="close_report" >
                    </div>
                </div>
              </div>





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
               
              <form method="POST" action="<?php echo base_url('c_effectiveness/import'); ?>" enctype="multipart/form-data">

                  <div class="input-group form-group">
                    <span class="input-group-addon" id="sizing-addon2">
                      <i class="glyphicon glyphicon-file"></i>
                    </span>
                    <input type="file" class="form-control" name="excel" aria-describedby="sizing-addon2">
                  </div>

                  <div class="form-group">
                    <div class="col-md-12">
                        <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i>Import Data</button>
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

  $(document).ready(function () {

    $.validator.setDefaults({
      submitHandler: function () {

        //berhasil( "Form successful submitted!" );
        var status=$('#exampleModalLabel').text();
       
        if (status=="Add Data"){

          // Ajax insert data
           Simpan_data("Add");

        }else if(status=="Edit Data"){

           // Ajax update data
           Simpan_data("Update");

        }else{

          berhasil(status);

        }

      }
    });

    $('#quickForm').validate({
      rules: {

				// ---------------------------------- Rule input Macro Batas sini 1---------------------------------
        effectiveness_name: {
        required: true,
        },



        // ---------------------------------- / Rule input Macro Batas sini 1--------------------------------

      },
      messages: {
    
				// ---------------------------------- Rule input Macro Batas sini 2---------------------------------
        effectiveness_name: {
        required: "Please Input effectiveness_name",
        minlength: 3
        },



        // ---------------------------------- / Rule input Macro Batas sini 2--------------------------------


      },
      errorElement: 'span',
      errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>

<script type="text/javascript">

  // Untuk Add,Edit,delete.
  
  function view_modal(hdrid1,status){
                             
          if (status=="Add"){

            $('#exampleModalLabel').text('Add Data');  // name view
            $('#quickForm')[0].reset(); // reset form   
            $('#btnsubmit').text('Save'); // name Save
            document.getElementById("btnsubmit").style.visibility = "visible";    // Visible button              
            //Ajax kosongkan data

          }else {
           
            // Get Hdri ID
            $('#hdrid').val(hdrid1);
            var hdrid=hdrid1;   

            // Ajax isi data
              $.ajax({
              url: "<?php echo base_url('C_effectiveness/ajax_getbyhdrid')?>",
              method: "get",
              dataType : "JSON",              
              data: {hdrid:hdrid1},
              success: function (data) {

   		            // ---------------------------------- Data val Macro Batas sini ---------------------------------                  
                    $('#problem_id').val(data.problem_id);
                    $('#month_1').val(data.month_1);
                    $('#comment_1').val(data.comment_1);
                    document.getElementById('attach_file_1_label').innerHTML=data.attach_file_1;
                    var a = document.getElementById('attach_file_1_view');
                    if(!data.attach_file_1==''){
                      a.href = "<?php echo base_url('assets/upload/EF/') ?>" + data.attach_file_1;
                    }else{
                      a.removeAttribute("href");
                    };
                    $('#month_2').val(data.month_2);
                    $('#comment_2').val(data.comment_2);
                    document.getElementById('attach_file_2_label').innerHTML=data.attach_file_2;
                    var a = document.getElementById('attach_file_2_view');
                    if(!data.attach_file_2==''){
                      a.href = "<?php echo base_url('assets/upload/EF/') ?>" + data.attach_file_2;
                    }else{
                      a.removeAttribute("href");
                    };
                    $('#month_3').val(data.month_3);
                    $('#comment_3').val(data.comment_3);
                    document.getElementById('attach_file_3_label').innerHTML=data.attach_file_3;
                    var a = document.getElementById('attach_file_3_view');
                    if(!data.attach_file_3==''){
                      a.href = "<?php echo base_url('assets/upload/EF/') ?>" + data.attach_file_3;
                    }else{
                      a.removeAttribute("href");
                    };
                    $('#month_4').val(data.month_4);
                    $('#comment_4').val(data.comment_4);
                    document.getElementById('attach_file_4_label').innerHTML=data.attach_file_4;
                    var a = document.getElementById('attach_file_4_view');
                    if(!data.attach_file_4==''){
                      a.href = "<?php echo base_url('assets/upload/EF/') ?>" + data.attach_file_4;
                    }else{
                      a.removeAttribute("href");
                    };
                    $('#month_5').val(data.month_5);
                    $('#comment_5').val(data.comment_5);
                    document.getElementById('attach_file_5_label').innerHTML=data.attach_file_5;
                    var a = document.getElementById('attach_file_5_view');
                    if(!data.attach_file_5==''){
                      a.href = "<?php echo base_url('assets/upload/EF/') ?>" + data.attach_file_5;
                    }else{
                      a.removeAttribute("href");
                    };
                    $('#month_6').val(data.month_6);
                    $('#comment_6').val(data.comment_6);
                    document.getElementById('attach_file_6_label').innerHTML=data.attach_file_6;
                    var a = document.getElementById('attach_file_6_view');
                    if(!data.attach_file_6==''){
                      a.href = "<?php echo base_url('assets/upload/EF/') ?>" + data.attach_file_6;
                    }else{
                      a.removeAttribute("href");
                    };
                    $('#close_report').val(data.close_report);




                  // ---------------------------------- / Data val Macro  Batas sini ------------------------------

                                                           
                  },
              error: function (e) {
                      alert(e);
                     
                  }
            });
            
            // Disable and button submit dan text form           
            if(status=="View"){
              document.getElementById("btnsubmit").style.visibility = "hidden";  
              $('#exampleModalLabel').text('View Data'); //name view              
            }else{
              $('#exampleModalLabel').text('Edit Data'); //name view 
              $('#btnsubmit').text('Update'); //name Update  
              document.getElementById("btnsubmit").style.visibility = "visible"; 
            }
          
          }

  }

</script>

<script type="text/javascript">

   function Simpan_data($trigger){

          // Form data
          var fdata = new FormData();
          
          // Form data collect name value
          var form_data = $('#quickForm').serializeArray();
          $.each(form_data, function (key, input) {
            fdata.append(input.name, input.value);
          });
          
          // Penanganan jika ada type check Box uncheck
          $('#quickForm input[type="checkbox"]:not(:checked)').each(function(i, e) {           
              fdata.append(e.getAttribute("name"),"Off");
          });

          // Penanganan jika ada type attach file
          $('#quickForm input[type="file"]').each(function(i, e) {     
              // jika ada file attach maka akan ditambahkan  
              if ($('#'+e.getAttribute("name")).val()) {   
                var file_data = $('#'+e.getAttribute("name")).prop('files')[0];
                fdata.append(e.getAttribute("name"),file_data);                            
              }
          });

          // Print_r(file_data);

          // Simpan or Update data          
          var vurl; 
          if($trigger == 'Add') {            
            vurl = "<?php echo base_url('C_effectiveness/ajax_add')?>";
          } else {           
            vurl = "<?php echo base_url('C_effectiveness/ajax_updateef')?>";
          }
                  
          $.ajax({
              url: vurl,
              method: "post",
              processData: false,
              contentType: false,
              data: fdata,
              success: function (data) {
                 
                   // Pesan berhasil
                   berhasil(data.status);
                   // Reset Form
                   $('#quickForm')[0].reset();               
                   // location.reload();
                    tabel.draw();

                   if(!vurl=="Add"){
                     $("#modal-default").modal('hide');
                   }
                 
              },
              error: function (e) {
                  gagal(e);
                  //location.reload();
                  //error
              }
          });

  }


  function Delete_data(){

      // Form data
      var fdata = new FormData();
     
      // Delete by Hdrid
      fdata.append('hdrid',$('#iddelete').text());
      // Url Post delete
      vurl = "<?php echo base_url('C_effectiveness/ajax_delete')?>";

      // Post data
      $.ajax({
          url: vurl,
          method: "post",
          processData: false,
          contentType: false,
          data: fdata,
          success: function (data) {

              // Hide modal delete
              $('#modal-delete').modal('hide');
              // Delete rows datatables
              $('#example1').DataTable().row("#"+$('#iddelete2').text()).remove().draw();
              // Pesan berhasil
              berhasil(data.status);   

          },
          error: function (e) {
              //Pesan Gagal
              gagal(e);             
          }
      });

  }

  function Send_mail(){

    // Url Post delete
    vurl = "<?php echo base_url('C_Email/Send_mail')?>";
    // Form data
    var fdata = new FormData();
    fdata.append('hdrid','Hdrid123');

    // Post data
    $.ajax({
        url: vurl,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function (data) {
        },
        error: function (e) {
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
      view_modal($(this).attr("data-id"),'Edit');
    })
     
    //  HDRID selected  konfirmasiEdit
    $(document).on("click", ".konfirmasiView", function() {   
      view_modal($(this).attr("data-id"),'View');
    })

    // ID Rows selected
    $('#example1').on( 'click', 'tr', function () {
          $('#iddelete2').text($('#example1').DataTable().row( this ).id());             
    } );

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
            "responsive":true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            dom: "lfBrtip",
            buttons: [
            {
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
              customize: function ( xlsx ){
                var sheet = xlsx.xl.worksheets['sheet1.xml'];
                // jQuery selector to add a border
                $( 'row c', sheet ).attr( 's', '25' );
              }
            },
            {
              extend : 'pdfHtml5',             
              className: 'btn btn-danger',
              text: '<i class="fas fa-file-pdf">&nbsp</i> Export Data to PDF',
              orientation : 'landscape',
              pageSize : 'A4',
              download: 'open'
            }
          ],
            "ajax":
            {
                "url": "<?= base_url('C_effectiveness/view_data_where');?>", // URL file untuk proses select datanya
                "type": "POST",
                "data": function(data){     
                  data.searchByFromdate = $('#search_fromdate').val();
                  data.searchByTodate = $('#search_todate').val();
                }

            },
            "deferRender": true,
            "aLengthMenu": [[5, 10,100,1000,10000,100000,1000000,1000000000],[ 5, 10, 100,1000,10000,100000,1000000,"All"]], // Combobox Limit
            "columns": [
               {"data": 'hdrid',"sortable": false, //1
                    render: function (data, type, row, meta) {
                        // return meta.row + meta.settings._iDisplayStart + 1;
                        // return '<div class="btn btn-success btn-sm konfirmasiView" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div> <div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div> <div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
                        mnu='';
                        mnu=mnu+'<div class="btn btn-success btn-sm konfirmasiView" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div>';
                        mnu=mnu+'<div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>'; mnu=mnu + '<div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div>';
                        // <php if ($this->session->userdata('WT202105008Edit'||$this->session->userdata('rolename')=='Administrator')) { ?>
                        //   mnu=mnu+'<div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
                        //   // return '<div class="btn btn-success btn-sm konfirmasiView" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div> <div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div> <div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
                        // <php } if ($this->session->userdata('WT202105008Delete')||$this->session->userdata('rolename')=='Administrator') { ?>
                        //   mnu=mnu + '<div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div>';
                        //   // return '<div class="btn btn-success btn-sm konfirmasiView" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div> ';
                        // <php } ?>
                        
                        return mnu;

                    }  
                },
                
                // ---------------------------------- Datatables Macro Batas sini ---------------------------------
                 
                {"data":"hdrid"},
                {"data":"problem_id"},
                {"data":"month_1"},
                {"data":"comment_1"},
                {"data":"attach_file_1"},
                {"data":"month_2"},
                {"data":"comment_2"},
                {"data":"attach_file_2"},
                {"data":"month_3"},
                {"data":"comment_3"},
                {"data":"attach_file_3"},
                {"data":"month_4"},
                {"data":"comment_4"},
                {"data":"attach_file_4"},
                {"data":"month_5"},
                {"data":"comment_5"},
                {"data":"attach_file_5"},
                {"data":"month_6"},
                {"data":"comment_6"},
                {"data":"attach_file_6"},
                {"data":"close_report"},




                // ---------------------------------- / Datatables Macro Batas sini --------------------------------

            ],


        });

        // Search button
        $('#search').click(function(){

          
            if($('#search_fromdate').val() != '' && $('#search_todate').val() !='')
            {
                tabel.draw();
            }
            else
            {
              gagal("Both Date is Required");
            }

        });


    });
    
</script>


<script type="text/javascript">

    function vreadonly(form,vboolean){
    
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
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>


<script type="text/javascript">

  function handleSelectChange_nik(event) {
 
  //  By Text
  var value = $("#nik option:selected").text();  
  var res = value.split("-");
  // $('#acc_number').val(res[0]);
  $('#name').val(res[1]);

  }

  function handleSelectChange_section(event) {

 //  By Value
  var selectElement = event.target;
  var value = selectElement.value;
  var res = value.split("-");
  // $('#acc_number').val(res[0]);
  // $('#name').val(res[1]);

  }

</script>






