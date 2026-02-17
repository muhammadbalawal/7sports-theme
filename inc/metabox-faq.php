<?php

function sevensports_faq_page_metabox_add( $meta_boxes ) {
    
    // FAQ Page - Hero Section
    $meta_boxes[] = array(
        'title'      => 'FAQ Hero Section',
        'id'         => 'faq_hero_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'template-faq.php' ),
        ),
        'fields'     => array(
            array(
                'id'               => 'faq_hero_image',
                'name'             => 'Hero Background Image',
                'type'             => 'image_advanced',
                'max_file_uploads' => 1,
            ),
            array(
                'id'          => 'faq_hero_title',
                'name'        => 'Hero Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Foire aux questions',
                'std'         => 'Foire aux questions',
            ),
            array(
                'id'          => 'faq_hero_subtitle',
                'name'        => 'Hero Subtitle',
                'type'        => 'textarea',
                'rows'        => 2,
                'placeholder' => 'e.g., Trouvez Rapidement Les Réponses À Vos Questions.',
            ),
        ),
    );
    
    // FAQ Page - Payment & Registration Section
    $meta_boxes[] = array(
        'title'      => 'FAQ Section: Payment & Registration',
        'id'         => 'faq_payment_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'template-faq.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'faq_section_payment_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Paiement Et Inscription',
                'std'         => 'Paiement Et Inscription',
            ),
            // Question 1
            array(
                'name' => 'Question 1',
                'id'   => 'faq_payment_q1_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_payment_q1',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., Comment indice une enfant?',
            ),
            array(
                'id'          => 'faq_payment_a1',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
            // Question 2
            array(
                'name' => 'Question 2',
                'id'   => 'faq_payment_q2_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_payment_q2',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., What payment methods do you accept?',
            ),
            array(
                'id'          => 'faq_payment_a2',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
            // Question 3
            array(
                'name' => 'Question 3',
                'id'   => 'faq_payment_q3_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_payment_q3',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., Is there a registration fee?',
            ),
            array(
                'id'          => 'faq_payment_a3',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
            // Question 4
            array(
                'name' => 'Question 4',
                'id'   => 'faq_payment_q4_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_payment_q4',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., What is your refund policy?',
            ),
            array(
                'id'          => 'faq_payment_a4',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
        ),
    );
    
    // FAQ Page - Calendar & Season Section
    $meta_boxes[] = array(
        'title'      => 'FAQ Section: Calendar & Season',
        'id'         => 'faq_calendar_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'template-faq.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'faq_section_calendar_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Calendrier Et Saison',
                'std'         => 'Calendrier Et Saison',
            ),
            // Question 1
            array(
                'name' => 'Question 1',
                'id'   => 'faq_calendar_q1_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_calendar_q1',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., How long is each session?',
            ),
            array(
                'id'          => 'faq_calendar_a1',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
            // Question 2
            array(
                'name' => 'Question 2',
                'id'   => 'faq_calendar_q2_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_calendar_q2',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., What days and times are programs offered?',
            ),
            array(
                'id'          => 'faq_calendar_a2',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
            // Question 3
            array(
                'name' => 'Question 3',
                'id'   => 'faq_calendar_q3_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_calendar_q3',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., What happens if my child misses a session?',
            ),
            array(
                'id'          => 'faq_calendar_a3',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
            // Question 4
            array(
                'name' => 'Question 4',
                'id'   => 'faq_calendar_q4_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_calendar_q4',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., Do you offer drop-in or single-session options?',
            ),
            array(
                'id'          => 'faq_calendar_a4',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
        ),
    );
    
    // FAQ Page - Age & Groups Section
    $meta_boxes[] = array(
        'title'      => 'FAQ Section: Age & Groups',
        'id'         => 'faq_age_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'template-faq.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'faq_section_age_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Âge Et Groupes',
                'std'         => 'Âge Et Groupes',
            ),
            // Question 1
            array(
                'name' => 'Question 1',
                'id'   => 'faq_age_q1_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_age_q1',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., My child just turned 5. Which age group is best?',
            ),
            array(
                'id'          => 'faq_age_a1',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
            // Question 2
            array(
                'name' => 'Question 2',
                'id'   => 'faq_age_q2_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_age_q2',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., What is the coach-to-child ratio?',
            ),
            array(
                'id'          => 'faq_age_a2',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
            // Question 3
            array(
                'name' => 'Question 3',
                'id'   => 'faq_age_q3_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_age_q3',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., Can parents stay and watch?',
            ),
            array(
                'id'          => 'faq_age_a3',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
            // Question 4
            array(
                'name' => 'Question 4',
                'id'   => 'faq_age_q4_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_age_q4',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., My child has never played sports before. Is that okay?',
            ),
            array(
                'id'          => 'faq_age_a4',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
        ),
    );
    
    // FAQ Page - Refund & Weather Section
    $meta_boxes[] = array(
        'title'      => 'FAQ Section: Refund & Weather',
        'id'         => 'faq_refund_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'template-faq.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'faq_section_refund_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Remboursement Et Température',
                'std'         => 'Remboursement Et Température',
            ),
            // Question 1
            array(
                'name' => 'Question 1',
                'id'   => 'faq_refund_q1_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_refund_q1',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., What happens if a session is cancelled due to weather?',
            ),
            array(
                'id'          => 'faq_refund_a1',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
            // Question 2
            array(
                'name' => 'Question 2',
                'id'   => 'faq_refund_q2_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_refund_q2',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., How will I know if a session is cancelled?',
            ),
            array(
                'id'          => 'faq_refund_a2',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
        ),
    );
    
    // FAQ Page - Equipment Section
    $meta_boxes[] = array(
        'title'      => 'FAQ Section: Equipment',
        'id'         => 'faq_equipment_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'template-faq.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'faq_section_equipment_title',
                'name'        => 'Section Title',
                'type'        => 'text',
                'placeholder' => 'e.g., Équipement',
                'std'         => 'Équipement',
            ),
            // Question 1
            array(
                'name' => 'Question 1',
                'id'   => 'faq_equipment_q1_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_equipment_q1',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., What equipment does my child need?',
            ),
            array(
                'id'          => 'faq_equipment_a1',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
            // Question 2
            array(
                'name' => 'Question 2',
                'id'   => 'faq_equipment_q2_divider',
                'type' => 'heading',
            ),
            array(
                'id'          => 'faq_equipment_q2',
                'name'        => 'Question',
                'type'        => 'text',
                'placeholder' => 'e.g., Do you provide jerseys or uniforms?',
            ),
            array(
                'id'          => 'faq_equipment_a2',
                'name'        => 'Answer',
                'type'        => 'textarea',
                'rows'        => 4,
                'placeholder' => 'Enter the answer here',
            ),
        ),
    );
    
    // FAQ Page - Contact Section
    $meta_boxes[] = array(
        'title'      => 'FAQ Contact Section',
        'id'         => 'faq_contact_section',
        'post_types' => array( 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'include'    => array(
            'relation' => 'OR',
            'template' => array( 'template-faq.php' ),
        ),
        'fields'     => array(
            array(
                'id'          => 'faq_contact_title',
                'name'        => 'Contact Section Title',
                'type'        => 'text',
                'placeholder' => "e.g., D'autres Questions ?",
                'std'         => "D'autres Questions ?",
            ),
            array(
                'id'          => 'faq_contact_subtitle',
                'name'        => 'Contact Section Subtitle',
                'type'        => 'textarea',
                'rows'        => 2,
                'placeholder' => 'e.g., Nous sommes à pour vous aider. Contactez-nous',
            ),
            array(
                'id'          => 'faq_contact_email',
                'name'        => 'Contact Email',
                'type'        => 'email',
                'placeholder' => 'info@7sports.info',
            ),
            array(
                'id'          => 'faq_contact_phone',
                'name'        => 'Contact Phone',
                'type'        => 'text',
                'placeholder' => '514-717-2787',
            ),
            array(
                'id'          => 'faq_registration_button_text',
                'name'        => 'Registration Button Text',
                'type'        => 'text',
                'placeholder' => 'e.g., Inscription',
                'std'         => 'Inscription',
            ),
            array(
                'id'          => 'faq_registration_button_link',
                'name'        => 'Registration Button Link',
                'type'        => 'url',
                'placeholder' => 'https://example.com/inscription',
            ),
        ),
    );
    
    return $meta_boxes;
}

// Hook it to the same filter
add_filter( 'rwmb_meta_boxes', 'sevensports_faq_page_metabox_add' );