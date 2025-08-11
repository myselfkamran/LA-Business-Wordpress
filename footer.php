</main>
<footer id="footer">
    <div class="container">
        <div class="footer-wrapper d-flex d-flex-align-start d-flex-jst-space">
            <div class="footer-logo">
                <a href="<?php echo esc_url(home_url()); ?>" class="d-block">
                    <img src=" <?php the_field('footer_logo', 'options');?>" alt="logo">
                </a>
            </div>
            <div class="footer-links">
                <h4 class="white-clr">
                <?php the_field('quick_link_heading', 'options');?>
                </h4>
                <ul class="footer-links-list">

                <?php if( have_rows('link_repeater','options') ):  while ( have_rows('link_repeater','options') ) : the_row(); ?>
                    <li>
                    <?php 
$link = get_sub_field('Link_quick_links_repeater','options');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                    </li>
                    <?php endwhile; endif;  ?>
                </ul>
            </div>
            <div class="footer-links">
                <h4 class="white-clr">
                <?php the_field('services_heading', 'options');?>
                </h4>
                <ul class="footer-links-list">
                <?php if( have_rows('services_repeater','options') ):  while ( have_rows('services_repeater','options') ) : the_row(); ?>

                    <li>
                    <?php 
$link = get_sub_field('services_links_repeaetr','options');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                    </li>
                    <?php endwhile; endif;  ?>

                   
                </ul>
            </div>
            <div class="footer-social-links">
                <h4 class="white-clr">
                <?php the_field('contact_heading', 'options');?>
                </h4>
                <ul class="footer-social-list">
                <?php if( have_rows('conact_links_repeater','options') ):  while ( have_rows('conact_links_repeater','options') ) : the_row(); ?>

                    <li>
                        <img src=" <?php the_sub_field('conact_links_repeater_links_image', 'options');?>" alt="email">
                        <?php 
$link = get_sub_field('conact_links_repeater_links_list','options');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                    </li>
                    <?php endwhile; endif;  ?>
                </ul>
            </div>
        </div>
        <div class="footer-copyright">
            <p class="main-paragraph text-center white-clr">
                <?php the_field('copyright_text_discription', 'options');?>
            </p>
        </div>
    </div>
</footer>
<?php wp_footer();?>
<script>
  AOS.init({
    once: true
  });
	
// document.addEventListener("DOMContentLoaded", function() {
//     // Check if the current page is not the specified one
//     if (window.location.pathname !== '/la-business/industries/office-administrative/') {
//         // Select all elements with the class "staff-cards-inner-wrap"
//         const staffCards = document.querySelectorAll('.staff-cards-inner-wrap');

//         staffCards.forEach(function(card) {
//             // Find the link inside the card
//             const link = card.querySelector('.staff-cards-inner-wrap-link a');

//             if (link) {
//                 // Remove the href attribute and replace it with '#'
//                 link.setAttribute('href', '#');
//             }
//         });
//     }
// });



</script>

</body>

</html>