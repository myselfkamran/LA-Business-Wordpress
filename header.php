<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
    <header id="main-header">
        <div class="container">
            <div class="header-navbar-wrapper d-flex d-flex-align-center d-flex-jst-space">
                <div class="header-site-logo">
                    <a href="<?php echo esc_url(home_url()); ?>"><?php if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
} ?></a>
                </div>
                <nav id="header-navlinks">
                <?php
                        wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'menu_id' => '',
                            'order' => '',
                            'menu_class' => 'header-nav-links-list d-flex d-flex-align-center d-flex-jst-space'
                        ));
            ?>
                    <div class="mobile-button header-nav-bar-button" id="header-nav-bar-button">
                       
                        <?php 
$link = get_field('header_button','options');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="blue-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                    </div>
                </nav>
                <div class="header-nav-bar-button" id="header-nav-bar-button">
                <?php 
$link = get_field('header_button','options');
if( $link ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
    <a class="blue-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" ><?php echo esc_html( $link_title ); ?></a>
<?php endif; ?>
                </div>
                <button class="navTrigger" id="navTrigger">
                    <svg viewBox="0 0 64 48">
                        <path d="M19,15 L45,15 C70,15 58,-2 49.0177126,7 L19,37"></path>
                        <path d="M19,24 L45,24 C61.2371586,24 57,49 41,33 L32,24"></path>
                        <path d="M45,33 L19,33 C-8,33 6,-2 22,14 L45,37"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <main id="main">