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
                        <a class="logo" href="<?php echo site_url(); ?>"><img src="<?php echo base_url("img/logo.png"); ?>" alt=""></a>
                    </section>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <section class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right main-nav cl-effect-1">
                            <li><a href="<?php echo site_url() . '/shop' ?>">Shop</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Custom</a></li>
                            <li><a href="#">Contact</a></li>
                            <li class="main-dropdown">
                                <a href="<?php echo base_url(); ?>" class="nav-username">
                                    <?php
                                    if ($this->session->userdata('status')) {
                                        if ($this->session->userdata('first_name') != "") {
                                            echo $this->session->userdata('first_name');
                                        } else {
                                            echo $this->session->userdata('email');
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
                                    $cart_count = count($cart_data->getCartItems());
                                    if ($cart_count != 0) {
                                        $cart_class = 'cart-items-notification-active';
                                    } else {
                                        $cart_class = '';
                                    }
                                } else {

                                }
                                ?>
      <!-- <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Action</a></li>
        <li><a href="#">Another action</a></li>
        <li><a href="#">Something else here</a></li>
        <li role="separator" class="divider"></li>
        <li><a href="#">Separated link</a></li>
      </ul> -->
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
                        <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                        <li><a href="#">Shop</a></li>
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
                                    <tr>
                                        <td class="tee-image"><img src="img/img-1.jpg" alt="Image 1" class="img-responsive"></td>
                                        <td>Size (Men's): Asia XXL(US L)</br>
                                            Color: Black
                                        </td>
                                        <td>LKR 12.99</td>
                                        <td>
                                            <fieldset class="tee-rating text-center">
                                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                            </fieldset>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="tee-image"><img src="img/img-2.jpg" alt="Image 2" class="img-responsive"></td>
                                        <td>Size (Men's): Asia XXL(US L)</br>
                                            Color: Black
                                        </td>
                                        <td>LKR 12.99</td>
                                        <td>
                                            <fieldset class="tee-rating text-center">
                                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tee-image"><img src="img/img-3.jpg" alt="Image 3" class="img-responsive"></td>
                                        <td>Size (Men's): Asia XXL(US L)</br>
                                            Color: Black
                                        </td>
                                        <td>LKR 12.99</td>
                                        <td>
                                            <fieldset class="tee-rating text-center">
                                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                            </fieldset>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tee-image"><img src="img/img-4.jpg" alt="Image 4" class="img-responsive"></td>
                                        <td>Size (Men's): Asia XXL(US L)</br>
                                            Color: Black
                                        </td>
                                        <td>LKR 12.99</td>
                                        <td>
                                            <fieldset class="tee-rating text-center">
                                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                            </fieldset>
                                        </td>
                                    </tr>
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
                                                <form class="form-horizontal ac-custom ac-checkbox ac-cross" role="form" autocomplete="off">
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">First name</label>
                                                        <label class="col-lg-1 control-label" style="font-weight:600">: </label>
                                                        <div class="col-lg-8">
                                                            <input class="form-control tee-text-light" type="text" value="<?php echo $userData['FirstName'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Last name</label>
                                                        <label class="col-lg-1 control-label" style="font-weight:600">: </label>
                                                        <div class="col-lg-8">
                                                            <input class="form-control tee-text-light" type="text" value="<?php echo $userData['LastName'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-lg-2 control-label">Address</label>
                                                        <label class="col-lg-1 control-label" style="font-weight:600">: </label>
                                                        <div class="col-lg-8">
                                                            <input class="form-control tee-text-light" type="text" value= <?php echo $userData['Address'] ?>">
                                                                   </div>
                                                                   </div>
                                                                   <div class="form-group">
                                                                   <label class="col-lg-2 control-label"></label>
                                                            <label class="col-lg-1 control-label"></label>
                                                            <div class="col-lg-8">
                                                                <input class="form-control tee-text-light" type="text">
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
                                                                <input class="form-control tee-text-light" type="text" value="<?php echo $userData['City'] ?>">
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
                                                            <label class="col-lg-2 control-label">Old Password</label>
                                                            <label class="col-lg-1 control-label" style="font-weight:600">: </label>
                                                            <div class="col-lg-8">
                                                                <input class="form-control tee-text-light" type="password" value="<?php echo $userData['password'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">New Password</label>
                                                            <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                                            <div class="col-lg-8">
                                                                <input class="form-control tee-text-light" type="password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Match Password</label>
                                                            <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                                            <div class="col-lg-8">
                                                                <input class="form-control tee-text-light" type="password">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label"></label>
                                                            <label class="col-lg-1 control-label"></label>
                                                            <div class="col-lg-2">
                                                                <button type="button" id="activate-step-3" class="btn btn-primary square-btn pull-left">Save Changes</button>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <button type="button" id="activate-step-3" class="btn btn-primary square-btn pull-left">Cancel</button>
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
                    <a href="https://www.facebook.com/bootsnipp"><i id="social" class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i id="social" class="fa fa-twitter"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i id="social" class="fa fa-google-plus"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i id="social" class="fa fa-envelope"></i></a>
                </section>
            </div>
        </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("js/bootstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("js/jquery.mixitup.min.js"); ?>"></script>
    <script src="<?php echo base_url("js/filter.js"); ?>"></script> <!-- Resource jQuery -->
    <script src="<?php echo base_url("js/product-view.js"); ?>"></script> <!-- Resource jQuery -->
    <script src="<?php echo base_url("js/velocity.min.js"); ?>"></script>
    <script src="<?php echo base_url("js/other.js"); ?>"></script>
    <script src="<?php echo base_url("js/jquery.flagstrap.min.js"); ?>"></script>
</body>
</html>
