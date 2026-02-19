<?php
/**
 * Custom Post Type: Program
 * Used for Registration page – each program is a post; edit under Programs in admin.
 */
function sevensports_register_program_post_type() {
    register_post_type( 'program', array(
        'labels'             => array(
            'name'               => _x( 'Programs', 'post type general name', 'sevensports' ),
            'singular_name'      => _x( 'Program', 'post type singular name', 'sevensports' ),
            'menu_name'          => _x( 'Programs', 'admin menu', 'sevensports' ),
            'add_new'            => _x( 'Add New', 'program', 'sevensports' ),
            'add_new_item'       => __( 'Add New Program', 'sevensports' ),
            'edit_item'          => __( 'Edit Program', 'sevensports' ),
            'new_item'           => __( 'New Program', 'sevensports' ),
            'view_item'          => __( 'View Program', 'sevensports' ),
            'search_items'       => __( 'Search Programs', 'sevensports' ),
            'not_found'          => __( 'No programs found.', 'sevensports' ),
            'not_found_in_trash' => __( 'No programs found in Trash.', 'sevensports' ),
        ),
        'public'             => false,
        'publicly_queryable'  => false,
        'show_ui'             => true,
        'show_in_menu'       => true,
        'menu_icon'           => 'dashicons-location-alt',
        'menu_position'       => 25,
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'hierarchical'        => false,
        'supports'            => array( 'title', 'page-attributes' ),
        'has_archive'         => false,
        'rewrite'             => false,
        'query_var'           => false,
    ) );
}
add_action( 'init', 'sevensports_register_program_post_type' );
