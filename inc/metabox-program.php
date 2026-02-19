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
                'id'          => 'location_address',
                'name'        => __( 'Location Address', 'sevensports' ),
                'type'        => 'text',
                'placeholder' => 'e.g., Montreal, QC',
            ),
            array(
                'id'          => 'location_latitude',
                'name'        => __( 'Latitude', 'sevensports' ),
                'type'        => 'text',
                'placeholder' => '45.5017',
                'desc'        => __( 'For map marker', 'sevensports' ),
            ),
            array(
                'id'          => 'location_longitude',
                'name'        => __( 'Longitude', 'sevensports' ),
                'type'        => 'text',
                'placeholder' => '-73.5673',
                'desc'        => __( 'For map marker', 'sevensports' ),
            ),
            array(
                'id'          => 'distance',
                'name'        => __( 'Distance from Center', 'sevensports' ),
                'type'        => 'text',
                'placeholder' => 'e.g., 2.5 km away',
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
