<?php get_header(); /*Template Name:how-it-works*/?>  

        <section class="main-banner">
            <div class="container">
                <div class="main-banner-wrapper" data-aos="fade-up" data-aos-duration="2000">
                    <h1 class="white-clr text-center capitalize">
                    <?php the_title();?>
                    </h1>
                </div>
            </div>
        </section>
        <section class="staff-process-step">
            <div class="container">
                <div class="staff-process-step-wrapp">
                    <h6 class="text-center mini-heading" data-aos="fade-up" data-aos-duration="1800">
                    <?php the_field('how_it_works_mini_heading');?>
                    </h6>
                    <h2 class="main-heading text-center" data-aos="fade-up" data-aos-duration="2000">
                    <?php the_field('how_it_works_main_heading');?>
                    </h2>
                </div>
                <div class="staff-process-step-line uni-cards-parent">
               <?php if( have_rows('works_steps_repeater') ): 
    $step_number = 1; 
    while ( have_rows('works_steps_repeater') ) : the_row(); ?>
        <div class="staff-process-step-line-wrap" 
             data-aos="fade-up" 
             data-aos-duration="2000" 
             data-aos-delay="<?php echo $step_number * 100; ?>" 
             data-aos-offset="200">
             
            <div class="staff-process-step-inner d-flex d-flex-align-center d-flex-jst-space d-flex-colm">
                <h1 class="text-center white-clr">
                    <?php echo $step_number; ?>
                </h1>
                <h4 class="text-center">
                    <?php the_sub_field('works_steps_repeater_heading'); ?>
                </h4>
                <p class="main-paragraph text-center">
                    <?php the_sub_field('works_steps_repeater_step_discription'); ?>
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
        <section class="getting-started section-padding">
            <div class="container">
                <div class="getting-started-wrapper">
                    <h2 class="main-heading"  data-aos="fade-up" data-aos-duration="1800">
                    <?php the_field('gettgin_started_heading'); ?>
                    </h2>
                    <p class="main-paragraph iron-clr"  data-aos="fade-up" data-aos-duration="2000">
                    <?php the_field('gettgin_started_discription'); ?>
                    </p>
                </div>
                <div class="getting-started-cards uni-cards-parent">
                <?php if( have_rows('getting_started_cards_repeater') ): 
    $step_number = 1; 
    while ( have_rows('getting_started_cards_repeater') ) : the_row(); ?>
    
    <div class="getting-started-cards-wrap uni-cards-wrap" 
         data-aos="fade-up" 
         data-aos-duration="3000" 
         data-aos-delay="<?php echo $step_number * 300; ?>" 
         data-aos-offset="200">
         
        <div class="getting-start-inner-wrapper d-flex d-flex-colm d-flex-align-center d-flex-jst-center">
            <div class="getting-start-inner-wrapper-img">
                <img src="<?php the_sub_field('getting_started_cards_repeater_image'); ?>" alt="">
            </div>
            <div class="getting-start-inner-wrapper-step">
                <p class="main-paragraph">
                    Step <?php echo $step_number; ?>
                </p>
            </div>
            <div class="getting-start-inner-heading">
                <h4 class="text-center">
                    <?php the_sub_field('getting_started_cards_repeater_heading'); ?>
                </h4>
            </div>
            <div class="getting-start-inner-para">
                <p class="main-paragraph iron-clr text-center">
                    <?php the_sub_field('getting_started_cards_repeater_discription'); ?>
                </p>
            </div>
        </div>
    </div>
    
    <?php 
    $step_number++; 
    endwhile; 
endif; ?>

                </div>
            </div>
        </section>
        <section class="home-form section-padding-bottom">
    <div class="container">
        <div class="home-form-wrapper d-flex d-flex-align-stretch d-flex-jst-space wrap">
            <div class="home-form-image">
                <img src="<?php the_field('form_women_image', 8);?>" alt="image">
            </div>
            <div class="home-form-fields">
                <div class="home-form-heading">
                    <h4 class="main-heading capitalize" data-aos="fade-up" data-aos-duration="1800">
                        <?php the_field('form_main_heading', 8);?>
                    </h4>
                    <p class="main-paragraph" data-aos="fade-up" data-aos-duration="2000">
                        <?php the_field('form_main_paragraph', 8);?>
                    </p>
                </div>
                <div class="home-form-fields-form-parent">
                     <?php echo do_shortcode('[contact-form-7 id="85a0ba1" title="Contact Form"]')?>
                </div>
            </div>
        </div>
    </div>
</section>
        <?php get_footer(); ?>