<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Interview | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/plugins/daterangepicker/daterangepicker.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assest/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <!-- <a href="<?php echo base_url(); ?>assest/index2.html"><b>Admin</b></a> -->
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
     <div class="panel-heading" style="background-color: #f5f5f5; background-image: url(assest/dist/img/shakti_bhawan_front.jpg) no-repeat center center fixed;">
                <center><div><img src="assest/dist/img/logo.png" alt="M Learning"></div>
                  <strong>Login Portal</strong></center>
               </div>
      <!-- <center><div><img src="assest/dist/img/logo.png" alt="M Learning" /></div> -->
          <!-- <p class="login-box-msg">MPPMCL eLearning Portal Login</p><br> -->
       <form  method="post">
        
                
       <div class="input-group mb-3"><br>
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('email');?>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
         </div>
         <?php echo form_error('email');?>

    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>

          <!-- /.col -->
          
          <!-- /.col -->
        </form>
       
      <?php echo $this->session->flashdata('exception');?>
        <a href="<?php echo base_url('create-user');?>" class="nav-link"><p>Create User</p></a>
      </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assest/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assest/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assest/dist/js/adminlte.min.js"></script>
</body>
</html>
