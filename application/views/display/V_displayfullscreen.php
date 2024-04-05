
<!DOCTYPE html>
<html>

<head>
    
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!--<title>AdminLTE 3 | Log in</title>-->

  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png">
  <title>DMIA PORTAL</title>

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

</head>

<body>

<!-- Content Wrapper. Contains page content -->
<!-- <div class="content-wrapper"> -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

            <?php 
            $FiscalYear = $this->M_display->Fiscal_Year(); 
            $FiscalYear =$FiscalYear->fiscalyear;
            $FiscalYear2=intval($FiscalYear)+1;          
            ?>
           
            <h1 class="m-0 text-dark">MONITORING VIEW FISCAL YEAR <?php echo $FiscalYear ?></h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('C_display/index') ?>" id="mytest2" >Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('C_displayfullscreen/index') ?>" id="mytest1" >Refresh</a></li>                
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    
      <div class="container-fluid">
             
        <div class="row">

          <div class="col-md-6">

            <!-- AREA CHART -->
            <div class="card card-danger">
              <div class="card-header">

                <h3 class="card-title">INVESTMENT (MRP)</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>

              </div>

              <div class="card-body">
                <div class="chart">
                  <canvas id="areaChart" style="height:320px; min-height:250px"></canvas>
                </div>
              </div>

              <!-- /.card-body -->
            </div>            
            <!-- /.card -->

            <!-- DONUT CHART -->
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">PRODUCTIVITY (NINKU)</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>

              </div>
              <div class="card-body">
                <canvas id="areaChart2" style="height:320px; min-height:230px"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- PIE CHART -->
            <!-- <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Pie Chart</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <canvas id="pieChart" style="height:230px; min-height:230px"></canvas>
              </div> -->
              <!-- /.card-body -->
            <!-- </div> -->
            <!-- /.card -->

          </div>

          <!-- /.col (LEFT) -->

          <div class="col-md-6">

              <table  class="table width=30" width="30">
                <tr>
                  <td>
                   <h2 class="m-0 text-dark">KEY PROJECT</h2>
                  </td>
                  <td>
                   <h4 class="m-0 text-dark">(INVESTMENT > 500 MRP , PRODUCTIVITY > 3 NINKU)</h4>
                  </td>
                </tr>
              </table>
            
            <table  class="table width=30" width="30">

              <tr>
                <td width="30"><div class="progress progress-xs"><div class="progress-bar bg-primary" style="width: 100%"></div></div></td>
                <td width="30">PLAN ALL</td>
                <td width="30"><div class="progress progress-xs"><div class="progress-bar bg-warning" style="width: 100%"></div></div></td>
                <td width="30">CURRENT PLAN</td>
                <td width="30"><div class="progress progress-xs"><div class="progress-bar bg-success" style="width: 100%"></div></div></td>
                <td width="30">ON TARGET</td>               
                <td width="30"><div class="progress progress-xs"><div class="progress-bar bg-danger" style="width: 100%"></div></div></td>
                <td width="30">DELAY</td>
              </tr>

              <!-- <tr>
                <td width="30"><div class="progress progress-xs"><div class="progress-bar bg-warning" style="width: 100%"></div></div></td>
                <td width="30">PLAN CURRENT</td>
                <td width="30"><div class="progress progress-xs"><div class="progress-bar bg-danger" style="width: 100%"></div></div></td>
                <td width="30">DELAY</td>
              </tr> -->
              
            </table>

            <!-- <h5><div class="progress progress-xs"><div class="progress-bar bg-warning" style="width: 100%"></div></div><div class="progress progress-xs"><div class="progress-bar bg-danger" style="width: 100%"></div></div></h5> -->
            <div class="card-body p-0">
                
            </div>
              
            <table id="tblMain6" class="table  table-striped table-hover table-grey" >
                    
              <tr>
                <th >
                  PIC
                </th>
                <th>
                  ITEMS
                </th>
                <th>
                  PROGRESS
                </th>
                <th>
                  STATUS
                </th>
                <th ><!-- style="display:none" -->
                  PLAN
                </th>
                <th >
                  ACTUAL
                </th>
                <th >
                  PLAN ALL
                </th>
                <th >
                  PLAN DETAILS
                </th>
                <th >
                  ACTUAL DETAILS
                </th>
              </tr>
              
              <?php $i=1; ?>

              <?php foreach ($plan as $role):?>

                <!-- PIC,project_name,Plan_Berjalan,Aktual -->

                <tr>
                  <td> 
                     <?php echo $role->username?>
                  </td>
                  <td> 
                      <?php echo $role->project_name?>
                  </td>
                  <td>
                    
                     <!-- Persentase -->
                    <?php 

                      $w = $role->Plan_All; /* Plan All */
                      $x = $role->Plan_Berjalan;  /* Plan berjalan */
                      $y = $role->Aktual; /* Actual berjalan */
                     
                      /* if($x==0){
                        $x=1;
                      }

                      if($y==0){
                        $y=1;
                      }

                      if($w==0){
                        $w=1;
                      } */

                      /* % Actual berjalan */
                      /* $z = ($y/$w) * 100; */
                      $z = ($y*100) / $w;
                      $z =number_format($z);

                      /* % Plan berjalan */
                      /* $v = ($x/$w) * 100; */
                      $v = ($x*100) / $w;
                      $v =number_format($v);

                    ?>

                    <!-- Progress Plan All -->
                    <div class="progress progress-xs">
                        <div class="progress-bar bg-primary" style="width: 100%"></div>
                    </div>

                    <!-- Progress Plan Berjalan -->
                    <div class="progress progress-xs">
                       <div class="progress-bar bg-warning" style="width: <?php echo $v."%" ?> "></div>
                    </div>

                    <!-- Progress Actual -->
                    <div class="progress progress-xs">
                        
                      <?php if ($role->Plan_Berjalan>$role->Aktual) {?>

                        <div class="progress-bar bg-danger" style="width: <?php echo $z."%" ?> "></div>

                      <?php } else { ?>

                        <div class="progress-bar bg-success" style="width: <?php echo $z."%" ?>"></div>

                      <?php } ?>

                    </div>
                   
                  </td>
                  
                  <td>

                  <?php if ($role->Plan_Berjalan>$role->Aktual) {?>

                    <span class="badge bg-danger"><?php echo "Delay" ?></span>

                  <?php } elseif  ($role->Plan_Berjalan==$role->Aktual) { ?>

                    <span class="badge bg-success"><?php echo "On Target" ?></span>

                  <?php } else { ?>

                    <span class="badge bg-primary"><?php echo "Advance" ?></span>

                  <?php } ?>
                                    
                  </td>

                  <td>                      
                     <?php echo $role->Plan_Berjalan ?>
                  </td> 
                      
                  <td> 
                      <?php echo $role->Aktual?>                      
                  </td>

                  <td> 
                      <?php echo $role->Plan_All?>                      
                  </td>

                  <td> 
                      <?php echo $role->plan_process?>                      
                  </td>

                  <td > 
                      <?php echo $role->Act_process?>                      
                  </td>

                </tr>
                   
              <?php endforeach; ?>

            </table>

            <!-- Tarik data untuk graphic productivity -->
            <?php foreach ($productivity as $role2):?>
            <?php endforeach; ?>

            <!-- Tarik data untuk graphic investment -->
            <?php foreach ($investment as $role3):?>
            <?php endforeach; ?>

          </div>

          <!-- /.col (RIGHT) -->

        </div>
        <!-- /.row -->
       
       </div> <!--/.container-fluid -->
    </section>
    <!-- /.content -->

<!-- </div> -->

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>

<script>

window.setTimeout("waktu()", 1000);
 
 function waktu() {
   var waktu = new Date();
   setTimeout("waktu()", 1000);

   /* document.getElementById("jam").innerHTML = waktu.getHours();
   document.getElementById("menit").innerHTML = waktu.getMinutes();
   document.getElementById("detik").innerHTML = waktu.getSeconds(); */
  
  var x = waktu.getSeconds();
  var y = 3; /* Delay 3 detik */
  var h = 90; /* Delay 13 detik refresh */

  var z = x % y;
  var r = x % h;

  if (z==0 & r!==0){

    /* document.getElementById("mytest1").dispatchEvent(new MouseEvent("click", {ctrlKey: true})); */
    
    /* location.reload(); */

     /* 'Insert baris' */    
    // Find a <table> element with id="myTable":

      var table = document.getElementById("tblMain6");
      var rowCount1 = table.rows.length;
      /* rowCount1;  */   

      if (rowCount1>5){ /* Jika ada baris maka berlaku insert*/

        var row = table.insertRow(1);
        var cell1 = row.insertCell(0);  //PIC
        var cell2 = row.insertCell(1);  //Items
        var cell3 = row.insertCell(2);  //Progress bar = 3 bar
        var cell4 = row.insertCell(3);  //Status
        var cell5 = row.insertCell(4);  //Plan
        var cell6 = row.insertCell(5);  //Actual
        var cell7 = row.insertCell(6);  //Plan all

        var cell8 = row.insertCell(7);  //Plan Details
        var cell9 = row.insertCell(8);  //Actual details

         
        cell1.innerHTML =table.rows[rowCount1].cells.item(0).innerHTML; //PIC
        cell2.innerHTML =table.rows[rowCount1].cells.item(1).innerHTML;  //Items
         
        var xx = table.rows[rowCount1].cells.item(4).innerHTML.replace(/^(&nbsp;|\s)*/, '');     //Plan    
        var yy = table.rows[rowCount1].cells.item(5).innerHTML.replace(/^(&nbsp;|\s)*/, '');     //Actual
        var zz = table.rows[rowCount1].cells.item(6).innerHTML.replace(/^(&nbsp;|\s)*/, '');     //Plan All

        xx=Number(xx);
        yy=Number(yy);
        zz=Number(zz);
        
        /* Plan all */
        var planall=Number(zz);
        planall=planall.toFixed(0);
        
        /* Plan berjalan */
        var planberjalan=(Number(xx)*100)/Number(planall);
        planberjalan=planberjalan.toFixed(0);
         
        /* Actual berjalan */
        var actualberjalan=(Number(yy)*100)/Number(planall);
        actualberjalan=actualberjalan.toFixed(0);
                        
        if (Number(planberjalan)>Number(actualberjalan)){ //Kurang dari plan maka warning xx>yy

          //Progress bar
          cell3.innerHTML ='<div class="progress progress-xs"><div class="progress-bar bg-primary" style="width: 100%"></div></div><div class="progress progress-xs"><div class="progress-bar bg-warning" style="width: '+planberjalan+'%"></div></div><div class="progress progress-xs"><div class="progress-bar bg-danger" style="width: '+actualberjalan+'%"></div></div>';
          //Status
          cell4.innerHTML ='<span class="badge bg-danger">Delay</span>';
         
        }else if (Number(planberjalan)==Number(actualberjalan)) {

          //Progress bar
          cell3.innerHTML ='<div class="progress progress-xs"><div class="progress-bar bg-primary" style="width: 100%"></div></div><div class="progress progress-xs"><div class="progress-bar bg-warning" style="width: '+planberjalan+'%"></div></div><div class="progress progress-xs"><div class="progress-bar bg-success" style="width: '+actualberjalan+'%"></div></div>';
          //Status
          cell4.innerHTML ='<span class="badge bg-success">On Target</span>';
         
        }else {

          //Progress bar
          cell3.innerHTML ='<div class="progress progress-xs"><div class="progress-bar bg-primary" style="width: 100%"></div></div><div class="progress progress-xs"><div class="progress-bar bg-warning" style="width: '+planberjalan+'%"></div></div><div class="progress progress-xs"><div class="progress-bar bg-success" style="width: '+actualberjalan+'%"></div></div>';
           
           //Status
          cell4.innerHTML ='<span class="badge bg-primary">Advance</span>';

        }


        //Plan
        cell5.innerHTML =table.rows[rowCount1].cells.item(4).innerHTML;
        //Actual
        cell6.innerHTML =table.rows[rowCount1].cells.item(5).innerHTML; 
        //Plan All
        cell7.innerHTML =table.rows[rowCount1].cells.item(6).innerHTML;

        //Plan Details
        cell8.innerHTML =table.rows[rowCount1].cells.item(7).innerHTML;
         //Actual Details
        cell9.innerHTML =table.rows[rowCount1].cells.item(8).innerHTML;
        
        /* cell1.style.display = 'none'; */
            
        /* 'Delete baris awal' */
        table.deleteRow(rowCount1);

      }

  }else {

     if(r==0){  /* Refresh page */
        location.reload();
     }
         
  }
   
 }


  $(function () {

    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
    */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      
       labels  : ['<?php echo "Apr " . $FiscalYear ?>', '<?php echo "May " . $FiscalYear ?>', '<?php echo "Jun " . $FiscalYear ?>', '<?php echo "Jul " . $FiscalYear ?>', '<?php echo "Aug " . $FiscalYear ?>', '<?php echo "Sep " . $FiscalYear ?>', '<?php echo "Oct " . $FiscalYear ?>', '<?php echo "Nov " . $FiscalYear ?>','<?php echo "Des " . $FiscalYear ?>', '<?php echo "Jan " . $FiscalYear2 ?>', '<?php echo "Feb " . $FiscalYear2 ?>','<?php echo "Mar " . $FiscalYear2 ?>'],

      datasets: [
        {
          label               : 'PLAN',
          /* type                : 'line', */
          backgroundColor     : 'rgba(60,141,188,0.9)',
          /* backgroundColor     : [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ], */
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',

          data                : [<?php echo $role3->apr ?>,<?php echo $role3->may ?>,<?php echo $role3->jun ?>,<?php echo $role3->jul ?>,<?php echo $role3->aug ?>,<?php echo $role3->sep ?>,<?php echo $role3->oct ?>,<?php echo $role3->nov ?>,<?php echo $role3->dec ?>,<?php echo $role3->jan ?>,<?php echo $role3->feb ?>,<?php echo $role3->mar ?>]
          

        },
        {
          label               : 'ACTUAL',
          /* type                : 'bar', */
          backgroundColor     : '#3cba9f',
          /* backgroundColor     : [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ], */
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',

          data                : [<?php echo $role3->apract ?>,<?php echo $role3->mayact ?>,<?php echo $role3->junact ?>,<?php echo $role3->julact ?>,<?php echo $role3->augact ?>,<?php echo $role3->sepact ?>,<?php echo $role3->octact ?>,<?php echo $role3->novact ?>,<?php echo $role3->decact ?>,<?php echo $role3->janact ?>,<?php echo $role3->febact ?>,<?php echo $role3->maract ?>]
          
        },  

        {
          label               : 'PLAN ALL',
          type                : 'line',
          backgroundColor     : 'rgba(255,255,255, 0.3)',
          borderColor         : '#8e5ea2',
          /* pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)', */

          data                : [<?php echo $role3->apr ?>,<?php echo $role3->mei ?>,<?php echo $role3->juni ?>,<?php echo $role3->juli ?>,<?php echo $role3->agustus ?>,<?php echo $role3->september ?>,<?php echo $role3->october ?>,<?php echo $role3->november ?>,<?php echo $role3->december ?>,<?php echo $role3->january ?>,<?php echo $role3->february ?>,<?php echo $role3->maret ?>] 
         
        },
        {
          label               : 'ACTUAL ALL',
          type                : 'line',
          backgroundColor     : 'rgba(255,255,255, 0.3)',
          borderColor         : '#3e95cd',
         /*  pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)', */

          data                : [<?php echo $role3->apract ?>,<?php echo $role3->meiact ?>,<?php echo $role3->juniact ?>,<?php echo $role3->juliact ?>,<?php echo $role3->agustusact ?>,<?php echo $role3->septemberact ?>,<?php echo $role3->octoberact ?>,<?php echo $role3->novemberact ?>,<?php echo $role3->decemberact ?>,<?php echo $role3->januaryact ?>,<?php echo $role3->februaryact ?>,<?php echo $role3->maretact ?>] 
           /* data                : [3,4,5,5,7,8,9,10,11,12,13,0] */

        },   
        

      ]

    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: true
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : true,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'bar',
      data: areaChartData, 
      options: areaChartOptions
    })
    
    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.

    var donutChartCanvas = $('#areaChart2').get(0).getContext('2d')
    var donutData        = {
       labels  : ['<?php echo "Apr " . $FiscalYear ?>', '<?php echo "May " . $FiscalYear ?>', '<?php echo "Jun " . $FiscalYear ?>', '<?php echo "Jul " . $FiscalYear ?>', '<?php echo "Aug " . $FiscalYear ?>', '<?php echo "Sep " . $FiscalYear ?>', '<?php echo "Oct " . $FiscalYear ?>', '<?php echo "Nov " . $FiscalYear ?>','<?php echo "Des " . $FiscalYear ?>', '<?php echo "Jan " . $FiscalYear2 ?>', '<?php echo "Feb " . $FiscalYear2 ?>','<?php echo "Mar " . $FiscalYear2 ?>'],
      datasets: [
        {
          label               : 'PLAN',         
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius         : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [<?php echo $role2->apr ?>,<?php echo $role2->may ?>,<?php echo $role2->jun ?>,<?php echo $role2->jul ?>,<?php echo $role2->aug ?>,<?php echo $role2->sep ?>,<?php echo $role2->oct ?>,<?php echo $role2->nov ?>,<?php echo $role2->dec ?>,<?php echo $role2->jan ?>,<?php echo $role2->feb ?>,<?php echo $role2->mar ?>]
          
        },
        {
          label               : 'ACTUAL',
          backgroundColor     : '#3cba9f',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [<?php echo $role2->apract ?>,<?php echo $role2->mayact ?>,<?php echo $role2->junact ?>,<?php echo $role2->julact ?>,<?php echo $role2->augact ?>,<?php echo $role2->sepact ?>,<?php echo $role2->octact ?>,<?php echo $role2->novact ?>,<?php echo $role2->decact ?>,<?php echo $role2->janact ?>,<?php echo $role2->febact ?>,<?php echo $role2->maract ?>]
          
        },  

        {
          label               : 'PLAN ALL',
          type                : 'line',
          backgroundColor     : 'rgba(255,255,255, 0.3)',
          borderColor         : '#8e5ea2',
          /* pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)', */

          data                : [<?php echo $role2->apr ?>,<?php echo $role2->mei ?>,<?php echo $role2->juni ?>,<?php echo $role2->juli ?>,<?php echo $role2->agustus ?>,<?php echo $role2->september ?>,<?php echo $role2->october ?>,<?php echo $role2->november ?>,<?php echo $role2->december ?>,<?php echo $role2->january ?>,<?php echo $role2->february ?>,<?php echo $role2->maret ?>] 
         
        },
        {
          label               : 'ACTUAL ALL',
          type                : 'line',
          backgroundColor     : 'rgba(255,255,255, 0.3)',
          borderColor         : '#3e95cd',
         /*  pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)', */

          data                : [<?php echo $role2->apract ?>,<?php echo $role2->meiact ?>,<?php echo $role2->juniact ?>,<?php echo $role2->juliact ?>,<?php echo $role2->agustusact ?>,<?php echo $role2->septemberact ?>,<?php echo $role2->octoberact ?>,<?php echo $role2->novemberact ?>,<?php echo $role2->decemberact ?>,<?php echo $role2->januaryact ?>,<?php echo $role2->februaryact ?>,<?php echo $role2->maretact ?>] 
          
        }, 

        

      ]
    }

    /* var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    } */

    var donutOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: true
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : true,
          }
        }]
      }
    }

    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var donutChart = new Chart(donutChartCanvas, {
      type: 'bar',
      data: donutData,
      options: donutOptions      
    })

   //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChartinvall').get(0).getContext('2d')

    var areaChartData = {
      
       labels  : ['<?php echo "Apr " . $FiscalYear ?>', '<?php echo "May " . $FiscalYear ?>', '<?php echo "Jun " . $FiscalYear ?>', '<?php echo "Jul " . $FiscalYear ?>', '<?php echo "Aug " . $FiscalYear ?>', '<?php echo "Sep " . $FiscalYear ?>', '<?php echo "Oct " . $FiscalYear ?>', '<?php echo "Nov " . $FiscalYear ?>','<?php echo "Des " . $FiscalYear ?>', '<?php echo "Jan " . $FiscalYear2 ?>', '<?php echo "Feb " . $FiscalYear2 ?>','<?php echo "Mar " . $FiscalYear2 ?>'],

      datasets: [
        {
          label               : 'PLAN ALL',
          type                : 'line',
         /*  backgroundColor     : '#8e5ea2', */
          borderColor         : '#8e5ea2',
          /* pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)', */

          data                : [<?php echo $role3->apr ?>,<?php echo $role3->mei ?>,<?php echo $role3->juni ?>,<?php echo $role3->juli ?>,<?php echo $role3->agustus ?>,<?php echo $role3->september ?>,<?php echo $role3->october ?>,<?php echo $role3->november ?>,<?php echo $role3->december ?>,<?php echo $role3->january ?>,<?php echo $role3->february ?>,<?php echo $role3->maret ?>] 
         
        },
        {
          label               : 'ACTUAL ALL',
          type                : 'line',
          /* backgroundColor     : 'rgba(60,141,188,0.9)', */
          borderColor         : '#3e95cd',
         /*  pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)', */

          data                : [<?php echo $role3->apract ?>,<?php echo $role3->meiact ?>,<?php echo $role3->juniact ?>,<?php echo $role3->juliact ?>,<?php echo $role3->agustusact ?>,<?php echo $role3->septemberact ?>,<?php echo $role3->octoberact ?>,<?php echo $role3->novemberact ?>,<?php echo $role3->decemberact ?>,<?php echo $role3->januaryact ?>,<?php echo $role3->februaryact ?>,<?php echo $role3->maretact ?>] 
           /* data                : [3,4,5,5,7,8,9,10,11,12,13,0] */

        },  
        

      ]

    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: true
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : true,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChartprodall').get(0).getContext('2d')

    var areaChartData = {
      
       labels  : ['<?php echo "Apr " . $FiscalYear ?>', '<?php echo "May " . $FiscalYear ?>', '<?php echo "Jun " . $FiscalYear ?>', '<?php echo "Jul " . $FiscalYear ?>', '<?php echo "Aug " . $FiscalYear ?>', '<?php echo "Sep " . $FiscalYear ?>', '<?php echo "Oct " . $FiscalYear ?>', '<?php echo "Nov " . $FiscalYear ?>','<?php echo "Des " . $FiscalYear ?>', '<?php echo "Jan " . $FiscalYear2 ?>', '<?php echo "Feb " . $FiscalYear2 ?>','<?php echo "Mar " . $FiscalYear2 ?>'],

      datasets: [
        {
          label               : 'PLAN ALL',
          type                : 'line',
         /*  backgroundColor     : '#8e5ea2', */
          borderColor         : '#8e5ea2',
          /* pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)', */

          data                : [<?php echo $role2->apr ?>,<?php echo $role2->mei ?>,<?php echo $role2->juni ?>,<?php echo $role2->juli ?>,<?php echo $role2->agustus ?>,<?php echo $role2->september ?>,<?php echo $role2->october ?>,<?php echo $role2->november ?>,<?php echo $role2->december ?>,<?php echo $role2->january ?>,<?php echo $role2->february ?>,<?php echo $role2->maret ?>] 
         
        },
        {
          label               : 'ACTUAL ALL',
          type                : 'line',
          /* backgroundColor     : 'rgba(60,141,188,0.9)', */
          borderColor         : '#3e95cd',
         /*  pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)', */

          data                : [<?php echo $role2->apract ?>,<?php echo $role2->meiact ?>,<?php echo $role2->juniact ?>,<?php echo $role2->juliact ?>,<?php echo $role2->agustusact ?>,<?php echo $role2->septemberact ?>,<?php echo $role2->octoberact ?>,<?php echo $role2->novemberact ?>,<?php echo $role2->decemberact ?>,<?php echo $role2->januaryact ?>,<?php echo $role2->februaryact ?>,<?php echo $role2->maretact ?>] 
          
        }, 
        

      ]

    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: true
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : true,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    var areaChart       = new Chart(areaChartCanvas, { 
      type: 'line',
      data: areaChartData, 
      options: areaChartOptions
    })

    

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
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
    var temp1 = areaChartData.datasets[1]
    
    barChartData.datasets[0] = temp0
    barChartData.datasets[1] = temp1
   
    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    var barChart = new Chart(barChartCanvas, {
      type: 'bar', 
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = jQuery.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
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
  })

  function simulateClick(control)
  {
      if (document.all)
      {
          control.click();
      }
      else
      {
         /*  var evObj = document.createEvent('MouseEvents');
          evObj.initMouseEvent('click', true, true, window, 1, 12, 345, 7, 220, false, false, true, false, 0, null );
          control.dispatchEvent(evObj); */
      }
  }
  
</script>


<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
