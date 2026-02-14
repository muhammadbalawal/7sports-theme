<?php
/**
 * MetaBox Field Groups - With Repeatable Fields
 */

add_filter( 'rwmb_meta_boxes', 'sevensports_register_meta_boxes' );

function sevensports_register_meta_boxes( $meta_boxes ) {
    
    // Hero Section
    $meta_boxes[] = array(
        'title'      => 'Hero Section',
        'id'         => 'hero_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'ID'       => get_option( 'page_on_front' ), // Front page
        ),
        'fields'     => array(
            array(
                'id'               => 'hero_background_image',
                'name'             => 'Hero Background Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'               => 'hero_logo',
                'name'             => 'Hero Logo',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'   => 'hero_title',
                'name' => 'Hero Title',
                'type' => 'text',
            ),
            array(
                'id'   => 'hero_age_range',
                'name' => 'Age Range',
                'type' => 'text',
            ),
            array(
                'id'          => 'hero_buttons',
                'name'        => 'Hero Buttons',
                'type'        => 'group',
                'clone'       => true,
                'sort_clone'  => true,
                'add_button'  => '+ Add Button',
                'fields'      => array(
                    array(
                        'id'   => 'button_text',
                        'name' => 'Button Text',
                        'type' => 'text',
                    ),
                    array(
                        'id'   => 'button_link',
                        'name' => 'Button Link',
                        'type' => 'url',
                    ),
                ),
            ),
            array(
                'id'   => 'hero_tagline',
                'name' => 'Hero Tagline',
                'type' => 'text',
            ),
        ),
    );
    
    // Highlights Section
    $meta_boxes[] = array(
        'title'      => 'Highlights Section',
        'id'         => 'highlights_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'ID'       => get_option( 'page_on_front' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'highlights',
                'name'        => 'Highlights',
                'type'        => 'group',
                'clone'       => true,
                'sort_clone'  => true,
                'add_button'  => '+ Add Highlight',
                'fields'      => array(
                    array(
                        'id'               => 'image',
                        'name'             => 'Image',
                        'type'             => 'image_advanced',
                        'max_file_uploads' => 1,
                    ),
                    array(
                        'id'   => 'title',
                        'name' => 'Title',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
    );
    
    // Programs Section
    $meta_boxes[] = array(
        'title'      => 'Programs Section',
        'id'         => 'programs_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'ID'       => get_option( 'page_on_front' ),
        ),
        'fields'     => array(
            array(
                'id'   => 'programs_section_title',
                'name' => 'Section Title',
                'type' => 'text',
            ),
            array(
                'id'          => 'program_cards',
                'name'        => 'Program Cards',
                'type'        => 'group',
                'clone'       => true,
                'sort_clone'  => true,
                'add_button'  => '+ Add Program',
                'fields'      => array(
                    array(
                        'id'               => 'image',
                        'name'             => 'Image',
                        'type'             => 'image_advanced',
                        'max_file_uploads' => 1,
                    ),
                    array(
                        'id'   => 'name',
                        'name' => 'Program Name',
                        'type' => 'text',
                    ),
                    array(
                        'id'   => 'age',
                        'name' => 'Age Range',
                        'type' => 'text',
                    ),
                    array(
                        'id'   => 'description',
                        'name' => 'Description',
                        'type' => 'textarea',
                        'rows' => 3,
                    ),
                    array(
                        'id'   => 'link',
                        'name' => 'Link',
                        'type' => 'url',
                    ),
                ),
            ),
        ),
    );
    
    // Testimonials Section
    $meta_boxes[] = array(
        'title'      => 'Testimonials Section',
        'id'         => 'testimonials_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'ID'       => get_option( 'page_on_front' ),
        ),
        'fields'     => array(
            array(
                'id'               => 'testimonials_background',
                'name'             => 'Background Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'   => 'testimonials_title',
                'name' => 'Section Title',
                'type' => 'text',
            ),
            array(
                'id'          => 'testimonials',
                'name'        => 'Testimonials',
                'type'        => 'group',
                'clone'       => true,
                'sort_clone'  => true,
                'add_button'  => '+ Add Testimonial',
                'fields'      => array(
                    array(
                        'id'   => 'rating',
                        'name' => 'Rating (1-5)',
                        'type' => 'number',
                        'min'  => 1,
                        'max'  => 5,
                        'std'  => 5,
                    ),
                    array(
                        'id'   => 'text',
                        'name' => 'Testimonial Text',
                        'type' => 'textarea',
                        'rows' => 4,
                    ),
                    array(
                        'id'   => 'author',
                        'name' => 'Author',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
    );
    
    // Important Messages Section
    $meta_boxes[] = array(
        'title'      => 'Important Messages Section',
        'id'         => 'messages_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'ID'       => get_option( 'page_on_front' ),
        ),
        'fields'     => array(
            array(
                'id'   => 'important_messages_title',
                'name' => 'Section Title',
                'type' => 'text',
            ),
            array(
                'id'          => 'important_messages',
                'name'        => 'Messages',
                'type'        => 'group',
                'clone'       => true,
                'sort_clone'  => true,
                'add_button'  => '+ Add Message',
                'fields'      => array(
                    array(
                        'id'   => 'location',
                        'name' => 'Location',
                        'type' => 'text',
                    ),
                    array(
                        'id'   => 'message',
                        'name' => 'Message',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                    array(
                        'id'   => 'link',
                        'name' => 'Link',
                        'type' => 'url',
                    ),
                ),
            ),
        ),
    );
    
    // About & CTA Section
    $meta_boxes[] = array(
        'title'      => 'About & CTA Sections',
        'id'         => 'about_cta_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'ID'       => get_option( 'page_on_front' ),
        ),
        'fields'     => array(
            array(
                'id'   => 'about_title',
                'name' => 'About Title',
                'type' => 'text',
            ),
            array(
                'id'   => 'about_description',
                'name' => 'About Description',
                'type' => 'textarea',
                'rows' => 4,
            ),
            array(
                'id'   => 'footer_cta_title',
                'name' => 'Footer CTA Title',
                'type' => 'text',
            ),
        ),
    );
    
    return $meta_boxes;
}
?>