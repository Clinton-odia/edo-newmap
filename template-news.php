<?php
/*
Template Name: News Listing
*/

get_header(); ?>

<section class="page-title" style=" background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/bgnd-1.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title centred">
                <h1 class="text-white">Latest News & Updates</h1>
            </div>
        </div>
    </div>
</section>

<style>
    /* Forces the image container to respect dimensions */
    .news-block-one .image-box figure.image {
        width: 100%;
        margin: 0;
        overflow: hidden; /* Ensures no overflow if image zooms on hover */
    }

    /* Forces the image itself to be a specific height */
    .news-block-one .image-box figure.image img {
        width: 100%;            /* Fill the width of the card */
        height: 260px;          /* FIXED HEIGHT: Adjust this value as needed */
        object-fit: cover;      /* PREVENTS STRETCHING: Crops image to fit */
        object-position: center;/* Focuses on the center of the image */
        display: block;
    }
</style>

<section class="news-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="row clearfix">
            
            <?php
            // Pagination Fix: Allows page 1, 2, 3 to work
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            // The Query: Get posts from 'news' category
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 6,        // Show 6 items per page
                'paged'          => $paged,   // Handle pagination
                'category_name'  => 'news',   // IMPORTANT: We will create this category
                'orderby'        => 'date',
                'order'          => 'DESC'
            );

            $news_query = new WP_Query($args);

            if ($news_query->have_posts()) : 
                while ($news_query->have_posts()) : $news_query->the_post(); 
            ?>

            <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                <div class="news-block-one wow fadeInUp" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image">
                                <a href="<?php the_permalink(); ?>">
                                    <i class="fas fa-link"></i>
                                </a>
                                <?php 
                                if (has_post_thumbnail()) {
                                    // We keep medium_large, but CSS will force the crop
                                    the_post_thumbnail('medium_large'); 
                                } else {
                                    // Fallback Image
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
                            
                            <div class="mt-3">
                                <a href="<?php the_permalink(); ?>" class="btn btn-success">Read More <i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php 
                endwhile; 
            ?>

        </div> <div class="pagination-wrapper centred" style="margin-top: 50px;">
            <?php
            echo paginate_links( array(
                'total'        => $news_query->max_num_pages,
                'current'      => $paged,
                'prev_text'    => '<i class="flaticon-left-arrow"></i> Prev',
                'next_text'    => 'Next <i class="flaticon-right-arrow"></i>',
                'type'         => 'list',
                'mid_size'     => 2,
            ) );
            ?>
        </div>

        <?php 
            wp_reset_postdata(); 
        else : 
        ?>
            <div class="text-center">
                <h3>No news found.</h3>
                <p>Please add posts to the "News" category.</p>
            </div>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>