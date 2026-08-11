<?php
/*
Template Name: Notices & Public Announcements
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

<section class="notices-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
            <h6><i class="flaticon-star text-success"></i><span>Public Information</span><i class="flaticon-star text-success"></i></h6>
            <h2>Notices & Official Announcements</h2>
            <div class="title-shape"></div>
        </div>

        <div class="row clearfix mt-5">
            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $notices_args = array(
                'post_type'      => 'notice',
                'posts_per_page' => 9,
                'paged'          => $paged,
                'orderby'        => 'date',
                'order'          => 'DESC'
            );

            $notices_query = new WP_Query($notices_args);

            if ($notices_query->have_posts()) :
                while ($notices_query->have_posts()) : $notices_query->the_post();
                    $priority    = get_post_meta(get_the_ID(), '_notice_priority', true) ?: 'Normal';
                    $expiry_date = get_post_meta(get_the_ID(), '_notice_expiry_date', true);
                    $doc_link    = get_post_meta(get_the_ID(), '_notice_doc_link', true);

                    // Skip if expired
                    if ($expiry_date && strtotime($expiry_date) < time()) {
                        continue;
                    }

                    $badge_class = 'badge-success';
                    if ($priority === 'Urgent') $badge_class = 'badge-danger';
                    if ($priority === 'Public Notice') $badge_class = 'badge-warning text-dark';
            ?>

            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="card h-100 border-0 shadow-sm rounded-lg hover-shadow">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="badge <?php echo esc_attr($badge_class); ?> px-3 py-2 text-uppercase"><?php echo esc_html($priority); ?></span>
                            <small class="text-muted"><i class="far fa-calendar-alt mr-1"></i> <?php echo get_the_date('M d, Y'); ?></small>
                        </div>
                        <h4 class="card-title font-weight-bold mb-3"><a href="<?php the_permalink(); ?>" class="text-dark"><?php the_title(); ?></a></h4>
                        <p class="card-text text-secondary flex-grow-1"><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                        
                        <div class="pt-3 border-top d-flex justify-content-between align-items-center">
                            <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-success">Read Details <i class="fas fa-arrow-right ml-1"></i></a>
                            <?php if ($doc_link) : ?>
                                <a href="<?php echo esc_url($doc_link); ?>" target="_blank" class="btn btn-sm btn-light text-success" title="Download Document"><i class="fas fa-download"></i></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                endwhile;
                wp_reset_postdata();
            else :
            ?>
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info d-inline-block px-5 py-4">
                        <i class="fas fa-info-circle fa-2x mb-3 text-info"></i>
                        <h5>No Active Notices</h5>
                        <p class="mb-0">There are currently no public announcements. Please check back later.</p>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
