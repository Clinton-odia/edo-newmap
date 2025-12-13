<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

    <!-- <section class="page-title" style="background-image: url(<?php echo esc_url( get_template_directory_uri() . '/assets/images/background/bgnd-1.jpg' ); ?>);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1 class="text-white"><?php esc_html_e( 'Error 404', 'edonewman-theme' ); ?></h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'edonewman-theme' ); ?></a></li>
                        <li><?php esc_html_e( 'Page Not Found', 'edonewman-theme' ); ?></li>
					</div>
				</div>
			</div>
		</section> 
	</ul> -->

    <section class="error-section sec-pad centred">
        <div class="auto-container">
            <div class="row clearfix justify-content-center">
                <div class="col-lg-10 col-md-12 col-sm-12 content-column">
                    <div class="inner-box">
                        
                        <h1 style="font-size: 100px; font-weight: 700; color: #309E5A; margin-bottom: 20px;">404</h1>
                        
                        <h2><?php esc_html_e( 'Oops! That page can’t be found.', 'edonewman-theme' ); ?></h2>
                        <div class="text" style="margin: 20px 0 40px;">
                            <p><?php esc_html_e( 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.', 'edonewman-theme' ); ?></p>
                        </div>

                        <div class="error-search-form" style="max-width: 500px; margin: 0 auto 40px;">
                            <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                                <div class="form-group" style="position: relative;">
                                    <input type="search" name="s" placeholder="<?php esc_attr_e( 'Search Here...', 'edonewman-theme' ); ?>" required style="width: 100%; padding: 15px 20px; border: 1px solid #e5e5e5; border-radius: 5px;">
                                    <button type="submit" style="position: absolute; right: 20px; top: 0; bottom: 0; background: none; border: none; cursor: pointer;">
                                        <i class="fas fa-search" style="color: #309E5A;"></i>
                                    </button>
                                </div>
                            </form>
                        </div>

                        <div class="btn-box">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="theme-btn btn-style-one" style="background: #309E5A; color: white; padding: 15px 40px; border-radius: 5px; text-decoration: none; display: inline-block;">
                                <i class="flaticon-left-arrow" style="margin-right: 10px;"></i><?php esc_html_e( 'Back to Home', 'edonewman-theme' ); ?>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();