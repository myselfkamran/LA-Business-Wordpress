<?php get_header(); /*Template Name:services*/?>  
        <section class="main-banner">
            <div class="container">
                <div class="main-banner-wrapper">
                    <h1 class="white-clr text-center capitalize" data-aos="fade-up" data-aos-duration="2000">
                    <?php the_title();?>
                    </h1>
                </div>
            </div>
        </section>
<?php 
if( have_rows('services_repeater') ): 
    while ( have_rows('services_repeater') ) : the_row(); 
        $service_title = get_sub_field('service_title');
        $sanitized_title = sanitize_title($service_title); // Convert title to a URL-friendly format
?>

<section id="<?php echo $sanitized_title; ?>" class="services-repeater">
    <div class="container">
        <div class="services-repeater-wrapper d-flex d-flex-align-center d-flex-jst-space">
            <div class="services-wrapper-content">
                <div class="services-wrapper-content-heading aos-init aos-animate" data-aos="fade-up" data-aos-duration="2000">
                    <h4 class="main-heading">
                        <?php echo esc_html($service_title); ?>
                    </h4>
                </div>
                <div class="services-wrapper-content-para" data-aos="fade-up" data-aos-duration="2500">
                    <p class="main-paragraph iron-clr">
                        <?php the_sub_field('service_description'); ?>
                    </p>
                </div>
                <div class="services-wrapper-content-button" data-aos="fade-up" data-aos-duration="3000">
                    <?php 
                    $link = get_sub_field('button_link');
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
            <div class="services-repeater-image">
                <img src="<?php the_sub_field('service_image'); ?>" alt="image">
            </div>
        </div>
    </div>
</section>

<?php 
    endwhile; 
endif;  
?>


        <?php get_footer(); ?>