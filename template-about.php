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
        .hero-image-overlay {
            position: relative;
            background-size: cover;
            background-position: center;
            min-height: 300px;
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
        .coach-card {
            text-align: center;
            background: #fff;
            border: 2px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            transition: transform 0.3s;
        }
        .coach-card:hover {
            transform: translateY(-5px);
        }
        .coach-photo {
            width: 100%;
            aspect-ratio: 1;
            object-fit: cover;
            border-radius: 12px;
            margin: 0 auto 15px;
            display: block;
        }
        .coach-position {
            color: #dc3545;
            font-weight: 600;
            font-size: 0.95rem;
        }
        .coach-photo-placeholder {
            width: 100%;
            aspect-ratio: 1;
            border-radius: 12px;
            min-height: 180px;
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
            border: 2px solid #ddd;
            border-radius: 8px;
            padding: 30px;
            text-align: center;
            height: 100%;
        }
        .value-icon {
            width: 60px;
            height: 60px;
            margin: 0 auto 20px;
        }
        .stat-box {
            text-align: center;
            padding: 30px;
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
                        <h1 class="display-3 fw-bold"><?php echo esc_html($hero_title); ?></h1>
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
<section class="section-wireframe">
    <div class="container">
        <?php $founder_title = rwmb_meta( 'founder_section_title' ); ?>
        <?php if ( $founder_title ): ?>
            <h2 class="display-5 fw-bold text-center mb-3"><?php echo esc_html($founder_title); ?></h2>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-3" style="max-width: 500px;">FOUNDER SECTION TITLE</div>
        <?php endif; ?>
        
        <?php $founder_subtitle = rwmb_meta( 'founder_subtitle' ); ?>
        <?php if ( $founder_subtitle ): ?>
            <p class="text-center mb-5"><?php echo esc_html($founder_subtitle); ?></p>
        <?php endif; ?>
        
        <div class="row align-items-center">
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
            
            <div class="col-md-8">
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
<section class="section-wireframe">
    <div class="container">
        <?php $coaches_title = rwmb_meta( 'coaches_section_title' ); ?>
        <?php if ( $coaches_title ): ?>
            <h2 class="display-5 fw-bold text-center mb-5"><?php echo esc_html($coaches_title); ?></h2>
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
                <?php 
                endif;
            endfor; 
            ?>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="section-wireframe">
    <div class="container">
        <?php $values_title = rwmb_meta( 'values_section_title' ); ?>
        <?php if ( $values_title ): ?>
            <h2 class="display-5 fw-bold text-center mb-5"><?php echo esc_html($values_title); ?></h2>
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
<section class="section-wireframe">
    <div class="container">
        <?php 
        $action_title = rwmb_meta( 'action_section_title' );
        $action_image = rwmb_meta( 'action_main_image' );
        $action_image_id = sevensports_first_image_id( $action_image );
        $action_image_url = $action_image_id ? wp_get_attachment_image_url( $action_image_id, 'large' ) : '';
        ?>
        <div class="action-image-wrap position-relative rounded overflow-hidden" style="max-height: 500px;">
            <?php if ( $action_image_url ): ?>
                <img src="<?php echo esc_url($action_image_url); ?>" 
                     alt="7 Sports En Action" 
                     class="img-fluid w-100"
                     style="height: 500px; object-fit: cover; display: block;">
            <?php else: ?>
                <div class="wireframe-box" style="height: 500px;">ACTION IMAGE</div>
            <?php endif; ?>
            <?php if ( $action_title ): ?>
                <div class="action-title-overlay position-absolute top-0 start-0 end-0 d-flex align-items-center justify-content-center p-4">
                    <h2 class="display-5 fw-bold text-white text-center mb-0"><?php echo esc_html($action_title); ?></h2>
                </div>
            <?php else: ?>
                <div class="action-title-overlay position-absolute top-0 start-0 end-0 d-flex align-items-center justify-content-center p-4">
                    <div class="wireframe-box text-white mb-0" style="max-width: 400px;">ACTION SECTION TITLE</div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Why 7Sports Exists Section -->
<section class="section-wireframe">
    <div class="container">
        <div class="row align-items-stretch g-4">
            <div class="col-md-6">
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
            <div class="col-md-6">
                <?php 
                $why_image = rwmb_meta( 'why_side_image' );
                $why_image_id = sevensports_first_image_id( $why_image );
                if ( $why_image_id ):
                    $why_image_url = wp_get_attachment_image_url( $why_image_id, 'large' );
                ?>
                    <img src="<?php echo esc_url($why_image_url); ?>" 
                         alt="Why 7Sports" 
                         class="img-fluid rounded w-100 h-100"
                         style="object-fit: cover; min-height: 400px;">
                <?php else: ?>
                    <div class="wireframe-box rounded w-100" style="height: 100%; min-height: 400px;">SIDE IMAGE</div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Join Team & Bottom CTA Section -->
<section class="section-wireframe" style="background-color: #000; color: #fff;">
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
        
        <div class="d-flex flex-column align-items-center gap-3">
        <?php 
        $join_btn_text = rwmb_meta( 'join_cta_button_text' );
        $join_btn_link = rwmb_meta( 'join_cta_button_link' );
        if ( $join_btn_text && $join_btn_link ):
        ?>
            <a href="<?php echo esc_url($join_btn_link); ?>" 
               class="btn btn-light btn-lg px-5 py-3" 
               style="min-width: 300px;">
                <?php echo esc_html($join_btn_text); ?>
            </a>
        <?php else: ?>
            <div class="wireframe-box" style="width: 300px; background: #333; border-color: #666;">JOIN BUTTON</div>
        <?php endif; ?>
        
        <?php 
        $bottom_btn_text = rwmb_meta( 'about_bottom_button_text' );
        $bottom_btn_link = rwmb_meta( 'about_bottom_button_link' );
        if ( $bottom_btn_text && $bottom_btn_link ):
        ?>
            <a href="<?php echo esc_url($bottom_btn_link); ?>" 
               class="btn btn-danger btn-lg px-5 py-3" 
               style="min-width: 300px;">
                <?php echo esc_html($bottom_btn_text); ?>
            </a>
        <?php else: ?>
            <div class="wireframe-box" style="width: 300px; background: #333; border-color: #666;">BOTTOM CTA BUTTON</div>
        <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>

</body>
</html>