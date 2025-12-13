<?php
/*
Template Name: Department subpage
*/

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <!-- <section class="page-title" style="background-image: url(<?php 
        if (has_post_thumbnail()) {
            echo get_the_post_thumbnail_url(get_the_ID(), 'full');
        } else {
            // Default fallback image
            echo get_template_directory_uri() . '/assets/images/background/bgnd-1.jpg';
        }
    ?>);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1 class="text-white"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section> -->
<section class="page-title" style=" background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/bgnd-1.jpg);"></section>
    <section class="about-style-three">
        <div class="auto-container">
            <div class="row clearfix align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div class="content_block_5">
                        <div class="content-box">
                            
                            <div class="sec-title">
                                <h6><i class="flaticon-star"></i><span>Departments &  functions</span></h6>
                                
                                <h2><?php the_title(); ?></h2>
                                
                                <div class="title-shape"></div>
                            </div>

                            <div class="text">
                                <?php the_content(); ?>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>