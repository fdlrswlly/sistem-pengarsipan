<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Reset Password</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('theme'); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('theme'); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('theme'); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('theme'); ?>/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('theme'); ?>/build/css/custom.min.css" rel="stylesheet">
  </head>    
  <body class="login">
  <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <?php 
            $session = session();
            $login = $session->getFlashdata('login');
            $email = $session->getFlashdata('email');
            $password = $session->getFlashdata('password');
        ?>
        <?php if($email){ ?>
            <p style="color:red"><?php echo $email?></p>
        <?php } ?>
        
        <?php if($password){ ?>
            <p style="color:red"><?php echo $password?></p>
        <?php } ?>
        
        <?php if($login){ ?>
            <p style="color:green"><?php echo $login?></p>
        <?php } ?>
          <form method="post" action="/auth/valid_email">
        <h1>Reset Password</h1>
        <p>Cari berdasarkan E-mail</p>
              <div>
                <input type="text" class="form-control" name = "email" placeholder="E-Mail" required="" />
              </div>
              <div>
                <input type="text" class="form-control" name = "password" placeholder="New Password" required="" />
              </div>
              <div>
              <button type="submit" class="btn btn-info"  name = "login">Reset Password</button>
              <div class="clearfix"></div>
              <div>
                  <h1><i class="fa fa-paw"></i> E-ARSIP</h1>
                  <p>©2021 All Rights Reserved</p>
                </div>
              </div>
        </form>
        
    </body>
</html>