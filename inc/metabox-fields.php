<?php
/**
 * MetaBox Field Groups - Fixed Fields (No Repeaters)
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
            'ID'       => get_option( 'page_on_front' ),
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
            // Hero Button 1
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
            // Hero Button 2
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
            // Hero Button 3
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
            // Hero Button 4
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
            // Highlight 1
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
            // Highlight 2
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
            // Highlight 3
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
                'id'          => 'programs_section_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Our Programs',
            ),
            // Program 1
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
            // Program 2
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
            // Program 3
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
                'id'          => 'testimonials_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., What Parents Say',
            ),
            // Testimonial 1
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
            // Testimonial 2
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
            // Testimonial 3
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
                'id'          => 'important_messages_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Important Updates',
            ),
            // Message 1
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
            // Message 2
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
    
    // Call to Action Buttons Section
    $meta_boxes[] = array(
        'title'      => 'Call to Action Buttons',
        'id'         => 'cta_buttons_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'ID'       => get_option( 'page_on_front' ),
        ),
        'fields'     => array(
            array(
                'name' => 'Bottom CTA Buttons',
                'id'   => 'cta_buttons_divider',
                'type' => 'heading',
            ),
            // CTA Button 1
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
            // CTA Button 2
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

function sevensports_programs_page_metabox_add( $meta_boxes ) {
    
    // Programs Page - Hero Section
    $meta_boxes[] = array(
        'title'      => 'Programs Hero Section',
        'id'         => 'programs_hero_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'page-programs.php' ),
        ),
        'fields'     => array(
            array(
                'id'               => 'programs_hero_image',
                'name'             => 'Hero Background Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'programs_hero_title',
                'name'        => 'Hero Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Nos Programmes',
                'std'         => 'Nos Programmes',
            ),
            array(
                'id'          => 'programs_hero_subtitle',
                'name'        => 'Hero Subtitle',
                'type'        => 'textarea',
                'rows'        => 2,
                'placeholder' => 'e.g., Multisport, Soccer, Dek Hockey, Événements, Garderies, Écoles.',
            ),
        ),
    );
    
    // Programs Page - Navigation Buttons
    $meta_boxes[] = array(
        'title'      => 'Program Category Buttons',
        'id'         => 'programs_nav_buttons',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'page-programs.php' ),
        ),
        'fields'     => array(
            array(
                'name' => 'Category Button 1',
                'id'   => 'cat_button_1_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'cat_button_1_text',
                'name'        => 'Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Multisport',
            ),
            array(
                'id'          => 'cat_button_1_link',
                'name'        => 'Button Link',
                'type'        => 'url',
                'placeholder' => '#multisport',
            ),
            array(
                'name' => 'Category Button 2',
                'id'   => 'cat_button_2_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'cat_button_2_text',
                'name'        => 'Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Soccer',
            ),
            array(
                'id'          => 'cat_button_2_link',
                'name'        => 'Button Link',
                'type'        => 'url',
                'placeholder' => '#soccer',
            ),
            array(
                'name' => 'Category Button 3',
                'id'   => 'cat_button_3_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'cat_button_3_text',
                'name'        => 'Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Dek Hockey',
            ),
            array(
                'id'          => 'cat_button_3_link',
                'name'        => 'Button Link',
                'type'        => 'url',
                'placeholder' => '#dek-hockey',
            ),
            array(
                'name' => 'Category Button 4',
                'id'   => 'cat_button_4_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'cat_button_4_text',
                'name'        => 'Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Événements',
            ),
            array(
                'id'          => 'cat_button_4_link',
                'name'        => 'Button Link',
                'type'        => 'url',
                'placeholder' => '#evenements',
            ),
        ),
    );
    
    // Programs Page - Featured Program (Soccer Example)
    $meta_boxes[] = array(
        'title'      => 'Featured Program Section',
        'id'         => 'featured_program_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'page-programs.php' ),
        ),
        'fields'     => array(
            array(
                'id'               => 'featured_program_icon',
                'name'             => 'Program Icon/Logo',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'featured_program_title',
                'name'        => 'Program Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Programme De Soccer',
                'std'         => 'Programme De Soccer',
            ),
            array(
                'id'               => 'featured_program_image',
                'name'             => 'Program Main Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'featured_program_description',
                'name'        => 'Program Description',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter program description',
            ),
        ),
    );
    
    // Programs Page - Age Groups
    $meta_boxes[] = array(
        'title'      => 'Age Groups Section',
        'id'         => 'age_groups_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'page-programs.php' ),
        ),
        'fields'     => array(
            // Age Group 1
            array(
                'name' => 'Age Group 1 (2-4 ans)',
                'id'   => 'age_group_1_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'age_group_1_title',
                'name'        => 'Age Range',
                'type'        => 'text',
                'placeholder' => 'e.g., 2-4 ans',
                'std'         => '2-4 ans',
            ),
            array(
                'id'          => 'age_group_1_content',
                'name'        => 'Content/Details',
                'type'        => 'wysiwyg',
                'raw'         => false,
                'options'     => array(
                    'textarea_rows' => 8,
                    'media_buttons' => false,
                ),
            ),
            // Age Group 2
            array(
                'name' => 'Age Group 2 (4-6 ans)',
                'id'   => 'age_group_2_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'age_group_2_title',
                'name'        => 'Age Range',
                'type'        => 'text',
                'placeholder' => 'e.g., 4-6 ans',
                'std'         => '4-6 ans',
            ),
            array(
                'id'          => 'age_group_2_content',
                'name'        => 'Content/Details',
                'type'        => 'wysiwyg',
                'raw'         => false,
                'options'     => array(
                    'textarea_rows' => 8,
                    'media_buttons' => false,
                ),
            ),
            // Age Group 3
            array(
                'name' => 'Age Group 3 (7 ans et plus)',
                'id'   => 'age_group_3_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'age_group_3_title',
                'name'        => 'Age Range',
                'type'        => 'text',
                'placeholder' => 'e.g., 7 ans et plus',
                'std'         => '7 ans et plus',
            ),
            array(
                'id'          => 'age_group_3_content',
                'name'        => 'Content/Details',
                'type'        => 'wysiwyg',
                'raw'         => false,
                'options'     => array(
                    'textarea_rows' => 8,
                    'media_buttons' => false,
                ),
            ),
        ),
    );
    
    // Programs Page - Registration CTA
    $meta_boxes[] = array(
        'title'      => 'Registration CTA',
        'id'         => 'programs_registration_cta',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'page-programs.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'registration_button_text',
                'name'        => 'Registration Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Inscription',
                'std'         => 'Inscription',
            ),
            array(
                'id'          => 'registration_button_link',
                'name'        => 'Registration Button Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/registration',
            ),
        ),
    );
    
    // Programs Page - Additional Services
    $meta_boxes[] = array(
        'title'      => 'Additional Services (Birthday Parties)',
        'id'         => 'additional_services_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'page-programs.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'services_section_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Services Additionnels',
                'std'         => 'Services Additionnels',
            ),
            array(
                'id'          => 'services_description',
                'name'        => 'Section Description',
                'type'        => 'textarea',
                'rows'        => 2,
            ),
            // Service 1
            array(
                'name' => 'Service 1',
                'id'   => 'service_1_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'service_1_icon',
                'name'             => 'Icon',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'service_1_title',
                'name'        => 'Service Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Birthday parties',
            ),
            array(
                'id'          => 'service_1_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'rows'        => 3,
            ),
            // Service 2
            array(
                'name' => 'Service 2',
                'id'   => 'service_2_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'service_2_icon',
                'name'             => 'Icon',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'service_2_title',
                'name'        => 'Service Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Birthday parties',
            ),
            array(
                'id'          => 'service_2_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'rows'        => 3,
            ),
            // Service 3
            array(
                'name' => 'Service 3',
                'id'   => 'service_3_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'service_3_icon',
                'name'             => 'Icon',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'service_3_title',
                'name'        => 'Service Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Birthday parties',
            ),
            array(
                'id'          => 'service_3_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'rows'        => 3,
            ),
            // Service 4
            array(
                'name' => 'Service 4',
                'id'   => 'service_4_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'service_4_icon',
                'name'             => 'Icon',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'service_4_title',
                'name'        => 'Service Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Birthday parties',
            ),
            array(
                'id'          => 'service_4_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'rows'        => 3,
            ),
            // Service 5
            array(
                'name' => 'Service 5',
                'id'   => 'service_5_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'service_5_icon',
                'name'             => 'Icon',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'service_5_title',
                'name'        => 'Service Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Birthday parties',
            ),
            array(
                'id'          => 'service_5_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'rows'        => 3,
            ),
        ),
    );
    
    // Programs Page - Submission CTA
    $meta_boxes[] = array(
        'title'      => 'Submission CTA Section',
        'id'         => 'programs_submission_cta',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'page-programs.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'submission_button_text',
                'name'        => 'Submission Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Soumission',
                'std'         => 'Soumission',
            ),
            array(
                'id'          => 'submission_button_link',
                'name'        => 'Submission Button Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/soumission',
            ),
        ),
    );
    
    // Programs Page - Bottom CTA Buttons
    $meta_boxes[] = array(
        'title'      => 'Programs Bottom CTA Buttons',
        'id'         => 'programs_bottom_cta',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'page-programs.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'programs_cta_button_1_text',
                'name'        => 'Button 1 Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Inscription',
                'std'         => 'Inscription',
            ),
            array(
                'id'          => 'programs_cta_button_1_link',
                'name'        => 'Button 1 Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/inscription',
            ),
            array(
                'id'          => 'programs_cta_button_2_text',
                'name'        => 'Button 2 Text',
                'type'        => 'text',
                'placeholder' => "e.g., S'Inscrire",
                'std'         => "S'Inscrire",
            ),
            array(
                'id'          => 'programs_cta_button_2_link',
                'name'        => 'Button 2 Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/register',
            ),
        ),
    );
    
    return $meta_boxes;
}

// Hook it to the same filter
add_filter( 'rwmb_meta_boxes', 'sevensports_programs_page_metabox_add' );
?>