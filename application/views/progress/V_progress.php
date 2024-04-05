<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Progress Form </h1>
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

        <div class="col-12">
          <!-- .col -->

          <div class="card">
            <!-- .card -->

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

                                <div class="input-group date" data-date-format="YYYY-MM-DD" id="startdate" data-target-input="nearest">
                                  <input type="text" id="search_fromdate" class="form-control datetimepicker-input" data-target="#startdate" />
                                  <div class="input-group-append" data-target="#startdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>

                              </div>

                              <!-- Date To-->
                              <div class="form-group">
                                <label>Date To:</label>
                                <div class="input-group date" data-date-format="YYYY-MM-DD" id="enddate" data-target-input="nearest">
                                  <input type="text" id="search_todate" class="form-control datetimepicker-input" data-target="#enddate" />
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

            <div class="card-body">
              <!-- .card-body -->

              <table id="example1" class="table table-bordered display nowrap table-striped">

                <thead>

                  <tr>

                    <!-- Th Macro Batas Sini -->

                    <!-- <th>ACTION</th>
                    <th>REPORT NO.</th>
                    <th>DUE DATE</th>
                    <th>STATUS TRANSACTION</th>
                    <th>GROUP PRODUCT NAME</th>
                    <th>PROBLEM NAME</th>
                    <th>CUSTOMER NAME</th> -->

                    <th>ACTION</th>
                    <th>ISSUE NO.</th>
                    <th>ISSUE DATE</th>
                    <th>REPORT DATE</th>    
                    <th>PIC</th>
                    <th>RANK</th>
                    <th>PROBLEM</th>
                    <th>COMMENT</th>
                    <th>PROBLEM CATEGORY NAME</th>
                    <th>PRODUCT NAME</th>                 
                    <th>DETAIL PROBLEM</th>        
                    <th>STATUS TRANSACTION</th>
                    <th>STATUS</th>

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
                <select class="form-control select2" id="group_product_id" disabled="true" name="group_product_id" onchange="handleSelectChange_group_product_id(event)" style="width: 100%;">
                  <option value='' selected="selected">-Select-</option>
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
                <input type="text" name="customer_name" class="form-control" id="customer_name" readonly>
              </div>
            </div>
          </div>

      </form>

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

                        <!-- <select class="form-control" id="containment_other_action" name="containment_other_action">
                          <option value="0">-Select-</option>
                          <option value="Hold Product">Hold Product</option>
                          <option value="Line Stop">Line Stop</option>
                          <option value="Change Lot">Change Lot</option>
                          <option value="Repair">Repair equip/tools/machine</option>
                          <option value="Sorting">Sorting 100%</option>
                          <option value="Others">Others</option>
                        </select> -->

                         <textarea class="form-control" rows="5" name="containment_other_action" id="containment_other_action" placeholder="Enter ..."></textarea>


                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="attach_file_1_res">ATTACH FILE 1 (.pdf)</label>
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
                        <label for="attach_file_2_res">ATTACH FILE 2 (.pdf)</label>
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
                        <label for="attach_file_3_res">ATTACH FILE 3 (.pdf)</label>
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
                      <label for="">RECEIVED FAILED PART</label>
                    </div>

                    <div class="col-md-8">
                      <div class="form-group" clearfix>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="received_failed_part" value="received_failed_part" name="received_failed_part" class="form-control">
                          <label for="received_failed_part">
                            YES
                          </label>
                        </div>
                        <div class="icheck-primary d-inline">
                          <input type="radio" id="received_failed_part2" value="received_failed_part2" name="received_failed_part" class="form-control">
                          <label for="received_failed_part2">
                            NO
                          </label>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4">
                        <label for="investigation_activity">INVESTIGATION ACTIVITY</label>
                      </div>
                      <div class="col-md-8">

                         <textarea class="form-control" rows="5" name="investigation_activity" id="investigation_activity" placeholder="Enter ..."></textarea>

                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label for="investigation_attach">INVESTIGATION ATTACH (.pdf)</label>
                    </div>
                    <div class="col-md-1">
                      <a class="btn btn-success" id="investigation_attach_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                    </div>
                    <div class="col-md-7">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="investigation_attach" multiple="" name="investigation_attach">
                        <label class="custom-file-label" for="investigation_attach" id="investigation_attach_label">Choose file</label>
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

                    <hr style="border:1px solid red;">

                    <div class="row ">
                      <div class="col-md mb-2 ">
                        <h4 class="text-center" id="occurencelabel">OCCURENCE</h4>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md mb-12">
                        <h6 class="">ROOT CAUSE</h6>
                      </div>
                    </div>

                    <!-- WHY 1 -->
                    <div class="form-group">
                      
                      <div class="row">
                         <div class="col-md-12">
                            <textarea class="form-control" rows="5" name="occurrence_why_1" id="occurrence_why_1" placeholder="Enter ..."></textarea>
                         </div>
                      </div>

                      <div class="row">
                        <div class="col-md mb-12">
                           <h6 class="">COUNTERMEASURE</h6>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <textarea class="form-control" rows="5" name="occurrence_prevention_1" id="occurrence_prevention_1" placeholder="Enter ..."></textarea>
                         </div>
                      </div>

                      <div class="row">
                         <div class="col-md-12">
                           <h6 class="">DATE</h6>
                        </div>
                      </div> 


                      <div class="row">
                        <div class="col-md-4">
                            <div class="input-group date" data-date-format="YYYY-MM-DD" id="timepickeroccurrence_date_1" data-target-input="nearest">
                              <input type="text" id="occurrence_date_1" name="occurrence_date_1" class="form-control datetimepicker-input" data-target="#timepickeroccurrence_date_1" />
                              <div class="input-group-append" data-target="#timepickeroccurrence_date_1" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                            </div>
                         </div>
                      </div>

                    </div>

                     <div class="form-group">
                        <div class="row">
                          <div class="col-md-1">
                            <a class="btn btn-success" id="attach_file_occurence_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                          </div>
                          <div class="col-md-4">
                            <label for="attach_file_occurence">OCCURENCE ATTACH (.pdf)</label>
                          </div>
                          <div class="col-md-7">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="attach_file_occurence" multiple="" name="attach_file_occurence">
                              <label class="custom-file-label" for="attach_file_occurence" id="attach_file_occurence_label">Choose file</label>
                            </div>
                          </div>
                        </div>
                      </div>


                    <!-- WHY 2 -->
                    <div class="form-group" hidden>
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
                    <div class="form-group" hidden>
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
                    <div class="form-group" hidden>
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
                    <div class="form-group" hidden>
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

                  <div id="showHideForm">

                    <hr style="border:1px solid red;">

                    <div class="row ">
                      <div class="col-md mb-2 ">
                        <h4 class="text-center">FLOW OUT</h4>
                      </div>
                    </div>

                    <!-- WHY 1 -->
                    <div class="form-group">
                      
                      <div class="row">
                          <div class="col-md-12">
                            <h6 class="">ROOT CAUSE</h6>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-12">
                            <textarea class="form-control" rows="5" name="flow_out_why_1" id="flow_out_why_1" placeholder="Enter ..."></textarea>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-12">
                             <h6 class="">COUNTERMEASURE</h6>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-12">
                            <textarea class="form-control" rows="5" name="flow_out_prevention_1" id="flow_out_prevention_1" placeholder="Enter ..."></textarea>
                          </div>
                      </div>

                      <div class="row">
                          <div class="col-md-12">
                             <h6 class="">DATE</h6>
                          </div>
                      </div>

                      <div class="row">
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
                    <div class="form-group" hidden>
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
                    <div class="form-group" hidden>
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
                    <div class="form-group" hidden>
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
                    <div class="form-group" hidden>
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

                    <div class="form-group" hidden>
                      <div class="row">
                        <div class="col-md-4">
                          <label for="contermeasur_action">COUNTERMEASURE ACTION</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" name="contermeasur_action" class="form-control" id="contermeasur_action">
                        </div>
                      </div>
                    </div>

                    <div class="form-group" hidden>
                      <div class="row">
                        <div class="col-md-4">
                          <label for="verification">VERIFICATION</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" name="verification" class="form-control" id="verification">
                        </div>
                      </div>
                    </div>

                    <div class="form-group" >
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

                    <div class="form-group" hidden>
                      <div class="row">
                        <div class="col-md-4">
                          <label for="implement_actions">IMPLEMENT ACTIONS</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" name="implement_actions" class="form-control" id="implement_actions">
                        </div>
                      </div>
                    </div>

                    <div class="form-group" hidden>
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
                          <?php echo form_error('yokotenkai'); ?>
                          <div class="form-group">
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="yokotenkai" value="yokotenkai" <?php echo form_error('yokotenkai') ?> name="yokotenkai" class="yokotenkai">
                              <label for="yokotenkai">
                                YES
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="yokotenkai2" value="yokotenkai2" <?php echo form_error('yokotenkai') ?> name="yokotenkai" class="yokotenkai">
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
                              <input type="radio" id="yokotenkai_other_section" value="yokotenkai_other_section" <?php echo form_error('yokotenkai_other_section') ?> name="yokotenkai_other_section" class="yokotenkai_other_section">
                              <label for="yokotenkai_other_section">
                                YES
                              </label>
                            </div>
                            <div class="icheck-primary d-inline">
                              <input type="radio" id="yokotenkai_other_section2" value="yokotenkai_other_section2" <?php echo form_error('yokotenkai_other_section') ?> name="yokotenkai_other_section" class="yokotenkai_other_section">
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
                          <select class="form-control select2" id="nik_2" name="nik_2" onchange="handleSelectChange_nik2(event)" style="width: 100%;">
                            <option value='' selected="selected">-Select-</option>
                            <?php
                            foreach ($nik_2 as $value) {
                              echo "<option value='$value->user_name'>$value->user_name-$value->name-$value->department_name</option>";
                            }
                            ?>
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

                      <div class="btn btn-success btn-sm konfirmasiApprove" data-id='' data-toggle="modal" data-target="#modal-confirm-approve" id="btnsubmitres" hidden> Approve <i class="far fa-thumbs-up"></i></div>
                      <div class="btn btn-danger btn-sm konfirmasiReject" data-id='' data-toggle="modal" data-target="#modal-reject" id="btnrejectres" hidden> Reject <i class="far fa-thumbs-down"></i></div>
                      <div class="btn btn-primary btn-sm konfirmasiSave float-right" data-id='' data-toggle="modal" data-target="#modal-save" id="btnsaveres" onclick="Simpan_datares()" width="auto"> Update <i class="far fa-save"></i></div>
               
              </div>

            </form>

            <div class="card-body" hidden>
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

 
      <!-- EFFECTIVENESS -->
      <?php ?>
      <div class="card card-success" id="card_effectiveness">

      <?php ?>


        <div class="card-header">
          <h4 class="card-title">
             <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoef" >
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
                        <select class="form-control select2" id="close_report" name="close_report" onchange="handleSelectChange_close_report(event)" style="width: 100%;">
                          <option value='' selected="selected">-Select-</option>
                          <?php
                          foreach ($effectiveness_choice as $value) {
                            echo "<option value='$value'>$value</option>";
                          }
                          ?>
                        </select>
                      </div>
                    </div>
                  </div>

                </div><!-- ./MODAL CONTAINER -->
              </div><!-- ./MODAL CARD BODY -->
              <div class="card-footer">

                <!-- <php if ($this->session->userdata('rolename') == 'Approver Quality' || $this->session->userdata('rolename') == 'Administrator') { ?> -->
                       <div class="btn btn-success btn-sm konfirmasiApprove" data-id='' data-toggle="modal" data-target="#modal-confirm-approve" id="btnsubmitef" hidden> Approve <i class="far fa-thumbs-up"></i></div>
                       <div class="btn btn-danger btn-sm konfirmasiReject" data-id='' data-toggle="modal" data-target="#modal-reject" id="btnrejectef" hidden> Reject <i class="far fa-thumbs-down"></i></div>
                <!-- <php } else { ?> -->
                   <div class="btn btn-primary btn-sm konfirmasiSave float-right" data-id='' data-toggle="modal" data-target="#modal-save" id="btnsaveef" onclick="Simpan_dataef()" width="auto"> Update <i class="far fa-save"></i></div>
                <!-- <php } ?> -->

              </div>

            </form>

            <div class="card-body" hidden>
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
                        <th>NO</th>                       
                        <th>NAME</th>
                        <th>DATE APPROVE</th>
                        <th>POSITION NAME</th>
                        <th>NIK</th>
                        <th>OFFICE EMAIL</th>
                        <th>DEPARTMENT CODE</th>
                        <th>DEPARTMENT NAME</th>
                        
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



      <!---------------------------------- / Form Macro Batas sini ---------------------------------->

      <!-- Close Card Body -->
    </div>

    <div class="card-footer">
      <button type="submit" class="btn btn-primary" id="btnsubmit" onclick="save_progress_responsible()">Save</button>

      <div class="btn btn-success btn-sm konfirmasiApprove" data-id='' data-toggle="modal" data-target="#modal-confirm-approve" id="btn_approve_footer" > Approve <i class="far fa-thumbs-up"></i></div>
      <div class="btn btn-danger btn-sm konfirmasiReject" data-id='' data-toggle="modal" data-target="#modal-reject" id="btn_reject_footer" > Reject <i class="far fa-thumbs-down"></i></div>
      
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
        <h4 class="modal-title">Delete Modal</h4>
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




<!-- modal-confirm-approve -->
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
        <label id="idposition_code"> </label>
        <br>
        <label id="lblposition" hidden> </label>
        <br>
        <label id="lbluserconfirm" hidden> <?php echo $this->session->userdata('nama'); ?> </label>
        <label id="iduserlogin" hidden> <?php echo $this->session->userdata('user_name'); ?> </label>
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
        <input type="text" name="idreject" class="form-control" id="idreject" hidden>
        <button type="button" id="process_reject" onclick="Reject_data2()" class="btn btn-outline-light">Reject</button>
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>

      </div>

    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal Reject-->
<!-- Akhir modal approve -->



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
  $(document).ready(function() {

    $.validator.setDefaults({
      submitHandler: function() {

        //berhasil( "Form successful submitted!" );
        var status = $('#exampleModalLabel').text();

        if (status == "Add Data") {

          // Ajax insert data
          Simpan_data("Add");

        } else if (status == "Edit Data") {

          // Ajax update data
          Simpan_data("Update");
          Simpan_dataef("Update");
          Simpan_datares("Update");

        } else {

          berhasil(status);

        }

      }
    });

    $('#resform').validate({
      rules: {

        // ---------------------------------- Rule input Macro Batas sini 1---------------------------------
        recommendation: {
          required: true,
        },

        // ---------------------------------- / Rule input Macro Batas sini 1--------------------------------

      },
      messages: {

        // ---------------------------------- Rule input Macro Batas sini 2---------------------------------
        recommendation: {
          required: "Please Input recommendation",
          minlength: 3
        },


        // ---------------------------------- / Rule input Macro Batas sini 2--------------------------------


      },
      errorElement: 'span',
      errorPlacement: function(error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
      },
      highlight: function(element, errorClass, validClass) {
        $(element).addClass('is-invalid');
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
      }
    });
  });
</script>

<script type="text/javascript">
  // Untuk Add,Edit,delete.

  function view_modal(hdrid1, status) {

    if (status == "Add") {

      $('#exampleModalLabel').text('Add Data'); // name view
      $('#quickForm')[0].reset(); // reset form   
      $('#btnsubmit').text('Save'); // name Save
      document.getElementById("btnsubmit").style.visibility = "visible"; // Visible button              
      //Ajax kosongkan data

    } else {

      // Get Hdri ID
      $('#hdrid').val(hdrid1);
      var hdrid = hdrid1;

      // Ajax isi data
      $.ajax({
        url: "<?php echo base_url('C_progress/ajax_getbyhdrid') ?>",
        method: "get",
        dataType: "JSON",
        data: {
          hdrid: hdrid1
        },
        success: function(data) {

          // ---------------------------------- Data val Macro Batas sini ---------------------------------                  

          // Tabel Detail Problem
          
          $('#problem_name').val(data.problem_name);
          $('#problem_category_name').val(data.problem_category_name);
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
          // $('#responsible_section').val(data.responsible_section);
          $('#containment_date').val(data.containment_date);
          $('#nik').select2().val(data.nik).trigger('change');
          $('#name').val(data.name);
          $('#report_date').val(data.report_date);
          $('#status').val(data.status);
          // $('#due_date').val(data.due_date);
          $('#issue_date').val(data.issue_date);
          $('#rank_problem').select2().val(data.rank_problem).trigger('change');
          $('#section1').val(data.section1);
          $('#nik2').select2().val(data.nik2).trigger('change');
          $('#name2').val(data.name2);
          $('#section2').val(data.section2);
          $('#when_problem').val(data.when_problem);
          $('#shift_problem').val(data.shift_problem);
          $('#time_problem').val(data.time_problem);
          $('#who_problem').val(data.who_problem);
          $('#where_problem').val(data.where_problem);
          // $('#customer_product_id').val(data.customer_product_id);
          $('#qty_lot').val(data.qty_lot);
          $('#problem').val(data.problem);

          if (data.problem_name=="internal"){ //Tanpa isi effectiveness
              $("#card_effectiveness").hide();               
          }else{             
              $("#card_effectiveness").removeAttr("hidden");  // isi effectiveness
              $("#card_effectiveness").show();            
          }

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
        error: function(e) {
          alert(e);

        }
      });

      // Disable and button submit dan text form           
      if (status == "View") {
        document.getElementById("btnsubmit").style.visibility = "hidden";
        $('#exampleModalLabel').text('View Data'); //name view              
      } else {
        $('#exampleModalLabel').text('Edit Data'); //name view 
        $('#btnsubmit').text('Update dan send'); //name Update  
        document.getElementById("btnsubmit").style.visibility = "visible";
      }

      // cari kondisi responsible or not     
      $.ajax({
        url: "<?php echo base_url('C_progress/ajax_find_responsible') ?>",
        method: "get",
        dataType: "JSON",
        data: {
          problem_id: hdrid1
        },
        success: function(data) {

          if (data.status=="<?php echo $this->session->userdata('user_name') ?>"){ // hanya untuk responsible

             document.getElementById("btnsubmit").style.visibility = "visible";
             document.getElementById("btnsaveres").style.visibility = "visible";
             document.getElementById("btnsaveef").style.visibility = "visible";

          }else if("<?php echo $this->session->userdata('rolename') ?>"=='Administrator Quality'){ //untuk administrator bisa update

             document.getElementById("btnsubmit").style.visibility = "hidden";
             document.getElementById("btnsaveres").style.visibility = "visible";
             document.getElementById("btnsaveef").style.visibility = "visible";
           
          }else{ // tidak responsible

             document.getElementById("btnsubmit").style.visibility = "hidden";
             document.getElementById("btnsaveres").style.visibility = "hidden";
             document.getElementById("btnsaveef").style.visibility = "hidden";

          }     
          

        },
        error: function(e) {
          alert(e);
        }
      });

      // cari kondisi sebagai approver  or not    
      $.ajax({
        url: "<?php echo base_url('C_progress/ajax_find_approver') ?>",
        method: "get",
        dataType: "JSON",
        data: {
          problem_id: hdrid1
        },
        success: function(data) {
         
          if (data.status.substr(0,9)=="<?php echo $this->session->userdata('user_name') ?>"){   

             if(data.status.substr(10,5)=='3'){
                document.getElementById("btn_approve_footer").style.visibility = "hidden";
             } else{
                document.getElementById("btn_approve_footer").style.visibility = "visible";
             }

             document.getElementById("btn_reject_footer").style.visibility = "visible";      
             $('#idposition_code').text(data.status.substr(10,5));     

            //  alert(data.status.substr(10,5)); 
          }else{       

             document.getElementById("btn_approve_footer").style.visibility = "hidden";
             document.getElementById("btn_reject_footer").style.visibility = "hidden";    

          }        
        },
        error: function(e) {
          alert(e);
        }
      });

    }

  }
</script>

<script type="text/javascript">
  function Simpan_data($trigger) {

    // Form data
    var fdata = new FormData();

    // Form data collect name value
    var form_data = $('#quickForm').serializeArray();
    $.each(form_data, function(key, input) {
      fdata.append(input.name, input.value);
    });

    // Penanganan jika ada type check Box uncheck
    $('#quickForm input[type="checkbox"]:not(:checked)').each(function(i, e) {
      fdata.append(e.getAttribute("name"), "Off");
    });

    // Penanganan jika ada type attach file
    $('#quickForm input[type="file"]').each(function(i, e) {
      // jika ada file attach maka akan ditambahkan  
      if ($('#' + e.getAttribute("name")).val()) {
        var file_data = $('#' + e.getAttribute("name")).prop('files')[0];
        fdata.append(e.getAttribute("name"), file_data);
      }
    });

    // Print_r(file_data);

    // Simpan or Update data          
    var vurl;
    if ($trigger == 'Add') {
      vurl = "<?php echo base_url('C_progress/ajax_add') ?>";
    } else {
      vurl = "<?php echo base_url('C_progress/ajax_updateef') ?>";
      vurl = "<?php echo base_url('C_progress/ajax_updateres') ?>";
    }

    $.ajax({
      url: vurl,
      method: "post",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {

        // Pesan berhasil
        berhasil(data.status);
        // Reset Form
        $('#quickForm')[0].reset();
        // location.reload();
        tabel.draw();

        if (!vurl == "Add") {
          $("#modal-default").modal('hide');
        }

      },
      error: function(e) {
        gagal(e);
        //location.reload();
        //error
      }
    });



  }


  function Delete_data() {

    // Form data
    var fdata = new FormData();

    // Delete by Hdrid
    fdata.append('hdrid', $('#iddelete').text());
    // Url Post delete
    vurl = "<?php echo base_url('C_progress/ajax_delete') ?>";

    // Post data
    $.ajax({
      url: vurl,
      method: "post",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {

        // Hide modal delete
        $('#modal-delete').modal('hide');
        // Delete rows datatables
        $('#example1').DataTable().row("#" + $('#iddelete2').text()).remove().draw();
        // Pesan berhasil
        berhasil(data.status);

      },
      error: function(e) {
        //Pesan Gagal
        gagal(e);
      }
    });

  }


  function Send_mail() {

    // Url Post delete
    vurl = "<?php echo base_url('C_Email/Send_mail') ?>";
    // Form data
    var fdata = new FormData();
    fdata.append('hdrid', 'Hdrid123');

    // Post data
    $.ajax({
      url: vurl,
      method: "post",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {},
      error: function(e) {
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

  //  HDRID selected KonfirmasiApprove
  $(document).on("click", ".konfirmasiApprove", function() {
    let str = $(this).attr("data-id");
    const myArr = str.split("#");
    $('#iddelete').text(myArr[0]);
  })

  //  HDRID selected  konfirmasiEdit
  $(document).on("click", ".konfirmasiEdit", function() {
    view_modal($(this).attr("data-id"), 'Edit');

    // EF Form
    $('#efform')[0].reset();
    view_modalef($(this).attr("data-id"), 'Edit');

    // RES Form
    $('#resform')[0].reset();
    view_modalres($(this).attr("data-id"), 'Edit');
  })

  //  HDRID selected  konfirmasiView
  $(document).on("click", ".konfirmasiView", function() {

    view_modal($(this).attr("data-id"), 'View');

    // EF Form
    $('#efform')[0].reset();
    view_modalef($(this).attr("data-id"), 'View');

    // RES Form
    $('#resform')[0].reset();
    view_modalres($(this).attr("data-id"), 'View');

  })

  // ID Rows selected
  $('#example1').on('click', 'tr', function() {
    $('#iddelete2').text($('#example1').DataTable().row(this).id());
  });
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
      "responsive": true,
      "serverSide": true,
      "ordering": true, // Set true agar bisa di sorting
      "createdRow": function( row, data, dataIndex){
        
            if (data.status_transaction== 'Done'){             
              $(row).css("background-color", "#7FFFD4");
             
            }else if(data.Status_monitoring.substr(0,5) == 'Delay'){
                $(row).css("background-color", "pink");
            }

          },

      "order": [
        [0, 'asc']
      ], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
      dom: "lfBrtip",
      buttons: [
        {
          extend: 'excelHtml5',
          className: 'btn btn-success',
          text: '<i class="fas fa-file-excel">&nbsp</i> Export Data to Excel',
          customize: function(xlsx) {
            var sheet = xlsx.xl.worksheets['sheet1.xml'];
            // jQuery selector to add a border
            $('row c', sheet).attr('s', '25');
          }
        },
        {
          extend: 'pdfHtml5',
          className: 'btn btn-danger',
          text: '<i class="fas fa-file-pdf">&nbsp</i> Export Data to PDF',
          orientation: 'landscape',
          pageSize: 'A4',
          download: 'open'
        }
      ],
      "ajax": {
        "url": "<?= base_url('C_progress/view_data_where_new'); ?>", // view_data_new / view_data_where / URL file untuk proses select datanya
        "type": "POST",
        "data": function(data) {
          data.searchByFromdate = $('#search_fromdate').val();
          data.searchByTodate = $('#search_todate').val();
        }

      },
      "deferRender": true,
      "aLengthMenu": [
        [10, 100, 1000, 10000, 100000, 1000000, 1000000000],
        [10, 100, 1000, 10000, 100000, 1000000, "All"]
      ], // Combobox Limit
      "columns": [{
          "data": 'hdrid',
          "sortable": false, //1
          render: function(data, type, row, meta) {

            mnu = '';
            mnu = mnu + '<div class="btn btn-success btn-sm konfirmasiView mr-2" data-id="' + data + '" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye "></i></div>';
            mnu = mnu + '<div class="btn btn-primary btn-sm konfirmasiEdit mr-2" data-id="' + data + '" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';

            <?php if ($this->session->userdata('rolename')=='Administrator') { ?>
            mnu = mnu + '<div class="btn btn-danger btn-sm konfirmasiHapus mr-2" data-id="' + data + '" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div>';
            <?php } ;?>

             mnu = mnu + ' <a class="btn btn-secondary btn-sm mr-2"  href="<?php echo base_url('C_Print_approved/print_report2_approved?var1=') . "'+ data +' &var2=1&var2=1"  ?>"  target="_blank"> <i class="fas fa-print mr-1"></i>A4</a>'

            return mnu;

          }
        },

        // ---------------------------------- Datatables Macro Batas sini ---------------------------------

        // {
        //   "data": "hdrid"
        // },
        // {
        //   "data": "due_date"
        // },
        // {
        //   "data": "status_transaction"
        // },
        // {
        //   "data": "group_product_name"
        // },
        // {
        //   "data": "problem_name"
        // },
        // {
        //   "data": "customer_name"
        // },
        {"data":"hdrid"},
        {"data":"issue_date"},
        {"data":"report_date"},      
        {"data":"name2"},
        {"data":"rank_problem"},
        {"data":"problem_name"},
        {"data":"comment"},
        {"data":"problem_category_name"},
        {"data":"product_name"},                         
        {"data":"detail_problem"},     
        {"data":"status_transaction"},
        {"data":"Status_monitoring"},


        // ---------------------------------- / Datatables Macro Batas sini --------------------------------

      ],


    });

    // Tabel Detail Problem
    tabel2 = $('#detailProblem').DataTable({
      "processing": true,
      "responsive": true,
      "serverSide": true,
      "autowidth": false,
      "info": true,
      "ordering": true, // Set true agar bisa di sorting
      "order": [
        [0, 'asc']
      ], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
      "ajax": {
        "url": "<?= base_url('C_progress/view_data_whereprobs'); ?>", // URL file untuk proses select datanya
        "type": "POST",
        "data": function(data) {
          data.searchByFromdate = $('#search_fromdate').val();
          data.searchByTodate = $('#search_todate').val();
          data.hdrid = $('#hdrid').val();
          // data.hdrid = 'R-3A16-01305';

        }

      },
      "deferRender": true,
      "aLengthMenu": [
        [10, 100, 1000, 10000, 100000, 1000000, 1000000000],
        [10, 100, 1000, 10000, 100000, 1000000, "All"]
      ], // Combobox Limit        
      "columns": [
        {
          "data": "problem_name"
        },
        {
          "data": "hdrid"
        },
        // {
        //   "data": "due_date"
        // },
        {
          "data": "issue_date"
        },
        {
          "data": "rank_problem"
        },
        {
          "data": "group_product_id"
        },
        {
          "data": "group_product_name"
        },
        {
          "data": "product_id"
        },
        {
          "data": "product_name"
        },
        {
          "data": "contact_person_name"
        },
        {
          "data": "source_information_id"
        },
        {
          "data": "source_information_name"
        },
        {
          "data": "customer_report_number"
        },
        {
          "data": "part_number"
        },
        {
          "data": "qty"
        },
        {
          "data": "lot_number_product"
        },
        {
          "data": "problem"
        },
        {
          "data": "detail_problem"
        },
        // {
        //   "data": "responsible_section"
        // },
        {
          "data": "containment_date"
        },
        {
          "data": "nik"
        },
        {
          "data": "name"
        },
        {
          "data": "section1"
        },
        {
          "data": "nik2"
        },
        {
          "data": "name2"
        },
        {
          "data": "section2"
        },
        {
          "data": "temporary_action"
        },
        {
          "data": "etc"
        },
        {
          "data": "delivery_status"
        },
        {
          "data": "when_problem"
        },
        {
          "data": "shift_problem"
        },
        {
          "data": "time_problem"
        },
        {
          "data": "who_problem"
        },
        {
          "data": "where_problem"
        },
        // {
        //   "data": "customer_product_id"
        // },
        {
          "data": "qty_lot"
        },

        {
          "data": "report_date"
        },
        {
          "data": "status"
        },

      ],
    });



    // Table Approver

    tabel3 = $('#detailApproval').DataTable({
      "processing": true,
      "responsive": false,
      "serverSide": true,
      "autowidth": false,
      "info": true,
      "ordering": true, // Set true agar bisa di sorting
      "order": [
        [0, 'asc']
      ], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
      "ajax": {
        "url": "<?= base_url('C_progress/view_data_whereapproval '); ?>", // URL file untuk proses select datanya             
        "type": "POST",
        "data": function(data) {
          // data.searchByFromdate = $('#search_fromdate').val();
          // data.searchByTodate = $('#search_todate').val();
          // alert($('#hdrid').val());
          data.hdrid = $('#hdrid').val();
          // data.hdrid = 'R-3A16-01305';

        }

      },
      "deferRender": true,
      "aLengthMenu": [
        [10, 100, 1000, 10000, 100000, 1000000, 1000000000],
        [10, 100, 1000, 10000, 100000, 1000000, "All"]
      ], // Combobox Limit        
      "columns": [

        {
          "data": "position_code"
        },            
        {
          "data": "name"
        },
        {
          "data": "date_approve"
        },
        {
          "data": "position_name"
        }, 
        {
          "data": "nik"
        },
        {
          "data": "office_email"
        },
        {
          "data": "department_code"
        },
        {
          "data": "department_name"
        },
       
      ],
    });



    // Search button
    $('#search').click(function() {


      if ($('#search_fromdate').val() != '' && $('#search_todate').val() != '') {
        tabel.draw();
      } else {
        gagal("Both Date is Required");
      }

    });


  });
</script>


<script type="text/javascript">
  function vreadonly(form, vboolean) {

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
  $(document).ready(function() {
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

  function handleSelectChange_nik2(event) {

    //  By Text
    var value = $("#nik_2 option:selected").text();
    var res = value.split("-");
    // $('#acc_number').val(res[0]);
    $('#name_2').val(res[1]);
    $('#department_name_2').val(res[2]);

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

  function handleSelectChange_close_report(event) {

  //  var data = $('#close_report').select2('data')[0].text;

  //  if (data=='-Select-'){
  //    $('#close_report').val('');   
  //  }else{
  //    var res = data.split("-");
  //    $('#close_report').val(res[1]);
  //  };

  }


  function handleSelectChange_group_product_id(event) {

    var data = $('#group_product_id').select2('data')[0].text;

    if (data == '-Select-') {
      $('#group_product_name').val('');
    } else {
      var res = data.split("-");
      $('#group_product_name').val(res[1]);
    };

  }



  function handleSelectChange_customer_id(event) {

    var data = $('#customer_id').select2('data')[0].text;

    if (data == '-Select-') {
      $('#customer_name').val('');
    } else {
      var res = data.split("-");
      $('#customer_name').val(res[1]);
    };

  }
</script>

<!-- AKHIR FUNCTION ONCHANGE -->



<!-- Function View Modal Ef -->

<script type="text/javascript">
  // view form ef
  function view_modalef(hdrid1, status) {

    // let str =hdrid1;
    // const myArr = str.split("#");
    // hdrid1=myArr[0];

    $('#hdrid').val(hdrid1);
    var hdrid = hdrid1;

    // Setting data-id pada button approve dan reject
    $('#btnsubmitef').attr('data-id', hdrid + '#' + '1' + '#' + '<?php echo $this->session->userdata('user_name') ?>');
    $('#btnrejectef').attr('data-id', hdrid + '#' + '1' + '#' + '<?php echo $this->session->userdata('user_name') ?>');

    // Cari apakah sebagai approval EF , jika approval muncul tombol approve
    $.ajax({
      url: "<?php echo base_url('C_progress/view_data_positionpic') ?>",
      method: "get",
      dataType: "JSON",
      data: {
        hdrid: hdrid1,
        Approval1: 'Approval 1',
        Approval2: 'Approval 2'
      },

      success: function(data) {

        // if (data.status=='Ada'){               
        //   $("#btnsubmitef").show();
        //   $("#btnrejectef").show();
        // }else{
        //   $("#btnsubmitef").hide();
        //   $("#btnrejectef").hide();
        // }

      },
      error: function(e) {
        alert(e);
      }
    });

    // Tampilkan data

    $.ajax({
      url: "<?php echo base_url('C_progress/ajax_getEftbyhdrid') ?>",
      method: "get",
      dataType: "JSON",
      data: {
        hdrid: hdrid1
      },
      success: function(data) {



        $('#hdridef').val(data.hdrid);
        $('#problem_idef').val(data.problem_id);
        $('#month_1').val(data.month_1);
        $('#comment_1').val(data.comment_1);


        document.getElementById('attach_file_1_label').innerHTML = data.attach_file_1;
        var a = document.getElementById('attach_file_1_view');
        if (!data.attach_file_1 == '') {
          a.href = "<?php echo base_url('assets/upload/EF/') ?>" + data.attach_file_1;
        } else {
          a.removeAttribute("href");
        };
        $('#month_2').val(data.month_2);
        $('#comment_2').val(data.comment_2);

        document.getElementById('attach_file_2_label').innerHTML = data.attach_file_2;
        var a = document.getElementById('attach_file_2_view');
        if (!data.attach_file_2 == '') {
          a.href = "<?php echo base_url('assets/upload/EF/') ?>" + data.attach_file_2;
        } else {
          a.removeAttribute("href");
        };

        $('#month_3').val(data.month_3);
        $('#comment_3').val(data.comment_3);
        document.getElementById('attach_file_3_label').innerHTML = data.attach_file_3;
        var a = document.getElementById('attach_file_3_view');
        if (!data.attach_file_3 == '') {
          a.href = "<?php echo base_url('assets/upload/EF/') ?>" + data.attach_file_3;
        } else {
          a.removeAttribute("href");
        };
        $('#month_4').val(data.month_4);
        $('#comment_4').val(data.comment_4);
        document.getElementById('attach_file_4_label').innerHTML = data.attach_file_4;
        var a = document.getElementById('attach_file_4_view');
        if (!data.attach_file_4 == '') {
          a.href = "<?php echo base_url('assets/upload/EF/') ?>" + data.attach_file_4;
        } else {
          a.removeAttribute("href");
        };
        $('#month_5').val(data.month_5);
        $('#comment_5').val(data.comment_5);
        document.getElementById('attach_file_5_label').innerHTML = data.attach_file_5;
        var a = document.getElementById('attach_file_5_view');
        if (!data.attach_file_5 == '') {
          a.href = "<?php echo base_url('assets/upload/EF/') ?>" + data.attach_file_5;
        } else {
          a.removeAttribute("href");
        };
        $('#month_6').val(data.month_6);
        $('#comment_6').val(data.comment_6);
        document.getElementById('attach_file_6_label').innerHTML = data.attach_file_6;
        var a = document.getElementById('attach_file_6_view');
        if (!data.attach_file_6 == '') {
          a.href = "<?php echo base_url('assets/upload/EF/') ?>" + data.attach_file_6;
        } else {
          a.removeAttribute("href");
        };


        $('#close_report').select2().val(data.close_report).trigger('change');


        if (data.status_approve_ef == 'Rejected') {
          $('#status').val('Rejected by ' + data.name_rejected_ef + ' reason ' + data.reason_rejected_ef);
        } else {
          $('#status').val(data.status_approve_ef);
        }

        // Jika belum close pengisian user belum bisa approve
        // if (data.statusef!=='Close'){
        //     $("#btnsubmitef").hide();
        //     $("#btnrejecttef").hide();              
        // }




      },
      error: function(e) {
        alert(e);

      }
    });

  }
</script>


<!-- Function Update Data Effectiveness -->
<script type="text/javascript">
  function Simpan_dataef($trigger) {

    // Form data
    var fdata = new FormData();


    // Form data collect name value
    var form_data = $('#efform').serializeArray();
    $.each(form_data, function(key, input) {
      fdata.append(input.name, input.value);
    });

    // Penanganan jika ada type check Box uncheck
    $('#efform input[type="checkbox"]:not(:checked)').each(function(i, e) {
      fdata.append(e.getAttribute("name"), "Off");
    });

    // Penanganan jika ada type attach file
    $('#efform input[type="file"]').each(function(i, e) {
      // jika ada file attach maka akan ditambahkan  
      if ($('#' + e.getAttribute("name")).val()) {
        var file_data = $('#' + e.getAttribute("name")).prop('files')[0];
        fdata.append(e.getAttribute("name"), file_data);
      }
    });

    // Simpan or Update data
    $.ajax({
      url: "<?php echo base_url('C_progress/ajax_updateef') ?>",
      method: "post",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {

        $('#modal-default').modal('hide');
        // Pesan berhasil
        berhasil(data.status);
        // Reset Form
        $('#efform')[0].reset();
        // // location.reload();
        tabel.draw();

      },
      error: function(e) {
        gagal(e);
        //location.reload();
        //error
      }
    });

     // Update Containment date actual
    $.ajax({
      url: "<?php echo base_url('C_progress/ajax_update_containment_date_actual') ?>",
      method: "post",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {
      },
      error: function(e) {
        gagal(e);
      }
    });


  }



  $.validator.setDefaults({
    submitHandler: function() {

      //berhasil( "Form successful submitted!" );
      var status = $('#exampleModalLabel').text();

      if (status == "Add Data") {
        // Ajax insert data
        Simpan_dataef("Add");
      } else if (status == "Edit Data") {
        // Ajax update data
        Simpan_dataef("Update");
      } else {
        berhasil(status);
      }

    }
  });
</script>













<!-- Function View Modal Respose -->

<script type="text/javascript">
  // view form Res
  function view_modalres(hdrid1, status) {

    // let str =hdrid1;
    // const myArr = str.split("#");
    // hdrid1=myArr[0];

    $('#hdrid').val(hdrid1);
    var hdrid = hdrid1;

    // Setting data-id pada button approve dan reject
    $('#btnsubmitres').attr('data-id', hdrid + '#' + '1' + '#' + '<?php echo $this->session->userdata('user_name') ?>');
    $('#btnrejectres').attr('data-id', hdrid + '#' + '1' + '#' + '<?php echo $this->session->userdata('user_name') ?>');

    // Cari apakah sebagai approval EF , jika approval muncul tombol approve
    $.ajax({
      url: "<?php echo base_url('C_progress/view_data_positionpic') ?>",
      method: "get",
      dataType: "JSON",
      data: {
        hdrid: hdrid1,
        Approval1: 'Approval 1',
        Approval2: 'Approval 2'
      },

      success: function(data) {

        // if (data.status=='Ada'){               
        //   $("#btnsubmitres").show();
        //   $("#btnrejectres").show();
        // }else{
        //   $("#btnsubmitres").hide();
        //   $("#btnrejectres").hide();
        // }

      },
      error: function(e) {
        alert(e);
      }
    });



    $('input[type=radio][name=problem_name]').change(function() {
      if (this.value == 'group_product') {
        $('#quickForm').rules('remove');
      } else if (this.value == 'external') {

      }
    });

    // OnClick Yokotenkai disable/enable recomendation field
    $('input[type=radio][name=yokotenkai]').change(function() {
      if (this.value == 'yokotenkai2') {
        // $("#recommendation").attr("disabled", "disabled").val('');
        $('#recommendation').val('');
        $('#yokotenkai').val('yokotenkai2');

      } else if (this.value == 'yokotenkai') {
        // NOTE:: ON PROGRESS
        $("#resform").validate().element("#recommendation");
        $("#recommendation").prop('required', true);
        $("#recommendation").removeAttr("disabled").val('');
        $("#recommendation").removeAttr("hidden").val('');
        $('#recommendation').val('');
        $('#yokotenkai').val('yokotenkai');


      }
    });


    // Onclick dmia-responsible show or hide form
    $('.dmia_responsible').change(function() {

      if (this.value == 'dmia_responsible') {

        $("#occurencelabel").removeAttr("hidden"); 
        $("#occurencelabel").show(); 

        $('#statusresponse').val('Open');
        $("#statusresponse").removeAttr("disabled");
        $("#statusresponse").removeAttr("hidden");
        $("#yokotenkai").prop("checked", false);
        $("#yokotenkai2").prop("checked", false);
        $("#yokotenkai_other_section").prop("checked", false);
        $("#yokotenkai_other_section2").prop("checked", false);
        $('#recommendation').removeAttr("hidden");
        $("#recommendation").removeAttr("disabled");
        $('#recommendation').val('');
        $("#showHideForm").show();

      } else if (this.value == 'dmia_responsible2') {

        $('#statusresponse').val('Close');
        $("#occurencelabel").hide();        
        $("#showHideForm").hide();
        $('#occurrence_why_1').val('');
        $('#flow_out_why_1').val('');
        $('#occurrence_why_2').val('');
        $('#flow_out_why_2').val('');
        $('#occurrence_why_3').val('');
        $('#flow_out_why_3').val('');
        $('#occurrence_why_4').val('');
        $('#flow_out_why_4').val('');
        $('#occurrence_why_5').val('');
        $('#flow_out_why_5').val('');
        $('#occurrence_date_1').val('');
        $('#occurrence_date_2').val('');;
        $('#occurrence_date_3').val('');
        $('#occurrence_date_4').val('');
        $('#occurrence_date_5').val('');
        $('#flow_out_date_1').val('');
        $('#flow_out_date_2').val('');
        $('#flow_out_date_3').val('');
        $('#flow_out_date_4').val('');
        $('#flow_out_date_5').val('');
        $('#contermeasur_action').val('');
        $('#verification').val('');
        $('#verification_attach').val('');
        $('#implement_actions').val('');
        $('#validation_result').val('');
        $('#validation_attach').val('');
        $('#recommendation').val('');
        $('#nik_2').val('');
        $('#name_2').val('');
        $('#department_name_2').val('');
        $('#date_response_2').val('');
        $('#yokotenkai').val('');
        $('#yokotenkai2').val('');
        $('#yokotenkai_other_section').val('');
        $('#yokotenkai_other_section2').val('');
        $('#occurrence_prevention_1').val('');
        $('#occurrence_prevention_2').val('');
        $('#occurrence_prevention_3').val('');
        $('#occurrence_prevention_4').val('');
        $('#occurrence_prevention_5').val('');
        $('#flow_out_prevention_1').val('');;
        $('#flow_out_prevention_2').val('');
        $('#flow_out_prevention_3').val('');
        $('#flow_out_prevention_4').val('');
        $('#flow_out_prevention_5').val('');

        // $("#yokotenkai").prop("checked", false).val('');
        // $("#yokotenkai2").prop("checked", false).val('');


      }

    });

    // Tampilkan Semua data

    $.ajax({
      url: "<?php echo base_url('C_progress/ajax_getResbyhdrid') ?>",
      method: "get",
      dataType: "JSON",
      data: {
        hdrid: hdrid1
      },
      success: function(data) {



        $('#hdridres').val(data.hdrid);
        $('#problem_idres').val(data.problem_id);
        $('#containment_other_action').val(data.containment_other_action);

        document.getElementById('attach_file_1_label_res').innerHTML = data.attach_file_1_res;
        var a = document.getElementById('attach_file_1_view_res');
        if (!data.attach_file_1_res == '') {
          a.href = "<?php echo base_url('assets/upload/RES/') ?>" + data.attach_file_1_res;
        } else {
          a.removeAttribute("href");
        };

        document.getElementById('attach_file_2_label_res').innerHTML = data.attach_file_2_res;
        var a = document.getElementById('attach_file_2_view_res');
        if (!data.attach_file_2_res == '') {
          a.href = "<?php echo base_url('assets/upload/RES/') ?>" + data.attach_file_2_res;
        } else {
          a.removeAttribute("href");
        };

        document.getElementById('attach_file_3_label_res').innerHTML = data.attach_file_3_res;
        var a = document.getElementById('attach_file_3_view_res');
        if (!data.attach_file_3_res == '') {
          a.href = "<?php echo base_url('assets/upload/RES/') ?>" + data.attach_file_3_res;
        } else {
          a.removeAttribute("href");
        };

        document.getElementById('attach_file_occurence_label').innerHTML=data.attach_file_occurence;
        var a = document.getElementById('attach_file_occurence_view');
        if(!data.attach_file_occurence==''){
          a.href = "<?php echo base_url('assets/upload/RES/') ?>" + data.attach_file_occurence;
        }else{
          a.removeAttribute("href");
        };
       

        $('#nikres').select2().val(data.nik).trigger('change');
        $('#nameres').val(data.name);
        $('#date_response').val(data.date_response);
        if(data.received_failed_part=='received_failed_part'){
          document.getElementById('received_failed_part').checked=true;
        }else
        {
          document.getElementById('received_failed_part2').checked=true;
        }
        $('#investigation_activity').val(data.investigation_activity);

        document.getElementById('investigation_attach_label').innerHTML=data.investigation_attach;
        var a = document.getElementById('investigation_attach_view');
        if(!data.investigation_attach==''){
          a.href = "<?php echo base_url('assets/upload/RES/') ?>" + data.investigation_attach;
        }else{
          a.removeAttribute("href");
        };


        // $('#dmia_responsible').select2().val(data.dmia_responsible).trigger('change');

        // Hide form jika dmia-responsible no/kosong
        if (data.dmia_responsible == 'dmia_responsible') {
          document.getElementById('showHideForm').style.display = 'block';
          document.getElementById('dmia_responsible').checked = true;
          document.getElementById('statusresponse').disabled = false;
        } else if (data.dmia_responsible == 'dmia_responsible2') {
          document.getElementById('showHideForm').style.display = 'none';
          document.getElementById('dmia_responsible2').checked = true;
          document.getElementById('statusresponse').disabled = true;
          document.getElementById('verification_attach').value = '';
        } else {
          document.getElementById('showHideForm').style.display = 'none';
          document.getElementById('dmia_responsible').checked = false;
          document.getElementById('dmia_responsible2').checked = false;
        }


        $('#statusresponse').val(data.status);
        // $('#dmia_responsible').val(data.dmia_responsible);

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
        $('#occurrence_date_1').val(data.occurrence_date_1);
        $('#occurrence_date_2').val(data.occurrence_date_2);
        $('#occurrence_date_3').val(data.occurrence_date_3);
        $('#occurrence_date_4').val(data.occurrence_date_4);
        $('#occurrence_date_5').val(data.occurrence_date_5);
        $('#flow_out_date_1').val(data.flow_out_date_1);
        $('#flow_out_date_2').val(data.flow_out_date_2);
        $('#flow_out_date_3').val(data.flow_out_date_3);
        $('#flow_out_date_4').val(data.flow_out_date_4);
        $('#flow_out_date_5').val(data.flow_out_date_5);

        $('#contermeasur_action').val(data.contermeasur_action);
        $('#verification').val(data.verification);

        document.getElementById('verification_attach_label').innerHTML = data.verification_attach;

        var a = document.getElementById('verification_attach_view');
        if (!data.verification_attach == '') {
          a.href = "<?php echo base_url('assets/upload/RES/') ?>" + data.verification_attach;
        } else {
          a.removeAttribute("href");
        };

        $('#implement_actions').val(data.implement_actions);
        $('#validation_result').val(data.validation_result);

        document.getElementById('validation_attach_label').innerHTML = data.validation_attach;
        
        var a = document.getElementById('validation_attach_view');
        if (!data.validation_attach == '') {
          a.href = "<?php echo base_url('assets/upload/RES/') ?>" + data.validation_attach;
        } else {
          a.removeAttribute("href");
        };



        if (data.yokotenkai == 'yokotenkai') {
          document.getElementById('yokotenkai').checked = true;
        } else if (data.yokotenkai == 'yokotenkai2') {
          document.getElementById('yokotenkai2').checked = true;
          document.getElementById('recommendation').hidden = true;
        } else {
          document.getElementById('yokotenkai').checked = false;
          document.getElementById('yokotenkai2').checked = false;
          document.getElementById('recommendation').hidden = false;
      }

        if (data.yokotenkai_other_section == 'yokotenkai_other_section') {
          document.getElementById('yokotenkai_other_section').checked = true;
        } else if (data.yokotenkai_other_section == 'yokotenkai_other_section2') {
          document.getElementById('yokotenkai_other_section2').checked = true;
        } else {
          document.getElementById('yokotenkai_other_section').checked = false;
          document.getElementById('yokotenkai_other_section2').checked = false;
        }
        $('#recommendation').val(data.recommendation);
        $('#nik_2').select2().val(data.nik_2).trigger('change');
        $('#name_2').val(data.name_2);
        $('#department_name_2').val(data.department_name_2);
        $('#date_response_2').val(data.date_response_2);
        $('#occurrence_prevention_1').val(data.occurrence_prevention_1);
        $('#occurrence_prevention_2').val(data.occurrence_prevention_2);
        $('#occurrence_prevention_3').val(data.occurrence_prevention_3);
        $('#occurrence_prevention_4').val(data.occurrence_prevention_4);
        $('#occurrence_prevention_5').val(data.occurrence_prevention_5);
        $('#flow_out_prevention_1').val(data.flow_out_prevention_1);
        $('#flow_out_prevention_2').val(data.flow_out_prevention_2);
        $('#flow_out_prevention_3').val(data.flow_out_prevention_3);
        $('#flow_out_prevention_4').val(data.flow_out_prevention_4);
        $('#flow_out_prevention_5').val(data.flow_out_prevention_5);




        // Jika belum close pengisian user belum bisa approve
        // if (data.statusres!=='Close'){
        //     $("#btnsubmitres").hide();
        //     $("#btnrejecttres").hide();              
        // }




      },
      error: function(e) {
        alert(e);

      }
    });

  }
</script>


<!-- Function Update Data Effectiveness -->
<script type="text/javascript">
  function Simpan_datares($trigger) {

    // Form data
    var fdata = new FormData();


    // Form data collect name value
    var form_data = $('#resform').serializeArray();
    $.each(form_data, function(key, input) {
      fdata.append(input.name, input.value);
    });

    // Penanganan jika ada type check Box uncheck
    $('#resform input[type="checkbox"]:not(:checked)').each(function(i, e) {
      fdata.append(e.getAttribute("name"), "Off");
    });


    // Penanganan jika ada type attach file
    $('#resform input[type="file"]').each(function(i, e) {
      // jika ada file attach maka akan ditambahkan  
      if ($('#' + e.getAttribute("name")).val()) {
        var file_data = $('#' + e.getAttribute("name")).prop('files')[0];
        fdata.append(e.getAttribute("name"), file_data);
      }
    });

    // Simpan or Update data
    $.ajax({
      url: "<?php echo base_url('C_progress/ajax_updateres') ?>",
      method: "post",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {


        $('#modal-default').modal('hide');
        // Pesan berhasil
        berhasil(data.status);
        // Reset Form
        $('#resform')[0].reset();

        // // location.reload();
        tabel.draw();

      },
      error: function(e) {
        gagal(e);
        //location.reload();
        //error
      }
    });


     // Update Containment date actual
    $.ajax({
      url: "<?php echo base_url('C_progress/ajax_update_containment_date_actual') ?>",
      method: "post",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {
      },
      error: function(e) {
        gagal(e);
      }
    });





  }



  $.validator.setDefaults({
    submitHandler: function() {

      //berhasil( "Form successful submitted!" );
      var status = $('#exampleModalLabel').text();

      if (status == "Add Data") {
        // Ajax insert data
        Simpan_datares("Add");
      } else if (status == "Edit Data") {
        // Ajax update data
        Simpan_datares("Update");
      } else {
        berhasil(status);
      }

    }
  });
</script>




<script type="text/javascript">


  function Approve_data_old() {

    // Form data
    var fdata = new FormData();
    // var fdata2 = new FormData();

    // Update by Hdrid
    fdata.append('problem_id', $('#iddelete').text());
    fdata.append('nik', $('#iduserlogin').text());
    fdata.append('name', $('#lbluserconfirm').text());
    // fdata.append('position',$('#lblposition').text());

    var fdata2 = new FormData();

    // Form data collect name value
    var form_data = $('#detailProblem').serializeArray();
    $.each(form_data, function (key, input) {
            fdata2.append(input.name, input.value);
          }); 

    fdata2.append("hdrid",$('#hdrid').val()); 
    fdata2.append("problem_name",$('#problem_name').val()); 
    fdata2.append("group_product_name",$('#group_product_name').val()); 
    fdata2.append("product_name",$('#product_name').val()); 
    fdata2.append("name2",$('#name').val()); 
    fdata2.append("problem_category_name",$('#problem_category_name').val()); 
    fdata2.append("body_content","Approved By: <?= $data_user['nama']; ?>"); 
    fdata2.append("comment",""); 
    fdata2.append("status_subject","Approved");

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

        // Hide modal delete
         berhasil("Berhasil diApprove..");  

        // $('#modal-confirm-approve').modal('hide');
        // $('#modal-default').modal('hide');

        // berhasil(data.status);

        var vurl2; 
        vurl2 = "<?php echo base_url('C_Email/ajax_send_mail_v1')?>";

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


  function Approve_data() {

    // alert(<php echo $hdrid ?>);

    // Form data
    var fdata = new FormData();
    // var fdata2 = new FormData();

    // Update by Hdrid
    fdata.append('problem_id',$('#hdrid').val());
    fdata.append('nik', $('#iduserlogin').text());
    fdata.append('name', $('#lbluserconfirm').text());
    fdata.append('position_code', $('#idposition_code').text());

    // berhasil($('#idposition_code').val());
    // idposition_code
    // fdata.append('position_code', "<php echo $nik->position_code; ?>");
  
    var fdata2 = new FormData();

    fdata2.append("hdrid",$('#hdrid').val());
    fdata2.append("problem_name",$('#problem_name').val());
    fdata2.append("group_product_name",$('#group_product_name').val());
    fdata2.append("product_name",$('#product_name').val());
    fdata2.append("name2",$('#name2').val());
    fdata2.append("problem_category_name",$('#problem_category_name').val());
    fdata2.append("body_content",""); 
    fdata2.append("comment",""); 
    fdata2.append("status_subject","");
    fdata2.append("position_code",$('#idposition_code').text());
   
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
        // berhasil("Approve success 444");  
        fdata2.append("body_content",data.status); 
        tabel.draw(); 
        $('#modal-confirm-approve').modal('hide');
        $('#modal-default').modal('hide');
        berhasil("Berhasil Approve");

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

  function Reject_data2() {

    // Validasi reason harus diisi
    if ($('#reason').val() == '') {
      gagal('Reason wajib diisi');
      return false;
    }

    // Form data
    var fdata = new FormData();
  
    // fdata.append('hdrid', $('#hdrid').val());
    // fdata.append('rejected_by', "<php echo $nik->name ?>");
    // fdata.append('reason', $('#reason').val());
    // fdata.append('position_code', "<php echo $nik->position_code ?>");

    fdata.append('hdrid',$('#hdrid').val());
    fdata.append('nik', $('#iduserlogin').text());
    fdata.append('name', $('#lbluserconfirm').text());
    fdata.append('rejected_by', $('#lbluserconfirm').text());
    fdata.append('reason', $('#reason').val());
    fdata.append('position_code', $('#idposition_code').text());

    var fdata2 = new FormData();
    fdata2.append("hdrid",$('#hdrid').val()); 
    fdata2.append("problem_name",$('#problem_name').val()); 
    fdata2.append("group_product_name",$('#group_product_name').val()); 
    fdata2.append("product_name",$('#product_name').val()); 
    fdata2.append("name2",$('#name').val()); 
    fdata2.append("problem_category_name",$('#problem_category_name').val()); 
    fdata2.append("comment",$('#reason').val()); 
    fdata2.append("status_subject","Rejected");

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
        tabel.draw();
          //  table.draw();

            // berhasil(data.status);

              var vurl2; 
              // vurl2 = "<php echo base_url('C_Email/ajax_send_mail_v1')?>";
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
  
    // gagal('Reason wajib diisi');
    // return false;



  }

  function save_progress_responsible(){

    // Simpan_dataef();
    // Simpan_datares();

    var fdata = new FormData();
    // Delete by Hdrid
    fdata.append('hdrid', $('#hdrid').val());
    // alert($('#hdrid').val());
    var vurl2; 
    vurl2 = "<?php echo base_url('C_progress/ajax_save_responsible')?>";

    $.ajax({
        url: vurl2,
        method: "post",
        processData: false,
        contentType: false,
        data: fdata,
        success: function (data) {   

            // Pesan berhasil
            berhasil("Update Done berhasil");    
            $('#exampleModalLabel').modal('hide');

            // Update Containment date actual
            $.ajax({
              url: "<?php echo base_url('C_progress/ajax_update_containment_date_actual') ?>",
              method: "post",
              processData: false,
              contentType: false,
              data: fdata,
              success: function(data) {
              },
              error: function(e) {               
              }
            });

            //  Kirim email
            var fdata2 = new FormData();
            fdata2.append("hdrid",$('#hdrid').val()); 
            fdata2.append("problem_name",$('#problem_name').val()); 
            fdata2.append("group_product_name",$('#group_product_name').val()); 
            fdata2.append("product_name",$('#product_name').val()); 
            fdata2.append("name2",$('#name').val()); 
            fdata2.append("problem_category_name",$('#problem_category_name').val()); 
            fdata2.append("body_content",data.status); 
            fdata2.append("comment",""); 
            fdata2.append("status_subject","");
            fdata2.append('position_code', "4");
          
            $.ajax({
                url: "<?php echo base_url('C_Email/ajax_send_mail_v2')?>",
                method: "post",
                processData: false,
                contentType: false,
                data: fdata2,
                success: function (data) {                
                                            
                },
                error: function (e) {
                    gagal(e);
                
                }
            });




        },
        error: function (e) {
            gagal(e);
            //location.reload();
            //error
        }
    });


  }


</script>
<!-- <php $problem_name1 = $tb_input_problem->problem_name;

?> -->
<script>
  // **On Progress


  // function printData() {
  //   var problem_name = "<php echo $problem_name; ?>";
  //   if (problem_name == 'internal') {
  //     alert('ETHERNAL');
  //   }
  //   alert('HALOOOO DANIII');
  // }

  function containment_other_action(event) {

  var data = $('#containment_other_action').select2('data')[0].text;

}

</script>