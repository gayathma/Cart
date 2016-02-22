<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Jäger Clothing Product</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("css/bootstrap.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/reset.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/main.css"); ?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url("css/nav-animation.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("css/icon-effects.css"); ?>">
    <link href="<?php echo base_url("css/flags.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url("css/toastr.css"); ?>">

    <script src="<?php echo base_url("js/modernizr.js"); ?>"></script> <!-- Modernizr -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->

      </head>
      <body class="site">

        <header class="teez">
            <!-- NAVIGATION BAR -->
            <section class="navbar navbar-default nav-background">
                <section class="container nav-section">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <section class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="<?php echo site_url() . '/shop' ?>"><img src="<?php echo base_url("img/logo.png"); ?>" alt=""></a>
                    </section>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <section class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right main-nav cl-effect-1">
                            <li><a href="<?php echo site_url() . '/shop' ?>">Shop</a></li>
                            <li><a href="<?php echo site_url() . '/shop/order' ?>">Custom</a></li>
                            <li class="main-dropdown">
                                <a href="<?php echo base_url(); ?>" class="nav-username">
                                    <?php
                                    if ($this->session->userdata('status')) {
                                        if ($this->session->userdata('first_name') != "") {
                                            echo $this->session->userdata('first_name');
                                        } else {
                                            echo " ";
                                        }
                                    } else {
                                        echo "Guest";
                                    }
                                    ?>
                                </a> <!--maximum characters for username = 15-->
                                <?php
                                $cart_data  = new Cart_data();
                                $cart_count = 0;
                                $cart_class = '';
                                if ($this->session->userdata("status")) {
                                    ?>
                                    <ul class = "drop-nav">
                                        <li><a href = "<?php echo site_url() . '/settings' ?>">Settings<span class = "pull-right">+</span></a></li>
                                        <li><a href = "<?php echo site_url() . '/home/logout' ?>">Logout<span class = "pull-right">+</span></a></li>
                                    </ul>
                                    <?php
                                    $cart_count = $cart_data->getCartItems();
                                    if ($cart_count != 0) {
                                        $cart_class = 'cart-items-notification-active';
                                    } else {
                                        $cart_class = '';
                                    }
                                } else {

                                }
                                ?>

                            </li>
                            <li>
                                <span class="hi-icon-effect-1 hi-icon-effect-1a">
                                    <span id="cart" class="hi-icon hi-icon-cart "><span class="cart-items-notification <?php echo $cart_class; ?>"><?php echo $cart_count; ?></span></span>
                                </span>
                            </li>
                        </ul>
                    </section><!-- /.navbar-collapse -->
                </section><!-- /.container-fluid -->
            </section>
        </header>

        <main class="teez Expand">
            <section class="container">
                <section class="row">
                    <section class="col-md-12 tee-tabs-top">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url() . '/shop' ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                            <li><a href="<?php echo site_url().'/shop'?>">Shop</a></li>
                            <li class="active">Settings</li>
                        </ol>
                        <span><h3>Personal Settings</h3></span>
                    </section>
                </section>
                <section class="row">
                    <section class="col-md-12">
                        <ul class="nav nav-pills nav-stacked col-md-2">
                            <li class="active"><a href="#tab_a" data-toggle="pill" class="tee-pill"><i class="fa fa-history"></i>History</a></li>
                            <li><a href="#tab_b" data-toggle="pill"><i class="fa fa-user"></i> Profile</a></li>
                        </ul>
                        <div class="tab-content col-md-10">
                            <div class="tab-pane fade in active" id="tab_a">
                                <table class="table">
                                    <tbody>
                                        <?php
                                        if($historyData){
                                            foreach ($historyData as $item) {
                                                $likes_count = $this->item_shop->GetItemLikesCount($item['ItemID']);
                                                ?>
                                                <tr>
                                                    <td class="tee-image"><img src="<?php echo base_url().'/uploads/'.$item['ItemImg'];?>" alt="Image 1" class="img-responsive"></td>
                                                    <td>Size (Men's): <?php echo $item['ItemSize'];?></br>
                                                        Color: <?php echo ucfirst($item['ItemType']);?>
                                                    </td>
                                                    <td>Rs. <?php echo $item['ItemPrice'];?></td>
                                                    <td>
                                                        <a href="#" id="<?php echo $item['ItemID'];?>" class="items"><span class="pull-right"><img src="<?php echo base_url("img/heart-icon.png") ?>" alt="" data-toggle="tooltip" data-placement="bottom" title="<?php echo  $likes_count ;?>"></span></a>
                                                    </td>
                                                </tr>
                                                <?php
                                            }
                                        }else{
                                            ?>
                                            <tr>
                                                <td colspan="4">No results found</td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>


                                    <div class="text-center">
                                        <ul class="pagination">
                                            <li>
                                                <a href="#" aria-label="Previous">
                                                    <span aria-hidden="true">Prev</span>
                                                </a>
                                            </li>
                                            <li class="active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li>
                                                <a href="#" aria-label="Next">
                                                    <span aria-hidden="true">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="tab_b">
                                    <div class="row">
                                        <!-- left column -->
                                        <table style="width:100%;">
                                            <tr>
                                                <td>
                                                    <div class="col-md-12 personal-info">
                                                        <form class="form-horizontal ac-custom ac-checkbox ac-cross" role="form" autocomplete="off" name="user_form" id="user_form" method="POST">
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label">First name</label>
                                                                <label class="col-lg-1 control-label" style="font-weight:600">: </label>
                                                                <div class="col-lg-8">
                                                                    <input class="form-control tee-text-light" type="text" name="FirstName" value="<?php echo $userData['FirstName'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label">Last name</label>
                                                                <label class="col-lg-1 control-label" style="font-weight:600">: </label>
                                                                <div class="col-lg-8">
                                                                    <input class="form-control tee-text-light" type="text" name="LastName" value="<?php echo $userData['LastName'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label">Address</label>
                                                                <label class="col-lg-1 control-label" style="font-weight:600">: </label>
                                                                <div class="col-lg-8">
                                                                    <input class="form-control tee-text-light" type="text" name="Address" value="<?php echo $userData['Address'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label">Country</label>
                                                                <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                                                <div class="col-lg-2">
                                                                    <div id="demo" data-input-name="country" data-button-size="tee-text-light" data-scrollable="true" data-scrollable-height="250px"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label">City</label>
                                                                <label class="col-lg-1 control-label" style="font-weight:600">: </label>
                                                                <div class="col-lg-8">
                                                                    <input class="form-control tee-text-light" type="text" name="City" value="<?php echo $userData['City'] ?>">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label">Email</label>
                                                                <label class="col-lg-1 control-label" style="font-weight:600">: </label>
                                                                <div class="col-lg-8">
                                                                    <input class="form-control tee-text-light" type="text" readonly value="<?php echo $userData['Email'] ?>">
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label">New Password</label>
                                                                <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                                                <div class="col-lg-8">
                                                                    <input class="form-control tee-text-light" type="password" name="password" id="password">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label">Match Password</label>
                                                                <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                                                <div class="col-lg-8">
                                                                    <input class="form-control tee-text-light" type="password" name="repassword" id="repassword">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                              <div class="row">
                                                                <label class="col-lg-2 control-label"></label>
                                                                <label class="col-lg-1 control-label"></label>
                                                              </div>

                                                                <div class="col-xs-6 col-lg-2">
                                                                    <button type="submit" id="activate-step-3" class="btn btn-primary square-btn pull-left">Save Changes</button>
                                                                </div>
                                                                <div class="col-xs-6 col-lg-2">
                                                                    <a   id="activate-step-3" class="btn btn-primary square-btn pull-left" href="<?php echo site_url() . '/shop' ?>">Cancel</a>
                                                                </div>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </td></tr></table>
                                            </div>
                                        </div>
                                    </div><!-- tab content -->
                                </section>
                            </section>
                        </section>
                        <input type="hidden" name="session_user_id" id="session_user_id" value="<?php echo $this->session->userdata("user_id");?>"/>
                    </main>

                    <footer class="teez">
                        <section class="container-fluid tee-footer" id="two">
                            <section class="row">
                                <section class="footer-text">
                                    <h1><span class="intro-font">Jäger</span></h1>
                                    <h3><span class="intro-font">clothing</span></h3>
                                </section>
                            </section>
                        </section>

                        <div class="navbar navbar-default navbar-bottom tee-bottom-footer">
                            <div class="container">
                                <p class="navbar-text pull-left">© 2015 Jäger . All rights reserved.
                                </p>

                                <section class="social pull-right">
                                  <a href="https://www.facebook.com/JagerClothing"><i id="social" class="fa fa-facebook"></i></a>
                                  <a href="https://twitter.com/JagerClothing"><i id="social" class="fa fa-twitter"></i></a>
                                  <a href="https://plus.google.com/JagerClothing"><i id="social" class="fa fa-google-plus"></i></a>
                                  <a href="mailto:jagerclothing@gmail.com"><i id="social" class="fa fa-envelope"></i></a>
                                </section>
                            </div>
                        </div>
                    </footer>
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
                    <script src="<?php echo base_url("js/product-view.js"); ?>"></script> <!-- Resource jQuery -->
                    <script src="<?php echo base_url("js/velocity.min.js"); ?>"></script>
                    <script src="<?php echo base_url("js/other.js"); ?>"></script>
                    <script src="<?php echo base_url("js/jquery.validate.min.js"); ?>"></script>
                    <script src="<?php echo base_url("js/jquery.flagstrap.min.js"); ?>"></script>
                    <script src="<?php echo base_url("js/toastr.js"); ?>"></script>
                    <script type="text/javascript">
                    $(document).ready(function ($) {

                        //form validation
                        $("#user_form").validate({
                            rules: {
                                FirstName: "required",
                                LastName: "required",
                                Address: "required",
                                City: "required",
                                password:  {
                                    required: true,
                                    minlength: 6
                                },
                                repassword: {
                                    required: true,
                                    minlength: 6,
                                    equalTo: $('#password')
                                }
                            },
                            submitHandler: function (form) {
                                $.post('<?php echo site_url();?>/settings/UpdateSettings', $('#user_form').serialize(), function (msg) {
                                    if (msg == 1) {
                                        toastr.success("Successfully saved !!", "Jäger");///////////////////////////////////////////////////////////////////////////
                                    } else {
                                        toastr.error("Error Occurred !!", "Jäger");
                                    }
                                });


                            }
                        });

});
</script>
</body>
</html>
