
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
  <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->

  <!-- jQuery -->
  <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


</head>

<body class="hold-transition login-page">

<div class="login-box">

  <div class="login-logo">
    <img src="<?php echo base_url() ?>assets/dist/img/Logo Denso DMIA.png" alt="">    
  </div>

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Forgot Password</p>

      <?php        
        // Cek apakah terdapat session nama message
        if($this->session->flashdata('message')){ // Jika ada
            echo '<div class="alert alert-danger">'.$this->session->flashdata('message').'</div>'; // Tampilkan pesannya
        }
      ?>

        <div class="input-group mb-3">
          <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="Email auto fill after send OTP" readonly>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
         
          <div class="col-6">            
          </div>
        
          <div class="col-6">
            <button type="submit" id="cari" class="btn btn-primary btn-block">Send Mail OTP</button>
          </div>
          
        </div>


      <!-- <form method="post" action="<php echo base_url('index.php/auth/login'); ?>"> -->

        <div class="input-group mb-3">
          <input type="text" name="UserID" id="UserID" class="form-control" placeholder="UserID" readonly>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="text" name="otp" id="otp" class="form-control" placeholder="OTP">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">
          <input type="password" name="password" id="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


        <div class="input-group mb-3">
          <input type="password" name="retype_password" id="retype_password" class="form-control" placeholder="Retype Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>


        <div class="row">

          <div class="col-6">

            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->

          <div class="col-6">
            <button type="submit" id="resetpassword" class="btn btn-primary btn-block btn-flat">Change Password</button>
          </div>
          <!-- /.col -->

        </div>

      <!-- </form> -->
    
      <!-- <p class="mb-1">
        <a href="<php echo base_url('index.php/auth/forgotpassword'); ?>">I forgot my password</a>
      </p> -->
      
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

            <div class="modal fade" id="modal-success">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Success Change Password</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">

                    <p>This userid and password can be used for access : </p>
                    <div class="row">
                      <div class="col-4">
                          e-wire
                      </div>
                      <div class="col-8">
                          <a href="<?php echo base_url('index.php/auth/forgotpassword'); ?>" target="_blank">Link</a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-4">
                          e-CCS
                      </div>
                      <div class="col-8">
                          <a href="<?php echo base_url('index.php/auth/forgotpassword'); ?>" target="_blank">Link</a>
                      </div>
                    </div>

                    
                 
                  </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-outline-light">Save changes</button> -->
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
      <!-- /.modal -->


</body>

</html>


<script>

    // ********** Button Click **********
    document.getElementById("cari").onclick = function() {myFunctioncari()};
    document.getElementById("resetpassword").onclick = function() {resetpassword()};

    function resetpassword() {
        
        //Get NIK
        var nik=$('#UserID').val();

        //Validasi OTP not NULL
        var otp=$('#otp').val();
        if (otp==''){
           alert('OTP must be fill');
           return false;
        }

        //Validasi Password tidak boleh null
        var password=$('#password').val();
        if (password==''){
          alert('password must be fill');
           return false;
        }

        //Validasi Password = Retype Password
        var retype_password=$('#retype_password').val();
        if (password!=retype_password){
          alert('password with retype password not match');
           return false;
        }
       
        //Validasi OTP benar     
        $.ajax({
              type : "get",
              url  : "<?php echo base_url('C_forgot_password/confirm_otp')?>",
              dataType : "JSON",
              data : {nik:nik,otp:otp},
              success: function(data){

                  if (data.status=='OK'){
             
                      ResetPassword(nik,password);
                    
                  }else{

                      alert(data.status);
                  
                  }

              },
              error: function (e) {

                  //  $('#email').val('');   
                  //  $('#UserID').val('');

                   alert(e);
                   
              }

          });



        
         
          return false;
               
    }



      function myFunctioncari() {
        
          var nik=$('#nik').val();

           $.ajax({
                type : "GET",
                url  : "<?php echo base_url('C_forgot_password/get_user_email')?>",
                dataType : "JSON",
                data : {nik:nik},
                success: function(data){

                    if (data.status=='ok'){
 
                        $('#email').val(data.result.Personalemail);
                        $('#UserID').val(nik);
                        send_mail_otp(data.result.NAME,data.result.Personalemail,data.result.OfficeEmail);

                    }else{

                      $('#email').val('');   
                      $('#UserID').val(''); 
                      alert ('nik ' + String(data.status));

                    }

                },
                error: function (e) {

                     $('#email').val('');   
                     $('#UserID').val('');

                     alert(e);
                     
                }

            });
            return false;
                 
      }

      function send_mail_otp(NAME,send_user_email,office_user_email){

        var nik=$('#nik').val();
        var send_user_email=send_user_email;
        var office_user_email=office_user_email;
        var NAME=NAME;

        $.ajax({
                type : "POST",
                url  : "<?php echo base_url('C_forgot_password/send_user_email')?>",
                dataType : "JSON",
                data : {nik:nik,send_user_email:send_user_email,NAME:NAME,office_user_email:office_user_email},
                success: function(data){

                    if (data.status=='ok'){
                        alert ('Please check OTP in inbox email ' + String(data.email));
                    }else{
                        alert ('Failed send email  ' + String(data.status));
                    }

                },
                error: function (e) {
                    $('#email').val('');   
                      alert(e);
                    
                  }

            });
            return false;
      }

      function ResetPassword(nik,password){

        var nik=nik;
        var password=password;
       
        $.ajax({
                type : "POST",
                url  : "<?php echo base_url('C_forgot_password/ResetPassword')?>",
                dataType : "JSON",
                data : {nik:nik,password:password},
                success: function(data){

                    if (data.status=='ok'){
                        // alert ('Finish change password');
                        $("#modal-success").modal();
                    }else{
                        alert ('Failed change password');
                    }

                },
                error: function (e) {
                   
                      alert(e);
                    
                  }

            });
            return false;
        }


</script>


