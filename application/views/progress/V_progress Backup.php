
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Progress Form</h1>
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
                               
                                <!-- <php if ($this->session->userdata('DepartmentAdd')||$this->session->userdata('rolename')=='Administrator') { ?>

                                  <a data-toggle="modal" data-target="#modal-default"  Onclick="view_modal('1','Add')" href="#">
                                    <i class="fa fa-plus"></i> Add Data
                                  </a>

                                <php } ?>

                                <php if ($this->session->userdata('DepartmentAdd')||$this->session->userdata('rolename')=='Administrator') { ?>

                                  <a data-toggle="modal" data-target="#modal-import"  href="#">
                                    <i class="fa fa-upload"></i> Import Data
                                  </a>

                                <php } ?> -->

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                     <i class="fa fa-binoculars "></i> Custom Filter
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
                    <th>GROUP PRODUCT ID</th>
                    <th>GROUP PRODUCT NAME</th>
                    <th>CUSTOMER ID</th>
                    <th>CUSTOMER NAME</th>





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
                    <label>GROUP PRODUCT ID</label>
                  </div>
                  <div class="col-md-8">
                    <select class="form-control select2" id="group_product_id" disabled="true" name="group_product_id" onchange="handleSelectChange_group_product_id(event)" style="width: 100%;">
                      <option value='' selected="selected" >-Select-</option>
                      <?php
                        foreach ($group_product as $value) {
                        echo "<option value='$value->hdrid'>$value->hdrid-$value->group_product_name</option>";
                        }
                      ?>
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
                      <input type="text" name="group_product_name" class="form-control" id="group_product_name" readonly >
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
                      <?php
                        foreach ($customer as $value) {
                        echo "<option value='$value->hdrid'>$value->hdrid-$value->customer_name</option>";
                        }
                      ?>
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
                      <input type="text" name="customer_name" class="form-control" id="customer_name" readonly >
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
                                      <label for="hdridres">TRANSACTION ID</label>
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
                                  <select class="form-control select2" id="nikres" name="nik" onchange="handleSelectChange_nikres(event)" style="width: 100%;">
                                      <option value='' selected="selected">-Select-</option>
                                      <?php
                                        foreach ($nik as $value) {
                                        echo "<option value='$value->user_name'>$value->user_name-$value->name</option>";
                                        }
                                      ?>
                                    </select>
                                  </div>
                                        <!-- PIC NAME -->
                                  <div class="col-md-4">
                                    <input type="text" name="name" class="form-control" id="nameres" >
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
                                      <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickerdate_response" data-target-input="nearest">
                                        <input type="text" id="date_response" name="date_response" class="form-control datetimepicker-input" data-target="#timepickerdate_response"/>
                                          <div class="input-group-append" data-target="#timepickerdate_response" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                      <label for="dmia_responsible">DMIA RESPONSIBLE</label>
                                    </div>
                                    <div class="col-md-8">
                                    <select class="form-control select2" id="dmia_responsible" name="dmia_responsible" onchange="handleSelectChange_status_by_responsible(event)" >
                                            <option value="0" selected="selected">-Select-</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No" >No</option> 
                                    </select>
                                    </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                      <label for="statusresponse">STATUS</label>
                                    </div>
                                    <div class="col-md-8">
                                      <input type="text" name="status" class="form-control" id="statusresponse" >
                                    </div>
                                </div>
                              </div>

                              <hr style="border:1px solid red;">

                              <div class="row">
                                <div class="col-md-4">
                               </div>
                               <div class="col-md-4 mb-2">
                                 <h4>Occurence</h4>
                               </div>
                               <div class="col-md-4 mb-2 ">
                                 <h4>Flow Out</h4>
                               </div>
                              </div>

                              <!-- WHY 1 -->
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label for="">Why 1</label>
                                  </div>
                                        <!-- occurance why 1 -->
                                  <div class="col-md-4">
                                      <input type="text" name="occurrence_why_1" class="form-control" id="occurrence_why_1" >
                                  </div>
                                        <!-- flow out why 1 -->
                                  <div class="col-md-4">
                                      <input type="text" name="flow_out_why_1" class="form-control" id="flow_out_why_1" >
                                    </div>
                                </div>
                              </div>

                              <!-- WHY 2 -->
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label for="">Why 2</label>
                                  </div>
                                        <!-- occurance why 2 -->
                                  <div class="col-md-4">
                                      <input type="text" name="occurrence_why_2" class="form-control" id="occurrence_why_2" >
                                  </div>
                                        <!-- flow out why 2 -->
                                  <div class="col-md-4">
                                      <input type="text" name="flow_out_why_2" class="form-control" id="flow_out_why_2" >
                                    </div>
                                </div>
                              </div>

                              <!-- WHY 3 -->
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label for="">Why 3</label>
                                  </div>
                                        <!-- occurance why 3 -->
                                  <div class="col-md-4">
                                      <input type="text" name="occurrence_why_3" class="form-control" id="occurrence_why_3" >
                                  </div>
                                        <!-- flow out why 3 -->
                                  <div class="col-md-4">
                                      <input type="text" name="flow_out_why_3" class="form-control" id="flow_out_why_3" >
                                    </div>
                                </div>
                              </div>

                              <!-- WHY 4 -->
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label for="">Why 4</label>
                                  </div>
                                        <!-- occurance why 4 -->
                                  <div class="col-md-4">
                                      <input type="text" name="occurrence_why_4" class="form-control" id="occurrence_why_4" >
                                  </div>
                                        <!-- flow out why 4 -->
                                  <div class="col-md-4">
                                      <input type="text" name="flow_out_why_4" class="form-control" id="flow_out_why_4" >
                                    </div>
                                </div>
                              </div>

                              <!-- WHY 5 -->
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4">
                                    <label for="">Why 5</label>
                                  </div>
                                        <!-- occurance why 5 -->
                                  <div class="col-md-4">
                                      <input type="text" name="occurrence_why_5" class="form-control" id="occurrence_why_5" >
                                  </div>
                                        <!-- flow out why 5 -->
                                  <div class="col-md-4">
                                      <input type="text" name="flow_out_why_5" class="form-control" id="flow_out_why_5" >
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
                                      <input type="text" name="contermeasur_action" class="form-control" id="contermeasur_action" >
                                    </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                      <label for="verification">VERIFICATION</label>
                                    </div>
                                    <div class="col-md-8">
                                      <input type="text" name="verification" class="form-control" id="verification" >
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
                                      <input type="text" name="implement_actions" class="form-control" id="implement_actions" >
                                    </div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                      <label for="validation_result">VALIDATION RESULT</label>
                                    </div>
                                    <div class="col-md-8">
                                      <input type="text" name="validation_result" class="form-control" id="validation_result" >
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
                                <div class="row">
                                  <div class="col-md-4">
                                    <label for="">YOKOTENKAI </label>
                                  </div>

                                  <div class="col-md-4">
                                        <?php echo form_error('yokotenkai'); ?>
                                    <div class="form-group" >
                                      <div class="icheck-primary d-inline">
                                          <input type="radio" id="yokotenkai" value="yokotenkai" <?php echo form_error('yokotenkai') ?> name="yokotenkai">
                                          <label for="yokotenkai">
                                              YES
                                          </label>
                                      </div>
                                      <div class="icheck-primary d-inline">
                                          <input type="radio" id="yokotenkai2" value="yokotenkai2" <?php echo form_error('yokotenkai') ?> name="yokotenkai">
                                          <label for="yokotenkai2">
                                              NO
                                          </label>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              

                              <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4">
                                      <label for="recommendation">RECOMMENDATION</label>
                                    </div>
                                    <div class="col-md-8">
                                      <input type="text" name="recommendation" class="form-control" id="recommendation" >
                                    </div>
                                </div>
                              </div>


                            



                                
                              </div><!-- ./MODAL CONTAINER -->
                            </div><!-- ./MODAL CARD BODY -->
                              <div class="card-footer">

                                 <div class="btn btn-success btn-sm konfirmasiApprove"  data-id='' data-toggle="modal" data-target="#modal-confirm-approve" id="btnsubmitres"> Approve <i class="far fa-thumbs-up"></i></div>
                                 <div class="btn btn-danger btn-sm konfirmasiReject" data-id='' data-toggle="modal" data-target="#modal-reject" id="btnrejectres"> Reject <i class="far fa-thumbs-down"></i></div>
                                 <div class="btn btn-primary btn-sm konfirmasiSave float-right" data-id='' data-toggle="modal" data-target="#modal-save" id="btnsaveres" onclick="Simpan_datares()" width="auto" > Save Draft <i class="far fa-save"></i></div>

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
                                        <textarea readonly rows="3" type="text" name="statusres" class="form-control" id="statusres" ></textarea>
                                      </div>
                                  </div>
                                </div><hr>
                                
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

                                    <th>TRANSACTION ID</th>
                                    <th>INTERNAL ID</th>
                                    <th>INTERNAL NAME</th>
                                    <th>PRODUCT ID</th>
                                    <th>PRODUCT NAME</th>
                                    <th>CONTACT PERSON NAME</th>
                                    <th>SOURCE INFORMATION ID</th>
                                    <th>SOURCE INFORMATION NAME</th>
                                    <th>CUSTOMER REPORT NUMBER</th>
                                    <th>PART NUMBER</th>
                                    <th>QTY</th>
                                    <th>LOT NUMBER PRODUCT</th>
                                    <th>DETAIL PROBLEM</th>
                                    <th>RESPONSIBLE SECTION</th>
                                    <th>CONTAINMENT DATE</th>
                                    <th>NIK</th>
                                    <th>NAME</th>
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

                                  
                                  <!-- <th>TRANSACTION ID</th> -->
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
                                    <label for="hdridef">TRANSACTION ID</label>
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
                                    <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickermonth_1" data-target-input="nearest">
                                      <input type="text" id="month_1" name="month_1" class="form-control datetimepicker-input" data-target="#timepickermonth_1"/>
                                        <div class="input-group-append" data-target="#timepickermonth_1" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                  </div>

                                  <!-- Comment 1 -->
                                  <div class="col-md-3">
                                    <input type="text" name="comment_1" class="form-control" id="comment_1" >
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
                                    <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickermonth_2" data-target-input="nearest">
                                      <input type="text" id="month_2" name="month_2" class="form-control datetimepicker-input" data-target="#timepickermonth_2"/>
                                        <div class="input-group-append" data-target="#timepickermonth_2" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                  </div>

                                  <!-- Comment 2 -->
                                  <div class="col-md-3">
                                    <input type="text" name="comment_2" class="form-control" id="comment_2" >
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
                                    <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickermonth_3" data-target-input="nearest">
                                      <input type="text" id="month_3" name="month_3" class="form-control datetimepicker-input" data-target="#timepickermonth_3"/>
                                        <div class="input-group-append" data-target="#timepickermonth_3" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                  </div>

                                  <!-- Comment 3 -->
                                  <div class="col-md-3">
                                    <input type="text" name="comment_3" class="form-control" id="comment_3" >
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
                                    <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickermonth_4" data-target-input="nearest">
                                      <input type="text" id="month_4" name="month_4" class="form-control datetimepicker-input" data-target="#timepickermonth_4"/>
                                        <div class="input-group-append" data-target="#timepickermonth_4" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                  </div>

                                  <!-- Comment 4 -->
                                  <div class="col-md-3">
                                    <input type="text" name="comment_4" class="form-control" id="comment_4" >
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
                                    <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickermonth_5" data-target-input="nearest">
                                      <input type="text" id="month_5" name="month_5" class="form-control datetimepicker-input" data-target="#timepickermonth_5"/>
                                        <div class="input-group-append" data-target="#timepickermonth_5" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                  </div>

                                  <!-- Comment 5 -->
                                  <div class="col-md-3">
                                    <input type="text" name="comment_5" class="form-control" id="comment_5" >
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
                                    <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickermonth_6" data-target-input="nearest">
                                      <input type="text" id="month_6" name="month_6" class="form-control datetimepicker-input" data-target="#timepickermonth_6"/>
                                        <div class="input-group-append" data-target="#timepickermonth_6" data-toggle="datetimepicker">
                                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                  </div>

                                  <!-- Comment 6 -->
                                  <div class="col-md-3">
                                    <input type="text" name="comment_6" class="form-control" id="comment_6" >
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
                                    <input type="text" name="close_report" class="form-control" id="close_report" >
                                  </div>
                              </div>
                            </div>


                                
                              </div><!-- ./MODAL CONTAINER -->
                            </div><!-- ./MODAL CARD BODY -->
                              <div class="card-footer">

                                 <div class="btn btn-success btn-sm konfirmasiApprove"  data-id='' data-toggle="modal" data-target="#modal-confirm-approve" id="btnsubmitef"> Approve <i class="far fa-thumbs-up"></i></div>
                                 <div class="btn btn-danger btn-sm konfirmasiReject" data-id='' data-toggle="modal" data-target="#modal-reject" id="btnrejectef"> Reject <i class="far fa-thumbs-down"></i></div>
                                 <div class="btn btn-primary btn-sm konfirmasiSave float-right" data-id='' data-toggle="modal" data-target="#modal-save" id="btnsaveef" onclick="Simpan_dataef()" width="auto" > Save Draft <i class="far fa-save"></i></div>

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
                                        <textarea readonly rows="3" type="text" name="statusef" class="form-control" id="statusef" ></textarea>
                                      </div>
                                  </div>
                                </div><hr>
                                
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
                    <button type="submit" class="btn btn-primary" id="btnsubmit">Save</button>                 
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
               
              <form method="POST" action="<?php echo base_url('C_progress/import'); ?>" enctype="multipart/form-data">

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
           Simpan_dataef("Update");
           Simpan_datares("Update");

        }else{

          berhasil(status);

        }

      }
    });
    
    $('#quickForm').validate({
      rules: {

				// ---------------------------------- Rule input Macro Batas sini 1---------------------------------
        progress_name: {
        required: true,
        },

        




        // ---------------------------------- / Rule input Macro Batas sini 1--------------------------------

      },
      messages: {
    
				// ---------------------------------- Rule input Macro Batas sini 2---------------------------------
        progress_name: {
        required: "Please Input progress_name",
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
              url: "<?php echo base_url('C_progress/ajax_getbyhdrid')?>",
              method: "get",
              dataType : "JSON",              
              data: {hdrid:hdrid1},
              success: function (data) {

   		            // ---------------------------------- Data val Macro Batas sini ---------------------------------                  
                   
                    // Tabel Detail Problem
                    $('#internal_id').select2().val(data.internal_id).trigger('change');
                    $('#internal_name').val(data.internal_name);
                    $('#group_product_id').select2().val(data.group_product_id).trigger('change');
                    $('#group_product_name').val(data.group_product_name);
                    $('#product_id').select2().val(data.product_id).trigger('change');
                    $('#product_name').val(data.product_name);
                    $('#customer_id').select2().val(data.customer_id).trigger('change');
                    $('#customer_name').val(data.customer_name);
                    $('#contact_person_name').val(data.contact_person_name);
                    $('#source_information_id').select2().val(data.source_information_id).trigger('change');
                    $('#source_information_name').val(data.source_information_name);
                    $('#customer_report_number').val(data.customer_report_number);
                    $('#part_number').val(data.part_number);
                    $('#qty').val(data.qty);
                    $('#lot_number_product').val(data.lot_number_product);
                    $('#detail_problem').val(data.detail_problem);
                    $('#responsible_section').val(data.responsible_section);
                    $('#containment_date').val(data.containment_date);
                    $('#nik').select2().val(data.nik).trigger('change');
                    $('#name').val(data.name);
                    $('#report_date').val(data.report_date);
                    $('#status').val(data.status);


                       //  Refresh detail problem
                    tabel2.draw();

                    // Akhir Detail Problem


                    // Tabel Approval

                    $('#problem_id').val(data.problem_id);
                    $('#nik').select2().val(data.nik).trigger('change');
                    $('#name').val(data.name);
                    $('#department_code').select2().val(data.department_code).trigger('change');
                    $('#department_name').val(data.department_name);
                    $('#office_email').val(data.office_email);
                    $('#position_code').select2().val(data.position_code).trigger('change');
                    $('#position_name').val(data.position_name);
                    $('#date_approve').val(data.date_approve);

                        // // Refresh detail approval
                    tabel3.draw();

                    // Akhir Tabel Approval



                    // Akhir Tabel Effectiveness


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
            vurl = "<?php echo base_url('C_progress/ajax_add')?>";
          } else {           
            vurl = "<?php echo base_url('C_progress/ajax_updateef')?>";
            vurl = "<?php echo base_url('C_progress/ajax_updateres')?>";
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
      vurl = "<?php echo base_url('C_progress/ajax_delete')?>";

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

      // EF Form
    $('#efform')[0].reset();  
    view_modalef($(this).attr("data-id"),'Edit');

    // RES Form
    $('#resform')[0].reset();  
    view_modalres($(this).attr("data-id"),'Edit');
    })
     
    //  HDRID selected  konfirmasiView
    $(document).on("click", ".konfirmasiView", function() {   
      view_modal($(this).attr("data-id"),'View');

      // EF Form
    $('#efform')[0].reset(); 
    view_modalef($(this).attr("data-id"),'View');
    
     // RES Form
     $('#resform')[0].reset(); 
    view_modalres($(this).attr("data-id"),'View');
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
    var tabel2 = null;
    var tabel3 = null;
   
    
    $(document).ready(function() {

      // Tabel problem
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
                "url": "<?= base_url('C_progress/view_data_where');?>", // URL file untuk proses select datanya
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
                        mnu=mnu+'<div class="btn btn-success btn-sm konfirmasiView mr-2" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye "></i></div>';
                        mnu=mnu+'<div class="btn btn-primary btn-sm konfirmasiEdit mr-2" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>'; mnu=mnu + '<div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div>';
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
                {"data":"group_product_id"},
                {"data":"group_product_name"},
                {"data":"customer_id"},
                {"data":"customer_name"},

                



                // ---------------------------------- / Datatables Macro Batas sini --------------------------------

            ],


        });

        // Tabel Detail Problem
      tabel2 = $('#detailProblem').DataTable({
          "processing": true,
          "responsive":true,
          "serverSide": true,
          "autowidth" : false,
          "info":true,
          "ordering": true, // Set true agar bisa di sorting
          "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
          "ajax":
          {
              "url": "<?= base_url('C_progress/view_data_whereprobs');?>", // URL file untuk proses select datanya
              "type": "POST",
              "data": function(data){     
                data.searchByFromdate = $('#search_fromdate').val();
                data.searchByTodate = $('#search_todate').val();
                data.hdrid = $('#hdrid').val();
                // data.hdrid = 'R-3A16-01305';
                
              }

          },
          "deferRender": true,
          "aLengthMenu": [[5, 10,100,1000,10000,100000,1000000,1000000000],[ 5, 10, 100,1000,10000,100000,1000000,"All"]], // Combobox Limit        
          "columns": [

                {"data":"hdrid"},
                {"data":"internal_id"},
                {"data":"internal_name"},
                {"data":"product_id"},
                {"data":"product_name"},
                {"data":"contact_person_name"},
                {"data":"source_information_id"},
                {"data":"source_information_name"},
                {"data":"customer_report_number"},
                {"data":"part_number"},
                {"data":"qty"},
                {"data":"lot_number_product"},
                {"data":"detail_problem"},
                {"data":"responsible_section"},
                {"data":"containment_date"},
                {"data":"nik"},
                {"data":"name"},
                {"data":"report_date"},
                {"data":"status"},
                            
          ],
      });



      // Table Approber

      tabel3 = $('#detailApproval').DataTable({
          "processing": true,
          "responsive":true,
          "serverSide": true,
          "autowidth" : false,
          "info":true,
          "ordering": true, // Set true agar bisa di sorting
          "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
          "ajax":
          {
              "url": "<?= base_url('C_progress/view_data_whereapproval ');?>", // URL file untuk proses select datanya             
              "type": "POST",
              "data": function(data){     
                // data.searchByFromdate = $('#search_fromdate').val();
                // data.searchByTodate = $('#search_todate').val();
                // alert($('#hdrid').val());
                data.hdrid = $('#hdrid').val();
                // data.hdrid = 'R-3A16-01305';
                
              }

          },
          "deferRender": true,
          "aLengthMenu": [[5, 10,100,1000,10000,100000,1000000,1000000000],[ 5, 10, 100,1000,10000,100000,1000000,"All"]], // Combobox Limit        
          "columns": [

                
                {"data":"problem_id"},
                {"data":"nik"},
                {"data":"name"},
                {"data":"department_code"},
                {"data":"department_name"},
                {"data":"office_email"},
                {"data":"position_code"},
                {"data":"position_name"},
                {"data":"date_approve"},
               
                            
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

  function handleSelectChange_nikres(event) {
 
 //  By Text
 var value = $("#nikres option:selected").text();  
 var res = value.split("-");
 // $('#acc_number').val(res[0]);
 $('#nameres').val(res[1]);

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




<!-- Function untuk handle selected data by ID / onchange-->

<script type="text/javascript">


function handleSelectChange_group_product_id(event) {

 var data = $('#group_product_id').select2('data')[0].text;
 
 if (data=='-Select-'){
   $('#group_product_name').val('');   
 }else{
   var res = data.split("-");
   $('#group_product_name').val(res[1]);
 };

}



function handleSelectChange_customer_id(event) {

 var data = $('#customer_id').select2('data')[0].text;

 if (data=='-Select-'){
   $('#customer_name').val('');   
 }else{
   var res = data.split("-");
   $('#customer_name').val(res[1]);
 };

}


// NOTE:: BELUM FIX
function handleSelectChange_status_by_responsible(event) {

var data = $('#dmia_responsible').select2('data')[0].text;

if (data=='-Select-'){
  $('#statusresponse').val('');   
}else if(data=='Yes'){
  $('#statusresponse').val('Open')[1];
}else{
  $('#statusresponse').val('Close')[1];
};

}



</script>

<!-- AKHIR FUNCTION ONCHANGE -->



<!-- Function View Modal Ef -->

<script type="text/javascript">

  
  // view form ef
function view_modalef(hdrid1,status){

// let str =hdrid1;
// const myArr = str.split("#");
// hdrid1=myArr[0];

$('#hdrid').val(hdrid1);
var hdrid=hdrid1;

// Setting data-id pada button approve dan reject
$('#btnsubmitef').attr('data-id' , hdrid + '#' + '1' + '#' + '<?php echo $this->session->userdata('user_name') ?>');
$('#btnrejectef').attr('data-id' , hdrid + '#' + '1' + '#' + '<?php echo $this->session->userdata('user_name') ?>');

  // Cari apakah sebagai approval EF , jika approval muncul tombol approve
  $.ajax({
    url: "<?php echo base_url('C_progress/view_data_positionpic')?>",
    method: "get",
    dataType : "JSON",              
    data: {hdrid:hdrid1,Approval1:'Approval 1',Approval2:'Approval 2'},

    success: function (data) {

      // if (data.status=='Ada'){               
      //   $("#btnsubmitef").show();
      //   $("#btnrejectef").show();
      // }else{
      //   $("#btnsubmitef").hide();
      //   $("#btnrejectef").hide();
      // }

    },          
    error: function (e) {
            alert(e);                   
        }
  });

  // Tampilkan data

  $.ajax({
    url: "<?php echo base_url('C_progress/ajax_getEftbyhdrid')?>",
    method: "get",
    dataType : "JSON",              
    data: {hdrid:hdrid1},
    success: function (data) {
     
    

      $('#hdridef').val(data.hdrid);
      $('#problem_idef').val(data.problem_id);
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
    

      if (data.status_approve_ef=='Rejected'){
          $('#status').val('Rejected by '+ data.name_rejected_ef + ' reason ' + data.reason_rejected_ef); 
      }else{
          $('#status').val(data.status_approve_ef); 
      }

      // Jika belum close pengisian user belum bisa approve
      // if (data.statusef!=='Close'){
      //     $("#btnsubmitef").hide();
      //     $("#btnrejecttef").hide();              
      // }


    
    
        },
    error: function (e) {
            alert(e);
            
        }
    });

}



</script>


<!-- Function Update Data Effectiveness -->
<script type="text/javascript">
  function Simpan_dataef($trigger){

    // Form data
    var fdata = new FormData();

          
          // Form data collect name value
          var form_data = $('#efform').serializeArray();
          $.each(form_data, function (key, input) {
            fdata.append(input.name, input.value);
          });
          
          // Penanganan jika ada type check Box uncheck
          $('#efform input[type="checkbox"]:not(:checked)').each(function(i, e) {           
              fdata.append(e.getAttribute("name"),"Off");
          });

          // Penanganan jika ada type attach file
          $('#efform input[type="file"]').each(function(i, e) {     
              // jika ada file attach maka akan ditambahkan  
              if ($('#'+e.getAttribute("name")).val()) {   
                var file_data = $('#'+e.getAttribute("name")).prop('files')[0];
                fdata.append(e.getAttribute("name"),file_data);                            
              }
          });

    // Simpan or Update data
        $.ajax({
        url: "<?php echo base_url('C_progress/ajax_updateef')?>",
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function (data) {
          
            $('#modal-default').modal('hide');
            // Pesan berhasil
            berhasil(data.status);
            // Reset Form
            $('#efform')[0].reset();               
            // // location.reload();
            tabel.draw();
          
        },
        error: function (e) {
            gagal(e);
            //location.reload();
            //error
        }
    });

      }

     

$.validator.setDefaults({
  submitHandler: function () {
    
    //berhasil( "Form successful submitted!" );
    var status=$('#exampleModalLabel').text();
  
    if (status=="Add Data"){
      // Ajax insert data
      Simpan_dataef("Add");
    }else if(status=="Edit Data"){
      // Ajax update data
      Simpan_dataef("Update");
    }else{
      berhasil(status);
    }

  }
});
  
     
</script>













<!-- Function View Modal Respose -->

<script type="text/javascript">

  
  // view form Res
function view_modalres(hdrid1,status){

// let str =hdrid1;
// const myArr = str.split("#");
// hdrid1=myArr[0];

$('#hdrid').val(hdrid1);
var hdrid=hdrid1;

// Setting data-id pada button approve dan reject
$('#btnsubmitres').attr('data-id' , hdrid + '#' + '1' + '#' + '<?php echo $this->session->userdata('user_name') ?>');
$('#btnrejectres').attr('data-id' , hdrid + '#' + '1' + '#' + '<?php echo $this->session->userdata('user_name') ?>');

  // Cari apakah sebagai approval EF , jika approval muncul tombol approve
  $.ajax({
    url: "<?php echo base_url('C_progress/view_data_positionpic')?>",
    method: "get",
    dataType : "JSON",              
    data: {hdrid:hdrid1,Approval1:'Approval 1',Approval2:'Approval 2'},

    success: function (data) {

      // if (data.status=='Ada'){               
      //   $("#btnsubmitef").show();
      //   $("#btnrejectef").show();
      // }else{
      //   $("#btnsubmitef").hide();
      //   $("#btnrejectef").hide();
      // }

    },          
    error: function (e) {
            alert(e);                   
        }
  });

  $('input[type=radio][name=problem_name]').change(function() {
            if (this.value == 'internal') {
                $('#quickForm').rules('remove');
            }
            else if (this.value == 'external') {
                
            }
        });

        // OnClick Yokotenkai disable/enable recomendation field
        $('input[type=radio][name=yokotenkai]').change(function() {
          if(this.value == 'yokotenkai2'){
            $("#recommendation").attr("disabled","disabled").val('');
          }else if(this.value =='yokotenkai'){
            $("#recommendation").removeAttr("disabled").val('');
            $("#recommendation").removeAttr("hidden").val('');
          }
        });

    
  // Tampilkan data

  $.ajax({
    url: "<?php echo base_url('C_progress/ajax_getResbyhdrid')?>",
    method: "get",
    dataType : "JSON",              
    data: {hdrid:hdrid1},
    success: function (data) {
     
    

      $('#hdridres').val(data.hdrid);
      $('#problem_idres').val(data.problem_id);
      $('#containment_other_action').val(data.containment_other_action);
      document.getElementById('attach_file_1_label_res').innerHTML=data.attach_file_1_res;
      var a = document.getElementById('attach_file_1_view_res');
      if(!data.attach_file_1_res==''){
        a.href = "<?php echo base_url('assets/upload/RES/') ?>" + data.attach_file_1_res;
      }else{
        a.removeAttribute("href");
      };
      document.getElementById('attach_file_2_label_res').innerHTML=data.attach_file_2_res;
      var a = document.getElementById('attach_file_2_view_res');
      if(!data.attach_file_2_res==''){
        a.href = "<?php echo base_url('assets/upload/RES/') ?>" + data.attach_file_2_res;
      }else{
        a.removeAttribute("href");
      };
      document.getElementById('attach_file_3_label_res').innerHTML=data.attach_file_3_res;
      var a = document.getElementById('attach_file_3_view_res');
      if(!data.attach_file_3_res==''){
        a.href = "<?php echo base_url('assets/upload/RES/') ?>" + data.attach_file_3_res;
      }else{
        a.removeAttribute("href");
      };
      $('#nikres').select2().val(data.nik).trigger('change');
      $('#nameres').val(data.name);
      $('#date_response').val(data.date_response);
      $('#dmia_responsible').select2().val(data.dmia_responsible).trigger('change');
      $('#statusresponse').val(data.status);
      // $('#dmia_responsible').val(data.dmia_responsible);

  
    //  Hide form dibawahnya jika status close
     if(data.status=='Close'){
      document.getElementById('occurrence_why_1').hidden=true;
      document.getElementById('flow_out_why_1').hidden=true;
      document.getElementById('occurrence_why_2').hidden=true;
      document.getElementById('flow_out_why_2').hidden=true;
      document.getElementById('occurrence_why_3').hidden=true;
      document.getElementById('flow_out_why_3').hidden=true;
      document.getElementById('occurrence_why_4').hidden=true;
      document.getElementById('flow_out_why_4').hidden=true;
      document.getElementById('occurrence_why_5').hidden=true;
      document.getElementById('flow_out_why_5').hidden=true;
      document.getElementById('contermeasur_action').hidden=true;
      document.getElementById('verification').hidden=true;
      document.getElementById('verification_attach_label').hidden=true;
      document.getElementById('verification_attach_view').hidden=true;
      document.getElementById('implement_actions').hidden=true;
      document.getElementById('validation_result').hidden=true;
      document.getElementById('validation_attach_label').hidden=true;
      document.getElementById('validation_attach_view').hidden=true;
      document.getElementById('yokotenkai').hidden=true;
      document.getElementById('recommendation').hidden=true;
     }else{
      document.getElementById('occurrence_why_1').hidden=false;
      document.getElementById('flow_out_why_1').hidden=false;
      document.getElementById('occurrence_why_2').hidden=false;
      document.getElementById('flow_out_why_2').hidden=false;
      document.getElementById('occurrence_why_3').hidden=false;
      document.getElementById('flow_out_why_3').hidden=false;
      document.getElementById('occurrence_why_4').hidden=false;
      document.getElementById('flow_out_why_4').hidden=false;
      document.getElementById('occurrence_why_5').hidden=false;
      document.getElementById('flow_out_why_5').hidden=false;
      document.getElementById('contermeasur_action').hidden=false;
      document.getElementById('verification').hidden=false;
      document.getElementById('verification_attach_label').hidden=false;
      document.getElementById('verification_attach_view').hidden=false;
      document.getElementById('implement_actions').hidden=false;
      document.getElementById('validation_result').hidden=false;
      document.getElementById('validation_attach_label').hidden=false;
      document.getElementById('validation_attach_view').hidden=false;
      document.getElementById('yokotenkai').hidden=false;
      document.getElementById('recommendation').hidden=false;
     }


      $('#occurrence_why_1').val(data.occurrence_why_1);
      $('#flow_out_why_1').val(data.flow_out_why_1);
      $('#occurrence_why_2').val(data.occurrence_why_2);
      $('#flow_out_why_2').val(data.flow_out_why_2);
      $('#occurrence_why_3').val(data.occurrence_why_3);
      $('#flow_out_why_3').val(data.flow_out_why_3);
      $('#occurrence_why_4').val(data.occurrence_why_4);
      $('#flow_out_why_4').val(data.flow_out_why_4);
      $('#occurrence_why_5').val(data.occurrence_why_5);
      $('#flow_out_why_5').val(data.flow_out_why_5);
      $('#contermeasur_action').val(data.contermeasur_action);
      $('#verification').val(data.verification);
      document.getElementById('verification_attach_label').innerHTML=data.verification_attach;
      var a = document.getElementById('verification_attach_view');
      if(!data.verification_attach==''){
        a.href = "<?php echo base_url('assets/upload/RES/') ?>" + data.verification_attach;
      }else{
        a.removeAttribute("href");
      };
      $('#implement_actions').val(data.implement_actions);
      $('#validation_result').val(data.validation_result);
      document.getElementById('validation_attach_label').innerHTML=data.validation_attach;
      var a = document.getElementById('validation_attach_view');
      if(!data.validation_attach==''){
        a.href = "<?php echo base_url('assets/upload/RES/') ?>" + data.validation_attach;
      }else{
        a.removeAttribute("href");
      };

     if(data.yokotenkai=='yokotenkai'){
        document.getElementById('yokotenkai').checked=true;
      }else if(data.yokotenkai=='yokotenkai2')
      {
        document.getElementById('yokotenkai2').checked=true;
        document.getElementById('recommendation').hidden=true;
      }
      else
      {
        document.getElementById('yokotenkai').checked=false;
        document.getElementById('yokotenkai2').checked=false;
      }
      $('#recommendation').val(data.recommendation);


      // Jika belum close pengisian user belum bisa approve
      // if (data.statusres!=='Close'){
      //     $("#btnsubmitres").hide();
      //     $("#btnrejecttres").hide();              
      // }


    
    
        },
    error: function (e) {
            alert(e);
            
        }
    });

}



</script>


<!-- Function Update Data Effectiveness -->
<script type="text/javascript">
  function Simpan_datares($trigger){

    // Form data
    var fdata = new FormData();

          
          // Form data collect name value
          var form_data = $('#resform').serializeArray();
          $.each(form_data, function (key, input) {
            fdata.append(input.name, input.value);
          });
          
          // Penanganan jika ada type check Box uncheck
          $('#resform input[type="checkbox"]:not(:checked)').each(function(i, e) {           
              fdata.append(e.getAttribute("name"),"Off");
          });

         
          // Penanganan jika ada type attach file
          $('#resform input[type="file"]').each(function(i, e) {     
              // jika ada file attach maka akan ditambahkan  
              if ($('#'+e.getAttribute("name")).val()) {   
                var file_data = $('#'+e.getAttribute("name")).prop('files')[0];
                fdata.append(e.getAttribute("name"),file_data);                            
              }
          });

    // Simpan or Update data
        $.ajax({
        url: "<?php echo base_url('C_progress/ajax_updateres')?>",
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function (data) {
          
            $('#modal-default').modal('hide');
            // Pesan berhasil
            berhasil(data.status);
            // Reset Form
            $('#resform')[0].reset();               
            // // location.reload();
            tabel.draw();
          
        },
        error: function (e) {
            gagal(e);
            //location.reload();
            //error
        }
    });

      }

    

$.validator.setDefaults({
  submitHandler: function () {
    
    //berhasil( "Form successful submitted!" );
    var status=$('#exampleModalLabel').text();
  
    if (status=="Add Data"){
      // Ajax insert data
      Simpan_datares("Add");
    }else if(status=="Edit Data"){
      // Ajax update data
      Simpan_datares("Update");
    }else{
      berhasil(status);
    }

  }
});
  


</script>