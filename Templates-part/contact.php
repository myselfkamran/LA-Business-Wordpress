<?php get_header(); /*Template Name: contact us*/?>
<section class="main-banner">
    <div class="container">
        <div class="main-banner-wrapper">
            <h1 class="white-clr text-center capitalize">
            <?php the_field('banner_heading'); ?>
            </h1>
        </div>
    </div>
</section>
<section class="contact-form-main section-padding">
    <div class="container">
        <div class="contact-form-main-heading">
            <h2 class="main-heading text-center">
            <?php the_field('la_cards_section_heading'); ?>
            </h2>
        </div>
        <div class="contact-cards-main-parent uni-cards-parent" >
        <?php if( have_rows('button_cards_repeater') ):  while ( have_rows('button_cards_repeater') ) : the_row(); ?>

            <div class="contact-cards-main-wrapper uni-cards-wrap">
                <div class="contact-cards-main-inner-wrap d-flex d-flex-align-center d-flex-jst-center d-flex-colm">
                    <div class="contact-cards-img">
                        <img src="<?php the_sub_field('button_cards_repeater_image');?>" alt="">
                    </div>
                    <div class="contact-cards-heading">
                        <h4 class="text-center">
                        <?php the_sub_field('button_cards_repeater_heading');?>
                        </h4>
                    </div>
                    <div class="contact-cards-para">
                        <p class="main-paragraph text-center">
                        <?php the_sub_field('button_cards_repeater_discription');?>
                        </p>
                    </div>
                    <div class="contact-cards-button">
                        <?php 
$link = get_sub_field('button_cards_repeater_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="transparent-blue-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" > <?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endwhile; endif;  ?>

        </div>
        <div class="contact-links-cards-main-parent uni-cards-parent" >
        <?php if( have_rows('link_cards_repeater') ):  while ( have_rows('link_cards_repeater') ) : the_row(); ?>
            <div class="contact-links-cards-main-wrapper uni-cards-wrap">
                <div class="contact-links-cards-main-inner-wrap ">
                    <a href=" <?php the_sub_field('link_cards_repeater_link');?>" class="d-flex d-flex-align-center d-flex-jst-center d-flex-colm">
                        <div class="contact-links-cards-img">
                            <img src="<?php the_sub_field('link_cards_repeater_image');?>" alt="">
                        </div>
                        <div class="contact-links-cards-heading">
                            <h4 class="text-center black-clr">
                            <?php the_sub_field('link_cards_repeater_heading');?>
                            </h4>
                        </div>
                        <div class="contact-links-cards-para">
                            <p class="main-paragraph text-center black-clr">
                            <?php the_sub_field('link_cards_repeater_link_text');?>
                            </p>
                        </div>
                    </a>
                </div>
            </div>
            <?php endwhile; endif;  ?>
          
        </div>
    </div>
</section>
<section class="home-form section-padding-bottom" id="contact-form">
    <div class="container">
        <div class="home-form-wrapper d-flex d-flex-align-stretch d-flex-jst-space wrap">
            <div class="home-form-image">
                <img src="<?php the_field('form_women_image', 8);?>" alt="image">
            </div>
            <div class="home-form-fields">
                <div class="home-form-heading" >
                    <h4 class="main-heading capitalize">
                        <?php the_field('form_main_heading', 8);?>
                    </h4>
                    <p class="main-paragraph">
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