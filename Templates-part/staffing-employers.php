<?php get_header(); /*Template Name:For Employers*/?> 

        <section class="main-banner staffing-employers-banner">
            <div class="container">
                <div class="main-banner-wrapper d-flex d-flex-colm d-flex-align-center d-flex-jst-center">
                    <h1 class="white-clr text-center capitalize">
                    <?php the_field('banner_heading'); ?>
                    </h1>
					<div class="main-banner-wrapper-button-">
                    <?php 
$link = get_field('banner_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="white-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" > <?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
					</div>
                </div>
            </div>
        </section>
        <section class="employers-main">
            <div class="employers-main-wrapper d-flex d-flex-align-stretch d-flex-jst-space" >
                <div class="employers-main-wrapper-content">
                    <h2 class="main-heading capitalize" >
                    <?php the_field('main_section_heading'); ?>
                    </h2>
                    <?php the_field('main_section_paragraph');?>
                    <div class="employers-main-wrapper-content-button">
                    <?php 
$link = get_field('main_section_link');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="blue-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" > <?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                    </div>
                </div>
                <div class="employers-main-wrapper-image">
                    <img src=" <?php the_field('main_section_image'); ?>" alt="image">
                </div>
            </div>
        </section>
        <section class="home-industries relative section-padding staffing-employers-industries">
            <div class="container">
                <div class="home-industries-wrapper">
                <div class="industries-mini-heading">
    <h6 class="mini-heading mini-heading-clr uppercase text-center">
        <?php echo get_field('industries_mini_heading', 8); ?>
    </h6>
</div>
<div class="industries-main-heading">
    <h2 class="main-heading text-center">
        <?php echo get_field('industries_main_heading', 8); ?>
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
                        <a href="#." class="blue-button">
                            More About Us
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="staff-process-step">
            <div class="container">
                <div class="staff-process-step-wrapp">
                    <h6 class="text-center mini-heading">
                    <?php the_field('staffing_steps_mini_heading');?>
                    </h6>
                    <h2 class="main-heading text-center">
                    <?php the_field('staffing_steps_main_heading');?>
                    </h2>
                </div>
                <div class="staff-process-step-line uni-cards-parent">
             <?php 
if( have_rows('steps_repeater') ): 
    $step_number = 1; 
    $delay = 0; // Initialize delay

    while ( have_rows('steps_repeater') ) : the_row(); ?>
        <div class="staff-process-step-line-wrap">
             
            <div class="staff-process-step-inner d-flex d-flex-align-center d-flex-jst-space d-flex-colm">
                <h1 class="text-center white-clr">
                    <?php echo $step_number; ?>
                </h1>
                <h4 class="text-center">
                    <?php the_sub_field('steps_repeater_heading'); ?>
                </h4>
                <p class="main-paragraph text-center">
                    <?php the_sub_field('steps_repeater_discription'); ?>
                </p>
            </div>
        </div>
        
        <?php 
        $step_number++; 
        $delay += 100; // Increase delay for the next element
    endwhile;
endif; 
?>

                    
                </div>
            </div>
        </section>
        <?php get_footer(); ?>