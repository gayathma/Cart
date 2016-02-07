<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Jäger Shopping Cart</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url("css/bootstrap.min.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("css/reset.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("css/main.css"); ?>" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url("css/nav-animation.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("css/icon-effects.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("css/checkboxes.css"); ?>">

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
            <section class="nav-background">
                <section class="container nav-section">
                    <a class="logo" href="<?php echo site_url();?>"><img src="<?php echo base_url("img/logo.png"); ?>" alt=""></a>
                    <ul class="main-nav cl-effect-1">
                        <li><a href="<?php echo site_url().'/shop'?>">Shop</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Custom</a></li>
                        <li><a href="#">Contact</a></li>
                        <li class="main-dropdown">
                            <a href="#" class="nav-username">
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
                            if ($this->session->userdata("status")) {
                                echo '<ul class = "drop-nav">';
                                echo '<li><a href = "' . base_url("settings") . '">Settings<span class = "pull-right">+</span></a></li>';
                                echo '<li><a href = "' . base_url("home/logout") . '">Logout<span class = "pull-right">+</span></a></li>';
                                echo '</ul>';
                            } else {
                                
                            }
                            ?>
                        </li>
                        <span class="hi-icon-effect-1 hi-icon-effect-1a">
                            <span id="cart" class="hi-icon hi-icon-cart"><span class="cart-items-notification">4</span></span>
                        </span>
                    </ul>
                </section>
            </section>
            <!--NAVIGATION BAR END-->
        </header>

        <main class="teez Expand">
            <div class="container">
                <!-- BERADCRUMB -->
                <section class="row">
                    <section class="col-md-12 tee-tabs-top">
                        <ol class="breadcrumb">
                            <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                            <li><a href="#">Shop</a></li>
                            <li class="active">Cart</li>
                        </ol>
                        <span><h3>Shopping Cart</h3></span>
                    </section>
                </section>
                <!-- BREADCRUMB END -->

                <!-- SHOPPING WIZARD -->
                <div class="row form-group wizard">
                    <div class="col-xs-12">
                        <div class="wizard-connecter"></div>
                        <ul class="wizard-pills setup-panel">
                            <div class="col-md-4 text-center">
                                <li class="active">
                                    <a href="#step-1">
                                        <i class="fa fa-history"></i>
                                    </a>
                                </li>
                            </div>
                            <div class="col-md-4 text-center">
                                <li class="disabled">
                                    <a href="#step-2">
                                        <i class="fa fa-user"></i>
                                    </a>
                                </li>
                            </div>
                            <div class="col-md-4 text-center">
                                <li class="disabled">
                                    <a href="#step-3">
                                        <i class="fa fa-credit-card"></i>
                                    </a>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="row setup-content" id="step-1">
                    <div class="col-xs-12">
                        <h4 class="wizard-heading">Purchased History</h4>
                        <table id="cart" class="table table-hover table-condensed">
                            <thead>
                                <tr>
                                    <th style="width:50%">Product</th>
                                    <th style="width:10%">Price</th>
                                    <th style="width:8%">Quantity</th>
                                    <th style="width:22%" class="text-center">Subtotal</th>
                                    <th style="width:10%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($items as $its) {
                                    echo '<tr>';
                                    echo    '<td data-th = "Product">';
                                    echo    '<div class = "row">';
                                    echo    '<div class = "col-sm-2 hidden-xs"><img src = "'.base_url($its['ItemImg']).'" alt = "..." class = "img-responsive"/></div>';
                                    echo    '<div class = "col-sm-10">';
                                    echo    '<h4 class = "nomargin">'.$its['ItemName'].'</h4>';
                                    echo    $its['ItemDes'];
                                    echo    ' </div>';
                                    echo    '</div>';
                                    echo    '</td>';
                                    echo    '<td data-th = "Price">'.$its['ItemPrice'].' LKR</td>';
                                    echo    '<td data-th = "Quantity">';
                                    echo    '<input type = "number" class = "form-control text-center" value = "'.$its['Qty'].'">';
                                    echo    '</td>';
                                    echo    '<td data-th = "Subtotal" class = "text-center"></td>';
                                    echo    '<td class = "actions text-center" data-th = "">';
                                    echo    '<button class = "btn btn-info btn-sm square-btn-small"><i class = "fa fa-refresh"></i></button>';
                                    echo    '<button class = "btn btn-danger btn-sm square-btn-small"><i class = "fa fa-trash-o"></i></button>';
                                    echo    '</td>';
                                    echo    '</tr>';
                                }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr class="visible-xs">
                                    <td class="text-center"><strong>Total 1.99</strong></td>
                                </tr>
                                <tr>
                                    <td><a href="#"><button class="square-btn pull-left"><i class="fa fa-angle-left"></i> &nbsp Shop More</button></a></td>
                                    <td colspan="2" class="hidden-xs"></td>
                                    <td class="hidden-xs text-center"><h4>Total LKR 2600</h4></td>
                                    <td><a href="#"><button id="activate-step-2" class="square-btn pull-left">Checkout  &nbsp <i class="fa fa-angle-right"></i></button></a></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="row setup-content" id="step-2">
                    <div class="col-xs-12">
                        <h4 class="wizard-heading">Confirm your personal details</h4>
                        <div class="col-md-12 personal-info">
                            <form class="form-horizontal ac-custom ac-checkbox ac-cross" role="form" autocomplete="off" id="details-confirmation" method="post">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">First name</label>
                                    <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                    <div class="col-lg-4">
                                        <input class="form-control tee-text-light" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Last name</label>
                                    <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                    <div class="col-lg-4">
                                        <input class="form-control tee-text-light" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Address</label>
                                    <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control tee-text-light" type="text">
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
                                    <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                    <div class="col-lg-4">
                                        <input class="form-control tee-text-light" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Email</label>
                                    <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                    <div class="col-lg-4">
                                        <input class="form-control tee-text-light" type="text" readonly>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label"></label>
                                    <label class="col-lg-1 control-label"></label>
                                    <div class="col-lg-8">
                                        <ul>
                                            <li class="checkbox-area"><input id="cb6 verify-checkbox" name="cb6" type="checkbox"><label for="cb6" class="checkbox-shape">I confirm above mentioned details are correct.</label></li>
                                        </ul>
                                        <button type="button" id="activate-step-3" class="btn btn-primary square-btn pull-left">Payments  &nbsp <i class="fa fa-angle-right"></i></button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="row setup-content" id="step-3">
                    <div class="col-xs-12">
                        <h4 class="wizard-heading">Make your payments</h4>
                        <div class="col-md-12 personal-info">
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Card Holder's Name</label>
                                    <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                    <div class="col-lg-8">
                                        <input class="form-control tee-text-light" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Card Number</label>
                                    <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                    <div class="col-lg-8">
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control tee-text-light" autocomplete="off" maxlength="4" pattern="\d{4}" title="First four digits" required="">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control tee-text-light" autocomplete="off" maxlength="4" pattern="\d{4}" title="Second four digits" required="">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control tee-text-light" autocomplete="off" maxlength="4" pattern="\d{4}" title="Third four digits" required="">
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control tee-text-light" autocomplete="off" maxlength="4" pattern="\d{4}" title="Fourth four digits" required="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Card Expiry Date</label>
                                    <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                    <div class="col-lg-8">
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-9">
                                                    <select class="form-control tee-text-light" name="cc_exp_mo">
                                                        <option value="01">January</option>
                                                        <option value="02">February</option>
                                                        <option value="03">March</option>
                                                        <option value="04">April</option>
                                                        <option value="05">May</option>
                                                        <option value="06">June</option>
                                                        <option value="07">July</option>
                                                        <option value="08">August</option>
                                                        <option value="09">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <select class="form-control tee-text-light" name="cc_exp_yr">
                                                        <option>2014</option>
                                                        <option>2015</option>
                                                        <option>2016</option>
                                                        <option>2017</option>
                                                        <option>2018</option>
                                                        <option>2019</option>
                                                        <option>2020</option>
                                                        <option>2021</option>
                                                        <option>2022</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Card CVV</label>
                                    <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                    <div class="col-lg-8">
                                        <div class="controls">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="text" class="form-control tee-text-light" autocomplete="off" maxlength="3" pattern="\d{3}" title="Three digits at back of your card" required="">
                                                </div>
                                                <div class="col-md-8"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-2 control-label"></label>
                                    <label class="col-lg-1 control-label"></label>
                                    <div class="col-lg-8">
                                        <button type="button" id="activate-step-3" class="btn btn-primary square-btn" style="margin-right:10px;">Pay</button>
                                        <button type="button" class="btn btn-primary square-btn">Cancel</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

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
        <script src="<?php echo base_url("js/svgcheckbx.js"); ?>"></script>
        <script src="<?php echo base_url("js/jquery.flagstrap.min.js"); ?>"></script>


    </body>
</html>
