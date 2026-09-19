<?php
/**
 * Default Page Template for Privacy Policy (slug: privacy-policy)
 * Automatically loaded by WordPress for any page with slug 'privacy-policy'
 *
 * @package edonewman-theme
 */

get_header(); ?>

<!-- <section class="page-title" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/bgnd-1.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title centred">
                <h1 class="text-white"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section> -->

<style>
    /* Privacy Policy Typography & Line Spacing */
    .privacy-content {
        line-height: 1.85 !important;
        font-size: 1.05rem;
        color: #4a5568;
    }
    
    .privacy-content p {
        margin-bottom: 1.5rem !important;
        line-height: 1.85 !important;
    }
    
    .privacy-content h4 {
        margin-top: 2.25rem !important;
        margin-bottom: 1rem !important;
        font-size: 1.25rem;
        line-height: 1.4;
    }

    .privacy-content ul {
        margin-bottom: 1.75rem !important;
        padding-left: 1.5rem;
    }

    .privacy-content li {
        margin-bottom: 0.75rem !important;
        line-height: 1.8 !important;
    }

    .privacy-content .bg-light {
        line-height: 1.8 !important;
        padding: 1.25rem 1.5rem !important;
    }
</style>

<section class="privacy-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
            <h6><i class="flaticon-star text-success"></i><span>Data Protection & Privacy</span><i class="flaticon-star text-success"></i></h6>
            <h2>Privacy Policy</h2>
            <div class="title-shape"></div>
        </div>

        <div class="row justify-content-center mt-5">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm rounded-lg p-4 p-md-5 bg-white">
                    <div class="privacy-content text-secondary">
                        <?php
                        while (have_posts()) : the_post();
                            the_content();
                        endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
