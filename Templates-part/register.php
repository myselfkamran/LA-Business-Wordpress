<?php get_header(); /*Template Name:register*/?> 

        <section class="main-banner staffing-employers-banner">
            <div class="container">
                <div class="main-banner-wrapper d-flex d-flex-colm d-flex-align-center d-flex-jst-center" data-aos="fade-up" data-aos-duration="2000">
                    <h1 class="white-clr text-center capitalize">
                    <?php the_field('banner_heading'); ?>
                    </h1>
                </div>
            </div>
        </section>
<section class="Candidate-form section-padding">
            <div class="container">
                <div class="Candidate-form-wrap d-flex d-flex-align-center d-flex-jst-center d-flex-colm">
                    <h2 class="main-heading text-center" data-aos="fade-up" data-aos-duration="1500">
                    <?php the_field('candidate_registration_heading'); ?>
                    </h2>
                    <p class="main-paragraph text-center iron-clr" data-aos="fade-up" data-aos-duration="2000">
                    <?php the_field('candidate_registration_paragraph'); ?>
                    </p>
				</div>
				<div class="Candidate-form-wrap-form-parent-contact">
							
					<div class="Candidate-form-wrap-form-wrap-parent" data-aos="fade-up" data-aos-duration="2500">

						<?php echo do_shortcode('[contact-form-7 id="198d0c5" title="Register"]')?>
				</div>
	</div>
				</div>
</section>
      
        <?php get_footer(); ?>