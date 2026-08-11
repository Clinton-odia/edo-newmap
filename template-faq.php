<?php
/*
Template Name: Frequently Asked Questions
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

<section class="faq-section sec-pad bg-color-1">
    <div class="auto-container">
        <div class="sec-title centred">
            <h6><i class="flaticon-star text-success"></i><span>Got Questions?</span><i class="flaticon-star text-success"></i></h6>
            <h2>Frequently Asked Questions</h2>
            <div class="title-shape"></div>
        </div>

        <div class="faq-container mt-5">
            <?php
            while (have_posts()) : the_post();
                the_content();
            endwhile;

            // 1. Pre-wired Plugin Shortcode Action Hooks
            if (shortcode_exists('easy_accordion')) {
                echo do_shortcode('[easy_accordion id="faq-accordion"]');
            } elseif (shortcode_exists('ultimate_selected_faq')) {
                echo do_shortcode('[ultimate_selected_faq]');
            } else {
                // Fallback Accordion UI matching NEWMAP theme design
                ?>
                <div class="accordion" id="newmapFaqAccordion">
                    <div class="card border-0 mb-3 shadow-sm rounded">
                        <div class="card-header bg-white p-3" id="faqHeadingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-success text-left w-100 font-weight-bold d-flex justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    <span><i class="fas fa-question-circle mr-2"></i> What is EDO NEWMAP-EIB?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="faqCollapseOne" class="collapse show" aria-labelledby="faqHeadingOne" data-parent="#newmapFaqAccordion">
                            <div class="card-body text-muted leading-relaxed">
                                EDO NEWMAP-EIB is an initiative aimed at mitigating flood risks, controlling gully erosion, and restoring degraded watersheds across Edo State, supported by international development partners including the European Investment Bank.
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 mb-3 shadow-sm rounded">
                        <div class="card-header bg-white p-3" id="faqHeadingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-success text-left w-100 font-weight-bold collapsed d-flex justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    <span><i class="fas fa-question-circle mr-2"></i> How can communities submit flood or erosion complaints?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="faqCollapseTwo" class="collapse" aria-labelledby="faqHeadingTwo" data-parent="#newmapFaqAccordion">
                            <div class="card-body text-muted leading-relaxed">
                                Communities can submit reports directly through our Contact Us page form, send an email to edonewmapeib@gmail.com, or reach out to their designated local catchment committee representatives.
                            </div>
                        </div>
                    </div>

                    <div class="card border-0 mb-3 shadow-sm rounded">
                        <div class="card-header bg-white p-3" id="faqHeadingThree">
                            <h5 class="mb-0">
                                <button class="btn btn-link text-success text-left w-100 font-weight-bold collapsed d-flex justify-content-between align-items-center" type="button" data-toggle="collapse" data-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    <span><i class="fas fa-question-circle mr-2"></i> Where can I access environmental impact assessments and project reports?</span>
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </h5>
                        </div>
                        <div id="faqCollapseThree" class="collapse" aria-labelledby="faqHeadingThree" data-parent="#newmapFaqAccordion">
                            <div class="card-body text-muted leading-relaxed">
                                Official policies, guidelines, and annual reports are available on our Publications & Downloads page.
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
