
<!DOCTYPE html>
<html>

<head>
    
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!--<title>AdminLTE 3 | Log in</title>-->

  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png">
  <title>DMIA PORTAL</title>

  <!-- Tell the browser to be responsive to screen width -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <!-- Font Awesome -->
  <!-- <link rel="stylesheet" href="<php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css"> -->
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- icheck bootstrap -->
  <!-- <link rel="stylesheet" href="<php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->
  <!-- Theme style -->
  <!-- <link rel="stylesheet" href="<php echo base_url() ?>assets/dist/css/adminlte.min.css"> -->
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->

  <!-- <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>e-WIRE </title> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->


</head>

<body class="hold-transition login-page">

   <!-- <div class="login-box"> -->

   <div class="box-body table-responsive no-padding">
         
            <button type="button" id="showfrom" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Show Form Approval
            </button>

   <!--  </div>   -->
   
         <div class="modal modal-danger fade" id="modal-default">
            <div class="modal-dialog modal-xl">
               <div class="modal-content">
               <div class="modal-header">

                    <!--  <a href="#" class="brand-link">
                     <img src="<php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png" alt="AdminLTE Logo"  
                        style="opacity: .8">
                     <span class="brand-text font-weight-light" > </span>      
                    </a> -->
                  
                   <h4 class="modal-title" id="exampleModalLabel">Form Approver Wire Transfer</h5>
         
                     <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> -->
                     <!-- <span aria-hidden="true">&times;</span></button> -->                  
                     <!-- Menyimpan data approver --> <!-- hidden -->

                     <!-- <label for=""> <php echo $data5; ?> </label> 
                     <label for=""> <php echo $data6; ?> </label> -->

                     <label for=""> <?php echo $data5; ?> </label>
                                         
                     <input type="text" id="p_nik" value="<?php echo $dataapprover3->nik_approver; ?>" hidden> 
                     <input type="text" id="p_name_approver" value="<?php echo $dataapprover3->name_approver; ?>" hidden>
                     <input type="text" id="p_level_approve" value="<?php echo $dataapprover3->level_approve; ?>" hidden>
                     <input type="text" id="p_nik_requester" value="<?php echo $wiretransfer->nik; ?>" hidden>
                     <input type="text" id="p_hdrid" value="<?php echo $wiretransfer->hdrid; ?>" hidden>
                     
                     <!-- <php echo $dataapprover3->nik_approver; ?> -->

               </div>

               <div class="modal-body">

                  <table>

                     <tr>
                        <td>ID USER REG</td>
                        <td>:</td>
                        <td><?php echo $data->id_user_reg;?></td>
                     </tr>
                     <tr>
                        <td>NAMA REQUESTER</td>
                        <td>:</td>
                        <td><?php echo $data->nama_requester;?></td>
                     </tr>
                     <tr>
                        <td>EMPLOYEE REQUESTER ID</td>
                        <td>:</td>
                        <td><?php echo $data->employee_requester_id;?></td>
                     </tr>
                     <tr>
                        <td>DEPT REQUESTER</td>
                        <td>:</td>
                        <td><?php echo $data->dept_requester;?></td>
                     </tr>
                     <tr>
                        <td>NAMA</td>
                        <td>:</td>
                        <td><?php echo $data->nama;?></td>
                     </tr>
                     <tr>
                        <td>EMPLOYEE ID</td>
                        <td>:</td>
                        <td><?php echo $data->employee_id;?></td>
                     </tr>
                     <tr>
                        <td>DEPT</td>
                        <td>:</td>
                        <td><?php echo $data->dept;?></td>
                     </tr>
                     <tr>
                        <td>PC NO</td>
                        <td>:</td>
                        <td><?php echo $data->pc_no;?></td>
                     </tr>
                     <tr>
                        <td>ADD S INSTALL</td>
                        <td>:</td>
                        <td><?php echo $data->add_s_install;?></td>
                     </tr>
                     <tr>
                        <td>ID APPLICATION</td>
                        <td>:</td>
                        <td><?php echo $data->id_application;?></td>
                     </tr>
                     <tr>
                        <td>STATUS</td>
                        <td>:</td>
                        <td><?php echo $data->status;?></td>
                     </tr>

                  </table>

                  <!-- <img id="myImage" src="" style="width:500px"> -->
                  
               </div>

               <div class="modal-footer">

                  <button type="button" class="btn btn-default" onclick=fungclose()>Close</button>
                  <button type="button" id="btnapproved" class="btn btn-primary" onclick=fungapproved() >Approved</button>           

                  <!-- Process rejected   -->
                  <!-- <button type="submit" id="btn_reject" onclick="visiblebutton()" class="btn btn-primary">Reject</button> -->
                  
                  <input placeholder="Reason reject..." type="text" name="reason_reject" id="reason_reject" >
                  <button type="submit" id="btn_reason_reject" onclick="updatestatusreject()" class="btn btn-primary">Submit Reject</button>

                  <!-- <button type="submit" id="btn_test" onclick="maillog('WTR123','keyword')" class="btn btn-primary">Submit</button> -->
            
               </div>

               <table class="table table-striped" id="mydata">

                  <label> Approver </label>

                  <thead>
                     <tr>
                           <th>NO</th>
                           <th>NIK</th>
                           <th>Nama</th>
                           <th>Email</th>  
                           <th>Level</th> 
                           <th>Date Approved</th>                                             
                     </tr>
                  </thead>


                  <tbody id="show_data">  

                  <?php 
                  $NO=1;
                  foreach ($dataallaprover as $Emp):?>
                  <tr> 
                  <td> <?php echo $NO++ ?> </td>
                  <td> <?php echo $Emp->nik_approver ?> </td>
                  <td> <?php echo $Emp->name_approver ?> </td>
                  <td> <?php echo $Emp->email_approver ?> </td>
                  <td> <?php echo $Emp->level_approve ?> </td>
                  <td> <?php echo $Emp->date_approve ?> </td>
                  </tr>
                  <?php endforeach; ?>


                  </tbody>

               </table>

               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

</div>  

<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>

<script type="text/javascript">

$(document).ready(function(){
 
  $('#showfrom').on('click', function() {
     /*  alert($(this).text()); */
    });

  $('#showfrom').trigger('click');

 
  function alert($data)
      {
          const Toast = Swal.mixin({

          toast: true,
          position: 'botton',
          showConfirmButton: false,
          timer: 3000
          });

          Toast.fire({
          type: 'success',
          title: $data             
          });
      }

});

</script>


<script>
function fungclose(){
   /* close(); */
   setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 100);
  }
</script>


<script>

             function getdate(){

                  var now     = new Date(); 
                  var year    = now.getFullYear();
                  var month   = now.getMonth()+1; 
                  var day     = now.getDate();
                  var hour    = now.getHours();
                  var minute  = now.getMinutes();
                  var second  = now.getSeconds(); 
      
                  if(month.toString().length == 1) {
                    month = '0'+month;
                  }
                  if(day.toString().length == 1) {
                    day = '0'+day;
                  }   
                  if(hour.toString().length == 1) {
                    hour = '0'+hour;
                  }
                  if(minute.toString().length == 1) {
                    minute = '0'+minute;
                  }
                  if(second.toString().length == 1) {
                    second = '0'+second;
                  }  
      
                  var hdrid=year+'-'+month+'-'+day+' '+hour+':'+minute+':'+second;
                  return hdrid

             }
              
</script>


<script> 

//Simpan Barang
 $('#btn_simpan').on('click',function(){

            var hdrid=$('#hdrid').val();  
                     
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('C_wiretransfer/simpan_barang')?>",
                dataType : "JSON",
                data : {hdrid:hdrid},
                success: function(data){
                    
                    $('[name="hdrid"]').val("");                   
                    setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 100);
                    
                    /* $('#ModalaAdd').modal('hide');
                    tampil_data_barang(); */

                }
            });

            return false;
        });

</script>




<script>

      function fungapproved(){

         //delete all the local storage items for this domain
         deletelocalStorage();

         var hdrid=$('#p_hdrid').val(); // Get HDRID
         var nik_approver=$('#p_nik').val(); // Get Hdrid
         
         $('#btnapproved').text('Process...'); //change button text
         $('#btnapproved').attr('disabled',true); //set button disable 

         update_status_approvednew(hdrid,nik_approver); //Update status approve

         /* Create log mail untuk send mail */ 

         // maillog(hdrid,'Send_Ewire');
         
         /* Notifikasi success rejected */ 

         berhasil('Success approve');
         
         /* Rubah button anable */
         $('#btnapproved').text('Approve'); //change button text
         $('#btnapproved').attr('disabled',false); //set button disable 

         setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 
      
      }

      function update_status_approvednew(hdrid,nik_approver){
   
         /* Tangkap data */
         var hdrid=hdrid;
         var nik_approver=nik_approver;
         
         /* Update status rejected */  
         $.ajax({
               url :"<?php echo base_url()?>C_progressapprove/update_status_approved",
               type:"POST",
               data : {hdrid:hdrid,nik_approver:nik_approver},
               beforeSend: function(data) {
               },
               success: function(data){               
                  /* Kirim email feedback close */   
                  /* Cari data email user jika punya maka kirim email bahwa permintaan sudah di setujui*/
                  // get_user_request(hdrid);
               },                            
         });

      }

     /* ------- Ketika button approved di click -------- */
     function fungapproved_old(){


         var hdrid=$('#p_hdrid').val();  

         var nik_approver=$('#p_nik').val();

         var level_approve=$('#p_level_approve').val();

         var date_section_head_approved=getdate();

         $('#btnapproved').text('Process...'); //change button text
         $('#btnapproved').attr('disabled',true); //set button disable 

                 
        updatedateapprove(hdrid,nik_approver,level_approve,date_section_head_approved);     
        
      }

      function updatedateapprove(hdrid,nik_approver,level_approve,date_section_head_approved){

            var hdrid=hdrid; 
            var nik_approver=nik_approver; 
            var level_approve=level_approve;             
            var date_section_head_approved=getdate();  

            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('C_wiretransfer/update_tb_wiretransfer_approver')?>",
            dataType : "JSON",
            data : {hdrid:hdrid,nik_approver:nik_approver,date_section_head_approved:date_section_head_approved,level_approve:level_approve},
            success: function(data){
                                   
                //mailLog(hdrid,'Approved_Ewire');
                maillog(hdrid,'Send_Ewire');
                $('#btnapproved').text('Approved'); //change button text
                $('#btnapproved').attr('disabled',false); //set button disable 
                berhasil('Success approve');   
                setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 

                /* cari level ID next approver ****** Matikan Feature Email */
                //min_level_approve(hdrid);

                /* kirim ke approver selanjutnya dengan ID =2 (level 2) */
                /* getapprovernext(hdrid,parseInt(level_approve)+1); */

               }

            });

      }

      function min_level_approve(hdrid){

         var hdrid=hdrid; 
         
         $.ajax({
         type : "GET",
         url  : "<?php echo base_url('C_wiretransfer/min_level_approve')?>",
         dataType : "JSON",
         data : {hdrid:hdrid},
         success: function(data){

            /* alert(data.result.level_approve);  */

            /* if(data.status == 'ok'){     */
            if(data.result.level_approve == '0'){   
                     
               /* Konfirmasi sudah email approver */
               /* alert('Gagal'); */

               /* update status transaksi */             
                update_status_approved(hdrid);
                //mailLog(hdrid,'Approved_Ewire');
                maillog(hdrid,'Approved_Ewire');
               
            }else{          

               /* alert(data.result.level_approve); */
               /* Cari data lengkap approver (nik,nama,email) */

               //Matikan Feature Internal Email
               //getapprovernext(hdrid,parseInt(data.result.level_approve));

               $('#btnapproved').text('Approved'); //change button text
               $('#btnapproved').attr('disabled',false); //set button disable 

               //maillog(hdrid,'Send_EWire');
                //mailLog(hdrid,'Approved_Ewire');
                maillog(hdrid,'Send_Ewire');
                alert('Success approve');    

                 setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 
                              
            } 

                       
            }

         });

      }

      function update_status_approved(hdrid){
    
            /* Tangkap data */
            var hdrid=hdrid;
            var status_transaksi='approved';

            /* Update status rejected */  
            $.ajax({
                  url :"<?php echo base_url()?>C_wiretransfer/update_status_approved",
                  type:"POST",
                  data : {hdrid:hdrid,status_transaksi:status_transaksi},
                  beforeSend: function(data) {
                  },
                  success: function(data){               
                     /* Kirim email feedback close */   
                     /* Cari data email user jika punya maka kirim email bahwa permintaan sudah di setujui*/
                     get_user_request(hdrid);
                  },                            
            });

         }


      function getapprovernext(hdrid,id){

                var hdrid=hdrid; 
                var id=id;   

                /* alert(id); */

                $.ajax({
                type : "GET",
                url  : "<?php echo base_url('C_wiretransfer/get_next_approver')?>",
                dataType : "JSON",
                data : {hdrid:hdrid,id:id},
                success: function(data){
                   
                  for(i=0; i<data.length; i++){
                   
                     sendmailapprover(hdrid,data[i].nik_approver,data[i].name_approver,data[i].email_approver,data[i].level_approve)
                     
                  }

                   /*  alert('Berhasil diapproved');
                    setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 3000);
                         */               
                  }

                  });

      }

      function get_user_request(hdrid){

         var hdrid=hdrid;
         var nik=$('#p_nik_requester').val();
                 
         $.ajax({
         type : "GET",
         url  : "<?php echo base_url('C_wiretransfer/get_user_request')?>",
         dataType : "JSON",
         data : {hdrid:hdrid,nik:nik},
         success: function(data){
           
            if(data.status == 'ok'){     
           

                 /* kirim email feedback */
                 sendmailfeedbackclose(hdrid,data.result.nik_user_email,data.result.name_user_email,data.result.address_user_email);
                 alert('complete approve');
                
                 setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 
           
            }else{

               /* Tidak punya alamat email maka tidak kirim email */
               setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 
            }           

                       
            }

         });

      }

      function sendmailapprover(hdrid,nik_approver,name_approver,email_approver,level_approve){

         var hdrid=hdrid;
         var nik_approver=nik_approver;
         var name_approver=name_approver;
         var email_approver=email_approver;
         var level_approve=level_approve;
       
         /* ============== Kirim email ke approver atasan user ============== */  

         $.ajax({
                url :"<?php echo base_url()?>C_wiretransfer/send_mail_approver_phpmailer",
                type:"POST",
                data : {hdrid:hdrid,nik_approver:nik_approver,name_approver:name_approver,email_approver:email_approver,level_approve:level_approve},
                beforeSend: function(data) {
                    
                },
                success: function(data){  
 
                  $('#btnapproved').text('Approved'); //change button text
                  $('#btnapproved').attr('disabled',false); //set button disable 

                  alert('Success approve');    

                  setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 1000); 
                           
                },
                                    
         });


      }

      function sendmailfeedbackclose(hdrid,nik_approver,name_approver,email_approver){

         var hdrid=hdrid;
         var nik_approver=nik_approver;
         var name_approver=name_approver;
         var email_approver=email_approver;
        
         /* ============== Kirim email ke approver atasan user ============== */  

         $.ajax({
               url :"<?php echo base_url()?>C_wiretransfer/sendmailfeedbackclose_phpmailer",
               type:"POST",
               data : {hdrid:hdrid,nik_approver:nik_approver,name_approver:name_approver,email_approver:email_approver},
               beforeSend: function(data) {
               },
               success: function(data){
                  
                  
                               
               },
                                    
         });

      }

</script>

<script>

 function visiblebutton(){
     
     var x = document.getElementById('btn_reason_reject');
     var y = document.getElementById('reason_reject');
     if (x.style.visibility === 'hidden') {
       x.style.visibility = 'visible';
       y.style.visibility = 'visible';
     } else {
       x.style.visibility = 'hidden';
       y.style.visibility = 'hidden';
     }
     
   }

</script>

<script>

   function maillog(hdrid,keyword){

      var hdrid=hdrid;
      var keyword=keyword;
      
      /* Update status rejected */  
      $.ajax({
            url :"<?php echo base_url()?>C_emaillog/create_file",
            type:"POST",
            data : {hdrid:hdrid,keyword:keyword},
            beforeSend: function(data) {
            },
            success: function(data){   
                                             
            },                            
      });


   }

</script>

<script>

function updatestatusreject(){

   //delete all the local storage items for this domain
    deletelocalStorage();

    /* Tangkap data */
    var hdrid=$('#p_hdrid').val();
    var reason_reject=$('#reason_reject').val();
    var reject_by=$('#p_name_approver').val();
  
    /* Validasi reason harus diisi */   
    if (reason_reject==''){
      trerror('Reason is must filled');
      return false;
    }

      $('#btn_reason_reject').text('Process...'); //change button text
      $('#btn_reason_reject').attr('disabled',true); //set button disable 

      /* Update status reject */ 
      update_status_reject(hdrid,reason_reject,reject_by);

      /* Create log mail untuk send mail */ 
      maillog(hdrid,'Reject_Ewire');

      /* Notifikasi success rejected */ 
      berhasil('Success rejected');

      /* Rubah button anable */
      $('#btn_reason_reject').text('Submit Reject'); //change button text
      $('#btn_reason_reject').attr('disabled',false); //set button disable 

      setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 3000); //Auto Close

      return false; //Break

    /* Update status rejected */  
    $.ajax({
          url :"<?php echo base_url()?>C_wiretransfer/updatestatusreject",
          type:"POST",
          data : {hdrid:hdrid,reason_reject:reason_reject},
          beforeSend: function(data) {
          },
          success: function(data){   

            //mailLog(hdrid,'Approved_Ewire');
            maillog(hdrid,'Reject_Ewire');
            $('#btn_reason_reject').text('Submit Reject'); //change button text
            $('#btn_reason_reject').attr('disabled',false); //set button disable 
            alert('Success is rejected');           
            setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 

            //Matikan feature direct email
            //get_user_request_rejected();  

          },                            
    });

  }

  function update_status_reject(hdrid,reason_reject,reject_by){
    
    /* Tangkap data */
    var hdrid=hdrid;
    var reason_reject=reason_reject;
    var reject_by=reject_by;
    
    /* Update status rejected */  
    $.ajax({
          url :"<?php echo base_url()?>C_progressapprove/update_status_reject",
          type:"POST",
          data : {hdrid:hdrid,reason_reject:reason_reject,reject_by:reject_by},
          beforeSend: function(data) {
          },
          success: function(data){               
            /* Kirim email feedback close */   
            /* Cari data email user jika punya maka kirim email bahwa permintaan sudah di setujui*/
            // get_user_request(hdrid);
          },                            
    });

  }


function get_user_request_rejected(){
  
   var hdrid=$('#p_hdrid').val();
   var nik=$('#p_nik_requester').val();
      
   $.ajax({
   type : "GET",
   url  : "<?php echo base_url('C_wiretransfer/get_user_request')?>",
   dataType : "JSON",
   data : {hdrid:hdrid,nik:nik},
   success: function(data){
      
      if(data.status == 'ok'){     
            
            sendmailreject(hdrid,data.result.nik_user_email,data.result.name_user_email,data.result.address_user_email)
            /*  setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000);  */
      
      }else{
            
         /* alert('User is not have email'); */
         trerror('User is not have email');
         /* Tidak punya alamat email maka tidak kirim email */
         setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 

      }           
                  
      }

   });

   }

function sendmailreject(hdrid,nik_user_email,name_user_email,address_user_email){

   var hdrid=hdrid;
   var nik_user=nik_user_email;
   var name_user=name_user_email;
   var email_user=address_user_email;

   /* ============== Send mail rejected ============== */  

   $.ajax({
      
         url :"<?php echo base_url()?>C_wiretransfer/sendmailreject_phpmailer",
         type:"POST",
         data : {hdrid:hdrid,nik_user:nik_user,name_user:name_user,email_user:email_user},
         beforeSend: function(data) {
         
         },
         
         success: function(data){
                  
            alert('Success is rejected');
            deletelocalStorage();
            setTimeout(function(){var ww = window.open(window.location, '_self'); ww.close(); }, 2000); 
               
         },
                           
   });

}

</script>


<script>
   function deletelocalStorage() {
   localStorage.clear();
   }
</script>

<script>

    function berhasil($data)
      {

          const Toast = Swal.mixin({

          toast: true,
          position: 'botton',
          showConfirmButton: false,
          timer: 3000
          });

          Toast.fire({
          type: 'success',
          title: $data             
          });

      }

      function trerror($data)
      {
          const Toast = Swal.mixin({

          toast: true,
          position: 'botton',
          showConfirmButton: false,
          timer: 3000
          });

          Toast.fire({
          type: 'error',
          title: $data             
          });
      }

</script>


<!-- jQuery -->
<script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="<?php echo base_url() ?>assets/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>


