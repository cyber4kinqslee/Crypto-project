
<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $this->security->xss_clean($this->siteDescription) ?>">
    <meta name="keywords" content="<?php echo $this->security->xss_clean($this->siteKeywords) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $pageTitle ?></title>

    <!-- CSS -->
    <link rel="shortcut icon" href="<?php echo $this->favicon ?>"> 
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/home.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/responsive.css"> -->
    <link rel="stylesheet" href="<?php echo base_url('paynerocket/temp/css/bootstrap.min.css');?>">
            <!-- Icons -->
            <link rel="stylesheet" href="<?php echo base_url('paynerocket/temp/css/materialdesignicons.min.css');?>">
        
            <!-- Magnific -->
            <link rel="stylesheet" href="<?php echo base_url('paynerocket/temp/css/line.css');?>">
            <link rel="stylesheet" href="<?php echo base_url('paynerocket/temp/css/flexslider.css');?>">
            <link rel="stylesheet" href="<?php echo base_url('paynerocket/temp/css/magnific-popup.css');?>">
            <link rel="stylesheet" href="<?php echo base_url('paynerocket/temp/css/animate.css')?>">
        
            <!-- Slider -->
            <link rel="stylesheet" href="<?php echo base_url('paynerocket/temp/css/owl.carousel.min.css')?>">
            <link rel="stylesheet" href="<?php echo base_url('paynerocket/temp/css/owl.theme.default.min.css')?>">
            <!-- Main Css -->
            <link rel="stylesheet" href="<?php echo base_url('paynerocket/temp/css/style.css')?>">
            <link rel="stylesheet" href="<?php echo base_url("paynerocket/temp/css/colors/default.css")?>">

    <script src="<?php echo base_url(); ?>assets/dist/js/jquery.min.js"></script>
</head>
<body class="light-version js-focus-visible">
    <!-- Preloader -->


        
    <!-- Navbar STart -->
    <header id="topnav" class="sticky defaultscroll">
        <div class="container">
            <!-- Logo container-->
            <div>
                <a class="logo" href="<?=base_url('/')?>">
                    <img src="<?php echo $this->security->xss_clean($this->logoDark); ?>" height="35" alt="" class="mr-2">
                </a>
            </div>
            <div class="buy-button">

                <a href="<?php echo base_url();?>login" class="mr-3 btn btn-primary login-btn-success">login</a>
                <a href="<?php echo base_url();?>signup" class="btn btn-primary login-btn-success ">Get Started</a>


            </div>
            <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">

                    <li><a href="<?=base_url('about')?>">About us</a></li>
                    <li><a href="<?=base_url()?>#pricing">Pricing</a></li>
                    <li><a href="<?=base_url('faqs')?>">Faq</a></li>
                    <li><a href="<?=base_url('contact')?>">Contact</a></li>

                </ul>


                </ul>
                <!--end navigation menu-->
               
                <!--end login button-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </header>
    <!--end header-->
    <!-- Navbar End -->
