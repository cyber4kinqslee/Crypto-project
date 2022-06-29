

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
                            <h4 class="text-center card-title default-color">User Login</h4>
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
                        <!-- <h2 id="login-title" class="f-20"><?php echo lang("enter_email_and_password_below") ?></h2> -->
                        <!-- Form -->
                        <?php echo form_open(base_url( 'login' ), array( 'id' => 'loginForm' ));?>
                                 <input type="hidden" name="_token" value="mLEv3SzctXeZA1SW0U6RRhH81dO0W3WIpt1Nziag">                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="default-color"><?php echo lang("email_address") ?><span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="mail" class="default-color fea icon-sm icons"></i>
                                                <input type="email" style="padding-left:5rem!important; font-size:15px!important;" class="form-control" name="email" value="" id="email" placeholder="<?php echo lang("email") ?>" value="<?=set_value('email')?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="default-color"><?php echo lang("password") ?> <span class="text-danger">*</span></label>
                                            <div class="position-relative">
                                                <i data-feather="key" class="default-color fea icon-sm icons"></i>
                                                <input type="password" style="padding-left:5rem!important; font-size:15px!important;" class="form-control" name="password" id="password" placeholder="<?php echo lang("password") ?>" value="<?=set_value('password')?>">
                                            </div>
                                        </div>
                                    </div>
                                    <!--end col-->

									<?php if($companyInfo['google_recaptcha'] != 0) {?>
                                <?php if($companyInfo['recaptcha_version'] == 'v2') {?>
                                    <input type="hidden" name="g-recaptcha-response">
                                    <div class="g-recaptcha" style="margin-bottom: 15px;" data-sitekey="<?php echo $recaptchaInfo->public_key; ?>"></div>
                                <?php } else if($companyInfo['recaptcha_version'] == 'v3') {?>
                                    <input type="hidden" class="g-recaptcha" name="recaptcha_response" id="recaptchaResponse">
                                <?php }?>
                            <?php }?>
                        </div>
                        <div class="hide" id="google-auth">
                            <!-- Form Group -->
                            <div class="form-group">
                                <div id="divOuter" class="<?php echo $companyInfo['two_factor_auth'] == 'Authy' ? 'authydivOuter' : ''; ?>">
                                    <div id="divInner">
                                        <input id="partitioned" class="<?php echo $companyInfo['two_factor_auth'] == 'Authy' ? 'authypartitioned' : ''; ?>" name="token" type="text" maxlength="<?php echo $companyInfo['two_factor_auth'] == 'Authy' ? '7' : '6'; ?>" />
                                        <label class="error google-auth-err"></label>
                                    </div>
                                </div>
                            </div>
                        </div>

                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-between">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="stay_logged_in" value="agree">
                                                    <label class="default-color custom-control-label" for="customCheck1"><?php echo lang("keep_me_logged_in") ?></label>
                                                </div>
                                            </div>
                                            <p class="mb-0 forgot-pass"><a href="<?php echo base_url('forgotPassword'); ?>" class="text-dark font-weight-bold"><?php echo lang("cant_access_your_account") ?></a></p>
                                        </div>
                                    </div>
                                    <!--end col-->

                                    <div class="mb-0 col-lg-12">
                                        <!-- <button class="btn btn-primary btn-block pad" type="submit">Sign in</button> -->
										<button type="button" id="confirm-user-pass" class="btn btn-primary btn-block pad" data-loading-text="<?php echo lang('processing_data') ?>" data-title="<?php echo lang("login") ?>"><?php echo lang("login") ?></button>
                            			<!-- <button type="button" id="authenticate" class="hide btn btn-primary btn-block pad"><?php echo lang("login") ?></button> -->
                                    </div>
                                    <!--end col-->

                                    <!-- <div class="mt-4 text-center col-lg-12">
                                                                                <h6>Or Login With</h6>
                                        <div class="row">

                                            <div class="mt-3 col-12">
                                                <a href="https://paynerocket.com/auth/google/redirect" class="btn btn-block btn-light"><i class="mdi mdi-google text-danger"></i> Google</a>
                                            </div>
                                        </div>
                                                                            </div> -->
                                    <!--end col-->
                                    <!--end col-->

                                    <div class="text-center col-12">
                                        <p class="mt-3 mb-0"><small class="mr-2 text-dark">Don't have an account
                                                ?</small> <a href="<?php echo base_url("signup") ?>" class="text-dark font-weight-bold"><?php echo lang("create_account") ?></a></p>
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
