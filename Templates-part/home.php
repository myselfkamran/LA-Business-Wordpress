<?php get_header(); /*Template Name:home*/?>  

<section class="banner"
    style="background: linear-gradient(270deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.69) 80.01%), url('<?php the_field('home_banner_image')?>'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <div class="container">
        <div class="banner-wrapper">
            <div class="banner-wrapper-mini-heading">
                <h4 class="white-clr main-paragraph uppercase">
                   <?php the_field('banner_mini_heading');?>
                </h4>
            </div>
            <div class="banner-wrapper-heading">
                <h1 class="white-clr capitalize">
                <?php the_field('banner_main_heading');?>
                </h1>
            </div>
            <div class="banner-wrapper-button d-flex d-flex-align-center ">
              
                <?php 
$link = get_field('banner_employers_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="transparent-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                <?php 
$link = get_field('banner_job_seekers_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="transparent-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
            </div>
            <div class="banner-wrapper-clrd-button">
            <?php 
$link = get_field('banner_job_search_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="white-button"  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="services section-padding relative">
    <div class="container">
        <div class="services-wrapper">
            <div class="services-heading">
                <h2 class="main-heading">
                <?php the_field('services_heading');?>
                </h2>
            </div>
            <div class="services-paragraph d-flex d-flex-align-end d-flex-jst-space">
                <p class="main-paragraph iron-clr">
                <?php the_field('services_paragraph');?>
                </p>
				<div class="services-paragraph-button">
						
                <?php 
$link = get_field('services_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="blue-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
					</div>
            </div>
            <div class="services-cards uni-cards-parent">
            <?php if( have_rows('services_cards_repeater') ):  while ( have_rows('services_cards_repeater') ) : the_row(); ?>
                <div class="servicews-cards-wrap uni-cards-wrap">
                    <div class="services-cards-holder">
                        <div class="services-cards-images">
                            <img src=" <?php the_sub_field('services_repeater_cards_image');?>" alt="">
                        </div>
                        <div class="services-cards-heading">
                            <h4 class="cards-heading">
                            <?php the_sub_field('services_repeater_cards_heading');?>
                            </h4>
                        </div>
                        <div class="services-cards-para">
                            <p class="cards-para main-paragraph">
                            <?php the_sub_field('services_repeater_cards_paragraph');?>
                            </p>
                        </div>
                        <div class="services-cards-button">
                            <?php 
$link = get_sub_field('services_repeater_cards_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" > <?php echo esc_html( $link_title ); ?><img src="https://labpinc.com/wp-content/uploads/2024/10/arrow-right-1.svg" alt="arrow"></a>
<?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; endif;  ?>
                
            </div>
        </div>
    </div>
</section>
<section class="labp" style="background-color: rgba(245, 246, 250, 1);">
    <div class="labp-wrapper d-flex d-flex-align-center ">
        <div class="labp-img">
            <img src="<?php the_field('labp_image');?>" alt="labp">
        </div>
        <div class="labp-content">
            <div class="labp-heading">
                <h4 class="main-heading">
                <?php the_field('labp_heading');?>
                </h4>
            </div>
            <div class="labp-paragraph" >
                <p class="main-paragraph iron-clr">
                <?php the_field('labp_paragraph');?>
                </p>
            </div>
            <div class="labp-button">
            <?php 
$link = get_field('labp_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="blue-button"  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" > <?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="about-company section-padding">
    <div class="container">
        <div class="about-company-wrapper d-flex d-flex-align-center d-flex-jst-space">
            <div class="about-company-wrapper-content">
                <div class="about-mini-heading" >
                    <h6 class="mini-heading mini-heading-clr uppercase">
                    <?php the_field('about_mini_heading');?>
                    </h6>
                </div>
                <div class="about-company-heading" >
                    <h2 class="main-heading capitalize">
                    <?php the_field('about_main_heading');?>
                    </h2>
                </div>
                <div class="about-company-paragraph" >
                    <p class="main-paragraph iron-clr">
                    <?php the_field('about_section_paragraph');?>
                    </p>
                </div>
                <div class="about-company-main-btn" >
                <?php 
$link = get_field('about_section_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="blue-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" > <?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                </div>
            </div>
            <div class="about-company-wrapper-image d-flex d-flex-align-center d-flex-jst-space">
                <img src=" <?php the_field('about_section_image_1');?>" alt="company">
                <img src=" <?php the_field('about_section_image_2');?>" alt="company">
            </div>
        </div>
    </div>
</section>
<section class="home-industries relative section-padding-bottom staffing-employers-industries" id="industries">
    <div class="container">
        <div class="home-industries-wrapper">
            <div class="industries-mini-heading">
                <h6 class="mini-heading mini-heading-clr uppercase text-center">
                <?php the_field('industries_mini_heading');?>
                </h6>
            </div>
            <div class="industries-main-heading">
                <h2 class="main-heading text-center">
                <?php the_field('industries_main_heading');?>
                </h2>
            </div>
          <div class="industries-cards-parent uni-cards-parent">
					<?php 
$args = array( 
    'post_type' => 'Industries', 
    'order' => 'ASC', 
    'posts_per_page' => 6 
); 
$the_query = new WP_Query( $args ); 
$post_index = 1; // Initialize index for delay

if ( $the_query->have_posts() ) : 
    while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
    
        <div class="industries-cards-wrap uni-cards-wrap">
             
            <div class="industries-cards-inner-wrap">
                <div class="industries-cards-image">
                    <?php
                    // Get the SVG code from ACF
                    $svg_code = get_field('industries_svg_code');
                    
                    // Check if the SVG code is not empty
                    if ($svg_code) {
                        echo $svg_code;
                    }
                    ?>
                </div>
                
                <div class="industries-cards-heading">
                    <h4 class="cards-heading">
                        <?php the_title(); ?>
                    </h4>
                </div>
                
                <div class="industries-cards-paragraph">
                    <p class="main-paragraph iron-clr">
                        <?php echo wp_trim_words(get_the_excerpt(), 28, ''); ?>
                    </p>
                </div>
                
                <div class="indestries-cards-button">
                    <a href="<?php the_permalink();?>" class="main-paragraph">
                        Read More
                        <img src="https://labpinc.com/wp-content/uploads/2024/10/arrow-right-1.svg" alt="arrow">
                    </a>
                </div>
            </div>
        </div>
        
        <?php 
        $post_index++; // Increment index for delay
        wp_reset_postdata(); 
    endwhile; 
endif; 
?>

					</div>
            <div class="industries-main-button d-flex d-flex-align-center d-flex-jst-center">
            <?php 
$link = get_field('industries_more_button');
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
<section class="home-form section-padding-bottom">
    <div class="container">
        <div class="home-form-wrapper d-flex d-flex-align-stretch d-flex-jst-space wrap">
            <div class="home-form-image">
                <img src="<?php the_field('form_women_image');?>" alt="image">
            </div>
            <div class="home-form-fields">
                <div class="home-form-heading" >
                    <h4 class="main-heading capitalize">
                        <?php the_field('form_main_heading');?>
                    </h4>
                    <p class="main-paragraph">
                        <?php the_field('form_main_paragraph');?>
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