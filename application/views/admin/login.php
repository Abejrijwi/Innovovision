<!DOCTYPE html>
<html lang="en" style="height: 100%">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Umega App - Login</title>
    <!-- PACE-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/");?>plugins/PACE/themes/blue/pace-theme-flash.css">
    <script type="text/javascript" src="<?php echo base_url("public/admin/");?>plugins/PACE/pace.min.js"></script>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/");?>plugins/bootstrap/dist/css/bootstrap.min.css">
    <!-- Fonts-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/");?>plugins/themify-icons/themify-icons.css">
    <!-- Primary Style-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/admin/");?>build/css/first-layout.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://--> 
    <!--[if lt IE 9]>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script type="text/javascript" src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image: url(<?php echo base_url("public/admin/");?>build/images/backgrounds/16.jpg)" class="body-bg-full">
    
        
       
      
      <div class="container page-container">
          
      <div class="page-content">
           <?php
            if ($this->session->flashdata('msg')) {
                ?>
                <div class="alert alert-info"><?php echo $this->session->flashdata('msg'); ?></div>                
                <div class="clearfix"></div>
                <?php
            }
            ?>
        <div class="logo"><i class="ti-underline"></i></div>
        <form method="post" action="<?php echo site_url('login/auth_user');?>" class="form-horizontal">
           
          <div class="form-group">
            <div class="col-xs-12">
              <input type="text" name="email" placeholder="Username" class="form-control">
              <span style="color:red;"><?php echo form_error('email'); ?></span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <input type="password" name="password" placeholder="Password" class="form-control">
              <span style="color:red;"><?php echo form_error('password'); ?></span>
            </div>
          </div>
          
            <input type="submit" name="submit" value="Go to Dashboard" class="btn-lg btn btn-primary btn-rounded btn-block">
        </form>
       
      </div>
    </div>
  
    <!-- jQuery-->
    <script type="text/javascript" src="<?php echo base_url("public/admin/");?>plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap JavaScript-->
    <script type="text/javascript" src="<?php echo base_url("public/admin/");?>plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Custom JS-->
    <script type="text/javascript" src="<?php echo base_url("public/admin/");?>build/js/first-layout/extra-demo.js"></script>
  </body>
</html>