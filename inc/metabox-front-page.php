<?php

add_filter( 'rwmb_meta_boxes', 'sevensports_register_meta_boxes' );

function sevensports_register_meta_boxes( $meta_boxes ) {
    
    // Get front page ID
    $front_page_id = get_option( 'page_on_front' );
    
    // Hero Section - ONLY ON FRONT PAGE
    $meta_boxes[] = array(
        'title'      => 'Hero Section',
        'id'         => 'hero_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'ID' => $front_page_id ? array($front_page_id) : array(),
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
                'id'          => 'hero_title',
                'name'        => 'Hero Title',
                'type'        => 'text',
                'placeholder' => 'Enter hero title',
            ),
            array(
                'id'          => 'hero_age_range',
                'name'        => 'Age Range',
                'type'        => 'text',
                'placeholder' => 'e.g., 5-17 years old',
            ),
            array(
                'name' => 'Hero Buttons',
                'id'   => 'hero_buttons_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'hero_button_1_text',
                'name'        => 'Button 1 Text',
                'type'        => 'text',
                'placeholder' => 'e.g., View Programs',
            ),
            array(
                'id'          => 'hero_button_1_link',
                'name'        => 'Button 1 Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/page',
            ),
            array(
                'id'          => 'hero_button_2_text',
                'name'        => 'Button 2 Text',
                'type'        => 'text',
                'placeholder' => 'e.g., About Us',
            ),
            array(
                'id'          => 'hero_button_2_link',
                'name'        => 'Button 2 Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/about',
            ),
            array(
                'id'          => 'hero_button_3_text',
                'name'        => 'Button 3 Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Register',
            ),
            array(
                'id'          => 'hero_button_3_link',
                'name'        => 'Button 3 Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/register',
            ),
            array(
                'id'          => 'hero_button_4_text',
                'name'        => 'Button 4 Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Contact',
            ),
            array(
                'id'          => 'hero_button_4_link',
                'name'        => 'Button 4 Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/contact',
            ),
            array(
                'id'          => 'hero_tagline',
                'name'        => 'Hero Tagline',
                'type'        => 'textarea',
                'rows'        => 2,
                'placeholder' => 'Enter a compelling tagline',
            ),
        ),
    );
    
    // Highlights Section - ONLY ON FRONT PAGE
    $meta_boxes[] = array(
        'title'      => 'Highlights Section',
        'id'         => 'highlights_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'ID' => $front_page_id ? array($front_page_id) : array(),
        ),
        'fields'     => array(
            array(
                'name' => 'Highlight 1',
                'id'   => 'highlight_1_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'highlight_1_image',
                'name'             => 'Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'highlight_1_title',
                'name'        => 'Title',
                'type'        => 'text',
                'placeholder' => 'Highlight title',
            ),
            array(
                'name' => 'Highlight 2',
                'id'   => 'highlight_2_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'highlight_2_image',
                'name'             => 'Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'highlight_2_title',
                'name'        => 'Title',
                'type'        => 'text',
                'placeholder' => 'Highlight title',
            ),
            array(
                'name' => 'Highlight 3',
                'id'   => 'highlight_3_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'highlight_3_image',
                'name'             => 'Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'highlight_3_title',
                'name'        => 'Title',
                'type'        => 'text',
                'placeholder' => 'Highlight title',
            ),
        ),
    );
    
    // Programs Section - ONLY ON FRONT PAGE
    $meta_boxes[] = array(
        'title'      => 'Programs Section',
        'id'         => 'programs_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'ID' => $front_page_id ? array($front_page_id) : array(),
        ),
        'fields'     => array(
            array(
                'id'          => 'programs_section_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Our Programs',
            ),
            array(
                'name' => 'Program 1',
                'id'   => 'program_1_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'program_1_image',
                'name'             => 'Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'program_1_name',
                'name'        => 'Program Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Basketball Training',
            ),
            array(
                'id'          => 'program_1_age',
                'name'        => 'Age Range',
                'type'        => 'text',
                'placeholder' => 'e.g., 8-12 years',
            ),
            array(
                'id'          => 'program_1_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'rows'        => 3,
                'placeholder' => 'Brief description',
            ),
            array(
                'id'          => 'program_1_link',
                'name'        => 'Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/program',
            ),
            array(
                'name' => 'Program 2',
                'id'   => 'program_2_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'program_2_image',
                'name'             => 'Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'program_2_name',
                'name'        => 'Program Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Soccer Camp',
            ),
            array(
                'id'          => 'program_2_age',
                'name'        => 'Age Range',
                'type'        => 'text',
                'placeholder' => 'e.g., 6-10 years',
            ),
            array(
                'id'          => 'program_2_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'rows'        => 3,
                'placeholder' => 'Brief description',
            ),
            array(
                'id'          => 'program_2_link',
                'name'        => 'Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/program',
            ),
            array(
                'name' => 'Program 3',
                'id'   => 'program_3_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'program_3_image',
                'name'             => 'Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'program_3_name',
                'name'        => 'Program Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Tennis Lessons',
            ),
            array(
                'id'          => 'program_3_age',
                'name'        => 'Age Range',
                'type'        => 'text',
                'placeholder' => 'e.g., 10-15 years',
            ),
            array(
                'id'          => 'program_3_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'rows'        => 3,
                'placeholder' => 'Brief description',
            ),
            array(
                'id'          => 'program_3_link',
                'name'        => 'Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/program',
            ),
        ),
    );
    
    // Testimonials Section - ONLY ON FRONT PAGE
    $meta_boxes[] = array(
        'title'      => 'Testimonials Section',
        'id'         => 'testimonials_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'ID' => $front_page_id ? array($front_page_id) : array(),
        ),
        'fields'     => array(
            array(
                'id'               => 'testimonials_background',
                'name'             => 'Background Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'testimonials_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., What Parents Say',
            ),
            array(
                'name' => 'Testimonial 1',
                'id'   => 'testimonial_1_divider',
                'type' => 'heading',
            ),
            array(
                'id'   => 'testimonial_1_rating',
                'name' => 'Rating (1-5)',
                'type' => 'number',
                'min'  => 1,
                'max'  => 5,
                'std'  => 5,
                'step' => 1,
            ),
            array(
                'id'          => 'testimonial_1_text',
                'name'        => 'Testimonial Text',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Customer testimonial',
            ),
            array(
                'id'          => 'testimonial_1_author',
                'name'        => 'Author',
                'type'        => 'text',
                'placeholder' => 'Customer name',
            ),
            array(
                'name' => 'Testimonial 2',
                'id'   => 'testimonial_2_divider',
                'type' => 'heading',
            ),
            array(
                'id'   => 'testimonial_2_rating',
                'name' => 'Rating (1-5)',
                'type' => 'number',
                'min'  => 1,
                'max'  => 5,
                'std'  => 5,
                'step' => 1,
            ),
            array(
                'id'          => 'testimonial_2_text',
                'name'        => 'Testimonial Text',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Customer testimonial',
            ),
            array(
                'id'          => 'testimonial_2_author',
                'name'        => 'Author',
                'type'        => 'text',
                'placeholder' => 'Customer name',
            ),
            array(
                'name' => 'Testimonial 3',
                'id'   => 'testimonial_3_divider',
                'type' => 'heading',
            ),
            array(
                'id'   => 'testimonial_3_rating',
                'name' => 'Rating (1-5)',
                'type' => 'number',
                'min'  => 1,
                'max'  => 5,
                'std'  => 5,
                'step' => 1,
            ),
            array(
                'id'          => 'testimonial_3_text',
                'name'        => 'Testimonial Text',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Customer testimonial',
            ),
            array(
                'id'          => 'testimonial_3_author',
                'name'        => 'Author',
                'type'        => 'text',
                'placeholder' => 'Customer name',
            ),
        ),
    );
    
    // Important Messages Section - ONLY ON FRONT PAGE
    $meta_boxes[] = array(
        'title'      => 'Important Messages Section',
        'id'         => 'messages_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'ID' => $front_page_id ? array($front_page_id) : array(),
        ),
        'fields'     => array(
            array(
                'id'          => 'important_messages_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Important Updates',
            ),
            array(
                'name' => 'Message 1',
                'id'   => 'message_1_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'message_1_location',
                'name'        => 'Location',
                'type'        => 'text',
                'placeholder' => 'e.g., North Location',
            ),
            array(
                'id'          => 'message_1_text',
                'name'        => 'Message Text',
                'type'        => 'textarea',
                'rows'        => 2,
                'placeholder' => 'Important message',
            ),
            array(
                'id'          => 'message_1_link',
                'name'        => 'Link (optional)',
                'type'        => 'url',
                'placeholder' => 'https://example.com/details',
            ),
            array(
                'name' => 'Message 2',
                'id'   => 'message_2_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'message_2_location',
                'name'        => 'Location',
                'type'        => 'text',
                'placeholder' => 'e.g., South Location',
            ),
            array(
                'id'          => 'message_2_text',
                'name'        => 'Message Text',
                'type'        => 'textarea',
                'rows'        => 2,
                'placeholder' => 'Important message',
            ),
            array(
                'id'          => 'message_2_link',
                'name'        => 'Link (optional)',
                'type'        => 'url',
                'placeholder' => 'https://example.com/details',
            ),
        ),
    );
    
    // Call to Action Buttons Section - ONLY ON FRONT PAGE
    $meta_boxes[] = array(
        'title'      => 'Call to Action Buttons',
        'id'         => 'cta_buttons_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'ID' => $front_page_id ? array($front_page_id) : array(),
        ),
        'fields'     => array(
            array(
                'name' => 'Bottom CTA Buttons',
                'id'   => 'cta_buttons_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'cta_button_1_text',
                'name'        => 'Button 1 Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Nos Programmes',
                'std'         => 'Nos Programmes',
            ),
            array(
                'id'          => 'cta_button_1_link',
                'name'        => 'Button 1 Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/programs',
            ),
            array(
                'id'          => 'cta_button_2_text',
                'name'        => 'Button 2 Text',
                'type'        => 'text',
                'placeholder' => 'e.g., À Propos De Nous',
                'std'         => 'À Propos De Nous',
            ),
            array(
                'id'          => 'cta_button_2_link',
                'name'        => 'Button 2 Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/about',
            ),
        ),
    );
    
    return $meta_boxes;
}