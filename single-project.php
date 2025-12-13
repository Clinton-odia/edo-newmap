<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="page-title" style="padding: 80px 0px 23px 0px; background-size: cover; background-position: center; background-image: url(<?php 
        if ( has_post_thumbnail() ) {
            echo get_the_post_thumbnail_url( get_the_ID(), 'full' );
        } else {
            echo get_template_directory_uri() . '/assets/images/background/bgnd-1.jpg'; 
        }
    ?>);">
        <div class="auto-container">
            </div>
    </section>        

    <style>
        .page-title:before {
            background: none;
        }
        .theme-btn {
            background: #2BA057;
        }
    </style>        

    <div class="auto-container" style="margin-top:50px">
        <div class="sec-title centred">
            
            <h6><i class="flaticon-star"></i><span>Projects</span><i class="flaticon-star"></i></h6>
            
            <h2><?php the_title(); ?></h2>
            
            <div class="title-shape"></div>
            
            <div class="mt-4 text-justify">
                <?php the_content(); ?>
            </div>

        </div>
    </div>

<?php endwhile; endif; ?>

<?php get_footer(); ?>