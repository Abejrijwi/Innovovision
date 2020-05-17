<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <!-- Favicons -->
        <link href="<?php echo base_url("public/front/img/favicon.png") ?>" rel='shortcut icon' type='image/x-icon' />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="<?= base_url("public/front/lib/bootstrap/css/bootstrap.min.css") ?>" rel="stylesheet">

        <!-- Libraries CSS Files -->
        <link href="<?= base_url("public/front/lib/font-awesome/css/font-awesome.min.css") ?>" rel="stylesheet">
        <link href="<?= base_url("public/front/lib/animate/animate.min.css") ?>" rel="stylesheet">
        <link href="<?= base_url("public/front/lib/ionicons/css/ionicons.min.css") ?>" rel="stylesheet">
        <link href="<?= base_url("public/front/lib/owlcarousel/assets/owl.carousel.min.css") ?>" rel="stylesheet">
        <link href="<?= base_url("public/front/lib/magnific-popup/magnific-popup.css") ?>" rel="stylesheet">
        <link href="<?= base_url("public/front/lib/ionicons/css/ionicons.min.css") ?>" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="<?= base_url("public/front/css/style.css") ?>" rel="stylesheet">

    </head>

    <body id="body">

        <!--==========================
          Top Bar
        ============================-->
        <section id="topbar" class="d-none d-lg-block">
            <div class="container clearfix">
                <div class="contact-info float-left">
                    <i class="fa fa-envelope-o"></i> <a href="mailto:innovovision@gmail.com">innovovision@gmail.com</a>
                    <!--<i class="fa fa-phone"></i> +91 9673428800-->
                </div>
                <div class="social-links float-right">
                    <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                    <!--<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>-->
                    <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    <a href="<?php echo site_url('login'); ?>" class="text-primary"><i class="fa fa-sign-in"></i> Login</a>
                </div>
            </div>
        </section>

        <!--==========================
          Header
        ============================-->
        <header id="header">
            <div class="container">

                <div id="logo" class="pull-left">
                    <a href="<?= base_url() ?>">
                        <img src="<?= base_url("public/front/img/logo1.png") ?>">
                    </a>
                    <!--         <h1></h1> -->
                    <!-- Uncomment below if you prefer to use an image logo -->
                    <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
                </div>

                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li class="menu-active"><a href="<?= base_url() ?>">Home</a></li>
                        <li><a href="<?= site_url("about") ?>">About Us</a></li>
                        <li><a href="<?= site_url("services") ?>">Services</a></li>
                        <!-- <li class="menu-has-children"><a href="">Drop Down</a>
                          <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                            <li><a href="#">Drop Down 5</a></li>
                          </ul> -->
                        <!--</li>-->
                        <li><a href="<?= site_url("contact") ?>">Contact</a></li><hr>
                    </ul>
                </nav><!-- #nav-menu-container -->
            </div>
        </header><!-- #header -->

        <main id="main">
