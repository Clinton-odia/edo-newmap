<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post();
    $status      = get_post_meta(get_the_ID(), '_project_status', true);
    $location    = get_post_meta(get_the_ID(), '_project_location', true);
    $start_date  = get_post_meta(get_the_ID(), '_project_start_date', true);
    $end_date    = get_post_meta(get_the_ID(), '_project_end_date', true);
    $objectives  = get_post_meta(get_the_ID(), '_project_objectives', true);
?>

    <section class="page-title" style="padding: 120px 0px 60px 0px; background-size: cover; background-position: center; background-image: url(<?php 
        if (has_post_thumbnail()) {
            echo get_the_post_thumbnail_url(get_the_ID(), 'full');
        } else {
            echo get_template_directory_uri() . '/assets/images/background/bgnd-1.jpg'; 
        }
    ?>);">
        <div class="auto-container text-center">
            <h1 class="text-white font-weight-bold text-shadow"><?php the_title(); ?></h1>
            <?php if ($location) : ?>
                <p class="text-white lead mt-2"><i class="fas fa-map-marker-alt text-warning mr-1"></i> <?php echo esc_html($location); ?></p>
            <?php endif; ?>
        </div>
    </section>        

    <section class="sec-pad bg-color-1">
        <div class="auto-container">
            <div class="row">
                <!-- Main Content Column -->
                <div class="col-lg-8 col-md-12">
                    <div class="bg-white p-4 p-md-5 rounded shadow-sm">
                        <div class="sec-title mb-4">
                            <h6><i class="flaticon-star text-success"></i><span class="text-success">Intervention Overview</span></h6>
                            <h2>Project Details</h2>
                            <div class="title-shape"></div>
                        </div>

                        <?php if ($objectives) : ?>
                            <div class="alert alert-success border-0 bg-light p-4 mb-4 rounded">
                                <h5 class="text-success font-weight-bold mb-2"><i class="fas fa-bullseye mr-2"></i> Key Project Objectives</h5>
                                <p class="m-0 text-dark"><?php echo nl2br(esc_html($objectives)); ?></p>
                            </div>
                        <?php endif; ?>

                        <div class="text-justify leading-relaxed text-secondary font-size-16">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>

                <!-- Meta Sidebar -->
                <div class="col-lg-4 col-md-12 mt-4 mt-lg-0">
                    <div class="card border-0 shadow-sm rounded-lg overflow-hidden sticky-top" style="top: 100px;">
                        <div class="card-header bg-success text-white py-3">
                            <h5 class="m-0 text-white"><i class="fas fa-info-circle mr-2"></i> Project Metadata</h5>
                        </div>
                        <div class="card-body p-4">
                            <ul class="list-group list-group-flush">
                                <?php if ($status) : ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="text-muted"><i class="fas fa-tasks mr-2 text-success"></i> Status</span>
                                        <span class="badge badge-success px-3 py-2"><?php echo esc_html($status); ?></span>
                                    </li>
                                <?php endif; ?>

                                <?php if ($location) : ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="text-muted"><i class="fas fa-map-marked-alt mr-2 text-success"></i> Location</span>
                                        <strong class="text-dark"><?php echo esc_html($location); ?></strong>
                                    </li>
                                <?php endif; ?>

                                <?php if ($start_date) : ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="text-muted"><i class="far fa-calendar-alt mr-2 text-success"></i> Commencement</span>
                                        <span class="text-dark"><?php echo date('M d, Y', strtotime($start_date)); ?></span>
                                    </li>
                                <?php endif; ?>

                                <?php if ($end_date) : ?>
                                    <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                        <span class="text-muted"><i class="fas fa-calendar-check mr-2 text-success"></i> Completion</span>
                                        <span class="text-dark"><?php echo date('M d, Y', strtotime($end_date)); ?></span>
                                    </li>
                                <?php endif; ?>
                            </ul>

                            <div class="mt-4 pt-3 border-top">
                                <a href="<?php echo site_url('/projects'); ?>" class="btn btn-outline-success btn-block"><i class="fas fa-arrow-left mr-2"></i> Back to Projects</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>