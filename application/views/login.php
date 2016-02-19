<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login to Jäger Clothing</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/reset.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/social.css" rel="stylesheet">
        <link href="css/login-register.css" rel="stylesheet">

        <script src="js/modernizr.js"></script> <!-- Modernizr -->
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


    </section>
</main>

<div class="login" id="loginModal">
    <div class="modal-dialog animated">
        <div class="modal-content flat">
            <div class="modal-header">
                <a href="home.html"><i class="fa fa-arrow-right close"></i></a>
                <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
                <div class="box">
                    <div class="content">
                        <div class="error"></div>
                        <div class="form loginBox">
                            <form method="post" action="/login" accept-charset="UTF-8" id="login_form" name="login_form">
                                <div class="form-group">
                                    <input id="email" class="tee-text-light form-control" type="text" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input id="password" class="form-control tee-text-light" type="password" placeholder="Password" name="password">
                                </div>
                                <button type="button" class="btn btn-primary square-btn-long" value="Login" onclick="loginAjax()">Start Shopping</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="content registerBox" style="display:none;">
                        <div class="form">
                            <form method="post" html="{:multipart=>true}" data-remote="true" action="/register" accept-charset="UTF-8" id="register-form" name="register-form">
                                <div class="form-group">
                                    <input id="email" class="form-control tee-text-light" type="text" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input id="password_re" class="form-control tee-text-light" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="form-group">
                                    <input id="password_confirmation" class="form-control tee-text-light" type="password" placeholder="Repeat Password" name="password_confirmation">
                                </div>
                                <button type="button" class="btn btn-primary square-btn-long" value="Login" onclick="loginAjax()">Get Started</button>
                            </form>
                        </div>
                    </div>

                    <div class="division">
                        <div class="line l"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="forgot login-footer">
                    <span>Looking to
                        <a href="javascript: showRegisterForm();">create an account</a>
                        ?</span>
                </div>
                <div class="forgot register-footer" style="display:none">
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
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mixitup.min.js"></script>
<script src="js/filter.js"></script> <!-- Resource jQuery -->
<script src="js/product-slider.js"></script> <!-- Resource jQuery -->
<script src="js/other.js"></script>
<script src="<?php echo base_url("js/jquery.validate.min.js"); ?>"></script>
<script src="js/login-register.js"></script>
<script type="text/javascript">
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
                minlength: 6
            },
            password_confirmation: {
                required: true,
                minlength: 6,
                equalTo: $('#password_re')
            }
        }
    });
});
</script>
</body>
</html>
