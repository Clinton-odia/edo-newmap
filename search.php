<?php get_header(); ?>

<!-- <section class="page-title" style="padding: 150px 0; background-size: cover; background-position: center; background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/bgnd-1.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <div class="title centred">
                <h1 style="color: #fff;">Search Results</h1>
            </div>
        </div>
    </div>
</section> -->

<section class="sec-pad centred">
    <div class="auto-container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-12 col-sm-12">
                
                <div class="sec-title">
                    <h2><?php printf( esc_html__( 'Results for: %s', '_s' ), '<span class="text-danger">' . get_search_query() . '</span>' ); ?></h2>
                    <!-- <div class="title-shape"></div> -->
                </div>

                <?php if ( have_posts() ) : ?>

                    <div class="text-left mt-5">
                        <?php while ( have_posts() ) : the_post(); ?>
                            
                            <div class="search-item" style="margin-bottom: 40px; border-bottom: 1px solid #eee; padding-bottom: 30px;">
                                <h3 style="font-size: 24px; margin-bottom: 10px;">
                                    <a href="<?php the_permalink(); ?>" style="color: #222;"><?php the_title(); ?></a>
                                </h3>
                                <div class="text">
                                    <?php the_excerpt(); ?>
                                </div>
                                <div class="mt-3">
                                    <a href="<?php the_permalink(); ?>" class="theme-btn btn-style-one" style="padding: 10px 30px; font-size: 14px;">Read More</a>
                                </div>
                            </div>

                        <?php endwhile; ?>
                    </div>

                    <div class="pagination-wrapper centred mt-5">
                        <?php 
                        the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => '<i class="flaticon-left-arrow"></i>',
                            'next_text' => '<i class="flaticon-right-arrow"></i>',
                        ) ); 
                        ?>
                    </div>

                <?php else : ?>

                    <div class="error-inner">
                        <h3>Nothing Found</h3>
                        <div class="text">
                            Sorry, but nothing matched your search terms. Please try again with some different keywords.
                        </div>
                        
                        <div class="mt-4" style="max-width: 500px; margin: 0 auto;">
                            <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                                <div class="form-group">
                                    <input type="search" class="form-control" placeholder="Search again..." value="<?php echo get_search_query(); ?>" name="s" style="padding: 15px; border-radius: 5px; border: 1px solid #ddd; width: 100%;">
                                </div>
                            </form>
                        </div>
                        
                        <div class="mt-5">
                            <a href="<?php echo home_url(); ?>" class="theme-btn btn-style-one">Back to Home</a>
                        </div>
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>