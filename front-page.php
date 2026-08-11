<?php get_header(); ?>

<?php
// Query for Urgent or Public Notices
$urgent_notice_query = new WP_Query(array(
    'post_type'      => 'notice',
    'posts_per_page' => 1,
    'meta_query'     => array(
        array(
            'key'     => '_notice_priority',
            'value'   => array('Urgent', 'Public Notice'),
            'compare' => 'IN'
        )
    )
));

if ($urgent_notice_query->have_posts()) :
    while ($urgent_notice_query->have_posts()) : $urgent_notice_query->the_post();
?>
<div class="bg-danger text-white py-2 px-3 alert-dismissible fade show m-0 text-center position-relative" style="z-index: 1000;" role="alert">
    <div class="auto-container d-flex justify-content-between align-items-center">
        <span class="small font-weight-bold text-uppercase">
            <i class="fas fa-exclamation-triangle mr-2"></i> <strong>ANNOUNCEMENT:</strong> <?php the_title(); ?>
        </span>
        <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-light text-danger font-weight-bold ml-3 py-0">View Notice</a>
    </div>
</div>
<?php
    endwhile;
    wp_reset_postdata();
endif;
?>
<!-- .banner-carousel .slide-item:before {
    
    background: none;} -->
</style>
<!--background: #252638;-->
<title>EDO NEWMAP-EIB, Benin</title>
        <!-- banner-section -->
        <section class="banner-section style-one" style="height:600px">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-5.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h6 class="text-white"><i class="flaticon-star text-white"></i>EDO NEWMAP-EIB</h6>
                            <p class="font-weight-bold" style="font-size:65px; line-height:1.2em; text-shadow: 0px 5px 5px rgba(26, 22, 22, 0.79); ">Enhancing Lives, Communities &amp;<br> the Environment.</p>
                            <!--<p>Righteous indignation and dislike men who are so beguiled & demoralized by the charms of pleasure of the moment.</p>-->
                            <!--<div class="btn-box">
                                <a href="index.html" class="theme-btn">Read More</a>
                            </div>-->
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-8.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h6 class="text-white"><i class="flaticon-star text-white"></i>Iguosa Village gully erosion</h6>
                            <h1 style=" text-shadow: 0px 5px 5px rgba(26, 22, 22, 0.79);">Amazing Transformations, <span class="text-warning">Before &amp; After...</span></h1>
                            <!--<p>Before &amp; After.</p>-->
                            <!--<div class="btn-box">
                                <a href="index.html" class="theme-btn">Read More</a>
                            </div>-->
                        </div> 
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/banner/banner-7.jpg)"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <!--<h6 class="text-white"><i class="flaticon-star text-white"></i>Tourist Attractions</h6>-->
                            <h1 style="text-shadow: 0px 5px 5px rgba(26, 22, 22, 0.79);">Enhancing Landscapes...Restoring Livelihoods.</h1>
                            <!--<p>Undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man.</p>
                            <div class="btn-box">
                                <a href="index.html" class="theme-btn">Read More</a>
                            </div>-->
                        </div> 
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- activities-section -->
       <!-- <section class="activities-section centred bg-color-1">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-garbage-truck"></i></div>
                                <h6>Schedule</h6>
                                <h4>Garbage & Recycling</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-parking"></i></div>
                                <h6>In Effect</h6>
                                <h4>Alternate Side Parking</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-school"></i></div>
                                <h6>Schools</h6>
                                <h4>All Schools are Open</h4>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 single-column">
                            <div class="single-item">
                                <div class="icon-box"><i class="flaticon-taxes"></i></div>
                                <h6>Council Tax</h6>
                                <h4>Pay Your Council Tax</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- activities-section end -->


        <!-- about-section -->
        <section class="about-section sec-pad bg-color-1" style="background-color:#076a3c">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-9 col-md-12 col-sm-12 content-column">
                        <div class="content_block_1">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h6><i class="flaticon-star text-success"></i><span class="text-success">Welcome to EDO NEWMAP-EIB</span></h6>
                                    <h2 class="text-white">Building an Integrated Flood and Erosion Management system. </h2>
                                    <div class="title-shape"></div>
                                </div>
                                <div class="text">
                                    
                                    <p class="text-white">The Edo State Flood, Erosion, and Watershed Management Agency (Edo FEWMA) was founded as the state's principal agency for climate change mitigation, flood and erosion control, catchment and watershed management, and other environmental challenges.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 image-column" style="padding-top:50px">
                        <div class="image_block_1">
                            <div class="image-box">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sidebar2.png" alt="EDO NEWMAP-EIB">
<!--                                <div class="text">
                                    <h4>“Residents Showed Commitment & Courage In this Crucial Situation.”</h4>
                                </div>
-->                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->
<style>
 /*       .explore-block-one .inner-box .content-box .overlay-content{
	background: #309E5A;
}
    .explore-block-one .inner-box:before{
	border: 3px solid #309E5A;
}*/
    .explore-section {
    position: relative;
    overflow: hidden;
    padding: 90px 0px 80px 0px;
}
/* NEW: Fixed Height for 'Projects' Images */
.explore-block-one .image-box img {
    width: 100%;
    height: 260px;      /* Adjust height as needed */
    object-fit: cover;  /* Prevents squishing */
}

/* NEW: Fixed Height for 'News' Images */
.news-block-one .image-box figure.image img {
    width: 100%;
    height: 260px;      /* Adjust height as needed */
    object-fit: cover;  /* Prevents squishing */
}
</style>
        </style>

        <!-- explore-section -->
        <section class="explore-section centred bg-color-2">
    <!-- <figure class="vector-image"><img src="<?php echo get_template_directory_uri(); ?> /assets/images/icons/vector-1.png" alt=""></figure>
    <div class="pattern-layer" style="background-image: url(<?php echo get_template_directory_uri(); ?> /assets/images/shape/shape-1.png);"></div> -->
    <div class="auto-container">
        <div class="sec-title centred light">
          <h2>Projects</h2>
           <h6 class="text-white"><i class="flaticon-star"></i><span>We are proud of our legacy, having helped communities solve complex flood, erosion, and environmental challenges.</span><i class="flaticon-star"></i></h6>
            <div class="title-shape"></div>
        </div>
        <div class="row clearfix">
            
            <?php
            // 1. QUERY THE 4 LATEST PROJECTS for the Homepage (CPT 'project' and posts)
            $project_args = array(
                'post_type'      => array('project', 'post'),
                'posts_per_page' => 4,             
                'orderby'        => 'date',
                'order'          => 'DESC'
            );

            $recent_projects = new WP_Query($project_args);

            if ($recent_projects->have_posts()) :
                while ($recent_projects->have_posts()) : $recent_projects->the_post();
            ?>

            <div class="col-lg-3 col-md-6 col-sm-12 explore-block">
                <div class="explore-block-one wow fadeInUp" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <figure class="image-box">
                            <?php 
                            if (has_post_thumbnail()) {
                                echo '<a href="' . get_permalink() . '">';
                                the_post_thumbnail('medium_large'); 
                                echo '</a>';
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/assets/images/resource/explor-1.jpg" alt="">';
                            }
                            ?>
                        </figure>
                        <div class="content-box">
                            <div class="text">
                                <div class="icon-box"><i class="flaticon-scroll"></i></div>
                                <h4><?php the_title(); ?></h4>
                            </div>
                            <div class="overlay-content">
                                <h4><?php the_title(); ?></h4>
                                <p><?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?></p>
                                <ul class="link-box clearfix">
                                    <li>
                                        <a href="<?php the_permalink(); ?>">
                                            <i class="flaticon-dog"></i>
                                            <span>View Project</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
                endwhile; 
                wp_reset_postdata(); 
            else : 
            ?>
                <p class="text-white text-center w-100">No projects found.</p>
            <?php endif; ?>
            
            <div class="col-lg-12 col-md-6 col-sm-12 mt-4">
                <div class="btn-box"  style="margin-top:70px">
                    <a href="<?php echo site_url('/projects'); ?>" class="btn btn-success btn-lg py-3 pl-3 pr-3">Load More Projects</a>
                </div>
            </div>
            
        </div>
    </div>
</section>
        <!-- explore-section end -->


        <!-- explore-banner -->
<!--        <div class="explore-banner bg-color-1">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="single-item">
                        <div class="title-box">
                            <h3>Recent Documents</h3>
                            <p>Enjoy a pleasure that annoying consequences.</p>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></figure>
                            <h4>Tax_Paid_Challan</h4>
                            <p><a href="index.html">Download the Challan Details file</a></p>
                        </div>
                    </div>
                    <div class="single-item">
                        <div class="inner-box">
                            <figure class="icon-box"><img src="assets/images/icons/icon-1.png" alt=""></figure>
                            <h4>Tender_Schedules</h4>
                            <p><a href="index.html">Download Your List at Free of Cost</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- explore-banner end -->


        <!-- service-section -->
        <section class="service-section" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/service-bg-1.jpg);">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--<div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInLeft animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="police-crime.html">Policing & Crime Department</a></h4>
                                <div class="btn-box"><a href="police-crime.html">More</a></div>
                                <div class="icon-box"><i class="flaticon-police"></i></div>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-lg-12 col-md-12 col-sm-12 title-column">
                        <div class="sec-title centred">
                            <div class="sec-title centred">
                                <!--<h6><i class="flaticon-star"></i><span>Departments</span><i class="flaticon-star"></i></h6>-->
                                <h2>Departments and Functions</h2>
                                <div class="title-shape"></div>
                                <!--<a href="departments.html" class="links">All Departments<i class="flaticon-right-arrow"></i></a>-->
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-lg-3 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInRight animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="tourism-travel.html">Finance & Legal Department</a></h4>
                                <div class="btn-box"><a href="tourism-travel.html">More</a></div>
                                <div class="icon-box"><i class="flaticon-justice"></i></div>
                            </div>
                        </div>
                    </div>-->
                    <div class="col-lg-3 col-md-3 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="<?php echo site_url('/safeguards')?>">Safeguards</a></h4>
                                <div class="btn-box"><a href="<?php echo site_url('/safeguards')?>">More</a></div>
                                <div class="icon-box"><i class="flaticon-traffic-sign"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4 class="mb-4 pb-3"><a href="<?php echo site_url('/fiduciary')?>">Fiduciary Directorate</a></h4>
                                <div class="btn-box"><a href="<?php echo site_url('/fiduciary')?>">More</a></div>
                                <div class="icon-box"><i class="flaticon-statue"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="<?php echo site_url('/remediation')?>">Remediation...</a></h4>
                                <div class="btn-box"><a href="<?php echo site_url('/remediation')?>">More</a></div>
                                <div class="icon-box"><i class="flaticon-chinese-house"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h4><a href="<?php echo site_url('/monitoring')?>">Monitoring...</a></h4>
                                <div class="btn-box"><a href="<?php echo site_url('/monitoring')?>">More</a></div>
                                <div class="icon-box"><i class="flaticon-hospital"></i></div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-12 col-md-6 col-sm-12 text-center">
                    
                    <div class="btn-box"  style="margin-top:10px">
                                <a href="#" class="btn btn-success btn-lg py-3 pl-3 pr-3">Explore all Departments</a>
                            </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- schedules-section -->
      
        <!-- schedules-section end -->


        <!-- solutions-section -->
        <!-- solutions-section end -->


        <!-- testimonial-section -->
        <!-- testimonial-section end -->


        


        <!-- news-section -->
        <section class="news-section bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
            <h6 class="mt-4"><i class="flaticon-star"></i><span>News</span><i class="flaticon-star"></i></h6>
            <h2>Latest From Our Newsroom</h2>
            <div class="title-shape"></div>
        </div>
        <div class="row clearfix">
            
            <?php
            // --- NEWS QUERY START ---
            // Get the 3 latest posts from the 'news' category
            $news_args = array(
                'post_type'      => 'post',
                'posts_per_page' => 3,
                'category_name'  => 'news', // Ensure your category slug is 'news'
                'orderby'        => 'date',
                'order'          => 'DESC'
            );

            $news_query = new WP_Query($news_args);

            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post();
            ?>

            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="<?php the_permalink(); ?>"><i class="fas fa-link"></i></a>
                                <?php 
                                if (has_post_thumbnail()) {
                                    // Shows the featured image
                                    the_post_thumbnail('medium_large'); 
                                } else {
                                    // Fallback if no image
                                    echo '<img src="' . get_template_directory_uri() . '/assets/images/news/n-1.jpg" alt="">';
                                }
                                ?>
                            </figure>
                            <div class="post-date">
                                <h3><?php echo get_the_date('d'); ?><span><?php echo get_the_date('M\'y'); ?></span></h3>
                            </div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                            
                            <div class="">
                                <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
                endwhile; 
                wp_reset_postdata(); // Important to reset data after custom loops
            else : 
            ?>
                <div class="col-12 text-center">
                    <p>No recent news found.</p>
                </div>
            <?php endif; ?>
            <!-- NEWS QUERY END  -->

        </div>
    </div>
</section>

<!-- Partners & Stakeholders Section (TOR §4B) -->
<section class="clients-section bg-light py-5 border-top">
    <div class="auto-container">
        <div class="sec-title centred mb-4">
            <h6><i class="flaticon-star text-success"></i><span>Institutional Support</span><i class="flaticon-star text-success"></i></h6>
            <h3 class="font-weight-bold text-dark">Our Key Development Partners & Stakeholders</h3>
            <div class="title-shape"></div>
        </div>
        <div class="row align-items-center justify-content-center text-center">
            <div class="col-lg-3 col-md-6 col-6 mb-4">
                <div class="partner-card bg-white p-3 rounded shadow-sm">
                    <h5 class="m-0 font-weight-bold text-success"><i class="fas fa-university mr-2"></i> European Investment Bank (EIB)</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mb-4">
                <div class="partner-card bg-white p-3 rounded shadow-sm">
                    <h5 class="m-0 font-weight-bold text-primary"><i class="fas fa-globe-africa mr-2"></i> World Bank Group</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mb-4">
                <div class="partner-card bg-white p-3 rounded shadow-sm">
                    <h5 class="m-0 font-weight-bold text-dark"><i class="fas fa-landmark mr-2"></i> Federal Ministry of Environment</h5>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-6 mb-4">
                <div class="partner-card bg-white p-3 rounded shadow-sm">
                    <h5 class="m-0 font-weight-bold text-success"><i class="fas fa-shield-alt mr-2"></i> Edo State Government</h5>
                </div>
            </div>
        </div>
    </div>
</section>
        
<?php get_footer(); ?>