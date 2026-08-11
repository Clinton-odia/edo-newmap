<?php
/*
Template Name: Media & Photo Gallery
*/

get_header(); ?>

<section class="page-title" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/bgnd-1.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title centred">
                <h1 class="text-white"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="portfolio-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
            <h6><i class="flaticon-star text-success"></i><span>Media & Projects Highlights</span><i class="flaticon-star text-success"></i></h6>
            <h2>Photo & Video Gallery</h2>
            <div class="title-shape"></div>
        </div>

        <div class="gallery-container mt-4">
            <?php
            while (have_posts()) : the_post();
                // 1. Output any page content or plugin shortcodes added in WP Admin editor
                the_content();
            endwhile;

            // 2. Pre-wired Plugin Shortcode Action Hooks
            // When Envira Gallery / Modula / NextGEN plugin is installed later, shortcodes will render here automatically
            if (shortcode_exists('envira-gallery')) {
                echo do_shortcode('[envira-gallery id="media-gallery"]');
            } elseif (shortcode_exists('modula')) {
                echo do_shortcode('[modula id="media-gallery"]');
            } else {
                // Fallback Grid Layout until user installs & configures their gallery plugin
                ?>
                <div class="row clearfix">
                    <?php
                    // Query recent project photos as fallback items
                    $projects_query = new WP_Query(array(
                        'post_type'      => array('project', 'post'),
                        'posts_per_page' => 6,
                        'has_password'   => false,
                    ));

                    if ($projects_query->have_posts()) :
                        while ($projects_query->have_posts()) : $projects_query->the_post();
                            if (has_post_thumbnail()) :
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="portfolio-block-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" class="lightbox-image" data-fancybox="gallery">
                                        <?php the_post_thumbnail('medium_large', array('class' => 'img-fluid rounded')); ?>
                                    </a>
                                </figure>
                                <div class="content-box">
                                    <div class="text">
                                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                            endif;
                        endwhile;
                        wp_reset_postdata();
                    else :
                    ?>
                        <div class="col-12 text-center py-5">
                            <p class="lead text-muted">Gallery photos will appear here once uploaded or when your Gallery plugin is activated.</p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
