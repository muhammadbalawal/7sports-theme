<?php
/**
 * Home Page Template - MetaBox Version with Carousels
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

<!-- Hero Section -->
<section class="section-wireframe hero-section text-center py-5">
    <div class="container">
        <?php 
        $hero_logo = rwmb_meta( 'hero_logo' );
        if ( !empty($hero_logo) ):
            $logo_url = wp_get_attachment_image_url( $hero_logo[0], 'full' );
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
        
        <?php $hero_title = rwmb_meta( 'hero_title' ); ?>
        <?php if ( $hero_title ): ?>
            <h1 class="display-3 fw-bold mb-3"><?php echo esc_html($hero_title); ?></h1>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-3" style="max-width: 600px;">HERO TITLE</div>
        <?php endif; ?>
        
        <?php $hero_age = rwmb_meta( 'hero_age_range' ); ?>
        <?php if ( $hero_age ): ?>
            <p class="display-5 fw-bold mb-5"><?php echo esc_html($hero_age); ?></p>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-5" style="max-width: 300px;">AGE RANGE</div>
        <?php endif; ?>
        
        <div class="d-flex flex-wrap gap-3 justify-content-center mb-5">
            <?php 
            $hero_buttons = rwmb_meta( 'hero_buttons' );
            if ( !empty($hero_buttons) ):
                foreach ( $hero_buttons as $button ):
            ?>
                    <a href="<?php echo esc_url($button['button_link']); ?>" 
                       class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">
                        <?php echo esc_html($button['button_text']); ?>
                    </a>
            <?php 
                endforeach;
            else: ?>
                <button class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">BUTTON 1</button>
                <button class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">BUTTON 2</button>
                <button class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">BUTTON 3</button>
                <button class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">BUTTON 4</button>
            <?php endif; ?>
        </div>
        
        <?php $hero_tagline = rwmb_meta( 'hero_tagline' ); ?>
        <?php if ( $hero_tagline ): ?>
            <p class="fs-5 mt-4"><?php echo esc_html($hero_tagline); ?></p>
        <?php else: ?>
            <div class="wireframe-box mx-auto mt-4" style="max-width: 500px;">HERO TAGLINE</div>
        <?php endif; ?>
    </div>
</section>

<!-- Highlights Section -->
<section class="section-wireframe">
    <div class="container">
        <?php 
        $highlights = rwmb_meta( 'highlights' );
        if ( !empty($highlights) ): ?>
            <div class="row g-4">
                <?php foreach ( $highlights as $highlight ): 
                    $image_url = '';
                    if ( !empty($highlight['image']) ) {
                        $image_url = wp_get_attachment_image_url( $highlight['image'][0], 'large' );
                    }
                ?>
                    <div class="col-md-4">
                        <div class="card border border-2 h-100 bg-white">
                            <?php if ( $image_url ): ?>
                                <img src="<?php echo esc_url($image_url); ?>" 
                                     class="card-img-top" 
                                     alt="<?php echo esc_attr($highlight['title']); ?>"
                                     style="height: 250px; object-fit: cover;">
                            <?php else: ?>
                                <div class="wireframe-box" style="height: 250px; margin: 0; border-radius: 0; border-bottom: 2px dashed #999;">
                                    IMAGE
                                </div>
                            <?php endif; ?>
                            <div class="card-body text-center p-4">
                                <?php if ( !empty($highlight['title']) ): ?>
                                    <h3 class="h5 fw-bold mb-0"><?php echo esc_html($highlight['title']); ?></h3>
                                <?php else: ?>
                                    <div class="wireframe-box" style="min-height: 40px;">TITLE</div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="wireframe-box">Click "+ Add Highlight" in WordPress admin to add highlights</div>
        <?php endif; ?>
    </div>
</section>

<!-- Programs Section with Carousel -->
<section class="section-wireframe" style="min-height: 600px;">
    <div class="container">
        <?php $programs_title = rwmb_meta( 'programs_section_title' ); ?>
        <?php if ( $programs_title ): ?>
            <h2 class="display-5 fw-bold text-center mb-5"><?php echo esc_html($programs_title); ?></h2>
        <?php else: ?>
            <div class="wireframe-box mb-5 mx-auto" style="max-width: 400px;">PROGRAMS SECTION TITLE</div>
        <?php endif; ?>
        
        <?php 
        $programs = rwmb_meta( 'program_cards' );
        if ( !empty($programs) ): ?>
            <div id="programsCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php 
                    $first = true;
                    foreach ( $programs as $program ): 
                        $image_url = '';
                        if ( !empty($program['image']) ) {
                            $image_url = wp_get_attachment_image_url( $program['image'][0], 'large' );
                        }
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
                                            <p class="fw-semibold mb-3"><?php echo esc_html($program['age']); ?></p>
                                            <p class="mb-4"><?php echo esc_html($program['description']); ?></p>
                                            <?php if ( !empty($program['link']) ): ?>
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
            <div class="wireframe-box mb-5">Click "+ Add Program" in WordPress admin to add programs</div>
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
        <?php $testimonials_title = rwmb_meta( 'testimonials_title' ); ?>
        <?php if ( $testimonials_title ): ?>
            <h2 class="display-5 fw-bold text-center mb-5"><?php echo esc_html($testimonials_title); ?></h2>
        <?php else: ?>
            <div class="wireframe-box mb-5 mx-auto" style="max-width: 400px;">TESTIMONIALS SECTION TITLE</div>
        <?php endif; ?>
        
        <?php 
        $testimonials = rwmb_meta( 'testimonials' );
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
            <div class="wireframe-box">Click "+ Add Testimonial" in WordPress admin to add testimonials</div>
        <?php endif; ?>
    </div>
</section>

<!-- Messages Importants with Carousel -->
<section class="section-wireframe">
    <div class="container">
        <?php $messages_title = rwmb_meta( 'important_messages_title' ); ?>
        <?php if ( $messages_title ): ?>
            <h2 class="display-6 fw-bold text-center mb-5"><?php echo esc_html($messages_title); ?></h2>
        <?php else: ?>
            <div class="wireframe-box mb-5 mx-auto" style="max-width: 400px;">IMPORTANT MESSAGES TITLE</div>
        <?php endif; ?>
        
        <?php 
        $messages = rwmb_meta( 'important_messages' );
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
                                <?php if ( !empty($message['link']) ): ?>
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
            <div class="wireframe-box">Click "+ Add Message" in WordPress admin to add messages</div>
        <?php endif; ?>
    </div>
</section>

<!-- About Teaser -->
<section class="section-wireframe">
    <div class="container text-center">
        <div class="mx-auto" style="max-width: 700px;">
            <?php $about_title = rwmb_meta( 'about_title' ); ?>
            <?php if ( $about_title ): ?>
                <h2 class="display-6 fw-bold mb-4"><?php echo esc_html($about_title); ?></h2>
            <?php else: ?>
                <div class="wireframe-box mb-4">ABOUT TITLE</div>
            <?php endif; ?>
            
            <?php $about_desc = rwmb_meta( 'about_description' ); ?>
            <?php if ( $about_desc ): ?>
                <p class="mb-5"><?php echo esc_html($about_desc); ?></p>
            <?php else: ?>
                <div class="wireframe-box mb-5">ABOUT DESCRIPTION</div>
            <?php endif; ?>
            
            <a href="<?php echo home_url('/about'); ?>" class="btn btn-outline-dark btn-lg px-5 py-3">
                A propos de nous
            </a>
        </div>
    </div>
</section>

<!-- Footer CTA -->
<section class="section-wireframe">
    <div class="container text-center">
        <?php $footer_cta = rwmb_meta( 'footer_cta_title' ); ?>
        <?php if ( $footer_cta ): ?>
            <h2 class="display-6 fw-bold mb-5"><?php echo esc_html($footer_cta); ?></h2>
        <?php else: ?>
            <div class="wireframe-box mb-5 mx-auto" style="max-width: 400px;">FOOTER CTA TITLE</div>
        <?php endif; ?>
        
        <a href="<?php echo home_url('/find-program'); ?>" class="btn btn-outline-dark btn-lg px-5 py-3">
            S'inscrire
        </a>
    </div>
</section>

<!-- Footer -->
<footer class="py-4 border-top">
    <div class="container text-center">
        <p class="mb-0 text-muted">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>