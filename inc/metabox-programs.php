<?php
/**
 * Programs Template MetaBoxes
 */

add_filter( 'rwmb_meta_boxes', 'sevensports_programs_page_metabox_add' );

function sevensports_programs_page_metabox_add( $meta_boxes ) {
    
    // Programs Page - Hero Section
    $meta_boxes[] = array(
        'title'      => 'Programs Hero Section',
        'id'         => 'programs_hero_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-programs.php' ),
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
    
    // Programs Categories & Featured Programs (Combined)
    $meta_boxes[] = array(
        'title'      => 'Program Categories & Featured Programs',
        'id'         => 'programs_categories_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-programs.php' ),
        ),
        'fields'     => array(
            // ========== CATEGORY 1 ==========
            array(
                'name' => 'CATEGORY 1',
                'id'   => 'category_1_section',
                'type' => 'heading',
                'desc' => 'Button label and its featured program content',
            ),
            array(
                'id'          => 'cat_button_1_text',
                'name'        => 'Category Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Multisport',
            ),
            array(
                'id'               => 'featured_program_1_icon',
                'name'             => 'Icon/Logo',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'featured_program_1_title',
                'name'        => 'Program Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Programme Multisport',
            ),
            array(
                'id'               => 'featured_program_1_image',
                'name'             => 'Program Main Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'featured_program_1_description',
                'name'        => 'Program Description',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter program description',
            ),
            
            // ========== CATEGORY 2 ==========
            array(
                'name' => 'CATEGORY 2',
                'id'   => 'category_2_section',
                'type' => 'heading',
                'desc' => 'Button label and its featured program content',
            ),
            array(
                'id'          => 'cat_button_2_text',
                'name'        => 'Category Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Soccer',
            ),
            array(
                'id'               => 'featured_program_2_icon',
                'name'             => 'Icon/Logo',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'featured_program_2_title',
                'name'        => 'Program Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Programme De Soccer',
            ),
            array(
                'id'               => 'featured_program_2_image',
                'name'             => 'Program Main Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'featured_program_2_description',
                'name'        => 'Program Description',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter program description',
            ),
            
            // ========== CATEGORY 3 ==========
            array(
                'name' => 'CATEGORY 3',
                'id'   => 'category_3_section',
                'type' => 'heading',
                'desc' => 'Button label and its featured program content',
            ),
            array(
                'id'          => 'cat_button_3_text',
                'name'        => 'Category Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Dek Hockey',
            ),
            array(
                'id'               => 'featured_program_3_icon',
                'name'             => 'Icon/Logo',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'featured_program_3_title',
                'name'        => 'Program Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Programme Dek Hockey',
            ),
            array(
                'id'               => 'featured_program_3_image',
                'name'             => 'Program Main Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'featured_program_3_description',
                'name'        => 'Program Description',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter program description',
            ),
            
            // ========== CATEGORY 4 ==========
            array(
                'name' => 'CATEGORY 4',
                'id'   => 'category_4_section',
                'type' => 'heading',
                'desc' => 'Button label and its featured program content',
            ),
            array(
                'id'          => 'cat_button_4_text',
                'name'        => 'Category Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Événements',
            ),
            array(
                'id'               => 'featured_program_4_icon',
                'name'             => 'Icon/Logo',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'featured_program_4_title',
                'name'        => 'Program Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Événements Spéciaux',
            ),
            array(
                'id'               => 'featured_program_4_image',
                'name'             => 'Program Main Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'featured_program_4_description',
                'name'        => 'Program Description',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter program description',
            ),
        ),
    );
    
    // Age Groups Section
    $meta_boxes[] = array(
        'title'      => 'Age Groups Section',
        'id'         => 'age_groups_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-programs.php' ),
        ),
        'fields'     => array(
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
    
    // Registration CTA
    $meta_boxes[] = array(
        'title'      => 'Registration CTA',
        'id'         => 'programs_registration_cta',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-programs.php' ),
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
    
    // Additional Services
    $meta_boxes[] = array(
        'title'      => 'Additional Services',
        'id'         => 'additional_services_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-programs.php' ),
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
    
    // Submission CTA
    $meta_boxes[] = array(
        'title'      => 'Submission CTA Section',
        'id'         => 'programs_submission_cta',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-programs.php' ),
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
    
    // Programs Bottom CTA Buttons
    $meta_boxes[] = array(
        'title'      => 'Programs Bottom CTA Buttons',
        'id'         => 'programs_bottom_cta',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-programs.php' ),
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