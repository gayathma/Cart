<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Thulara">
    <meta name="keyword" content="Jäger">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/temp/img/favicon.html">

    <title>Jäger</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>admin_resources/temp/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>admin_resources/temp/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>admin_resources/temp/assets/font-awesome/css/font-awesome.css"
          rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>admin_resources/temp/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>admin_resources/temp/css/style-responsive.css" rel="stylesheet"/>
    <!--toastr-->
    <link href="<?php echo base_url(); ?>admin_resources/temp/assets/toastr-master/toastr.css" rel="stylesheet"
          type="text/css"/>

    <link rel="stylesheet" href="<?php echo base_url(); ?>admin_resources/dist/sweetalert.css">
    <script src="<?php echo base_url(); ?>admin_resources/dist/sweetalert-dev.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">
<header class="header">
    <a class="logo" href="<?php echo site_url(); ?>/login/load_login">Jäger</a>
    <a class="logout" href="<?php echo site_url(); ?>/login/load_login">Log In</a>
</header>

<div class="container">
    <div id="login_div">
        <form class="form-signin" id="reset_form" name="reset_form" method="POST">
            <h2 class="form-signin-heading">Jäger</h2>

            <h1 class="form-signin-heading-sub">Reset Password</h1>

            <div class="login-wrap">
                <div>

                    <input id="txtusername" name="txtusername" type="text" class="form-control" placeholder="Username"
                           autofocus>
                    <span id="username_alert"></span>
                    <input id="txtpassword" name="txtpassword" type="password" class="form-control"
                           placeholder="Password">

                    <input id="txtpasswordconf" name="txtpasswordconf" type="password" class="form-control"
                           placeholder="Confirm Password">

                </div>
                <button type="submit" class="btn btn-lg btn-sign-in btn-block" onclick="reset_pas()">Reset</button>

            </div>
        </form>
    </div>
</div>

<!-- js placed at the end of the document so the pages load faster -->
<script src="<?php echo base_url(); ?>admin_resources/temp/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>admin_resources/temp/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>admin_resources/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>admin_resources/toastr-master/toastr.js"></script>

</body>
</html>


<script type="text/javascript">

    var base_url = '<?php echo base_url(); ?>';
    var site_url = base_url + 'admin.php';


    $(document).ready(function () {
        $(document).on('change', '#txtusername', function () {
            $.post(site_url + "/users/check_user_name", "username=" + $(this).val(), function (msg) {
                if (msg == '0') {
                    $('#username_alert').html("");
                } else if (msg == '1') {
                    $('#username_alert').html("<strong style=' color: red;'>Sorry this username is not exist !</strong>");
                    return false;
                }

            });
        });

        $("#reset_form").validate({
            focusInvalid: false,
            ignore: "",
            rules: {
                txtusername: {
                    required: true,
                    minlength: 3
                },
                txtpassword: {
                    required: true,
                    minlength: 6
                },
                txtpasswordconf: {
                    required: true,
                    minlength: 6,
                    equalTo: $('#txtpassword')
                }
            }, submitHandler: function (form) {
            }
        });
    });

    function reset_pas() {

        if ($('#reset_form').valid()) {
            $.post(site_url + "/users/check_user_name", "username=" + $('#txtusername').val(), function (msg) {
                if (msg == '0') {
                    $('#username_alert').html("");
                    $.post(site_url + '/users/reset_password', $('#reset_form').serialize(), function (msg) {
                        if (msg == 1) {
                            swal("Password Reset!", "Your password has been updated.", "success");
                            setTimeout("location.href = site_url+'/login/load_login';", 1000);
                        } else {
                            sign_up_form.reset();
                            toastr.error("Error", "Jäger");
                        }
                    });
                } else if (msg == '1') {
                    $('#username_alert').html("<strong style=' color: red;'>Sorry this username is not exist !</strong>");
                    return false;
                }

            });
        }
    }
</script>