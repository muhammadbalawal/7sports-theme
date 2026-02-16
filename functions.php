<?php
/**
 * 7Sports Theme Functions - Bootstrap + MetaBox Version
 */

// Enqueue Bootstrap and scripts
function sevensports_enqueue_assets() {
    // Bootstrap CSS from CDN
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2');
    
    // Theme stylesheet (for any custom CSS)
    wp_enqueue_style('main-style', get_stylesheet_uri(), array('bootstrap'), '1.0.0');
    
    // Bootstrap JS Bundle (includes Popper)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);
    
    // Main JS
    if (file_exists(get_template_directory() . '/js/main.js')) {
        wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('bootstrap-js'), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'sevensports_enqueue_assets');

// Theme setup
function sevensports_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'sevensports'),
        'footer' => __('Footer Menu', 'sevensports'),
    ));
}
add_action('after_setup_theme', 'sevensports_setup');

// Include MetaBox fields
require get_template_directory() . '/inc/metabox-fields.php';
?>