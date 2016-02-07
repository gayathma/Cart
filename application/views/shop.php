<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Shop Now Jäger Clothing</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link href="<?php echo base_url("css/reset.css"); ?>" rel="stylesheet">
        <link href="<?php echo base_url("css/main.css"); ?>" rel="stylesheet">



        <link rel="stylesheet" href="<?php echo base_url("css/filter.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("css/nav-animation.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("css/icon-effects.css"); ?>">

        <script src="<?php echo base_url("js/modernizr.js"); ?>"></script> <!-- Modernizr -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

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
          $this->load->model('cart_data');
          $cart_count = 0;
          $cart_class = '';
          if ($this->session->userdata("status")) {
              echo '<ul class = "drop-nav">';
              echo '<li><a href = "' . base_url("settings") . '">Settings<span class = "pull-right">+</span></a></li>';
              echo '<li><a href = "' . base_url("home/logout") . '">Logout<span class = "pull-right">+</span></a></li>';
              echo '</ul>';
              $cart_count   = $this->cart_data->getCartItems();
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

        <div class="carousel main-carousel slide" data-ride="carousel" id="bs-carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="carousel-text text-center">
                        <hgroup>
                            <h3 class="special-text">Bienvenue</h3>
                            <h1>Keep Calm & Buy <span>Awesome Teez</span></h1>
                        </hgroup>
                    </div>
                </div>
            </div>
        </div>

        <!-- SUB HEADING -->
        <section class="container">
            <section class="row">
                <section class="col-md-4"></section>
                <section class="col-md-4">
                    <img src="<?php echo base_url("img/sub-heading.png"); ?>" class="sub-heading" alt=""/>
                </section>
                <section class="col-md-4"></section>
            </section>
        </section>


        <!-- FILTER -->
    <main class="cd-main-content">
        <div class="cd-tab-filter-wrapper">
            <div class="cd-tab-filter">
                <ul class="cd-filters">
                    <li class="placeholder">
                        <a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
                    </li>
                    <li class="filter intro-font"><section class="filter-diamond"><a class="selected" href="#0" data-type="all">All <br> Designs</a></section></li>
                    <li class="filter intro-font" data-filter=".color-1"><section class="filter-diamond"><a href="#0" data-type="color-1">New <br> Tees</a></section></li>
                    <li class="filter intro-font" data-filter=".color-2"><section class="filter-diamond"><a href="#0" data-type="color-2">Top <br> Rated</a></section></li>
                </ul> <!-- cd-filters -->
            </div> <!-- cd-tab-filter -->
        </div> <!-- cd-tab-filter-wrapper -->

        <section class="container-fluid tee-filter-fluid">
            <section class="container">
                <section class="row">
                    <section class="tee-filter">
                        <section class="row tee-filter-heading">
                            <section class="col-md-6">
                                <span>
                                    Search
                                </span>
                            </section>
                            <section class="col-md-4">
                                <span>
                                    Colors
                                </span>
                            </section>
                            <section class="col-md-1">
                                <span>
                                    Type
                                </span>
                            </section>
                        </section>
                        <section class="row tee-filter-content">
                            <!-- SEARCH -->
                            <section class="col-md-5">
                            <section class="tee-search cd-filter-content">
                                <input type="search" placeholder="Type here" class="pull-left">
                                <button type="button" name="button" class="square-btn-blue pull-right intro-font">Look</button>
                            </section>
                            </section>
                            <!-- DIVIDER -->
                            <section class="col-md-1"></section>
                            <!-- CHECK BOXES -->
                            <section class="col-md-1">
                            <ul class="cd-filter-content cd-filters list">
                                <li>
                                    <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                                    <label class="checkbox-label" for="checkbox1">Green</label>
                                </li>
                                <br>
                                <li>
                                    <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                                    <label class="checkbox-label" for="checkbox2">Black</label>
                                </li>
                            </ul>
                            </section>
                            <section class="col-md-1">
                            <ul class="cd-filter-content cd-filters list">
                                <li>
                                    <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
                                    <label class="checkbox-label" for="checkbox3">Red</label>
                                </li>
                                <br>
                                <li>
                                    <input class="filter" data-filter=".check4" type="checkbox" id="checkbox4">
                                    <label class="checkbox-label" for="checkbox4">White</label>
                                </li>
                            </ul>
                            </section>
                            <section class="col-md-1">
                            <ul class="cd-filter-content cd-filters list">
                                <li>
                                    <input class="filter" data-filter=".check5" type="checkbox" id="checkbox5">
                                    <label class="checkbox-label" for="checkbox5">Color</label>
                                </li>
                                <br>
                                <li>
                                    <input class="filter" data-filter=".check6" type="checkbox" id="checkbox6">
                                    <label class="checkbox-label" for="checkbox6">Color</label>
                                </li>
                            </ul>
                            </section>
                            <!-- DIVIDER -->
                            <section class="col-md-1"></section>
                            <section class="col-md-1">
                            <ul class="cd-filter-content cd-filters list">
                                <li>
                                    <input class="filter" data-filter=".check7" type="checkbox" id="checkbox7">
                                    <label class="checkbox-label" for="checkbox7">Guys</label>
                                </li>
                                <br>
                                <li>
                                    <input class="filter" data-filter=".check8" type="checkbox" id="checkbox8">
                                    <label class="checkbox-label" for="checkbox8">Girls</label>
                                </li>
                            </ul>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>

        <section class="container">
            <!-- <section class="row"> -->
                <section class="cd-gallery">
                    <div class="cd-fail-message">No results found</div>
                    <ul>
                        <?php
                        foreach ($items as $i) {
                            $title      = $i['ItemTitle'];
                            $trimTitle  = trim($title);
                            $finalTitle = str_replace(" ", "-", $trimTitle);
                            $itemColor  = strtolower($i['ItemType']);
                            $type       = "";
                            if ($itemColor == 'green') {
                                $type = "check1";
                            } else if ($itemColor == 'black') {
                                $type = "check2";
                            } else if ($itemColor == 'red') {
                                $type = "check3";
                            } else if ($itemColor == 'white') {
                                $type = "check4";
                            }
                            echo '<li class="mix color-1 ' . $type . ' radio2 option3 cd-item">';
                            echo '<a href="' . site_url() . "/shop/buy/" . $i['ItemID'] . "/" . $finalTitle . "" . '"><img src="' . base_url($i['ItemImg']) . '" alt="Image 1" class="thumb img-responsive"><div class="price"></a>';
                            echo '<section class="tee-sum">';
                            echo '<span style="width:100%; display:block;"><a href="' . site_url() . "/shop/buy/" . $i['ItemID'] . "/" . $finalTitle . "" . '">T-shirt title goes here....</a></span>';
                            echo '<span class="pull-left">';
                            echo '<span class="pull-left"><span>Rs. ' . $i['ItemPrice'] . '</span></span>';
                            // echo '<fieldset class="tee-rating">';
                            // echo '<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>';
                            // echo '<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>';
                            // echo '<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>';
                            // echo '<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>';
                            // echo '<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>';
                            // echo '</fieldset>';
                            echo '</span>';
                            echo '<a href="#" id="' . $i['ItemID'] . '" class="items"><span class="pull-right"><img src="' . base_url("img/heart-icon.png") . '" alt="" data-toggle="tooltip" data-placement="bottom" title="12"></span></a>';
                            echo '</section>';
                            echo '</li>';
                            // echo '<li class="gap"></li>';
                            // echo '<li class="gap"></li>';
                            // echo '<li class="gap"></li>';
                        }
                        ?>
                        <!-- <li class="gap"></li>
                        <li class="gap"></li>
                        <li class="gap"></li> -->
                    </ul>
                </section>
            <!-- </section> -->
        </section>

        <section class="container">
            <section class="row">
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
            </section>
        </section>

    </main>

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
        </div></div>

    <span id="top-link-block" class="hidden go-top">
        <a href="#top" onclick="$('html,body').animate({scrollTop: 0}, 'slow');
                    return false;">
            <i class="glyphicon glyphicon-chevron-up"></i>
        </a>
    </span><!-- /top-link-block -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url("js/jquery.mixitup.min.js"); ?>"></script>
    <script src="<?php echo base_url("js/filter.js"); ?>"></script> <!-- Resource jQuery -->
    <script>
            $(document).ready(function() {
                $("#cart").click(function() {
                    window.location.href = "<?php echo base_url("cart"); ?>"; // in everypage use this to link to shopping cart. cannot directly link because no anchor tag.

                });
                $('[data-toggle="tooltip"]').tooltip();

                if (($(window).height() + 1000) < $(document).height()) {
                    $('#top-link-block').removeClass('hidden').affix({
                        // how far to scroll down before link "slides" into view
                        offset: {top: 10}
                    });
                }

                $(".items").on('click', function() {
                    var id = $(this).attr('id');
                    $.ajax({
                        type: "POST",
                        dataType: "text",
                        url: "http://localhost/dropbox/thulara/cart/addItemFast", //Relative or absolute path to response.php file
                        data: {iid: id},
                        success: function(data) {
                            if (data == 'added') {
                                alert('item added successfuly');
                            } else if (data == 'lgfl') {
                                alert('Please login to Continue');
                            }
                        }
                    });
                });
            });
    </script>
</body>
</html>
