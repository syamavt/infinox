<?php
/**
 * Promo Campaign Theme Functions
 */

function promo_campaign_setup() {
    // Add support for document title tag (SEO friendly)
    add_theme_support('title-tag');
    
    // Enable featured images
    add_theme_support('post-thumbnails');

    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Register a primary menu location if needed later
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'promo-campaign'),
    ));
}
add_action('after_setup_theme', 'promo_campaign_setup');


/**
 * Enqueue scripts and styles
 */
function promo_campaign_scripts() {
    // 1. Google Fonts (Inter and Playfair Display for that luxury look)
    wp_enqueue_style('promo-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Playfair+Display:wght@700&display=swap', array(), null);

    // 2. Main Stylesheet
    wp_enqueue_style('promo-style', get_stylesheet_uri(), array(), '1.0.0');

    // 3. (Optional) Custom JS for the Accordion (Terms & Conditions)
    wp_enqueue_script('promo-scripts', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'promo_campaign_scripts');

/**
 * Clean up the WordPress Header
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

function create_landing_pages() {
register_post_type('landing_page',
array(
'labels' => array(
'name' => 'Landing Pages',
'singular_name' => 'Landing Page'
),
'public' => true,
'has_archive' => false,
'rewrite' => array('slug' => 'landing'),
'supports' => array('title')
)
);
}
add_action('init', 'create_landing_pages');