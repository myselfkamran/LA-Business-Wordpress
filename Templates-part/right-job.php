<?php get_header(); /*Template Name:For Job Seekers*/?> 
        <section class="main-banner job-finder-banner">
            <div class="container">
                <div class="main-banner-wrapper d-flex d-flex-colm d-flex-align-center d-flex-jst-center">
                    <h1 class="white-clr text-center capitalize">
                    <?php the_field('banner_heading'); ?>
                    </h1>
                    <div class="job-filter-form">

                    </div>
                </div>
            </div>
        </section>
 <section class="find-right-job-childs job-listing">
            <div class="container">
				<div class="find-right-job-childs-wrapper" >
					<h2 class="main-heading text-center">
						<?php the_field('finding_the_right_job_heading'); ?>
					</h2>
					 <p class="main-paragraph iron-clr text-center">
                    <?php the_field('finding_the_right_job_paragraph'); ?>
                    </p>
					<div class="find-right-job-childs-wrapper-inner-button">
					
					<?php 
                    $link = get_field('finding_the_right_job_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="blue-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php echo esc_html( $link_title ); ?>
                    </a>
                    <?php endif; ?>
							
					</div>
				</div>
	 </div>
</section>
<section class="find-right-job-childs-cards section-padding">
            <div class="container">
			<div class="find-right-job-childs-cards-wrap d-flex d-flex-align-stretch d-flex-jst-center">
				<?php if( have_rows('team_cards_repeater_content') ):  while ( have_rows('team_cards_repeater_content') ) : the_row(); ?>
				<div class="find-right-job-childs-cards-wrap-flex-parent ">
				<div class="find-right-job-childs-cards-wrap-flex">
				<h4>
					<?php the_sub_field('finding_the_right_job_button_heading'); ?>
					</h4>
				<p class="main-paragraph iron-clr">
					<?php the_sub_field('finding_the_right_job_button_paragraph');?>
					</p>
				</div>
				
				</div>
				<?php endwhile; endif;  ?>
				</div>
	</div>
</section>
        <section class="getting-started section-padding getting-started-right-job">
            <div class="container">
                <div class="getting-started-wrapper">
                    <h2 class="main-heading">
                    <?php the_field('getting_started_headgin'); ?>
                    </h2> 
                    <p class="main-paragraph iron-clr">
                    <?php the_field('getting_started_discription'); ?>
                    </p>
                </div>
                <div class="getting-started-cards uni-cards-parent">
<!--                 <?php if( have_rows('getting_started_cards_repeater') ): 
                     $step_number = 1; 
                    while ( have_rows('getting_started_cards_repeater') ) : the_row(); ?>
                    <div class="getting-started-cards-wrap uni-cards-wrap">
                        <div
                            class="getting-start-inner-wrapper d-flex d-flex-colm d-flex-align-center d-flex-jst-center">
                            <div class="getting-start-inner-wrapper-img">
                                <img src="<?php the_sub_field('getting_started_cards_repeater_image');?>" alt="">
                            </div>
                            <div class="getting-start-inner-wrapper-step">
                                <p class="main-paragraph">
                              Step  <?php echo $step_number;?>
                                </p>
                            </div>
                            <div class="getting-start-inner-heading">
                                <h4 class="text-center">
                                <?php the_sub_field('getting_started_cards_repeater_heading');?>
                                </h4>
                            </div>
                            <div class="getting-start-inner-para">
                                <p class="main-paragraph iron-clr text-center">
                                <?php the_sub_field('getting_started_cards_repeater_discription');?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php 
                     $step_number++; 
                    endwhile; 
                endif;  ?> -->
					<?php if( have_rows('getting_started_cards_repeater') ): 
    $step_number = 1; 
    while ( have_rows('getting_started_cards_repeater') ) : the_row(); ?>
    
    <div class="getting-started-cards-wrap uni-cards-wrap">
         
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
        <section class="job-listing section-padding-bottom" id="job-listings">
            <div class="caontainer">
                <div class="job-listing-wrapper">
                    <div class="job-listing-wrapper-heading">
                        <h2 class="main-heading text-center">
                        <?php the_field('job_listing_heading'); ?>
                        </h2>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="home-industries relative section-padding staffing-employers-industries right-job-industries-section">
            <div class="container">
                <div class="home-industries-wrapper">
                <div class="industries-mini-heading">
    <h6 class="mini-heading mini-heading-clr uppercase text-center" >
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
                        <?php 
$link = get_field('industries_more_button', 8);
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
        <?php get_footer(); ?>