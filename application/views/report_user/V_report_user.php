
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">report_fa Form</h1>
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
                               
                         <!-- Jika ketemu hak akses -->
                                <?php if (!empty($hak_akses)) { ?> 
                                  <!-- Jika allow add = true -->
                                  <?php if ($hak_akses->allow_add=='on') { ?>
                                    <!-- menampilkan tombol add data-->
                                    <a data-toggle="modal" data-target="#modal-default"  Onclick="view_modal('1','Add')" href="#">
                                      <i class="fa fa-plus"></i> Add Data
                                    </a>
                                  <?php } ?>
                                  <!-- /Jika allow add = true -->
                                <?php } ?>
                                <!-- /Jika ketemu hak akses -->

                                <!-- Jika ketemu hak akses -->
                                <?php if (!empty($hak_akses)) { ?>
                                  <!-- Jika allow_import = true -->
                                  <?php if ($hak_akses->allow_import=='on') { ?>
                                      <a data-toggle="modal" data-target="#modal-import"  href="#">
                                        <i class="fa fa-upload"></i> Import Data
                                      </a>
                                  <?php } ?>
                                 <!-- /Jika allow add = true -->
                                <?php } ?>
                                <!-- /Jika ketemu hak akses -->

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
                    <th>PAYMENT</th>
                    <th>BANK TRANSFER</th>
                    <th>TRANSACTION NO</th>
                    <th>REQUESTER</th>
                    <th>SECTION</th>
                    <th>WHAT REQUEST</th>
                    <th>BUDGET</th>
                    <th>ACCOUNT</th>
                    <th>DESTINATION BANK</th>
                    <th>TRANSFER NAME</th>
                    <th>AMOUNT</th>
                    <th>KURS</th>
                    <th>CURRENCY</th>
                    <th>FINISH PAYMENT</th>



          


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
                        <label for="payment">PAYMENT</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="payment" class="form-control" id="payment" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="bank_transfer">BANK TRANSFER</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="bank_transfer" class="form-control" id="bank_transfer" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="transaction_no">TRANSACTION NO</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="transaction_no" class="form-control" id="transaction_no" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="requester">REQUESTER</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="requester" class="form-control" id="requester" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="section">SECTION</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="section" class="form-control" id="section" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="what_request">WHAT REQUEST</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="what_request" class="form-control" id="what_request" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="budget">BUDGET</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="budget" class="form-control" id="budget" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="account">ACCOUNT</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="account" class="form-control" id="account" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="destination_bank">DESTINATION BANK</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="destination_bank" class="form-control" id="destination_bank" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="transfer_name">TRANSFER NAME</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="transfer_name" class="form-control" id="transfer_name" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="amount">AMOUNT</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="amount" class="form-control" id="amount" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="kurs">KURS</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="kurs" class="form-control" id="kurs" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="currency">CURRENCY</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="currency" class="form-control" id="currency" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="finish_payment">FINISH PAYMENT</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="finish_payment" class="form-control" id="finish_payment" >
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
               
              <form method="POST" action="<?php echo base_url('c_report_fa/import'); ?>" enctype="multipart/form-data">

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
        payment: {
        required: true,
        },
        bank_transfer: {
        required: true,
        },
        transaction_no: {
        required: true,
        },
        requester: {
        required: true,
        },
        section: {
        required: true,
        },
        what_request: {
        required: true,
        },
        budget: {
        required: true,
        },
        account: {
        required: true,
        },
        destination_bank: {
        required: true,
        },
        transfer_name: {
        required: true,
        },
        amount: {
        required: true,
        },
        kurs: {
        required: true,
        },
        currency: {
        required: true,
        },
        finish_payment: {
        required: true,
        },









        // ---------------------------------- / Rule input Macro Batas sini 1--------------------------------

      },
      messages: {
    
				// ---------------------------------- Rule input Macro Batas sini 2---------------------------------
        payment: {
        required: "Please Input payment",
        minlength: 3
        },
        bank_transfer: {
        required: "Please Input bank_transfer",
        minlength: 3
        },
        transaction_no: {
        required: "Please Input transaction_no",
        minlength: 3
        },
        requester: {
        required: "Please Input requester",
        minlength: 3
        },
        section: {
        required: "Please Input section",
        minlength: 3
        },
        what_request: {
        required: "Please Input what_request",
        minlength: 3
        },
        budget: {
        required: "Please Input budget",
        minlength: 3
        },
        account: {
        required: "Please Input account",
        minlength: 3
        },
        destination_bank: {
        required: "Please Input destination_bank",
        minlength: 3
        },
        transfer_name: {
        required: "Please Input transfer_name",
        minlength: 3
        },
        amount: {
        required: "Please Input amount",
        minlength: 3
        },
        kurs: {
        required: "Please Input kurs",
        minlength: 3
        },
        currency: {
        required: "Please Input currency",
        minlength: 3
        },
        finish_payment: {
        required: "Please Input finish_payment",
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
              url: "<?php echo base_url('C_report_fa/ajax_getbyhdrid')?>",
              method: "get",
              dataType : "JSON",              
              data: {hdrid:hdrid1},
              success: function (data) {

   		            // ---------------------------------- Data val Macro Batas sini ---------------------------------                  
                   $('#payment').val(data.payment);
                  $('#bank_transfer').val(data.bank_transfer);
                  $('#transaction_no').val(data.transaction_no);
                  $('#requester').val(data.requester);
                  $('#section').val(data.section);
                  $('#what_request').val(data.what_request);
                  $('#budget').val(data.budget);
                  $('#account').val(data.account);
                  $('#destination_bank').val(data.destination_bank);
                  $('#transfer_name').val(data.transfer_name);
                  $('#amount').val(data.amount);
                  $('#kurs').val(data.kurs);
                  $('#currency').val(data.currency);
                  $('#finish_payment').val(data.finish_payment);




                    






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
            vurl = "<?php echo base_url('C_report_fa/ajax_add')?>";
          } else {           
            vurl = "<?php echo base_url('C_report_fa/ajax_update')?>";
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
      vurl = "<?php echo base_url('C_report_fa/ajax_delete')?>";

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
                "url": "<?= base_url('C_report_fa/view_data_where');?>", // URL file untuk proses select datanya
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
                        mnu=mnu+'<div class="btn btn-success btn-sm konfirmasiView  mr-2" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div>';
                       //Tombol Edit
                        <?php if(!empty($hak_akses)){ if ($hak_akses->allow_edit=='on') { ?>
                            mnu=mnu+'<div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
                        <?php } } ?>

                        //Tombol Delete
                        <?php if(!empty($hak_akses)){ if ($hak_akses->allow_delete=='on') { ?>
                            mnu=mnu+'<div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div>';
                        <?php } } ?>
                        
                        return mnu;

                    }  
                },
                
                // ---------------------------------- Datatables Macro Batas sini ---------------------------------
                 
                {"data":"hdrid"},
                {"data":"payment"},
                {"data":"bank_transfer"},
                {"data":"transaction_no"},
                {"data":"requester"},
                {"data":"section"},
                {"data":"what_request"},
                {"data":"budget"},
                {"data":"account"},
                {"data":"destination_bank"},
                {"data":"transfer_name"},
                {"data":"amount"},
                {"data":"kurs"},
                {"data":"currency"},
                {"data":"finish_payment"},







                // {"data": 'report_no',"sortable": false, //1
                //     render: function (data, type, row) {
                                               
                //         // return '<h1 class="mycus-class2">'+data+'</h1>'
                //         return '<div class="progress progress-xm bg-dark " style="border-radius: 10px;">'+
                //                   '<div class="progress-bar progress-bar bg-yellow" style="width: 50% ">'+'</div>'+
                //                 '</div>'
                //     }
                //   },
                
                






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

  function handleSelectChange_tb_report_fa_id(event) {

  var data = $('#tb_report_fa_id').select2('data')[0].text;

  if (data=='-Select-'){
    $('#tb_report_fa_name').val('');   
  }else{
    var res = data.split("-");
    $('#tb_report_fa_name').val(res[1]);
  };

  }

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






