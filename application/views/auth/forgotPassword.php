

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
<body class="h-100 bg-soft-primary" style="background:#e4f4ff!important;">



<section class=" auth">
        <div class="container">
		<style>
				.default-color{
					color:#2980b9!important;
				}
			</style>
            <div class="pb-3 row justify-content-center">

                <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6">
				<a class="logo mx-auto d-flex justify-content-center" href="<?=base_url('/')?>">
                    <img src="<?php echo $this->security->xss_clean($this->logoDark); ?>" width="300" alt="" class="img-fluid m-2">
                </a>
                    
                    
                     
                        
                    
                    <div class="bg-white shadow card login-page roundedd border-1 ">
                        <div class="card-body">
                            <h4 class="default-color text-center card-title">Password Reset</h4>
							<?php
              $this->load->helper('form');
              $error = $this->session->flashdata('error');
              if($error)
              { ?>
                        <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none"
                            role="alert">
                            <?php echo $this->session->flashdata('error'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <?php } ?>
                        <?php  
                      $success = $this->session->flashdata('success');
                      if($success)
                      {
                  ?>
                        <div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none"
                            role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <?php } ?>
                        <?php echo validation_errors('<div class="alert border-0 alert-primary bg-gradient m-b-30 alert-dismissible fade show border-radius-none" role="alert">', ' <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button></div>'); ?>
                        <!-- <h2 class="f-20 text-capitalize"><?php echo lang('forgot_pass_title') ?></h2> -->
                        <!-- Form -->
                        <?php echo form_open(base_url( 'resetPasswordUser' ), array( 'id' => 'loginForm' ));?>
                                 <input type="hidden" name="_token" value="mLEv3SzctXeZA1SW0U6RRhH81dO0W3WIpt1Nziag">                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="default-color">Your Email <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="default-color fea icon-sm icons"></i>
                                                <input type="email" style="padding-left:5rem!important; font-size:15px!important;" class="form-control" name="login_email" id="email" placeholder="<?php echo lang('email') ?>" value="<?=set_value('email')?>">
                                            </div>
                                                                                    </div>
                                    </div>
                                    <!--end col-->

                                    
                                    <div class="mb-0 col-lg-12">
                                        <!-- <button class="btn btn-primary btn-block pad" type="submit">Email Password Reset Link</button> -->
										<button type="submit" class="btn btn-primary btn-block pad"><?php echo lang('continue') ?></button>
                                    </div>
                                    <!--end col-->


                                    <div class="text-center col-12">
                                        <p class="mt-3 mb-0"><small class="mr-2 text-dark">Repeat Login
                                                ?</small> <a href="<?php echo base_url("login") ?>" class="text-dark font-weight-bold"><?php echo lang('remember_pass') ?></a></p>
                                    </div>
                                    <!--end col-->
                                    
                                    <div class="text-center col-12">
                                        <p class="mt-4 mb-0"><small class="mr-2 text-dark">&copy; Copyright  2022 &nbsp; Bestcoinscental &nbsp; All Rights Reserved.</small>
                                        </p>
                                    </div>
                                </div>
                                <!--end row-->
								<?php echo form_close();?>
                        </div>
                    </div>
                    <!---->
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->


	<script src="<?php echo base_url('assets/dist/js/login.js') ?>"></script>
	<script src="<?php echo base_url('paynerocket/temp/js/jquery-3.5.1.min.js');?>"></script>
            <script src="<?php echo base_url('paynerocket/temp/js/bootstrap.bundle.min.js');?>"></script>
            
            <script src="<?php echo base_url('paynerocket/temp/js/owl.carousel.min.js');?>"></script>
            <script src="<?php echo base_url('paynerocket/temp/js/owl.init.js');?>"></script>
            <script src="<?php echo base_url('paynerocket/temp/js/feather.min.js');?>"></script>
            <script src="<?php echo base_url('paynerocket/temp/js/bundle.js');?>"></script>
            
            <script src="<?php echo base_url('paynerocket/temp/js/app.js');?>"></script>
            <script src="<?php echo base_url('paynerocket/temp/js/widget.js');?>"></script>

       
       

    </body>
</html>
