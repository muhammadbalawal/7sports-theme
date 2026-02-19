<?php
/**
 * Template Name: FAQ Page
 * Template for displaying FAQ page with accordion sections
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style>
        body { 
            font-family: Arial, sans-serif;
            background: #fff;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .section-wireframe {
            border: 3px solid #ccc;
            background: #fafafa;
            padding: 40px 20px;
            margin: 0;
        }
        .wireframe-box {
            border: 2px dashed #999;
            background: #f5f5f5;
            padding: 20px;
            margin: 10px 0;
            min-height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            font-size: 14px;
            text-align: center;
        }
        .faq-section {
            background: #fff;
            padding: 30px;
            margin-bottom: 30px;
        }
        .faq-section h2 {
            border-bottom: 2px solid #dc3545;
            padding-bottom: 0.5rem;
        }
        .faq-item {
            border-bottom: 1px solid #ddd;
            padding: 20px 0;
        }
        .faq-item:last-child {
            border-bottom: none;
        }
        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
            font-size: 1.1rem;
            padding-right: 40px;
            position: relative;
        }
        .faq-question::after {
            content: '+';
            position: absolute;
            right: 0;
            font-size: 2rem;
            line-height: 1;
            transition: transform 0.3s;
        }
        .faq-question.active::after {
            transform: rotate(45deg);
        }
        .faq-answer {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            padding-top: 0;
        }
        .faq-answer.active {
            max-height: 500px;
            padding-top: 15px;
        }
        .hero-image-overlay {
            position: relative;
            background-size: cover;
            background-position: center;
            min-height: 400px;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body <?php body_class(); ?>>

<!-- Hero Section -->
<section class="section-wireframe p-0">
    <?php 
    $hero_image = rwmb_meta( 'faq_hero_image' );
    $hero_title = rwmb_meta( 'faq_hero_title' );
    $hero_subtitle = rwmb_meta( 'faq_hero_subtitle' );
    $hero_image_id = sevensports_first_image_id( $hero_image );
    
    if ( $hero_image_id ):
        $hero_image_url = wp_get_attachment_image_url( $hero_image_id, 'full' );
    ?>
        <div class="hero-image-overlay" style="background-image: url('<?php echo esc_url($hero_image_url); ?>');">
            <div class="hero-overlay">
                <div class="container text-center text-white">
                    <?php if ( $hero_title ): ?>
                        <h1 class="display-3 fw-bold mb-3"><?php echo esc_html($hero_title); ?></h1>
                    <?php endif; ?>
                    <?php if ( $hero_subtitle ): ?>
                        <p class="fs-5"><?php echo esc_html($hero_subtitle); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container text-center py-5">
            <?php if ( $hero_title ): ?>
                <h1 class="display-3 fw-bold mb-3"><?php echo esc_html($hero_title); ?></h1>
            <?php else: ?>
                <div class="wireframe-box mx-auto mb-3" style="max-width: 500px;">FAQ HERO TITLE</div>
            <?php endif; ?>
            <?php if ( $hero_subtitle ): ?>
                <p class="fs-5"><?php echo esc_html($hero_subtitle); ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</section>

<!-- FAQ Sections -->
<section class="section-wireframe">
    <div class="container" style="max-width: 900px;">
        <?php
        // Payment & Registration Section
        $payment_title = rwmb_meta( 'faq_section_payment_title' );
        $has_payment_questions = false;
        for ($i = 1; $i <= 4; $i++) {
            if ( rwmb_meta("faq_payment_q{$i}") ) {
                $has_payment_questions = true;
                break;
            }
        }
        
        if ( $payment_title && $has_payment_questions ): ?>
            <div class="faq-section">
                <h2 class="h3 fw-bold mb-4"><?php echo esc_html($payment_title); ?></h2>
                
                <?php for ($i = 1; $i <= 4; $i++): 
                    $question = rwmb_meta("faq_payment_q{$i}");
                    $answer = rwmb_meta("faq_payment_a{$i}");
                    if ( $question ):
                ?>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            <?php echo esc_html($question); ?>
                        </div>
                        <div class="faq-answer">
                            <p class="mb-0"><?php echo nl2br(esc_html($answer)); ?></p>
                        </div>
                    </div>
                <?php 
                    endif;
                endfor; ?>
            </div>
        <?php endif; ?>
        
        <?php
        // Calendar & Season Section
        $calendar_title = rwmb_meta( 'faq_section_calendar_title' );
        $has_calendar_questions = false;
        for ($i = 1; $i <= 4; $i++) {
            if ( rwmb_meta("faq_calendar_q{$i}") ) {
                $has_calendar_questions = true;
                break;
            }
        }
        
        if ( $calendar_title && $has_calendar_questions ): ?>
            <div class="faq-section">
                <h2 class="h3 fw-bold mb-4"><?php echo esc_html($calendar_title); ?></h2>
                
                <?php for ($i = 1; $i <= 4; $i++): 
                    $question = rwmb_meta("faq_calendar_q{$i}");
                    $answer = rwmb_meta("faq_calendar_a{$i}");
                    if ( $question ):
                ?>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            <?php echo esc_html($question); ?>
                        </div>
                        <div class="faq-answer">
                            <p class="mb-0"><?php echo nl2br(esc_html($answer)); ?></p>
                        </div>
                    </div>
                <?php 
                    endif;
                endfor; ?>
            </div>
        <?php endif; ?>
        
        <?php
        // Age & Groups Section
        $age_title = rwmb_meta( 'faq_section_age_title' );
        $has_age_questions = false;
        for ($i = 1; $i <= 4; $i++) {
            if ( rwmb_meta("faq_age_q{$i}") ) {
                $has_age_questions = true;
                break;
            }
        }
        
        if ( $age_title && $has_age_questions ): ?>
            <div class="faq-section">
                <h2 class="h3 fw-bold mb-4"><?php echo esc_html($age_title); ?></h2>
                
                <?php for ($i = 1; $i <= 4; $i++): 
                    $question = rwmb_meta("faq_age_q{$i}");
                    $answer = rwmb_meta("faq_age_a{$i}");
                    if ( $question ):
                ?>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            <?php echo esc_html($question); ?>
                        </div>
                        <div class="faq-answer">
                            <p class="mb-0"><?php echo nl2br(esc_html($answer)); ?></p>
                        </div>
                    </div>
                <?php 
                    endif;
                endfor; ?>
            </div>
        <?php endif; ?>
        
        <?php
        // Refund & Weather Section
        $refund_title = rwmb_meta( 'faq_section_refund_title' );
        $has_refund_questions = false;
        for ($i = 1; $i <= 2; $i++) {
            if ( rwmb_meta("faq_refund_q{$i}") ) {
                $has_refund_questions = true;
                break;
            }
        }
        
        if ( $refund_title && $has_refund_questions ): ?>
            <div class="faq-section">
                <h2 class="h3 fw-bold mb-4"><?php echo esc_html($refund_title); ?></h2>
                
                <?php for ($i = 1; $i <= 2; $i++): 
                    $question = rwmb_meta("faq_refund_q{$i}");
                    $answer = rwmb_meta("faq_refund_a{$i}");
                    if ( $question ):
                ?>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            <?php echo esc_html($question); ?>
                        </div>
                        <div class="faq-answer">
                            <p class="mb-0"><?php echo nl2br(esc_html($answer)); ?></p>
                        </div>
                    </div>
                <?php 
                    endif;
                endfor; ?>
            </div>
        <?php endif; ?>
        
        <?php
        // Equipment Section
        $equipment_title = rwmb_meta( 'faq_section_equipment_title' );
        $has_equipment_questions = false;
        for ($i = 1; $i <= 2; $i++) {
            if ( rwmb_meta("faq_equipment_q{$i}") ) {
                $has_equipment_questions = true;
                break;
            }
        }
        
        if ( $equipment_title && $has_equipment_questions ): ?>
            <div class="faq-section">
                <h2 class="h3 fw-bold mb-4"><?php echo esc_html($equipment_title); ?></h2>
                
                <?php for ($i = 1; $i <= 2; $i++): 
                    $question = rwmb_meta("faq_equipment_q{$i}");
                    $answer = rwmb_meta("faq_equipment_a{$i}");
                    if ( $question ):
                ?>
                    <div class="faq-item">
                        <div class="faq-question" onclick="toggleFaq(this)">
                            <?php echo esc_html($question); ?>
                        </div>
                        <div class="faq-answer">
                            <p class="mb-0"><?php echo nl2br(esc_html($answer)); ?></p>
                        </div>
                    </div>
                <?php 
                    endif;
                endfor; ?>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Contact Section -->
<section class="section-wireframe" style="background: #000; color: #fff;">
    <div class="container text-center">
        <?php $contact_title = rwmb_meta( 'faq_contact_title' ); ?>
        <?php if ( $contact_title ): ?>
            <h2 class="display-6 fw-bold mb-3"><?php echo esc_html($contact_title); ?></h2>
        <?php else: ?>
            <h2 class="display-6 fw-bold mb-3">D'autres Questions ?</h2>
        <?php endif; ?>
        
        <?php $contact_subtitle = rwmb_meta( 'faq_contact_subtitle' ); ?>
        <?php if ( $contact_subtitle ): ?>
            <p class="mb-4"><?php echo esc_html($contact_subtitle); ?></p>
        <?php endif; ?>
        
        <div class="d-flex flex-wrap gap-4 justify-content-center mb-4">
            <?php 
            $contact_email = rwmb_meta( 'faq_contact_email' );
            $contact_phone = rwmb_meta( 'faq_contact_phone' );
            
            if ( $contact_email ): ?>
                <a href="mailto:<?php echo esc_attr($contact_email); ?>" 
                   class="btn btn-light btn-lg px-5 py-3" style="min-width: 300px;">
                    <?php echo esc_html($contact_email); ?>
                </a>
            <?php endif; ?>
            
            <?php if ( $contact_phone ): ?>
                <a href="tel:<?php echo esc_attr($contact_phone); ?>" 
                   class="btn btn-light btn-lg px-5 py-3" style="min-width: 300px;">
                    <?php echo esc_html($contact_phone); ?>
                </a>
            <?php endif; ?>
        </div>
        
        <?php 
        $registration_btn_text = rwmb_meta( 'faq_registration_button_text' );
        $registration_btn_link = rwmb_meta( 'faq_registration_button_link' );
        if ( $registration_btn_text && $registration_btn_link ):
        ?>
            <a href="<?php echo esc_url($registration_btn_link); ?>" 
               class="btn btn-danger btn-lg px-5 py-3" style="min-width: 300px;">
                <?php echo esc_html($registration_btn_text); ?>
            </a>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>

<script>
function toggleFaq(element) {
    const answer = element.nextElementSibling;
    const allQuestions = document.querySelectorAll('.faq-question');
    const allAnswers = document.querySelectorAll('.faq-answer');
    
    // Close all other FAQs
    allQuestions.forEach(q => {
        if (q !== element) {
            q.classList.remove('active');
        }
    });
    allAnswers.forEach(a => {
        if (a !== answer) {
            a.classList.remove('active');
        }
    });
    
    // Toggle current FAQ
    element.classList.toggle('active');
    answer.classList.toggle('active');
}
</script>

</body>
</html>