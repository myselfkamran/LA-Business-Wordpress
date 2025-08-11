<?php get_header();?>  
<section class="main-banner">
    <div class="container">
                <div class="main-banner-wrapper">
                    <h1 class="white-clr text-center capitalize">
                    <?php the_title();?> 
                    </h1>
                </div>
     </div>
</section>
<section class="blogs-detail-section section-padding">
   <div class="container">
    <div class="blogs-detail-wrap">
        <div class="blogs-detail-wrap-intro">
        <h6 class="main-paragraph mini-heading-clr">
        <?php 
        $category = get_the_category();
        if ( ! empty( $category ) ) {
            echo esc_html( $category[0]->name ); // Display the first category name
        }
        ?>
        </h6>
        <h1 class="main-heading black-clr capitalize ">
        <?php the_title();?> 
        </h1>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div class="post-author d-flex d-flex-align-center">
        <div class="author-avatar">
            <?php echo get_avatar( get_the_author_meta('ID'), 96 ); ?>
        </div>
        <div class="author-name">
            <p class="mini-heading-clr">By <?php echo '<a class="mini-heading-clr" href="' . get_author_posts_url( get_the_author_meta('ID') ) . '">' . get_the_author_meta('display_name') . '</a>'; ?></p>
        </div>
        </div>


        <?php endwhile; endif; ?>
        <div class="blogs-detail-wrap-image">
        <img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
        </div>
        </div>
        <div class="blogs-detail-wrap-content">

        <?php the_content();?>
    </div>
    </div>

</div>
</section>
<section class="features-blogs about-blogs">
            <div class="container">
                <div class="feature-cards-heading">
                    <h2 class="main-heading text-center">
                    Related Articles
                    </h2>
                </div>
                <div class="features-blogs-parent uni-cards-parent">
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
                                 <?php echo wp_trim_words(get_the_excerpt(), 28, ''); ?>
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
                <div class="feature-blogs-detail-button d-flex d-flex-align-center d-flex-jst-center">
                <?php 
$link = get_field('blog_detail_button');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="blue-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" > <?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                </div>
            </div>
        </section>
<?php get_footer(); ?>