<?php get_header(); /*Template Name: Blogs*/?>
        <section class="main-banner">
            <div class="container">
                <div class="main-banner-wrapper" data-aos="fade-up" data-aos-duration="1200">
                    <h1 class="white-clr text-center capitalize">
                    <?php the_title();?> 
                    </h1>
                </div>
            </div>
        </section>
        <section class="features-blogs blogs-page">
            <div class="container">
                <div class="feature-cards-heading">
                    <h6 class="mini-heading mini-heading-clr uppercase text-center" data-aos="fade-up" data-aos-duration="1200">
                    <?php the_field('features_blogs_mini_heading');?>
                    </h6>
                    <h2 class="main-heading text-center" data-aos="fade-up" data-aos-duration="1500">
                    <?php the_field('features_blogs_main_heading');?>
                    </h2>
                </div>
                <div class="features-blogs-parent uni-cards-parent" data-aos="fade-up" data-aos-duration="1800">
                <?php $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => -1 ); $the_query = new WP_Query( $args ); ?>
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
                                    <img src="https://wpcustom.webxstagingserver.com/la-business/wp-content/uploads/2024/10/line-right.svg" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php wp_reset_postdata(); endwhile; endif;  ?>
                </div>
            </div>
        </section>
        <?php get_footer(); ?>