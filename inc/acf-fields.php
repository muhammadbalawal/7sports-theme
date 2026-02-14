<?php
/**
 * ACF Field Groups - FREE VERSION (No Repeaters)
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
            ),
            array(
                'key' => 'field_hero_age_range',
                'label' => 'Age Range',
                'name' => 'hero_age_range',
                'type' => 'text',
            ),
            array(
                'key' => 'field_hero_button_1_text',
                'label' => 'Button 1 Text',
                'name' => 'hero_button_1_text',
                'type' => 'text',
            ),
            array(
                'key' => 'field_hero_button_1_link',
                'label' => 'Button 1 Link',
                'name' => 'hero_button_1_link',
                'type' => 'url',
            ),
            array(
                'key' => 'field_hero_button_2_text',
                'label' => 'Button 2 Text',
                'name' => 'hero_button_2_text',
                'type' => 'text',
            ),
            array(
                'key' => 'field_hero_button_2_link',
                'label' => 'Button 2 Link',
                'name' => 'hero_button_2_link',
                'type' => 'url',
            ),
            array(
                'key' => 'field_hero_button_3_text',
                'label' => 'Button 3 Text',
                'name' => 'hero_button_3_text',
                'type' => 'text',
            ),
            array(
                'key' => 'field_hero_button_3_link',
                'label' => 'Button 3 Link',
                'name' => 'hero_button_3_link',
                'type' => 'url',
            ),
            array(
                'key' => 'field_hero_button_4_text',
                'label' => 'Button 4 Text',
                'name' => 'hero_button_4_text',
                'type' => 'text',
            ),
            array(
                'key' => 'field_hero_button_4_link',
                'label' => 'Button 4 Link',
                'name' => 'hero_button_4_link',
                'type' => 'url',
            ),
            array(
                'key' => 'field_hero_tagline',
                'label' => 'Hero Tagline',
                'name' => 'hero_tagline',
                'type' => 'text',
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

    // Homepage Highlights - NO REPEATER
    acf_add_local_field_group(array(
        'key' => 'group_homepage_highlights_v3',
        'title' => 'Highlights Section',
        'fields' => array(
            array(
                'key' => 'field_highlight_1_image',
                'label' => 'Highlight 1 - Image',
                'name' => 'highlight_1_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_highlight_1_title',
                'label' => 'Highlight 1 - Title',
                'name' => 'highlight_1_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_highlight_2_image',
                'label' => 'Highlight 2 - Image',
                'name' => 'highlight_2_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_highlight_2_title',
                'label' => 'Highlight 2 - Title',
                'name' => 'highlight_2_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_highlight_3_image',
                'label' => 'Highlight 3 - Image',
                'name' => 'highlight_3_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_highlight_3_title',
                'label' => 'Highlight 3 - Title',
                'name' => 'highlight_3_title',
                'type' => 'text',
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

    // Homepage Programs - 3 INDIVIDUAL PROGRAMS
    acf_add_local_field_group(array(
        'key' => 'group_homepage_programs_v3',
        'title' => 'Programs Section',
        'fields' => array(
            array(
                'key' => 'field_programs_section_title',
                'label' => 'Section Title',
                'name' => 'programs_section_title',
                'type' => 'text',
            ),
            // Program 1
            array(
                'key' => 'field_program_1_image',
                'label' => 'Program 1 - Image',
                'name' => 'program_1_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_program_1_name',
                'label' => 'Program 1 - Name',
                'name' => 'program_1_name',
                'type' => 'text',
            ),
            array(
                'key' => 'field_program_1_age',
                'label' => 'Program 1 - Age Range',
                'name' => 'program_1_age',
                'type' => 'text',
            ),
            array(
                'key' => 'field_program_1_description',
                'label' => 'Program 1 - Description',
                'name' => 'program_1_description',
                'type' => 'textarea',
                'rows' => 3,
            ),
            array(
                'key' => 'field_program_1_link',
                'label' => 'Program 1 - Link',
                'name' => 'program_1_link',
                'type' => 'url',
            ),
            // Program 2
            array(
                'key' => 'field_program_2_image',
                'label' => 'Program 2 - Image',
                'name' => 'program_2_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_program_2_name',
                'label' => 'Program 2 - Name',
                'name' => 'program_2_name',
                'type' => 'text',
            ),
            array(
                'key' => 'field_program_2_age',
                'label' => 'Program 2 - Age Range',
                'name' => 'program_2_age',
                'type' => 'text',
            ),
            array(
                'key' => 'field_program_2_description',
                'label' => 'Program 2 - Description',
                'name' => 'program_2_description',
                'type' => 'textarea',
                'rows' => 3,
            ),
            array(
                'key' => 'field_program_2_link',
                'label' => 'Program 2 - Link',
                'name' => 'program_2_link',
                'type' => 'url',
            ),
            // Program 3
            array(
                'key' => 'field_program_3_image',
                'label' => 'Program 3 - Image',
                'name' => 'program_3_image',
                'type' => 'image',
                'return_format' => 'url',
            ),
            array(
                'key' => 'field_program_3_name',
                'label' => 'Program 3 - Name',
                'name' => 'program_3_name',
                'type' => 'text',
            ),
            array(
                'key' => 'field_program_3_age',
                'label' => 'Program 3 - Age Range',
                'name' => 'program_3_age',
                'type' => 'text',
            ),
            array(
                'key' => 'field_program_3_description',
                'label' => 'Program 3 - Description',
                'name' => 'program_3_description',
                'type' => 'textarea',
                'rows' => 3,
            ),
            array(
                'key' => 'field_program_3_link',
                'label' => 'Program 3 - Link',
                'name' => 'program_3_link',
                'type' => 'url',
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

    // Homepage Testimonials - 3 INDIVIDUAL TESTIMONIALS
    acf_add_local_field_group(array(
        'key' => 'group_homepage_testimonials_v3',
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
            ),
            // Testimonial 1
            array(
                'key' => 'field_testimonial_1_rating',
                'label' => 'Testimonial 1 - Rating (1-5)',
                'name' => 'testimonial_1_rating',
                'type' => 'number',
                'default_value' => 5,
                'min' => 1,
                'max' => 5,
            ),
            array(
                'key' => 'field_testimonial_1_text',
                'label' => 'Testimonial 1 - Text',
                'name' => 'testimonial_1_text',
                'type' => 'textarea',
                'rows' => 4,
            ),
            array(
                'key' => 'field_testimonial_1_author',
                'label' => 'Testimonial 1 - Author',
                'name' => 'testimonial_1_author',
                'type' => 'text',
            ),
            // Testimonial 2
            array(
                'key' => 'field_testimonial_2_rating',
                'label' => 'Testimonial 2 - Rating (1-5)',
                'name' => 'testimonial_2_rating',
                'type' => 'number',
                'default_value' => 5,
                'min' => 1,
                'max' => 5,
            ),
            array(
                'key' => 'field_testimonial_2_text',
                'label' => 'Testimonial 2 - Text',
                'name' => 'testimonial_2_text',
                'type' => 'textarea',
                'rows' => 4,
            ),
            array(
                'key' => 'field_testimonial_2_author',
                'label' => 'Testimonial 2 - Author',
                'name' => 'testimonial_2_author',
                'type' => 'text',
            ),
            // Testimonial 3
            array(
                'key' => 'field_testimonial_3_rating',
                'label' => 'Testimonial 3 - Rating (1-5)',
                'name' => 'testimonial_3_rating',
                'type' => 'number',
                'default_value' => 5,
                'min' => 1,
                'max' => 5,
            ),
            array(
                'key' => 'field_testimonial_3_text',
                'label' => 'Testimonial 3 - Text',
                'name' => 'testimonial_3_text',
                'type' => 'textarea',
                'rows' => 4,
            ),
            array(
                'key' => 'field_testimonial_3_author',
                'label' => 'Testimonial 3 - Author',
                'name' => 'testimonial_3_author',
                'type' => 'text',
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

    // Homepage Important Messages - 1 MESSAGE
    acf_add_local_field_group(array(
        'key' => 'group_homepage_messages_v3',
        'title' => 'Important Messages Section',
        'fields' => array(
            array(
                'key' => 'field_important_messages_title',
                'label' => 'Section Title',
                'name' => 'important_messages_title',
                'type' => 'text',
            ),
            array(
                'key' => 'field_message_location',
                'label' => 'Message Location',
                'name' => 'message_location',
                'type' => 'text',
            ),
            array(
                'key' => 'field_message_text',
                'label' => 'Message Text',
                'name' => 'message_text',
                'type' => 'textarea',
                'rows' => 2,
            ),
            array(
                'key' => 'field_message_link',
                'label' => 'Message Link',
                'name' => 'message_link',
                'type' => 'url',
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