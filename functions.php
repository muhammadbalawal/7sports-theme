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

// Hide metaboxes based on page template
add_action('admin_head', function() {
    global $post;
    
    if (!$post || $post->post_type !== 'page') {
        return;
    }
    
    $front_page_id = get_option('page_on_front');
    $current_template = get_post_meta($post->ID, '_wp_page_template', true);
    
    // If NOT front page, hide front page metaboxes
    if ($post->ID != $front_page_id) {
        ?>
        <style>
            #hero_section,
            #highlights_section,
            #programs_section,
            #testimonials_section,
            #messages_section,
            #cta_buttons_section {
                display: none !important;
            }
        </style>
        <?php
    }
    
    // If NOT using Programs template, hide programs metaboxes
    if ($current_template !== 'template-programs.php') {
        ?>
        <style>
            #programs_hero_section,
            #programs_categories_section,
            #age_groups_section,
            #programs_registration_cta,
            #additional_services_section,
            #programs_submission_cta,
            #programs_bottom_cta {
                display: none !important;
            }
        </style>
        <?php
    }
});
?>