<?php
/**
 * Home Page Template - Fixed Fields Version
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <style>
        /* Wireframe Styles */
        body { 
            font-family: Arial, sans-serif;
            background: #fff;
            color: #333;
            margin: 0;
            padding: 0;
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
        .section-wireframe {
            border: 3px solid #ccc;
            background: #fafafa;
            padding: 40px 20px;
            margin: 0;
        }
        .hero-section {
            margin-top: 0 !important;
            padding-top: 40px;
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
        .hero-overlay .container {
            position: relative;
            z-index: 1;
        }
        /* Carousel Controls */
        .carousel-control-prev, .carousel-control-next {
            width: 50px;
            height: 50px;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0,0,0,0.5);
            border-radius: 50%;
        }
    </style>
</head>
<body <?php body_class(); ?>>

<?php
// Always read front page meta from the page set as Homepage (Settings → Reading).
$front_page_id = (int) get_option( 'page_on_front' );
$hero_background = $front_page_id ? rwmb_meta( 'hero_background_image', array(), $front_page_id ) : array();
$hero_background_id = sevensports_first_image_id( $hero_background );
$hero_background_url = $hero_background_id ? wp_get_attachment_image_url( $hero_background_id, 'full' ) : '';
?>
<!-- Hero Section -->
<section class="section-wireframe hero-section text-center py-5 <?php echo $hero_background_url ? 'p-0' : ''; ?>">
    <?php if ( $hero_background_url ): ?>
    <div class="hero-image-overlay" style="background-image: url('<?php echo esc_url( $hero_background_url ); ?>');">
        <div class="hero-overlay">
            <div class="container text-center py-5 text-white">
    <?php else: ?>
    <div class="container">
    <?php endif; ?>
        <?php 
        $hero_logo = $front_page_id ? rwmb_meta( 'hero_logo', array(), $front_page_id ) : array();
        $hero_logo_id = sevensports_first_image_id( $hero_logo );
        if ( $hero_logo_id ):
            $logo_url = wp_get_attachment_image_url( $hero_logo_id, 'full' );
        ?>
            <div class="mb-4">
                <img src="<?php echo esc_url($logo_url); ?>" alt="<?php bloginfo('name'); ?>" 
                     class="img-fluid" style="max-height: 150px;">
            </div>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-4" style="width: 200px; height: 150px;">
                LOGO
            </div>
        <?php endif; ?>
        
        <?php $hero_title = $front_page_id ? rwmb_meta( 'hero_title', array(), $front_page_id ) : ''; ?>
        <?php if ( $hero_title ): ?>
            <h1 class="display-3 fw-bold mb-3"><?php echo esc_html($hero_title); ?></h1>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-3" style="max-width: 600px;">HERO TITLE</div>
        <?php endif; ?>
        
        <?php $hero_age = $front_page_id ? rwmb_meta( 'hero_age_range', array(), $front_page_id ) : ''; ?>
        <?php if ( $hero_age ): ?>
            <p class="display-5 fw-bold mb-5"><?php echo esc_html($hero_age); ?></p>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-5" style="max-width: 300px;">AGE RANGE</div>
        <?php endif; ?>
        
        <div class="d-flex flex-wrap gap-3 justify-content-center mb-5">
            <?php 
            // Button 1
            $btn1_text = $front_page_id ? rwmb_meta( 'hero_button_1_text', array(), $front_page_id ) : '';
            $btn1_link = $front_page_id ? rwmb_meta( 'hero_button_1_link', array(), $front_page_id ) : '';
            if ( $btn1_text && $btn1_link ):
            ?>
                <a href="<?php echo esc_url($btn1_link); ?>" 
                   class="btn btn-lg px-4 py-3 <?php echo $hero_background_url ? 'btn-outline-light' : 'btn-outline-dark'; ?>" style="min-width: 200px;">
                    <?php echo esc_html($btn1_text); ?>
                </a>
            <?php endif; ?>
            
            <?php 
            // Button 2
            $btn2_text = $front_page_id ? rwmb_meta( 'hero_button_2_text', array(), $front_page_id ) : '';
            $btn2_link = $front_page_id ? rwmb_meta( 'hero_button_2_link', array(), $front_page_id ) : '';
            if ( $btn2_text && $btn2_link ):
            ?>
                <a href="<?php echo esc_url($btn2_link); ?>" 
                   class="btn btn-lg px-4 py-3 <?php echo $hero_background_url ? 'btn-outline-light' : 'btn-outline-dark'; ?>" style="min-width: 200px;">
                    <?php echo esc_html($btn2_text); ?>
                </a>
            <?php endif; ?>
            
            <?php 
            // Button 3
            $btn3_text = $front_page_id ? rwmb_meta( 'hero_button_3_text', array(), $front_page_id ) : '';
            $btn3_link = $front_page_id ? rwmb_meta( 'hero_button_3_link', array(), $front_page_id ) : '';
            if ( $btn3_text && $btn3_link ):
            ?>
                <a href="<?php echo esc_url($btn3_link); ?>" 
                   class="btn btn-lg px-4 py-3 <?php echo $hero_background_url ? 'btn-outline-light' : 'btn-outline-dark'; ?>" style="min-width: 200px;">
                    <?php echo esc_html($btn3_text); ?>
                </a>
            <?php endif; ?>
            
            <?php 
            // Button 4
            $btn4_text = $front_page_id ? rwmb_meta( 'hero_button_4_text', array(), $front_page_id ) : '';
            $btn4_link = $front_page_id ? rwmb_meta( 'hero_button_4_link', array(), $front_page_id ) : '';
            if ( $btn4_text && $btn4_link ):
            ?>
                <a href="<?php echo esc_url($btn4_link); ?>" 
                   class="btn btn-lg px-4 py-3 <?php echo $hero_background_url ? 'btn-outline-light' : 'btn-outline-dark'; ?>" style="min-width: 200px;">
                    <?php echo esc_html($btn4_text); ?>
                </a>
            <?php endif; ?>
            
            <?php 
            // Show placeholder buttons if none are filled
            if ( !$btn1_text && !$btn2_text && !$btn3_text && !$btn4_text ):
            ?>
                <button class="btn btn-lg px-4 py-3 <?php echo $hero_background_url ? 'btn-outline-light' : 'btn-outline-dark'; ?>" style="min-width: 200px;">BUTTON 1</button>
                <button class="btn btn-lg px-4 py-3 <?php echo $hero_background_url ? 'btn-outline-light' : 'btn-outline-dark'; ?>" style="min-width: 200px;">BUTTON 2</button>
                <button class="btn btn-lg px-4 py-3 <?php echo $hero_background_url ? 'btn-outline-light' : 'btn-outline-dark'; ?>" style="min-width: 200px;">BUTTON 3</button>
                <button class="btn btn-lg px-4 py-3 <?php echo $hero_background_url ? 'btn-outline-light' : 'btn-outline-dark'; ?>" style="min-width: 200px;">BUTTON 4</button>
            <?php endif; ?>
        </div>
        
        <?php $hero_tagline = $front_page_id ? rwmb_meta( 'hero_tagline', array(), $front_page_id ) : ''; ?>
        <?php if ( $hero_tagline ): ?>
            <p class="fs-5 mt-4"><?php echo esc_html($hero_tagline); ?></p>
        <?php else: ?>
            <div class="wireframe-box mx-auto mt-4" style="max-width: 500px;">HERO TAGLINE</div>
        <?php endif; ?>
    </div>
    <?php if ( $hero_background_url ): ?>
        </div>
        </div>
    <?php endif; ?>
</section>

<!-- Highlights Section -->
<section class="section-wireframe">
    <div class="container">
        <?php 
        // Check if any highlights are filled
        $has_highlights = false;
        for ($i = 1; $i <= 3; $i++) {
            if ( $front_page_id && rwmb_meta("highlight_{$i}_title", array(), $front_page_id) ) {
                $has_highlights = true;
                break;
            }
        }
        
        if ( $has_highlights ): ?>
            <div class="row g-4">
                <?php for ($i = 1; $i <= 3; $i++): 
                    $title = $front_page_id ? rwmb_meta("highlight_{$i}_title", array(), $front_page_id) : '';
                    $image = $front_page_id ? rwmb_meta("highlight_{$i}_image", array(), $front_page_id) : array();
                    
                    if ( $title ): // Only show if title exists
                        $image_id = sevensports_first_image_id( $image );
                        $image_url = $image_id ? wp_get_attachment_image_url( $image_id, 'large' ) : '';
                ?>
                    <div class="col-md-4">
                        <div class="card border border-2 h-100 bg-white">
                            <?php if ( $image_url ): ?>
                                <img src="<?php echo esc_url($image_url); ?>" 
                                     class="card-img-top" 
                                     alt="<?php echo esc_attr($title); ?>"
                                     style="height: 250px; object-fit: cover;">
                            <?php else: ?>
                                <div class="wireframe-box" style="height: 250px; margin: 0; border-radius: 0; border-bottom: 2px dashed #999;">
                                    IMAGE
                                </div>
                            <?php endif; ?>
                            <div class="card-body text-center p-4">
                                <h3 class="h5 fw-bold mb-0"><?php echo esc_html($title); ?></h3>
                            </div>
                        </div>
                    </div>
                <?php 
                    endif;
                endfor; ?>
            </div>
        <?php else: ?>
            <div class="wireframe-box">Add highlights in WordPress admin (Highlights Section)</div>
        <?php endif; ?>
    </div>
</section>

<!-- Programs Section with Carousel -->
<section class="section-wireframe" style="min-height: 600px;">
    <div class="container">
        <?php $programs_title = $front_page_id ? rwmb_meta( 'programs_section_title', array(), $front_page_id ) : ''; ?>
        <?php if ( $programs_title ): ?>
            <h2 class="display-5 fw-bold text-center mb-5"><?php echo esc_html($programs_title); ?></h2>
        <?php else: ?>
            <div class="wireframe-box mb-5 mx-auto" style="max-width: 400px;">PROGRAMS SECTION TITLE</div>
        <?php endif; ?>
        
        <?php 
        // Collect programs
        $programs = array();
        for ($i = 1; $i <= 3; $i++) {
            $name = $front_page_id ? rwmb_meta("program_{$i}_name", array(), $front_page_id) : '';
            if ( $name ) {
                $programs[] = array(
                    'name' => $name,
                    'age' => rwmb_meta("program_{$i}_age", array(), $front_page_id),
                    'description' => rwmb_meta("program_{$i}_description", array(), $front_page_id),
                    'link' => rwmb_meta("program_{$i}_link", array(), $front_page_id),
                    'image' => rwmb_meta("program_{$i}_image", array(), $front_page_id),
                );
            }
        }
        
        if ( !empty($programs) ): ?>
            <div id="programsCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                    $first = true;
                    foreach ( $programs as $program ): 
                        $program_image_id = sevensports_first_image_id( $program['image'] );
                        $image_url = $program_image_id ? wp_get_attachment_image_url( $program_image_id, 'large' ) : '';
                    ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6">
                                    <div class="card border border-2 h-100 bg-white">
                                        <?php if ( $image_url ): ?>
                                            <img src="<?php echo esc_url($image_url); ?>" 
                                                 class="card-img-top" 
                                                 alt="<?php echo esc_attr($program['name']); ?>"
                                                 style="height: 300px; object-fit: cover;">
                                        <?php else: ?>
                                            <div class="wireframe-box" style="height: 300px; margin: 0; border-radius: 0;">PROGRAM IMAGE</div>
                                        <?php endif; ?>
                                        <div class="card-body p-4">
                                            <h3 class="h5 fw-bold mb-2"><?php echo esc_html($program['name']); ?></h3>
                                            <?php if ( $program['age'] ): ?>
                                                <p class="fw-semibold mb-3"><?php echo esc_html($program['age']); ?></p>
                                            <?php endif; ?>
                                            <?php if ( $program['description'] ): ?>
                                                <p class="mb-4"><?php echo esc_html($program['description']); ?></p>
                                            <?php endif; ?>
                                            <?php if ( $program['link'] ): ?>
                                                <a href="<?php echo esc_url($program['link']); ?>" class="btn btn-outline-dark">Learn More</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                    $first = false;
                    endforeach; ?>
                </div>
                <?php if ( count($programs) > 1 ): ?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#programsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#programsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <div class="wireframe-box mb-5">Add programs in WordPress admin (Programs Section)</div>
        <?php endif; ?>
        
        <!-- View All Programs Button -->
        <div class="text-center mt-4">
            <a href="<?php echo home_url('/programs'); ?>" class="btn btn-outline-dark btn-lg px-5 py-3">
                View All Programs
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section with Carousel -->
<section class="section-wireframe">
    <div class="container">
        <?php $testimonials_title = $front_page_id ? rwmb_meta( 'testimonials_title', array(), $front_page_id ) : ''; ?>
        <?php if ( $testimonials_title ): ?>
            <h2 class="display-5 fw-bold text-center mb-5"><?php echo esc_html($testimonials_title); ?></h2>
        <?php else: ?>
            <div class="wireframe-box mb-5 mx-auto" style="max-width: 400px;">TESTIMONIALS SECTION TITLE</div>
        <?php endif; ?>
        
        <?php 
        // Collect testimonials
        $testimonials = array();
        for ($i = 1; $i <= 3; $i++) {
            $author = $front_page_id ? rwmb_meta("testimonial_{$i}_author", array(), $front_page_id) : '';
            if ( $author ) {
                $testimonials[] = array(
                    'rating' => rwmb_meta("testimonial_{$i}_rating", array(), $front_page_id),
                    'text' => rwmb_meta("testimonial_{$i}_text", array(), $front_page_id),
                    'author' => $author,
                );
            }
        }
        
        if ( !empty($testimonials) ): ?>
            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                    $first = true;
                    foreach ( $testimonials as $testimonial ): 
                        $stars = str_repeat('★', intval($testimonial['rating']));
                    ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6">
                                    <div class="border border-2 p-5 bg-white text-center">
                                        <div class="mb-3 fs-4"><?php echo $stars; ?></div>
                                        <p class="fst-italic mb-4 fs-5"><?php echo esc_html($testimonial['text']); ?></p>
                                        <p class="fw-bold mb-0"><?php echo esc_html($testimonial['author']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                    $first = false;
                    endforeach; ?>
                </div>
                <?php if ( count($testimonials) > 1 ): ?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <div class="wireframe-box">Add testimonials in WordPress admin (Testimonials Section)</div>
        <?php endif; ?>
    </div>
</section>

<!-- Messages Importants with Carousel -->
<section class="section-wireframe">
    <div class="container">
        <?php $messages_title = $front_page_id ? rwmb_meta( 'important_messages_title', array(), $front_page_id ) : ''; ?>
        <?php if ( $messages_title ): ?>
            <h2 class="display-6 fw-bold text-center mb-5"><?php echo esc_html($messages_title); ?></h2>
        <?php else: ?>
            <div class="wireframe-box mb-5 mx-auto" style="max-width: 400px;">IMPORTANT MESSAGES TITLE</div>
        <?php endif; ?>
        
        <?php 
        // Collect messages
        $messages = array();
        for ($i = 1; $i <= 2; $i++) {
            $location = $front_page_id ? rwmb_meta("message_{$i}_location", array(), $front_page_id) : '';
            if ( $location ) {
                $messages[] = array(
                    'location' => $location,
                    'message' => rwmb_meta("message_{$i}_text", array(), $front_page_id),
                    'link' => rwmb_meta("message_{$i}_link", array(), $front_page_id),
                );
            }
        }
        
        if ( !empty($messages) ): ?>
            <div id="messagesCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                    $first = true;
                    foreach ( $messages as $message ): ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <div class="border border-3 p-5 bg-white">
                                <h3 class="h2 fw-bold text-center mb-3"><?php echo esc_html($message['location']); ?></h3>
                                <p class="h5 text-center mb-3"><?php echo esc_html($message['message']); ?></p>
                                <?php if ( $message['link'] ): ?>
                                    <p class="text-center">
                                        <a href="<?php echo esc_url($message['link']); ?>" class="text-decoration-underline fw-bold">
                                            voir plus
                                        </a>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php 
                    $first = false;
                    endforeach; ?>
                </div>
                <?php if ( count($messages) > 1 ): ?>
                    <div class="carousel-indicators">
                        <?php for ($i = 0; $i < count($messages); $i++): ?>
                            <button type="button" data-bs-target="#messagesCarousel" data-bs-slide-to="<?php echo $i; ?>" 
                                    class="<?php echo ($i === 0) ? 'active' : ''; ?>" aria-label="Slide <?php echo ($i + 1); ?>"></button>
                        <?php endfor; ?>
                    </div>
                <?php endif; ?>
            </div>
        <?php else: ?>
            <div class="wireframe-box">Add messages in WordPress admin (Important Messages Section)</div>
        <?php endif; ?>
    </div>
</section>

<!-- Call to Action Buttons -->
<section class="section-wireframe">
    <div class="container text-center">
        <div class="d-flex flex-wrap gap-3 justify-content-center">
            <?php 
            // CTA Button 1
            $cta1_text = $front_page_id ? rwmb_meta( 'cta_button_1_text', array(), $front_page_id ) : '';
            $cta1_link = $front_page_id ? rwmb_meta( 'cta_button_1_link', array(), $front_page_id ) : '';
            if ( $cta1_text && $cta1_link ):
            ?>
                <a href="<?php echo esc_url($cta1_link); ?>" 
                   class="btn btn-outline-dark btn-lg px-5 py-3" style="min-width: 250px;">
                    <?php echo esc_html($cta1_text); ?>
                </a>
            <?php else: ?>
                <div class="wireframe-box" style="min-width: 250px;">CTA BUTTON 1</div>
            <?php endif; ?>
            
            <?php 
            // CTA Button 2
            $cta2_text = $front_page_id ? rwmb_meta( 'cta_button_2_text', array(), $front_page_id ) : '';
            $cta2_link = $front_page_id ? rwmb_meta( 'cta_button_2_link', array(), $front_page_id ) : '';
            if ( $cta2_text && $cta2_link ):
            ?>
                <a href="<?php echo esc_url($cta2_link); ?>" 
                   class="btn btn-outline-dark btn-lg px-5 py-3" style="min-width: 250px;">
                    <?php echo esc_html($cta2_text); ?>
                </a>
            <?php else: ?>
                <div class="wireframe-box" style="min-width: 250px;">CTA BUTTON 2</div>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>