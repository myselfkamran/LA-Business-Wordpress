<?php
// Theme Support
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');
add_theme_support('menus');
register_nav_menu('header-menu', 'Primary');
register_nav_menu('footer-menu', 'Secondary');

// Custom Post Types
function create_custom_post_types() {
    $post_types = [
        'industries' => 'Industries',
        'administrative' => 'Administrative',
    ];

    foreach ($post_types as $slug => $label) {
        register_post_type($slug, [
            'label' => __($label),
            'public' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => ['slug' => $slug],
            'supports' => ['title', 'editor', 'thumbnail', 'custom-fields', 'excerpt'],
            'show_in_rest' => true,
        ]);
    }
}
add_action('init', 'create_custom_post_types');
// =============================Detail-page-form====================================

// Shortcode for Detail Page Form
// Shortcode for Staff Form
function staff_form_shortcode() {
    ob_start();
    
    // Display success or error messages
    if (isset($_GET['success'])) {
        echo '<p class="success-message">Staff form submitted successfully!</p>';
    }

    if (isset($_SESSION['form_error'])) {
        echo '<p class="error-message">' . $_SESSION['form_error'] . '</p>';
        unset($_SESSION['form_error']);
    }

    ?>
    <form action="<?php echo esc_url($_SERVER['REQUEST_URI']); ?>" method="post">
        <?php wp_nonce_field('staff_form_submission', 'staff_form_nonce'); ?>
        <div class="staff-form-wrap d-flex d-flex-align-center d-flex-jst-center wrap">
            <div class="staff-form-fields-50">
                <label for="">First Name*</label>
                <input type="text" name="first_name" required>
            </div>
            <div class="staff-form-fields-50">
                <label for="">Last Name*</label>
                <input type="text" name="last_name" required>
            </div>
            <div class="staff-form-fields-100">
                <label for="">Business Email* <span>Job seeker? <a href="#." class="main-paragraph">Visit our jobs page</a></span></label>
                <input type="email" name="business_email" required>
            </div>
            <div class="staff-form-fields-100">
                <label for="">Phone Number*</label>
                <input type="tel" name="phone_number" required>
            </div>
            <div class="staff-form-fields-50 options">
                <label for="">Just to confirm, are you:**</label>
                <label for="option1">
                    <input type="radio" name="confirmation" value="Yes" required> An employer
                </label>
                <label for="option2">
                    <input type="radio" name="confirmation" value="No" required> Looking for a job
                </label>
            </div>
			<div class="staff-form-fields-100">
                                <p>
                                    Labpinc uses the contact information you provide to us to contact you about our
                                    products and services and as described in our&nbsp;Privacy Policy. You may unsubscribe
                                    from these communications at any time. For information on how to unsubscribe, as
                                    well as our privacy practices and how to submit privacy inquiries and requests,
                                    please review our&nbsp;Privacy Policy.
                                </p>
                            </div>
            <button type="submit" class="capitalize blue-button" name="submit_staff_form">Submit</button>
        </div>
    </form>
    <?php
    return ob_get_clean();
}
add_shortcode('staff_form', 'staff_form_shortcode');

function themename_custom_logo_setup() {


	add_theme_support( 'custom-logo', [
		'header-text'          => [ 'site-title', 'site-description' ],
		'flex-height'          => true,
		'flex-width'           => true,
		'unlink-homepage-logo' => true, 

    ]);
}
    if( function_exists('acf_add_options_page') ) {
        acf_add_options_page(array(
            'page_title'    => 'Theme General Settings',
            'menu_title'    => 'Theme Settings',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
        acf_add_options_sub_page(array(
            'page_title'    => 'Theme Header Settings',
            'menu_title'    => 'Header',
            'parent_slug'   => 'theme-general-settings',
        ));
        
        acf_add_options_sub_page(array(
            'page_title'    => 'Theme Footer Settings',
            'menu_title'    => 'Footer',
            'parent_slug'   => 'theme-general-settings',
        ));
    }
// Enqueue Styles and Fonts
function enqueue_my_styles_and_fonts() {
    wp_enqueue_style('poppins-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
    wp_enqueue_style('mulish-font', 'https://fonts.googleapis.com/css2?family=Mulish:wght@200..1000&display=swap');
    wp_enqueue_style('slick-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');
    wp_enqueue_style('slick-theme-css', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css');
    wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

    $style_version = defined('WP_DEBUG') && WP_DEBUG ? filemtime(get_stylesheet_directory() . '/assets/style/style.css') : '1.0.0';
    wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/assets/style/style.css', [], $style_version);
    wp_enqueue_style('responsive-style', get_stylesheet_directory_uri() . '/assets/style/responsive.css', [], '1.0.0');
}
add_action('wp_enqueue_scripts', 'enqueue_my_styles_and_fonts');



// Enqueue Scripts
function enqueue_my_scripts() {
    if (!wp_script_is('jquery', 'registered')) {
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.7.1.min.js', [], '3.7.1', true);
    }
    wp_enqueue_script('slick-cdn', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], '1.8.1', true);
    wp_enqueue_script('aos-cdn', 'https://unpkg.com/aos@2.3.1/dist/aos.js', ['jquery'], '2.3.1', true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/script/all.js', ['jquery'], '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');


