<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Jäger Clothing Product</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url("css/bootstrap.min.css") ?>" rel="stylesheet">
        <link href="<?php echo base_url("css/reset.css") ?>" rel="stylesheet">
        <link href="<?php echo base_url("css/main.css") ?>" rel="stylesheet">
        <link href="<?php echo base_url("css/social.css") ?>" rel="stylesheet">

        <link rel="stylesheet" href="<?php echo base_url("css/nav-animation.css"); ?>">
        <link rel="stylesheet" href="<?php echo base_url("css/icon-effects.css"); ?>">

        <script src=""<?php echo base_url("js/modernizr.js"); ?>></script> <!-- Modernizr -->
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
                    <a class="logo" href="#"><img src="<?php echo base_url("img/logo.png"); ?>" alt=""></a>
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
                            <li class="active">Data</li>
                        </ol>
                        <span><h3><?php echo $item['ItemName'] ?></h3></span>
                    </section>
                </section>
                <section class="row">
                    <section class="col-md-4">
                        <ul id="cd-gallery-items" class="cd-container">
                            <li>
                                <ul class="cd-item-wrapper">
                                    <li class="cd-item-front"><a href="#0"><img src="<?php echo base_url("img/img-1.jpg"); ?>" alt="Preview image"></a></li>
                                    <li class="cd-item-middle"><a href="#0"><img src="<?php echo base_url("img/img-2.jpg"); ?>" alt="Preview image"></a></li>
                                    <li class="cd-item-back"><a href="#0"><img src="<?php echo base_url("img/img-3.jpg"); ?>" alt="Preview image"></a></li>
                                    <li class="cd-item-out"><a href="#0"><img src="<?php echo base_url("img/img-4.jpg"); ?>" alt="Preview image"></a></li>
                                    <!-- <li class="cd-item-out">...</li> -->
                                </ul> <!-- cd-item-wrapper -->

                                <nav>
                                    <ul class="cd-item-navigation">
                                        <li><a class="cd-img-replace" href="#0">Prev</a></li>
                                        <li><a class="cd-img-replace" href="#0">Next</a></li>
                                    </ul>
                                </nav>


                            </li>
                        </ul>
                    </section>
                    <section class="col-md-8">
                        <section class="product-description">
                            <?php
                            echo $item['ItemDes'];
                            ?>
                        </section>
                        <section class="product-sizes">


                            <div class="btn-group" data-toggle="buttons">
                                <label class="btn btn-primary active square-btn-small intro-font">
                                    <input type="radio" name="options" id="option1" autocomplete="off"> S
                                </label>
                                <label class="btn btn-primary square-btn-small intro-font">
                                    <input type="radio" name="options" id="option2" autocomplete="off"> M
                                </label>
                                <label class="btn btn-primary square-btn-small intro-font">
                                    <input type="radio" name="options" id="option3" autocomplete="off"> L
                                </label>
                                <label class="btn btn-primary square-btn-small intro-font">
                                    <input type="radio" name="options" id="option4" autocomplete="off"> XL
                                </label>
                            </div>
                        </section>
                        <section class="col-md-12" style="padding-left:0px;">
                            <section class="buy-btn-panel">
                                <section class="row">
                                    <section class="col-md-4">
                                        <button class="square-btn-big pull-left">Add to Cart</button>
                                    </section>
                                    <section class="col-md-4">
                                        <p><span class="buy-price"><?php echo $item['ItemPrice']; ?> LKR</span><br>
                                            No extra costs</p>
                                    </section>
                                    <section class="col-md-4 social-share">
                                        <a href="https://www.facebook.com/bootsnipp"><i id="social" class="fa fa-facebook" data-toggle="tooltip" data-placement="top" title="Share"></i></a>
                                        <a href="https://twitter.com/bootsnipp"><i id="social" class="fa fa-twitter" data-toggle="tooltip" data-placement="top" title="Share"></i></a>
                                        <a href="https://plus.google.com/+Bootsnipp-page"><i id="social" class="fa fa-google-plus" data-toggle="tooltip" data-placement="top" title="Share"></i></a>
                                        <a href="mailto:bootsnipp@gmail.com"><i id="social" class="fa fa-envelope" data-toggle="tooltip" data-placement="top" title="Share"></i></a>
                                    </section>
                                    </row>
                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4>You might also like</h4>
                        <div class="well">
                            <div id="myCarousel" class="carousel slide">

                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                </ol>

                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="row">
                                            <?php
                                            foreach ($itemByType as $it) {
                                                $title = $it['ItemTitle'];
                                                $itemID = $it['ItemID'];
                                                $trimTitle = trim($title);
                                                $finalTitle = str_replace(" ", "-", $trimTitle);
                                                echo '<div class = "col-md-2"><a href = "'.  base_url('shop/buy/'.$itemID.'/'.$finalTitle).'" class = "thumbnail"><img src = "' .  base_url($it['ItemImg']). '" alt = "Image" style = "max-width:100%;" class = "img-responsive"/></a></div>';
                                            }
                                            ?>
                                        </div><!--/row-fluid-->
                                    </div><!--/item-->

                                    <div class="item">
                                        <div class="row">
                                            <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" class="img-responsive"/></a></div>
                                            <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" class="img-responsive"/></a></div>
                                            <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" class="img-responsive"/></a></div>
                                            <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" class="img-responsive"/></a></div>
                                            <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" class="img-responsive"/></a></div>
                                            <div class="col-md-2"><a href="#x" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;" class="img-responsive"/></a></div>
                                        </div><!--/row-fluid-->
                                    </div><!--/item-->

                                </div><!--/carousel-inner-->

                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
                            </div><!--/myCarousel-->

                        </div><!--/well-->
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
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url("js/jquery.mixitup.min.js"); ?>"></script>
        <script src="<?php echo base_url("js/filter.js"); ?>"></script> <!-- Resource jQuery -->
        <script src="<?php echo base_url("js/product-slider.js"); ?>"></script> <!-- Resource jQuery -->
        <!--<script src="js/other.js"></script>-->

        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
</html>
