<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Login |  Admin & Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <!-- <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon.png">
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/android-chrome-512x512.png"> -->

        <!-- Layout Js -->
        <script src="<?php echo base_url();?>assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo base_url();?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo base_url();?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
		<style>
			.error{
				color:red;
			}
		</style>


    </head>

    <body>
        <div class="auth-maintenance d-flex align-items-center min-vh-100">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="auth-full-page-content d-flex min-vh-100 py-sm-5 py-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100 py-0 py-xl-3">
                                    <div class="text-center mb-4">
                                        <a href="#" class="">
                                            <!-- <img src="<?php echo base_url();?>assets/images/logo-dark.png" alt="" height="22" class="auth-logo logo-dark mx-auto">
                                            <img src="<?php echo base_url();?>assets/images/logo-light.png" alt="" height="22" class="auth-logo logo-light mx-auto"> -->
                                        </a>
                                        <p class="text-muted mt-2">Student Dashboard</p>
                                    </div>
    
                                    <div class="card my-auto overflow-hidden">
                                            <div class="row g-0">
                                                <div class="col-lg-6">
                                                    <div class="bg-overlay bg-primary"></div>
                                                    <div class="h-100 bg-auth align-items-end">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="p-lg-5 p-4">
                                                        <div>
                                                            <div class="text-center mt-1">
                                                                <h4 class="font-size-18">Welcome Back !</h4>
                                                                <p class="text-muted">Sign in </p>
                                                            </div>         
                                                             <?php echo form_open_multipart("Login/do_login",'class="auth-input"');?>
                                                                <div class="mb-2">
                                                                    <label for="username" class="form-label">Username</label>
                                                                    <input type="text" name="username" class="form-control" id="username" placeholder="Enter username" required>
																	 <?php echo form_error('username', '<div class="error">', '</div>'); ?>
																</div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="password-input">Password</label>
                                                                    <input type="password" name="password" class="form-control" placeholder="Enter password" required>
																	 <?php echo form_error('password', '<div class="error">', '</div>'); ?>
																 </div>
                                                                 
                                                            <?php if (isset($error)) : ?>
                                                                <p style="color: red; text-align:center;"><?php echo $error; ?></p>
                                                            <?php endif; ?>
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" id="auth-remember-check">
                                                                    <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                                                </div>
                                                                <div class="mt-3">
                                                                    <button class="btn btn-primary w-100" type="submit">Sign In</button>
                                                                </div>
                                                                <div class="mt-4 pt-2 text-center">
                                                                    <div class="signin-other-title">
                                                                        <h5 class="font-size-14 mb-4 title">Sign In with</h5>
                                                                    </div>
                                                                    <div class="pt-2 hstack gap-2 justify-content-center">
                                                                        <button type="button" class="btn btn-primary btn-sm"><i class="ri-facebook-fill font-size-16"></i></button>
                                                                        <button type="button" class="btn btn-danger btn-sm"><i class="ri-google-fill font-size-16"></i></button>
                                                                        <button type="button" class="btn btn-dark btn-sm"><i class="ri-github-fill font-size-16"></i></button>
                                                                        <button type="button" class="btn btn-info btn-sm"><i class="ri-twitter-fill font-size-16"></i></button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    
                                                        <!-- <div class="mt-4 text-center">
                                                            <p class="mb-0">Don't have an account ? <a href="auth-register.html" class="fw-medium text-primary"> Register </a> </p>
                                                        </div> -->
                                                    </div>
                                                </div>  
                                        </div>
                                    </div>
                                    <!-- end card -->
                                    
                                    <!-- <div class="mt-5 text-center">
                                        <p class="mb-0">  <?php
                                echo '&#169; '.date('Y');
                                ?> <i class="mdi mdi-heart text-danger"></i> Experifun Educational Solutions Pvt. Ltd.</p>
                                    </div> -->
                                    <!-- <script>document.write(new Date().getFullYear())</script> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
        
        <!-- JAVASCRIPT -->
        <script src="<?php echo base_url();?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?php echo base_url();?>assets/libs/node-waves/waves.min.js"></script>

        <!-- Icon -->
        <script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <script src="<?php echo base_url();?>assets/js/app.js"></script>

    </body>
</html>
