<?php
/**
 * Template Name: About Us Page
 * Template for displaying About Us page
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
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, sans-serif;
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
        .about-founder-coaches-wrap {
            background: linear-gradient(to top, #d9d9d9 0%, #efefef 55%, #fafafa 100%);
        }
        .section-wireframe.about-soft-section {
            border: 0;
            background: transparent;
        }
        .founder-info-card {
            background: #fff;
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 10px 28px rgba(0,0,0,0.10);
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }
        .founder-info-card .text-muted.mb-0 {
            color: #d62829 !important;
        }
        .coach-card {
            text-align: left;
            background: #fff;
            border: 2px solid #ddd;
            border-radius: 18px;
            padding: 0;
            transition: transform 0.3s;
            overflow: hidden;
        }
        .coach-card-body {
            padding: 24px 24px 28px;
        }
        .coach-card:hover {
            transform: translateY(-5px);
        }
        .coach-photo {
            width: 100%;
            height: 220px;
            object-fit: cover;
            border-radius: 0 0 18px 18px;
            margin: 0;
            display: block;
        }
        .coach-position {
            color: #dc3545;
            font-weight: 600;
            font-size: 0.95rem;
        }
        .coach-photo-placeholder {
            width: 100%;
            height: 190px;
            border-radius: 0 0 18px 18px;
            min-height: auto;
        }
        .coach-card-body .h5 {
            font-size: 1.15rem;
        }
        .coach-position {
            font-size: 1rem;
        }
        .coach-card-body .text-muted.small,
        .coach-card-body .small {
            font-size: 0.95rem;
        }
        .coaches-row {
            display: flex;
            flex-wrap: nowrap;
            gap: 1.5rem;
            overflow-x: auto;
            padding-bottom: 0.5rem;
            margin: 0 -15px;
        }
        .coaches-row .coach-card-wrap {
            flex: 0 0 auto;
            min-width: 280px;
            max-width: 280px;
        }
        .value-card {
            background: #fff;
            border: none;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            height: 100%;
        }
        .values-section-bg {
            padding-top: 120px;
            padding-bottom: 120px;
        }
        .values-section-bg .display-5.fw-bold.text-center.mb-5 {
            color: #fff;
        }
        .about-cta-section {
            position: relative;
            padding-top: 80px;
            padding-bottom: 80px;
        }
        .about-cta-wave {
            position: absolute;
            top: -60px;
            left: 0;
            width: 100%;
            line-height: 0;
            overflow: visible;
            z-index: 1;
        }
        .about-cta-wave svg {
            width: 100%;
            height: 60px;
            display: block;
            vertical-align: top;
        }
        .about-cta-wave path {
            fill: #000;
        }
        .value-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
        }
        .stat-box {
            text-align: center;
            padding: 22px 24px;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.08);
        }
        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #dc3545;
        }
        .stat-label {
            font-size: 1.2rem;
            margin-top: 10px;
        }
        .founder-photo {
            width: 250px;
            height: 250px;
            object-fit: cover;
            border-radius: 12px;
            border: 5px solid #ddd;
        }
        .founder-photo-placeholder {
            width: 250px;
            height: 250px;
            border-radius: 12px;
        }
        .founder-quote {
            font-size: 1.1rem;
            font-style: italic;
            color: #555;
            border-left: 4px solid #dc3545;
            padding-left: 1rem;
            margin: 0;
        }
        .action-title-overlay {
            min-height: 120px;
            background: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%, transparent 100%);
        }
        .action-title-overlay h2 {
            text-shadow: 0 1px 3px rgba(0,0,0,0.5);
        }
        .about-why-section {
            margin-bottom: 100px;
        }
        .about-cta-buttons-wrap {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            margin-top: 48px;
        }
        .about-cta-btn {
            min-width: 480px;
            padding: 10px 60px;
            font-size: 1.3rem;
            font-weight: 600;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, sans-serif;
            border-radius: 50px;
            background: #fff !important;
            color: #000 !important;
            border: none !important;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }
        .about-cta-btn:hover {
            background: #e6e6e6 !important;
            color: #000 !important;
        }
        .about-cta-btn.red {
            background: #dc3545 !important;
            color: #fff !important;
        }
        .about-cta-btn.red:hover {
            background: #bb2d3b !important;
            color: #fff !important;
        }
        .about-hero-title {
            font-family: 'More Sugar', cursive;
            color: #fff;
            -webkit-text-stroke: 16px #000;
            paint-order: stroke fill;
            font-size: 8rem !important;
            letter-spacing: -0.05em;
        }
        .about-founder-title,
        .about-coaches-title,
        .about-values-title,
        .about-action-title {
            font-family: 'More Sugar', cursive;
            color: #000;
            font-size: 5rem !important;
            letter-spacing: -0.05em;
        }
        @media (max-width: 768px) {
            /* Hero */
            .hero-image-overlay {
                min-height: 320px;
            }
            .about-hero-title {
                font-size: 3rem !important;
                -webkit-text-stroke: 5px #000;
            }

            /* Section titles */
            .about-founder-title,
            .about-coaches-title,
            .about-values-title,
            .about-action-title {
                font-size: 2.2rem !important;
            }

            /* Founder layout */
            .founder-photo {
                width: 180px;
                height: 180px;
            }
            .founder-info-card {
                padding: 18px;
            }
            .founder-quote {
                font-size: 0.95rem;
            }

            /* Stats */
            .stat-box {
                padding: 14px 10px;
            }
            .stat-number {
                font-size: 1.5rem;
            }
            .stat-label {
                font-size: 0.85rem;
                margin-top: 4px;
            }

            /* Why section image */
            .why-side-image {
                width: 85% !important;
                margin: 0 auto;
                display: block !important;
            }

            /* Values section */
            .values-section-bg {
                padding-top: 60px;
                padding-bottom: 60px;
            }

            /* Action image */
            .action-image-wrap img {
                height: 260px !important;
            }

            /* CTA section */
            .about-cta-section {
                padding-top: 60px;
                padding-bottom: 60px;
            }
            .about-cta-btn {
                min-width: 0;
                width: 90%;
                font-size: 1.1rem;
                padding: 10px 20px;
            }

            /* General text scaling */
            .display-6 {
                font-size: 1.4rem !important;
            }
            .section-wireframe {
                padding: 28px 14px;
            }
        }
    </style>
</head>
<body <?php body_class(); ?>>

<!-- Hero Section -->
<section class="section-wireframe p-0">
    <?php 
    $hero_image = rwmb_meta( 'about_hero_image' );
    $hero_title = rwmb_meta( 'about_hero_title' );
    $hero_image_id = sevensports_first_image_id( $hero_image );
    
    if ( $hero_image_id ):
        $hero_image_url = wp_get_attachment_image_url( $hero_image_id, 'full' );
    ?>
        <div class="hero-image-overlay" style="background-image: url('<?php echo esc_url($hero_image_url); ?>');">
            <div class="hero-overlay">
                <div class="container text-center text-white">
                    <?php if ( $hero_title ): ?>
                        <h1 class="display-3 fw-bold about-hero-title"><?php echo esc_html($hero_title); ?></h1>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="container text-center py-5">
            <?php if ( $hero_title ): ?>
                <h1 class="display-3 fw-bold"><?php echo esc_html($hero_title); ?></h1>
            <?php else: ?>
                <div class="wireframe-box mx-auto" style="max-width: 400px;">ABOUT US HERO TITLE</div>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</section>

<!-- Founder Section -->
<div class="about-founder-coaches-wrap">
<section class="section-wireframe about-soft-section">
    <div class="container">
        <?php $founder_title = rwmb_meta( 'founder_section_title' ); ?>
        <?php if ( $founder_title ): ?>
            <h2 class="display-5 fw-bold text-center mb-3 about-founder-title"><?php echo esc_html($founder_title); ?></h2>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-3" style="max-width: 500px;">FOUNDER SECTION TITLE</div>
        <?php endif; ?>

        <div class="row align-items-center g-4">
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <?php 
                $founder_photo = rwmb_meta( 'founder_photo' );
                $founder_photo_id = sevensports_first_image_id( $founder_photo );
                if ( $founder_photo_id ):
                    $photo_url = wp_get_attachment_image_url( $founder_photo_id, 'medium' );
                ?>
                    <img src="<?php echo esc_url($photo_url); ?>" 
                         alt="Founder" 
                         class="img-fluid founder-photo">
                <?php else: ?>
                    <div class="wireframe-box mx-auto founder-photo-placeholder">FOUNDER PHOTO</div>
                <?php endif; ?>
            </div>
            
            <div class="col-md-8 founder-info-card">
                <?php $founder_name = rwmb_meta( 'founder_name' ); ?>
                <?php $founder_position = rwmb_meta( 'founder_title_position' ); ?>
                <?php if ( $founder_name || $founder_position ): ?>
                    <div class="mb-3">
                        <?php if ( $founder_name ): ?>
                            <h3 class="h4 fw-bold mb-1"><?php echo esc_html($founder_name); ?></h3>
                        <?php endif; ?>
                        <?php if ( $founder_position ): ?>
                            <p class="text-muted mb-0"><?php echo esc_html($founder_position); ?></p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                
                <?php $founder_quote = rwmb_meta( 'founder_quote' ); ?>
                <?php if ( $founder_quote ): ?>
                    <blockquote class="founder-quote mb-4">
                        "<?php echo esc_html( $founder_quote ); ?>"
                    </blockquote>
                <?php endif; ?>
                
                <?php $founder_bio = rwmb_meta( 'founder_bio' ); ?>
                <?php if ( $founder_bio ): ?>
                    <div class="content">
                        <?php echo wpautop($founder_bio); ?>
                    </div>
                <?php else: ?>
                    <div class="wireframe-box">FOUNDER BIOGRAPHY</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Coaches Section -->
<section class="section-wireframe about-soft-section">
    <div class="container">
        <?php $coaches_title = rwmb_meta( 'coaches_section_title' ); ?>
        <?php if ( $coaches_title ): ?>
            <h2 class="display-5 fw-bold text-center mb-5 about-coaches-title"><?php echo esc_html($coaches_title); ?></h2>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-5" style="max-width: 400px;">COACHES SECTION TITLE</div>
        <?php endif; ?>
        
        <div class="coaches-row">
            <?php 
            for ($i = 1; $i <= 5; $i++):
                $coach_name = rwmb_meta("coach_{$i}_name");
                if ( $coach_name ):
                    $coach_photo = rwmb_meta("coach_{$i}_photo");
                    $coach_position = rwmb_meta("coach_{$i}_position");
                    $coach_region = rwmb_meta("coach_{$i}_region");
                    $coach_description = rwmb_meta("coach_{$i}_description");
                    
                    $coach_photo_id = sevensports_first_image_id( $coach_photo );
                    $photo_url = $coach_photo_id ? wp_get_attachment_image_url( $coach_photo_id, 'medium' ) : '';
            ?>
                <div class="coach-card-wrap">
                    <div class="coach-card h-100">
                        <?php if ( $photo_url ): ?>
                            <img src="<?php echo esc_url($photo_url); ?>" 
                                 alt="<?php echo esc_attr($coach_name); ?>" 
                                 class="coach-photo">
                        <?php else: ?>
                            <div class="coach-photo-placeholder wireframe-box d-flex align-items-center justify-content-center">COACH PHOTO</div>
                        <?php endif; ?>

                        <div class="coach-card-body">
                            <h4 class="h5 fw-bold mb-1"><?php echo esc_html($coach_name); ?></h4>

                            <?php if ( $coach_position ): ?>
                                <p class="coach-position mb-1"><?php echo esc_html($coach_position); ?></p>
                            <?php endif; ?>

                            <?php if ( $coach_region ): ?>
                                <p class="text-muted small mb-2"><?php echo esc_html($coach_region); ?></p>
                            <?php endif; ?>

                            <?php if ( $coach_description ): ?>
                                <p class="small mb-0"><?php echo esc_html($coach_description); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php 
                endif;
            endfor; 
            ?>
        </div>
    </div>
</section>
</div>

<!-- Values Section -->
<?php
$about_page_id = get_queried_object_id() ?: get_the_ID();
$values_bg = function_exists( 'sevensports_section_wireframe_bg_style' ) ? sevensports_section_wireframe_bg_style( $about_page_id, 'values_section_bg_image' ) : '';
?>
<section class="section-wireframe values-section-bg"<?php echo $values_bg ? ' style="' . $values_bg . '"' : ''; ?>>
    <div class="container">
        <?php $values_title = rwmb_meta( 'values_section_title' ); ?>
        <?php if ( $values_title ): ?>
            <h2 class="display-5 fw-bold text-center mb-5 about-values-title"><?php echo esc_html($values_title); ?></h2>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-5" style="max-width: 400px;">VALUES SECTION TITLE</div>
        <?php endif; ?>
        
        <div class="row g-4">
            <?php 
            for ($i = 1; $i <= 4; $i++):
                $value_title = rwmb_meta("value_{$i}_title");
                if ( $value_title ):
                    $value_icon = rwmb_meta("value_{$i}_icon");
                    $value_desc = rwmb_meta("value_{$i}_description");
                    
                    $value_icon_id = sevensports_first_image_id( $value_icon );
                    $icon_url = $value_icon_id ? wp_get_attachment_image_url( $value_icon_id, 'thumbnail' ) : '';
            ?>
                <div class="col-md-6 col-lg-3">
                    <div class="value-card">
                        <?php if ( $icon_url ): ?>
                            <img src="<?php echo esc_url($icon_url); ?>" 
                                 alt="<?php echo esc_attr($value_title); ?>" 
                                 class="value-icon">
                        <?php else: ?>
                            <div class="wireframe-box mx-auto" style="width: 60px; height: 60px; min-height: auto;">ICON</div>
                        <?php endif; ?>
                        
                        <h4 class="h5 fw-bold mb-3"><?php echo esc_html($value_title); ?></h4>
                        
                        <?php if ( $value_desc ): ?>
                            <p class="small"><?php echo esc_html($value_desc); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php 
                endif;
            endfor; 
            ?>
        </div>
    </div>
</section>

<!-- 7 Sports En Action Section -->
<section class="section-wireframe p-0" style="margin-top: 40px;">
    <?php
    $action_title = rwmb_meta( 'action_section_title' );
    $action_image = rwmb_meta( 'action_main_image' );
    $action_image_id = sevensports_first_image_id( $action_image );
    $action_image_url = $action_image_id ? wp_get_attachment_image_url( $action_image_id, 'full' ) : '';
    ?>
    <div class="action-image-wrap position-relative overflow-hidden">
        <?php if ( $action_image_url ): ?>
            <img src="<?php echo esc_url($action_image_url); ?>"
                 alt="7 Sports En Action"
                 class="w-100"
                 style="height: 400px; object-fit: cover; display: block;">
        <?php else: ?>
            <div class="wireframe-box" style="height: 400px; border-radius: 0;">ACTION IMAGE</div>
        <?php endif; ?>
        <?php if ( $action_title ): ?>
            <div class="action-title-overlay position-absolute bottom-0 start-0 end-0 d-flex align-items-end justify-content-center p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.65), transparent);">
                <h2 class="display-5 fw-bold text-white text-center mb-1 about-action-title" style="color: #fff !important;"><?php echo esc_html($action_title); ?></h2>
            </div>
        <?php else: ?>
            <div class="action-title-overlay position-absolute bottom-0 start-0 end-0 d-flex align-items-end justify-content-center p-4" style="background: linear-gradient(to top, rgba(0,0,0,0.65), transparent);">
                <div class="wireframe-box text-white mb-1" style="max-width: 400px; background: transparent; border: 2px dashed rgba(255,255,255,0.7);">ACTION SECTION TITLE</div>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Why 7Sports Exists Section -->
<section class="section-wireframe about-soft-section about-why-section p-0" style="margin-top: 80px;">
    <div class="container-fluid px-0">
        <div class="row align-items-stretch g-4">
            <div class="col-md-6 px-4 py-5 py-md-5">
                <?php if ( $why_title = rwmb_meta( 'why_section_title' ) ): ?>
                    <h2 class="display-6 fw-bold mb-4"><?php echo esc_html($why_title); ?></h2>
                <?php else: ?>
                    <div class="wireframe-box mb-4" style="max-width: 400px;">WHY SECTION TITLE</div>
                <?php endif; ?>
                
                <?php $why_content = rwmb_meta( 'why_content' ); ?>
                <?php if ( $why_content ): ?>
                    <div class="content mb-4">
                        <?php echo wpautop($why_content); ?>
                    </div>
                <?php else: ?>
                    <div class="wireframe-box mb-4">WHY CONTENT</div>
                <?php endif; ?>
                
                <div class="row">
                    <?php 
                    for ($i = 1; $i <= 3; $i++):
                        $stat_number = rwmb_meta("stat_{$i}_number");
                        $stat_label = rwmb_meta("stat_{$i}_label");
                        if ( $stat_number || $stat_label ):
                    ?>
                        <div class="col-4">
                            <div class="stat-box">
                                <?php if ( $stat_number ): ?>
                                    <div class="stat-number"><?php echo esc_html($stat_number); ?></div>
                                <?php else: ?>
                                    <div class="wireframe-box mb-2">NUMBER</div>
                                <?php endif; ?>
                                
                                <?php if ( $stat_label ): ?>
                                    <div class="stat-label"><?php echo esc_html($stat_label); ?></div>
                                <?php else: ?>
                                    <div class="wireframe-box">LABEL</div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php 
                        endif;
                    endfor; 
                    ?>
                </div>
            </div>
            <div class="col-md-6 px-0">
                <?php 
                $why_image = rwmb_meta( 'why_side_image' );
                $why_image_id = sevensports_first_image_id( $why_image );
                if ( $why_image_id ):
                    $why_image_url = wp_get_attachment_image_url( $why_image_id, 'large' );
                ?>
                    <img src="<?php echo esc_url($why_image_url); ?>"
                         alt="Why 7Sports"
                         class="w-100 h-100 why-side-image"
                         style="object-fit: cover; min-height: 420px; display: block;">
                <?php else: ?>
                    <div class="wireframe-box rounded w-100" style="height: 100%; min-height: 400px;">SIDE IMAGE</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Join Team & Bottom CTA Section -->
<section class="section-wireframe about-cta-section" style="background-color: #000; color: #fff; border: none;">
    <div class="about-cta-wave">
        <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0,0 L0,30 Q360,60 720,30 Q1080,0 1440,30 L1440,60 L0,60 Z"/>
        </svg>
    </div>
    <div class="container text-center py-5">
        <?php $join_title = rwmb_meta( 'join_cta_title' ); ?>
        <?php if ( $join_title ): ?>
            <h2 class="display-6 fw-bold mb-3"><?php echo esc_html($join_title); ?></h2>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-3" style="max-width: 500px; background: #333; border-color: #666;">JOIN TEAM TITLE</div>
        <?php endif; ?>
        
        <?php $join_subtitle = rwmb_meta( 'join_cta_subtitle' ); ?>
        <?php if ( $join_subtitle ): ?>
            <p class="mb-4"><?php echo esc_html($join_subtitle); ?></p>
        <?php endif; ?>
        
        <div class="about-cta-buttons-wrap">
        <?php
        $join_btn_text = rwmb_meta( 'join_cta_button_text' );
        $join_btn_link = rwmb_meta( 'join_cta_button_link' );
        if ( $join_btn_text && $join_btn_link ):
        ?>
            <a href="<?php echo esc_url($join_btn_link); ?>" class="about-cta-btn red">
                <?php echo esc_html($join_btn_text); ?>
            </a>
        <?php else: ?>
            <div class="wireframe-box" style="width: 320px; background: #333; border-color: #666;">JOIN BUTTON</div>
        <?php endif; ?>

        <?php
        $bottom_btn_text = rwmb_meta( 'about_bottom_button_text' );
        $bottom_btn_link = rwmb_meta( 'about_bottom_button_link' );
        if ( $bottom_btn_text && $bottom_btn_link ):
        ?>
            <a href="<?php echo esc_url($bottom_btn_link); ?>" class="about-cta-btn">
                <?php echo esc_html($bottom_btn_text); ?>
            </a>
        <?php else: ?>
            <div class="wireframe-box" style="width: 320px; background: #333; border-color: #666;">BOTTOM CTA BUTTON</div>
        <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

</body>
</html>