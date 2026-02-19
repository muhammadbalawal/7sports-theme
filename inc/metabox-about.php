<?php
/**
 * About Us Page MetaBoxes
 */

function sevensports_about_page_metabox_add( $meta_boxes ) {
    
    // About Us Page - Hero Section
    $meta_boxes[] = array(
        'title'      => 'About Us Hero Section',
        'id'         => 'about_hero_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-about.php' ),
        ),
        'fields'     => array(
            array(
                'id'               => 'about_hero_image',
                'name'             => 'Hero Background Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'about_hero_title',
                'name'        => 'Hero Title',
                'type'        => 'text',
                'placeholder' => 'e.g., About Us',
                'std'         => 'About Us',
            ),
        ),
    );
    
    // About Us Page - Founder Section
    $meta_boxes[] = array(
        'title'      => 'Founder Section',
        'id'         => 'about_founder_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-about.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'founder_section_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Le fondateur de 7 Sports',
                'std'         => 'Le fondateur de 7 Sports',
            ),
            array(
                'id'          => 'founder_subtitle',
                'name'        => 'Subtitle',
                'type'        => 'text',
                'placeholder' => 'e.g., Meet Our Founder',
            ),
            array(
                'id'               => 'founder_photo',
                'name'             => 'Founder Photo',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'founder_name',
                'name'        => 'Founder Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Robin Mitchell',
            ),
            array(
                'id'          => 'founder_title_position',
                'name'        => 'Position/Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Founder & CEO',
            ),
            array(
                'id'          => 'founder_quote',
                'name'        => 'Founder Quote',
                'type'        => 'textarea',
                'placeholder' => 'e.g., A short quote from the founder',
                'rows'        => 3,
            ),
            array(
                'id'          => 'founder_bio',
                'name'        => 'Founder Biography',
                'type'        => 'wysiwyg',
                'raw'         => false,
                'options'     => array(
                    'textarea_rows' => 10,
                    'media_buttons' => false,
                ),
            ),
        ),
    );
    
    // About Us Page - Coaches Section
    $meta_boxes[] = array(
        'title'      => 'Coaches Section',
        'id'         => 'about_coaches_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-about.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'coaches_section_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Nos super coachs!',
                'std'         => 'Nos super coachs!',
            ),
            // Coach 1
            array(
                'name' => 'Coach 1',
                'id'   => 'coach_1_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'coach_1_photo',
                'name'             => 'Photo',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'coach_1_name',
                'name'        => 'Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Kate Dupont',
            ),
            array(
                'id'          => 'coach_1_position',
                'name'        => 'Position',
                'type'        => 'text',
                'placeholder' => 'e.g., Head Coach 7 Sports',
            ),
            array(
                'id'          => 'coach_1_region',
                'name'        => 'Region',
                'type'        => 'text',
                'placeholder' => 'e.g., Montreal',
            ),
            array(
                'id'          => 'coach_1_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'placeholder' => 'Short description of the coach',
                'rows'        => 3,
            ),
            // Coach 2
            array(
                'name' => 'Coach 2',
                'id'   => 'coach_2_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'coach_2_photo',
                'name'             => 'Photo',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'coach_2_name',
                'name'        => 'Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Kate Dupont',
            ),
            array(
                'id'          => 'coach_2_position',
                'name'        => 'Position',
                'type'        => 'text',
                'placeholder' => 'e.g., Head Coach 7 Sports',
            ),
            array(
                'id'          => 'coach_2_region',
                'name'        => 'Region',
                'type'        => 'text',
                'placeholder' => 'e.g., Montreal',
            ),
            array(
                'id'          => 'coach_2_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'placeholder' => 'Short description of the coach',
                'rows'        => 3,
            ),
            // Coach 3
            array(
                'name' => 'Coach 3',
                'id'   => 'coach_3_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'coach_3_photo',
                'name'             => 'Photo',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'coach_3_name',
                'name'        => 'Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Kate Dupont',
            ),
            array(
                'id'          => 'coach_3_position',
                'name'        => 'Position',
                'type'        => 'text',
                'placeholder' => 'e.g., Head Coach 7 Sports',
            ),
            array(
                'id'          => 'coach_3_region',
                'name'        => 'Region',
                'type'        => 'text',
                'placeholder' => 'e.g., Montreal',
            ),
            array(
                'id'          => 'coach_3_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'placeholder' => 'Short description of the coach',
                'rows'        => 3,
            ),
            // Coach 4
            array(
                'name' => 'Coach 4',
                'id'   => 'coach_4_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'coach_4_photo',
                'name'             => 'Photo',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'coach_4_name',
                'name'        => 'Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Kate Dupont',
            ),
            array(
                'id'          => 'coach_4_position',
                'name'        => 'Position',
                'type'        => 'text',
                'placeholder' => 'e.g., Head Coach 7 Sports',
            ),
            array(
                'id'          => 'coach_4_region',
                'name'        => 'Region',
                'type'        => 'text',
                'placeholder' => 'e.g., Montreal',
            ),
            array(
                'id'          => 'coach_4_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'placeholder' => 'Short description of the coach',
                'rows'        => 3,
            ),
            // Coach 5
            array(
                'name' => 'Coach 5',
                'id'   => 'coach_5_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'coach_5_photo',
                'name'             => 'Photo',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'coach_5_name',
                'name'        => 'Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Kate Dupont',
            ),
            array(
                'id'          => 'coach_5_position',
                'name'        => 'Position',
                'type'        => 'text',
                'placeholder' => 'e.g., Head Coach 7 Sports',
            ),
            array(
                'id'          => 'coach_5_region',
                'name'        => 'Region',
                'type'        => 'text',
                'placeholder' => 'e.g., Montreal',
            ),
            array(
                'id'          => 'coach_5_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'placeholder' => 'Short description of the coach',
                'rows'        => 3,
            ),
        ),
    );
    
    // About Us Page - Values Section
    $meta_boxes[] = array(
        'title'      => 'Values Section',
        'id'         => 'about_values_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-about.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'values_section_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Nos valeurs',
                'std'         => 'Nos valeurs',
            ),
            // Value 1
            array(
                'name' => 'Value 1',
                'id'   => 'value_1_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'value_1_icon',
                'name'             => 'Icon',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'value_1_title',
                'name'        => 'Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Inclusivity',
            ),
            array(
                'id'          => 'value_1_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'rows'        => 3,
            ),
            // Value 2
            array(
                'name' => 'Value 2',
                'id'   => 'value_2_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'value_2_icon',
                'name'             => 'Icon',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'value_2_title',
                'name'        => 'Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Fun First',
            ),
            array(
                'id'          => 'value_2_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'rows'        => 3,
            ),
            // Value 3
            array(
                'name' => 'Value 3',
                'id'   => 'value_3_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'value_3_icon',
                'name'             => 'Icon',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'value_3_title',
                'name'        => 'Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Growth Mindset',
            ),
            array(
                'id'          => 'value_3_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'rows'        => 3,
            ),
            // Value 4
            array(
                'name' => 'Value 4',
                'id'   => 'value_4_divider',
                'type' => 'heading',
            ),
            array(
                'id'               => 'value_4_icon',
                'name'             => 'Icon',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'value_4_title',
                'name'        => 'Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Safety',
            ),
            array(
                'id'          => 'value_4_description',
                'name'        => 'Description',
                'type'        => 'textarea',
                'rows'        => 3,
            ),
        ),
    );
    
    // About Us Page - 7 Sports En Action Section
    $meta_boxes[] = array(
        'title'      => '7 Sports En Action Section',
        'id'         => 'about_action_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-about.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'action_section_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., 7 Sports En Action',
                'std'         => '7 Sports En Action',
            ),
            array(
                'id'               => 'action_main_image',
                'name'             => 'Main Action Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
        ),
    );
    
    // About Us Page - Why 7Sports Exists Section
    $meta_boxes[] = array(
        'title'      => 'Why 7Sports Exists Section',
        'id'         => 'about_why_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-about.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'why_section_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Why 7Sports Exists',
                'std'         => 'Why 7Sports Exists',
            ),
            array(
                'id'          => 'why_content',
                'name'        => 'Content',
                'type'        => 'wysiwyg',
                'raw'         => false,
                'options'     => array(
                    'textarea_rows' => 10,
                    'media_buttons' => false,
                ),
            ),
            array(
                'id'               => 'why_side_image',
                'name'             => 'Side Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
        ),
    );
    
    // About Us Page - Statistics Section
    $meta_boxes[] = array(
        'title'      => 'Statistics Section',
        'id'         => 'about_stats_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-about.php' ),
        ),
        'fields'     => array(
            // Stat 1
            array(
                'name' => 'Statistic 1',
                'id'   => 'stat_1_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'stat_1_number',
                'name'        => 'Number',
                'type'        => 'text',
                'placeholder' => 'e.g., 10,000+',
            ),
            array(
                'id'          => 'stat_1_label',
                'name'        => 'Label',
                'type'        => 'text',
                'placeholder' => 'e.g., Kids served',
            ),
            // Stat 2
            array(
                'name' => 'Statistic 2',
                'id'   => 'stat_2_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'stat_2_number',
                'name'        => 'Number',
                'type'        => 'text',
                'placeholder' => 'e.g., 50+',
            ),
            array(
                'id'          => 'stat_2_label',
                'name'        => 'Label',
                'type'        => 'text',
                'placeholder' => 'e.g., Locations',
            ),
            // Stat 3
            array(
                'name' => 'Statistic 3',
                'id'   => 'stat_3_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'stat_3_number',
                'name'        => 'Number',
                'type'        => 'text',
                'placeholder' => 'e.g., 7',
            ),
            array(
                'id'          => 'stat_3_label',
                'name'        => 'Label',
                'type'        => 'text',
                'placeholder' => 'e.g., Years of Excellence',
            ),
        ),
    );
    
    // About Us Page - Join Team CTA
    $meta_boxes[] = array(
        'title'      => 'Join Team CTA Section',
        'id'         => 'about_join_cta',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-about.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'join_cta_title',
                'name'        => 'CTA Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Tu veux rejoindre notre équipe ?',
                'std'         => 'Tu veux rejoindre notre équipe ?',
            ),
            array(
                'id'          => 'join_cta_subtitle',
                'name'        => 'CTA Subtitle',
                'type'        => 'textarea',
                'rows'        => 2,
                'placeholder' => 'Enter subtitle text',
            ),
            array(
                'id'          => 'join_cta_button_text',
                'name'        => 'Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Déposez-toi CV ici',
                'std'         => 'Déposez-toi CV ici',
            ),
            array(
                'id'          => 'join_cta_button_link',
                'name'        => 'Button Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/careers',
            ),
        ),
    );
    
    // About Us Page - Bottom CTA
    $meta_boxes[] = array(
        'title'      => 'Bottom CTA Button',
        'id'         => 'about_bottom_cta',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'template' => array( 'template-about.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'about_bottom_button_text',
                'name'        => 'Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Inscription',
                'std'         => 'Inscription',
            ),
            array(
                'id'          => 'about_bottom_button_link',
                'name'        => 'Button Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/registration',
            ),
        ),
    );
    
    return $meta_boxes;
}

// Hook it to the same filter
add_filter( 'rwmb_meta_boxes', 'sevensports_about_page_metabox_add' );