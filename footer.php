<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>
       <!-- main-footer -->
      <footer class="main-footer">
            
            <div class="widget-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>About Us</h3>
                                </div>
                                <div class="widget-content">
                                    <p>Edo NEWMAP-EIB is the European Investment Bank-Assisted Nigeria Climate Adaptation - Erosion and Watershed Project aimed at reducing land degradation</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Quick Links</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="<?php echo site_url('/hr')?>">Departments</a></li>
                                        <li><a href="<?php echo site_url('/projects')?>">Projects</a></li>
                                        <!-- <li><a href="#">Photo Gallery</a></li> -->
                                        <li><a href="<?php echo site_url('/news') ?>">News</a></li>
                                        <li><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contact Info</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="info clearfix">
                                        <li>
                                            <!--<h5>Location</h5>-->
                                            <p>5th Floor, Block D, Secretariat Complex, Sapele Road,Benin City, Edo State, Nigeria.</p>
                                        </li>
                                        <li>
                                            <h5>Phone</h5>
                                            <p>+2348173150000, +2348173750000</p>
                                        </li>
                                        <li>
                                            <h5>Email</h5>
                                            <p>edonewmapeib@gmail.com</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget register-widget">
                                <div class="inner-box" style="background-color:#076a3c">
                                    <div class="upper">
                                        <div class="icon-box"><i class="flaticon-edit text-success"></i></div>
                                        <h4>Register Your Issue</h4>
                                    </div>
                                    <p>Here you can report an issue and make requests.</p>
                                    <a href="<?php echo site_url('/contact'); ?>">Report Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           <div class="footer-bottom"  style="background-color:#076a3c">
                <div class="auto-container">
                    <div class="bottom-inner clearfix">
                        <div class="copyright pull-left text-white">
                            <p class="text-white">&copy; 2026<!-- <a href="index.html">Whitehall City Govt.</a>--> All Rights Reserved. EDO NEWMAP-EIB</p>
                        </div>
                        <!--<ul class="footer-nav clearfix pull-right">
                            <li><a href="index.html">FAQ’s</a></li>
                            <li><a href="index.html">Covid’19 Updates </a></li>
                            <li><a href="index.html">Government</a></li>
                        </ul>-->
                    </div>
                </div>
            </div>
        </footer>
        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fas fa-angle-up"></span>
        </button>
    </div>


<?php wp_footer(); ?>

</body>
</html>
