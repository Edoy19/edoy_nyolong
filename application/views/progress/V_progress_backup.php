
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
                    <label>INTERNAL ID</label>
                  </div>
                  <div class="col-md-8">
                    <select class="form-control select2" id="internal_id" name="internal_id" onchange="handleSelectChange_internal_id(event)" style="width: 100%;">
                      <option value='' selected="selected">-Select-</option>
                      <?php
                        foreach ($internal as $value) {
                        echo "<option value='$value->hdrid'>$value->hdrid-$value->internal_name</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="internal_name">INTERNAL NAME</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="internal_name" class="form-control" id="internal_name" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-4">
                    <label>GROUP PRODUCT ID</label>
                  </div>
                  <div class="col-md-8">
                    <select class="form-control select2" id="group_product_id" name="group_product_id" onchange="handleSelectChange_group_product_id(event)" style="width: 100%;">
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
                      <input type="text" name="group_product_name" class="form-control" id="group_product_name" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-4">
                    <label>PRODUCT ID</label>
                  </div>
                  <div class="col-md-8">
                    <select class="form-control select2" id="product_id" name="product_id" onchange="handleSelectChange_product_id(event)" style="width: 100%;">
                      <option value='' selected="selected">-Select-</option>
                      <?php
                        foreach ($product as $value) {
                        echo "<option value='$value->hdrid'>$value->hdrid-$value->product_name</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="product_name">PRODUCT NAME</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="product_name" class="form-control" id="product_name" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-4">
                    <label>CUSTOMER ID</label>
                  </div>
                  <div class="col-md-8">
                    <select class="form-control select2" id="customer_id" name="customer_id" onchange="handleSelectChange_customer_id(event)" style="width: 100%;">
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
                      <input type="text" name="customer_name" class="form-control" id="customer_name" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="contact_person_name">CONTACT PERSON NAME</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="contact_person_name" class="form-control" id="contact_person_name" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-4">
                    <label>SOURCE INFORMATION ID</label>
                  </div>
                  <div class="col-md-8">
                    <select class="form-control select2" id="source_information_id" name="source_information_id" onchange="handleSelectChange_source_information_id(event)" style="width: 100%;">
                      <option value='' selected="selected">-Select-</option>
                      <?php
                        foreach ($sourceInformation as $value) {
                        echo "<option value='$value->hdrid'>$value->hdrid-$value->source_information_name</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="source_information_name">SOURCE INFORMATION NAME</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="source_information_name" class="form-control" id="source_information_name" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="customer_report_number">CUSTOMER REPORT NUMBER</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="customer_report_number" class="form-control" id="customer_report_number" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="part_number">PART NUMBER</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="part_number" class="form-control" id="part_number" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="qty">QTY</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="qty" class="form-control" id="qty" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="lot_number_product">LOT NUMBER PRODUCT</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="lot_number_product" class="form-control" id="lot_number_product" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="detail_problem">DETAIL PROBLEM</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="detail_problem" class="form-control" id="detail_problem" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="responsible_section">RESPONSIBLE SECTION</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="responsible_section" class="form-control" id="responsible_section" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label>CONTAINMENT DATE:</label>
                    </div>
                    <div class="col-md-4">
                      <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickercontainment_date" data-target-input="nearest">
                        <input type="text" id="containment_date" name="containment_date" class="form-control datetimepicker-input" data-target="#timepickercontainment_date"/>
                          <div class="input-group-append" data-target="#timepickercontainment_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-4">
                    <label>NIK</label>
                  </div>
                  <div class="col-md-8">
                    <select class="form-control select2" id="nik" name="nik" onchange="handleSelectChange_nik(event)" style="width: 100%;">
                      <option value='' selected="selected">-Select-</option>
                      <?php
                        foreach ($nik as $value) {
                        echo "<option value='$value->user_name'>$value->user_name-$value->name</option>";
                        }
                      ?>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="name">NAME</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="name" class="form-control" id="name" >
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label>REPORT DATE:</label>
                    </div>
                    <div class="col-md-4">
                      <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickerreport_date" data-target-input="nearest">
                        <input type="text" id="report_date" name="report_date" class="form-control datetimepicker-input" data-target="#timepickerreport_date"/>
                          <div class="input-group-append" data-target="#timepickerreport_date" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                      <label for="status">STATUS</label>
                    </div>
                    <div class="col-md-8">
                      <input type="text" name="status" class="form-control" id="status" >
                    </div>
                </div>
              </div>


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
                              <table id="problemnyadetail" class="table table-bordered table-hover display nowrap table-striped" style="text-align:center">
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
               
              <form method="POST" action="<?php echo base_url('c_progress/import'); ?>" enctype="multipart/form-data">

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
        internal_id: {
        required: true,
        },
        internal_name: {
        required: true,
        },
        group_product_id: {
        required: true,
        },
        group_product_name: {
        required: true,
        },
        product_id: {
        required: true,
        },
        product_name: {
        required: true,
        },
        customer_id: {
        required: true,
        },
        customer_name: {
        required: true,
        },
        contact_person_name: {
        required: true,
        },
        source_information_id: {
        required: true,
        },
        source_information_name: {
        required: true,
        },
        customer_report_number: {
        required: true,
        },
        part_number: {
        required: true,
        },
        qty: {
        required: true,
        },
        lot_number_product: {
        required: true,
        },
        detail_problem: {
        required: true,
        },
        responsible_section: {
        required: true,
        },
        containment_date: {
        required: true,
        },
        nik: {
        required: true,
        },
        name: {
        required: true,
        },
        report_date: {
        required: true,
        },
        status: {
        required: true,
        },




        // ---------------------------------- / Rule input Macro Batas sini 1--------------------------------

      },
      messages: {
    
				// ---------------------------------- Rule input Macro Batas sini 2---------------------------------
        internal_id: {
        required: "Please Input internal_id",
        minlength: 3
        },
        internal_name: {
        required: "Please Input internal_name",
        minlength: 3
        },
        group_product_id: {
        required: "Please Input group_product_id",
        minlength: 3
        },
        group_product_name: {
        required: "Please Input group_product_name",
        minlength: 3
        },
        product_id: {
        required: "Please Input product_id",
        minlength: 3
        },
        product_name: {
        required: "Please Input product_name",
        minlength: 3
        },
        customer_id: {
        required: "Please Input customer_id",
        minlength: 3
        },
        customer_name: {
        required: "Please Input customer_name",
        minlength: 3
        },
        contact_person_name: {
        required: "Please Input contact_person_name",
        minlength: 3
        },
        source_information_id: {
        required: "Please Input source_information_id",
        minlength: 3
        },
        source_information_name: {
        required: "Please Input source_information_name",
        minlength: 3
        },
        customer_report_number: {
        required: "Please Input customer_report_number",
        minlength: 3
        },
        part_number: {
        required: "Please Input part_number",
        minlength: 3
        },
        qty: {
        required: "Please Input qty",
        minlength: 3
        },
        lot_number_product: {
        required: "Please Input lot_number_product",
        minlength: 3
        },
        detail_problem: {
        required: "Please Input detail_problem",
        minlength: 3
        },
        responsible_section: {
        required: "Please Input responsible_section",
        minlength: 3
        },
        containment_date: {
        required: "Please Input containment_date",
        minlength: 3
        },
        nik: {
        required: "Please Input nik",
        minlength: 3
        },
        name: {
        required: "Please Input name",
        minlength: 3
        },
        report_date: {
        required: "Please Input report_date",
        minlength: 3
        },
        status: {
        required: "Please Input status",
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
            vurl = "<?php echo base_url('C_progress/ajax_update')?>";
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
                {"data":"group_product_id"},
                {"data":"group_product_name"},
                {"data":"customer_id"},
                {"data":"customer_name"},

                



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


  function handleSelectChange_internal_id(event) {
 
    var data = $('#internal_id').select2('data')[0].text;
    
    if (data=='-Select-'){
      $('#internal_name').val('');   
    }else{
      var res = data.split("-");
      $('#internal_name').val(res[1]);
    };

  }

  function handleSelectChange_group_product_id(event) {

    var data = $('#group_product_id').select2('data')[0].text;
    
    if (data=='-Select-'){
      $('#group_product_name').val('');   
    }else{
      var res = data.split("-");
      $('#group_product_name').val(res[1]);
    };

  }


  function handleSelectChange_product_id(event) {

    var data = $('#product_id').select2('data')[0].text;

    if (data=='-Select-'){
      $('#product_name').val('');   
    }else{
      var res = data.split("-");
      $('#product_name').val(res[1]);
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

  function handleSelectChange_source_information_id(event) {

    var data = $('#source_information_id').select2('data')[0].text;

    if (data=='-Select-'){
      $('#source_information_name').val('');   
    }else{
      var res = data.split("-");
      $('#source_information_name').val(res[1]);
    };

  }


  function handleSelectChange_nik(event) {

  var data = $('#nik').select2('data')[0].text;

  if (data=='-Select-'){
    $('#name').val('');   
  }else{
    var res = data.split("-");
    $('#name').val(res[1]);
  };

}

  


  
  



  









</script>




<!-- datatables macro 2 -->


<script type="text/javascript">

  var tabel2 = null;


  $(document).ready(function() {

    
      tabel2 = $('#problemnyadetail').DataTable({
          "processing": true,
          "responsive":true,
          "serverSide": true,
          "autowidth" : false,
          "info":true,
          "ordering": true, // Set true agar bisa di sorting
          "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
          "ajax":
          {
              "url": "<?= base_url('C_progress/view_data_wheredetailproblem');?>", // URL file untuk proses select datanya
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
        
              {"data":'meeting_file',"sortable": false, //1
                  render: function (data, type, row, meta) {
                      // return meta.row + meta.settings._iDisplayStart + 1;
                      // return '<div class="btn btn-success btn-sm data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div> <div class="btn btn-danger btn-sm konfirmasiApprove" data-id="'+ data +'" data-toggle="modal" data-target="#modal-confirm-approve" > <i class="fa fa-trash"></i></div> <div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
                       return '<a class="btn btn-success btn-sm"  href="<?php echo base_url('assets/upload/Meeting/')."'+ data +'"?>"  target="_blank"> <i class="fa fa-paperclip"></i> View File </a>';
                  }  
              },
              {"data":"status"},

          ],
      });

      


  });
  
</script>
