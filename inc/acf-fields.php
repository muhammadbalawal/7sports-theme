<?php
/**
 * ACF Field Groups
 */

if(function_exists('acf_add_local_field_group')) {
    
    // Homepage Hero Section
    acf_add_local_field_group(array(
        'key' => 'group_homepage_hero',
        'title' => 'Hero Section',
        'fields' => array(
            array(
                'key' => 'field_hero_background_image',
                'label' => 'Hero Background Image',
                'name' => 'hero_background_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_hero_logo',
                'label' => 'Hero Logo',
                'name' => 'hero_logo',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_hero_title',
                'label' => 'Hero Title',
                'name' => 'hero_title',
                'type' => 'text',
                'default_value' => 'Soccer. Multisport. Hockey.',
            ),
            array(
                'key' => 'field_hero_age_range',
                'label' => 'Age Range',
                'name' => 'hero_age_range',
                'type' => 'text',
                'default_value' => '2 - 12 ans',
            ),
            array(
                'key' => 'field_hero_buttons',
                'label' => 'Hero Buttons',
                'name' => 'hero_buttons',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Button',
                'sub_fields' => array(
                    array(
                        'key' => 'field_button_text',
                        'label' => 'Button Text',
                        'name' => 'button_text',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_button_link',
                        'label' => 'Button Link',
                        'name' => 'button_link',
                        'type' => 'url',
                    ),
                    array(
                        'key' => 'field_button_style',
                        'label' => 'Button Style',
                        'name' => 'button_style',
                        'type' => 'select',
                        'choices' => array(
                            'red' => 'Red',
                            'white' => 'White',
                        ),
                        'default_value' => 'red',
                    ),
                ),
            ),
            array(
                'key' => 'field_hero_tagline',
                'label' => 'Hero Tagline',
                'name' => 'hero_tagline',
                'type' => 'text',
                'default_value' => 'Confiance. Découverte. Développement. Plaisir.',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
    ));

    // Homepage Highlights
    acf_add_local_field_group(array(
        'key' => 'group_homepage_highlights',
        'title' => 'Highlights Section',
        'fields' => array(
            array(
                'key' => 'field_highlights',
                'label' => 'Highlights',
                'name' => 'highlights',
                'type' => 'repeater',
                'layout' => 'table',
                'button_label' => 'Add Highlight',
                'sub_fields' => array(
                    array(
                        'key' => 'field_highlight_title',
                        'label' => 'Title',
                        'name' => 'title',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_highlight_description',
                        'label' => 'Description',
                        'name' => 'description',
                        'type' => 'text',
                    ),
                ),
            ),
            array(
                'key' => 'field_separator_image',
                'label' => 'Separator Image',
                'name' => 'separator_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
    ));

    // Homepage Programs
    acf_add_local_field_group(array(
        'key' => 'group_homepage_programs',
        'title' => 'Programs Section',
        'fields' => array(
            array(
                'key' => 'field_programs_section_title',
                'label' => 'Section Title',
                'name' => 'programs_section_title',
                'type' => 'text',
                'default_value' => 'Aperçu des programmes',
            ),
            array(
                'key' => 'field_program_cards',
                'label' => 'Program Cards',
                'name' => 'program_cards',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Program',
                'sub_fields' => array(
                    array(
                        'key' => 'field_program_name',
                        'label' => 'Program Name',
                        'name' => 'program_name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_program_age',
                        'label' => 'Age Range',
                        'name' => 'program_age',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_program_description',
                        'label' => 'Description',
                        'name' => 'program_description',
                        'type' => 'textarea',
                        'rows' => 3,
                    ),
                    array(
                        'key' => 'field_program_image',
                        'label' => 'Program Image',
                        'name' => 'program_image',
                        'type' => 'image',
                        'return_format' => 'url',
                    ),
                    array(
                        'key' => 'field_program_link',
                        'label' => 'Link',
                        'name' => 'program_link',
                        'type' => 'url',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
    ));

    // Homepage Testimonials
    acf_add_local_field_group(array(
        'key' => 'group_homepage_testimonials',
        'title' => 'Testimonials Section',
        'fields' => array(
            array(
                'key' => 'field_testimonials_background',
                'label' => 'Background Image',
                'name' => 'testimonials_background',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_testimonials_title',
                'label' => 'Section Title',
                'name' => 'testimonials_title',
                'type' => 'text',
                'default_value' => 'What parents say',
            ),
            array(
                'key' => 'field_testimonials',
                'label' => 'Testimonials',
                'name' => 'testimonials',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Testimonial',
                'sub_fields' => array(
                    array(
                        'key' => 'field_rating',
                        'label' => 'Rating (1-5)',
                        'name' => 'rating',
                        'type' => 'number',
                        'default_value' => 5,
                        'min' => 1,
                        'max' => 5,
                    ),
                    array(
                        'key' => 'field_testimonial_text',
                        'label' => 'Testimonial Text',
                        'name' => 'testimonial_text',
                        'type' => 'textarea',
                        'rows' => 4,
                    ),
                    array(
                        'key' => 'field_author',
                        'label' => 'Author',
                        'name' => 'author',
                        'type' => 'text',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
    ));

    // Homepage Important Messages
    acf_add_local_field_group(array(
        'key' => 'group_homepage_messages',
        'title' => 'Important Messages Section',
        'fields' => array(
            array(
                'key' => 'field_important_messages_title',
                'label' => 'Section Title',
                'name' => 'important_messages_title',
                'type' => 'text',
                'default_value' => 'Messages Importants',
            ),
            array(
                'key' => 'field_important_messages',
                'label' => 'Messages',
                'name' => 'important_messages',
                'type' => 'repeater',
                'layout' => 'block',
                'button_label' => 'Add Message',
                'sub_fields' => array(
                    array(
                        'key' => 'field_message_location',
                        'label' => 'Location',
                        'name' => 'location',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_message',
                        'label' => 'Message',
                        'name' => 'message',
                        'type' => 'textarea',
                        'rows' => 2,
                    ),
                    array(
                        'key' => 'field_message_link',
                        'label' => 'Link',
                        'name' => 'link',
                        'type' => 'url',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
    ));

    // Homepage About & CTA
    acf_add_local_field_group(array(
        'key' => 'group_homepage_about_cta',
        'title' => 'About & CTA Sections',
        'fields' => array(
            array(
                'key' => 'field_about_title',
                'label' => 'About Title',
                'name' => 'about_title',
                'type' => 'text',
                'default_value' => 'Building Champions Since 2018',
            ),
            array(
                'key' => 'field_about_description',
                'label' => 'About Description',
                'name' => 'about_description',
                'type' => 'textarea',
                'rows' => 4,
            ),
            array(
                'key' => 'field_footer_cta_title',
                'label' => 'Footer CTA Title',
                'name' => 'footer_cta_title',
                'type' => 'text',
                'default_value' => 'Ready to Register?',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_type',
                    'operator' => '==',
                    'value' => 'front_page',
                ),
            ),
        ),
    ));
    
}
?>