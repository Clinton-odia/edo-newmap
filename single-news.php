<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <section class="page-title" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/bgnd-1.jpg); padding: 80px 0px 23px 0px;">
        <div class="auto-container">
            </div>
    </section>

    <section class="sidebar-page-container sec-pad">
        <div class="auto-container">
            <div class="row clearfix justify-content-center">

                <div class="col-lg-10 col-md-12 col-sm-12">
                    <div class="blog-details-content">
                        <article class="inner-box" id="post-<?php the_ID(); ?>">
                            
                            <div class="content-box">
                                
                                <div class="mb-4 text-center">
                                    <span class="badge badge-success mb-2" style="background-color: #2BA057;">
                                        <?php 
                                            $categories = get_the_category();
                                            if ( ! empty( $categories ) ) {
                                                echo esc_html( $categories[0]->name );   
                                            }
                                        ?>
                                    </span>
                                    
                                    <h2><?php the_title(); ?></h2>
                                    
                                    <ul class="post-info clearfix justify-content-center mt-2" style="display:flex; list-style:none; padding:0; gap: 15px; color:#888;">
                                        <li><i class="far fa-user"></i> <?php the_author(); ?></li>
                                        <li><i class="far fa-calendar"></i> <?php echo get_the_date(); ?></li>
                                    </ul>
                                    <hr>
                                </div>

                                <!-- <?php if ( has_post_thumbnail() ) : ?>
                                    <figure class="image-box mb-5">
                                        <?php the_post_thumbnail( 'large', array( 'class' => 'img-fluid', 'style' => 'width:100%; height:auto;' ) ); ?>
                                    </figure>
                                <?php endif; ?> -->

                                <div class="text text-justify" style="font-size: 18px; line-height: 1.8;">
                                    <?php the_content(); ?>
                                </div>

                                <!-- <div class="post-share-option clearfix mt-5 pt-4 border-top">
                                    <div class="pull-left">
                                        <strong>Tags:</strong> <?php the_tags( '', ', ', '' ); ?>
                                    </div>
                                </div> -->

                            </div>
                        </article>
                        
                        <div class="post-share-option clearfix mt-5">
                            <div class="pull-left">
                                <?php previous_post_link( '%link', '<i class="flaticon-left-arrow"></i> Prev News', true ); ?>
                            </div>
                            <div class="pull-right">
                                <?php next_post_link( '%link', 'Next News <i class="flaticon-right-arrow"></i>', true ); ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>