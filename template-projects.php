<?php
/*
Template Name: Projects Portfolio
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
            <h6><i class="flaticon-star text-success"></i><span>Edo Interventions</span><i class="flaticon-star text-success"></i></h6>
            <h2>Projects Portfolio</h2>
            <div class="title-shape"></div>
        </div>

        <div class="sortable-masonry mt-4">
            <div class="items-container row clearfix">
                <?php
                // Retrieve IDs of custom post type 'project'
                $cpt_project_ids = get_posts(array(
                    'post_type'      => 'project',
                    'posts_per_page' => -1,
                    'fields'         => 'ids',
                ));

                // Retrieve IDs of standard 'post' entries in category 'projects'
                $cat_project_ids = get_posts(array(
                    'post_type'      => 'post',
                    'category_name'  => 'projects',
                    'posts_per_page' => -1,
                    'fields'         => 'ids',
                ));

                $all_project_ids = array_unique(array_merge($cpt_project_ids, $cat_project_ids));
                if (empty($all_project_ids)) {
                    $all_project_ids = array(0);
                }

                $projects = new WP_Query(array(
                    'post_type'      => array('project', 'post'),
                    'post__in'       => $all_project_ids,
                    'posts_per_page' => -1,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                ));

                if ($projects->have_posts()) : 
                    while ($projects->have_posts()) : $projects->the_post(); 
                        $status   = get_post_meta(get_the_ID(), '_project_status', true);
                        $location = get_post_meta(get_the_ID(), '_project_location', true);
                ?>

                <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column mb-4">
                    <div class="portfolio-block-one h-100">
                        <div class="inner-box shadow-sm rounded overflow-hidden h-100 bg-white d-flex flex-column">
                            <figure class="image-box m-0 position-relative">
                                <?php 
                                if (has_post_thumbnail()) {
                                    echo '<a href="' . get_permalink() . '">';
                                    the_post_thumbnail('medium_large', array('class' => 'w-100', 'style' => 'height: 220px; object-fit: cover;')); 
                                    echo '</a>';
                                } else {
                                    echo '<a href="' . get_permalink() . '"><img src="' . get_template_directory_uri() . '/assets/images/resource/explor-1.jpg" alt="" style="height: 220px; width: 100%; object-fit: cover;"></a>';
                                }
                                ?>
                                <?php if ($status) : ?>
                                    <span class="position-absolute badge badge-success p-2" style="top: 10px; right: 10px; z-index: 2;"><?php echo esc_html($status); ?></span>
                                <?php endif; ?>
                            </figure>
                            <div class="content-box p-3 flex-grow-1 d-flex flex-column justify-content-between">
                                <div>
                                    <?php if ($location) : ?>
                                        <small class="text-success font-weight-bold d-block mb-1"><i class="fas fa-map-marker-alt mr-1"></i> <?php echo esc_html($location); ?></small>
                                    <?php endif; ?>
                                    <h4 class="mb-2"><a href="<?php the_permalink(); ?>" class="text-dark font-weight-bold"><?php the_title(); ?></a></h4>
                                </div>
                                <div class="link mt-3 pt-2 border-top">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-success w-100">
                                        View Details <i class="flaticon-right-arrow ml-1"></i>
                                    </a>
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
                    <p class="text-center w-100 py-5 text-muted">No projects found. Please add entries in WP Admin -> Projects.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>