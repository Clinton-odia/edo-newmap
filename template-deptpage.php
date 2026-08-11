<?php
/*
Template Name: Department subpage
*/

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

    <section class="page-title" style="background-image: url(<?php 
        if (has_post_thumbnail()) {
            echo get_the_post_thumbnail_url(get_the_ID(), 'full');
        } else {
            echo get_template_directory_uri() . '/assets/images/background/bgnd-1.jpg';
        }
    ?>);">
        <div class="auto-container">
            <div class="content-box">
                <div class="title centred">
                    <h1 class="text-white"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </section>

    <section class="about-style-three sec-pad bg-color-1">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Main Content Column -->
                <div class="col-lg-8 col-md-12 content-column">
                    <div class="content_block_5 bg-white p-4 p-md-5 rounded shadow-sm">
                        <div class="content-box">
                            <div class="sec-title mb-4">
                                <h6><i class="flaticon-star text-success"></i><span class="text-success">Directorate Overview</span></h6>
                                <h2><?php the_title(); ?></h2>
                                <div class="title-shape"></div>
                            </div>

                            <div class="text text-justify leading-relaxed text-secondary font-size-16">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Departments Navigation Sidebar -->
                <div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
                    <div class="card border-0 shadow-sm rounded-lg overflow-hidden sticky-top" style="top: 100px;">
                        <div class="card-header bg-success text-white py-3">
                            <h5 class="m-0 text-white"><i class="fas fa-sitemap mr-2"></i> Directorates & Units</h5>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <a href="<?php echo site_url('/hr'); ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                                    <span><i class="fas fa-users text-success mr-2"></i> HR & Admin</span>
                                    <i class="fas fa-chevron-right text-muted small"></i>
                                </a>
                                <a href="<?php echo site_url('/safeguards'); ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                                    <span><i class="fas fa-shield-alt text-success mr-2"></i> Environmental & Social Safeguards</span>
                                    <i class="fas fa-chevron-right text-muted small"></i>
                                </a>
                                <a href="<?php echo site_url('/fiduciary'); ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                                    <span><i class="fas fa-file-invoice-dollar text-success mr-2"></i> Fiduciary Directorate</span>
                                    <i class="fas fa-chevron-right text-muted small"></i>
                                </a>
                                <a href="<?php echo site_url('/remediation'); ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                                    <span><i class="fas fa-leaf text-success mr-2"></i> Remediation & Adaptation</span>
                                    <i class="fas fa-chevron-right text-muted small"></i>
                                </a>
                                <a href="<?php echo site_url('/engineering'); ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                                    <span><i class="fas fa-drafting-compass text-success mr-2"></i> Engineering Operations</span>
                                    <i class="fas fa-chevron-right text-muted small"></i>
                                </a>
                                <a href="<?php echo site_url('/legal'); ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                                    <span><i class="fas fa-gavel text-success mr-2"></i> Legal & Communication</span>
                                    <i class="fas fa-chevron-right text-muted small"></i>
                                </a>
                                <a href="<?php echo site_url('/monitoring'); ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                                    <span><i class="fas fa-chart-line text-success mr-2"></i> Monitoring & Evaluation</span>
                                    <i class="fas fa-chevron-right text-muted small"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; ?>

<?php get_footer(); ?>