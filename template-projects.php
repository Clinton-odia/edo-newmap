<?php
/*
Template Name: Projects Portfolio
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
<section class="page-title" style=" background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/bgnd-1.jpg);">
    
</section>
<section class="portfolio-section sec-pad">
    <div class="auto-container">
        
        <div class="sec-title centred">
            <h6><i class="flaticon-star"></i><span>Projects</span><i class="flaticon-star"></i></h6>
            <h2>What We Have Done</h2>
            <div class="title-shape"></div>
        </div>

        <div class="sortable-masonry">
            <div class="items-container row clearfix">
                
                <?php
                // 1. The Query: Get all posts categorized as 'projects'
                $args = array(
                    'post_type'      => 'post',
                    'posts_per_page' => -1, // -1 means show ALL projects
                    'category_name'  => 'projects',
                    'orderby'        => 'date',
                    'order'          => 'DESC'
                );

                $projects = new WP_Query($args);

                if ($projects->have_posts()) : 
                    while ($projects->have_posts()) : $projects->the_post(); 
                ?>

                <div class="col-lg-3 col-md-6 col-sm-12 masonry-item small-column all">
                    <div class="portfolio-block-one">
                        <div class="inner-box">
                            <figure class="image-box">
                                <?php 
                                if (has_post_thumbnail()) {
                                    // We create a link around the image too
                                    echo '<a href="' . get_permalink() . '">';
                                    // 'medium_large' is a good size for these grid items
                                    the_post_thumbnail('medium_large'); 
                                    echo '</a>';
                                } else {
                                    // Fallback if you forget to upload an image
                                    echo '<img src="' . get_template_directory_uri() . '/assets/images/resource/explor-1.jpg" alt="">';
                                }
                                ?>
                            </figure>
                            <div class="content-box">
                                <div class="link">
                                    <a href="<?php the_permalink(); ?>">
                                        <i class="flaticon-right-arrow"></i>
                                    </a>
                                </div>
                                <div class="text">
                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
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
                    <p class="text-center w-100">No projects found. Please add posts to the 'Projects' category.</p>
                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>