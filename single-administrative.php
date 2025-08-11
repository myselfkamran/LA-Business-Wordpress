<?php get_header();?>  
        <section class="main-banner">
            <div class="container">
                <div class="main-banner-wrapper" data-aos="fade-up" data-aos-duration="2000">
                    <h1 class="white-clr text-center capitalize" data-aos="fade-up" data-aos-duration="2000">
                    <?php the_title();?> 
                    </h1>
                </div>
            </div>
        </section>
        <section class="hire-assistant">
            <div class="container">
                <div class="hire-assistant-wrap d-flex d-flex-align-center d-flex-jst-center d-flex-colm">
                    <h2 class="main-heading text-center" data-aos="fade-up" data-aos-duration="1500">
                    <?php the_field('hire_assistant_heading'); ?>
                    </h2>
                    <p class="main-paragraph text-center iron-clr" data-aos="fade-up" data-aos-duration="1800">
                    <?php the_field('hire_assistant_paragraph'); ?>
                    </p>
                    <div class="hire-assistant-button" data-aos="fade-up" data-aos-duration="2000">
                    <?php 
$link = get_field('hire_assistant_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="blue-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" > <?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="easy-hiring section-padding">
            <div class="container">
                <div class="easy-hiring-wrap">
                    <div class="easy-hiring-wrap-heading d-flex d-flex-align-center d-flex-jst-center">
                    <h2 class="main-heading text-center" data-aos="fade-up" data-aos-duration="2000">
                        <?php the_field('easy_hiring_heading'); ?>
                        </h2>
                    </div>
                    <div class="easy-hiring-cards d-flex d-flex-align-center d-flex-jst-space wrap">
                    <?php if (have_rows('easy_hiring_cards_repeater')): while (have_rows('easy_hiring_cards_repeater')): the_row(); ?>
    <div class="easy-hiring-cards-wrap" 
         data-aos="fade-up" 
         data-aos-duration="1500" 
         data-aos-delay="200">
         
        <div class="easy-hiring-cards-inner-wrap">
            <h4>
                <?php echo esc_html(get_sub_field('easy_hiring_cards_repeater_heading')); ?>
            </h4>
            <p class="main-paragraph iron-clr">
                <?php echo esc_html(get_sub_field('easy_hiring_cards_repeater_paragraph')); ?>
            </p>
            <a href="<?php echo esc_url(get_sub_field('easy_hiring_cards_repeater_detail_link')); ?>">
                <?php echo esc_html(get_sub_field('easy_hiring_cards_repeater_detail_link_text')); ?>
                <img src="https://labpinc.com/wp-content/uploads/2024/10/Frame-arrow.svg" alt="arrow">
            </a>
        </div>
    </div>
<?php endwhile; endif; ?>

                      
                    </div>
                </div>
            </div>
        </section>
        <section class="staff-process-step">
            <div class="container">
                <div class="staff-process-step-wrapp">
                    <h6 class="text-center mini-heading" data-aos="fade-up" data-aos-duration="2000">
                    <?php the_field('ow_it_works_steps_mini_heading'); ?>
                    </h6>
                    <h2 class="main-heading text-center" data-aos="fade-up" data-aos-duration="2000">
                    <?php the_field('how_it_works_steps_main_heading'); ?>
                    </h2>
                </div>
                <div class="staff-process-step-line uni-cards-parent">
                <?php if( have_rows('how_it_works_steps_repeater') ): 
    $step_number = 1; 
    while ( have_rows('how_it_works_steps_repeater') ) : the_row(); ?>
        <div class="staff-process-step-line-wrap" 
             data-aos="fade-up" 
             data-aos-duration="1200" 
             data-aos-delay="<?php echo $step_number * 100; ?>"> <!-- delay based on step number -->
             
            <div class="staff-process-step-inner d-flex d-flex-align-center d-flex-jst-space d-flex-colm">
                <h1 class="text-center white-clr">
                    <?php echo $step_number; ?>
                </h1>
                <h4 class="text-center">
                    <?php the_sub_field('how_it_works_steps_repeater_heading'); ?>
                </h4>
                <p class="main-paragraph text-center">
                    <?php the_sub_field('how_it_works_steps_repeater_discription'); ?>
                </p>
            </div>
        </div>
        <?php 
        $step_number++; 
    endwhile;
endif; ?>

                </div>
            </div>
        </section>
        <section class="staff-step section-padding">
            <div class="container">
                <div class="staff-step-heading">
                    <h2 class="main-heading text-center"  data-aos="fade-up" data-aos-duration="2000">
                    <?php the_field('get_started_heading'); ?>
                    </h2>
                </div>
                <div class="staff-step-cards uni-cards-parent">
               <?php if (have_rows('get_started_steps_repeater')): while (have_rows('get_started_steps_repeater')): the_row(); ?>

    <div class="staff-step-cards uni-cards-wrap" 
         data-aos="fade-up" 
         data-aos-duration="1200" 
         data-aos-delay="200"> <!-- adjust delay as needed -->
         
        <div class="staff-step-cards-inner-wrap d-flex d-flex-align-center d-flex-colm">
            <img src="<?php echo esc_html(get_sub_field('get_started_steps_repeater_image')); ?>" alt="">
            
            <h4 class="text-center">
                <?php echo esc_html(get_sub_field('get_started_steps_repeater_heading')); ?>
            </h4>
            
            <p class="main-paragraph iron-clr text-center">
                <?php echo esc_html(get_sub_field('get_started_steps_repeater_paragraph')); ?>
            </p>
        </div>
    </div>

<?php endwhile; endif; ?>

                </div>
            </div>
        </section>
        <section class="staff-form-section">
            <div class="container">
                <div class="staff-form-content">
                    <h2 class="main-heading text-center" data-aos="fade-up" data-aos-duration="2000">
                        <?php the_field('hiring_form_heading'); ?>
                    </h2>
                    <p class="main-paragraph iron-clr text-center" data-aos="fade-up" data-aos-duration="2500">
                        <?php // the_field('hiring_form_paragraph'); ?>
						Questions about using an administrative assistant staffing agency? Call us toll-free: 213-365-1010
                    </p>
                </div>
                <div class="staff-form d-flex d-flex-align-center d-flex-jst-center" data-aos="fade-up" data-aos-duration="2000">
					<?php echo do_shortcode('[contact-form-7 id="3720778" title="Addministrative Form"]')?>

                </div>
            </div>
        </section>





        <?php get_footer(); ?>