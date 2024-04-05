
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Role Access</h1>
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

                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                     <i class="fa fa-binoculars"></i> Custom Filter
                                </a>

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
                    <!-- <th>ROLE ID</th> -->
                    <th>ROLE NAME</th>
                    <!-- <th>ID MENU</th> -->
                    <th>MENU NAME</th>                   
                    <th>ALLOW ADD</th>
                    <th>ALLOW EDIT</th>
                    <th>ALLOW DELETE</th>
                    <th>ALLOW IMPORT</th>
                    <th>ALLOW EXPORT</th>

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
                      <label>FIND ROLE</label>
                    </div>
                    <div class="col-md-8">
                      <select class="form-control select2" id="role_id" name="role_id" onchange="handleSelectChange_role(event)" style="width: 100%;">
                            <option value='0' selected="selected" >-Select-</option>
                                <!-- TAMBAHKAN KODINGAN DISINI -->
                                <?php
                                        foreach ($hasil2 as $value2) {
                                          echo "<option value='$value2->role_id' >$value2->role_id-$value2->role_name</option>";
                                            // echo "<option value='$value->menu_id'>$value->menu_id</option>";
                                        }
                                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="role_name">ROLE NAME</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="role_name" class="form-control" id="role_name" readonly>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label>FIND MENU</label>
                    </div>
                    <div class="col-md-8">
                      <select class="form-control select2" id="menu_id" name="menu_id" onchange="handleSelectChange_menu(event)" style="width: 100%;">
                          <option value='0' selected="selected">-Select-</option>
                                <!-- TAMBAHKAN KODINGAN DISINI -->
                                <?php
                                        foreach ($hasil as $value) {
                                          echo "<option value='$value->menu_id'>$value->menu_id-$value->menu_name</option>";
                                          // echo "<option value='$value->menu_id'>$value->menu_id</option>";
                                        }
                                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">                
                  <div class="row">
                      <div class="col-md-4">
                        <label for="menu_name">MENU NAME</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="menu_name" class="form-control" id="menu_name" readonly>
                      </div>
                  </div>
                </div>

                <div class="form-group" clearfix>
                  <div class="row">

                      <div class="col-md-4">
                                <label for="allow">ALLOW</label>
                      </div>

                     
                      <div class="col-md-1">
                        <div class="icheck-primary d-inline">
                          <div class="col-md-12">
                              <input type="checkbox" name="allow_add" id="allow_add" >
                              <label for="allow_add">
                                ADD
                              </label>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-1">
                        <div class="icheck-primary d-inline">
                          <div class="col-md-12">
                              <input type="checkbox" name="allow_edit" id="allow_edit" >
                              <label for="allow_edit">
                               EDIT
                              </label>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-1">
                        <div class="icheck-primary d-inline">
                          <div class="col-md-12">
                              <input type="checkbox" name="allow_delete" id="allow_delete" >
                              <label for="allow_delete">
                               DELETE
                              </label>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-1">
                        <div class="icheck-primary d-inline">
                          <div class="col-md-12">
                              <input type="checkbox" name="allow_import" id="allow_import" >
                              <label for="allow_import">
                               IMPORT
                              </label>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-1">
                        <div class="icheck-primary d-inline">
                          <div class="col-md-12">
                              <input type="checkbox" name="allow_export" id="allow_export" >
                              <label for="allow_export">
                               EXPORT
                              </label>
                          </div>
                        </div>
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

        role_id: {
        required: true,
        },
        role_name: {
        required: true,
        },
        menu_id: {
        required: true,
        },
        menu_name: {
        required: true,
        },


        // ---------------------------------- / Rule input Macro Batas sini 1--------------------------------

      },
      messages: {
    
				// ---------------------------------- Rule input Macro Batas sini 2---------------------------------

        role_id: {
        required: "Please Input role_id",
        minlength: 3
        },
        role_name: {
        required: "Please Input role_name",
        minlength: 3
        },
        menu_id: {
        required: "Please Input menu_id",
        minlength: 3
        },
        menu_name: {
        required: "Please Input menu_name",
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

          }else if(status=="Edit"||status=="View"){
            
            // Get data
            
            if(status=="View"){
              document.getElementById("btnsubmit").style.visibility = "hidden";  
              $('#exampleModalLabel').text('View Data'); //name view              
            }else{
              $('#exampleModalLabel').text('Edit Data'); //name view 
              $('#btnsubmit').text('Update'); //name Update  
              document.getElementById("btnsubmit").style.visibility = "visible"; 
            }

            $('#hdrid').val(hdrid1);
            var hdrid=hdrid1;
            var form_data_edit=$('#quickForm').serializeArray();
            var field;
            var fieldvalue;

            // Ajax isi data
            $.ajax({
              url: "<?php echo base_url('C_Role_Access/ajax_getbyhdrid')?>",
              method: "get",
              dataType : "JSON",              
              data: {hdrid:hdrid1},
              success: function (data) {

   		            // ---------------------------------- Data val Macro Batas sini ---------------------------------

                    $('#role_id').select2().val(data.role_id).trigger('change');
                    $('#role_name').val(data.role_name);
                    $('#menu_id').select2().val(data.menu_id).trigger('change');
                    $('#menu_name').val(data.menu_name);      

                    if(data.allow_add=='on'){
                        document.getElementById('allow_add').checked=true;
                    }else {
                        document.getElementById('allow_add').checked=false;
                    };

                    // alert(data.allow_add);

                    if(data.allow_edit=='on'){
                        document.getElementById('allow_edit').checked=true;
                    }else {
                          document.getElementById('allow_edit').checked=false;
                    };

                    if(data.allow_delete=='on'){
                        document.getElementById('allow_delete').checked=true;
                    }else {
                          document.getElementById('allow_delete').checked=false;
                    };

                    if(data.allow_import=='on'){
                        document.getElementById('allow_import').checked=true;
                    }else {
                          document.getElementById('allow_import').checked=false;
                    };

                    if(data.allow_export=='on'){
                        document.getElementById('allow_export').checked=true;
                    }else {
                          document.getElementById('allow_export').checked=false;
                    };


                  // ---------------------------------- / Data val Macro  Batas sini ------------------------------
                                                           
                  },
              error: function (e) {
                      alert(e);
                     
                  }
            });


          }else{

            // Get data
            $('#exampleModalLabel').text('View Data'); // Name view                        
            document.getElementById("btnsubmit").style.visibility = "hidden"; // Hidden button     
            vreadonly('#quickForm',true); // Function Read Only form = True           
            // alert(data_form("#quickForm"));

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
          
           if ($('#my_images').val()) {                
                var file_data = $('#my_images').prop('files')[0];     
                fdata.append("file",file_data);
            }else{
              // alert('Please Upload File');
            }

            if(document.getElementById('allow_add').checked==true){
               fdata.append('allow_add', 'on');
            }else {
               fdata.append('allow_add', '');
            };

            if(document.getElementById('allow_edit').checked==true){
               fdata.append('allow_edit', 'on');
            }else {
               fdata.append('allow_edit', '');
            };

            if(document.getElementById('allow_delete').checked==true){
               fdata.append('allow_delete', 'on');
            }else {
               fdata.append('allow_delete', '');
            };

            if(document.getElementById('allow_import').checked==true){
               fdata.append('allow_import', 'on');
            }else {
               fdata.append('allow_import', '');
            };

            if(document.getElementById('allow_export').checked==true){
               fdata.append('allow_export', 'on');
            }else {
               fdata.append('allow_export', '');
            };



          // Print_r(fdata);

          // Simpan or Update data

          var vurl; 
          if($trigger == 'Add') {            
            vurl = "<?php echo base_url('C_Role_Access/ajax_add')?>";
          } else {           
            vurl = "<?php echo base_url('C_Role_Access/ajax_update')?>";
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
      vurl = "<?php echo base_url('C_Role_Access/ajax_delete')?>";

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
                "url": "<?= base_url('C_Role_Access/view_data_where');?>", // URL file untuk proses select datanya
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
                        return '<div class="btn btn-success btn-sm konfirmasiView" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default" > <i class="fa fa-eye"></i></div> <div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div> <div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
                    }  
                },

                // ---------------------------------- Datatables Macro Batas sini ---------------------------------

                {"data":"hdrid"},              
                {"data":"role_name"},             
                {"data":"menu_name"},              
                {"data":"allow_add"},
                {"data":"allow_edit"},
                {"data":"allow_delete"},
                {"data":"allow_import"},
                {"data":"allow_export"},

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

function handleSelectChange_menu(event) {

  var data = $('#menu_id').select2('data')[0].text;

  if (data=='-Select-'){
    $('#menu_name').val('');
  }else{   
    var res = data.split("-");
    $('#menu_name').val(res[1]);
  };
 

  // alert(data[0].text);
  // alert(data[0].id);

  // var selectElement = event.target;
  // var value = selectElement.text;

  // alert(value);

  // return false;

  // var value = data[0].text;
  // var res = value.split("-");
  // var res2 = res[1];

  //  alert(data);

  // $('#menu_id').val(res[0]);
  //  $('#menu_name').val(data[0].text);

}

function handleSelectChange_role(event) {

  // var selectElement = event.target;
  // var value = selectElement.value;
  // var res = value.split("-");
  // $('#role_id').val(res[0]);
  // $('#role_name').val(res[1]);

  var data = $('#role_id').select2('data')[0].text;

  if (data=='-Select-'){
    $('#role_name').val('');   
  }else{
    var res = data.split("-");
    $('#role_name').val(res[1]);
  };


  // var res = data.split("-");

  //  $('#role_name').val(res[1]);



}

</script>






