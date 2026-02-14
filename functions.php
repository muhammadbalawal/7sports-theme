<?php
/**
 * 7Sports Theme Functions - Bootstrap Version
 */

function sevensports_enqueue_assets() {
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.2');
    
    wp_enqueue_style('main-style', get_stylesheet_uri(), array('bootstrap'), '1.0.0');

    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array(), '5.3.2', true);

    if (file_exists(get_template_directory() . '/js/main.js')) {
        wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('bootstrap-js'), '1.0.0', true);
    }
}
add_action('wp_enqueue_scripts', 'sevensports_enqueue_assets');

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

require get_template_directory() . '/inc/acf-fields.php';

add_action('acf/init', 'sevensports_acf_op_init');
function sevensports_acf_op_init() {
    if(function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => 'Site Settings',
            'menu_title'    => 'Site Settings',
            'menu_slug'     => 'site-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

add_filter('acf/settings/load_json', '__return_false');

?>
