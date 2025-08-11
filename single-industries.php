<?php get_header(); ?>  

<section class="main-banner">
    <div class="container">
        <div class="main-banner-wrapper">
            <h1 class="white-clr text-center capitalize" data-aos="fade-up" data-aos-duration="2000">
                <?php the_title(); ?> 
            </h1>
        </div>
    </div>
</section>

<?php if( get_field('staffing_main_section_heading') || get_field('staffing_main_section_paragraph') ): ?>
<section class="find-right-job-childs job-listing">
    <div class="container">
        <div class="find-right-job-childs-wrapper">
            <?php if( get_field('staffing_main_section_heading') ): ?>
                <h2 class="main-heading text-center" data-aos="fade-up" data-aos-duration="1000">
                    <?php the_field('staffing_main_section_heading'); ?>
                </h2>
            <?php endif; ?>
            <?php if( get_field('staffing_main_section_paragraph') ): ?>
                <p class="main-paragraph iron-clr text-center" data-aos="fade-up" data-aos-duration="1500">
                    <?php the_field('staffing_main_section_paragraph'); ?>
                </p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if( have_rows('single_industries_content_cards_repeater') ): ?>
<section class="find-right-job-childs-cards section-padding">
    <div class="container">
        <div class="find-right-job-childs-cards-wrap d-flex d-flex-align-stretch d-flex-jst-center">
            <?php while ( have_rows('single_industries_content_cards_repeater') ) : the_row(); ?>
                <div class="find-right-job-childs-cards-wrap-flex-parent">
                    <div class="find-right-job-childs-cards-wrap-flex">
                        <?php if( get_sub_field('single_industries_content_cards_repeater_heading') ): ?>
                            <h4 data-aos="fade-up" data-aos-duration="1000">
                                <?php the_sub_field('single_industries_content_cards_repeater_heading'); ?>
                            </h4>
                        <?php endif; ?>
                        <?php if( get_sub_field('single_industries_content_cards_repeater_paragraph') ): ?>
                            <p class="main-paragraph iron-clr" data-aos="fade-up" data-aos-duration="1500">
                                <?php the_sub_field('single_industries_content_cards_repeater_paragraph'); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if( get_field('administrative_staff_heading') || get_field('administrative_relational') ): ?>
<section class="staff-cards">
    <div class="container">
        <div class="staff-cards-heading">
            <?php if( get_field('administrative_staff_heading') ): ?>
                <h4 class="text-center capitalize" data-aos="fade-up" data-aos-duration="2000">
                    <?php the_field('administrative_staff_heading'); ?>
                </h4>
            <?php endif; ?>
        </div>
        <div class="staff-cards-parent uni-cards-parent">
            <?php 
                $posts = get_field('administrative_relational');
                if ($posts) : 
                    foreach ($posts as $post) : setup_postdata($post);
            ?>
                <div class="staff-cards-wrapper uni-cards-wrap" 
                     data-aos="fade-up" 
                     data-aos-duration="1500" 
                     data-aos-delay="200">
                    <div class="staff-cards-inner-wrap d-flex d-flex-align-center d-flex-jst-space">
                        <div class="staff-cards-inner-wrap-heading">
                            <h4><?php the_title(); ?></h4>
                        </div>
                        <div class="staff-cards-inner-wrap-link">
                            <a href="<?php the_permalink(); ?>" class="d-flex d-flex-align-center">
                                <img src="https://labpinc.com/wp-content/uploads/2024/10/Frame-arrow.svg" alt="Next">
                            </a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p class="text-center">No staff members found.</p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if( get_field('hire_section_heading') || get_field('hire_section_paragraph') || get_field('hire_section_image') ): ?>
<section class="top-staff section-padding">
    <div class="container">
        <div class="top-staff-wrapper d-flex d-flex-align-center d-flex-jst-space">
            <div class="top-staff-content">
                <?php if( get_field('hire_section_heading') ): ?>
                    <h4 class="main-heading capitalize" data-aos="fade-up" data-aos-duration="1800">
                        <?php the_field('hire_section_heading'); ?>
                    </h4>
                <?php endif; ?>
                <?php if( get_field('hire_section_paragraph') ): ?>
                    <p class="main-paragraph iron-clr" data-aos="fade-up" data-aos-duration="2400">
                        <?php the_field('hire_section_paragraph'); ?>
                    </p>
                <?php endif; ?>
            </div>
            <?php if( get_field('hire_section_image') ): ?>
                <div class="top-staff-image">
                    <img src="<?php the_field('hire_section_image'); ?>" alt="image">
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php if( get_field('_insight_global_heading') || have_rows('global_insights_cards_repeater') ): ?>
<section class="insights-global">
    <div class="container">
        <div class="insights-global-heading">
            <?php if( get_field('_insight_global_heading') ): ?>
                <h4 class="text-center main-heading" data-aos="fade-up" data-aos-duration="2400">
                    <?php the_field('_insight_global_heading'); ?>
                </h4>
            <?php endif; ?>
        </div>
        <div class="insights-global-parent d-flex d-flex-align-stretch d-flex-jst-space wrap">
            <?php if( have_rows('global_insights_cards_repeater') ): ?>
                <?php while ( have_rows('global_insights_cards_repeater') ) : the_row(); ?>
                    <div class="insights-global-wrap" data-aos="fade-up" data-aos-duration="2000">
                        <div class="insights-global-inner-wrap">
                            <div class="insights-global-heading">
                                <h2 class="text-center">
                                    <?php echo esc_html(get_sub_field('global_insights_cards_repeater_number')); ?>
                                </h2>
                            </div>
                            <div class="insights-global-para">
                                <p class="text-center">
                                    <?php echo esc_html(get_sub_field('global_insights_cards_repeater_number_heading')); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<script>
    // ===============svg-load=========
    const options = {
        root: null,
        threshold: 0.5
    };

    const observer = new IntersectionObserver(function (entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {

                document.getElementById('circle1').style.transition = 'stroke-dashoffset 1.5s ease-in-out';
                document.getElementById('circle1').style.strokeDashoffset = '316.4';

                document.getElementById('circle2').style.transition = 'stroke-dashoffset 1.5s ease-in-out';
                document.getElementById('circle2').style.strokeDashoffset = '750';

                document.getElementById('circle3').style.transition = 'stroke-dashoffset 1.5s ease-in-out';
                document.getElementById('circle3').style.strokeDashoffset = '0';

                observer.disconnect();
            }
        });
    }, options);

    const section = document.querySelector('.shape-step');
    observer.observe(section);
    // =====equal-height-===
    $(document).ready(function () {
        if ($(window).width() >= 768) {
            var maxHeight = 0;

            $('.insights-global-inner-wrap').each(function () {
                var currentHeight = $(this).height();
                if (currentHeight > maxHeight) {
                    maxHeight = currentHeight;
                }
            });

            $('.insights-global-inner-wrap').height(maxHeight);
        }
    });
	
	
</script>

<?php get_footer(); ?>
