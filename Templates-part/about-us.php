<?php get_header(); /*Template Name:about*/?>  

<section class="main-banner">
            <div class="container">
                <div class="main-banner-wrapper" data-aos="fade-up" data-aos-duration="1000">
                    <h1 class="white-clr text-center capitalize">
                    <?php the_title();?>
                    </h1>
                </div>
            </div>
        </section>
        <section class="about-company section-padding about-page-company">
            <div class="container">
                <div class="about-company-wrapper d-flex d-flex-align-center d-flex-jst-space">
                    <div class="about-company-wrapper-content">
                        <div class="about-mini-heading" data-aos="fade-up" data-aos-duration="1200">
                            <h6 class="mini-heading mini-heading-clr uppercase">
                            <?php the_field('about_mini_heading');?>
                            </h6>
                        </div>
                        <div class="about-company-heading" data-aos="fade-up" data-aos-duration="1500">
                            <h2 class="main-heading capitalize">
                            <?php the_field('about_main_heading');?>
                            </h2>
                        </div>
                        <div class="about-company-paragraph" data-aos="fade-up" data-aos-duration="1800">
                        <?php the_field('about_main_discrption');?>
                        </div>
                        <div class="about-company-main-btn" data-aos="fade-up" data-aos-duration="2000">
                        <?php 
$link = get_field('about_main_discrption_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="blue-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                            <!-- <a href="#." class="blue-button">
                                More About Us
                            </a> -->
                        </div>
                    </div>
                    <div class="about-company-wrapper-image d-flex d-flex-align-center d-flex-jst-space">
                    
                        <img src="<?php the_field('about_main_image_1');?>" alt="company">
                        <img src="<?php the_field('about_main_image_2');?>" alt="company">
                    </div>
                </div>
            </div>
        </section>
        <section class="home-industries relative section-padding about-page-industries">
            <div class="container">
                <div class="home-industries-wrapper">
                <div class="industries-mini-heading" data-aos="fade-up" data-aos-duration="1200">
    <h6 class="mini-heading mini-heading-clr uppercase text-center">
        <?php echo get_field('industries_mini_heading', 8); ?>
    </h6>
</div>
<div class="industries-main-heading" data-aos="fade-up" data-aos-duration="1500">
    <h2 class="main-heading text-center">
        <?php echo get_field('industries_main_heading', 8); ?>
    </h2>
</div>
					<div class="industries-cards-parent uni-cards-parent" data-aos="fade-up" data-aos-duration="2000">
						
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
    
        <div class="industries-cards-wrap uni-cards-wrap" 
             data-aos="fade-up" 
             data-aos-duration="2000" 
             data-aos-delay="<?php echo $post_index * 100; ?>" 
             data-aos-offset="200">
             
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
                    <div class="industries-main-button d-flex d-flex-align-center d-flex-jst-center" data-aos="fade-up" data-aos-duration="2200">
                        <a href="#." class="blue-button">
                            More About Us
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="features-blogs about-blogs">
            <div class="container">
                <div class="feature-cards-heading">
                    <h6 class="mini-heading mini-heading-clr uppercase text-center" data-aos="fade-up" data-aos-duration="1200">
                        PERSONAL BLOG
                    </h6>
                    <h2 class="main-heading text-center" data-aos="fade-up" data-aos-duration="1500">
                        Features Stories
                    </h2>
                </div>
                <div class="features-blogs-parent uni-cards-parent" data-aos="fade-up" data-aos-duration="1500">
                <?php $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 3 ); $the_query = new WP_Query( $args ); ?>
                <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <div class="feature-blogs-wrap uni-cards-wrap">
                        <div class="feature-blogs-inner-wrap">
                            <div class="feature-blogs-wrap-image">
                                <img src="<?php echo get_the_post_thumbnail_url()?>" alt="feature-image">
                            </div>
                            <div class="feature-blogs-wrap-details d-flex d-flex-align-center">
                            <h5 class="main-paragraph">
        <?php 
        $category = get_the_category();
        if ( ! empty( $category ) ) {
            echo esc_html( $category[0]->name ); // Display the first category name
        }
        ?>
    </h5>
                                <h6>
                                <?php echo get_the_date(); ?>
                                </h6>
                            </div>
                            <div class="feature-wrap-heading">
                                <a href="<?php the_permalink();?>">
                                <?php the_title();?>
    </a>
                            </div>
                            <div class="feature-wrap-para">
                                <p>
                                <?php echo wp_trim_words(get_the_excerpt(), 20, ''); ?>
                                </p>
                            </div>
                            <div class="feature-wrap-button">
                                <a href="<?php the_permalink();?>" class="main-paragraph">
                                    Read More
                                    <img src="https://labpinc.com/wp-content/uploads/2024/10/line-right.svg" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); endwhile; endif;  ?>
                   
                </div>
                <div class="feature-blogs-detail-button d-flex d-flex-align-center d-flex-jst-center" data-aos="fade-up" data-aos-duration="2000">
                <?php 
$link = get_field('blog_detail_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="blue-button"  href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" > <?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                </div>
            </div>
        </section>
        <?php get_footer(); ?>