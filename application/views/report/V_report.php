
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) --> 
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">
            <?php echo ucwords($menu_name) ?></h1>
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
                                <!-- <php if (!empty($hak_akses)) { ?>  -->
                                  <!-- Jika allow add = true -->
                                  <!-- <php if ($hak_akses->allow_add=='on') { ?> -->
                                    <!-- menampilkan tombol add data-->
                                    <!-- <a data-toggle="modal" data-target="#modal-default"  Onclick="view_modal('1','Add')" href="#">
                                      <i class="fa fa-plus"></i> Add Data
                                    </a> -->
                                  <!-- <php } ?> -->
                                  <!-- /Jika allow add = true -->
                                <!-- <php } ?> -->
                                <!-- /Jika ketemu hak akses -->

                                 <?php echo $hak_akses->allow_import ?>
                                

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
                      <th>ID ADVANCE</th>
                      <th>ID SETTLEMENT</th>
                      <th>DATE</th>
                      <th>STATUS TRANSACTION</th>
                      <th>NIK</th>
                      <th>NAME</th>
                      <th>KODE SECTION</th>
                      <th>SECTION</th>
                      <th>DETAIL REQUEST</th>
                      <th>BUDGETS</th>
                      <th>USING BUDGET</th>
                      <th>SECTION</th>
                      <th>ADDITIONAL SECTION</th>
                      <th>ACCOUNT ADVANCE</th>
                      <th>CURRENCY</th>
                      <th>NOMINAL</th>
                      <!-- <th>STATUS</th> -->
                      <th>CURRENCY </th>
                      <th>NOMINAL </th>
                      <th>ACCOUNT BUDGET </th>
                      <th>CURRENCY </th>
                      <th>NOMINAL </th>
                      <th>TRANSFER NAME </th>
                      <th>BANK </th>
                      <th>ACCOUNT NUMBER </th>
                      <th>ATTACH INVOICE</th>
                      <th>ATTACH FAKTUR</th>
                      <th>ATTACH PO NUMBER</th>
                      <th>ATTACH OTHER FILE</th>
                      <th>INVOICE NO</th>
                      <th>FAKTUR PAJAK NO</th>
                      <th>PO NUMBER/AGREEMENT</th>
                      <th>OTHER FILE</th>
                      <th>NAMA_BANK</th>
                      <th>TRANSFER_DATE</th>
                      <!-- <th>NOMINAL1</th> -->
                      <th>TIPE_TRANSFER</th>
                      <th>PAYEE_CODE</th>
                      <th>DPP VAT</th>
                      <th>VAT</th>
                      <th>VAT AMOUNT</th>
                      <th>DPP WHT</th>
                      <th>WHT</th>
                      <th>WHT PERSEN</th>
                      <th>WHT AMOUNT</th>
                      <th>TOTAL TAX</th>
                      <th>TOTAL PAYMENT</th>
                      <th>BANK NAME SETTLEMENT</th>
                      <th>TRANSFER DATE SETTLEMENT</th>
                      <!-- <th>NOMINAL</th> -->
                      <th>TYPE SETTLEMENT</th>
                      <th>PAYEE CODE SETTLEMENT</th>
                      <th>RECEIVED PAYMENT DATE</th>
                      <!-- /Th Macro Batas Sini -->
                            
                    </tr>

                  </thead>

                  <!-- <tbody></tbody> -->
              
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
                  <h4 class="modal-title" id="exampleModalLabel">ADD DATA </h5>
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
                        <label for="hdrid_pc">ID SETTLEMENT </label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="hdrid_pc" class="form-control" id="hdrid_pc" placeholder="auto generate" readonly>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="hdrid">ID ADVANCE</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="hdrid" class="form-control" id="hdrid" placeholder="auto generate" readonly>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label>DATE:</label>
                      </div>
                      <div class="col-md-4">
                        <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickerdate" data-target-input="nearest">
                          <input type="text" id="date" name="date" class="form-control datetimepicker3-input" data-target="#timepickerdate" readonly/>
                            <div class="input-group-append" data-target="#timepickerdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
                <h5><label>REQUEST BY</label></h5>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                          <label for="nik">NIK</label>
                        </div>
                        <div class="col-md-8">
                          <input type="text" name="nik" class="form-control" id="nik" readonly>                   
                        </div>
                      </div>
                    </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="name">NAME</label>
                      </div>
                      <div class="col-md-8">
                          <input type="text" name="name" class="form-control" id="name" readonly>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="kode_section">KODE SECTION</label>
                      </div>
                      <div class="col-md-8">
                    <input type="text" name="kode_section" class="form-control" id="kode_section" readonly>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="section">SECTION</label>
                      </div>
                      <div class="col-md-8">
                    <input type="text" name="section" class="form-control" id="section" readonly>
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="detail_request">DETAIL REQUEST</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="detail_request" class="form-control" id="detail_request" >
                      </div>
                  </div>
                </div>
                <div class="form-group">

                    <div class="row">
                        <div class="col-md-4">
                        </div>

                        <div class="col-md-4">
                          <div class="form-group" clearfix>
                            <div class="icheck-primary d-inline">
                                <input type="radio" id="budgets" value="budget" name="budgets"  >
                                <label for="budgets">
                                    BUDGETS
                                </label>
                            </div>
                            <div class="icheck-primary d-inline">                          
                                <input type="radio" id="budgets2" value="non_budgets" name="budgets"  >
                                <label for="budgets2">
                                    NON BUDGET
                                </label>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4">
                            <input type="text" name="non_budget_remark" class="form-control" id="non_budget_remark" placeholder="non budget remark...">
                        </div>

                    </div>

                </div>

                <div class="form-group">
                    <div class="row">
                      <div class="col-md-4">
                        <label>USING BUDGET</label>
                      </div>
                      <div class="col-md-8">
                      <select class="form-control select2" id="using_budget" name="using_budget" onchange="handleSelectChange_use_bud(event)" style="width: 100%;">
                      <option value='' selected="selected">-Select-</option>
                      <?php
                      foreach ($use_budget as $value) {
                        echo "<option value='$value'>$value</option>";
                      }
                      ?>
                    </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                    <div class="col-md-4">
                    <label for="kode_section_budget">SECTION</label>
                    </div>
                  <div class="col-md-8">
                    <select class="form-control select2" id="kode_section_budget" name="kode_section_budget" onchange="handleSelectChange_kode_section(event)" style="width: 100%;">
                      <option value='' selected="selected">-Select-</option>
                      <?php
                        foreach ($department as $value) {
                        echo "<option value='$value->department_code'>$value->department_code-$value->department_name</option>"; 
                          }
                        ?>
                      </select>
                  </div>
                </div>
              </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-8">
                      <input type="text" name="nama_section_budget" class="form-control" id="nama_section_budget" readonly >
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                          <div class="row">
                              <div class="col-md-4">
                                <label>ADDITIONAL SECTION</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="additional_section" class="form-control" id="additional_section" placeholder="Additonal Section">
                              </div>
                          </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                        <div class="col-md-4">
                          <label>ACCOUNT ADVANCE</label>
                        </div>

                        <div class="col-md-8">
                          <input type="text" name="account_adv" class="form-control" id="account_adv" placeholder="Acc.Number/Budget No..." readonly >
                        </div>
                    </div>
                  </div>

                <div class="form-group">
                        <div class="row">
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="account_name_adv" class="form-control" id="account_name_adv" placeholder="Account Name..." readonly >
                      </div>
                  </div>
                </div>
                <!-- <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="other_department">OTHER DEPARTMENT</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="other_department" class="form-control" id="other_department" >
                      </div>
                  </div>
                </div> -->
           <!--Ini Berhasil-->

          <div class="card card-primary">
                  <div class="card-header">
                    <h4 class="card-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoapproval3">
                        <b> DETAIL </b>
                      </a>
                    </h4>
                  </div>                  
                  <div id="collapseTwoapproval3" class="panel-collapse collapse">
                    <div class="card-body">   
                      <br>
                        <h5><label>AMOUNT REQUEST</label></h5>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-4">
                              <label>CURRENCY</label>
                            </div>
                            <div class="col-md-8">
                              <select class="form-control select2" id="currency" name="currency" onchange="handleSelectChange_currency(event)"  style="width: 100%;">
                                <option value='' selected="selected">-Select-</option>
                                <?php
                                  foreach ($currency as $value) {
                                  echo "<option value='$value->currency'>$value->currency</option>";
                                  }
                                ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                              <div class="col-md-4">
                                <label for="nominal">NOMINAL</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="nominal" class="form-control" id="nominal" onchange="numberic_format(event)" onfocus="myFunction(this)">
                              </div>
                          </div>
                        </div>
                        <br>
                        <div id="bene">
                        <h5><label>BENEFICIARY</label></h5>
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
                                <label for="bank">BANK</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="bank" class="form-control" id="bank" >
                              </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                              <div class="col-md-4">
                                <label for="account_number">ACCOUNT NUMBER</label>
                              </div>
                              <div class="col-md-8">
                                <input type="text" name="account_number" class="form-control" id="account_number">
                              </div>
                          </div>
                        </div>
                        <br>
                        </div>

                <div id="actualex">
                <h5><label>ACTUAL EXPENSE</label></h5>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label>CURRENCY </label>
                    </div>
                    <div class="col-md-8">
                      <select class="form-control select2" id="currency_ae" name="currency_ae" onchange="handleSelectChange_currency_ae(event)" style="width: 100%;">
                        <option value='' selected="selected">-Select-</option>
                        <?php
                          foreach ($currency as $value) {
                          echo "<option value='$value->currency'>$value->currency</option>";
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="nominal_ae">NOMINAL </label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="nominal_ae" class="form-control" id="nominal_ae" onchange="numberic_format(event);reff(event);" onfocus="myFunction(this)" >
                      </div>
                  </div>
                </div>
                   <div class="form-group">
                      <div class="row">
                     <div class="col-md-4">
                     <label for="account_budget_ae">ACCOUNT BUDGET </label>
                     </div>
                    <div class="col-md-8">
                      <select class="form-control select2" id="account_budget_ae" name="account_budget_ae" onchange="handleSelectChange_account_budget(event)" style="width: 100%;">
                        <option value='' selected="selected">-Select-</option>
                        <?php
                          foreach ($account as $value) {
                          echo "<option value='$value->nomor_account'>$value->nomor_account-$value->nama_account</option>"; 
                           }
                         ?>
                       </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                        <div class="row">
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="account_name_pc" class="form-control" id="account_name_pc" placeholder="Account Name..." readonly >
                      </div>
                  </div>
                </div>         
                <br>
                <h5><label>BALANCE AMOUNT (LESS/OVER)</label></h5>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                      <label>CURRENCY </label>
                    </div>
                    <div class="col-md-8">
                      <select class="form-control select2" id="currency_ba" name="currency_ba" onchange="handleSelectChange_currency_ba(event)" style="width: 100%;">
                        <option value='' selected="selected">-Select-</option>
                        <?php
                          foreach ($currency as $value) {
                          echo "<option value='$value->currency'>$value->currency</option>";
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="nominal_ba">NOMINAL </label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="nominal_ba" class="form-control" id="nominal_ba" readonly >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="transfer_name_ba">TRANSFER NAME </label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="transfer_name_ba" class="form-control" id="transfer_name_ba"  >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="bank_ba">BANK </label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="bank_ba" class="form-control" id="bank_ba" >
                      </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                      <div class="col-md-4">
                        <label for="account_number_ba">ACCOUNT NUMBER </label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="account_number_ba" class="form-control" id="account_number_ba" >
                      </div>
                  </div>
                </div><br>
                </div>
                <h5><label>SUPPORT DOCUMENT ADVANCE</label></h5>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                    <input type="text" name="invoice_no" class="form-control" id="invoice_no" placeholder="Invoice No">
                    </div>
                    <div class="col-md-1">
                      <a class="btn btn-success" id="attach_invoice_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                    </div>
                    <div class="col-md-7">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="attach_invoice" multiple="" name="attach_invoice">
                        <label class="custom-file-label" for="attach_invoice" id="attach_invoice_label">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                    <input type="text" name="faktur_pajak" class="form-control" id="faktur_pajak" placeholder="Faktur Pajak No">
                    </div>
                    <div class="col-md-1">
                      <a class="btn btn-success" id="attach_faktur_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                    </div>
                    <div class="col-md-7">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="attach_faktur" multiple="" name="attach_faktur">
                        <label class="custom-file-label" for="attach_faktur" id="attach_faktur_label">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                    <input type="text" name="po_number" class="form-control" id="po_number" placeholder="PO Number" >
                    </div>
                    <div class="col-md-1">
                      <a class="btn btn-success" id="attach_po_number_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                    </div>
                    <div class="col-md-7">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="attach_po_number" multiple="" name="attach_po_number">
                        <label class="custom-file-label" for="attach_po_number" id="attach_po_number_label">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>  
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-4">
                    <input type="text" name="other_file" class="form-control" id="other_file" placeholder="Other File">
                    </div>
                    <div class="col-md-1">
                      <a class="btn btn-success" id="attach_other_file_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                    </div>
                    <div class="col-md-7">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="attach_other_file" multiple="" name="attach_other_file">
                        <label class="custom-file-label" for="attach_other_file" id="attach_other_file_label">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>             
                <div id="sup_set">
                <h5><label>SUPPORT DOCUMENT SETTLEMENT</label></h5>
                <div class="form-group">
                  <div class="row">
                  <div class="col-md-4">
                    <input type="text" name="invoice_no_set" class="form-control" id="invoice_no_set" placeholder="Invoice No">
                    </div>
                    <div class="col-md-1">
                      <a class="btn btn-success" id="attach_invoice_set_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                    </div>
                    <div class="col-md-7">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="attach_invoice_set" multiple="" name="attach_invoice_set">
                        <label class="custom-file-label" for="attach_invoice_set" id="attach_invoice_set_label">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">

                  <div class="col-md-4">
                    <input type="text" name="faktur_pajak_set" class="form-control" id="faktur_pajak_set" placeholder="Faktur pajak">
                    </div>

                    <div class="col-md-1">
                      <a class="btn btn-success" id="attach_pajak_set_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                    </div>
                    
                    <div class="col-md-7">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="attach_pajak_set" multiple="" name="attach_pajak_set">
                        <label class="custom-file-label" for="attach_pajak_set" id="attach_pajak_set_label">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">

                  <div class="col-md-4">
                    <input type="text" name="po_number_set" class="form-control" id="po_number_set" placeholder="PO Number">
                    </div>

                    <div class="col-md-1">
                      <a class="btn btn-success" id="attach_po_number_set_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                    </div>

                    <div class="col-md-7">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="attach_po_number_set" multiple="" name="attach_po_number_set">
                        <label class="custom-file-label" for="attach_po_number_set" id="attach_po_number_set_label">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">

                  <div class="col-md-4">
                    <input type="text" name="other_file_set" class="form-control" id="other_file_set" placeholder="Other file">
                    </div>

                    <div class="col-md-1">
                      <a class="btn btn-success" id="attach_other_file_set_view" target="_blank"> <i class="fa fa-paperclip"></i> </a>
                    </div>

                    <div class="col-md-7">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="attach_other_file_set" multiple="" name="attach_other_file_set">
                        <label class="custom-file-label" for="attach_other_file_set" id="attach_other_file_set_label">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
                
                  

                    </div>
                  </div>
                </div>
                  <!-- APPROVAL -->
      <div class="card card-green">
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
            
                <!-- PAYMENT -->
                <div id="pay_adv">
                <div class="card card-danger" <?php if($menu_name!="FA Closing advance"){echo "";} ?> >
                  <div class="card-header">
                    <h4 class="card-title"> 
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoapproval4">
                        <b> PAYMENT ADVANCE </b>
                      </a>
                    </h4>
                  </div>
                  </div>
                               
                  <div id="collapseTwoapproval4" class="panel-collapse collapse">
                    <div class="card-body"> 
                        <div class="row">                                                                                                       
                             <div class="col-md-6">                              
                                <div class="card card-warning">
                                    <div class="card-header">
                                      <h4 class="card-title">                                      
                                          <b> BANK TRANSFER </b>                                      
                                      </h4>
                                    </div>                                  
                                      <div class="card-body">   
                                      <div class="form-group">
                                        <div class="row">                                           
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-4">
                                            <label>BANK NAME</label>
                                          </div>
                                          <div class="col-md-8">
                                            <select class="form-control select2" id="nama_bank" name="nama_bank" onchange="handleSelectChange_bank_name(event)" style="width: 100%;">
                                              <option value='' selected="selected">-Select-</option>
                                              <?php
                                                 foreach ($nama_bank_set as $value) {
                                                  echo "<option value='$value->bank_name'>$value->bank_name</option>";
                                                  }
                                              ?>
                                            </select>
                                          </div>
                                        </div>
                                      </div> 
                                      <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                              <label>TRANSFER DATE:</label>
                                            </div>
                                            <div class="col-md-8">
                                              <div class="input-group date" data-date-format="YYYY-MM-DD"  id="timepickertransfer_date" data-target-input="nearest">
                                                <input type="text" id="transfer_date" name="transfer_date" class="form-control datetimepicker-input" data-target="#timepickertransfer_date"/>
                                                  <div class="input-group-append" data-target="#timepickertransfer_date" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                  </div>
                                              </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-4">
                                          <label for="nominal_label3">NOMINAL : </label>
                                        </div>
                                        <div class="col-md-8">
                                          <label for="nominal_label3"><div id="nominal_test2"></div></label> 
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-4">
                                            <label>TYPE</label>
                                          </div>
                                          <div class="col-md-8">
                                            <select class="form-control select2" id="tipe_transfer" name="tipe_transfer" onchange="handleSelectChange_tipe_transfer(event)" style="width: 100%;">
                                              <option value='' selected="selected">-Select-</option>
                                              <?php
                                                foreach ($tipe_transfer as $value) {
                                                echo "<option value='$value->tipe_transfer'>$value->tipe_transfer-$value->tipe_transfer</option>";
                                                }
                                              ?>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-4">
                                            <label>PAYEE CODE</label>
                                          </div>
                                          <div class="col-md-8">
                                            <select class="form-control select2" id="payee_code" name="payee_code" onchange="handleSelectChange_payee_code(event)" style="width: 100%;">
                                              <option value='' selected="selected">-Select-</option>
                                              <?php
                                                foreach ($payee_code as $value) {
                                                echo "<option value='$value->payee_code'>$value->payee_code-$value->payee_code</option>"; 
                                                }
                                              ?>
                                            </select>
                                          </div>
                                        </div>
                                      </div> 
                                              
                                      <div class="card-footer">
                                      <!-- <button type="button" class="btn btn-primary"id="btnsubmitpay" onclick="Update_pay()">Payment</button> -->
                                      </div>
                                  </div>
                                 
                             </div>
                        </div>
                    </div>
                                              </div>              
                </div>
                </div>
                <div class="card card-danger" <?php if($menu_name!="FA Closing settlement"){echo "";} ?>  id="pay_set">
                  <div class="card-header">
                    <h4 class="card-title">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwoapproval2">
                        <b> PAYMENT SETTLEMENT</b>
                      </a>
                    </h4>
                  </div>     
                <div class="row">             
                  <div id="collapseTwoapproval2" class="panel-collapse collapse">
                    <div class="card-body">   
                        <div class="row">            
                              <div class="col-md-6">
                                <!-- PAYMENT -->
                                <div class="card card-info">
                                  <div class="card-header">
                                    <h4 class="card-title">                                     
                                        <b> TAX INFO </b>                                     
                                    </h4>
                                  </div>        
                                                                                              
                                    <div class="card-body">   
                                    <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-4">
                                            <label for="dpp">DPP VAT</label>
                                          </div>
                                          <div class="col-md-8">
                                            <!-- <input type="text" name="dpp" class="form-control" id="dpp" > -->
                                            <input type="text" name="dpp" id="dpp" class="form-control" onchange="numberic_format(event);taxinfo(event);" onfocus="myFunction(this)" >
                                          </div>
                                      </div> 
                                    </div>
                                      <div class="form-group">
                                        <div class="row">
                                      <div class="col-md-4">
                                      <label for="vat">VAT </label>
                                      </div>
                                      <div class="col-md-8">
                                        <select class="form-control select2" id="vat" name="vat" onchange="handleSelectChange_vat(event)" onfocus="taxinfo(event)" style="width: 100%;">
                                          <option value='' selected="selected">-Select-</option>
                                          <?php
                                            foreach ($va as $value) {
                                            echo "<option value='$value->vat'>$value->vat</option>"; 
                                            }
                                          ?>
                                        </select>
                                      </div>
                                    </div>
                                  </div>         
                                    <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-4">
                                            <label for="vat_amount"> VAT AMOUNT</label>
                                          </div>
                                          <div class="col-md-8">
                                            <!-- <input type="text" name="vat_amount" class="form-control" id="vat_amount" readonly> -->
                                            <input type="text" name="vat_amount" id="vat_amount" class="form-control" onchange="taxinfo(event)" readonly >
                                          </div>
                                      </div>
                                    </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                            <label for="dpp_wht">DPP WHT</label>
                                          </div>
                                          <div class="col-md-8">
                                            <!-- <input type="text" name="dpp_wht" class="form-control" id="dpp_wht" > -->
                                            <input type="text" name="dpp_wht" id="dpp_wht" class="form-control" onchange="numberic_format(event);taxinfo(event);" onfocus="myFunction(this)" >
                                          </div>
                                      </div>
                                    <br>
                                    <div class="form-group">
                                        <div class="row">
                                      <div class="col-md-4">
                                      <label for="wht">WHT </label>
                                      </div>
                                      <div class="col-md-8">
                                        <select class="form-control select2" id="wht" name="wht" onchange="handleSelectChange_wht(event)" style="width: 100%;">
                                          <option value='' selected="selected">-Select-</option>
                                          <?php
                                            foreach ($wht2 as $value) {
                                            echo "<option value='$value->wht'>$value->wht-$value->wht_persen</option>"; 
                                            }
                                          ?>
                                        </select>
                                      </div>
                                    </div>
                                  </div> 
                                  
                                    <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-4">
                                            <label for="wht_persen">WHT PERSEN</label>
                                          </div>
                                          <div class="col-md-8">
                                            <!-- <input type="text" name="wht_persen" class="form-control" id="wht_persen" readonly > -->
                                            <input type="text" name="wht_persen" id="wht_persen" class="form-control" onchange="taxinfo(event)" readonly >
                                          </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-4">
                                            <label for="wht_amount">WHT AMOUNT(DPP WHT X WHT PERSEN)</label>
                                          </div>
                                          <div class="col-md-8">
                                            <!-- <input type="text" name="wht_amount" class="form-control" id="wht_amount" readonly > -->
                                            <input type="text" name="wht_amount" id="wht_amount" class="form-control" onchange="taxinfo(event)" readonly >
                                          </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-4">
                                            <label for="total_tax">TOTAL TAX(VAT AMOUNT - WHT AMOUNT)</label>
                                          </div>
                                          <div class="col-md-8">
                                            <!-- <input type="text" name="total_tax" class="form-control" id="total_tax" readonly > -->
                                            <input type="text" name="total_tax" id="total_tax" class="form-control" onchange="taxinfo(event)" readonly >
                                          </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                          <div class="col-md-4">
                                            <label for="total_payment">TOTAL PAYMENT(DPP VAT + TOTAL TAX)</label>
                                          </div>
                                          <div class="col-md-8">
                                          <input type="text" name="total_payment" id="total_payment" class="form-control" onchange="taxinfo(event)" readonly >
                                          </div>                                                                        
                                      </div>
                                      <div class="card-footer">
                                    <button type="button" class="btn btn-primary" id="btnsubmittax" onclick="Return_report()" >Update Payment Tax</button>
                                    </div>
                                    </div>                                    
                              </div>
                              </div>
                              </div>
                                <!-- /PAYMENT -->
                            <div class="col-md-6">
                                <!-- BANK TRANSFER -->
                                <div class="card card-warning" id="bankcard">
                                    <div class="card-header">
                                      <h4 class="card-title">
                                      
                                      
                                          <b> BANK TRANSFER </b>
                                      
                                      </h4>
                                    </div>                  
                                  
                                      <div class="card-body">   
                                      <div class="form-group">
                                        <div class="row">                                           
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-4">
                                            <label>NAMA BANK</label>
                                          </div>
                                          <div class="col-md-8">
                                            <select class="form-control select2" id="nama_bank_settlement" name="nama_bank_settlement" onchange="handleSelectChange_nama_bank_settlement(event)" style="width: 100%;">
                                              <option value='' selected="selected">-Select-</option>
                                              <?php
                                                foreach ($nama_bank_set as $value) {
                                                echo "<option value='$value->bank_name'>$value->bank_name</option>";
                                                }
                                              ?>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                              <label>TRANSFER DATE:</label>
                                            </div>
                                            <div class="col-md-8">
                                              <div class="input-group date" data-date-format="YYYY-MM-DD"  id="transfer_date_set" data-target-input="nearest">
                                                <input type="text" id="transfer_date_settlement" name="transfer_date_settlement" class="form-control datetimepicker1-input" data-target="#transfer_date_set"/>
                                                  <div class="input-group-append" data-target="#transfer_date_set" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                  </div>
                                              </div>
                                            </div>
                                        </div>
                                      </div>
                                      <div class="row">
                                        <div class="col-md-4">
                                          <label for="nominal_label">NOMINAL : </label>
                                        </div>
                                        <div class="col-md-8">
                                          <label for="nominal_label"><div id="nominal_test"></div></label> 
                                        </div>
                                    </div>
                                      <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-4">
                                            <label>TYPE</label>
                                          </div>
                                          <div class="col-md-8">
                                            <select class="form-control select2" id="tipe_transfer_settlement" name="tipe_transfer_settlement" onchange="handleSelectChange_tipe_transfer(event)" style="width: 100%;">
                                              <option value='' selected="selected">-Select-</option>
                                              <?php
                                                foreach ($tipe_transfer as $value) {
                                                echo "<option value='$value->tipe_transfer'>$value->tipe_transfer-$value->tipe_transfer</option>";
                                                }
                                              ?>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="row">
                                          <div class="col-md-4">
                                            <label>PAYEE CODE</label>
                                          </div>
                                          <div class="col-md-8">
                                            <select class="form-control select2" id="payee_code_settlement" name="payee_code_settlement" onchange="handleSelectChange_payee_code(event)" style="width: 100%;">
                                              <option value='' selected="selected">-Select-</option>
                                              <?php
                                                foreach ($payee_code as $value) {
                                                echo "<option value='$value->payee_code'>$value->payee_code-$value->payee_code</option>"; 
                                                }
                                              ?>
                                            </select>
                                          </div>
                                        </div>
                                      </div>         
                                      <div class="card-footer">
                                      <button type="button" class="btn btn-primary" id="btnsubmitpay" onclick="Update_pay()">Update Payment</button>
                                              </div>
                                              <div class="col-md-6">

                                              </div>
                                              <div class="col-md-6">
                                                
                                              </div>
                                          </div>                                                                    
                                          
                                        </div>
                                        <!-- /BANK TRANSFER -->
                                        <!-- Received payment -->
                                        <div class="card card-warning" id="datecard">
                                            <div class="card-header">
                                              <h4 class="card-title">
                                              <b> DATE RECEIVED PAYMENT </b>
                                              </div> 
                                              <div class="card-body">

                                              <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                      <label>RECEIVED PAYMENT DATE:</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                      <div class="input-group date" data-date-format="YYYY-MM-DD"  id="received_pay" data-target-input="nearest">
                                                        <input type="text" id="received_payment" name="received_payment" class="form-control datetimepicker1-input" data-target="#received_pay"/>
                                                          <div class="input-group-append" data-target="#received_pay" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                          </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                    
                                                  <div class="row">
                                                      <div class="col-md-4">
                                                        <label for="nominal_label1">NOMINAL : </label>
                                                      </div>
                                                      <div class="col-md-8">
                                                        <label for="nominal_label1"><div id="nominal_test1"></div></label> 
                                                      </div>
                                                  </div>
                                              </div>
                                              
                                            </div>
                                            <div class="card-footer">
                                              <center>
                                              <button type="button" class="btn btn-primary" id="btnsubmitrec" onclick="Update_rec()">Update Received Payment</button>
                                            </div>
                                          </div>
                                          <!-- /Received payment -->

                            </div>
                          </div>
                    </div></table>                  
                </div>

                <!-- /PAYMENT -->
                </div>


        <!---------------------------------- / Form Macro Batas sini ---------------------------------->

                <!-- Close Card Body -->  
                </div>
                
                  
                  <div class="card-footer">
                    <div class="btn btn-success btn-sm konfirmasiApprove" data-id='' data-toggle="modal" data-target="#modal-confirm-approve" id="btn_approve_footer"  > Approve <i class="far fa-thumbs-up"></i></div>
                    <div class="btn btn-danger btn-sm konfirmasiReject" data-id='' data-toggle="modal" data-target="#modal-reject" id="btn_reject_footer"   > Reject <i class="far fa-thumbs-down"></i></div>
                    <button type="submit" class="btn btn-primary" id="btnsubmit"   >Save</button>                 
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
    </div>

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
              <label id="idapprove2"  > </label>Apakah ingin approve <label id="idapprove" hidden > </label> ?
              <label id="idposition_code" hidden > </label>
              <br>
              <label id="lblposition"  > </label>
              <br>
              <label id="lbluserconfirm" hidden > <?php echo $this->session->userdata('nama'); ?> </label>
              <label id="iduserlogin" hidden > <?php echo $this->session->userdata('user_name'); ?> </label>
            </div>
                            
            <div class="modal-footer justify-content-between">

              <button type="button" id="approve" onclick="Approve_data()" class="btn btn-outline-light">Approve</button>
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>

            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

       <!-- modal-confirm-return -->
       <div class="modal fade" id="modal-confirm-return">
        <div class="modal-dialog">
          <div class="modal-content bg-warning">

            <div class="modal-header">
              <h4 class="modal-title"> REPORT PAYMENT</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
              <label id="label_report"  >LIST REPORT  </label> 
              <!-- <label id="idposition_code" hidden > </label> -->
              <br>
              <!-- <label id="lblposition"  > </label> -->
              <br>
            </div>
                            
            <div class="modal-footer justify-content-between">

              <button type="button" id="return" onclick="Return_report()" class="btn btn-outline-light">YES</button>
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">CANCEL</button>

            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- modal-confirm-reject -->
      <div class="modal fade" id="modal-reject">
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
              <button type="button" id="process_reject" onclick="Reject_data3()" class="btn btn-outline-light">Reject</button>
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancel</button>

            </div>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal Reject-->
      <!-- Akhir modal approve -->

      <!-- modal-Delete -->
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

              <form method="POST" action="<?php echo base_url('C_report/import'); ?>" enctype="multipart/form-data">

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
              
              <!-- <button type="button" id="delete"  class="btn btn-outline-light">Import</button>                   
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>                -->
              
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

      // hdrid: {
      // required: true,
      // },
      // hdrid: {
      // required: true,
      // },
      // transaction_date: {
      // required: true,
      // },
      // date: {
      // required: true,
      // },
      // nik: {
      // required: true,
      // },
      // name: {
      // required: true,
      // },
      // kode_section: {
      // required: true,
      // },
      // section: {
      // required: true,
      // },
      // detail_request: {
      // required: true,
      // },
      // non_budget_remark: {
      // required: true,
      // },
      // budgets: {
      // required: true,
      // },
      // using_budget: {
      // required: true,
      // },
      // kode_section_budget: {
      // required: true,
      // },
      // additional_section: {
      // required: true,
      // },
      // account_adv: {
      // required: true,
      // },
      // currency: {
      // required: true,
      // },
      // nominal: {
      // required: true,
      // },
      // currency_ae: {
      // required: true,
      // },
      // nominal_ae: {
      // required: true,
      // },
      // account_budget_ae: {
      // required: true,
      // },
      // currency_ba: {
      // required: true,
      // },
      // nominal_ba: {
      // required: true,
      // },
      // transfer_name_ba: {
      // required: true,
      // },
      // bank_ba: {
      // required: true,
      // },
      // account_number_ba: {
      // required: true,
      // },
      // invoice_no: {
      // required: true,
      // },
      // faktur_pajak: {
      // required: true,
      // },
      // po_number: {
      // required: true,
      // },
      // other_file: {
      // required: true,
      // },
      // attach_invoice: {
      // required: true,
      // },
      // attach_pajak: {
      // required: true,
      // },
      // attach_po_number: {
      // required: true,
      // },
      // attach_other_file: {
      // required: true,
      // },
      // dpp: {
      // required: true,
      // },
      // vat: {
      // required: true,
      // },
      // vat_amount: {
      // required: true,
      // },
      // dpp_wht: {
      // required: true,
      // },
      // wht: {
      // required: true,
      // },
      // wht_persen: {
      // required: true,
      // },
      // wht_amount: {
      // required: true,
      // },
      // total_tax: {
      // required: true,
      // },
      // total_payment: {
      // required: true,
      // },
      // nama_bank_settlement: {
      // required: true,
      // },
      // transfer_date_settlement: {
      // required: true,
      // },
      // nominal_settlement: {
      // required: true,
      // },
      // tipe_transfer_settlement: {
      // required: true,
      // },
      // payee_code_settlement: {
      // required: true,
      // },


                    
      
        // ---------------------------------- / Rule input Macro Batas sini 1--------------------------------

      },
      messages: {
    
				//---------------------------------- Rule input Macro Batas sini 2---------------------------------
        // hdrid: {
        // required: "Please Input hdrid",
        // minlength: 3
        // },
        // hdrid: {
        // required: "Please Input hdrid",
        // minlength: 3
        // },
        // transaction_date: {
        // required: "Please Input transaction_date",
        // minlength: 3
        // },
        // date: {
        // required: "Please Input date",
        // minlength: 3
        // },
        // nik: {
        // required: "Please Input nik",
        // minlength: 3
        // },
        // name: {
        // required: "Please Input name",
        // minlength: 3
        // },
        // kode_section: {
        // required: "Please Input kode_section",
        // minlength: 3
        // },
        // section: {
        // required: "Please Input section",
        // minlength: 3
        // },
        // detail_request: {
        // required: "Please Input detail_request",
        // minlength: 3
        // },
        // non_budget_remark: {
        // required: "Please Input non_budget_remark",
        // minlength: 3
        // },
        // budgets: {
        // required: "Please Input budgets",
        // minlength: 3
        // },
        // using_budget: {
        // required: "Please Input using_budget",
        // minlength: 3
        // },
        // kode_section_budget: {
        // required: "Please Input kode_section_budget",
        // minlength: 3
        // },
        additional_section: {
        required: "Please Input additional_section",
        minlength: 3
        },
        account_adv: {
        required: "Please Input account_adv",
        minlength: 3
        },
        currency: {
        required: "Please Input currency",
        minlength: 3
        },
        nominal: {
        required: "Please Input nominal",
        minlength: 3
        },
        currency_ae: {
        required: "Please Input currency_ae",
        minlength: 3
        },
        nominal_ae: {
        required: "Please Input nominal_ae",
        minlength: 3
        },
        account_budget_ae: {
        required: "Please Input account_budget_ae",
        minlength: 3
        },
        currency_ba: {
        required: "Please Input currency_ba",
        minlength: 3
        },
        nominal_ba: {
        required: "Please Input nominal_ba",
        minlength: 3
        },
        transfer_name_ba: {
        required: "Please Input transfer_name_ba",
        minlength: 3
        },
        bank_ba: {
        required: "Please Input bank_ba",
        minlength: 3
        },
        account_number_ba: {
        required: "Please Input account_number_ba",
        minlength: 3
        },
        invoice_no: {
        required: "Please Input invoice_no",
        minlength: 3
        },
        faktur_pajak: {
        required: "Please Input faktur_pajak",
        minlength: 3
        },
        po_number: {
        required: "Please Input po_number",
        minlength: 3
        },
        other_file: {
        required: "Please Input other_file",
        minlength: 3
        },
        attach_invoice: {
        required: "Please Input attach_invoice",
        minlength: 3
        },
        attach_pajak: {
        required: "Please Input attach_pajak",
        minlength: 3
        },
        attach_po_number: {
        required: "Please Input attach_po_number",
        minlength: 3
        },
        attach_other_file: {
        required: "Please Input attach_other_file",
        minlength: 3
        },
        dpp: {
        required: "Please Input dpp",
        minlength: 3
        },
        vat: {
        required: "Please Input vat",
        minlength: 3
        },
        vat_amount: {
        required: "Please Input vat_amount",
        minlength: 3
        },
        dpp_wht: {
        required: "Please Input dpp_wht",
        minlength: 3
        },
        wht: {
        required: "Please Input wht",
        minlength: 3
        },
        wht_persen: {
        required: "Please Input wht_persen",
        minlength: 3
        },
        wht_amount: {
        required: "Please Input wht_amount",
        minlength: 3
        },
        total_tax: {
        required: "Please Input total_tax",
        minlength: 3
        },
        total_payment: {
        required: "Please Input total_payment",
        minlength: 3
        },
        nama_bank_settlement: {
        required: "Please Input nama_bank_settlement",
        minlength: 3
        },
        transfer_date_settlement: {
        required: "Please Input transfer_date_settlement",
        minlength: 3
        },
        nominal_settlement: {
        required: "Please Input nominal_settlement",
        minlength: 3
        },
        tipe_transfer_settlement: {
        required: "Please Input tipe_transfer_settlement",
        minlength: 3
        },
        payee_code_settlement: {
        required: "Please Input payee_code_settlement",
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

  
  // function Approve_data() {

  //     // alert(<php echo $hdrid ?>);

  //     // Form data
  //     var fdata = new FormData();
  //     // var fdata2 = new FormData();

  //     // Update by Hdrid
  //     fdata.append('hdrid',$('#hdrid').val());
  //     fdata.append('nik', $('#iduserlogin').text());
  //     fdata.append('name', $('#name').val());// Ganti dengan nik val 
  //     fdata.append('position_code', $('#idposition_code').text());

  //     var fdata2 = new FormData();

  //     fdata2.append('hdrid',$('#hdrid').val());
  //     fdata2.append('nik', $('#iduserlogin').text());
  //     fdata2.append('name', $('#name').val()); // Ganti dengan nik val 
  //     fdata2.append('position_code', $('#idposition_code').text());

  //     // Url Post Untuk Approve
  //     vurl = "<php echo base_url('C_report/ajax_approve') ?>";

  //     // Post data
  //     $.ajax({
  //     url: vurl,
  //     method: "post",
  //     processData: false,
  //     contentType: false,
  //     data: fdata,
  //     success: function(data) {

  //         //fdata2.append("body_content",data.status); 
         
          
  //        // Hide modal delete
  //         berhasil("Approve success");  
        
  //         $('#modal-confirm-approve').modal('hide');
  //         // $('#modal-default').modal('hide');
  //         // berhasil(data.status);

  //         var vurl2; 
  //         vurl2 = "<php echo base_url('C_email_v2/ajax_update_approve')?>";

  //         $.ajax({
  //             url: vurl2,
  //             method: "post",
  //             processData: false,
  //             contentType: false,
  //             data: fdata2,
  //             success: function (data) {                 
  //                 // Pesan berhasil  

  //             },
  //             error: function (e) {
  //                 gagal(e);
  //                 //location.reload();
  //                 error
  //             }
  //         });

  //         tabel2.draw();
        

  //     },
  //     error: function(e) {
  //         //Pesan Gagal
  //         gagal(e);
  //     }
  //     });

  //     }

  
   
function Approve_data() {

      // alert(<php echo $hdrid ?>);

      // Form data
      // var fdata = new FormData();
      // // var fdata2 = new FormData();

      // // Update by Hdrid
      // fdata.append('hdrid',$('#hdrid').val());
      // fdata.append('nik', $('#iduserlogin').text());
      // fdata.append('name', $('#name').val());// Ganti dengan nik val 
      // fdata.append('position_code', $('#idposition_code').text());

      var fdata2 = new FormData();

      fdata2.append('hdrid',$('#hdrid').val());
      fdata2.append('nik', $('#iduserlogin').text());
      fdata2.append('name', $('#name').val()); // Ganti dengan nik val 
      fdata2.append('position_code', $('#idposition_code').text());

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
            $('#modal-default').modal('hide');
            berhasil('Berhasil');


          },
          error: function (e) {
              // gagal(e);
              // //location.reload();
              // error
              $('#modal-confirm-approve').modal('hide');
              $('#modal-default').modal('hide');
              berhasil(e);
          }
      });

      tabel.draw();
      tabel2.draw();


      // // Url Post Untuk Approve
      // vurl = "<php echo base_url('C_report/ajax_approve') ?>";

      // // Post data
      // $.ajax({
      // url: vurl,
      // method: "post",
      // processData: false,
      // contentType: false,
      // data: fdata,
      // success: function(data) {

      //     //fdata2.append("body_content",data.status); 
         
          
      //    // Hide modal delete
      //     berhasil("Approve success");  
        
      //     $('#modal-confirm-approve').modal('hide');
      //     // $('#modal-default').modal('hide');
      //     // berhasil(data.status);

      //     var vurl2; 
      //     vurl2 = "<php echo base_url('C_email_v2/ajax_update_approve')?>";

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

      //     tabel2.draw();
        

      // },
      // error: function(e) {
      //     //Pesan Gagal
      //     gagal(e);
      // }
      // });

      }


  //     function Reject_data2() {

  //     // Validasi reason harus diisi
  //     if ($('#reason').val() == '') {
  //       gagal('Reason wajib diisi');
  //       return false;
  //     }

  //     // Form data
  //     var fdata = new FormData();

  //     // fdata.append('hdrid', $('#hdrid').val());
  //     // fdata.append('rejected_by', "<php echo $nik->name ?>");
  //     // fdata.append('reason', $('#reason').val());
  //     // fdata.append('position_code', "<php echo $nik->position_code ?>");

  //     fdata.append('hdrid',$('#hdrid').val());
  //     fdata.append('nik', $('#iduserlogin').val());
  //     fdata.append('name', $('#name').text());
  //     fdata.append('rejected_by', $('#lbluserconfirm').text());
  //     fdata.append('reason', $('#reason').val());
  //     fdata.append('position_code', $('#idposition_code').text());

  //     var fdata2 = new FormData();
    
  //     fdata2.append('hdrid',$('#hdrid').val());
  //     fdata2.append('nik', $('#iduserlogin').text());
  //     fdata2.append('name', $('#name').val());
  //     fdata2.append('rejected_by', $('#lbluserconfirm').text());
  //     fdata2.append('reason', $('#reason').val());
  //     fdata2.append('position_code', $('#idposition_code').text());

  //     vurl = "<php echo base_url('C_report/ajax_reject') ?>";

  //     // Post data
  //     $.ajax({
  //       url: vurl,
  //       method: "post",
  //       processData: false,
  //       contentType: false,
  //       data: fdata,
  //       success: function(data) {

  //         // Hide modal delete
  //         $('#modal-reject').modal('hide');
  //         $('#modal-default').modal('hide');
  //         tabel.draw();
  //           //  table.draw();

  //             // berhasil(data.status);

  //               var vurl2; 
  //               // vurl2 = "<php echo base_url('C_Email/ajax_send_mail_v1')?>";
  //               vurl2 = "<php echo base_url('C_email_v2/ajax_update_reject')?>";

  //               $.ajax({
  //                   url: vurl2,
  //                   method: "post",
  //                   processData: false,
  //                   contentType: false,
  //                   data: fdata2,
  //                   success: function (data) {                 
  //                       // Pesan berhasil
  //                       berhasil(data.status);                               
  //                   },
  //                   error: function (e) {
  //                       gagal(e);
  //                       //location.reload();
  //                       //error
  //                   }
  //               });
  //       },
  //       error: function(e) {
  //         //Pesan Gagal
  //         gagal(e);
  //       }
  //     });

  // }


  function Reject_data3() {

    // Validasi reason harus diisi
    if ($('#reason').val() == '') {
      gagal('Reason wajib diisi');
      return false;
    }

    var fdata2 = new FormData();

    fdata2.append('hdrid',$('#hdrid').val());
    fdata2.append('nik', $('#iduserlogin').text());
    fdata2.append('name', $('#name').val());
    fdata2.append('rejected_by', $('#lbluserconfirm').text());
    fdata2.append('reason', $('#reason').val());
    fdata2.append('position_code', $('#idposition_code').text());

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
        $('#modal-default').modal('hide');
        tabel.draw();
  
      },
      error: function(e) {
        // Hide modal delete
        $('#modal-reject').modal('hide');
        $('#modal-default').modal('hide');
        tabel.draw();
        //Pesan Gagal
        gagal(e);
      }
    });

    }

  
  function view_modal(hdrid1,status){
                      
          if (status=="Add"){

            $('#exampleModalLabel').text('Add Data');  // name view
            $('#quickForm')[0].reset(); // reset form   
            $('#btnsubmit').text('Add'); // name Save
            // $('#nik').val('<php echo $this->session->userdata('user_name'); ?>');
            // $('#name').val('<php echo $this->session->userdata('nama'); ?>');
            // $('#section').val('<php echo $this->session->userdata('dept_name') ?>'); //dept_id
            // $('#kode_section').val('<php echo $this->session->userdata('dept_id') ?>'); //dept_id

            document.getElementById("btnsubmit").style.visibility = "visible";    // Visible button              
            //Ajax kosongkan data
            //Tabel Aproover refresh
            tabel2.draw();
            //function field date
            var someDate0 = new Date();
            var numberOfDaysToAdd0 = 0;
            var result0 = someDate0.setDate(someDate0.getDate() + numberOfDaysToAdd0);
            $('#transfer_date_settlement').val(new Date(result0).toISOString().slice(0, 10));

          }else {
          
            // Get Hdri ID
            $('#hdrid').val(hdrid1);
            var hdrid=hdrid1; 
            // $('#hdrid').val(hdrid);
            // var hdrid=hdrid;

                   // $('#btnrejectres').attr('data-id', hdrid + '#' + '1' + '#' + '<php echo $this->session->userdata('user_name') ?>');
            // $('#btnrejectres2').attr('data-id', hdrid + '#' + '1' + '#' + '<php echo $this->session->userdata('user_name') ?>');

            // Ajax isi data
              $.ajax({
              url: "<?php echo base_url('C_report/ajax_getbyhdrid')?>",
              method: "get",
              dataType : "JSON",              
              data: {hdrid:hdrid1},
              success: function (data) {

   		            // ---------------------------------- Data val Macro Batas sini --------------------------------- 
                  $('#hdrid_pc').val(data.hdrid_pc);                
                  $('#date').val(data.date);
                  $('#nik').val(data.nik)
                  $('#name').val(data.name);
                  $('#kode_section').val(data.kode_section);
                  $('#section').val(data.section);
                  $('#detail_request').val(data.detail_request);
                  if(data.budgets=='budget'){
                      document.getElementById('budgets').checked=true;
                    }else if (data.budgets=='non_budgets') {
                      document.getElementById('budgets2').checked=true;
                    }
                    else
                    {
                      document.getElementById('budgets').checked=false;
                      document.getElementById('budgets2').checked=false;
                    };
                  $('#non_budget_remark').val(data.non_budget_remark);
                  $('#using_budget').select2().val(data.using_budget).trigger('change');
                  $('#kode_section_budget').select2().val(data.kode_section_budget).trigger('change');
                  $('#nama_section_budget').val(data.nama_section_budget);
                  $('#additional_section').val(data.additional_section);
                  $('#account_adv').val(data.account_adv);
                  $('#account_name_adv').val(data.account_name_adv);
                  // $('#other_department').val(data.other_department);
                  $('#currency').select2().val(data.currency).trigger('change');
                  $('#nominal').val(data.nominal);
                  // BENEFICIARY
                  $('#transfer_name').val(data.transfer_name);
                  $('#bank').val(data.bank);
                  $('#account_number').val(data.account_number);

                  $('#currency_ae').select2().val(data.currency_ae).trigger('change');
                  $('#nominal_ae').val(data.nominal_ae);
                  $('#account_budget_ae').select2().val(data.account_budget_ae).trigger('change');
                  $('#account_name_pc').val(data.account_name_pc);
                  $('#currency_ba').select2().val(data.currency_ba).trigger('change');
                  $('#nominal_ba').val(data.nominal_ba);
                  $('#transfer_name_ba').val(data.transfer_name_ba);
                  $('#bank_ba').val(data.bank_ba);
                  $('#account_number_ba').val(data.account_number_ba);

                  $('#invoice_no').val(data.invoice_no);
                  $('#faktur_pajak').val(data.faktur_pajak);
                  $('#po_number').val(data.po_number);
                  $('#other_file').val(data.other_file);

                  // document.getElementById('attach_invoice_label').innerHTML=data.attach_invoice;
                  var a = document.getElementById('attach_invoice_view');
                  if(!data.attach_invoice==''){
                    a.href = "<?php echo base_url('assets/upload/advance/') ?>" + data.attach_invoice;
                  }else{
                    a.removeAttribute("href");
                  };
                  // document.getElementById('attach_faktur_label').innerHTML=data.attach_faktur;
                  var a = document.getElementById('attach_faktur_view');
                  if(!data.attach_faktur==''){
                    a.href = "<?php echo base_url('assets/upload/advance/') ?>" + data.attach_faktur;
                  }else{
                    a.removeAttribute("href");
                  };
                  // document.getElementById('attach_po_number_label').innerHTML=data.attach_po_number;
                  var a = document.getElementById('attach_po_number_view');
                  if(!data.attach_po_number==''){
                    a.href = "<?php echo base_url('assets/upload/advance/') ?>" + data.attach_po_number;
                  }else{
                    a.removeAttribute("href");
                  };
                  // document.getElementById('attach_other_file_label').innerHTML=data.attach_other_file;
                  var a = document.getElementById('attach_other_file_view');
                  if(!data.attach_other_file==''){
                    a.href = "<?php echo base_url('assets/upload/advance/') ?>" + data.attach_other_file;
                  }else{
                    a.removeAttribute("href");
                  };

                  $('#invoice_no_set').val(data.invoice_no_set);
                  $('#faktur_pajak_set').val(data.faktur_pajak_set);
                  $('#po_number_set').val(data.po_number_set);
                  $('#other_file_set').val(data.other_file_set);

                  document.getElementById('attach_invoice_set_label').innerHTML=data.attach_invoice_set;
                  var a = document.getElementById('attach_invoice_set_view');
                  if(!data.attach_invoice_set==''){
                    a.href = "<?php echo base_url('assets/upload/settlement/') ?>" + data.attach_invoice_set;
                  }else{
                    a.removeAttribute("href");
                  };
                  document.getElementById('attach_pajak_set_label').innerHTML=data.attach_pajak_set;
                  var a = document.getElementById('attach_pajak_set_view');
                  if(!data.attach_pajak_set==''){
                    a.href = "<?php echo base_url('assets/upload/settlement/') ?>" + data.attach_pajak_set;
                  }else{
                    a.removeAttribute("href");
                  };
                  document.getElementById('attach_po_number_set_label').innerHTML=data.attach_po_number_set;
                  var a = document.getElementById('attach_po_number_set_view');
                  if(!data.attach_po_number_set==''){
                    a.href = "<?php echo base_url('assets/upload/settlement/') ?>" + data.attach_po_number_set;
                  }else{
                    a.removeAttribute("href");
                  };
                  document.getElementById('attach_other_file_set_label').innerHTML=data.attach_other_file_set;
                  var a = document.getElementById('attach_other_file_set_view');
                  if(!data.attach_other_file_set==''){
                    a.href = "<?php echo base_url('assets/upload/settlement/') ?>" + data.attach_other_file_set;
                  }else{
                    a.removeAttribute("href");
                  };

                  $('#nama_bank').select2().val(data.nama_bank).trigger('change');
                  $('#transfer_date').val(data.transfer_date);
                  $('#tipe_transfer').select2().val(data.tipe_transfer).trigger('change');
                  $('#payee_code').select2().val(data.payee_code).trigger('change');
                  $('#dpp').val(data.dpp);
                  $('#vat').select2().val(data.vat).trigger('change');
                  $('#vat_amount').val(data.vat_amount);
                  $('#dpp_wht').val(data.dpp_wht);
                  $('#wht').select2().val(data.wht).trigger('change');
                  $('#wht_persen').val(data.wht_persen);
                  $('#wht_amount').val(data.wht_amount);
                  $('#total_tax').val(data.total_tax);
                  $('#total_payment').val(data.total_payment);
                  $('#nama_bank_settlement').select2().val(data.nama_bank_settlement).trigger('change');
                  $('#transfer_date_settlement').val(data.transfer_date_settlement);
                  // $('#nominal_settlement').val(data.nominal_settlement);
                  $('#tipe_transfer_settlement').select2().val(data.tipe_transfer_settlement).trigger('change');
                  $('#payee_code_settlement').select2().val(data.payee_code_settlement).trigger('change');
                  $('#received_payment').val(data.received_payment);
                  $('#nominal_test').text(data.nominal_ba);
                  $('#nominal_test1').text(data.nominal_ba);
                  $('#nominal_test2').text(data.nominal);

                  // ---------------------------------- / Data val Macro  Batas sini ------------------------------
                  //  Refresh detail problem
                    tabel2.draw();

                    // Akhir Detail Problem

                    // Tabel Approval

                    $('#hdrid').val(data.hdrid);
                    $('#nik').val(data.nik);
                    $('#name').val(data.name);
                    $('#department_code').val(data.department_code);
                    $('#department_name').val(data.department_name);
                    $('#office_email').val(data.office_email);
                    $('#position_code').val(data.position_code);
                    $('#position_name').val(data.position_name);
                    $('#date_approve').val(data.date_approve);

                    //Cari current approval
                    // ajax_getapproval( $('#hdrid').val());
                    // console.log($('#hdrid_pc').val());
                    if ($('#hdrid_pc').val() == '') {
                      document.getElementById("actualex").style.display = "none";
                      document.getElementById("sup_set").style.display = "none";
                      document.getElementById("pay_adv").style.display = "";
                      document.getElementById("pay_set").style.display = "none";
                    }else{
                      document.getElementById("sup_set").style.display = "";
                      document.getElementById("actualex").style.display = "";
                      document.getElementById("pay_set").style.display = "";
                      document.getElementById("bene").style.display = "none";
                      // document.getElementById("pay_adv").style.display = "none";


                    }

                    var nominal_awal =parseFloat(document.getElementById('nominal').value.replace(/[,\s]/g, '')) ;
                    var nominal_ae = parseFloat(document.getElementById('nominal_ae').value.replace(/[,\s]/g, '')) ;
                    if (nominal_awal >= nominal_ae) {

                      document.getElementById("datecard").style.display = "";
                      document.getElementById("bankcard").style.display = "none";
                    }else{
                      document.getElementById("bankcard").style.display = "";
                      document.getElementById("datecard").style.display = "none";
                      // alert("Mohon Segera Transfer Ke Rekening PT DMIA") 
                    }
                    

                    // ---------------------------------- / Data val Macro  Batas sini ------------------------------


      },
      error: function(e) {
      alert(e);

      }
      });

        // Setting data-id pada button approve dan reject
        // $('#btn_approve_footer').attr('data-id', hdrid + '#' + '1' + '#' + '<php echo $this->session->userdata('user_name') ?>');
        // $('#idapprove').text(hdrid);   

      // hdrid= $('#hdrid').val();   
      // nik='<php echo $this->session->userdata('user_name'); ?>';
      // Ajax isi data
    


      // Disable and button submit dan text form           
      if(status=="View"){

        $('#exampleModalLabel').text('View Data'); //name view 
        $('#btnsubmit').text('Tes'); //name Update               
        document.getElementById("btnsubmit").style.visibility = "hidden";  


        <?php if($menu_name=="Approval settlement"){ ?>
          document.getElementById("btn_approve_footer").style.display = "";
          document.getElementById("btn_reject_footer").style.display = "";
        <?php } else {?>
          document.getElementById("btn_approve_footer").style.display = "none";
          document.getElementById("btn_reject_footer").style.display = "none";
        <?php } ?>

        document.getElementById("btnsubmittax").style.visibility = "hidden";
        document.getElementById("btnsubmitpay").style.display = "none";
        document.getElementById("btnsubmitrec").style.visibility = "hidden";

    }else{

        $('#exampleModalLabel').text('Edit Data'); //name view 
        $('#btnsubmit').text('Update'); //name Update  
        document.getElementById("btnsubmit").style.visibility="visible"; 

        document.getElementById("btn_reject_footer").style.display = "none";  
        document.getElementById("btn_approve_footer").style.display = "none";

        document.getElementById("btnsubmittax").style.visibility="visible";
        document.getElementById("btnsubmitpay").style.visibility="visible"; 
        document.getElementById("btnsubmitrec").style.visibility = "visible";
    }

      // // cari kondisi current approval or not     
      // $.ajax({
      // url: "<php echo base_url('C_report/ajax_find_responsible') ?>",
      // method: "get",
      // dataType: "JSON",
      // data: {
      // hdrid: hdrid1
      // },
      // success: function(data) {

      // if (data.status=="<php echo $this->session->userdata('user_name') ?>"){ // hanya untuk responsible

      //   document.getElementById("btnsubmit").style.visibility = "visible";
      //   document.getElementById("btnsubmittax").style.visibility = "visible";
      //   document.getElementById("btnsubmitpay").style.visibility = "visible";

      // }else if("<php echo $this->session->userdata('rolename') ?>"=='Super Admin'){ //untuk administrator bisa update

      //   document.getElementById("btnsubmit").style.visibility = "visible";
      //   document.getElementById("btnsubmittax").style.visibility = "visible";
      //   document.getElementById("btnsubmitpay").style.visibility = "visible";
      
      // }else{ // tidak responsible

      //   document.getElementById("btnsubmit").style.visibility = "hidden";
      //   document.getElementById("btnsubmittax").style.visibility = "hidden";
      //   document.getElementById("btnsubmitpay").style.visibility = "hidden";

      // }     


      // },
      // error: function(e) {
      // alert(e);
      // }
      // });


      }

      }


      // function ajax_getapproval($hdrid){

      //   //Cari data current Approval
      //       $.ajax({
      //           url: "<php echo base_url('C_report/ajax_getapproval_pc')?>",
      //           method: "GET",
      //           dataType : "JSON",              
      //           data: {hdrid:$hdrid},
      //           success: function (data) {
                  
      //             // $('#position_code').val(data.position_code);
      //             // $('#hdrid').val(data.hdrid);   
      //                 if (data.nik=="<php echo $this->session->userdata('user_name') ?>"){ // 

      //                      // Tampil tombol
      //                       // document.getElementById("btn_approve_footer").style.display = ""; 
      //                       // document.getElementById("btn_reject_footer").style.display = "";

      //                       // isi data
      //                       $('#idapprove').text($hdrid);
      //                       $('#iduserlogin').text(data.nik);
      //                       $('#lbluserconfirm').text(data.name);
      //                       $('#idposition_code').text(data.position_code);
      //                       $('#position_code').val(data.position_code);
                        

      //                   }
                        
      //                   else{ // tidak responsible
                      
      //                       // document.getElementById("btn_approve_footer").style.display = "none"; 
      //                       // document.getElementById("btn_reject_footer").style.display = "none";

      //                         // Cek approver
      //                         $('#iduserlogin').text("");
      //                         $('#lbluserconfirm').text("");
      //                         $('#position_code').text("");

      //                   }     
                      
      //       },
      //       error: function(e) {
      //       alert(e);

      //       }
      //       });

      // }


</script>

<script type="text/javascript">




  //  function Ttlpay(){
    // ***************VAT AMOUNT***************// 
    // var dpp1 = document.getElementById('dpp').value ;
    // var vat1= document.getElementById('vat').value ;
    // var ttl  = parseFloat(dpp1) * parseFloat(vat1)/100;
    // document.getElementById('vat_amount').value = (ttl).toFixed(0);
    // ***************WHT AMOUNT***************// 
    // var dppwht = document.getElementById('dpp_wht').value ;
    // var whtpersen = document.getElementById('wht_persen').value ;
    // var whtamo = parseFloat(dppwht) * parseFloat(whtpersen)/100;
    // document.getElementById('wht_amount').value = (whtamo).toFixed(0);
    // ***************Total Tax***************//    
    // var ttltax = parseFloat(ttl) - parseFloat(whtamo);
    // document.getElementById('total_tax').value = (ttltax).toFixed(0);
    // // ***************Total Payment***************// 
    // var dppvat = document.getElementById('dpp').value ;
    // var tax  = document.getElementById('total_tax').value ;
    // var total = parseFloat(dppvat) + parseFloat(tax);
    // document.getElementById('total_payment').value = (total).toFixed(0);
  //  }

  function Return_report() {

  var fdata = new FormData();

  fdata.append('hdrid',$('#iddelete').text());
  fdata.append('hdrid_pc',$('#iddelete2').text());

  // Post data
    $.ajax({
      url: "<?php echo base_url('C_report/ajax_return') ?>",
      method: "POST",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {

      // Hide modal delete
      $('#modal-confirm-return').modal('hide');
      tabel.draw();
    },
    error: function(e) {
      // Hide modal delete
      $('#modal-confirm-return').modal('hide');
      tabel.draw();
      //Pesan Gagal
      gagal(e);
    }
  });

  }

      function Update_tax() {

      var fdata = new FormData();

      fdata.append('hdrid', $('#hdrid').val());
      fdata.append('dpp', $('#dpp').val());
      fdata.append('vat', $('#vat').val());
      fdata.append('vat_amount', $('#vat_amount').val());
      fdata.append('dpp_wht', $('#dpp_wht').val());
      fdata.append('wht_persen', $('#wht_persen').val());
      fdata.append('wht_amount', $('#wht_amount').val());
      fdata.append('total_tax', $('#total_tax').val());
      fdata.append('total_payment', $('#total_payment').val());

      // Simpan or Update data
      $.ajax({
      url: "<?php echo base_url('C_report/ajax_updatetax') ?>",
      method: "POST",
      processData: false,
      contentType: false,
      data: fdata,
      success: function(data) {

        // Pesan berhasil
        berhasil(data.status);



        // tabel.draw();

      },
      error: function(e) {
        gagal(e);
      }
      });
      }

      // function Update_pay() {

      // var fdata = new FormData();

      // fdata.append('hdrid', $('#hdrid').val());
      // fdata.append('nama_bank_settlement', $('#nama_bank_settlement').val());
      // fdata.append('transfer_date_settlement', $('#transfer_date_settlement').val());
      // fdata.append('tipe_transfer_settlement', $('#tipe_transfer_settlement').val());
      // fdata.append('payee_code_settlement', $('#payee_code_settlement').val());

      // // Simpan or Update data
      // $.ajax({
      // url: "<php echo base_url('C_report/ajax_updatepay') ?>",
      // method: "POST",
      // processData: false,
      // contentType: false,
      // data: fdata,
      // success: function(data) {

      //   // Pesan berhasil
      //   berhasil(data.status);



      //   // tabel.draw();

      // },
      // error: function(e) {
      //   gagal(e);
      // }
      // });
      // }

      // function Update_rec() {

      // var fdata = new FormData();

      // fdata.append('hdrid', $('#hdrid').val());
      // fdata.append('received_payment', $('#received_payment').val());

      // // Simpan or Update data
      // $.ajax({
      // url: "<php echo base_url('C_report/ajax_updaterec') ?>",
      // method: "POST",
      // processData: false,
      // contentType: false,
      // data: fdata,
      // success: function(data) {

      //   // Pesan berhasil
      //   berhasil(data.status);



      //   // tabel.draw();

      // },
      // error: function(e) {
      //   gagal(e);
      // }
      // });
      // }
          


  function Simpan_data($trigger){


          // Form data
          var fdata = new FormData();
          
          // Form data collect name value
          var form_data = $('#quickForm').serializeArray();
          $.each(form_data, function (key, input) {
            if (input.name!='detailApproval_length'){
              fdata.append(input.name, input.value);
            }
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
            vurl = "<?php echo base_url('C_report/ajax_add')?>";
          } else {           
            vurl = "<?php echo base_url('C_report/ajax_update')?>";
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

                  // location.reload();
                  if($trigger!="Add"){
                    $("#modal-default").modal('hide');
                  }

                  fdata.append("hdrid",data.status);

                  // Update dan notifikasi email;
                  // $.ajax({
                  // url: "<php echo base_url('C_email_v2/ajax_new_release_pc')?>",
                  // method: "post",
                  // processData: false,
                  // contentType: false,
                  // data: fdata,
                  // success: function (data) {
                  
                  //     },
                  //     error: function (e) {
                  //         gagal(e);
                        
                  //     }
                  // });

                  
                
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
      // fdata.append('hdrid',$('#hdrid').val());
      // Url Post delete
      vurl = "<?php echo base_url('C_report/ajax_delete')?>";

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

      //  HDRID selected konfirmasiReturn
      $(document).on("click", ".konfirmasiReturn", function() {        
        $('#iddelete').text($(this).attr("data-id")); 
    })

      //  HDRID selected konfirmasiReturn
      $(document).on("click", ".konfirmasiReturn", function() {        
      $('#iddelete2').text($(this).attr("data-id2")); 
    })

    //  HDRID selected KonfirmasiApprove
    $(document).on("click", ".konfirmasiApprove", function() {
      let str = $(this).attr("data-id");
      const myArr = str.split("#");
      $('#iddelete').text(myArr[0]);
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

     //Date range picker
    $('#received_pay').datetimepicker({
            format: 'L',
            minDate: new Date(2022,1-1)
    }); 
    
    //Date range picker
    $('#transfer_date_set').datetimepicker({
            format: 'L',
            minDate: new Date(2022,1-1)
    });

</script>

<script type="text/javascript">

    var tabel = null;
    var tabel2 = null;
    $(document).ready(function() {

        tabel = $('#example1').DataTable({
            "processing": true,
            "responsive": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            dom: "lfBrtip",
            buttons: [
            {
              extend: 'copyHtml5',
              filename: 'E-Wire Settlement',

              className: 'btn btn-secondary',
              text: '<i class="fas fa-copy">&nbsp</i> Copy Data to Clipboard',
            },
            {
              extend: 'csvHtml5',
              filename: 'E-Wire Settlement',
              className: 'btn btn-info',
              text: '<i class="fas fa-file-csv">&nbsp</i> Export Data to CSV',
            },
            {
              extend: 'excelHtml5',
              filename: 'E-Wire Settlement',
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
              filename: 'E-Wire Settlement',
              className: 'btn btn-danger',
              text: '<i class="fas fa-file-pdf">&nbsp</i> Export Data to PDF',
              orientation : 'landscape',
              pageSize : 'A4',
              download: 'open'
            }
          ],
            "ajax":
            {
                "url": "<?= base_url('C_report/view_data_where');?>", // URL file untuk proses select datanya
                "type": "POST",
                "data": function(data){     
                  data.searchByFromdate = $('#search_fromdate').val();
                  data.searchByTodate = $('#search_todate').val();
                  data.menu_name = '<?php echo $menu_name?>'
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

                        //Tombol Edit
                        <?php if(!empty($hak_akses)){ if ($hak_akses->allow_edit=='on') { ?>
                            mnu=mnu+'<div class="btn btn-primary btn-sm konfirmasiEdit" data-id="'+ data +'" data-toggle="modal" data-target="#modal-default"> <i class="fa fa-edit"></i></div>';
                        <?php } } ?>

                        //Tombol Delete
                        <?php if(!empty($hak_akses)){ if ($hak_akses->allow_delete=='on') { ?>
                            mnu=mnu+'<div class="btn btn-danger btn-sm konfirmasiHapus" data-id="'+ data +'" data-toggle="modal" data-target="#modal-delete" > <i class="fa fa-trash"></i></div>';
                        <?php } } ?>

                        <?php if ($menu_name == "Report"){if ($this->session->userdata('rolename') == 'Administrator FA' || $this->session->userdata('rolename') == 'Super Admin') { ?> 
                          mnu=mnu+'<div class="btn btn-warning btn-sm konfirmasiReturn" data-id="'+ data +'" data-id2="'+ row.hdrid_pc +'" data-toggle="modal" data-target="#modal-confirm-return"> <i class="fa fa-paper-plane"></i></div>';
                        <?php } }?>

                        if (row.hdrid_pc === '' ||  null ){ 
                        mnu = mnu + ' <a class="btn btn-secondary btn-sm mr-2"  href="<?php echo base_url('C_Print/print_advance?var1=') . "'+ data +' &var2='+ row.hdrid +'&var3=1"  ?>"  target="_blank"> <i class="fas fa-print mr-1"></i>A4 </a>'
                        }else{
                        mnu = mnu + ' <a class="btn btn-secondary btn-sm mr-2"  href="<?php echo base_url('C_Print/print_settlement_fix?var1=') . "'+ data +' &var2='+ row.hdrid_pc +'&var3=1"  ?>"  target="_blank"> <i class="fas fa-print mr-1"></i>A4 </a>'
                        }
                        return mnu;

                    }  
                },

                // ---------------------------------- Datatables Macro Batas sini ---------------------------------
                {"data":"hdrid"},
                {"data":"hdrid_pc"},
                {"data":"date"},
                {"data":"status_transaction"},
                {"data":"nik"},
                {"data":"name"},
                {"data":"kode_section"},
                {"data":"section"},
                {"data":"detail_request"},
                {"data":"budgets"},
                {"data":"using_budget"},
                {"data":"kode_section_budget"},
                {"data":"additional_section"},
                {"data":"account_adv"},
                {"data":"currency"},
                {"data":"nominal"},
                // {"data":"status_payment"},
                {"data":"currency_ae"},
                {"data":"nominal_ae"},
                {"data":"account_budget_ae"},
                {"data":"currency_ba"},
                {"data":"nominal_ba"},
                {"data":"transfer_name_ba"},
                {"data":"bank_ba"},
                {"data":"account_number_ba"},
                {"data":"invoice_no_set"},
                {"data":"faktur_pajak_set"},
                {"data":"po_number_set"},
                {"data":"other_file_set"},
                {"data":"attach_invoice_set"},
                {"data":"attach_pajak_set"},
                {"data":"attach_po_number_set"},
                {"data":"attach_other_file_set"},
                {"data":"nama_bank"},
                {"data":"transfer_date"},
                // {"data":"nominal1"},
                {"data":"tipe_transfer"},
                {"data":"payee_code"},
                {"data":"dpp"},
                {"data":"vat"},
                {"data":"vat_amount"},
                {"data":"dpp_wht"},
                {"data":"wht"},
                {"data":"wht_persen"},
                {"data":"wht_amount"},
                {"data":"total_tax"},
                {"data":"total_payment"},
                {"data":"nama_bank_settlement"},
                {"data":"transfer_date_settlement"},
                // {"data":"nominal_settlement"},
                {"data":"tipe_transfer_settlement"},
                {"data":"payee_code_settlement"},
                {"data":"received_payment"},
                
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

        // Tabel Detail Problem
        tabel2 = $('#detailApproval').DataTable({
          "processing": true,
          "responsive": false,
          "serverSide": true,
          "autowidth": false,
          "info": true,
          "ordering": true, // Set true agar bisa di sorting
          "order": [
            [5, 'asc']
          ], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
          "ajax": {
            "url": "<?= base_url('C_report/view_data_whereapproval');?>",
            "type": "POST",
            "data": function(data) {
              // data.searchByFromdate = $('#search_fromdate').val();
              // data.searchByTodate = $('#search_todate').val();
              data.hdrid = $('#hdrid').val();
            }

          },
          "deferRender": true,
          "aLengthMenu": [
            [10, 100, 1000, 10000, 100000, 1000000, 1000000000],
            [10, 100, 1000, 10000, 100000, 1000000, "All"]
          ], // Combobox Limit        
          "columns": [

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

  function handleSelectChange_tb_add_advance3_id(event) {

    var data = $('#tb_add_advance3_id').select2('data')[0].text;

    if (data=='-Select-'){
      $('#tb_add_advance3_name').val('');   
    }else{
      var res = data.split("-");
      $('#tb_add_advance3_name').val(res[1]);
    };

  }

  function handleSelectChange_use_bud(event) {

  var data = $('#using_budget').select2('data')[0].text;
  if (data=='-Select-'){
      $('#using_budget').val('');   
    }else{
      var res = data.split("-");
      $('#using_budget').val(res[0]);
    };
  }

  function handleSelectChange_kode_section(event) {

    var data = $('#kode_section_budget').select2('data')[0].text;

    if (data=='-Select-'){
        $('#department_code').val('');   
        $('#nama_section_budget').val('');
    }else{
        var res = data.split("-");
        $('#department_code').val(res[0]);
        $('#nama_section_budget').val(res[1]);
      };

  }


    function handleSelectChange_currency(event) {
    
    //  By Text
    var value = $("#currency option:selected").text();  
    var res = value.split("-");
    // $('#acc_number').val(res[0]);

    }

    function handleSelectChange_currency_ae(event) {
    
    //  By Text
    var value = $("#currency option:selected").text();  
    var res = value.split("-");
    // $('#acc_number').val(res[0]);

    }

    function handleSelectChange_account_budget(event) {
    
 
      var data = $('#account_budget_ae').select2('data')[0].text;

      if (data=='-Select-'){
          $('#account_budget_ae').val('');   
          $('#account_name_pc').val('');
      }else{
          var res = data.split("-");
          $('#account_budget_ae').val(res[0]);
          $('#account_name_pc').val(res[1]);
        };

    }

    function handleSelectChange_vat(event) {
          var data = $('#vat').select2('data')[0].text;
      
          if (data=='-Select-'){
              $('#vat').val(''); 
              
          }else{
              var res = data.split("-");
              $('#vat').val(res[0]);
              taxinfo(event);
            };
          }

    function handleSelectChange_wht(event) {
      
      var data = $('#wht').select2('data')[0].text;
      
          if (data=='-Select-'){
              $('#wht').val('');   
              $('#wht_persen').val('');
          }else{
              var res = data.split("-");
              $('#wht').val(res[0]);
              $('#wht_persen').val(res[1]);
              taxinfo(event);
            };
          }

    function taxinfo(event) {
    
      // ***************VAT AMOUNT***************//
      var vat_amount= parseFloat(document.getElementById('dpp').value.replace(/[,\s]/g, '')) * parseInt(document.getElementById('vat').value.replace('%',''))/100;
      document.getElementById('vat_amount').value=vat_amount.toLocaleString(undefined, {minimumFractionDigits: 2});

      // ***************WHT AMOUNT***************// 
      var wht_amount= parseFloat(document.getElementById('dpp_wht').value.replace(/[,\s]/g, '')) * parseInt(document.getElementById('wht_persen').value.replace('%',''))/100;
      document.getElementById('wht_amount').value=wht_amount.toLocaleString(undefined, {minimumFractionDigits: 2});

      // ***************Total Tax***************//
      var total_tax= parseFloat(document.getElementById('vat_amount').value.replace(/[,\s]/g, '')) - parseFloat(document.getElementById('wht_amount').value.replace(/[,\s]/g, ''));
      document.getElementById('total_tax').value=total_tax.toLocaleString(undefined, {minimumFractionDigits: 2});

      // ***************Total Payment***************// 
      var total_payment= parseFloat(document.getElementById('dpp').value.replace(/[,\s]/g, '')) + parseFloat(document.getElementById('total_tax').value.replace(/[,\s]/g, ''));
      document.getElementById('total_payment').value=total_payment.toLocaleString(undefined, {minimumFractionDigits: 2});

      
  }


    function handleSelectChange_currency_ba(event) {
    
    //  By Text
    var value = $("#currency option:selected").text();  
    var res = value.split("-");
    // $('#acc_number').val(res[0]);

    }


    function handleSelectChange_tipe_transfer(event) {
    
      //  By Text
      var value = $("#tipe_transfer option:selected").text();  
      var res = value.split("-");
      // $('#acc_number').val(res[0]);

    }

    function handleSelectChange_payee_code(event) {
    
    //  By Text
    var value = $("#payee_code option:selected").text();  
    var res = value.split("-");
    // $('#acc_number').val(res[0]);

    }

      function handleSelectChange_kode(event) {

    //  By Value
      var selectElement = event.target;
      var value = selectElement.value;
      var res = value.split("-");
      // $('#acc_number').val(res[0]);
      // $('#name').val(res[1]);

      }   

      function handleSelectChange_bank_name(event) {
 
      //  By Text
      var value = $("#nama_bank option:selected").text();  
      var res = value.split("-");
      // $('#acc_number').val(res[0]);
      //  $('#name').val(res[1]);
      //  $('#section').val(res[2]);


      }
      
      function handleSelectChange_nama_bank_settlement(event) {
      
      var data = $('#nama_bank_settlement').select2('data')[0].text;
      
          if (data=='-Select-'){
              $('#nama_bank_settlement').val('');   
          }else{
              var res = data.split("-");
              $('#nama_bank_settlement').val(res[0]);
            };
          }

      function handleSelectChange_nama_bank(event) {
      
      var data = $('#nama_bank').select2('data')[0].text;
      
          if (data=='-Select-'){
              $('#nama_bank').val('');   
          }else{
              var res = data.split("-");
              $('#nama_bank').val(res[0]);
            };
          }
    


    /* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			/* return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : ''); */
      return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');

		}

  
      /// @see numberic_format()
      /// @note Fungsi FORMAT angka menjadi undefined(default US)
      /// @attention Sekaligus menghitung nominal_ba
      function numberic_format(event){

        var selectElement = event.target;
        var number = parseFloat(selectElement.value);
        selectElement.value = number.toLocaleString(undefined, {minimumFractionDigits: 2});
        var nominal_ba= parseFloat(document.getElementById('nominal').value.replace(/[,\s]/g, '')) - parseFloat(document.getElementById('nominal_ae').value.replace(/[,\s]/g, ''));
        document.getElementById('nominal_ba').value=nominal_ba.toLocaleString(undefined, {minimumFractionDigits: 2});

      }

      /// @see myFunction()
      /// @note Fungsi untuk menghilangkan , ketika cursor ke field yang di tuju
      /// @attention
      function myFunction(x) {
        x.value = x.value.replace(/[,\s]/g, '');
      }

      function reff(event) {
      var nominal_awal =parseFloat(document.getElementById('nominal').value.replace(/[,\s]/g, '')) ;
      var nominal_ae = parseFloat(document.getElementById('nominal_ae').value.replace(/[,\s]/g, '')) ;
      if (nominal_awal >= nominal_ae) {
        // $('#currency_ba').val("<php echo $reff->currency; ?>");
        $('#transfer_name_ba').val("<?php echo $reff->nama_account; ?>");
        $('#bank_ba').val("<?php echo $reff->nama_bank; ?>");
        $('#account_number_ba').val("<?php echo $reff->no_rekening; ?>");
        document.getElementById('transfer_name_ba').readOnly = true;
        document.getElementById('bank_ba').readOnly = true;
        document.getElementById('account_number_ba').readOnly = true;
        
      }else{
        // $('#currency_ba').val("");
        $('#transfer_name_ba').val("");
        $('#bank_ba').val("");
        $('#account_number_ba').val("");
        document.getElementById('transfer_name_ba').readOnly = false;
        document.getElementById('bank_ba').readOnly = false;
        document.getElementById('account_number_ba').readOnly = false;
      
        // alert("Mohon Segera Transfer Ke Rekening PT DMIA") 
      }
    }




</script>
