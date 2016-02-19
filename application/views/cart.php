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
    <link rel="stylesheet" href="<?php echo base_url("css/toastr.css"); ?>">
    <link rel="stylesheet" href="<?php echo base_url("css/sweetalert.css"); ?>">

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
                        <li><a href="<?php echo site_url() . '/shop/order' ?>">Custom</a></li>
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
                                $cart_count = $cart_data->getCartItems();

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

<main class="teez Expand">
    <div class="container">
        <!-- BERADCRUMB -->
        <section class="row">
            <section class="col-md-12 tee-tabs-top">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url().'/home'?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                    <li><a href="<?php echo site_url() . '/shop' ?>">Shop</a></li>
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
                        $tot = 0;

                        if($items){
                            foreach ($items as $its) {
                                $tot += ($its['ItemPrice'] * $its['Qty']);
                                ?>
                                <tr id="cr_<?php echo $its['CartItemID'];?>">
                                    <td data-th = "Product">
                                        <div class = "row">
                                            <div class = "col-sm-2 hidden-xs"><img src = "<?php echo  base_url().'/uploads/'.$its['ItemImg']; ?>" alt = "..." class = "img-responsive"/></div>
                                            <div class = "col-sm-10">
                                                <h4 class = "nomargin"><?php echo  $its['ItemName'] ?></h4>
                                                <?php echo $its['ItemDes'] ?>
                                            </div>
                                        </div>
                                    </td>
                                    <td data-th = "Price">Rs. <?php echo  $its['ItemPrice']; ?></td>
                                    <td data-th = "Quantity">
                                        <input type = "number" class = "form-control text-center" value="<?php echo  $its['Qty']; ?>" onchange="updateQty(this,'<?php echo $its['CartItemID'];?>')">
                                    </td>
                                    <td data-th = "Subtotal" class = "text-center">Rs. <?php echo $its['ItemPrice'] * $its['Qty'];?></td>
                                    <td class = "actions text-center" data-th = "">
                                        <button class = "btn btn-danger btn-sm square-btn-small" onclick="deleteItems(<?php echo $its['CartItemID'];?>)"><i class = "fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                                <?php  
                            }
                        } else{ 
                            ?>
                            <tr>
                                <td colspan="4">Cart is empty</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr class="visible-xs">
                                <td class="text-center"><strong>Total <?php echo $tot;?></strong></td>
                            </tr>
                            <tr>
                                <td><a href="<?php echo site_url() . '/shop' ?>"><button class="square-btn pull-left"><i class="fa fa-angle-left"></i> &nbsp Shop More</button></a></td>
                                <td colspan="2" class="hidden-xs"></td>
                                <td class="hidden-xs text-center"><h4>Total Rs. <?php echo $tot;?></h4></td>
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
                        <form class="form-horizontal ac-custom ac-checkbox ac-cross" role="form" autocomplete="off" id="details-confirmation" name="details-confirmation" method="post">
                            <div class="form-group">
                                <label class="col-lg-2 control-label">First name</label>
                                <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                <div class="col-lg-4">
                                    <input class="form-control tee-text-light" type="text" readonly name="FirstName" value="<?php echo $userData['FirstName'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Last name</label>
                                <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                <div class="col-lg-4">
                                    <input class="form-control tee-text-light" type="text" readonly name="LastName" value="<?php echo $userData['LastName'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Address</label>
                                <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                <div class="col-lg-8">
                                    <input class="form-control tee-text-light" type="text"  name="Address" value="<?php echo $userData['Address'] ?>">
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
                                    <input class="form-control tee-text-light" type="text" readonly name="City" value="<?php echo $userData['City'] ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Email</label>
                                <label class="col-lg-1 control-label" style="font-weight:600">:</label>
                                <div class="col-lg-4">
                                    <input class="form-control tee-text-light" type="text" readonly value="<?php echo $userData['Email'] ?>">
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
                    <a href="https://www.facebook.com/bootsnipp"><i id="social" class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/bootsnipp"><i id="social" class="fa fa-twitter"></i></a>
                    <a href="https://plus.google.com/+Bootsnipp-page"><i id="social" class="fa fa-google-plus"></i></a>
                    <a href="mailto:bootsnipp@gmail.com"><i id="social" class="fa fa-envelope"></i></a>
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
    <script src="<?php echo base_url("js/svgcheckbx.js"); ?>"></script>
    <script src="<?php echo base_url("js/jquery.flagstrap.min.js"); ?>"></script>
    <script src="<?php echo base_url("js/toastr.js"); ?>"></script>
    <script src="<?php echo base_url("js/sweetalert-dev.js"); ?>"></script>
    <script src="<?php echo base_url("js/jquery.validate.min.js"); ?>"></script>

    <script type="text/javascript">
    $(document).ready(function ($) {
        //form validation
        $("#details-confirmation").validate({
            rules: {
                FirstName: "required",
                LastName: "required",
                Address: "required",
                City: "required",
                cb6: "required"
            }
        });
    });

    function deleteItems(item_id){
        if($('#session_user_id').val() != ""){
            swal({
                title: "Are you sure?",
                text: "You want to delete this Item?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#1abc9c",
                confirmButtonText: "Yes, delete it!",
                closeOnConfirm: false
            },
            function () {
                $.post(site_url+'/cart/deleteItem',{ item_id : item_id}, function (msg) {
                    if (msg != '') {
                        toastr.success("Successfully deleted !!", "Jäger");
                        $('#cr_'+item_id).hide();
                        $('.cart-items-notification').html(msg);
                    } else {
                        toastr.error("Error Occurred !!", "Jäger");
                    }
                });
            });
        }else{
            setTimeout("location.href = site_url+'/home/register';", 100);
        }
    }

    function updateQty(element , item_id){
        $.post(site_url+'/cart/updateItemQty',{ item_id : item_id, qty : $(element).val()}, function (msg) {
            if (msg != '') {
                $('.cart-items-notification').html(msg);
            } else {
                toastr.error("Error Occurred !!", "Jäger");
            }
        });
    }
    </script>


</body>
</html>
