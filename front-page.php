<?php
/**
 * Home Page Template - Clean Wireframe with Real Buttons
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
    </style>
</head>
<body <?php body_class(); ?>>

<!-- Hero Section -->
<section class="section-wireframe hero-section text-center py-5">
    <div class="container">
        <?php 
        $hero_logo = get_field('hero_logo');
        if ($hero_logo): ?>
            <div class="mb-4">
                <img src="<?php echo esc_url($hero_logo); ?>" alt="<?php bloginfo('name'); ?>" 
                     class="img-fluid" style="max-height: 150px;">
            </div>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-4" style="width: 200px; height: 150px;">
                LOGO
            </div>
        <?php endif; ?>
        
        <?php if (get_field('hero_title')): ?>
            <h1 class="display-3 fw-bold mb-3">
                <?php the_field('hero_title'); ?>
            </h1>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-3" style="max-width: 600px;">HERO TITLE</div>
        <?php endif; ?>
        
        <?php if (get_field('hero_age_range')): ?>
            <p class="display-5 fw-bold mb-5">
                <?php the_field('hero_age_range'); ?>
            </p>
        <?php else: ?>
            <div class="wireframe-box mx-auto mb-5" style="max-width: 300px;">AGE RANGE</div>
        <?php endif; ?>
        
        <div class="d-flex flex-wrap gap-3 justify-content-center mb-5">
            <?php 
            $btn1_text = get_field('hero_button_1_text');
            $btn1_link = get_field('hero_button_1_link');
            $btn2_text = get_field('hero_button_2_text');
            $btn2_link = get_field('hero_button_2_link');
            $btn3_text = get_field('hero_button_3_text');
            $btn3_link = get_field('hero_button_3_link');
            $btn4_text = get_field('hero_button_4_text');
            $btn4_link = get_field('hero_button_4_link');
            
            if ($btn1_text): ?>
                <a href="<?php echo esc_url($btn1_link); ?>" 
                   class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">
                    <?php echo esc_html($btn1_text); ?>
                </a>
            <?php else: ?>
                <button class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">BUTTON 1</button>
            <?php endif; ?>
            
            <?php if ($btn2_text): ?>
                <a href="<?php echo esc_url($btn2_link); ?>" 
                   class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">
                    <?php echo esc_html($btn2_text); ?>
                </a>
            <?php else: ?>
                <button class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">BUTTON 2</button>
            <?php endif; ?>
            
            <?php if ($btn3_text): ?>
                <a href="<?php echo esc_url($btn3_link); ?>" 
                   class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">
                    <?php echo esc_html($btn3_text); ?>
                </a>
            <?php else: ?>
                <button class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">BUTTON 3</button>
            <?php endif; ?>
            
            <?php if ($btn4_text): ?>
                <a href="<?php echo esc_url($btn4_link); ?>" 
                   class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">
                    <?php echo esc_html($btn4_text); ?>
                </a>
            <?php else: ?>
                <button class="btn btn-outline-dark btn-lg px-4 py-3" style="min-width: 200px;">BUTTON 4</button>
            <?php endif; ?>
        </div>
        
        <?php if (get_field('hero_tagline')): ?>
            <p class="fs-5 mt-4">
                <?php the_field('hero_tagline'); ?>
            </p>
        <?php else: ?>
            <div class="wireframe-box mx-auto mt-4" style="max-width: 500px;">HERO TAGLINE</div>
        <?php endif; ?>
    </div>
</section>

<!-- Highlights Section -->
<section class="section-wireframe">
    <div class="container">
        <div class="row g-4">
            <!-- Highlight 1 -->
            <div class="col-md-4">
                <div class="card border border-2 h-100 bg-white">
                    <?php 
                    $highlight_1_image = get_field('highlight_1_image');
                    if ($highlight_1_image): ?>
                        <img src="<?php echo esc_url($highlight_1_image); ?>" 
                             class="card-img-top" 
                             alt="Highlight 1"
                             style="height: 250px; object-fit: cover;">
                    <?php else: ?>
                        <div class="wireframe-box" style="height: 250px; margin: 0; border-radius: 0; border-bottom: 2px dashed #999;">
                            IMAGE 1
                        </div>
                    <?php endif; ?>
                    <div class="card-body text-center p-4">
                        <?php if (get_field('highlight_1_title')): ?>
                            <h3 class="h5 fw-bold mb-0"><?php the_field('highlight_1_title'); ?></h3>
                        <?php else: ?>
                            <div class="wireframe-box" style="min-height: 40px;">TITLE 1</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <!-- Highlight 2 -->
            <div class="col-md-4">
                <div class="card border border-2 h-100 bg-white">
                    <?php 
                    $highlight_2_image = get_field('highlight_2_image');
                    if ($highlight_2_image): ?>
                        <img src="<?php echo esc_url($highlight_2_image); ?>" 
                             class="card-img-top" 
                             alt="Highlight 2"
                             style="height: 250px; object-fit: cover;">
                    <?php else: ?>
                        <div class="wireframe-box" style="height: 250px; margin: 0; border-radius: 0; border-bottom: 2px dashed #999;">
                            IMAGE 2
                        </div>
                    <?php endif; ?>
                    <div class="card-body text-center p-4">
                        <?php if (get_field('highlight_2_title')): ?>
                            <h3 class="h5 fw-bold mb-0"><?php the_field('highlight_2_title'); ?></h3>
                        <?php else: ?>
                            <div class="wireframe-box" style="min-height: 40px;">TITLE 2</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <!-- Highlight 3 -->
            <div class="col-md-4">
                <div class="card border border-2 h-100 bg-white">
                    <?php 
                    $highlight_3_image = get_field('highlight_3_image');
                    if ($highlight_3_image): ?>
                        <img src="<?php echo esc_url($highlight_3_image); ?>" 
                             class="card-img-top" 
                             alt="Highlight 3"
                             style="height: 250px; object-fit: cover;">
                    <?php else: ?>
                        <div class="wireframe-box" style="height: 250px; margin: 0; border-radius: 0; border-bottom: 2px dashed #999;">
                            IMAGE 3
                        </div>
                    <?php endif; ?>
                    <div class="card-body text-center p-4">
                        <?php if (get_field('highlight_3_title')): ?>
                            <h3 class="h5 fw-bold mb-0"><?php the_field('highlight_3_title'); ?></h3>
                        <?php else: ?>
                            <div class="wireframe-box" style="min-height: 40px;">TITLE 3</div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section class="section-wireframe" style="min-height: 600px;">
    <div class="container">
        <?php if (get_field('programs_section_title')): ?>
            <h2 class="display-5 fw-bold text-center mb-5">
                <?php the_field('programs_section_title'); ?>
            </h2>
        <?php else: ?>
            <div class="wireframe-box mb-5 mx-auto" style="max-width: 400px;">PROGRAMS SECTION TITLE</div>
        <?php endif; ?>
        
        <div class="row g-4 mb-5">
            <!-- Program 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border border-2 h-100 bg-white">
                    <?php 
                    $program_1_image = get_field('program_1_image');
                    if ($program_1_image): ?>
                        <img src="<?php echo esc_url($program_1_image); ?>" 
                             class="card-img-top" 
                             alt="Program 1"
                             style="height: 250px; object-fit: cover;">
                    <?php else: ?>
                        <div class="wireframe-box" style="height: 250px; margin: 0; border-radius: 0;">PROGRAM IMAGE 1</div>
                    <?php endif; ?>
                    <div class="card-body p-4">
                        <?php if (get_field('program_1_name')): ?>
                            <h3 class="h5 fw-bold mb-2"><?php the_field('program_1_name'); ?></h3>
                        <?php else: ?>
                            <div class="wireframe-box mb-2" style="min-height: 30px;">PROGRAM NAME 1</div>
                        <?php endif; ?>
                        
                        <?php if (get_field('program_1_age')): ?>
                            <p class="fw-semibold mb-3"><?php the_field('program_1_age'); ?></p>
                        <?php else: ?>
                            <div class="wireframe-box mb-3" style="min-height: 25px;">AGE GROUP 1</div>
                        <?php endif; ?>
                        
                        <?php if (get_field('program_1_description')): ?>
                            <p class="mb-4"><?php the_field('program_1_description'); ?></p>
                        <?php else: ?>
                            <div class="wireframe-box mb-4" style="min-height: 60px;">DESCRIPTION 1</div>
                        <?php endif; ?>
                        
                        <?php 
                        $program_1_link = get_field('program_1_link');
                        if ($program_1_link): ?>
                            <a href="<?php echo esc_url($program_1_link); ?>" class="btn btn-outline-dark">Learn More</a>
                        <?php else: ?>
                            <button class="btn btn-outline-dark">Learn More</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <!-- Program 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border border-2 h-100 bg-white">
                    <?php 
                    $program_2_image = get_field('program_2_image');
                    if ($program_2_image): ?>
                        <img src="<?php echo esc_url($program_2_image); ?>" 
                             class="card-img-top" 
                             alt="Program 2"
                             style="height: 250px; object-fit: cover;">
                    <?php else: ?>
                        <div class="wireframe-box" style="height: 250px; margin: 0; border-radius: 0;">PROGRAM IMAGE 2</div>
                    <?php endif; ?>
                    <div class="card-body p-4">
                        <?php if (get_field('program_2_name')): ?>
                            <h3 class="h5 fw-bold mb-2"><?php the_field('program_2_name'); ?></h3>
                        <?php else: ?>
                            <div class="wireframe-box mb-2" style="min-height: 30px;">PROGRAM NAME 2</div>
                        <?php endif; ?>
                        
                        <?php if (get_field('program_2_age')): ?>
                            <p class="fw-semibold mb-3"><?php the_field('program_2_age'); ?></p>
                        <?php else: ?>
                            <div class="wireframe-box mb-3" style="min-height: 25px;">AGE GROUP 2</div>
                        <?php endif; ?>
                        
                        <?php if (get_field('program_2_description')): ?>
                            <p class="mb-4"><?php the_field('program_2_description'); ?></p>
                        <?php else: ?>
                            <div class="wireframe-box mb-4" style="min-height: 60px;">DESCRIPTION 2</div>
                        <?php endif; ?>
                        
                        <?php 
                        $program_2_link = get_field('program_2_link');
                        if ($program_2_link): ?>
                            <a href="<?php echo esc_url($program_2_link); ?>" class="btn btn-outline-dark">Learn More</a>
                        <?php else: ?>
                            <button class="btn btn-outline-dark">Learn More</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <!-- Program 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="card border border-2 h-100 bg-white">
                    <?php 
                    $program_3_image = get_field('program_3_image');
                    if ($program_3_image): ?>
                        <img src="<?php echo esc_url($program_3_image); ?>" 
                             class="card-img-top" 
                             alt="Program 3"
                             style="height: 250px; object-fit: cover;">
                    <?php else: ?>
                        <div class="wireframe-box" style="height: 250px; margin: 0; border-radius: 0;">PROGRAM IMAGE 3</div>
                    <?php endif; ?>
                    <div class="card-body p-4">
                        <?php if (get_field('program_3_name')): ?>
                            <h3 class="h5 fw-bold mb-2"><?php the_field('program_3_name'); ?></h3>
                        <?php else: ?>
                            <div class="wireframe-box mb-2" style="min-height: 30px;">PROGRAM NAME 3</div>
                        <?php endif; ?>
                        
                        <?php if (get_field('program_3_age')): ?>
                            <p class="fw-semibold mb-3"><?php the_field('program_3_age'); ?></p>
                        <?php else: ?>
                            <div class="wireframe-box mb-3" style="min-height: 25px;">AGE GROUP 3</div>
                        <?php endif; ?>
                        
                        <?php if (get_field('program_3_description')): ?>
                            <p class="mb-4"><?php the_field('program_3_description'); ?></p>
                        <?php else: ?>
                            <div class="wireframe-box mb-4" style="min-height: 60px;">DESCRIPTION 3</div>
                        <?php endif; ?>
                        
                        <?php 
                        $program_3_link = get_field('program_3_link');
                        if ($program_3_link): ?>
                            <a href="<?php echo esc_url($program_3_link); ?>" class="btn btn-outline-dark">Learn More</a>
                        <?php else: ?>
                            <button class="btn btn-outline-dark">Learn More</button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- View All Programs Button -->
        <div class="text-center mt-4">
            <a href="<?php echo home_url('/programs'); ?>" class="btn btn-outline-dark btn-lg px-5 py-3">
                View All Programs
            </a>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="section-wireframe">
    <div class="container">
        <?php if (get_field('testimonials_title')): ?>
            <h2 class="display-5 fw-bold text-center mb-5">
                <?php the_field('testimonials_title'); ?>
            </h2>
        <?php else: ?>
            <div class="wireframe-box mb-5 mx-auto" style="max-width: 400px;">TESTIMONIALS SECTION TITLE</div>
        <?php endif; ?>
        
        <div class="row g-4">
            <!-- Testimonial 1 -->
            <div class="col-md-4">
                <div class="border border-2 p-4 bg-white">
                    <?php 
                    $rating_1 = get_field('testimonial_1_rating');
                    if ($rating_1):
                        $stars = str_repeat('★', intval($rating_1));
                    ?>
                        <div class="mb-3"><?php echo $stars; ?></div>
                    <?php else: ?>
                        <div class="wireframe-box mb-3" style="min-height: 30px;">RATING 1</div>
                    <?php endif; ?>
                    
                    <?php if (get_field('testimonial_1_text')): ?>
                        <p class="fst-italic mb-4"><?php the_field('testimonial_1_text'); ?></p>
                    <?php else: ?>
                        <div class="wireframe-box mb-4" style="min-height: 100px;">TESTIMONIAL TEXT 1</div>
                    <?php endif; ?>
                    
                    <?php if (get_field('testimonial_1_author')): ?>
                        <p class="fw-bold mb-0"><?php the_field('testimonial_1_author'); ?></p>
                    <?php else: ?>
                        <div class="wireframe-box" style="min-height: 30px;">AUTHOR 1</div>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="col-md-4">
                <div class="border border-2 p-4 bg-white">
                    <?php 
                    $rating_2 = get_field('testimonial_2_rating');
                    if ($rating_2):
                        $stars = str_repeat('★', intval($rating_2));
                    ?>
                        <div class="mb-3"><?php echo $stars; ?></div>
                    <?php else: ?>
                        <div class="wireframe-box mb-3" style="min-height: 30px;">RATING 2</div>
                    <?php endif; ?>
                    
                    <?php if (get_field('testimonial_2_text')): ?>
                        <p class="fst-italic mb-4"><?php the_field('testimonial_2_text'); ?></p>
                    <?php else: ?>
                        <div class="wireframe-box mb-4" style="min-height: 100px;">TESTIMONIAL TEXT 2</div>
                    <?php endif; ?>
                    
                    <?php if (get_field('testimonial_2_author')): ?>
                        <p class="fw-bold mb-0"><?php the_field('testimonial_2_author'); ?></p>
                    <?php else: ?>
                        <div class="wireframe-box" style="min-height: 30px;">AUTHOR 2</div>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="col-md-4">
                <div class="border border-2 p-4 bg-white">
                    <?php 
                    $rating_3 = get_field('testimonial_3_rating');
                    if ($rating_3):
                        $stars = str_repeat('★', intval($rating_3));
                    ?>
                        <div class="mb-3"><?php echo $stars; ?></div>
                    <?php else: ?>
                        <div class="wireframe-box mb-3" style="min-height: 30px;">RATING 3</div>
                    <?php endif; ?>
                    
                    <?php if (get_field('testimonial_3_text')): ?>
                        <p class="fst-italic mb-4"><?php the_field('testimonial_3_text'); ?></p>
                    <?php else: ?>
                        <div class="wireframe-box mb-4" style="min-height: 100px;">TESTIMONIAL TEXT 3</div>
                    <?php endif; ?>
                    
                    <?php if (get_field('testimonial_3_author')): ?>
                        <p class="fw-bold mb-0"><?php the_field('testimonial_3_author'); ?></p>
                    <?php else: ?>
                        <div class="wireframe-box" style="min-height: 30px;">AUTHOR 3</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Messages Importants -->
<section class="section-wireframe">
    <div class="container">
        <?php if (get_field('important_messages_title')): ?>
            <h2 class="display-6 fw-bold text-center mb-5">
                <?php the_field('important_messages_title'); ?>
            </h2>
        <?php else: ?>
            <div class="wireframe-box mb-5 mx-auto" style="max-width: 400px;">IMPORTANT MESSAGES TITLE</div>
        <?php endif; ?>
        
        <div class="border border-3 p-5 bg-white">
            <?php if (get_field('message_location')): ?>
                <h3 class="h2 fw-bold text-center mb-3"><?php the_field('message_location'); ?></h3>
            <?php else: ?>
                <div class="wireframe-box mb-3" style="min-height: 50px;">MESSAGE LOCATION</div>
            <?php endif; ?>
            
            <?php if (get_field('message_text')): ?>
                <p class="h5 text-center mb-3"><?php the_field('message_text'); ?></p>
            <?php else: ?>
                <div class="wireframe-box mb-3" style="min-height: 60px;">MESSAGE TEXT</div>
            <?php endif; ?>
            
            <?php 
            $msg_link = get_field('message_link');
            if ($msg_link): ?>
                <p class="text-center">
                    <a href="<?php echo esc_url($msg_link); ?>" class="text-decoration-underline fw-bold">
                        voir plus
                    </a>
                </p>
            <?php else: ?>
                <div class="wireframe-box" style="min-height: 30px;">MESSAGE LINK</div>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- About Teaser -->
<section class="section-wireframe">
    <div class="container text-center">
        <div class="mx-auto" style="max-width: 700px;">
            <?php if (get_field('about_title')): ?>
                <h2 class="display-6 fw-bold mb-4">
                    <?php the_field('about_title'); ?>
                </h2>
            <?php else: ?>
                <div class="wireframe-box mb-4">ABOUT TITLE</div>
            <?php endif; ?>
            
            <?php if (get_field('about_description')): ?>
                <p class="mb-5">
                    <?php the_field('about_description'); ?>
                </p>
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
        <?php if (get_field('footer_cta_title')): ?>
            <h2 class="display-6 fw-bold mb-5">
                <?php the_field('footer_cta_title'); ?>
            </h2>
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