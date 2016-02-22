<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Jäger Clothing Custom Order</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url("css/bootstrap.min.css") ?>" rel="stylesheet">
  <link href="<?php echo base_url("css/reset.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/main.css") ?>" rel="stylesheet">
    <link href="<?php echo base_url("css/social.css") ?>" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url("css/nav-animation.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("css/icon-effects.css") ?>">
  <link rel="stylesheet" href="<?php echo base_url("css/toastr.css"); ?>">
  <link rel="stylesheet" href="<?php echo base_url("css/bootstrap-color-selector.css"); ?>">

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

<main class="teez Expand product-page">
  <section class="container">
    <section class="row">
      <section class="col-md-12 tee-tabs-top">
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url().'/home'?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
          <li><a href="<?php echo site_url().'/shop'?>">Shop</a></li>
          <li class="active">Order</li>
        </ol>
        <span><h3>Request your own Tee</h3></span>
      </section>
    </section>
    <section class="row">
      <section class="col-md-4">
        <form action="">
          <div class="form-group">
            <span>
              <input type="file"  accept="image/*" onchange="loadFile(event)" class="button upload-area" value="">
            </span>
            <img id="output" class="img-preview"/>
          </div>
          <br>
          <div class="form-group">
            <button type="button" id="activate-step-3" class="btn btn-primary square-btn-long pull-left intro-font">I want this</button>
          </div>
        </form>
      </section>
      <section class="col-md-8">

        <form class="form-horizontal ac-custom ac-checkbox ac-cross" role="form" autocomplete="off">
          <div class="form-group">
            <label class="col-lg-2 control-label">Size</label>
            <label class="col-lg-1 control-label" style="font-weight:600">:</label>
            <div class="col-lg-6">
              <select class="form-control tee-text-light">
                <option>Small</option>
                <option>Medium</option>
                <option>Large</option>
                <option>Extra Large</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Color</label>
            <label class="col-lg-1 control-label" style="font-weight:600">:</label>
            <div class="col-lg-6">
              <select class="form-control tee-text-light">
                <option>Green</option>
                <option>Black</option>
                <option>Red</option>
                <option>White</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Type</label>
            <label class="col-lg-1 control-label" style="font-weight:600">:</label>
            <div class="col-lg-6">
              <select class="form-control tee-text-light">
                <option>Short Sleeve</option>
                <option>Long Sleeve</option>
                <option>Arm Cut</option>
                <option>Skinny</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Gender</label>
            <label class="col-lg-1 control-label" style="font-weight:600">:</label>
            <div class="col-lg-6">
              <select class="form-control tee-text-light">
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Quantity</label>
            <label class="col-lg-1 control-label" style="font-weight:600">:</label>
            <div class="col-lg-2">
              <input type="number" class="form-control text-center tee-text-light" value="1">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Body Type</label>
            <label class="col-lg-1 control-label" style="font-weight:600">:</label>
            <div class="col-lg-6">
              <select class="form-control tee-text-light">
                <option>Extra Slim</option>
                <option>Slim fit</option>
                <option>Regular</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-2 control-label">Details</label>
            <label class="col-lg-1 control-label" style="font-weight:600">:</label>
            <div class="col-lg-6">
              <textarea name="" class="tee-text-light" style="width:100%;height:100px;resize:none;"></textarea>
            </div>
          </div>
        </form>
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url("js/jquery.mixitup.min.js"); ?>"></script>
    <script src="<?php echo base_url("js/filter.js"); ?>"></script> <!-- Resource jQuery -->
  <script src="<?php echo base_url("js/product-slider.js"); ?>"></script> <!-- Resource jQuery -->
  <script src="<?php echo base_url("js/other.js"); ?>"></script>
  <script src="<?php echo base_url("js/bootstrap-color-selector.js"); ?>"></script>
  <script src="<?php echo base_url("js/toastr.js"); ?>"></script>
  <script src="<?php echo base_url("js/jquery.validate.min.js"); ?>"></script>

  <script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };

  $('#colorselector').colorselector();
  </script>

</body>
</html>
