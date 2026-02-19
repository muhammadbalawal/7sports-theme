<?php
/**
 * Registration/Inscription Page MetaBoxes
 */

function sevensports_registration_page_metabox_add( $meta_boxes ) {
    
    // Registration Page - Hero Section
    $meta_boxes[] = array(
        'title'      => 'Registration Hero Section',
        'id'         => 'registration_hero_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'template-registration.php' ),
        ),
        'fields'     => array(
            array(
                'id'               => 'registration_hero_image',
                'name'             => 'Hero Background Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'registration_hero_title',
                'name'        => 'Hero Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Inscription',
                'std'         => 'Inscription',
            ),
            array(
                'id'          => 'registration_hero_subtitle',
                'name'        => 'Hero Subtitle',
                'type'        => 'text',
                'placeholder' => 'e.g., Choisissez Votre Région.',
                'std'         => 'Choisissez Votre Région.',
            ),
        ),
    );
    
    // Registration Page - Region Buttons
    $meta_boxes[] = array(
        'title'      => 'Region Buttons',
        'id'         => 'registration_regions_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'template-registration.php' ),
        ),
        'fields'     => array(
            // Region 1
            array(
                'name' => 'Region 1',
                'id'   => 'region_1_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'region_1_name',
                'name'        => 'Region Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Montérégie',
                'std'         => 'Montérégie',
            ),
            array(
                'id'          => 'region_1_link',
                'name'        => 'Region Link (optional)',
                'type'        => 'url',
                'placeholder' => 'Leave empty to use as filter',
            ),
            // Region 2
            array(
                'name' => 'Region 2',
                'id'   => 'region_2_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'region_2_name',
                'name'        => 'Region Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Montréal',
                'std'         => 'Montréal',
            ),
            array(
                'id'          => 'region_2_link',
                'name'        => 'Region Link (optional)',
                'type'        => 'url',
                'placeholder' => 'Leave empty to use as filter',
            ),
            // Region 3
            array(
                'name' => 'Region 3',
                'id'   => 'region_3_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'region_3_name',
                'name'        => 'Region Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Estrie',
                'std'         => 'Estrie',
            ),
            array(
                'id'          => 'region_3_link',
                'name'        => 'Region Link (optional)',
                'type'        => 'url',
                'placeholder' => 'Leave empty to use as filter',
            ),
            // Region 4
            array(
                'name' => 'Region 4',
                'id'   => 'region_4_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'region_4_name',
                'name'        => 'Region Name',
                'type'        => 'text',
                'placeholder' => 'e.g., Outaouais',
                'std'         => 'Outaouais',
            ),
            array(
                'id'          => 'region_4_link',
                'name'        => 'Region Link (optional)',
                'type'        => 'url',
                'placeholder' => 'Leave empty to use as filter',
            ),
        ),
    );
    
    // Registration Page - Map Settings
    $meta_boxes[] = array(
        'title'      => 'Map Settings',
        'id'         => 'registration_map_settings',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'template-registration.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'programs_list_title',
                'name'        => 'Programs Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Available Programs',
                'std'         => 'Available Programs',
            ),
            array(
                'id'          => 'map_center_latitude',
                'name'        => 'Map Center Latitude',
                'type'        => 'text',
                'placeholder' => '45.5017',
                'std'         => '45.5017',
                'desc'        => 'Latitude for map center (Montreal default)',
            ),
            array(
                'id'          => 'map_center_longitude',
                'name'        => 'Map Center Longitude',
                'type'        => 'text',
                'placeholder' => '-73.5673',
                'std'         => '-73.5673',
                'desc'        => 'Longitude for map center (Montreal default)',
            ),
            array(
                'id'          => 'map_zoom_level',
                'name'        => 'Map Zoom Level',
                'type'        => 'number',
                'min'         => 1,
                'max'         => 20,
                'step'        => 1,
                'std'         => 11,
                'desc'        => 'Zoom level (1-20, recommended: 10-12)',
            ),
        ),
    );
    
    // Registration Page - Bottom CTA Buttons
    $meta_boxes[] = array(
        'title'      => 'Bottom CTA Buttons',
        'id'         => 'registration_bottom_cta',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'template-registration.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'registration_cta_button_1_text',
                'name'        => 'Button 1 Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Nos Programmes',
                'std'         => 'Nos Programmes',
            ),
            array(
                'id'          => 'registration_cta_button_1_link',
                'name'        => 'Button 1 Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/programs',
            ),
            array(
                'id'          => 'registration_cta_button_2_text',
                'name'        => 'Button 2 Text',
                'type'        => 'text',
                'placeholder' => 'e.g., À Propos De Nous',
                'std'         => 'À Propos De Nous',
            ),
            array(
                'id'          => 'registration_cta_button_2_link',
                'name'        => 'Button 2 Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/about',
            ),
        ),
    );
    
    return $meta_boxes;
}

// Hook it to the same filter
add_filter( 'rwmb_meta_boxes', 'sevensports_registration_page_metabox_add' );