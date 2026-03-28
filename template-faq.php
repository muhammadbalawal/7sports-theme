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
    <link href="https://fonts.cdnfonts.com/css/more-sugar" rel="stylesheet">
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
            background: #D4D3D4;
            padding: 30px;
            margin-bottom: 0;
        }
        .faq-section h2 {
            border-bottom: 2px solid #dc3545;
            padding-bottom: 0.5rem;
            font-family: 'More Sugar', cursive;
        }
        .faq-item {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 12px;
            border: none;
        }
        .faq-item:last-child {
            margin-bottom: 0;
        }
        .faq-question {
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, sans-serif;
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
            color: #d62829;
        }
        .faq-question.active::after {
            transform: rotate(45deg);
        }
        .faq-answer {
            height: 0;
            overflow: hidden;
            transition: height 0.35s ease;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, sans-serif;
        }
        .faq-answer-inner {
            padding-top: 15px;
        }
        .faq-hero-title {
            font-family: 'More Sugar', cursive;
            color: #fff;
            -webkit-text-stroke: 16px #000;
            paint-order: stroke fill;
            font-size: 8rem !important;
            letter-spacing: -0.05em;
        }
        @media (max-width: 768px) {
            .faq-hero-title {
                font-size: 4.5rem !important;
                -webkit-text-stroke: 8px #000;
            }
        }
        @media (max-width: 480px) {
            .faq-hero-title {
                font-size: 3.5rem !important;
                -webkit-text-stroke: 6px #000;
            }
        }
        .hero-image-overlay {
            position: relative;
            background-size: cover;
            background-position: center;
            min-height: 560px;
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
        .faq-hero-search-wrap {
            padding: 24px 20px 32px;
        }
        .faq-hero-search {
            max-width: 560px;
            margin: 0 auto;
            position: relative;
        }
        .faq-hero-search input {
            width: 100%;
            padding: 14px 20px 14px 48px;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .faq-hero-search input::placeholder {
            color: #999;
        }
        .faq-hero-search-icon {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            color: #999;
            pointer-events: none;
        }
        .faq-contact-section {
            position: relative;
            padding-top: calc(70px + 60px);
            padding-bottom: 80px;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, sans-serif;
        }
        .faq-contact-bg-top {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 60px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: 0;
        }
        .faq-contact-wave {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            line-height: 0;
            overflow: hidden;
            z-index: 1;
            background: #D4D3D4;
        }
        .faq-contact-wave svg {
            width: 100%;
            height: 60px;
            display: block;
            vertical-align: top;
        }
        .faq-contact-wave path {
            fill: #000;
        }
        .faq-contact-buttons {
            margin-top: 80px;
        }
        .faq-contact-buttons .btn-contact {
            min-width: 360px;
            padding: 15px 40px;
            border-radius: 30px;
            font-size: 1rem;
            font-weight: 600;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, sans-serif;
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: #000 !important;
        }
        .faq-contact-buttons .btn-contact-primary {
            background-color: #d62829;
        }
        .faq-contact-buttons .btn-contact-primary:hover {
            background-color: #c52223;
        }
        .faq-contact-buttons .btn-contact-light {
            background-color: #fff;
        }
        .faq-contact-buttons .btn-contact-light:hover {
            background-color: #f1f1f1;
        }
        .faq-contact-buttons .btn-contact svg {
            width: 20px;
            height: 20px;
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
                        <h1 class="display-3 fw-bold mb-3 faq-hero-title"><?php echo esc_html($hero_title); ?></h1>
                    <?php endif; ?>
                    <?php if ( $hero_subtitle ): ?>
                        <p class="fs-5"><?php echo esc_html($hero_subtitle); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="faq-hero-search-wrap">
            <div class="container">
                <div class="faq-hero-search">
                    <svg class="faq-hero-search-icon" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    <input type="text" placeholder="Ask your question" autocomplete="off">
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container text-center py-5">
            <?php if ( $hero_title ): ?>
                <h1 class="display-3 fw-bold mb-3 faq-hero-title"><?php echo esc_html($hero_title); ?></h1>
            <?php else: ?>
                <div class="wireframe-box mx-auto mb-3" style="max-width: 500px;">FAQ HERO TITLE</div>
            <?php endif; ?>
            <?php if ( $hero_subtitle ): ?>
                <p class="fs-5"><?php echo esc_html($hero_subtitle); ?></p>
            <?php endif; ?>
        </div>
        <div class="faq-hero-search-wrap">
            <div class="container">
                <div class="faq-hero-search">
                    <svg class="faq-hero-search-icon" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                    <input type="text" placeholder="Ask your question" autocomplete="off">
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>

<!-- FAQ Sections -->
<?php
$faq_page_id = get_queried_object_id() ?: get_the_ID();
$faq_section_bg = function_exists( 'sevensports_section_wireframe_bg_style' ) ? sevensports_section_wireframe_bg_style( $faq_page_id, 'faq_section_bg_image' ) : '';
?>
<section class="section-wireframe"<?php echo $faq_section_bg ? ' style="' . $faq_section_bg . '"' : ''; ?>>
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
                            <div class="faq-answer-inner"><p class="mb-0"><?php echo nl2br(esc_html($answer)); ?></p></div>
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
                            <div class="faq-answer-inner"><p class="mb-0"><?php echo nl2br(esc_html($answer)); ?></p></div>
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
                            <div class="faq-answer-inner"><p class="mb-0"><?php echo nl2br(esc_html($answer)); ?></p></div>
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
                            <div class="faq-answer-inner"><p class="mb-0"><?php echo nl2br(esc_html($answer)); ?></p></div>
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
                            <div class="faq-answer-inner"><p class="mb-0"><?php echo nl2br(esc_html($answer)); ?></p></div>
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
<?php
$faq_page_id = get_queried_object_id() ?: get_the_ID();
$faq_bg_raw  = function_exists( 'rwmb_meta' ) ? rwmb_meta( 'faq_section_bg_image', array(), $faq_page_id ) : get_post_meta( $faq_page_id, 'faq_section_bg_image', true );
$faq_bg_id   = function_exists( 'sevensports_first_image_id' ) ? sevensports_first_image_id( $faq_bg_raw ) : null;
if ( ! $faq_bg_id && is_array( $faq_bg_raw ) ) {
    $first = reset( $faq_bg_raw );
    $faq_bg_id = is_numeric( $first ) ? (int) $first : ( isset( $first['ID'] ) ? (int) $first['ID'] : null );
}
$faq_bg_url = $faq_bg_id ? wp_get_attachment_image_url( $faq_bg_id, 'full' ) : '';
$faq_contact_style = "background: #000; color: #fff;";
?>
<section class="section-wireframe faq-contact-section" style="<?php echo esc_attr( $faq_contact_style ); ?>">
    <?php if ( $faq_bg_url ) : ?>
        <div class="faq-contact-bg-top" style="background-image: url('<?php echo esc_url( $faq_bg_url ); ?>');"></div>
    <?php endif; ?>
    <div class="faq-contact-wave">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,0 L0,30 Q360,60 720,30 Q1080,0 1440,30 L1440,60 L0,60 Z"/>
        </svg>
    </div>
    <div class="container text-center" style="position: relative; z-index: 2;">
        <?php $contact_title = rwmb_meta( 'faq_contact_title' ); ?>
        <?php if ( $contact_title ): ?>
            <h2 class="display-6 fw-bold mb-3"><?php echo esc_html($contact_title); ?></h2>
        <?php else: ?>
            <h2 class="display-6 fw-bold mb-3">D'autres Questions ?</h2>
        <?php endif; ?>

        <?php include get_template_directory() . '/inc/faq-contact-text.php'; ?>

        <div class="faq-contact-buttons">
            <div class="d-flex flex-wrap gap-4 justify-content-center mb-3">
            <?php 
            $contact_email = rwmb_meta( 'faq_contact_email' );
            $contact_phone = rwmb_meta( 'faq_contact_phone' );
            
            if ( $contact_email ): ?>
                <a href="mailto:<?php echo esc_attr($contact_email); ?>" 
                   class="btn-contact btn-contact-light">
                    <svg fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                    </svg>
                    <span><?php echo esc_html($contact_email); ?></span>
                </a>
            <?php endif; ?>
            
            <?php if ( $contact_phone ): ?>
                <a href="tel:<?php echo esc_attr($contact_phone); ?>" 
                   class="btn-contact btn-contact-light">
                    <svg fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
                    </svg>
                    <span><?php echo esc_html($contact_phone); ?></span>
                </a>
            <?php endif; ?>
            </div>
            <?php 
            $registration_btn_text = rwmb_meta( 'faq_registration_button_text' );
            $registration_btn_link = rwmb_meta( 'faq_registration_button_link' );
            if ( $registration_btn_text && $registration_btn_link ):
            ?>
                <div class="d-flex justify-content-center">
                    <a href="<?php echo esc_url($registration_btn_link); ?>" 
                       class="btn-contact btn-contact-primary">
                        <span><?php echo esc_html($registration_btn_text); ?></span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

<script>
function toggleFaq(element) {
    const answer = element.nextElementSibling;
    const isOpen = element.classList.contains('active');

    // Close all open FAQs
    document.querySelectorAll('.faq-question.active').forEach(q => {
        q.classList.remove('active');
        const a = q.nextElementSibling;
        a.style.height = a.scrollHeight + 'px'; // set explicit height before collapsing
        requestAnimationFrame(() => { a.style.height = '0'; });
    });

    // Open clicked one if it was closed
    if (!isOpen) {
        element.classList.add('active');
        answer.style.height = answer.scrollHeight + 'px';
        answer.addEventListener('transitionend', () => {
            if (element.classList.contains('active')) {
                answer.style.height = 'auto'; // allow reflow after open
            }
        }, { once: true });
    }
}
</script>

</body>
</html>