<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome to Jäger Clothing</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("css/bootstrap.min.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/reset.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/main.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/social.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/login-register.css") ?>" rel="stylesheet">

    <script src="<?php echo base_url("js/modernizr.js") ?>"></script> <!-- Modernizr -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

      </head>
      <body class="home-bg">

        <main>
            <section class="container">
                <section class="absolute-center-area Responsive">
                    <section class="clouds">
                        <section class="cloud-1 floating-1"></section>
                        <section class="cloud-2 floating-2"></section>
                        <section class="cloud-3 floating-3"></section>
                    </section>
                    <section class="tee-user-form">
                        <a href="#" class="tee-login-button" data-toggle="modal" href="javascript:void(0)" onclick="openLoginModal();">
                            <p>login</p>
                        </a>
                        <img src="<?php echo base_url("img/home-tee.png") ?>" alt="" class="img-responsive">
                        <a href="<?php echo site_url() . '/shop' ?>" class="tee-guest-button">
                            <p>guest</p>
                        </a>
                    </section>
                </section>
            </section>
            <section class="container-fluid">

            </section>
        </main>

        <div class="modal fade login" id="loginModal">
            <div class="modal-dialog login animated">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                        <div class="box" >
                            <div class="content log-box" style="display:none;">
                                <div class="error"></div>
                                <div class="form loginBox">
                                    <form method="post" action="<?php echo base_url("checkLogin") ?>" accept-charset="UTF-8" id="login_form">
                                        <div class="form-group">
                                            <input id="email" class="tee-text-light form-control loginEmail" type="text" placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input id="password" class="form-control tee-text-light loginPass" type="password" placeholder="Password" name="password">
                                        </div>
                                        <button type="button" class="btn btn-primary square-btn-long" value="Login" onclick="loginAjax()">Start Shopping</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="content registerBox" >
                                <div class="form">
                                    <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8" id="register-form">
                                        <div class="form-group">
                                            <input id="email" class="form-control tee-text-light RegEmail" type="text" placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input id="password_edit" class="form-control tee-text-light RegPassword" type="password" placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <input id="password_confirmation" class="form-control tee-text-light RegPassConfirm" type="password" placeholder="Repeat Password" name="password_confirmation">
                                        </div>
                                        <button type="button" class="btn btn-primary square-btn-long" value="Login" onclick="RegisterAjax()">Get Started</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="forgot login-footer" style="display:none">
                            <a href="javascript: showForgotForm();">Forgot Password</a></br>
                            <span>Looking to
                                <a href="javascript: showRegisterForm();">create an account</a>
                                ?</span>
                            </div>
                            <div class="forgot register-footer" >
                                <span>Already have an account?</span>
                                <a href="javascript: showLoginForm();">Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
            var base_url = "<?php echo base_url(); ?>";
            var site_url = "<?php echo site_url(); ?>";


            </script>
            
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="<?php echo base_url("js/bootstrap.min.js"); ?>"></script>
            <script src="<?php echo base_url("js/jquery.mixitup.min.js"); ?>"></script>
            <script src="<?php echo base_url("js/filter.js"); ?>"></script> <!-- Resource jQuery -->
            <script src="<?php echo base_url("js/product-slider.js"); ?>"></script> <!-- Resource jQuery -->
            <script src="<?php echo base_url("js/other.js"); ?>"></script>
            <script src="<?php echo base_url("js/jquery.validate.min.js"); ?>"></script>
            <script src="<?php echo base_url("js/login-register.js"); ?>"></script>
            <script type="text/javascript">
            $('.modal-title').html('Register');
            $('#loginModal').modal('show');
            $('.error').removeClass('alert alert-danger').html('');


            $(document).ready(function ($) {
                $("#login_form").validate({
                    rules: {
                        email: "required",
                        password: "required"
                    }
                });

                $("#register-form").validate({
                    rules: {
                        email: "required",
                        password:  {
                            required: true,
                            minlength: 8
                        },
                        password_confirmation: {
                            required: true,
                            minlength: 8,
                            equalTo: $('#password_edit')
                        }
                    }
                });
            });
            </script>
        </body>
        </html>
