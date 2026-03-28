<?php
/**
 * Meta box for Program post type (used on Registration page to display programs).
 * Program name = post title. These fields are the extra details.
 */
function sevensports_program_metabox( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Program Details', 'sevensports' ),
        'id'         => 'program_details',
        'post_types' => array( 'program' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => array(
            array(
                'id'               => 'program_image',
                'name'             => __( 'Program Image', 'sevensports' ),
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
                'desc'             => __( 'Image shown at the top of the program card on the Registration page.', 'sevensports' ),
            ),
            array(
                'id'      => 'sport_type',
                'name'    => __( 'Sport Type', 'sevensports' ),
                'type'    => 'select',
                'options' => array(
                    'soccer'      => 'Soccer',
                    'dek_hockey'  => 'Dek Hockey',
                    'multi_sport' => 'Multi-Sport',
                ),
                'std'     => 'soccer',
            ),
            array(
                'id'          => 'location_heading',
                'name'        => __( 'Location Heading', 'sevensports' ),
                'type'        => 'text',
                'placeholder' => 'e.g., Location',
                'desc'        => __( 'Bold heading shown above the location address', 'sevensports' ),
            ),
            array(
                'id'          => 'location_address',
                'name'        => __( 'Location Address', 'sevensports' ),
                'type'        => 'text',
                'placeholder' => 'Start typing an address…',
                'desc'        => __( 'Type to search — pick from the suggestions to save coordinates automatically.', 'sevensports' ),
            ),
            array(
                'id'          => 'location_city',
                'name'        => __( 'City / Region', 'sevensports' ),
                'type'        => 'text',
                'placeholder' => 'e.g., Montréal',
                'desc'        => __( 'Used for the City/Region filter on the registration page.', 'sevensports' ),
            ),
            array(
                'id'   => 'location_latitude',
                'name' => __( 'Latitude', 'sevensports' ),
                'type' => 'hidden',
            ),
            array(
                'id'   => 'location_longitude',
                'name' => __( 'Longitude', 'sevensports' ),
                'type' => 'hidden',
            ),
            array(
                'id'          => 'age_range',
                'name'        => __( 'Age Range', 'sevensports' ),
                'type'        => 'text',
                'placeholder' => 'e.g., Ages 4-12',
            ),
            array(
                'id'          => 'program_type',
                'name'        => __( 'Program Type', 'sevensports' ),
                'type'        => 'text',
                'placeholder' => 'e.g., Indoor & Outdoor',
            ),
            array(
                'id'          => 'season',
                'name'        => __( 'Season', 'sevensports' ),
                'type'        => 'text',
                'placeholder' => 'e.g., Winter 2025',
            ),
            array(
                'id'          => 'schedule',
                'name'        => __( 'Schedule', 'sevensports' ),
                'type'        => 'text',
                'placeholder' => 'e.g., Weekdays & Weekends',
            ),
            array(
                'id'          => 'price',
                'name'        => __( 'Price', 'sevensports' ),
                'type'        => 'text',
                'placeholder' => 'e.g., From $120/month',
            ),
            array(
                'id'          => 'inscription_link',
                'name'        => __( 'Inscription Link', 'sevensports' ),
                'type'        => 'url',
                'placeholder' => 'https://example.com/register',
            ),
            array(
                'id'          => 'trial_link',
                'name'        => __( 'Trial Link (Essais gratuits)', 'sevensports' ),
                'type'        => 'url',
                'placeholder' => 'https://example.com/trial',
            ),
        ),
    );
    return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'sevensports_program_metabox' );
