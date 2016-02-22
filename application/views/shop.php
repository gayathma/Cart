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
        <link rel="stylesheet" href="<?php echo base_url("css/toastr.css"); ?>">

        <script src="<?php echo base_url("js/modernizr.js"); ?>"></script> <!-- Modernizr -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script type="text/javascript">
            var base_url = "<?php echo base_url(); ?>";
            var site_url = "<?php echo site_url(); ?>";

        </script>

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
                    <a class="logo" href="<?php echo site_url() . '/shop' ?>"><img src="<?php echo base_url("img/logo.png"); ?>" alt=""></a>
                </section>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <section class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right main-nav cl-effect-1">
                        <li><a href="<?php echo site_url() . '/shop' ?>">Shop</a></li>
                        <li><a href="<?php echo site_url() . '/home/about' ?>">About</a></li>
                        <li><a href="<?php echo site_url() . '/shop/order' ?>">Custom</a></li>
                        <li><a href="<?php echo site_url() . '/home/contact' ?>">Contact</a></li>
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

        <div class="carousel main-carousel slide" data-ride="carousel" id="bs-carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="carousel-text text-center">
                        <hgroup>
                            <h3 class="special-text" id="responsive-sub-heading">Bienvenue</h3>
                            <h1 id="responsive-heading">Keep Calm & Buy <span>Awesome Teez</span></h1>
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
                <ul class="col-xs-12 cd-filters">
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
                <section class="row tee-filter">
                  <!-- SEARCH -->
                  <section class="col-md-6">
                    <section class="row space">
                      <section class="col-md-12">
                        <span>Search</span>
                      </section>
                    </section>
                    <section class="row space">
                      <section class="col-md-12">
                        <section class="tee-search cd-filter-content">
                            <input type="search" placeholder="Type here" class="pull-left">
                            <button type="button" name="button" class="square-btn-blue pull-right intro-font">Look</button>
                        </section>
                      </section>
                    </section>
                  </section>
                  <!-- COLORS -->
                  <section class="col-md-4">
                    <section class="row space">
                      <section class="col-md-12">
                        <span>Color</span>
                      </section>
                    </section>
                    <section class="row tee-filter-content space">
                      <section class="col-xs-4 col-md-4">
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
                      <section class="col-xs-4 col-md-4">
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
                      <section class="col-xs-4 col-md-4">
                          <ul class="cd-filter-content cd-filters list">
                              <li>
                                  <input class="filter" data-filter=".check5" type="checkbox" id="checkbox5">
                                  <label class="checkbox-label" for="checkbox5">Purple</label>
                              </li>
                              <br>
                              <li>
                                  <input class="filter" data-filter=".check6" type="checkbox" id="checkbox6">
                                  <label class="checkbox-label" for="checkbox6">Brown</label>
                              </li>
                          </ul>
                      </section>
                    </section>
                  </section>
                  <!-- TYPE -->
                  <section class="col-md-2">
                    <section class="row space">
                      <section class="col-md-12">
                        <span>Type</span>
                      </section>
                    </section>
                    <section class="row tee-filter-content space">
                      <section class="col-md-12">
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
                        <!-- <section class="row tee-filter-heading">
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
                        </section> -->
                        <section class="row tee-filter-content">
                            <!-- SEARCH -->
                            <!-- <section class="col-md-5">
                                <section class="tee-search cd-filter-content">
                                    <input type="search" placeholder="Type here" class="pull-left">
                                    <button type="button" name="button" class="square-btn-blue pull-right intro-font">Look</button>
                                </section>
                            </section> -->
                            <!-- DIVIDER -->
                            <section class="col-md-1"></section>
                            <!-- CHECK BOXES -->
                            <!-- <section class="col-md-1">
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
                            </section> -->
                            <!-- DIVIDER -->
                            <!-- <section class="col-md-1"></section> -->
                            <!-- <section class="col-md-1">
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
                            </section> -->
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
                    $count = 1;
                    foreach ($items as $i) {
                        $likes_count = $this->item_shop->GetItemLikesCount($i['ItemID']);
                        $title      = $i['ItemTitle'];
                        $trimTitle  = trim($title);
                        $finalTitle = str_replace(" ", "-", $trimTitle);
                        $itemColor  = strtolower($i['ItemType']);
                        $type       = "";
                        $new_cls = "";
                        $top_cls = "";
                        $t_cls= "";

                        if ($itemColor == 'green') {
                            $type = "check1";
                        } else if ($itemColor == 'black') {
                            $type = "check2";
                        } else if ($itemColor == 'red') {
                            $type = "check3";
                        } else if ($itemColor == 'white') {
                            $type = "check4";
                        }

                        if($count <= 5){
                            $new_cls =  "color-1";
                        }

                        if($likes_count >= 50){
                            $top_cls =  "color-2";
                        }

                        if($i['ItemFor'] == 'Guys'){
                            $t_cls = 'check7';
                        }else if($i['ItemFor'] == 'Girls'){
                            $t_cls = 'check8';
                        }else if($i['ItemFor'] == 'Girls,Guys'){
                            $t_cls = 'check7 check8';
                        }

                        echo '<li class="mix '.$top_cls.' '.$new_cls.' ' . $type . ' radio2 option3 cd-item '.$t_cls.'">';
                        echo '<a href="' . site_url() . "/shop/buy/" . $i['ItemID'] . "/" . $finalTitle . "" . '"><img src="' . base_url().'/uploads/'.$i['ItemImg'] . '" alt="Image 1" class="thumb img-responsive"><div class="price"></a>';
                        echo '<section class="tee-sum">';
                        echo '<span style="width:100%; display:block;"><a class="title_cus" href="' . site_url() . "/shop/buy/" . $i['ItemID'] . "/" . $finalTitle . "" . '">'.$i['ItemName'] .'</a></span>';
                        echo '<span class="pull-left">';
                        echo '<span class="pull-left"><span>Rs. ' . $i['ItemPrice'] . '</span></span>';
                        echo '</span>';
                        echo '<a  onclick="addLikes('. $i['ItemID'].')" id="' . $i['ItemID'] . '" ><span class="pull-right"><img id="img_id'. $i['ItemID'].'" src="' . base_url("img/heart-icon.png") . '" alt="" data-toggle="tooltip" data-placement="bottom" title="'. $likes_count.'"></span></a>';
                        echo '</section>';
                        echo '</li>';
                    }
                    ?>
                </ul>
            </section>
            <input type="hidden" name="session_user_id" id="session_user_id" value="<?php echo $this->session->userdata("user_id");?>"/>
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
              <a href="https://www.facebook.com/JagerClothing"><i id="social" class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/JagerClothing"><i id="social" class="fa fa-twitter"></i></a>
              <a href="https://plus.google.com/JagerClothing"><i id="social" class="fa fa-google-plus"></i></a>
              <a href="mailto:jagerclothing@gmail.com"><i id="social" class="fa fa-envelope"></i></a>
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
    <script src="<?php echo base_url("js/jquery.fittext.js"); ?>"></script>
    <script src="<?php echo base_url("js/toastr.js"); ?>"></script>
    <script>
            $("#responsive-heading").fitText(1.1, { minFontSize: '40px', maxFontSize: '60px' });
            $("#responsive-sub-heading").fitText(1.1, { minFontSize: '40px', maxFontSize: '75px' });
            $(document).ready(function() {

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
                        url: site_url+"/cart/addItemFast", //Relative or absolute path to response.php file
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
