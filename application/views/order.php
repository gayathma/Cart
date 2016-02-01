<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Jäger Clothing Custom Order</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/reset.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link href="css/social.css" rel="stylesheet">

  <link rel="stylesheet" href="css/nav-animation.css">
  <link rel="stylesheet" href="css/icon-effects.css">

  <link rel="stylesheet" href="css/bootstrap-color-selector.css">

  <script src="js/modernizr.js"></script> <!-- Modernizr -->
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
      <a class="logo" href="#"><img src="img/logo.png" alt=""></a>
      <ul class="main-nav cl-effect-1">
         <li><a href="#">Shop</a></li>
         <li><a href="#">About</a></li>
         <li><a href="#">Custom</a></li>
         <li><a href="#">Contact</a></li>
         <li class="main-dropdown">
          <a href="#" class="nav-username">Jhon Doe</a> <!--maximum characters for username = 15-->
          <ul class="drop-nav">
            <li><a href="#">Settings<span class="pull-right">+</span></a></li>
            <li><a href="#">Logout<span class="pull-right">+</span></a></li>
          </ul>
         </li>
         <span class="hi-icon-effect-1 hi-icon-effect-1a">
             <span id="cart" class="hi-icon hi-icon-cart"><span class="cart-items-notification">4</span></span>
         </span>
      </ul>
    </section>
  </section>
</header>

<main class="teez Expand product-page">
  <section class="container">
    <section class="row">
      <section class="col-md-12 tee-tabs-top">
        <ol class="breadcrumb">
          <li><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
          <li><a href="#">Shop</a></li>
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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/filter.js"></script> <!-- Resource jQuery -->
    <script src="js/product-slider.js"></script> <!-- Resource jQuery -->
    <script src="js/other.js"></script>
    <script src="js/bootstrap-color-selector.js"></script>

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
