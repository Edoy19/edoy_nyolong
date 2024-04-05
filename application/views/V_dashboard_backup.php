
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard Quality</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">

        <div class="col-md-4">

           
            <!-- Days No Claim -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Days No Claim</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              
              <div class="card-body">

                          <!-- small box -->
                <div class="small-box bg-info">
                  <div class="inner">

                    <div class="row mt-2">
                      <div class="col-md-4"></div>
                         <div class="col-md-3" id="daysReport">
                            <h1 id="daysText"><?php
                              //Inisialisasi nilai variabel awal
                              $day= "";
                              foreach ($no_claims as $item)
                              {
                                $days=$item['day'];
                                echo $days;
                              }
                              ?>
                            </h1>
                           </div>
                          <div class="col-md-3">
                            <div class="row">
                              <h5>Days</h5>
                            </div>
                            <div class="row">
                              <p>No Claim</p>
                            </div>
                        </div>
                    </div>
                  </div>

                  <div class="icon">
                    <i class="ion ion-bag"></i>
                  </div>
                  <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->




          </div>
          <!-- /.col (RIGHT) -->
          

        
          <div class="col-md-4">

          <!-- <= $calendar_no_claims2 ?> -->

              <!-- PIE CHART -->
              <div class="card card-danger">
                <div class="card-header">
                  <h3 class="card-title">Claim By Group</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                  </div>
                </div>
                <div class="card-body" id="pieReport">
                  <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              

          </div>
          <!-- /.col (LEFT) -->


          <!-- <div class="col-md-4"> -->

           
            <!-- DONUT CHART -->
            <!-- <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Historycal Claim By FY</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body" id="donutReport">
                <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div> -->
              <!-- /.card-body -->
            <!-- </div> -->
            <!-- /.card -->



          <!-- </div> -->
          <!-- /.col (LEFT) -->


          <div class="col-md-4">

            
            <!-- BAR CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Claim By FY</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart" id="barReport">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->



          </div>
          <!-- /.col (RIGHT) -->
        </div>
        <!-- /.row -->




        
        <div class="row">

          <div class="col-md-4" style="margin-top: -130px;">
            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id="calendar"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (RIGHT) -->

          <div class="col-md-4">
            <!-- LINE CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Customer Claim by Case </h3>
                              
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart" id="linechart2report">
                  <canvas id="lineChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- col -->
          </div>

          <div class="col-md-4">
            <!-- LINE CHART -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Customer Claim by PPM </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart" id="linechart3report">
                  <canvas id="lineChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- col -->
          </div>


         </div>
        <!-- /.row -->






        <div class="row">

          <div class="col-md-4">

            <div class="card card-primary">
              <div class="card-body p-0">
                <!-- THE CALENDAR -->
                <div id=""></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col (RIGHT) -->

          <div class="col-md-4" style="margin-top: -20px;">
            <!-- LINE CHART -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Case Data by Group product </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart" id="stackedbarreport">
                  <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- col -->
          </div>

          <div class="col-md-4"  style="margin-top: -20px;">
            <!-- LINE CHART -->
            <div class="card card-success" >
              <div class="card-header">
                <h3 class="card-title">PPM Data This Years</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <div class="chart" id="barReport2">
                  <canvas id="barChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- col -->
          </div>

         </div>
        <!-- /.row -->


        


        <div class="row">

                 
           <div class="col-md-2">
             <button type="button" onclick="btnCompanyOnCLick()"class="btn btn-block btn-primary btn-lg">Company</button>
           </div>
         

            <div class="col-md-2">
              <button type="button" onclick="btnBodyOnClick()" class="btn btn-block btn-success btn-lg"  >Body</button>
           </div>
           

           <div class="col-md-2">
             <button type="button" onclick="btnPowerTrainOnClick()"  class="btn btn-block btn-warning btn-lg">Power Train</button>
           </div>
           

            <div class="col-md-2">
             <button type="button" onclick="btnBlowerOnClick()"  class="btn btn-block btn-danger btn-lg">Blower</button>
           </div>
           

            <div class="col-md-2">
             <button type="button" onclick="btnWiperWasherOnClick()" class="btn btn-block btn-primary btn-lg">Wiper</button>
           </div>


           <div class="col-md-2">
             <button type="button" onclick="btnThermalOnClick()" class="btn btn-block btn-success btn-lg">Thermal</button>
           </div>
           



        </div>
        <!-- /.row -->


      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->    
  </div>
  <!-- /.content-wrapper -->





  <!-- PHP untuk memanggil array data dari Controller -->

      <!-- Customer Name -->
      <!-- <php
        //Inisialisasi nilai variabel awal
        $customer_name= "";
        $jumlah=null;
        foreach ($customer as $item)
        {
            $custname=$item->customer_name;
            $customer_name .= "'$custname'". ", ";
            $jum=$item->total;
            $jumlah .= "$jum". ", ";
        }
      ?> -->

      <!-- Customer Name Body -->
      <!-- <php
        //Inisialisasi nilai variabel awal
        $customer_name_body= "";
        $jumlah_body=null;
        foreach ($customer_body as $item)
        {
            $custname=$item->customer_name;
            $customer_name_body .= "'$custname'". ", ";
            $jum=$item->total;
            $jumlah_body .= "$jum". ", ";
        }
      ?> -->
      
      <!-- Customer Name power_train -->
      <!-- <php
        //Inisialisasi nilai variabel awal
        $customer_name_power_train= "";
        $jumlah_power_train=null;
        foreach ($customer_power_train as $item)
        {
            $custname=$item->customer_name;
            $customer_name_power_train .= "'$custname'". ", ";
            $jum=$item->total;
            $jumlah_power_train .= "$jum". ", ";
        }
      ?> -->


      <!-- Group Product -->
      <?php
        //Inisialisasi nilai variabel awal
        $group_product_name= "";
        $jumlah_group_product=null;
        foreach ($group_product as $item)
        {
            $groupname=$item->group_product_name;
            $group_product_name .= "'$groupname'". ", ";
            $jum=$item->total;
            $jumlah_group_product .= "$jum". ", ";
        }
      ?>

      <!-- Group Product = company -->
      <?php
        //Inisialisasi nilai variabel awal
        $group_product_name_company= "";
        $jumlah_group_product_company=null;
        foreach ($group_product_company as $item)
        {
            $groupname=$item->group_product_name;
            $group_product_name_company .= "'$groupname'". ", ";
            $jum=$item->total;
            $jumlah_group_product_company .= "$jum". ", ";
        }
      ?>

      <!-- Group Product = Body -->
      <?php
        //Inisialisasi nilai variabel awal
        $group_product_name_body= "";
        $jumlah_group_product_body=null;
        foreach ($group_product_body as $item)
        {
            $groupname=$item->group_product_name;
            $group_product_name_body .= "'$groupname'". ", ";
            $jum=$item->total;
            $jumlah_group_product_body .= "$jum". ", ";
        }
      ?>

      <!-- Group Product = power_train -->
      <?php
        //Inisialisasi nilai variabel awal
        $group_product_name_power_train= "";
        $jumlah_group_product_power_train=null;
        foreach ($group_product_power_train as $item)
        {
            $groupname=$item->group_product_name;
            $group_product_name_power_train .= "'$groupname'". ", ";
            $jum=$item->total;
            $jumlah_group_product_power_train .= "$jum". ", ";
        }
      ?>

      <!-- Group Product = blower -->
      <?php
        //Inisialisasi nilai variabel awal
        $group_product_name_blower= "";
        $jumlah_group_product_blower=null;
        foreach ($group_product_blower as $item)
        {
            $groupname=$item->group_product_name;
            $group_product_name_blower .= "'$groupname'". ", ";
            $jum=$item->total;
            $jumlah_group_product_blower .= "$jum". ", ";
        }
      ?>

      <!-- Group Product = wiper_washer -->
      <?php
        //Inisialisasi nilai variabel awal
        $group_product_name_wiper_washer= "";
        $jumlah_group_product_wiper_washer=null;
        foreach ($group_product_wiper_washer as $item)
        {
            $groupname=$item->group_product_name;
            $group_product_name_wiper_washer .= "'$groupname'". ", ";
            $jum=$item->total;
            $jumlah_group_product_wiper_washer .= "$jum". ", ";
        }
      ?>

      <!-- Group Product = thermal -->
      <?php
        //Inisialisasi nilai variabel awal
        $group_product_name_thermal= "";
        $jumlah_group_product_thermal=null;
        foreach ($group_product_thermal as $item)
        {
            $groupname=$item->group_product_name;
            $group_product_name_thermal .= "'$groupname'". ", ";
            $jum=$item->total;
            $jumlah_group_product_thermal .= "$jum". ", ";
        }
      ?>





      <!-- Fiscal Years -->
      <?php
        //Inisialisasi nilai variabel awal
        $Tahun= "";
        $jumlah_fiscal_year=null;
        foreach ($fiscal_years as $item)
        {
          $groupname=$item['Tahun'];
          $Tahun .= "'$groupname'". ", ";
          $jum=$item['Total'];
          $jumlah_fiscal_year .= "$jum". ", ";
        }
        ?>

        <!-- Fiscal Years = company -->
      <?php
        //Inisialisasi nilai variabel awal
        $Tahun_company= "";
        $jumlah_fiscal_year_company=null;
        foreach ($fiscal_years_company as $item)
        {
          $groupname=$item['Tahun'];
          $Tahun_company .= "'$groupname'". ", ";
          $jum=$item['Total'];
          $jumlah_fiscal_year_company .= "$jum". ", ";
        }
        ?>


        <!-- Fiscal Years = Body -->
      <?php
        //Inisialisasi nilai variabel awal
        $Tahun_Body= "";
        $jumlah_fiscal_year_body=null;
        foreach ($fiscal_years_body as $item)
        {
          $groupname=$item['Tahun'];
          $Tahun_Body .= "'$groupname'". ", ";
          $jum=$item['Total'];
          $jumlah_fiscal_year_body .= "$jum". ", ";
        }
        ?>

        <!-- Fiscal Years = power_train -->
      <?php
        //Inisialisasi nilai variabel awal
        $Tahun_Power_train= "";
        $jumlah_fiscal_year_power_train=null;
        foreach ($fiscal_years_power_train as $item)
        {
          $groupname=$item['Tahun'];
          $Tahun_Power_train .= "'$groupname'". ", ";
          $jum=$item['Total'];
          $jumlah_fiscal_year_power_train .= "$jum". ", ";
        }
        ?>

        <!-- Fiscal Years = blower -->
      <?php
        //Inisialisasi nilai variabel awal
        $Tahun_blower= "";
        $jumlah_fiscal_year_blower=null;
        foreach ($fiscal_years_blower as $item)
        {
          $groupname=$item['Tahun'];
          $Tahun_blower .= "'$groupname'". ", ";
          $jum=$item['Total'];
          $jumlah_fiscal_year_blower .= "$jum". ", ";
        }
        ?>

        <!-- Fiscal Years = wiper_washer -->
      <?php
        //Inisialisasi nilai variabel awal
        $Tahun_wiper_washer= "";
        $jumlah_fiscal_year_wiper_washer=null;
        foreach ($fiscal_years_wiper_washer as $item)
        {
          $groupname=$item['Tahun'];
          $Tahun_wiper_washer .= "'$groupname'". ", ";
          $jum=$item['Total'];
          $jumlah_fiscal_year_wiper_washer .= "$jum". ", ";
        }
        ?>
        
        <!-- Fiscal Years = thermal -->
      <?php
        //Inisialisasi nilai variabel awal
        $Tahun_thermal= "";
        $jumlah_fiscal_year_thermal=null;
        foreach ($fiscal_years_thermal as $item)
        {
          $groupname=$item['Tahun'];
          $Tahun_thermal .= "'$groupname'". ", ";
          $jum=$item['Total'];
          $jumlah_fiscal_year_thermal .= "$jum". ", ";
        }
        ?>





        <!-- Calendar no claims -->
      <?php
        //Inisialisasi nilai variabel awal
        $startDate= "";
        $endDate="";
        foreach ($calendar_no_claims as $item)
        {
          $events[] = array (
            'title' => 'no claims',
            'startDate' => $item['startDate'],
            'endDate' => $item['endDate'],
          );
        }
        ?>
        

       
      <!-- Calendar no claims -->



      <!-- Claim Case -->
      <!-- <php
        //Inisialisasi nilai variabel awal
        $Bulan_case="";
        $case_target= "";
        $case_actual= "";
        $tahun_case="";
        foreach ($fiscal_years_thermal as $item)
        {
          $bulancase=$item['Bulan'];
          $Bulan_case .= "'$bulancase'". ", ";

          $casetarget=$item['case_target'];
          $case_target .= "'$casetarget'". ", ";

          $caseactual=$item['case_actual'];
          $case_actual .= "'$caseactual'". ", ";

          $tahuncase=$item['tahun'];
          $tahun_case .= "'$tahuncase'". ", ";

          // $jum=$item['Total'];
          // $jumlah_fiscal_year_thermal .= "$jum". ", ";
        } -->
        <!-- // var_dump($tahun_case);
        ?> -->
      <!-- Claim Case -->


      <!-- case target & actual -->
      <?php
        //Inisialisasi nilai variabel awal
        $case_target= "";
        $case_actual="";
        foreach ($get_data_case_by_fy as $item)
        {
          $groupname=$item['case_target'];
          $case_target .= "'$groupname'". ", ";
          $jum=$item['case_actual'];
          $case_actual .= "$jum". ", ";
        }
        ?>

      <!-- ppm target & actual
      <php
        //Inisialisasi nilai variabel awal
        $ppm_target= "";
        $ppm_actual="";
        foreach ($get_data_ppm_by_fy as $item)
        {
          $groupname=$item['ppm_target'];
          $ppm_target .= "'$groupname'". ", ";
          $jum=$item['ppm_actual'];
          $ppm_actual .= "$jum". ", ";
        }
        ?> -->


        <!-- Group Product PPM Case -->
      <?php
        //Inisialisasi nilai variabel awal
        $group_product_name_ppm_case= "";
        $jumlah_group_product_ppm_case=null;
        foreach ($group_product_ppm_case as $item)
        {
            $groupname=$item->group_product_name;
            $group_product_name_ppm_case .= "'$groupname'". ", ";
            $jum=$item->total;
            $jumlah_group_product_ppm_case .= "$jum". ", ";
        }
      ?>

        <!-- Group Product PPM Case Power Train -->
      <?php
        //Inisialisasi nilai variabel awal
        $group_product_name_ppm_case_power_train= "";
        $jumlah_group_product_ppm_case_power_train=null;
        foreach ($group_product_ppm_case_power_train as $item)
        {
            $groupname=$item->group_product_name;
            $group_product_name_ppm_case_power_train .= "'$groupname'". ", ";
            $jum=$item->total;
            $jumlah_group_product_ppm_case_power_train .= "$jum". ", ";
        }
      ?>

        <!-- Group Product PPM Case NEW -->
        <?php
        //Inisialisasi nilai variabel awal
        $ppm_case_date_new= "";
        $group_product_name_ppm_case_new="";
        $total_ppm_case_new="";
        foreach ($group_product_ppm_case_new as $item)
        {
          $ppmCaseDateNew=$item['ppm_case_date'];
          $ppm_case_date_new .= "'$ppmCaseDateNew'". ", ";

          $groupname=$item['group_product_name'];
          $group_product_name_ppm_case_new .= "'$groupname'". ", ";

          $jum=$item['total'];
          $total_ppm_case_new .= "$jum". ", ";
        }
        ?>

        <!-- Group Product PPM Case NEW -->
        <?php
        //Inisialisasi nilai variabel awal
        $ppm_case_date_body= "";
        $group_product_name_ppm_case_body="";
        $total_ppm_case_body="";
        foreach ($group_product_ppm_case_body as $item)
        {
          $ppmCaseDatebody=$item['ppm_case_date'];
          $ppm_case_date_body .= "'$ppmCaseDatebody'". ", ";

          $groupname=$item['group_product_name'];
          $group_product_name_ppm_case_body .= "'$groupname'". ", ";

          $jum=$item['total'];
          $total_ppm_case_body .= "$jum". ", ";
        }
        ?>

        <!-- Group Product PPM Case NEW -->
        <?php
        //Inisialisasi nilai variabel awal
        $ppm_case_date_wiper_washer= "";
        $group_product_name_ppm_case_wiper_washer="";
        $total_ppm_case_wiper_washer="";
        foreach ($group_product_ppm_case_wiper_washer as $item)
        {
          $ppmCaseDatewiper_washer=$item['ppm_case_date'];
          $ppm_case_date_wiper_washer .= "'$ppmCaseDatewiper_washer'". ", ";

          $groupname=$item['group_product_name'];
          $group_product_name_ppm_case_wiper_washer .= "'$groupname'". ", ";

          $jum=$item['total'];
          $total_ppm_case_wiper_washer .= "$jum". ", ";
        }
        ?>



        <?php
        //Inisialisasi nilai variabel awal -->
         $ppm_case_date= "";
         $ppm_target2="";
         $ppm_actual2="";
         $Body_ppm_case="";
         $Power_Train_ppm_case="";
         $Blower_ppm_case="";
         $Wiper_ppm_case="";
         $Thermal_ppm_case="";
        
         foreach ($data_stacked_bar as $item)
         {
           $ppmCaseDate=$item['Bulan'];
           $ppm_case_date .= "'$ppmCaseDate'". ", ";

           $ppm_actuals=$item['ppm_actual'];
           $ppm_actual2 .= "$ppm_actuals". ", ";

           $ppm_targets=$item['ppm_target'];
           $ppm_target2 .= "$ppm_targets". ", ";
          
           $Body=$item['Body'];
           $Body_ppm_case .= "'$Body'". ", ";

           $Power_Train=$item['Power_Train'];
           $Power_Train_ppm_case .= "'$Power_Train'". ", ";

           $Blower=$item['Blower'];
           $Blower_ppm_case .= "'$Blower'". ", ";

           $Wiper=$item['Wiper'];
           $Wiper_ppm_case .= "'$Wiper'". ", ";

           $Thermal=$item['Thermal'];
           $Thermal_ppm_case .= "'$Thermal'". ", ";
  
        }
        ?>

      <?php
        //Inisialisasi nilai variabel awal
        $ppm_case_date_new= "";
        $case_target_new="";
        $case_actual_new="";
        $ppm_actual_new="";
        $ppm_target_new="";
    
        
        foreach ($data_stacked_bar_new as $item)
        {
          $ppmCaseDate=$item['Bulan'];
          $ppm_case_date_new .= "'$ppmCaseDate'". ", ";

          $case_actualsnew=$item['case_actual'];
          $case_actual_new .= "$case_actualsnew". ", ";

          $case_targetsnew=$item['case_target'];
          $case_target_new .= "$case_targetsnew". ", ";

          $ppm_targetsnew=$item['ppm_target'];
          $ppm_target_new .= "$ppm_targetsnew". ", ";

          $ppm_actualsnew=$item['ppm_actual'];
          $ppm_actual_new .= "$ppm_actualsnew". ", ";
          
        }
        ?>

      <?php
        //Inisialisasi nilai variabel awal
        $ppm_case_date_new_body= "";
        $case_target_new_body="";
        $case_actual_new_body="";
        $ppm_actual_new_body="";
        $ppm_target_new_body="";
    
        
        foreach ($data_stacked_bar_new_body as $item)
        {
          $ppmCaseDate=$item['Bulan'];
          $ppm_case_date_new_body .= "'$ppmCaseDate'". ", ";

          $case_actualsnew_body=$item['case_actual'];
          $case_actual_new_body .= "$case_actualsnew_body". ", ";

          $case_targetsnew_body=$item['case_target'];
          $case_target_new_body .= "$case_targetsnew_body". ", ";

          $ppm_targetsnew_body=$item['ppm_target'];
          $ppm_target_new_body .= "$ppm_targetsnew_body". ", ";

          $ppm_actualsnew_body=$item['ppm_actual'];
          $ppm_actual_new_body .= "$ppm_actualsnew_body". ", ";
          
        }
        ?>
        
      <?php
        //Inisialisasi nilai variabel awal
        $ppm_case_date_new_power_train= "";
        $case_target_new_power_train="";
        $case_actual_new_power_train="";
        $ppm_actual_new_power_train="";
        $ppm_target_new_power_train="";
    
        
        foreach ($data_stacked_bar_new_power_train as $item)
        {
          $ppmCaseDate=$item['Bulan'];
          $ppm_case_date_new_power_train .= "'$ppmCaseDate'". ", ";

          $case_actualsnew_power_train=$item['case_actual'];
          $case_actual_new_power_train .= "$case_actualsnew_power_train". ", ";

          $case_targetsnew_power_train=$item['case_target'];
          $case_target_new_power_train .= "$case_targetsnew_power_train". ", ";

          $ppm_targetsnew_power_train=$item['ppm_target'];
          $ppm_target_new_power_train .= "$ppm_targetsnew_power_train". ", ";

          $ppm_actualsnew_power_train=$item['ppm_actual'];
          $ppm_actual_new_power_train .= "$ppm_actualsnew_power_train". ", ";
          
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $ppm_case_date_new_blower= "";
        $case_target_new_blower="";
        $case_actual_new_blower="";
        $ppm_actual_new_blower="";
        $ppm_target_new_blower="";
    
        
        foreach ($data_stacked_bar_new_blower as $item)
        {
          $ppmCaseDate=$item['Bulan'];
          $ppm_case_date_new_blower .= "'$ppmCaseDate'". ", ";

          $case_actualsnew_blower=$item['case_actual'];
          $case_actual_new_blower .= "$case_actualsnew_blower". ", ";

          $case_targetsnew_blower=$item['case_target'];
          $case_target_new_blower .= "$case_targetsnew_blower". ", ";

          $ppm_targetsnew_blower=$item['ppm_target'];
          $ppm_target_new_blower .= "$ppm_targetsnew_blower". ", ";

          $ppm_actualsnew_blower=$item['ppm_actual'];
          $ppm_actual_new_blower .= "$ppm_actualsnew_blower". ", ";
          
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $ppm_case_date_new_wiper_washer= "";
        $case_target_new_wiper_washer="";
        $case_actual_new_wiper_washer="";
        $ppm_actual_new_wiper_washer="";
        $ppm_target_new_wiper_washer="";
    
        
        foreach ($data_stacked_bar_new_wiper_washer as $item)
        {
          $ppmCaseDate=$item['Bulan'];
          $ppm_case_date_new_wiper_washer .= "'$ppmCaseDate'". ", ";

          $case_actualsnew_wiper_washer=$item['case_actual'];
          $case_actual_new_wiper_washer .= "$case_actualsnew_wiper_washer". ", ";

          $case_targetsnew_wiper_washer=$item['case_target'];
          $case_target_new_wiper_washer .= "$case_targetsnew_wiper_washer". ", ";

          $ppm_targetsnew_wiper_washer=$item['ppm_target'];
          $ppm_target_new_wiper_washer .= "$ppm_targetsnew_wiper_washer". ", ";

          $ppm_actualsnew_wiper_washer=$item['ppm_actual'];
          $ppm_actual_new_wiper_washer .= "$ppm_actualsnew_wiper_washer". ", ";
          
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $ppm_case_date_new_thermal= "";
        $case_target_new_thermal="";
        $case_actual_new_thermal="";
        $ppm_actual_new_thermal="";
        $ppm_target_new_thermal="";
    
        
        foreach ($data_stacked_bar_new_thermal as $item)
        {
          $ppmCaseDate=$item['Bulan'];
          $ppm_case_date_new_thermal .= "'$ppmCaseDate'". ", ";

          $case_actualsnew_thermal=$item['case_actual'];
          $case_actual_new_thermal .= "$case_actualsnew_thermal". ", ";

          $case_targetsnew_thermal=$item['case_target'];
          $case_target_new_thermal .= "$case_targetsnew_thermal". ", ";

          $ppm_targetsnew_thermal=$item['ppm_target'];
          $ppm_target_new_thermal .= "$ppm_targetsnew_thermal". ", ";

          $ppm_actualsnew_thermal=$item['ppm_actual'];
          $ppm_actual_new_thermal .= "$ppm_actualsnew_thermal". ", ";
          
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $ppm_case_date_new_company= "";
        $case_target_new_company="";
        $case_actual_new_company="";
        $ppm_actual_new_company="";
        $ppm_target_new_company="";
    
        
        foreach ($data_stacked_bar_new_company as $item)
        {
          $ppmCaseDate=$item['Bulan'];
          $ppm_case_date_new_company .= "'$ppmCaseDate'". ", ";

          $case_actualsnew_company=$item['case_actual'];
          $case_actual_new_company .= "$case_actualsnew_company". ", ";

          $case_targetsnew_company=$item['case_target'];
          $case_target_new_company .= "$case_targetsnew_company". ", ";

          $ppm_targetsnew_company=$item['ppm_target'];
          $ppm_target_new_company .= "$ppm_targetsnew_company". ", ";

          $ppm_actualsnew_company=$item['ppm_actual'];
          $ppm_actual_new_company .= "$ppm_actualsnew_company". ", ";
          
        }
        ?>

     







        <?php
        //Inisialisasi nilai variabel awal
        $ppm_case_date2= "";
        $case_target2="";
        $case_actual2="";
        $Body_ppm_case2="";
        $Power_Train_ppm_case2="";
        $Blower_ppm_case2="";
        $Wiper_ppm_case2="";
        $Thermal_ppm_case2="";
        
        foreach ($data_stacked_bar2 as $item)
        {
          $ppmCaseDate=$item['Bulan'];
          $ppm_case_date2 .= "'$ppmCaseDate'". ", ";

          $case_actuals2=$item['case_actual'];
          $case_actual2 .= "$case_actuals2". ", ";

          $case_targets2=$item['case_target'];
          $case_target2 .= "$case_targets2". ", ";
          
          $Body2=$item['Body'];
          $Body_ppm_case2 .= "'$Body2'". ", ";

          $Power_Train2=$item['Power_Train'];
          $Power_Train_ppm_case2 .= "'$Power_Train2'". ", ";

          $Blower2=$item['Blower'];
          $Blower_ppm_case .= "'$Blower2'". ", ";

          $Wiper2=$item['Wiper'];
          $Wiper_ppm_case2 .= "'$Wiper2'". ", ";

          $Thermal2=$item['Thermal'];
          $Thermal_ppm_case2 .= "'$Thermal2'". ", ";
          
        }
        ?>




     
        
        <?php
        //Inisialisasi nilai variabel awal
        $Tahun_fy_group_product = "";
        $Body_fy = "";
        $Power_Train_fy = "";
        $Blower_fy = "";
        $Wiper_fy = "";
        $Thermal_fy = "";

        foreach ($data_ppm_fy_group_product as $item) {
          $tahunfy = $item['Tahun'];
          $Tahun_fy_group_product .= "'$tahunfy'" . ", ";

          $bodyFy = $item['Body'];
          $Body_fy .= "'$bodyFy'" . ", ";

          $Power_Trainfy = $item['Power_Train'];
          $Power_Train_fy .= "'$Power_Trainfy'" . ", ";

          $Blowerfy = $item['Blower'];
          $Blower_fy .= "'$Blowerfy'" . ", ";

          $Wiperfy = $item['Wiper'];
          $Wiper_fy .= "'$Wiperfy'" . ", ";

          $Thermalfy = $item['Thermal'];
          $Thermal_fy .= "'$Thermalfy'" . ", ";
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $Tahun_fy_group_product_company = "";
        $group_product_name_fy_company = "";
    

        foreach ($data_ppm_fy_group_product_company as $item) {
          $tahunfy_company = $item['Tahun'];
          $Tahun_fy_group_product_company .= "'$tahunfy_company'" . ", ";

          $CompanyFy= $item['group_product_name'];
          $group_product_name_fy_company = "$CompanyFy" . ", ";
  
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $Tahun_fy_group_product_body = "";
        $group_product_name_fy_body = "";
    

        foreach ($data_ppm_fy_group_product_body as $item) {
          $tahunfy_body = $item['Tahun'];
          $Tahun_fy_group_product_body .= "'$tahunfy_body'" . ", ";

          $bodyFy= $item['group_product_name'];
          $group_product_name_fy_body = "$bodyFy" . ", ";
  
        }
        ?>
        
        <?php
        //Inisialisasi nilai variabel awal
        $Tahun_fy_group_product_power_train = "";
        $group_product_name_fy_power_train = "";
    

        foreach ($data_ppm_fy_group_product_power_train as $item) {
          $tahunfy_power_train = $item['Tahun'];
          $Tahun_fy_group_product_power_train .= "'$tahunfy_power_train'" . ", ";

          $power_trainFy= $item['group_product_name'];
          $group_product_name_fy_power_train = "$power_trainFy" . ", ";
  
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $Tahun_fy_group_product_blower = "";
        $group_product_name_fy_blower = "";
    

        foreach ($data_ppm_fy_group_product_blower as $item) {
          $tahunfy_blower = $item['Tahun'];
          $Tahun_fy_group_product_blower .= "'$tahunfy_blower'" . ", ";

          $blowerFy= $item['group_product_name'];
          $group_product_name_fy_blower = "$blowerFy" . ", ";
  
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $Tahun_fy_group_product_wiper_washer = "";
        $group_product_name_fy_wiper_washer = "";
    

        foreach ($data_ppm_fy_group_product_wiper_washer as $item) {
          $tahunfy_wiper_washer = $item['Tahun'];
          $Tahun_fy_group_product_wiper_washer .= "'$tahunfy_wiper_washer'" . ", ";

          $wiper_washerFy= $item['group_product_name'];
          $group_product_name_fy_wiper_washer = "$wiper_washerFy" . ", ";
  
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $Tahun_fy_group_product_thermal = "";
        $group_product_name_fy_thermal = "";
    

        foreach ($data_ppm_fy_group_product_thermal as $item) {
          $tahunfy_thermal = $item['Tahun'];
          $Tahun_fy_group_product_thermal .= "'$tahunfy_thermal'" . ", ";

          $thermalFy= $item['group_product_name'];
          $group_product_name_fy_thermal = "$thermalFy" . ", ";
  
        }
        ?>

       



        <?php
        //Inisialisasi nilai variabel awal
        $tahun_data_ppm_new= null;
        $ppm_data_new_each_years_actual=null;
        $ppm_data_new_each_years_target=null;
       
        foreach ($data_ppm_fy as $item)
        {
          $tahunPPM=$item['Tahun'];
          $tahun_data_ppm_new .= "$tahunPPM". ", ";

          $ppmDataTarget=$item['ppm_target'];
          $ppm_data_new_each_years_target .= "$ppmDataTarget". ", ";

          $ppmDataActual=$item['ppm_actual'];
          $ppm_data_new_each_years_actual .= "$ppmDataActual". ", ";
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $tahun_data_ppm_body= null;
        $ppm_data_new_each_years_actual_body=null;
        $ppm_data_new_each_years_target_body=null;
       
        foreach ($data_ppm_fy_body as $item)
        {
          $tahunPPM=$item['Tahun'];
          $tahun_data_ppm_body .= "$tahunPPM". ", ";

          $ppmDataTarget=$item['ppm_target'];
          $ppm_data_new_each_years_target_body .= "$ppmDataTarget". ", ";

          $ppmDataActual=$item['ppm_actual'];
          $ppm_data_new_each_years_actual_body .= "$ppmDataActual". ", ";
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $tahun_data_ppm_power_train= null;
        $ppm_data_new_each_years_actual_power_train=null;
        $ppm_data_new_each_years_target_power_train=null;
       
        foreach ($data_ppm_fy_power_train as $item)
        {
          $tahunPPM=$item['Tahun'];
          $tahun_data_ppm_power_train .= "$tahunPPM". ", ";

          $ppmDataTarget=$item['ppm_target'];
          $ppm_data_new_each_years_target_power_train .= "$ppmDataTarget". ", ";

          $ppmDataActual=$item['ppm_actual'];
          $ppm_data_new_each_years_actual_power_train .= "$ppmDataActual". ", ";
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $tahun_data_ppm_blower= null;
        $ppm_data_new_each_years_actual_blower=null;
        $ppm_data_new_each_years_target_blower=null;
       
        foreach ($data_ppm_fy_blower as $item)
        {
          $tahunPPM=$item['Tahun'];
          $tahun_data_ppm_blower .= "$tahunPPM". ", ";

          $ppmDataTarget=$item['ppm_target'];
          $ppm_data_new_each_years_target_blower .= "$ppmDataTarget". ", ";

          $ppmDataActual=$item['ppm_actual'];
          $ppm_data_new_each_years_actual_blower .= "$ppmDataActual". ", ";
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $tahun_data_ppm_wiper_washer= null;
        $ppm_data_new_each_years_actual_wiper_washer=null;
        $ppm_data_new_each_years_target_wiper_washer=null;
       
        foreach ($data_ppm_fy_wiper_washer as $item)
        {
          $tahunPPM=$item['Tahun'];
          $tahun_data_ppm_wiper_washer .= "$tahunPPM". ", ";

          $ppmDataTarget=$item['ppm_target'];
          $ppm_data_new_each_years_target_wiper_washer .= "$ppmDataTarget". ", ";

          $ppmDataActual=$item['ppm_actual'];
          $ppm_data_new_each_years_actual_wiper_washer .= "$ppmDataActual". ", ";
        }
        ?>

        <?php
        //Inisialisasi nilai variabel awal
        $tahun_data_ppm_thermal= null;
        $ppm_data_new_each_years_actual_thermal=null;
        $ppm_data_new_each_years_target_thermal=null;
       
        foreach ($data_ppm_fy_thermal as $item)
        {
          $tahunPPM=$item['Tahun'];
          $tahun_data_ppm_thermal .= "$tahunPPM". ", ";

          $ppmDataTarget=$item['ppm_target'];
          $ppm_data_new_each_years_target_thermal .= "$ppmDataTarget". ", ";

          $ppmDataActual=$item['ppm_actual'];
          $ppm_data_new_each_years_actual_thermal .= "$ppmDataActual". ", ";
        }
        ?>


        

      

  <!-- Akhir PHP untuk memanggil array data dari Controller -->







    

  <script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    // var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : [<?= $Tahun ?>],
      datasets: [
        {
          label               : 'Data Customer Claim',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $jumlah_fiscal_year ?>]
        },
        
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    // var areaChart       = new Chart(areaChartCanvas, { 
    //   type: 'line',
    //   data: areaChartData, 
    //   options: areaChartOptions
    // })

    // //-------------
    // //- DONUT CHART -
    // //-------------
    // // Get context with jQuery - using jQuery's .get() method.
    // var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    // var donutData        = {
    //   labels: [<= $Tahun ?> ],
    //   datasets: [
    //     {
    //       data: [<= $jumlah_fiscal_year ?>],
    //       backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
    //     }
    //   ]
    // }
    // var donutOptions     = {
    //   maintainAspectRatio : false,
    //   responsive : true,
    // }
    // //Create pie or douhnut chart
    // // You can switch between pie and douhnut using the method below.
    // var donutChart = new Chart(donutChartCanvas, {
    //   type: 'doughnut',
    //   data: donutData,
    //   options: donutOptions      
    // })



    

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
      labels: [ <?= $group_product_name ?> ],
      datasets: [
        {
          data: [<?= $jumlah_group_product ?> 0],
          backgroundColor : ['#00a65a', '#f56954', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
      plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font color, default is '#fff'
        fontColor: '#fff',
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })




    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = jQuery.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp0
    // barChartData.datasets[1] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
      ,plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })


    //-------------
    //- BAR CHART2 -
    //-------------
    var barChartCanvas = $('#barChart2').get(0).getContext('2d')
    var barChartData = {
      labels  : [<?= $tahun_data_ppm_new ?>],
      datasets: [
        {
          label               : 'PPM Target',
          backgroundColor     : 'rgba(245, 39, 39,0.9)',
          borderColor         : 'rgba(245, 39, 39,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(245, 39, 39,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(245, 39, 39,1)',
          data                : [<?= $ppm_data_new_each_years_target?>]
        },
        {
          label               : 'PPM Actual',
          backgroundColor     : 'rgba(35, 167, 18,0.9)',
          borderColor         : 'rgba(35, 167, 18,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(35, 167, 18,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(35, 167, 18,1)',
          data                : [<?= $ppm_data_new_each_years_actual?>]
        },
        
      ]
    }
    var temp0 = barChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp0
    // barChartData.datasets[1] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
      ,plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 18,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          // font style, default is defaultFontStyle
          fontStyle: 'bold',
          }
        },
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })





    // ---------------------
    // - STACKED BAR CHART -
    // ---------------------
    // ['#00a65a', '#f56954', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = {
      labels: [<?= $Tahun_fy_group_product_company ?>],
      datasets: [{
          label: 'Company',
          backgroundColor: '#00c0ef',
          borderColor: '#00c0ef',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [<?= $group_product_name_fy_company ?>]
        },
        {
          label: 'Body',
          backgroundColor: '#00a65a',
          borderColor: '#00a65a',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: [<?= $group_product_name_fy_body ?>]
        },
        {
          label: 'Thermal',
          backgroundColor: '#00c0ef',
          borderColor: '#00c0ef',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [<?= $group_product_name_fy_thermal ?>]
        },
        {
          label: 'Blower',
          backgroundColor: '#f56954',
          borderColor: '#f56954',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [<?= $group_product_name_fy_blower ?>]
        },
        {
          label: 'Wiper & Washer',
          backgroundColor: '#3c8dbc',
          borderColor: '#3c8dbc',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [<?= $group_product_name_fy_wiper_washer ?>]
        },
        {
          label: 'Power Train',
          backgroundColor: '#f39c12',
          borderColor: '#f39c12',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [<?= $group_product_name_fy_power_train ?>]
        },
      ]
    }

    var stackedBarChartOptions = {
      plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          }
        },
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })





    //-------------
    //- LINE CHART 3 -
    //--------------
    var lineChartCanvas = $('#lineChart3').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new?>],
  datasets: [
    {
    type: 'line',
    label: 'PPM Actual',
    data: [<?= $ppm_actual_new?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'PPM Target',
    data: [<?= $ppm_target_new?>],
    fill: false,
    yAxisID: "data-line2",
    borderColor: '#ba34eb'
  },
//   {
//     type: 'bar',
//     label: 'Body',
//     data: [<?=$Body_ppm_case?>],
//     backgroundColor: "#94D0CC"
//   },
// {
//     type: 'bar',
//     label: 'Power Train',
//     data: [<?=$Power_Train_ppm_case?>],
//     borderColor: 'rgb(255, 199, 56)',
//     backgroundColor: 'rgba(58, 199, 56, 0.2)'
//   },
// {
//     type: 'bar',
//     label: 'Blower',
//     data: [<?=$Blower_ppm_case?>],
//     backgroundColor: "#F29191"
//   },
// {
//     type: 'bar',
//     label: 'Wiper Washer',
//     data: [<?=$Wiper_ppm_case?>],
//     backgroundColor: "#D1D9D9"
//   },
// {
//     type: 'bar',
//     label: 'Thermal',
//     data: [<?=$Blower_ppm_case;?>],
//     backgroundColor: "#555555",
//   }
   
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }
        ],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          display:true,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        }, {
          stacked: false,
          id: 'axis-time',
          display: false,
        },{
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })





    //-------------
    //- LINE CHART WITH STACKED BAR NEW MIXED -
    //--------------
    var lineChartCanvas = $('#lineChart2').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new?>],
  datasets: [
    {
    type: 'line',
    label: 'Case Actual',
    data: [<?= $case_actual_new?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'Case Target',
    data: [<?= $case_target_new?>],
    yAxisID: "data-line2",
    fill: false,
    borderColor: '#ba34eb'
  },

//   {
//     type: 'bar',
//     label: 'Body',
//     data: [<=$Body_ppm_case2?>],
//     backgroundColor: "#94D0CC"
//   },
// {
//     type: 'bar',
//     label: 'Power Train',
//     data: [<=$Power_Train_ppm_case2?>],
//     borderColor: 'rgb(255, 199, 56)',
//     backgroundColor: 'rgba(58, 199, 56, 0.2)'
//   },
// {
//     type: 'bar',
//     label: 'Blower',
//     data: [<=$Blower_ppm_case2?>],
//     backgroundColor: "#F29191"
//   },
// {
//     type: 'bar',
//     label: 'Wiper Washer',
//     data: [<=$Wiper_ppm_case2?>],
//     backgroundColor: "#D1D9D9"
//   },
// {
//     type: 'bar',
//     label: 'Thermal',
//     data: [<=$Blower_ppm_case2?>],
//     backgroundColor: "#555555",
//   }
   
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        }, 
        {
          stacked: false,
          id: 'axis-time',
          display: false,
        },
        {
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          position: 'left',
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
                
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })



    
  })
</script>


<!-- Page specific script -->
<script>

  $(function () {

    /* initialize the external events
     -----------------------------------------------------------------*/
    function ini_events(ele) {
      ele.each(function () {

        // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
        // it doesn't need to have a start or end
        var eventObject = {
          title: $.trim($(this).text()) // use the element's text as the event title
        }

        // store the Event Object in the DOM element so we can get to it later
        $(this).data('eventObject', eventObject)

        // make the event draggable using jQuery UI
        $(this).draggable({
          zIndex        : 1070,
          revert        : true, // will cause the event to go back to its
          revertDuration: 0  //  original position after the drag
        })

      })
    }

    ini_events($('#external-events div.external-event'))

    /* initialize the calendar
     -----------------------------------------------------------------*/
    //Date for the calendar events (dummy data)
    var date = new Date()
    var d    = date.getDate(),
        m    = date.getMonth(),
        y    = date.getFullYear()

    var Calendar = FullCalendar.Calendar;
    var Draggable = FullCalendarInteraction.Draggable;

    // var containerEl = document.getElementById('external-events');
    // var checkbox = document.getElementById('drop-remove');
    var calendarEl = document.getElementById('calendar');

    // initialize the external events
    // -----------------------------------------------------------------

    // new Draggable(containerEl, {
    //   itemSelector: '.external-event',
    //   eventData: function(eventEl) {
    //     console.log(eventEl);
    //     return {
    //       title: eventEl.innerText,
    //       backgroundColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
    //       borderColor: window.getComputedStyle( eventEl ,null).getPropertyValue('background-color'),
    //       textColor: window.getComputedStyle( eventEl ,null).getPropertyValue('color'),
    //     };
    //   }
    // });

    var calendar = new Calendar(calendarEl, {
      plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      header    : {
        left  : 'prev,next today',
        center: 'title',
        right : ''
      },
      'font-size': 20,
      'themeSystem': 'bootstrap',
      contentHeight: '50px',
      aspectRation: 1,
      // plugins: [ 'bootstrap', 'interaction', 'dayGrid', 'timeGrid' ],
      //  right : 'dayGridMonth,timeGridWeek,timeGridDay'
      //Random default events
      events    : <?= $calendar_no_claims2 ?>,
      editable  : true,
      droppable : true, // this allows things to be dropped onto the calendar !!!
      drop      : function(info) {
        // is the "remove after drop" checkbox checked?
        if (checkbox.checked) {
          // if so, remove the element from the "Draggable Events" list
          info.draggedEl.parentNode.removeChild(info.draggedEl);
        }
      }    
    }); 

    // title          : 'No Claim',
    //       start          : new Date([<= $startDate ?>]),
    //       end            : new Date([<= $endDate ?>]),
    //       allDay         : true,
    //       backgroundColor: '#00a65a', //Success (green)
    //       borderColor    : '#00a65a' //Success (green)

    calendar.render();
    // $('#calendar').fullCalendar()

    /* ADDING EVENTS */
    var currColor = '#3c8dbc' //Red by default
    //Color chooser button
    var colorChooser = $('#color-chooser-btn')
    $('#color-chooser > li > a').click(function (e) {
      e.preventDefault()
      //Save color
      currColor = $(this).css('color')
      //Add color effect to button
      $('#add-new-event').css({
        'background-color': currColor,
        'border-color'    : currColor
      })
    })

    $('#add-new-event').click(function (e) {
      e.preventDefault()
      //Get value and make sure it is not null
      var val = $('#new-event').val()
      if (val.length == 0) {
        return
      }

      //Create events
      var event = $('<div />')
      event.css({
        'background-color': currColor,
        'border-color'    : currColor,
        'color'           : '#fff'
      }).addClass('external-event')
      event.html(val)
      $('#external-events').prepend(event)

      //Add draggable funtionality
      ini_events(event)

      //Remove event from text input
      $('#new-event').val('')
    })
    




    

  })
</script>

 



<script type="text/javascript">


function btnCompanyOnCLick(){

  //-------------
    //- BAR CHART2 -
    //-------------
    document.querySelector("#barReport2").innerHTML = '<canvas id="barChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var barChartCanvas = $('#barChart2').get(0).getContext('2d')
    var barChartData = {
      labels  : [<?= $tahun_data_ppm_new ?>],
      datasets: [
        {
      
          label               : 'PPM Target',
          backgroundColor     : 'rgba(245, 39, 39,0.9)',
          borderColor         : 'rgba(245, 39, 39,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(245, 39, 39,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(245, 39, 39,1)',
          data                : [<?= $ppm_data_new_each_years_target?>]
        },
        {
          label               : 'PPM Actual',
          backgroundColor     : 'rgba(35, 167, 18,0.9)',
          borderColor         : 'rgba(35, 167, 18,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(35, 167, 18,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(35, 167, 18,1)',
          data                : [<?= $ppm_data_new_each_years_actual?>]
        },
        
      ]
    }
    var temp0 = barChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp0
    // barChartData.datasets[1] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
      ,plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 18,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          // font style, default is defaultFontStyle
          fontStyle: 'bold',
          }
        },
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    // ---------------------
    // - STACKED BAR CHART -
    // ---------------------
    // ['#00a65a', '#f56954', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
   
    document.querySelector("#stackedbarreport").innerHTML = ' <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = {
      labels: [<?= $Tahun_fy_group_product_company ?>],
      datasets: [{
          label: 'Company',
          backgroundColor: '#00c0ef',
          borderColor: '#00c0ef',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [<?= $group_product_name_fy_company ?>]
        }
      ]
    }

    var stackedBarChartOptions = {
      plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          }
        },
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  
  //-------------
   //- PIE CHART -
   //-------------
   document.querySelector("#pieReport").innerHTML = '<canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
      labels: [ <?= $group_product_name ?> ],
      datasets: [
        {
          data: [<?= $jumlah_group_product ?> 0],
          backgroundColor : ['#00a65a', '#f56954', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
      plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font color, default is '#fff'
        fontColor: '#fff',
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })





   
    //-------------
   //- Bar CHART FISCAL YEARS -
   //-------------
   document.querySelector("#barReport").innerHTML = '<canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
   
   var areaChartData2 = {
      labels  : [<?= $Tahun ?>],
      datasets: [
        {
          label               : 'Data Customer Claim',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $jumlah_fiscal_year ?>]
        },
        
      ]
    }

   var areaChartOptions = {
     maintainAspectRatio : false,
     responsive : true,
     legend: {
       display: false
     },
     scales: {
       xAxes: [{
         gridLines : {
           display : false,
         }
       }],
       yAxes: [{
         gridLines : {
           display : false,
         }
       }]
     }
   }
   
   var barChartCanvas = $('#barChart').get(0).getContext('2d')
   var barChartData = jQuery.extend(true, {}, areaChartData2)
   var temp0 = areaChartData2.datasets[0]
   barChartData.datasets[0] = temp0

   var barChartOptions = {
     responsive              : true,
     maintainAspectRatio     : false,
     datasetFill             : false
     ,plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
   }

   var barChart = new Chart(barChartCanvas, {
     type: 'bar', 
     data: barChartData,
     options: barChartOptions
   })



   //-------------
   //- Days No Claims  -
   //-------------

    document.querySelector("#daysReport").innerHTML = '<h1 id="daysText"><?php
   //Inisialisasi nilai variabel awal
   $day= "";
   foreach ($no_claims as $item)
   {
     $days=$item['day'];
     echo $days;
   }
    ?>
    </h1>';



    //-------------
    //- LINE CHART WITH STACKED BAR NEW MIXED -
    //--------------
    document.querySelector("#linechart2report").innerHTML = '<canvas id="lineChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    
    var lineChartCanvas = $('#lineChart2').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new_company?>],
  datasets: [
    {
    type: 'line',
    label: 'Case Actual',
    data: [<?= $case_actual_new_company?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'Case Target',
    data: [<?= $case_target_new_company?>],
    yAxisID: "data-line2",
    fill: false,
    borderColor: '#ba34eb'
  },
//   {
//     type: 'bar',
//     label: 'Body',
//     data: [<?=$Body_ppm_case2?>],
//     backgroundColor: "#94D0CC"
//   },
// {
//     type: 'bar',
//     label: 'Power Train',
//     data: [<?=$Power_Train_ppm_case2?>],
//     borderColor: 'rgb(255, 199, 56)',
//     backgroundColor: 'rgba(58, 199, 56, 0.2)'
//   },
// {
//     type: 'bar',
//     label: 'Blower',
//     data: [<?=$Blower_ppm_case2?>],
//     backgroundColor: "#F29191"
//   },
// {
//     type: 'bar',
//     label: 'Wiper Washer',
//     data: [<?=$Wiper_ppm_case2?>],
//     backgroundColor: "#D1D9D9"
//   },
// {
//     type: 'bar',
//     label: 'Thermal',
//     data: [<?=$Blower_ppm_case2?>],
//     backgroundColor: "#555555",
//   }
   
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        }, 
        {
          stacked: false,
          id: 'axis-time',
          display: false,
        },
        {
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          position: 'left',
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
                
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })


//     //-------------
//     //- LINE CHART 3 -
//     //--------------
    document.querySelector("#linechart3report").innerHTML = '<canvas id="lineChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var lineChartCanvas = $('#lineChart3').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new_company?>],
  datasets: [
    {
    type: 'line',
    label: 'PPM Actual',
    data: [<?= $ppm_actual_new_company?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'PPM Target',
    data: [<?= $ppm_target_new_company?>],
    fill: false,
    yAxisID: "data-line2",
    borderColor: '#ba34eb'
  },
//   {
//     type: 'bar',
//     label: 'Body',
//     data: [<?=$Body_ppm_case?>],
//     backgroundColor: "#94D0CC"
//   },
// {
//     type: 'bar',
//     label: 'Power Train',
//     data: [<?=$Power_Train_ppm_case?>],
//     borderColor: 'rgb(255, 199, 56)',
//     backgroundColor: 'rgba(58, 199, 56, 0.2)'
//   },
// {
//     type: 'bar',
//     label: 'Blower',
//     data: [<?=$Blower_ppm_case?>],
//     backgroundColor: "#F29191"
//   },
// {
//     type: 'bar',
//     label: 'Wiper Washer',
//     data: [<?=$Wiper_ppm_case?>],
//     backgroundColor: "#D1D9D9"
//   },
// {
//     type: 'bar',
//     label: 'Thermal',
//     data: [<?=$Blower_ppm_case;?>],
//     backgroundColor: "#555555",
//   }
   
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }
        ],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          display:true,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        }, {
          stacked: false,
          id: 'axis-time',
          display: false,
        },{
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })

    
    

    


       

}

function btnBodyOnClick(){

  //-------------
    //- BAR CHART2 -
    //-------------
    document.querySelector("#barReport2").innerHTML = '<canvas id="barChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var barChartCanvas = $('#barChart2').get(0).getContext('2d')
    var barChartData = {
      labels  : [<?= $tahun_data_ppm_body ?>],
      datasets: [
        {
        
          label               : 'PPM Target',
          backgroundColor     : 'rgba(245, 39, 39,0.9)',
          borderColor         : 'rgba(245, 39, 39,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(245, 39, 39,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(245, 39, 39,1)',
          data                : [<?= $ppm_data_new_each_years_target_body?>]
        },
        {
          label               : 'PPM Actual',
          backgroundColor     : 'rgba(35, 167, 18,0.9)',
          borderColor         : 'rgba(35, 167, 18,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(35, 167, 18,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(35, 167, 18,1)',
          data                : [<?= $ppm_data_new_each_years_actual_body?>]
        },
        
      ]
    }
    var temp0 = barChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp0
    // barChartData.datasets[1] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
      ,plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 18,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          // font style, default is defaultFontStyle
          fontStyle: 'bold',
          }
        },
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })


  // ---------------------
    // - STACKED BAR CHART -
    // ---------------------
    // ['#00a65a', '#f56954', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
   
    document.querySelector("#stackedbarreport").innerHTML = ' <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = {
      labels: [<?= $Tahun_fy_group_product_body ?>],
      datasets: [{
          label: 'Body',
          backgroundColor: '#00a65a',
          borderColor: '#00a65a',
          pointRadius: false,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: [<?= $group_product_name_fy_body ?>]
        }
      ]
    }

    var stackedBarChartOptions = {
      plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          }
        },
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  
   //-------------
    //- PIE CHART -
    //-------------
    document.querySelector("#pieReport").innerHTML = '<canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';

    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = {
      labels: [ <?= $group_product_name_body ?> ],
      datasets: [
        {
          data: [<?= $jumlah_group_product_body ?> 0],
          backgroundColor : ['#00a65a', '#f56954', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
      plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font color, default is '#fff'
        fontColor: '#fff',
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
    }

    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })

    //-------------
   //- Bar CHART FISCAL YEARS -
   //-------------
   document.querySelector("#barReport").innerHTML = '<canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
   
   var areaChartData2 = {
     labels  : [<?= $Tahun_Body?>],
     datasets: [
       {
         label               : 'Data Customer Claim',
         backgroundColor     : 'rgba(60,141,188,0.9)',
         borderColor         : 'rgba(60,141,188,0.8)',
         pointRadius         : false,
         pointColor          : '#3b8bba',
         pointStrokeColor    : 'rgba(60,141,188,1)',
         pointHighlightFill  : '#fff',
         pointHighlightStroke: 'rgba(60,141,188,1)',
         data                : [<?php echo $jumlah_fiscal_year_body ?>]
       },
       
     ]
   }

   var areaChartOptions = {
     maintainAspectRatio : false,
     responsive : true,
     legend: {
       display: false
     },
     scales: {
       xAxes: [{
         gridLines : {
           display : false,
         }
       }],
       yAxes: [{
         gridLines : {
           display : false,
         }
       }]
     }
   }
   
   var barChartCanvas = $('#barChart').get(0).getContext('2d')
   var barChartData = jQuery.extend(true, {}, areaChartData2)
   var temp0 = areaChartData2.datasets[0]
   barChartData.datasets[0] = temp0

   var barChartOptions = {
     responsive              : true,
     maintainAspectRatio     : false,
     datasetFill             : false
     ,plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
   }

   var barChart = new Chart(barChartCanvas, {
     type: 'bar', 
     data: barChartData,
     options: barChartOptions
   })




    //-------------
    //- Days No Claims  -
    //-------------

    document.querySelector("#daysReport").innerHTML = '<h1 id="daysText"><?php
    //Inisialisasi nilai variabel awal
   $group_product_name="";
    $day= "";
    foreach ($no_claims_body as $item)
    {
      $group_product_name=$item['group_product_name'];
      $days=$item['day'];
      echo $days;
    }
    ?>
    </h1>';



//     //-------------
//     //- LINE CHART WITH STACKED BAR BODY -
//     //--------------
    document.querySelector("#linechart2report").innerHTML = '<canvas id="lineChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var lineChartCanvas = $('#lineChart2').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new_body?>],
  datasets: [
    {
    type: 'line',
    label: 'Case Actual',
    data: [<?= $case_actual_new_body?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'Case Target',
    data: [<?= $case_target_new_body?>],
    yAxisID: "data-line2",
    fill: false,
    borderColor: '#ba34eb'
  },
  // {
  //   type: 'bar',
  //   label: 'Body',
  //   data: [<?=$Body_ppm_case2?>],
  //   backgroundColor: "#94D0CC"
  // }
   
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        }, 
        {
          stacked: false,
          id: 'axis-time',
          display: false,
        },
        {
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          position: 'left',
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
                
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })



    //-------------
    //- LINE CHART 3 -
    //--------------
    document.querySelector("#linechart3report").innerHTML = '<canvas id="lineChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var lineChartCanvas = $('#lineChart3').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new_body?>],
  datasets: [
    {
    type: 'line',
    label: 'PPM Actual',
    data: [<?= $ppm_actual_new_body?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'PPM Target',
    data: [<?= $ppm_target_new_body?>],
    fill: false,
    yAxisID: "data-line2",
    borderColor: '#ba34eb'
  },
  // {
  //   type: 'bar',
  //   label: 'Body',
  //   data: [<?=$Body_ppm_case?>],
  //   backgroundColor: "#94D0CC"
  // },

  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }
        ],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          display:true,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        }, {
          stacked: false,
          id: 'axis-time',
          display: false,
        },{
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })


   

        

}   

function btnPowerTrainOnClick(){


   //-------------
    //- BAR CHART2 -
    //-------------
    document.querySelector("#barReport2").innerHTML = '<canvas id="barChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var barChartCanvas = $('#barChart2').get(0).getContext('2d')
    var barChartData = {
      labels  : [<?= $tahun_data_ppm_power_train ?>],
      datasets: [
        {
         
          label               : 'PPM Target',
          backgroundColor     : 'rgba(245, 39, 39,0.9)',
          borderColor         : 'rgba(245, 39, 39,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(245, 39, 39,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(245, 39, 39,1)',
          data                : [<?= $ppm_data_new_each_years_target_power_train?>]
        },
        {
          label               : 'PPM Actual',
          backgroundColor     : 'rgba(35, 167, 18,0.9)',
          borderColor         : 'rgba(35, 167, 18,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(35, 167, 18,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(35, 167, 18,1)',
          data                : [<?= $ppm_data_new_each_years_actual_power_train?>]
        },
        
      ]
    }
    var temp0 = barChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp0
    // barChartData.datasets[1] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
      ,plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 18,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          // font style, default is defaultFontStyle
          fontStyle: 'bold',
          }
        },
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

  // ---------------------
    // - STACKED BAR CHART -
    // ---------------------
    // ['#00a65a', '#f56954', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
   
    document.querySelector("#stackedbarreport").innerHTML = ' <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = {
      labels: [<?= $Tahun_fy_group_product_power_train ?>],
      datasets: [{
          label: 'Power Train',
          backgroundColor: '#f39c12',
          borderColor: '#f39c12',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [<?= $group_product_name_fy_power_train ?>]
        }
      ]
    }

    var stackedBarChartOptions = {
      plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          }
        },
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  
  //-------------
   //- PIE CHART -
   //-------------
   document.querySelector("#pieReport").innerHTML = '<canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';

   var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
   var pieData        = {
     labels: [ <?= $group_product_name_power_train ?> ],
     datasets: [
       {
         data: [<?= $jumlah_group_product_power_train ?> 0],
         backgroundColor : ['#FFBA01', '#f56954', '#f39c12', '#00c0ef', '#00a65a', '#d2d6de'],
       }
     ]
   }
   var pieOptions     = {
     maintainAspectRatio : false,
     responsive : true,
     plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font color, default is '#fff'
        fontColor: '#fff',
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
   }

   var pieChart = new Chart(pieChartCanvas, {
     type: 'pie',
     data: pieData,
     options: pieOptions      
   })




   //-------------
   //- Bar CHART FISCAL YEARS -
   //-------------
   document.querySelector("#barReport").innerHTML = '<canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
   
   var areaChartData2 = {
     labels  : [<?= $Tahun_Power_train?>],
     datasets: [
       {
         label               : 'Data Customer Claim',
         backgroundColor     : 'rgba(60,141,188,0.9)',
         borderColor         : 'rgba(60,141,188,0.8)',
         pointRadius         : false,
         pointColor          : '#3b8bba',
         pointStrokeColor    : 'rgba(60,141,188,1)',
         pointHighlightFill  : '#fff',
         pointHighlightStroke: 'rgba(60,141,188,1)',
         data                : [<?php echo $jumlah_fiscal_year_power_train ?>]
       },
       
     ]
   }

   var areaChartOptions = {
     maintainAspectRatio : false,
     responsive : true,
     legend: {
       display: false
     },
     scales: {
       xAxes: [{
         gridLines : {
           display : false,
         }
       }],
       yAxes: [{
         gridLines : {
           display : false,
         }
       }]
     }
   }
   
   var barChartCanvas = $('#barChart').get(0).getContext('2d')
   var barChartData = jQuery.extend(true, {}, areaChartData2)
   var temp0 = areaChartData2.datasets[0]
   barChartData.datasets[0] = temp0

   var barChartOptions = {
     responsive              : true,
     maintainAspectRatio     : false,
     datasetFill             : false
     ,plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
   }

   var barChart = new Chart(barChartCanvas, { 
     type: 'bar', 
     data: barChartData,
     options: barChartOptions
   })



   //-------------
   //- Days No Claims  -
   //-------------

    document.querySelector("#daysReport").innerHTML = '<h1 id="daysText"><?php
   //Inisialisasi nilai variabel awal
    $group_product_name="";
    $day= "";
    foreach ($no_claims_power_train as $item)
    {
      $group_product_name=$item['group_product_name'];
      $days=$item['day'];
      echo $days;
    }
    ?>
    </h1>';

//     //-------------
//     //- LINE CHART WITH STACKED BAR NEW MIXED -
//     //--------------
    document.querySelector("#linechart2report").innerHTML = '<canvas id="lineChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var lineChartCanvas = $('#lineChart2').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new_power_train?>],
  datasets: [
    {
    type: 'line',
    label: 'Case Actual',
    data: [<?= $case_actual_new_power_train?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'Case Target',
    data: [<?= $case_target_new_power_train?>],
    yAxisID: "data-line2",
    fill: false,
    borderColor: '#ba34eb'
  },
// {
//     type: 'bar',
//     label: 'Power Train',
//     data: [<?=$Power_Train_ppm_case2?>],
//     borderColor: 'rgb(255, 199, 56)',
//     backgroundColor: 'rgba(58, 199, 56, 0.2)'
//   }
   
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        }, 
        {
          stacked: false,
          id: 'axis-time',
          display: false,
        },
        {
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          position: 'left',
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
                
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })

    //-------------
    //- LINE CHART 3 -
    //--------------
    document.querySelector("#linechart3report").innerHTML = '<canvas id="lineChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var lineChartCanvas = $('#lineChart3').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new_power_train?>],
  datasets: [
    {
    type: 'line',
    label: 'PPM Actual',
    data: [<?= $ppm_actual_new_power_train?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'PPM Target',
    data: [<?= $ppm_target_new_power_train?>],
    fill: false,
    yAxisID: "data-line2",
    borderColor: '#ba34eb'
  },
// {
//     type: 'bar',
//     label: 'Power Train',
//     data: [<?=$Power_Train_ppm_case?>],
//     borderColor: 'rgb(255, 199, 56)',
//     backgroundColor: 'rgba(58, 199, 56, 0.2)'
//   }

   
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }
        ],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          display:true,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        }, {
          stacked: false,
          id: 'axis-time',
          display: false,
        },{
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })


  

  

       

}

function btnBlowerOnClick(){

   //-------------
    //- BAR CHART2 -
    //-------------
    document.querySelector("#barReport2").innerHTML = '<canvas id="barChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var barChartCanvas = $('#barChart2').get(0).getContext('2d')
    var barChartData = {
      labels  : [<?= $tahun_data_ppm_blower ?>],
      datasets: [
        
        {
          label               : 'PPM Target',
          backgroundColor     : 'rgba(245, 39, 39,0.9)',
          borderColor         : 'rgba(245, 39, 39,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(245, 39, 39,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(245, 39, 39,1)',
          data                : [<?= $ppm_data_new_each_years_target_blower?>]
        },
        {
          label               : 'PPM Actual',
          backgroundColor     : 'rgba(35, 167, 18,0.9)',
          borderColor         : 'rgba(35, 167, 18,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(35, 167, 18,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(35, 167, 18,1)',
          data                : [<?= $ppm_data_new_each_years_actual_blower?>]
        },
        
      ]
    }
    var temp0 = barChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp0
    // barChartData.datasets[1] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
      ,plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 18,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          // font style, default is defaultFontStyle
          fontStyle: 'bold',
          }
        },
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })
  
  // ---------------------
    // - STACKED BAR CHART -
    // ---------------------
    // ['#00a65a', '#f56954', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
   
    document.querySelector("#stackedbarreport").innerHTML = ' <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = {
      labels: [<?= $Tahun_fy_group_product_blower ?>],
      datasets: [{
          label: 'Blower',
          backgroundColor: '#f56954',
          borderColor: '#f56954',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [<?= $group_product_name_fy_blower ?>]
        }
      ]
    }

    var stackedBarChartOptions = {
      plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          }
        },
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  //-------------
   //- PIE CHART -
   //-------------
   document.querySelector("#pieReport").innerHTML = '<canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';

   var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
   var pieData        = {
     labels: [ <?= $group_product_name_blower ?> ],
     datasets: [
       {
         data: [<?= $jumlah_group_product_blower ?> 0],
         backgroundColor : ['#ff0000', '#f56954', '#f39c12', '#00c0ef', '#00a65a', '#d2d6de'],
       }
     ]
   }
   var pieOptions     = {
     maintainAspectRatio : false,
     responsive : true,
     plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font color, default is '#fff'
        fontColor: '#fff',
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
   }

   var pieChart = new Chart(pieChartCanvas, {
     type: 'pie',
     data: pieData,
     options: pieOptions      
   })




   //-------------
   //- Bar CHART FISCAL YEARS -
   //-------------
   document.querySelector("#barReport").innerHTML = '<canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
   
   var areaChartData2 = {
     labels  : [<?= $Tahun_blower?>],
     datasets: [
       {
         label               : 'Data Customer Claim',
         backgroundColor     : 'rgba(60,141,188,0.9)',
         borderColor         : 'rgba(60,141,188,0.8)',
         pointRadius         : false,
         pointColor          : '#3b8bba',
         pointStrokeColor    : 'rgba(60,141,188,1)',
         pointHighlightFill  : '#fff',
         pointHighlightStroke: 'rgba(60,141,188,1)',
         data                : [<?php echo $jumlah_fiscal_year_blower ?>]
       },
       
     ]
   }

   var areaChartOptions = {
     maintainAspectRatio : false,
     responsive : true,
     legend: {
       display: false
     },
     scales: {
       xAxes: [{
         gridLines : {
           display : false,
         }
       }],
       yAxes: [{
         gridLines : {
           display : false,
         }
       }]
     }
   }
   
   var barChartCanvas = $('#barChart').get(0).getContext('2d')
   var barChartData = jQuery.extend(true, {}, areaChartData2)
   var temp0 = areaChartData2.datasets[0]
   barChartData.datasets[0] = temp0

   var barChartOptions = {
     responsive              : true,
     maintainAspectRatio     : false,
     datasetFill             : false
     ,plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
   }

   var barChart = new Chart(barChartCanvas, {
     type: 'bar', 
     data: barChartData,
     options: barChartOptions
   })



   //-------------
   //- Days No Claims  -
   //-------------

    document.querySelector("#daysReport").innerHTML = '<h1 id="daysText"><?php
   //Inisialisasi nilai variabel awal
    $group_product_name="";
    $day= "";
    foreach ($no_claims_blower as $item)
    {
      $group_product_name=$item['group_product_name'];
      $days=$item['day'];
      echo $days;
    }
    ?>
    </h1>';

//     //-------------
//     //- LINE CHART WITH STACKED BAR NEW MIXED -
//     //--------------
    document.querySelector("#linechart2report").innerHTML = '<canvas id="lineChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var lineChartCanvas = $('#lineChart2').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new_blower?>],
  datasets: [
    {
    type: 'line',
    label: 'Case Actual',
    data: [<?= $case_actual_new_blower?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'Case Target',
    data: [<?= $case_target_new_blower?>],
    yAxisID: "data-line2",
    fill: false,
    borderColor: '#ba34eb'
  },
  // {
  //   type: 'bar',
  //   label: 'Blower',
  //   data: [<?=$Blower_ppm_case2?>],
  //   backgroundColor: "#94D0CC"
  // }
   
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        }, 
        {
          stacked: false,
          id: 'axis-time',
          display: false,
        },
        {
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          position: 'left',
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
                
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })



    //-------------
    //- LINE CHART 3 -
    //--------------
    document.querySelector("#linechart3report").innerHTML = '<canvas id="lineChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var lineChartCanvas = $('#lineChart3').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new_blower?>],
  datasets: [
    {
    type: 'line',
    label: 'PPM Actual',
    data: [<?= $ppm_actual_new_blower?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'PPM Target',
    data: [<?= $ppm_target_new_blower?>],
    fill: false,
    yAxisID: "data-line2",
    borderColor: '#ba34eb'
  },
// {
//     type: 'bar',
//     label: 'Blower',
//     data: [<?=$Blower_ppm_case?>],
//     backgroundColor: "#F29191"
//   }
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }
        ],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          display:true,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        }, {
          stacked: false,
          id: 'axis-time',
          display: false,
        },{
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })


  

       

}

function btnWiperWasherOnClick(){

   //-------------
    //- BAR CHART2 -
    //-------------
    document.querySelector("#barReport2").innerHTML = '<canvas id="barChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var barChartCanvas = $('#barChart2').get(0).getContext('2d')
    var barChartData = {
      labels  : [<?= $tahun_data_ppm_wiper_washer ?>],
      datasets: [
    
        {
          label               : 'PPM Target',
          backgroundColor     : 'rgba(245, 39, 39,0.9)',
          borderColor         : 'rgba(245, 39, 39,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(245, 39, 39,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(245, 39, 39,1)',
          data                : [<?= $ppm_data_new_each_years_target_wiper_washer?>]
        },
        {
          label               : 'PPM Actual',
          backgroundColor     : 'rgba(35, 167, 18,0.9)',
          borderColor         : 'rgba(35, 167, 18,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(35, 167, 18,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(35, 167, 18,1)',
          data                : [<?= $ppm_data_new_each_years_actual_wiper_washer?>]
        },
        
      ]
    }
    var temp0 = barChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp0
    // barChartData.datasets[1] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
      ,plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 18,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          // font style, default is defaultFontStyle
          fontStyle: 'bold',
          }
        },
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })
  // ---------------------
    // - STACKED BAR CHART -
    // ---------------------
    // ['#00a65a', '#f56954', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
   
    document.querySelector("#stackedbarreport").innerHTML = ' <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = {
      labels: [<?= $Tahun_fy_group_product_wiper_washer ?>],
      datasets: [{
          label: 'Wiper Washer',
          backgroundColor: '#3c8dbc',
          borderColor: '#3c8dbc',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [<?= $group_product_name_fy_wiper_washer ?>]
        }
      ]
    }

    var stackedBarChartOptions = {
      plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          }
        },
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  
  //-------------
   //- PIE CHART -
   //-------------
   document.querySelector("#pieReport").innerHTML = '<canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';

   var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
   var pieData        = {
     labels: [ <?= $group_product_name_wiper_washer ?> ],
     datasets: [
       {
         data: [<?= $jumlah_group_product_wiper_washer ?> 0],
         backgroundColor : ['#009dff', '#f56954', '#f39c12', '#00c0ef', '#00a65a', '#d2d6de'],
       }
     ]
   }
   var pieOptions     = {
     maintainAspectRatio : false,
     responsive : true,
     plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font color, default is '#fff'
        fontColor: '#fff',
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
   }

   var pieChart = new Chart(pieChartCanvas, {
     type: 'pie',
     data: pieData,
     options: pieOptions      
   })




   //-------------
   //- Bar CHART FISCAL YEARS -
   //-------------
   document.querySelector("#barReport").innerHTML = '<canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
   
   var areaChartData2 = {
     labels  : [<?= $Tahun_wiper_washer?>],
     datasets: [
       {
         label               : 'Data Customer Claim',
         backgroundColor     : 'rgba(60,141,188,0.9)',
         borderColor         : 'rgba(60,141,188,0.8)',
         pointRadius         : false,
         pointColor          : '#3b8bba',
         pointStrokeColor    : 'rgba(60,141,188,1)',
         pointHighlightFill  : '#fff',
         pointHighlightStroke: 'rgba(60,141,188,1)',
         data                : [<?php echo $jumlah_fiscal_year_wiper_washer ?>]
       },
       
     ]
   }

   var areaChartOptions = {
     maintainAspectRatio : false,
     responsive : true,
     legend: {
       display: false
     },
     scales: {
       xAxes: [{
         gridLines : {
           display : false,
         }
       }],
       yAxes: [{
         gridLines : {
           display : false,
         }
       }]
     }
   }
   
   var barChartCanvas = $('#barChart').get(0).getContext('2d')
   var barChartData = jQuery.extend(true, {}, areaChartData2)
   var temp0 = areaChartData2.datasets[0]
   barChartData.datasets[0] = temp0

   var barChartOptions = {
     responsive              : true,
     maintainAspectRatio     : false,
     datasetFill             : false
     ,plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
   }

   var barChart = new Chart(barChartCanvas, {
     type: 'bar', 
     data: barChartData,
     options: barChartOptions
   })



   //-------------
   //- Days No Claims  -
   //-------------

    document.querySelector("#daysReport").innerHTML = '<h1 id="daysText"><?php
   //Inisialisasi nilai variabel awal
    $group_product_name="";
    $day= "";
    foreach ($no_claims_wiper_washer as $item)
    {
      $group_product_name=$item['group_product_name'];
      $days=$item['day'];
      echo $days;
    }
    ?>
    </h1>';


//     //-------------
//     //- LINE CHART WITH STACKED BAR NEW MIXED -
//     //--------------
    document.querySelector("#linechart2report").innerHTML = '<canvas id="lineChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var lineChartCanvas = $('#lineChart2').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new_wiper_washer?>],
  datasets: [
    {
    type: 'line',
    label: 'Case Actual',
    data: [<?= $case_actual_new_wiper_washer?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'Case Target',
    data: [<?= $case_target_new_wiper_washer?>],
    yAxisID: "data-line2",
    fill: false,
    borderColor: '#ba34eb'
  },
  // {
  //   type: 'bar',
  //   label: 'Wiper Washer',
  //   data: [<?=$Wiper_ppm_case2?>],
  //   backgroundColor: "#94D0CC"
  // }
   
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        }, 
        {
          stacked: false,
          id: 'axis-time',
          display: false,
        },
        {
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          position: 'left',
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
                
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })




    //-------------
    //- LINE CHART 3 -
    //--------------
    document.querySelector("#linechart3report").innerHTML = '<canvas id="lineChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var lineChartCanvas = $('#lineChart3').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new_wiper_washer?>],
  datasets: [
    {
    type: 'line',
    label: 'PPM Actual',
    data: [<?= $ppm_actual_new_wiper_washer?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'PPM Target',
    data: [<?= $ppm_target_new_wiper_washer?>],
    fill: false,
    yAxisID: "data-line2",
    borderColor: '#ba34eb'
  },
// {
//     type: 'bar',
//     label: 'Wiper Washer',
//     data: [<?=$Wiper_ppm_case?>],
//     backgroundColor: "#D1D9D9"
//   }
   
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }
        ],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          display:true,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        }, {
          stacked: false,
          id: 'axis-time',
          display: false,
        },{
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })


       

}

function btnThermalOnClick(){

   //-------------
    //- BAR CHART2 -
    //-------------
    document.querySelector("#barReport2").innerHTML = '<canvas id="barChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var barChartCanvas = $('#barChart2').get(0).getContext('2d')
    var barChartData = {
      labels  : [<?= $tahun_data_ppm_thermal ?>],
      datasets: [
      
        {
          label               : 'PPM Target',
          backgroundColor     : 'rgba(245, 39, 39,0.9)',
          borderColor         : 'rgba(245, 39, 39,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(245, 39, 39,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(245, 39, 39,1)',
          data                : [<?= $ppm_data_new_each_years_target_thermal?>]
        },
        {
          label               : 'PPM Actual',
          backgroundColor     : 'rgba(35, 167, 18,0.9)',
          borderColor         : 'rgba(35, 167, 18,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(35, 167, 18,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(35, 167, 18,1)',
          data                : [<?= $ppm_data_new_each_years_actual_thermal?>]
        },
        
      ]
    }
    var temp0 = barChartData.datasets[0]
    // var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp0
    // barChartData.datasets[1] = temp1

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
      ,plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 18,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          // font style, default is defaultFontStyle
          fontStyle: 'bold',
          }
        },
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

  // ---------------------
    // - STACKED BAR CHART -
    // ---------------------
    // ['#00a65a', '#f56954', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
   
    document.querySelector("#stackedbarreport").innerHTML = ' <canvas id="stackedBarChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = {
      labels: [<?= $Tahun_fy_group_product_thermal ?>],
      datasets: [{
          label: 'Thermal',
          backgroundColor: '#00c0ef',
          borderColor: '#00c0ef',
          pointRadius: false,
          pointColor: 'rgba(210, 214, 222, 1)',
          pointStrokeColor: '#c1c7d1',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data: [<?= $group_product_name_fy_thermal ?>]
        }
      ]
    }

    var stackedBarChartOptions = {
      plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          }
        },
      responsive: true,
      maintainAspectRatio: false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    var stackedBarChart = new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  
  //-------------
   //- PIE CHART -
   //-------------
   document.querySelector("#pieReport").innerHTML = '<canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';

   var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
   var pieData        = {
     labels: [ <?= $group_product_name_thermal ?> ],
     datasets: [
       {
         data: [<?= $jumlah_group_product_thermal ?> 0],
         backgroundColor : ['#00a65a', '#f56954', '#f39c12', '#00c0ef', '#00a65a', '#d2d6de'],
       }
     ]
   }
   var pieOptions     = {
     maintainAspectRatio : false,
     responsive : true,
     plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font color, default is '#fff'
        fontColor: '#fff',
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
   }

   var pieChart = new Chart(pieChartCanvas, {
     type: 'pie',
     data: pieData,
     options: pieOptions      
   })




   //-------------
   //- Bar CHART FISCAL YEARS -
   //-------------
   document.querySelector("#barReport").innerHTML = '<canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
   
   var areaChartData2 = {
     labels  : [<?= $Tahun_thermal?>],
     datasets: [
       {
         label               : 'Data Customer Claim',
         backgroundColor     : 'rgba(60,141,188,0.9)',
         borderColor         : 'rgba(60,141,188,0.8)',
         pointRadius         : false,
         pointColor          : '#3b8bba',
         pointStrokeColor    : 'rgba(60,141,188,1)',
         pointHighlightFill  : '#fff',
         pointHighlightStroke: 'rgba(60,141,188,1)',
         data                : [<?php echo $jumlah_fiscal_year_thermal ?>]
       },
       
     ]
   }

   var areaChartOptions = {
     maintainAspectRatio : false,
     responsive : true,
     legend: {
       display: false
     },
     scales: {
       xAxes: [{
         gridLines : {
           display : false,
         }
       }],
       yAxes: [{
         gridLines : {
           display : false,
         }
       }]
     }
   }
   
   var barChartCanvas = $('#barChart').get(0).getContext('2d')
   var barChartData = jQuery.extend(true, {}, areaChartData2)
   var temp0 = areaChartData2.datasets[0]
   barChartData.datasets[0] = temp0

   var barChartOptions = {
     responsive              : true,
     maintainAspectRatio     : false,
     datasetFill             : false
     ,plugins: {
      labels: {
        // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
        render: 'value',
         // font size, default is defaultFontSize
        fontSize: 16,
        // font style, default is defaultFontStyle
        fontStyle: 'bold',
        }
      }
   }

   var barChart = new Chart(barChartCanvas, {
     type: 'bar', 
     data: barChartData,
     options: barChartOptions
   })



   //-------------
   //- Days No Claims  -
   //-------------

    document.querySelector("#daysReport").innerHTML = '<h1 id="daysText"><?php
   //Inisialisasi nilai variabel awal
    $group_product_name="";
    $day= "";
    foreach ($no_claims_thermal as $item)
    {
      $group_product_name=$item['group_product_name'];
      $days=$item['day'];
      echo $days;
    }
    ?>
    </h1>';

//     //-------------
//     //- LINE CHART WITH STACKED BAR NEW MIXED -
//     //--------------
    document.querySelector("#linechart2report").innerHTML = '<canvas id="lineChart2" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var lineChartCanvas = $('#lineChart2').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new_thermal?>],
  datasets: [
    {
    type: 'line',
    label: 'Case Actual',
    data: [<?= $case_actual_new_thermal?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'Case Target',
    data: [<?= $case_target_new_thermal?>],
    yAxisID: "data-line2",
    fill: false,
    borderColor: '#ba34eb'
  },
  // {
  //   type: 'bar',
  //   label: 'Thermal',
  //   data: [<?=$Thermal_ppm_case2?>],
  //   backgroundColor: "#94D0CC"
  // }
   
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        }, 
        {
          stacked: false,
          id: 'axis-time',
          display: false,
        },
        {
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          position: 'left',
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
                
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                suggestedMax: 40,
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })


    //-------------
    //- LINE CHART 3 -
    //--------------
    document.querySelector("#linechart3report").innerHTML = '<canvas id="lineChart3" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>';
    var lineChartCanvas = $('#lineChart3').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = {
      labels: [<?= $ppm_case_date_new_thermal?>],
  datasets: [
    {
    type: 'line',
    label: 'PPM Actual',
    data: [<?= $ppm_actual_new_thermal?>], 
    fill: false,
    yAxisID: "data-line1",
    borderColor: '#3489eb'
  },
  {
    type: 'line',
    label: 'PPM Target',
    data: [<?= $ppm_target_new_thermal?>],
    fill: false,
    yAxisID: "data-line2",
    borderColor: '#ba34eb'
  },
// {
//     type: 'bar',
//     label: 'Thermal',
//     data: [<?=$Blower_ppm_case;?>],
//     backgroundColor: "#555555",
//   }
   
  ]
};
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'bar',
      data: lineChartData,
      options: {
        plugins: {
        labels: {
          // render 'label', 'value', 'percentage', 'image' or custom function, default is 'percentage'
          render: 'value',
          // font size, default is defaultFontSize
          fontSize: 12,
          // position to draw label, available value is 'default', 'border' and 'outside'
          // bar chart ignores this
          // default is 'default'
          position: 'default',
          }
        },
      tooltips: {
        displayColors: true,
      },
      scales: {
        xAxes: [{
          stacked: true,
        }
        ],
        yAxes: [
          {
          stacked: true,
          id: 'axis-bar',
          display:true,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        }, {
          stacked: false,
          id: 'axis-time',
          display: false,
        },{
          stacked: false,
          id: 'axis-time2',
          display: false,
        },
        {
          stacked: false,
          id: 'data-line1',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
        {
          stacked: false,
          id: 'data-line2',
          display: false,
          ticks: {
                min:0,
                max:3,
                stepsize:0.5
            }
        },
      ]
      },
        responsive: true,
        maintainAspectRatio: false,
        legend: { display: false },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="' + chart.id + '-legend">');
          var data = chart.data;
          var datasets = data.datasets;
          if (datasets.length) {
            for (var i = 0; i < datasets.length; ++i) {
                text.push('<li>');
                if (datasets[i].type=='line') {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              } else {
                text.push('<span class="'+datasets[i].type+'" style="background-color:' + datasets[i].backgroundColor + '"></span>');
              }
              text.push(datasets[i].label);
              text.push('</li>');
            }
          }
          text.push('</ul>');
          return text.join('');
        }
      }
    })

       

}






</script>

