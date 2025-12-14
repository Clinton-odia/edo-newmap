
<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



<!-- Fav Icon -->
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&amp;display=swap" rel="stylesheet">

<?php wp_head(); ?>
</head>


<!-- page wrapper -->
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <!-- <div class="loader-wrap">
            <div class="preloader"> -->
                <!--<div class="preloader-close">Preloader Close</div>-->
                <!-- <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="d" class="letters-loading">
                                d
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="f" class="letters-loading">
                                f
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="w" class="letters-loading">
                                w
                            </span>
                            <span data-text-preloader="m" class="letters-loading">
                                m
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div> -->
        <!-- preloader end -->


        <!-- search-popup -->
        <!-- <div id="search-popup" class="search-popup">
            <div class="close-search"><span>Close</span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="https://www.fastrackportal.com/edofewma/index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search EDOFEWMA" required >
                                <input type="submit" value="Search Now!" class="theme-btn style-four" style="background: #309E5A;">
                            </fieldset>
                        </div>
                    </form> -->
                    <!--<h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="index.html">Finance</a></li>
                        <li><a href="index.html">Idea</a></li>
                        <li><a href="index.html">Service</a></li>
                        <li><a href="index.html">Growth</a></li>
                        <li><a href="index.html">Plan</a></li>
                    </ul>-->
                <!-- </div>
            </div>
        </div> -->
        <!-- search-popup end -->
                        <div id="search-popup" class="search-popup">
    <div class="close-search"><span>Close</span></div>
    <div class="popup-inner">
        <div class="overlay-layer"></div>
        <div class="search-form">
            
            <form method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="form-group">
                    <fieldset>
                        <input type="search" class="form-control" name="s" value="<?php echo get_search_query(); ?>" placeholder="Search EDO NEWMAP-EIB" required>
                        
                        <input type="submit" value="Search Now!" class="theme-btn style-four" style="background: #309E5A;">
                    </fieldset>
                </div>
            </form>

        </div>
    </div>
</div>

        <!-- sidebar cart item -->
        <div class="xs-sidebar-group info-group info-sidebar" style="background:#076a3c">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget"><i class="fal fa-times"></i></a>
                    </div>
                    <div class="sidebar-textwidget" style="background:#076a3c">
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <img src="<?php echo get_template_directory_uri(); ?>assets/images/logo-sidebar.png" alt="" />
                                </div>
                                <div class="content-box">
                                    <h4 class="mb-1">NEWSLETTER</h4>
                                    <p class="text-white small mb-3" style="line-height:1.2em">Complete the form below to subscribe to our newsletter.</p>
                                    <form action="https://www.fastrackportal.com/edofewma/index.html" method="post" class="booking-form">
                                        <div class="form-group">
                                            <input type="text" name="fname" placeholder="First Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="lname" placeholder="Last Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                        <div class="form-group message-btn">
                                            <button type="submit">Subscribe Now</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="contact-info">
                                    <h4>Contact Info</h4>
                                    <ul>
                                        <li>5th Floor, Block D, Secretariat Complex, Sapele Road,Benin City, Edo State, Nigeria.</li>
                                        <li>+2348173150000, +2348173750000</li>
                                        <li>edonewmapeib@gmail.com</li>
                                    </ul>
                                </div>
                                <!--<ul class="social-box">
                                    <li class="facebook"><a href="#" class="fab fa-facebook-f"></a></li>
                                    <li class="twitter"><a href="#" class="fab fa-twitter"></a></li>
                                    <li class="linkedin"><a href="#" class="fab fa-linkedin-in"></a></li>
                                    <li class="instagram"><a href="#" class="fab fa-instagram"></a></li>
                                </ul>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->


        <!-- main header -->
        <header class="main-header style-one">
            <!-- header-top -->
            <div class="header-top" style="background: #309E5A;">
                <div class="auto-container">
                    <div class="top-inner clearfix">
                        <div class="left-column pull-left clearfix">
                            <div class="weathre-box"><i class="flaticon-sunny-day-or-sun-weather text-white"></i>Email: edonewmapeib@gmail.com |</div>
                            <!--<ul class="links-box clearfix">
                                <li><a href="index.html">In my area</a></li>
                                <li><a href="index.html">Faq’s</a></li>
                                <li><a href="index.html">Government</a></li>
                            </ul>-->
                        </div>
                        <div class="right-column pull-right clearfix">
                            <ul class="info-list clearfix">
                                <li><i class="flaticon-phone-with-wire text-white"></i>+2348173150000, +2348173750000 
</li>
                                <!--<li><i class="flaticon-fast text-white"></i><a href="index.html">Today: 09.00 to 18.45</a></li>-->
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="https://x.com/edonewmap_eib"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=61576501017541"><span class="fab fa-facebook-square"></span></a></li>
                        <!-- <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li> -->
                        <li><a href="https://www.instagram.com/edonewmap_eib"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
<style>
.sidebar-info-contents .content-inner .logo {
  padding:0px 0px 40px;
}
    
    .main-header .logo-box {
    position: relative;
    padding: 15px 0px;
    }
    .sec-pad{
    padding: 45px 0px 70px 0px;
  }
  /* --- NEW CODE TO RESIZE LOGO-4.PNG --- */
.main-header .logo-box figure.logo img {
    /* INCREASED HEIGHT: Try a larger value like 120px */
    max-height: 80px; 
    
    /* Increased width to match height adjustment */
    max-width: 300px; 
    
    height: auto; 
    width: auto;
}
</style>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="container-fluid" style="width:80%">
                    <div class="outer-box clearfix">
                        <div class="logo-box pull-left">
                            <figure class="logo"><a href="<?php echo home_url('/')?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-4.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix pull-right">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="<?php echo home_url("/") ?>">Home</a></li>   
                                        <!--<li class="current dropdown"><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="index.html">Home Page 01</a></li>
                                                <li><a href="index-2.html">Home Page 02</a></li>
                                                <li><a href="index-onepage.html">OnePage Home</a></li>
                                                <li><a href="index-rtl.html">RTL Home</a></li>
                                                <li class="dropdown"><a href="index.html">Header Style</a>
                                                    <ul>
                                                        <li><a href="index.html">Header Style 01</a></li>
                                                        <li><a href="index-2.html">Header Style 02</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>-->
                                        <!-- <li class="dropdown current"><a href="#">About Us</a>
                                            <ul>
                                                <li><a href="#">Overview</a></li>
                                                <li><a href="mandate.html">Mandate</a></li>
                                                <li><a href="vision.html">Vision</a></li>
                                                <li><a href="mission.html">Mission</a></li>
                                                <li><a href="what.html">What We Do</a></li>
                                                <li><a href="organogram.html">Organogram</a></li>
                                                <li><a href="ceo.html">Chief Executive Officer</a></li>
                                                 -->
                                                <!--<li class="dropdown"><a href="index.html">Portfolio</a>
                                                    <ul>
                                                        <li><a href="portfolio.html">Title Overlay</a></li>
                                                        <li><a href="portfolio-2.html">Title Under Image</a></li>
                                                        <li><a href="portfolio-3.html">Masonry View</a></li>
                                                    </ul>
                                                </li>-->
                                                <!--<li><a href="faq.html">Faq’s</a></li>
                                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                                <li><a href="error.html">404</a></li>-->
                                            <!-- </ul>
                                        </li> -->
                                        <li class="dropdown"><a href="<?php echo site_url('/overview'); ?>">About Us</a>
                                           <ul>
                                                <li><a href="<?php echo site_url('/overview'); ?>">Overview</a></li>
                                                <li><a href="<?php echo site_url('/mandate'); ?>">Mandate</a></li>
                                                <li><a href="<?php echo site_url('/vision'); ?>">Vision</a></li>
                                                <li><a href="<?php echo site_url('/mission'); ?>">Mission</a></li>
                                                <li><a href="<?php echo site_url('/what'); ?>">What We Do</a></li>
                                                <li><a href="<?php echo site_url('/stakeholders'); ?>">Stakeholders</a></li>
                                                <li><a href="<?php echo site_url('/director'); ?>">SPC/CEO</a></li>
                                                
                                                
                                            </ul>
                                        </li> 
                                        
                                        <li class="dropdown"><a href="#">Departments &amp; Functions</a>
                                            <ul> 
                                               <li><a href="<?php echo site_url('/hr'); ?>">HR./Administration /Project Secretary</a></li>
                                                <li><a href="<?php echo site_url('/safeguards'); ?>">Safeguards</a></li>
                                                <li><a href="<?php echo site_url('/fiduciary'); ?>" ></a>fiduciary Directorate</a></li>
                                                <li><a href="<?php echo site_url('/remediation'); ?>">Remediation/ Adaptive/Mitigation</a></li>
                                                <li><a href="<?php echo site_url('/Engineering'); ?>">Engineering Operations</a></li>
                                                <li><a href="<?php echo site_url('/legal'); ?>">Legal &amp; Communication</a></li>
                                                <li><a href="<?php echo site_url('/monitoring'); ?>">Monitoring &amp; Evaluation</a></li>
                                            </ul>
                                        </li>  
                                        <li class=" "><a href="<?php echo site_url('/projects')?>">Projects</a></li> 
                                        <li class=" "><a href="<?php echo site_url('/news')?>">News</a></li> 
                                        <!-- <li class="dropdown"><a href="#">Media Center</a>
                                            <ul>
                                                <li><a href="news.html">News</a></li>
                                               
                                                        <li><a href="photo.html">Photo Gallery</a></li>
                                                        <li><a href="video.html">Video Gallery</a></li>
                                                   
                                               
                                            </ul>
                                        </li> -->
                                        
                                        <!--<li class="dropdown"><a href="index.html">Events</a>
                                            <ul>
                                                <li><a href="event.html">Grid View</a></li>
                                                <li><a href="event-2.html">List View</a></li>
                                                <li><a href="event-details.html">Single Event</a></li>
                                            </ul>
                                        </li>-->  
                                        <!--<li class="dropdown"><a href="index.html">News</a>
                                            <ul>
                                                <li><a href="blog.html">Grid View</a></li>
                                                <li><a href="blog-2.html">List View With SB</a></li>
                                                <li><a href="blog-details.html">Single Post</a></li>
                                            </ul>
                                        </li>--> 
                                        <li><a href="<?php echo site_url('/contact'); ?>">Contact</a></li>   
                                    </ul>
                                </div>
                            </nav>
                            <div class="menu-right-content clearfix">
                                <!--<div class="language-box">
                                    <span class="text"><i class="flaticon-world"></i>Eng</span>
                                    <ul class="language-list clearfix">
                                        <li><a href="index.html">Eng</a></li>
                                        <li><a href="index.html">Chi</a></li>
                                        <li><a href="index.html">Spa</a></li>
                                        <li><a href="index.html">Hin</a></li>
                                    </ul>
                                </div>-->
                                <ul class="other-option clearfix">
                                    <li class="search-btn">
                                        <button type="button" class="search-toggler"><i class="far fa-search"></i></button>
                                    </li>
                                    <li class="nav-box">
                                        <div class="nav-toggler navSidebar-button"><i class="fas fa-th-large"></i></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="container-fluid" style="width:80%">
                    <div class="outer-box clearfix">
                        <div class="logo-box pull-left">
                            <figure class="logo"><a href="<?php echo home_url('/')?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-4.png" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix pull-right">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                            <div class="menu-right-content clearfix">
                               <!-- <div class="language-box">
                                    <span class="text"><i class="flaticon-world"></i>Eng</span>
                                    <ul class="language-list clearfix">
                                        <li><a href="index.html">Eng</a></li>
                                        <li><a href="index.html">Chi</a></li>
                                        <li><a href="index.html">Spa</a></li>
                                        <li><a href="index.html">Hin</a></li>
                                    </ul>
                                </div>-->
                                <ul class="other-option clearfix">
                                    <li class="search-btn">
                                        <button type="button" class="search-toggler"><i class="far fa-search"></i></button>
                                    </li>
                                    <li class="nav-box">
                                        <div class="nav-toggler navSidebar-button"><i class="fas fa-th-large"></i></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="https://x.com/edonewmap_eib"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=61576501017541"><span class="fab fa-facebook-square"></span></a></li>
                        <!-- <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li> -->
                        <li><a href="https://www.instagram.com/edonewmap_eib"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->



