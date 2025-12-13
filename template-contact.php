<?php 
/*
Template Name: Contact page
*/
get_header()?>
<title>Contact</title>




        <!-- contact-style-two -->
        <section class="contact-style-two sec-pad">
            <div class="auto-container">
                <div class="form-inner">
                    <div class="sec-title centred">
                        <h6><i class="flaticon-star"></i><span>Drop a Line</span><i class="flaticon-star"></i></h6>
                        <h2>We’re Here to Help You</h2>
                        <div class="title-shape"></div>
                        <p>Fill out this form to send your inquires.</p>
                    </div>
                    <form method="post" action="https://www.fastrackportal.com/edofewma/sendemail.php" id="contact-form" class="default-form"> 
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 big-column">
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Your Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email Address" required="">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" required="" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 big-column">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Write Your Message ..."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 big-column">
                                <div class="message-btn centred">
                                    <button class="theme-btn" type="submit" name="submit-form">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!--<div class="auto-container text-center">
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5384621206354!2d5.623467414706083!3d6.324185927202985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1040d3980f0d1c9b%3A0x9b42525df0075a7b!2sPalm%20House%20Building!5e0!3m2!1sen!2sng!4v1652473633681!5m2!1sen!2sng" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                   
                </div>-->
            </div>
        </section>
        <!-- contact-style-two end -->

<?php get_footer()?>