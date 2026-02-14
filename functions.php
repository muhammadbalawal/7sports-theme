<?php
/**
 * 7Sports Theme Functions
 */

// Enqueue Tailwind CSS and scripts
function sevensports_enqueue_assets() {
    wp_enqueue_style('tailwind', 'https://cdn.jsdelivr.net/npm/tailwindcss@3.4.0/dist/tailwind.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri(), array('tailwind'), '1.0.0');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'sevensports_enqueue_assets');

// Theme setup
function sevensports_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'footer' => __('Footer Menu', 'sevensports'),
    ));
}
add_action('after_setup_theme', 'sevensports_setup');

// Include ACF fields
require get_template_directory() . '/inc/acf-fields.php';

// ACF Options Page - Using proper acf/init hook
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
?>