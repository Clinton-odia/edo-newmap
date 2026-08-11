<?php
/*
Template Name: Publications & Downloads
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

<section class="download-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
            <h6><i class="flaticon-star text-success"></i><span>Document Repository</span><i class="flaticon-star text-success"></i></h6>
            <h2>Publications, Circulars & Downloads</h2>
            <div class="title-shape"></div>
        </div>

        <div class="downloads-container mt-5">
            <?php
            while (have_posts()) : the_post();
                // 1. Output any page content or WP Download Manager shortcodes added in WP Admin editor
                the_content();
            endwhile;

            // 2. Pre-wired Plugin Shortcode Action Hooks
            if (shortcode_exists('wpdm_all_packages')) {
                echo do_shortcode('[wpdm_all_packages]');
            } elseif (shortcode_exists('wpdm_package')) {
                echo do_shortcode('[wpdm_package]');
            } else {
                // Fallback Repository UI until WP Download Manager plugin is installed
                ?>
                <div class="card border-0 shadow-sm rounded-lg overflow-hidden">
                    <div class="card-header bg-success text-white py-3">
                        <h4 class="m-0 text-white"><i class="fas fa-file-download mr-2"></i> Official EDO NEWMAP-EIB Publications</h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped m-0 align-middle">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Document Title</th>
                                        <th>Category</th>
                                        <th>Format</th>
                                        <th class="text-right">Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>EDO NEWMAP Environmental & Social Management Framework</strong></td>
                                        <td><span class="badge badge-info">Policies</span></td>
                                        <td>PDF</td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-sm btn-outline-success disabled"><i class="fas fa-download"></i> Download PDF</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Annual Progress & Watershed Management Report</strong></td>
                                        <td><span class="badge badge-primary">Annual Report</span></td>
                                        <td>PDF</td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-sm btn-outline-success disabled"><i class="fas fa-download"></i> Download PDF</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><strong>Procurement Guidelines & Bidding Documents</strong></td>
                                        <td><span class="badge badge-warning">Procurement</span></td>
                                        <td>PDF</td>
                                        <td class="text-right">
                                            <a href="#" class="btn btn-sm btn-outline-success disabled"><i class="fas fa-download"></i> Download PDF</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer bg-light text-muted small py-3">
                        <i class="fas fa-info-circle mr-1"></i> Full download management, file tracking, and categorization will activate once your Download Manager plugin is enabled.
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
