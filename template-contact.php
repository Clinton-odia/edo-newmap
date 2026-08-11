<?php 
/*
Template Name: Contact page
*/
get_header(); ?>

<section class="page-title" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/bgnd-1.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title centred">
                <h1 class="text-white">Contact Us</h1>
            </div>
        </div>
    </div>
</section>

<!-- contact-info-section -->
<section class="contact-info-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 info-column mb-4">
                <div class="info-block-one h-100 bg-white p-4 rounded shadow-sm text-center">
                    <div class="icon-box text-success mb-3" style="font-size: 40px;"><i class="flaticon-map"></i></div>
                    <h4 class="font-weight-bold mb-2">Our Office Address</h4>
                    <p class="text-muted">5th Floor, Block D, Secretariat Complex, Sapele Road, Benin City, Edo State, Nigeria.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 info-column mb-4">
                <div class="info-block-one h-100 bg-white p-4 rounded shadow-sm text-center">
                    <div class="icon-box text-success mb-3" style="font-size: 40px;"><i class="flaticon-phone-with-wire"></i></div>
                    <h4 class="font-weight-bold mb-2">Telephone & WhatsApp</h4>
                    <p class="text-muted mb-2">+234 817 315 0000<br>+234 817 375 0000</p>
                    <a href="https://wa.me/2348173150000?text=Hello%20EDO%20NEWMAP-EIB" target="_blank" class="btn btn-sm btn-success mt-2">
                        <i class="fab fa-whatsapp mr-1"></i> Live WhatsApp Chat
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 info-column mb-4">
                <div class="info-block-one h-100 bg-white p-4 rounded shadow-sm text-center">
                    <div class="icon-box text-success mb-3" style="font-size: 40px;"><i class="flaticon-mail"></i></div>
                    <h4 class="font-weight-bold mb-2">Official Email</h4>
                    <p class="text-muted mb-2">edonewmapeib@gmail.com</p>
                    <div class="social-links mt-3">
                        <a href="https://www.facebook.com/profile.php?id=61576501017541" target="_blank" class="btn btn-sm btn-outline-success mx-1"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://x.com/edonewmap_eib" target="_blank" class="btn btn-sm btn-outline-success mx-1"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/edonewmap_eib" target="_blank" class="btn btn-sm btn-outline-success mx-1"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact-style-two -->
<section class="contact-style-two sec-pad">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12">
                <div class="form-inner bg-white p-4 p-md-5 rounded shadow-sm">
                    <div class="sec-title centred">
                        <h6><i class="flaticon-star text-success"></i><span>Drop a Line</span><i class="flaticon-star text-success"></i></h6>
                        <h2>We’re Here to Help You</h2>
                        <div class="title-shape"></div>
                        <p class="text-muted">Fill out this form to send your inquiries or report flood and erosion concerns.</p>
                    </div>

                    <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" id="contact-form" class="default-form mt-4"> 
                        <input type="hidden" name="action" value="newmap_submit_contact">
                        <?php wp_nonce_field('newmap_contact_action', 'newmap_contact_nonce'); ?>

                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 big-column">
                                <div class="form-group mb-3">
                                    <input type="text" name="username" class="form-control p-3" placeholder="Your Full Name" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="email" name="email" class="form-control p-3" placeholder="Email Address" required>
                                </div>
                                <div class="form-group mb-3">
                                    <input type="text" name="subject" class="form-control p-3" placeholder="Subject / Community Location" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 big-column">
                                <div class="form-group mb-3">
                                    <textarea name="message" class="form-control p-3" rows="6" placeholder="Write Your Message or Issue Description..." required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 big-column">
                                <div class="message-btn centred mt-3">
                                    <button class="theme-btn btn-success btn-lg px-5 py-3" type="submit" name="submit-form">Send Message <i class="fas fa-paper-plane ml-2"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Google Map Section -->
        <div class="mt-5 rounded overflow-hidden shadow-sm">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.5384621206354!2d5.623467414706083!3d6.324185927202985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1040d3980f0d1c9b%3A0x9b42525df0075a7b!2sPalm%20House%20Building!5e0!3m2!1sen!2sng!4v1652473633681!5m2!1sen!2sng" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

<?php get_footer(); ?>