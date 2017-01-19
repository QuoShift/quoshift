<?php include '../input.php'; ?>
<!DOCTYPE html>
<!--
	Orig: ThemeForest
	This website is a demonstration created by QuoShift.com. It is a rough mockup.
-->
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->

<html lang="zxx"><!--<![endif]-->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?></title>

    <!-- ALL CSS Files -->

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/elegant-font.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/video.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">



    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="rev-slider/css/settings.css">
    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="rev-slider/css/layers.css">
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="rev-slider/css/navigation.css">
    

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">


</head>
<body>


    <header>
        <!-- HEADER TOP START -->
        <div class="header-top">
            <div class="container">
                <div class="col-md-3 padding0">
                    <div class="logo">
                        <?php 
							if ($logoimage == true) {
								// Show image 
                                echo '<img src="' . $logoimageurl .'">';
							} else {
								echo '<h1><a href="#" id="logo">' . $logo .'</a></h1>';
							}
						?>
                    </div>
                    <!-- logo -->
                </div>
                <div class="col-md-6 padding0">
                    <div class="office-info">
                        <div class="col-xs-4 padding-left0">
                            <div class="address">
                                <i class="icon_pin_alt"></i>
                                <h2>    146 Maroondah Highway, Ringwood</h2>
                                <span>Find us</span>
                            </div>
                        </div>
                        <div class="col-xs-4 padding-left0">
                            <div class="address">
                                <i class="icon_phone"></i>
                                <h2>03 9879 3344</h2>
                                <h2>Fax: 9870 1762</h2>
                                <span>Call us</span>
                            </div>
                        </div>
                        <div class="col-xs-4 padding0">
                            <div class="address">
                                <i class="icon_clock_alt"></i>
                                <h2>Mon - Fri : 9am - 5pm</h2>
                                <h2>Sat: 9am - 1pm</h2>
                                <span>Opening hours</span>
                            </div>
                        </div>
                    </div>
                    <!-- office info -->
                </div>
                <div class="col-md-3 padding-right0">
                    <div class="get-quote pull-right">
                        <a href="#">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- HEADER TOP END -->
        <!-- # -->
        <!-- MAIN MANU START -->
        <div class="main-menu hidden-xs">

            <div class="container">
                <nav id="finanz-menu">
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="responsive-icon">
                        <ul class="nav navbar-nav text-center">
                            <li><a target="_blank" href="#">Home</a></li>
                            <?php 
									// Display nav.
									for ($i = 0; $i < count($nav); $i++) {
										// echo $nav[$i];
										echo '<li><a href="#">' . $nav[$i] . '</a></li>';
									}
								?>
                        </ul>
                        <div class="socials-srearch pull-right">
                            <ul>
                                <li><a href="#"><i class="social_facebook"></i></a></li>
                                <li><a href="#"><i class="social_twitter"></i></a></li>
                                <li><a href="#"><i class="social_googleplus"></i></a></li>
                                <li><a href="#"><i class="social_tumblr"></i></a></li>
                                <li>
                            <form action="#" method="get" class="main-search newsletter">
                                <div class="search-overlay"></div>
                                <div class="scroll-cont">
                                    <div class="search">
                                        <div class="search__bg"></div>
                                        <div class="search__box">
                                            <input type="text" name="s" class="search__input" placeholder="Search"/>
                                            <button type="submit"><i class="arrow_right"></i></button>
                                            <div class="search__line"></div>
                                            <div class="search__close"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
                <!-- /#finanz-menu -->
            </div>
        </div>
        <!-- MAIN MENU END -->
        <div class="menu-bg"></div>
        <div class="menu-burger">☰</div>
        <div class="menu-items ul-li">
            <ul class="text-center">
                <li><a href="#">Home</a></li>
                <?php 
                    // Display nav.
                    for ($i = 0; $i < count($nav); $i++) {
                        // echo $nav[$i];
                        echo '<li><a href="#">' . $nav[$i] . '</a></li>';
                    }
                ?>
            </ul>
        </div>
    </header>

    <!-- SLIDER EXAMPLE -->
    <div class="slider">
        <div id="rev_slider_202_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="concept1" style="background-color:#000000;padding:0px;">
            <!-- START REVOLUTION SLIDER 5.1.1RC fullscreen mode -->
            <div id="rev_slider_202_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.1RC">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-672" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="rev-slider/img/slider101.jpg" data-rotate="0" data-saveperformance="off" data-title="Web Show" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="../images/banner.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="5" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->
                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption Concept-Title tp-shapewrapper  tp-resizeme rs-parallaxlevel-2" id="slide-672-layer-2" data-x="['left','left','left','left']" data-hoffset="['5','5','5','5']" data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','-95']" data-fontsize="['70','70','50','25']" data-lineheight="['70','70','50','18']" data-width="['none','none','none','250']" data-height="none" data-whitespace="['nowrap','nowrap','nowrap','nowrap']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;" data-start="1700" data-splitin="none" data-splitout="none" data-responsive_offset="on" style="z-index: 7; text-align:center;"><span style="color:white;"><?php echo $shortsubtitle; ?></span>
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
            </div>
        </div>
        <!-- END REVOLUTION SLIDER -->
    </div>
    <!-- /#slider -->

    <div class="feature-section" style="padding-bottom:0px; padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="section-title">
                    <div class="sub-title"><span>WE ARE <?php echo $businessname; ?></span></div>
                    <div class="title"><h2>our services</h2></div>
                </div>
                <div class="col-md-4">
                    <div class="fz-post feature-post colmd4">
                        <div class="feature-image">
                            <img src="<?php echo $feature1image; ?>" alt="">
                        </div>
                        <!-- feature-image -->
                        <div class="fz-post-title feature">
                            <h2><?php echo $feature1title; ?></h2>
                        </div>
                        <!-- feature-title -->
                        <div class="fz-post-content feature">
                            <h2><?php echo $feature1title; ?></h2>
                            <p><?php echo $feature1content; ?></p>
                            <div class="fz-button">
                                <a class="fz-btn btn" href="#">Learn More <i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <!-- feature-content -->
                    </div>
                </div>
                <!-- col-md-4 -->
                <div class="col-md-4">
                    <div class="fz-post feature-post colmd4">
                        <div class="feature-image">
                            <img src="<?php echo $feature2image; ?>" alt="">
                        </div>
                        <!-- feature-image -->
                        <div class="fz-post-title feature">
                            <h2><?php echo $feature2title; ?></h2>
                        </div>
                        <!-- feature-title -->
                        <div class="fz-post-content feature">
                            <h2><?php echo $feature2title; ?></h2>
                            <p><?php echo $feature2content; ?></p>
                            <div class="fz-button">
                                <a class="fz-btn btn" href="#">Learn More <i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <!-- feature-content -->
                    </div>
                </div>
                <!-- col-md-4 -->
                <div class="col-md-4">
                    <div class="fz-post feature-post colmd4">
                        <div class="feature-image">
                            <img src="<?php echo $feature3image; ?>" alt="">
                        </div>
                        <!-- feature-image -->
                        <div class="fz-post-title feature">
                            <h2><?php echo $feature3title; ?></h2>
                        </div>
                        <!-- feature-title -->
                        <div class="fz-post-content feature">
                            <h2><?php echo $feature3title; ?></h2>
                            <p><?php echo $feature3content; ?></p>
                            <div class="fz-button">
                                <a class="fz-btn btn" href="#">Learn More <i class="arrow_right"></i></a>
                            </div>
                        </div>
                        <!-- feature-content -->
                    </div>
                </div>
                <!-- col-md-4 -->
            </div>
        </div>
    </div>
    <!-- feature-section -->

    <div id="service" class="service-section padding-top30 padding-bottom50">
        <div class="container">

            <!-- TITLE SECTION -->

            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="fz-post service">
                        <div class="fz-icon service">
                            <i class="icon_check"></i>
                        </div>
                        <div class="fz-service-content">
                            <div class="service-border"></div>

                            <div class="fz-title">
                                <h2><a href="#">A reason to choose you</a></h2>
                            </div>
                            <div class="fz-text">
                                <p>This is just a brief paragraph as to why customers should choose your company over others.</p>
                            </div>
                        </div>
                    </div>
                    <!-- fz-post service -->
                </div>
                <!-- col-md-4 col-sm-6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="fz-post service">
                        <div class="fz-icon service">
                            <i class="icon_check"></i>
                        </div>
                        <div class="fz-service-content">
                            <div class="service-border"></div>

                            <div class="fz-title">

                                <h2><a href="#">Another reason to choose you</a></h2>
                            </div>
                            <div class="fz-text">
                                <p>This is just a brief paragraph as to why customers should choose your company over others.</p>
                            </div>
                        </div>
                    </div>
                    <!-- fz-post service -->
                </div>
                <!-- col-md-4 col-sm-6 -->
                <div class="col-md-4 col-sm-6">
                    <div class="fz-post service">
                        <div class="fz-icon service">
                            <i class="icon_check"></i>
                        </div>
                        <div class="fz-service-content">
                            <div class="service-border"></div>

                            <div class="fz-title">
                                <h2><a href="#">A third awesome reason</a></h2>
                            </div>
                            <div class="fz-text">
                                <p>This is just a brief paragraph as to why customers should choose your company over others.</p>
                            </div>
                        </div>
                    </div>
                    <!-- fz-post service -->
                </div>
                
            </div>
        </div>
    </div>
    <!-- service section -->

    <div class="skill-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 padding-right30">
                    <div class="fz-video">
                        <a class="popup" href="https://www.youtube.com/watch?v=PXSZlFQfhyQ"><span></span></a>
                        <div class="fz-video-post">
                            <img src="img/video/video.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="section-title">
                        <div class="title"><h2><?php echo $secondaryheading; ?></h2></div>
                    </div>
                    <!-- TITLE SECTION -->

                    <div class="fz-text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim.</p>
                    </div>
                  </div>
              </div>
          </div>
      </div>

      
    <!-- skill section -->
    <div class="testimonial padding-bottom70 padding-top70">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title"><h2>testimonial</h2></div>
                    <div class="section-content">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                            <ol class="carousel-indicators">
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="feedback-text dark-bg">
                                        <div class="client-designation">
                                            <span class="name">Ecir Paue</span>
                                            <span class="designation">CEO, Trade center</span>
                                        </div>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="feedback-text dark-bg">
                                        <div class="client-designation">
                                            <span class="name">Ecir Paue</span>
                                            <span class="designation">CEO, Trade center</span>
                                        </div>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="feedback-text dark-bg">
                                        <div class="client-designation">
                                            <span class="name">Ecir Paue</span>
                                            <span class="designation">CEO, Trade center</span>
                                        </div>
                                        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-arrows">
                                <a class="slide-arow left" href="#myCarousel" role="button" data-slide="prev">
                                    <span><i class="arrow_carrot-left"></i></span>
                                </a>
                                <a class="slide-arow right" href="#myCarousel" role="button" data-slide="next">
                                    <span><i class="arrow_carrot-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- col-md-6 -->
                <div class="col-md-6">
                    <div class="call-back">
                        <div class="title">
                            <h2>GET A CALL BACK</h2>
                        </div>
                        <form action="#" method="post">
                            <div class="discussion-type">
                                <select>
                                    <option value="volvo" selected>What type of discussion?</option>
                                    <option value="saab">Business</option>
                                    <option value="vw">Business 1</option>
                                    <option value="audi">Business 2</option>
                                </select>
                            </div>
                            <!-- discussion-type -->
                            <div class="discussion-info">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input type="text" name="name" class="form-control" placeholder="Name*">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone*">
                                    </div>
                                </div>
                                <div class="submit">
                                    <button type="submit">submit <span><i class="arrow_right"></i></span></button>
                                </div>
                            </div>
                            <!-- discussion-info -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial section -->

    

    <footer>
    <div class="footer-widget-section">
        <div class="footer-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-xs-6">
                        <div class="footer-widget about-us">
                            <div class="footer-widget-title">
                                <h2>about us</h2>
                            </div>
                            <div class="footer-widget-text margin-bottom20">
                                <p>We're here to help. Contact us for a free quote.</p>
                            </div>
                            <!-- footer-widget-text -->
                            <div class="address margin-bottom20 ul-li">
                                <ul>
                                    <li class="address"><a href="#"><i class="icon_pin_alt"></i>Address</a></li>
                                    <li class="phone"><a href="#"><i class="icon_phone"></i>Phone</a></li>
                                    <li class="mail"><a href="#"><i class="icon_mail_alt"></i>info@yoursite.com</a></li>
                                </ul>
                            </div>
                            <!-- footer-widget-address -->
                            <div class="social ul-li">
                                <ul>
                                    <li><a href=""><i class="social_facebook"></i></a></li>
                                    <li><a href=""><i class="social_twitter"></i></a></li>
                                    <li><a href=""><i class="social_googleplus"></i></a></li>
                                    <li><a href=""><i class="social_tumblr"></i></a></li>
                                </ul>
                            </div>
                            <!-- footer-widget-social -->
                        </div>
                    </div>
                    <!-- col-md-3 col-sm-6 -->

                    <!-- col-md-3 col-sm-6 -->
                    <div class="col-md-5 col-xs-6">
                        <div class="footer-widget news-letter">
                            <div class="footer-widget-title">
                                <h2>newsletter</h2>
                            </div>
                            <div class="footer-widget-text margin-bottom20">
                                <p>Sign up for our newsletter! Receive specials and news.</p>
                            </div>
                            <form action="#" method="get" class="newsletter">
                                <div class="form-group ">                                     
                                    <input type="email" name="email" placeholder="E-mail" class="form-control"> 
                                    <button type="submit"><i class="arrow_right"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- col-md-3 col-sm-6 -->
                </div> 
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-menu ul-li">

            </div> 
            <div class="Copyright">
                <p>&copy; Copyright 2017. </p>
            </div>
        </div>
    </div>
    </footer>


        <!-- Vendor js -->
    <script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
    <script type='text/javascript' src='http://maps.google.com/maps/api/js?key=AIzaSyC1vKxER7KD_3cih5p6n8921PRgzh1-nbA&#038;ver=4.6.1'></script>
    <!-- Bootstrap js  -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Owl carousel  -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>   
    <!--  countdown  -->
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>
    <!-- waypoints -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <!--  magnific  -->
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <!--  plugins  -->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!-- WOW Animation -->
    <script src="js/wow.min.js"></script>
    <!--[if !IE]><!-->
    <script type="text/javascript">new WOW().init();</script>
    <!--<![endif]-->

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="rev-slider/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems !
     The following part can be removed on Server for On Demand Loading) -->

    <script type="text/javascript" src="rev-slider/js/revolution.extension.actions.min.js"></script>
    
    <script type="text/javascript" src="rev-slider/js/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/revolution.extension.parallax.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="rev-slider/js/revolution.extension.video.min.js"></script>

    <!--  script   -->
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>